<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-29</title>   
</head>    
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        // ラジオボランに応じてフォントサイズを設定
        switch ($_POST['fontsize']) {
            case 1:  // 小
                $fontsize = "10pt";
                break;
            case 2:  // 中
                $fontsize = "14pt";
                break;
            case 3:  // 大
                $fontsize = "18pt";
                break;
            default: // 未指定時
                $fontsize = "14pt";
                break;
        }
    } else {
        // 初めて呼び出された時
        $fontsize = "14pt";
    }
?>
<style>
    td {
        font-size: <?= $fontsize ?>;
    }
    b {
        color: Skyblue;
    }
</style> 
<body>
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
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <p><input type="radio" name="fontsize" value="1">小</p>
        <p><input type="radio" name="fontsize" value="2">中</p>
        <p><input type="radio" name="fontsize" value="3">大</p>
        <input type="submit" name="btnExec" value="送信">
    </form>        
</body>
</html>