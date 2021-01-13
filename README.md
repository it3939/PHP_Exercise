# PHP_Exercise
## 💡 Overview
- 2020後期 Webプログラミング及び演習 PHPコード

## ⚡ Usage
- ![#f03c15](https://placehold.it/15/f03c15/000000?text=+) XAMPP（Windows, macOS, Linux）
  - DocumentRoot：`/Applications/XAMPP/xamppfiles/htdocs`
  - MySQL：`/Applications/XAMPP/xamppfiles/bin`
    - `$ mysql -u root -p`
    - Default Pass：[Enter]キー
- ![#c5f015](https://placehold.it/15/c5f015/000000?text=+) MAMP（macOS）
  - DocumentRoot：`/Applications/MAMP/htdocs`
  - MySQL：`/Applications/MAMP/Library/bin`
    - `$ mysql -u root -p`
    - Default Pass：root 
- ![#1589F0](https://placehold.it/15/1589F0/000000?text=+) LAMP（Linux）
  - DocumentRoot：`/var/www/html` 
  - MySQL：`/usr/bin`
    - `$ sudo mysql -u root -p`
    - Default Pass：[Enter]キー
- ![#008000](https://placehold.it/15/008000/000000?text=+) DAMP（Docker）
  - Repository：[https://github.com/GotoRen/docker-apache](https://github.com/GotoRen/docker-apache)
  - DocumentRoot：`docker-apache/htdocs` 
  - MySQL：`$ docker exec -it docker-apache-mysql /bin/bash`
    - `$ mysql -u root -p`
    - Pass：`password`

## 🐘 PHP
### 01：[1] 2020/09/24
- `sample01-01`：print文
- `sample01-02`：echo文
- `sample01-03`：文字列の代入
- `sample01-04`：型
- `sample01-05`：連結
- `sample01-06`：define
- `sample01-07`：特殊文字 / エスケープ
- `sample01-08`：可変変数
- `sample01-09`：PHP / HTML
- `sample01-10`：ショートタグ
- `sample01-11`：代入
- `sample01-12`：コメントアウト
- `sample01-13`：for文
- `sample01-14`：while文
- `sample01-15`：do-while文
- `sample01-16`：if文
- `sample01-17`：if-else文  
- `sample01-18`：PHPとHTMLの組み合わせ
- `sample01-19`：短縮if文
- `sample01-20`：比較演算子
- `sample01-21`：条件演算子
- `sample01-22`：switch文
- `sample01-23`：break
- `sample01-24`：exit その1
- `sample01-25`：exit その2
- `sample01-26`：エラー表示設定  
- `practice.php`：`sample01-04.php`配列 Ver.

### 02-1：[2] 2020/10/01
- `sample02-01`：四則演算
- `sample02-02`：四則演算の結果を変数に格納
- `sample02-03`：インクリメント・デクリメント
- `sample02-04`：数値のフォーマット
- `sample02-05`：絶対値
- `sample02-06`：小数点の四捨五入
- `sample02-07`：小数の切り捨て
- `sample02-08`：小数の切り上げ
- `sample02-09`：乱数
- `sample02-10`：乱数によるパスワード生成
- `sample02-11`：ランダムに画像を表示
- `sample02-12`：広告バナーをランダム表示
- `sample02-13`：最大値
- `sample02-14`：最小値
- `sample02-15`：べき乗
- `sample02-16`：平方根

### 02-2：[2] 2020/10/01
- `sample12-01`：POSTメソッド
- `sample12-02`：GETメソッド
- `sample12-03`：POSTメソッド / GETメソッド
- `sample12-04`：変数受け取り
- `sample12-05`：フォームデータ受け取り
- `sample12-06`：パラメータ付きリンク
- `sample12-07`：テキストボックス
- `sample12-08`：ラジオボタン
- `sample12-09`：チェックボックス
- `sample12-10`：複数選択可能なチェックボックス
- `sample12-11`：複数入力可能なテキストボックス
- `sample12-12`：リストボックス
- `sample12-13`：テキストエリア
- `sample12-14`：クリックされたボタンの調査

### 03-1：[3] 2020/10/08
- `sample12-15`：HTMLタグ
- `sample12-16`：HTMLの特殊文字を実体参照に置換
- `sample12-17`：改行タグを追加
- `sample12-18`：エスケープ文字を除去
- `sample12-19`：受け取ったデータの妥当性を確認
- `sample12-20`：受け取ったデータの未入力を確認
- `sample12-21`：受け取ったデータを次ページに渡す
- `sample12-22`：受け取ったデータを数値として処理
- `sample12-23`：URLエンコードされたデータを元に戻す
- `sample12-24`：文字列をURLエンコード
- `sample12-25`：ファイルをアップロード
- `sample12-26`：複数のファイルをまとめてアップロード
- `sample12-27`：別ページへ強制ジャンプ
- `sample12-28`：検索エンジンサイトにキーワードを渡す
- `sample12-29`：フォントサイズを動的に切り替える
- `sample12-30`：ページのスタイル（CSS）を動的に切り替える
- `sample12-31`：2つのリストボックスのリストを連動させる
- `sample12-32`：呼び出し元ページを確認
- `sample12-33`：アクセスユーザのブラウザ情報を取得
- `sample12-34`：ユーザ環境によって表示するページを切り替える

### 03-2：[3] 2020/10/08
- `sample13-01`：クッキーにデータを保存
- `sample13-02`：クッキーからデータを読み込む
- `sample13-03`：クッキーのデータを削除
- `sample13-04`：フォームへの前回入力値を自動入力
- `sample13-05`：カートに入れる仕組みを作る（クッキー版）

### 03-3：[3] 2020/10/08
- `sample14-01`：セッションを開始
- `sample14-02`：セッション変数にデータを保存
- `sample14-03`：セッション変数のデータを読み込む
- `sample14-04`：セッション変数を破棄
- `sample14-05`：セッション変数が設定されているかを調査
- `sample14-06`：セッションを終了
- `sample14-07`：セッション名を変更
- `sample14-08`：セッションIDを変更
- `sample14-09`：セッション変数を使ってユーザIDを使い回す
- `sample14-10`：カートに入れる仕組みを作る（セッション版）

### 04：[3] 2020/10/15
- `todo`：TODO管理Webアプリケーション
- `rss`：Yahooニューストピックス（ https://news.yahoo.co.jp/pickup/computer/rss.xml ）をリスト表示
- `bbs`：簡易掲示板Webアプリケーション
- `bbs-db`：簡易掲示板Webアプリケーション（DB版）
- `db_migrate`：テーブル生成
  - `post.sql`
    ```sql
    DROP TABLE IF EXISTS post;
    
    CREATE TABLE post (
        title  text      NOT NULL,
        date   datetime  NOT NULL,
        name   text      NOT NULL,
        body   text      NOT NULL
    );
    
    INSERT INTO post (title, date, name, body) 
    VALUES ('ようこそ掲示板へ', '2020-10-16 20:16:34', '管理人 RenGoto', 'ざっくばらんに会話を楽しみましょう。');
    ```  
  - `rss_item.sql`  
    ```sql
    DROP TABLE IF EXISTS rss_item;
    
    CREATE TABLE  rss_item (
        id           int(11)   NOT NULL AUTO_INCREMENT,
        guid         text      DEFAULT NULL,
        pub_date     datetime  NOT NULL,
        title        text      NOT NULL,
        description  text      NOT NULL,
        author       text      NOT NULL,
        link         text      DEFAULT NULL,
        PRIMARY KEY (id)
    )
    ```  

### 05：[5] 2020/10/22
- `link`：__リンク管理アプリケーション__
- `init`：設定ファイル
  - `linkdata.sql`
    ```sql
    DROP TABLE IF EXISTS linkdata;
    
    CREATE TABLE linkdata (
        id         int(11)       NOT NULL AUTO_INCREMENT,
        l_url      varchar(255)  NOT NULL,
        l_title    varchar(100)  NOT NULL,
        l_comment  varchar(255)  NOT NULL,
        l_date     datetime      NOT NULL,
        PRIMARY KEY (id)
    ); 
    
    INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
    VALUES (1, 'https://github.com/GotoRen', 'Github', 'GotoRen Remote Repository', '2020-10-22 14:57:14');
    
    INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
    VALUES (2, 'https://qiita.com/ren1007', 'Qiita', 'GotoRen Qiita mypage', '2020-10-22 14:57:14');
    
    INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
    VALUES (3, 'https://pluslab.org', 'Pluslab', '内藤研究室', '2020-10-22 14:57:14');
    
    INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
    VALUES (4, 'https://www.youtube.com/', 'YouTube', 'YouTube 動画視聴サイト', '2020-10-22 14:57:14');
    
    INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
    VALUES (5, 'https://techbowl.co.jp/techtrain', 'Techbowl', 'TechTrain | TechBowl', '2020-10-22 14:57:14');
    
    INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
    VALUES (6, 'https://www.cyberagent.co.jp/', 'CyberAgent', '株式会社サイバーエージェント', '2020-10-22 14:57:14');
    
    INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
    VALUES (7, 'https://dl.acm.org/', 'CyberAgent', 'ACM DL DIGITAL LIBRARY', '2020-10-22 14:57:14');
    
    INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
    VALUES (8, 'https://app.diagrams.net/', 'Drow.io', 'EditPage Drow.io', '2020-10-22 14:57:14');
    
    INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
    VALUES (9, 'https://golang.org/', 'GoLang', 'GoLang Documentation', '2020-10-22 14:57:14');
    
    INSERT INTO linkdata (id, l_url, l_title, l_comment, l_date)
    VALUES (10, 'https://www.php.net/manual/ja/index.php', 'PHP', 'PHP Documentation', '2020-10-22 14:57:14');
    ```
    
### 06, 07：[6] 2020/10/29, [7] 2020/11/05
- `Schedule-Manager`：__スケジュール管理アプリケーションの作成__
  - https://github.com/GotoRen/Schedule-Manager

## ⬢ Node.js
### 08-1：[8] 2020/11/12
- __Webアプリケーション__
  1. `require`で`http`オブジェクトを用意
  2. `createServer`でサーバを用意
  3. `listen`で待ち受け開始（サーバ起動）
- __EJS（Embedded JavaScript）テンプレート__
  - テンプレートエンジンを使用したフレキシブルな構成
  - パッケージのインストール：`$ npm install ejs`
  - `fs`オブジェクトを使用して`readFileSync`で読み込む
  - `ejs.render`でレンダリング
  - 結果を`write`メソッドで書き出す
- __ルーティング__
  ```js
  var url_parts - url.parse(request.url);

  switch (url_parts.pathname) {

    case "/":
      // デフォルトページ
      break;

    default: 
      // 例外ページ
      break;  

  }
  ```

### 08-2：[8] 2020/11/12  
- __パーシャルの読み込み__
  - `<%- inclue(ファイル名, {受け渡す値}) %>`
- __フォームの送信とイベント処理__
  - リクエスト方式の判定
    ```js
    if (request.method == 'POST') {
      // POST受信時の処理
    } else {
      // GET受信時の処理
    }
    ```
- __ローカルストレージとクライアント機能（クッキー）の利用__
  - クッキー
    - クッキーの値を設定
      ```js
      function setCookie(key, value, response) {
          var cookie = escape(value); // クッキーに保存するためエスケープ処理する
  
          response.setHeader('Set-Cookie', [key + '=' + cookie]); // response.setHeader   ('Set-Cookie', ['キー=値'], ['キー=値'], ...);
      }
      ```
    - クッキーの値を取得
      ```js
      function getCookie(key, request) {
          var cookie_data = request.headers.cookie != undefined ? request.headers.cookie : ''; // 三項演算子
          var data = cookie_data.split(';') // 取得したクッキーデータに含まれる ';' を用いて分割
  
          for (var i in data) {
              if (data[i].trim().startsWith(key + '=')) { // key + '=' で始まっているかどうかを確認
                  var result = data[i].trim().substring(key.length + 1); // 'key='の後のテキス部分を取り出す
                  return unescape(result); // クッキーの形式から通常のテキストに戻す
              }
          }
          return '';
      }
      ```
  - ローカルストレージ
    - ローカルストレージに値を保存する
      - `localStorage.setItem(キー, 値);`
    - ローカルストレージから値を取り出す
      - `変数 = localStorage.getItem(キー);`
- __データ保存及びファイルの読み書き__
  - ファイルの書き込み
    - `fs.writeFile(ファイル名, レコード, (エラー) => {...保存後の処理...});`

### 09：[9] 2020/11/19
- 環境構築
  ```
  ### グローバル環境（Node.js全体）にインストール
  $ sudo npm install -g express-generator
  Password: [スーパーユーザのパスワードを入力]
  npm WARN deprecated mkdirp@0.5.1: Legacy versions of mkdirp are no longer supported. Please update to mkdirp 1.x. (Note that the API surface has changed to use Promises in 1.x.)
  /usr/local/bin/express -> /usr/local/lib/node_modules/express-generator/bin/express-cli.js
  + express-generator@4.16.1
  added 10 packages from 13 contributors in 0.625  
     ╭────────────────────────────────────────────────────────────────╮
     │                                                                │
     │      New patch version of npm available! 6.14.8 → 6.14.9       │
     │   Changelog: https://github.com/npm/cli/releases/tag/v6.14.9   │
     │               Run npm install -g npm to update!                │
     │                                                                │
     ╰────────────────────────────────────────────────────────────────╯
  
  ### Expressのバージョンを確認
  $ express --version
  4.16.1

  ### プロジェクトの作成
  $ cd [プロジェクトを立ち上げるディレクトリへ移動]
  
  ### アプリケーション名: ex-gen-app を作成 
  $ express --view=ejs ex-gen-app
  
     create : ex-gen-app/
     create : ex-gen-app/public/
     create : ex-gen-app/public/javascripts/
     create : ex-gen-app/public/images/
     create : ex-gen-app/public/stylesheets/
     create : ex-gen-app/public/stylesheets/style.css
     create : ex-gen-app/routes/
     create : ex-gen-app/routes/index.js
     create : ex-gen-app/routes/users.js
     create : ex-gen-app/views/
     create : ex-gen-app/views/error.ejs
     create : ex-gen-app/views/index.ejs
     create : ex-gen-app/app.js
     create : ex-gen-app/package.json
     create : ex-gen-app/bin/
     create : ex-gen-app/bin/www
  
     change directory:
       $ cd ex-gen-app
  
     install dependencies:
       $ npm install
  
     run the app:
       $ DEBUG=ex-gen-app:* npm start
  
  ### 移動
  $ cd ex-gen-app

  ### パッケージをインストール
  $ npm install
  
  ### 実行
  $ npm start
  ```  
  - [http://localhost:3000/](http://localhost:3000/)
- Express Generator を使用しない開発法
  ```
  ### プロジェクトの作成
  $ cd [プロジェクトを立ち上げるディレクトリへ移動]
  
  ### アプリケーション名: exprss-app を作成 
  $ mkdir exprss-app
  
  ### npmを初期化
  $ npm init
  This utility will walk you through creating a package.json file.
  It only covers the most common items, and tries to guess sensible defaults.
  
  See `npm help init` for definitive documentation on these fields
  and exactly what they do.
  
  Use `npm install <pkg>` afterwards to install a package and
  save it as a dependency in the package.json file.
  
  Press ^C at any time to quit.
  package name: (express-app) [Enterキー]
  version: (1.0.0) [Enterキー]
  description: [Enterキー]
  entry point: (index.js) [Enterキー]
  test command: [Enterキー]
  git repository: [Enterキー]
  keywords: [Enterキー]
  author: [Enterキー]
  license: (ISC) [Enterキー]
  About to write to /Applications/XAMPP/xamppfiles/htdocs/WebProg_Exercise/09-1/express-app/package.json:
  
  {
    "name": "express-app",
    "version": "1.0.0",
    "description": "",
    "main": "index.js",
    "scripts": {
      "test": "echo \"Error: no test specified\" && exit 1"
    },
    "author": "",
    "license": "ISC"
  }
  
  
  Is this OK? (yes) [Enterキー]
  
  ### Expressをインストール
  $ npm install express
  npm notice created a lockfile as package-lock.json. You should commit this file.
  npm WARN express-app@1.0.0 No description
  npm WARN express-app@1.0.0 No repository field.
  
  + express@4.17.1
  added 50 packages from 37 contributors and audited 50 packages in 1.566s
  found 0 vulnerabilities
  ``` 
- Express Session のインストール
  ```
  $ npm install express-session
  + express-session@1.17.1
  added 5 packages from 5 contributors and audited 60 packages in 1.336s
  found 0 vulnerabilities
  ```   
- XML2JSモジュール のインストール
  ```
  $ npm install xml2js
  + xml2js@0.4.23
  added 3 packages from 48 contributors and audited 63 packages in 1.202s
  found 0 vulnerabilities
  ```  
- __Expressの基本手順__
  ```js
  /* 1. expressオブジェクトを用意 */
  var express = require('express'); 
  
  /* 2. appオブジェクトの作成 */
  var app = express();
  
  /* 3. ルーティングの設定 */
  app.get('/', (req, res) => {
      res.send('Welcome to Express!');
  });
  
  /* 4. 待ち受け開始 */
  app.listen(3000, () => {
      console.log('Start server port:3000');
  });
  ```  
- __値の取得（クエリと`query`オブジェクト）__
  - `req.query.[値]`：query内から値を取り出す
  - `req.body['値']`：`form`メソッドによって送信された値を取り出す  
- ロードしたモジュールを利用する場合、以下の範囲に記述する必要がある
    ```js
    var app = express();
    
    /* app.useによる関数組み込み */
    // この間に記述
    
    /* アクセスのためのapp.useを作成 */
    app.use('/', indexRouter);
    app.use('/users', usersRouter);
    app.use('/hello', hello);
    ```
  - `var app = express();`より後かつ、`routes`フォルダのスクリプトをルーティングする`app.use`よりも前  

### 10：[10] 2020/11/26
- DB Browser for SQLite インストール
  ```
  ### DB Browser for SQLite をインストール
  $ brew cask install db-browser-for-sqlite
  
  ### 確認 
  $ sqlite3 --version
  3.32.3 2020-06-18 14:00:33 7ebdfa80be8e8e73324b8d66b3460222eb74c7e9dfd655b48d6ca7e1933cc8fd
  $ which sqlite3
  /Applications/XAMPP/xamppfiles/bin/sqlite3
  ```
- SQLiteへ接続
  ```
  ### 移動
  $ cd [sqliteのDBファイルが存在するディレクトリ]

  ### SQLiteへ接続
  $ sqlite3 mydb.sqlite3
  SQLite version 3.32.3 2020-06-18 14:00:33
  Enter ".help" for usage hints.
  sqlite>

  ### 挿入されているデータを確認
  > select * from mydata;
  1|taro|taro@yamada|39
  2|hanako|hanako@flower|28
  3|sachiko|sachiko@happy|17
  4|jiro|jiro@change|6
  5|ren|ren@goto|21

  ### 切断
  > .exit
  ```
- `sqlite3`パッケージのインストール（ExpressからSQLiteに接続）
  ```
  ### 移動
  $ cd [プロジェクトを立ち上げるディレクトリ]

  ### SQLite3をインストール
  $ npm install sqlite3
  ```  
- データベースオブジェクトの取得
  ```
  const sqlite3 = require('sqlite3');
  const db = new sqlite3.Database('DB名');
  ```
- __レコードの取り出し__
  - 全て
    - `db.all(SQLクエリ, コールバック関数);`
  - レコードごと
    - `db.each(SQLクエリ, レコード取得関数, レンダリング関数);`
- __SQLクエリの実行（プレースホルダ）__
  - 追加
    - `db.run("INSERT INTO mydata (name, mail, age) VALUES (?, ?, ?)", nm, ml, ag);`
  - 1レコードのみを取得（結果が一意に定まるとき）
    - `db.get("SELECT * FROM mydata WHERE id = ?", [id], コールバック関数);`
  - 更新（条件に合致する項目が複数存在する場合、それらはすべて更新される)
    - `db.run("UPDATE mydata SET name = ?, mail = ?, age = ? WHERE id = ?", nm, ml, ag, id);`
  - 削除（条件に合致する項目が複数存在する場合、それらはすべて更新される)
    - `db.run("DELETE FROM mydata WHERE id = ?", id);`
- `express-validator`のインストール
  ```
  ### 移動
  $ cd [プロジェクトを立ち上げるディレクトリ]
  
  ### Express Validatorをインストール
  $ npm install express-validator
  ```

### 11：[11] 2020/12/03  
- Sequelize インストール
  ```
  ### 移動
  $ cd [プロジェクトを立ち上げるディレクトリ]

  ### sequelizeパッケージのインストール
  $ npm install sequelize

  ### Sequelize CLI のインストール
  $ npm install sequelize-cli
  ```
- __① Sequelizeの初期化__
  - `$ npx sequelize-cli init`
  - 生成されるフォルダ
    - `config`：設定情報を管理する`config.json`を扱う
      ```json
      {
        "development": {
          // 開発中の設定
        },
        "test": {
          // テスト用の設定
        },
        "production": {
          // 正式リリース時の設定
        }
      }
      ```       
    - `migrations`：DBの変更情報などを管理するファイルを扱う
    - `models`：DBにアクセスして使用する「モデル」オブジェクトを定義する
    - `seeders`：初期データ（シーダー）を扱う
- __② モデルの作成__
  - モデル：DBのテーブルにアクセスするための機能を提供するオブジェクト
  - `$ npx sequelize-cli model:generate --name モデル名 --attributes 名前:タイプ,名前:タイプ,名前:タイプ,...`
    - `$ npx sequelize-cli model:generate --name User --attributes name:string,pass:string,mail:string,age:integer`
    - `model`フォルダに`user.js`ファイルが生成される
- __③ マイグレーションの実行__
  - DBの内容を変更した場合などに、その差分をDBに適用したり、前の状態に戻したりする操作を行うための仕組み
  - 最初のマイグレーションで、作成したモデルなどの情報を元にDBを更新して必要なテーブルを生成する
  - `$ npx sequelize-cli db:migrate --env development`
    - `migrations/***-create-user.js`
      ```js
      module.exports = {
        up: async (queryInterface, Sequelize) => {
          await queryInterface.createTable('テーブル名', {
            // 生成処理
          });
        },
        down: async (queryInterface, Sequelize) => {
          // 削除処理
        }
      };  
      ```
    - `createdAt`：作成日時
    - `updatedAt`：更新日時<br>
    → SequelizeによってDBマイグレーションを実行すると自動的に生成される
- __④ シーディング__      
  - テーブル作成時に初期データとして簡単なレコード（シード）を予め挿入しておく
  - シーディング用のスクリプトファイルを生成して作成するレコードの内容を記述しておく
  - シーディングファイルの作成
    - `$ npx sequelize-cli seed:generate --name sample-user`
  - シーディングの実行
    - `$ npx sequelize-cli db:seed:all`

### 12：[12] 2020/12/10  
- __DBアソシエート__
  - アソシエーションの4つの方式
    - __1 対 1（One to One）方式__
      - モデルAの値が、モデルBの値に1つずつ関連付けられる
      - `モデルA.hasOne(モデルB, オプション);`
        - 主モデル：`hasOne`
        - 従モデル：`belongsTo`
    - __1 対 多（One to Many）方式__
      - モデルAの値が、複数のモデルBの値が関連づけられる
      - `モデルA.hasMany(モデルB, オプション);`
        - 主モデル：`hasMany`
        - 従モデル：`belongsTo`
    - __多 対 1（Many to One）方式__ ⬅ 通常、使用することはない
      - 複数のモデルAの値が、単一のモデルBの値に関連づけられる
      - `モデルB.belongsTo(モデルA, オプション);`
        - 主モデル：`hasOne`
        - 従モデル：`belongsToMany`
    - __多 対 多（Many to Many）方式__
      - モデルAの複数の値に、モデルBの複数の値が互いに関連し合うように関連づけられる
      - `モデルB.belongsToMany(モデルA, オプション);`
        - 主モデル：`hasMany`
        - 従モデル：`belongsToMany`
  - `has***`メソッド
    - 『主モデル』として機能
  - `belongsTo***`メソッド
    - 『従モデル』として機能
  - アソシエーションモデルの読み込み
    ```js
    include: [{
      model: db.主モデル,
      required: true
    }]
    ```
- マークダウン作成ツールパッケージのインストール
  ```
  ### 移動
  $ cd [プロジェクトを立ち上げるディレクトリ]
  
  ### MarkdownIt パッケージのインストール
  $ npm install markdown-it    
  
  ### Knex のインストール
  $ npm install knex
  
  ### Bookshelf のインストール
  $ npm install bookshelf
  ```
### 13：[13] 2020/12/17
  - Markdownデータ管理ツールを参考にスケジュール管理アプリを制作
  - DBテーブル
    | キー| 型 | 概要 |
    | :---:  | :---: | :---: |
    | userId | integer | UserのID |
    | begin | datetime | 開始日時 |
    | end | datetime | 終了日時 |
    | place | text | 場所 |
    | content | text | 内容 |
