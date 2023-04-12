DROP TABLE IF EXISTS `clan_privs`;
CREATE TABLE `clan_privs` (
  `clan_id` int(11) NOT NULL default '0',
  `rank` int(11) NOT NULL default '0',
  `party` int(11) NOT NULL default '0',
  `privs` int(11) NOT NULL default '0',
  PRIMARY KEY  (`clan_id`,`rank`,`party`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;