/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 21:10:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `vanhalter_spawnlist`
-- ----------------------------
DROP TABLE IF EXISTS `vanhalter_spawnlist`;
CREATE TABLE `vanhalter_spawnlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(40) NOT NULL DEFAULT '',
  `count` int(9) NOT NULL DEFAULT '0',
  `npc_templateid` int(9) NOT NULL DEFAULT '0',
  `locx` int(9) NOT NULL DEFAULT '0',
  `locy` int(9) NOT NULL DEFAULT '0',
  `locz` int(9) NOT NULL DEFAULT '0',
  `randomx` int(9) NOT NULL DEFAULT '0',
  `randomy` int(9) NOT NULL DEFAULT '0',
  `heading` int(9) NOT NULL DEFAULT '0',
  `respawn_delay` int(9) NOT NULL DEFAULT '0',
  `loc_id` int(9) NOT NULL DEFAULT '0',
  `periodOfDay` decimal(2,0) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `key_npc_templateid` (`npc_templateid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vanhalter_spawnlist
-- ----------------------------
INSERT INTO `vanhalter_spawnlist` VALUES ('1', 'Pagan Temple', '1', '32051', '-14670', '-54846', '-10629', '0', '0', '16384', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('2', 'Pagan Temple', '1', '32051', '-15548', '-54836', '-10448', '0', '0', '16384', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('3', 'Pagan Temple', '1', '32051', '-18123', '-54846', '-10629', '0', '0', '16384', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('4', 'Pagan Temple', '1', '32051', '-17248', '-54836', '-10448', '0', '0', '16384', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('5', 'Pagan Temple', '1', '32058', '-12674', '-52673', '-10932', '0', '0', '16384', '21600', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('6', 'Pagan Temple', '1', '32059', '-12728', '-54317', '-11108', '0', '0', '16384', '21600', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('7', 'Pagan Temple', '1', '32060', '-14936', '-53112', '-11559', '0', '0', '16384', '21600', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('8', 'Pagan Temple', '1', '32061', '-15658', '-53668', '-11579', '0', '0', '16384', '21600', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('9', 'Pagan Temple', '1', '32062', '-16404', '-53263', '-11559', '0', '0', '16384', '21600', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('10', 'Pagan Temple', '1', '32063', '-17146', '-53238', '-11559', '0', '0', '16384', '21600', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('11', 'Pagan Temple', '1', '32064', '-17887', '-53137', '-11559', '0', '0', '16384', '21600', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('12', 'Pagan Temple', '1', '32065', '-20082', '-54314', '-11106', '0', '0', '16384', '21600', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('13', 'Pagan Temple', '1', '32066', '-20081', '-52674', '-10921', '0', '0', '16384', '21600', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('14', 'Pagan Temple', '1', '32067', '-16413', '-56569', '-10849', '0', '0', '16384', '21600', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('15', 'Pagan Temple', '1', '32068', '-16397', '-54119', '-10475', '0', '0', '16384', '21600', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('16', 'Pagan Temple', '1', '22175', '-14960', '-53437', '-10629', '0', '0', '7820', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('17', 'Pagan Temple', '1', '22175', '-14964', '-53766', '-10603', '0', '0', '20066', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('18', 'Pagan Temple', '1', '22175', '-15225', '-52968', '-10603', '0', '0', '55924', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('19', 'Pagan Temple', '1', '22175', '-15522', '-52625', '-10629', '0', '0', '17737', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('20', 'Pagan Temple', '1', '22175', '-15676', '-52576', '-10603', '0', '0', '23075', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('21', 'Pagan Temple', '1', '22175', '-15879', '-52521', '-10603', '0', '0', '63322', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('22', 'Pagan Temple', '1', '22175', '-16420', '-52481', '-10603', '0', '0', '4302', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('23', 'Pagan Temple', '1', '22175', '-16590', '-52575', '-10603', '0', '0', '11742', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('24', 'Pagan Temple', '1', '22175', '-16835', '-52485', '-10603', '0', '0', '40331', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('25', 'Pagan Temple', '1', '22175', '-17051', '-52639', '-10629', '0', '0', '4607', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('26', 'Pagan Temple', '1', '22175', '-17461', '-52839', '-10603', '0', '0', '13423', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('27', 'Pagan Temple', '1', '22175', '-17604', '-53050', '-10603', '0', '0', '39469', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('28', 'Pagan Temple', '1', '22175', '-17641', '-53350', '-10629', '0', '0', '14056', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('29', 'Pagan Temple', '1', '22175', '-17710', '-53768', '-10603', '0', '0', '47067', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('30', 'Pagan Temple', '1', '22175', '-17753', '-53950', '-10629', '0', '0', '14260', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('31', 'Pagan Temple', '1', '22175', '-17841', '-54312', '-10603', '0', '0', '14180', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('32', 'Pagan Temple', '1', '22176', '-16156', '-47121', '-10821', '0', '0', '16129', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('33', 'Pagan Temple', '1', '22176', '-16157', '-46340', '-10821', '0', '0', '16468', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('34', 'Pagan Temple', '1', '22176', '-16164', '-48534', '-10917', '0', '0', '16405', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('35', 'Pagan Temple', '1', '22176', '-16165', '-49237', '-10917', '0', '0', '16091', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('36', 'Pagan Temple', '1', '22176', '-16166', '-47732', '-10821', '0', '0', '16430', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('37', 'Pagan Temple', '1', '22176', '-16177', '-49925', '-10917', '0', '0', '16622', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('38', 'Pagan Temple', '1', '22176', '-16198', '-44753', '-10725', '0', '0', '16583', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('39', 'Pagan Temple', '1', '22176', '-16497', '-48344', '-10917', '0', '0', '16215', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('40', 'Pagan Temple', '1', '22176', '-16513', '-49019', '-10917', '0', '0', '15756', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('41', 'Pagan Temple', '1', '22176', '-16529', '-46310', '-10821', '0', '0', '17047', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('42', 'Pagan Temple', '1', '22176', '-16530', '-47027', '-10821', '0', '0', '16487', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('43', 'Pagan Temple', '1', '22176', '-16532', '-47633', '-10821', '0', '0', '16242', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('44', 'Pagan Temple', '1', '22176', '-16552', '-49694', '-10917', '0', '0', '15784', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('45', 'Pagan Temple', '1', '22176', '-16594', '-45094', '-10725', '0', '0', '16166', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('46', 'Pagan Temple', '1', '22188', '-16385', '-52461', '-10629', '0', '0', '16384', '60', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('47', 'Pagan Temple', '1', '29062', '-16397', '-53308', '-10448', '0', '0', '16384', '172800', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('48', 'Pagan Temple', '1', '32038', '-16397', '-53199', '-10448', '0', '0', '16384', '172800', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('49', 'Pagan Temple', '1', '22195', '-16397', '-53199', '-10448', '0', '0', '16384', '172800', '0', '0');
INSERT INTO `vanhalter_spawnlist` VALUES ('50', 'Pagan Temple', '1', '22191', '-16397', '-53199', '-10448', '0', '0', '16384', '60', '0', '0');
