<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-31</title>
</head> 
<?php
    ini_set('display_errors', "Off"); // XAMPPではどうしても $_POST['area'], strlistbox が未定義になるので警告エラーを非表示にする

    if (isset($_POST['team'])) {
        // 右のリストボックスがクリックされたときの処理
        print "選択されたチーム番号は「" . $_POST['team'] . "」です。";
        print "<br /><br />";
    }

    // 送信されたエリアの番号を取得
    $areanum = $_POST['area'];

    // エリア番号に応じてチームのリストボックスのHTMLを組み立てる
    switch ($areanum) {
        case 1: // 南米
            $strlistbox = "<select size='3' name='team' onclick='document.myform.submit();'>
                                <option valu='11'>ブラジル</option>
                                <option valu='12'>アルゼンチン</option>
                                <option valu='13'>ウルグアイ</option>
                          </select>";
            break;     
        case 2: // ヨーロッパ
            $strlistbox = "<select size='4' name='team' onclick='document.myform.submit();'>
                                <option valu='21'>イタリア</option>
                                <option valu='22'>フランス</option>
                                <option valu='23'>イングランド</option>
                                <option valu='24'>オランダ</option>
                          </select>";
            break;                             
        case 3:  // アフリカ
            $strlistbox = "<select size='2' name='team' onclick='document.myform.submit();'>
                                <option valu='31'>ナイジェリア</option>
                                <option valu='32'>カメルーン</option>
                          </select>";
            break;  
        default: // 未指定時
            break;
    }
?>
<body>
    <hr>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" name="myform">
        <select size="3" name="area" onclick="document.myform.submit();">
            <option value="1" <?= ($areanum==1?" selected":"") ?>> 南米 </option>
            <option value="2" <?= ($areanum==2?" selected":"") ?>> ヨーロッパ </option>
            <option value="3" <?= ($areanum==3?" selected":"") ?>> アフリカ </option> 
        <select>
        <?= $strlistbox ?>    
    </form>        
</body>
</html>