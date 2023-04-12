DROP TABLE IF EXISTS `character_quests`;
CREATE TABLE `character_quests` (
  `char_id` int(11) NOT NULL default '0',
  `name` varchar(40) NOT NULL default '',
  `var` varchar(20) NOT NULL default '',
  `value` varchar(255) default NULL,
  `class_index` int(1) NOT NULL default '0',
  PRIMARY KEY  (`char_id`,`name`,`var`,`class_index`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;