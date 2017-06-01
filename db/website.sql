-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 11:15 AM
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
  UNIQUE KEY `cid` (`cid`),
  FULLTEXT KEY `ctitle` (`ctitle`,`cbody`),
  FULLTEXT KEY `ctitle_2` (`ctitle`,`cbody`),
  FULLTEXT KEY `content_index` (`ctitle`,`cbody`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`cid`, `ctitle`, `cbody`, `orgid`, `uid`, `cdate`, `attachment1`, `attachment2`, `attachment3`, `hasTitle`) VALUES
(4, '', '&lt;h1 style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;color: #ff0000;&quot;&gt;رشته مهندسی فن آوری اطلاعات&lt;/span&gt;&lt;/h1&gt;\r\n&lt;p style=&quot;text-align: right;&quot;&gt;&lt;img style=&quot;display: block; margin-left: auto; margin-right: auto;&quot; title=&quot;مهندسی فن آوری&quot; src=&quot;http://www.beytoote.com/images/stories/scientific/sci210.jpg&quot; alt=&quot;مهندسی فن آوری&quot; /&gt;&lt;/p&gt;\r\n&lt;p style=&quot;text-align: right;&quot;&gt;در کشور ما نیز در راستای ایجاد تغییرات بنیادین و منطقی و دستیابی به نیروهای متخصص و کارآمد رشته فناوری اطلاعات به صورت متمرکز و غیرمتمرکز در مراکز آموزش عالی از جمله دانشگاه ها ارایه می شود.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: right;&quot;&gt;رشته مهندسی فناوری اطلاعات، زیرمجموعه گروه فنی در دانشگاه محسوب می شود. این رشته دانشی را به مخاطب منتقل می کند که طی آن روش های جمع آوری اطلاعات، استفاده و انتقال آن میسر شود.&lt;/p&gt;\r\n&lt;div style=&quot;text-align: right;&quot;&gt;&amp;nbsp;مطالعه، طراحی، ساخت، راه اندازی، نگهداری سیستم های سخت افزاری و نرم افزاری، جمع آوری، سازمان دهی، طبقه بندی و انتقال اطلاعات مهم ترین اهدافی است که مهندسی فناوری اطلاعات آن را دنبال می کند. مهم ترین توانمندی دانش آموختگان این رشته، استفاده صحیح و بهره برداری به موقع از اطلاعات است. هسته اصلی این رشته را مهندسی کامپیوتر به ویژه گرایش نرم افزار تشکیل می دهد.&lt;/div&gt;', 2, NULL, '1396-02-21', NULL, NULL, NULL, 0),
(5, '', '&lt;table dir=&quot;rtl&quot; width=&quot;100%&quot;&gt;\r\n&lt;tbody&gt;\r\n&lt;tr&gt;\r\n&lt;td&gt;\r\n&lt;h1&gt;&lt;span style=&quot;color: #000080;&quot;&gt;این صفحه در حال ساخت است&lt;/span&gt;&lt;/h1&gt;\r\n&lt;div&gt;\r\n&lt;p&gt;&lt;strong&gt;کاربر گرامی با تشکر از بازدیدتان، این صفحه در حال ساخت می باشد ، لطفأ بعدأ مراجعه فرمایید&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;/tbody&gt;\r\n&lt;/table&gt;', 3, NULL, '1396-02-21', NULL, NULL, NULL, 0),
(6, '', '&lt;table dir=&quot;rtl&quot; width=&quot;100%&quot;&gt;\r\n&lt;tbody&gt;\r\n&lt;tr&gt;\r\n&lt;td&gt;\r\n&lt;h1&gt;&lt;span style=&quot;color: #000080;&quot;&gt;این صفحه در حال ساخت است&lt;/span&gt;&lt;/h1&gt;\r\n&lt;div&gt;\r\n&lt;p&gt;&lt;strong&gt;کاربر گرامی با تشکر از بازدیدتان، این صفحه در حال ساخت می باشد ، لطفأ بعدأ مراجعه فرمایید&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;/tbody&gt;\r\n&lt;/table&gt;', 4, NULL, '1396-02-21', NULL, NULL, NULL, 0),
(7, '', '&lt;table dir=&quot;rtl&quot; width=&quot;100%&quot;&gt;\r\n&lt;tbody&gt;\r\n&lt;tr&gt;\r\n&lt;td&gt;\r\n&lt;h1&gt;&lt;span style=&quot;color: #000080;&quot;&gt;این صفحه در حال ساخت است&lt;/span&gt;&lt;/h1&gt;\r\n&lt;div&gt;\r\n&lt;p&gt;&lt;strong&gt;کاربر گرامی با تشکر از بازدیدتان، این صفحه در حال ساخت می باشد ، لطفأ بعدأ مراجعه فرمایید&lt;/strong&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/td&gt;\r\n&lt;/tr&gt;\r\n&lt;/tbody&gt;\r\n&lt;/table&gt;', 5, NULL, '1396-02-21', NULL, NULL, NULL, 0);

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
  UNIQUE KEY `nid` (`nid`),
  FULLTEXT KEY `ntitle` (`ntitle`,`ndesc`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `top_id` int(11) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `top_id`) VALUES
(1, 'آموزش', NULL),
(2, 'IT', NULL),
(3, 'امور دانشجویی', NULL),
(4, 'امور پژوهشی', NULL),
(5, 'تحصیلات تکمیلی', NULL);

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
(138);

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
(1, 'admin', '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
