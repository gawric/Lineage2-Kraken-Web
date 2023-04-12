/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:38:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `event_votes`
-- ----------------------------
DROP TABLE IF EXISTS `event_votes`;
CREATE TABLE `event_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_name` varchar(45) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `votes` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_rewarded` tinyint(1) NOT NULL DEFAULT '0',
  `is_notified` tinyint(1) NOT NULL DEFAULT '0',
  `web_site` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `date` (`date`,`account_name`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of event_votes
-- ----------------------------
