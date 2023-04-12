/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:36:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `custom_merchant_shopids`
-- ----------------------------
DROP TABLE IF EXISTS `custom_merchant_shopids`;
CREATE TABLE `custom_merchant_shopids` (
  `shop_id` decimal(9,0) NOT NULL DEFAULT '0',
  `npc_id` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of custom_merchant_shopids
-- ----------------------------
