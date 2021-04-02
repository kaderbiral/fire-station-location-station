-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 07 Haz 2019, 17:26:12
-- Sunucu sürümü: 5.7.21
-- PHP Sürümü: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `itfaiye`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ahsap_tarihi_binalar`
--

DROP TABLE IF EXISTS `ahsap_tarihi_binalar`;
CREATE TABLE IF NOT EXISTS `ahsap_tarihi_binalar` (
  `bina_id` int(50) NOT NULL AUTO_INCREMENT,
  `bina_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ilce_id` int(50) NOT NULL,
  `yapim_tarihi` int(4) NOT NULL,
  `istasyon_id` int(50) NOT NULL,
  `yol_id` int(50) NOT NULL,
  PRIMARY KEY (`bina_id`),
  UNIQUE KEY `ilce_id` (`ilce_id`,`istasyon_id`,`yol_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ahsap_tarihi_binalar`
--

INSERT INTO `ahsap_tarihi_binalar` (`bina_id`, `bina_adi`, `ilce_id`, `yapim_tarihi`, `istasyon_id`, `yol_id`) VALUES
(1, 'Kemeraltı Çarşısı', 4, 1650, 12, 21),
(2, 'Meryem Ana Evi', 25, 1950, 26, 27),
(3, 'Teleferik', 17, 1974, 3, 2),
(4, 'Ödemiş Arasta Çarşısı', 11, 1800, 24, 25),
(5, 'Mahkeme Cami', 9, 1906, 22, 23),
(6, 'St. Helen Katolik Kilisesi', 5, 1904, 0, 17),
(7, 'Bergama Ulu Cami', 13, 1399, 6, 5),
(8, 'Çeşme Kalesi', 23, 1508, 13, 9),
(9, 'Fatih Cami', 26, 1531, 2, 12);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `deprem_riski`
--

DROP TABLE IF EXISTS `deprem_riski`;
CREATE TABLE IF NOT EXISTS `deprem_riski` (
  `deprem_id` int(50) NOT NULL AUTO_INCREMENT,
  `ilce_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ilce_id` int(50) NOT NULL,
  `yol_id` int(50) NOT NULL,
  `istasyon_id` int(50) DEFAULT NULL,
  PRIMARY KEY (`deprem_id`),
  UNIQUE KEY `ilce_id` (`ilce_id`,`yol_id`) USING BTREE,
  UNIQUE KEY `istasyon_id` (`istasyon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `deprem_riski`
--

INSERT INTO `deprem_riski` (`deprem_id`, `ilce_adi`, `ilce_id`, `yol_id`, `istasyon_id`) VALUES
(1, 'Karabağlar', 2, 15, NULL),
(2, 'Menemen', 9, 23, 22),
(3, 'Narlıdere', 19, 24, 23),
(4, 'Buca', 1, 8, 10),
(5, 'Karşıyaka', 5, 17, NULL),
(6, 'Kemalpaşa', 12, 18, 19),
(7, 'Bayındır', 24, 3, 4),
(8, 'Torbalı', 8, 29, 28),
(9, 'Konak', 4, 21, 12),
(10, 'Gaziemir', 10, 13, 14),
(11, 'Bayraklı', 6, 4, 5),
(12, 'Çiğli', 7, 10, 9);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `istasyon`
--

