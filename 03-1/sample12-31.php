<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-31</title>
</head> 
<h3>2つのリストボックスのリストを連動させる</h3>
<?php
    ini_set('display_errors', "Off"); // XAMPPではセッション変数を破棄すると未定義扱いの警告エラーが出るため非表示にする

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
                                <option value='11'>ブラジル</option>
                                <option value='12'>アルゼンチン</option>
                                <option value='13'>ウルグアイ</option>
                          </select>";
            break;     
        case 2: // ヨーロッパ
            $strlistbox = "<select size='4' name='team' onclick='document.myform.submit();'>
                                <option value='21'>イタリア</option>
                                <option value='22'>フランス</option>
                                <option value='23'>イングランド</option>
                                <option value='24'>オランダ</option>
                          </select>";
            break;                             
        case 3:  // アフリカ
            $strlistbox = "<select size='2' name='team' onclick='document.myform.submit();'>
                                <option value='31'>ナイジェリア</option>
                                <option value='32'>カメルーン</option>
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