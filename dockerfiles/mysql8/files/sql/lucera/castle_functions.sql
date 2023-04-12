/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:26:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `castle_functions`
-- ----------------------------
DROP TABLE IF EXISTS `castle_functions`;
CREATE TABLE `castle_functions` (
  `castle_id` int(2) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  `lvl` int(3) NOT NULL DEFAULT '0',
  `lease` int(10) NOT NULL DEFAULT '0',
  `rate` decimal(20,0) NOT NULL DEFAULT '0',
  `endTime` decimal(20,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`castle_id`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of castle_functions
-- ----------------------------
