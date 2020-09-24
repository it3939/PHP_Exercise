<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-12</title>
</head>
<body>
<h3>コメントアウト</h3>
<?php
    // 変数data1に文字列データを代入して、その内容を画面に出力
    $data1 = "Hello, World! <br />";
    print $data1;

    /* コメントを利用することによってデバッグ用などにプログラムの一部を実行させないようにすることもできる
    次の2行は実行されない
    */
    /*
    $data2 = 12;
    print $data2;
    */    

    /* このように1行のコメントとして使うこともできる */
?>
</body>
</html>
