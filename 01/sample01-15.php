<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-15</title>
</head>
<body>
<h3>if文</h3>
<?php
    // 1~10までのループ
    for ($count=1; $count<=10; $count++) {
        print $count;
        if($count <= 5) {
            // $countが5以下ならマークを追加
            print "●";
        }
        print "<br />";
    }
?>
</body>
</html>
