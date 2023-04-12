/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:21:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `auction_bid`
-- ----------------------------
DROP TABLE IF EXISTS `auction_bid`;
CREATE TABLE `auction_bid` (
  `id` int(11) NOT NULL DEFAULT '0',
  `auctionId` int(11) NOT NULL DEFAULT '0',
  `bidderId` int(11) NOT NULL DEFAULT '0',
  `bidderName` varchar(50) NOT NULL,
  `clan_name` varchar(50) NOT NULL,
  `maxBid` int(11) NOT NULL DEFAULT '0',
  `time_bid` decimal(20,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`auctionId`,`bidderId`),
  KEY `id` (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auction_bid
-- ----------------------------
