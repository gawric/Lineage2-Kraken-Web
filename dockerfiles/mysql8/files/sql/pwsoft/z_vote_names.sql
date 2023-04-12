DROP TABLE IF EXISTS `z_vote_names`;
CREATE TABLE `z_vote_names` (
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL,
  PRIMARY KEY  (`from`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;