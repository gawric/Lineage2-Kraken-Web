/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:29:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_quests`
-- ----------------------------
DROP TABLE IF EXISTS `character_quests`;
CREATE TABLE `character_quests` (
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(40) NOT NULL DEFAULT '',
  `var` varchar(20) NOT NULL DEFAULT '',
  `value` varchar(255) DEFAULT NULL,
  `class_index` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`charId`,`name`,`var`,`class_index`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_quests
-- ----------------------------
