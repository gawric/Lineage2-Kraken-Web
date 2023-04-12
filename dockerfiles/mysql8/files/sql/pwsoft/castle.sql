DROP TABLE IF EXISTS `castle`;
CREATE TABLE `castle` (
  `id` int(11) NOT NULL default '0',
  `name` varchar(25) NOT NULL,
  `taxPercent` int(11) NOT NULL default '15',
  `treasury` int(11) NOT NULL default '0',
  `siegeDate` decimal(20,0) NOT NULL default '0',
  `siegeDayOfWeek` int(11) NOT NULL default '7',
  `siegeHourOfDay` int(11) NOT NULL default '20',
  PRIMARY KEY  (`name`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `castle` VALUES 
('5', 'Aden', '0', '160136859', '1286640000000', '7', '20'),
('34', 'Devastated', '0', '0', '1286294400000', '3', '20'),
('2', 'Dion', '0', '1992100669', '1286640000000', '7', '20'),
('64', 'Forest', '0', '0', '1286467200000', '5', '20'),
('3', 'Giran', '0', '25096035', '1286712000000', '1', '16'),
('1', 'Gludio', '0', '197299368', '1287244800000', '7', '20'),
('7', 'Goddard', '0', '120916139', '1286712000000', '1', '16'),
('6', 'Innadril', '0', '257064001', '1286712000000', '1', '16'),
('4', 'Oren', '0', '169791084', '1286107200000', '1', '16'),
('8', 'Rune', '0', '2147483647', '1286640000000', '7', '20'),
('9', 'Schuttgart', '0', '2016478981', '1286640000000', '7', '20'),
('21', 'Partizan', '0', '0', '1286380800000', '4', '20'),
('35', 'Bandit', '0', '0', '1286553600000', '6', '20');