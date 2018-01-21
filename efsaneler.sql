-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2018, 16:57:07
-- Sunucu sürümü: 10.1.29-MariaDB
-- PHP Sürümü: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `efsaneler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `futbolcular`
--

CREATE TABLE `futbolcular` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `futbolcular`
--

INSERT INTO `futbolcular` (`id`, `adi`, `soyadi`) VALUES
(1, 'Zıbıttın', 'Rövaşata'),
(2, 'Zinedine', 'Zidane'),
(3, 'Francesco', 'Totti'),
(4, 'Cristiano', 'Ronaldo'),
(5, 'Pelé', ''),
(6, 'Eric', 'Cantona'),
(7, 'Raúl ', 'González Blanco'),
(8, 'Diego Armando', 'Maradona');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkinda`
--

CREATE TABLE `hakkinda` (
  `id` int(11) NOT NULL,
  `yazi` text COLLATE utf32_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `hakkinda`
--

INSERT INTO `hakkinda` (`id`, `yazi`) VALUES
(1, 'Sayfamızda futbola dair her şeyi bulamayabilirsiniz. Ancak bu zamana kadar herkesin gönlünde taht kurmuş birkaç efsane hakkında güzel bilgiler edinebilirsiniz. :)\r\n\r\nKeyif almanız dileğiyle...'),
(2, 'Telefon:+903124440375'),
(3, 'E-mail:hulya@hulya.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `sayID` int(11) NOT NULL,
  `baslik` varchar(20) COLLATE utf32_turkish_ci NOT NULL,
  `URL` tinytext COLLATE utf32_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`sayID`, `baslik`, `URL`) VALUES
(21, 'Anasayfa', 'index.php'),
(22, 'Hakkında', 'hakkinda.php'),
(10, 'HÜLYA', 'index.php'),
(30, 'Futbolcular', '#'),
(23, 'İletişim', 'iletisim.php');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `id` int(11) NOT NULL,
  `resim_yolu` varchar(100) COLLATE utf32_turkish_ci NOT NULL,
  `fid` int(11) NOT NULL,
  `resim_yazi` text COLLATE utf32_turkish_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `resimler`
--

INSERT INTO `resimler` (`id`, `resim_yolu`, `fid`, `resim_yazi`) VALUES
(52, 'img/pele/2', 5, 'Kariyerine Brezilya Ligi\'nde dönemin en iyi takımlarından Santos\'ta başlamış ve yine ünlü bir kulüp olan Cosmos\'ta bırakmıştır.'),
(42, 'img/cronaldo/2', 4, 'Profesyonel kariyerine Sporting Lizbon\'da başladı.'),
(22, 'img/zidane/2', 2, 'Futbola Cannes kulübünde başladı.'),
(32, 'img/totti/2', 3, '1992-1993 sezonunda Brescia karşısında ilk resmi maçına çıktı.'),
(81, 'img/maradona/1', 8, 'Diego Armando Maradona, 30 Ekim 1960\'ta arjantin\'de doğdu.'),
(62, 'img/cantona/2', 6, '1987-1995 yılları arasında Fransa millî formasını 43 kez giymiş ve 20 gol atmıştır.'),
(72, 'img/raul/2', 7, 'Profesyonel futbola Atletico Madrid\'de başladı. Daha sonra Real Madrid\'e trasfer oldu.'),
(82, 'img/maradona/2', 8, 'Henüz 12 yaşındayken, ilk kulübü olan Argentinos Juniors\'a adım attı.'),
(83, 'img/maradona/3', 8, '1982\'de ilk dünya kupası heyecanını yaşadı.\r\n1986\'da ise ilk ve tek dünya kupası sevincini.'),
(21, 'img/zidane/1', 2, 'Zinedine Yazid Zidane, ya da bilinen lakabıyla Zizou, 1972\'de Marsilya\'da doğdu.'),
(31, 'img/totti/1', 3, 'Francesco Totti, 1976 yılında Roma\'da dünyaya geldi.'),
(41, 'img/cronaldo/1', 4, 'Cristiano Ronaldo, 1985 yılında Portekiz\'de doğdu.'),
(51, 'img/pele/1', 5, 'Pelé 1940\'ta Brezilya\'da doğdu. Asıl adı Edison \"Edson\" Arantes do Nascimento\'dur.'),
(61, 'img/cantona/1', 6, 'Éric Daniel Pierre Cantona, 1966\'da Marsilya\'da doğdu.'),
(71, 'img/raul/1', 7, 'Raúl Gonzalez Blanco veya genel deyişle Raúl, 1977\'de İspanya\'nın başkenti Madrid\'de doğdu.'),
(84, 'img/maradona/4', 8, 'Daha sonra rekor bir ücretle Barcelona\'ya transfer oldu.'),
(23, 'img/zidane/3', 2, 'Daha sonra Bordeaux, Juventus ve son olarak Real Madrid\'de forma giydi.'),
(85, 'img/maradona/5', 8, 'Arjantin adına 91 millî maça çıkmış ve 34 gol atmıştır.'),
(86, 'img/maradona/6', 8, 'Napoli\'de 2 Serie A şampiyonluğu yaşadı.'),
(87, 'img/maradona/7', 8, 'Belçika savunmasını sıraya dizdiği an ve 1986\'da İngiltere\'ye attığı 2 gol tarihe geçti.'),
(33, 'img/totti/3', 3, 'Profesyonel kariyerinde 25 sezon boyunca sadece Roma\'da oynadı.'),
(34, 'img/totti/4', 3, 'Roma\'nın kralı, Roma\'nın oğlu, Gladyatör lakaplarıyla bilinir.'),
(35, 'img/totti/5', 3, 'Şampiyonlar Ligi, UEFA Ve İtalya Kupasıyla birlikte toplamda 775 maçta 307 golü ve 183 asisti vardır.'),
(43, 'img/cronaldo/3', 4, 'Daha sonra Manchester United\'a, oradan da 2009\'da 94 mil.€\'ya Real Madrid\'e transfer oldu. (2009-?)'),
(44, 'img/cronaldo/4', 4, 'Toplamda 885 maçta 624 gol attı (2017 sonu itibariyle).'),
(24, 'img/zidane/4', 2, '2010 dünya kupası\'nda Materazzi\'ye attığı kafa ile çok konuşuldu.'),
(25, 'img/zidane/5', 2, 'Şu sıralar yıldızlaştığı Real Madrid\'i çalıştırmaktadır.'),
(53, 'img/pele/3', 5, 'Brezilya milli takımıyla 3 dünya kupası (1958,1962,1970) kazanmıştır.'),
(54, 'img/pele/4', 5, 'Toplam 694 maça çıkan yıldız futbolcu, 650 kez fileleri havalandırmıştır.'),
(55, 'img/pele/5', 5, '2013 FIFA Ballon d\'Or Prix d\'Honneur ödülünü ilk kez alan oyuncudur.'),
(63, 'img/cantona/3', 6, 'Kariyerinde Marsilya, Leeds United, Manchester United gibi pek çok takımın formasını giyen Cantona, '),
(64, 'img/cantona/4', 6, 'Manchester United\'daki performansıyla \"İngilizler\'in Fransız sevgilisi\" lakabını almıştır.'),
(73, 'img/raul/3', 7, 'Real Madrid formasıyla La Liga\'da attığı 296 golle La Liga\'da en fazla gol atan futbolcudur.'),
(74, 'img/raul/4', 7, 'Kariyerindeki önemli başarılar: 6 La Liga şampiyonluğu, 3 Şampiyonlar Ligi şampiyonluğu, 1 Süper Kupa şampiyonluğu.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

CREATE TABLE `yazilar` (
  `id` int(11) NOT NULL,
  `baslik` text COLLATE utf32_turkish_ci,
  `yazi` text COLLATE utf32_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`id`, `baslik`, `yazi`) VALUES
(1, 'Her biri bir dönemin parlayan yıldızı.', 'Zidane, Raul, Cantona ve daha niceleri... <br>Unutulmaz anlar, futbolcular hakkında bilgiler... Hepsi galerimizde');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `futbolcular`
--
ALTER TABLE `futbolcular`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkinda`
--
ALTER TABLE `hakkinda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`sayID`),
  ADD KEY `sayID` (`sayID`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fid` (`fid`);

--
-- Tablo için indeksler `yazilar`
--
ALTER TABLE `yazilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hakkinda`
--
ALTER TABLE `hakkinda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `sayID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- Tablo için AUTO_INCREMENT değeri `yazilar`
--
ALTER TABLE `yazilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
