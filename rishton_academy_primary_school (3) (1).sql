-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 06, 2023 at 01:28 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rishton_academy_primary_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int NOT NULL,
  `class_name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `class_capacity` int NOT NULL,
  `annual_fee` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `class_capacity`, `annual_fee`) VALUES
(1, 'Reception Year', 60, 3000),
(2, 'Year One', 60, 3200),
(3, 'Year Two', 60, 3400),
(4, 'Year Three', 60, 3600),
(5, 'Year Four', 60, 3800),
(6, 'Year Five', 60, 4000),
(7, 'Year Six', 60, 4200);

-- --------------------------------------------------------

--
-- Table structure for table `parentdetails`
--

CREATE TABLE `parentdetails` (
  `parent_id` int NOT NULL,
  `pa_firstname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pa_lastname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pa_email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pa_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `pa_phone` varchar(13) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parentdetails`
--

INSERT INTO `parentdetails` (`parent_id`, `pa_firstname`, `pa_lastname`, `pa_email`, `pa_address`, `pa_phone`) VALUES
(1, 'john', 'smith', 'john@gmail.com', 'abc block,123 street', '87697857434'),
(2, 'claire', 'megan', 'claire@gmail.com', 'BN BLock ,DEC PALACE', '786556445');

-- --------------------------------------------------------

--
-- Table structure for table `pupil`
--

CREATE TABLE `pupil` (
  `pupil_id` int NOT NULL,
  `p_firstname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `p_lastname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `p_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `p_dob` date NOT NULL,
  `p_parent1` int NOT NULL,
  `p_parent2` int NOT NULL,
  `class_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `registered_at` date NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pupil`
--

INSERT INTO `pupil` (`pupil_id`, `p_firstname`, `p_lastname`, `p_address`, `p_dob`, `p_parent1`, `p_parent2`, `class_id`, `teacher_id`, `registered_at`, `status`) VALUES
(3, 'max', 'monte', 'DEF Block', '2020-04-07', 1, 2, 2, 2, '2023-04-06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int NOT NULL,
  `t_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `t_address` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `t_phone` varchar(13) COLLATE utf8mb4_general_ci NOT NULL,
  `t_salary` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `t_image` text COLLATE utf8mb4_general_ci NOT NULL,
  `t_doc` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `t_address`, `t_phone`, `t_salary`, `t_image`, `t_doc`) VALUES
(1, 'john', 'EN 69,B block', '8767656565', '30000', 'customer.jpg', 'verified'),
(2, 'Kane WIlliam', 'DEF BLOCK', '7876655565', '30000', 'enterpren_image.jpg', 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `parentdetails`
--
ALTER TABLE `parentdetails`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `pupil`
--
ALTER TABLE `pupil`
  ADD PRIMARY KEY (`pupil_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `p_parent1` (`p_parent1`),
  ADD KEY `p_parent2` (`p_parent2`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parentdetails`
--
ALTER TABLE `parentdetails`
  MODIFY `parent_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pupil`
--
ALTER TABLE `pupil`
  MODIFY `pupil_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pupil`
--
ALTER TABLE `pupil`
  ADD CONSTRAINT `pupil_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`t_id`),
  ADD CONSTRAINT `pupil_ibfk_2` FOREIGN KEY (`p_parent1`) REFERENCES `parentdetails` (`parent_id`),
  ADD CONSTRAINT `pupil_ibfk_3` FOREIGN KEY (`p_parent2`) REFERENCES `parentdetails` (`parent_id`),
  ADD CONSTRAINT `pupil_ibfk_4` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
