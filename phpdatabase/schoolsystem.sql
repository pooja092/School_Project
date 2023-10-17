-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2023 at 09:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `character_certificate`
--

CREATE TABLE `character_certificate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `Session` varchar(50) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `class_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `character_certificate`
--

INSERT INTO `character_certificate` (`id`, `name`, `father_name`, `Session`, `roll_no`, `dob`, `class_name`) VALUES
(1, 'Saloni', 'VIPUL GUPTA', '2021-2023', 22, '16-2-1991', '5'),
(2, 'Pooja Mishra', 'j.p', '2021-2023', 25, '16-2-1991', '8'),
(3, 'Deepak', 'Bhupan singh', '2021-2023', 22, '21-08-2024', '8'),
(4, 'Pooja Mishra', 'j.p', '2021-2023', 22, '16-2-1991', '8'),
(5, 'Deepak', 'Bhupan singh', '2021-2023', 22, '16-2-1991', '8'),
(6, 'Aman saini', 'Bhupan singh', '2021-2023', 25, '16-2-1991', '7'),
(7, 'Pooja Mishra', 'j.p', '2021-2023', 25, '16-2-1991', '8'),
(12, 'Deepak', 'Bhupan singh', '2021-2023', 25, '16-2-1991', '8'),
(13, 'Aman saini', 'Bhupan singh', '2021-2023', 25, '16-2-1991', '8'),
(14, 'Salu', 'Bhupan singh', '2021-2023', 25, '16-2-1991', '8'),
(15, 'Pooja Mishra', 'j.p', '2021-2023', 25, '16-2-1991', '8'),
(16, 'deepanshu', 'j.p', '2021-2023', 25, '16-2-1991', '5'),
(17, 'Salu', 'j.p', '2021-2023', 25, '16-2-1991', '8'),
(18, 'Deepak', 'Bhupan singh', '2021-2023', 25, '16-2-1991', '8');

-- --------------------------------------------------------

--
-- Table structure for table `registration_certificate`
--

