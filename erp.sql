-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2020 at 01:42 PM
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `posted_by` varchar(100) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_body` varchar(300) NOT NULL,
  `post_date` varchar(200) NOT NULL,
  `post_like` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `posted_by`, `post_title`, `post_body`, `post_date`, `post_like`) VALUES
(1, '2017BCA029', 'What is C?', 'C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, while a static type system prevents unintended operations.', '22/03/2020', 45),
(2, '2017BCA029', 'What is Java?', 'Java is a general-purpose programming language that is class-based, object-oriented, and designed to have as few implementation dependencies as possible', '23/03/2020', 43),
(3, '2017BCA029', 'What is Python?', 'Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace', '25/03/2020', 56);

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

DROP TABLE IF EXISTS `studentdata`;
CREATE TABLE IF NOT EXISTS `studentdata` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `loginId` varchar(100) NOT NULL,
  `courseId` varchar(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `emailID` varchar(100) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `session_from` varchar(100) NOT NULL,
  `session_to` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `loginId` (`loginId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`id`, `loginId`, `courseId`, `fname`, `lname`, `father`, `mother`, `emailID`, `mobile`, `dob`, `session_from`, `session_to`) VALUES
(1, '2017BCA029', 'BCA', 'Praveen', 'Kumar', 'Narendra Modi', 'Indra Gandhi', 'pkcool786@gmail.com', '7983294650', '15-03-1999', '2017', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdata`
--

DROP TABLE IF EXISTS `teacherdata`;
CREATE TABLE IF NOT EXISTS `teacherdata` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `loginId` varchar(200) NOT NULL,
  `courseId` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `loginId` (`loginId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherdata`
--

INSERT INTO `teacherdata` (`id`, `loginId`, `courseId`, `fname`, `lname`, `father`, `mother`, `email`, `mobile`) VALUES
(1, '2017BCA020', 'BCA', 'Divya', 'Tiwari', 'Sadiq Ansari', 'Komal Chaudhary', 'divyatiwari@erp.com', '7017226628');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `loginId`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, '2017BCA029', 'student', 'student'),
(3, '2017BCA020', 'teacher', 'teacher');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
