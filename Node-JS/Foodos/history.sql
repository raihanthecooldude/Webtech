-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 03:04 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodos`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `hid` int(20) NOT NULL,
  `area` varchar(500) NOT NULL,
  `food_name` varchar(500) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`hid`, `area`, `food_name`, `price`) VALUES
(1, ' Dhanmondi', ' Sea Food', '500'),
(2, ' Dhanmondi', '  Fish N Fries', '200'),
(3, ' Dhaka housing', '  Chicken Tikka ', '500'),
(4, ' Bashundhara', '  Felafel Shawarma', '500'),
(5, ' Dhanmondi', ' Sea Food', '500'),
(6, ' Dhanmondi', ' Sea Food', '500'),
(7, ' Dhanmondi', ' Sea Food', '500'),
(8, ' Dhanmondi', ' Sea Food', '500'),
(9, ' Dhanmondi', ' Sea Food', '500'),
(10, ' Dhanmondi', ' Sea Food', '500'),
(11, ' Dhanmondi', ' Sea Food', '500'),
(12, ' Dhanmondi', ' Sea Food', '500'),
(13, ' Dhanmondi', ' Sea Food', '500'),
(14, ' Dhanmondi', ' Sea Food', '500'),
(15, ' Dhanmondi', ' Sea Food', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
