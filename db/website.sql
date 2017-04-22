-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2017 at 12:34 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website`
--
CREATE DATABASE IF NOT EXISTS `website` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `website`;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `ntitle` varchar(200) CHARACTER SET utf8 NOT NULL,
  `ndesc` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `orgid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `ndate` date NOT NULL,
  `day_week` int(11) NOT NULL,
  `attachment1` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `attachment2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `attachment3` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  UNIQUE KEY `nid` (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `top_id` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `top_id`) VALUES
(1, 'آموزش', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `num_visited` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`num_visited`) VALUES
(1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
