<?php

//*------------------------------*// ① のブロック 開始
error_reporting(E_ALL);           // エラーを表示
ini_set('display_errors', "Off"); // 画面上のエラーを非表示設定にする
$data_dir = "bbs-data";           // 掲示板データを保存するフォルダ                 

//*------------------------------*// ② のブロック 開始
if (isset($_POST['save'])) {
    $error_message = array();

    if (!strlen($_POST['body'])) {
        $error_message[] = "本文を入力してください。";
    }

    if (!count($error_message)) {
        $title = str_replace("|", "|", $_POST['title']);
        $name = str_replace("|", "|", $_POST['name']);
        $body = str_replace("|", "|", $_POST['body']);
        $date = date("Y-m-d H:i:s");

        $file_body = $date . "||" . $title . "||" . $name . "||" . $body;
        $file_name = sprintf("%s/%s.txt", $data_dir, date("Ymd-his"));
        if (!file_put_contents($file_name, $file_body)) {
            $error_message[] = "ファイルの書き込みに失敗しました。";
        }
    }
}

//*------------------------------*// ③ のブロック 開始
$file_list = glob(sprintf("%s/*.txt", $data_dir));
rsort($file_list);

//*------------------------------*// ④ のブロック 開始
$bbs_list = array();
foreach ($file_lst as $file) {
    $contents = file_get_contents($file);
    list($date, $title, $name, $body) = explode("||", $contents);
    $bbs = array();
    $bbs["date"] = $date;
    $bbs["name"] = $name;
    $bbs["title"] = $title;
    $bbs["body"] = $body;
    $bbs_list[] = $bbs;
}

//*------------------------------*// ⑤ のブロック 開始
require_once("samrty/Smarty.class.php");
$smarty = new Smarty();               // Smartyインスタンス（$smartyオブジェクト）を作成

$smarty->template_dir = "templates";  // テンプレートディレクトリの指定        
$smarty->compile_dir = "templates_c"; // コンパイルディレクトリの指定

//*------------------------------*// ⑥ のブロック 開始
/* テンプレート変数に割り当てる */
$smarty->assing("error_message", $error_message);
$smarty->assing("bbs_list", $bbs_list);
$smarty->display("bbs.html");         // テンプレートを表示

?>