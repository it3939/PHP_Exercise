<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-14</title>
</head>
<body>
<h3>クリックされたボタンの調査</h3>
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        print "送信ボタンがクリックされました。<br /><br />";
    }
    elseif (isset($_POST['btnCanel'])) {
        // キャンセルボタンがクリックされたとき
        print "キャンセルボタンがクリックされました。<br /><br />";
    }
?>
    <hr>
    いずれかのボタンをクリックしてください。
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <input type="submit" name="btnExec" value="送信">
        <input type="submit" name="btnCanel" value="キャンセル">
    </form>        
</body>
</html>