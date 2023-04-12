DROP TABLE IF EXISTS `items_external`;
CREATE TABLE `items_external` (
  `payment_id` int(21) NOT NULL AUTO_INCREMENT,
  `owner_id` int(21) NOT NULL,
  `item_id` int(21) NOT NULL,
  `count` int(21) NOT NULL,
  `enchant` int(21) NOT NULL,
  `message` varchar(128) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `issued` int(1) DEFAULT '0',
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
