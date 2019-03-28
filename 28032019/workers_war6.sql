-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 28 2019 г., 20:50
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

-- --------------------------------------------------------

--
-- Структура таблицы `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `fio` varchar(250) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `rang` int(11) NOT NULL,
  `vishe_normy` int(11) NOT NULL,
  `tarif` double NOT NULL,
  `premia` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `workers`
--

INSERT INTO `workers` (`id`, `fio`, `speciality`, `rang`, `vishe_normy`, `tarif`, `premia`) VALUES
(1, 'Савельев В. В.', 'Сантехник', 5, 110, 560, NULL),
(2, 'Сонов А. В.', 'Сантехник', 5, 115, 600, NULL),
(3, 'Васильев А. А.', 'Слесарь', 4, 105, 460, NULL),
(4, 'Кондратюк С. П.', 'Электрик', 3, 100, 400, NULL),
(5, 'Иванов Ю. В.', 'Электроник', 6, 120, 800, NULL),
(6, 'Иванов В. Х.', 'Электроник', 6, 102, 800, NULL),
(7, 'Искандер С. В.', 'Слесарь', 4, 105, 460, NULL),
(8, 'Андреев А. В.', 'Электрик', 6, 110, 569, NULL),
(9, 'Павлов П. П.', 'Сантехник', 3, 135, 400, NULL),
(10, 'Егоров Е. Е.', 'Дворник', 0, 140, 600, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
