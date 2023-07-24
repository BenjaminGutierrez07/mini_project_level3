-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2023 at 08:38 PM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` longblob,
  `name` varchar(100) NOT NULL,
  `bio` text,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contrasena` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emial` (`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `photo`, `name`, `bio`, `phone`, `email`, `contrasena`) VALUES
(1, 0x666f746f312e6a7067, 'Benjamin Gutierrez', 'Hola esta es la primera cuenta', '1234567', 'benjamin@world.com', '12131415'),
(2, 0x666f746f322e6a7067, 'Mateo Ovando', 'Este es el cambio de nombre ', '98765455', 'lucas@world.com', '98979695'),
(25, NULL, 'ndjke', 'sdfdewsd', '1233456', 'samuel@1997', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
