-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 06:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proiect`
--

-- --------------------------------------------------------

--
-- Table structure for table `useri`
--

CREATE TABLE `useri` (
  `ID` int(11) NOT NULL,
  `Nume_Prenume` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Nume_Utilizator` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Parola` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Parola_dehash` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Disciplina_Predata` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Tip_Disciplina` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `Specializare` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `An` int(1) NOT NULL,
  `Interval_Disponibil` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Dumping data for table `useri`
--

INSERT INTO `useri` (`ID`, `Nume_Prenume`, `Nume_Utilizator`, `Parola`, `Parola_dehash`, `Disciplina_Predata`, `Tip_Disciplina`, `Specializare`, `An`, `Interval_Disponibil`) VALUES
(1, 'Marius Tureac', 'Proiect', '$2y$10$RLDEGi8TO1zxLpPgZOtMQep1TnNDNXzXeTD3fEsD6Tm', 'parola', 'Nu', 'Proiect', 'FIIR', 2, 'Nespecificat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useri`
--
ALTER TABLE `useri`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `useri`
--
ALTER TABLE `useri`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
