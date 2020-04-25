-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2020 at 02:46 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `loginId`, `highschool_school`, `highschool_board`, `highschool_percent`, `inter_school`, `inter_board`, `inter_percent`, `grad_school`, `grad_board`, `grad_percent`) VALUES
(1, '2017BCA025', 'Godwin Public School', 'CBSE', '80', 'Godwin Public School', 'CBSE', '80', 'Dewan Institute of Management Studies', 'CBSE', '80'),
(11, '2017BBA010', 'Godwin Public School', 'CBSE', '80', 'Meerut Public School', 'CBSE', '70', 'Vidya Institute of Technology', 'CCSU', '80'),
(6, '2017BCA026', 'Godwin Public School', 'CBSE', '70', 'Godwin Public School', 'CBSE', '75', 'Dewan Institute of Managment Studies', 'CCSU', '80'),
(14, '2017BCA022', 'Subash Inter College', 'U P Board', '82', 'Modi Public School', 'CBSE', '80', 'MIET', 'AKTU', '72'),
(13, '2017BCA030', 'Meerut Public School', 'CBSE', '80', 'Godwin Public School', 'CBSE', '70', 'Vidya Institute of Technology', 'CSSU', '75');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `post_id` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `likes` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_id` (`post_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`, `likes`) VALUES
(5, '19', '2017BCA020', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `posted_by`, `post_title`, `post_date`, `likes`, `status`) VALUES
(17, '2017BCA029', 'What is 2D Array?', '24/04/2020', '', 'active'),
(16, '2017BCA029', 'What is RDBMS?', '22/04/2020', '', 'active'),
(15, '2017BCA029', 'What is Java?', '22/04/2020', '', 'active'),
(14, '2017BCA029', 'What is C?', '22/04/2020', '', 'active'),
(13, '2017BCA020', 'What is Array ?', '22/04/2020', '', 'active'),
(19, '2017BCA020', 'What is Recursion?', '25/04/2020', '0', 'draft');

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
  `session_from` varchar(100) DEFAULT NULL,
  `session_to` varchar(100) DEFAULT NULL,
  `address1` varchar(100) NOT NULL,
  `address2` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `loginId` (`loginId`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `loginId`, `course`, `fname`, `lname`, `father`, `mother`, `email`, `mobile`, `dob`, `session_from`, `session_to`, `address1`, `address2`) VALUES
(1, '2017BCA029', 'BCA', 'Praveen', 'Kumar', 'Narendra Modi', 'Indra Gandhi', 'pkcool786@gmail.com', '7983294650', '15-03-1999', '2017', '2020', '0', '0'),
(2, '2017BCA020', 'BCA', 'Divya', 'Tiwari', 'Sadiq Ansari', 'Komal Chaudhary', 'divyatiwari@erp.com', '7017282266', '17-03-1993', '', '', '0', '0'),
(4, '2017BCA025', 'BCA', 'Rishabh', 'Gist', 'Father', 'Mother', 'rishabhgist@gmail.com', '7983294650', '07-01-1999', '2017', '2020', 'B 61 Gokul Vihar ', 'Rohta Road Merrut'),
(5, '2017BCA026', 'BCA', 'Sadiq', 'Ansari', 'Jahangir', 'Mother', 'sadiq8193@gmail.com', '7983294650', '22-07-2000', '2017', '2020', 'Vill Shobhapur ', 'Rohta Road, Meerut'),
(6, '2017BCA030', 'BCA', 'Abhishek', 'Bhardwaj', 'Bijender', 'Suman', 'abhishekbhar@gmail.com', '9026771213', '18-10-1999', '2017', '2020', '132 Krishna Colony, Fazalpur', 'Rohta Road, Meerut'),
(7, '2017BCA022', 'BCA', 'Mukesh', 'Verma', 'Jignesh Verma', 'Sunita Verma', 'mukeshverma@hotmail.com', '7080125463', '26-03-1976', '', '', '14 A Sushant City', 'Rohta Road, Meerut');

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
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `loginId`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(29, '2017BCA029', 'student', 'student'),
(20, '2017BCA020', 'teacher', 'teacher'),
(26, '2017BCA026', '2892', 'student'),
(30, '2017BCA030', '2065', 'student'),
(31, '2017BCA022', '3777', 'teacher');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
