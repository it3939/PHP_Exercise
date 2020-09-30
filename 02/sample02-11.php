<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample02-11</title>
</head>
<body>
<h3>ランダムに画像を表示</h3>
<?php
    // 乱数ジェネレータを初期化
    //srand(microtime() * 1000000);
    srand((double)microtime() * 1000000); // シード値をdouble型にキャストしてエラーを消す

    // 5つの画像ファイルを表示するループ
    for ($count=1; $count<=5; $count++) {
        // 1~9の乱数を生成
        $imagefile = rand(1, 9);
        // 生成された乱数から画像ファイル名を組み立て
        $imagefile = "image" . $imagefile . ".gif";
        // HTMLのimgタグで画像ファイルを出力
        print "<img src='images/$imagefile' hspace='2'>";
    }
?>
</body>
</html>

