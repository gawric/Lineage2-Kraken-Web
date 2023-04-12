DROP TABLE IF EXISTS `z_bbs_auction`;
CREATE TABLE `z_bbs_auction` (
  `id` bigint(9) NOT NULL AUTO_INCREMENT,
  `itemId` smallint(5) unsigned NOT NULL DEFAULT '0',
  `itemName` varchar(128) NOT NULL DEFAULT ' ',
  `enchant` smallint(5) unsigned NOT NULL DEFAULT '0',
  `augment` int(11) DEFAULT '0',
  `augAttr` int(11) DEFAULT '0',
  `augLvl` int(11) DEFAULT '0',
  `price` int(11) DEFAULT '0',
  `money` int(11) DEFAULT '0',
  `type` tinyint(1) DEFAULT '0',
  `ownerId` int(10) unsigned NOT NULL DEFAULT '0',
  `shadow` bigint(20) NOT NULL DEFAULT '0',
  `pay` smallint(2) NOT NULL DEFAULT '0',
  `pwd` varchar(16) DEFAULT NULL,
  `expire` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
