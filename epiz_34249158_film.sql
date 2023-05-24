-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: sql308.epizy.com
-- Üretim Zamanı: 24 May 2023, 07:04:42
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `epiz_34249158_film`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `movie_score` bigint(200) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `movie_score`) VALUES
(2, 'intersteller', 8),
(5, 'inception', 7),
(15, 'Avengers', 5),
(16, 'Avengers', 9),
(38, 'The Founder', 8),
(40, 'Spider-Man', 1),
(42, 'Iron Man', 2),
(43, 'Thor', 3),
(44, 'Deadpool', 3),
(45, 'Fantastic Four', 2),
(46, 'Spider-Man', 2),
(47, 'Thor', 6),
(49, 'thor', 6),
(50, 'Dune', 9),
(51, 'dune', 8),
(52, 'dune', 8),
(54, 'The Batman', 8),
(56, 'dune', 10),
(57, 'Spider-Man', 5),
(58, 'Renfield', 5),
(60, 'Tenet', 8),
(62, 'Puss in Boots The Last Wish', 7),
(64, 'Fantastic MR.fox', 6),
(65, 'Glass Onion', 7),
(66, 'Nightmare Alley', 6),
(67, 'Bullet Train', 5),
(68, 'Constantine', 7),
(69, 'Now You See Me', 7),
(70, 'Guillermo del Toro s Pinocchio', 8),
(71, 'The Prestige', 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(28, 'emir', '12'),
(41, 'Emir', '88'),
(47, 'ayt', 'aytayt123'),
(48, 'sada', 'dada'),
(49, 'aytac02', 'aytaytayt123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
