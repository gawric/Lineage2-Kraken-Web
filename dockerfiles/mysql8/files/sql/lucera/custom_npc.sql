DROP TABLE IF EXISTS `custom_npc`;
CREATE TABLE `custom_npc` (
  `id` decimal(11,0) NOT NULL DEFAULT '0',
  `idTemplate` int(11) NOT NULL DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `serverSideName` int(1) DEFAULT '0',
  `title` varchar(45) DEFAULT '',
  `race` int(11) NOT NULL DEFAULT '5',
  `serverSideTitle` int(1) DEFAULT '0',
  `collision_radius` decimal(5,2) DEFAULT NULL,
  `collision_height` decimal(5,2) DEFAULT NULL,
  `level` decimal(2,0) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `attackrange` int(11) DEFAULT NULL,
  `hp` decimal(8,0) DEFAULT NULL,
  `mp` decimal(8,0) DEFAULT NULL,
  `hpreg` decimal(8,2) DEFAULT NULL,
  `mpreg` decimal(5,2) DEFAULT NULL,
  `str` decimal(7,0) DEFAULT NULL,
  `con` decimal(7,0) DEFAULT NULL,
  `dex` decimal(7,0) DEFAULT NULL,
  `int` decimal(7,0) DEFAULT NULL,
  `wit` decimal(7,0) DEFAULT NULL,
  `men` decimal(7,0) DEFAULT NULL,
  `exp` decimal(9,0) DEFAULT NULL,
  `sp` decimal(8,0) DEFAULT NULL,
  `patk` decimal(5,0) DEFAULT NULL,
  `pdef` decimal(5,0) DEFAULT NULL,
  `matk` decimal(5,0) DEFAULT NULL,
  `mdef` decimal(5,0) DEFAULT NULL,
  `atkspd` decimal(3,0) DEFAULT NULL,
  `aggro` decimal(6,0) DEFAULT NULL,
  `matkspd` decimal(4,0) DEFAULT NULL,
  `rhand` decimal(8,0) DEFAULT NULL,
  `lhand` decimal(8,0) DEFAULT NULL,
  `armor` decimal(1,0) DEFAULT NULL,
  `walkspd` decimal(3,0) DEFAULT NULL,
  `runspd` decimal(3,0) DEFAULT NULL,
  `faction_id` varchar(40) DEFAULT NULL,
  `faction_range` decimal(4,0) DEFAULT NULL,
  `isUndead` int(11) DEFAULT '0',
  `absorb_level` decimal(2,0) DEFAULT '0',
  `absorb_type` enum('FULL_PARTY','LAST_HIT','PARTY_ONE_RANDOM') NOT NULL DEFAULT 'LAST_HIT',
  `ss` int(4) DEFAULT '0',
  `bss` int(4) DEFAULT '0',
  `ss_rate` int(3) DEFAULT '0',
  `AI` varchar(8) DEFAULT 'fighter',
  `drop_herbs` enum('true','false') NOT NULL DEFAULT 'false',
  `moveroute` varchar(40) DEFAULT NULL,
  `is_quest_monster` enum('true','false') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of custom_npc
-- ----------------------------
INSERT INTO `custom_npc` VALUES ('50000', '90018', 'Buffer', '1', 'Crytos', '5', '1', '10.00', '23.00', '70', 'female', 'L2Buffer', '40', '3862', '1493', null, null, '40', '43', '30', '21', '35', '10', '0', '0', '1314', '470', '780', '382', '278', '0', '253', '0', '0', '0', '80', '120', null, '0', '0', '0', 'LAST_HIT', '0', '0', '0', 'balanced', 'false', null, 'false');
INSERT INTO `custom_npc` VALUES ('50001', '35060', 'Event Manager', '1', 'Event', '5', '1', '10.00', '23.00', '70', 'male', 'L2Npc', '40', '3862', '1493', '11.85', '2.78', '40', '43', '30', '21', '20', '10', '0', '0', '1314', '470', '780', '382', '278', '0', '333', '0', '0', '0', '88', '132', '', '0', '0', '0', 'LAST_HIT', '0', '0', '0', 'balanced', 'false', null, 'false');
INSERT INTO `custom_npc` VALUES ('50003', '30006', 'Gatekeeper', '1', 'Crytos', '5', '1', '8.00', '25.00', '70', 'female', 'L2Teleporter', '40', '3862', '1493', null, null, '40', '43', '30', '21', '35', '10', '0', '0', '1314', '470', '780', '382', '278', '0', '253', '0', '0', '0', '80', '120', null, '0', '0', '0', 'LAST_HIT', '0', '0', '0', 'balanced', 'false', null, 'false');
INSERT INTO `custom_npc` VALUES ('50010', '30082', 'Gatis', '1', 'Crytos', '5', '1', '8.00', '23.00', '70', 'male', 'L2JailManager', '40', '3862', '1493', null, null, '40', '43', '30', '21', '35', '10', '0', '0', '1314', '470', '780', '382', '278', '0', '999', '0', '0', '0', '80', '120', null, '0', '0', '0', 'LAST_HIT', '0', '0', '0', 'balanced', 'false', null, 'false');
INSERT INTO `custom_npc` VALUES ('50014', '30175', 'Wedding Manager', '1', 'Crytos', '5', '1', '8.00', '23.00', '70', 'female', 'L2WeddingManager', '40', '3862', '1493', '11.85', '2.78', '40', '43', '30', '21', '35', '10', '0', '0', '1314', '470', '780', '382', '278', '0', '253', '0', '0', '0', '80', '120', null, '0', '0', '0', 'LAST_HIT', '0', '0', '0', 'balanced', 'false', null, 'false');
INSERT INTO `custom_npc` VALUES ('50015', '31227', 'ClassMaster', '1', 'Crytos', '5', '1', '6.00', '16.00', '70', 'male', 'L2ClassMaster', '40', '3862', '1493', '11.85', '2.78', '40', '43', '30', '21', '20', '10', '0', '0', '1314', '470', '780', '382', '278', '0', '333', '0', '0', '0', '88', '132', null, '0', '0', '0', 'LAST_HIT', '0', '0', '0', 'balanced', 'false', null, 'false');
INSERT INTO `custom_npc` VALUES ('50016', '90017', 'ServiceManager', '1', 'Crytos', '5', '1', '10.00', '23.00', '70', 'male', 'L2ServiceManager', '40', '3862', '1493', '11.00', '1.00', '1', '1', '1', '1', '1', '1', '0', '0', '1', '1', '1', '1', '1', '0', '1', '0', '0', '0', '88', '120', null, '0', '0', '0', 'LAST_HIT', '0', '0', '0', 'fighter', 'false', null, 'false');
INSERT INTO `custom_npc` VALUES ('50018', '90023', 'Auction', '1', 'Crytos', '5', '1', '10.00', '19.00', '70', 'male', 'L2Npc', '40', '3862', '1493', '11.85', '2.78', '40', '43', '30', '21', '20', '10', '0', '0', '1314', '470', '780', '382', '278', '0', '333', '0', '0', '0', '88', '132', '', '0', '0', '0', 'LAST_HIT', '0', '0', '0', 'balanced', 'false', null, 'false');
INSERT INTO `custom_npc` VALUES ('50020', '31113', 'Merchant of Mammon', '1', 'Crytos', '0', '1', '22.00', '18.00', '70', 'male', 'L2Merchant', '40', '50000', '1666', '666.00', '55.00', '40', '40', '50', '21', '22', '10', '7774', '820', '5000', '500', '500', '500', '500', '0', '333', '78', '0', '0', '44', '191', null, '300', '0', '0', 'LAST_HIT', '0', '0', '0', 'fighter', 'false', null, 'false');
INSERT INTO `custom_npc` VALUES ('50023', '90019', 'GMShop', '1', 'Crytos', '5', '1', '10.00', '26.00', '70', 'male', 'L2Merchant', '40', '3862', '1493', '11.85', '2.78', '40', '43', '30', '21', '20', '10', '0', '0', '1314', '470', '780', '382', '278', '0', '333', '0', '0', '0', '88', '132', null, '0', '0', '0', 'LAST_HIT', '0', '0', '0', 'fighter', 'false', null, 'false');