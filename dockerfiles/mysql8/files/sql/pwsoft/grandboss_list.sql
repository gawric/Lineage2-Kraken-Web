DROP TABLE IF EXISTS `grandboss_list`;
CREATE TABLE `grandboss_list` (
  `player_id` decimal(11,0) NOT NULL,
  `zone` varchar(40) NOT NULL,
  PRIMARY KEY  (`player_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
