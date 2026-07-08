-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2026 at 02:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `book_name`, `name`, `phone_number`, `address`, `city`, `district`, `state`, `pincode`, `payment_mode`, `order_date`) VALUES
(10, 'AI For Everyone', 'Rehan A sandhi', '9081606452', 'Navavas', 'sidhpur', 'patan', 'gujart', '384151', 'Card', '2025-09-02 04:35:05'),
(11, 'Intro. Of Cyber Security', 'kavy', '1122334455', '......', 'sidhpur', 'patan', 'gujart', '384151', 'UPI', '2025-09-02 14:15:59'),
(12, 'OOP With C++', 'Rehan', '9081606452', 'xyz', 'siddhpur', 'patan', 'gujart', '384151', 'COD', '2025-09-03 08:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(4, 'c++', '230', 'book2.jpg'),
(5, 'Cyber security', '120', 'book10.jpg'),
(7, 'Java Script', '240', 'book3.jpg'),
(8, 'Mysql', '300', 'book7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`name`, `email`, `message`) VALUES
('Bhavya Prajapati', 'bh@gmail.com', 'i need book'),
('Bhavya Prajapati', 'bh@gmail.com', 'hello'),
('Rehan A sandhi', 'sandhirehan097@outlook.com', 'xyz'),
('Rehan A sandhi', 'sandhirehan097@outlook.com', 'xyz'),
('Rehan A sandhi', 'sandhirehan097@outlook.com', 'madarchod');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `conpassword` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `password`, `conpassword`, `gender`, `email`, `phone`, `address`) VALUES
('Bhavya ', 'Prajapati', '1234', '1234', 'male', 'bh@gmail.com', '8849039833', 'sidhpur'),
('Rehan', 'Sandhi', '1234', '1234', '', 'rehan@123', '90816 06452', 'xyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
