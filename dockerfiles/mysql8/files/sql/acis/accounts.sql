CREATE TABLE IF NOT EXISTS `accounts` (
 	`login` VARCHAR(45) NOT NULL DEFAULT '',
 	`password` VARCHAR(60) NOT NULL DEFAULT '',
 	`last_active` BIGINT NOT NULL DEFAULT 0,
 	`access_level` INT(3) NOT NULL DEFAULT 0,
 	`last_server` INT(4) NOT NULL DEFAULT 1,
 	PRIMARY KEY (`login`)
);