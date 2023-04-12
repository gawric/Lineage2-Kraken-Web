/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:33:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `clan_privs`
-- ----------------------------
DROP TABLE IF EXISTS `clan_privs`;
CREATE TABLE `clan_privs` (
  `clan_id` int(11) NOT NULL DEFAULT '0',
  `rank` int(11) NOT NULL DEFAULT '0',
  `party` int(11) NOT NULL DEFAULT '0',
  `privilleges` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`clan_id`,`rank`,`party`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clan_privs
-- ----------------------------
