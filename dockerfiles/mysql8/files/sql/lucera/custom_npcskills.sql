/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:37:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `custom_npcskills`
-- ----------------------------
DROP TABLE IF EXISTS `custom_npcskills`;
CREATE TABLE `custom_npcskills` (
  `npcid` int(11) NOT NULL DEFAULT '0',
  `skillid` int(11) NOT NULL DEFAULT '0',
  `level` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`npcid`,`skillid`,`level`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of custom_npcskills
-- ----------------------------
INSERT INTO `custom_npcskills` VALUES ('40502', '4072', '8');
INSERT INTO `custom_npcskills` VALUES ('40502', '4099', '2');
INSERT INTO `custom_npcskills` VALUES ('40502', '4303', '1');
INSERT INTO `custom_npcskills` VALUES ('40502', '4416', '6');
INSERT INTO `custom_npcskills` VALUES ('40502', '4573', '8');
INSERT INTO `custom_npcskills` VALUES ('70010', '4037', '2');
INSERT INTO `custom_npcskills` VALUES ('70010', '4160', '9');
INSERT INTO `custom_npcskills` VALUES ('70010', '4233', '1');
INSERT INTO `custom_npcskills` VALUES ('70010', '4275', '1');
INSERT INTO `custom_npcskills` VALUES ('70010', '4278', '1');
INSERT INTO `custom_npcskills` VALUES ('70010', '4285', '2');
INSERT INTO `custom_npcskills` VALUES ('70010', '4307', '1');
INSERT INTO `custom_npcskills` VALUES ('70010', '4333', '3');
INSERT INTO `custom_npcskills` VALUES ('70010', '4416', '9');
INSERT INTO `custom_npcskills` VALUES ('70010', '4566', '9');
INSERT INTO `custom_npcskills` VALUES ('70010', '4657', '9');
INSERT INTO `custom_npcskills` VALUES ('70010', '4789', '7');
INSERT INTO `custom_npcskills` VALUES ('70011', '4160', '9');
INSERT INTO `custom_npcskills` VALUES ('70011', '4233', '1');
INSERT INTO `custom_npcskills` VALUES ('70011', '4275', '1');
INSERT INTO `custom_npcskills` VALUES ('70011', '4278', '1');
INSERT INTO `custom_npcskills` VALUES ('70011', '4285', '2');
INSERT INTO `custom_npcskills` VALUES ('70011', '4307', '1');
INSERT INTO `custom_npcskills` VALUES ('70011', '4333', '3');
INSERT INTO `custom_npcskills` VALUES ('70011', '4416', '9');
INSERT INTO `custom_npcskills` VALUES ('70011', '4566', '9');
INSERT INTO `custom_npcskills` VALUES ('70011', '4613', '9');
INSERT INTO `custom_npcskills` VALUES ('70011', '4789', '7');
INSERT INTO `custom_npcskills` VALUES ('70012', '4076', '3');
INSERT INTO `custom_npcskills` VALUES ('70012', '4077', '9');
INSERT INTO `custom_npcskills` VALUES ('70012', '4275', '1');
INSERT INTO `custom_npcskills` VALUES ('70012', '4278', '1');
INSERT INTO `custom_npcskills` VALUES ('70012', '4285', '2');
INSERT INTO `custom_npcskills` VALUES ('70012', '4307', '1');
INSERT INTO `custom_npcskills` VALUES ('70012', '4333', '3');
INSERT INTO `custom_npcskills` VALUES ('70012', '4416', '9');
INSERT INTO `custom_npcskills` VALUES ('70012', '4596', '9');
INSERT INTO `custom_npcskills` VALUES ('70012', '4633', '3');
INSERT INTO `custom_npcskills` VALUES ('70012', '4789', '7');
INSERT INTO `custom_npcskills` VALUES ('70013', '4098', '9');
INSERT INTO `custom_npcskills` VALUES ('70013', '4275', '1');
INSERT INTO `custom_npcskills` VALUES ('70013', '4278', '1');
INSERT INTO `custom_npcskills` VALUES ('70013', '4285', '2');
INSERT INTO `custom_npcskills` VALUES ('70013', '4307', '1');
INSERT INTO `custom_npcskills` VALUES ('70013', '4333', '3');
INSERT INTO `custom_npcskills` VALUES ('70013', '4416', '9');
INSERT INTO `custom_npcskills` VALUES ('70013', '4565', '9');
INSERT INTO `custom_npcskills` VALUES ('70013', '4584', '9');
INSERT INTO `custom_npcskills` VALUES ('70013', '4632', '3');
INSERT INTO `custom_npcskills` VALUES ('70013', '4789', '7');
INSERT INTO `custom_npcskills` VALUES ('70014', '4084', '6');
INSERT INTO `custom_npcskills` VALUES ('70014', '4275', '1');
INSERT INTO `custom_npcskills` VALUES ('70014', '4278', '1');
INSERT INTO `custom_npcskills` VALUES ('70014', '4285', '2');
INSERT INTO `custom_npcskills` VALUES ('70014', '4305', '1');
INSERT INTO `custom_npcskills` VALUES ('70014', '4333', '3');
INSERT INTO `custom_npcskills` VALUES ('70014', '4416', '9');
INSERT INTO `custom_npcskills` VALUES ('70014', '4576', '3');
INSERT INTO `custom_npcskills` VALUES ('70014', '4585', '3');
INSERT INTO `custom_npcskills` VALUES ('70014', '4595', '3');
INSERT INTO `custom_npcskills` VALUES ('70014', '4609', '4');
INSERT INTO `custom_npcskills` VALUES ('70014', '4789', '8');
INSERT INTO `custom_npcskills` VALUES ('70015', '4084', '6');
INSERT INTO `custom_npcskills` VALUES ('70015', '4275', '1');
INSERT INTO `custom_npcskills` VALUES ('70015', '4278', '1');
INSERT INTO `custom_npcskills` VALUES ('70015', '4285', '2');
INSERT INTO `custom_npcskills` VALUES ('70015', '4305', '1');
INSERT INTO `custom_npcskills` VALUES ('70015', '4333', '3');
INSERT INTO `custom_npcskills` VALUES ('70015', '4416', '9');
INSERT INTO `custom_npcskills` VALUES ('70015', '4560', '9');
INSERT INTO `custom_npcskills` VALUES ('70015', '4789', '8');
INSERT INTO `custom_npcskills` VALUES ('70016', '4233', '1');
INSERT INTO `custom_npcskills` VALUES ('70016', '4275', '1');
INSERT INTO `custom_npcskills` VALUES ('70016', '4278', '1');
INSERT INTO `custom_npcskills` VALUES ('70016', '4285', '2');
INSERT INTO `custom_npcskills` VALUES ('70016', '4306', '1');
INSERT INTO `custom_npcskills` VALUES ('70016', '4333', '3');
INSERT INTO `custom_npcskills` VALUES ('70016', '4416', '9');
INSERT INTO `custom_npcskills` VALUES ('70016', '4571', '9');
INSERT INTO `custom_npcskills` VALUES ('70016', '4789', '8');
INSERT INTO `custom_npcskills` VALUES ('70017', '4072', '9');
INSERT INTO `custom_npcskills` VALUES ('70017', '4151', '9');
INSERT INTO `custom_npcskills` VALUES ('70017', '4233', '1');
INSERT INTO `custom_npcskills` VALUES ('70017', '4275', '1');
INSERT INTO `custom_npcskills` VALUES ('70017', '4278', '1');
INSERT INTO `custom_npcskills` VALUES ('70017', '4285', '2');
INSERT INTO `custom_npcskills` VALUES ('70017', '4306', '1');
INSERT INTO `custom_npcskills` VALUES ('70017', '4333', '3');
INSERT INTO `custom_npcskills` VALUES ('70017', '4416', '9');
INSERT INTO `custom_npcskills` VALUES ('70017', '4789', '8');
INSERT INTO `custom_npcskills` VALUES ('70018', '4160', '9');
INSERT INTO `custom_npcskills` VALUES ('70018', '4257', '9');
INSERT INTO `custom_npcskills` VALUES ('70018', '4275', '1');
INSERT INTO `custom_npcskills` VALUES ('70018', '4278', '1');
INSERT INTO `custom_npcskills` VALUES ('70018', '4285', '2');
INSERT INTO `custom_npcskills` VALUES ('70018', '4307', '1');
INSERT INTO `custom_npcskills` VALUES ('70018', '4333', '3');
INSERT INTO `custom_npcskills` VALUES ('70018', '4416', '9');
INSERT INTO `custom_npcskills` VALUES ('70018', '4577', '9');
INSERT INTO `custom_npcskills` VALUES ('70018', '4585', '3');
INSERT INTO `custom_npcskills` VALUES ('70018', '4601', '3');
INSERT INTO `custom_npcskills` VALUES ('70018', '4789', '8');
INSERT INTO `custom_npcskills` VALUES ('70019', '4275', '1');
INSERT INTO `custom_npcskills` VALUES ('70019', '4278', '1');
INSERT INTO `custom_npcskills` VALUES ('70019', '4285', '2');
INSERT INTO `custom_npcskills` VALUES ('70019', '4307', '1');
INSERT INTO `custom_npcskills` VALUES ('70019', '4333', '3');
INSERT INTO `custom_npcskills` VALUES ('70019', '4416', '9');
INSERT INTO `custom_npcskills` VALUES ('70019', '4560', '9');
INSERT INTO `custom_npcskills` VALUES ('70019', '4789', '8');
