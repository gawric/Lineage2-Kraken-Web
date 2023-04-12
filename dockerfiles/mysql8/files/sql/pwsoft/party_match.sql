DROP TABLE IF EXISTS `party_match`;
CREATE TABLE `party_match` (
  `nomber` int(8) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `zone` int(8) NOT NULL default '0',
  `level_min` int(8) NOT NULL default '0',
  `level_max` int(8) NOT NULL default '0',
  `in_party` int(8) NOT NULL default '0',
  `size_party` int(8) NOT NULL default '0',
  `name_lider` varchar(255) NOT NULL default '',
  `status` int(8) NOT NULL default '0',
  PRIMARY KEY  (`nomber`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;