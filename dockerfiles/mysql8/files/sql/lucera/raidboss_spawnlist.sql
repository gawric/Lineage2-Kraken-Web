/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:56:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `raidboss_spawnlist`
-- ----------------------------
DROP TABLE IF EXISTS `raidboss_spawnlist`;
CREATE TABLE `raidboss_spawnlist` (
  `boss_id` int(11) NOT NULL DEFAULT '0',
  `amount` int(11) NOT NULL DEFAULT '0',
  `loc_x` int(11) NOT NULL DEFAULT '0',
  `loc_y` int(11) NOT NULL DEFAULT '0',
  `loc_z` int(11) NOT NULL DEFAULT '0',
  `zone_size` int(11) NOT NULL DEFAULT '0',
  `heading` int(11) NOT NULL DEFAULT '0',
  `respawn_min_delay` int(11) NOT NULL DEFAULT '43200',
  `respawn_max_delay` int(11) NOT NULL DEFAULT '129600',
  `respawn_time` bigint(20) NOT NULL DEFAULT '0',
  `currentHp` decimal(8,0) DEFAULT NULL,
  `currentMp` decimal(8,0) DEFAULT NULL,
  `broadcastSpawn` varchar(16) DEFAULT 'false',
  PRIMARY KEY (`boss_id`,`loc_x`,`loc_y`,`loc_z`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of raidboss_spawnlist
-- ----------------------------
INSERT INTO `raidboss_spawnlist` VALUES ('25001', '1', '-54416', '146480', '-2887', '2000', '0', '21600', '21610', '0', '95986', '545', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25004', '1', '-94208', '100240', '-3520', '2000', '0', '21600', '21610', '0', '168366', '763', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25007', '1', '124240', '75376', '-2800', '2000', '0', '21600', '21610', '0', '331522', '1062', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25010', '1', '113920', '52960', '-3735', '2000', '0', '21600', '21610', '0', '624464', '2039', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25013', '1', '169744', '11920', '-2732', '2000', '0', '21600', '21610', '0', '507285', '1722', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25016', '1', '76787', '245775', '-10376', '2000', '0', '21600', '21610', '0', '188376', '2368', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25019', '1', '7376', '169376', '-3600', '2000', '0', '21600', '21610', '0', '206185', '606', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25020', '1', '90384', '125568', '-2128', '2000', '0', '21600', '21610', '0', '156584', '893', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25023', '1', '27280', '101744', '-3696', '2000', '0', '21600', '21610', '0', '208019', '1415', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25026', '1', '92976', '7920', '-3914', '2000', '0', '21600', '21610', '0', '352421', '1660', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25029', '1', '54941', '206705', '-3728', '2000', '0', '21600', '21610', '0', '156190', '1911', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25032', '1', '88532', '245798', '-10376', '2000', '0', '21600', '21610', '0', '229722', '2707', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25035', '1', '180968', '12035', '-2720', '2000', '0', '21600', '21610', '0', '888658', '3058', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25038', '1', '-57360', '186272', '-4967', '2000', '0', '21600', '21610', '0', '116581', '699', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25041', '1', '10416', '126880', '-3676', '2000', '0', '21600', '21610', '0', '165289', '927', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25044', '1', '107792', '27728', '-3488', '2000', '0', '21600', '21610', '0', '319791', '1296', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25047', '1', '116352', '27648', '-3319', '2000', '0', '21600', '21610', '0', '352421', '1660', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25050', '1', '125520', '27216', '-3632', '2000', '0', '21600', '21610', '0', '771340', '2039', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25051', '1', '117760', '-9072', '-3264', '2000', '0', '21600', '21610', '0', '818959', '2707', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25054', '1', '113432', '16403', '3960', '1000', '0', '21600', '21610', '0', '945900', '3420', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25057', '1', '107056', '168176', '-3456', '2000', '0', '21600', '21610', '0', '288415', '2235', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25060', '1', '-60428', '188264', '-4512', '2000', '0', '21600', '21610', '0', '99367', '575', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25063', '1', '-91024', '116304', '-3466', '2000', '0', '21600', '21610', '0', '330579', '927', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25064', '1', '92528', '84752', '-3703', '2000', '0', '21600', '21610', '0', '218810', '1120', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25067', '1', '94992', '-23168', '-2176', '2000', '0', '21600', '21610', '0', '554640', '1598', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25070', '1', '125600', '50100', '-3600', '2000', '0', '21600', '21610', '0', '451391', '2039', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25073', '1', '143265', '110044', '-3944', '2000', '0', '21600', '21610', '0', '875948', '2987', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25076', '1', '-60976', '127552', '-2960', '2000', '0', '21600', '21610', '0', '103092', '606', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25079', '1', '53712', '102656', '-1072', '2000', '0', '21600', '21610', '0', '168366', '763', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25082', '1', '88512', '140576', '-3483', '2000', '0', '21600', '21610', '0', '206753', '1062', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25085', '1', '66944', '67504', '-3704', '2000', '0', '21600', '21610', '0', '371721', '1355', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25088', '1', '90848', '16368', '-5296', '2000', '0', '21600', '21610', '0', '702418', '2039', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25089', '1', '165424', '93776', '-2992', '2000', '0', '21600', '21610', '0', '512194', '2301', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25092', '1', '116151', '16227', '1944', '2000', '0', '21600', '21610', '0', '888658', '3058', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25095', '1', '-37856', '198128', '-2672', '2000', '0', '21600', '21610', '0', '121941', '731', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25098', '1', '123536', '133504', '-3584', '2000', '0', '21600', '21610', '0', '330579', '927', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25099', '1', '64048', '16048', '-3536', '2000', '0', '21600', '21610', '0', '273375', '1355', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25102', '1', '113840', '84256', '-2480', '2000', '0', '21600', '21610', '0', '576831', '1722', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25103', '1', '135872', '94592', '-3735', '2000', '0', '21600', '21610', '0', '451391', '2039', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25106', '1', '173880', '-11412', '-2880', '2000', '0', '21600', '21610', '0', '526218', '2570', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25109', '1', '152660', '110387', '-5520', '2000', '0', '21600', '21610', '0', '935092', '3347', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25112', '1', '116128', '139392', '-3640', '2000', '0', '21600', '21610', '0', '127782', '763', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25115', '1', '94000', '197500', '-3300', '2000', '0', '21600', '21610', '0', '294846', '1120', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25118', '1', '50896', '146576', '-3645', '2000', '0', '21600', '21610', '0', '330579', '1415', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25119', '1', '121872', '64032', '-3536', '2000', '0', '21600', '21610', '0', '507285', '1722', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25122', '1', '86300', '-8200', '-3000', '2000', '0', '21600', '21610', '0', '467209', '2235', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25125', '1', '170656', '85184', '-2000', '2000', '0', '21600', '21610', '0', '1637918', '2707', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25126', '1', '116263', '15916', '6992', '1200', '0', '21600', '21610', '0', '1974940', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25127', '1', '-47552', '219232', '-2413', '2000', '0', '21600', '21610', '0', '198734', '763', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25128', '1', '17696', '179056', '-3520', '2000', '0', '21600', '21610', '0', '148507', '860', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25131', '1', '75488', '-9360', '-2720', '2000', '0', '21600', '21610', '0', '369009', '1415', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25134', '1', '87536', '75872', '-3591', '2000', '0', '21600', '21610', '0', '218810', '1722', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25137', '1', '125280', '102576', '-3305', '2000', '0', '21600', '21610', '0', '451391', '2039', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25140', '1', '191975', '56959', '-7616', '2000', '0', '21600', '21610', '0', '818959', '2707', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25143', '1', '113102', '16002', '6992', '2000', '0', '21600', '21610', '0', '977229', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25146', '1', '-13056', '215680', '-3760', '2000', '0', '21600', '21610', '0', '90169', '485', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25149', '1', '-12656', '138176', '-3584', '2000', '0', '21600', '21610', '0', '103092', '606', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25152', '1', '43872', '123968', '-2928', '2000', '0', '21600', '21610', '0', '165289', '927', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25155', '1', '73520', '66912', '-3728', '2000', '0', '21600', '21610', '0', '294846', '1120', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25158', '1', '77104', '5408', '-3088', '2000', '0', '21600', '21610', '0', '920790', '1722', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25159', '1', '124984', '43200', '-3625', '2000', '0', '21600', '21610', '0', '435256', '1975', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25162', '1', '194107', '53884', '-4368', '2000', '0', '21600', '21610', '0', '1461912', '2368', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25163', '1', '130500', '59098', '3584', '2000', '0', '21600', '21610', '0', '888658', '3058', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25166', '1', '-21800', '152000', '-2900', '2000', '0', '21600', '21610', '0', '134813', '606', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25169', '1', '-54464', '170288', '-3136', '2000', '0', '21600', '21610', '0', '336732', '763', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25170', '1', '26064', '121808', '-3738', '2000', '0', '21600', '21610', '0', '195371', '1028', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25173', '1', '75968', '110784', '-2512', '2000', '0', '21600', '21610', '0', '288415', '1415', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25176', '1', '92544', '115232', '-3200', '2000', '0', '21600', '21610', '0', '451391', '2039', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25179', '1', '181814', '52379', '-4344', '2000', '0', '21600', '21610', '0', '526218', '2368', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25182', '1', '41966', '215417', '-3728', '2000', '0', '21600', '21610', '0', '512194', '2707', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25185', '1', '88123', '166312', '-3412', '2000', '0', '21600', '21610', '0', '165289', '927', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25188', '1', '88256', '176208', '-3488', '2000', '0', '21600', '21610', '0', '255564', '763', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25189', '1', '68832', '203024', '-3547', '2000', '0', '21600', '21610', '0', '156584', '893', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25192', '1', '125920', '190208', '-3291', '2000', '0', '21600', '21610', '0', '258849', '1296', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25198', '1', '102656', '157424', '-3735', '2000', '0', '21600', '21610', '0', '1777317', '2639', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25199', '1', '108096', '157408', '-3688', '2000', '0', '21600', '21610', '0', '912634', '2707', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25202', '1', '119760', '157392', '-3744', '2000', '0', '21600', '21610', '0', '935092', '2777', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25205', '1', '123808', '153408', '-3671', '2000', '0', '21600', '21610', '0', '956490', '3274', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25208', '1', '73776', '201552', '-3760', '2000', '0', '21600', '21610', '0', '218810', '1722', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25211', '1', '76352', '193216', '-3648', '2000', '0', '21600', '21610', '0', '174646', '1975', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25214', '1', '112112', '209936', '-3616', '2000', '0', '21600', '21610', '0', '218810', '2368', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25217', '1', '89904', '105712', '-3292', '2000', '0', '21600', '21610', '0', '369009', '1722', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25220', '1', '113551', '17083', '-2120', '2000', '0', '21600', '21610', '0', '924022', '3274', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25223', '1', '43152', '152352', '-2848', '2000', '0', '21600', '21610', '0', '165289', '1237', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25226', '1', '104240', '-3664', '-3392', '2000', '0', '21600', '21610', '0', '768537', '2502', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25229', '1', '137568', '-19488', '-3552', '2000', '0', '21600', '21610', '0', '1891801', '3420', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25230', '1', '66672', '46704', '-3920', '2000', '0', '21600', '21610', '0', '482650', '2169', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25233', '1', '185800', '-26500', '-2000', '2000', '0', '21600', '21610', '0', '1256671', '3643', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25234', '1', '120080', '111248', '-3047', '2000', '0', '21600', '21610', '0', '1052436', '2707', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25235', '1', '116400', '-62528', '-3264', '2000', '0', '21600', '21610', '0', '912634', '3202', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25238', '1', '155000', '85400', '-3200', '2000', '0', '21600', '21610', '0', '512194', '2846', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25241', '1', '165984', '88048', '-2384', '2000', '0', '21600', '21610', '0', '624464', '2639', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25244', '1', '187360', '45840', '-5856', '2000', '0', '21600', '21610', '0', '1891801', '3420', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25245', '1', '172385', '55037', '-5934', '2000', '0', '21600', '21610', '0', '977229', '3643', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25248', '1', '127903', '-13399', '-3720', '2000', '0', '21600', '21610', '0', '1825269', '3274', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25249', '1', '147104', '-20560', '-3377', '2000', '0', '21600', '21610', '0', '945900', '3420', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25252', '1', '192376', '22087', '-3608', '2000', '0', '21600', '21610', '0', '888658', '3058', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25255', '1', '170048', '-24896', '-3440', '2000', '0', '21600', '21610', '0', '1637918', '2707', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25256', '1', '170320', '42640', '-4832', '2000', '0', '21600', '21610', '0', '526218', '2368', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25259', '1', '42050', '208107', '-3752', '2000', '0', '21600', '21610', '0', '1248928', '2039', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25260', '1', '93120', '19440', '-3607', '2000', '0', '21600', '21610', '0', '392985', '1722', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25263', '1', '144400', '-28192', '-1920', '2000', '0', '21600', '21610', '0', '848789', '2846', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25266', '1', '188983', '13647', '-2672', '2000', '0', '21600', '21610', '0', '945900', '3420', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25269', '1', '123504', '-23696', '-3481', '2000', '0', '21600', '21610', '0', '888658', '3058', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25272', '1', '49248', '127792', '-3552', '2000', '0', '21600', '21610', '0', '233163', '1415', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25276', '1', '154088', '-14116', '-3736', '2000', '0', '21600', '21610', '0', '1891801', '3420', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25277', '1', '54651', '180269', '-4976', '2000', '0', '21600', '21610', '0', '507285', '1722', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25280', '1', '85622', '88766', '-2717', '2000', '0', '21600', '21610', '0', '1248928', '2039', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25281', '1', '151053', '88124', '-5424', '2000', '0', '21600', '21610', '0', '1777317', '3058', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25282', '1', '179311', '-7632', '-4896', '2000', '0', '21600', '21610', '0', '1891801', '3420', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25293', '1', '134672', '-115600', '-1216', '2000', '0', '21600', '21610', '0', '977229', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25299', '1', '148154', '-73782', '-4364', '2000', '0', '43200', '57600', '0', '2144334', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25302', '1', '145553', '-81651', '-5464', '2000', '0', '43200', '57600', '0', '2231403', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25305', '1', '144997', '-84948', '-5712', '2000', '0', '28800', '28810', '0', '3065356', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25309', '1', '115537', '-39046', '-1940', '2000', '0', '43200', '57600', '0', '2144334', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25312', '1', '109296', '-36103', '-648', '2000', '0', '43200', '57600', '0', '2231403', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25315', '1', '105654', '-42995', '-1240', '2000', '0', '28800', '28810', '0', '3065356', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25319', '1', '185700', '-106066', '-6184', '2000', '0', '21600', '21610', '0', '1048567', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25322', '1', '93296', '-75104', '-1824', '2000', '0', '21600', '21610', '0', '834231', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25325', '1', '91008', '-85904', '-2736', '2000', '0', '7200', '10800', '0', '888658', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25328', '1', '59331', '-42403', '-3003', '2000', '0', '21600', '21610', '0', '900867', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25352', '1', '-16912', '174912', '-3264', '2000', '0', '21600', '21610', '0', '127782', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25354', '1', '-16096', '184288', '-3817', '2000', '0', '21600', '21610', '0', '165289', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25357', '1', '-3456', '112864', '-3456', '2000', '0', '21600', '21610', '0', '90169', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25360', '1', '29216', '179280', '-3624', '2000', '0', '21600', '21610', '0', '107186', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25362', '1', '-55920', '186768', '-3336', '2000', '0', '21600', '21610', '0', '95986', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25365', '1', '-62000', '190256', '-3687', '2000', '0', '21600', '21610', '0', '214372', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25366', '1', '-62368', '179440', '-3594', '2000', '0', '21600', '21610', '0', '95986', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25369', '1', '-45616', '111024', '-3808', '2000', '0', '21600', '21610', '0', '103092', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25372', '1', '48000', '243376', '-6611', '2000', '0', '21600', '21610', '0', '175392', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25373', '1', '9649', '77467', '-3808', '2000', '0', '21600', '21610', '0', '90169', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25375', '1', '22500', '80300', '-2772', '2000', '0', '21600', '21610', '0', '87696', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25378', '1', '-54096', '84288', '-3512', '2000', '0', '21600', '21610', '0', '87696', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25383', '1', '51632', '153920', '-3552', '2000', '0', '21600', '21610', '0', '156584', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25385', '1', '53600', '143472', '-3872', '2000', '0', '21600', '21610', '0', '174646', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25388', '1', '40128', '101920', '-1241', '2000', '0', '21600', '21610', '0', '165289', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25391', '1', '45600', '120592', '-2455', '2000', '0', '21600', '21610', '0', '297015', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25392', '1', '29928', '107160', '-3708', '2000', '0', '21600', '21610', '0', '141034', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25394', '1', '101888', '200224', '-3680', '2000', '0', '21600', '21610', '0', '390743', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25395', '1', '15000', '119000', '-11900', '2000', '0', '21600', '21610', '0', '288415', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25398', '1', '5000', '189000', '-3728', '2000', '0', '21600', '21610', '0', '165289', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25401', '1', '117808', '102880', '-3600', '2000', '0', '21600', '21610', '0', '141034', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25404', '1', '35992', '191312', '-3104', '2000', '0', '21600', '21610', '0', '148507', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25407', '1', '115072', '112272', '-3018', '2000', '0', '21600', '21610', '0', '526218', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25410', '1', '72192', '125424', '-3657', '2000', '0', '21600', '21610', '0', '218810', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25412', '1', '81920', '113136', '-3056', '2000', '0', '21600', '21610', '0', '319791', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25415', '1', '128352', '138464', '-3467', '2000', '0', '21600', '21610', '0', '218810', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25418', '1', '62416', '8096', '-3376', '2000', '0', '21600', '21610', '0', '273375', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25420', '1', '42032', '24128', '-4704', '2000', '0', '21600', '21610', '0', '335987', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25423', '1', '113600', '47120', '-4640', '2000', '0', '21600', '21610', '0', '539706', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25426', '1', '-18048', '-101264', '-2112', '2000', '0', '21600', '21610', '0', '103092', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25429', '1', '172064', '-214752', '-3565', '2000', '0', '21600', '21610', '0', '103092', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25431', '1', '79648', '18320', '-5232', '2000', '0', '21600', '21610', '0', '273375', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25434', '1', '104096', '-16896', '-1803', '2000', '0', '21600', '21610', '0', '451391', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25437', '1', '67296', '64128', '-3723', '2000', '0', '21600', '21610', '0', '576831', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25438', '1', '107000', '92000', '-2272', '2000', '0', '21600', '21610', '0', '273375', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25441', '1', '111440', '82912', '-2912', '2000', '0', '21600', '21610', '0', '288415', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25444', '1', '113232', '17456', '-4384', '2000', '0', '21600', '21610', '0', '588136', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25447', '1', '113200', '17552', '-1424', '2000', '0', '21600', '21610', '0', '645953', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25450', '1', '113600', '15104', '9559', '2000', '0', '21600', '21610', '0', '987470', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25453', '1', '156704', '-6096', '-4185', '2000', '0', '21600', '21610', '0', '888658', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25456', '1', '133632', '87072', '-3623', '2000', '0', '21600', '21610', '0', '352421', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25460', '1', '150304', '67776', '-3688', '2000', '0', '21600', '21610', '0', '385670', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25463', '1', '166288', '68096', '-3264', '2000', '0', '21600', '21610', '0', '467209', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25467', '1', '186192', '61472', '-4160', '2000', '0', '21600', '21610', '0', '576851', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25470', '1', '186896', '56276', '-4576', '2000', '0', '21600', '21610', '0', '598898', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25473', '1', '175712', '29856', '-3776', '2000', '0', '21600', '21610', '0', '402319', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25475', '1', '183568', '24560', '-3184', '2000', '0', '21600', '21610', '0', '451391', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25478', '1', '168288', '28368', '-3632', '2000', '0', '21600', '21610', '0', '588136', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25481', '1', '53517', '205413', '-3728', '2000', '0', '21600', '21610', '0', '66938', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25484', '1', '43160', '220463', '-3680', '2000', '0', '21600', '21610', '0', '369009', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25487', '1', '83056', '183232', '-3616', '2000', '0', '21600', '21610', '0', '218810', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25490', '1', '86528', '216864', '-3584', '2000', '0', '21600', '21610', '0', '218810', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25493', '1', '83174', '254428', '-10873', '2000', '0', '21600', '21610', '0', '451391', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25496', '1', '88300', '258000', '-10200', '2000', '0', '21600', '21610', '0', '402319', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25498', '1', '126624', '174448', '-3056', '2000', '0', '21600', '21610', '0', '288415', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25501', '1', '48575', '-106191', '-1568', '2000', '0', '21600', '21610', '0', '127782', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25504', '1', '123000', '-141000', '-1100', '2000', '0', '21600', '21610', '0', '206753', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25506', '1', '127900', '-160600', '-1100', '2000', '0', '21600', '21610', '0', '184670', '9999', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25509', '1', '74000', '-102000', '900', '2000', '0', '21600', '21610', '0', '418874', '9999', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25514', '1', '79635', '-55434', '-6135', '2000', '0', '28800', '28810', '0', '1429556', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25523', '1', '168641', '-60417', '-3888', '2000', '0', '21600', '21610', '0', '1848045', '1859', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25523', '1', '170000', '-60000', '-3500', '2000', '0', '21600', '21610', '0', '1848045', '1859', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25524', '1', '144600', '-5500', '-4100', '2000', '0', '21600', '21610', '0', '956490', '3247', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25527', '1', '3776', '-6768', '-3276', '2000', '0', '21600', '21610', '0', '1608553', '3718', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('29096', '1', '113000', '-76000', '200', '2000', '0', '21600', '21610', '0', '400000', '9999', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('29030', '1', '189964', '-116820', '-1624', '2000', '0', '21600', '21610', '0', '256613', '3793', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('29033', '1', '193260', '-116820', '-1444', '2000', '0', '21600', '21610', '0', '257118', '3869', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('29036', '1', '189388', '-109476', '-1064', '2000', '0', '21600', '21610', '0', '514943', '3945', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('29037', '1', '192156', '-108980', '-1060', '2000', '0', '21600', '21610', '0', '257674', '4022', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('29040', '1', '189400', '-105702', '-782', '2000', '28905', '21600', '21610', '0', '515450', '4099', 'false');
INSERT INTO `raidboss_spawnlist` VALUES ('25338', '1', '-115036', '-186771', '-6761', '0', '16171', '21600', '21610', '0', '977523', '3718', 'false');