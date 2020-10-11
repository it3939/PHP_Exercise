<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-30</title>  
</head> 
<h3>ページのスタイル（CSS）を動的に切り替える</h3>
<?php
    ini_set('display_errors', "Off"); // XAMPPではセッション変数を破棄すると未定義扱いの警告エラーが出るため非表示にする

    // 送信されたスタイルの番号を取得
    $stylenum = $_POST['style'];
    // スタイルの番号に応じてスタイルシートを切り替える
    switch ($stylenum) {
        case 1:  // スタイル1
            $cssfile = "css/cssfile_1.css";
            break;
        case 2:  // スタイル2
            $cssfile = "css/cssfile_2.css";
            break;
        case 3:  // スタイル3
            $cssfile = "css/cssfile_3.css";
            break;
        default: // 未指定時
            $cssfile = "css/cssfile_1.css";
            $stylenum = 1;
            break;
    }
?>
<link rel="stylesheet" href="<?= $cssfile ?>">
<body>
    <hr>
    <table border="1">
        <tr>
            <td with="500">
                インターネットの普及に伴い、その開発環境として、Webサーバ側で動的にコンテンツを生成するサーバサイドスクリプトプログラムも一般的なものになりました。<br />
                Perl, C, Java, ASP, ASP.NETなど、多くの言語や開発環境が登場し、それによって構築されたサイトも相当な数に上っています。<br />
                検索や投稿、データ編集などの機能を持ったサイトでは、もはや不可欠な存在となっています。<br />
                <b>え、Golangどこいったん？？？</b>
            </td>
        </tr>
    </table>
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST" name="myform">
        <br />【スタイルを選択してください】<br />
        <select size="3" name="style" onclick="document.myform.submit();">
            <option value="1" <?= ($stylenum==1?" selected":"") ?>> スタイル１ </option>
            <option value="2" <?= ($stylenum==2?" selected":"") ?>> スタイル２ </option>
            <option value="3" <?= ($stylenum==3?" selected":"") ?>> スタイル３ </option> 
        <select>
    </form>        
</body>
</html>