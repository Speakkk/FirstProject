-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 28 2017 г., 07:12
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mybase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `admin` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fio` varchar(45) NOT NULL,
  `age` varchar(2) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `admin`, `password`, `fio`, `age`, `photo`, `date`) VALUES
(31, 'Ruslan', '827ccb0eea8a706c4c34a16891f84e7b', 'Руслайн Кайназаров', '24', '/img/Lighthouse.jpg', '2017-09-21 05:39:25'),
(32, 'Maxim', '827ccb0eea8a706c4c34a16891f84e7b', 'Maxim Maximov', '99', '/img/Lighthouse.jpg', '2017-09-21 05:40:25'),
(33, 'Petya', '$2y$10$fmfsrwjOxvkUmtu.hdIak.YXu', 'Petrov', '18', '/img/Chrysanthemum.jpg', '2017-09-26 10:45:14'),
(34, 'Petrov', '$2y$10$UWVsgHiMurfbptgZixOBZ.oJj', 'asfasf', '22', '/img/Koala.jpg', '2017-09-27 20:30:13'),
(35, 'Dima', '827ccb0eea8a706c4c34a16891f84e7b', 'safasf', '40', '/img/Hydrangeas.jpg', '2017-09-27 20:49:14'),
(36, 'Olga', '$2y$10$DYHLiHghXR8UTF3wfgqyMOlTXEgZsASSptPTr7AtaMZJj6QFJjyrG', 'sfgasgf', '30', '/img/Lighthouse.jpg', '2017-09-27 21:40:24'),
(37, 'Oleg', '$2y$10$HxkElmnYFWbvbgR06wcdousNDOylp9M0KswnHEnFU.tuO0EwyJSPO', 'sfasgfa', '45', '/img/Chrysanthemum.jpg', '2017-09-27 21:42:28'),
(38, 'asdsasddas', '$2y$10$BljR0DsCOob8UYwJrF/xW.FiPlC2.0ORzzkHfkrUBXUYC/3FNTjl2', 'dadassda', '26', '/img/Koala.jpg', '2017-09-28 06:41:21'),
(39, 'ADSDASDA', '$2y$10$Rnec.xqEJoFZqnGOxhXimuuGYwcEgJYxaWdNgYdE.FeCq4dnyHAwO', 'dadassdDASDASDASa', '30', '/img/', '2017-09-28 06:44:17'),
(40, 'ADSDASDAasdasda', '$2y$10$zjxWQgnCAmmjd7DE6eIJoueidw14rP86UUzeaX37gutEr0qCwnDJm', 'dadassdDASDASDASa', '', '/img/', '2017-09-28 06:44:38'),
(41, 'ADSDASDAasdasda', '$2y$10$UNsL6sZjy4vvvGJgKxzpKubqGFRmsDWOqQCw48BlSKb/6VMWRpnJe', 'dadassdDASDASDASa', '', '/img/', '2017-09-28 06:44:54'),
(42, 'pss', '$2y$10$DF/KObv0LnOO3ZNCFT/J4OZhnAcnZ7GtGa873SNvg9sthiz9HKqIK', 'dadas231312dDASDASDASa', '', '/img/Jellyfish.jpg', '2017-09-28 06:45:09'),
(43, 'ppp', '$2y$10$M3RkHI9ZCruDyeq6V0Qo1eg5UaQCFkXzN21jO4YZ2GcTepXDelopa', 'asfasg', '47', '/img/Tulips.jpg', '2017-09-28 06:46:21'),
(44, 'pppp', '$2y$10$D7tuAYElxGEpruk5ywBd/OqjQIq4nThA.EOU1b/22/miVWwPhY2xG', 'gsdgsdg', '67', '/img/Tulips.jpg', '2017-09-28 06:46:42');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
