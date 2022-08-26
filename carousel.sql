/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80029
 Source Host           : localhost:55000
 Source Schema         : ibi_ntb

 Target Server Type    : MySQL
 Target Server Version : 80029
 File Encoding         : 65001

 Date: 26/08/2022 21:33:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for carousel
-- ----------------------------
DROP TABLE IF EXISTS `carousel`;
CREATE TABLE `carousel` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of carousel
-- ----------------------------
BEGIN;
INSERT INTO `carousel` VALUES (3, 'file/56h3DjNAdlQMnI3bPhcg558K0QWFjZfM6YPMJhD9.jpg', 'IBI NTB', '2022-08-26 13:14:43', '2022-08-26 13:14:43');
INSERT INTO `carousel` VALUES (4, 'file/lFCiEDNh0vFf7rv8yJiW5bGHhjj4JxxwiKyXVi3o.jpg', 'tes', '2022-08-26 13:15:35', '2022-08-26 13:15:35');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
