<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample02-08</title>
</head>
<body>
<h3>小数の切り上げ</h3>
<?php
    $data = 1254.56789;

    // 小数点以下を切り上げ
    print ceil($data);
    print "<br />";
    
    // 小数第2位で切り上げ
    print ceil($data * 100) / 100;
    print "<br />";

    // 百の位で切り上げ
    print ceil($data / 100) * 100;
    print "<br />";
?>
</body>
</html>
