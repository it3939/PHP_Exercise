<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample13-02</title>
</head>
<body>
<h3>クッキーからデータを読み込む</h3>
<?php
    ini_set('display_errors', "Off"); // XAMPPではセッション変数を破棄すると未定義扱いの警告エラーが出るため非表示にする
    
    if (strlen($_COOKIE['mycookiedata']) > 0) {
        // クッキーにデータが保存されている時
        // クッキーデータを取得（データ名 = mycookiedata）
        $data = $_COOKIE['mycookiedata'];
        // クッキーの生データを出力
        print $data . "<br /><br />";

        // データを分解して保存時のデータを復元
        parse_str($data);
        // 分解後のデータを出力
        print "『クッキーに保存されていたデータ』<br />";
        print $ck_data1 . "<br />";
        print $ck_data2 . "<br />";
    } else {
        // クッキーにデータがないとき
        print "データはクッキーに保存されていません。";
    }
?>
</body>
</html>