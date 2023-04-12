/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:36:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `custom_merchant_buylists`
-- ----------------------------
DROP TABLE IF EXISTS `custom_merchant_buylists`;
CREATE TABLE `custom_merchant_buylists` (
  `item_id` decimal(9,0) NOT NULL DEFAULT '0',
  `price` decimal(11,0) NOT NULL DEFAULT '0',
  `shop_id` decimal(9,0) NOT NULL DEFAULT '0',
  `order` decimal(4,0) NOT NULL DEFAULT '0',
  `count` int(11) NOT NULL DEFAULT '-1',
  `currentCount` int(11) NOT NULL DEFAULT '-1',
  `time` int(11) NOT NULL DEFAULT '0',
  `savetimer` decimal(20,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`shop_id`,`order`),
  UNIQUE KEY `shop_item_idx` (`shop_id`,`item_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of custom_merchant_buylists
-- ----------------------------
