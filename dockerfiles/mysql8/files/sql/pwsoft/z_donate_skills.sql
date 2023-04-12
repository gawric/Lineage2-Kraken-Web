DROP TABLE IF EXISTS `z_donate_skills`;
CREATE TABLE `z_donate_skills` (
  `char_id` int(10) NOT NULL DEFAULT '0',
  `class_id` smallint(3) NOT NULL DEFAULT '0',
  `skill_id` varchar(5) NOT NULL DEFAULT '0',
  `skill_lvl` varchar(5) NOT NULL DEFAULT '1',
  `expire` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`char_id`,`class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;