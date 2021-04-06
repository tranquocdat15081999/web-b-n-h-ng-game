-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 05:05 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruado`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, 'waynerooney', 'wwedx64683');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'PS4'),
(2, 'PS3'),
(3, 'PS Vita'),
(4, 'Xbox One'),
(5, 'Xbox 360'),
(6, 'Switch'),
(7, '3DS'),
(8, 'Wii'),
(9, 'PC');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_card` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_num` int(11) NOT NULL,
  `p_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `username`, `name`, `phone`, `address`, `payment_card`, `p_num`, `p_id`, `total_price`, `status`) VALUES
(1, 'anhlan', 'duong hoang lan cho', '01224186811', '100 doan van bo p2 q5', 'COD', 3, 'BATTLEFIELD V\r\n', 1800000, 'Đã xử lí'),
(2, 'anhlan', 'duong hoang lan cho', '01224186811', '100 doan van bo p2 q5', 'COD', 1, 'DEVIL MAY CRY V', 3400000, 'Đã xử lí'),
(5, 'wwedx8199', 'nguyen huu khiem', '01224186811', '108 ton dan p10 q4', 'COD', 2, 'GTA V\r\n', 500000, 'Đợi xử lí'),
(13, 'anhlan', 'duong hoang lan cho', '01224186811', '100 doan van bo p2 q5', 'COD', 6, 'HITMAN 2\r\n', 950000, 'Đợi xử lí'),
(14, 'psp8199', 'nguyen huu khiem', '01224186811', '108 ton dan p10 q4', 'COD', 2, 'GTA V\r\n', 500000, 'Đợi xử lí'),
(16, 'wwedx8199', 'nguyen huu khiem', '01224186811', '108 ton dan p10 q4', 'COD', 1, 'DEVIL MAY CRY V', 800000, 'Đã xử lí'),
(17, 'wwedx8199', 'nguyen huu khiem', '01224186811', '106 doan van bo p2 q5', 'COD', 2, 'GTA V\r\n', 500000, 'Đợi xử lí');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categories_main_id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `quantity`, `brand`, `date`, `categories`, `categories_main_id`, `image`, `description`) VALUES
(1, 'DEVIL MAY CRY V', 800000, 50, 'CAPCOM', '2019-03-08', 'GAME PS4', 1, 'dmc5.jpg', '<p><strong><span style=\"color: #222222; font-family: arial, sans-serif; font-size: small;\">Devil May Cry 5 l&agrave; má»™t tr&ograve; chÆ¡i video hack v&agrave; slash phi&ecirc;u lÆ°u h&agrave;nh Ä‘á»™ng Ä‘Æ°á»£c ph&aacute;t triá»ƒn v&agrave; ph&aacute;t h&agrave;nh bá»Ÿi Capcom. Ä&acirc;y l&agrave; pháº§n thá»© nÄƒm cá»§a loáº¡t tr&ograve; chÆ¡i Devil May Cry ch&iacute;nh, v&agrave; Ä‘Æ°á»£c ph&aacute;t h&agrave;nh cho Microsoft Windows, PlayStation 4 v&agrave; Xbox One v&agrave;o ng&agrave;y 8 th&aacute;ng 3 nÄƒm 2019</span></strong></p>'),
(2, 'GTA V\r\n', 500000, 50, 'Rockstar Games', '2013-09-17', 'GAME PS4', 1, 'Grand%20Theft%20Auto%20V.jpg\r\n', ''),
(3, 'BATTLEFIELD V\r\n', 900000, 30, 'Electronic Arts', '2018-11-20', 'GAME PS4', 1, 'battlefield.jpg', ''),
(4, 'FALLOUT 76\r\n', 900000, 2, 'Bethesda ', '2018-11-14', 'GAME PS4', 1, 'fallout.jpg', ''),
(5, 'THE SIM 4', 950000, 9, 'Electronic Arts', '2014-11-14', 'GAME PS4', 1, 'thesim.png', ''),
(6, 'HITMAN 2\r\n', 950000, 15, 'Warner Bros.', '2018-11-13', 'GAME PS4', 1, 'hitman.jpg', ''),
(7, 'RED DEAD REDEMPTION 2\r\n', 990000, 20, 'Rockstar Games', '2018-10-26', 'GAME PS4', 1, 'reddead2.jpg', ''),
(8, 'FIFA 19', 700000, 40, 'EA Sports', '2018-10-28', 'GAME PS4', 1, 'ps4fifa.jpg', ''),
(9, 'SPIDER MAN', 990000, 50, 'Sony Interactive Entertainment', '2018-09-07', 'GAME PS4', 1, 'ps4spiderman.jpg\r\n', ''),
(10, 'NBA 2K19', 400000, 20, '2K Sports', '2018-09-07', 'GAME PS4', 1, 'ps4nba.jpg\r\n', ''),
(11, 'PLAYSTATION 4 SLIM BLACK 500GB', 6980000, 20, 'SONY', '2012-09-07', 'MAY PS4', 1, 'seri2016.png', ''),
(12, 'DUALSHOCK 4 WIRELESS CONTROLLER', 680000, 20, 'SONY', '2012-09-07', 'PK PS4', 1, 'ds500mil.jpg', ''),
(13, 'FIFA 19', 500000, 30, 'EA Sports', '2018-10-28', 'GAME PS3', 2, 'ps3fifa.jpg', ''),
(14, 'NBA 2K18', 100000, 30, '2K Sports', '2017-09-07', 'GAME PS3', 2, 'nba.jpg\r\n', ''),
(15, 'PLAYSTATION GOLD WIRELESS HEADSET', 1680000, 0, 'SONY', '2012-09-07', 'PK PS4', 1, 'psgoldheadset.jpg', ''),
(17, 'PERSONA 5', 800000, 30, 'Atlus', '2016-09-07', 'GAME PS3', 2, 'persona.jpg', ''),
(18, 'WWE 2K17\r\n', 500000, 30, '2K Sports', '2016-09-07', 'GAME PS3', 2, 'wwe17.jpg', ''),
(19, 'PES 2018\r\n', 500000, 30, 'Konami', '2017-09-12', 'GAME PS3', 2, 'pes2018.jpg', ''),
(20, 'ONE PIECE KAIZOKU MUSOU 3\r\n', 800000, 30, 'Bandai Namco Entertainment', '2017-12-21', 'GAME PS3', 2, 'onepiece.jpg', ''),
(21, 'SWORD ART ONLINE: LOST SONG\r\n', 1500000, 30, 'Bandai Namco Entertainment', '2015-12-21', 'GAME PS3', 2, 'ps3lostsong.jpg', ''),
(22, 'DRAGON BALL XENOVERSE\r\n', 950000, 30, 'Bandai Namco Entertainment', '2015-02-21', 'GAME PS3', 2, 'dragonball.jpg', ''),
(23, 'NBA 2K17', 100000, 30, '2K Sports', '2016-09-07', 'GAME PS3', 2, 'nba17.jpg\r\n', ''),
(24, 'LEGO MARVEL\'S AVENGERS', 100000, 30, 'Warner Bros.', '2016-01-07', 'GAME PS3', 2, 'ps3legomarvel.jpg\r\n', ''),
(25, 'PLAYSTATION 3 SLIM 250GB - SECOND HAND', 2480000, 9, 'SONY', '2006-01-07', 'MAY PS3', 2, 'ps3slim250.jpg\r\n', ''),
(26, 'DUALSHOCK 3 WIRELESS CONTROLLER', 380000, 50, 'SONY', '2006-09-07', 'PK PS3', 2, 'ps3ds3.jpg', ''),
(27, 'ACCEL WORLD VS SAO: MILLENNIUM TWILIGHT', 1500000, 20, 'Bandai Namco Entertainment', '2017-03-16', 'GAME PSV', 3, 'sao.jpg', ''),
(28, 'THE WOLF AMONG US\r\n', 500000, 20, 'Telltale Games', '2013-03-16', 'GAME PSV', 3, 'wolf.jpg', ''),
(29, 'PS VITA - BLACK\r\n', 3500000, 15, 'SONY', '2011-03-16', 'MAY PSV', 3, 'psvitablack.jpg', ''),
(30, 'MEMORY CARD 64GB', 1500000, 15, 'SONY', '2011-03-16', 'PK PSV', 3, 'psvita64.jpg', ''),
(31, 'BATTLEFIELD V\r\n', 900000, 30, 'Electronic Arts', '2018-11-20', 'GAME X1', 4, 'xbox1battle.jpg', ''),
(32, 'FALLOUT 76\r\n', 900000, 30, 'Bethesda ', '2018-11-14', 'GAME X1', 4, 'xbox1fallout.jpg', ''),
(33, 'HITMAN 2\r\n', 950000, 30, 'Warner Bros.', '2018-11-13', 'GAME X1', 4, 'xbox1hitman.jpg', ''),
(34, 'RED DEAD REDEMPTION 2\r\n', 990000, 14, 'Rockstar Games', '2018-10-26', 'GAME X1', 4, 'xbox1reddead.jpg', ''),
(35, 'FIFA 19', 700000, 50, 'EA Sports', '2018-10-28', 'GAME X1', 4, 'xbox1fifa.jpg', ''),
(36, 'NBA 2K19', 400000, 60, '2K Sports', '2018-09-07', 'GAME X1', 4, 'xbox1nba.jpg\r\n', ''),
(37, 'WWE 2K19', 800000, 50, '2K Sports', '2018-09-07', 'GAME X1', 4, 'xbox1wwe.jpg', ''),
(38, 'LEGO DC: SUPER VILLANS\r\n', 550000, 30, 'Warner Bros.', '2018-10-16', 'GAME X1', 4, 'xbox1legodc.jpg', ''),
(39, 'XBOX ONE X 1TB LIMITED EDITION\r\n', 14180000, 14, 'MICROSOFT', '2011-10-16', 'MAY X1', 4, 'xbox1xlimited.jpg', ''),
(40, 'XBOX ONE S CONTROLLER', 1180000, 30, 'MICROSOFT', '2011-10-16', 'PK X1', 4, 'xbox1control.jpg', ''),
(41, 'PES 2018\r\n', 500000, 50, 'Konami', '2017-09-12', 'GAME X360', 5, 'gamexbox360game3.jpg', ''),
(42, 'WWE 2K17\r\n', 500000, 50, '2K Sports', '2016-09-07', 'GAME X360', 5, 'gamexbox360game4.jpg', ''),
(43, 'NBA 2K18', 100000, 100, '2K Sports', '2017-09-07', 'GAME X360', 5, 'gamexbox360game1.jpg\r\n', ''),
(44, 'NBA 2K17', 100000, 100, '2K Sports', '2016-09-07', 'GAME X360', 5, 'gamexbox360game6.jpg\r\n', ''),
(45, 'WWE 2K16\r\n', 200000, 100, '2K Sports', '2015-09-07', 'GAME X360', 5, 'gamexbox360game14.jpg', ''),
(46, 'LEGO MARVEL\'S AVENGERS', 100000, 60, 'Warner Bros.', '2016-01-07', 'GAME X360', 5, 'gamexbox360game10.jpg\r\n', ''),
(47, 'XBOX 360 4GB', 2000000, 7, 'MICROSOFT', '2006-01-07', 'MAY X360', 5, 'mayxbox360ctsp-2.jpg\r\n', ''),
(48, 'XBOX 360 32GB', 4000000, 20, 'MICROSOFT', '2006-01-07', 'MAY X360', 5, 'mayxbox360ctsp-1.jpg\r\n', ''),
(49, 'XBOX 360 CONTROLLER', 400000, 20, 'MICROSOFT', '2006-01-07', 'PK X360', 5, 'phukienxbox360ctsp-1.jpg\r\n', ''),
(50, 'XBOX 360 WIRELESS CONTROLLER', 600000, 19, 'MICROSOFT', '2006-01-07', 'PK X360', 5, 'phukienxbox360ctsp-8.jpg\r\n', ''),
(51, 'SEGA GENESIS CLASSICS', 1000000, 40, 'Sega', '2018-07-12', 'GAME SW', 6, 'switchsegaclassic.jpg\r\n', ''),
(52, 'SUPER MARIO PARTY', 1300000, 40, 'Nintendo', '2018-05-10', 'GAME SW', 6, 'switchmarioparty.jpg\r\n', ''),
(53, 'MEGA MAN 11', 700000, 40, 'CAPCOM', '2018-02-10', 'GAME SW', 6, 'switchmegaman.jpg\r\n', ''),
(54, 'NBA 2K19', 400000, 60, '2K Sports', '2018-09-07', 'GAME SW', 6, 'switchnba.jpg\r\n', ''),
(55, 'FIFA 19', 700000, 40, 'EA Sports', '2018-10-28', 'GAME SW', 6, 'switchfifa19.jpg', ''),
(56, 'LEGO DC: SUPER VILLANS\r\n', 550000, 50, 'Warner Bros.', '2018-10-16', 'GAME SW', 6, 'switchlegodc.jpg', ''),
(57, 'PAYDAY 2\r\n', 1250000, 20, '505 Games', '2013-10-13', 'GAME SW', 6, 'switchpayday.jpg', ''),
(58, 'NINTENDO SWITCH (GRAY)\r\n', 7550000, 15, 'Nintendo', '2017-10-13', 'MAY SW', 6, 'switchgray.jpg', ''),
(59, 'AC ADAPTER\r\n', 1000000, 11, 'Nintendo', '2017-10-13', 'PK SW', 6, 'switchadaptor.jpg', ''),
(60, 'LUIGI\'S MANSION', 500000, 11, 'Nintendo', '2017-06-10', 'GAME 3DS', 7, 'game3DS-1.jpg\r\n', ''),
(61, 'CAPTAIN TOAD', 300000, 15, 'Nintendo', '2017-06-10', 'GAME 3DS', 7, 'game3DS-2.jpg\r\n', ''),
(62, 'NINTENDO 2DS XL PURPLE', 3500000, 20, 'Nintendo', '2015-10-10', 'MAY 3DS', 7, 'may3DS-1.jpg\r\n', ''),
(63, 'NINTENDO 2DS XL BLACK', 3500000, 20, 'Nintendo', '2015-10-10', 'MAY 3DS', 7, 'may3DS-2.jpg\r\n', ''),
(64, 'PROTECT BAG', 150000, 20, 'Nintendo', '2015-10-10', 'PK 3DS', 7, 'phukien3DS-1.jpg\r\n', ''),
(65, 'PROTECT CASE', 50000, 20, 'Nintendo', '2015-10-10', 'PK 3DS', 7, 'phukien3DS-2.jpg\r\n', ''),
(66, 'CREATE', 20000, 0, 'Electronic Arts', '2017-10-15', 'GAME WII', 8, 'gamewii-1.jpg\r\n', ''),
(67, 'WORMS: BATTLE ISLANDS', 20000, 15, 'THQ', '2015-10-16', 'GAME WII', 8, 'gamewii-2.jpg\r\n', ''),
(68, 'NINTENDO Wii\r\n', 1000000, 10, 'Nintendo', '2005-10-16', 'MAY WII', 8, 'maywii-2.jpg\r\n', ''),
(69, 'NINTENDO Wii BLACK\r\n', 1000000, 17, 'Nintendo', '2005-10-16', 'MAY WII', 8, 'maywii-1.jpg\r\n', ''),
(70, 'DJ HERO\r\n', 500000, 11, 'Nintendo', '2006-10-16', 'PK WII', 8, 'phukienwii-2.jpg\r\n', ''),
(71, 'BAND HERO\r\n', 700000, 30, 'Nintendo', '2006-10-16', 'PK WII', 8, 'phukienwii-1.jpg\r\n', ''),
(72, '7554', 50000, 50, 'Emobi Games', '2011-07-12', 'GAME PC', 9, 'gamepc-1.jpg\r\n', ''),
(73, 'CALL OF DUTY: MODERN WARFARE III', 50000, 0, 'Infinity Ward', '2011-07-12', 'GAME PC', 9, 'gamepc-2.jpg\r\n', ''),
(74, 'PROTOTYPE', 50000, 20, 'Activision', '2009-07-12', 'GAME PC', 9, 'gamepc-3.jpg\r\n', ''),
(75, 'ASSASSIN\'S CREED II', 50000, 16, 'Ubisoft', '2009-07-12', 'GAME PC', 9, 'gamepc-4.jpg\r\n', ''),
(76, 'STEAM 10$', 210000, 20, 'STEAM', '1999-01-08', 'PK PC', 9, 'steam10.jpg', ''),
(77, 'STEAM 20$', 420000, 20, 'STEAM', '1999-01-08', 'PK PC', 9, 'steam20.jpg', ''),
(78, 'STEAM 50$', 1050000, 20, 'STEAM', '1999-01-08', 'PK PC', 9, 'steam50.jpg', ''),
(79, 'STEAM 100$', 2100000, 20, 'STEAM', '1999-01-08', 'PK PC', 9, 'steam100.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `phone`, `email`, `address`) VALUES
(1, 'anhlan', 'WWEdx64683', 'duong hoang lan cho', '01224186811', 'psp819@gmail.com', '100 doan van bo p2 q5'),
(3, 'wwedx8199', 'WWEdx64683', 'nguyen huu khiem', '01224186811', 'wwedx81@gmail.com', '108 ton dan p10 q4'),
(4, 'psp8199', 'WWEdx64683', 'nguyen huu khiem', '01224186811', 'wedx8199@gmail.com', '108 ton dan p10 q4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
