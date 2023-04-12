/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:32:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_teleports`
-- ----------------------------
DROP TABLE IF EXISTS `character_teleports`;
CREATE TABLE `character_teleports` (
  `charId` int(11) NOT NULL,
  `locId` tinyint(4) NOT NULL DEFAULT '1',
  `locName` varchar(50) NOT NULL,
  `acronym` varchar(4) NOT NULL,
  `iconId` tinyint(4) NOT NULL,
  `xCoord` mediumint(9) NOT NULL,
  `yCoord` mediumint(9) NOT NULL,
  `zCoord` mediumint(9) NOT NULL,
  PRIMARY KEY (`charId`,`locId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_teleports
-- ----------------------------
