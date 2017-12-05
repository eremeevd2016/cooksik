-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 25 2017 г., 16:32
-- Версия сервера: 5.5.53
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `reclamart`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reclamart`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `screenshot` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reclamart`
--

INSERT INTO `gallery1` (`id`, `head`, `price`, `href`, `screenshot`) VALUES
(37, 'Василий', 'Ручкин', 'Vasya@rambler.ru', 'img1.jpg'),
(38, 'Вячеслав', 'Воронович', 'Gohn@yaahoo.ru', 'img2.jpg'),
(39, 'Мария', 'Шубина', 'Mary@mail.ru', 'img3.jpg'),
(40, 'Вера', 'Антипова', 'Vasya@rambler.ru', 'img4.jpg'),
(41, 'Зоя', 'Шимова', 'Gohn@yaahoo.ru', 'img5.jpg'),
(42, 'Виктория', 'Шубина', 'Mary@mail.ru', 'img6.jpg'),
(43, 'Петр', 'Ворошилов', 'Vasya@rambler.ru', 'img7.jpg'),
(44, 'Марат', 'Воронович', 'Gohn@yaahoo.ru', 'img8.jpg'),
(45, 'Сергей', 'Куропаткин', 'Vasya@rambler.ru', 'img9.jpg'),
(46, 'Дмитрий', 'Шукшин', 'Gohn@yaahoo.ru', 'img10.jpg'),
(47, 'Артут', 'Воронович', 'Gohn@yaahoo.ru', 'img11.jpg'),
(48, 'Ольга', 'Шубина', 'Mary@mail.ru', 'img12.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reclamart`
--
ALTER TABLE `reclamart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reclamart`
--
ALTER TABLE `reclamart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
