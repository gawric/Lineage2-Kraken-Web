/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:35:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `clanhall_siege`
-- ----------------------------
DROP TABLE IF EXISTS `clanhall_siege`;
CREATE TABLE `clanhall_siege` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(40) NOT NULL DEFAULT '',
  `siege_data` decimal(20,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clanhall_siege
-- ----------------------------
INSERT INTO `clanhall_siege` VALUES ('21', 'Fortress of Resistance', '1426881600883');
INSERT INTO `clanhall_siege` VALUES ('34', 'Devastated Castle', '1426881600535');
INSERT INTO `clanhall_siege` VALUES ('35', 'Bandit Stronghold', '1426881600800');
INSERT INTO `clanhall_siege` VALUES ('63', 'Wild Beast Farm', '1426881600806');
INSERT INTO `clanhall_siege` VALUES ('64', 'Fortress of Dead', '1426881600542');
