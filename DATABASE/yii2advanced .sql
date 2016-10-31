-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2016 at 12:04 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registrar_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE IF NOT EXISTS `academic_year` (
  `id` int(11) NOT NULL,
  `School_Year` varchar(9) NOT NULL,
  `acad_year_start` date NOT NULL,
  `acad_year_end` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`id`, `School_Year`, `acad_year_start`, `acad_year_end`) VALUES
(4, '2016-2017', '2016-01-05', '2017-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('add section', '4', NULL),
('registrar', '5', NULL),
('student', '6', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('add academic year', 9, 'allowed to add academic year', NULL, NULL, NULL, NULL),
('add employee', 2, 'allowed to add employee', NULL, NULL, NULL, NULL),
('add job', 4, 'allowed to add job', NULL, NULL, NULL, NULL),
('add quarter', 5, 'allowed to add quarter', NULL, NULL, NULL, NULL),
('add schedule', 6, 'allowed to add schedule', NULL, NULL, NULL, NULL),
('add section', 7, 'allowed to add section', NULL, NULL, NULL, NULL),
('add student', 1, 'allowed to add student', NULL, NULL, NULL, NULL),
('add subject', 8, 'allowed to add subject', NULL, NULL, NULL, NULL),
('department_head', 11, 'dept.head can add schedule', NULL, NULL, NULL, NULL),
('HR', 14, 'HR can add job and employee', NULL, NULL, NULL, NULL),
('registrar', 10, 'registrar can add schedule, quarter, student,and section.', NULL, NULL, NULL, NULL),
('student', 13, 'student can view only', NULL, NULL, NULL, NULL),
('teacher', 12, 'teacher can add grade,', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('HR', 'add employee'),
('HR', 'add job'),
('registrar', 'add quarter'),
('department_head', 'add schedule'),
('registrar', 'add schedule'),
('registrar', 'add section'),
('registrar', 'add student'),
('registrar', 'add subject');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `emp_id_num` int(11) NOT NULL,
  `emp_job` int(11) NOT NULL,
  `emp_fname` varchar(60) NOT NULL,
  `emp_lname` varchar(60) NOT NULL,
  `emp_mname` varchar(60) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_id_num`, `emp_job`, `emp_fname`, `emp_lname`, `emp_mname`, `email`, `contact_number`) VALUES
(1, 2014100300, 3, 'Aaron', 'Dagatan', 'Cadpa ', 'aaron@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `id` int(11) NOT NULL,
  `acad_year_id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `quarter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id` int(11) NOT NULL,
  `job_description` varchar(35) NOT NULL,
  `job_definition` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `job_description`, `job_definition`) VALUES
(1, 'Registrar', NULL),
(2, 'Principal', NULL),
(3, 'Teacher', NULL),
(4, 'Department Head', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1471607180),
('m130524_201442_init', 1471607185);

-- --------------------------------------------------------

--
-- Table structure for table `quarter`
--

CREATE TABLE IF NOT EXISTS `quarter` (
  `id` int(11) NOT NULL,
  `School_Year` int(11) NOT NULL,
  `quarter` int(11) NOT NULL,
  `quarter_start` date NOT NULL,
  `quarter_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `sub_time_start` int(11) NOT NULL,
  `sub_time_end` int(11) NOT NULL,
  `teach_id` int(11) NOT NULL,
  `acad_year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL,
  `sec_name` varchar(35) NOT NULL,
  `advise_emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_schedule`
--

CREATE TABLE IF NOT EXISTS `section_schedule` (
  `id` int(11) NOT NULL,
  `section_name` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `subject_time_start` int(11) NOT NULL,
  `subject_time_end` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_student`
--

CREATE TABLE IF NOT EXISTS `section_student` (
  `id` int(11) NOT NULL,
  `section_name` int(11) NOT NULL,
  `section_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `stud_id_num` int(11) NOT NULL,
  `stud_fname` varchar(64) NOT NULL,
  `stud_lname` varchar(64) NOT NULL,
  `stud_mname` varchar(64) DEFAULT NULL,
  `home_number` varchar(70) NOT NULL,
  `city_name` varchar(64) NOT NULL,
  `province` varchar(64) NOT NULL,
  `zip_code` int(4) NOT NULL,
  `birthdate` date NOT NULL,
  `religion` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mothers_name` varchar(64) DEFAULT NULL,
  `fathers_name` varchar(64) DEFAULT NULL,
  `guardians_name` varchar(64) NOT NULL,
  `mothers_contact_number` int(11) DEFAULT NULL,
  `fathers_contact_number` int(11) DEFAULT NULL,
  `guardians_contact_number` int(11) NOT NULL,
  `birth_place` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL,
  `sub_name` varchar(35) NOT NULL,
  `subject_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `id` int(11) NOT NULL,
  `time` time(5) NOT NULL DEFAULT '00:00:00.00000'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `time`) VALUES
(3, '07:30:00.00000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `permission`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(4, 'odabalon', '3D62-ROIetdzJbDapRJWUbuwAh3u16fN', '$2y$13$YO8mJ0DDUaOgUqxBZruhcevMbLx0gTTX0HhoFAjguUgtl/9hyZVM2', '', NULL, 'odabalon@student.apc.edu.ph', 10, 1477217057, 1477217057),
(5, 'nrcueto', 'Q9H6XJy0YxuwLR52DPl1MT9blEItGOSx', '$2y$13$j8R/F0ODaNCh.nZ.7m.dF.5dB1M20ud13wwErWhg5RYuYSIxXKQt6', '', NULL, 'nrcueto@gmail.com', 10, 1477263960, 1477263960),
(6, 'rcdagatan', 'n3LEIEqTzm-6ysS835IgoHBsFwlwgbDp', '$2y$13$QOPrStvSh6V.0EF/i9X99u6SRRvvLZkEnu8BqrhGW2tWp8hs5fi.u', '', NULL, 'rcdagatan@gmail.com', 10, 1477266616, 1477266616);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`), ADD KEY `emp_job` (`emp_job`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`), ADD KEY `acad_year_id` (`acad_year_id`), ADD KEY `stud_id` (`stud_id`), ADD KEY `emp_id` (`emp_id`), ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `quarter`
--
ALTER TABLE `quarter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`), ADD KEY `sub_id` (`sub_id`), ADD KEY `acad_year_id` (`acad_year_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`), ADD KEY `advise_emp_id` (`advise_emp_id`);

--
-- Indexes for table `section_schedule`
--
ALTER TABLE `section_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_student`
--
ALTER TABLE `section_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `quarter`
--
ALTER TABLE `quarter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `section_schedule`
--
ALTER TABLE `section_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `section_student`
--
ALTER TABLE `section_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`emp_job`) REFERENCES `job` (`id`);

--
-- Constraints for table `grade`
--
ALTER TABLE `grade`
ADD CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`acad_year_id`) REFERENCES `academic_year` (`id`),
ADD CONSTRAINT `grade_ibfk_2` FOREIGN KEY (`stud_id`) REFERENCES `student` (`id`),
ADD CONSTRAINT `grade_ibfk_3` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`),
ADD CONSTRAINT `grade_ibfk_4` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`id`),
ADD CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`acad_year_id`) REFERENCES `academic_year` (`id`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`advise_emp_id`) REFERENCES `employee` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
