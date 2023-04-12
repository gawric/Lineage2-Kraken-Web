/*
Navicat MySQL Data Transfer

Source Server         : CRAZY
Source Server Version : 50173
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2015-05-13 18:00:08
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `item_auction`
-- ----------------------------
DROP TABLE IF EXISTS `item_auction`;
CREATE TABLE `item_auction` (
  `elemId` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `item_count` int(11) NOT NULL,
  `enchantLevel` int(11) NOT NULL DEFAULT '0',
  `augmentId` int(11) NOT NULL DEFAULT '-1',
  `augSkillId` int(11) NOT NULL DEFAULT '-1',
  `augSkillLevel` int(11) NOT NULL DEFAULT '-1',
  `trader_charId` int(11) NOT NULL,
  `buyer_charId` int(11) NOT NULL DEFAULT '-1',
  `id_price` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `addTime` bigint(11) NOT NULL,
  PRIMARY KEY (`elemId`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;