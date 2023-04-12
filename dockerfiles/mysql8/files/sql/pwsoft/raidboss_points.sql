DROP TABLE IF EXISTS `raidboss_points`;
CREATE TABLE `raidboss_points` (
  `owner_id` int(11) unsigned NOT NULL,
  `boss_id` int(11) unsigned NOT NULL,
  `points` int(11) NOT NULL default '0',
  KEY `owner_id` (`owner_id`),
  KEY `boss_id` (`boss_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;