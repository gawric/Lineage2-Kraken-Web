SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `character_protection`
-- ----------------------------
DROP TABLE IF EXISTS `character_protection`;
CREATE TABLE `character_protection` (
  `account` varchar(45) NOT NULL,
  `type` enum('NETWORK','HWID','PASSWORD') NOT NULL,
  `val` varchar(60) NOT NULL,
  PRIMARY KEY (`account`,`type`,`val`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
