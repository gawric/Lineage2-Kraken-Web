/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:58:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `service_log`
-- ----------------------------
DROP TABLE IF EXISTS `service_log`;
CREATE TABLE `service_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serviceName` varchar(50) NOT NULL DEFAULT '',
  `charName` varchar(50) NOT NULL DEFAULT '',
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `message` varchar(50) NOT NULL DEFAULT '',
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of service_log
-- ----------------------------
