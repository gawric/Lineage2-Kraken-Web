DROP TABLE IF EXISTS `z_post_pos`;
CREATE TABLE `z_post_pos` (
  `id` bigint(255) NOT NULL auto_increment,
  `tema` varchar(255) NOT NULL default 'No theme',
  `text` varchar(11255) NOT NULL default '',
  `from` varchar(255) NOT NULL default '',
  `to` varchar(255) NOT NULL default '',
  `type` varchar(255) NOT NULL default '',
  `date` date NOT NULL,
  `time` time NOT NULL,
  `itemName` varchar(255) NOT NULL default '',
  `itemId` varchar(255) NOT NULL default '',
  `itemCount` varchar(255) NOT NULL default '',
  `itemEnch` varchar(255) NOT NULL default '',
  `augData` varchar(255) default '0',
  `augSkill` varchar(255) default '0',
  `augLvl` varchar(255) default '0',
  `key` varchar(255) NOT NULL default '0',
  `col` varchar(255) NOT NULL default '0',
  `blueeva` varchar(255) NOT NULL default '0',
  `goldgolem` varchar(255) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=269986063 DEFAULT CHARSET=utf8;