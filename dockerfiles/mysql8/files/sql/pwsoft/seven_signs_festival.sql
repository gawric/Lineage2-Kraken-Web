DROP TABLE IF EXISTS `seven_signs_festival`;
CREATE TABLE `seven_signs_festival` (
  `festivalId` int(1) NOT NULL default '0',
  `cabal` varchar(4) NOT NULL default '',
  `cycle` int(4) NOT NULL default '0',
  `date` bigint(50) default '0',
  `score` int(5) NOT NULL default '0',
  `members` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`festivalId`,`cabal`,`cycle`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;