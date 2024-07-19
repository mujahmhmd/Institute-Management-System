-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2023 at 06:27 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` varchar(10) NOT NULL DEFAULT 'admin' COMMENT 'Admin Username',
  `password` varchar(10) NOT NULL DEFAULT '1234' COMMENT 'Admin Password',
  PRIMARY KEY (`username`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `storeappexam`
--

DROP TABLE IF EXISTS `storeappexam`;
CREATE TABLE IF NOT EXISTS `storeappexam` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(20) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `course` varchar(10) NOT NULL,
  `semester` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nic` (`nic`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `storeappexam`
--

INSERT INTO `storeappexam` (`id`, `fullname`, `reg`, `nic`, `email`, `course`, `semester`) VALUES
(1, 'Mujahith', '7', '200007703960', 'mujahithmohamed59@gmail.com', 'HNDIT', '2nd Year 1st Semester');

-- --------------------------------------------------------

--
-- Table structure for table `store_ann`
--

DROP TABLE IF EXISTS `store_ann`;
CREATE TABLE IF NOT EXISTS `store_ann` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `desc1` varchar(150) NOT NULL,
  `date1` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tittle` (`title`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `store_ann`
--

INSERT INTO `store_ann` (`id`, `title`, `desc1`, `date1`) VALUES
(1, 'Result Released', 'Hi, HNDIT 1s year students your 1st year 1st semester examination results released. please check you details through our website.', '2022-11-27 04:43:08'),
(2, 'Please apply 3rd semester examination', 'please apply your 3rd semester examination application before 22nd dec 2022.', '2022-12-18 17:49:45');

-- --------------------------------------------------------

--
-- Table structure for table `store_assignment`
--

DROP TABLE IF EXISTS `store_assignment`;
CREATE TABLE IF NOT EXISTS `store_assignment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course` varchar(20) NOT NULL,
  `semester` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `subject1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deadline` date NOT NULL,
  `ass` varchar(100) NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `store_assignment`
--

INSERT INTO `store_assignment` (`id`, `course`, `semester`, `subject1`, `deadline`, `ass`, `cdate`) VALUES
(5, 'HNDIT', '1st Year 2nd Semester', 'WD', '2022-12-13', 'https://translate.google.com/', '2022-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `store_timetable`
--

DROP TABLE IF EXISTS `store_timetable`;
CREATE TABLE IF NOT EXISTS `store_timetable` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course` varchar(20) NOT NULL,
  `stime` varchar(6) NOT NULL,
  `etime` varchar(6) NOT NULL,
  `day1` text NOT NULL,
  `year1` varchar(30) NOT NULL,
  `subject1` varchar(20) NOT NULL,
  `lname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `store_timetable`
--

INSERT INTO `store_timetable` (`id`, `course`, `stime`, `etime`, `day1`, `year1`, `subject1`, `lname`) VALUES
(10, 'HNDIT', '13:35', '14:35', 'Tuesday', '1st Year 2nd Semester', 'English', '3'),
(9, 'HNDIT', '08:35', '10:35', 'Monday', '1st Year 1st Semester', 'PM', '2');

-- --------------------------------------------------------

--
-- Table structure for table `stu_reg`
--

DROP TABLE IF EXISTS `stu_reg`;
CREATE TABLE IF NOT EXISTS `stu_reg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `regno` varchar(20) NOT NULL,
  `emailadd` varchar(30) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password1` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `year1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nic` (`nic`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stu_reg`
--

INSERT INTO `stu_reg` (`id`, `fullname`, `regno`, `emailadd`, `nic`, `username`, `password1`, `cpassword`, `course`, `year1`) VALUES
(7, 'Mujahith', 'TRI/IT/22', 'mujahithmohamed59@gmail.com', '200007703960', 'mujah', '1234', '1234', 'HNDIT', '2nd Year 1st Semester'),
(9, 'safras', 'TRI/IT/0019', 'safras12@gmail.com', '199933911851', 'sappu', '1234', '1234', 'HNDE', '1st Year 2nd Semester'),
(10, 'shaamil', 'TRI/IT/0012', 'sha12@gmail.com', '199850003456', 'sha', '1234', '1234', 'HNDIT', '2nd Year 2nd Semester'),
(11, 'senior', 'TRI/IT/0088', 'mujahithmohamed45@gmail.com', '199850003458', 'senior', '1234', '1234', 'HNDIT', '2nd Year 2nd Semester');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

DROP TABLE IF EXISTS `teacher_login`;
CREATE TABLE IF NOT EXISTS `teacher_login` (
  `username` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'lecturer',
  `password` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '1234',
  PRIMARY KEY (`username`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`username`, `password`) VALUES
('lecturer', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_reg`
--

DROP TABLE IF EXISTS `teacher_reg`;
CREATE TABLE IF NOT EXISTS `teacher_reg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `pno` int NOT NULL,
  `address1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teacher_reg`
--

INSERT INTO `teacher_reg` (`id`, `fullname`, `nic`, `pno`, `address1`, `email`, `subject1`, `gender`) VALUES
(1, 'Mayooran', '861225532V', 770708437, 'Trinco', 'mayoo45@gmail.com', 'RAD', 'Male'),
(2, 'Sazna', '986563113V', 754869365, 'Mutur', 'sasi1998@gmail.com', 'PM', 'Female'),
(3, 'T.Selvan', '861589622V', 764698652, 'Trinco', 'tselvan86@gmail.com', 'English', 'Male'),
(4, 'Kumara', '854789652V', 789659652, 'Badulla', 'kumara85@gmail.com', 'Accounting', 'Male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
