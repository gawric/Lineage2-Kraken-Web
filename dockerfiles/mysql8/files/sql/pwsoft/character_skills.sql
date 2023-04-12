DROP TABLE IF EXISTS `character_skills`;
CREATE TABLE `character_skills` (
  `char_obj_id` int(11) NOT NULL default '0',
  `skill_id` int(11) NOT NULL default '0',
  `skill_level` varchar(5) default NULL,
  `skill_name` varchar(40) default NULL,
  `class_index` int(1) NOT NULL default '0',
  PRIMARY KEY  (`char_obj_id`,`skill_id`,`class_index`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;