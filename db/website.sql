-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2017 at 04:46 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `etitle` varchar(500) CHARACTER SET utf8 NOT NULL,
  `edesc` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `epic` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `epic_thumbnail` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `day_week` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  UNIQUE KEY `eid` (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`eid`, `etitle`, `edesc`, `epic`, `epic_thumbnail`, `uid`, `edate`, `day_week`, `views`) VALUES
(4, 'برگزاری همایش سالیانه در موسسه آموزش عالی سپاهان', 'زمان برگزاری همایش: شنبه 20 آذر ساعت 9 الی 16 زمان ثبت نام: 20 آبان الی 1 آذر محل ثبت نام: امور دانشجویی هزینه ثبت نام با ارائه کارت دانشجویی (شامل پذیرایی، ناهار و گواهی شرکت): 10 هزار تومان مکان برگزاری همایش: روبروی پل خواجو، سالن موسسه تنظیم و نشر آثار امام خمینی(ره) قابل ذکر است با توجه به محدود بودن ظرفیت سالن، اولویت با دانشجویان ارشد و دانشجویان مهندسی برق و مهندسی پزشکی می باشد. ', 'Desert.jpg', 'Desert.jpg', NULL, '1396-03-23', 2, 0),
(5, ' اطلاعیه پذیرش دانشجو در سال تحصیلی ۹۶-۹۵ ', 'زمان برگزاری همایش: شنبه 20 آذر ساعت 9 الی 16 زمان ثبت نام: 20 آبان الی 1 آذر محل ثبت نام: امور دانشجویی هزینه ثبت نام با ارائه کارت دانشجویی (شامل پذیرایی، ناهار و گواهی شرکت): 10 هزار تومان مکان برگزاری همایش: روبروی پل خواجو، سالن موسسه تنظیم و نشر آثار امام خمینی(ره) قابل ذکر است با توجه به محدود بودن ظرفیت سالن، اولویت با دانشجویان ارشد و دانشجویان مهندسی برق و مهندسی پزشکی می باشد. ', 'Tulips.jpg', 'Tulips.jpg', NULL, '1396-03-23', 2, 0),
(6, ' مراسم جشن عید غدیر', 'زمان برگزاری همایش: شنبه 20 آذر ساعت 9 الی 16 زمان ثبت نام: 20 آبان الی 1 آذر محل ثبت نام: امور دانشجویی هزینه ثبت نام با ارائه کارت دانشجویی (شامل پذیرایی، ناهار و گواهی شرکت): 10 هزار تومان مکان برگزاری همایش: روبروی پل خواجو، سالن موسسه تنظیم و نشر آثار امام خمینی(ره) قابل ذکر است با توجه به محدود بودن ظرفیت سالن، اولویت با دانشجویان ارشد و دانشجویان مهندسی برق و مهندسی پزشکی می باشد. 	1396-03-2', 'Penguins.jpg', 'Penguins.jpg', NULL, '1396-03-23', 2, 0),
(7, ' اسامی قبول شدگان کنکور کارشناسی ارشد سال ٩٣', 'زمان برگزاری همایش: شنبه 20 آذر ساعت 9 الی 16 زمان ثبت نام: 20 آبان الی 1 آذر محل ثبت نام: امور دانشجویی هزینه ثبت نام با ارائه کارت دانشجویی (شامل پذیرایی، ناهار و گواهی شرکت): 10 هزار تومان مکان برگزاری همایش: روبروی پل خواجو، سالن موسسه تنظیم و نشر آثار امام خمینی(ره) قابل ذکر است با توجه به محدود بودن ظرفیت سالن، اولویت با دانشجویان ارشد و دانشجویان مهندسی برق و مهندسی پزشکی می باشد. ', 'Koala.jpg', 'Koala.jpg', NULL, '1396-03-23', 2, 0),
(8, 'سیباس بیاست شسیتا شسیتاشس یتسشیا سشتنیا', 'زمان برگزاری همایش: شنبه 20 آذر ساعت 9 الی 16 زمان ثبت نام: 20 آبان الی 1 آذر محل ثبت نام: امور دانشجویی هزینه ثبت نام با ارائه کارت دانشجویی (شامل پذیرایی، ناهار و گواهی شرکت): 10 هزار تومان مکان برگزاری همایش: روبروی پل خواجو، سالن موسسه تنظیم و نشر آثار امام خمینی(ره) قابل ذکر است با توجه به محدود بودن ظرفیت سالن، اولویت با دانشجویان ارشد و دانشجویان مهندسی برق و مهندسی پزشکی می باشد. ', 'Hydrangeas.jpg', 'Hydrangeas.jpg', NULL, '1396-03-23', 2, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `ntitle`, `ndesc`, `orgid`, `uid`, `ndate`, `day_week`, `attachment1`, `attachment2`, `attachment3`, `views`) VALUES
(1, 'حضور استاد جمالی جهت رسیدگی به اعتراضات درس ریاضی1 و ریاضیات و کاربرد در حسابداری2 ', 'استاد جمالی جهت رسیدگی به اعتراضات درس ریاضی1 و ریاضیات و کاربرد در حسابداری2 روز پنجشنبه 96/3/25 ساعت 9:30 در مؤسسه حضور دارند.', 1, NULL, '1396-03-23', 2, NULL, NULL, NULL, 0),
(2, 'قابل توجه دانشجویان گرامی', '	به اطلاع می رساند کلیه امتحانات روز چهارشنبه 96/3/24 در همان ساعات درج شده در کارت آزمون برگزار خواهد شد.', 1, NULL, '1396-03-23', 2, NULL, NULL, NULL, 0),
(3, 'قابل توجه دانشجویان درس کاربرد نرم افزارهای رایانه ای در معماری با استاد رفیعی', 'اریخ امتحان عملی روز سه شنبه 96/3/23 از ساعت 10 تا 12 می باشد. عدم حضور دانشجویان، به منزله ی غیبت دانشجو در امتحان بوده و امتحان مجدد برگزار نخواهد شد. اسامی دانشجویان : یاسمن مرتضوی- مهسا رضایی- شمیم اصلانیان- نازنین فنایی', 1, NULL, '1396-03-23', 2, NULL, NULL, NULL, 0);

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
(146);

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
