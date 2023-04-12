/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:59:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `seven_signs_festival`
-- ----------------------------
DROP TABLE IF EXISTS `seven_signs_festival`;
CREATE TABLE `seven_signs_festival` (
  `festivalId` int(1) NOT NULL DEFAULT '0',
  `cabal` varchar(4) NOT NULL DEFAULT '',
  `cycle` int(4) NOT NULL DEFAULT '0',
  `date` bigint(50) DEFAULT '0',
  `score` int(5) NOT NULL DEFAULT '0',
  `members` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`festivalId`,`cabal`,`cycle`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seven_signs_festival
-- ----------------------------
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '1', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '1', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '1', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '1', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '1', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '1', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '1', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '1', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '1', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '1', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '2', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '2', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '2', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '2', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '2', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '2', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '2', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '2', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '2', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '2', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '3', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '3', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '3', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '3', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '3', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '3', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '3', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '3', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '3', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '3', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '4', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '4', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '4', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '4', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '4', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '4', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '4', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '4', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '4', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '4', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '5', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '5', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '5', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '5', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '5', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '5', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '5', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '5', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '5', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '5', '1378154230089', '10', 'Sofija,spoileris,');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '6', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '6', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '6', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '6', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '6', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '6', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '6', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '6', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '6', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '6', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '7', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '7', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '7', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '7', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '7', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '7', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '7', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '7', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '7', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '7', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '8', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '8', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '8', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '8', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '8', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '8', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '8', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '8', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '8', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '8', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '9', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '9', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '9', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '9', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '9', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '9', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '9', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '9', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '9', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '9', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '10', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '10', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '10', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '10', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '10', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '10', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '10', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '10', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '10', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '10', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '11', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '11', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '11', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '11', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '11', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '11', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '11', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '11', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '11', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '11', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '12', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '12', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '12', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '12', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '12', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '12', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '12', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '12', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '12', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '12', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '13', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '13', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '13', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '13', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '13', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '13', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '13', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '13', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '13', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '13', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '14', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '14', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '14', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '14', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '14', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '14', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '14', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '14', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '14', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '14', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '15', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '15', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '15', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '15', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '15', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '15', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '15', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '15', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '15', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '15', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '16', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '16', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '16', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '16', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '16', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '16', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '16', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '16', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '16', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '16', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '17', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '17', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '17', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '17', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '17', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '17', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '17', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '17', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '17', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '17', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '18', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '18', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '18', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '18', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '18', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '18', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '18', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '18', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '18', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '18', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '19', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '19', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '19', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '19', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '19', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '19', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '19', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '19', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '19', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '19', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '20', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '20', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '20', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '20', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '20', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '20', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '20', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '20', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '20', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '20', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dusk', '21', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dusk', '21', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dusk', '21', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dusk', '21', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dusk', '21', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('0', 'dawn', '21', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('1', 'dawn', '21', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('2', 'dawn', '21', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('3', 'dawn', '21', '0', '0', '');
INSERT INTO `seven_signs_festival` VALUES ('4', 'dawn', '21', '0', '0', '');
