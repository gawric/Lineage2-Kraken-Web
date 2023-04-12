DROP TABLE IF EXISTS `merchant_lease`;
CREATE TABLE `merchant_lease` (
  `merchant_id` int(11) NOT NULL default '0',
  `player_id` int(11) NOT NULL default '0',
  `bid` int(11) default NULL,
  `type` int(11) NOT NULL default '0',
  `player_name` varchar(35) default NULL,
  PRIMARY KEY  (`merchant_id`,`player_id`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
