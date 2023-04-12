/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:35:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cursed_weapons`
-- ----------------------------
DROP TABLE IF EXISTS `cursed_weapons`;
CREATE TABLE `cursed_weapons` (
  `itemId` int(11) NOT NULL DEFAULT '0',
  `charId` int(11) DEFAULT '0',
  `playerKarma` int(11) DEFAULT '0',
  `playerPkKills` int(11) DEFAULT '0',
  `nbKills` int(11) DEFAULT '0',
  `endTime` decimal(20,0) DEFAULT '0',
  PRIMARY KEY (`itemId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cursed_weapons
-- ----------------------------
