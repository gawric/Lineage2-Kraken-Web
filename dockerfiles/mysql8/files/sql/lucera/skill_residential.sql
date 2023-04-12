/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 21:05:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `skill_residential`
-- ----------------------------
DROP TABLE IF EXISTS `skill_residential`;
CREATE TABLE `skill_residential` (
  `entityId` int(11) NOT NULL,
  `skillId` int(11) NOT NULL DEFAULT '0',
  `skillLevel` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`entityId`,`skillId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of skill_residential
-- ----------------------------
