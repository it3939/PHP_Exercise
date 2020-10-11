<?php
    // 前のセッション名を保存
    $oldsession = session_name("ORIGINALSESSION");
    // セッションを開始
    session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample14-07</title>
</head>
<body>
<h3>セッション名を変更</h3>
<?php    
    // 前のセッション名を表示
    print "【前のセッション名】<br />";
    print $oldsession . "<br /><br />";

    // 現在のセッション名を表示
    print "【現在のセッション名】<br />";
    print session_name() . "<br /><br />";
?>
</body>
</html>