/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:44:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `grandboss_intervallist`
-- ----------------------------
DROP TABLE IF EXISTS `grandboss_intervallist`;
CREATE TABLE `grandboss_intervallist` (
  `bossId` int(11) NOT NULL,
  `respawnDate` decimal(20,0) NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`bossId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of grandboss_intervallist
-- ----------------------------
INSERT INTO `grandboss_intervallist` VALUES ('29019', '1424548680000', '0');
INSERT INTO `grandboss_intervallist` VALUES ('29020', '1424286720000', '0');
INSERT INTO `grandboss_intervallist` VALUES ('29022', '1425582332624', '1');
INSERT INTO `grandboss_intervallist` VALUES ('29028', '1424809380000', '0');
INSERT INTO `grandboss_intervallist` VALUES ('29045', '1424028180000', '0');
INSERT INTO `grandboss_intervallist` VALUES ('29062', '1426653731733', '3');
INSERT INTO `grandboss_intervallist` VALUES ('29065', '0', '0');
INSERT INTO `grandboss_intervallist` VALUES ('29099', '0', '0');
INSERT INTO `grandboss_intervallist` VALUES ('29001', '1423930800000', '1');
INSERT INTO `grandboss_intervallist` VALUES ('29006', '0', '1');
INSERT INTO `grandboss_intervallist` VALUES ('29014', '0', '1');
INSERT INTO `grandboss_intervallist` VALUES ('25306', '1365447459852', '3');
INSERT INTO `grandboss_intervallist` VALUES ('25316', '1365447686440', '3');
INSERT INTO `grandboss_intervallist` VALUES ('25296', '1365419741259', '3');
