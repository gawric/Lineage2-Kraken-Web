DROP TABLE IF EXISTS `z_buff_profile`;
CREATE TABLE `z_buff_profile` (
  `char_id` int(10) unsigned NOT NULL default '0',
  `profile` smallint(2) NOT NULL default '1',
  `buffs` varchar(1024) NOT NULL default ' ',
  PRIMARY KEY  (`char_id`,`profile`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;