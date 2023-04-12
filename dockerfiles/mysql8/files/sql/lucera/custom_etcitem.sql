/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:36:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `custom_etcitem`
-- ----------------------------
DROP TABLE IF EXISTS `custom_etcitem`;
CREATE TABLE `custom_etcitem` (
  `item_id` decimal(11,0) NOT NULL DEFAULT '0',
  `item_display_id` decimal(11,0) NOT NULL DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `crystallizable` varchar(5) DEFAULT NULL,
  `item_type` varchar(14) DEFAULT NULL,
  `weight` decimal(4,0) DEFAULT NULL,
  `consume_type` varchar(9) DEFAULT NULL,
  `material` varchar(11) DEFAULT NULL,
  `crystal_type` varchar(4) DEFAULT NULL,
  `duration` decimal(3,0) DEFAULT NULL,
  `lifetime` int(3) NOT NULL DEFAULT '-1',
  `price` decimal(11,0) DEFAULT NULL,
  `crystal_count` int(4) DEFAULT NULL,
  `sellable` varchar(5) DEFAULT NULL,
  `dropable` varchar(5) DEFAULT NULL,
  `destroyable` varchar(5) DEFAULT NULL,
  `tradeable` varchar(5) DEFAULT NULL,
  `skill` varchar(70) DEFAULT '0-0;',
  `html` varchar(5) DEFAULT 'false',
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of custom_etcitem
-- ----------------------------
