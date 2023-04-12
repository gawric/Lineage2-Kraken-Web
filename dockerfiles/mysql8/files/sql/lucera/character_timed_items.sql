/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:33:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_timed_items`
-- ----------------------------
DROP TABLE IF EXISTS `character_timed_items`;
CREATE TABLE `character_timed_items` (
  `charId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `time` decimal(20,0) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_timed_items
-- ----------------------------
