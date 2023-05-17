-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 04:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perez_shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(123) DEFAULT NULL,
  `email` varchar(123) DEFAULT NULL,
  `password` varchar(123) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'jong perez', 'eulalio.pereziv@nmsc.edu.ph', '$2y$10$wCiT31Eeg3tfjsa34U.FTOYZxUfakOj8n5py86SQXZYwq.Z5GqE02'),
(2, 'Richie Mercaderos', 'rghf@ggfdhgh.com', '$2y$10$pIlkH45TFMZWAMqaxjMEQujLp.hDTS6d29VtJiWb55kfOUV7t4rWC'),
(3, 'Felmar Palad', 'felmar@yahoo.com', '$2y$10$.f9.s2k911BzjewSc2tqEugiQuP0hCLfWfsRyJzscVB7py4tVjYOW'),
(4, 'Marl Zuckerberg', 'mark@nmsc.com', '$2y$10$zUo7l51PHFABhlKhhFxIOuzkxxwQ508ExTJU4XPdl30tqgsXUXHgq'),
(5, 'Felmar Palad', 'felmar1@yahoo.com', '$2y$10$j9wVr5GGkE4jSnMVJK7U3ecU4k80YhRLCyjCsW8v7x4/y/T73n/5a'),
(6, 'Eulalio Perez IV', 'eulalio@yahoo.com', '$2y$10$4nwPniU2TFPXKFWgI.k6fu.WA/7tIjXj0jriQEkJ4.Q6xmNNKpy22');

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
