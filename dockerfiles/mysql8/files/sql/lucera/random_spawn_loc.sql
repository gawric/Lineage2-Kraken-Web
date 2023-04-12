/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:56:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `random_spawn_loc`
-- ----------------------------
DROP TABLE IF EXISTS `random_spawn_loc`;
CREATE TABLE `random_spawn_loc` (
  `groupId` int(11) NOT NULL DEFAULT '0',
  `x` int(11) NOT NULL DEFAULT '0',
  `y` int(11) NOT NULL DEFAULT '0',
  `z` int(11) NOT NULL DEFAULT '0',
  `heading` int(11) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`groupId`,`x`,`y`,`z`,`heading`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of random_spawn_loc
-- ----------------------------
INSERT INTO `random_spawn_loc` VALUES ('9', '183225', '-11911', '-4897', '-1');
INSERT INTO `random_spawn_loc` VALUES ('10', '185058', '-8842', '-5496', '-1');
INSERT INTO `random_spawn_loc` VALUES ('11', '-52172', '78884', '-4741', '-1');
INSERT INTO `random_spawn_loc` VALUES ('11', '-41350', '209876', '-5087', '-1');
INSERT INTO `random_spawn_loc` VALUES ('11', '-21657', '77164', '-5173', '-1');
INSERT INTO `random_spawn_loc` VALUES ('11', '45029', '123802', '-5413', '-1');
INSERT INTO `random_spawn_loc` VALUES ('11', '83175', '208998', '-5439', '-1');
INSERT INTO `random_spawn_loc` VALUES ('11', '111337', '173804', '-5439', '-1');
INSERT INTO `random_spawn_loc` VALUES ('11', '118343', '132578', '-4831', '-1');
INSERT INTO `random_spawn_loc` VALUES ('11', '172373', '-17833', '-4901', '-1');
INSERT INTO `random_spawn_loc` VALUES ('12', '-53131', '-250502', '-7909', '-1');
INSERT INTO `random_spawn_loc` VALUES ('12', '-20485', '-251008', '-8165', '-1');
INSERT INTO `random_spawn_loc` VALUES ('12', '-19360', '13278', '-4901', '-1');
INSERT INTO `random_spawn_loc` VALUES ('12', '12669', '-248698', '-9581', '-1');
INSERT INTO `random_spawn_loc` VALUES ('12', '46303', '170091', '-4981', '-1');
INSERT INTO `random_spawn_loc` VALUES ('12', '140519', '79464', '-5429', '-1');
INSERT INTO `random_spawn_loc` VALUES ('13', '-84356', '152742', '-3204', '-1');
INSERT INTO `random_spawn_loc` VALUES ('14', '-83157', '149846', '-3155', '-1');
INSERT INTO `random_spawn_loc` VALUES ('15', '-79563', '152726', '-3204', '-1');
INSERT INTO `random_spawn_loc` VALUES ('16', '-79123', '155098', '-3204', '-1');
INSERT INTO `random_spawn_loc` VALUES ('17', '-16168', '124129', '-3143', '-1');
INSERT INTO `random_spawn_loc` VALUES ('18', '-14563', '121461', '-3015', '-1');
INSERT INTO `random_spawn_loc` VALUES ('19', '-14199', '126128', '-3171', '-1');
INSERT INTO `random_spawn_loc` VALUES ('20', '-12344', '123605', '-3132', '-1');
INSERT INTO `random_spawn_loc` VALUES ('21', '16901', '144748', '-3027', '-1');
INSERT INTO `random_spawn_loc` VALUES ('22', '17557', '147084', '-3150', '-1');
INSERT INTO `random_spawn_loc` VALUES ('23', '19038', '142923', '-3078', '-1');
INSERT INTO `random_spawn_loc` VALUES ('24', '20826', '145769', '-3171', '-1');
INSERT INTO `random_spawn_loc` VALUES ('25', '77830', '148627', '-3623', '-1');
INSERT INTO `random_spawn_loc` VALUES ('26', '81540', '144204', '-3559', '-1');
INSERT INTO `random_spawn_loc` VALUES ('27', '81556', '152183', '-3559', '-1');
INSERT INTO `random_spawn_loc` VALUES ('28', '83872', '143882', '-3431', '-1');
INSERT INTO `random_spawn_loc` VALUES ('29', '85328', '147352', '-3431', '-1');
INSERT INTO `random_spawn_loc` VALUES ('30', '114907', '77916', '-2662', '-1');
INSERT INTO `random_spawn_loc` VALUES ('31', '115509', '74857', '-2625', '-1');
INSERT INTO `random_spawn_loc` VALUES ('32', '118273', '74592', '-2529', '-1');
INSERT INTO `random_spawn_loc` VALUES ('33', '107251', '218166', '-3701', '-1');
INSERT INTO `random_spawn_loc` VALUES ('34', '115482', '219266', '-3689', '-1');
INSERT INTO `random_spawn_loc` VALUES ('35', '80039', '54291', '-1586', '-1');
INSERT INTO `random_spawn_loc` VALUES ('36', '81002', '53495', '-1586', '-1');
INSERT INTO `random_spawn_loc` VALUES ('37', '81527', '56009', '-1551', '-1');
INSERT INTO `random_spawn_loc` VALUES ('38', '143926', '26468', '-2338', '-1');
INSERT INTO `random_spawn_loc` VALUES ('39', '147460', '20537', '-2101', '-1');
INSERT INTO `random_spawn_loc` VALUES ('40', '150417', '25182', '-2141', '-1');
INSERT INTO `random_spawn_loc` VALUES ('41', '-83107', '150270', '-3155', '-1');
INSERT INTO `random_spawn_loc` VALUES ('42', '-83070', '152740', '-3204', '-1');
INSERT INTO `random_spawn_loc` VALUES ('43', '-80752', '152738', '-3204', '-1');
INSERT INTO `random_spawn_loc` VALUES ('44', '-80690', '149996', '-3070', '-1');
INSERT INTO `random_spawn_loc` VALUES ('45', '-80037', '154344', '-3204', '-1');
INSERT INTO `random_spawn_loc` VALUES ('46', '-15549', '124170', '-3143', '-1');
INSERT INTO `random_spawn_loc` VALUES ('47', '-14480', '122330', '-3126', '-1');
INSERT INTO `random_spawn_loc` VALUES ('48', '-14268', '124941', '-3156', '-1');
INSERT INTO `random_spawn_loc` VALUES ('49', '-13252', '123689', '-3143', '-1');
INSERT INTO `random_spawn_loc` VALUES ('50', '-12591', '122673', '-3142', '-1');
INSERT INTO `random_spawn_loc` VALUES ('51', '15722', '142877', '-2732', '-1');
INSERT INTO `random_spawn_loc` VALUES ('52', '18172', '145740', '-3140', '-1');
INSERT INTO `random_spawn_loc` VALUES ('53', '19096', '143980', '-3096', '-1');
INSERT INTO `random_spawn_loc` VALUES ('54', '19823', '145863', '-3142', '-1');
INSERT INTO `random_spawn_loc` VALUES ('55', '79825', '148619', '-3559', '-1');
INSERT INTO `random_spawn_loc` VALUES ('56', '81535', '146866', '-3559', '-1');
INSERT INTO `random_spawn_loc` VALUES ('57', '81547', '150347', '-3559', '-1');
INSERT INTO `random_spawn_loc` VALUES ('58', '83319', '148054', '-3431', '-1');
INSERT INTO `random_spawn_loc` VALUES ('59', '83894', '147495', '-3431', '-1');
INSERT INTO `random_spawn_loc` VALUES ('60', '115893', '77551', '-2729', '-1');
INSERT INTO `random_spawn_loc` VALUES ('61', '115936', '75382', '-2625', '-1');
INSERT INTO `random_spawn_loc` VALUES ('62', '117098', '77066', '-2720', '-1');
INSERT INTO `random_spawn_loc` VALUES ('63', '118049', '75783', '-2715', '-1');
INSERT INTO `random_spawn_loc` VALUES ('64', '107256', '218615', '-3701', '-1');
INSERT INTO `random_spawn_loc` VALUES ('65', '109660', '217339', '-3775', '-1');
INSERT INTO `random_spawn_loc` VALUES ('66', '110189', '221393', '-3569', '-1');
INSERT INTO `random_spawn_loc` VALUES ('67', '111389', '219257', '-3572', '-1');
INSERT INTO `random_spawn_loc` VALUES ('68', '113479', '217795', '-3731', '-1');
INSERT INTO `random_spawn_loc` VALUES ('69', '114086', '220214', '-3568', '-1');
INSERT INTO `random_spawn_loc` VALUES ('70', '80416', '55959', '-1586', '-1');
INSERT INTO `random_spawn_loc` VALUES ('71', '80617', '54116', '-1586', '-1');
INSERT INTO `random_spawn_loc` VALUES ('72', '82048', '55417', '-1551', '-1');
INSERT INTO `random_spawn_loc` VALUES ('73', '82863', '53290', '-1522', '-1');
INSERT INTO `random_spawn_loc` VALUES ('74', '145015', '25269', '-2167', '-1');
INSERT INTO `random_spawn_loc` VALUES ('75', '145394', '27629', '-2295', '-1');
INSERT INTO `random_spawn_loc` VALUES ('76', '146616', '25816', '-2039', '-1');
INSERT INTO `random_spawn_loc` VALUES ('77', '147440', '30047', '-2487', '-1');
INSERT INTO `random_spawn_loc` VALUES ('78', '147459', '21148', '-2167', '-1');
INSERT INTO `random_spawn_loc` VALUES ('79', '148013', '27029', '-2231', '-1');
INSERT INTO `random_spawn_loc` VALUES ('80', '149515', '27641', '-2295', '-1');
INSERT INTO `random_spawn_loc` VALUES ('81', '149899', '24719', '-2167', '-1');
INSERT INTO `random_spawn_loc` VALUES ('82', '-41312', '206625', '-3412', '-1');
INSERT INTO `random_spawn_loc` VALUES ('83', '-41312', '206625', '-3412', '-1');
INSERT INTO `random_spawn_loc` VALUES ('84', '-55428', '79357', '-3059', '-1');
INSERT INTO `random_spawn_loc` VALUES ('85', '-55428', '79357', '-3059', '-1');
INSERT INTO `random_spawn_loc` VALUES ('86', '-24895', '77634', '-3495', '-1');
INSERT INTO `random_spawn_loc` VALUES ('87', '-24895', '77634', '-3495', '-1');
INSERT INTO `random_spawn_loc` VALUES ('88', '-22594', '13760', '-3216', '-1');
INSERT INTO `random_spawn_loc` VALUES ('89', '-22594', '13760', '-3216', '-1');
INSERT INTO `random_spawn_loc` VALUES ('90', '43074', '170560', '-3298', '-1');
INSERT INTO `random_spawn_loc` VALUES ('91', '43074', '170560', '-3298', '-1');
INSERT INTO `random_spawn_loc` VALUES ('92', '39872', '144193', '-3707', '-1');
INSERT INTO `random_spawn_loc` VALUES ('93', '39872', '144193', '-3707', '-1');
INSERT INTO `random_spawn_loc` VALUES ('94', '45504', '127550', '-3734', '-1');
INSERT INTO `random_spawn_loc` VALUES ('95', '45504', '127550', '-3734', '-1');
INSERT INTO `random_spawn_loc` VALUES ('96', '79946', '209470', '-3760', '-1');
INSERT INTO `random_spawn_loc` VALUES ('97', '79946', '209470', '-3760', '-1');
INSERT INTO `random_spawn_loc` VALUES ('98', '108097', '174274', '-3769', '-1');
INSERT INTO `random_spawn_loc` VALUES ('99', '108097', '174274', '-3769', '-1');
INSERT INTO `random_spawn_loc` VALUES ('100', '115136', '133057', '-3161', '-1');
INSERT INTO `random_spawn_loc` VALUES ('101', '115136', '133057', '-3161', '-1');
INSERT INTO `random_spawn_loc` VALUES ('102', '74561', '78656', '-3446', '-1');
INSERT INTO `random_spawn_loc` VALUES ('103', '74561', '78656', '-3446', '-1');
INSERT INTO `random_spawn_loc` VALUES ('104', '110784', '84800', '-4867', '-1');
INSERT INTO `random_spawn_loc` VALUES ('105', '110784', '84800', '-4867', '-1');
INSERT INTO `random_spawn_loc` VALUES ('106', '137278', '79936', '-3751', '-1');
INSERT INTO `random_spawn_loc` VALUES ('107', '137278', '79936', '-3751', '-1');
INSERT INTO `random_spawn_loc` VALUES ('108', '169152', '-17344', '-3228', '-1');
INSERT INTO `random_spawn_loc` VALUES ('109', '169152', '-17344', '-3228', '-1');
INSERT INTO `random_spawn_loc` VALUES ('110', '185074', '-12604', '-5493', '-1');
INSERT INTO `random_spawn_loc` VALUES ('111', '185074', '-12604', '-5493', '-1');
INSERT INTO `random_spawn_loc` VALUES ('112', '171708', '43964', '-4972', '-1');
INSERT INTO `random_spawn_loc` VALUES ('113', '147943', '-56176', '-2781', '-1');
INSERT INTO `random_spawn_loc` VALUES ('114', '148064', '-56288', '-2781', '-1');
INSERT INTO `random_spawn_loc` VALUES ('115', '147703', '-58879', '-2981', '-1');
INSERT INTO `random_spawn_loc` VALUES ('116', '147704', '-58710', '-2981', '-1');
INSERT INTO `random_spawn_loc` VALUES ('117', '150550', '-57471', '-2981', '-1');
INSERT INTO `random_spawn_loc` VALUES ('118', '150425', '-57370', '-2981', '-1');
INSERT INTO `random_spawn_loc` VALUES ('119', '144841', '-57493', '-2981', '-1');
INSERT INTO `random_spawn_loc` VALUES ('120', '144980', '-57403', '-2981', '-1');
INSERT INTO `random_spawn_loc` VALUES ('121', '148867', '-58156', '-2981', '-1');
INSERT INTO `random_spawn_loc` VALUES ('122', '149180', '-58022', '-2981', '-1');
INSERT INTO `random_spawn_loc` VALUES ('123', '87500', '-142523', '-1336', '-1');
INSERT INTO `random_spawn_loc` VALUES ('124', '87302', '-140189', '-1536', '-1');
INSERT INTO `random_spawn_loc` VALUES ('125', '87363', '-142460', '-1336', '-1');
INSERT INTO `random_spawn_loc` VALUES ('126', '87390', '-140065', '-1536', '-1');
INSERT INTO `random_spawn_loc` VALUES ('127', '89738', '-141420', '-1536', '-1');
INSERT INTO `random_spawn_loc` VALUES ('128', '89661', '-141242', '-1536', '-1');
INSERT INTO `random_spawn_loc` VALUES ('129', '43961', '-50913', '-792', '-1');
INSERT INTO `random_spawn_loc` VALUES ('130', '43859', '-50954', '-796', '-1');
INSERT INTO `random_spawn_loc` VALUES ('131', '38588', '-48222', '896', '-1');
INSERT INTO `random_spawn_loc` VALUES ('132', '38695', '-48308', '896', '-1');
INSERT INTO `random_spawn_loc` VALUES ('133', '108380', '-150268', '-2376', '-1');
INSERT INTO `random_spawn_loc` VALUES ('133', '118600', '-161235', '-1119', '-1');
INSERT INTO `random_spawn_loc` VALUES ('133', '123254', '-148126', '-3425', '-1');
INSERT INTO `random_spawn_loc` VALUES ('134', '66578', '72351', '-3731', '-1');
INSERT INTO `random_spawn_loc` VALUES ('134', '67994', '79605', '-3685', '-1');
INSERT INTO `random_spawn_loc` VALUES ('134', '72414', '89582', '-3068', '-1');
INSERT INTO `random_spawn_loc` VALUES ('135', '175916', '-113220', '-3471', '-1');
INSERT INTO `random_spawn_loc` VALUES ('135', '178091', '-119661', '-4087', '-1');
INSERT INTO `random_spawn_loc` VALUES ('135', '178880', '-112665', '-5821', '-1');
INSERT INTO `random_spawn_loc` VALUES ('135', '179815', '-115465', '-3598', '-1');
INSERT INTO `random_spawn_loc` VALUES ('135', '180717', '-116163', '-6102', '-1');
INSERT INTO `random_spawn_loc` VALUES ('135', '181809', '-109360', '-5830', '-1');
INSERT INTO `random_spawn_loc` VALUES ('135', '183442', '-111453', '-3615', '-1');
INSERT INTO `random_spawn_loc` VALUES ('135', '184699', '-116825', '-6102', '-1');
INSERT INTO `random_spawn_loc` VALUES ('135', '186321', '-109182', '-5865', '-1');
INSERT INTO `random_spawn_loc` VALUES ('135', '189472', '-111287', '-3280', '-1');
INSERT INTO `random_spawn_loc` VALUES ('135', '190447', '-117063', '-3280', '-1');
INSERT INTO `random_spawn_loc` VALUES ('136', '78355', '-1325', '-3659', '-1');
INSERT INTO `random_spawn_loc` VALUES ('136', '79890', '-6132', '-2922', '-1');
INSERT INTO `random_spawn_loc` VALUES ('136', '90012', '-7217', '-3085', '-1');
INSERT INTO `random_spawn_loc` VALUES ('136', '94500', '-10129', '-3290', '-1');
INSERT INTO `random_spawn_loc` VALUES ('136', '96534', '-1237', '-3677', '-1');
INSERT INTO `random_spawn_loc` VALUES ('142', '185067', '-11859', '-5493', '-1');
