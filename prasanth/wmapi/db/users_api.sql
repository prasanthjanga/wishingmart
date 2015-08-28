-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2015 at 08:54 AM
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
(1, 'sample123', '654321', '2015-08-10 02:03:07'),
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
