<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample12-26</title>
</head>
<body>
<h3>複数のファイルをまとめてアップロード</h3>
<?php
    if (isset($_POST['btnExec'])) {
        // 実行ボタンがクリックされたとき

        // 4つのアップロードファイルを処理するループ
        for ($count=0; $count<4; $count++) {
            if (strlen($_FILES['uploadfile']['name'][$count]) > 0) {
                // 画像ファイルがアップロードされたとき
                // アップロードされたファイルの情報を取得
                $fileinfo = pathinfo($_FILES['uploadfile']['name'][$count]);
                // ファイルの拡張子を取得して大文字に変換
                $fileext = strtoupper($fileinfo['extension']);

                // エラーなし
                $errflag = True;
                $errmsg = "";
                /* 確認 */
                if ($_FILES['uploadfile']['size'][$count] > 102400) {
                    // アップロードファイルのサイズ上限を確認
                    $errmsg .= "ファイルサイズが大き過ぎます。100MB以下にしてください。<br />";
                    $errflag = False;
                } elseif ($_FILES['uploadfile']['size'][$count] == 0) {
                    // アップロードファイルのサイズ下限を確認
                    $errmsg .= "ファイルが存在しない、または空です。<br />";
                    $errflag = False;
                } elseif ($fileext != "GIF" and $fileext != "JPG") {
                    // アップロードファイルの拡張子を確認
                    $errmsg .= "対象ファイルは .gif または .jpg のみです。<br />";
                    $errflag = False;
                } else {
                    // アップロードされたファイルを正規に配置するパスを設定
                    // ここではimagesディレクトリの下に 「"upf_" + 元の名前」で配置
                    /* 注意：imagesディレクトリに実行権限を与えておく sudo chmod -R 777 images/ */
                    $movetofile = "images/upf_" . $_FILES['uploadfile']['name'][$count];
                    // アップロードされたテンポラリファイルを正規の場所に移動
                    if (!move_uploaded_file($_FILES['uploadfile']['tmp_name'][$count], $movetofile)) {
                        $errmsg .= "ファイルのアップロードに失敗しました。<br />";
                        $errflag = False;
                    }
                }

                /* 実行 */
                if ($errflag) {
                    // 正常にアップロードされたときはアップロード画像を表示
                    print "正常にアップロードが完了しました。<br/ >";
                    print $_FILES['uploadfile']['name'][$count] . "<br/ >";
                    print "<img src='$movetofile'><br /><br /><br />";
                } else {
                    // いずれかのエラーがあったとき
                    // エラーメッセージを表示
                    print $errmsg . "<br /><br /><br />";
                    // アップロードされたテンポラリファイルを削除
                    @unlink($_FILES['uploadfile']['tmp_name'][$count]);
                }
            } else {
                print "アップロードするファイルが指定されていません。<br /><br /><br />";
            }
        }
        print "<br /><br />";
    }
?>
    <hr>
    アップロードする画像ファイルを指定して[実行]ボタンをクリックしてください。
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <p><input type="file" name="uploadfile[]" size="60"></p>
        <p><input type="file" name="uploadfile[]" size="60"></p>
        <p><input type="file" name="uploadfile[]" size="60"></p>
        <p><input type="file" name="uploadfile[]" size="60"></p>
        <input type="submit" name="btnExec" value="実行">
    </form>    
</body>
</html>