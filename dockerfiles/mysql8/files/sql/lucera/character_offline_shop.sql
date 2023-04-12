SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `character_offline_shop`;
CREATE TABLE `character_offline_shop` (
  `charId` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`charId`,`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
