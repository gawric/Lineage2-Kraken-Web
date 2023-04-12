/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:37:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `custom_spawnlist`
-- ----------------------------
DROP TABLE IF EXISTS `custom_spawnlist`;
CREATE TABLE `custom_spawnlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(40) NOT NULL DEFAULT '',
  `count` int(9) NOT NULL DEFAULT '0',
  `npc_templateid` int(9) NOT NULL DEFAULT '0',
  `locx` int(9) NOT NULL DEFAULT '0',
  `locy` int(9) NOT NULL DEFAULT '0',
  `locz` int(9) NOT NULL DEFAULT '0',
  `heading` int(9) NOT NULL DEFAULT '0',
  `respawn_delay` int(9) NOT NULL DEFAULT '0',
  `loc_id` int(9) NOT NULL DEFAULT '0',
  `periodOfDay` decimal(2,0) DEFAULT '0',
  `random_zone` int(9) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`id`),
  KEY `key_npc_templateid` (`npc_templateid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2433 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of custom_spawnlist
-- ----------------------------
