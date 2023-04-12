DROP TABLE IF EXISTS `boxes`;
CREATE TABLE `boxes` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `spawn` int(10) unsigned NOT NULL default '0',
  `npcid` int(10) unsigned NOT NULL default '0',
  `drawer` varchar(35) NOT NULL default '',
  `itemid` int(10) unsigned NOT NULL default '0',
  `name` varchar(32) default '',
  `count` int(10) unsigned NOT NULL default '0',
  `enchant` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
