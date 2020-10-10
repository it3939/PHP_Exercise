<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-32</title>  
</head> 
<?php





    
?>
<body>
    <hr>
    <form action="<?= $_SERVER['SCRIPT_SELF'] ?>" method="POST" name="myform">
        <select size="3" name="area" onclick="document.myform.submit();">
            <option value="1" <?= ($areanum==1?" selected":"") ?>> 南米 </option>
            <option value="2" <?= ($areanum==2?" selected":"") ?>> ヨーロッパ </option>
            <option value="3" <?= ($areanum==3?" selected":"") ?>> アフリカ </option> 
        <select>
        <?= $strlistbox ?>    
    </form>        
</body>
</html>