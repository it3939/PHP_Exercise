<?php
    // 閲覧しているブラウザの情報を取得・表示
    $useragent = $_SERVER['HTTP_USER_AGENT'];

    // ブラウザの種類によってリダイレクト先を切り替える
    if (strlen(strpos($useragent, "MSIE")) > 0) {
        // Internet Explorer
        header("location: html/sample12-34_IE.html");
    } elseif (strlen(strpos($useragent, "Chrome")) > 0) {
        // Chrome
        header("location: html/sample12-34_Cr.html");
    } elseif (strlen(strpos($useragent, "Safari")) > 0) {
        // Safari
        header("location: html/sample12-34_Sf.html");
    } elseif(strlen(strpos($useragent, "Mozilla")) > 0) {
        // NetscapeやMozilla互換ブラウザ
        header("location: html/sample12-34_NN.html");
    } else {
        // その他の環境
        header("location: html/sample12-34.html");
    }
?>
