/*
Navicat MySQL Data Transfer

Source Server         : soon
Source Host           : localhost:3306
Source Database       : hr

Target Server Type    : MYSQL
Date: 2016-09-07 00:03:49

这个数据库是临时的，那个GBK编码要改改...用户评价那里最好用utf8mb4，兼容四字节的表情
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sh_interviewer
-- ----------------------------
DROP TABLE IF EXISTS `sh_interviewer`;
CREATE TABLE `sh_interviewer` (
  `user_id` varchar(255) NOT NULL DEFAULT '',
  `user_name` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `user_pass` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `user_ip` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `user_last_time` varchar(255) CHARACTER SET gbk DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of sh_interviewer
-- ----------------------------
INSERT INTO `sh_interviewer` VALUES ('1', 'soon', 'soon', '', null);

-- ----------------------------
-- Table structure for sh_signup
-- ----------------------------
DROP TABLE IF EXISTS `sh_signup`;
CREATE TABLE `sh_signup` (
  `sign_id` varchar(32) CHARACTER SET gbk NOT NULL,
  `sign_openid` varchar(32) NOT NULL,
  `sign_name` varchar(255) CHARACTER SET gbk NOT NULL,
  `sign_sno` varchar(32) NOT NULL,
  `sign_sex` varchar(10) CHARACTER SET gbk DEFAULT NULL,
  `sign_birthday` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `sign_class` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `sign_native` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `sign_tele` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `sign_email` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `sign_department` varchar(255) DEFAULT NULL,
  `sign_job_one` varchar(255) DEFAULT NULL,
  `sign_job_two` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `sign_reason` text CHARACTER SET gbk,
  `sign_hobby` text,
  `sign_evaluate` text CHARACTER SET gbk,
  `sign_experience` text CHARACTER SET gbk,
  `sign_prize` text CHARACTER SET gbk,
  `sign_photo_name` varchar(255) DEFAULT NULL,
  `sign_photo_file_path` varchar(255) DEFAULT NULL,
  `sign_works_name` varchar(255) DEFAULT NULL,
  `sign_works_file_path` varchar(255) DEFAULT NULL,
  `sign_issubscribe` varchar(1) DEFAULT NULL,
  `sign_state` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `sign_fecdback` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `sign_pass_one` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `sign_isdel` varchar(1) CHARACTER SET gbk DEFAULT NULL,
  `sign_time` varchar(255) CHARACTER SET gbk DEFAULT NULL,
  `sign_ip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of sh_signup
-- ----------------------------
