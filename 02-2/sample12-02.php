<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-02</title>
</head>
<body>
<h3>GETメソッド</h3>
<?php
    print "GETで送信されたデータは<br />";
    print "<br />";

    // スーパーグローバル変数で「名前」を受け取る
    print "名前：" . $_GET['username'] . "<br />";

    // グローバル変数で「住所」を受け取る
    print "住所：" . $_GET['useraddress'] . "<br />";
?>
</body>
</html>
