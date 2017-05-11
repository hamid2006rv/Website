-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 02:48 PM
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
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `ctitle` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `cbody` varchar(5000) CHARACTER SET utf8 DEFAULT NULL,
  `orgid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `cdate` date NOT NULL,
  `attachment1` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `attachment2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `attachment3` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `hasTitle` int(11) NOT NULL DEFAULT '1',
  UNIQUE KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`cid`, `ctitle`, `cbody`, `orgid`, `uid`, `cdate`, `attachment1`, `attachment2`, `attachment3`, `hasTitle`) VALUES
(3, '', '&lt;h3&gt;&lt;span style=&quot;color: #00ff00;&quot;&gt;رشته مهندسی فناوری اطلاعات&lt;/span&gt;&lt;/h3&gt;', 2, NULL, '1396-02-21', NULL, NULL, NULL, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `ntitle`, `ndesc`, `orgid`, `uid`, `ndate`, `day_week`, `attachment1`, `attachment2`, `attachment3`, `views`) VALUES
(29, 'test', 'test', 1, NULL, '1396-02-21', 1, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `top_id` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `top_id`) VALUES
(1, 'آموزش', NULL),
(2, 'IT', NULL);

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
(39);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
