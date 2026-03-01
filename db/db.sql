-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 04:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

CREATE DATABASE SMS;
USE SMS;

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'jefa', 'admin1'),
(2, 'hoof', 'admin2'),
(3, 'hovding', 'admin3'),
(4, 'honcho', 'admin4'),
(5, 'capa', 'admin5');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(5) UNSIGNED NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `course_code`) VALUES
(1, 'BACHELORS OF COMPUTER APPLICATIONS', 'BCA'),
(2, 'BACHELORS OF SCIENCE(INFORMATION TECHNOLOGY)', 'ITB'),
(3, 'BACHELORS OF ARTS(MATHEMATICS)', 'BAM');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `des` longtext NOT NULL,
  `date` varchar(225) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `des`, `date`, `time`) VALUES
(1, 'Declaration of last date for Online Registration & Examination from fillup of Semester-I, II, and IV.', 'This is to inform all students that the deadline for Online Registration and Examination Form Fillup for Semester I, II, and IV is approaching. As part of the academic calendar, it is crucial for all eligible students to complete the registration process within the stipulated timeframe. The last date for both online registration and examination form submission is [insert specific date]. This notice applies to all undergraduate and postgraduate students enrolled in these respective semesters. Failure to adhere to the deadline may result in complications in the examination process. Students are urged to carefully follow the instructions provided on the university portal for a smooth and successful registration process. Your cooperation in adhering to the deadline is highly appreciated. For any queries or assistance, please contact the [University Office/Department].', '2024-01-29', '00:44:57'),
(2, 'Fees structure with and without practical.', 'Dear students,\r\n\r\nWe would like to inform you about the revised fee structure for the upcoming semester registration, considering the inclusion or exclusion of practical courses. Please take note of the following:\r\n\r\nWith Practical Courses:\r\n\r\nUndergraduate: Rs. 2000\r\nPostgraduate: Rs. 2500\r\nWithout Practical Courses:\r\n\r\nUndergraduate: Rs. 1500\r\nPostgraduate: Rs. 2000\r\nThis fee structure accounts for the additional resources and facilities required for practical courses. Kindly ensure accurate payment based on your enrolled courses. The payment deadline is [insert specific date]. Any discrepancies or concerns regarding fees can be addressed at the [University Finance Office]. Your prompt attention to this matter is appreciated.\r\n\r\nBest regards,\r\n\r\n[University Name] Administration', '2024-02-01', '00:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `student_id` int(5) UNSIGNED NOT NULL,
  `semester` int(5) UNSIGNED NOT NULL,
  `subject_id` int(5) UNSIGNED NOT NULL,
  `grade_point` int(5) UNSIGNED NOT NULL,
  `letter_grade` enum('O','A+','A','B+','B','C','D') NOT NULL,
  `credit_point` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`student_id`, `semester`, `subject_id`, `grade_point`, `letter_grade`, `credit_point`) VALUES
(1, 1, 1, 8, 'D', 20),
(1, 1, 2, 8, 'A', 48),
(1, 1, 3, 8, 'A', 48),
(1, 1, 4, 7, 'B+', 28),
(1, 2, 5, 5, 'C', 30),
(1, 2, 6, 9, 'A+', 54),
(1, 2, 7, 6, 'B', 36),
(1, 2, 8, 8, 'A', 32);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(5) UNSIGNED NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(1, 'I SEMESTER'),
(2, 'II SEMESTER'),
(3, 'III SEMESTER'),
(4, 'IV SEMESTER'),
(5, 'V SEMESTER'),
(6, 'VI SEMESTER');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(5) UNSIGNED NOT NULL,
  `roll_id` varchar(225) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address1` text NOT NULL,
  `address2` text DEFAULT NULL,
  `indian` varchar(255) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `pincode` int(5) DEFAULT NULL,
  `semester_id` int(5) UNSIGNED DEFAULT NULL,
  `course_id` int(5) UNSIGNED DEFAULT NULL,
  `password` varchar(225) NOT NULL,
  `add_year` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `roll_id`, `name`, `email`, `phone`, `dob`, `gender`, `address1`, `address2`, `indian`, `state`, `district`, `pincode`, `semester_id`, `course_id`, `password`, `add_year`) VALUES
(1, 'UT-211-023-0001', 'Sonjyoti Rabha', 'xonzyoti@hotmail.com', '+916900830239', '2003-01-29', 'MALE', 'RP Sharma Store, Nilachalpur, LCB College Road', 'East Gotanagar, Maligaon, Guwahati', 'YES', 'Assam', 'Kamrup Metropolitan', 781011, 1, 1, '2003-01-29', 2021),
(2, 'UT-211-023-0002', 'Subhra Kinkar Deka', 'suvrakinkar123@gmail.com', '+919859484930', '2003-02-03', 'MALE', 'RP Sharma Store, Nilachalpur, LCB College Road', 'East Gotanagar, Maligaon, Guwahati', 'YES', 'Assam', 'Kamrup Metropolitan', 781011, 1, 1, '2003-02-03', 2021),
(3, 'UT-201-023-0003', 'Ronuj Doley', 'doley65@gmail.com', '+919859484930', '2001-03-31', 'MALE', 'Kalipur, Bhutnath', 'Bhuthnath, Guwahati', 'YES', 'Assam', 'Kamrup Metropolitan', 781014, 1, 2, '2001-03-31', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `semester_id` int(5) UNSIGNED DEFAULT NULL,
  `course_id` int(5) UNSIGNED DEFAULT NULL,
  `paper_credit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `subject_code`, `semester_id`, `course_id`, `paper_credit`) VALUES
