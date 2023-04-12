/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:35:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `couples`
-- ----------------------------
DROP TABLE IF EXISTS `couples`;
CREATE TABLE `couples` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `player1Id` int(11) NOT NULL DEFAULT '0',
  `player2Id` int(11) NOT NULL DEFAULT '0',
  `maried` varchar(5) DEFAULT NULL,
  `affiancedDate` decimal(20,0) DEFAULT '0',
  `weddingDate` decimal(20,0) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=370504725 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of couples
-- ----------------------------
