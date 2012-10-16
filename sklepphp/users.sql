-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 16 Paź 2012, 18:51
-- Wersja serwera: 5.1.50
-- Wersja PHP: 5.3.8-ZS5.5.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `adres` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `imie`, `email`, `adres`) VALUES
(1, 'Jakub', 'coobam80@yahoo.de', 'Pilsudskiego 14, Wroclaw'),
(5, 'Marysia', 'marysia@g.pl', 'Kosciuszki 90, Krakow'),
(6, 'Janek', 'jan@u.ua', 'Biala 30, Lvov'),
(7, 'Maria', 'mar@g.pl', 'Kosciuszki 10, Poznan'),
(9, 'Zosia', 'zosia@samosia.pl', 'ul. jozia 12, Pasikurowice');
