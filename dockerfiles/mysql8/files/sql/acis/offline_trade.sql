CREATE TABLE IF NOT EXISTS `character_offline_trade_items` (
  `charId` int(10) unsigned NOT NULL,
  `item` int(10) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) unsigned NOT NULL DEFAULT '0',
  `price` bigint(20) unsigned NOT NULL DEFAULT '0',
  KEY `charId` (`charId`),
  KEY `item` (`item`)
);

CREATE TABLE IF NOT EXISTS `character_offline_trade` (
  `charId` int(10) unsigned NOT NULL,
  `time` bigint(13) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`charId`)
);