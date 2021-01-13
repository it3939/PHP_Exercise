const express = require('express');
const router = express.Router();
const db = require('../models/index');
const { Op } = require("sequelize");

const pnum = 20;

// ログインのチェック
function check(req, res) {
  if (req.session.login == null) {
    req.session.back = '/sche';
    res.redirect('/users/login');
    return true;
  } else {
    return false;
  }
}

/******************************************************/
/*** Index ***/
// トップページへのアクセス
router.get('/', (req, res, next)=> {
  // ログイン確認
  if (check(req, res)) {
    return
  };
  db.Schedule.findAll({
    where: { userId: req.session.login.id },
    limit: pnum,
    order: [
        ['begin', 'ASC']
    ]
  }).then(sches => {
    var data = {
      title: 'Schedule/Index',
      login: req.session.login,
      content: sches
    };
    res.render('sche/index', data);
    console.log(data)
  });
});
/******************************************************/
/*** Add ***/
// スケジュール新規追加ページの表示
router.get('/add', (req, res, next)=> {
    // ログイン確認
    if (check(req, res)) {
        return
    };
    var data = {
        title: 'Schedule/Add',
        err: null
    }
    res.render('sche/add', data);
});

// スケジュール新規追加処理
router.post('/add', (req, res, next)=> {
    // ログイン確認
    if (check(req, res)) {
        return
    };
    db.sequelize.sync()
    .then(()=> db.Schedule.create({
        userId: req.session.login.id,
        begin: req.body.begin,
        end: req.body.end,
        place: req.body.place,
        content: req.body.content,
    })
    .then(model=> {
        res.redirect('/sche');
    })
    .catch(err => {
        var data = {
          title: 'Schedule/Add',
          err: err
        }
        res.render('sche/add', data);
    })
    );
});
/******************************************************/
/*** Delete ***/
// '/delete'へアクセスした際のリダイレクト処理
router.get('/delete', (req, res, next)=> {
    res.redirect('/sche');
    return;
});

// スケジュール削除ページの表示
router.get('/delete/:id', (req, res, next)=> {
    // ログイン確認
    if (check(req, res)) {
        return
    };
    db.Schedule.findOne({
        where: {
            id: req.params.id,
            userId: req.session.login.id
        },
    })
    .then(sche => {
        var data = {
            title: 'Schedule/Delete',
            content: sche
        }
        console.log("----- Delete Debug -----");
        console.log(sche);
        console.log("------------------------");
        res.render('sche/delete', data);
    });
});

//　スケジュール削除処理
router.post('/delete', (req, res, next)=> {
    db.sequelize.sync()
    .then(() => db.Schedule.destroy({
        where:{id:req.body.id}
    }))
    .then(sche => {
        res.redirect('/sche')
    });
});
/******************************************************/
/*** Edit ***/
// '/edit'へアクセスした際のリダイレクト処理
router.get('/edit', (req, res, next)=> {
    res.redirect('/sche');
    return;
});

// スケジュール修正ページの表示
router.get('/edit/:id', (req, res, next)=> {
    // ログイン確認
    if (check(req, res)) {
        return
    };
    db.Schedule.findOne({
        where: {
            id: req.params.id,
            userId: req.session.login.id
        },
    })
    .then(sche => {
        var data = {
            title: 'Schedule/Edit',
            content: sche
        }
        console.log("----- Edit Debug -----");
        console.log(sche);
        console.log("------------------------");
        res.render('sche/edit', data);
    });
});

//　スケジュール修正処理
router.post('/edit', (req, res, next)=> {
    db.sequelize.sync()
    .then(() => db.Schedule.update({
        begin: req.body.begin,
        end: req.body.end,
        place: req.body.place,
        content: req.body.content,
    },
    {
        where:{id:req.body.id}
    }))
    .then(sche => {
        res.redirect('/sche')
    });
});
/******************************************************/

module.exports = router;
