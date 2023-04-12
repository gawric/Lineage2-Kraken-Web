/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:29:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_mail`
-- ----------------------------
DROP TABLE IF EXISTS `character_mail`;
CREATE TABLE `character_mail` (
  `charId` int(10) NOT NULL DEFAULT '0',
  `letterId` int(11) NOT NULL DEFAULT '0',
  `senderId` int(10) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `recipientNames` varchar(45) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `sendDate` decimal(20,0) DEFAULT NULL,
  `deleteDate` decimal(20,0) DEFAULT NULL,
  `unread` decimal(1,0) DEFAULT '0',
  PRIMARY KEY (`charId`,`letterId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_mail
-- ----------------------------
