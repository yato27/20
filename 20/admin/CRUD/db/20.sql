-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 28, 2021 at 02:53 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `household_items_sale`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_cmt` int(11) NOT NULL,
  `id_cus` int(11) NOT NULL,
  `id_empl` int(11) NOT NULL,
  `content` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_cus` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` bit(1) NOT NULL,
  `birth` date NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id_cus`, `name`, `gender`, `birth`, `phone`, `address`, `email`, `password`) VALUES
(1, 'trần văn a', b'1', '2021-12-16', '123456789', 'thái lan', 'tran@gmail.com', '123123'),
(2, 'trần văn b', b'1', '2021-12-17', '', 'thụy điển', 'btran@gmail.com', '123123'),
(3, 'trần văn c', b'1', '2021-12-16', '123456789', 'singapor	', 'tran@gmail.com', '123123'),
(4, 'trần văn d', b'1', '2021-12-17', '', 'thụy sỹ', 'btran@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_empl` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` bit(2) NOT NULL,
  `gender` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_empl`, `name`, `phone`, `address`, `date_of_birth`, `email`, `password`, `level`, `gender`) VALUES
(1, 'nguyễn văn a', '+8412345678', 'cầu giấy', '2021-12-08', 'a@gmail.com', '123123', b'01', b'01'),
(2, 'nguyễn văn b', '123456789', 'hà nội', '2021-12-21', 'b@gmail.com', '123123', b'01', b'01'),
(3, 'nguyễn văn c', '+8412345678', 'cầu giấyyy', '2021-12-08', 'a@gmail.com', '123123', b'01', b'01'),
(4, 'nguyễn văn d', '123456789', 'hà nộiii', '2021-12-21', 'b@gmail.com', '123123', b'01', b'01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_cmt`),
  ADD KEY `id_cus` (`id_cus`),
  ADD KEY `id_empl` (`id_empl`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_cus`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_empl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_empl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_cus`) REFERENCES `customers` (`id_cus`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_empl`) REFERENCES `employee` (`id_empl`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
