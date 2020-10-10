<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-17</title>
</head>
<body>
<h3>if-else文</h3>
<?php
    // 1~10までのループ
    for ($count=1; $count<=10; $count++) {
        print $count;
        if($count <= 5) {
            // $countが5以下なら●マークを追加
            print "●";
        } else if ($count <= 8) {
            // $countが5以下ではないが、8以下なら■マークを追加
            print "■";
        } else {
            // いずれの条件にも一致しない場合、▼マークを追加
            print "▼";
        }
        print "<br />";
    }
?>
</body>
</html>
