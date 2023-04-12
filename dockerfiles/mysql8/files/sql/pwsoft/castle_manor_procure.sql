DROP TABLE IF EXISTS `castle_manor_procure`;
CREATE TABLE `castle_manor_procure` (
  `castle_id` int(11) NOT NULL default '0',
  `crop_id` int(11) NOT NULL default '0',
  `can_buy` int(11) NOT NULL default '0',
  `start_buy` int(11) NOT NULL default '0',
  `price` int(11) NOT NULL default '0',
  `reward_type` int(11) NOT NULL default '0',
  `period` int(11) NOT NULL default '1',
  PRIMARY KEY  (`castle_id`,`crop_id`,`period`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
