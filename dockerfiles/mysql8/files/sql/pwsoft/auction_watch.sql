DROP TABLE IF EXISTS `auction_watch`;
CREATE TABLE `auction_watch` (
  `charObjId` int(10) unsigned NOT NULL default '0',
  `auctionId` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`charObjId`,`auctionId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;