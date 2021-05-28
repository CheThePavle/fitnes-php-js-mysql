-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 14 2021 г., 21:58
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fitnes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contracts`
--

CREATE TABLE `contracts` (
  `id_contract` int NOT NULL,
  `id_user` int NOT NULL,
  `date_open_cont` date NOT NULL,
  `duration_cont` int NOT NULL,
  `date_end_cont` date NOT NULL,
  `summa_cont` int NOT NULL,
  `id_type` int NOT NULL,
  `id_level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contracts`
--

INSERT INTO `contracts` (`id_contract`, `id_user`, `date_open_cont`, `duration_cont`, `date_end_cont`, `summa_cont`, `id_type`, `id_level`) VALUES
(1, 1, '2021-05-14', 11, '2022-04-14', 12100, 2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `level`
--

CREATE TABLE `level` (
  `id_level` int NOT NULL,
  `name_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `level`
--

INSERT INTO `level` (`id_level`, `name_level`) VALUES
(1, '1-2 месяца'),
(2, '3-6 месяцев'),
(3, '7-10 месяцев'),
(4, '11-15 месяцев'),
(5, '16-20 месяцев');

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `id_type` int NOT NULL,
  `name_type` varchar(50) NOT NULL,
  `price_level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`id_type`, `name_type`, `price_level`) VALUES
(1, 'Полный', 2999),
(2, 'День', 2650),
(3, 'Утро', 2500);

-- --------------------------------------------------------

--
-- Структура таблицы `type_level`
--

CREATE TABLE `type_level` (
  `id_type` int NOT NULL,
  `id_level` int NOT NULL,
  `discount_t_l` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type_level`
--

INSERT INTO `type_level` (`id_type`, `id_level`, `discount_t_l`) VALUES
(1, 1, 0),
(1, 2, 23),
(1, 3, 33),
(1, 4, 53),
(1, 5, 53),
(2, 1, 0),
(2, 2, 36),
(2, 3, 40),
(2, 4, 58),
(2, 5, 62),
(3, 1, 0),
(3, 2, 36),
(3, 3, 40),
(3, 4, 56),
(3, 5, 60);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `login` varchar(50) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `fio`, `email`, `password`, `token`) VALUES
(1, 'user', 'FIO', 'user@mail.ru', 'ee11cbb19052e40b07aac0ca060c23ee', '609eb2345781c');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id_contract`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_type` (`id_type`,`id_level`),
  ADD KEY `id_level` (`id_level`);

--
-- Индексы таблицы `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Индексы таблицы `type_level`
--
ALTER TABLE `type_level`
  ADD KEY `id_type` (`id_type`,`id_level`,`discount_t_l`),
  ADD KEY `id_level` (`id_level`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id_contract` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `contracts_ibfk_2` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`),
  ADD CONSTRAINT `contracts_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);

--
-- Ограничения внешнего ключа таблицы `type_level`
--
ALTER TABLE `type_level`
  ADD CONSTRAINT `type_level_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`),
  ADD CONSTRAINT `type_level_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
