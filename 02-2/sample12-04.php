<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-04</title>
</head>
<body>
<h3>POST / GET</h3>
<?php
    ini_set('display_errors', "On");
    // 受け取った変数をrcv_で始める変数名に展開
    extract($_REQUEST, EXTR_SKIP|EXTR_PREFIX_ALL|EXTR_REFS, "rcv");

    print "送信されたデータは<br />";

    print "名前：" . $rcv_username . "<br />";
    print "住所：" . $rcv_useraddress . "<br />";
?>
</body>
</html>
