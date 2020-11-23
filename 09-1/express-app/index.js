/* モジュールのロード */
var express = require('express'); // expressオブジェクトを用意
var app = express(); // アプリケーション(appオブジェクト)の作成

/* ルーティングを設定 */
app.get('/', (req, res) => {
    res.send('Welcome to Express!');
});

/* 待ち受け開始 */
app.listen(3000, () => {
    console.log('Start server port:3000');
});