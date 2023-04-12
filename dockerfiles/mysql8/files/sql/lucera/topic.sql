/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 21:08:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `topic`
-- ----------------------------
DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
  `topic_id` int(8) NOT NULL DEFAULT '0',
  `topic_forum_id` int(8) NOT NULL DEFAULT '0',
  `topic_name` varchar(255) NOT NULL DEFAULT '',
  `topic_date` decimal(20,0) NOT NULL DEFAULT '0',
  `topic_ownername` varchar(255) NOT NULL DEFAULT '0',
  `topic_ownerid` int(8) NOT NULL DEFAULT '0',
  `topic_type` int(8) NOT NULL DEFAULT '0',
  `topic_reply` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of topic
-- ----------------------------
