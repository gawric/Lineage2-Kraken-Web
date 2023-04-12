DROP TABLE IF EXISTS `z_post_out`;
CREATE TABLE `z_post_out` (
  `id` bigint(9) NOT NULL auto_increment,
  `tema` varchar(255) NOT NULL default 'No theme',
  `text` varchar(11255) NOT NULL default '',
  `from` varchar(255) NOT NULL default '',
  `to` varchar(255) NOT NULL default '',
  `type` varchar(255) NOT NULL default '',
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=269785754 DEFAULT CHARSET=utf8;