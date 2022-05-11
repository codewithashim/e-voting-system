-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 05:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `moblile` varchar(20) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(60) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `standard` enum('grup','voter') NOT NULL,
  `status` int(15) NOT NULL,
  `vote` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `username`, `moblile`, `email`, `password`, `photo`, `standard`, `status`, `vote`) VALUES
(5, 'Computer Since', '01740737445', 'cse@gmail.com', '123456', 'Btech-Computer-Science.jpg', 'grup', 0, 4),
(6, 'Civil Engineering', '01740737445', 'civil@gmail.com', '123456', 'civil.jpg', 'grup', 0, 1),
(7, 'Ashim Rudra Paul', '01740737445', 'ashim@gmail.com', '123456', '124384817_768725667189857_7147840249211677218_n.jpg', 'voter', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
