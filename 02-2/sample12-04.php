<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-04</title>
</head>
<body>
<h3>変数受け取り</h3>
<?php
    ini_set('display_errors', "On");
    // 受け取った変数をrcv_で始める変数名に展開
    extract($_REQUEST, EXTR_SKIP|EXTR_PREFIX_ALL|EXTR_REFS, "rcv");
    /*** flagsパラメータ
     * EXTR_SKIP：衝突があった場合、存在する変数は上書きされない
     * EXTR_PREFIX_ALL：全ての変数の前に prefix を付ける
     * EXTR_REFS：変数を参照として展開する
     ***/
    print "送信されたデータは<br />";

    print "名前：" . $rcv_username . "<br />";
    print "住所：" . $rcv_useraddress . "<br />";
?>
</body>
</html>