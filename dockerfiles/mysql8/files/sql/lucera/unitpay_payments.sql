/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 21:09:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `unitpay_payments`
-- ----------------------------
DROP TABLE IF EXISTS `unitpay_payments`;
CREATE TABLE `unitpay_payments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `unitpayId` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `sum` float NOT NULL,
  `itemsCount` int(11) NOT NULL DEFAULT '1',
  `dateCreate` datetime NOT NULL,
  `dateComplete` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of unitpay_payments
-- ----------------------------
