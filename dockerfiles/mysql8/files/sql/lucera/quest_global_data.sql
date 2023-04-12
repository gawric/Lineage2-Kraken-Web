/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:55:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `quest_global_data`
-- ----------------------------
DROP TABLE IF EXISTS `quest_global_data`;
CREATE TABLE `quest_global_data` (
  `quest_name` varchar(40) NOT NULL DEFAULT '',
  `var` varchar(20) NOT NULL DEFAULT '',
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`quest_name`,`var`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of quest_global_data
-- ----------------------------
INSERT INTO `quest_global_data` VALUES ('616_MagicalPowerOfFirePart2', '616_respawn', '1423659968477');
INSERT INTO `quest_global_data` VALUES ('610_MagicalPowerOfWaterPart2', '610_respawn', '1420875623294');
INSERT INTO `quest_global_data` VALUES ('625_TheFinestIngredientsPart2', '625_respawn', '1417382924368');
INSERT INTO `quest_global_data` VALUES ('604_DaimontheWhiteEyedPart2', '604_respawn', '1414516518824');
