DROP TABLE IF EXISTS `server_variables`;
CREATE TABLE `server_variables` (
`name` varchar(86) NOT NULL default '0',
`value` varchar(255) character set utf8 NOT NULL default '0',
PRIMARY KEY (`name`)
) ENGINE=MyISAM;