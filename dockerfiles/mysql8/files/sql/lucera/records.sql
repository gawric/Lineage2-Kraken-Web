/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:57:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `records`
-- ----------------------------
DROP TABLE IF EXISTS `records`;
CREATE TABLE `records` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `online` int(10) unsigned NOT NULL DEFAULT '0',
  `offtrade` int(10) unsigned NOT NULL DEFAULT '0',
  `mktime` int(10) unsigned NOT NULL DEFAULT '0',
  `y` int(10) unsigned NOT NULL DEFAULT '0',
  `m` int(10) unsigned NOT NULL DEFAULT '0',
  `d` int(10) unsigned NOT NULL DEFAULT '0',
  `h` int(10) unsigned NOT NULL DEFAULT '0',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of records
-- ----------------------------
INSERT INTO `records` VALUES ('1', '1', '0', '0', '2012', '1', '1', '0', '1200');
INSERT INTO `records` VALUES ('2', '1', '0', '0', '2012', '1', '1', '1', '3600');
INSERT INTO `records` VALUES ('3', '1', '0', '0', '2012', '1', '1', '2', '7200');
INSERT INTO `records` VALUES ('4', '1', '0', '0', '2012', '1', '1', '3', '10800');
INSERT INTO `records` VALUES ('5', '1', '0', '0', '2012', '1', '1', '4', '14400');
INSERT INTO `records` VALUES ('6', '1', '0', '0', '2012', '1', '1', '5', '18000');
INSERT INTO `records` VALUES ('7', '1', '0', '0', '2012', '1', '1', '6', '21600');
INSERT INTO `records` VALUES ('8', '1', '0', '0', '2012', '1', '1', '7', '25200');
INSERT INTO `records` VALUES ('9', '1', '0', '0', '2012', '1', '1', '8', '28800');
INSERT INTO `records` VALUES ('10', '1', '0', '0', '2012', '1', '1', '9', '32400');
INSERT INTO `records` VALUES ('11', '1', '0', '0', '2012', '1', '1', '10', '36000');
INSERT INTO `records` VALUES ('12', '1', '0', '0', '2012', '1', '1', '11', '39600');
INSERT INTO `records` VALUES ('13', '1', '0', '0', '2012', '1', '1', '12', '43200');
INSERT INTO `records` VALUES ('14', '1', '0', '0', '2012', '1', '1', '13', '46800');
INSERT INTO `records` VALUES ('15', '1', '0', '0', '2012', '1', '1', '14', '50400');
INSERT INTO `records` VALUES ('16', '1', '0', '0', '2012', '1', '1', '15', '54000');
INSERT INTO `records` VALUES ('17', '1', '0', '0', '2012', '1', '1', '16', '57600');
INSERT INTO `records` VALUES ('18', '1', '0', '0', '2012', '1', '1', '17', '61200');
INSERT INTO `records` VALUES ('19', '1', '0', '0', '2012', '1', '1', '18', '64800');
INSERT INTO `records` VALUES ('20', '1', '0', '0', '2012', '1', '1', '19', '68400');
INSERT INTO `records` VALUES ('21', '1', '0', '0', '2012', '1', '1', '20', '74400');
INSERT INTO `records` VALUES ('22', '1', '0', '0', '2012', '1', '1', '21', '75600');
INSERT INTO `records` VALUES ('23', '1', '0', '0', '2012', '1', '1', '22', '79200');
INSERT INTO `records` VALUES ('24', '1', '0', '0', '2012', '1', '1', '23', '82800');
