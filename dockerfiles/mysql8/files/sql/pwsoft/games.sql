DROP TABLE IF EXISTS `games`;
CREATE TABLE `games` (
  `id` int(11) NOT NULL default '0',
  `idnr` int(11) NOT NULL default '0',
  `number1` int(11) NOT NULL default '0',
  `number2` int(11) NOT NULL default '0',
  `prize` int(11) NOT NULL default '0',
  `newprize` int(11) NOT NULL default '0',
  `prize1` int(11) NOT NULL default '0',
  `prize2` int(11) NOT NULL default '0',
  `prize3` int(11) NOT NULL default '0',
  `enddate` decimal(20,0) NOT NULL default '0',
  `finished` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`,`idnr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;