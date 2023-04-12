DROP TABLE IF EXISTS `z_char_keys`;
CREATE TABLE `z_char_keys` (
  `char_id` int(10) unsigned NOT NULL default '0',
  `key` varchar(255) NOT NULL default ' ',
  PRIMARY KEY  (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;