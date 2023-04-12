DROP TABLE IF EXISTS `character_raid_points`;
CREATE TABLE `character_raid_points` (
  `charId` int(10) unsigned NOT NULL default '0',
  `boss_id` int(10) unsigned NOT NULL default '0',
  `points` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`charId`,`boss_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;