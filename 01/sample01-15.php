<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-15</title>
</head>
<body>
<h3>do-while文</h3>
<?php
    // カウント用の変数を1に初期設定
    $count = 1;

    // 変数値が10以下の間ループを繰り返す
    do {
        print $count;
        print ",";
        $count++;
    } while ($count <= 10);
?>
</body>
</html>
