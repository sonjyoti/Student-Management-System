-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 10:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `semester_id` int(5) UNSIGNED DEFAULT NULL,
  `course_id` int(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `subject_code`, `semester_id`, `course_id`) VALUES
(1, 'INTRODUCTION TO C PROGRAMMING ', 'BCA-HC-1016', 1, 1),
(2, 'COMPUTER FUNDAMENTALS & ICT HARDWARE', 'BCA-HC-1026', 1, 1),
(3, 'OFFICE AUTOMATION', 'BCA-HG-1026', 1, 1),
(4, 'ENGLISH COMMUNICATION', 'ENG-AE-1014', 1, 1),
(5, 'MATHEMATICS-I', 'BCA-HC-2016', 2, 1),
(6, 'DIGITAL LOGIC FUNDAMENTALS', 'BCA-HC-2026', 2, 1),
(7, 'BASIC ELECTRONICS', 'BCA-HG-2016', 2, 1),
(8, 'ENVIRONMENTAL SCIENCE', 'ENV-AE-2014', 2, 1),
(9, 'SOFTWARE ENGINEERING', 'BCA-HC-3016', 3, 1),
(10, 'DATA STRUCTURES AND ALGORITHMS', 'BCA-HC-3026', 3, 1),
(11, 'DATABASE MANAGEMENT SYSTEM', 'BCA-HC-3036', 3, 1),
(12, 'INTRODUCTION TO INDIAN HISTORY', 'BCA-HG-3016', 3, 1),
(13, 'WEB TECHNOLOGY', 'BCA-SE-3014', 3, 1),
(14, 'COMPUTER ORGANIZATION AND ARCHITECTURE ', 'BCA-HC-4016', 4, 1),
(15, 'MATHEMATICS-II', 'BCA-HC-4026', 4, 1),
(16, 'OBJECT ORIENTED PROGRAMMING IN C++ ', 'BCA-HC-4036', 4, 1),
(17, 'ADVANCED WEB TECHNOLOGY ', 'BCA-SE-4034', 4, 1),
(18, 'INFORMATION SECURITY AND CYBER LAWS ', 'BCA-HG-4026', 4, 1),
(19, 'JAVA PROGRAMMING ', 'BCA-HC-5016', 5, 1),
(20, 'OPERATING SYSTEM ', 'BCA-HC-5026', 5, 1),
(21, 'PROGRAMMING IN PYTHON ', 'BCA-HE-5046', 5, 1),
(22, 'PROJECT WORK/DISSERTATION ', 'BCA-HE-5016', 5, 1),
(23, 'SYSTEM ADMINISTRATION USING LINUX', 'BCA-HC-6016', 6, 1),
(24, 'COMPUTER NETWORKS ', 'BCA-HC-6026', 6, 1),
(25, 'AUTOMATA THEORY AND LANGUAGES ', 'BCA-HE-6016', 6, 1),
(26, 'MICROPROCESSOR AND ASSEMBLY LANGUAGE PROGRAMMING ', 'BCA-HE-6056', 6, 1),
(27, 'COMPUTER FUNDAMENTAL AND PROGRAMMING', 'ITB-HC-1016', 1, 2),
(28, 'MATHEMATICS-I', 'ITB-HC-1026', 1, 2),
(29, 'ENGLISH COMMUNICATION', 'ENG-AE-1014', 1, 2),
(30, 'ICT HARDWARE', 'ITB-HG-1016', 1, 2),
(31, 'OFFICE AUTOMATION', 'ITB-HG-1026', 1, 2),
(32, 'DATA STRUCTURE AND ALGORITHM', 'ITB-HC-2016', 2, 2),
(33, 'DIGITAL LOGIC', 'ITB-HC-2026', 2, 2),
(34, 'ENVIRONMENTAL SCIENCE', 'ENV-AE-2014', 2, 2),
(35, 'MATHEMATICS-II', 'ITB-HG-2016', 2, 2),
(36, 'PROGRAMMING IN C++', 'ITB-HG-2026:', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_semester_id_foreign` (`semester_id`),
  ADD KEY `subject_course_id_foreign` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `subject_semester_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
