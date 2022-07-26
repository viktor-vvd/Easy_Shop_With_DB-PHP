-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 31 2020 г., 18:08
-- Версия сервера: 5.6.41
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
-- База данных: `tovs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tovs`
--

CREATE TABLE `tovs` (
  `ID` int(11) NOT NULL,
  `code` text NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `descr` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovs`
--

INSERT INTO `tovs` (`ID`, `code`, `name`, `price`, `descr`) VALUES
(1, '0001', 'Samsung Galaxy S20+', 30000, 'Phone'),
(2, '0002', 'Samsung Galaxy S20', 29000, NULL),
(3, '0003', 'Samsung Galaxy S10+', 27000, '2019'),
(4, '0004', 'Samsung Galaxy S10', 26000, NULL),
(5, '0005', 'Samsung Galaxy S9+', 20000, '2018'),
(6, '0006', 'Samsung Galaxy S9', 18000, NULL),
(7, '0007', 'Samsung Galaxy S8+', 15000, '2017'),
(8, '0008', 'Samsung Galaxy S8', 13000, NULL),
(9, '0009', 'Samsung Galaxy S7 Edge', 8000, '2016'),
(10, '0010', 'Samsung Galaxy S7', 6000, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovs`
--
ALTER TABLE `tovs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovs`
--
ALTER TABLE `tovs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
