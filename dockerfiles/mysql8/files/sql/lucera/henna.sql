/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:45:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `henna`
-- ----------------------------
DROP TABLE IF EXISTS `henna`;
CREATE TABLE `henna` (
  `symbol_id` int(11) NOT NULL DEFAULT '0',
  `symbol_name` varchar(45) DEFAULT NULL,
  `dye_id` int(11) DEFAULT NULL,
  `dye_amount` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `stat_INT` decimal(11,0) DEFAULT NULL,
  `stat_STR` decimal(11,0) DEFAULT NULL,
  `stat_CON` decimal(11,0) DEFAULT NULL,
  `stat_MEM` decimal(11,0) DEFAULT NULL,
  `stat_DEX` decimal(11,0) DEFAULT NULL,
  `stat_WIT` decimal(11,0) DEFAULT NULL,
  PRIMARY KEY (`symbol_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of henna
-- ----------------------------
INSERT INTO `henna` VALUES ('1', 'symbol_s+1c-3_d', '4445', '10', '5100', '0', '1', '-3', '0', '0', '0');
INSERT INTO `henna` VALUES ('2', 'symbol_s+1d-3_d', '4446', '10', '5100', '0', '1', '0', '0', '-3', '0');
INSERT INTO `henna` VALUES ('3', 'symbol_c+1s-3_d', '4447', '10', '5100', '0', '-3', '1', '0', '0', '0');
INSERT INTO `henna` VALUES ('4', 'symbol_c+1d-3_d', '4448', '10', '5100', '0', '0', '1', '0', '-3', '0');
INSERT INTO `henna` VALUES ('5', 'symbol_d+1s-3_d', '4449', '10', '5100', '0', '-3', '0', '0', '1', '0');
INSERT INTO `henna` VALUES ('6', 'symbol_d+1c-3_d', '4450', '10', '5100', '0', '0', '-3', '0', '1', '0');
INSERT INTO `henna` VALUES ('7', 'symbol_i+1m-3_d', '4451', '10', '5100', '1', '0', '0', '-3', '0', '0');
INSERT INTO `henna` VALUES ('8', 'symbol_i+1w-3_d', '4452', '10', '5100', '1', '0', '0', '0', '0', '-3');
INSERT INTO `henna` VALUES ('9', 'symbol_m+1i-3_d', '4453', '10', '5100', '-3', '0', '0', '1', '0', '0');
INSERT INTO `henna` VALUES ('10', 'symbol_m+1w-3_d', '4454', '10', '5100', '0', '0', '0', '1', '0', '-3');
INSERT INTO `henna` VALUES ('11', 'symbol_w+1i-3_d', '4455', '10', '5100', '-3', '0', '0', '0', '0', '1');
INSERT INTO `henna` VALUES ('12', 'symbol_w+1m-3_d', '4456', '10', '5100', '0', '0', '0', '-3', '0', '1');
INSERT INTO `henna` VALUES ('13', 'symbol_s+1c-2_d', '4457', '10', '12000', '0', '1', '-2', '0', '0', '0');
INSERT INTO `henna` VALUES ('14', 'symbol_s+1d-2_d', '4458', '10', '12000', '0', '1', '0', '0', '-2', '0');
INSERT INTO `henna` VALUES ('15', 'symbol_c+1s-2_d', '4459', '10', '12000', '0', '-2', '1', '0', '0', '0');
INSERT INTO `henna` VALUES ('16', 'symbol_c+1d-2_d', '4460', '10', '12000', '0', '0', '1', '0', '-2', '0');
INSERT INTO `henna` VALUES ('17', 'symbol_d+1s-2_d', '4461', '10', '12000', '0', '-2', '0', '0', '1', '0');
INSERT INTO `henna` VALUES ('18', 'symbol_d+1c-2_d', '4462', '10', '12000', '0', '0', '-2', '0', '1', '0');
INSERT INTO `henna` VALUES ('19', 'symbol_i+1m-2_d', '4463', '10', '12000', '1', '0', '0', '-2', '0', '0');
INSERT INTO `henna` VALUES ('20', 'symbol_i+1w-2_d', '4464', '10', '12000', '1', '0', '0', '0', '0', '-2');
INSERT INTO `henna` VALUES ('21', 'symbol_m+1i-2_d', '4465', '10', '12000', '-2', '0', '0', '1', '0', '0');
INSERT INTO `henna` VALUES ('22', 'symbol_m+1w-2_d', '4466', '10', '12000', '0', '0', '0', '1', '0', '-2');
INSERT INTO `henna` VALUES ('23', 'symbol_w+1i-2_d', '4467', '10', '12000', '-2', '0', '0', '0', '0', '1');
INSERT INTO `henna` VALUES ('24', 'symbol_w+1m-2_d', '4468', '10', '12000', '0', '0', '0', '-2', '0', '1');
INSERT INTO `henna` VALUES ('25', 'symbol_s+1c-1_d', '4469', '10', '35000', '0', '1', '-1', '0', '0', '0');
INSERT INTO `henna` VALUES ('26', 'symbol_s+1d-1_d', '4470', '10', '35000', '0', '1', '0', '0', '-1', '0');
INSERT INTO `henna` VALUES ('27', 'symbol_c+1s-1_d', '4471', '10', '35000', '0', '-1', '1', '0', '0', '0');
INSERT INTO `henna` VALUES ('28', 'symbol_c+1d-1_d', '4472', '10', '35000', '0', '0', '1', '0', '-1', '0');
INSERT INTO `henna` VALUES ('29', 'symbol_d+1s-1_d', '4473', '10', '35000', '0', '-1', '0', '0', '1', '0');
INSERT INTO `henna` VALUES ('30', 'symbol_d+1c-1_d', '4474', '10', '35000', '0', '0', '-1', '0', '1', '0');
INSERT INTO `henna` VALUES ('31', 'symbol_i+1m-1_d', '4475', '10', '35000', '1', '0', '0', '-1', '0', '0');
INSERT INTO `henna` VALUES ('32', 'symbol_i+1w-1_d', '4476', '10', '35000', '1', '0', '0', '0', '0', '-1');
INSERT INTO `henna` VALUES ('33', 'symbol_m+1i-1_d', '4477', '10', '35000', '-1', '0', '0', '1', '0', '0');
INSERT INTO `henna` VALUES ('34', 'symbol_m+1w-1_d', '4478', '10', '35000', '0', '0', '0', '1', '0', '-1');
INSERT INTO `henna` VALUES ('35', 'symbol_w+1i-1_d', '4479', '10', '35000', '-1', '0', '0', '0', '0', '1');
INSERT INTO `henna` VALUES ('36', 'symbol_w+1m-1_d', '4480', '10', '35000', '0', '0', '0', '-1', '0', '1');
INSERT INTO `henna` VALUES ('37', 'symbol_s+1c-3_c', '4481', '10', '12000', '0', '1', '-3', '0', '0', '0');
INSERT INTO `henna` VALUES ('38', 'symbol_s+1d-3_c', '4482', '10', '24600', '0', '1', '0', '0', '-3', '0');
INSERT INTO `henna` VALUES ('39', 'symbol_c+1s-3_c', '4483', '10', '24600', '0', '-3', '1', '0', '0', '0');
INSERT INTO `henna` VALUES ('40', 'symbol_c+1d-3_c', '4484', '10', '24600', '0', '0', '1', '0', '-3', '0');
INSERT INTO `henna` VALUES ('41', 'symbol_d+1s-3_c', '4485', '10', '30000', '0', '-3', '0', '0', '1', '0');
INSERT INTO `henna` VALUES ('42', 'symbol_d+1c-3_c', '4486', '10', '30000', '0', '0', '-3', '0', '1', '0');
INSERT INTO `henna` VALUES ('43', 'symbol_i+1m-3_c', '4487', '10', '30000', '1', '0', '0', '-3', '0', '0');
INSERT INTO `henna` VALUES ('44', 'symbol_i+1w-3_c', '4488', '10', '30000', '1', '0', '0', '0', '0', '-3');
INSERT INTO `henna` VALUES ('45', 'symbol_m+1i-3_c', '4489', '10', '30000', '-3', '0', '0', '1', '0', '0');
INSERT INTO `henna` VALUES ('46', 'symbol_m+1w-3_c', '4490', '10', '12000', '0', '0', '0', '1', '0', '-3');
INSERT INTO `henna` VALUES ('47', 'symbol_w+1i-3_c', '4491', '10', '30000', '-3', '0', '0', '0', '0', '1');
INSERT INTO `henna` VALUES ('48', 'symbol_w+1m-3_c', '4492', '10', '12000', '0', '0', '0', '-3', '0', '1');
INSERT INTO `henna` VALUES ('49', 'symbol_s+1c-2_c', '4493', '10', '24600', '0', '1', '-2', '0', '0', '0');
INSERT INTO `henna` VALUES ('50', 'symbol_s+1d-2_c', '4494', '10', '30000', '0', '1', '0', '0', '-2', '0');
INSERT INTO `henna` VALUES ('51', 'symbol_c+1s-2_c', '4495', '10', '35000', '0', '-2', '1', '0', '0', '0');
INSERT INTO `henna` VALUES ('52', 'symbol_c+1d-2_c', '4496', '10', '35000', '0', '0', '1', '0', '-2', '0');
INSERT INTO `henna` VALUES ('53', 'symbol_d+1s-2_c', '4497', '10', '36000', '0', '-2', '0', '0', '1', '0');
INSERT INTO `henna` VALUES ('54', 'symbol_d+1c-2_c', '4498', '10', '36000', '0', '0', '-2', '0', '1', '0');
INSERT INTO `henna` VALUES ('55', 'symbol_i+1m-2_c', '4499', '10', '50000', '1', '0', '0', '-2', '0', '0');
INSERT INTO `henna` VALUES ('56', 'symbol_i+1w-2_c', '4500', '10', '36000', '1', '0', '0', '0', '0', '-2');
INSERT INTO `henna` VALUES ('57', 'symbol_m+1i-2_c', '4501', '10', '36000', '-2', '0', '0', '1', '0', '0');
INSERT INTO `henna` VALUES ('58', 'symbol_m+1w-2_c', '4502', '10', '21000', '0', '0', '0', '1', '0', '-2');
INSERT INTO `henna` VALUES ('59', 'symbol_w+1i-2_c', '4503', '10', '30000', '-2', '0', '0', '0', '0', '1');
INSERT INTO `henna` VALUES ('60', 'symbol_w+1m-2_c', '4504', '10', '36000', '0', '0', '0', '-2', '0', '1');
INSERT INTO `henna` VALUES ('61', 'symbol_s+2c-4_c', '4505', '10', '24600', '0', '2', '-4', '0', '0', '0');
INSERT INTO `henna` VALUES ('62', 'symbol_s+2d-4_c', '4506', '10', '24600', '0', '2', '0', '0', '-4', '0');
INSERT INTO `henna` VALUES ('63', 'symbol_c+2s-4_c', '4507', '10', '24600', '0', '-4', '2', '0', '0', '0');
INSERT INTO `henna` VALUES ('64', 'symbol_c+2d-4_c', '4508', '10', '24600', '0', '0', '2', '0', '-4', '0');
INSERT INTO `henna` VALUES ('65', 'symbol_d+2s-4_c', '4509', '10', '24600', '0', '-4', '0', '0', '2', '0');
INSERT INTO `henna` VALUES ('66', 'symbol_d+2c-4_c', '4510', '10', '24600', '0', '0', '-4', '0', '2', '0');
INSERT INTO `henna` VALUES ('67', 'symbol_i+2m-4_c', '4511', '10', '24600', '2', '0', '0', '-4', '0', '0');
INSERT INTO `henna` VALUES ('68', 'symbol_i+2w-4_c', '4512', '10', '24600', '2', '0', '0', '0', '0', '-4');
INSERT INTO `henna` VALUES ('69', 'symbol_m+2i-4_c', '4513', '10', '24600', '-4', '0', '0', '2', '0', '0');
INSERT INTO `henna` VALUES ('70', 'symbol_m+2w-4_c', '4514', '10', '30000', '0', '0', '0', '2', '0', '-4');
INSERT INTO `henna` VALUES ('71', 'symbol_w+2i-4_c', '4515', '10', '30000', '-4', '0', '0', '0', '0', '2');
INSERT INTO `henna` VALUES ('72', 'symbol_w+2m-4_c', '4516', '10', '30000', '0', '0', '0', '-4', '0', '2');
INSERT INTO `henna` VALUES ('73', 'symbol_s+2c-3_c', '4517', '10', '30000', '0', '2', '-3', '0', '0', '0');
INSERT INTO `henna` VALUES ('74', 'symbol_s+2d-3_c', '4518', '10', '35000', '0', '2', '0', '0', '-3', '0');
INSERT INTO `henna` VALUES ('75', 'symbol_c+2s-3_c', '4519', '10', '35000', '0', '-3', '2', '0', '0', '0');
INSERT INTO `henna` VALUES ('76', 'symbol_c+2d-3_c', '4520', '10', '35000', '0', '0', '2', '0', '-3', '0');
INSERT INTO `henna` VALUES ('77', 'symbol_d+2s-3_c', '4521', '10', '27000', '0', '-3', '0', '0', '2', '0');
INSERT INTO `henna` VALUES ('78', 'symbol_d+2c-3_c', '4522', '10', '27000', '0', '0', '-3', '0', '2', '0');
INSERT INTO `henna` VALUES ('79', 'symbol_i+2m-3_c', '4523', '10', '27000', '2', '0', '0', '-3', '0', '0');
INSERT INTO `henna` VALUES ('80', 'symbol_i+2w-3_c', '4524', '10', '30000', '2', '0', '0', '0', '0', '-3');
INSERT INTO `henna` VALUES ('81', 'symbol_m+2i-3_c', '4525', '10', '30000', '-3', '0', '0', '2', '0', '0');
INSERT INTO `henna` VALUES ('82', 'symbol_m+2w-3_c', '4526', '10', '30000', '0', '0', '0', '2', '0', '-3');
INSERT INTO `henna` VALUES ('83', 'symbol_w+2i-3_c', '4527', '10', '30000', '-3', '0', '0', '0', '0', '2');
INSERT INTO `henna` VALUES ('84', 'symbol_w+2m-3_c', '4528', '10', '30000', '0', '0', '0', '-3', '0', '2');
INSERT INTO `henna` VALUES ('85', 'symbol_s+3c-5_c', '4529', '10', '30000', '0', '3', '-5', '0', '0', '0');
INSERT INTO `henna` VALUES ('86', 'symbol_s+3d-5_c', '4530', '10', '30000', '0', '3', '0', '0', '-5', '0');
INSERT INTO `henna` VALUES ('87', 'symbol_c+3s-5_c', '4531', '10', '30000', '0', '-5', '3', '0', '0', '0');
INSERT INTO `henna` VALUES ('88', 'symbol_c+3d-5_c', '4532', '10', '30000', '0', '0', '3', '0', '-5', '0');
INSERT INTO `henna` VALUES ('89', 'symbol_d+3s-5_c', '4533', '10', '30000', '0', '-5', '0', '0', '3', '0');
INSERT INTO `henna` VALUES ('90', 'symbol_d+3c-5_c', '4534', '10', '30000', '0', '0', '-5', '0', '3', '0');
INSERT INTO `henna` VALUES ('91', 'symbol_i+3m-5_c', '4535', '10', '30000', '3', '0', '0', '-5', '0', '0');
INSERT INTO `henna` VALUES ('92', 'symbol_i+3w-5_c', '4536', '10', '30000', '3', '0', '0', '0', '0', '-5');
INSERT INTO `henna` VALUES ('93', 'symbol_m+3i-5_c', '4537', '10', '30000', '-5', '0', '0', '3', '0', '0');
INSERT INTO `henna` VALUES ('94', 'symbol_m+3w-5_c', '4538', '10', '30000', '0', '0', '0', '3', '0', '-5');
INSERT INTO `henna` VALUES ('95', 'symbol_w+3i-5_c', '4539', '10', '30000', '-5', '0', '0', '0', '0', '3');
INSERT INTO `henna` VALUES ('96', 'symbol_w+3m-5_c', '4540', '10', '30000', '0', '0', '0', '-5', '0', '3');
INSERT INTO `henna` VALUES ('97', 'symbol_s+3c-4_c', '4541', '10', '30000', '0', '3', '-4', '0', '0', '0');
INSERT INTO `henna` VALUES ('98', 'symbol_s+3d-4_c', '4542', '10', '30000', '0', '3', '0', '0', '-4', '0');
INSERT INTO `henna` VALUES ('99', 'symbol_c+3s-4_c', '4543', '10', '50000', '0', '-4', '3', '0', '0', '0');
INSERT INTO `henna` VALUES ('100', 'symbol_c+3d-4_c', '4544', '10', '50000', '0', '0', '3', '0', '-4', '0');
INSERT INTO `henna` VALUES ('101', 'symbol_d+3s-4_c', '4545', '10', '50000', '0', '-4', '0', '0', '3', '0');
INSERT INTO `henna` VALUES ('102', 'symbol_d+3c-4_c', '4546', '10', '50000', '0', '0', '-4', '0', '3', '0');
INSERT INTO `henna` VALUES ('103', 'symbol_i+3m-4_c', '4547', '10', '50000', '3', '0', '0', '-4', '0', '0');
INSERT INTO `henna` VALUES ('104', 'symbol_i+3w-4_c', '4548', '10', '50000', '3', '0', '0', '0', '0', '-4');
INSERT INTO `henna` VALUES ('105', 'symbol_m+3i-4_c', '4549', '10', '50000', '-4', '0', '0', '3', '0', '0');
INSERT INTO `henna` VALUES ('106', 'symbol_m+3w-4_c', '4550', '10', '50000', '0', '0', '0', '3', '0', '-4');
INSERT INTO `henna` VALUES ('107', 'symbol_w+3i-4_c', '4551', '10', '50000', '-4', '0', '0', '0', '0', '3');
INSERT INTO `henna` VALUES ('108', 'symbol_w+3m-4_c', '4552', '10', '50000', '0', '0', '0', '-4', '0', '3');
INSERT INTO `henna` VALUES ('109', 'symbol_s+1c-1_c', '4553', '10', '50000', '0', '1', '-1', '0', '0', '0');
INSERT INTO `henna` VALUES ('110', 'symbol_s+1d-1_c', '4554', '10', '50000', '0', '1', '0', '0', '-1', '0');
INSERT INTO `henna` VALUES ('111', 'symbol_c+1s-1_c', '4555', '10', '50000', '0', '-1', '1', '0', '0', '0');
INSERT INTO `henna` VALUES ('112', 'symbol_c+1d-1_c', '4556', '10', '50000', '0', '0', '1', '0', '-1', '0');
INSERT INTO `henna` VALUES ('113', 'symbol_d+1s-1_c', '4557', '10', '50000', '0', '-1', '0', '0', '1', '0');
INSERT INTO `henna` VALUES ('114', 'symbol_d+1c-1_c', '4558', '10', '50000', '0', '0', '-1', '0', '1', '0');
INSERT INTO `henna` VALUES ('115', 'symbol_i+1m-1_c', '4559', '10', '90000', '1', '0', '0', '-1', '0', '0');
INSERT INTO `henna` VALUES ('116', 'symbol_i+1w-1_c', '4560', '10', '50000', '1', '0', '0', '0', '0', '-1');
INSERT INTO `henna` VALUES ('117', 'symbol_m+1i-1_c', '4561', '10', '50000', '-1', '0', '0', '1', '0', '0');
INSERT INTO `henna` VALUES ('118', 'symbol_m+1w-1_c', '4562', '10', '50000', '0', '0', '0', '1', '0', '-1');
INSERT INTO `henna` VALUES ('119', 'symbol_w+1i-1_c', '4563', '10', '50000', '-1', '0', '0', '0', '0', '1');
INSERT INTO `henna` VALUES ('120', 'symbol_w+1m-1_c', '4564', '10', '50000', '0', '0', '0', '-1', '0', '1');
INSERT INTO `henna` VALUES ('121', 'symbol_s+4c-6_c', '4565', '10', '36000', '0', '4', '-6', '0', '0', '0');
INSERT INTO `henna` VALUES ('122', 'symbol_s+4d-6_c', '4566', '10', '36000', '0', '4', '0', '0', '-6', '0');
INSERT INTO `henna` VALUES ('123', 'symbol_c+4s-6_c', '4567', '10', '50000', '0', '-6', '4', '0', '0', '0');
INSERT INTO `henna` VALUES ('124', 'symbol_c+4d-6_c', '4568', '10', '50000', '0', '0', '4', '0', '-6', '0');
INSERT INTO `henna` VALUES ('125', 'symbol_d+4s-6_c', '4569', '10', '30000', '0', '-6', '0', '0', '4', '0');
INSERT INTO `henna` VALUES ('126', 'symbol_d+4c-6_c', '4570', '10', '36000', '0', '0', '-6', '0', '4', '0');
INSERT INTO `henna` VALUES ('127', 'symbol_i+4m-6_c', '4571', '10', '36000', '4', '0', '0', '-6', '0', '0');
INSERT INTO `henna` VALUES ('128', 'symbol_i+4w-6_c', '4572', '10', '30000', '4', '0', '0', '0', '0', '-6');
INSERT INTO `henna` VALUES ('129', 'symbol_m+4i-6_c', '4573', '10', '36000', '-6', '0', '0', '4', '0', '0');
INSERT INTO `henna` VALUES ('130', 'symbol_m+4w-6_c', '4574', '10', '36000', '0', '0', '0', '4', '0', '-6');
INSERT INTO `henna` VALUES ('131', 'symbol_w+4i-6_c', '4575', '10', '36000', '-6', '0', '0', '0', '0', '4');
INSERT INTO `henna` VALUES ('132', 'symbol_w+4m-6_c', '4576', '10', '30000', '0', '0', '0', '-6', '0', '4');
INSERT INTO `henna` VALUES ('133', 'symbol_s+4c-5_c', '4577', '10', '36000', '0', '4', '-5', '0', '0', '0');
INSERT INTO `henna` VALUES ('134', 'symbol_s+4d-5_c', '4578', '10', '90000', '0', '4', '0', '0', '-5', '0');
INSERT INTO `henna` VALUES ('135', 'symbol_c+4s-5_c', '4579', '10', '90000', '0', '-5', '4', '0', '0', '0');
INSERT INTO `henna` VALUES ('136', 'symbol_c+4d-5_c', '4580', '10', '90000', '0', '0', '4', '0', '-5', '0');
INSERT INTO `henna` VALUES ('137', 'symbol_d+4s-5_c', '4581', '10', '36000', '0', '-5', '0', '0', '4', '0');
INSERT INTO `henna` VALUES ('138', 'symbol_d+4c-5_c', '4582', '10', '36000', '0', '0', '-5', '0', '4', '0');
INSERT INTO `henna` VALUES ('139', 'symbol_i+4m-5_c', '4583', '10', '90000', '4', '0', '0', '-5', '0', '0');
INSERT INTO `henna` VALUES ('140', 'symbol_i+4w-5_c', '4584', '10', '36000', '4', '0', '0', '0', '0', '-5');
INSERT INTO `henna` VALUES ('141', 'symbol_m+4i-5_c', '4585', '10', '90000', '-5', '0', '0', '4', '0', '0');
INSERT INTO `henna` VALUES ('142', 'symbol_m+4w-5_c', '4586', '10', '90000', '0', '0', '0', '4', '0', '-5');
INSERT INTO `henna` VALUES ('143', 'symbol_w+4i-5_c', '4587', '10', '36000', '-5', '0', '0', '0', '0', '4');
INSERT INTO `henna` VALUES ('144', 'symbol_w+4m-5_c', '4588', '10', '36000', '0', '0', '0', '-5', '0', '4');
INSERT INTO `henna` VALUES ('145', 'symbol_s+2c-2_c', '4589', '10', '60000', '0', '2', '-2', '0', '0', '0');
INSERT INTO `henna` VALUES ('146', 'symbol_s+2d-2_c', '4590', '10', '60000', '0', '2', '0', '0', '-2', '0');
INSERT INTO `henna` VALUES ('147', 'symbol_c+2s-2_c', '4591', '10', '60000', '0', '-2', '2', '0', '0', '0');
INSERT INTO `henna` VALUES ('148', 'symbol_c+2d-2_c', '4592', '10', '60000', '0', '0', '2', '0', '-2', '0');
INSERT INTO `henna` VALUES ('149', 'symbol_d+2s-2_c', '4593', '10', '60000', '0', '-2', '0', '0', '2', '0');
INSERT INTO `henna` VALUES ('150', 'symbol_d+2c-2_c', '4594', '10', '60000', '0', '0', '-2', '0', '2', '0');
INSERT INTO `henna` VALUES ('151', 'symbol_i+2m-2_c', '4595', '10', '60000', '2', '0', '0', '-2', '0', '0');
INSERT INTO `henna` VALUES ('152', 'symbol_i+2w-2_c', '4596', '10', '90000', '2', '0', '0', '0', '0', '-2');
INSERT INTO `henna` VALUES ('153', 'symbol_m+2i-2_c', '4597', '10', '60000', '-2', '0', '0', '2', '0', '0');
INSERT INTO `henna` VALUES ('154', 'symbol_m+2w-2_c', '4598', '10', '60000', '0', '0', '0', '2', '0', '-2');
INSERT INTO `henna` VALUES ('155', 'symbol_w+2i-2_c', '4599', '10', '60000', '-2', '0', '0', '0', '0', '2');
INSERT INTO `henna` VALUES ('156', 'symbol_w+2m-2_c', '4600', '10', '60000', '0', '0', '0', '-2', '0', '2');
INSERT INTO `henna` VALUES ('157', 'symbol_s+3c-3_c', '4601', '10', '90000', '0', '3', '-3', '0', '0', '0');
INSERT INTO `henna` VALUES ('158', 'symbol_s+3d-3_c', '4602', '10', '90000', '0', '3', '0', '0', '-3', '0');
INSERT INTO `henna` VALUES ('159', 'symbol_c+3s-3_c', '4603', '10', '90000', '0', '-3', '3', '0', '0', '0');
INSERT INTO `henna` VALUES ('160', 'symbol_c+3d-3_c', '4604', '10', '90000', '0', '0', '3', '0', '-3', '0');
INSERT INTO `henna` VALUES ('161', 'symbol_d+3s-3_c', '4605', '10', '90000', '0', '-3', '0', '0', '3', '0');
INSERT INTO `henna` VALUES ('162', 'symbol_d+3c-3_c', '4606', '10', '90000', '0', '0', '-3', '0', '3', '0');
INSERT INTO `henna` VALUES ('163', 'symbol_i+3m-3_c', '4607', '10', '90000', '3', '0', '0', '-3', '0', '0');
INSERT INTO `henna` VALUES ('164', 'symbol_i+3w-3_c', '4608', '10', '90000', '3', '0', '0', '0', '0', '-3');
INSERT INTO `henna` VALUES ('165', 'symbol_m+3i-3_c', '4609', '10', '90000', '-3', '0', '0', '3', '0', '0');
INSERT INTO `henna` VALUES ('166', 'symbol_m+3w-3_c', '4610', '10', '90000', '0', '0', '0', '3', '0', '-3');
INSERT INTO `henna` VALUES ('167', 'symbol_w+3i-3_c', '4611', '10', '90000', '-3', '0', '0', '0', '0', '3');
INSERT INTO `henna` VALUES ('168', 'symbol_w+3m-3_c', '4612', '10', '90000', '0', '0', '0', '-3', '0', '3');
INSERT INTO `henna` VALUES ('169', 'symbol_s+4c-4_c', '4613', '10', '145000', '0', '4', '-4', '0', '0', '0');
INSERT INTO `henna` VALUES ('170', 'symbol_s+4d-4_c', '4614', '10', '145000', '0', '4', '0', '0', '-4', '0');
INSERT INTO `henna` VALUES ('171', 'symbol_c+4s-4_c', '4615', '10', '145000', '0', '-4', '4', '0', '0', '0');
INSERT INTO `henna` VALUES ('172', 'symbol_c+4d-4_c', '4616', '10', '145000', '0', '0', '4', '0', '-4', '0');
INSERT INTO `henna` VALUES ('173', 'symbol_d+4s-4_c', '4617', '10', '145000', '0', '-4', '0', '0', '4', '0');
INSERT INTO `henna` VALUES ('174', 'symbol_d+4c-4_c', '4618', '10', '145000', '0', '0', '-4', '0', '4', '0');
INSERT INTO `henna` VALUES ('175', 'symbol_i+4m-4_c', '4619', '10', '145000', '4', '0', '0', '-4', '0', '0');
INSERT INTO `henna` VALUES ('176', 'symbol_i+4w-4_c', '4620', '10', '145000', '4', '0', '0', '0', '0', '-4');
INSERT INTO `henna` VALUES ('177', 'symbol_m+4i-4_c', '4621', '10', '145000', '-4', '0', '0', '4', '0', '0');
INSERT INTO `henna` VALUES ('178', 'symbol_m+4w-4_c', '4622', '10', '145000', '0', '0', '0', '4', '0', '-4');
INSERT INTO `henna` VALUES ('179', 'symbol_w+4i-4_c', '4623', '10', '145000', '-4', '0', '0', '0', '0', '4');
INSERT INTO `henna` VALUES ('180', 'symbol_w+4m-4_c', '4624', '10', '145000', '0', '0', '0', '-4', '0', '4');
