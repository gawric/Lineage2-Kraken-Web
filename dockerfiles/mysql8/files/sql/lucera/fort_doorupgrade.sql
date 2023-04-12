/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:39:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `fort_doorupgrade`
-- ----------------------------
DROP TABLE IF EXISTS `fort_doorupgrade`;
CREATE TABLE `fort_doorupgrade` (
  `doorId` int(11) NOT NULL DEFAULT '0',
  `fortId` int(11) NOT NULL,
  `hp` int(11) NOT NULL DEFAULT '0',
  `pDef` int(11) NOT NULL DEFAULT '0',
  `mDef` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`doorId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fort_doorupgrade
-- ----------------------------
