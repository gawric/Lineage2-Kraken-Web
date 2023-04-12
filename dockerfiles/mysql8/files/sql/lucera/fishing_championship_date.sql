/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:39:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `fishing_championship_date`
-- ----------------------------
DROP TABLE IF EXISTS `fishing_championship_date`;
CREATE TABLE `fishing_championship_date` (
  `finish_date` decimal(20,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fishing_championship_date
-- ----------------------------
INSERT INTO `fishing_championship_date` VALUES ('1426611600300');
