/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100126
 Source Host           : localhost:3306
 Source Schema         : amakaik1_AsistenteTaxonomico

 Target Server Type    : MySQL
 Target Server Version : 100126
 File Encoding         : 65001

 Date: 29/10/2017 23:35:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'contacto@amakaik.cl', 'a6f8f9e951ff0f044a10a7857e45d92efa6c6bbb', 'Amakaik');
INSERT INTO `users` VALUES (2, 'manuel.marin.t@gmail.com', 'a6f8f9e951ff0f044a10a7857e45d92efa6c6bbb', 'Manuel Marín');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
