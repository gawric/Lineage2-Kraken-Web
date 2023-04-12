DROP TABLE IF EXISTS `mods_wedding`;
CREATE TABLE `mods_wedding` (
  `id` int(11) NOT NULL auto_increment,
  `player1Id` int(11) NOT NULL default '0',
  `player2Id` int(11) NOT NULL default '0',
  `married` varchar(5) default NULL,
  `affianceDate` decimal(20,0) default '0',
  `weddingDate` decimal(20,0) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=270106929 DEFAULT CHARSET=utf8;