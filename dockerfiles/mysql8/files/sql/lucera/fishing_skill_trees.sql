/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:39:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `fishing_skill_trees`
-- ----------------------------
DROP TABLE IF EXISTS `fishing_skill_trees`;
CREATE TABLE `fishing_skill_trees` (
  `skill_id` int(10) NOT NULL DEFAULT '0',
  `level` int(10) NOT NULL DEFAULT '0',
  `name` varchar(25) NOT NULL DEFAULT '',
  `sp` int(10) NOT NULL DEFAULT '0',
  `min_level` int(10) NOT NULL DEFAULT '0',
  `costid` int(10) NOT NULL DEFAULT '0',
  `cost` int(10) NOT NULL DEFAULT '0',
  `isfordwarf` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`skill_id`,`level`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fishing_skill_trees
-- ----------------------------
INSERT INTO `fishing_skill_trees` VALUES ('1313', '1', 'Pumping', '0', '10', '57', '10', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '2', 'Pumping', '0', '12', '57', '50', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '3', 'Pumping', '0', '15', '57', '200', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '4', 'Pumping', '0', '17', '57', '300', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '5', 'Pumping', '0', '20', '57', '500', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '6', 'Pumping', '0', '22', '57', '800', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '7', 'Pumping', '0', '25', '57', '1600', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '8', 'Pumping', '0', '27', '57', '2600', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '9', 'Pumping', '0', '30', '57', '4000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '10', 'Pumping', '0', '32', '57', '6700', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '11', 'Pumping', '0', '35', '57', '8000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '12', 'Pumping', '0', '37', '57', '10000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '13', 'Pumping', '0', '40', '57', '16000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '14', 'Pumping', '0', '42', '57', '23000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '15', 'Pumping', '0', '45', '57', '30000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '16', 'Pumping', '0', '47', '57', '40000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '17', 'Pumping', '0', '49', '57', '53000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '18', 'Pumping', '0', '52', '57', '66000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '19', 'Pumping', '0', '54', '57', '80000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '20', 'Pumping', '0', '57', '57', '93000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '21', 'Pumping', '0', '59', '57', '100000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '22', 'Pumping', '0', '62', '57', '120000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '23', 'Pumping', '0', '64', '57', '130000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '24', 'Pumping', '0', '67', '57', '140000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '25', 'Pumping', '0', '69', '57', '160000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '26', 'Pumping', '0', '71', '57', '173000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1313', '27', 'Pumping', '0', '74', '57', '180000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '1', 'Reeling', '0', '10', '57', '10', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '2', 'Reeling', '0', '12', '57', '50', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '3', 'Reeling', '0', '15', '57', '200', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '4', 'Reeling', '0', '17', '57', '300', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '5', 'Reeling', '0', '20', '57', '500', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '6', 'Reeling', '0', '22', '57', '800', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '7', 'Reeling', '0', '25', '57', '1600', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '8', 'Reeling', '0', '27', '57', '2600', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '9', 'Reeling', '0', '30', '57', '4000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '10', 'Reeling', '0', '32', '57', '6700', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '11', 'Reeling', '0', '35', '57', '8000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '12', 'Reeling', '0', '37', '57', '10000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '13', 'Reeling', '0', '40', '57', '16000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '14', 'Reeling', '0', '42', '57', '23000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '15', 'Reeling', '0', '45', '57', '30000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '16', 'Reeling', '0', '47', '57', '40000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '17', 'Reeling', '0', '49', '57', '53000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '18', 'Reeling', '0', '52', '57', '66000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '19', 'Reeling', '0', '54', '57', '80000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '20', 'Reeling', '0', '57', '57', '93000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '21', 'Reeling', '0', '59', '57', '100000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '22', 'Reeling', '0', '62', '57', '120000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '23', 'Reeling', '0', '64', '57', '130000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '24', 'Reeling', '0', '67', '57', '140000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '25', 'Reeling', '0', '69', '57', '160000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '26', 'Reeling', '0', '71', '57', '173000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1314', '27', 'Reeling', '0', '74', '57', '180000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '1', 'Fishing Expertise', '0', '10', '57', '10', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '2', 'Fishing Expertise', '0', '12', '57', '50', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '3', 'Fishing Expertise', '0', '15', '57', '200', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '4', 'Fishing Expertise', '0', '17', '57', '300', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '5', 'Fishing Expertise', '0', '20', '57', '500', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '6', 'Fishing Expertise', '0', '22', '57', '800', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '7', 'Fishing Expertise', '0', '25', '57', '1600', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '8', 'Fishing Expertise', '0', '27', '57', '2600', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '9', 'Fishing Expertise', '0', '30', '57', '4000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '10', 'Fishing Expertise', '0', '32', '57', '6700', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '11', 'Fishing Expertise', '0', '35', '57', '8000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '12', 'Fishing Expertise', '0', '37', '57', '10000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '13', 'Fishing Expertise', '0', '40', '57', '16000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '14', 'Fishing Expertise', '0', '42', '57', '23000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '15', 'Fishing Expertise', '0', '45', '57', '30000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '16', 'Fishing Expertise', '0', '47', '57', '40000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '17', 'Fishing Expertise', '0', '49', '57', '53000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '18', 'Fishing Expertise', '0', '52', '57', '66000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '19', 'Fishing Expertise', '0', '54', '57', '80000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '20', 'Fishing Expertise', '0', '57', '57', '93000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '21', 'Fishing Expertise', '0', '59', '57', '100000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '22', 'Fishing Expertise', '0', '62', '57', '120000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '23', 'Fishing Expertise', '0', '64', '57', '130000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '24', 'Fishing Expertise', '0', '67', '57', '140000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '25', 'Fishing Expertise', '0', '69', '57', '160000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '26', 'Fishing Expertise', '0', '71', '57', '173000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1315', '27', 'Fishing Expertise', '0', '74', '57', '180000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1368', '1', 'Expand Dwarven Craft', '0', '10', '7609', '2000', '1');
INSERT INTO `fishing_skill_trees` VALUES ('1368', '2', 'Expand Dwarven Craft', '0', '20', '7609', '4000', '1');
INSERT INTO `fishing_skill_trees` VALUES ('1368', '3', 'Expand Dwarven Craft', '0', '30', '7609', '6000', '1');
INSERT INTO `fishing_skill_trees` VALUES ('1368', '4', 'Expand Dwarven Craft', '0', '40', '7609', '10000', '1');
INSERT INTO `fishing_skill_trees` VALUES ('1368', '5', 'Expand Dwarven Craft', '0', '50', '7609', '10000', '1');
INSERT INTO `fishing_skill_trees` VALUES ('1368', '6', 'Expand Dwarven Craft', '0', '60', '7609', '10000', '1');
INSERT INTO `fishing_skill_trees` VALUES ('1368', '7', 'Expand Dwarven Craft', '0', '70', '7609', '20000', '1');
INSERT INTO `fishing_skill_trees` VALUES ('1368', '8', 'Expand Dwarven Craft', '0', '76', '7609', '20000', '1');
INSERT INTO `fishing_skill_trees` VALUES ('1369', '1', 'Expand Common Craft', '0', '10', '7609', '2000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1369', '2', 'Expand Common Craft', '0', '20', '7609', '4000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1369', '3', 'Expand Common Craft', '0', '30', '7609', '6000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1369', '4', 'Expand Common Craft', '0', '40', '7609', '10000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1369', '5', 'Expand Common Craft', '0', '50', '7609', '10000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1369', '6', 'Expand Common Craft', '0', '60', '7609', '10000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1369', '7', 'Expand Common Craft', '0', '70', '7609', '20000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1369', '8', 'Expand Common Craft', '0', '76', '7609', '20000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1370', '1', 'Expand Trade', '0', '40', '7609', '10000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1370', '2', 'Expand Trade', '0', '55', '7609', '20000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1370', '3', 'Expand Trade', '0', '65', '7609', '40000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1371', '1', 'Expand Storage', '0', '10', '7609', '4000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1371', '2', 'Expand Storage', '0', '20', '7609', '8000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1371', '3', 'Expand Storage', '0', '30', '7609', '20000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1371', '4', 'Expand Storage', '0', '40', '7609', '20000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1371', '5', 'Expand Storage', '0', '50', '7609', '60000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1371', '6', 'Expand Storage', '0', '60', '7609', '60000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1371', '7', 'Expand Storage', '0', '70', '7609', '100000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1371', '8', 'Expand Storage', '0', '76', '7609', '100000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1372', '1', 'Expand Storage', '0', '10', '7609', '4000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1372', '2', 'Expand Storage', '0', '20', '7609', '8000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1372', '3', 'Expand Storage', '0', '30', '7609', '20000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1372', '4', 'Expand Storage', '0', '40', '7609', '20000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1372', '5', 'Expand Storage', '0', '50', '7609', '60000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1372', '6', 'Expand Storage', '0', '60', '7609', '60000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1372', '7', 'Expand Storage', '0', '70', '7609', '100000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1372', '8', 'Expand Storage', '0', '76', '7609', '100000', '0');
INSERT INTO `fishing_skill_trees` VALUES ('1312', '1', 'Fishing', '0', '10', '57', '1000', '0');
