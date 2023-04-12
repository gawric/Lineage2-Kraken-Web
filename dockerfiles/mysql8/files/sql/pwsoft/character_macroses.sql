DROP TABLE IF EXISTS `character_macroses`;
CREATE TABLE `character_macroses` (
  `char_obj_id` int(11) NOT NULL default '0',
  `id` int(11) NOT NULL default '0',
  `icon` int(11) default NULL,
  `name` varchar(255) NOT NULL default '',
  `descr` varchar(80) NOT NULL default '',
  `acronym` varchar(10) NOT NULL default '',
  `commands` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`char_obj_id`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;