/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:39:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `fishing_championship`
-- ----------------------------
DROP TABLE IF EXISTS `fishing_championship`;
CREATE TABLE `fishing_championship` (
  `PlayerName` varchar(35) NOT NULL,
  `fishLength` float(10,2) NOT NULL,
  `rewarded` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fishing_championship
-- ----------------------------
