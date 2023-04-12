/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:57:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `server_data`
-- ----------------------------
DROP TABLE IF EXISTS `server_data`;
CREATE TABLE `server_data` (
  `valueName` varchar(64) NOT NULL,
  `valueData` varchar(200) NOT NULL,
  PRIMARY KEY (`valueName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of server_data
-- ----------------------------
INSERT INTO `server_data` VALUES ('GameTime.year', '1281');
INSERT INTO `server_data` VALUES ('GameTime.month', '5');
INSERT INTO `server_data` VALUES ('GameTime.day', '15');
INSERT INTO `server_data` VALUES ('GameTime.hour', '2');
INSERT INTO `server_data` VALUES ('GameTime.minute', '54');
INSERT INTO `server_data` VALUES ('GameTime.started', '1423757229459');
INSERT INTO `server_data` VALUES ('Records.MaxPlayers', '3');
INSERT INTO `server_data` VALUES ('Records.RecordDate', 'Fri Feb 13 00:28:19 MSK 2015');
INSERT INTO `server_data` VALUES ('Olympiad.CurrentCycle', '0');
INSERT INTO `server_data` VALUES ('Olympiad.Period', '0');
INSERT INTO `server_data` VALUES ('Olympiad.OlympiadEnd', '0');
INSERT INTO `server_data` VALUES ('Olympiad.ValdationEnd', '0');
INSERT INTO `server_data` VALUES ('Olympiad.NextWeeklyChange', '0');
