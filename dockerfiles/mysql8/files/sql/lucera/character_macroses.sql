/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:28:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_macroses`
-- ----------------------------
DROP TABLE IF EXISTS `character_macroses`;
CREATE TABLE `character_macroses` (
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL DEFAULT '0',
  `icon` int(11) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `descr` varchar(80) DEFAULT NULL,
  `acronym` varchar(4) DEFAULT NULL,
  `commands` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`charId`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_macroses
-- ----------------------------
