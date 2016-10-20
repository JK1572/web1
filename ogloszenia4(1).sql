-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Wrz 2016, 21:47
-- Wersja serwera: 10.1.13-MariaDB
-- Wersja PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ogloszenia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenia`
--

CREATE TABLE `ogloszenia` (
  `id` int(11) NOT NULL,
  `typ` text COLLATE utf8_polish_ci NOT NULL,
  `miasto` text COLLATE utf8_polish_ci NOT NULL,
  `zasieg` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL,
  `NumerTelefonu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ogloszenia`
--

INSERT INTO `ogloszenia` (`id`, `typ`, `miasto`, `zasieg`, `cena`, `opis`, `NumerTelefonu`) VALUES
(1, 'prywatnie', 'Smigiel', 100, 10, 'Jeden record', 0),
(2, 'prywatne', 'Wrocław', 100, 70, 'nowy record', 0),
(3, 'prywatne', 'Wrocław', 90, 70, 'nowy record', 0),
(4, 'prywatny', 'Leszno', 200, 40, '', 0),
(5, 'prywatny', 'Olsztyn', 80, 20, '', 0),
(6, 'prywatny', 'Warszawa', 400, 500, '', 0),
(7, 'prywatny', 'Warszawa', 100, 70, '', 0),
(8, 'prywatny', 'Kraków', 20, 50, '', 0),
(9, 'prywatny', 'Leszno', 70, 18, '', 0),
(10, 'prywatny', 'Leszno', 45, 50, '', 0),
(11, 'prywatny', 'Elbląg', 100, 21, '', 0),
(12, 'prywatny', 'Konin', 22, 48, '', 0),
(13, 'prywatny', 'Lublin', 100, 152, '', 0),
(14, 'prywatny', 'Białystok', 280, 100, '', 0),
(15, 'prywatny', 'Śmigiel', 120, 45, '', 0),
(16, 'prywatny', 'Brzeg', 220, 225, '', 0),
(17, 'prywatny', 'Kościan', 180, 100, '', 0),
(18, 'prywatny', 'Koscian', 250, 140, '', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
