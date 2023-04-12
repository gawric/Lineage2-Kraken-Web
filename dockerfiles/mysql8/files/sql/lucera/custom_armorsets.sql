/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:35:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `custom_armorsets`
-- ----------------------------
DROP TABLE IF EXISTS `custom_armorsets`;
CREATE TABLE `custom_armorsets` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `chest` smallint(5) unsigned NOT NULL DEFAULT '0',
  `legs` smallint(5) unsigned NOT NULL DEFAULT '0',
  `head` smallint(5) unsigned NOT NULL DEFAULT '0',
  `gloves` smallint(5) unsigned NOT NULL DEFAULT '0',
  `feet` smallint(5) unsigned NOT NULL DEFAULT '0',
  `skill_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `skill_lvl` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `skillset_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `shield` smallint(5) unsigned NOT NULL DEFAULT '0',
  `shield_skill_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `enchant6skill` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`chest`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of custom_armorsets
-- ----------------------------
