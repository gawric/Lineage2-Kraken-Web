/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:44:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `helper_buff_list`
-- ----------------------------
DROP TABLE IF EXISTS `helper_buff_list`;
CREATE TABLE `helper_buff_list` (
  `id` int(11) NOT NULL DEFAULT '0',
  `skill_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(25) NOT NULL DEFAULT '',
  `skill_level` int(10) unsigned NOT NULL DEFAULT '0',
  `lower_level` int(10) unsigned NOT NULL DEFAULT '0',
  `upper_level` int(10) unsigned NOT NULL DEFAULT '0',
  `owner_class` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of helper_buff_list
-- ----------------------------
INSERT INTO `helper_buff_list` VALUES ('0', '4322', 'Wind Walk', '1', '6', '41', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('1', '4323', 'Shield', '1', '6', '41', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('2', '4338', 'Life Cubic', '1', '16', '34', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('3', '4324', 'Bless the Body', '1', '6', '41', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('4', '4325', 'Vampiric Rage', '1', '6', '41', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('5', '4326', 'Regeneration', '1', '6', '41', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('6', '4327', 'Haste', '1', '6', '39', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('7', '4322', 'WindWalk', '1', '6', '41', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('8', '4323', 'Shield', '1', '6', '41', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('9', '4338', 'Life Cubic', '1', '16', '34', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('10', '4328', 'Bless the Soul', '1', '6', '41', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('11', '4329', 'Acumen', '1', '6', '41', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('12', '4330', 'Concentration', '1', '6', '41', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('13', '4331', 'Empower', '1', '6', '41', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('14', '5632', 'Haste', '1', '40', '41', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('17', '4322', 'Wind Walk', '1', '6', '41', 'Summon');
INSERT INTO `helper_buff_list` VALUES ('18', '4323', 'Shield', '1', '6', '41', 'Summon');
INSERT INTO `helper_buff_list` VALUES ('20', '4324', 'Bless the Body', '1', '6', '41', 'Summon');
INSERT INTO `helper_buff_list` VALUES ('21', '4328', 'Bless the Soul', '1', '6', '41', 'Summon');
INSERT INTO `helper_buff_list` VALUES ('22', '4325', 'Vampiric Rage', '1', '6', '41', 'Summon');
INSERT INTO `helper_buff_list` VALUES ('23', '4329', 'Acumen', '1', '6', '41', 'Summon');
INSERT INTO `helper_buff_list` VALUES ('24', '4326', 'Regeneration', '1', '6', '41', 'Summon');
INSERT INTO `helper_buff_list` VALUES ('25', '4330', 'Concentration', '1', '6', '41', 'Summon');
INSERT INTO `helper_buff_list` VALUES ('26', '5632', 'Haste', '1', '40', '41', 'Summon');
INSERT INTO `helper_buff_list` VALUES ('27', '4331', 'Empower', '1', '6', '41', 'Summon');
INSERT INTO `helper_buff_list` VALUES ('28', '1068', 'Might', '1', '1', '40', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('29', '1068', 'Might', '2', '40', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('30', '1077', 'Focus', '1', '1', '40', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('31', '1077', 'Focus', '2', '40', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('32', '1087', 'Agility', '2', '1', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('33', '1240', 'Guidance', '1', '1', '40', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('34', '1240', 'Guidance', '2', '40', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('35', '1035', 'Mental Shield', '1', '1', '40', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('36', '1035', 'Mental Shield', '2', '40', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('37', '1035', 'Mental Shield', '1', '1', '40', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('38', '1035', 'Mental Shield', '2', '40', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('39', '1045', 'Bless the Body', '1', '1', '40', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('40', '1045', 'Bless the Body', '4', '40', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('41', '1045', 'Bless the Body', '1', '1', '40', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('42', '1045', 'Bless the Body', '4', '40', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('43', '1048', 'Bless the Soul', '1', '1', '40', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('44', '1048', 'Bless the Soul', '4', '40', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('45', '1048', 'Bless the Soul', '1', '1', '40', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('46', '1048', 'Bless the Soul', '4', '40', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('47', '1086', 'Haste', '1', '1', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('48', '1036', 'Magic Barrier', '1', '1', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('49', '1036', 'Magic Barrier', '1', '1', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('50', '1040', 'Shield', '1', '1', '40', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('51', '1040', 'Shield', '2', '40', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('52', '1040', 'Shield', '1', '1', '40', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('53', '1040', 'Shield', '2', '40', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('54', '1242', 'Death Whisper', '1', '1', '40', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('55', '1242', 'Death Whisper', '2', '40', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('56', '1044', 'Regeneration', '3', '1', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('57', '1044', 'Regeneration', '3', '1', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('58', '1062', 'Berserker Spirit', '1', '1', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('59', '1062', 'Berserker Spirit', '1', '1', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('60', '1259', 'Resist Shock', '1', '1', '40', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('61', '1259', 'Resist Shock', '2', '40', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('62', '1259', 'Resist Shock', '1', '1', '40', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('63', '1259', 'Resist Shock', '2', '40', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('64', '1204', 'Wind Walk', '2', '1', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('65', '1204', 'Wind Walk', '2', '1', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('66', '1257', 'Decrease Weight', '1', '1', '40', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('67', '1257', 'Decrease Weight', '2', '40', '80', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('68', '1257', 'Decrease Weight', '1', '1', '40', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('69', '1257', 'Decrease Weight', '2', '40', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('70', '1397', 'Clarity', '1', '1', '40', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('71', '1303', 'Wild Magic', '1', '1', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('72', '1059', 'Empower', '1', '1', '40', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('73', '1059', 'Empower', '2', '40', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('74', '1085', 'Acumen', '2', '40', '80', 'Mage');
INSERT INTO `helper_buff_list` VALUES ('75', '1268', 'Vampiric Rage', '2', '1', '40', 'Fighter');
INSERT INTO `helper_buff_list` VALUES ('76', '1268', 'Vampiric Rage', '3', '40', '80', 'Fighter');
