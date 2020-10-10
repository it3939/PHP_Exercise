<?php
    // セッションを開始
    session_start();
    // ユーザIDがセッション変数に保存されているか確認する
    if (!empty($_SESSION['sesuserid'])) {
        // セッション変数が設定されているとき
        print "<html lang=\"ja\">\n";
        print "<head>\n";
        print "<meta charset=\"UTF-8\">\n";
        print "<title>sample14-09-2</title>\n";
        print "</head>\n";
        print "<body><p>\n";
        print "あなたのユーザIDは「" . $_SESSION['sesuserid'] . "」です。<br />";
        print "<br />";
        print "*************************************************<br />";
        print "*************************************************<br />";
        print "**  ここにユーザのメインコンテンツ  **<br />";
        print "*************************************************<br />";
        print "*************************************************<br />";
        print "</p></body></html>";
    } else {
        // セッション変数が設定されていないとき
        // sample14-09-1.phpへリダイレクト
        header("location: sample14-09-1.php");
        exit();
    }
?>