/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:33:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `clan_data`
-- ----------------------------
DROP TABLE IF EXISTS `clan_data`;
CREATE TABLE `clan_data` (
  `clan_id` int(11) NOT NULL DEFAULT '0',
  `clan_name` varchar(45) DEFAULT NULL,
  `clan_level` int(11) DEFAULT NULL,
  `hasCastle` int(11) DEFAULT NULL,
  `hasFort` int(11) DEFAULT NULL,
  `ally_id` int(11) DEFAULT NULL,
  `ally_name` varchar(45) DEFAULT NULL,
  `leader_id` int(11) DEFAULT NULL,
  `crest_id` int(11) DEFAULT NULL,
  `crest_large_id` int(11) DEFAULT NULL,
  `ally_crest_id` int(11) DEFAULT NULL,
  `reputation_score` int(11) NOT NULL DEFAULT '0',
  `rank` int(11) NOT NULL DEFAULT '0',
  `auction_bid_at` int(11) NOT NULL DEFAULT '0',
  `ally_penalty_expiry_time` decimal(20,0) NOT NULL DEFAULT '0',
  `ally_penalty_type` decimal(1,0) NOT NULL DEFAULT '0',
  `char_penalty_expiry_time` decimal(20,0) NOT NULL DEFAULT '0',
  `dissolving_expiry_time` decimal(20,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`clan_id`),
  KEY `leader_id` (`leader_id`) USING BTREE,
  KEY `ally_id` (`ally_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clan_data
-- ----------------------------
