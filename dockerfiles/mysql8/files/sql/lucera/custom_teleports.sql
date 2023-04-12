/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : crytos

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2015-03-18 20:37:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `custom_teleports`
-- ----------------------------
DROP TABLE IF EXISTS `custom_teleports`;
CREATE TABLE `custom_teleports` (
  `description` varchar(75) DEFAULT NULL,
  `id` decimal(11,0) NOT NULL DEFAULT '0',
  `loc_x` decimal(9,0) DEFAULT NULL,
  `loc_y` decimal(9,0) DEFAULT NULL,
  `loc_z` decimal(9,0) DEFAULT NULL,
  `price` decimal(6,0) DEFAULT NULL,
  `fornoble` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of custom_teleports
-- ----------------------------
INSERT INTO `custom_teleports` VALUES ('Dark Elven Village', '50001', '9745', '15606', '-4574', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Dwarven Village', '50002', '115113', '-178212', '-901', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Elven Village', '50003', '46934', '51467', '-2977', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Orc Village', '50004', '-44836', '-112352', '-239', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Talking Island', '50005', '-84318', '244579', '-3730', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Town Of Dion', '50006', '15670', '142983', '-2705', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Floran Village', '50007', '17838', '170274', '-3508', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Town Of Giran', '50008', '83400', '147943', '-3404', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Gludin Village', '50009', '-80826', '149775', '-3043', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Town Of Gludio', '50010', '-12672', '122776', '-3116', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Hunters Village', '50011', '117110', '76883', '-2695', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Town Of Aden [NE]', '50012', '159439', '21104', '-3684', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Town Of Aden [SW]', '50013', '140434', '26222', '-2530', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Town Of Aden', '50014', '147450', '26741', '-2204', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Town Of Oren', '50015', '82956', '53162', '-1495', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Town Of Heine', '50016', '107092', '219693', '-3446', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('The Garden Of Eva', '50017', '84543', '235022', '-3756', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cemetery', '50018', '172136', '20325', '-3326', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('The Giants Cave', '50019', '174528', '52683', '-4369', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('The Forest Of Mirrors', '50020', '150477', '85907', '-2753', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Anghel Waterfall', '50021', '169026', '85272', '-2092', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Dragon Valley Cave', '50022', '131355', '114451', '-3718', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Lair End', '50023', '154623', '121134', '-3809', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Lair Of Antharas', '50024', '173826', '115333', '-7708', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cruma Tower Entrance', '50025', '17192', '114178', '-3439', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cruma Tower 1nd Floor', '50026', '17724', '114004', '-11672', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cruma Tower 2nd floor', '50027', '17730', '108301', '-9057', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cruma Tower 3nd floor', '50028', '17719', '115430', '-6582', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cruma Tower Core Room', '50029', '17692', '112284', '-6250', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Altar Of Rites', '50030', '-45563', '73216', '-3575', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('School Of Dark Arts', '50031', '-47129', '59678', '-3336', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('South Border', '50032', '-61146', '99591', '-3744', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Swamp', '50033', '-14162', '44879', '-3592', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Temple Of shillien', '50034', '23965', '10989', '-3723', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Undine Waterfall', '50035', '-10972', '57808', '-3717', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Waterfall (in)', '50036', '-5162', '55702', '-3483', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Abandoned Coal Mines [East]', '50037', '155535', '-173560', '2495', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Abandoned Coal Mines [North]', '50038', '152375', '-179887', '2495', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Abandoned Coal Mines [West]', '50039', '139783', '-177260', '-1539', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cave Of Trials', '50040', '9954', '-112487', '-2470', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Frozen waterfall', '50041', '9621', '-139945', '-1353', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Mithril Mines', '50042', '179039', '-184080', '-319', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('South Coast', '50043', '-37955', '-100767', '-3774', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('The Northeast Coast', '50044', '169008', '-208272', '-3504', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Antaras Circle', '50045', '40246', '58785', '-3634', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Elven Fortress', '50046', '29205', '74948', '-3775', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Iris Lake', '50047', '51746', '71559', '-3427', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Shadow Of the Mother tree', '50048', '47932', '39729', '-3466', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Death Path', '50049', '70000', '126636', '-3804', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Dragon Valley [Entrance]', '50050', '72317', '117736', '-3672', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Dragon Valley [Inside]', '50051', '84959', '110701', '-3209', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Execution Grounds', '50052', '51055', '141959', '-2869', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Giran Harbor', '50053', '47114', '187152', '-3485', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('The Partisan Hideway', '50054', '46897', '111567', '-2069', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Abandoned Camp', '50055', '-56742', '140569', '-2625', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Gludin Arena', '50056', '-88839', '142382', '-3646', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cliffside Estate', '50057', '-94841', '147430', '-2675', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Fellmere Lake', '50058', '-66931', '120296', '-3651', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Forgotten Temple', '50059', '-53838', '179285', '-4640', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Gludin Harbor', '50060', '-89199', '149962', '-3586', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Maphri\'s Thumb', '50061', '-37689', '193124', '-2208', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Orc Barracks', '50062', '-90562', '108182', '-3546', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Windy Hill', '50063', '-84313', '87057', '-3457', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Northern Neutral Zone', '50064', '-10853', '75689', '-3596', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Ruins Of Agony', '50065', '-56235', '106668', '-3773', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Ruins Of Despair', '50066', '-20043', '137688', '-3896', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Ivory Tower', '50067', '85332', '16186', '-3673', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Northern Waterfall', '50068', '70833', '6426', '-3639', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Enchanted Valley', '50069', '124113', '59232', '-4587', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Sea Of Spores', '50070', '62425', '30856', '-3779', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Sea Of Spores [Centre]', '50071', '54216', '23826', '-5380', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Tower Of Insolence', '50072', '121685', '15749', '-3852', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cedric\'s Training Hall', '50073', '-73145', '256520', '-3126', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Einhovant\'s School Of Magic', '50074', '-88406', '249168', '-3576', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Elven Ruins', '50075', '48736', '248463', '-6162', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Northern Coast', '50076', '-101294', '212553', '-3093', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Obelisk Of Victory', '50077', '-99746', '237538', '-3572', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Talking Island Harbor', '50078', '-96041', '261133', '-3483', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Ant\'s Nest', '50079', '-26111', '173692', '-4152', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('South Entrance Of Wastlands', '50080', '-17949', '205272', '-3670', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Wastelands', '50081', '-20893', '186060', '-4108', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Border Outpost', '50082', '109699', '-7908', '-2902', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Blazing Swamp', '50083', '145835', '-10995', '-4424', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('The End Thus For', '50084', '125439', '-31083', '-3862', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Aden Castle Cross', '50085', '147967', '4005', '4599', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Anghel Waterfall (Top Perch)', '50086', '174354', '90771', '1838', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Dwarven Tower', '50087', '106545', '-175091', '1300', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Partisan Fall', '50088', '49552', '116839', '-2131', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Devastated Castle', '50089', '178283', '-15739', '-2262', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Bandits Stronghold', '50090', '82662', '-15977', '-1893', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Coliseum', '50091', '147451', '46728', '-3410', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Innadril Castle', '50092', '116207', '244184', '-1084', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Alligator Island', '50093', '100887', '172943', '-3724', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Pirate\'s Tunnel', '50094', '41602', '199340', '-4636', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Devil\'s Isle', '50095', '42006', '208234', '-3756', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Field Of Silence', '50096', '84904', '182410', '-3670', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Field Of Whispers', '50097', '86519', '211911', '-3764', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Town Of Goddard', '50098', '147591', '-56359', '-2807', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Town Of Rune', '50099', '45843', '-47929', '-823', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Varka Silenos Outpost', '50100', '125893', '-40901', '-3776', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Canyon 2', '50101', '193752', '-46075', '-2954', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Walls Of Argos', '50102', '184380', '-62690', '-3000', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Swamp Of Screams', '50103', '91317', '-57174', '-2991', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Beast Farm', '50104', '52816', '-81617', '-2751', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Valley Of Saints', '50105', '64352', '-71206', '-3714', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Ketra Orc Outpost', '50106', '130512', '-72326', '-3538', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Lakes', '50107', '144621', '-105540', '-3682', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Forge Of The Gods', '50108', '170193', '-116256', '-2084', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cave 2', '50109', '190403', '-108821', '-3314', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Hot Springs Guild House', '50110', '141213', '-122118', '-1961', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Temple Of Pilgrims', '50111', '168618', '-86602', '-3021', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Imperial Graveyard', '50112', '187120', '-75490', '-2848', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Coliseum Ruins', '50113', '-20800', '20906', '-3051', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Hot Springs Region', '50114', '154482', '-126560', '-2311', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Lair Of Valakas Crystal', '50115', '190188', '-106425', '-810', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Forest Of The Dead', '50116', '63379', '-48912', '-3164', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Rune Harbor', '50117', '38030', '-38074', '-3668', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 1st Floor', '50118', '115168', '16022', '-5100', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 2nd Floor', '50119', '114649', '18587', '-3609', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 3rd Floor', '50120', '117918', '16039', '-2127', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 4th Floor', '50121', '114622', '12946', '-645', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 5th Floor', '50122', '112209', '16078', '928', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 6th Floor', '50123', '112376', '16099', '1947', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 7th Floor', '50124', '115091', '12165', '2957', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 8th Floor', '50125', '111063', '16118', '3967', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 9th Floor', '50126', '117147', '18415', '4977', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 10th Floor', '50127', '118374', '15973', '5987', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 11th Floor', '50128', '112716', '14150', '6997', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 12th Floor', '50129', '114809', '18711', '7996', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 13th Floor', '50130', '115178', '16989', '9007', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 14th Floor Outside Door', '50131', '112714', '14111', '10077', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('TOI - 14th Floor Inside On RoOf', '50132', '113098', '14532', '10077', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('The Forbidden Gateway', '50133', '185395', '20359', '-3270', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cat Heretics Entrance', '50134', '-53174', '-250275', '-7911', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cat Branded Entrance', '50135', '46217', '170290', '-4983', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cat Apostate Entrance', '50136', '-20230', '-250780', '-8168', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cat Witch Entrance', '50137', '140404', '79678', '-5431', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cat DarkOmen Entrance', '50138', '-19500', '13508', '-4905', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Cat Forbidden Path Entrance', '50139', '12521', '-248481', '-9585', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Necro Sacrifice Entrance', '50140', '-41570', '209785', '-5089', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Necro Pilgrims Entrance', '50141', '45251', '123890', '-5415', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Necro Worshippers Entrance', '50142', '111273', '174015', '-5417', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Necro Patriots Entrance', '50143', '-21726', '77385', '-5177', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Necro Ascetics Entrance', '50144', '-52254', '79103', '-4743', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Necro Martyrs Entrance', '50145', '118308', '132800', '-4833', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Necro Saints Entrance', '50146', '83000', '209213', '-5443', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Necro Disciples Entrance', '50147', '172251', '-17605', '-4903', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Town Of Schuttgart', '50148', '87386', '-143246', '-1293', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Schuttgart Castle', '50149', '77394', '-147197', '-476', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Rune Castle', '50150', '21216', '-49081', '-1301', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Monastery Of Silence', '50151', '123743', '-75032', '-2902', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Crypts Of Disgrace', '50152', '56095', '-118952', '-3290', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Den Of Evil', '50153', '76860', '-125169', '-3414', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Frost Lake', '50154', '108090', '-120925', '-3628', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('The Ice Queens Castle', '50155', '109060', '-128655', '-3084', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Ice Merchant Cabin', '50156', '113487', '-109888', '-865', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Valley Of The Lords', '50157', '23006', '-126115', '-870', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Pavel Ruins', '50158', '88275', '-125690', '-3815', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Plunderous Plains', '50159', '113900', '-154175', '-1488', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Stakato Nest', '50160', '89880', '-44515', '-2135', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Wild Beast Reserve', '50161', '57849', '-93182', '-1360', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Graverobber Hideout', '50162', '48336', '-107734', '-1577', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Carons Dungeon', '50163', '69762', '-111260', '-1807', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Race Track', '50164', '152610', '-126325', '-2230', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Windtail Waterfall', '50165', '40825', '-90317', '-3095', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Archaic Laboratory', '50166', '87475', '-109835', '-3330', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Fortress Of The Dead', '50167', '58000', '-30767', '380', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Rainbow Springs Chateau', '50168', '141377', '-123793', '-1906', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Sky Wagon Relic', '50169', '117715', '-141750', '-2700', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Brigand Stronghold', '50170', '124585', '-16024', '-1180', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Lost Nest', '50171', '26174', '-17134', '-2747', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Primeval Plains', '50172', '8264', '-14431', '-3696', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Primeval Isle Wharf', '50173', '10468', '-24569', '-3650', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Research Facility', '50174', '6229', '-2924', '-2965', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Isle Of Prayer', '50175', '159111', '183721', '-3720', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Parnassus', '50176', '149361', '172327', '-945', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Chromatic Highlands', '50177', '152857', '149040', '-3280', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Hellbound Island', '50178', '-23414', '249423', '-3207', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Stronghold I', '50179', '-122201', '73090', '-2871', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Stronghold II', '50180', '-95267', '52168', '-2029', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Stronghold III', '50181', '-86077', '37332', '-1998', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Nornils Garden', '50182', '-84757', '60009', '-2581', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Nornils Cave', '50183', '-86976', '43251', '-2684', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Soul Harbor', '50184', '-73696', '53507', '-3680', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Nornils Garden', '50185', '-119534', '87176', '-12593', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Crystal Caverns', '50186', '144293', '151443', '-12136', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Emerald Square', '50187', '143474', '143826', '-11964', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Emerald Square RB', '50188', '153569', '142075', '-12737', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Coral Garden', '50189', '141694', '148896', '-11803', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Dark Cloud Mansion', '50190', '141258', '149698', '-11807', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Steam Corridor', '50191', '144306', '152454', '-12136', '15000', '0');
INSERT INTO `custom_teleports` VALUES ('Giran=>Bar', '60000', '84442', '145518', '-3405', '999999', '0');
INSERT INTO `custom_teleports` VALUES ('Bar=>Giran', '60001', '84097', '145518', '-3405', '50000', '0');
