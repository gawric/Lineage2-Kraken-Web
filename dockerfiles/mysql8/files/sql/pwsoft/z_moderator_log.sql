DROP TABLE IF EXISTS `z_moderator_log`;
CREATE TABLE `z_moderator_log` (
  `moder` varchar(255) NOT NULL default '',
  `action` varchar(255) NOT NULL default '',
  `date` varchar(255) NOT NULL default '2001.01.01'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;