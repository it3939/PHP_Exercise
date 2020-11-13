const http = require('http');
const fs = require('fs');
const ejs = require('ejs');
const url = require('url');
const qs = require('querystring');

const index_page = fs.readFileSync('./index9.ejs', 'UTF-8');
const other_page = fs.readFileSync('./other2.ejs', 'UTF-8');
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
           
        case '/other':
            response_other(request, response);
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
            write_index(request, response);
        });
    } else {
        write_index(request, response);
    }
}

// indexの表示の作成
function write_index(request, response) {
    var msg = "※ 伝言を表示します。";
    var content = ejs.render(index_page, {
        title: "Index",
        content: msg,
        data: data,
    });
    response.writeHead(200, { 'Content-Type': 'text/html' });
    response.write(content);
    response.end();
}