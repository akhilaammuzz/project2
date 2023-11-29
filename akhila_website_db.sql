-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 11:26 AM
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
-- Database: `akhila_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(100) NOT NULL,
  `cart_pid` int(11) NOT NULL,
  `cart_name` varchar(100) NOT NULL,
  `cart_price` int(100) NOT NULL,
  `cart_image` varchar(100) NOT NULL,
  `cart_user` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_pid`, `cart_name`, `cart_price`, `cart_image`, `cart_user`) VALUES
(147, 1, ' Mobile', 10000, 'uploads/mobile.webp', 'akhila'),
(149, 3, ' Pen', 50, 'uploads/pen.jpg', 'akhila'),
(155, 8, ' lipstick', 1000, 'uploads/lipstick.webp', 'akhila'),
(156, 7, ' foundation', 500, 'uploads/foundation.jpg', 'akhila'),
(157, 3, ' Pen', 50, 'uploads/pen.jpg', 'akhila'),
(158, 2, ' Laptop', 50000, 'uploads/laptop.jpg', 'akhila'),
(159, 2, ' Laptop', 50000, 'uploads/laptop.jpg', 'nithya01'),
(160, 15, ' mascara', 1000, 'uploads/mascara.jpg', 'mahima'),
(161, 15, ' mascara', 1000, 'uploads/mascara.jpg', 'akhila');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_message`) VALUES
(26, 'ajay', 'ajaymanikandan112gmail.com', 'Hello friends'),
(27, 'ajay', 'ajaymanikandan112gmail.com', 'Hello friends'),
(28, 'ajay', 'ajaymanikandan112gmail.com', 'Hello friends'),
(29, 'ajay', 'ajaymanikandan112gmail.com', 'Hello friends');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Mobile', '10000', 'uploads/mobile.webp'),
(2, 'Laptop', '50000', 'uploads/laptop.jpg'),
(3, 'Pen', '50', 'uploads/pen.jpg'),
(4, 'earpod', '10000', 'uploads/earpod.webp'),
(5, 'hand bag', '5000', 'uploads/hand bag.jpg'),
(6, 'water bottle', '1000', 'uploads/water bottle.jpg'),
(7, 'foundation', '500', 'uploads/foundation.jpg'),
(8, 'lipstick', '1000', 'uploads/lipstick.webp'),
(9, 'nailpolish', '50', 'uploads/nailpolish.jpg'),
(10, 'eyeliner', '500', 'uploads/eyeliner.jpg'),
(11, 'Mobile', '10000', 'uploads/background.webp'),
(12, 'kajal', '500', 'uploads/kajal.jpg'),
(13, 'lip liner', '500', 'uploads/lip liner.jpg'),
(14, 'Mobile', '10000', 'uploads/Flower_poster_2.jpg'),
(15, 'mascara', '1000', 'uploads/mascara.jpg'),
(16, 'mascara', '1000', 'uploads/mascara.webp');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `reg_name` varchar(100) NOT NULL,
  `reg_email` varchar(100) NOT NULL,
  `reg_phone` int(11) NOT NULL,
  `reg_user` varchar(100) NOT NULL,
  `reg_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `reg_name`, `reg_email`, `reg_phone`, `reg_user`, `reg_pass`) VALUES
(16, ' akhila', 'akhila123@gmail.com', 7878, 'akhila', '123456'),
(18, ' ammu', 'ammu123@gmail.com', 2147483647, 'akhila', '111111'),
(19, ' nidhi', 'akhila@gmail.com', 2147483647, 'nidhivishnu123', '000000'),
(20, ' nithya', 'nithya@gmail.com', 2147483647, 'nithya01', '000000'),
(21, ' mahima', 'mahima123@gmail.com', 2147483647, 'mahima', '000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
