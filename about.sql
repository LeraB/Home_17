-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 18 2017 г., 18:17
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `task`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `second_name` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `age` int(100) NOT NULL,
  `sex_two` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `family_position` varchar(30) NOT NULL,
  `social_status` varchar(30) NOT NULL,
  `residence` varchar(30) NOT NULL,
  `choice` varchar(50) NOT NULL,
  `sel` varchar(50) NOT NULL,
  `count` varchar(50) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `position` varchar(50) NOT NULL,
  `input_box` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
