DROP TABLE IF EXISTS `zz_donate_log`;
CREATE TABLE `zz_donate_log` (
  `id` bigint(9) NOT NULL auto_increment,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `login` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `payment` decimal(9,2) unsigned NOT NULL default '0.00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=199 DEFAULT CHARSET=utf8;