-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2021 at 08:20 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_subscription`
--

CREATE TABLE `course_subscription` (
  `id` int NOT NULL,
  `student_id` int NOT NULL,
  `course_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course_subscription`
--

INSERT INTO `course_subscription` (`id`, `student_id`, `course_id`) VALUES
(6, 4, 7),
(7, 3, 6),
(8, 6, 7),
(9, 5, 8),
(10, 5, 7),
(11, 3, 7),
(12, 3, 7),
(13, 3, 7),
(16, 4, 7),
(17, 3, 8),
(19, 7, 9),
(20, 6, 7),
(21, 6, 8),
(22, 6, 9),
(23, 6, 10),
(24, 7, 11),
(25, 8, 7),
(26, 9, 8),
(27, 9, 9),
(28, 10, 10),
(29, 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `id` int NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `course_name`, `course_detail`) VALUES
(6, 'php', 'asdsdssdfds'),
(7, 'java', 'sds'),
(8, 'c', 'dsds'),
(9, 'c++', 'sdsa'),
(10, 'sas', 'dss'),
(11, 'c++', 'sdsa'),
(12, 'sas', 'dss'),
(13, 'c++', 'sdsa'),
(14, 'sas', 'dss'),
(15, 'c++', 'sdsa'),
(16, 'sas', 'dss'),
(17, 'c++', 'sdsa'),
(18, 'sas', 'dss'),
(19, 'c++', 'sdsa'),
(20, 'sas', 'dss'),
(21, 'c++', 'sdsa'),
(22, 'sas', 'dss'),
(23, 'c++', 'sdsa'),
(24, 'sas', 'dss'),
(25, 'c++', 'sdsa'),
(26, 'sas', 'dss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `first_name`, `last_name`, `dob`, `contact_no`) VALUES
(3, 'karan', 'soni', '2021-02-09', '999990000'),
(4, 'akash', '0', '2021-02-16', '9999999999'),
(5, 'rahul', '0', '2021-02-09', '9999999999'),
(6, 'jaidep ', '0', '2021-02-18', '88886666'),
(7, 'dsf', '0', '2021-02-10', '888557744'),
(8, 'dsf', '0', '2021-02-10', '33'),
(9, 'dsf', '0', '2021-02-10', '33'),
(10, 'dsf', 'ds', '2021-02-10', '33'),
(11, 'dsf', 'ds', '2021-02-10', '33'),
(12, 'dsf', 'ds', '2021-02-10', '33'),
(13, 'dsf', 'ds', '2021-02-10', '33'),
(14, 'dsf', 'ds', '2021-02-10', '33'),
(15, 'dsf', 'ds', '2021-02-10', '33'),
(16, 'dsf', 'ds', '2021-02-10', '33'),
(17, 'dsf', 'ds', '2021-02-10', '33'),
(18, 'dsf', 'ds', '2021-02-10', '33'),
(19, 'dsf', 'ds', '2021-02-10', '33'),
(20, 'Test', '0', '2021-02-26', '777555000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_subscription`
--
ALTER TABLE `course_subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_subscription`
--
ALTER TABLE `course_subscription`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
