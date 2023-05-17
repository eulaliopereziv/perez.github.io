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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `cust_name` varchar(55) DEFAULT NULL,
  `sex` varchar(12) DEFAULT NULL,
  `age` varchar(100) DEFAULT NULL,
  `contact` varchar(55) DEFAULT NULL,
  `barangay` varchar(100) DEFAULT NULL,
  `city` varchar(55) DEFAULT NULL,
  `country` varchar(55) DEFAULT NULL,
  `images` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `cust_name`, `sex`, `age`, `contact`, `barangay`, `city`, `country`, `images`) VALUES
(1, 'Eulalio Perez IV', 'Male', '20', '09454658922', 'Aquino', 'Tangub City', 'Philippines', 0x45554c414c494f2e6a7067),
(11, 'Steven Kim Gerundio ', 'Male', '22', '09456258745', 'Sumirap', 'Tangub City', 'Philippines', 0x53544556454e2e6a7067),
(12, 'Rutherford Ballares', 'Male', '22', '09567382957', 'Malobog', 'Tangub City', 'Philippines', 0x464f5244592e6a7067),
(13, 'Bill Lawrence', 'Male', '26', '09564737236', 'Labo', 'Ozamis City', 'Philippines', 0x42494c4c2e6a7067),
(14, 'Jose Rizal', 'Male', '28', '09465537254', 'Maquilao', 'Tangub City', 'Philippines', 0x72697a616c2e6a666966),
(15, 'Jong Perez ', 'Male', '22', '09564321234', 'Garang', 'Tangub City', 'Philippines', 0x4a4f4e472e6a7067),
(16, 'Marian Rivera', 'Female', '24', '09453634257', 'Simasay', 'Tangub City', 'Philippines', 0x4d415249414e2e6a7067),
(17, 'Dingdong Dantes', 'Male', '21', '09453423153', 'Labuyo', 'Tangub City', 'Philippines', 0x44494e47444f4e472e6a7067),
(18, 'Ricardo Dalisay', 'Male', '26', '09437345478', 'Mangga', 'Tangub City', 'Philippines', 0x434152444f2e6a7067),
(19, 'Sarah Gernonimo', 'Female', '25', '09543251632', 'Caniangan', 'Tangub City', 'Philippines', 0x73617241482e6a7067),
(20, 'Simon Ybarra', 'Male', '27', '09534263758', 'Sumirap', 'Tangub City', 'Philippines', 0x7962617272612e706e67),
(21, 'Maria Clara', 'Female', '24', '09453637285', 'Balatacan', 'Tangub City', 'Philippines', 0x6d617269612e706e67),
(22, 'Marl Zuckerberg', 'Male', '2-', '09464768462', 'Pangabuan', 'Tangub City', 'Philippines', 0x6d61726b2e6a7067),
(24, 'Richie Mercaderos', 'Male', '23', '+6396574738', 'Maquilao', 'Tangub City', 'Philippines', 0x7269636869652e6a7067),
(26, 'Jesmith Liwagon', 'Male', '15', '+639563873656', 'Aquino', 'Taangub', 'Philippines', 0x4a4f4e472e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
