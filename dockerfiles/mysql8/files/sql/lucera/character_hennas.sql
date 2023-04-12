/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:27:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_hennas`
-- ----------------------------
DROP TABLE IF EXISTS `character_hennas`;
CREATE TABLE `character_hennas` (
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `symbol_id` int(11) DEFAULT NULL,
  `slot` int(11) NOT NULL DEFAULT '0',
  `class_index` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`charId`,`slot`,`class_index`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_hennas
-- ----------------------------
INSERT INTO `character_hennas` VALUES ('268502369', '114', '1', '0');
INSERT INTO `character_hennas` VALUES ('268502369', '169', '2', '0');
INSERT INTO `character_hennas` VALUES ('268502369', '174', '3', '0');
INSERT INTO `character_hennas` VALUES ('268503879', '111', '1', '0');
INSERT INTO `character_hennas` VALUES ('268503879', '171', '2', '0');
INSERT INTO `character_hennas` VALUES ('268503879', '173', '3', '0');
