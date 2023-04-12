DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `login` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  `lastactive` bigint(20) unsigned NOT NULL DEFAULT '0',
  `access_level` smallint(6) NOT NULL DEFAULT '0',
  `lastIP` varchar(15) NOT NULL DEFAULT '',
  `lastServer` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `email` varchar(50) NOT NULL DEFAULT '',
  `BanReason` varchar(250) NOT NULL DEFAULT '',
  `question1` varchar(250) NOT NULL DEFAULT ' ',
  `answer1` varchar(250) NOT NULL DEFAULT ' ',
  `question2` varchar(250) NOT NULL DEFAULT ' ',
  `answer2` varchar(250) NOT NULL DEFAULT ' ',
  `l2answer` varchar(100) CHARACTER SET cp1251 NOT NULL DEFAULT '',
  `l2question` varchar(100) CHARACTER SET cp1251 NOT NULL DEFAULT '',
  `l2email` varchar(100) NOT NULL DEFAULT 'null@null',
  `hwid` varchar(100) NOT NULL DEFAULT '',
  `last_hwid` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;