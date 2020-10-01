<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-21</title>
</head>
<body>
<h3>条件演算子</h3>
<?php
    $data = 3;

    // 1~10までのループ
    for ($count=1; $count<=10; $count++) {
        print $count . ": ";
        // $countが5以下かつ$data以下なら●マークを追加
        if ($count<=5 and $count <= $data) {
            print "●";
        } 
        // $countが8以上または$data以下なら○マークを追加
        if ($count>=8 or $count <= $data) {
            print "○";
        }
        // $countが8~10の間なら▼マークを追加
        if ($count>=8 and $count <= 10) {
            print "▼";
        } 
        // $countが8~10の間でなければ▽マークを追加
        if ( !($count>=8 and $count <= 10) ) {
            print "▽";
        }
        print "<br />";
    }
?>   
</body>
</html>
