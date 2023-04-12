/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:34:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `clan_skills`
-- ----------------------------
DROP TABLE IF EXISTS `clan_skills`;
CREATE TABLE `clan_skills` (
  `clan_id` int(11) NOT NULL DEFAULT '0',
  `skill_id` int(11) NOT NULL DEFAULT '0',
  `skill_level` int(5) NOT NULL DEFAULT '0',
  `skill_name` varchar(26) DEFAULT NULL,
  PRIMARY KEY (`clan_id`,`skill_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clan_skills
-- ----------------------------
