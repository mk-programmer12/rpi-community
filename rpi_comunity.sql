-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 07:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpi_comunity`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(255) NOT NULL,
  `sender_id` int(255) NOT NULL,
  `receiver_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `send_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `send_time` int(255) NOT NULL,
  `accept_date` timestamp NULL DEFAULT NULL,
  `accept_time` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `sender_id`, `receiver_id`, `status`, `send_date`, `send_time`, `accept_date`, `accept_time`) VALUES
(2, 1, 5, 'accepted', '2023-11-24 16:21:14', 1700842874, NULL, NULL),
(4, 3, 1, 'accepted', '2023-11-24 16:40:43', 1700844043, NULL, NULL),
(5, 2, 1, 'accepted', '2023-11-24 16:41:28', 1700844088, NULL, NULL),
(7, 6, 1, 'accepted', '2023-11-24 17:15:02', 1700846102, NULL, NULL),
(13, 1, 7, 'accepted', '2023-11-25 17:48:11', 1700934491, NULL, NULL),
(16, 7, 3, 'pending', '2023-11-26 16:55:08', 1701017708, NULL, NULL),
(17, 7, 5, 'accepted', '2023-11-26 16:55:15', 1701017715, NULL, NULL),
(19, 5, 2, 'pending', '2023-11-26 17:03:11', 1701018191, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `s_registration` int(10) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'default.png',
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `s_department` varchar(255) DEFAULT NULL,
  `s_semester` varchar(255) DEFAULT NULL,
  `s_group` varchar(255) DEFAULT NULL,
  `s_session` varchar(255) DEFAULT NULL,
  `s_shift` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `is_online` tinyint(1) NOT NULL DEFAULT 1,
  `log_out_time` int(11) NOT NULL,
  `account_status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `roll`, `s_registration`, `password`, `avatar`, `email`, `phone`, `s_department`, `s_semester`, `s_group`, `s_session`, `s_shift`, `about`, `designation`, `gender`, `present_address`, `permanent_address`, `fb_link`, `twitter_link`, `instagram_link`, `linkedin_link`, `is_online`, `log_out_time`, `account_status`, `created_at`, `updated_at`) VALUES
(1, 'Monir Khan', 406034, 1502041792, '374daeb43cf29cf49a6e042b12f34f4c', '656391fb0df84.png', 'mdmonirbdrangpur@gmail.com', '01772883484', 'Computer', '8th', 'B', '19-20', '2nd', 'I&#039;m Monir Khan. I am a full stack web developer', 'Web Developer', 'Male', 'Mahadebpur, Rangpur', 'Mahadebpur, Rangpur', 'http://www.facebook.com/mdmonirbdrangpur', '#', '#', '#', 1, 0, '', '2023-11-18 18:16:13', '2023-11-18 18:16:13'),
(2, 'Demo Name', 100000, 1502041700, '6c3d1d07e23fb1be21691ea0682b3d11', 'default.png', 'demo@gmail.com', '01700000000', 'Civil', '1th', 'A', '20-21', '1st', 'Demo About', 'Demo Designation', 'Male', '', '', '', '', '', '', 1, 0, '', '2023-11-24 13:43:33', '2023-11-24 13:43:33'),
(3, 'Demo Name2', 100001, NULL, '1a51eda7d7942c31f03cb8420c979eef', 'default.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 1, 0, '', '2023-11-24 13:44:12', '2023-11-24 13:44:12'),
(4, 'Abc def', 100002, 0, 'c49738d90551ecf208d9d53cefbb655f', 'default.png', 'marketer@gmail.com', '01710000000', 'Power', '3rd', 'C', '21-22', '1st', 'Hello, I&#039;m Digital marketing expert.', 'Digital Marketer', 'Male', '', '', '', '', '', '', 1, 0, '', '2023-11-24 13:44:26', '2023-11-24 13:44:26'),
(5, 'Ashik Hasan', 100003, 0, 'bd97dbaebdd4a4497c65b2614d443c76', 'default.png', 'ashik@gmail.com', '01912345678', 'Computer', '8th', 'B', '19-20', '2nd', 'Hi! I&#039;m Web Designer.', 'Web Designer', 'Male', '', '', '', '', '', '', 1, 0, '', '2023-11-24 13:45:05', '2023-11-24 13:45:05'),
(6, 'MD. Tamim', 100004, 1502041704, 'c7e0985d03714d4cad667f8b46182ca1', 'default.png', 'tamim@gmail.com', '01812345678', 'Computer', '8th', 'B', '19-20', '2nd', 'About me.', 'Lead Genaration', 'Male', '', '', '', '', '', '', 1, 0, '', '2023-11-24 17:08:43', '2023-11-24 17:08:43'),
(7, 'Galib Hasam', 100006, NULL, '773a8e3072e2495efbdb05b3e04ce0be', 'default.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '', '2023-11-24 17:55:41', '2023-11-24 17:55:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
