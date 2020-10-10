<?php
    // クッキーを削除
    setcookie("mycookiedata");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample13-03</title>
</head>
<body>
<?php
    ini_set('display_errors', "Off"); // XAMPPではどうしても $_COOKIE['mycookiedata'] が未定義になるので警告エラーを非表示にする

    // クッキーを読み込み
    if (strlen($_COOKIE['mycookiedata']) == 0) {
        // クッキーにデータがないとき
        print "データはクッキーに保存されていません。";
    }
?>
</body>
</html>