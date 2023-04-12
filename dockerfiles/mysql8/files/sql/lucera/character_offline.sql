SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `character_offline`;
CREATE TABLE `character_offline` (
  `charId` int(11) NOT NULL,
  `mode` tinyint(4) NOT NULL DEFAULT '0',
  `packaged` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `endTime` decimal(20,0) DEFAULT '0',
  PRIMARY KEY (`charId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
