-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Gru 2016, 20:40
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `serwis`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `archiwum`
--

CREATE TABLE IF NOT EXISTS `archiwum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sprzedajacy` text NOT NULL,
  `tytul` varchar(100) NOT NULL,
  `kategoria` text NOT NULL,
  `cena` varchar(30) NOT NULL,
  `obraz` text NOT NULL,
  `data_dodania` datetime NOT NULL,
  `tresc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Zrzut danych tabeli `archiwum`
--

INSERT INTO `archiwum` (`id`, `sprzedajacy`, `tytul`, `kategoria`, `cena`, `obraz`, `data_dodania`, `tresc`) VALUES
(21, 'marian', 'eibfeiub', 'Dom', '9', 'zdjecia/moje/2016-04-02 16.51.57.jpg', '2016-12-05 20:03:38', 'rre rrere er');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE IF NOT EXISTS `komentarze` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ogloszenie` int(11) NOT NULL,
  `tekst` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenie`
--

CREATE TABLE IF NOT EXISTS `ogloszenie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sprzedajacy` text NOT NULL,
  `tytul` varchar(100) NOT NULL,
  `kategoria` text NOT NULL,
  `cena` varchar(30) NOT NULL,
  `obraz` text NOT NULL,
  `data_dodania` datetime NOT NULL,
  `tresc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Zrzut danych tabeli `ogloszenie`
--

INSERT INTO `ogloszenie` (`id`, `sprzedajacy`, `tytul`, `kategoria`, `cena`, `obraz`, `data_dodania`, `tresc`) VALUES
(22, 'marian', 'czoÅ‚g', 'Artyleria', '2500000', 'zdjecia/moje/d00d9eea28f9a60d7d1a47930ec82346,640,0,0,0.jpg', '2016-12-05 20:22:18', 'czoÅ‚g w ktÃ³rym chory na ebole zgwaÅ‚ciÅ‚ ksiÄ™dza');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE IF NOT EXISTS `uzytkownicy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `haslo` varchar(20) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `email`) VALUES
(1, 'stach', '12345678', 'takiemail@wp.pl'),
(2, 'marek', 'marek123', 'marekto@wp.pl'),
(3, 'krzychu', 'krzychu123', 'krzychu@o2.pl'),
(4, 'marian', 'marian123', 'marianmendai@onet.pl');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
