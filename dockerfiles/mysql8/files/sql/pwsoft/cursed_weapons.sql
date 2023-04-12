DROP TABLE IF EXISTS `cursed_weapons`;
CREATE TABLE `cursed_weapons` (
  `itemId` int(11) NOT NULL default '0',
  `playerId` int(11) default '0',
  `playerKarma` int(11) default '0',
  `playerPkKills` int(11) default '0',
  `nbKills` int(11) default '0',
  `endTime` decimal(20,0) default '0',
  PRIMARY KEY  (`itemId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;