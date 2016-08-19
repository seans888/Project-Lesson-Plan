-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2016 at 07:16 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE IF NOT EXISTS `academic_year` (
  `id` int(11) NOT NULL,
  `acad_year_start` date NOT NULL,
  `acad_year_end` date NOT NULL,
  `quart1_start_period` date NOT NULL,
  `quart1_end_period` date NOT NULL,
  `quart2_start_period` date NOT NULL,
  `quart2_end_period` date NOT NULL,
  `quart3_start_period` date NOT NULL,
  `quart3_end_period` date NOT NULL,
  `quart4_start_period` date NOT NULL,
  `quart14_end_period` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `emp_id_num` int(11) NOT NULL,
  `emp_job` int(11) NOT NULL,
  `emp_fname` int(11) NOT NULL,
  `emp_lname` int(11) NOT NULL,
  `emp_mname` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id` int(11) NOT NULL,
  `job_description` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
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
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `stud_id_num` int(11) NOT NULL,
  `stud_fname` varchar(35) NOT NULL,
  `stud_lname` varchar(35) NOT NULL,
  `stud_mname` varchar(35) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL,
  `sub_name` varchar(35) NOT NULL,
  `teach_emp_id` int(11) NOT NULL,
  `sub_time` time NOT NULL,
  `sub_class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`), ADD KEY `sub_id` (`sub_id`), ADD KEY `sec_id` (`sec_id`), ADD KEY `acad_year_id` (`acad_year_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`), ADD KEY `advise_emp_id` (`advise_emp_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`), ADD KEY `sec_id` (`sec_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`), ADD KEY `teach_emp_id` (`teach_emp_id`), ADD KEY `sub_class_id` (`sub_class_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
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
-- Constraints for dumped tables
--

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
ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`sec_id`) REFERENCES `section` (`id`),
ADD CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`acad_year_id`) REFERENCES `academic_year` (`id`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`advise_emp_id`) REFERENCES `employee` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`sec_id`) REFERENCES `section` (`id`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`teach_emp_id`) REFERENCES `employee` (`id`),
ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`sub_class_id`) REFERENCES `section` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
