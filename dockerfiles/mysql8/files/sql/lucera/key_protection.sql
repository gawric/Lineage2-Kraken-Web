/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:51:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `key_protection`
-- ----------------------------
DROP TABLE IF EXISTS `key_protection`;
CREATE TABLE `key_protection` (
  `charId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT '',
  PRIMARY KEY (`charId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of key_protection
-- ----------------------------

-- ----------------------------
-- Table structure for `key_protection_question`
-- ----------------------------
DROP TABLE IF EXISTS `key_protection_question`;
CREATE TABLE `key_protection_question` (
  `questionId` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(60) NOT NULL,
  PRIMARY KEY (`questionId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of key_protection_question
-- ----------------------------
INSERT INTO `key_protection_question` VALUES ('1', 'Месяц рождения?');
INSERT INTO `key_protection_question` VALUES ('2', 'Имя отца?');
INSERT INTO `key_protection_question` VALUES ('3', 'Кличка собаки?');
INSERT INTO `key_protection_question` VALUES ('4', 'Любимая песня?');
INSERT INTO `key_protection_question` VALUES ('5', 'Любимое число?');
INSERT INTO `key_protection_question` VALUES ('6', 'Любимый фильм?');
