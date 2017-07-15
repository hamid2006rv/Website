-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 10:13 AM
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
  `collapse` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`cid`, `ctitle`, `cbody`, `orgid`, `uid`, `cdate`, `attachment1`, `attachment2`, `attachment3`, `hasTitle`, `collapse`) VALUES
(19, '', '&lt;h1&gt;&lt;span style=&quot;color: #ff0000;&quot;&gt;رشته مهندسی فناوری اطلاعات&lt;/span&gt;&lt;/h1&gt;\r\n&lt;p&gt;رشته مهندسی فناوری اطلاعات، زیرمجموعه گروه فنی در دانشگاه محسوب می شود. این رشته دانشی را به مخاطب منتقل می کند که طی آن روش های جمع آوری اطلاعات، استفاده و انتقال آن میسر شود.&lt;/p&gt;\r\n&lt;p&gt;مطالعه، طراحی، ساخت، راه اندازی، نگهداری سیستم های سخت افزاری و نرم افزاری، جمع آوری، سازمان دهی، طبقه بندی و انتقال اطلاعات مهم ترین اهدافی است که مهندسی فناوری اطلاعات آن را دنبال می کند. مهم ترین توانمندی دانش آموختگان این رشته، استفاده صحیح و بهره برداری به موقع از اطلاعات است. هسته اصلی این رشته را مهندسی کامپیوتر به ویژه گرایش نرم افزار تشکیل می دهد.&lt;/p&gt;\r\n&lt;ul&gt;\r\n&lt;li&gt;&lt;strong&gt;ماهیت رشته فناوری اطلاعات&lt;/strong&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;پیش از هر چیز بهتر است ابتدا به ماهیت رشته فناوری اطلاعات در ایران بپردازیم. رشته IT در ایران ماهیتی میان رشته ای دارد. به این مفهوم که رشته ای خالص نیست و از تلفیق رشته هایی نظیر مدیریت، مهندسی صنایع، مهندسی الکترونیک و مهندسی کامپیوتر به ویژه نرم افزار به وجود آمده است.&lt;/p&gt;\r\n&lt;div&gt;&amp;nbsp;ماهیت میان رشته ای فناوری اطلاعات باعث شده است هم اکنون دانشگاه های مختلفی چون تربیت مدرس، خواجه نصیر، تهران، امیرکبیر، شریف و علم و صنعت در مقطع کارشناسی ارشد، برخی دانشکده های فنی دانشگاه آزاد و سراسری در مقطع کارشناسی و دانشگاه های علمی-کاربردی و پودمانی در مقطع کاردانی به ارایه این رشته بپردازند.&lt;/div&gt;\r\n&lt;p&gt;&amp;nbsp;بر اساس این گزارش رشته فناوری اطلاعات در دوره کاردانی بیشتر به ارایه کردن مسایل مربوط به وب می پردازد. در دوره کارشناسی نیز متقاضیان را با عملیات شبکه و امور اجرا کردن آن در سازمان ها آشنا می کند و در پایان این دوره، اندک اندک وارد مباحث مدیریت پروژه می شود. البته قابل ذکر است کارشناسی ارشد IT دارای گرایش های عمده ای نظیر تجارت الکترونیکی، سیستم های چندرسانه ای، مدیریت سیستم های اطلاعاتی، امنیت اطلاعات، شبکه های کامپیوتری و مهندسی فناوری اطلاعات است که برخی از این گرایش ها در دانشگاه های ایران ارایه می شود.&lt;/p&gt;\r\n&lt;div&gt;&amp;nbsp;در دوره کارشناسی ارشد نیز ضمن تکمیل مدیریت پروژه به ارایه راه حل های مناسب برای مسایل پیچیده سازمانی می پردازد. هرچند مقطع دکترای فناوری اطلاعات در ایران ارایه نمی شود، اما انجام امور تحقیقاتی و دستیابی به نظریه های جدید از محورهای اصلی در این مقطع محسوب می شود.&lt;/div&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;strong&gt;● دروس رشته فناوری اطلاعات&lt;/strong&gt;&lt;/p&gt;\r\n&lt;div&gt;&amp;nbsp;مرور سرفصل دروس رشته فناوری اطلاعات نشان می دهد اجرای برخی اصول قانون اساسی در راستای سازمان دهی اطلاعات، چگونگی بهره برداری کیفی از داده ها و یکپارچه سازی و انتقال سریع آن ها از جمله محورهایی بوده که در تعیین دروس این رشته مدنظر قرار گرفته است.&lt;/div&gt;\r\n&lt;p&gt;&amp;nbsp;بر اساس این گزارش، رشته IT نیز مانند بسیاری رشته های دیگر دارای دروس پایه، اصلی، تخصصی و عمومی است. دروس پایه در مقطع کارشناسی معمولا شامل ریاضی، معادلات دیفرانسیل، آمار و احتمالات مهندسی، فیزیک و کارگاه عمومی است. دروس اصلی شامل ساختمان های گسسته، مبانی کامپیوتر و برنامه سازی، زبان ماشین و برنامه نویسی سیستم، ساختمان داده ها، مدارهای منطقی، معماری کامپیوتر، برنامه سازی پیشرفته، سیستم های عامل، پایگاه داده ها و طراحی الگوریتم هاست. همچنین مهندسی نرم افزار، شبکه های کامپیوتری، مبانی الکترونیک دیجیتال، هوش مصنوعی، اصول و مبانی مدیریت، مبانی اقتصاد مهندسی، آزمایشگاه شبکه، آزمایشگاه پایگاه داده ها، شیوه ارایه مطالب علمی و فنی، زبان تخصصی و آزمایشگاه سیستم عامل از دیگر دروس اصلی این رشته به شمار می رود.&lt;/p&gt;\r\n&lt;p&gt;در نهایت اینکه دروس تخصصی نیز به مبانی فناوری اطلاعات، مهندسی فناوری اطلاعات، تجارت الکترونیکی، مدیریت و کنترل پروژه های IT، برنامه ریزی استراتژیک IT، آموزش الکترونیکی، محیط های چندرسانه ای، پروژه IT و کارآموزی تقسیم می شود.&lt;/p&gt;', 23, NULL, '1396-04-08', NULL, NULL, NULL, 0, 0),
(20, 'مدیریت گروه', '&lt;p&gt;&lt;img src=&quot; ../uploads/pic/my pic.JPG&quot; alt=&quot;&quot; width=&quot;100&quot; height=&quot;100&quot; /&gt;&lt;/p&gt;\r\n&lt;p&gt;نام و نام خانوادگی : حمید روایی&lt;/p&gt;\r\n&lt;p&gt;email : &lt;a href=&quot;mailto:h.ravaei@sepagan.ac.ir&quot;&gt;h.ravaei@sepagan.ac.ir&lt;/a&gt;&lt;/p&gt;\r\n&lt;p&gt;داخلی : 131&lt;/p&gt;', 23, NULL, '1396-04-08', NULL, NULL, NULL, 1, 0),
(21, 'تست', 'سیبیسیبسی', 10, NULL, '1396-04-24', NULL, NULL, NULL, 1, 1),
(22, 'dasdasdsadsadsadsadsa asdasd', 'asdasdsadsad', 10, NULL, '1396-04-24', NULL, NULL, NULL, 1, 1);

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
  `menu_order` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name`, `top_id`, `menu_order`) VALUES
(8, 'درباره دانشگاه', NULL, 2),
(9, 'دانشکده ها', NULL, 3),
(10, 'آموزش', NULL, 4),
(11, 'امور پژوهشی', NULL, 5),
(12, 'امور دانشجویی', NULL, 6),
(13, 'امور مالی', NULL, 7),
(14, 'تحصیلات تکمیلی', NULL, 8),
(17, 'دانشگاه علوم و فناوری سپاهان', 8, 1),
(18, 'ریاست دانشگاه', 8, 2),
(19, 'هیات موسس', 8, 3),
(20, 'اعضای هیات علمی', 8, 4),
(21, 'فنی و مهندسی', 9, 1),
(22, 'علوم انسانی', 9, 2),
(23, 'مهندسی فناوری اطلاعات', 21, 1),
(24, 'مهندسی برق', 21, 2),
(25, 'مهندسی کامپیوتر', 21, 3),
(26, 'مهندسی عمران', 21, 3),
(27, 'مهندسی پزشکی', 21, 4),
(28, 'فرم ها', 14, 1),
(29, 'اطلاعیه ها', 14, 2);

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
(365);

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
