<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-19</title>
</head>
<body>
<h3>短縮if文</h3>
<?php
    // 1~10までのループ
    for ($count=1; $count<=10; $count++) {
        print $count;
        // $countが5以下なら●マークを追加
        // そうでなければ▼マークを追加
        print ($count <= 5) ? "●" : "▼";
        print "<br />";
    }
?>   
</body>
</html>
