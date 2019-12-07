/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : test2

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-04-19 17:16:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ly_content`
-- ----------------------------
DROP TABLE IF EXISTS `ly_content`;
CREATE TABLE `ly_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usernameid` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `time` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ly_content
-- ----------------------------
INSERT INTO `ly_content` VALUES ('5', '1231', '123', 'qqqqqqqq', '1524128936');
INSERT INTO `ly_content` VALUES ('7', '1231', '123', '122222qqq', '1524129020');

-- ----------------------------
-- Table structure for `ly_user`
-- ----------------------------
DROP TABLE IF EXISTS `ly_user`;
CREATE TABLE `ly_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `tel` bigint(11) DEFAULT NULL,
  `emai` varchar(255) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ly_user
-- ----------------------------
INSERT INTO `ly_user` VALUES ('1', '1231', null, '456', null, null, null);
INSERT INTO `ly_user` VALUES ('2', '1232', null, '456', null, null, null);
INSERT INTO `ly_user` VALUES ('3', 'poi', null, '456', null, null, null);
INSERT INTO `ly_user` VALUES ('4', '1234', null, '456', null, null, null);
INSERT INTO `ly_user` VALUES ('5', '1235', null, '456', null, null, null);
INSERT INTO `ly_user` VALUES ('6', '1236', null, '456', null, null, null);
INSERT INTO `ly_user` VALUES ('7', '1237', null, '456', null, null, null);
INSERT INTO `ly_user` VALUES ('8', '1238', null, '456', null, null, null);
INSERT INTO `ly_user` VALUES ('9', '1239', null, '456', null, null, null);
INSERT INTO `ly_user` VALUES ('10', '12310', null, '456', null, null, null);
INSERT INTO `ly_user` VALUES ('11', '12311', null, '456', null, null, null);
INSERT INTO `ly_user` VALUES ('12', '12312', null, '45666', null, null, null);
INSERT INTO `ly_user` VALUES ('16', '12', null, '12', null, null, null);
INSERT INTO `ly_user` VALUES ('13', 'asd', null, 'qwer', null, null, null);
