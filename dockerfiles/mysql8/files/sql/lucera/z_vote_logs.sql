/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 21:11:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `z_vote_logs`
-- ----------------------------
DROP TABLE IF EXISTS `z_vote_logs`;
CREATE TABLE `z_vote_logs` (
  `id` bigint(9) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) DEFAULT '',
  `name` varchar(20) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=801736 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_vote_logs
-- ----------------------------
