const http = require('http');
const fs = require('fs');
const ejs = require('ejs');
const url = require('url');
const qs = require('querystring');

const index_page = fs.readFileSync('./index10.ejs', 'UTF-8');
const style_css = fs.readFileSync('./style.css', 'UTF-8');

var server = http.createServer(getFromClient);

server.listen(3000);
console.log('Server Start!!');

/************************************************/
// createServerの処理
function getFromClient(request, response) {

    var url_parts = url.parse(request.url, true);

    switch (url_parts.pathname) {

        case '/':
            response_index(request, response);
            break;
       
        default: 
            response.writeHead(200, { 'Content-Type': 'text/plain' });
            response.end('no page...');
            break;  

    }
}

// 追加するデータ
var data = { meg: 'no message...' };

// indexのアクセス処理
function response_index(request, response) {
    // POSTアクセス時の処理
    if (request.method == 'POST') {
        var body = '';

        // データ受信のイベント処理
        request.on('data', (data) => {
            body += data;
        });

        // データ受信終了のイベント処理
        request.on('end', () => {
            data = qs.parse(body);
            // クッキーの保存
            setCookie('msg', data.msg, response);
            write_index(request, response);
        });
    } else {
        write_index(request, response);
    }
}

// indexの表示の作成
function write_index(request, response) {
    var msg = "※ 伝言を表示します。";
    var cookie_data = getCookie('msg', request);
    var content = ejs.render(index_page, {
        title: "Index",
        content: msg,
        data: data,
        cookie_data: cookie_data,
    });
    response.writeHead(200, { 'Content-Type': 'text/html' });
    response.write(content);
    response.end();
}

// クッキーの値を設定
function setCookie(key, value, response) {
    var cookie = escape(value); // クッキーに保存するためエスケープ処理する

    response.setHeader('Set-Cookie', [key + '=' + cookie]); // response.setHeader('Set-Cookie', ['キー=値'], ['キー=値'], ...);
}

// クッキーの値を取得
function getCookie(key, request) {
    var cookie_data = request.headers.cookie != undefined ? request.headers.cookie : ''; // 三項演算子
    var data = cookie_data.split(';') // 取得したクッキーデータに含まれる ';' を用いて分割

    for (var i in data) {
        if (data[i].trim().startsWith(key + '=')) { // key + '=' で始まっているかどうかを確認
            var result = data[i].trim().substring(key.length + 1); // 'key='の後のテキスト部分を取り出す
            return unescape(result); // クッキーの形式から通常のテキストに戻す
        }
    }
    return '';
}