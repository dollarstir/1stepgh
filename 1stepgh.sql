-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2020 at 06:26 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1stepgh`
--

-- --------------------------------------------------------

--
-- Table structure for table `bg`
--

CREATE TABLE `bg` (
  `id` int(11) NOT NULL,
  `background` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bg`
--

INSERT INTO `bg` (`id`, `background`) VALUES
(1, 'images_1581700809.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `nickname` varchar(200) DEFAULT NULL,
  `position` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `club` varchar(200) NOT NULL,
  `ambition` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `dateadded` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `nickname`, `position`, `contact`, `club`, `ambition`, `pic`, `dateadded`) VALUES
(4, 'Dollar stir', 'Dollarstir', 'CEO/ Founder', '0556676471', 'Basket Ball ', 'Cool things', '5e46aeadd0cc8.png', 'fffff');

-- --------------------------------------------------------

--
-- Table structure for table `super`
--

CREATE TABLE `super` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super`
--

INSERT INTO `super` (`id`, `name`, `email`, `password`) VALUES
(1, '1step GH', '1stepgh@gmail.com', 'king12345'),
(3, 'Admin2', 'admin@1stepgh.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(11) NOT NULL,
  `app_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `app_name`) VALUES
(1, '1step Gh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bg`
--
ALTER TABLE `bg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super`
--
ALTER TABLE `super`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bg`
--
ALTER TABLE `bg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `super`
--
ALTER TABLE `super`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
