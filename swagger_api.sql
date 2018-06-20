/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : swagger_api

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-06-19 22:13:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for swagger_project
-- ----------------------------
DROP TABLE IF EXISTS `swagger_project`;
CREATE TABLE `swagger_project` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `project_title` varchar(255) NOT NULL COMMENT '项目名称',
  `project_desc` varchar(255) DEFAULT NULL COMMENT '项目简介',
  `project_json` longtext NOT NULL COMMENT '项目Json',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
