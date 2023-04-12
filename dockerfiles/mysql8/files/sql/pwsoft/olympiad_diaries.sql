DROP TABLE IF EXISTS `olympiad_diaries`;
CREATE TABLE `olympiad_diaries` (
  `class_id` smallint(3) NOT NULL DEFAULT '0',
  `char_id` int(10) unsigned NOT NULL DEFAULT '0',
  `page` smallint(2) NOT NULL DEFAULT '0',
  `records` varchar(3000) NOT NULL DEFAULT ' ',
  PRIMARY KEY (`class_id`,`char_id`,`page`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;