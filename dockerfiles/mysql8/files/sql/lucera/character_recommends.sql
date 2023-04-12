/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:30:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_recommends`
-- ----------------------------
DROP TABLE IF EXISTS `character_recommends`;
CREATE TABLE `character_recommends` (
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `target_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`charId`,`target_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_recommends
-- ----------------------------
