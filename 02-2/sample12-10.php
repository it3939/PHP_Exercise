<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-10</title>
</head>
<body>
<h3>複数選択可能なチェックボックス</h3>
<?php
    if (isset($_POST['btnExec'])) {
        // 送信ボタンがクリックされたとき
        // チェックボックス1~4のループ
        for ($num=1; $num<=4; $num++) {
            if (isset($_POST['inputdata'.$num])) {
                print "$num 個目のチェックボックスはON<br />";
            }
            else {
                print "$num 個目のチェックボックスはOFF<br />";
            }
        }
        print "<br/ ><br/ >";
    }
?>
    <hr>
    開発経験のある言語にチェックを付けて[送信]ボタンをクリックしてください。（複数選択可）
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <p><input type="checkbox" name="inputdata1">PHP</p>
        <p><input type="checkbox" name="inputdata2">TypeScript</p>
        <p><input type="checkbox" name="inputdata3">Go</p>
        <p><input type="checkbox" name="inputdata4">Rust</p>
        <input type="submit" name="btnExec" value="送信">
    </form>        
</body>
</html>