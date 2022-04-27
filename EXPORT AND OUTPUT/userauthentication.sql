-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 06:22 PM
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
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `lastName`, `phoneNumber`, `emailAddress`, `gender`, `password`) VALUES
('nikhil', 'sharma', '9398581988', 'nikhil@gmail.com', 'Female', 'nikki'),
('tharun', 'ampolu', '9393929392', 'tharun@gmail.com', 'Male', 'yk'),
('usha', 'kiran', '9182245303', 'kiran@gmail.com', 'Male', 'kiki'),
('random', 'baba', '9999999999', 'jjj@gmail.com', 'Male', 'kikm'),
('random', 'baba', '9999999999', 'jjj@gmail.com', 'Male', 'kikm'),
('jack', 'don', '9191919191', 'jack@gmail.com', 'Male', 'jack'),
('samantha', 'sam', '8989676756', 'samii@gmail.com', 'Female', 'ukukio'),
('jack', 'jack', '0000000000', 'jackjack@gmail.com', 'Female', 'jack'),
('kjhas', 'askjf', '9821948', 'sd@sf.ad', 'Male', 'ss'),
('Prabhas', 'Uppalapati', '9090786756', 'prabhas@gmail.com', 'Male', 'darling'),
('rambabu', 'room', '8888888888', 'rambabu@gmail.com', 'Male', 'ram'),
('Jayanth', ' Friend', '8292839289', 'jayanth@gmail.com', 'Male', 'jayanth');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
