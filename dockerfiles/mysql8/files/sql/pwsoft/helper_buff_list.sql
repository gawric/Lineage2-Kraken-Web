DROP TABLE IF EXISTS `helper_buff_list`;
CREATE TABLE `helper_buff_list` (
  `id` int(11) NOT NULL default '0',
  `skill_id` int(10) unsigned NOT NULL default '0',
  `name` varchar(25) NOT NULL default '',
  `skill_level` int(10) unsigned NOT NULL default '0',
  `lower_level` int(10) unsigned NOT NULL default '0',
  `upper_level` int(10) unsigned NOT NULL default '0',
  `is_magic_class` varchar(5) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;