/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : dbphp7

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-04-15 00:44:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin@gmail.com', '$2a$16$i8wE2oa9mpRhhFVlWjiXLeZreahhi1OS6j7wVFMm7nsg/5Pf5UybG');
INSERT INTO `users` VALUES ('2', 'users', 'users@gmail.com', '$2a$16$CDGvzpPEBOB/n3tnyZs5f.y1W1NQsQ93gE9tIEk6wzB3Wu3GA7Hi6');
