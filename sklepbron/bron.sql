-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 28, 2024 at 02:23 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sklepbron`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bron`
--

CREATE TABLE `bron` (
  `ID` int(11) NOT NULL,
  `Nazwa` varchar(32) NOT NULL,
  `Opis` varchar(62) NOT NULL,
  `Cena` decimal(10,2) NOT NULL,
  `zdjecie` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `bron`
--

INSERT INTO `bron` (`ID`, `Nazwa`, `Opis`, `Cena`, `zdjecie`) VALUES
(1, 'Glock 19', 'Pistolet automatyczny', 899.99, 'nowosc1'),
(2, 'M4-A1', 'Karabinek szturmowy', 2499.99, 'nowosc2'),
(3, 'Bagnet M9', 'Nóż taktyczny', 249.99, 'nowosc3'),
(4, 'Kamizelka taktyczna Ronowear', 'Kamizelka taktyczna Ronowear', 549.99, 'nowosc4'),
(5, 'AK-47', 'Karabin szturmowy', 2999.99, 'kalach'),
(6, 'M24', 'Karabin snajperski', 4299.99, 'm24'),
(7, 'CM350', 'Strzelba pompkowa', 2699.99, 'cm350'),
(8, 'WE SMG-8', 'Pistolet maszynowy', 1899.99, 'we_smg8');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bron`
--
ALTER TABLE `bron`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bron`
--
ALTER TABLE `bron`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
