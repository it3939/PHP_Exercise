## リスト
- `sample01-01`：__print文__
- `sample01-02`：__echo__
- `sample01-03`：__文字列の代入__
- `sample01-04`：__型__
- `sample01-05`：__連結__
- `sample01-06`：__define__
- `sample01-07`：__特殊文字 / エスケープ__
- `sample01-08`：__可変変数__  
  - `$$hoge`
- `sample01-09`：__PHP / HTML__
- `sample01-10`：__ショートタグ__
  - `<?php echo` = `<?=`
- `sample01-11`：__代入__
- `sample01-12`：__コメントアウト__
- `sample01-13`：__for文__
- `sample01-14`：__while文__
- `sample01-15`：__do-while文__
- `sample01-16`：__if文__
- `sample01-17`：__if-else文__
- `sample01-18`：__PHPとHTMLの組み合わせ__
  - 標準
  ```php
  if () {
  } else if () {
  } else
  ```
  - 短縮
  ```php
  if() : ?
  else : ?
  endif;
  ```
- `sample01-19`：__短縮if文__
- `sample01-20`：__比較演算子__
  - `=`：イコール
  - `<>`：ノットイコール
- `sample01-21`：__条件演算子__
- `sample01-22`：__switch文__
- `sample01-23`：__break__
  - ループからの離脱
- `sample01-24`：__exit その1__
  - スクリプトの終了
- `sample01-25`：__exit その2__
- `sample01-26`：__エラー表示設定__
  - `ini_set('display_errors', "On");` or `ini_set('display_errors', 1);`：エラーを表示
  - `ini_set('display_errors', "Off");` or `ini_set('display_errors', 0);`：エラーを非表示
  - `error_reporting(1)` or `error_reporting(E_ALL)`：エラーを表示
  - `error_reporting(0)`：エラーを非表示
  - `@`：エラー制御演算子
    - 生成されたエラーメッセージを無視する
