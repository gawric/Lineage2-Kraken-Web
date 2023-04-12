DROP TABLE IF EXISTS `clan_subpledges`;
CREATE TABLE `clan_subpledges` (
  `clan_id` int(11) NOT NULL default '0',
  `sub_pledge_id` int(11) NOT NULL default '0',
  `name` varchar(45) default NULL,
  `leader_name` varchar(45) default NULL,
  PRIMARY KEY  (`clan_id`,`sub_pledge_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;