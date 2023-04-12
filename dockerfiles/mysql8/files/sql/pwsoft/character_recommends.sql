DROP TABLE IF EXISTS `character_recommends`;
CREATE TABLE `character_recommends` (
  `char_id` int(11) NOT NULL default '0',
  `target_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`char_id`,`target_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;