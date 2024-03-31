-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 31 2024 г., 23:35
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `api_reg_auth`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'wfere@mail.ru', '$2y$10$.znqFyCRp4jWBbiaSUwLFuyL1l5oedZ9HVnmkLyYDu3BOAqgbrBRK'),
(2, 'nymtre@mail.ru', '$2y$10$YRfA9AbJWgQtDCxVgO4iVu5Y0JWbywFcO3VZA1ZPIcsJXbcg12zCC'),
(3, 'nryreht@mail.ru', '$2y$10$6TtfuqqDOk.NMcH3R5Yo2ucCrO1uzp9jYVD09f7e37FS09urWs0dC'),
(4, 'rget4r@mail.com', '$2y$10$8k0qgPEWZOnTxVWlEtS3Fusp4o.h2XOzY4nPZz0t8jl11Yr25sgGm'),
(5, 'vrdbt@mail.com', '$2y$10$D1tvOa4m5kjC8aZ5aERQLOUfmILdzW1LB3WiSjjxEwpOPVYSxZUA2'),
(6, 'vrdbt@ail.com', '$2y$10$TqLoSxNc/ZU3DRuOfNWyKeFbyEwRacK7p//N8zKl.1Wf.QFjFZGwO'),
(7, 'wonv@ail.com', '$2y$10$Fn8TzM8NrKpY0Vw7MmpSiOut0/K9HtUHNUwC1sUBTUG04CS/Hs5C.'),
(8, 'wferv@ail.com', '$2y$10$GXzgEVr3nJbmbd4xVdAGi.5YDcERi4tRl3oY4PqdSwpwfAz8IFRk2'),
(9, 'efwr@mail.ru', '$2y$10$4PsC2/flFWskAGzYys9SuOau.DuVIEmLJHzMwXMtb8U/qUiHgZS9.'),
(10, 'egshrnetm@mail.ru', '$2y$10$QzpJN2mHg.JMewZ4a0iZWOi/W2bYZ/FUjSaEEFo5l3bvjRiEjkVK2');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
