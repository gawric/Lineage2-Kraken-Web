DROP TABLE IF EXISTS `z_fc_players`;
CREATE TABLE `z_fc_players` (
  `id` bigint(9) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `itemId` varchar(255) NOT NULL default '',
  `enchant` varchar(255) NOT NULL default '',
  `augment` varchar(255) NOT NULL default '',
  `augAttr` varchar(255) NOT NULL default '',
  `augLvl` varchar(255) NOT NULL default '',
  `count` varchar(255) NOT NULL default '',
  `password` varchar(255) NOT NULL default '',
  `shadow` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=199 DEFAULT CHARSET=utf8;