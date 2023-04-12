DROP TABLE IF EXISTS `character_offline`; 
CREATE TABLE `character_offline` 
( 
`obj_id` int(11) NOT NULL DEFAULT '0', 
`name` varchar(86) NOT NULL DEFAULT '0', 
`value` varchar(255) NOT NULL DEFAULT '0', 
UNIQUE KEY `prim` (`obj_id`,`name`), 
KEY `obj_id` (`obj_id`), 
KEY `name` (`name`), 
KEY `value` (`value`)
) 
ENGINE=MyISAM DEFAULT CHARSET=utf8;