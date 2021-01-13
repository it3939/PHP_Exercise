const express = require('express');
const router = express.Router();
const db = require('../models/index');

/*************************************************************************************/
/*** Read ***/
/* GETアクセスの処理 */
router.get('/', (req, res, next)=> {
  db.User.findAll().then(usrs => {
    var data = {
      title: 'Users/Index',
      content: usrs
    }
    res.render('users/index', data);
  });
});
/*************************************************************************************/
/*** Create ***/
/* GETアクセスの処理 */
router.get('/add', (req, res, next)=> {
  var data = {
    title: 'Users/Add',
    form: new db.User(),
    err: null
  }
  res.render('users/add', data);
});

/* POSTアクセスの処理 */
router.post('/add', (req, res, next)=> {
  const form = {
    name: req.body.name,
    pass: req.body.pass,
    mail: req.body.mail,
    age: req.body.age
  };
  db.sequelize.sync()
    .then(() => db.User.create(form)
    .then(usr=> {
      res.redirect('/users')
    })
    .catch(err => {
      var data = {
        title: 'User/Add',
        form: form,
        err: err
      }
      res.render('users/add', data);
    })
    )
});
/*************************************************************************************/
/*** Update ***/
/* GETアクセスの処理 */
router.get('/edit', (req, res, next)=> {
  db.User.findByPk(req.query.id)
  .then(usr => {
    var data = {
      title: 'Users/Edit',
      form: usr
    }
    res.render('users/edit', data);
  });
});

/* POSTアクセスの処理 */
router.post('/edit', (req, res, next)=> {
  db.User.findByPk(req.body.id)
  .then(usr => {
    usr.name = req.body.name,
    usr.pass = req.body.pass,
    usr.mail = req.body.mail,
    usr.age = req.body.age,
    usr.save().then(()=>res.redirect('/users'));
  });
});
/*************************************************************************************/
/*** Delete ***/
/* GETアクセスの処理 */
router.get('/delete', (req, res, next)=> {
  db.User.findByPk(req.query.id)
  .then(usr => {
    var data = {
      title: 'Users/Delete',
      form: usr
    }
    res.render('users/delete', data);
  });
});

/* POSTアクセスの処理 */
router.post('/delete', (req, res, next)=> {
  db.User.findByPk(req.body.id)
  .then(usr => {
    usr.destroy().then(()=>res.redirect('/users'));
  });
});
/*************************************************************************************/

/*************************************************************************************/
/*** ログイン処理 ***/
router.get('/login', (req, res, next)=> {
  var data = {
    title: 'Users/Login',
    content: '名前とパスワードを入力して下さい。'
  }
  res.render('users/login', data);
});

router.post('/login', (req, res, next)=> {
  console.log(req.session);
  // Userモデルの取得
  db.User.findOne({
    where: {
      name: req.body.name,
      pass: req.body.pass,
    }
  }).then(usr => {
    if (usr != null) {
      req.session.login = usr;
      let back = req.session.back;
      if (back == null) {
        back = '/';
      }
      res.redirect(back);
    } else {
      var data = {
        title: 'Users/Login',
        content: '名前かパスワードに問題があります。再度入力して下さい。'
      }
      res.render('users/login', data);
    }
  })
});
/*************************************************************************************/

module.exports = router;
