<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-24</title>
</head>
<body>
<h3>exit その1</h3>
<?php
    // 1~10までのループ
    for ($count=1; $count<=10; $count++) {
        print $count . ": ";        
        if ($count <= 5) { // $countが5以下なら●マークを追加
            print "●"; 
        } else {           // $countが5より大きくなった場合、スクリプト終了
            exit();
        }
        print "<br />";
    }
    print "ループ終了！";
?>   
</body>
</html>
