/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 21:05:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `siege_clans`
-- ----------------------------
DROP TABLE IF EXISTS `siege_clans`;
CREATE TABLE `siege_clans` (
  `castle_id` int(1) NOT NULL DEFAULT '0',
  `clan_id` int(11) NOT NULL DEFAULT '0',
  `type` int(1) DEFAULT NULL,
  `castle_owner` int(1) DEFAULT NULL,
  PRIMARY KEY (`clan_id`,`castle_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of siege_clans
-- ----------------------------
