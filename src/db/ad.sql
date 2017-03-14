-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 02:02 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ad`
--
CREATE DATABASE IF NOT EXISTS `ad` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ad`;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `contact_mail` varchar(255) CHARACTER SET utf32 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_mail`) VALUES
(1, 'grimreaperld@gmail.com'),
(2, 'tannhan113@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `samples`
--

DROP TABLE IF EXISTS `samples`;
CREATE TABLE `samples` (
  `sample_id` int(11) NOT NULL,
  `sample_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `samples`
--

INSERT INTO `samples` (`sample_id`, `sample_name`) VALUES
(1, 'Test1'),
(2, 'Messi'),
(3, 'Car'),
(4, 'Barcelona'),
(5, 'Ronaldo');

-- --------------------------------------------------------

--
-- Table structure for table `samples_categories`
--

DROP TABLE IF EXISTS `samples_categories`;
CREATE TABLE `samples_categories` (
  `sample_category_id` int(10) NOT NULL,
  `sample_category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `samples_categories`
--

INSERT INTO `samples_categories` (`sample_category_id`, `sample_category_name`) VALUES
(1, 'Subject11'),
(2, 'History'),
(3, 'Math'),
(4, 'Science'),
(5, 'Information Technology'),
(6, 'nhan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `samples`
--
ALTER TABLE `samples`
  ADD PRIMARY KEY (`sample_id`);

--
-- Indexes for table `samples_categories`
--
ALTER TABLE `samples_categories`
  ADD PRIMARY KEY (`sample_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `samples`
--
ALTER TABLE `samples`
  MODIFY `sample_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `samples_categories`
--
ALTER TABLE `samples_categories`
  MODIFY `sample_category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
