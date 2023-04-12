/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:54:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `pledge_skill_trees`
-- ----------------------------
DROP TABLE IF EXISTS `pledge_skill_trees`;
CREATE TABLE `pledge_skill_trees` (
  `skill_id` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `clan_lvl` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `repCost` int(11) DEFAULT NULL,
  `itemId` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pledge_skill_trees
-- ----------------------------
INSERT INTO `pledge_skill_trees` VALUES ('370', '1', 'Clan Vitality', '5', 'Increases clan members Max HP. It only effects those who are of an Heir class or higher', '500', '8166');
INSERT INTO `pledge_skill_trees` VALUES ('370', '2', 'Clan Vitality', '5', 'Increases clan members Max HP. It only effects those who are of an Heir class or higher', '500', '8166');
INSERT INTO `pledge_skill_trees` VALUES ('370', '3', 'Clan Vitality', '5', 'Increases clan members Max HP. It only effects those who are of an Heir class or higher', '500', '8166');
INSERT INTO `pledge_skill_trees` VALUES ('371', '1', 'Clan Spirituality', '6', 'Increases clan members Max CP. It only effects those who are of a Baron class or higher', '800', '8169');
INSERT INTO `pledge_skill_trees` VALUES ('371', '2', 'Clan Spirituality', '6', 'Increases clan members Max CP. It only effects those who are of a Baron class or higher', '800', '8169');
INSERT INTO `pledge_skill_trees` VALUES ('371', '3', 'Clan Spirituality', '6', 'Increases clan members Max CP. It only effects those who are of a Baron class or higher', '800', '8169');
INSERT INTO `pledge_skill_trees` VALUES ('372', '1', 'Clan Essence', '8', 'Increases clan members Max MP. It only effects those who are of a Viscount class or higher', '3900', '8172');
INSERT INTO `pledge_skill_trees` VALUES ('372', '2', 'Clan Essence', '8', 'Increases clan members Max MP. It only effects those who are of a Viscount class or higher', '3900', '8172');
INSERT INTO `pledge_skill_trees` VALUES ('372', '3', 'Clan Essence', '8', 'Increases clan members Max MP. It only effects those who are of a Viscount class or higher', '3900', '8172');
INSERT INTO `pledge_skill_trees` VALUES ('373', '1', 'Clan Lifeblood', '5', 'Increases the clan members HP regeneration. Only affects Heir class and above', '500', '8166');
INSERT INTO `pledge_skill_trees` VALUES ('373', '2', 'Clan Lifeblood', '5', 'Increases the clan members HP regeneration. Only affects Heir class and above', '500', '8166');
INSERT INTO `pledge_skill_trees` VALUES ('373', '3', 'Clan Lifeblood', '5', 'Increases the clan members HP regeneration. Only affects Heir class and above', '500', '8166');
INSERT INTO `pledge_skill_trees` VALUES ('374', '1', 'Clan Morale', '6', 'Increases the clan members CP regeneration. Only affects Elder class and above', '900', '8169');
INSERT INTO `pledge_skill_trees` VALUES ('374', '2', 'Clan Morale', '6', 'Increases the clan members CP regeneration. Only affects Elder class and above', '900', '8169');
INSERT INTO `pledge_skill_trees` VALUES ('374', '3', 'Clan Morale', '6', 'Increases the clan members CP regeneration. Only affects Elder class and above', '900', '8169');
INSERT INTO `pledge_skill_trees` VALUES ('375', '1', 'Clan Clarity', '8', 'Increases the clan members MP regeneration. Only affects Viscount class and above', '3900', '8172');
INSERT INTO `pledge_skill_trees` VALUES ('375', '2', 'Clan Clarity', '8', 'Increases the clan members MP regeneration. Only affects Viscount class and above', '3900', '8172');
INSERT INTO `pledge_skill_trees` VALUES ('375', '3', 'Clan Clarity', '8', 'Increases the clan members MP regeneration. Only affects Viscount class and above', '3900', '8172');
INSERT INTO `pledge_skill_trees` VALUES ('376', '1', 'Clan Might', '6', 'Increases the clan members P. Atk. Only affects Knight class and above', '1000', '8163');
INSERT INTO `pledge_skill_trees` VALUES ('376', '2', 'Clan Might', '6', 'Increases the clan members P. Atk. Only affects Knight class and above', '1000', '8163');
INSERT INTO `pledge_skill_trees` VALUES ('376', '3', 'Clan Might', '6', 'Increases the clan members P. Atk. Only affects Knight class and above', '1000', '8163');
INSERT INTO `pledge_skill_trees` VALUES ('377', '1', 'Clan Aegis', '6', 'Increases clan members P. Def. It only effects those who are of a Knight class or higher', '1000', '8166');
INSERT INTO `pledge_skill_trees` VALUES ('377', '2', 'Clan Aegis', '6', 'Increases clan members P. Def. It only effects those who are of a Knight class or higher', '1000', '8166');
INSERT INTO `pledge_skill_trees` VALUES ('377', '3', 'Clan Aegis', '6', 'Increases clan members P. Def. It only effects those who are of a Knight class or higher', '1000', '8166');
INSERT INTO `pledge_skill_trees` VALUES ('378', '1', 'Clan Empowerment', '8', 'Increases clan members M. Atk. It only effects those who are of a Viscount class or higher', '3900', '8172');
INSERT INTO `pledge_skill_trees` VALUES ('378', '2', 'Clan Empowerment', '8', 'Increases clan members M. Atk. It only effects those who are of a Viscount class or higher', '3900', '8172');
INSERT INTO `pledge_skill_trees` VALUES ('378', '3', 'Clan Empowerment', '8', 'Increases clan members M. Atk. It only effects those who are of a Viscount class or higher', '3900', '8172');
INSERT INTO `pledge_skill_trees` VALUES ('379', '1', 'Clan Magic Protection', '5', 'Increases clan members M. Def. It only effects those who are of an Heir class or higher', '500', '8163');
INSERT INTO `pledge_skill_trees` VALUES ('379', '2', 'Clan Magic Protection', '5', 'Increases clan members M. Def. It only effects those who are of an Heir class or higher', '500', '8163');
INSERT INTO `pledge_skill_trees` VALUES ('379', '3', 'Clan Magic Protection', '5', 'Increases clan members M. Def. It only effects those who are of an Heir class or higher', '500', '8163');
INSERT INTO `pledge_skill_trees` VALUES ('380', '1', 'Clan Guidance', '7', 'Increases the clan members Accuracy. Only affects Baron class and above', '1900', '8160');
INSERT INTO `pledge_skill_trees` VALUES ('380', '2', 'Clan Guidance', '7', 'Increases the clan members Accuracy. Only affects Baron class and above', '1900', '8160');
INSERT INTO `pledge_skill_trees` VALUES ('380', '3', 'Clan Guidance', '7', 'Increases the clan members Accuracy. Only affects Baron class and above', '1900', '8160');
INSERT INTO `pledge_skill_trees` VALUES ('381', '1', 'Clan Agility', '8', 'Increases the clan members Evasion. Only affects Baron class and above', '4000', '8160');
INSERT INTO `pledge_skill_trees` VALUES ('381', '2', 'Clan Agility', '8', 'Increases the clan members Evasion. Only affects Baron class and above', '4000', '8160');
INSERT INTO `pledge_skill_trees` VALUES ('381', '3', 'Clan Agility', '8', 'Increases the clan members Evasion. Only affects Baron class and above', '4000', '8160');
INSERT INTO `pledge_skill_trees` VALUES ('382', '1', 'Clan Withstand-Attack', '7', 'Increases clan members Shield defense probability. It only effects those who are of a Viscount class or higher', '800', '8160');
INSERT INTO `pledge_skill_trees` VALUES ('382', '2', 'Clan Withstand-Attack', '7', 'Increases clan members Shield defense probability. It only effects those who are of a Viscount class or higher', '800', '8160');
INSERT INTO `pledge_skill_trees` VALUES ('382', '3', 'Clan Withstand-Attack', '7', 'Increases clan members Shield defense probability. It only effects those who are of a Viscount class or higher', '800', '8160');
INSERT INTO `pledge_skill_trees` VALUES ('383', '1', 'Clan Shield Boost', '6', 'Increases clan members Shield P. Def. It only effects those who are of a Baron class or higher', '800', '8163');
INSERT INTO `pledge_skill_trees` VALUES ('383', '2', 'Clan Shield Boost', '6', 'Increases clan members Shield P. Def. It only effects those who are of a Baron class or higher', '800', '8163');
INSERT INTO `pledge_skill_trees` VALUES ('383', '3', 'Clan Shield Boost', '6', 'Increases clan members Shield P. Def. It only effects those who are of a Baron class or higher', '800', '8163');
INSERT INTO `pledge_skill_trees` VALUES ('384', '1', 'Clan Cyclonic Resistance', '7', 'Increases clan members resistance to water and wind attacks. It only effects those who are of a Viscount class or higher', '1800', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('384', '2', 'Clan Cyclonic Resistance', '7', 'Increases clan members resistance to water and wind attacks. It only effects those who are of a Viscount class or higher', '1800', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('384', '3', 'Clan Cyclonic Resistance', '7', 'Increases clan members resistance to water and wind attacks. It only effects those who are of a Viscount class or higher', '1800', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('385', '1', 'Clan Magmatic Resistance', '7', 'Increase clan members resistance to fire/earth attacks. It only effects those who are of a Viscount class or higher', '1800', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('385', '2', 'Clan Magmatic Resistance', '7', 'Increase clan members resistance to fire/earth attacks. It only effects those who are of a Viscount class or higher', '1800', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('385', '3', 'Clan Magmatic Resistance', '7', 'Increase clan members resistance to fire/earth attacks. It only effects those who are of a Viscount class or higher', '1800', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('386', '1', 'Clan Fortitude', '7', 'Increases the clan members resistance to shock attacks. Only affects Viscount class and above', '1000', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('386', '2', 'Clan Fortitude', '7', 'Increases the clan members resistance to shock attacks. Only affects Viscount class and above', '1000', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('386', '3', 'Clan Fortitude', '7', 'Increases the clan members resistance to shock attacks. Only affects Viscount class and above', '1000', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('387', '1', 'Clan Freedom', '7', 'Increases the clan members resistance to hold attacks. Only affects Viscount class and above', '1800', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('387', '2', 'Clan Freedom', '7', 'Increases the clan members resistance to hold attacks. Only affects Viscount class and above', '1800', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('387', '3', 'Clan Freedom', '7', 'Increases the clan members resistance to hold attacks. Only affects Viscount class and above', '1800', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('388', '1', 'Clan Vigilance', '7', 'Increases the clan members resistance to sleep attacks. Only affects Viscount class and above', '1800', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('388', '2', 'Clan Vigilance', '7', 'Increases the clan members resistance to sleep attacks. Only affects Viscount class and above', '1800', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('388', '3', 'Clan Vigilance', '7', 'Increases the clan members resistance to sleep attacks. Only affects Viscount class and above', '1800', '8176');
INSERT INTO `pledge_skill_trees` VALUES ('389', '1', 'Clan March', '8', 'Increases clan members Speed. It only effects those who are of a Count class or higher', '3800', '8175');
INSERT INTO `pledge_skill_trees` VALUES ('389', '2', 'Clan March', '8', 'Increases clan members Speed. It only effects those who are of a Count class or higher', '3800', '8175');
INSERT INTO `pledge_skill_trees` VALUES ('389', '3', 'Clan March', '8', 'Increases clan members Speed. It only effects those who are of a Count class or higher', '3800', '8175');
INSERT INTO `pledge_skill_trees` VALUES ('390', '1', 'Clan Luck', '7', 'Decreases Exp. loss and the chance of other death penalties when killed by a monster or player. It only effects those who are of an Heir class or higher', '2200', '8175');
INSERT INTO `pledge_skill_trees` VALUES ('390', '2', 'Clan Luck', '7', 'Decreases Exp. loss and the chance of other death penalties when killed by a monster or player. It only effects those who are of an Heir class or higher', '2200', '8175');
INSERT INTO `pledge_skill_trees` VALUES ('390', '3', 'Clan Luck', '7', 'Decreases Exp. loss and the chance of other death penalties when killed by a monster or player. It only effects those who are of an Heir class or higher', '2200', '8175');
INSERT INTO `pledge_skill_trees` VALUES ('391', '1', 'Clan Imperium', '5', 'Grants the privilege of Command Channel formation. It only effects Sage / Elder class and above', '0', '8176');
