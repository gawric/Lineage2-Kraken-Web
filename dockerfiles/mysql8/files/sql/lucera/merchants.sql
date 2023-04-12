/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:52:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `merchants`
-- ----------------------------
DROP TABLE IF EXISTS `merchants`;
CREATE TABLE `merchants` (
  `npc_id` int(11) NOT NULL DEFAULT '0',
  `merchant_area_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`npc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of merchants
-- ----------------------------
INSERT INTO `merchants` VALUES ('1030001', '1');
INSERT INTO `merchants` VALUES ('1030002', '1');
INSERT INTO `merchants` VALUES ('1030003', '1');
INSERT INTO `merchants` VALUES ('1030004', '1');
INSERT INTO `merchants` VALUES ('1030060', '6');
INSERT INTO `merchants` VALUES ('1030061', '6');
INSERT INTO `merchants` VALUES ('1030062', '6');
INSERT INTO `merchants` VALUES ('1030063', '6');
INSERT INTO `merchants` VALUES ('1030078', '7');
INSERT INTO `merchants` VALUES ('1030081', '9');
INSERT INTO `merchants` VALUES ('1030082', '9');
INSERT INTO `merchants` VALUES ('1030084', '9');
INSERT INTO `merchants` VALUES ('1030085', '9');
INSERT INTO `merchants` VALUES ('1030087', '9');
INSERT INTO `merchants` VALUES ('1030088', '9');
INSERT INTO `merchants` VALUES ('1030090', '9');
INSERT INTO `merchants` VALUES ('1030091', '9');
INSERT INTO `merchants` VALUES ('1030093', '9');
INSERT INTO `merchants` VALUES ('1030094', '9');
INSERT INTO `merchants` VALUES ('1030135', '1');
INSERT INTO `merchants` VALUES ('1030136', '1');
INSERT INTO `merchants` VALUES ('1030137', '1');
INSERT INTO `merchants` VALUES ('1030138', '1');
INSERT INTO `merchants` VALUES ('1030147', '1');
INSERT INTO `merchants` VALUES ('1030148', '1');
INSERT INTO `merchants` VALUES ('1030149', '1');
INSERT INTO `merchants` VALUES ('1030150', '1');
INSERT INTO `merchants` VALUES ('1030163', '11');
INSERT INTO `merchants` VALUES ('1030164', '11');
INSERT INTO `merchants` VALUES ('1030165', '11');
INSERT INTO `merchants` VALUES ('1030166', '11');
INSERT INTO `merchants` VALUES ('1030178', '10');
INSERT INTO `merchants` VALUES ('1030179', '10');
INSERT INTO `merchants` VALUES ('1030180', '10');
INSERT INTO `merchants` VALUES ('1030181', '10');
INSERT INTO `merchants` VALUES ('1030207', '3');
INSERT INTO `merchants` VALUES ('1030208', '3');
INSERT INTO `merchants` VALUES ('1030209', '3');
INSERT INTO `merchants` VALUES ('1030230', '8');
INSERT INTO `merchants` VALUES ('1030231', '8');
INSERT INTO `merchants` VALUES ('1030253', '4');
INSERT INTO `merchants` VALUES ('1030254', '4');
INSERT INTO `merchants` VALUES ('1030294', '4');
INSERT INTO `merchants` VALUES ('1030301', '8');
INSERT INTO `merchants` VALUES ('1030313', '3');
INSERT INTO `merchants` VALUES ('1030314', '3');
INSERT INTO `merchants` VALUES ('1030315', '3');
INSERT INTO `merchants` VALUES ('1030321', '4');
INSERT INTO `merchants` VALUES ('1030420', '2');
INSERT INTO `merchants` VALUES ('1030436', '5');
INSERT INTO `merchants` VALUES ('1030437', '5');
INSERT INTO `merchants` VALUES ('1030516', '1');
INSERT INTO `merchants` VALUES ('1030517', '1');
INSERT INTO `merchants` VALUES ('1030518', '1');
INSERT INTO `merchants` VALUES ('1030519', '1');
INSERT INTO `merchants` VALUES ('1030558', '1');
INSERT INTO `merchants` VALUES ('1030559', '1');
INSERT INTO `merchants` VALUES ('1030560', '1');
INSERT INTO `merchants` VALUES ('1030561', '1');
INSERT INTO `merchants` VALUES ('1030684', '8');
INSERT INTO `merchants` VALUES ('1030746', '8');
INSERT INTO `merchants` VALUES ('1030834', '12');
INSERT INTO `merchants` VALUES ('1030839', '13');
INSERT INTO `merchants` VALUES ('1030840', '13');
INSERT INTO `merchants` VALUES ('1030841', '13');
INSERT INTO `merchants` VALUES ('1030842', '13');
INSERT INTO `merchants` VALUES ('1035102', '14');
INSERT INTO `merchants` VALUES ('1035144', '14');
INSERT INTO `merchants` VALUES ('1035228', '14');
INSERT INTO `merchants` VALUES ('1035186', '14');
INSERT INTO `merchants` VALUES ('1035276', '14');
INSERT INTO `merchants` VALUES ('1035007', '14');
INSERT INTO `merchants` VALUES ('1031562', '1');
INSERT INTO `merchants` VALUES ('1031424', '1');
INSERT INTO `merchants` VALUES ('1031564', '1');
INSERT INTO `merchants` VALUES ('1031415', '1');
INSERT INTO `merchants` VALUES ('1031563', '1');
INSERT INTO `merchants` VALUES ('1031414', '1');
INSERT INTO `merchants` VALUES ('1031565', '1');
