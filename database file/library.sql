-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 07:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` char(2) NOT NULL DEFAULT 'Ac',
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `lastname`, `username`, `password`, `status`, `role_id`) VALUES
(2, 'مدیر', 'کتابخانه', 'test', 'test', 'Ac', 1);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `discreption` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` char(2) NOT NULL DEFAULT 'Ac'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `bookname`, `author`, `amount`, `discreption`, `category_id`, `status`) VALUES
(1, 'پی اچ پی مقدماتی', 'jan alex', 12, 'بدون تفصیلات', 1, 'Ac');

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` char(2) NOT NULL DEFAULT 'Ac'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id`, `name`, `status`) VALUES
(1, 'تکنالوجی', 'Ac'),
(2, 'ساینس', 'Ac');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` char(2) NOT NULL DEFAULT 'Ac'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `status`) VALUES
(1, 'ستوماتولوژی', 'Ac'),
(2, 'حقوق', 'Ac'),
(3, 'کامپیوتر ساینس', 'Ac');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `issue_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date DEFAULT NULL,
  `state` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`issue_id`, `book_id`, `member_id`, `issue_date`, `return_date`, `state`) VALUES
(1, 1, 1, '2021-04-23', '2021-04-23', '1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `issue_report`
-- (See below for the actual view)
--
CREATE TABLE `issue_report` (
`member_id` int(11)
,`member_name` varchar(50)
,`member_lastname` varchar(50)
,`member_descreption` text
,`member_mobile` varchar(15)
,`member_gender` char(1)
,`member_semester` varchar(3)
,`member_faculty_id` int(11)
,`member_faculty_name` varchar(100)
,`book_id` int(11)
,`book_name` varchar(100)
,`book_author` varchar(100)
,`book_amount` int(11)
,`book_discreption` text
,`book_cat` varchar(50)
,`book_catid` int(11)
,`issue_date` date
,`return_date` varchar(25)
,`issue_state` char(1)
,`issue_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `list_admins`
-- (See below for the actual view)
--
CREATE TABLE `list_admins` (
`ad_id` int(11)
,`ad_name` varchar(50)
,`ad_lastname` varchar(50)
,`ad_username` varchar(50)
,`ad_password` varchar(50)
,`ad_status` char(2)
,`role` varchar(50)
,`role_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `list_books`
-- (See below for the actual view)
--
CREATE TABLE `list_books` (
`book_id` int(11)
,`book_name` varchar(100)
,`book_author` varchar(100)
,`book_amount` int(11)
,`book_discreption` text
,`book_status` char(2)
,`category` varchar(50)
,`cat_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `list_members`
-- (See below for the actual view)
--
CREATE TABLE `list_members` (
`m_id` int(11)
,`m_name` varchar(50)
,`m_lastname` varchar(50)
,`m_disc` text
,`m_mobile` varchar(15)
,`m_gender` char(1)
,`m_semester` varchar(3)
,`fac_id` int(11)
,`fac_name` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `descreption` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gender` char(1) NOT NULL,
  `semester` varchar(3) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `status` char(2) NOT NULL DEFAULT 'Ac'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `lastname`, `descreption`, `mobile`, `gender`, `semester`, `faculty_id`, `status`) VALUES
(1, 'Morteza', 'Gh', '', '0795457510', '1', '8', 3, 'Ac');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `status` char(2) NOT NULL DEFAULT 'Ac'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`, `status`) VALUES
(1, 'ادمین', 'Ac');

-- --------------------------------------------------------

--
-- Structure for view `issue_report`
--
DROP TABLE IF EXISTS `issue_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `issue_report`  AS  select `lm`.`m_id` AS `member_id`,`lm`.`m_name` AS `member_name`,`lm`.`m_lastname` AS `member_lastname`,`lm`.`m_disc` AS `member_descreption`,`lm`.`m_mobile` AS `member_mobile`,`lm`.`m_gender` AS `member_gender`,`lm`.`m_semester` AS `member_semester`,`lm`.`fac_id` AS `member_faculty_id`,`lm`.`fac_name` AS `member_faculty_name`,`b`.`book_id` AS `book_id`,`b`.`book_name` AS `book_name`,`b`.`book_author` AS `book_author`,`b`.`book_amount` AS `book_amount`,`b`.`book_discreption` AS `book_discreption`,`b`.`category` AS `book_cat`,`b`.`cat_id` AS `book_catid`,`ib`.`issue_date` AS `issue_date`,ifnull(`ib`.`return_date`,'هنوز تحویل داده نشده است!') AS `return_date`,`ib`.`state` AS `issue_state`,`ib`.`issue_id` AS `issue_id` from ((`list_members` `lm` join `issue_book` `ib` on(`lm`.`m_id` = `ib`.`member_id`)) join `list_books` `b` on(`b`.`book_id` = `ib`.`book_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `list_admins`
--
DROP TABLE IF EXISTS `list_admins`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_admins`  AS  select `ad`.`id` AS `ad_id`,`ad`.`name` AS `ad_name`,`ad`.`lastname` AS `ad_lastname`,`ad`.`username` AS `ad_username`,`ad`.`password` AS `ad_password`,`ad`.`status` AS `ad_status`,`r`.`role_name` AS `role`,`r`.`id` AS `role_id` from (`admin` `ad` join `role` `r` on(`ad`.`role_id` = `r`.`id` and `ad`.`status` = 'Ac')) ;

-- --------------------------------------------------------

--
-- Structure for view `list_books`
--
DROP TABLE IF EXISTS `list_books`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_books`  AS  select `b`.`id` AS `book_id`,`b`.`bookname` AS `book_name`,`b`.`author` AS `book_author`,`b`.`amount` AS `book_amount`,`b`.`discreption` AS `book_discreption`,`b`.`status` AS `book_status`,`bc`.`name` AS `category`,`bc`.`id` AS `cat_id` from (`book` `b` join `book_category` `bc` on(`b`.`category_id` = `bc`.`id` and `b`.`status` = 'Ac')) ;

-- --------------------------------------------------------

--
-- Structure for view `list_members`
--
DROP TABLE IF EXISTS `list_members`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_members`  AS  select `m`.`id` AS `m_id`,`m`.`name` AS `m_name`,`m`.`lastname` AS `m_lastname`,`m`.`descreption` AS `m_disc`,`m`.`mobile` AS `m_mobile`,`m`.`gender` AS `m_gender`,`m`.`semester` AS `m_semester`,`f`.`id` AS `fac_id`,`f`.`name` AS `fac_name` from (`member` `m` join `faculty` `f` on(`m`.`faculty_id` = `f`.`id` and `m`.`status` = 'Ac')) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bookname` (`bookname`),
  ADD KEY `bookname_2` (`bookname`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD PRIMARY KEY (`issue_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `issue_book`
--
ALTER TABLE `issue_book`
  MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `book_category` (`id`);

--
-- Constraints for table `issue_book`
--
ALTER TABLE `issue_book`
  ADD CONSTRAINT `issue_book_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `issue_book_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
