<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample14-09-1</title>
</head>
<body>
<h3>1. セッション変数を使ってユーザIDを使い回す</h3>
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        // パスワードが正しいか確認する
        if ($_POST['password'] == "12345") {
            // セッション開始
            session_start();
            // セッション変数にユーザIDを保持
            $_SESSION['sesuserid'] = $_POST['userid'];
            // sample14-09-2.phpへリダイレクト
            header("location: sample14-09-2.php");
            exit();
        } else {
            print "パスワードが間違っています。<br /><br />";
        }
    }
?>
    <hr>
    ユーザIDとパスワードを入力して[送信]ボタンをクリックしてください。
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <p>ユーザID：<input sizse="20" type="text" name="userid"></p>
        <p>パスワード：<input sizse="15" type="password" name="password"></p>
        <input type="submit" name="btnExec" value="送信">
    </form>    
</body>
</html>    