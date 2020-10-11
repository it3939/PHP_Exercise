<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-17</title>
</head>
<body>
<h3>改行タグを追加</h3>
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        // 受け取ったデータをそのまま表示
        print "【そのまま表示】<br />";
        print $_POST['inputdata'] . "<br /><br />\n\n";

        // 改行タグに置換して表示
        print "【改行して表示】<br />";
        print nl2br($_POST['inputdata']) . "<br /><br />";
    }
?>
    <hr>
    テキストボックスに値を入力して[送信]ボタンをクリックしてください。
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <textarea row="6" cols="40" name="inputdata"></textarea>
        <input type="submit" name="btnExec" value="送信">
    </form>       
</body>
</html>