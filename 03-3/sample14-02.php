<?php
    // セッションを開始
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample14-02</title>
</head>
<body>
<h3>セッション変数にデータを保存</h3>
<?php
    // セッション変数にデータを代入
    $_SESSION['sesdata1'] = 10;
    $_SESSION['sesdata2'] = "PHP: Hypertext Preprocessor";
    print "セッション変数に「" . $_SESSION['sesdata1'] . "」を保存しました。<br />";
    print "セッション変数に「" . $_SESSION['sesdata2'] . "」を保存しました。<br />";

    // セッション変数にデータを代入
    $_SESSION['sesdata3'] = "技術評論社";
    $_SESSION['sesdata4'] = "東京都新宿区市谷左内町21-13";
    $_SESSION['sesdata5'] = "http://www.gihyo.co.jp/";
    print "セッション変数に「" . $_SESSION['sesdata3'] . "」を保存しました。<br />";
    print "セッション変数に「" . $_SESSION['sesdata4'] . "」を保存しました。<br />";
    print "セッション変数に「" . $_SESSION['sesdata5'] . "」を保存しました。<br />";
?>
</body>
</html>