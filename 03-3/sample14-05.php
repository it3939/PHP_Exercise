<?php
    // セッションを開始
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample14-05</title>
</head>
<body>
<?php
    ini_set('display_errors', "Off"); // XAMPPではセッション変数を破棄すると未定義扱いの警告エラーが出るため非表示にする
    
    if (isset($_SESSION['sesdata3'])) {
        // セッション変数が設定されているとき
        print $_SESSION['sesdata3'] . "<br />";
    } else {
        // セッション変数が設定されていないとき
        print "セッション変数は使われていません。<br />";
    }

    // セッション変数を破棄
    unset($_SESSION['sesdata3']);

    if (isset($_SESSION['sesdata3'])) {
        // セッション変数が設定されているとき
        print $_SESSION['sesdata3'] . "<br />";
    } else {
        // セッション変数が設定されていないとき
        print "セッション変数は使われていません。<br />";
    }
?>
</body>
</html>