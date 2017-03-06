/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : s60

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2017-03-03 14:08:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for s60_user
-- ----------------------------
DROP TABLE IF EXISTS `s60_user`;
CREATE TABLE `s60_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sex` tinyint(4) NOT NULL DEFAULT '1',
  `age` tinyint(4) NOT NULL DEFAULT '1',
  `province` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of s60_user
-- ----------------------------
INSERT INTO `s60_user` VALUES (null, '马达', '1', '18', '江苏');
INSERT INTO `s60_user` VALUES (null, '小恶魔', '1', '20', '君临');
INSERT INTO `s60_user` VALUES (null, '雪诺', '1', '18', '黑城堡');
INSERT INTO `s60_user` VALUES (null, '龙妈', '0', '22', '君临');
INSERT INTO `s60_user` VALUES (null, '小小', '1', '18', '江苏');
INSERT INTO `s60_user` VALUES (null, '恶魔', '1', '20', '君临');
INSERT INTO `s60_user` VALUES (null, '三傻', '0', '18', '临冬城');
INSERT INTO `s60_user` VALUES (null, '德古拉', '1', '22', '暗黑城');
INSERT INTO `s60_user` VALUES (null, '德古拉二世', '1', '22', '暗黑城');
