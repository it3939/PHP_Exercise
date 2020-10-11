<?php
    // セッションを開始
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample14-03</title>
</head>
<body>
<h3>セッション変数のデータを読み込む</h3>
<?php
    ini_set('display_errors', "Off"); // XAMPPではセッション変数を破棄すると未定義扱いの警告エラーが出るため非表示にする

    // セッション変数のデータを読み込み
    for ($i=1; $i<=5; $i++) {
        print "セッション " . $i . " => " . $_SESSION['sesdata'.$i] . "<br />";
    }
?>
</body>
</html>