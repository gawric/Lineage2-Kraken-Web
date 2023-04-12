SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `crest`;
CREATE TABLE `crest` (
  `crestId` int(11) NOT NULL DEFAULT '0',
  `type` enum('LARGE','CLAN','ALLY') NOT NULL,
  `data` varbinary(2176) DEFAULT NULL,
  PRIMARY KEY (`crestId`),
  KEY `crestId` (`crestId`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
