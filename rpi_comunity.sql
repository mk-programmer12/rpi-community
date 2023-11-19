-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 07:37 PM
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
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `instagram_link` varchar(255) NOT NULL,
  `linkedin_link` varchar(255) NOT NULL,
  `is_online` int(11) NOT NULL,
  `log_out_time` int(11) NOT NULL,
  `account_status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `roll`, `password`, `avatar`, `email`, `phone`, `about`, `designation`, `gender`, `present_address`, `permanent_address`, `fb_link`, `twitter_link`, `instagram_link`, `linkedin_link`, `is_online`, `log_out_time`, `account_status`, `created_at`, `updated_at`) VALUES
(1, 'Monir Khan', 406034, '374daeb43cf29cf49a6e042b12f34f4c', 'default.jpg', 'mdmonirbdrangpur@gmail.com', '01772883484', 'I\'m Monir Khan. I am a full stack web developer', 'Web Developer', 'Male', 'Mahadebpur, Rangpur', 'Mohadebpur, Rangpur', 'http://www.facebook.com/mdmonirbdrangpur', '#', '#', '#', 1, 0, '', '2023-11-18 18:16:13', '2023-11-18 18:16:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
