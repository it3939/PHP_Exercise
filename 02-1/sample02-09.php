<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample02-09</title>
</head>
<body>
<h3>乱数</h3>
<?php
    // 乱数ジェネレータを初期化
    //srand(microtime() * 1000000);
    srand((double)microtime() * 1000000); // シード値をdouble型にキャストしてエラーを消す

    // 1から6までの乱数を5回生成
    for ($count=1; $count<=5; $count++) {
        print rand(1, 6);
        print "<br />";
    }
?>
</body>
</html>

