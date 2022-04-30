-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 08:15 AM
-- Server version: 8.0.25
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userauthentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `phoneNumber` varchar(10) DEFAULT NULL,
  `emailAddress` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `imageName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `lastName`, `phoneNumber`, `emailAddress`, `gender`, `password`, `imageName`) VALUES
('Nikhil ', 'Sarma', '9398581988', 'sarmanikhil76@gmail.com', 'Male', 'K!r@nD0n', 'sarmanikhil76@gmail.com.jpg'),
('Tharun ', 'Kumar', '7013142413', 'tharunampolu9.8@gmail.com', 'Male', 'Tharun@369', ''),
('Chandra', ' Mouli', '9898989898', 'cmchandra170581@gmail.com', 'Male', 'Tharun@369', 'cmchandra170581@gmail.com.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
