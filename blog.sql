-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 22 2022 г., 10:51
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `intro` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` int UNSIGNED NOT NULL,
  `author` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `intro`, `text`, `date`, `author`) VALUES
(1, 'Язык программирования PHP', 'PHP — это в первую очередь серверный язык программирования, и важно понимать принцип работы клиент-серверного протокола HTTP, который лежит в основе обмена данными в сети интернет', 'Обмен сообщений между веб-браузером и сервером происходит  по принципу запрос-ответ (request-response). Как правило, между клиентом и сервером находятся посредники, такие как модемы, маршрутизаторы и прочие сетевые узлы. HTTP-запросы состоят из: методов, версии HTTP-протокола, путям к ресурсу. Для работы с HTTP используется веб-сервер и почтовый прокси-сервер Nginx, REST', 1645176486, 'Slava'),
(2, 'Интересные особенности указателя this', 'Начнём с определения. this — это указатель на объект, из которого мы вызываем метод. С помощью указателя this и оператора -> можно обратиться к полям класса. Например так:', 'При работе с классами в C++ мы иногда встречаемся с ключевым словом this. Его можно встретить в методах экземпляра класса. Это ключевое слово не так часто используют, и о нём можно найти мало информации. Тем не менее у this есть интересные особенности и случаи применения, о которых знают не все разработчики C++. В этой статье я расскажу о некоторых интересных особенностях указателя this.', 1645219927, 'Slava'),
(3, 'Как стать программистом', 'В данной статье подробно рассказывается, как начать карьеру программиста. Здесь будет много букв. И, возможно, вы разочаруетесь, насколько это долгий процесс. Но это 100% метод.', 'Времена проходят, а ничего не меняется. Главная причина в том, что программисты очень нужны на рынке труда. Востребованность является первопричиной всех остальных факторов. Хорошие условия труда, высокие зарплаты, лояльное начальство. Все это смотрится очень и очень привлекательно. Фактически профессия программиста единственный социальный лифт в наше время. Вам не нужны богатые родители, обширные связи со всякими «нужными людьми», престижное высшее образование и прочие атрибуты успешных людей в наше время. Всё, что вам нужно, это умение создавать компьютерные программы или web-сайты. Вы можете начать программировать, живя в самой далёкой и непрестижной провинции. И добиться фантастических успехов в жизни.', 1645220243, 'Yrok281'),
(4, 'Как освоить бэкенд-разработку', 'Бэкенд-разработчик отвечает за корректность работы и оптимизацию серверной логики.', 'Грубо говоря, аутентификация, раздача прав доступа, обработка действий пользователя, работа с данными, интеграция с другими приложениями, скорость обработки запросов — всё это ложится на плечи сервера. Разумеется, фронтенд тоже не стоит на месте, и ряд функций может быть вынесен на сторону клиента. Но в этом случае следует отдавать себе отчёт в том, насколько это секьюрно для веб-приложения и его пользователей, а также не замедлит ли это сайт.', 1645250920, 'Веталь');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `article_id` int UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `message`, `article_id`) VALUES
(1, 'Веталь', 'Спасибо! Классная статья', 4),
(2, 'Веталь', 'Превосходно!', 4),
(3, 'Веталь', 'Супер!', 4),
(4, 'Slava', 'Просто офигенно', 3),
(5, 'Slava', 'Статья полезная! Много нового узнал для себя', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `login`, `password`) VALUES
(1, 'Вячеслав', 'slavik@gmail.com', 'Slava', '2c966710ec95b47be18171846e2b8376'),
(2, 'Юрий', 'yura@yandex.ru', 'Yrok281', 'be5f52d38ad7aa15942416c20ad1fe65'),
(3, 'Виталий', 'vetal@gmail.com', 'Веталь', '88681add0d246bfc9870d1528becaef0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
