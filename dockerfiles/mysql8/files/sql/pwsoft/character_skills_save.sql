DROP TABLE IF EXISTS `character_skills_save`;
DROP TABLE IF EXISTS `character_buffs`;
CREATE TABLE `character_buffs` (
  `char_obj_id` int(11) NOT NULL default '0',
  `skill_id` int(11) NOT NULL default '0',
  `skill_level` int(11) NOT NULL default '0',
  `effect_count` int(11) NOT NULL default '0',
  `effect_cur_time` int(11) NOT NULL default '0',
  `reuse_delay` int(8) NOT NULL default '0',
  `systime` bigint(20) NOT NULL default '0',
  `restore_type` int(1) NOT NULL default '0',
  `class_index` int(1) NOT NULL default '0',
  `buff_index` int(2) NOT NULL default '0',
  PRIMARY KEY  (`char_obj_id`,`skill_id`,`class_index`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;