-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2024 at 09:37 PM
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
-- Database: `laravel_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `image`, `password`) VALUES
(4, 'Dominique Warren', 'qupujeje@mailinator.com', '???', '$2y$10$gizPUtVt5GyiE8wDc2BEQ.47vX2eg2km1oxjvWwjXF/80yOCjsMeO'),
(5, 'Omar Roman', 'xozekyj@mailinator.com', '???', '$2y$10$BvwGCXHc8Qw5l7X1bWhWT.O7Ijdtl/.8DjeFhcELyIm3yEQQo7Zra'),
(6, 'Mufutau Patton', 'tigevuwyw@mailinator.com', '211chicken-1822472_1920 - Copy.jpg', '$2y$10$PV.tYvdLqd1PTnolOrUAx.Tm91QsmCeRPg/ylWj0lfC/0E7DO2yOe'),
(7, 'Bryar Odom', 'jeqebum@mailinator.com', '94agriculture-1793398_1920 - Copy.jpg', '$2y$10$wprfjEUZwDy1ZQNvHrVxcuErtCB3aVN/jDSfaXgZtlN8kzWaP.Sf2'),
(8, 'Alisa Valentine', 'ciwysady@mailinator.com', '208agriculture-1793398_1920.jpg', '$2y$10$n1dX9Cn1g0TAzJ42l0aGJOhJ/BIKnkze4RMnus.h/WvDT/8JJuxve'),
(10, 'Shellie Anderson', 'jurizur@mailinator.com', '182agriculture-1793398_1920 - Copy.jpg', '$2y$10$3ZE.uQqFabIEBbOrki.GB.XXF6qw8Rw7fdUmhmEu690afn41MAMo2'),
(11, 'Lawrence Mcdaniel', 'ludemi@mailinator.com', '254hot-air-1373167.jpg', '$2y$10$8Iwi1Mhv0CbKt5gypVXKoehwx96agLG5Hoq0T3HaSROw8/Ck7MesS'),
(12, 'Joel England', 'sasoty@mailinator.com', '9hot-air-1373167.jpg', '$2y$10$ymznT6Dof.ApeEbb2RDAyeI5BTirAP8YqBWV/Bm1KfRBxrmRiiU3O'),
(13, 'Carson Wilkinson', 'sixagij@mailinator.com', '188chicken-1822472_1920.jpg', '$2y$10$tWpnvn9q/WR06aJodyrjf.rG9LUCFM5yNrP/qVkSm1bXEyPY6OBTq'),
(14, 'Myles House', 'vynef@mailinator.com', '10chicken-1822472_1920 - Copy.jpg', '$2y$10$8fZsLv6sIFD/qWOY1E6VGeqbOTZSdDlnKYA2zpxF6R2Z3TUpXSpLe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
