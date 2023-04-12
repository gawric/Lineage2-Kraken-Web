/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:50:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `items`
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `owner_id` int(11) DEFAULT NULL,
  `object_id` int(11) NOT NULL DEFAULT '0',
  `item_id` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `enchant_level` int(11) DEFAULT NULL,
  `loc` varchar(10) DEFAULT NULL,
  `loc_data` int(11) DEFAULT NULL,
  `time_of_use` int(11) DEFAULT NULL,
  `custom_type1` int(11) DEFAULT '0',
  `custom_type2` int(11) DEFAULT '0',
  `mana_left` decimal(5,0) NOT NULL DEFAULT '-1',
  `attributes` varchar(50) DEFAULT '',
  `process` varchar(64) NOT NULL DEFAULT '',
  `creator_id` int(11) DEFAULT NULL,
  `first_owner_id` int(11) NOT NULL,
  `creation_time` decimal(16,0) DEFAULT NULL,
  `data` varchar(128) DEFAULT NULL,
  `end_time` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`),
  KEY `key_owner_id` (`owner_id`) USING BTREE,
  KEY `key_loc` (`loc`) USING BTREE,
  KEY `key_item_id` (`item_id`) USING BTREE,
  KEY `key_time_of_use` (`time_of_use`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of items
-- ----------------------------
