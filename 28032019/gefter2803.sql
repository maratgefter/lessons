-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 28 2019 г., 20:17
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gefter2803`
--
CREATE DATABASE IF NOT EXISTS `gefter2803` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gefter2803`;

-- --------------------------------------------------------

--
-- Структура таблицы `vedomost`
--

CREATE TABLE `vedomost` (
  `id` int(11) NOT NULL,
  `name_of_product` varchar(200) NOT NULL,
  `item_number` varchar(11) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `wholesale_unit_price` double NOT NULL,
  `wholesale cost` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vedomost`
--

INSERT INTO `vedomost` (`id`, `name_of_product`, `item_number`, `unit`, `quantity`, `wholesale_unit_price`, `wholesale cost`) VALUES
(1, 'Краска черная', '000250', 'шт.', 25, 0.5, 0.4),
(2, 'Краска черная', '001250', 'литры', 10, 26, 20.8),
(3, 'Ключ трубный №1', '003569', 'шт.', 3, 17.36, 13.888),
(4, 'Ключ трубный №1', '036980', 'шт.', 4, 18.96, 15.168000000000001),
(5, 'Рукав напорный армированный', '105260', 'метры', 39, 0.79, 0.6320000000000001),
(6, 'Лист стальной оцинкованный', '000256', 'метры квадратные', 23, 26.54, 21.232),
(7, 'Шайба М8', '159633', 'шт.', 1269, 0.03, 0.024),
(8, 'Шайба М8', '859633', 'шт.', 97, 0.58, 0.46399999999999997),
(9, 'Перчатки электроизолирующие', '859637', 'пары', 10, 8.99, 7.192),
(10, 'Двигатель асинхронный', '874455', 'шт.', 2, 983.33, 786.6640000000001);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `vedomost`
--
ALTER TABLE `vedomost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `vedomost`
--
ALTER TABLE `vedomost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
