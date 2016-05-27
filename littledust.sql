USE `littledust`;
SET NAMES utf8;
CREATE DATABASE IF NOT EXISTS `littledust` CHARACTER SET utf8;
CREATE TABLE IF NOT EXISTS `ld_user`(
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `user_name` char(16) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `intro` varchar(255) DEFAULT '' COMMENT '简介',
  `portrait` varchar(255) DEFAULT '' COMMENT '头像',
  `cell` char(11) DEFAULT '' COMMENT '手机号',
  `email` char(255) DEFAULT '' COMMENT '邮箱',
  `gender` tinyint DEFAULT 1 COMMENT '性别',
  `birth` timestamp DEFAULT 0 COMMENT '生日',
  PRIMARY KEY (`id`),
  UNIQUE KEY (`user_name`)
)ENGINE=InnoDB CHARSET=utf8;

--INSERT INTO `ld_user` (`id`,`user_name`,`password`,`intro`,`cell`,`email`,`gender`) VALUES \
--(1,'littledust','chenxu0909','Better Coder Better Life','15062658814','541817418@qq.com','1');

--INSERT INTO `ld_user` (`id`,`user_name`,`password`,`intro`,`cell`,`email`,`gender`) VALUES \
--(2,'test','test','Test User Account','15062658814','541817418@qq.com','1');

CREATE TABLE IF NOT EXISTS `ld_user_login_info`(
    `id` int unsigned NOT NULL COMMENT '用户ID',
    `login_time` timestamp COMMENT '登录时间',
    `login_ip` int unsigned COMMENT '登录IP',
    `login_browser` char(32) COMMENT '登录浏览器'
)ENGINE=InnoDB CHARSET=utf8;
