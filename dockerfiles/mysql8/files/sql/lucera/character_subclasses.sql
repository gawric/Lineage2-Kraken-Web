/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:32:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_subclasses`
-- ----------------------------
DROP TABLE IF EXISTS `character_subclasses`;
CREATE TABLE `character_subclasses` (
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `class_id` int(2) NOT NULL DEFAULT '0',
  `exp` decimal(20,0) NOT NULL DEFAULT '0',
  `sp` decimal(11,0) NOT NULL DEFAULT '0',
  `level` int(2) NOT NULL DEFAULT '40',
  `class_index` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`charId`,`class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_subclasses
-- ----------------------------
