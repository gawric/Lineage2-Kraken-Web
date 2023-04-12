DROP TABLE IF EXISTS `heroes`;
CREATE TABLE `heroes` (
  `char_id` int NOT NULL default 0,
  `count` tinyint unsigned NOT NULL default 0,
  `played` tinyint NOT NULL default 0,
  `active` tinyint NOT NULL default 0,
  PRIMARY KEY  (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;