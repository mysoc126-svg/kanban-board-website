-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 20 2025 г., 05:03
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kanban`
--

-- --------------------------------------------------------

--
-- Структура таблицы `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colour` varchar(7) CHARACTER SET utf8 DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_event`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=34 ;

--
-- Дамп данных таблицы `calendar`
--

INSERT INTO `calendar` (`id_event`, `id_user`, `title`, `description`, `colour`, `start_date`, `end_date`) VALUES
(7, 17, 'ДР брата', '', '#5cb85c', '2025-09-20 00:00:00', '2025-09-21 00:00:00'),
(8, 17, 'Бассейн', '', '#0275d8', '2025-09-17 18:30:00', '2025-09-18 00:00:00'),
(9, 17, 'Бассейн', '', '#0275d8', '2025-09-19 18:30:00', '2025-09-20 00:00:00'),
(10, 17, 'Бассейн', '', '#0275d8', '2025-09-24 18:30:00', '2025-09-25 00:00:00'),
(11, 17, 'Работа', '', '#d9534f', '2025-09-18 09:00:00', '2025-09-19 22:00:00'),
(12, 17, 'Бассейн', '', '#0275d8', '2025-09-26 18:30:00', '2025-09-27 00:00:00'),
(13, 17, 'Бассейн', '', '#0275d8', '2025-09-22 18:30:00', '2025-09-23 00:00:00'),
(14, 17, 'Реппетитор', '', '#5cb85c', '2025-09-23 18:50:00', '2025-09-24 00:00:00'),
(15, 17, 'Реппетитор', '', '#5cb85c', '2025-09-25 18:50:00', '2025-09-26 00:00:00'),
(16, 17, 'Реппетитор', '', '#5cb85c', '2025-09-30 18:50:00', '2025-10-01 00:00:00'),
(17, 17, 'Реппетитор', '', '#5cb85c', '2025-10-02 18:50:00', '2025-10-03 00:00:00'),
(18, 17, 'Бассейн', '', '#0275d8', '2025-09-29 18:30:00', '2025-09-30 00:00:00'),
(19, 17, 'Бассейн', '', '#0275d8', '2025-10-01 18:30:00', '2025-10-02 00:00:00'),
(20, 17, 'Бассейн', '', '#0275d8', '2025-10-03 18:30:00', '2025-10-04 00:00:00'),
(21, 17, 'Реппетитор', '', '#5cb85c', '2025-09-18 18:50:00', '2025-09-19 00:00:00'),
(33, 17, 'Мой юбилей 35 лет', '', '#5cb85c', '2025-11-22 00:00:00', '2025-11-23 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `project_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_colour` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id_project`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id_project`, `id_user`, `project_name`, `project_description`, `project_colour`, `start_date`, `end_date`) VALUES
(1, 17, 'Канбан доска', 'Разработка канбан доски', '#5cb85c', '2025-09-14', '2025-09-20');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id_user` int(11) NOT NULL,
  `id_task` int(11) NOT NULL AUTO_INCREMENT,
  `id_project` int(11) DEFAULT NULL,
  `task_status` int(1) NOT NULL,
  `task_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `task_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_colour` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id_task`),
  KEY `tasks_id_project` (`id_project`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=57 ;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id_user`, `id_task`, `id_project`, `task_status`, `task_name`, `task_description`, `task_colour`, `deadline`, `start_date`, `end_date`) VALUES
(17, 38, 0, 1, 'Почистить фанкойл', 'Шумит фанкойл на южном входе', '#d9534f', '2025-09-17', '2025-09-17', '0000-00-00'),
(17, 39, 0, 1, 'Зашить стену', 'Зашить стены в кубе и аптеке, смежную с лавашом.\r\nМатериал:\r\nПенопласт - 12,5 кв.м. \r\nПена', '#5cb85c', '1970-01-01', '2025-09-17', '0000-00-00'),
(17, 40, 0, 2, 'Замена стекла', 'Заменить стекло на бургере.\r\nСтекло заказано - ожидаем', '#f0ad4e', '1970-01-01', '2025-09-17', '0000-00-00'),
(17, 41, 0, 1, 'Люк около самбери', 'В районе служебного входа самбери дорожный люк приходит в негодность', '#5cb85c', '1970-01-01', '2025-09-17', '0000-00-00'),
(17, 42, 0, 3, 'Замок на ЦД', 'Надо найти болт с крепежом для замка внутренней распашной двери на центральном входе', '#5cb85c', '1970-01-01', '2025-09-17', '2025-09-17'),
(17, 56, 0, 3, 'Замена доводчика', 'Заменить доводчик между бургером и тамбуром', '#d9534f', '2025-09-18', '2025-09-18', '2025-09-18');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `user`, `password`, `admin`) VALUES
(17, 'user', 'b14361404c078ffd549c03db443c3fede2f3e534d73f78f77301ed97d4a436a9fd9db05ee8b325c0ad36438b43fec8510c204fc1c1edb21d0941c00e9e2c1ce2', 1);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `calendar`
--
ALTER TABLE `calendar`
  ADD CONSTRAINT `calendar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