CREATE TABLE `registration_certificate` (
  `admission_no` int(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `doa` int(200) NOT NULL,
  `class_no` varchar(200) NOT NULL,
  `dob` int(200) NOT NULL,
  `age` int(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `board` varchar(200) NOT NULL,
  `sibling` varchar(200) NOT NULL,
  `aadhar_no` int(200) NOT NULL,
  `contact_no` int(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `father_occupation` varchar(200) NOT NULL,
  `mother_occupation` varchar(200) NOT NULL,
  `present_address` varchar(200) NOT NULL,
  `permanent_address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration_certificate`
--

INSERT INTO `registration_certificate` (`admission_no`, `first_name`, `last_name`, `doa`, `class_no`, `dob`, `age`, `gender`, `board`, `sibling`, `aadhar_no`, `contact_no`, `category`, `father_name`, `mother_name`, `father_occupation`, `mother_occupation`, `present_address`, `permanent_address`, `city`, `religion`) VALUES
(1, 'salu', 'mishra', 12, '5', 15, 12, 'male', 'cbsc', '2', 2147483647, 2147483647, 'general', 'papu', 'reena', 'job', 'job', 'Mansrowar', 'mansrowar', 'mbd', 'Hindu');

-- --------------------------------------------------------

--
-- Table structure for table `result_certificate`
--

CREATE TABLE `result_certificate` (
  `subj_code` int(200) NOT NULL,
  `subj_details` varchar(200) NOT NULL,
  `first_theory` int(200) NOT NULL,
  `first_practical` int(200) NOT NULL,
  `out_terms_one` int(200) NOT NULL,
  `secound_theory` int(200) NOT NULL,
  `secound_practical` int(200) NOT NULL,
  `out_terms_secound` int(200) NOT NULL,
  `out_twohundred` int(200) NOT NULL,
  `total_hundred` int(200) NOT NULL,
  `grade` varchar(200) NOT NULL,
  `total` int(200) NOT NULL,
  `percentage` varchar(200) NOT NULL,
  `total_grade` varchar(200) NOT NULL,
  `health` varchar(200) NOT NULL,
  `education` varchar(200) NOT NULL,
  `games` varchar(200) NOT NULL,
  `attendance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result_certificate`
--

INSERT INTO `result_certificate` (`subj_code`, `subj_details`, `first_theory`, `first_practical`, `out_terms_one`, `secound_theory`, `secound_practical`, `out_terms_secound`, `out_twohundred`, `total_hundred`, `grade`, `total`, `percentage`, `total_grade`, `health`, `education`, `games`, `attendance`) VALUES
(12, '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', '', '', ''),
(12, 'English', 0, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', '', '', ''),
(12, 'English', 40, 0, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', '', '', ''),
(12, 'English', 40, 40, 0, 0, 0, 0, 0, 0, '', 0, '', '', '', '', '', ''),
(12, 'English', 40, 40, 40, 0, 0, 0, 0, 0, '', 0, '', '', '', '', '', ''),
(12, 'English', 40, 40, 40, 30, 0, 0, 0, 0, '', 0, '', '', '', '', '', ''),
(12, 'English', 40, 40, 40, 30, 30, 0, 0, 0, '', 0, '', '', '', '', '', ''),
(12, 'English', 40, 40, 40, 30, 30, 40, 0, 0, '', 0, '', '', '', '', '', ''),
(12, 'English', 40, 40, 40, 30, 30, 40, 50, 0, '', 0, '', '', '', '', '', ''),
(12, 'English', 40, 40, 40, 30, 30, 40, 50, 40, '', 0, '', '', '', '', '', ''),
(12, 'English', 40, 40, 40, 30, 30, 40, 50, 40, 'B', 0, '', '', '', '', '', ''),
(12, 'English', 40, 40, 40, 30, 30, 40, 50, 40, 'B', 60, '', '', '', '', '', ''),
(12, 'English', 40, 40, 40, 30, 30, 40, 50, 40, 'B', 60, '80%', '', '', '', '', ''),
(12, 'English', 40, 40, 40, 30, 30, 40, 50, 40, 'B', 60, '80%', '450', '', '', '', ''),
(12, 'English', 40, 40, 40, 30, 30, 40, 50, 40, 'B', 60, '80%', '450', 'B', '', '', ''),
(12, 'English', 40, 40, 40, 30, 30, 40, 50, 40, 'B', 60, '80%', '450', 'B', 'B', '', ''),
(12, 'English', 40, 40, 40, 30, 30, 40, 50, 40, 'B', 60, '80%', '450', 'B', 'B', 'B', ''),
(12, 'English', 40, 40, 40, 30, 30, 40, 50, 40, 'B', 60, '80%', '450', 'B', 'B', 'B', '500'),
(12, 'English', 40, 40, 40, 30, 30, 40, 50, 40, 'B', 60, '80%', '450', 'B', 'B', 'B', '500');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_certificate`
--

CREATE TABLE `transfer_certificate` (
  `id` int(11) NOT NULL,
  `registration` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `national` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `failed` varchar(50) NOT NULL,
  `sbj` varchar(50) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `board` varchar(50) NOT NULL,
  `higher_class` varchar(50) NOT NULL,
  `fees_paid` varchar(50) NOT NULL,
  `fees_concession` varchar(50) NOT NULL,
  `ncc` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `leaving_school` varchar(50) NOT NULL,
  `meeting_date` varchar(50) NOT NULL,
  `pupil_attended` varchar(50) NOT NULL,
  `genral_conduct` varchar(50) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `certificate_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transfer_certificate`
--

INSERT INTO `transfer_certificate` (`id`, `registration`, `name`, `mother_name`, `father_name`, `national`, `category`, `dob`, `failed`, `sbj`, `class_name`, `board`, `higher_class`, `fees_paid`, `fees_concession`, `ncc`, `roll`, `leaving_school`, `meeting_date`, `pupil_attended`, `genral_conduct`, `remark`, `certificate_date`) VALUES
(24, '21456', 'saloni', 'SWETA GUPTA', 'Bhupan singh', 'INDIAN', 'GENERAL', '16-2-1991', 'Choose', 'English,Math', '8', 'CBSC', 'Choose', 'Choose', 'Choose', 'Choose', 'yes', 'LAST CLASS PASSED', 'yes', 'test', 'GOOD', 'yes', '04/09/2022'),
(25, 'U222/81774/0052', 'Pooja Mishra', 'SWETA GUPTA', 'Papu', 'INDIAN', 'GENERAL', '16-2-1991', '2', 'English,Math', '7', 'CBSC', '1', '1', '2', '1', 'yes', 'LAST CLASS PASSED', 'yes', 'test', 'GOOD', 'yes', '04/09/2022'),
(26, 'U222/81774/0052', 'Deepak', 'SWETA GUPTA', 'Papu', 'INDIAN', 'GENERAL', '16-2-1991', 'Choose', 'English,Math', '7', 'CBSC', '1', '1', '1', '1', 'yes', 'LAST CLASS PASSED', 'yes', 'test', 'GOOD', 'yes', '04/09/2022'),
(27, 'U222/81774/0052', 'Deepak', 'SWETA GUPTA', 'Bhupan singh', 'INDIAN', 'GENERAL', '16-2-1991', '1', 'English,Math', '5', 'CBSC', '1', '1', '1', '1', 'yes', 'LAST CLASS PASSED', 'yes', 'test', 'GOOD', 'yes', '04/09/2022'),
(28, 'U222/81774/0052', 'Deepak', 'SWETA GUPTA', 'Bhupan singh', 'INDIAN', 'GENERAL', '16-2-1991', '1', 'English,Math', '5', 'CBSC', '1', '1', '1', '1', 'yes', 'LAST CLASS PASSED', 'yes', 'test', 'GOOD', 'yes', '04/09/2022'),
(29, 'U222/81774/0052', 'Pooja Mishra', 'SWETA GUPTA', 'Bhupan singh', 'INDIAN', 'GENERAL', '16-2-1991', '1', '', '8', 'CBSC', '1', '1', '1', '1', 'yes', 'LAST CLASS PASSED', 'yes', 'test', 'GOOD', 'yes', '04/09/2022');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(13, 'poojamishra', 'pooja123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'pooja', 'pooja@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'Deepanshu', 'deepanshu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, 'deepanshu', 'deepanshu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'aman', 'aman123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(20, 'deepanshu', 'deepanshu123@gmail.com', 'b4c13807ba95411f7e50e6e98f6bfc0b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `character_certificate`
--
ALTER TABLE `character_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_certificate`
--
ALTER TABLE `registration_certificate`
  ADD PRIMARY KEY (`admission_no`);

--
-- Indexes for table `transfer_certificate`
--
ALTER TABLE `transfer_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `character_certificate`
--
ALTER TABLE `character_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registration_certificate`
--
ALTER TABLE `registration_certificate`
  MODIFY `admission_no` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transfer_certificate`
--
ALTER TABLE `transfer_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
