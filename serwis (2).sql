-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Gru 2016, 18:59
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
-- Struktura tabeli dla tabeli `ogloszenie`
--

CREATE TABLE IF NOT EXISTS `ogloszenie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sprzedajacy` text NOT NULL,
  `tytul` varchar(100) NOT NULL,
  `kategoria` text NOT NULL,
  `cena` varchar(30) NOT NULL,
  `obraz` text NOT NULL,
  `data_dodania` text NOT NULL,
  `tresc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Zrzut danych tabeli `ogloszenie`
--

INSERT INTO `ogloszenie` (`id`, `sprzedajacy`, `tytul`, `kategoria`, `cena`, `obraz`, `data_dodania`, `tresc`) VALUES
(18, 'marian', 'czoÅ‚g', 'Artyleria', '2500000', 'zdjecia/moje/d00d9eea28f9a60d7d1a47930ec82346,640,0,0,0.jpg', '03-12-2016', 'CzoÅ‚g w ktÃ³rym, chory na ebole zgwaÅ‚ciÅ‚ ksiÄ™dza.'),
(16, 'krzychu', 'polo', 'Ubrania', '35', 'zdjecia/moje/7550-koszulki-polo-zapin_2074.jpg', '03-12-2016', 'Koszulka polo o kolorze czarnym.'),
(14, 'stach', 'Harley davidson', 'Motoryzacja', '965000', 'zdjecia/moje/45bb53e81a247acda9eac77f6b885952.jpg', '03-12-2016', 'To jest taki motor, a nie motor.'),
(15, 'krzychu', 'ChiÅ„czyk', 'Gry', '21', 'zdjecia/moje/images (1).jpg', '03-12-2016', 'Gra przeznaczona zarÃ³wno dla dzieci jak i dorosÅ‚ych.');

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
