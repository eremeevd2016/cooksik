-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 02 2017 г., 15:07
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
-- Структура таблицы `gallery1`
--

CREATE TABLE `gallery1` (
  `id` int(11) NOT NULL,
  `head` varchar(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `href` varchar(60) DEFAULT NULL,
  `screenshot` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery1`
--

INSERT INTO `gallery1` (`id`, `head`, `price`, `href`, `screenshot`) VALUES
(1, 'Шарж на повара', '2000р', 'single.php#img1', 'img1.jpeg'),
(2, 'Шарж на семью', '500р', 'single.php#img3', 'img2.jpeg'),
(3, ' Шарж на рыбака', '700руб', 'single.php#img2', 'img3.jpeg'),
(4, 'Шарж на женщину', '2500р', 'Vasya@rambler.ru', 'img4.jpeg'),
(5, 'Шарж боссу', '1500р', 'Gohn@yaahoo.ru', 'img5.jpeg'),
(6, 'Шарж на мужчину', '3000р', 'Mary@mail.ru', 'img6.jpeg'),
(7, 'Петр', 'Ворошилов', 'Vasya@rambler.ru', 'img7.jpeg'),
(8, 'Евгений', 'Воронович', 'Gohn@yaahoo.ru', 'img8.jpeg'),
(9, 'Сергей', 'Куропаткин', 'Vasya@rambler.ru', 'img9.jpeg'),
(10, 'Дмитрий', 'Шукшин', 'Gohn@yaahoo.ru', 'img10.jpeg'),
(11, 'Артут', 'Воронович', 'Gohn@yaahoo.ru', 'img11.jpeg'),
(12, 'Ольга', 'Шубина', 'Mary@mail.ru', 'img12.jpeg'),
(13, 'Вера', 'Галкин', 'Vasya@rambler.ru', 'img13.jpeg'),
(14, 'Евгений', 'Воронович', 'Gohn@yaahoo.ru', 'img14.jpeg'),
(15, 'Мария', 'Шубина', 'Mary@mail.ru', 'img15.jpeg'),
(16, 'Василий', 'Ручкин', 'Vasya@rambler.ru', 'img16.jpeg'),
(17, 'Евгений', 'Воронович', 'Gohn@yaahoo.ru', 'img17.jpeg'),
(18, 'Василий', 'Ручкин', 'Vasya@rambler.ru', 'img18.jpeg'),
(19, 'Евгений', 'Воронович', 'Gohn@yaahoo.ru', 'img19.jpeg'),
(20, 'Евгений', 'Воронович', 'Gohn@yaahoo.ru', 'img20.jpeg'),
(21, 'Мария', 'Шубина', 'Mary@mail.ru', 'img21.jpeg'),
(22, 'Вера', 'Галкин', 'Vasya@rambler.ru', 'img22.jpeg'),
(23, 'Евгений', 'Воронович', 'Gohn@yaahoo.ru', 'img23.jpeg'),
(24, 'Мария', 'Шубина', 'Mary@mail.ru', 'img24.jpeg'),
(25, 'Василий', 'Ручкин', 'Vasya@rambler.ru', 'img25.jpeg'),
(26, 'Евгений', 'Воронович', 'Gohn@yaahoo.ru', 'img26.jpeg'),
(27, 'Василий', 'Ручкин', 'Vasya@rambler.ru', 'img27.jpeg'),
(28, 'Евгений', 'Воронович', 'Gohn@yaahoo.ru', 'img28.jpeg'),
(29, 'Евгений', 'Воронович', 'Gohn@yaahoo.ru', 'img29.jpeg'),
(30, 'Мария', 'Шубина', 'Mary@mail.ru', 'img30.jpeg'),
(31, 'Василий', 'Ручкин', 'Vasya@rambler.ru', 'img31.jpeg'),
(32, 'Евгений', 'Воронович', 'Gohn@yaahoo.ru', 'img32.jpeg'),
(33, 'Мария', 'Шубина', 'Mary@mail.ru', 'img33.jpeg'),
(34, 'Вера', 'Антипова', 'Vasya@rambler.ru', 'img34.jpeg'),
(35, 'Зоя', 'Шимова', 'Gohn@yaahoo.ru', 'img35.jpeg'),
(36, 'Ольга', 'Шубина', 'Mary@mail.ru', 'img36.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery2`
--

CREATE TABLE `gallery2` (
  `id` int(11) NOT NULL,
  `hade` varchar(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `screenshot` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `gallery3`
--

CREATE TABLE `gallery3` (
  `id` int(11) NOT NULL,
  `hade` varchar(20) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `screenshot` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery1`
--
ALTER TABLE `gallery1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery1`
--
ALTER TABLE `gallery1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
