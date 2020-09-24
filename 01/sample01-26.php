<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample01-26</title>
</head>
<body>
<h3>エラー表示設定</h3>
<?php    
    //ini_set('display_errors', On);
    ini_set('display_errors', "On");  // 表示
    //ini_set('display_errors', "Off"); // 非表示
    //ini_set('display_errors', 1);     // 表示
    //ini_set('display_errors', 0);     // 非表示
    
    print "テストケース1<br />";
    rmdir("test");

    print "テストケース2<br />";
    error_reporting(0); // 非表示
    //error_reporting(1); // 表示
    rmdir("test");

    print "テストケース3<br />";
    error_reporting(E_ALL); // 表示
    rmdir("test");
        
    print "テストケース4<br />";
    @rmdir("test");
    /**
     * @：エラー制御演算子     
     * 生成されたエラーメッセージを無視する
     */
?>
</body>
</html>