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
<h3>クッキーのデータを削除</h3>
<?php
    ini_set('display_errors', "Off"); // XAMPPではセッション変数を破棄すると未定義扱いの警告エラーが出るため非表示にする

    // クッキーを読み込み
    if (strlen($_COOKIE['mycookiedata']) == 0) {
        // クッキーにデータがないとき
        print "データはクッキーに保存されていません。";
    }
?>
</body>
</html>