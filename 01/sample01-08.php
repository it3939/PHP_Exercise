<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-08</title>
</head>
<body>
<h3>可変変数</h3>
<?php
    $data1 = "Hello, World!<br />";
    $data2 = "data1";

    print $data1;
    print $data2;

    print "<br />";
    print $$data2;    // Hello, World!
    print ${$data2};  // Hello, World!
    
    /********************/
    $a = "Hello,";
    $$a = "World!";
    print "$a ${$a}"; // Hello, World!
    /********************/
?>
</body>
</html>
