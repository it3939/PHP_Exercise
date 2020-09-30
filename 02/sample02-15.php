<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample02-15</title>
</head>
<body>
<h3>べき乗</h3>
<?php
    // 1024の1乗を出力
    print "1キロバイトは ";
    print number_format(pow(1024, 1));
    print " バイト<br />";

    // 1024の2乗を出力
    print "1メガバイトは ";
    print number_format(pow(1024, 2));
    print " バイト<br />";

    // 1024の3乗を出力
    print "1ギガバイトは ";
    print number_format(pow(1024, 3));
    print " バイト<br />";

    // 1024の4乗を出力
    print "1テラバイトは ";
    print number_format(pow(1024, 4));
    print " バイト<br />";
?>
</body>
</html>
