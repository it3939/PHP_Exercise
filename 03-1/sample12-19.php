<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-19</title>
</head>
<body>
<h3>受け取ったデータの妥当性を確認</h3>
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        // 受け取った文字列のデータの長さをチェック
        if (strlen($_POST['inputdata']) > 30) {
            print "入力されたホームページアドレスが長すぎます。<br /><br />";
        }

        // データがhttp://から始まっているかチェック
        if (!preg_match("/^http:\/\//", $_POST['inputdata'])) {
            print "ホームページアドレスはhttp://から入力してください。<br /><br />";
        }

        // 受け取ったデータをそのまま表示
        print "【そのまま表示】<br />";
        print $_POST['inputdata'] . "<br /><br />\n\n";
    }
?>
    <hr>
    ホームページアドレスを入力して[送信]ボタンをクリックしてください。
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <input size="50" type="text" name="inputdata" value="http://">
        <input type="submit" name="btnExec" value="送信">
    </form>       
</body>
</html>