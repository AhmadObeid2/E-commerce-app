-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 12:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hakunamatata`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `orderid` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `meal1` varchar(30) NOT NULL,
  `meal2` varchar(40) NOT NULL,
  `meal3` varchar(50) NOT NULL,
  `meal4` varchar(60) NOT NULL,
  `meal5` varchar(70) NOT NULL,
  `meal6` varchar(80) NOT NULL,
  `drink1` varchar(90) NOT NULL,
  `drink2` varchar(100) NOT NULL,
  `drink3` varchar(110) NOT NULL,
  `drink4` varchar(120) NOT NULL,
  `drink5` varchar(130) NOT NULL,
  `drink6` varchar(140) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`orderid`, `email`, `meal1`, `meal2`, `meal3`, `meal4`, `meal5`, `meal6`, `drink1`, `drink2`, `drink3`, `drink4`, `drink5`, `drink6`, `price`) VALUES
(57, 'aoqj@gmail.com', '', 'mediumbox', '', '', '', '', '', '', 'sprite', '', '', '', 5),
(58, 'abusaleh@gmail.com', '', '', 'largebox', '', '', '', '', '', '', '', 'water', '', 6),
(59, 'abusaleh@gmail.com', 'mediumbox', '', '', '', '', '', '', '', '', '', 'water', '', 5),
(77, 'aaaa@gmail.com', '', '', 'largebox', 'largebox', '', '', '', '', '', '', '', '', 10),
(78, 'aaaa@gmail.com', 'largebox', '', '', '', '', '', 'sprite', '', 'cocacola', '', '', '', 7),
(79, 'aaaa@gmail.com', '', 'largebox', 'xlargebox', 'xlargebox', 'xlargebox', 'xlargebox', '', '', 'cocacola', 'cocacola', 'water', 'water', 33),
(94, 'aya@gmail.com', 'largebox', '', '', '', '', 'mediumbox', 'water', '', '', 'sprite', '', '', 11),
(95, 'htu2@gmail.com', 'mediumbox', '', '', '', '', '', '', '', 'water', '', '', '', 5),
(97, 'h21@gmail.com', 'mediumbox', '', '', '', '', 'xlargebox', 'cocacola', 'cocacola', '', '', '', '', 12),
(104, 'htu7@gmail.com', '', 'mediumbox', '', '', 'xlargebox', 'xlargebox', '', '', 'sprite', '', 'water', '', 18),
(108, 'htu@gmail.com', 'largebox', '', '', 'largebox', '', '', '', '', '', '', '', 'cocacola', 11),
(109, 'htu@gmail.com', 'mediumbox', 'mediumbox', '', '', '', '', '', '', '', '', '', '', 8),
(110, 'htu7@gmail.com', '', '', 'mediumbox', '', '', '', '', '', '', '', '', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `ordername` varchar(100) NOT NULL,
  `orderprice` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`ordername`, `orderprice`) VALUES
('mediumbox', 4),
('largebox', 5),
('xlargebox', 6),
('cocacola', 1),
('sprite', 1),
('water', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `gender`, `address`, `password`) VALUES
(1, 'qadomi', 'htu2@gmail.com', 'male', 'Amman', '12345'),
(2, 'dana', 'dana@gmail.com', 'female', 'paris', '12345'),
(3, 'mahmoud', 'ht@gmail.com', 'female', 'Amman', '123'),
(4, 'Vip tarneeb', 'aoqj@gmail.com', 'male', 'Amman', '2468'),
(5, 'mohmmad', 'abusaleh@gmail.com', 'male', 'Amman', '123'),
(6, 'Vip tarneeb', 'aaaa@gmail.com', 'male', 'Amman', '123'),
(7, 'aya', 'aya@gmail.com', 'female', 'Amman', '2468'),
(8, 'qadomi', '11111', 'male', 'Amman', '123'),
(9, 'qadomi', 'h21@gmail.com', 'male', 'Amman', '123'),
(10, 'qadomi', 'htu7@gmail.com', 'male', 'Amman', '123'),
(11, 'qadomi', 'htu@gmail.com', 'male', 'Amman', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
