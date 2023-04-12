/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 21:11:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `z_clan_bonus`
-- ----------------------------
DROP TABLE IF EXISTS `z_clan_bonus`;
CREATE TABLE `z_clan_bonus` (
  `clan_id` int(11) NOT NULL DEFAULT '0',
  `clan_lvl` int(11) NOT NULL DEFAULT '0',
  `clan_rep` int(11) NOT NULL DEFAULT '0',
  `clan_skills` int(2) NOT NULL DEFAULT '0',
  `noble` int(2) NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`clan_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_clan_bonus
-- ----------------------------