DROP TABLE IF EXISTS `istasyon`;
CREATE TABLE IF NOT EXISTS `istasyon` (
  `istasyon_id` int(50) NOT NULL AUTO_INCREMENT,
  `istasyon_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ilce_id` int(50) NOT NULL,
  `yol_id` int(50) NOT NULL,
  PRIMARY KEY (`istasyon_id`),
  UNIQUE KEY `ilce_id` (`ilce_id`,`yol_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `istasyon`
--

INSERT INTO `istasyon` (`istasyon_id`, `istasyon_adi`, `adres`, `ilce_id`, `yol_id`) VALUES
(1, 'Aliağa', 'Hürriyet Cad. No:109 Aliağa', 14, 1),
(2, 'Bağarası', 'Bağarasi Mevkii 408 Sok. No:112 Foça', 26, 12),
(3, 'Balçova', 'Lalezar Sok. No: 3 Balçova', 17, 2),
(4, 'Bayındır', 'Hanife Ögretmen Cad. No:30 Bayındır', 24, 3),
(5, 'Bayraklı', '1600/3 sok No:12 Bayraklı', 6, 4),
(6, 'Bergama', 'Fevzi Paşa Mah. Kızılırmak Cad No:13 Bergama', 13, 5),
(7, 'Beydağ', 'Atatürk Mah. Garaj Sok. No:2 Beydağ', 29, 6),
(8, 'Bornova', 'Ankara Asfaltı No:69 Bornova', 3, 7),
(9, 'Bostanlı', 'Anadolu Cad No:817 Çiğli', 7, 10),
(10, 'Buca', 'Koşuyolu Cad No:2/A Şirinyer/Buca', 1, 8),
(11, 'Çandarlı', 'Çandarlı Mah. Türbe Cad. No:2 Çandarlı/Dikili', 20, 11),
(12, 'Çankaya', 'Şair Eşref Bulvarı No:1 Konak', 4, 21),
(13, 'Çeşme', '1068 Sokak Belediye Garajı içi Çeşme', 23, 9),
(14, 'Gaziemir', '651 Sok. No:17 Gaziemir', 10, 13),
(15, 'Gümüldür', 'Meryemana Cad No:262 Gümüldür/Menderes', 15, 22),
(16, 'Güzelbahçe', 'Müzeyyen Senar Cad No:22 Güzelbahçe', 27, 14),
(17, 'Hatay', '265/2 Sok No:4 Hatay/Karabağlar', 2, 15),
(18, 'Karaburun', 'Şehit Polis Yusuf Çelik Cad. No:17 Karaburun', 30, 16),
(19, 'Kemalpaşa', 'Dr. Ali Kahraman Cad. No:34 Kemalpaşa', 12, 18),
(20, 'Kınık', 'Osmaniye Mah. Atatürk Blv. No:23 Kınık', 28, 19),
(21, 'Kiraz', 'Cumhuriyet Mah. Gümüşsuyu Cad. No:4 Kiraz', 21, 20),
(22, 'Menemen', '1040 Sok No:1 Menemen', 9, 23),
(23, 'Narlıdere', 'Mithatpaşa Cad. No:189 Narlıdere', 19, 24),
(24, 'Ödemiş', 'Hürriyet Mah. Türbe Cad. No:2 Ödemiş', 11, 25),
(25, 'Seferihisar', 'Hıdırlık Mah. Kocaçay Cad. No:2 Seferihisar', 22, 26),
(26, 'Selçuk', '2044 Sok. No:6 Selçuk', 25, 27),
(27, 'Tire', 'Adnan Menderes Blv. No:69 (Eski Otogar içi) Tire', 16, 28),
(28, 'Torbalı', 'Serdar Genç Cad. No:34 Torbalı', 8, 29),
(29, 'Urla', 'Yenikent Mah. Nur Dikmen Cad No:11 Urla', 18, 30);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `nufus`
--

DROP TABLE IF EXISTS `nufus`;
CREATE TABLE IF NOT EXISTS `nufus` (
  `ilce_id` int(50) NOT NULL AUTO_INCREMENT,
  `ilce_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `alan_km2` int(50) NOT NULL,
  `nufus_orani` float NOT NULL,
  `aldigi_goc_orani` float DEFAULT NULL,
  PRIMARY KEY (`ilce_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `nufus`
--

INSERT INTO `nufus` (`ilce_id`, `ilce_adi`, `alan_km2`, `nufus_orani`, `aldigi_goc_orani`) VALUES
(1, 'Buca', 178, 499.325, 5.42),
(2, 'Karabağlar', 89, 479.986, 2.04),
(3, 'Bornova', 220, 445.232, 7.12),
(4, 'Konak', 24, 356.563, 0.4),
(5, 'Karşıyaka', 51, 344.14, 9.1),
(6, 'Bayraklı', 30, 311.524, 2.97),
(7, 'Çiğli', 139, 194.525, 13.55),
(8, 'Torbalı', 577, 178.772, 11.17),
(9, 'Menemen', 573, 174.564, 13.46),
(10, 'Gaziemir', 708, 137.553, 2.64),
(11, 'Ödemiş', 1019, 132.511, 1.02),
(12, 'Kemalpaşa', 681, 106.298, 3.8),
(13, 'Bergama', 1544, 103.185, NULL),
(14, 'Aliağa', 379, 95.392, 15),
(15, 'Menderes', 777, 93.796, 3.71),
(16, 'Tire', 716, 84.457, 4.16),
(17, 'Balçova', 16, 79.357, 12.31),
(18, 'Urla', 727, 66.36, 13.51),
(19, 'Narlıdere', 50, 66.203, 7.7),
(20, 'Dikili', 534, 44.172, NULL),
(21, 'Kiraz', 573, 43.989, NULL),
(22, 'Seferihisar', 375, 43.546, 2.01),
(23, 'Çeşme', 285, 43.489, NULL),
(24, 'Bayındır', 548, 40.584, 1.93),
(25, 'Selçuk', 317, 36.36, 4.74),
(26, 'Foça', 251, 33.131, NULL),
(27, 'Güzelbahçe', 77, 32.592, 16.32),
(28, 'Kınık', 479, 29.803, NULL),
(29, 'Beydağ', 172, 12.507, NULL),
(30, 'Karaburun', 421, 10.603, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ortak_id`
--

DROP TABLE IF EXISTS `ortak_id`;
CREATE TABLE IF NOT EXISTS `ortak_id` (
  `ilce_id` int(50) NOT NULL,
  `ilce_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `istasyon_id` int(50) DEFAULT NULL,
  `yol_id` int(50) NOT NULL,
  UNIQUE KEY `ilce_adi` (`ilce_adi`),
  UNIQUE KEY `ilce_id` (`ilce_id`,`istasyon_id`,`yol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ortak_id`
--

INSERT INTO `ortak_id` (`ilce_id`, `ilce_adi`, `istasyon_id`, `yol_id`) VALUES
(1, 'Buca', 10, 8),
(2, 'Karabağlar', NULL, 15),
(3, 'Bornova', 8, 7),
(4, 'Konak', 12, 21),
(5, 'Karşıyaka', NULL, 17),
(6, 'Bayraklı', 5, 4),
(7, 'Çiğli', 9, 10),
(8, 'Torbalı', 28, 29),
(9, 'Menemen', 22, 23),
(10, 'Gaziemir', 14, 13),
(11, 'Ödemiş', 24, 25),
(12, 'Kemalpaşa', 19, 18),
(13, 'Bergama', 6, 5),
(14, 'Aliağa', 1, 1),
(15, 'Menderes', 15, 22),
(16, 'Tire', 27, 28),
(17, 'Balçova', 3, 2),
(18, 'Urla', 29, 30),
(19, 'Narlıdere', 23, 24),
(20, 'Dikili', 11, 11),
(21, 'Kiraz', 21, 20),
(22, 'Seferihisar', 25, 26),
(23, 'Çeşme', 13, 9),
(24, 'Bayındır', 4, 3),
(25, 'Selçuk', 26, 27),
(26, 'Foça', 2, 12),
(27, 'Güzelbahçe', 16, 14),
(28, 'Kınık', 20, 19),
(29, 'Beydağ', 7, 6),
(30, 'Karaburun', 18, 16);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tehlikeli_yerler`
--

DROP TABLE IF EXISTS `tehlikeli_yerler`;
CREATE TABLE IF NOT EXISTS `tehlikeli_yerler` (
  `yer_id` int(50) NOT NULL AUTO_INCREMENT,
  `yer_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ilce_id` int(50) NOT NULL,
  `istasyon_id` int(50) NOT NULL,
  `yol_id` int(50) NOT NULL,
  PRIMARY KEY (`yer_id`),
  UNIQUE KEY `ilce_id` (`ilce_id`,`istasyon_id`,`yol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tehlikeli_yerler`
--

INSERT INTO `tehlikeli_yerler` (`yer_id`, `yer_adi`, `ilce_id`, `istasyon_id`, `yol_id`) VALUES
(1, 'Tüpraş', 14, 1, 1),
(2, 'Heper Metal Döküm San. Ve Tic. A.Ş.', 8, 28, 29),
(3, 'TPI Kompozit Kanat Sanayi Ticaret A.Ş', 7, 9, 10),
(4, 'Polidaş Polietilen Mamülleri Kim. San. Tic. Ltd.', 12, 19, 18),
(5, 'Savranoğlu Deri San. A.Ş.', 9, 22, 23),
(6, 'Habaş', 26, 2, 12),
(7, 'Geo-Mak', 4, 12, 21),
(8, 'Caran Kimya', 3, 8, 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vakalar`
--

DROP TABLE IF EXISTS `vakalar`;
CREATE TABLE IF NOT EXISTS `vakalar` (
  `kayit_id` int(50) NOT NULL AUTO_INCREMENT,
  `tel_no` bigint(11) NOT NULL,
  `cagri_nedeni` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ilce_id` int(50) NOT NULL,
  `yol_id` int(50) NOT NULL,
  `istasyon_id` int(50) NOT NULL,
  `olayin_gerceklesme_zamani` time NOT NULL,
  `olayin_gerceklesme_tarihi` date NOT NULL,
  `cagri_saati` time NOT NULL,
  `hareket_saati` time NOT NULL,
  `varis_saati` time NOT NULL,
  `olay_yerine_ulasim_suresi_dk` int(50) NOT NULL,
  PRIMARY KEY (`kayit_id`),
  UNIQUE KEY `mahalle_id` (`ilce_id`,`yol_id`,`istasyon_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `vakalar`
--

INSERT INTO `vakalar` (`kayit_id`, `tel_no`, `cagri_nedeni`, `ilce_id`, `yol_id`, `istasyon_id`, `olayin_gerceklesme_zamani`, `olayin_gerceklesme_tarihi`, `cagri_saati`, `hareket_saati`, `varis_saati`, `olay_yerine_ulasim_suresi_dk`) VALUES
(1, 5321458711, 'Orman yangını', 9, 23, 22, '18:02:08', '2018-03-20', '18:05:10', '18:10:38', '18:20:10', 10),
(2, 5058951245, 'İntihar girişimi', 1, 8, 10, '15:04:50', '2017-05-24', '15:05:05', '15:06:00', '15:10:05', 4),
(3, 5451507865, 'Asansörde sıkışma', 5, 17, 0, '10:05:08', '2017-02-06', '10:08:10', '10:10:00', '10:25:03', 15),
(4, 5378954621, 'Hayvan kurtarma', 11, 25, 24, '12:28:18', '2017-01-01', '12:38:36', '12:40:00', '12:49:04', 9),
(5, 5458971536, 'Bina yangını', 6, 4, 5, '14:38:00', '2016-12-23', '14:39:20', '14:42:30', '14:50:00', 8),
(6, 5382564178, 'Araç yangını', 4, 21, 12, '19:08:10', '2016-11-30', '19:09:06', '19:10:03', '19:23:08', 13),
(7, 5327845236, 'Hayvan kurtarma', 14, 1, 1, '09:10:10', '2016-07-12', '09:18:13', '09:20:30', '09:38:00', 18),
(8, 5451236978, 'Orman yangını', 7, 10, 15, '13:00:00', '2016-07-21', '13:08:05', '13:12:08', '13:20:15', 8),
(9, 5305697814, 'Fabrika yangını', 10, 13, 20, '16:16:20', '2016-05-15', '16:17:00', '16:20:03', '16:32:20', 12),
(10, 5328956312, 'İntihar girişimi', 16, 28, 53, '11:10:00', '2016-03-02', '11:11:30', '11:15:45', '11:28:30', 13);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yol`
--

DROP TABLE IF EXISTS `yol`;
CREATE TABLE IF NOT EXISTS `yol` (
  `yol_id` int(50) NOT NULL AUTO_INCREMENT,
  `ilce_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `yol_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ilce_id` int(50) NOT NULL,
  `istasyon_id` int(50) NOT NULL,
  PRIMARY KEY (`yol_id`),
  UNIQUE KEY `istasyon_id` (`istasyon_id`),
  UNIQUE KEY `ilce_id` (`ilce_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yol`
--

INSERT INTO `yol` (`yol_id`, `ilce_adi`, `yol_adi`, `ilce_id`, `istasyon_id`) VALUES
(1, 'Aliağa', 'E E87 / D 550 ', 14, 1),
(2, 'Balçova', 'E E881 / O.32 / O.30 / D 300', 17, 3),
(3, 'Bayındır', 'D 310', 24, 4),
(4, 'Bayraklı', 'D 550 / E E87 / O.30', 6, 5),
(5, 'Bergama', 'E E87 / D 550 / D 240', 13, 6),
(6, 'Beydağ', 'D 310', 29, 7),
(7, 'Bornova', 'E E87 / O.30 / E E96 / O.5 / D 300 / E E881 / D 565', 3, 8),
(8, 'Buca', 'E E87 / D 550 / E E881 / O.30', 1, 10),
(9, 'Çeşme', 'E E881 / O.32 / D 300', 23, 13),
(10, 'Çiğli', 'E E87 / D 550 / O.30', 7, 9),
(11, 'Dikili', 'E E87 / D 550', 20, 11),
(12, 'Foça', 'E E87 / D 550', 26, 2),
(13, 'Gaziemir', 'D 550 / O.30', 10, 14),
(14, 'Güzelbahçe', 'E E881 / O.32 / D 300', 27, 16),
(15, 'Karabağlar', 'E E881 / O.30', 2, 0),
(16, 'Karaburun', 'D 505', 30, 18),
(18, 'Kemalpaşa', 'E E96 / O.5 / D 300', 12, 19),
(19, 'Kınık', 'D 240', 28, 20),
(20, 'Kiraz', 'D 310', 21, 21),
(21, 'Konak', 'D 300 / O.30', 4, 12),
(22, 'Menderes', 'D 550', 15, 15),
(23, 'Menemen', 'E E87 / D 550 / D 250', 9, 22),
(24, 'Narlıdere', 'E E881 / O.32 / D 300', 19, 23),
(25, 'Ödemiş', 'D 310', 11, 24),
(26, 'Seferihisar', 'O.32', 22, 25),
(27, 'Selçuk', 'O.31 / D 550 / D 515', 25, 26),
(28, 'Tire', 'D 550', 16, 27),
(29, 'Torbalı', 'O.31 / D 550 / D 310', 8, 28),
(30, 'Urla', 'E E881 / O.32 / D 300', 18, 29);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
