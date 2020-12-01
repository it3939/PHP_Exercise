/* モジュールのロード */
const express = require('express');
const sqlite3 = require('sqlite3'); // SQLite3モジュールを追加

const router = express.Router();

/* DBオブジェクトの取得 */
const db = new sqlite3.Database('mydb.sqlite3');

/* GETアクセスの処理 */
// データベースのシリアライズ
router.get('/', (req, res, next) => {
    db.serialize(() => {
        var rows = "";
        db.each("SELECT * FROM mydata", (err, row) => {
            if (!err) {
                // 1レコードずつ取り出してマージする
                rows += "<tr>" + 
                            "<th>" + row.id + "</th>" +
                            "<td>" + row.name + "</td>" +
                        "</tr>"
            }
        }, (err, count) => {
            console.log(rows);
            if (!err) {
                var data = {
                    title: 'Hello!',
                    content: rows // 取得したレコード
                };
                res.render('hello/index', data);
            }
        });
    });
});

/*************************************************************************************/
/*** Create ***/
/* GETアクセスの処理 */
router.get('/add', (req, res, next) => {
    var data = {
        title: 'Hello/Add',
        content: '新しいレコードを入力：'
    }
    res.render('Hello/Add', data);
});

/* POSTアクセスの処理 */
router.post('/add', (req, res, next) => {
    const nm = req.body.name; // 値の取り出し
    const ml = req.body.mail; // 値の取り出し
    const ag = req.body.age;  // 値の取り出し
    db.serialize(() => {
        // SQLクエリの実行
        db.run("INSERT INTO mydata (name, mail, age) VALUES (?, ?, ?)", nm, ml, ag);
    });
    res.redirect('/hello');
});
/*************************************************************************************/
/*** Read ***/
router.get('/show', (req, res, next) => {
    const id = req.query.id;
    db.serialize(() => {
        const q = "SELECT * FROM mydata WHERE id = ?";
        db.get(q, [id], (err, row) => {
            if (!err) {
                var data = {
                    title: 'Hello/Show',
                    content: 'id = ' + id + ' のレコード：',
                    mydata: row
                };
                res.render('hello/show', data);
            }
        });
    });
});
/*************************************************************************************/
/*** Update ***/
router.get('/edit', (req, res, next) => {
    const id = req.query.id;
    db.serialize(() => {
        const q = "SELECT * FROM mydata WHERE id = ?";
        db.get(q, [id], (err, row) => {
            if (!err) {
                var data = {
                    title: 'Hello/Edit',
                    content: 'id = ' + id + ' のレコードを編集：',
                    mydata: row
                };
                res.render('hello/edit', data);
            }
        });
    });
});

router.post('/edit', (req, res, next) => {
    const id = req.body.id;   // 値の取り出し
    const nm = req.body.name; // 値の取り出し
    const ml = req.body.mail; // 値の取り出し
    const ag = req.body.age;  // 値の取り出し

    console.log('DEBUG: ' + id);
    console.log('DEBUG: ' + nm);

    const q = "UPDATE mydata SET name = ?, mail = ?, age = ? WHERE id = ?";
    db.serialize(() => {
        db.run(q, nm, ml, ag, id);
    });
    res.redirect('/hello');
});
/*************************************************************************************/
/*** Delete ***/
router.get('/delete', (req, res, next) => {
    const id = req.query.id;
    db.serialize(() => {
        const q = "SELECT * FROM mydata WHERE id = ?";
        db.get(q, [id], (err, row) => {
            if (!err) {
                var data = {
                    title: 'Hello/Delete',
                    content: 'id = ' + id + ' のレコードを削除：',
                    mydata: row
                };
                res.render('hello/delete', data);
            }
        });
    });
});

router.post('/delete', (req, res, next) => {
    const id = req.body.id;   // 値の取り出し
    const q = "DELETE FROM mydata WHERE id = ?";
    db.serialize(() => {
        db.run(q, id);
    });
    res.redirect('/hello');
});
/*************************************************************************************/
/*** Find ***/
router.get('/find', (req, res, next) => {
    db.serialize(() => {
        db.all("SELECT * FROM mydata", (err, rows) => {
            if (!err) {
                var data = {
                    title: 'Hello/Find',
                    find: '',
                    content: '検索条件を入力してください。',
                    mydata: rows
                };
                res.render('hello/find', data);
            }
        });
    });
});

router.post('/find', (req, res, next) => {
    var find = req.body.find;
    db.serialize(() => {
        var q = "SELECT * FROM mydata WHERE ";
        db.all(q + find, [], (err, rows) => { // q+find: クエリに取得した文字列をマージする
            if (!err) {
                var data = {
                    title: 'Hello/Find',
                    find: find,
                    content: '検索条件 ' + find,
                    mydata: rows
                };
                res.render('hello/find', data);
            }
        });
    });
});
/*************************************************************************************/

module.exports = router;
