-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Paź 2016, 10:23
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 5.5.38

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
-- Struktura tabeli dla tabeli `daneusers`
--

CREATE TABLE `daneusers` (
  `iduser` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `adres` text COLLATE utf8_polish_ci NOT NULL,
  `wojewodztwo` text COLLATE utf8_polish_ci NOT NULL,
  `telefon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `daneusers`
--

INSERT INTO `daneusers` (`iduser`, `imie`, `nazwisko`, `adres`, `wojewodztwo`, `telefon`) VALUES
(1, 'Admin', 'Adminowiski', 'Adminowo', 'Adminowskie', 123456798),
(2, 'Damin', 'Daminowski', 'Daminowo', 'Doaminowskie', 7654321);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oferty`
--

CREATE TABLE `oferty` (
  `idogloszen` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nazwatowaru` text COLLATE utf8_polish_ci NOT NULL,
  `miejscestartu` text COLLATE utf8_polish_ci NOT NULL,
  `miejscedocelowe` text COLLATE utf8_polish_ci NOT NULL,
  `cena` int(11) NOT NULL,
  `waga` int(11) NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `oferty`
--

INSERT INTO `oferty` (`idogloszen`, `iduser`, `nazwatowaru`, `miejscestartu`, `miejscedocelowe`, `cena`, `waga`, `opis`) VALUES
(9, 1, 'ziemnaiki', 'Smigiel', 'Poznan', 40, 25, 'fdsfdsa'),
(10, 1, 'ziemnaiki', 'Smigiel', 'Poznan', 0, 0, 'fda'),
(11, 1, 'ziemniaki', 'Smigiel', 'Poznan', 0, 0, 'dsadsa'),
(12, 2, 'ziemniaki', 'Smigiel', 'Poznan', 40, 80, 'dasdsa'),
(13, 1, 'Pyrki ', 'Smigiel', 'Leszno', 20, 15, 'Przewiezie mi ktoÅ› pyrki?');

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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Login` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `Haslo` text COLLATE utf8_polish_ci NOT NULL,
  `rodzajkonta` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`ID`, `Login`, `email`, `Haslo`, `rodzajkonta`) VALUES
(1, 'Admin', 'a.admin@gmail.com', '$2y$10$DOGoZiZqKTcSsS7tgMCSjuiLnggZN5RnkoHMPtzEHNwhqxoFWyum6', 'Osobowe'),
(2, '', 'b.admin@gmail.com', '$2y$10$nPgP7I44JpfnWifyyhyNdu/WBCrquRar8mF2ynRZ6CE.Gre7bbyC6', 'a'),
(3, '', 'c.user@user.com', '$2y$10$ctkgauglart/hvPiRHxEe.VpUl3N2iPEeS2.WJF2cDjla61JBOypi', 'a');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `idogloszenia` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `markamodel` text COLLATE utf8_polish_ci NOT NULL,
  `rodzceny` text COLLATE utf8_polish_ci NOT NULL,
  `cena` int(11) NOT NULL,
  `miasto` text COLLATE utf8_polish_ci NOT NULL,
  `zasieg` int(11) NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`idogloszenia`, `iduser`, `markamodel`, `rodzceny`, `cena`, `miasto`, `zasieg`, `opis`) VALUES
(1, 2, 'Polonez Caro', 'kilometr', 5, 'Smigiel', 25, 'Witam serdecznie!\r\nMam do zaoferowania swiadczenie usÅ‚ug przewozu do 500 kg.'),
(2, 2, 'Trabant', 'kilometr', 6, 'Koscian', 30, 'Witam serdecznie mam do zaoferowania przewoz towarÃ³w do 600 kg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `oferty`
--
ALTER TABLE `oferty`
  ADD PRIMARY KEY (`idogloszen`);

--
-- Indexes for table `ogloszenia`
--
ALTER TABLE `ogloszenia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`idogloszenia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `oferty`
--
ALTER TABLE `oferty`
  MODIFY `idogloszen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT dla tabeli `ogloszenia`
--
ALTER TABLE `ogloszenia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `idogloszenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
