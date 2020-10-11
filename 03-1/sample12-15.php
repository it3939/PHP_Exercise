<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-15</title>
</head>
<body>
<h3>HTMLタグ</h3>
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        // 受け取ったデータをそのまま表示
        print "【そのまま表示】<br />";
        print $_POST['inputdata'] . "<br /><br />\n\n";

        // すべてのHTMLタグを除去して表示
        print "【すべてのHTMLタグを除去して表示】<br />";
        print strip_tags($_POST['inputdata'] . "<br>") . "<br /><br />\n\n";

        // HTMLタグを除去し、bタグは残して表示
        print "【HTMLタグを除去し、bタグは残して表示】<br />";
        print strip_tags($_POST['inputdata'], "<b>") . "<br /><br />\n\n";
    }
?>
    <hr>
    テキストボックスに値を入力して[送信]ボタンをクリックしてください。<br />
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <input size="90" type="text" name="inputdata">
        <input type="submit" name="btnExec" value="送信">
    </form>       
</body>
</html>