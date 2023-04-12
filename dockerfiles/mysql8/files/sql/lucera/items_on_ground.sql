/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:50:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `items_on_ground`
-- ----------------------------
DROP TABLE IF EXISTS `items_on_ground`;
CREATE TABLE `items_on_ground` (
  `object_id` int(11) NOT NULL DEFAULT '0',
  `item_id` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `enchant_level` int(11) DEFAULT NULL,
  `x` int(11) NOT NULL DEFAULT '0',
  `y` int(11) NOT NULL DEFAULT '0',
  `z` int(11) NOT NULL DEFAULT '0',
  `drop_time` decimal(20,0) NOT NULL DEFAULT '0',
  `equipable` int(1) DEFAULT '0',
  PRIMARY KEY (`object_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of items_on_ground
-- ----------------------------
