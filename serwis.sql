-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Gru 2016, 17:05
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `serwis`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenie`
--

CREATE TABLE `ogloszenie` (
  `id` int(11) NOT NULL,
  `sprzedajacy` text NOT NULL,
  `tytul` varchar(100) NOT NULL,
  `kategoria` text NOT NULL,
  `cena` varchar(30) NOT NULL,
  `obraz` text NOT NULL,
  `data_dodania` text NOT NULL,
  `tresc` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ogloszenie`
--

INSERT INTO `ogloszenie` (`id`, `sprzedajacy`, `tytul`, `kategoria`, `cena`, `obraz`, `data_dodania`, `tresc`) VALUES
(24, 'stach', 'DziaÅ‚o', 'Artyleria', '15000', 'zdjecia/moje/dzialo.JPG', '2016-12-07 16:59:20', 'Strzela'),
(25, 'stach', 'Sofa', 'Dom', '700', 'zdjecia/moje/6.jpg', '2016-12-07 17:01:07', 'Sofa, na ktÃ³rej posuwaÅ‚ siÄ™ Iwan'),
(23, 'stach', 'GTA V', 'Gry', '140', 'zdjecia/moje/5.jpg', '2016-12-07 16:57:58', 'Gra'),
(22, 'marian', 'Drewno', 'Dom', '30', 'zdjecia/moje/4.jpg', '2016-12-07 16:56:09', 'opaÅ‚owe'),
(20, 'krzychu', 'Mleko', 'Dom', '2', 'zdjecia/moje/2.jpg', '2016-12-07 16:53:22', 'dobre'),
(21, 'marian', 'Kask', 'Motoryzacja', '50', 'zdjecia/moje/3.jpg', '2016-12-07 16:54:27', 'Motocyklowy'),
(19, 'krzychu', 'Audi S7', 'Motoryzacja', '1000000', 'zdjecia/moje/1.jpg', '2016-12-07 16:51:51', 'igÅ‚a'),
(26, 'marek', 'Czapka', 'Ubrania', '50', 'zdjecia/moje/7.jpg', '2016-12-07 17:03:16', 'Czapka'),
(27, 'marek', 'Yamaha', 'Motoryzacja', '100000', 'zdjecia/moje/8.jpg', '2016-12-07 17:04:20', 'R1'),
(28, 'marek', 'Traktor', 'Motoryzacja', '6000', 'zdjecia/moje/30.jpg', '2016-12-07 17:05:19', 'Stara, poczciwa 30');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `haslo` varchar(20) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`) VALUES
(1, 'stach', '12345678', 'takiemail@wp.pl'),
(2, 'marek', 'marek123', 'marekto@wp.pl'),
(3, 'krzychu', 'krzychu123', 'krzychu@o2.pl'),
(4, 'marian', 'marian123', 'marianmendai@onet.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ogloszenie`
--
ALTER TABLE `ogloszenie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ogloszenie`
--
ALTER TABLE `ogloszenie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
