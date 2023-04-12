SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `fort_staticobjects`;
CREATE TABLE `fort_staticobjects` (
  `fortId` int(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL,
  `x` int(11) NOT NULL DEFAULT '0',
  `y` int(11) NOT NULL DEFAULT '0',
  `z` int(11) NOT NULL DEFAULT '0',
  `range_xmin` int(11) NOT NULL DEFAULT '0',
  `range_ymin` int(11) NOT NULL DEFAULT '0',
  `range_zmin` int(11) NOT NULL DEFAULT '0',
  `range_xmax` int(11) NOT NULL DEFAULT '0',
  `range_ymax` int(11) NOT NULL DEFAULT '0',
  `range_zmax` int(11) NOT NULL DEFAULT '0',
  `hp` int(11) NOT NULL DEFAULT '0',
  `pDef` int(11) NOT NULL DEFAULT '0',
  `mDef` int(11) NOT NULL DEFAULT '0',
  `openType` varchar(5) NOT NULL DEFAULT 'false',
  `commanderDoor` varchar(5) NOT NULL DEFAULT 'false',
  `objectType` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`fortId`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `fort_staticobjects` VALUES ('101', '18220500', 'Shanty_flagpole', '-52752', '156493', '-1130', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('102', '19240500', 'Southern_flagpole', '-22702', '219801', '-2314', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('103', '20230500', 'Hive_flagpole', '16585', '188066', '-2002', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('104', '23210500', 'Valley_flagpole', '126084', '123350', '-1663', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('105', '22180500', 'Ivory_flagpole', '72856', '4281', '-2123', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('106', '24190500', 'Narsell_flagpole', '154894', '55308', '-2332', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('107', '25190500', 'Bayou_flagpole', '189933', '39745', '-2487', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('108', '23240500', 'WhiteSands_flagpole', '118419', '204919', '-2411', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('109', '24150500', 'Borderland_flagpole', '159145', '-70302', '-1942', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('110', '22160500', 'Swamp_flagpole', '69839', '-61422', '-1864', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('111', '23130500', 'Archaic_flagpole', '109478', '-141219', '-2034', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('112', '20220500', 'Floran_flagpole', '5606', '149756', '-1967', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('113', '18200500', 'CloudMountain_flagpole', '-53230', '91229', '-1899', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('114', '21220500', 'Tanor_flagpole', '60280', '139444', '-832', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('115', '20200500', 'Dragonspine_flagpole', '11546', '95030', '-2498', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('116', '22200500', 'Antharas_flagpole', '79252', '91052', '-1962', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('117', '23170500', 'Western_flagpole', '111371', '-15139', '-72', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('118', '23200500', 'Hunters_flagpole', '125248', '95143', '-1218', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('119', '22230500', 'Aaru_flagpole', '73113', '185988', '-1659', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('120', '23160500', 'Demon_flagpole', '100708', '-55315', '277', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
INSERT INTO `fort_staticobjects` VALUES ('121', '22150500', 'Monastic_flagpole', '72173', '-94761', '-506', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'false', 'false', '1');
