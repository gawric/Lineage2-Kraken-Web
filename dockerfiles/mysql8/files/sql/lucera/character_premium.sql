/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:29:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_premium`
-- ----------------------------
DROP TABLE IF EXISTS `character_premium`;
CREATE TABLE `character_premium` (
  `account_name` varchar(45) NOT NULL DEFAULT '',
  `premium_service` int(1) NOT NULL DEFAULT '0',
  `enddate` decimal(20,0) NOT NULL DEFAULT '0',
  `im_cash` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`account_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_premium
-- ----------------------------
