DROP TABLE IF EXISTS `clan_data`;
CREATE TABLE `clan_data` (
  `clan_id` int(11) NOT NULL default '0',
  `clan_name` varchar(45) default NULL,
  `clan_level` int(11) default NULL,
  `reputation_score` int(11) NOT NULL default '0',
  `hasCastle` int(11) default NULL,
  `ally_id` int(11) default NULL,
  `ally_name` varchar(45) default NULL,
  `leader_id` int(11) default NULL,
  `crest_id` int(11) default NULL,
  `crest_large_id` int(11) default NULL,
  `ally_crest_id` int(11) default NULL,
  `auction_bid_at` int(11) NOT NULL default '0',
  `ally_penalty_expiry_time` decimal(20,0) NOT NULL default '0',
  `ally_penalty_type` decimal(1,0) NOT NULL default '0',
  `char_penalty_expiry_time` decimal(20,0) NOT NULL default '0',
  `dissolving_expiry_time` decimal(20,0) NOT NULL default '0',
  PRIMARY KEY  (`clan_id`),
  KEY `leader_id` (`leader_id`),
  KEY `ally_id` (`ally_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;