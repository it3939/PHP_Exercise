<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-32</title>  
</head> 
<h3>呼び出し元ページを確認</h3>
<?php
    // リファラを取得して確認する
    if (isset($_SERVER['HTTP_REFERER'])) {
        print "このPHPファイルは、次のURLから呼び出されました。<br />";
        print $_SERVER['HTTP_REFERER'] . "<br /><br />";
        if ($_SERVER['HTTP_REFERER'] == "http://localhost/WebProg_Exercise/03-1/sample12-32.php") {
            print "自分自身のファイルから呼ばれました。<br />";
        }
    }
?>
<body>
    <hr>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="submit" name="btnExec" value="送信">
    </form>        
</body>
</html>