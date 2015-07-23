-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2015 at 07:08 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wishing_cig`
--
CREATE DATABASE IF NOT EXISTS `wishing_cig` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wishing_cig`;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `seller` int(11) NOT NULL,
  `marketing` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `superadmin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `seller`, `marketing`, `admin`, `superadmin`) VALUES
(1, 'Dash Board', 1, 1, 1, 1),
(2, 'Profile', 1, 1, 1, 1),
(3, 'Products', 1, 1, 1, 1),
(4, 'Sales', 1, 1, 1, 1),
(5, 'Reports', 1, 1, 1, 1),
(6, 'Zones', 1, 1, 1, 1),
(7, 'Shipping & Tax', 1, 1, 1, 1),
(8, 'Discounts / Promotions', 1, 1, 0, 1),
(9, 'Currency', 1, 1, 1, 1),
(10, 'Users', 1, 1, 1, 1),
(11, 'Groups & Category ', 1, 1, 1, 1),
(12, 'Online Chat', 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `disc` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `price` int(11) NOT NULL,
  `instock` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `date_of_add` date NOT NULL,
  `manufacturer` text NOT NULL,
  `seo_word` text NOT NULL,
  `page_title_tag` varchar(225) NOT NULL,
  `meta_disc` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `u_login`
--

CREATE TABLE IF NOT EXISTS `u_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `active` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `u_login`
--

INSERT INTO `u_login` (`id`, `username`, `password`, `active`) VALUES
(1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `u_register`
--

CREATE TABLE IF NOT EXISTS `u_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `u_register`
--

INSERT INTO `u_register` (`id`, `fname`, `lname`, `username`, `password`, `dob`, `gender`) VALUES
(3, 'firstadmin', 'lastadmin', 'admin@admin.com', 'admin', '2015-12-31', 'Female'),
(4, 'sample', 'sample', 'sample@sample.com', 'sample', '2015-12-31', 'Male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
