DROP TABLE IF EXISTS `locations`;
CREATE TABLE `locations` (
  `loc_id` int(9) NOT NULL default '0',
  `loc_x` int(9) NOT NULL default '0',
  `loc_y` int(9) NOT NULL default '0',
  `loc_zmin` int(9) NOT NULL default '0',
  `loc_zmax` int(9) NOT NULL default '0',
  `proc` int(3) NOT NULL default '0',
  PRIMARY KEY  (`loc_id`,`loc_x`,`loc_y`),
  KEY `proc` (`proc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;