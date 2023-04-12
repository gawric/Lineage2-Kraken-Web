DROP TABLE IF EXISTS `clan_wars`;
CREATE TABLE `clan_wars` (
  `clan1` varchar(35) NOT NULL default '',
  `clan2` varchar(35) NOT NULL default '',
  `wantspeace1` decimal(1,0) NOT NULL default '0',
  `wantspeace2` decimal(1,0) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;