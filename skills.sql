-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: sql344.your-server.de
-- Erstellungszeit: 14. Jul 2020 um 16:06
-- Server-Version: 5.7.30-1
-- PHP-Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `portfolio`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `maintitle` text NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `rating` int(11) NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `skills`
--

INSERT INTO `skills` (`id`, `maintitle`, `title`, `text`, `rating`, `path`) VALUES
(1, 'Programmiersprache', 'C', 'Mikrocontroller Programmierung, Strukturen, Zeiger, Listen', 3, 'assets\\img\\skills\\C.png'),
(2, 'Programmiersprache', 'C++', 'Objektorientierte Programmierung, Windows Forms', 3, 'assets\\img\\skills\\CPlusPlus.png'),
(5, 'Programmiersprache', 'C#', 'Objektorientierte Programmierung, Windows Forms, Networking, Xamarin Forms, Windows Dienst', 3, 'assets\\img\\skills\\CSharp.png'),
(6, 'Programmiersprache', 'Java', 'Objektorientierte Programmierung, Web Services ', 4, 'assets\\img\\skills\\Java.png'),
(7, 'Programmiersprache', 'Python', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat', 4, 'assets\\img\\skills\\Python.png'),
(8, 'Programmiersprache', 'HTML & CSS', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat', 4, 'assets\\img\\skills\\HTMLCSS.png'),
(9, 'Programmiersprache', 'Javascript', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat', 3, 'assets\\img\\skills\\Javascript.png'),
(10, 'Programmiersprache', 'PHP', 'Objektorientierte Programmierung, MySqli,Configs, Forms', 3, 'assets\\img\\skills\\Php.png'),
(11, 'Datenbanksystem', 'MySQL ( SQL)', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat', 3, 'assets\\img\\skills\\MySQL.png'),
(12, 'Datenbanksystem', 'MongoDB ( NoSQL )', 'Hauptsaechlich Theoretisches verstaendins ueber NoSQL', 2, 'assets\\img\\skills\\MongoDB.png'),
(13, 'Framework', 'Bootstrap 4', 'Grid, Flexbox, Navbar, Cards, Forms', 3, 'assets\\img\\skills\\Bootstrap.png'),
(14, 'Cloud Computing', 'AWS', 'Lambda, API - Gateway, IC2, S3, Aurora', 3, 'assets\\img\\skills\\aws.png');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
