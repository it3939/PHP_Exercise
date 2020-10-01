<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample02-07</title>
</head>
<body>
<h3>小数の切り捨て</h3>
<?php
    $data = 1254.56789;

    // 小数点以下を切り捨て
    print floor($data);
    print "<br />";
    
    // 小数第2位より下を切り捨て
    print floor($data * 100) / 100;
    print "<br />";

    // 百の位より下を切り捨て
    print floor($data / 100) * 100;
    print "<br />";
?>
</body>
</html>
