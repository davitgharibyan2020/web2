-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 27 2020 г., 15:26
-- Версия сервера: 10.4.16-MariaDB
-- Версия PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `image`, `description`) VALUES
(33, 'Samsung Galaxy A50', 349, 'https://image-us.samsung.com/SamsungUS/samsungbusiness/products/mobile/phones/galaxy-a/galaxy-a50/gallery/SM-A505_001_Front_Black_600x600.jpg?$product-details-jpg$', 'THE PHONE IS POWERED BY OCTA CORE (2.3 GHZ, QUAD CORE, CORTEX A73 + 1.7 GHZ, QUAD CORE, CORTEX A53) PROCESSOR. IT RUNS ON THE SAMSUNG EXYNOS 7 OCTA 9610 CHIPSET. IT HAS 4 GB RAM AND 64 GB INTERNAL STORAGE. SAMSUNG GALAXY A50 SMARTPHONE HAS A SUPER AMOLED DISPLAY.\r\n'),
(36, 'Samsung Galaxy A01', 99, '  https://image-us.samsung.com/SamsungUS/home/mobile/phones/galaxy-a01/Lockup-1600x1200.jpg?$product-details-jpg$', 'SAMSUNG INTRODUCED THE 2020 GALAXY A SERIES A FEW MONTHS AFTER THE RELEASE OF MID-GENERATION REFRESH OF THE 2019 SERIES THE GALAXY A01 WAS THE SECOND ULTRA-BUDGET MODEL '),
(38, 'Samsung Galaxy A20', 249, 'https://image-us.samsung.com/SamsungUS/home/mobile/phones/galaxy-a/galaxy-a20/Front.jpg?$product-details-jpg$', 'SAMSUNG GALAXY A20 SMARTPHONE WAS LAUNCHED IN MARCH 2019. THE PHONE COMES WITH A 6.40-INCH TOUCHSCREEN DISPLAY WITH A RESOLUTION OF 720X1560 PIXELS. SAMSUNG GALAXY A20 IS POWERED BY AN OCTA-CORE SAMSUNG EXYNOS 7884 PROCESSOR THAT FEATURES 2 CORES CLOCKED AT 1.6GHZ AND 6 CORES CLOCKED AT 1.35GHZ.'),
(39, 'Samsung Galaxy A71', 479, ' https://image-us.samsung.com/SamsungUS/home/mobile/phones/galaxy-a/sm-a716uzkntmb/PDP-GALLERY-A71-black-01-1600x1200.jpg?$product-details-jpg$', 'THE PHONE COMES WITH A 6.70-INCH TOUCHSCREEN DISPLAY WITH A RESOLUTION OF 1080X2400 PIXELS AND AN ASPECT RATIO OF 20:9. IT COMES WITH 8GB OF RAM. THE SAMSUNG GALAXY A71 RUNS ANDROID 10 AND IS POWERED BY A 4500MAH BATTERY. ... CONNECTIVITY OPTIONS ON THE SAMSUNG GALAXY A71 INCLUDE WI-FI 802.11 AC, GPS, BLUETOOTH V5'),
(40, 'Samsung Galaxy S20', 499, '  https://image-us.samsung.com/us/smartphones/galaxy-s20/Cosmic-Gray/X1_Lockup_CosmicGray-1600x1200.jpg?$product-details-jpg$', 'SAMSUNG GALAXY S20 IS A LINE OF ANDROID-BASED SMARTPHONES DESIGNED, DEVELOPED, MARKETED, AND MANUFACTURED BY SAMSUNG ELECTRONICS AS PART OF ITS GALAXY S SERIES.'),
(53, 'Samsung Galaxy S8', 220, 'https://images.samsung.com/is/image/samsung/p5/latin_en/smartphones/galaxy-s8/images/gallery/galaxy-s8-plus_gallery-color_big-c1-01.jpg?$ORIGIN_JPG$', 'THE S8 FEATURES AN OCTA-CORE EXYNOS 8895 SYSTEM-ON-CHIP AND 4 GB OF RAM; MODELS IN NORTH AMERICAN AND EAST ASIAN MARKETS UTILIZE THE QUALCOMM SNAPDRAGON 835 INSTEAD. BOTH CHIPS ARE MANUFACTURED BY SAMSUNG WITH A 10 NM PROCESS. THEY CONTAIN 64 GB OF INTERNAL STORAGE, EXPANDABLE VIA MICROSD CARD'),
(64, 'Samsung Galaxy A51', 249, 'https://image-us.samsung.com/SamsungUS/home/mobile/galaxy-a51/gallery-images/blue/A51_Blue_Lockup_1600x1200.jpg?$product-details-jpg$', 'THE GALAXY A51 IS AVAILABLE WITH 6GB RAM + 128GB INTERNAL STORAGE AND 8GB RAM + 128GB INTERNAL STORAGE. IT RUNS ON THE ANDROID V10 (Q) OPERATING SYSTEM AND IS POWERED BY OCTA-CORE (2.3 GHZ, QUAD-CORE, CORTEX A73 + 1.7 GHZ, QUAD-CORE, CORTEX A53) PROCESSOR. THE SMARTPHONE RUNS ON THE SAMSUNG EXYNOS 9 OCTA 9611 CHIPSET.'),
(65, 'Samsung Galaxy A11', 129, 'https://image-us.samsung.com/SamsungUS/home/mobile/phones/galaxy-a/galaxy-a11/06302020/MBSR_Galaxy_A11_Black_Lockup_Gallery_Card_1600x1200.jpg?$product-details-jpg$', 'THE PHONE COMES WITH A 6.40-INCH TOUCHSCREEN DISPLAY WITH A RESOLUTION OF 720X1560 PIXELS. SAMSUNG GALAXY A11 IS POWERED BY A 1.8GHZ OCTA-CORE PROCESSOR. IT COMES WITH 2GB OF RAM. THE SAMSUNG GALAXY A11 RUNS ANDROID AND IS POWERED BY A 4000MAH BATTERY.\r\n'),
(66, 'Samsung Galaxy S10 Lite', 449, 'https://images.samsung.com/is/image/samsung/in-galaxy-s10-lite-sm-g770-8gb-sm-g770fzbsinu-frontprismblue-206236698?$PD_GALLERY_L_SHOP_JPG$', 'SAMSUNG GALAXY S20 IS A LINE OF ANDROID-BASED SMARTPHONES DESIGNED, DEVELOPED, MARKETED, AND MANUFACTURED BY SAMSUNG ELECTRONICS AS PART OF ITS GALAXY S SERIES.\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
