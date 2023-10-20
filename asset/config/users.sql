-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 10:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ventelect`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `account_uid` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(70) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(60) NOT NULL,
  `passwords` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `about` varchar(100) NOT NULL,
  `pro_pic` varchar(300) NOT NULL,
  `user_role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `account_uid`, `mobile`, `first_name`, `last_name`, `email`, `gender`, `dob`, `passwords`, `date_created`, `about`, `pro_pic`, `user_role`) VALUES
(1, 'VE6078820', 'aretyui', 'omotayo', 'omotayo', '', 'opeyemi@gmail.com', 'Male', '0003-03-31', '0000-00-00', '', '', ''),
(2, 'VE7962954', 'aretyui', 'omotayo', 'omotayo', '', 'opeyemi@gmail.com', 'Male', '0003-03-31', '0000-00-00', '', '', ''),
(3, 'VE9076907', 'aretyui', 'omotayo', 'omotayo', '', 'opeyemi@gmail.com', 'Male', '0003-03-31', '0000-00-00', '', '', ''),
(4, 'VE6745274', 'aretyui', 'omotayo', 'omotayo', 'opeyemi@gmail.com', 'Male', '0003-03-31', '$2y$10$ZkALMiV3kGNLNNXSIZYg..TKKHveH4pNhkzEGm/HUAUMT/FAiAfqa', '2023-03-08', '', '', ''),
(5, 'VE6249947', '07017924500', 'omotayo', 'omotayo', 'opeyem@gmail.com', 'Male', '2023-03-30', '$2y$10$QueBZst6nu0YqBAfJjM44ua81gQMmN95GCCeMP2scIly7Rx3F6Rcy', '2023-03-08', '', '', 'admin'),
(6, 'VE6288365', '07017924500', 'omotayo', 'omotayo', 'test@gmail.com', 'Male', '0004-04-04', '$2y$10$nLlEYiZsP9wFgcvS4cbj8ehlVSECc9oMJLaxq0Kqcfuro7QKDo1IC', '2023-03-08', 'I love coding yes', 'avatar6.jpg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
