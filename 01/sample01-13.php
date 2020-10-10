<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-13</title>
</head>
<body>
<h3>for文</h3>
<?php
    // 1~10までのループ
    for ($count=1; $count<=10; $count++) {
        print $count;
        print ",";
    }
    print "<br />";

    // 10から1まで2ずつ減らしながらループ
    for ($count=10; $count>=1; $count=$count-2) {
        print $count;
        print ",";
    }
?>
</body>
</html>
