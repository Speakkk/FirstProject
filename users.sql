-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 21 2017 г., 13:36
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mybase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fio` varchar(45) NOT NULL,
  `age` varchar(2) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `admin`, `password`, `fio`, `age`, `photo`, `date`) VALUES
(24, 'Max', '827ccb0eea8a706c4c34a16891f84e7b', 'Goncharov Maxim Olegovich', '', '/img/Hydrangeas.jpg', '2017-09-18 06:03:34'),
(31, 'Ruslan', '827ccb0eea8a706c4c34a16891f84e7b', 'Руслайн Кайназаров', '24', '/img/Lighthouse.jpg', '2017-09-21 05:39:25'),
(32, 'Maxim', '827ccb0eea8a706c4c34a16891f84e7b', 'Maxim Maximov', '99', '/img/Lighthouse.jpg', '2017-09-21 05:40:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
