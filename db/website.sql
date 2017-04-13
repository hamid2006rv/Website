-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 10:08 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `ntitle`, `ndesc`, `orgid`, `uid`, `ndate`, `day_week`, `attachment1`, `attachment2`, `attachment3`, `views`) VALUES
(1, 'تشکیل نشدن کلاس های استاد گلعذار روز یکشنبه 95/12/8', 'تشکیل نشدن کلاس های استاد گلعذار روز یکشنبه 95/12/8. جبرانی آن متعاقباً اعلام خواهد شد.', 1, NULL, '1395-12-27', 3, NULL, NULL, NULL, NULL),
(2, 'تشکیل نشدن کلاس کاربرد رایانه در برق استاد طاهری روز دوشنبه 95/12/2', NULL, 1, NULL, '1395-12-08', 0, NULL, NULL, NULL, NULL),
(3, 'قابل توجه دانشجویانی که وام قرض الحسنه برای شهریه دریافت کرده اند', 'دانشجویانی که وام قرض الحسنه برای شهریه دریافت کرده اند نسبت به پرداخت قسط اول آن اقدام نمایند.', 1, NULL, '1395-11-30', 0, NULL, NULL, NULL, NULL),
(4, 'قابل توجه دانشجویانی که وام قرض الحسنه برای شهریه دریافت کرده اند', 'دانشجویانی که وام قرض الحسنه برای شهریه دریافت کرده اند نسبت به پرداخت قسط اول آن اقدام نمایند.', 1, NULL, '1395-11-30', 1, NULL, NULL, NULL, NULL);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
