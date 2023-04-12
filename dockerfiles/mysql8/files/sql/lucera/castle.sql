/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:24:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `castle`
-- ----------------------------
DROP TABLE IF EXISTS `castle`;
CREATE TABLE `castle` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(25) NOT NULL,
  `taxPercent` int(11) NOT NULL DEFAULT '15',
  `newTaxPercent` int(11) NOT NULL DEFAULT '15',
  `newTaxDate` decimal(20,0) NOT NULL DEFAULT '0',
  `treasury` int(11) NOT NULL DEFAULT '0',
  `bloodaliance` int(11) NOT NULL DEFAULT '0',
  `siegeDate` decimal(20,0) NOT NULL DEFAULT '0',
  `regTimeOver` enum('true','false') NOT NULL DEFAULT 'true',
  `regTimeEnd` decimal(20,0) NOT NULL DEFAULT '0',
  `AutoTime` enum('true','false') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`name`),
  KEY `id` (`id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of castle
-- ----------------------------
INSERT INTO `castle` VALUES ('1', 'Gludio', '0', '0', '0', '0', '0', '1426957200000', 'true', '0', 'true');
INSERT INTO `castle` VALUES ('2', 'Dion', '0', '0', '0', '0', '0', '1426957200000', 'true', '0', 'true');
INSERT INTO `castle` VALUES ('3', 'Giran', '0', '0', '0', '0', '0', '1427029200000', 'true', '1426510800003', 'true');
INSERT INTO `castle` VALUES ('4', 'Oren', '0', '0', '0', '0', '0', '1427029200000', 'true', '1426510800003', 'true');
INSERT INTO `castle` VALUES ('5', 'Aden', '0', '0', '0', '0', '0', '1426957200000', 'true', '0', 'true');
INSERT INTO `castle` VALUES ('6', 'Innadril', '0', '0', '0', '0', '0', '1427029200000', 'true', '1426510800003', 'true');
INSERT INTO `castle` VALUES ('7', 'Goddard', '0', '0', '0', '0', '0', '1427029200000', 'true', '1426510800003', 'true');
INSERT INTO `castle` VALUES ('8', 'Rune', '0', '0', '0', '0', '0', '1426957200000', 'true', '0', 'true');
INSERT INTO `castle` VALUES ('9', 'Schuttgart', '0', '0', '0', '0', '0', '1427029200000', 'true', '1426510800003', 'true');
