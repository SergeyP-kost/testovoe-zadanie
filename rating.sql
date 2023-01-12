-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Янв 12 2023 г., 12:38
-- Версия сервера: 10.6.11-MariaDB-0ubuntu0.22.04.1
-- Версия PHP: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rating`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Collection`
--

CREATE TABLE `Collection` (
  `id_collection` int(255) NOT NULL,
  `name_collection` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `Collection`
--

INSERT INTO `Collection` (`id_collection`, `name_collection`) VALUES
(1, 'Квадратная'),
(2, 'Круглая'),
(3, 'Овальная'),
(4, 'Прямоугольная'),
(5, 'Треугольная'),
(6, 'Фигурная');

-- --------------------------------------------------------

--
-- Структура таблицы `Goods`
--

CREATE TABLE `Goods` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` int(10) NOT NULL,
  `collection` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `Goods`
--

INSERT INTO `Goods` (`id`, `name`, `price`, `collection`) VALUES
(1, 'Табурет Nika ТЭ2/С', 521, 1),
(2, 'Табурет Nika ТЭ2/Б', 462, 2),
(3, 'Табурет Nika ТЭ2/СК', 521, 2),
(4, 'Табурет Nika Т3/Л', 621, 3),
(5, 'Табурет Ника Фабрик-2', 856, 3),
(6, 'Табурет складной Nika ТБСК2/3', 1001, 5),
(7, 'Табурет СоюзРегионПоставка Дора', 1500, 2),
(8, 'Табурет KETT-UP ECO ODDVAR', 2100, 6),
(9, 'Табурет со ступенькой Volf', 680, 6),
(10, 'Табурет BOGACHO Марта-2', 16240, 1),
(11, 'Табурет BOGACHO Марта-2', 16240, 1),
(12, 'Табурет BOGACHO Марта-9', 1624, 4),
(13, 'Табурет BOGACHO Марта-12', 6240, 4),
(15, 'Табурет BOGACHO Марта-6', 2653, 1),
(16, 'Табурет BOGACHO Март-15', 757, 4),
(17, 'Табурет BOGACHO Карта-2', 222, 4),
(18, 'Табурет BOGACHO Парта-2', 868, 5),
(19, 'Табурет BOGACHO Дарта-2', 8575, 6),
(20, 'Табурет BOGACHO Март-2', 456, 5),
(21, 'Табурет BOGACHO Кп-02', 1212, 5),
(22, 'Табурет BOGACHO Нр-2', 677, 5),
(23, 'Табурет BOGACHO Ло-7', 24, 5),
(24, 'Табурет BOGACHO 2', 588, 3),
(25, 'Табурет BOGACHO 235', 1221, 5),
(26, 'Табурет BOGACHO ДДД', 324, 3),
(27, 'Табурет Реал Береза белая', 2890, 1),
(28, 'Табурет Реал Бук', 3590, 5),
(29, 'KETT-UP ECO BRUNO деревянный', 8600, 5),
(30, 'NABORTABURRAFF', 1690, 2),
(31, 'Табурет Венский мягкий Red&Black', 4450, 3),
(32, 'Традат-45', 6150, 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Collection`
--
ALTER TABLE `Collection`
  ADD PRIMARY KEY (`id_collection`);

--
-- Индексы таблицы `Goods`
--
ALTER TABLE `Goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collection` (`collection`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Collection`
--
ALTER TABLE `Collection`
  MODIFY `id_collection` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `Goods`
--
ALTER TABLE `Goods`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Goods`
--
ALTER TABLE `Goods`
  ADD CONSTRAINT `Goods_ibfk_1` FOREIGN KEY (`collection`) REFERENCES `Collection` (`id_collection`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
