/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:53:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `olympiad_nobles`
-- ----------------------------
DROP TABLE IF EXISTS `olympiad_nobles`;
CREATE TABLE `olympiad_nobles` (
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `class_id` decimal(3,0) NOT NULL DEFAULT '0',
  `olympiad_points` decimal(10,0) NOT NULL DEFAULT '0',
  `competitions_done` decimal(3,0) NOT NULL DEFAULT '0',
  `competitions_won` decimal(3,0) NOT NULL DEFAULT '0',
  `competitions_lost` decimal(3,0) NOT NULL DEFAULT '0',
  `competitions_drawn` decimal(3,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`charId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of olympiad_nobles
-- ----------------------------
