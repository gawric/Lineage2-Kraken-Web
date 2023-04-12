DROP TABLE IF EXISTS `z_stock_accounts`;
CREATE TABLE `z_stock_accounts` (
  `charId` int(10) NOT NULL default '0',
  `balance` bigint(20) unsigned NOT NULL default '0',
  `ban` tinyint(1) default '0',
  PRIMARY KEY  (`charId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;