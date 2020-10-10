<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-22</title>
</head>
<body>
<h3>switch文</h3>
<?php
    // 1~10までのループ
    for ($count=1; $count<=10; $count++) {
        print $count . ": ";
        switch ($count) {
            case 1:
                print "★";
                break;
            case 2:
                print "☆";
                break;
            case 3:
                print "●";
                break;
            case 4:
                print "○";
                break;
            default:
                print "×";
                break;
        }
        print "<br />";
    }
?>   
</body>
</html>
