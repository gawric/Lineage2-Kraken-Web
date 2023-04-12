DROP TABLE IF EXISTS `buff_templates`;
CREATE TABLE `buff_templates` (
  `id` tinyint(3) unsigned NOT NULL,
  `name` varchar(35) NOT NULL default '',
  `skill_id` smallint(5) unsigned NOT NULL,
  `skill_name` varchar(35) NOT NULL default '',
  `skill_level` tinyint(3) unsigned NOT NULL default '1',
  `skill_force` tinyint(3) unsigned NOT NULL default '1',
  `skill_order` tinyint(3) unsigned NOT NULL,
  `char_min_level` tinyint(3) unsigned NOT NULL default '0',
  `char_max_level` tinyint(3) unsigned NOT NULL default '0',
  `char_race` tinyint(3) unsigned NOT NULL default '0',
  `char_class` tinyint(3) unsigned NOT NULL default '0',
  `char_faction` int(10) unsigned NOT NULL default '0',
  `price_adena` bigint(20) unsigned NOT NULL default '0',
  `price_points` bigint(20) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`,`name`,`skill_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
