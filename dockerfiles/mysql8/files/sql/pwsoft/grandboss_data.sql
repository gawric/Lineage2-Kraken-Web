DROP TABLE IF EXISTS `grandboss_data`;
CREATE TABLE `grandboss_data` (
  `boss_id` mediumint(8) unsigned NOT NULL default '0',
  `spawn_date` bigint(20) unsigned NOT NULL default '0',
  `min_delay` bigint(20) unsigned NOT NULL default '0',
  `max_delay` bigint(20) unsigned NOT NULL default '0',
  `status` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`boss_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `grandboss_data` (`boss_id`) VALUES 
('29001'),
('29019'),
('29028'),
('29020'),
('29045'),
('29022');
