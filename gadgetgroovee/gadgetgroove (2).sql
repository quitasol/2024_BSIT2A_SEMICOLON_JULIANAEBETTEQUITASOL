-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 10:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadgetgroove`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `time_ordered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(56) NOT NULL,
  `price` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `item_id`, `user_id`, `item_qty`, `time_ordered`, `order_status`, `price`) VALUES
(32, 1, 1, 2, '2024-06-05 06:30:00', 'Order Placed', '90000'),
(36, 7, 0, 1, '2024-06-05 07:21:16', 'Order Placed', '45000'),
(37, 6, 0, 2, '2024-06-05 07:21:23', 'Order Placed', '90000');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_img`, `product_name`, `description`, `price`, `status`) VALUES
(1, '4.jpg', 'Tablet', 'kineme', 60000.00, 'active'),
(2, '3.jpg', 'selpon', 'mamamo', 6900.00, 'inactive'),
(3, 'azuz2.jpg', 'laptop', 'malay ko', 6900.00, 'inactive'),
(4, 'msg5631590944-4961.jpg', 'Tablet', 'tablet na lumilipad', 45000.00, 'active'),
(5, 'msg5631590944-4961.jpg', 'Tablet', 'description', 45000.00, 'active'),
(6, 'msg5631590944-4961.jpg', 'Tablet', 'tablet na lumilipad', 45000.00, 'active'),
(7, 'msg5631590944-4961.jpg', 'Tablet', 'description', 45000.00, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contactnumber` varchar(15) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) NOT NULL COMMENT 'F - Female\r\nM - Male\r\nP - prefer not to say',
  `address` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zone` int(11) NOT NULL,
  `region` varchar(50) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `contactnumber`, `birthdate`, `gender`, `address`, `country`, `zone`, `region`, `postalcode`, `username`, `email`, `password`, `user_type`) VALUES
(1, 'Eunice Mae', 'Tanguin', '09924478933', '2003-07-29', 'P', 'Polangui Albay', 'Philippines', 6, 'Manila', '4410', 'eunice', 'eunice2003@gmail.com', '$2y$10$MASuiaEAVAUNVWEo8EV90ugqxhlx3te.MrFw3GUBsBNIzQinFuaN.', 'user'),
(2, 'Juliana', 'Quitasol', '0948431702', '2004-07-10', 'F', 'Bagumbayan, Ligao City', 'Philippines', 6, 'Albay', '4504', 'juls', 'juls@gmail.com', '$2y$10$8DLWUyhI05XXOmcJuYYoKO6IM.8/ABDjlIxnCSs5Xqu2aAREUmspS', 'admin'),
(3, 'Eunice Mae', 'Tanguin', '09924478933', '2003-07-29', 'F', 'Polangui Albay', 'Philippines', 4, 'Manila', '4410', 'eunice', 'eunice2003@gmail.com', '$2y$10$krnGJj19ioYa93edmB1U3O5A2uhUje9EpYj31P45nTxVmwt2YZ9vm', 'user'),
(4, 'Carl', 'Hugo', '0912345678', '2024-06-04', 'M', 'Polangui Albay', 'Philippines', 3, 'Europe', '4410', 'carl', 'carl@gmail.com', '$2y$10$3YjkiHuq1oDYwahyOALXIe0WTpdTvO11UxB6JmRrnOUSQviWEJTpK', 'admin'),
(5, 'Jenny', 'Losantas', '09637097625', '2004-07-13', 'F', 'Mendes,Polangui, Albay', 'Philippines', 2, 'Manila', '4506', 'jenny', 'jenny@gmail.com', '$2y$10$LCs1lWzY5MYMZ6qQsbL0dOTVwGzXgLSiALqwixPBXMlHhAHdQvIBy', 'user'),
(6, 'Alex', 'Paraiso', '09513373760', '2004-04-24', 'G', 'Polangui Albay', 'Philippines', 1, 'Manila', '4410', 'alex', 'alexandranicolecapiliparaiso@gmail.com', '$2y$10$6CPr..mXAKpA/Z6jWfxzLOGz1qDoYGvL3pcA8q2BhSHBYFrwFFHKy', 'admin'),
(7, 'Manuel', 'Sapao', '0912345678', '2024-06-05', 'M', 'Ligao', 'Philippines', 1, 'Manila', '4410', 'Juliana Quitasol', 'manuel@gmail.com', '$2y$10$LaHpGiQeg1WZd6KO1gM/eekL9pm2gGmICyUoyn0a2hUCPJCqoKgB6', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
