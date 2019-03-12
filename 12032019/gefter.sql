-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 12 2019 г., 19:23
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
-- База данных: `gefter`
--
CREATE DATABASE IF NOT EXISTS `gefter` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gefter`;

-- --------------------------------------------------------

--
-- Структура таблицы `vedomost`
--

CREATE TABLE `vedomost` (
  `id` int(11) NOT NULL,
  `otdel` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fio` varchar(150) NOT NULL,
  `zp` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `vedomost`
--

INSERT INTO `vedomost` (`id`, `otdel`, `fio`, `zp`) VALUES
(1, 'Клининговая служба', 'Васильев Василий Васильевич', 1200),
(2, 'Литейный цех', 'Иванов Иван Иванович', 800),
(3, 'Главный инженер', 'Петров Петр Петрович', 12525),
(4, 'Литейный цех', 'Афанасьева Анна Афанасьевна', 400),
(5, 'Литейный цех', 'Петрова Евгения Петровна', 400),
(6, 'Литейный цех', 'Владимирова Валентина Аркадьевна', 400),
(7, 'Клининговая служба', 'Антирова Мария Антиповна', 1022.4),
(8, 'Клиниговая служба', 'Кузнецов Сергей Сергеевич', 1512),
(9, 'Конструкторское бюро', 'Потапова Александра Потаповна', 850),
(10, 'Конструкторское бюро', 'Сидоров Сидор Сидорович', 852),
(11, 'Бухгалтерия', 'Сидоров Сидор Петрович', 1200);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
