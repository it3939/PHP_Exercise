<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-01</title>
</head>
<body>
<h3>POST</h3>
<?php
    print "POSTで送信されたデータは<br />";
    print "<br />";

    // スーパーグローバル変数で「名前」を受け取る
    print "名前：" . $_POST['username'] . "<br />";

    // グローバル変数で「住所」を受け取る
    print "住所：" . $_POST['useraddress'] . "<br />";
?>
</body>
</html>
