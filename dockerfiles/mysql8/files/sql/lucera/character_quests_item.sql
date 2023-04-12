/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:30:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_quests_item`
-- ----------------------------
DROP TABLE IF EXISTS `character_quests_item`;
CREATE TABLE `character_quests_item` (
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `questId` int(10) NOT NULL,
  `itemId` decimal(11,0) NOT NULL,
  PRIMARY KEY (`charId`,`questId`,`itemId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_quests_item
-- ----------------------------
