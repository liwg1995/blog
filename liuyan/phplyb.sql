/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50091
Source Host           : localhost:3306
Source Database       : phplyb

Target Server Type    : MYSQL
Target Server Version : 50091
File Encoding         : 65001

Date: 2013-08-29 21:43:30
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(50) default NULL,
  `password` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO admin VALUES ('1', 'admin', 'admin');

-- ----------------------------
-- Table structure for `leavewords`
-- ----------------------------
DROP TABLE IF EXISTS `leavewords`;
CREATE TABLE `leavewords` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(50) default NULL,
  `qq` int(10) default NULL,
  `email` varchar(50) default NULL,
  `homepage` varchar(50) default NULL,
  `face` varchar(50) default NULL,
  `leave_title` varchar(50) default NULL,
  `leave_contents` text,
  `leave_time` datetime default NULL,
  `ip` varchar(20) NOT NULL default '',
  `is_audit` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of leavewords
-- ----------------------------
INSERT INTO leavewords VALUES ('21', '夏日博客', '2147483647', '2366439636@qq.com', 'http://www.04ie.com', '1', '留言本发布了', '新版PHP留言本经过一段时间的更新，终于发布了，欢迎PHPer下载学习研究。', '2013-08-27 21:58:41', '127.0.0.1', '1');
INSERT INTO leavewords VALUES ('22', '学习黑客', '2147483647', '2366439636@qq.com', 'http://www.04ie.com', '6', '测试PHP留言本', '夏日PHP留言本已经全部测试完成！敬请放心使用。如有问题，欢迎随时与我联系！', '2013-08-27 22:01:45', '127.0.0.1', '1');
INSERT INTO leavewords VALUES ('24', '原来如此', '2147483647', '2366439636@qq.com', 'http://www.04ie.com', '2', '简单小型PHP留言本', '后台可进行系统设置功能，开启留言审核，过滤 html，每页显示留言条数，另有回复、删除、锁定、解锁、审核等功能。', '2013-08-27 22:12:09', '127.0.0.1', '1');
INSERT INTO leavewords VALUES ('25', '夏日博客', '2147483647', '2366439636@qq.com', 'http://www.04ie.com', '3', '夏日PHP留言本v0.3发布了', '如果您已下载到本留言本，欢迎您免费使用，源文件全部开源，谨请您保留底部本站链接版权信息。', '2013-08-27 22:14:13', '127.0.0.1', '1');

-- ----------------------------
-- Table structure for `lockip`
-- ----------------------------
DROP TABLE IF EXISTS `lockip`;
CREATE TABLE `lockip` (
  `Id` int(11) NOT NULL auto_increment,
  `lockip` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of lockip
-- ----------------------------
INSERT INTO lockip VALUES ('10', '');

-- ----------------------------
-- Table structure for `reply`
-- ----------------------------
DROP TABLE IF EXISTS `reply`;
CREATE TABLE `reply` (
  `id` int(10) NOT NULL auto_increment,
  `leaveid` int(10) default NULL,
  `leaveuser` varchar(10) default NULL,
  `reply_contents` text,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of reply
-- ----------------------------
INSERT INTO reply VALUES ('8', '9', '管理员', '已测试完成！');
INSERT INTO reply VALUES ('9', '8', '管理员', '恩，好的，谢谢！');
INSERT INTO reply VALUES ('10', '4', '管理员', '呵呵，谢谢！');
INSERT INTO reply VALUES ('11', '5', '管理员', '请多多指教！');
INSERT INTO reply VALUES ('12', '21', '管理员', '测试夏日PHPV0.3回复功能。');
INSERT INTO reply VALUES ('13', '22', '管理员', '测试回复跳转功能，欢迎大家下载学习研究。');
INSERT INTO reply VALUES ('15', '24', '管理员', '欢迎进行测试，如有问题，欢迎在发布页进行提问。');
INSERT INTO reply VALUES ('16', '25', '管理员', '如果您在使用当中遇到什么问题，欢迎在发布页进行提问，我会尽量第一时间为你回答。');

-- ----------------------------
-- Table structure for `system`
-- ----------------------------
DROP TABLE IF EXISTS `system`;
CREATE TABLE `system` (
  `name` varchar(225) default NULL COMMENT '网站名称',
  `title` varchar(225) default NULL COMMENT '标题',
  `keywords` varchar(225) default NULL COMMENT '关键字',
  `smalltext` varchar(225) default NULL COMMENT 'smalltext',
  `url` varchar(80) default NULL COMMENT '网站地址',
  `page` int(11) default '5',
  `is_audit` int(11) default '0',
  `is_html` int(11) default '0',
  `copyright` text COMMENT '版权信息'
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of system
-- ----------------------------
INSERT INTO system VALUES ('夏日PHP留言本管理系统V0.3', '夏日PHP留言本管理系统V0.3', '夏日CMS,夏日系统,夏日源码,夏日PHP留言本', '夏日留言板最新版发布了', 'http://www.04ie.com', '5', '1', '1', '版权所有：您的网站名称 Copyright@2013-2015 ALL Rights Reserved');
