/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:50:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jail_spawnlist`
-- ----------------------------
DROP TABLE IF EXISTS `jail_spawnlist`;
CREATE TABLE `jail_spawnlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(40) DEFAULT NULL,
  `count` int(9) NOT NULL DEFAULT '0',
  `npc_templateid` int(9) NOT NULL DEFAULT '0',
  `locx` int(9) NOT NULL DEFAULT '0',
  `locy` int(9) NOT NULL DEFAULT '0',
  `locz` int(9) NOT NULL DEFAULT '0',
  `randomx` int(9) NOT NULL DEFAULT '0',
  `randomy` int(9) NOT NULL DEFAULT '0',
  `heading` int(9) NOT NULL DEFAULT '0',
  `respawn_delay` int(9) NOT NULL DEFAULT '0',
  `loc_id` int(9) NOT NULL DEFAULT '0',
  `periodOfDay` decimal(2,0) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `key_npc_templateid` (`npc_templateid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jail_spawnlist
-- ----------------------------
INSERT INTO `jail_spawnlist` VALUES ('1', 'gm_consulation_sercice', '1', '20656', '-113833', '-248708', '-3019', '0', '0', '31729', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('2', 'gm_consulation_service', '1', '20656', '-114286', '-248687', '-2993', '0', '0', '32271', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('3', 'gm_consulation_sercice', '1', '20656', '-114736', '-248665', '-2993', '0', '0', '32087', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('4', 'gm_consulation_service', '1', '20656', '-115255', '-248633', '-3019', '0', '0', '31444', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('5', 'gm_consulation_service', '1', '20656', '-115253', '-248947', '-2993', '0', '0', '49243', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('6', 'gm_consulation_service', '1', '20656', '-115257', '-249323', '-2993', '0', '0', '48568', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('7', 'gm_consulation_service', '1', '20656', '-115245', '-249775', '-2993', '0', '0', '49501', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('8', 'gm_consulation_service', '1', '20656', '-115221', '-250107', '-2993', '0', '0', '50005', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('9', 'gm_consulation_service', '1', '20656', '-114869', '-250109', '-2993', '0', '0', '33', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('10', 'gm_consulation_service', '1', '20656', '-114405', '-250120', '-2993', '0', '0', '82', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('11', 'gm_consulation_service', '1', '20656', '-113881', '-250109', '-2993', '0', '0', '240', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('12', 'gm_consulation_service', '1', '20656', '-113860', '-249795', '-2993', '0', '0', '15689', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('13', 'gm_consulation_service', '1', '20656', '-113841', '-249412', '-2993', '0', '0', '14159', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('14', 'gm_consulation_service', '1', '20656', '-114125', '-250089', '-2993', '0', '0', '59645', '60', '0', '0');
INSERT INTO `jail_spawnlist` VALUES ('15', 'gm_consulation_service', '1', '20656', '-114536', '-248776', '-2987', '0', '0', '15648', '60', '0', '0');
