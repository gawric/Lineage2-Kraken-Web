SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `player_buff_profiles`
-- ----------------------------
DROP TABLE IF EXISTS `player_buff_profiles`;
CREATE TABLE `player_buff_profiles` (
  `object_id` int(10) unsigned NOT NULL DEFAULT '0',
  `profile_name` varchar(16) NOT NULL DEFAULT 'default',
  `skills` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of player_buff_profiles
-- ----------------------------
