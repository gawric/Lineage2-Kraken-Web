/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:44:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `gm_audit`
-- ----------------------------
DROP TABLE IF EXISTS `gm_audit`;
CREATE TABLE `gm_audit` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gm_name` varchar(45) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `param` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gm_audit
-- ----------------------------
