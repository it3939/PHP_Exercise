<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-22</title>
</head>
<body>
<h3>受け取ったデータを数値として処理</h3>
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        // 受け取ったデータをそのまま表示
        print "【そのまま表示】<br />";
        print $_POST['inputdata'] . "<br /><br />\n\n";

        // 受け取ったデータを半角数字にして表示
        $rcvdata = mb_convert_kana($_POST['inputdata'], "a", "UTF-8");
        print " 【データを半角数字にして表示】<br />";
        print intval($rcvdata) . "<br /><br />";
    }  
?>
    <hr>
    テキストボックスに全角数字を入力して[送信]ボタンをクリックしてください。
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <input size="40" type="text" name="inputdata">
        <input type="submit" name="btnExec" value="送信">
    </form>    
</body>
</html>