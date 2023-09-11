-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/

-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 12:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `idiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(8) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `admin_email`, `admin_pass`, `timestamp`) VALUES
(10, 'admin@gmail.com', '$2y$10$eoxxmLH3UrMPhSEhle5A/Oo7PZoI/lnxlf9qWw1BRm10WZQTPcgve', '2021-01-13 09:54:00'),
(11, 'new@gmail.com', '$2y$10$i1FYQrBEa7SGzQelUFe1e.WqP8ihj/rwafW5NJLNhph5mBwUty7zC', '2021-10-22 22:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `feedback_id` int(8) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_content`, `feedback_id`, `comment_by`, `comment_time`) VALUES
(14, 'sadda', 18, 3, '2021-10-06 18:25:23'),
(15, 'asdadadad', 18, 4, '2021-10-23 19:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `sno` int(8) NOT NULL,
  `faculty_email` varchar(30) NOT NULL,
  `faculty_pass` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`sno`, `faculty_email`, `faculty_pass`, `timestamp`) VALUES
(6, 'faculty1@gmail.com', '$2y$10$qcEcwpOKFIv56TR861bLn.9IARDvC.63ypSxNgsh2acTYZ7jV5mkW', '2021-01-13 10:45:07'),
(7, 'new@gmail.com', '$2y$10$UE2MuGzMxYPQjxMXX058VeO6nB3Bsnl0j6zAILamHnYEY0qaCX7JK', '2021-10-22 22:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(7) NOT NULL,
  `feedback_title` varchar(255) NOT NULL,
  `feedback_desc` text NOT NULL,
  `feedback_scholar_id` int(7) NOT NULL,
  `feedback_stud_id` int(7) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `feedback_title`, `feedback_desc`, `feedback_scholar_id`, `feedback_stud_id`, `timestamp`) VALUES
(18, 'ijhkkkh', 'sfdfsfsfdsfs', 1, 3, '2021-10-06 18:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `student_email` varchar(255) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `p_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`student_email`, `F_name`, `L_name`, `p_no`) VALUES
('new4@gmail.com', 'SUPREETH', 'NAYAK', 2147483647),
('nayaksupreeth4@gmail.com', 'Supreeth', 'Nayak', 2147483647),
('newlogin@gmail.com', 'Supreeth', 'Nayak', 2147483647),
('new@gmail.com', 'supreeth', 'Nayak', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_no` int(11) NOT NULL,
  `first_name` varchar(12) NOT NULL,
  `last_name` varchar(12) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `proof1` varchar(255) NOT NULL,
  `proof2` varchar(255) NOT NULL,
  `proof3` varchar(255) NOT NULL,
  `profile_scholar_id` int(11) NOT NULL,
  `profile_stud_id` int(11) NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp(),
  `Verification_status` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `scholarship_id` int(8) NOT NULL,
  `scholarship_name` varchar(255) NOT NULL,
  `scholarship_description` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`scholarship_id`, `scholarship_name`, `scholarship_description`, `created`) VALUES
(1, 'Epass', 'Newest Scholarship by Epass \r\nPrice: 20,000\r\nTime Limit: On or before February 29th', '2021-01-13 09:59:43'),
(2, 'Merit Scholarship', 'Newest Scholarship for Merit Students above 85%,\r\nPrice: RS 15,000\r\nTime Limit: On or before February 29th.', '2021-01-13 10:04:46'),
(3, 'Samagra Shikshana Karnataka', 'Newest Scholarship by Epass,\r\nPrice: RS 35,000,\r\nTime Limit: On or before February 29th.', '2021-01-13 10:09:24'),
(4, 'Pre Matric Scholarship for Minorities', 'Newest Scholarship only for Minorities,\r\nPrice: RS 50,000,\r\nTime Limit: On or before February 29th.', '2021-01-13 10:12:55'),
(5, 'Sports Insentive', 'Newest Scholarship for Sports students\r\nPrice: 5,000\r\nTime Limit: On or before March 15th', '2021-01-13 10:18:14'),
(6, 'Vidyadhan Scholarship', 'Scholarship only for 10th pass students \r\nPrice: 20,000\r\nTime Limit: On or before February 29th', '2021-01-13 10:22:58'),
(7, 'epass', 'Newest Scholarship by Epass Price: 20,000 Time Limit: On or before February 29th', '2021-10-23 19:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students`(
  `sno` int(8) NOT NULL,
  `student_email` varchar(30) NOT NULL,
  `student_pass` varchar(255) NOT NULL,
  `F_name` varchar(225) NOT NULL,
  `L_name` varchar(225) NOT NULL,
  `p_no` bigint(15) NOT NULL,
  `dob` date NOT NULL,
  `Profile_image` varchar(225) NOT NULL DEFAULT 'userdefault1.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sno`, `student_email`, `student_pass`, `F_name`, `L_name`, `p_no`, `dob`, `Profile_image`) VALUES
(1, 'sumanth15ab@gmail.com', '$2y$10$i3eJmhs9rSKcjvvcAKecveQdYmzg5MgkgHqdwF9vVnEV555W/KLmW', 'Sumanth', 'Achar', 919191918762364890, '2000-06-08', 'profile photo.jpg'),
(2, 'nayaksupreeth4@gmail.com', '$2y$10$FlIiCMnwBIqi5CEEvJNtcu.WjLTXe4nGpjkVCJc/7GuhLsoiJpAyy', 'Supreeth', 'Nayak', 919191919632883748, '2000-11-12', 'profile photo.jpg'),
(3, 'newlogin@gmail.com', '$2y$10$RKuJJ4Pe/e/FgNFY6q/Eo.N53jlCvn6YOjjyUYxWC3O70b2tHrS8S', 'Supreeth', 'Nayak', 9632883748, '2000-11-12', 'image2.jpg'),
(4, 'new@gmail.com', '$2y$10$/NOBvyXfzBHXh7XdBV8sXu48d5IXUyN8YaArtgdEJTLmqQ047qei6', 'supreeth', 'Nayak', 91919632883748, '0000-00-00', 'my image.jpg');

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `instLogs` BEFORE INSERT ON `students` FOR EACH ROW INSERT INTO logs VALUES(NEW.student_email , NEW.F_name , NEW.L_name , NEW.p_no )
$$
DELIMITER;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`);
ALTER TABLE `feedbacks` ADD FULLTEXT KEY `thread_title` (`feedback_title`,`feedback_desc`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_no`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`scholarship_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `scholarship_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
