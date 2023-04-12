/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:51:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `mails`
-- ----------------------------
DROP TABLE IF EXISTS `mails`;
CREATE TABLE `mails` (
  `mailId` int(11) NOT NULL,
  `sendDate` bigint(30) NOT NULL,
  `sender` int(11) NOT NULL,
  `taker` int(11) NOT NULL,
  `message` text NOT NULL,
  `protection` text NOT NULL,
  `refound` int(1) DEFAULT '0',
  PRIMARY KEY (`mailId`,`sender`,`taker`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mails
-- ----------------------------
