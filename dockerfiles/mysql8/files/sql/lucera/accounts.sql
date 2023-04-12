/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:20:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `accounts`
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `login` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) DEFAULT NULL,
  `lastactive` decimal(20,0) DEFAULT NULL,
  `accessLevel` int(11) NOT NULL DEFAULT '0',
  `lastIP` varchar(20) DEFAULT NULL,
  `lastServerId` int(11) NOT NULL DEFAULT '1',
  `allowed_ip` varchar(20) NOT NULL DEFAULT '*',
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of accounts
-- ----------------------------
