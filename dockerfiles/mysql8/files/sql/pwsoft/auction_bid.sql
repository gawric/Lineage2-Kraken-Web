DROP TABLE IF EXISTS `auction_bid`;
CREATE TABLE `auction_bid` (
  `id` int(10) unsigned NOT NULL default '0',
  `auctionId` smallint(5) unsigned NOT NULL default '0',
  `bidderId` int(10) unsigned NOT NULL default '0',
  `bidderName` varchar(35) NOT NULL,
  `clan_name` varchar(45) NOT NULL,
  `maxBid` int(10) unsigned NOT NULL default '0',
  `time_bid` bigint(20) unsigned NOT NULL default '0',
  PRIMARY KEY  (`auctionId`,`bidderId`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;