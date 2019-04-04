-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 04 2019 г., 21:10
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
-- База данных: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

--
-- Структура таблицы `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `fio` varchar(150) NOT NULL,
  `age` int(11) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `opinion` text NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table1`
--

INSERT INTO `table1` (`id`, `fio`, `age`, `mail`, `opinion`, `phone_number`, `mark`, `date`) VALUES
(20, 'Marat', 22, 'ma@gmail.com', 'hjk', '+375292949695', 5, '2019-04-02 17:58:34'),
(21, 'Василий', 11, 'ma@gmail.com', 'Plfhjdf!', '+375292949695', 4, '2019-04-02 17:58:34'),
(22, 'Василий', 11, 'ma@gmail.com', 'Plfhjdf!', '+375292949695', 4, '2019-04-02 17:59:38'),
(23, 'Marat', 4, '', 'gggg', '+375292949695', 5, '2019-04-04 15:47:08'),
(24, 'Marat', 15, 'ma@gmail.com', 'nice', '+375292949695', 5, '2019-04-04 15:47:30'),
(25, 'Marat', 5, 'ma@gmail.com', 'fghjk', '+375292949695', 5, '2019-04-04 15:50:06'),
(26, 'Marat', 3, 'ma@gmail.com', 'vghvhjbv', 'bhbhb', 4, '2019-04-04 15:50:59'),
(27, 'Marat', 12, '', 'jjhh', '+375292949695', 5, '2019-04-04 15:53:51'),
(28, 'Marat', 4, '', '', '', 0, '2019-04-04 15:56:29'),
(29, 'Marat', 32, '', '', '', 0, '2019-04-04 15:56:39'),
(30, 'Marat', 5, 'ma@gmail.com', 'jjio', '', 5, '2019-04-04 15:57:01'),
(31, 'Marat', 5, 'ma@gmail.com', 'b nk ', 'vhj', 5, '2019-04-04 15:57:17'),
(32, 'Marat', 12, 'ma@gmail.com', 'ghkij', '+375292949695', 4, '2019-04-04 15:59:52'),
(33, 'Marat', 21, 'ma@gmail.com', 'bkh', '+375292949695', 5, '2019-04-04 16:05:11'),
(34, 'Marat', 2, 'ma@gmail.com', 'kj', '+375292949695', 3, '2019-04-04 16:21:51'),
(35, 'Marat', 3, 'ma@gmail.com', 'vgjhk', '+375292949695', 4, '2019-04-04 16:40:18'),
(36, 'Marat', 4, 'ma@gmail.com', 'hoijk', '+375292949695', 5, '2019-04-04 16:41:20'),
(37, 'Marat Marat Marat', 4, 'ma@gmail.com', 'vfrswfds', '+375292949695', 5, '2019-04-04 17:14:58'),
(38, 'Marat Marat Marat', 4, '', '', '+375292949695', 2, '2019-04-04 17:18:45'),
(39, 'Marat Marat Marat', 4, 'ma@gmail.com', '', '+375292949695', 3, '2019-04-04 17:18:59'),
(40, 'Marat Marat Marat', 4, '', 'bd', '+375292949695', 0, '2019-04-04 17:19:17'),
(41, 'Marat Marat Marat', 4, '', 'gds', '+375292949695', 3, '2019-04-04 17:19:22'),
(42, 'Marat Marat Marat', 7, 'ma@gmail.com', '', '+375292949695', 0, '2019-04-04 17:21:16'),
(43, 'Marat Marat Marat', 7, '', 'vczdvczd', '+375292949695', 0, '2019-04-04 17:21:56'),
(44, 'Marat Marat Marat', 7, '', 'vczdvczd', '+375292949695', 2, '2019-04-04 17:22:01'),
(45, '', 7, '', 'vczdvczd', '', 0, '2019-04-04 17:32:09'),
(46, '', 7, '', 'vczdvczd', '', 0, '2019-04-04 17:34:23'),
(47, '', 7, '', 'vczdvczd', '', 0, '2019-04-04 17:34:50'),
(48, '', 7, '', 'vczdvczd', '', 0, '2019-04-04 17:35:49');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
