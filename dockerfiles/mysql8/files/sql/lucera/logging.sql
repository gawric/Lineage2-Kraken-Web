/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:51:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `logging`
-- ----------------------------
DROP TABLE IF EXISTS `logging`;
CREATE TABLE `logging` (
  `id` bigint(11) unsigned NOT NULL AUTO_INCREMENT,
  `server_id` int(11) DEFAULT NULL,
  `action_time` bigint(11) DEFAULT NULL,
  `action_type` varchar(22) DEFAULT NULL,
  `actor_id` int(11) DEFAULT NULL,
  `actor_name` varchar(44) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `target_name` varchar(22) DEFAULT NULL,
  `coord_x` int(11) DEFAULT NULL,
  `coord_y` int(11) DEFAULT NULL,
  `coord_z` int(11) DEFAULT NULL,
  `object1_id` int(11) DEFAULT NULL,
  `object1_param_a` varchar(255) DEFAULT NULL,
  `object1_param_b` varchar(255) DEFAULT NULL,
  `object1_param_c` int(11) DEFAULT NULL,
  `object2_id` int(11) DEFAULT NULL,
  `object2_param_a` varchar(255) DEFAULT NULL,
  `object2_param_b` varchar(255) DEFAULT NULL,
  `object2_param_c` int(11) DEFAULT NULL,
  `actor_fullinfo` varchar(255) DEFAULT NULL,
  `target_fullinfo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of logging
-- ----------------------------
