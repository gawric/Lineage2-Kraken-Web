DROP TABLE IF EXISTS `z_vote_logs`;
CREATE TABLE `z_vote_logs` (
  `id` bigint(9) NOT NULL auto_increment,
  `date` varchar(20) default '',
  `name` varchar(20) default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;