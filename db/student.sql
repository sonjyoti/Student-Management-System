-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 08:57 AM
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
(1, 'UT-211-023-0001', 'Sonjyoti Rabha', 'sonjyoti33@gmail.com', '8822648739', '2003-01-29', 'MALE', 'Jarapara, Boko', '', 'YES', 'Assam', 'Kamrup (Rural)', 781123, 5, 1, 'dipu123', 2021),
(3, 'UT-251-023-0003', 'Samudra Rabha', 'samudra@gmail.com', '9707530408', '2013-10-30', 'MALE', 'Jarapara, Boko', '', 'YES', 'Assam', 'Kamrup (Rural)', 781123, 1, 2, 'samu123', 2025),
(4, 'UT-211-023-0004', 'Subhra Kinkar Deka', 'bubu@hotmail.com', '9707180006', '2003-02-03', 'MALE', 'Nasatra, Sarthebari', 'Near Krishnaguru Sewashram', 'YES', 'Assam', 'Barpeta', 781307, 5, 1, '2003-02-03', 2021),
(6, 'UT-211-023-0006', 'Arup Das', 'arupds11@gmail.com', '9707530408', '2002-08-11', 'MALE', 'Nasatra, Sarthebari', 'Near Krishnaguru Sewashram', 'YES', 'Assam', 'Barpeta', 781307, 5, 1, '2002-08-11', 2021),
(7, 'UT-211-023-0007', 'Kuldeep Sarma', 'kuldeep@hotmail.com', '9957460215', '2001-09-13', 'MALE', 'Akhra, Nalbari', '', 'YES', 'Assam', 'Nalbari', 781209, 5, 1, '2001-09-13', 2021),
(8, 'UT-251-023-0008', 'Jagannath Das', 'jagan@hotmail.com', '8822648739', '2002-03-11', 'MALE', 'Bongshor, Suwalkuchi', '', 'YES', 'Assam', 'Kamrup (Rural)', 781653, 1, 1, '2002-03-11', 2025),
(9, 'UT-211-023-0009', 'Pratim das ', 'pratim@hotmail.com', '9864051927', '2003-08-07', 'MALE', 'Metuakuchi', '', 'YES', 'Assam', 'Barpeta', 781209, 1, 2, '2003-08-07', 2021),
(10, 'UT-01-023-0010', 'Saraswati Rabha', 'saraswati@gmail.com', '6001250270', '1980-10-01', 'FEMALE', 'Jarapara, Boko', 'Near Golap Nursery, Don Bosco Chowk', 'YES', 'Assam', 'Kamrup (Rural)', 781123, 6, 2, '1980-10-01', 2000),
(11, 'UT-161-023-0011', 'Sushmita Rabha', 'sushmita@gmail.com', '9707180006', '2004-03-09', 'FEMALE', 'Chaygaon', '', 'YES', 'Assam', 'Kamrup (Rural)', 781122, 2, 1, '2004-03-09', 2016),
(12, 'UT-011-023-0012', 'Dilip Kr. Rabha', 'diliprabha@gmail.com', '9854689870', '1964-01-08', 'MALE', 'Jarapara, Boko', 'Near Golap Nursery, Don Bosco Chowk', 'YES', 'Assam', 'Kamrup (Rural)', 781123, 5, 1, '1964-01-08', 2001),
(13, 'UT-281-023-0013', 'Bishal Sarania', 'saraniabishal@proton.me', '9707530408', '2013-07-09', 'MALE', 'Nangorkona, Boko', '', 'YES', 'Assam', 'Kamrup (Rural)', 781123, 1, 2, '2013-07-09', 2028),
(14, 'UT-01-023-0014', 'Kapil Mudi', 'mudikapil@gmail.com', '9854689870', '1976-09-27', 'MALE', 'Bokakhat, Kaziranga', '', 'YES', 'Assam', 'Golaghat', 789234, 4, 3, '1976-09-27', 2000),
(15, 'UT-61-023-0015', 'Alokesh Kachari', 'kacharibhai@hotmail.com', '9976239873', '1995-09-17', 'MALE', 'Fatashil Ambari', '', 'YES', 'Assam', 'Kamrup Metropolitan', 781005, 3, 2, '1995-09-17', 2006),
(16, 'UT-001-023-0016', 'Anupal Patowary', 'patowaryanupal@gmail.com', '9086637234', '2013-11-14', 'MALE', 'Chukuniapara, Boko', '', 'YES', 'Assam', 'Kamrup (Rural)', 781137, 1, 1, '2013-11-14', 2000),
(17, 'UT-101-023-0017', 'Subhra Kinkar Deka', 'suvrakinkar123@gmail.com', '6900830239', '2003-02-03', 'MALE', 'Chukuniapara, Boko', '', 'YES', 'Assam', 'Barpeta', 781137, 1, 1, '123Suvra', 2010);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_semseter_id_foreign` (`semester_id`),
  ADD KEY `student_course_id_foreign` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `student_semseter_id_foreign` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;