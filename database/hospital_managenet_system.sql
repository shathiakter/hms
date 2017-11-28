-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 11:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_managenet_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_mobile_no` int(15) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(40) NOT NULL,
  `type` enum('1stadmin','Others','','') NOT NULL,
  `gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_mobile_no`, `admin_address`, `admin_email`, `admin_password`, `type`, `gender`) VALUES
(2, 'Tanim', 0, '', '', 'tigger', '', ''),
(3, 'Tanim', 214, 'fgfg', '', 'tigger', '', ''),
(4, 'Tanim', 214, 'jhjh', '', 'tigger', '', ''),
(9, 'sfd', 213, 'ddff', 'e@gmail.com', '1223', '1stadmin', 'male'),
(10, 'thhhhg', 132646, 'huu', 'lpo@gmail.com', 'lpok', 'Others', 'male'),
(11, 'Tanim', 214, 'fdfdf', 'e@gmail.com', 'tigger', '1stadmin', 'male'),
(12, 'thhhhg', 214, 'sd', 'gth@gmail.com', 'tigger', '1stadmin', 'male'),
(13, 'thhhhg', 214, 'sfsf', 'gth@gmail.com', 'tigger', '1stadmin', 'male'),
(14, 'thhhhg', 214, 'dff', 'gth@gmail.com', 'tigger', '1stadmin', 'male'),
(15, 'toq', 121, 'ddfd', 'e@gmail.com', '0000', 'Others', 'female'),
(16, '', 0, '', '', '', '', ''),
(17, 'fgerge', 0, 'retre', 'erte', 'et', '1stadmin', 'male'),
(18, 'shathi', 1940172293, 'mirpur', 'shathi@gmail.com', '123', '1stadmin', 'male'),
(19, 'mou', 1940172294, 'comila', 'mou@gmail.com', '1234', 'Others', 'female'),
(20, '', 0, '', '', '', '', ''),
(21, 'amin', 1940172297, 'dhaka', 'amin@gmail.com', '987', '1stadmin', 'male'),
(26, '', 0, '', '', '', '', ''),
(27, '', 0, '', '', '', '', ''),
(28, '', 0, '', '', '', '', 'female'),
(29, '', 0, '', '', '', '', ''),
(30, '', 0, '', '', '', '', ''),
(31, '', 0, '', '', '', '', ''),
(32, '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(255) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_age` varchar(100) NOT NULL,
  `patient_gender` enum('male','female') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `doctor_name`, `patient_name`, `patient_age`, `patient_gender`, `date`) VALUES
(1, 'sds', 'sdds', '34', 'male', '2017-04-07 08:00:00'),
(3, 'kudus', 'lucky', '22', 'female', '2017-04-14 08:00:00'),
(4, 'kudus', 'lucky', '22', 'female', '2017-04-14 08:00:00'),
(5, 'kudus', 'lucky', '22', 'female', '2017-04-14 08:00:00'),
(7, '', '', '', '', '0000-00-00 00:00:00'),
(8, '', '', '', '', '0000-00-00 00:00:00'),
(9, '', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `department_discription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `doctor_mobile_no` int(15) NOT NULL,
  `doctor_address` varchar(100) NOT NULL,
  `doctor_email` varchar(100) NOT NULL,
  `doctor_password` varchar(40) NOT NULL,
  `doctor_type` tinyint(1) NOT NULL,
  `doctor_gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(255) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_mobile_no` int(15) NOT NULL,
  `patient_address` varchar(100) NOT NULL,
  `patient_email` varchar(100) NOT NULL,
  `patient_password` varchar(40) NOT NULL,
  `patient_gender` enum('male','female') NOT NULL,
  `patient_age` int(100) NOT NULL,
  `patient_blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` int(11) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `patient_age` varchar(100) NOT NULL,
  `patient_gender` enum('male','female') NOT NULL,
  `case_history` varchar(255) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `test` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_mobile_no` int(15) NOT NULL,
  `staff_address` varchar(100) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_password` varchar(40) NOT NULL,
  `staff_type` tinyint(1) NOT NULL,
  `staff_gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
