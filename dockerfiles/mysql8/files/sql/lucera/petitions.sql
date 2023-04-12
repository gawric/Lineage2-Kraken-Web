/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:54:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `petitions`
-- ----------------------------
DROP TABLE IF EXISTS `petitions`;
CREATE TABLE `petitions` (
  `petition_id` int(11) NOT NULL AUTO_INCREMENT,
  `charId` int(11) NOT NULL DEFAULT '0',
  `petition_txt` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'New',
  PRIMARY KEY (`petition_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of petitions
-- ----------------------------
