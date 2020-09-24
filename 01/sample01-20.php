<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-20</title>
</head>
<body>
<h3>比較演算子</h3>
<?php
    // 1~10までのループ
    for ($count=1; $count<=10; $count++) {
        print $count . ": ";
        // $countが5なら●マークを追加
        if ($count == 5) {
            print "●";
        }
        // $countが5より大きければ▼マークを追加
        if ($count > 5) {
            print "▼";
        }
        // $countが5以上なら▽マークを追加
        if ($count >= 5) {
            print "▽";
        }
        // $countが3より小さければ■マークを追加    
        if ($count < 3) {
            print "■";
        }
        // $countが3以下なら□マークを追加
        if ($count <= 3) {
            print "□";
        }
        // $countが7でなければ★マークを追加
        if ($count <> 7) {
            print "★";
        }
        print "<br />";
    }
?>   
</body>
</html>
