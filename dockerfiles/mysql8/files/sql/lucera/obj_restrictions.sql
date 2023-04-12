/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:53:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `obj_restrictions`
-- ----------------------------
DROP TABLE IF EXISTS `obj_restrictions`;
CREATE TABLE `obj_restrictions` (
  `entry_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `obj_Id` int(11) unsigned NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL DEFAULT '',
  `delay` int(11) NOT NULL DEFAULT '-1',
  `message` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1376722 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of obj_restrictions
-- ----------------------------
