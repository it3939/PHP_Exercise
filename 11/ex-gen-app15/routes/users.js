const express = require('express');
const router = express.Router();
const db = require('../models/index');


/* GET users listing. */
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
    title: 'Users/Add'
  }
  res.render('users/add', data);
});

/* POSTアクセスの処理 */
router.post('/add', (req, res, next)=> {
  db.sequelize.sync().then(() => db.User.create({
    name: req.body.name,
    pass: req.body.pass,
    mail: req.body.mail,
    age: req.body.age,
  }))
  .then(usr => {
    res.redirect('/users');
  });
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

module.exports = router;
