/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:34:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `clanhall_functions`
-- ----------------------------
DROP TABLE IF EXISTS `clanhall_functions`;
CREATE TABLE `clanhall_functions` (
  `hall_id` int(2) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  `lvl` int(3) NOT NULL DEFAULT '0',
  `lease` int(10) NOT NULL DEFAULT '0',
  `rate` decimal(20,0) NOT NULL DEFAULT '0',
  `endTime` decimal(20,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`hall_id`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clanhall_functions
-- ----------------------------
