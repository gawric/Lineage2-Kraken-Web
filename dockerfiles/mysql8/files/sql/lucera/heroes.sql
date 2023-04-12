/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:45:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `heroes`
-- ----------------------------
DROP TABLE IF EXISTS `heroes`;
CREATE TABLE `heroes` (
  `charId` decimal(11,0) NOT NULL DEFAULT '0',
  `char_name` varchar(45) NOT NULL DEFAULT '',
  `class_id` decimal(3,0) NOT NULL DEFAULT '0',
  `count` decimal(3,0) NOT NULL DEFAULT '0',
  `played` decimal(1,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`charId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of heroes
-- ----------------------------
