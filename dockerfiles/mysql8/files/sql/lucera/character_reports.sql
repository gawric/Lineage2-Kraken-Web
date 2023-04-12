/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:30:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_reports`
-- ----------------------------
DROP TABLE IF EXISTS `character_reports`;
CREATE TABLE `character_reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `char_name` varchar(50) NOT NULL DEFAULT '',
  `bot_name` varchar(50) NOT NULL DEFAULT '',
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_reports
-- ----------------------------
