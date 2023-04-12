DROP TABLE IF EXISTS `raidboss_status`;
CREATE TABLE `raidboss_status` (
  `id` int(11) NOT NULL,
  `current_hp` decimal(8,0) default NULL,
  `current_mp` decimal(8,0) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;