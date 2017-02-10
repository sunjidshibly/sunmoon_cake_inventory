-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 01:15 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `drafts`
--

CREATE TABLE `drafts` (
  `id` int(11) NOT NULL,
  `sell_no` int(100) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `unit_price` decimal(65,0) NOT NULL,
  `sell_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(50) NOT NULL,
  `unit_price` decimal(65,0) NOT NULL,
  `purchased_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `quantity`, `unit_price`, `purchased_date`) VALUES
(1, 'P1E25', 'Kitkat', 1000, '60', '2017-02-10 14:35:00'),
(2, 'BE12R', 'Dairy Milk Chocolate', 1000, '180', '2017-02-10 10:10:00'),
(3, '4EAGE', 'Choco Choco ', 1000, '5', '2017-02-10 10:10:00'),
(4, 'GE23KL', 'Parasuit', 1000, '80', '2017-02-07 18:16:00'),
(5, 'P1E26', 'Biscuit', 500, '50', '2017-02-16 18:14:00'),
(6, 'TW2KJ', 'Jhonson', 500, '270', '2017-02-18 17:18:00'),
(7, 'ERTYU', 'Pran ', 300, '30', '2017-02-10 10:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE `sells` (
  `ID` int(100) NOT NULL,
  `sell_code` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `sell_quantity` int(50) NOT NULL,
  `unit_price` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sells`
--

INSERT INTO `sells` (`ID`, `sell_code`, `product_code`, `product_name`, `sell_quantity`, `unit_price`) VALUES
(1, '5000', 'P1E25', 'Kitkat', 4, '60'),
(3, '5001', 'BE12R', 'Dairy Milk Chocolate', 3, '180');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drafts`
--
ALTER TABLE `drafts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unit_price` (`unit_price`),
  ADD KEY `product_code` (`product_code`),
  ADD KEY `product_name` (`product_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`),
  ADD KEY `product_name` (`product_name`),
  ADD KEY `unit_price` (`unit_price`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `product_code` (`product_code`),
  ADD KEY `product_name` (`product_name`),
  ADD KEY `unit_price` (`unit_price`),
  ADD KEY `product_code_2` (`product_code`),
  ADD KEY `product_name_2` (`product_name`),
  ADD KEY `unit_price_2` (`unit_price`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drafts`
--
ALTER TABLE `drafts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sells`
--
ALTER TABLE `sells`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `drafts`
--
ALTER TABLE `drafts`
  ADD CONSTRAINT `drafts_ibfk_2` FOREIGN KEY (`product_code`) REFERENCES `products` (`product_code`),
  ADD CONSTRAINT `drafts_ibfk_3` FOREIGN KEY (`product_name`) REFERENCES `products` (`product_name`),
  ADD CONSTRAINT `drafts_ibfk_4` FOREIGN KEY (`unit_price`) REFERENCES `products` (`unit_price`);

--
-- Constraints for table `sells`
--
ALTER TABLE `sells`
  ADD CONSTRAINT `sells_ibfk_1` FOREIGN KEY (`product_code`) REFERENCES `products` (`product_code`),
  ADD CONSTRAINT `sells_ibfk_2` FOREIGN KEY (`product_name`) REFERENCES `products` (`product_name`),
  ADD CONSTRAINT `sells_ibfk_3` FOREIGN KEY (`unit_price`) REFERENCES `products` (`unit_price`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
