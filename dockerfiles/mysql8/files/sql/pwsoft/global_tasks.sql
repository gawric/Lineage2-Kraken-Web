DROP TABLE IF EXISTS `global_tasks`;
CREATE TABLE `global_tasks` (
  `id` int(11) NOT NULL auto_increment,
  `task` varchar(50) NOT NULL default '',
  `type` varchar(50) NOT NULL default '',
  `last_activation` decimal(20,0) NOT NULL default '0',
  `param1` varchar(100) NOT NULL default '',
  `param2` varchar(100) NOT NULL default '',
  `param3` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `global_tasks` VALUES 
('6', 'OlympiadSave', 'TYPE_FIXED_SHEDULED', '0', '900000', '1800000', ''),
('7', 'sp_recommendations', 'TYPE_GLOBAL_TASK', '1286096401366', '1', '13:00:00', ''),
('8', 'SevenSignsUpdate', 'TYPE_FIXED_SHEDULED', '0', '1800000', '1800000', '');
