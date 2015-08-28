-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2015 at 09:37 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wishing_voguerobot`
--
CREATE DATABASE IF NOT EXISTS `wishing_voguerobot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wishing_voguerobot`;

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(40) NOT NULL DEFAULT '',
  `controller` varchar(50) NOT NULL DEFAULT '',
  `date_created` datetime DEFAULT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id`, `key`, `controller`, `date_created`, `date_modified`) VALUES
(1, '8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', '/api', NULL, '2015-03-21 08:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `aprovel`
--

CREATE TABLE IF NOT EXISTS `aprovel` (
  `aid` bigint(20) NOT NULL AUTO_INCREMENT,
  `gid` bigint(20) NOT NULL,
  `gdate` datetime NOT NULL,
  PRIMARY KEY (`aid`),
  KEY `gid` (`gid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(225) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `cnid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(225) NOT NULL,
  PRIMARY KEY (`cnid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grant`
--

CREATE TABLE IF NOT EXISTS `grant` (
  `gid` bigint(20) NOT NULL AUTO_INCREMENT,
  `wid` bigint(20) NOT NULL,
  `gtuid` bigint(20) NOT NULL,
  `gprice` int(11) NOT NULL,
  `gdesc` varchar(225) NOT NULL,
  `gdate` datetime NOT NULL,
  `gimg` int(11) NOT NULL,
  PRIMARY KEY (`gid`),
  KEY `wid` (`wid`,`gtuid`),
  KEY `gtuid` (`gtuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `stid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `itime` datetime NOT NULL,
  PRIMARY KEY (`iid`),
  KEY `stid` (`stid`,`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE IF NOT EXISTS `keys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
  `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
  `ip_addresses` text,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, '8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `limits`
--

CREATE TABLE IF NOT EXISTS `limits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` tinyint(1) NOT NULL,
  `response_code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=236 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `uri`, `method`, `params`, `api_key`, `ip_address`, `time`, `rtime`, `authorized`, `response_code`) VALUES
(225, 'api/users/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', 'get', 'a:1:{s:9:"x-api-key";s:40:"8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";}', '8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', '::1', 1439340961, 0.364888, 1, 200),
(226, 'api/users/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', 'get', 'a:1:{s:9:"x-api-key";s:40:"8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";}', '8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', '::1', 1439341003, 0.523575, 1, 200),
(227, 'api/users/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', 'get', 'a:1:{s:9:"x-api-key";s:40:"8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";}', '8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', '::1', 1439342048, 0.118929, 1, 200),
(228, 'api/users/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', 'get', 'a:1:{s:9:"x-api-key";s:40:"8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";}', '8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', '::1', 1439342747, 0.117571, 1, 200),
(229, 'api/index', 'get', NULL, '', '::1', 1439342775, 0.073873, 0, 403),
(230, 'api/users', 'get', NULL, '', '::1', 1439342791, 0.18777, 0, 403),
(231, 'api/users/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', 'get', 'a:1:{s:9:"x-api-key";s:40:"8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";}', '8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', '::1', 1439342797, 0.229685, 1, 200),
(232, 'api/users/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', 'get', 'a:1:{s:9:"x-api-key";s:40:"8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";}', '8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', '::1', 1439342972, 0.138061, 1, 200),
(233, 'api/rest_client_example', 'get', NULL, '', '::1', 1439368631, 0.273649, 0, 403),
(234, 'api/rest_client/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', 'get', 'a:1:{s:9:"x-api-key";s:40:"8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";}', '8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', '::1', 1439368668, 0.35559, 1, 0),
(235, 'api/users/x-api-key/8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', 'get', 'a:1:{s:9:"x-api-key";s:40:"8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS";}', '8hu8fWMCIhCXyq0U4TP0CMJ9waHkCGNcsrqok8zS', '::1', 1439368686, 0.180969, 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `messages_api`
--

CREATE TABLE IF NOT EXISTS `messages_api` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content_message` varchar(200) NOT NULL,
  `date_message` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `messages_api`
--

INSERT INTO `messages_api` (`id`, `user_id`, `content_message`, `date_message`) VALUES
(1, 1, 'Nuevo mensaje escrito por Israel', '2013-07-05 12:54:11'),
(2, 5, 'Nuevo mensaje de Sonia', '2013-07-05 12:54:11'),
(3, 2, 'Mensaje de Pepe', '2013-07-05 12:54:43'),
(4, 4, 'Mensaje de Manuel', '2013-07-05 12:54:43'),
(5, 3, 'Otro mensaje, esta vez de Juan', '2013-07-05 12:55:34'),
(6, 1, 'Mi nuevo mensaje.', '2013-07-05 12:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `pid` bigint(20) NOT NULL AUTO_INCREMENT,
  `paid` int(11) NOT NULL,
  `said` int(11) NOT NULL,
  `cno` int(10) NOT NULL,
  `pdetails` text NOT NULL,
  `enotice` int(1) NOT NULL,
  PRIMARY KEY (`pid`),
  KEY `said` (`said`),
  KEY `paid` (`paid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `p_address`
--

CREATE TABLE IF NOT EXISTS `p_address` (
  `paid` int(11) NOT NULL AUTO_INCREMENT,
  `paddress` varchar(225) NOT NULL,
  PRIMARY KEY (`paid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `rid` bigint(20) NOT NULL AUTO_INCREMENT,
  `fn` varchar(225) NOT NULL,
  `ln` varchar(225) NOT NULL,
  `gender` int(11) NOT NULL,
  `dob` date NOT NULL,
  `cnid` int(11) NOT NULL,
  `alink` varchar(225) NOT NULL,
  `status` int(1) NOT NULL,
  `doreg` date NOT NULL,
  `plevel` varchar(1) NOT NULL,
  PRIMARY KEY (`rid`),
  KEY `cnid` (`cnid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
  `sid` bigint(20) NOT NULL AUTO_INCREMENT,
  `aid` bigint(20) NOT NULL,
  `scid` int(11) NOT NULL,
  `setime` datetime NOT NULL,
  `scharg` int(11) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `aid` (`aid`,`scid`),
  KEY `scid` (`scid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_add`
--

CREATE TABLE IF NOT EXISTS `shipping_add` (
  `said` int(11) NOT NULL AUTO_INCREMENT,
  `saddress` int(11) NOT NULL,
  PRIMARY KEY (`said`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `scid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `scname` varchar(225) NOT NULL,
  PRIMARY KEY (`scid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `tid` bigint(20) NOT NULL AUTO_INCREMENT,
  `pm` int(11) NOT NULL,
  `pd` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` bigint(20) NOT NULL AUTO_INCREMENT,
  `uname` varchar(225) NOT NULL,
  `pwd` varchar(225) NOT NULL,
  PRIMARY KEY (`uid`,`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users_api`
--

CREATE TABLE IF NOT EXISTS `users_api` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users_api`
--

INSERT INTO `users_api` (`id`, `username`, `password`, `register_date`) VALUES
(1, 'sample', '654321', '2015-08-10 02:03:07'),
(2, 'Pepe', '123456', '2013-07-05 12:53:42'),
(3, 'Juan', '123456', '2013-07-05 12:53:42'),
(4, 'Manuel', '123456', '2013-07-05 12:53:42'),
(5, 'Sonia', '123456', '2013-07-05 12:53:42'),
(6, 'isra', 'ie0rieopw', '2013-07-05 19:13:01'),
(7, 'isra', 'ie0rieopw', '2013-07-05 19:13:19'),
(8, 'juanan', 'okpjkn', '2013-07-05 19:14:16'),
(9, 'carla', '123456', '2013-07-05 21:24:21'),
(10, 'carla', '123456', '2013-07-05 21:42:03'),
(17, 'prasanth', 'prasanth123', '2015-08-10 02:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `wishing`
--

CREATE TABLE IF NOT EXISTS `wishing` (
  `wid` bigint(20) NOT NULL AUTO_INCREMENT,
  `wpn` varchar(225) NOT NULL,
  `wpdec` varchar(225) NOT NULL,
  `wpimg` varchar(225) NOT NULL,
  `wpdate` datetime NOT NULL,
  `rid` bigint(20) NOT NULL,
  `status` bigint(20) NOT NULL,
  `scid` int(11) NOT NULL,
  `cnid` int(11) NOT NULL,
  PRIMARY KEY (`wid`),
  KEY `cid` (`rid`,`scid`,`cnid`),
  KEY `cnid` (`cnid`),
  KEY `scid` (`scid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aprovel`
--
ALTER TABLE `aprovel`
  ADD CONSTRAINT `aprovel_ibfk_1` FOREIGN KEY (`gid`) REFERENCES `grant` (`gid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grant`
--
ALTER TABLE `grant`
  ADD CONSTRAINT `grant_ibfk_2` FOREIGN KEY (`gtuid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grant_ibfk_3` FOREIGN KEY (`wid`) REFERENCES `wishing` (`wid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `registration` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_ibfk_2` FOREIGN KEY (`said`) REFERENCES `shipping_add` (`said`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profile_ibfk_3` FOREIGN KEY (`paid`) REFERENCES `p_address` (`paid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`cnid`) REFERENCES `country` (`cnid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `shipping_ibfk_1` FOREIGN KEY (`scid`) REFERENCES `shipping_add` (`said`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `registration` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishing`
--
ALTER TABLE `wishing`
  ADD CONSTRAINT `wishing_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `registration` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishing_ibfk_2` FOREIGN KEY (`cnid`) REFERENCES `country` (`cnid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishing_ibfk_3` FOREIGN KEY (`scid`) REFERENCES `subcategory` (`scid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
