-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 14 2021 г., 21:41
-- Версия сервера: 5.6.51
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `electro`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aksiya`
--

CREATE TABLE `aksiya` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `aksiya`
--

INSERT INTO `aksiya` (`id`, `name_uz`, `name_ru`, `name_en`, `image`, `date`, `created_date`, `status`) VALUES
(1, 'asfasf', 'asdfad', 'sadfgsd', '../img/hotdeal.png', '1637375696', 4124124, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name_uz`, `name_ru`, `name_en`, `created_date`, `status`) VALUES
(1, 'Notebook', 'Notebook', 'Notebook', 1636537517, 1),
(2, 'Smartphones uz', 'Smartphones ru', 'Smartphones en', 1636537517, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `collection`
--

CREATE TABLE `collection` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `collection`
--

INSERT INTO `collection` (`id`, `category_id`, `image`, `created_date`, `status`) VALUES
(1, 1, './img/shop01.png', 121321, 1),
(2, 2, './img/shop02.png', 121321, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ru` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `mark` int(11) DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name_uz`, `name_ru`, `name_en`, `image`, `category_id`, `price`, `mark`, `created_date`, `status`) VALUES
(1, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(2, 'Phone uz', 'Phone ru', 'Phone en', 'http://electro.loc/img/product07.png', 2, 1234, 3, 1636547042, 1),
(3, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(4, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(5, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(6, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(7, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(8, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(9, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(10, 'Notebook 123', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(11, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(12, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(13, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(14, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(15, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(16, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(17, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(18, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(19, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(20, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(21, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(22, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(23, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(24, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(25, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(26, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(27, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(28, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(29, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(30, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(31, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(32, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(33, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(34, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1),
(35, 'Notebook uz', 'Notebook ru', 'Notebook en', 'http://electro.loc/img/product01.png', 1, 1234, 5, 1636547042, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aksiya`
--
ALTER TABLE `aksiya`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aksiya`
--
ALTER TABLE `aksiya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
