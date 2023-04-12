/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:45:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `item_attributes`
-- ----------------------------
DROP TABLE IF EXISTS `item_attributes`;
CREATE TABLE `item_attributes` (
  `itemId` int(11) NOT NULL DEFAULT '0',
  `augAttributes` int(11) NOT NULL DEFAULT '-1',
  `augSkillId` int(11) NOT NULL DEFAULT '-1',
  `augSkillLevel` int(11) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`itemId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of item_attributes
-- ----------------------------
