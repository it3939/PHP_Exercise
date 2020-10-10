<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-18</title>
</head>
<body>
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        // 受け取ったデータをそのまま表示
        print "【そのまま表示】<br />";
        print $_POST['inputdata'] . "<br /><br />\n\n";

        // 文字列から「\」を取り除いて表示
        print "【文字列から「\」を取り除いて表示】<br />";
        print stripcslashes($_POST['inputdata']) . "<br /><br />";
    }
?>
    <hr>
    テキストボックスに値を入力して[送信]ボタンをクリックしてください。
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <input size="40" type="text" name="inputdata">
        <input type="submit" name="btnExec" value="送信">
    </form>       
</body>
</html>