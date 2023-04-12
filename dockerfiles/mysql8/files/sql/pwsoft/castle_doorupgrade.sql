DROP TABLE IF EXISTS `castle_doorupgrade`;
CREATE TABLE `castle_doorupgrade` (
  `doorId` int(11) NOT NULL default '0',
  `hp` int(11) NOT NULL default '0',
  `pDef` int(11) NOT NULL default '0',
  `mDef` int(11) NOT NULL default '0',
  PRIMARY KEY  (`doorId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
