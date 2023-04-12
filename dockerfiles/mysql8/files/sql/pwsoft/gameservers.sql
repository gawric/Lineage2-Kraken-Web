DROP TABLE IF EXISTS `gameservers`;
CREATE TABLE `gameservers` (
  `server_id` int(11) NOT NULL default '0',
  `hexid` varchar(50) NOT NULL default '',
  `host` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`server_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `gameservers` VALUES (1, '77c70d7b9d2235ce6b733652bbd48d0a', '');
