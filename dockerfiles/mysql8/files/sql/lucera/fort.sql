/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:39:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `fort`
-- ----------------------------
DROP TABLE IF EXISTS `fort`;
CREATE TABLE `fort` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(25) NOT NULL,
  `siegeDate` decimal(20,0) NOT NULL DEFAULT '0',
  `lastOwnedTime` decimal(20,0) NOT NULL DEFAULT '0',
  `owner` int(11) NOT NULL DEFAULT '0',
  `fortType` int(1) NOT NULL DEFAULT '0',
  `state` int(1) NOT NULL DEFAULT '0',
  `castleId` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fort
-- ----------------------------
INSERT INTO `fort` VALUES ('101', 'Shanty', '0', '1403630686966', '270245548', '0', '1', '0');
INSERT INTO `fort` VALUES ('102', 'Southern', '0', '0', '0', '1', '0', '0');
INSERT INTO `fort` VALUES ('103', 'Hive', '0', '1414082701188', '268899886', '0', '1', '0');
INSERT INTO `fort` VALUES ('104', 'Valley', '0', '1423419550693', '268676674', '1', '1', '0');
INSERT INTO `fort` VALUES ('105', 'Ivory', '0', '1405028779577', '271625873', '0', '1', '0');
INSERT INTO `fort` VALUES ('106', 'Narsell', '0', '1415885590750', '268868656', '0', '1', '0');
INSERT INTO `fort` VALUES ('107', 'Bayou', '0', '1404065954607', '270915045', '1', '1', '0');
INSERT INTO `fort` VALUES ('108', 'WhiteSands', '0', '0', '0', '0', '0', '0');
INSERT INTO `fort` VALUES ('109', 'Borderland', '0', '1423246806642', '268554114', '1', '1', '0');
INSERT INTO `fort` VALUES ('110', 'Swamp', '0', '1404560645751', '269484061', '1', '1', '0');
INSERT INTO `fort` VALUES ('111', 'Archaic', '0', '1423689385395', '268816129', '0', '1', '0');
INSERT INTO `fort` VALUES ('112', 'Floran', '0', '1423373104062', '268518005', '1', '1', '0');
INSERT INTO `fort` VALUES ('113', 'CloudMountain', '0', '1423658856582', '268660185', '1', '1', '0');
INSERT INTO `fort` VALUES ('114', 'Tanor', '0', '1413735185749', '269799578', '0', '1', '0');
INSERT INTO `fort` VALUES ('115', 'Dragonspine', '0', '1413811528752', '268930123', '0', '1', '0');
INSERT INTO `fort` VALUES ('116', 'Antharas', '0', '1413648518791', '270569497', '1', '1', '0');
INSERT INTO `fort` VALUES ('117', 'Western', '0', '1423703648344', '268567336', '1', '1', '0');
INSERT INTO `fort` VALUES ('118', 'Hunters', '0', '1414688742308', '269579402', '1', '1', '0');
INSERT INTO `fort` VALUES ('119', 'Aaru', '0', '1413897985441', '269487160', '0', '1', '0');
INSERT INTO `fort` VALUES ('120', 'Demon', '0', '1404140644858', '270703655', '0', '1', '0');
INSERT INTO `fort` VALUES ('121', 'Monastic', '0', '1404244003038', '271905855', '0', '1', '0');
