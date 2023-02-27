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
(2, 'celal', 'Denemeee', '12:20'),
(3, 'deneme', 'NCFHNHFXNXFHNXF', '12.30'),
(4, 'aa', 'nfgxn', '12:40'),
(5, 'Mehmet111', 'Merhaba', '15:35'),
(6, 'merhaba', 'bnxfgngf', '15.43'),
(7, 'deneme', 'NCFHNHFXNXFHNXF', '12.30'),
(8, 'aa', 'nfgxn', '12:40'),
(9, 'Mehmet111', 'Merhaba', '15:35'),
(10, 'merhaba', 'bnxfgngf', '15.43'),
(11, 'admin', 'deneme', '16:43'),
(12, 'admin', 'oha', '16:43'),
(13, 'ahmett', 'Deneme', '16:44'),
(14, 'admin', '', '16:47'),
(15, 'admin', '', '16:47'),
(16, 'admin', 'a', '16:47'),
(17, 'admin', 'ükqmmel', '16:47'),
(18, 'admin', '', '16:47'),
(19, 'admin', 'a', '16:49'),
(20, 'admin', ' b', '16:49'),
(21, 'admin', '               g', '16:50'),
(22, 'admin', '  ', '16:50'),
(23, 'admin', 'a', '16:50'),
(24, 'admin', 'bgdxxgfngxfn', '16:50'),
(25, 'celal', 'Merhaba', '17:01'),
(26, 'celal', 'Deneme', '17:01'),
(27, 'celal', 'a', '17:01'),
(28, 'celal', 'a', '17:01'),
(29, 'celal', 'g', '17:01'),
(30, 'celal', 'nfxg', '17:01'),
(31, 'celal', 'bnfxgn', '17:01'),
(32, 'celal', 'Merhaba', '17:01'),
(33, 'celal', 'Deneme', '17:01'),
(34, 'celal', 'bfgcn', '17:02'),
(35, 'celal', 'cf', '17:02'),
(36, 'celal', '    ', '17:02'),
(37, 'celal', '   ', '17:02'),
(38, 'celal', '  ', '17:02'),
(39, 'celal', '                     ', '17:02'),
(40, 'admin', 'd', '17:02'),
(41, 'admin', 'deneme', '17:02'),
(42, 'admin', 'ngchncgh', '17:02'),
(43, 'admin', 'ncghmc', '17:02'),
(44, 'admin', 'AA', '17:02'),
(45, 'admin', 'NGHCMCGH', '17:02'),
(46, 'admin', 'deneme', '17:02'),
(47, 'admin', 'Meraba', '17:02'),
(48, 'admin', 'NFGCNXFHLKNFKLXNFHKL', '17:02'),
(49, 'celal', 'Merhaba', '17:06'),
(50, 'admin', 'aa', '17:06'),
(51, 'celal', 'Merhaba', '17:06'),
(52, 'celal', 'a', '18:18'),
(53, 'celal', 'a', '18:18'),
(54, 'celal', 'a', '18:18'),
(55, 'celal', 'a', '18:18'),
(56, 'celal', 'a', '18:18'),
(57, 'celal', 'a', '18:18'),
(58, 'celal', 'a', '18:18'),
(59, 'celal', 'a', '18:18'),
(60, 'celal', 'a', '18:18'),
(61, 'admin', 'aaaa', '18:32'),
(62, 'celal', 'Selam', '18:38'),
(63, 'celal', 'a', '18:38'),
(64, 'deneme', 'a', '18:46'),
(65, 'deneme', 'a', '18:46'),
(66, 'deneme', 'nghcm', '18:46'),
(67, 'admin', 'a', '18:47'),
(68, 'deneme', 'Meerhaba', '18:59'),
(69, 'deneme', 'selam', '18:59'),
(70, 'Celal', 'Merhaba', '19:01'),
(71, 'Celal', 'A', '19:01'),
(72, 'Celal', 'Ãœ', '19:02'),
(73, 'Celal', 'E', '19:06'),
(74, 'Celal', '  ', '19:17'),
(75, 'Celal', '  ', '19:17'),
(76, 'Celal', 'Denek lazÄ±m la bana amk', '19:17'),
(77, 'Celal', 'Nerdesin sarpir ', '19:17'),
(78, 'Uruzbucll', 'Sa', '19:20'),
(79, 'Uruzbucll', 'Geldim ', '19:20'),
(80, 'Celal', 'As', '19:20'),
(81, 'Uruzbucll', 'La', '19:21'),
(82, 'Celal', 'HoÅŸgeldij', '19:21'),
(83, 'Celal', 'Ã‡alÄ±ÅŸÄ±yor aw', '19:21'),
(84, 'Uruzbucll', 'GÃ¼zelmiÅŸ bu amk da', '19:21'),
(85, 'Celal', 'KWIGEOXOSOVIDIC', '19:21'),
(86, 'Celal', 'Buna bi uÄŸraÅŸmÄ±ÅŸÄ±m', '19:21'),
(87, 'Uruzbucll', 'Her mesajdan sonra tekrar klavyeye girmek lazÄ±m dÃ¼zelt ÅŸunu aq', '19:21'),
(88, 'Uruzbucll', 'D', '19:21'),
(89, 'Celal', 'Onu nasÄ±l yapcam bilmiyom KWIGID', '19:21'),
(90, 'Celal', 'BakarÄ±m ama', '19:21'),
(91, 'Uruzbucll', 'He tamam klavyeden gÃ¶nderince np', '19:21'),
(92, 'Celal', 'Due bakim', '19:22'),
(93, 'Celal', 'Aynwb', '19:22'),
(94, 'Uruzbucll', 'De mesaj yazÄ±nca en alta insin mesela mesajÄ± yazÄ±nca gÃ¶remiyorum alta kaydÄ±rmak gerekiyor ', '19:22'),
(95, 'Uruzbucll', 'Onu yap', '19:22'),
(96, 'Celal', 'Normalde de yaptÄ±m obu', '19:22'),
(97, 'Celal', 'Ama telde dÃ¼zgÃ¼n Ã§alÄ±ÅŸmÄ±yÄ±r', '19:22'),
(98, 'Celal', 'Pc dr dÃ¼zgÃ¼n Ã§alÄ±ÅŸÄ±yor', '19:22'),
(99, 'Uruzbucll', 'Peki bu sitenin olayÄ± ne JDJSJDID', '19:22'),
(100, 'Celal', '3 mesaj at bak arka arkaya', '19:22'),
(101, 'Uruzbucll', 'A', '19:22'),
(102, 'Uruzbucll', 'A', '19:22'),
(103, 'Uruzbucll', 'A', '19:22'),
(104, 'Celal', 'Ä°niyor bak kendi kendine skfosÄ±d', '19:23'),
(105, 'Uruzbucll', '2. Mesaja indirdi aq KSKSKSOD', '19:23'),
(106, 'Uruzbucll', 'Yine bozuk', '19:23'),
(107, 'Celal', 'Telde niye bÃ¶yle bilmiyÄ±m', '19:23'),
(108, 'Celal', 'Wogoelfd', '19:23'),
(109, 'Celal', 'Sitenin olayÄ± yok kafama takÄ±ldÄ± perÅŸembe gÄŸnÄŸ', '19:23'),
(110, 'Celal', 'O gÃ¼nden beri uÄŸraÅŸÄ±yom', '19:23'),
(111, 'Celal', 'KWGKWOFÅžEÅžSSÅž', '19:23'),
(112, 'Uruzbucll', 'Ã‡akma wp mi yapmaya Ã§alÄ±ÅŸÄ±yorsun ne takÄ±ldÄ± LAKSLEOR', '19:24'),
(113, 'Uruzbucll', 'YazÄ±yor... Åžeyi de yap lan Ã§ok iyi olur he', '19:24'),
(114, 'Celal', 'HayÄ±r la yapar mÄ±yÄ±m dedim zor ama dedim', '19:24'),
(115, 'Celal', 'YazÄ±yoru dÃ¼ÅŸÃ¼ndÃ¼m de', '19:24'),
(116, 'Uruzbucll', 'Ama yazÄ±yor... Demesin yine aÃ§tÄ± aÄŸzÄ±nÄ±.', '19:24'),
(117, 'Celal', 'Zor aw', '19:24'),
(118, 'Celal', 'WOGIWVIEICO', '19:24'),
(119, 'Uruzbucll', 'Falan DESÄ°Nsi KAKRKEDKSKÄ±', '19:24'),
(120, 'Celal', 'QILDLGEPVÅžS', '19:24'),
(121, 'Uruzbucll', 'YaparsÄ±n askm ne zor', '19:24'),
(122, 'Celal', 'La aslÄ±nda yapabilirim de', '19:25'),
(123, 'Celal', 'Herkes de gÃ¶zÃ¼kcek ÅŸekilde yapabilir miyim bilmiyom', '19:25'),
(124, 'Celal', 'BuranÄ±n chat i snapten Ã¶zendim', '19:26'),
(125, 'Celal', 'LWGOEODLELF', '19:26'),
(126, 'Celal', 'Ã‡Ä±ktÄ± orpspu', '19:27'),
(127, 'Celal', 'OrospÄ± sarpir', '19:27'),
(128, 'Celal', 'A', '19:29'),
(129, 'Celal', 'G', '19:29'),
(130, 'Celal', 'Jlf', '19:29'),
(131, 'Celal', 'Gecenin 12 sinde napÄ±yom burda aw', '00:01'),
(132, 'enesrange ', 'Oha ', '14:31'),
(133, 'enesrange ', 'KXNSKXJSKXHSKJD ', '14:31'),
(134, 'enesrange ', 'Web tasarÄ±mcÄ± abim', '14:31'),
(135, 'enesrange ', 'Pipi', '14:31'),
(136, 'Celal', 'WPGOEPCPS', '14:31'),
(137, 'enesrange ', 'JSJSKSJSKSBDJSJ ', '14:32'),
(138, 'enesrange ', 'Saat 00:50 amk dunyasinda hala yaÅŸam belirtisi var sonumuz bir gelmedi yeter amk', '00:50'),
(139, 'celal', 'OLM BKLGFNKLXFNLKGXFNLKÅžGXFNLKÅžXFGNGXF', '12:28'),
(140, 'celal', 'Sen 00:50 de napÄ±yon burda', '12:28'),
(141, 'enesrange ', 'KSJSKSJSKSJ ', '14:02'),
(142, 'enesrange', 'GHCNKLXFKL', '21:26'),
(143, 'enesrange', 'GFXNKLXGFNKFKXFJKL,', '21:26'),
(144, 'enesrange', 'MCGHMGHMCGHM', '21:26'),
(145, 'enesrange', 'MGJCÃ–GGCG', '21:26'),
(146, 'enesrange', 'CGM', '21:26'),
(147, 'enesrange', 'GCH', '21:26'),
(148, 'enesrange', 'GCH', '21:26'),
(149, 'enesrange', 'MGHM', '21:26'),
(150, 'enesrange', 'GHMGH', '21:26'),
(151, 'enesrange', 'MGHM', '21:26'),
(152, 'enesrange', 'GHMGH', '21:26'),
(153, 'enesrange', 'MGHM', '21:26'),
(154, 'enesrange', 'GHM', '21:26'),
(155, 'enesrange', 'GHMGH', '21:26'),
(156, 'enesrange', 'M', '21:26'),
(157, 'enesrange', 'MÃ–JHVFGJH', '21:26'),
(158, 'enesrange', 'KMGUÃ–YJÃ–FG', '21:26'),
(159, 'enesrange', 'MGFMÃ–', '21:26'),
(160, 'enesrange', 'CJMÃ–J', '21:26'),
(161, 'enesrange', 'JMGCFMKKGUJ', '21:26'),
(162, 'enesrange', 'MJHHMKJ', '21:26'),
(163, 'enesrange', 'MVJHÃ–H', '21:26'),
(164, 'enesrange', 'Ã–', '21:26'),
(165, 'OROSPU ÇOCU', 'BJKDFXGBJKXLDF', '31:31');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
