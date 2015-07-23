/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : codeigniter

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2013-04-02 13:26:22
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `chat`
-- ----------------------------
DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `from` varchar(255) NOT NULL default '',
  `to` varchar(255) NOT NULL default '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL default '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of chat
-- ----------------------------
INSERT INTO `chat` VALUES ('24', 'Chris', 'Ann', 'test', '2013-04-01 13:06:40', '1');
INSERT INTO `chat` VALUES ('25', 'Ann', 'Chris', 'dfgdfg', '2013-04-01 13:24:35', '1');
INSERT INTO `chat` VALUES ('26', 'Ann', 'Chris', 'asd', '2013-04-01 13:24:45', '1');
INSERT INTO `chat` VALUES ('27', 'Ann', 'Chris', 'test', '2013-04-01 13:28:05', '1');
INSERT INTO `chat` VALUES ('28', 'Ann', 'Smith', 'tets', '2013-04-01 13:28:16', '1');
INSERT INTO `chat` VALUES ('29', 'Chris', 'Ann', 'test', '2013-04-01 18:49:54', '0');
INSERT INTO `chat` VALUES ('30', 'Smith', 'Ann', 'test', '2013-04-01 21:51:10', '0');
INSERT INTO `chat` VALUES ('31', 'Chris', 'Smith', 'testing', '2013-04-01 22:33:34', '1');
INSERT INTO `chat` VALUES ('32', 'Chris', 'Ann', 'testing', '2013-04-01 22:33:47', '0');
INSERT INTO `chat` VALUES ('33', 'Smith', 'Chris', 'responding by Smith', '2013-04-01 23:01:06', '0');
INSERT INTO `chat` VALUES ('34', 'Smith', 'Chris', 'hi', '2013-04-02 12:50:12', '0');
INSERT INTO `chat` VALUES ('35', 'Smith', 'Ann', 'Ann', '2013-04-02 12:50:22', '0');
INSERT INTO `chat` VALUES ('36', 'Smith', 'Ann', 'hi ann,,,,,', '2013-04-02 12:52:35', '0');
INSERT INTO `chat` VALUES ('37', 'Smith', 'Ann', 'Annnnnnnnnnnn', '2013-04-02 12:55:07', '0');
INSERT INTO `chat` VALUES ('38', 'Smith', 'Chris', 'Crissssssssssss', '2013-04-02 12:55:11', '0');
INSERT INTO `chat` VALUES ('39', 'Smith', 'Chris', 'dddd', '2013-04-02 12:56:08', '0');
INSERT INTO `chat` VALUES ('40', 'Smith', 'Ann', 'jjjj', '2013-04-02 12:56:13', '0');
INSERT INTO `chat` VALUES ('41', 'Smith', 'Chris', 'hi', '2013-04-02 13:07:14', '0');
INSERT INTO `chat` VALUES ('42', 'Smith', 'Ann', 'ertertert', '2013-04-02 13:07:15', '0');
INSERT INTO `chat` VALUES ('43', 'Smith', 'Chris', 'fggggggggggg', '2013-04-02 13:23:10', '0');
INSERT INTO `chat` VALUES ('44', 'Smith', 'Ann', 'dfgdfgdg', '2013-04-02 13:23:12', '0');

-- ----------------------------
-- Table structure for `ci_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL default '0',
  `ip_address` varchar(16) NOT NULL default '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL default '0',
  `user_data` text NOT NULL,
  PRIMARY KEY  (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ci_sessions
-- ----------------------------

-- ----------------------------
-- Table structure for `ci_users`
-- ----------------------------
DROP TABLE IF EXISTS `ci_users`;
CREATE TABLE `ci_users` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `registered_date` datetime NOT NULL,
  `status` int(5) NOT NULL,
  `online` int(5) NOT NULL,
  PRIMARY KEY  (`user_id`,`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ci_users
-- ----------------------------
INSERT INTO `ci_users` VALUES ('1', 'Smith', 'sumith.harshan@gmail.com', '12345', '2013-04-01 19:36:56', '1', '1');
INSERT INTO `ci_users` VALUES ('2', 'Ann', 'ann123@gmail.com', '11111', '2013-04-01 19:39:56', '1', '1');
INSERT INTO `ci_users` VALUES ('3', 'Chris', 'chris12@yahoo.com', 'demo', '2013-04-02 00:00:00', '1', '1');
