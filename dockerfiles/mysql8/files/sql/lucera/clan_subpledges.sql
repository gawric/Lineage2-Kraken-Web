/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:34:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `clan_subpledges`
-- ----------------------------
DROP TABLE IF EXISTS `clan_subpledges`;
CREATE TABLE `clan_subpledges` (
  `clan_id` int(11) NOT NULL DEFAULT '0',
  `sub_pledge_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(45) DEFAULT NULL,
  `leader_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`clan_id`,`sub_pledge_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clan_subpledges
-- ----------------------------
