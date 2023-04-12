/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:54:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `payments`
-- ----------------------------
DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `serviceName` varchar(32) NOT NULL,
  `paymentId` varchar(128) NOT NULL,
  `charName` varchar(32) NOT NULL,
  `paymentDate` decimal(20,0) NOT NULL,
  `sum` decimal(20,2) NOT NULL,
  `paymentInfo` varchar(128) NOT NULL,
  PRIMARY KEY (`serviceName`,`paymentId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of payments
-- ----------------------------
