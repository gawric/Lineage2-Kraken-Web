/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:54:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `pets`
-- ----------------------------
DROP TABLE IF EXISTS `pets`;
CREATE TABLE `pets` (
  `item_obj_id` decimal(11,0) NOT NULL DEFAULT '0',
  `name` varchar(16) DEFAULT NULL,
  `level` decimal(11,0) DEFAULT NULL,
  `curHp` decimal(18,0) DEFAULT NULL,
  `curMp` decimal(18,0) DEFAULT NULL,
  `exp` decimal(20,0) DEFAULT NULL,
  `sp` decimal(11,0) DEFAULT NULL,
  `fed` decimal(11,0) DEFAULT NULL,
  `weapon` int(5) DEFAULT NULL,
  `armor` int(5) DEFAULT NULL,
  `jewel` int(5) DEFAULT NULL,
  PRIMARY KEY (`item_obj_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pets
-- ----------------------------
