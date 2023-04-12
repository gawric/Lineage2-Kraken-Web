/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:44:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `global_tasks`
-- ----------------------------
DROP TABLE IF EXISTS `global_tasks`;
CREATE TABLE `global_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` varchar(50) NOT NULL DEFAULT '',
  `type` varchar(50) NOT NULL DEFAULT '',
  `last_activation` decimal(20,0) NOT NULL DEFAULT '0',
  `param1` varchar(100) NOT NULL DEFAULT '',
  `param2` varchar(100) NOT NULL DEFAULT '',
  `param3` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1673 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of global_tasks
-- ----------------------------
INSERT INTO `global_tasks` VALUES ('1140', 'olympiad_save', 'TYPE_FIXED_SHEDULED', '1426606363627', '900000', '1800000', '');
INSERT INTO `global_tasks` VALUES ('1141', 'raid_points_reset', 'TYPE_GLOBAL_TASK', '1426543800593', '1', '00:10:00', '');
INSERT INTO `global_tasks` VALUES ('1142', 'sp_recommendations', 'TYPE_GLOBAL_TASK', '1426590000240', '1', '13:00:00', '');
INSERT INTO `global_tasks` VALUES ('1672', 'restart', 'TYPE_GLOBAL_TASK', '0', '1', '05:30:00', '300');
