/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:25:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `castle_doorupgrade`
-- ----------------------------
DROP TABLE IF EXISTS `castle_doorupgrade`;
CREATE TABLE `castle_doorupgrade` (
  `castleId` int(11) NOT NULL DEFAULT '0',
  `doorId` int(11) NOT NULL DEFAULT '0',
  `hp` int(11) NOT NULL DEFAULT '0',
  `pDef` int(11) NOT NULL DEFAULT '0',
  `mDef` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`doorId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of castle_doorupgrade
-- ----------------------------
