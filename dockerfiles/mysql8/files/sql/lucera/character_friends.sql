DROP TABLE IF EXISTS `character_friends`;
CREATE TABLE `character_friends` (
  `charId` int(10) unsigned NOT NULL DEFAULT '0',
  `friendId` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`charId`,`friendId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
