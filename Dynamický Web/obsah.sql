-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 11:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obsah`
--

-- --------------------------------------------------------

--
-- Table structure for table `texty`
--

CREATE TABLE `texty` (
  `idtextu` int(10) UNSIGNED NOT NULL,
  `nazov` varchar(100) COLLATE utf8_slovak_ci NOT NULL,
  `urlnazov` varchar(100) COLLATE utf8_slovak_ci NOT NULL,
  `klucoveslova` varchar(100) COLLATE utf8_slovak_ci NOT NULL,
  `metapopis` varchar(255) COLLATE utf8_slovak_ci NOT NULL,
  `text` text COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `texty`
--

INSERT INTO `texty` (`idtextu`, `nazov`, `urlnazov`, `klucoveslova`, `metapopis`, `text`) VALUES
(1, 'Uvodná stránka', 'index', 'úvod', 'Uvodná stránka testovania', 'Vítajte na úvodnej stránke<br /><br />\r\nlorem lorem lorem lorem lorem lorem\r\nlorem lorem lorem lorem lorem lorem\r\nlorem lorem lorem lorem lorem lorem'),
(2, 'O nás', 'o-nas', 'testovacia aplikácia', 'Podstránka kde sa dočítate niečo o nás', 'Prerobíme statické stránky na dynamické'),
(3, 'Kontakt', 'kontakt', 'kontakt', 'Kontaktujte nás pomocou formulára', 'Môžte nás kontaktovať pomocou tohto formulára'),
(4, 'ERROR 404', 'error404', 'neexistuje', 'Požadovaná stránka neexistuje', 'Ľutujeme požadovaná stránka neexistuje');

-- --------------------------------------------------------

--
-- Table structure for table `udaje`
--

CREATE TABLE `udaje` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_slovak_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_slovak_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `udaje`
--

INSERT INTO `udaje` (`id`, `user_name`, `password`) VALUES
(1, 'patrik', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `texty`
--
ALTER TABLE `texty`
  ADD PRIMARY KEY (`idtextu`),
  ADD UNIQUE KEY `urlnazov` (`urlnazov`);

--
-- Indexes for table `udaje`
--
ALTER TABLE `udaje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `texty`
--
ALTER TABLE `texty`
  MODIFY `idtextu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `udaje`
--
ALTER TABLE `udaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
