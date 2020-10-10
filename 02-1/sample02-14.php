<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample02-14</title>
</head>
<body>
<h3>最小値</h3>
<?php
    // 1, 12, 34, 21, 9 の中の最小値を出力
    print min(1, 12, 34, 21, 9);
    print "<br />";

    // 42, 67, 55, 33, 7, 22 の中の最小値を出力
    print min(42, 67, 55, 33, 7, 22);
    print "<br />";

    // $data1と$data2の小さい方の値を出力
    $data1 = 30;
    $data2 = 20;
    print min($data1, $data2);
    print "<br />";
?>
</body>
</html>

