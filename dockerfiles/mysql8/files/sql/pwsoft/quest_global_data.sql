DROP TABLE IF EXISTS `quest_global_data`;
CREATE TABLE `quest_global_data` (
  `quest_name` varchar(40) NOT NULL default '',
  `var` varchar(20) NOT NULL default '',
  `value` varchar(255) default NULL,
  PRIMARY KEY  (`quest_name`,`var`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;