/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:31:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_shortcuts`
-- ----------------------------
DROP TABLE IF EXISTS `character_shortcuts`;
CREATE TABLE `character_shortcuts` (
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `slot` decimal(3,0) NOT NULL DEFAULT '0',
  `page` decimal(3,0) NOT NULL DEFAULT '0',
  `type` decimal(3,0) DEFAULT NULL,
  `shortcut_id` decimal(16,0) DEFAULT NULL,
  `level` varchar(4) DEFAULT NULL,
  `class_index` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`charId`,`slot`,`page`,`class_index`),
  KEY `shortcut_id` (`shortcut_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_shortcuts
-- ----------------------------
