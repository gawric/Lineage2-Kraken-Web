/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:26:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `castle_manor_procure`
-- ----------------------------
DROP TABLE IF EXISTS `castle_manor_procure`;
CREATE TABLE `castle_manor_procure` (
  `castle_id` int(11) NOT NULL DEFAULT '0',
  `crop_id` int(11) NOT NULL DEFAULT '0',
  `can_buy` int(11) NOT NULL DEFAULT '0',
  `start_buy` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL DEFAULT '0',
  `reward_type` int(11) NOT NULL DEFAULT '0',
  `period` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`castle_id`,`crop_id`,`period`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of castle_manor_procure
-- ----------------------------
INSERT INTO `castle_manor_procure` VALUES ('2', '5067', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5069', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5070', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5071', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5075', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5077', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5078', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5079', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5082', '2796', '2796', '300', '2', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5084', '2796', '2796', '300', '2', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5088', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5091', '2796', '2796', '300', '2', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5821', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5822', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5823', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5824', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5825', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5826', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5827', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5828', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5829', '0', '0', '0', '1', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5830', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5831', '0', '0', '0', '0', '0');
INSERT INTO `castle_manor_procure` VALUES ('2', '5832', '0', '0', '0', '0', '0');