(1, 'INTRODUCTION TO C PROGRAMMING', 'BCA-HC-1016', 1, 1, 6),
(2, 'COMPUTER FUNDAMENTALS & ICT HARDWARE', 'BCA-HC-1026', 1, 1, 6),
(3, 'OFFICE AUTOMATION', 'BCA-HG-1026', 1, 1, 6),
(4, 'ENGLISH COMMUNICATION', 'ENG-AE-1014', 1, 1, 4),
(5, 'MATHEMATICS-I', 'BCA-HC-2016', 2, 1, 6),
(6, 'DIGITAL LOGIC FUNDAMENTALS', 'BCA-HC-2026', 2, 1, 6),
(7, 'BASIC ELECTRONICS', 'BCA-HG-2016', 2, 1, 6),
(8, 'ENVIRONMENTAL SCIENCE', 'ENV-AE-2014', 2, 1, 4),
(9, 'SOFTWARE ENGINEERING', 'BCA-HC-3016', 3, 1, 6),
(10, 'DATA STRUCTURES AND ALGORITHMS', 'BCA-HC-3026', 3, 1, 6),
(11, 'DATABASE MANAGEMENT SYSTEM', 'BCA-HC-3036', 3, 1, 6),
(12, 'INTRODUCTION TO INDIAN HISTORY', 'BCA-HG-3016', 3, 1, 6),
(13, 'WEB TECHNOLOGY', 'BCA-SE-3014', 3, 1, 4),
(14, 'COMPUTER ORGANIZATION AND ARCHITECTURE ', 'BCA-HC-4016', 4, 1, 4),
(15, 'MATHEMATICS-II', 'BCA-HC-4026', 4, 1, 6),
(16, 'OBJECT ORIENTED PROGRAMMING IN C++ ', 'BCA-HC-4036', 4, 1, 6),
(17, 'ADVANCED WEB TECHNOLOGY ', 'BCA-SE-4034', 4, 1, 4),
(18, 'INFORMATION SECURITY AND CYBER LAWS ', 'BCA-HG-4026', 4, 1, 6),
(19, 'JAVA PROGRAMMING', 'BCA-HC-5016', 5, 1, 6),
(20, 'OPERATING SYSTEM', 'BCA-HC-5026', 5, 1, 6),
(21, 'PROGRAMMING IN PYTHON', 'BCA-HE-5046', 5, 1, 6),
(22, 'PROJECT WORK/DISSERTATION', 'BCA-HE-5016', 5, 1, 6),
(23, 'SYSTEM ADMINISTRATION USING LINUX', 'BCA-HC-6016', 6, 1, 6),
(24, 'COMPUTER NETWORKS', 'BCA-HC-6026', 6, 1, 6),
(25, 'AUTOMATA THEORY AND LANGUAGES', 'BCA-HE-6016', 6, 1, 6),
(26, 'MICROPROCESSOR AND ASSEMBLY LANGUAGE PROGRAMMING', 'BCA-HE-6056', 6, 1, 6),
(27, 'COMPUTER FUNDAMENTAL AND PROGRAMMING', 'ITB-HC-1016', 1, 2, 6),
(28, 'MATHEMATICS-I', 'ITB-HC-1026', 1, 2, 6),
(29, 'ENGLISH COMMUNICATION', 'ENG-AE-1014', 1, 2, 4),
(30, 'ICT HARDWARE', 'ITB-HG-1016', 1, 2, 6),
(31, 'OFFICE AUTOMATION', 'ITB-HG-1026', 1, 2, 6),
(32, 'DATA STRUCTURE AND ALGORITHM', 'ITB-HC-2016', 2, 2, 6),
(33, 'DIGITAL LOGIC', 'ITB-HC-2026', 2, 2, 6),
(34, 'ENVIRONMENTAL SCIENCE', 'ENV-AE-2014', 2, 2, 4),
(35, 'MATHEMATICS-II', 'ITB-HG-2016', 2, 2, 6),
(36, 'PROGRAMMING IN C++', 'ITB-HG-2026:', 2, 2, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD KEY `result_semester_foreign` (`semester`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_semseter_id_foreign` (`semester_id`),
  ADD KEY `student_course_id_foreign` (`course_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `result_semester_foreign` FOREIGN KEY (`semester`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `result_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `result_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `student_semseter_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`);

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
