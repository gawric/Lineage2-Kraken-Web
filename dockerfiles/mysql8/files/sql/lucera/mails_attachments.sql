/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:52:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `mails_attachments`
-- ----------------------------
DROP TABLE IF EXISTS `mails_attachments`;
CREATE TABLE `mails_attachments` (
  `mailId` int(11) NOT NULL,
  `objId` int(11) NOT NULL,
  PRIMARY KEY (`mailId`,`objId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mails_attachments
-- ----------------------------
