/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:33:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `characters`
-- ----------------------------
DROP TABLE IF EXISTS `characters`;
CREATE TABLE `characters` (
  `account_name` varchar(45) DEFAULT NULL,
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `char_name` varchar(35) NOT NULL,
  `level` tinyint(3) unsigned DEFAULT NULL,
  `maxHp` mediumint(8) unsigned DEFAULT NULL,
  `curHp` mediumint(8) unsigned DEFAULT NULL,
  `maxCp` mediumint(8) unsigned DEFAULT NULL,
  `curCp` mediumint(8) unsigned DEFAULT NULL,
  `maxMp` mediumint(8) unsigned DEFAULT NULL,
  `curMp` mediumint(8) unsigned DEFAULT NULL,
  `face` tinyint(3) unsigned DEFAULT NULL,
  `hairStyle` tinyint(3) unsigned DEFAULT NULL,
  `hairColor` tinyint(3) unsigned DEFAULT NULL,
  `sex` tinyint(3) unsigned DEFAULT NULL,
  `heading` mediumint(9) DEFAULT NULL,
  `x` mediumint(9) DEFAULT NULL,
  `y` mediumint(9) DEFAULT NULL,
  `z` mediumint(9) DEFAULT NULL,
  `exp` bigint(20) unsigned DEFAULT '0',
  `expBeforeDeath` bigint(20) unsigned DEFAULT '0',
  `sp` int(10) unsigned NOT NULL DEFAULT '0',
  `karma` int(10) unsigned DEFAULT NULL,
  `fame` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pvpkills` smallint(5) unsigned DEFAULT NULL,
  `pkkills` smallint(5) unsigned DEFAULT NULL,
  `clanid` int(10) unsigned DEFAULT NULL,
  `race` tinyint(3) unsigned DEFAULT NULL,
  `classid` tinyint(3) unsigned DEFAULT NULL,
  `base_class` tinyint(3) unsigned DEFAULT NULL,
  `deletetime` bigint(20) DEFAULT NULL,
  `cancraft` tinyint(3) unsigned DEFAULT NULL,
  `title` varchar(16) DEFAULT NULL,
  `rec_have` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `rec_left` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `online` tinyint(3) unsigned DEFAULT NULL,
  `onlinetime` int(11) DEFAULT NULL,
  `char_slot` tinyint(3) unsigned DEFAULT NULL,
  `newbie` mediumint(8) unsigned DEFAULT '1',
  `lastAccess` bigint(20) unsigned DEFAULT NULL,
  `clan_privs` mediumint(8) unsigned DEFAULT '0',
  `wantspeace` tinyint(3) unsigned DEFAULT '0',
  `isin7sdungeon` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `in_jail` tinyint(3) unsigned DEFAULT '0',
  `jail_timer` int(10) unsigned DEFAULT '0',
  `nobless` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `subpledge` smallint(6) NOT NULL DEFAULT '0',
  `last_recom_date` bigint(20) unsigned NOT NULL DEFAULT '0',
  `pledge_rank` mediumint(9) NOT NULL DEFAULT '0',
  `lvl_joined_academy` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `apprentice` int(10) unsigned NOT NULL DEFAULT '0',
  `sponsor` int(10) unsigned NOT NULL DEFAULT '0',
  `varka_ketra_ally` tinyint(4) NOT NULL DEFAULT '0',
  `clan_join_expiry_time` bigint(20) unsigned NOT NULL DEFAULT '0',
  `clan_create_expiry_time` bigint(20) unsigned NOT NULL DEFAULT '0',
  `death_penalty_level` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pccaffe_points` int(11) NOT NULL DEFAULT '0',
  `isCensor` decimal(1,0) NOT NULL DEFAULT '0',
  `isBanned` decimal(1,0) NOT NULL DEFAULT '0',
  `hwid` varchar(64) DEFAULT '',
  `ban_admin` int(11) NOT NULL DEFAULT '0',
  `ban_data` int(11) NOT NULL DEFAULT '0',
  `ban_end` int(11) NOT NULL DEFAULT '0',
  `ban_donat` int(11) NOT NULL DEFAULT '0',
  `ban_charId` int(11) NOT NULL DEFAULT '0',
  `comment` varchar(255) NOT NULL DEFAULT '',
  `lastteleport` decimal(20,0) DEFAULT NULL,
  PRIMARY KEY (`charId`),
  UNIQUE KEY `CHAR_NAME` (`char_name`) USING BTREE,
  KEY `clanid` (`clanid`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of characters
-- ----------------------------
