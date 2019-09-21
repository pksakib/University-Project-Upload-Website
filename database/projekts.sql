-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 12:34 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekts`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_project`
--

CREATE TABLE `academic_project` (
  `academic_project_id` int(11) NOT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `project_description` varchar(300) DEFAULT NULL,
  `course_name` varchar(300) DEFAULT NULL,
  `course_code` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_project`
--

INSERT INTO `academic_project` (`academic_project_id`, `project_name`, `project_description`, `course_name`, `course_code`, `status`, `date`, `user_id`) VALUES
(10, 'DNA TESTER', 'It can test dna.', 'BioInformatics', 'BIO311', NULL, NULL, 14),
(11, 'all set of network', 'it is nothing ', 'network', 'cse-420', NULL, NULL, 14),
(12, 'PROJECT DATABASE', 'This is our project for web engg. ', 'WEB ENGINEERING', 'CSE-300', NULL, NULL, 15),
(13, 'teaching', 'I love to teach students.', 'WEB ENGINEERING', 'CSE-000', NULL, NULL, 14);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `non_academic_project`
--

CREATE TABLE `non_academic_project` (
  `non_academic_project_id` int(11) NOT NULL,
  `project_name` varchar(20) DEFAULT NULL,
  `project_description` varchar(300) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `non_academic_project`
--

INSERT INTO `non_academic_project` (`non_academic_project_id`, `project_name`, `project_description`, `date`, `status`, `user_id`) VALUES
(5, 'WEB ', 'aaaaaaaaaaa', NULL, NULL, 14),
(6, 'teaching', 'I love to teach students.', NULL, NULL, 15),
(7, 'zxzxz', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL, 15);

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `technology_id` int(11) NOT NULL,
  `technology_name` varchar(10) DEFAULT NULL,
  `technology_description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`technology_id`, `technology_name`, `technology_description`) VALUES
(7, 'android', NULL),
(8, 'PHP HTML C', NULL),
(9, 'database', NULL),
(10, 'android', NULL),
(11, 'dfghjjjjjj', NULL),
(12, 'PHP HTML C', NULL),
(13, 'php', NULL),
(14, 'database', NULL),
(15, 'database', NULL),
(16, 'python', NULL),
(17, 'database', NULL),
(18, 'html css p', NULL),
(19, 'database,p', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `name`) VALUES
(14, 'pksakib', '12345', 'pksakib@gmail.com', 'Sakib Chowdhury'),
(15, 'mam', '1', 'nothing@gmail.com', 'Oushneek Mam'),
(16, 's', '1', 'sirat@s', 'Sirat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_project`
--
ALTER TABLE `academic_project`
  ADD PRIMARY KEY (`academic_project_id`),
  ADD KEY `user_academic_project_fk` (`user_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `non_academic_project`
--
ALTER TABLE `non_academic_project`
  ADD PRIMARY KEY (`non_academic_project_id`),
  ADD KEY `user_non_academic_project_fk` (`user_id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`technology_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_project`
--
ALTER TABLE `academic_project`
  MODIFY `academic_project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `non_academic_project`
--
ALTER TABLE `non_academic_project`
  MODIFY `non_academic_project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `technology_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_project`
--
ALTER TABLE `academic_project`
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `non_academic_project`
--
ALTER TABLE `non_academic_project`
  ADD CONSTRAINT `user_non_academic_project_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
