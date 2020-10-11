<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-27</title>
</head>
<body>
<h3>1. 別ページへ強制ジャンプ</h3>
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        print "送信ボタンがクリックされました。<br /><br />";
    } elseif (isset($_POST['btnCancel'])) {
        // キャンセルボタンがクリックされたとき
        // 別のページへジャンプ
        header("location: sample12-27.html");
        exit();
    }
?>
    <hr>
    いずれかのボタンをクリックしてください。
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <input type="submit" name="btnExec" value="送信">
        <input type="submit" name="btnCancel" value="キャンセル">
    </form>    
</body>
</html>