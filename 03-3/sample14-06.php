<?php
    // セッションを開始
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample14-06</title>
</head>
<body>
<h3>セッションを終了</h3>
<?php
    ini_set('display_errors', "Off"); // XAMPPではセッション変数を破棄すると未定義扱いの警告エラーが出るため非表示にする

    // セッション変数のデータを読み込み
    for ($i=1; $i<=5; $i++) {
        print "セッション " . $i . " => " . $_SESSION['sesdata'.$i] . "<br />";
    }

    // セッションを終了
    $_SESSION = array();
    session_destroy();

    print "<br />";
    // セッション変数のデータを読み込み
    for ($i=1; $i<=5; $i++) {
        print "セッション " . $i . " => " . $_SESSION['sesdata'.$i] . "<br />";
    }

    // sesdata3の状態を確認
    if (!isset($_SESSION['sesdata3'])) {
        print "セッション変数は使われていません。<br />";
    }
?>
</body>
</html>