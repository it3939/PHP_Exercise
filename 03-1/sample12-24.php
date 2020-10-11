<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-24</title>
</head>
<body>
<h3>文字列をURLエンコード</h3>
<?php
    if (isset($_GET['inputdata'])) {
        // inputdata変数が定義されているとき
        // データを受け取る
        $html = $_GET['inputdata'] . "<br />";
    } else {
        // はじめて呼び出されたとき
        // パラメータ部分の文字列を設定
        $parm = "本当はGolangやりてぇわ...。";
        // 文字列をURLエンコードしてリンク全体を組み立てる
        $html = "<a href='" . $_SERVER['PHP_SELF'] . "?inputdata=" . urlencode($parm) . "'>" . "ここをクリックしてください。</a>";
        //echo $_SERVER['PHP_SELF'] . "<br />";
        //echo $_SERVER['SCRIPT_NAME'] . "<br />";;
    }
?>
    <?= $html ?>
</body>
</html>