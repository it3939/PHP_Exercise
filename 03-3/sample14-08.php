<?php
    // セッションを開始
    session_start();

    // 現在のセッションIDを取得
    $oldsesid = session_id();

    // セッションIDを変更（現在のセッションIDを新しく生成したものと置き換える）
    session_regenerate_id();

    // 新しいセッションIDを取得
    $newsesid = session_id();    
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample14-08</title>
</head>
<body>
<h3>セッションIDを変更</h3>
<?php    
    // 現在のセッションIDを表示
    print "【現在のセッションID】<br />";
    print $oldsesid . "<br /><br />";

    // 新しいセッション名を表示
    print "【新しいセッションID】<br />";
    print $newsesid . "<br /><br />";    
?>
</body>
</html>