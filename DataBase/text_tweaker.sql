-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 02:25 PM
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
-- Database: `text_tweaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `paraphrase_clicks`
--

CREATE TABLE `paraphrase_clicks` (
  `id` int(11) NOT NULL,
  `user_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(20) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Password` int(30) NOT NULL,
  `CheckButton` tinyint(1) NOT NULL,
  `subscription` tinyint(4) NOT NULL,
  `clicks_remaining` int(20) NOT NULL,
  `last_click_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `Name`, `Phone`, `Email`, `Password`, `CheckButton`, `subscription`, `clicks_remaining`, `last_click_time`) VALUES
(36, 'Muhammad Huzaifa Khan', 2147483647, 'hk9349881@gmail.com', 121, 1, 0, 0, '2023-12-07 06:46:03'),
(37, 'Muhammad Huzaifa Khan', 320575, '46878@students.riphah.edu.pk', 211, 1, 1, 9991, '2023-12-07 06:41:34'),
(38, 'kaleem', 243234, 'kaleem@gmail.com', 111, 1, 0, 0, '2023-12-03 21:18:16'),
(39, 'Muhammad Huzaifa Khan', 3325345, 'huzaifa@gmail.com', 111, 1, 0, 0, '2023-12-04 10:29:14'),
(40, 'ali', 2147483647, 'ali@gmail.com', 111, 1, 0, 0, '2023-12-04 10:42:02'),
(41, 'Zuharan', 2147483647, 'zuharan@gail.com', 123, 1, 0, 0, '2023-12-05 11:00:39'),
(42, 'ali', 21314, 'ali1@gmail.com', 111, 1, 0, -7, '2023-12-06 21:33:10'),
(43, 'hamza nawaz', 2147483647, 'hamzanawaz@gmail.com', 111, 1, 0, 0, '2023-12-06 21:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_plans`
--

CREATE TABLE `user_plans` (
  `id` int(20) NOT NULL,
  `plan_selection` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_plans`
--

INSERT INTO `user_plans` (`id`, `plan_selection`) VALUES
(20, 0),
(21, 1),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paraphrase_clicks`
--
ALTER TABLE `paraphrase_clicks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_plans`
--
ALTER TABLE `user_plans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paraphrase_clicks`
--
ALTER TABLE `paraphrase_clicks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user_plans`
--
ALTER TABLE `user_plans`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
