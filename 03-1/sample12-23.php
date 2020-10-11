<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-23</title>
</head>
<body>
<h3>URLエンコードされたデータを元に戻す</h3>
<?php
    if (isset($_GET['btnExec'])) {
        // 送信ボタンがクリックされたとき
        // 受け取ったクエリ文字列をそのまま表示
        print "【受け取ったクエリ文字列を表示】<br />";
        print $_SERVER['QUERY_STRING'] . "<br /><br />";

        // クエリ文字列を元に戻して表示
        print "【クエリ文字列を元に戻して表示】<br />";
        print urldecode($_SERVER['QUERY_STRING']) . "<br /><br />";

        // スーパグローバル変数で表示
        print "【スーパグローバル変数で表示】<br />";
        print $_GET['inputdata'] . "<br />";
        print $_GET['btnExec'] . "<br /><br />";
    }  
?>
    <hr>
    テキストボックスに値を入力して[送信]ボタンをクリックしてください。
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="GET">
        <input size="40" type="text" name="inputdata">
        <input type="submit" name="btnExec" value="送信">
    </form>    
</body>
</html>