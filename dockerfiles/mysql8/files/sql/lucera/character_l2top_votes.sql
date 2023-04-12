CREATE TABLE IF NOT EXISTS `character_l2top_votes` (
	`date` bigint(14) NOT NULL DEFAULT '0',
	`id` int(10) NOT NULL DEFAULT '0',
	`nick` VARCHAR(255) NOT NULL DEFAULT '''''',
	`multipler` int(9) NOT NULL DEFAULT '0',
	`has_reward` int(1) NOT NULL DEFAULT '0',
	PRIMARY KEY (`date`,`id`,`nick`,`multipler`)
) ENGINE=MyISAM;