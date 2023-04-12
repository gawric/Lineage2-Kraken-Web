/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:35:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `class_list`
-- ----------------------------
DROP TABLE IF EXISTS `class_list`;
CREATE TABLE `class_list` (
  `class_name` varchar(20) NOT NULL DEFAULT '',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of class_list
-- ----------------------------
INSERT INTO `class_list` VALUES ('H_Fighter', '0', '-1');
INSERT INTO `class_list` VALUES ('H_Warrior', '1', '0');
INSERT INTO `class_list` VALUES ('H_Gladiator', '2', '1');
INSERT INTO `class_list` VALUES ('H_Duelist', '88', '2');
INSERT INTO `class_list` VALUES ('H_Warlord', '3', '1');
INSERT INTO `class_list` VALUES ('H_Dreadnought', '89', '3');
INSERT INTO `class_list` VALUES ('H_Knight', '4', '0');
INSERT INTO `class_list` VALUES ('H_Paladin', '5', '4');
INSERT INTO `class_list` VALUES ('H_PhoenixKnight', '90', '5');
INSERT INTO `class_list` VALUES ('H_DarkAvenger', '6', '4');
INSERT INTO `class_list` VALUES ('H_HellKnight', '91', '6');
INSERT INTO `class_list` VALUES ('H_Rogue', '7', '0');
INSERT INTO `class_list` VALUES ('H_TreasureHunter', '8', '7');
INSERT INTO `class_list` VALUES ('H_Adventurer', '93', '8');
INSERT INTO `class_list` VALUES ('H_Hawkeye', '9', '7');
INSERT INTO `class_list` VALUES ('H_Sagittarius', '92', '9');
INSERT INTO `class_list` VALUES ('H_Mage', '10', '-1');
INSERT INTO `class_list` VALUES ('H_Wizard', '11', '10');
INSERT INTO `class_list` VALUES ('H_Sorceror', '12', '11');
INSERT INTO `class_list` VALUES ('H_Archmage', '94', '12');
INSERT INTO `class_list` VALUES ('H_Necromancer', '13', '11');
INSERT INTO `class_list` VALUES ('H_Soultaker', '95', '13');
INSERT INTO `class_list` VALUES ('H_Warlock', '14', '11');
INSERT INTO `class_list` VALUES ('H_ArcanaLord', '96', '14');
INSERT INTO `class_list` VALUES ('H_Cleric', '15', '10');
INSERT INTO `class_list` VALUES ('H_Bishop', '16', '15');
INSERT INTO `class_list` VALUES ('H_Cardinal', '97', '16');
INSERT INTO `class_list` VALUES ('H_Prophet', '17', '15');
INSERT INTO `class_list` VALUES ('H_Hierophant', '98', '17');
INSERT INTO `class_list` VALUES ('E_Fighter', '18', '-1');
INSERT INTO `class_list` VALUES ('E_Knight', '19', '18');
INSERT INTO `class_list` VALUES ('E_TempleKnight', '20', '19');
INSERT INTO `class_list` VALUES ('E_EvaTemplar', '99', '20');
INSERT INTO `class_list` VALUES ('E_SwordSinger', '21', '19');
INSERT INTO `class_list` VALUES ('E_SwordMuse', '100', '21');
INSERT INTO `class_list` VALUES ('E_Scout', '22', '18');
INSERT INTO `class_list` VALUES ('E_PlainsWalker', '23', '22');
INSERT INTO `class_list` VALUES ('E_WindRider', '101', '23');
INSERT INTO `class_list` VALUES ('E_SilverRanger', '24', '22');
INSERT INTO `class_list` VALUES ('E_MoonlightSentinel', '102', '24');
INSERT INTO `class_list` VALUES ('E_Mage', '25', '-1');
INSERT INTO `class_list` VALUES ('E_Wizard', '26', '25');
INSERT INTO `class_list` VALUES ('E_SpellSinger', '27', '26');
INSERT INTO `class_list` VALUES ('E_MysticMuse', '103', '27');
INSERT INTO `class_list` VALUES ('E_ElementalSummoner', '28', '26');
INSERT INTO `class_list` VALUES ('E_ElementalMaster', '104', '28');
INSERT INTO `class_list` VALUES ('E_Oracle', '29', '25');
INSERT INTO `class_list` VALUES ('E_Elder', '30', '29');
INSERT INTO `class_list` VALUES ('E_EvaSaint', '105', '30');
INSERT INTO `class_list` VALUES ('DE_Fighter', '31', '-1');
INSERT INTO `class_list` VALUES ('DE_PaulusKnight', '32', '31');
INSERT INTO `class_list` VALUES ('DE_ShillienKnight', '33', '32');
INSERT INTO `class_list` VALUES ('DE_ShillienTemplar', '106', '33');
INSERT INTO `class_list` VALUES ('DE_BladeDancer', '34', '32');
INSERT INTO `class_list` VALUES ('DE_SpectralDancer', '107', '34');
INSERT INTO `class_list` VALUES ('DE_Assassin', '35', '31');
INSERT INTO `class_list` VALUES ('DE_AbyssWalker', '36', '35');
INSERT INTO `class_list` VALUES ('DE_GhostHunter', '108', '36');
INSERT INTO `class_list` VALUES ('DE_PhantomRanger', '37', '35');
INSERT INTO `class_list` VALUES ('DE_GhostSentinel', '109', '37');
INSERT INTO `class_list` VALUES ('DE_Mage', '38', '-1');
INSERT INTO `class_list` VALUES ('DE_DarkWizard', '39', '38');
INSERT INTO `class_list` VALUES ('DE_Spellhowler', '40', '39');
INSERT INTO `class_list` VALUES ('DE_StormScreamer', '110', '40');
INSERT INTO `class_list` VALUES ('DE_PhantomSummoner', '41', '39');
INSERT INTO `class_list` VALUES ('DE_SpectralMaster', '111', '41');
INSERT INTO `class_list` VALUES ('DE_ShillienOracle', '42', '38');
INSERT INTO `class_list` VALUES ('DE_ShillienElder', '43', '42');
INSERT INTO `class_list` VALUES ('DE_ShillienSaint', '112', '43');
INSERT INTO `class_list` VALUES ('O_Fighter', '44', '-1');
INSERT INTO `class_list` VALUES ('O_Raider', '45', '44');
INSERT INTO `class_list` VALUES ('O_Destroyer', '46', '45');
INSERT INTO `class_list` VALUES ('O_Titan', '113', '46');
INSERT INTO `class_list` VALUES ('O_Monk', '47', '44');
INSERT INTO `class_list` VALUES ('O_Tyrant', '48', '47');
INSERT INTO `class_list` VALUES ('O_GrandKhauatari', '114', '48');
INSERT INTO `class_list` VALUES ('O_Mage', '49', '-1');
INSERT INTO `class_list` VALUES ('O_Shaman', '50', '49');
INSERT INTO `class_list` VALUES ('O_Overlord', '51', '50');
INSERT INTO `class_list` VALUES ('O_Dominator', '115', '51');
INSERT INTO `class_list` VALUES ('O_Warcryer', '52', '50');
INSERT INTO `class_list` VALUES ('O_Doomcryer', '116', '52');
INSERT INTO `class_list` VALUES ('D_Fighter', '53', '-1');
INSERT INTO `class_list` VALUES ('D_Scavenger', '54', '53');
INSERT INTO `class_list` VALUES ('D_BountyHunter', '55', '54');
INSERT INTO `class_list` VALUES ('D_FortuneSeeker', '117', '55');
INSERT INTO `class_list` VALUES ('D_Artisan', '56', '53');
INSERT INTO `class_list` VALUES ('D_Warsmith', '57', '56');
INSERT INTO `class_list` VALUES ('D_Maestro', '118', '57');
