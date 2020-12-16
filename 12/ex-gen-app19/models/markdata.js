'use strict';
module.exports = (sequelize, DataTypes) => {
  const Markdata = sequelize.define('Markdata', {
    userId: {
      type: DataTypes.INTEGER,
      validata: {
        notEmpty: {
          msg: "利用者は必須です。"
        }
      }
    },
    title: {
      type: DataTypes.STRING,
      validata: {
        notEmpty: {
          msg: "タイトルは必須です。"
        }
      }
    },
    content: {
      type: DataTypes.TEXT,
      validata: {
        notEmpty: {
          msg: "コンテンツは必須項目です。"
        }
      }
    }
  }, {});
  Markdata.associate = function(models) {
    Markdata.belongsTo(models.User);
  };
  return Markdata;
};
