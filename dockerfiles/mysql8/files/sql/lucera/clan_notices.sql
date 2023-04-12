/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:33:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `clan_notices`
-- ----------------------------
DROP TABLE IF EXISTS `clan_notices`;
CREATE TABLE `clan_notices` (
  `clanID` int(32) NOT NULL DEFAULT '0',
  `notice` text NOT NULL,
  `enabled` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`clanID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clan_notices
-- ----------------------------
