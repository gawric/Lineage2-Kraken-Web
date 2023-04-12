DROP TABLE IF EXISTS character_settings;
CREATE TABLE `character_settings` (
  `char_obj_id` decimal(11,0) NOT NULL DEFAULT '0',
  `no_exp` int(2) NOT NULL DEFAULT '0',
  `no_requests` int(2) NOT NULL DEFAULT '0',
  `autoloot` int(2) NOT NULL DEFAULT '0',
  `chatblock` int(2) NOT NULL DEFAULT '0',
  `charkey` varchar(255) NOT NULL DEFAULT '',
  `traders` int(2) NOT NULL DEFAULT '0',
  `pathfind` int(2) NOT NULL DEFAULT '0',
  `skillchances` int(2) NOT NULL DEFAULT '0',
  `showshots` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`char_obj_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;