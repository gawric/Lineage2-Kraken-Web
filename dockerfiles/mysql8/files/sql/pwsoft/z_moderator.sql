DROP TABLE IF EXISTS `z_moderator`;
CREATE TABLE `z_moderator` (
  `moder` varchar(255) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `rank` varchar(255) NOT NULL default '3'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;