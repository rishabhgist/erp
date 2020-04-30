-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2020 at 07:54 AM
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `loginId` (`loginId`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `loginId`, `highschool_school`, `highschool_board`, `highschool_percent`, `inter_school`, `inter_board`, `inter_percent`, `grad_school`, `grad_board`, `grad_percent`) VALUES
(22, '2017BCA022', 'GT Public School', 'CBSE', '80', 'GT Public School', 'CBSE', '85', 'Dewan Institute of Managment Studies', 'CCSU', '70'),
(23, '2017BCA023', 'Godwin Public School', 'CBSE', '67', 'Godwin Public School', 'CBSE', '74', 'Dewan Institute of Management Studies', 'CCSU', '60'),
(24, '2017BCA024', 'Godwin Public School', 'CBSE', '81', 'Godwin Public School', 'CBSE', '90', 'Dewan Institute of Managment Studies', 'CCSU', '90');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `likes` int(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `likes`, `post_id`, `user_id`) VALUES
(9, 1, '23', '2017BCA022'),
(10, 1, '23', '2017BCA023'),
(15, 1, '22', '2017BCA022');

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
  `likes` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `posted_by`, `post_title`, `post_date`, `likes`, `status`) VALUES
(23, '2017BCA023', 'What are pointers?', '28/04/2020', '2', 'draft'),
(22, '2017BCA022', 'What is Variables?', '28/04/2020', '1', 'draft'),
(21, '2017BCA022', 'What is Recusion?', '28/04/2020', '0', 'draft'),
(20, '2017BCA022', 'What is Array ?', '28/04/2020', '0', 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `reply_by` varchar(100) NOT NULL,
  `reply` varchar(225) NOT NULL,
  `reply_date` varchar(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reply_by` (`reply_by`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `reply_by`, `reply`, `reply_date`, `post_id`) VALUES
(2, '2017BCA022', 'A pointer is a programming language object that stores a memory address. This can be that of another value located in computer memory, or in some cases, that of memory mapped computer hardware', '28/04/2020', '23');

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
  `session_from` varchar(100) DEFAULT NULL,
  `session_to` varchar(100) DEFAULT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `loginId` (`loginId`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `loginId`, `course`, `fname`, `lname`, `father`, `mother`, `email`, `mobile`, `dob`, `session_from`, `session_to`, `address1`, `address2`) VALUES
(4, '2017BCA025', 'BCA', 'Rishabh', 'Gist', 'Father', 'Mother', 'rishabhgist@gmail.com', '7983294650', '07-01-1999', '2017', '2020', 'B 61 Gokul Vihar ', 'Rohta Road Merrut'),
(22, '2017BCA022', 'BCA', 'Praveen', 'Kumar', 'Narendra Modi', 'Indra Gandhi', 'pkcool12@gmail.com', '8191225463', '26-10-2000', '2017', '2020', '12 Krishna Colony', 'Modipuram, Meerut'),
(23, '2017BCA023', 'BCA', 'Sadiq', 'Ansari', 'Jahangir Ali', 'Mumtaz', 'sadiq8193@gmail.com', '7017282266', '20-07-1999', '2017', '2020', 'Vill Post Shobhapur', 'Rohta Bypass, Meerut'),
(24, '2017BCA024', 'BCA', 'Rishabh', 'Gist', 'Chandeswar Prasad', 'Seema Devi', 'rishabhgist@gmail.com', '7983294650', '07-01-1999', '2017', '2020', 'B 61 Gokul Vihar', 'Rohta Road, Meerut');

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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `loginId`, `password`, `role`) VALUES
(21, 'admin', 'admin', 'admin'),
(24, '2017BCA024', '12345', 'student'),
(23, '2017BCA023', 'sadiq', 'student'),
(22, '2017BCA022', 'praveen', 'student');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
