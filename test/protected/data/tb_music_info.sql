/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : yoyopiano

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-12-30 15:32:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_music_info`
-- ----------------------------
DROP TABLE IF EXISTS `tb_music_info`;
CREATE TABLE `tb_music_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `music_name` varchar(20) NOT NULL DEFAULT '歌曲名称' COMMENT '歌曲名称',
  `music_cover` varchar(100) NOT NULL COMMENT '封面地址',
  `music_men` varchar(10) NOT NULL COMMENT '演唱者',
  `player_cover` varchar(100) NOT NULL COMMENT '演唱者头像',
  `music_pubtime` date NOT NULL COMMENT '出版时间',
  `description` varchar(200) NOT NULL,
  `music_clicks` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL DEFAULT '0' COMMENT '记录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_music_info
-- ----------------------------
INSERT INTO `tb_music_info` VALUES ('1', '1Song', 'p1.jpg', 'Miaow', 'a1.png', '0000-00-01', '', '12', '1');
INSERT INTO `tb_music_info` VALUES ('2', '2Song', 'p2.jpg', 'Miaow', 'a2.png', '2015-05-13', '', '200', '2');
INSERT INTO `tb_music_info` VALUES ('3', '3Song', 'p3.jpg', 'Miaow', 'a3.png', '2015-05-14', '', '125', '3');
INSERT INTO `tb_music_info` VALUES ('4', '4Song', 'p4.jpg', 'Miaow', 'a4.png', '2015-05-21', '', '120', '4');
INSERT INTO `tb_music_info` VALUES ('5', '5Song', 'p5.jpg', 'Miaow', 'a5.png', '2015-05-21', '', '2134', '5');
INSERT INTO `tb_music_info` VALUES ('6', '6Song', 'p6.jpg', 'Miaow', 'a1.png', '2015-05-22', '', '7555', '6');
INSERT INTO `tb_music_info` VALUES ('7', '7Song', 'p7.jpg', 'Miaow', 'a1.png', '2015-05-24', '', '10000', '7');
INSERT INTO `tb_music_info` VALUES ('8', '8Song', 'p8.jpg', 'Miaow', 'a1.png', '2015-05-30', '', '5000', '8');
INSERT INTO `tb_music_info` VALUES ('10', 'TemSong', 'p9.jpg', 'Miaow', 'a1.png', '2015-05-29', '', '0', '9');
INSERT INTO `tb_music_info` VALUES ('11', '9Song', 'p10.jpg', 'Miaow', 'a1.png', '2015-05-27', '', '0', '10');
INSERT INTO `tb_music_info` VALUES ('12', '10Song', 'p11.jpg', 'Miaow', 'a1.png', '2015-05-18', '', '0', '11');
INSERT INTO `tb_music_info` VALUES ('13', '12Song', 'p12.jpg', 'Miaow', 'a1.png', '2015-05-19', '', '0', '12');
