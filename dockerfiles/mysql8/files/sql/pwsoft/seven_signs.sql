DROP TABLE IF EXISTS `seven_signs`;
CREATE TABLE `seven_signs` (
  `char_obj_id` int(11) NOT NULL default '0',
  `cabal` varchar(4) NOT NULL default '',
  `seal` int(1) NOT NULL default '0',
  `red_stones` int(11) NOT NULL default '0',
  `green_stones` int(11) NOT NULL default '0',
  `blue_stones` int(11) NOT NULL default '0',
  `ancient_adena_amount` decimal(20,0) NOT NULL default '0',
  `contribution_score` decimal(20,0) NOT NULL default '0',
  PRIMARY KEY  (`char_obj_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;