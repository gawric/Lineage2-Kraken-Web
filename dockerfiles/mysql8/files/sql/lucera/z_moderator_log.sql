/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 21:11:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `z_moderator_log`
-- ----------------------------
DROP TABLE IF EXISTS `z_moderator_log`;
CREATE TABLE `z_moderator_log` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `moder` varchar(255) NOT NULL DEFAULT '',
  `penalty` varchar(255) NOT NULL DEFAULT '',
  `target` varchar(255) NOT NULL DEFAULT '',
  `duration` bigint(20) NOT NULL DEFAULT '0',
  `reason` varchar(999) NOT NULL DEFAULT '',
  `account_data` varchar(999) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_moderator_log
-- ----------------------------
