/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : laravel1

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 01/10/2020 15:11:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tarefas
-- ----------------------------
DROP TABLE IF EXISTS `tarefas`;
CREATE TABLE `tarefas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `resolvido` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tarefas
-- ----------------------------
INSERT INTO `tarefas` VALUES (1, 'Tomar café', 0);
INSERT INTO `tarefas` VALUES (2, 'Sair', 1);
INSERT INTO `tarefas` VALUES (3, 'Descansar', 0);

SET FOREIGN_KEY_CHECKS = 1;
