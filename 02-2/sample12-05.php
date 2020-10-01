<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-05</title>
</head>
<body>
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        $name = $_POST['username'];
        $address = $_POST['useraddress'];
        print "送信されたデータは<br />";
        print "<br />";

        print "名前：" . $name . "<br />";
        print "住所：" . $address . "<br />";
        print "<br /><br />";

    }
?>
    <hr>
    名前と住所を入力して[送信]ボタンをクリックしてください。
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <!--値が存在しない場合-->
        <p>名前：<input size="40" type="text" name="username" value="<?= $name ?>"></p>
        <p>住所：<input size="40" type="text" name="useraddress" value="<?= $address ?>"></p>

        <!--値が存在する場合-->
        <!--<p>名前：<input size="40" type="text" name="username" value="GotoRen"></p>-->
        <!--<p>住所：<input size="40" type="text" name="useraddress" value="AIT"></p>-->
        <input type="submit" name="btnExec" value="送信">
    </form>
</body>
</html>
