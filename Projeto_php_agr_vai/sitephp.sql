-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 10:40 AM
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
-- Database: `sitephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `ID` int(11) NOT NULL,
  `Title` tinytext DEFAULT NULL,
  `Content` longtext DEFAULT NULL,
  `CttNum` tinytext DEFAULT NULL,
  `CttMail` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`ID`, `Title`, `Content`, `CttNum`, `CttMail`) VALUES
(1, 'dfsgsdfg', 'todos os botoes tao apontando para o title no banco de dados, apesar de estarem com names e submits difere', '666', 'mano@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `UsersID` int(11) NOT NULL,
  `UIDUsers` tinytext NOT NULL,
  `EmailUsers` tinytext NOT NULL,
  `PSWDUsers` longtext NOT NULL,
  `UsersAccess` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`UsersID`, `UIDUsers`, `EmailUsers`, `PSWDUsers`, `UsersAccess`) VALUES
(5, 'Pedro', 'pedro@gmail.com', '$2y$10$n5Y./HKzIGxeh6i75nywmOOEiISub86k/FTr0GGPJjAN9d2r7qcG6', 1),
(6, 'asdfgf', 'asdfd@dfjdffd.com', '$2y$10$M0vOEPT/IrNb91BKNbbm8ui42GUyl1L.mpureBIXpYSHQpLgwgxiK', 0),
(7, 'asdfasdf', 'sdfasdf@gmail.com', '$2y$10$pC0aovYxcvzHJ6CwOFE10..vjvNhIyrfBAHi61ldvv6wpY9anH1cG', 0),
(8, 'joao', 'joao@gmail.com', '$2y$10$3KaG4C.7vwKrhfOg9wGwfO2RGTdmOqIfHWYBEiKAdfRJztt2Ygemy', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`UsersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `UsersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
