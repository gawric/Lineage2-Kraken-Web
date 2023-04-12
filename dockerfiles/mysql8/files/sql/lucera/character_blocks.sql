/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:27:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_blocks`
-- ----------------------------
DROP TABLE IF EXISTS `character_blocks`;
CREATE TABLE `character_blocks` (
  `charId` int(10) unsigned NOT NULL,
  `name` varchar(35) NOT NULL,
  PRIMARY KEY (`charId`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_blocks
-- ----------------------------
