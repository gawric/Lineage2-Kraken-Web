/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:21:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `auction_watch`
-- ----------------------------
DROP TABLE IF EXISTS `auction_watch`;
CREATE TABLE `auction_watch` (
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `auctionId` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`charId`,`auctionId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auction_watch
-- ----------------------------
