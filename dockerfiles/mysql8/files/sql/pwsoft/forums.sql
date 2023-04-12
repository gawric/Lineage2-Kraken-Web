DROP TABLE IF EXISTS `forums`;
CREATE TABLE `forums` (
  `forum_id` int(8) NOT NULL default '0',
  `forum_name` varchar(255) NOT NULL default '',
  `forum_parent` int(8) NOT NULL default '0',
  `forum_post` int(8) NOT NULL default '0',
  `forum_type` int(8) NOT NULL default '0',
  `forum_perm` int(8) NOT NULL default '0',
  `forum_owner_id` int(8) NOT NULL default '0',
  UNIQUE KEY `forum_id` (`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;