-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 06:38 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pp`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `contact` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fathercontact` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `class` varchar(10) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `paymentstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `name`, `fathername`, `contact`, `email`, `fathercontact`, `address`, `dob`, `class`, `institute`, `country`, `city`, `paymentstatus`) VALUES
(1, 'Muhammad Taha Azam', '---', 2147483647, 'MuhammadTahaAzam@gmail.com', 57, 'abc street', '2020-01-01', '10', 'SSUET', 'Pakistan', 'Karachi', ''),
(2, 'abc', 'abc', 2147483647, 'tahaazam1997@gmail.com', 2, '2', '0002-02-02', '2', '2', '2', '2', ''),
(3, 'Taha', 'azam', 22, 'asbahd@gmail.com', 2, '2', '1111-02-22', '2', 'sa1d', 'sd51', '6a1ds', 'easypaisa'),
(4, 'Taha Azam', 's', 1, 'javalanguage.core@gmail.com', 5, '5', '0005-05-04', '5', '5', '5', '5', 'easypaisa'),
(5, '1', '1', 2, 'support@vidizmo.com', 1, '1', '0001-11-11', '1', '1', '1', '1', 'easypaisa'),
(6, 'dnc', 'mnb', 5, 'javalanguage.core@gmail.com', 5, '5', '0005-05-05', '55', '5', '5', '5', 'easypaisa'),
(7, 'Taha Azam', 'Muhammad Nayyer Azam', -1, 'javalanguage.core@gmail.com', -1, '2', '0001-01-01', 'sadasd', '2', '5', 'karachi', 'easypaisa'),
(8, 'aa', 'd', 22, 'asbahd@gmail.com', 22, '22', '2020-04-22', '22', '22', '22', '2231313', 'jazzcash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
