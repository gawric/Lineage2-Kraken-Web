/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-19 03:57:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `z_boss_deaths`
-- ----------------------------
DROP TABLE IF EXISTS `z_boss_deaths`;
CREATE TABLE `z_boss_deaths` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `bossId` int(8) unsigned NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61506 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_boss_deaths
-- ----------------------------
INSERT INTO `z_boss_deaths` VALUES ('61504', '25302', '2015-02-26 15:59:19');
INSERT INTO `z_boss_deaths` VALUES ('61505', '29022', '2015-03-04 03:05:18');
