DROP TABLE IF EXISTS `olympiad_nobles`;
CREATE TABLE `olympiad_nobles` (
  `char_id` int(11) NOT NULL default '0',
  `class_id` smallint(6) unsigned NOT NULL default '0',
  `char_name` varchar(45) NOT NULL default '',
  `olympiad_points` smallint(6) NOT NULL default '0',
  `olympiad_points_past` smallint(6) NOT NULL default '0',
  `olympiad_points_past_static` smallint(6) NOT NULL default '0',
  `competitions_done` smallint(6) unsigned NOT NULL default '0',
  `competitions_win` smallint(6) unsigned NOT NULL default '0',
  `competitions_loose` smallint(6) unsigned NOT NULL default '0',
  PRIMARY KEY  (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;