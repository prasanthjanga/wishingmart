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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
