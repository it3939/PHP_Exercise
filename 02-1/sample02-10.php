<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample02-10</title>
</head>
<body>
<h3>乱数によるパスワード生成</h3>
<?php
    // 乱数ジェネレータを初期化
    //srand(microtime() * 1000000);
    srand((double)microtime() * 1000000); // シード値をdouble型にキャストしてエラーを消す

    // 全部で10個のパスワードを生成するループ
    for ($passcount=1; $passcount<=10; $passcount++) {

        $password="";

        // 1から9までの乱数を5回生成してパスワードに追加
        for ($count=1; $count<=5; $count++) {
            $password = $password . rand(1, 9);
        }

        // AからZまでの乱数を5回生成してパスワードに追加
        for ($count=1; $count<=5; $count++) {
            $password = $password . chr(rand(65, 90));
            /* chr(rand(low, high))
             *  65~90: 大文字
             * 97~122: 小文字
             */
        }

        print $password;
        print "<br />";
    }
?>
</body>
</html>

