<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample02-06</title>
</head>
<body>
<h3>小数点の四捨五入</h3>
<?php
    $data = 1254.56789;

    // 小数点以下を四捨五入して整数化された値を出力
    print round($data);
    print "<br />";

    // 小数第2位を四捨五入
    print round($data * 100) / 100;
    print "<br />";

    // 小数第4位を四捨五入
    print round($data * 10000) / 10000;
    print "<br />";

    // 百の位を四捨五入
    print round($data / 100) * 100;
    print "<br />";
?>
</body>
</html>
