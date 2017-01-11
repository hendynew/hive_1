-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 08:57 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hive_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `name`, `email`, `message`, `status`) VALUES
(1, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(2, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(3, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(4, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(5, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(6, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(7, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(8, 'asd', 'hendylukas68@gmail.com', 'haha', '1'),
(9, 'asd', 'hendylukas68@gmail.com', 'asd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `caption` varchar(255) NOT NULL,
  `post` longtext NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `date`, `caption`, `post`, `url_image`, `status`) VALUES
(1, 'Ekonomi dan Dunia', '2017-01-03', '', 'halo semua', '', '1'),
(2, 'Sistem Manajemen', '2017-01-05', '', 'hahah', '', '1'),
(3, 'Te amo.', '2017-01-09', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'Images8.jpg', '1'),
(4, 'Superman is Dead', '2017-01-09', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '', '1'),
(5, 'Lorem Ipsum', '2017-01-09', 'Lorem Lorem ipsum', 'Lorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsumLorem Lorem ipsum', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `email` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `name`, `status`) VALUES
('admin', 'hendylukas68@gmail.com', 'admin', 'Administrator', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
