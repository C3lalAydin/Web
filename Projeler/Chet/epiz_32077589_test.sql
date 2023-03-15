-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: sql309.epizy.com
-- Üretim Zamanı: 27 Tem 2022, 10:55:08
-- Sunucu sürümü: 10.3.27-MariaDB
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
-- Veritabanı: `epiz_32077589_test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `saat` varchar(128) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `message`
--

INSERT INTO `message` (`id`, `username`, `mesaj`, `saat`) VALUES
(1, 'ahmet', 'Merhaba!', '12:10'),
(2, 'celal', 'Denemeee', '12:20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'deneme', '1234'),
(2, 'ahmet', '12348'),
(3, 'qaa', '12453'),
(4, 'celal', '123456'),
(5, 'DENEME', 'DENEME'),
(6, 'XFGNXFGMNX', 'FHMXHFMXF'),
(7, 'admin', '123456'),
(8, 'ahmett', '123456'),
(9, 'Uruzbucll', '123456'),
(10, 'enesrange', '27121957er');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `message`
--
ALTER TABLE `message`
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
-- Tablo için AUTO_INCREMENT değeri `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
