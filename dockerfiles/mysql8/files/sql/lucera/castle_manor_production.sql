/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:26:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `castle_manor_production`
-- ----------------------------
DROP TABLE IF EXISTS `castle_manor_production`;
CREATE TABLE `castle_manor_production` (
  `castle_id` int(11) NOT NULL DEFAULT '0',
  `seed_id` int(11) NOT NULL DEFAULT '0',
  `can_produce` int(11) NOT NULL DEFAULT '0',
  `start_produce` int(11) NOT NULL DEFAULT '0',
  `seed_price` int(11) NOT NULL DEFAULT '0',
  `period` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`castle_id`,`seed_id`,`period`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of castle_manor_production
-- ----------------------------
INSERT INTO `castle_manor_production` VALUES ('2', '5024', '12582', '12582', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5025', '6291', '6291', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5026', '1194', '1194', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5027', '6291', '6291', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5028', '6291', '6291', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5029', '5031', '5031', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5030', '2514', '2514', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5031', '2514', '2514', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5032', '2514', '2514', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5658', '31950', '31950', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5659', '17475', '17475', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5660', '11649', '11649', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5661', '17475', '17475', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5662', '17475', '17475', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5663', '12980', '12980', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5664', '6990', '6990', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5665', '6990', '6990', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '5666', '6736', '6736', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '7016', '2514', '2514', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '7030', '6990', '6990', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '7045', '6736', '6736', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '7047', '6990', '6990', '100', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '7052', '0', '0', '0', '0');
INSERT INTO `castle_manor_production` VALUES ('2', '7054', '2514', '2514', '100', '0');
