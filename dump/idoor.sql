-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 05:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `doors`
--

CREATE TABLE `doors` (
  `door_id` int(11) NOT NULL,
  `door_name` varchar(255) NOT NULL,
  `door_desc` varchar(255) NOT NULL,
  `door_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doors`
--

INSERT INTO `doors` (`door_id`, `door_name`, `door_desc`, `door_price`) VALUES
(1, 'iDoor 14 Green', 'The latest release of the iDoor series. With the latest features and the best technology. Included with mini iRefrigerator 😊.', 20000),
(2, 'iDoor 14 Blue', 'The latest release of the iDoor series. With the latest features and the best technology. Included with mini iRefrigerator 😊.', 20000),
(3, 'iDoor 14 Red', 'The latest release of the iDoor series. With the latest features and the best technology. Included with mini iRefrigerator 😊.', 20000),
(4, 'iDoor 13 Red', 'More minimalist than iDoor 12 series, with amazing tech!', 10000),
(5, 'iDoor 13 Green', 'More minimalist than iDoor 12 series, with amazing tech!', 10000),
(6, 'iDoor 13 White', 'More minimalist than iDoor 12 series, with amazing tech!', 10000),
(7, 'iDoor 12 Limited Edition', 'Get your limited edition iDoor 12 now! Replace your ugly doors with our expensive products!', 7500),
(8, 'iDoor 12 Blue', 'Get your iDoor 12 now! Replace your ugly doors with our expensive products! The difference?', 5000),
(9, 'iDoor 11', 'One of the older versions, but it still functions well!', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `order_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `item_purchased` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_history`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$KpaXSxR0nX.yiswsRsghYuKjLanohPAjDr5YGzL1D6piyux4haIVO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doors`
--
ALTER TABLE `doors`
  ADD PRIMARY KEY (`door_id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doors`
--
ALTER TABLE `doors`
  MODIFY `door_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
