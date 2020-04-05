-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 08:13 PM
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
-- Table structure for table `commerceolevel`
--

CREATE TABLE `commerceolevel` (
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
  `paymentstatus` varchar(255) NOT NULL,
  `Time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commerceolevel`
--

INSERT INTO `commerceolevel` (`id`, `name`, `fathername`, `contact`, `email`, `fathercontact`, `address`, `dob`, `class`, `institute`, `country`, `city`, `paymentstatus`, `Time`) VALUES
(1, 'Muhammad Taha Azam', '---', 2147483647, 'MuhammadTahaAzam@gmail.com', 57, 'abc street', '2020-01-01', '10', 'SSUET', 'Pakistan', 'Karachi', '', '2020-04-05'),
(2, 'abc', 'abc', 2147483647, 'tahaazam1997@gmail.com', 2, '2', '0002-02-02', '2', '2', '2', '2', '', '2020-04-05'),
(3, 'Taha', 'azam', 22, 'asbahd@gmail.com', 2, '2', '1111-02-22', '2', 'sa1d', 'sd51', '6a1ds', 'easypaisa', '2020-04-05'),
(4, 'Taha Azam', 's', 1, 'javalanguage.core@gmail.com', 5, '5', '0005-05-04', '5', '5', '5', '5', 'easypaisa', '2020-04-05'),
(5, '1', '1', 2, 'support@vidizmo.com', 1, '1', '0001-11-11', '1', '1', '1', '1', 'easypaisa', '2020-04-05'),
(6, 'dnc', 'mnb', 5, 'javalanguage.core@gmail.com', 5, '5', '0005-05-05', '55', '5', '5', '5', 'easypaisa', '2020-04-05'),
(7, 'Taha Azam', 'Muhammad Nayyer Azam', -1, 'javalanguage.core@gmail.com', -1, '2', '0001-01-01', 'sadasd', '2', '5', 'karachi', 'easypaisa', '2020-04-05'),
(8, 'aa', 'd', 22, 'asbahd@gmail.com', 22, '22', '2020-04-22', '22', '22', '22', '2231313', 'jazzcash', '2020-04-05'),
(9, 'Taha Azam', 'Muhammad Nayyer Azam', 555, 'javalanguage.core@gmail.com', 88888, 'SDAMSBDJHASBDHASBDJHBASHDBJASDJK1314352', '2020-04-22', 'asjdbbjkas', 'SSUET', 'Pakistan', 'Karachi', 'jazzcash', '2020-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `traffic`
--

CREATE TABLE `traffic` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `num` int(255) NOT NULL,
  `fnum` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ins` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traffic`
--

INSERT INTO `traffic` (`id`, `name`, `fname`, `num`, `fnum`, `email`, `ins`, `date`) VALUES
(1, 'Taha Azam', 'Muhammad Taha Azam', 0, 0, 'javalanguage.core@gmail.com', 'ssuet', '2020-04-05'),
(2, 'Taha Azam', 'Muhammad Taha Azam', 0, 0, 'javalanguage.core@gmail.com', 'ssuet', '2020-04-05'),
(3, 'Taha Azam', 'Nayyer', 59262, 5569, 'MuhammadTahaAzam@gmail.com', 'ups', '2020-04-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commerceolevel`
--
ALTER TABLE `commerceolevel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traffic`
--
ALTER TABLE `traffic`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commerceolevel`
--
ALTER TABLE `commerceolevel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `traffic`
--
ALTER TABLE `traffic`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
