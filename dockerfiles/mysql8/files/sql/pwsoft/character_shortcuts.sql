DROP TABLE IF EXISTS `character_shortcuts`;
CREATE TABLE `character_shortcuts` (
  `char_obj_id` decimal(11,0) NOT NULL default '0',
  `slot` decimal(3,0) NOT NULL default '0',
  `page` decimal(3,0) NOT NULL default '0',
  `type` decimal(3,0) default NULL,
  `shortcut_id` decimal(16,0) default NULL,
  `level` varchar(4) default NULL,
  `class_index` int(1) NOT NULL default '0',
  PRIMARY KEY  (`char_obj_id`,`slot`,`page`,`class_index`),
  KEY `shortcut_id` (`shortcut_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;