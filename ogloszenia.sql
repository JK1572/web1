-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Wrz 2016, 14:55
-- Wersja serwera: 10.1.13-MariaDB
-- Wersja PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bus`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenia`
--

CREATE TABLE `ogloszenia` (
  `id` int(11) NOT NULL,
  `typ ogloszenia` text COLLATE utf8_polish_ci NOT NULL,
  `miasto` text COLLATE utf8_polish_ci NOT NULL,
  `zasieg` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ogloszenia`
--

INSERT INTO `ogloszenia` (`id`, `typ ogloszenia`, `miasto`, `zasieg`, `cena`, `opis`) VALUES
(1, 'prywatnie', 'Smigiel', 100, 10, 'Witam serdecznie! Jestem Adminem na tym dancingu');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
