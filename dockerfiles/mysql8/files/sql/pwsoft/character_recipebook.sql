DROP TABLE IF EXISTS `character_recipebook`;
CREATE TABLE `character_recipebook` (
  `char_id` decimal(11,0) NOT NULL default '0',
  `id` decimal(11,0) NOT NULL default '0',
  `type` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`,`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;