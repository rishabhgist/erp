-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 17, 2020 at 06:01 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginId` varchar(100) NOT NULL,
  `highschool_school` varchar(100) NOT NULL,
  `highschool_board` varchar(100) NOT NULL,
  `highschool_percent` varchar(100) NOT NULL,
  `inter_school` varchar(100) NOT NULL,
  `inter_board` varchar(100) NOT NULL,
  `inter_percent` varchar(100) NOT NULL,
  `grad_school` varchar(100) NOT NULL,
  `grad_board` varchar(100) NOT NULL,
  `grad_percent` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `loginId`, `highschool_school`, `highschool_board`, `highschool_percent`, `inter_school`, `inter_board`, `inter_percent`, `grad_school`, `grad_board`, `grad_percent`) VALUES
(1, '2017BCA025', 'Godwin Public School', 'CBSE', '80', 'Godwin Public School', 'CBSE', '80', 'Dewan Institute of Management Studies', 'CBSE', '80'),
(6, '2017BCA026', 'Godwin Public School', 'CBSE', '70', 'Godwin Public School', 'CBSE', '75', 'Dewan Institute of Managment Studies', 'CCSU', '80');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `posted_by` varchar(100) DEFAULT NULL,
  `post_title` varchar(100) DEFAULT NULL,
  `post_date` varchar(200) DEFAULT NULL,
  `post_like` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `posted_by`, `post_title`, `post_date`, `post_like`) VALUES
(1, '2017BCA029', 'What is C?', '22/03/2020', 45),
(2, '2017BCA029', 'What is Java?', '23/03/2020', 43),
(3, '2017BCA029', 'What is Python?', '25/03/2020', 56),
(10, '2017BCA029', 'What is Ruby?', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reply_by` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL,
  `reply_date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reply_by` (`reply_by`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `subject_one` varchar(100) NOT NULL,
  `subject_two` varchar(100) NOT NULL,
  `subject_three` varchar(100) NOT NULL,
  `subject_four` varchar(100) NOT NULL,
  `subject_five` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `subject_one`, `subject_two`, `subject_three`, `subject_four`, `subject_five`) VALUES
(1, 'Maths', 'Business Studies', 'POM', 'C Language', 'Lab'),
(2, 'Maths', 'C Language', 'Business Studies', 'Business Studies', 'POM');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `loginId` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `session_from` varchar(100) NOT NULL,
  `session_to` varchar(100) NOT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `loginId` (`loginId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `loginId`, `course`, `fname`, `lname`, `father`, `mother`, `email`, `mobile`, `dob`, `session_from`, `session_to`, `address1`, `address2`) VALUES
(1, '2017BCA029', 'BCA', 'Praveen', 'Kumar', 'Narendra Modi', 'Indra Gandhi', 'pkcool786@gmail.com', '7983294650', '15-03-1999', '2017', '2020', '0', '0'),
(2, '2017BCA020', 'BCA', 'Divya', 'Tiwari', 'Sadiq Ansari', 'Komal Chaudhary', 'divyatiwari@erp.com', '7017282266', '17-03-1993', '', '', '0', '0'),
(4, '2017BCA025', 'BCA', 'Rishabh', 'Gist', 'Father', 'Mother', 'rishabhgist@gmail.com', '7983294650', '07-01-1999', '2017', '2020', 'B 61 Gokul Vihar ', 'Rohta Road Merrut'),
(5, '2017BCA026', 'BCA', 'Sadiq', 'Ansari', 'Jahangir', 'Mother', 'sadiq8193@gmail.com', '7983294650', '22-07-2000', '2017', '2020', 'Vill Shobhapur ', 'Rohta Road, Meerut');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `loginId` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `loginId` (`loginId`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `loginId`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, '2017BCA029', 'student', 'student'),
(3, '2017BCA020', 'teacher', 'teacher'),
(11, '2017BCA026', '2892', 'student'),
(10, '2017BCA025', '2065', 'student');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
