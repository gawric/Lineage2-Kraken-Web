/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:30:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `character_setting`
-- ----------------------------
DROP TABLE IF EXISTS `character_setting`;
CREATE TABLE `character_setting` (
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `show_traders` int(10) NOT NULL DEFAULT '1',
  `enable_autoloot` int(11) NOT NULL DEFAULT '0',
  `buff_animation` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`charId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of character_setting
-- ----------------------------
