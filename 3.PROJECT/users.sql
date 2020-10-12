-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 05:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` mediumint(6) UNSIGNED NOT NULL,
  `your_name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_date` datetime NOT NULL,
  `activation_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `your_name`, `username`, `email`, `password`, `registration_date`, `activation_code`, `status`) VALUES
(1, 'Nguyễn', 'Tuấn', 'tuannguyen@gmail.com', '$2y$10$lEmRKPYfu/Nb6ECtbmp7YOuIZeZDYuCnZKRmEBnQ6nRHDKJHdEgMK', '2018-04-26 15:11:58', '', 1),
(2, 'Nguyễn', 'Thanh', 'thanhcr7@gmail.com', 'thanhcr7', '2018-04-28 15:15:32', '', 1),
(3, 'Tweedle', 'Dee-Deest', 'tdeedeest@themail.com', '$2y$10$.ewnSKbbeP6lSI4UF0BasOTnDyLzBH8mwcDM3wEM1hzoJAXYz2doK', '2018-04-28 15:17:29', '', 1),
(4, 'Annie', 'Versary', 'aversary@outcook.com', '$2y$10$5yz6IiFq/uZR4VdacjVRbOWTIA5tZCSLZ975mGZCoas3UHMMojN46', '2018-04-28 15:18:17', '', 1),
(5, 'Charley', 'Farnsbarns', 'cfransnarns@outcook.com', '$2y$10$WFX630.YbR5WQcYNBnMMueIbjIbo5.C6aDkUKVUfXBC1oNrqasmWa', '2018-04-28 15:19:50', '', 1),
(9, 'Nguyễn Xuân ', 'Thanh', 'thanhcr72000@gmail.com', '$2y$10$zib1KsH9bd8Uwff2alV0M.4yWO74prl2zl10IzLKR9sZ33nFYHI1.', '2020-09-29 13:20:48', '', 1),
(19, 'Nguyễn Tuấn', 'Tuantran', 'tuannguyen@gmail.com', 'thanhcr7', '0000-00-00 00:00:00', '', 0),
(20, 'Nguyễn Tuấn', 'Tuantran', 'tuannguyen@gmail.com', 'thanhcr7', '2020-10-13 22:52:21', '', 0),
(21, 'aaaaaa', '1111111', 'thanhvvvvvv@gmail.com', '$2y$10$uhv5utIT27TpTXGm3ObuKuUuzfmiKoJoDme91b2ZMcQOBkoou2lym', '2020-10-09 23:06:48', 'a0c4694dc74f9ca3', 0),
(22, 'nguyễn tuấn', 'abc123', 'tuan@gmail.com', '$2y$10$fsxecFlJyAgOlAxPVbkfXeliteOsjrtnqMPoWvs9Nr2D6o3lAErkq', '2020-10-11 21:31:30', '1ea6cc4a098dddd4', 0),
(23, 'thanh', 'thanh123', 'thanh111@gmail.com', '$2y$10$NL1ZicwTIWBel2RaK4V0LeWwePRbyP4bZB7FjZUL0eq24xB61mkFW', '2020-10-12 09:48:25', 'e712a01756c9816a', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
