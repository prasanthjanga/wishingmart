-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2015 at 10:37 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vr_chat`
--
CREATE DATABASE IF NOT EXISTS `vr_chat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vr_chat`;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from_id` varchar(255) NOT NULL DEFAULT '',
  `to_id` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from_id`, `to_id`, `message`, `sent`, `recd`) VALUES
(4, '1022', '104', 'sample text msg', '2015-10-28 14:10:55', 0),
(5, '107', '105', 'ont many msg', '2015-10-28 14:10:00', 0),
(6, '104', '102', 'list of all msg to users', '2015-10-28 14:10:11', 0),
(7, '102', '104', 'come to online once', '2015-10-28 14:10:20', 0),
(8, '104', '102', 'smile symboles', '2015-10-28 14:10:33', 0),
(9, '102', '104', 'user different one', '2015-10-28 14:10:48', 0),
(10, '105', '104', '104 to 105', '2015-10-28 14:10:54', 0),
(11, '106', '107', '106 to 107 msg to display here', '2015-10-28 14:10:06', 0),
(12, '102', '107', '102 to 107 display all list of chat', '2015-10-28 14:10:25', 0),
(13, '104', '105', 'my chat list of 105', '2015-10-28 14:10:31', 0),
(14, '102', '104', 'hi pro good', '2015-10-30 09:10:06', 0),
(15, '102', '104', 'to see you in this caht', '2015-10-30 09:10:12', 0),
(16, '102', '104', 'sample msg', '2015-10-30 09:10:21', 0),
(17, '102', '104', 'to see this one', '2015-10-30 09:10:24', 0),
(18, '104', '102', 'hello', '2015-10-30 09:10:44', 0),
(19, '102', '104', 'new deeal', '2015-10-30 09:10:12', 0),
(20, '104', '102', 'specal offer', '2015-10-30 09:10:21', 0),
(21, '102', '107', 'hi', '2015-11-03 14:11:25', 0),
(22, '107', '102', 'good to see chat of 107', '2015-11-03 14:11:39', 0),
(23, '102', '107', 'sample buss', '2015-11-03 14:11:44', 0),
(24, '107', '102', 'proof', '2015-11-03 15:11:40', 0),
(25, '102', '107', '12354456655', '2015-11-03 15:11:46', 0),
(26, '102', '104', 'hii', '2015-11-12 17:11:41', 0),
(27, '104', '102', 'h', '2015-11-13 12:11:04', 0),
(28, '104', '102', 'e', '2015-11-13 12:11:05', 0),
(29, '104', '102', 'l', '2015-11-13 12:11:05', 0),
(30, '104', '102', 'l', '2015-11-13 12:11:06', 0),
(31, '104', '102', 'o', '2015-11-13 12:11:06', 0),
(32, '102', '104', 'sample', '2015-11-22 23:11:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE IF NOT EXISTS `online` (
  `uid` bigint(20) NOT NULL AUTO_INCREMENT,
  `online` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`uid`, `online`) VALUES
(101, 1),
(102, 1),
(103, 0),
(104, 2),
(105, 0),
(106, 0),
(107, 1),
(108, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
