/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:55:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `post_id` int(8) NOT NULL DEFAULT '0',
  `post_owner_name` varchar(255) NOT NULL DEFAULT '',
  `post_ownerid` int(8) NOT NULL DEFAULT '0',
  `post_date` decimal(20,0) NOT NULL DEFAULT '0',
  `post_topic_id` int(8) NOT NULL DEFAULT '0',
  `post_forum_id` int(8) NOT NULL DEFAULT '0',
  `post_txt` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------
