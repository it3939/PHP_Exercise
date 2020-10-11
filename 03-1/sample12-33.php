<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-33</title>  
</head> 
<h3>アクセスユーザのブラウザ情報を取得</h3>
<?php
    // 閲覧しているブラウザの情報を取得・表示
    print $_SERVER['HTTP_USER_AGENT'] . "<br />";
?>      
</body>
</html>