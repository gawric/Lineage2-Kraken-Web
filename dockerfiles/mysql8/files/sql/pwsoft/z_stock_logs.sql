DROP TABLE IF EXISTS `z_stock_logs`;
CREATE TABLE `z_stock_logs` (
  `date` varchar(50) default '1970',
  `charId` int(10) unsigned NOT NULL default '0',
  `itemId` smallint(5) unsigned NOT NULL default '0',
  `enchant` smallint(5) unsigned NOT NULL default '0',
  `augment` int(11) default '0',
  `augLvl` int(11) default '0',
  `price` int(11) default '0',
  `ownerId` int(10) unsigned NOT NULL default '0',
  `shadow` tinyint(1) default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;