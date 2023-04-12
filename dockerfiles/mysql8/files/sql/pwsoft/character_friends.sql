DROP TABLE IF EXISTS `character_friends`;
CREATE TABLE `character_friends` (
  `char_id` int(11) NOT NULL default '0',
  `friend_id` int(11) NOT NULL default '0',
  `friend_name` varchar(35) NOT NULL default '',
  PRIMARY KEY  (`char_id`,`friend_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;