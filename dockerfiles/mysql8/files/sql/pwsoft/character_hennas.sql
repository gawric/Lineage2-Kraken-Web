DROP TABLE IF EXISTS `character_hennas`;
CREATE TABLE `character_hennas` (
  `char_obj_id` int(11) NOT NULL default '0',
  `symbol_id` int(11) default NULL,
  `slot` int(11) NOT NULL default '0',
  `class_index` int(1) NOT NULL default '0',
  PRIMARY KEY  (`char_obj_id`,`slot`,`class_index`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;