-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Ara 2021, 10:54:14
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gurkan`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(13) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `daire_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `phone_number`, `password`, `daire_no`) VALUES
(1, NULL, 'Asuman', 'Göldağ', '05364521625', 'e10adc3949ba59abbe56e057f20f883e', 0),
(2, NULL, 'Ünlüsoy', 'Mansur', '05324423653', 'e10adc3949ba59abbe56e057f20f883e', 0),
(3, NULL, 'Cansen', 'Karaburun', '05453276982', 'e10adc3949ba59abbe56e057f20f883e', 0),
(4, NULL, 'Ülküsel', 'Özkahraman', '05364787687', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, NULL, 'Funda', 'Sığırcı', '05384545625', 'e10adc3949ba59abbe56e057f20f883e', 0),
(6, NULL, 'Edibe', 'Farımaz', '05354365775', 'e10adc3949ba59abbe56e057f20f883e', 0),
(7, NULL, 'Uluer', 'Akgül', '05399643245', 'e10adc3949ba59abbe56e057f20f883e', 0),
(8, NULL, 'Tarımer', 'Zımba', '05395442672', 'e10adc3949ba59abbe56e057f20f883e', 0),
(9, NULL, 'Şule', 'Alaca', '05967535435', 'e10adc3949ba59abbe56e057f20f883e', 0),
(10, NULL, 'Hafız', 'Bayduz', '05369734642', 'e10adc3949ba59abbe56e057f20f883e', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
