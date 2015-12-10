/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : ziiwo

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-12-10 17:13:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `zii_music_info`
-- ----------------------------
DROP TABLE IF EXISTS `zii_music_info`;
CREATE TABLE `zii_music_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `music_name` varchar(20) NOT NULL DEFAULT '歌曲名称' COMMENT '歌曲名称',
  `music_men` varchar(10) NOT NULL COMMENT '演唱者',
  `music_cover` varchar(50) NOT NULL COMMENT '封面地址',
  `music_pubtime` date NOT NULL COMMENT '出版时间',
  `description` varchar(200) NOT NULL,
  `music_clicks` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL DEFAULT '0' COMMENT '记录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zii_music_info
-- ----------------------------
INSERT INTO `zii_music_info` VALUES ('1', 'Tempered Song', 'Miaow', 'p1.jpg', '0000-00-00', '', '0', '0');
INSERT INTO `zii_music_info` VALUES ('2', 'Tempered Song', 'Miaow', 'p2.jpg', '0000-00-00', '', '0', '0');
INSERT INTO `zii_music_info` VALUES ('3', 'Tempered Song', 'Miaow', 'p3.jpg', '0000-00-00', '', '0', '0');
INSERT INTO `zii_music_info` VALUES ('4', 'Tempered Song', 'Miaow', 'p4.jpg', '0000-00-00', '', '0', '0');
INSERT INTO `zii_music_info` VALUES ('5', 'Tempered Song', 'Miaow', 'p5.jpg', '0000-00-00', '', '0', '0');
INSERT INTO `zii_music_info` VALUES ('6', 'Tempered Song', 'Miaow', 'p6.jpg', '0000-00-00', '', '0', '0');
INSERT INTO `zii_music_info` VALUES ('7', 'Tempered Song', 'Miaow', 'p7.jpg', '0000-00-00', '', '0', '0');
INSERT INTO `zii_music_info` VALUES ('8', 'Tempered Song', 'Miaow', 'p8.jpg', '0000-00-00', '', '0', '0');
INSERT INTO `zii_music_info` VALUES ('9', 'Tempered Song', 'Miaow', 'p9.jpg', '0000-00-00', '', '0', '0');
