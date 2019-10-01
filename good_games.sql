-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 192.168.1.101:3306
-- Время создания: Мар 22 2019 г., 11:01
-- Версия сервера: 5.6.38
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `good_games`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(12) NOT NULL,
  `login_admin` varchar(30) NOT NULL,
  `pwd_admin` varchar(255) NOT NULL,
  `name_admin` varchar(30) NOT NULL,
  `receiver_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id_admin`, `login_admin`, `pwd_admin`, `name_admin`, `receiver_admin`) VALUES
(1, 'admin', 'amsOw+NRykbtI4TOcDSqUqdWVyburoA2JdroadVxDbm8SrJuSARAULjNrQW/9FtRoUyZiDEORsneu0aREcenXQo5i03GDAxSAzHeUCkHbp7zHaRx9X5Xo3X3ZkBaD8T2|UAXWK9E+Glbt/oeVlcMbgL7tvywsHy3vRfSI88/y2Go=', 'Администратор', '410016538063744');

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id_art` int(11) NOT NULL,
  `art_game_id` int(11) NOT NULL,
  `name_art` varchar(100) NOT NULL,
  `cat_art` int(12) NOT NULL,
  `author_art` varchar(100) NOT NULL,
  `prewiew_text` varchar(255) NOT NULL,
  `text_art` mediumtext NOT NULL,
  `views_art` int(12) NOT NULL,
  `date_art` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id_art`, `art_game_id`, `name_art`, `cat_art`, `author_art`, `prewiew_text`, `text_art`, `views_art`, `date_art`) VALUES
(2, 0, '50 минут геймплея Left Alive', 1, 'Администратор', 'Square Enix провела стрим тактического экшена Left Alive, на котором показала вступительный геймплей за Михаила Шварова.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Square Enix провела стрим тактического экшена Left Alive, на котором показала вступительный геймплей за Михаила Шварова. Это один из трёх главных героев игры, который служит пилотом меха.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Геймплей&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Left Alive</em>&nbsp;концентрируется на симуляции выживания и пеших сражениях&nbsp;— на записи стрима это можно увидеть в промежутках с 16:12 по 35:25, а также&nbsp;с 39:00 по 51:08. Игроки смогут управлять и ванзерами — гигантскими боевыми роботами. Бои на меха демонстрируются в отрывке с&nbsp;1:05:47 по 1:12:46.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/8obedziruSM\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"></p><div class=\"videoPlayer embed\" itemscope=\"\" itemtype=\"http://schema.org/VideoObject\" itemprop=\"video\" style=\"-webkit-font-smoothing: antialiased; margin: 16px 0px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Согласно сюжету&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Left Alive</em>, в 2127 году Республика Гармония объявила войну Рутении, захватив пограничный город Новослава. В нём и разворачивается действие игры, которая выступит спин-оффом серии Front Mission.</div><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><em style=\"-webkit-font-smoothing: antialiased;\">Left Alive</em>&nbsp;выйдет 5 марта 2019 года на PC и PS4.</p>', 4, '31 янв. 2019 17:30'),
(3, 0, 'Релизный трейлер киберпанк-стратегии Re-Legion', 1, 'Администратор', 'Square Enix провела стрим тактического экшена Left Alive, на котором показала вступительный геймплей за Михаила Шварова.', '<div style=\"margin: 10px 0px 15px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 16px;\"><div class=\"main_text\" itemprop=\"articleBody\" style=\"border: 0px; margin: 0px; padding: 0px 2px; font-size: 13px; line-height: 18.2px; font-family: Verdana, Geneva, sans-serif;\"><div style=\"margin: 10px 0px 15px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 16px;\"><div style=\"text-align: left; margin: 10px 0px 15px; padding: 0px;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Издательская студия 1С Entertainment опубликовала релизный трейлер&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Re-Legion.&nbsp;</em>Это киберпанк-стратегия о создании культа, которая уже доступна на PC.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/z_JRFsSe9JE\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Согласно сюжету&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Re-Legion,&nbsp;</em>в 2184 году некий Элион объявляет себя пророком и пытается обратить в свою секту всех жителей киберпанкового мегаполиса. По мере развития культа геймеры смогут устанавливать его догмы. Это откроет возможности для вариативного прохождения — так игроки смогут убить или помиловать несогласных жителей.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">До 7 февраля&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Re-Legion&nbsp;</em>можно приобрести в Steam&nbsp;<a href=\"https://store.steampowered.com/app/782140/ReLegion/\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">со скидкой в 10%.</a></p></div></div></div></div>', 7, '31 янв. 2019 18:30'),
(4, 0, 'Слепой геймер освоил режим орды в Gears of War 4', 1, 'Администратор', 'После прохождения Dark Souls на бананах и барабанах, казалось, удивить игроков нечем. Однако, геймер под ником SightlessKombat поражает сообщество до сих пор. ', '<div style=\"margin: 10px 0px 15px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 16px;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">После прохождения Dark Souls на бананах и барабанах, казалось, удивить игроков нечем. Однако, геймер под ником SightlessKombat поражает сообщество до сих пор. Дело в том, что игрок полностью слепой, но недуг не мешает ему наслаждаться играми.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">В сети появился ролик, в котором SightlessKombat проходит режим орды в&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Gears of War 4</em>, полагаясь только на обостренный слух. Геймер в основном убивал врагов в ближнем бою, не используя укрытий.&nbsp;Такой тактикой он дожил до пятой волны.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">\"Иногда полезно стрелять вслепую — в буквальном смысле\", — шутит сам автор видео.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"></p><div class=\"videoPlayer embed\" itemscope=\"\" itemtype=\"http://schema.org/VideoObject\" itemprop=\"video\" style=\"-webkit-font-smoothing: antialiased; margin: 16px 0px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/Dgm-PSQzOkk\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></div><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Также стоит отметить, что разработчики&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Gears of War 4&nbsp;</em>уже давно<em style=\"-webkit-font-smoothing: antialiased;\">&nbsp;</em>знают о своем незрячем фанате. Специально для него и других игроков с аналогичным недугом в прошлогоднем&nbsp;<a href=\"https://gearsofwar.com/en-za/community/gears4-2018-aprupdate\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">патче</a>&nbsp;студия добавила отдельную функцию Fabricator Ping, которая&nbsp;позволяет находить фабрикаторы по звуковым сигналам.</p></div>', 8, '31 янв. 2019 19:30'),
(5, 0, 'Dead or Alive 6 получит бесплатную версию после релиза', 1, 'Администратор', 'Разработчики из Team Ninja выпустят Dead or Alive 6 Core Fighters. Это бесплатная версия файтинга Dead or Alive 6, которая появится после релиза игры.', '<div style=\"margin: 10px 0px 15px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 16px;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Разработчики из Team Ninja выпустят&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Dead or Alive 6 Core Fighters.&nbsp;</em>Это&nbsp;бесплатная версия файтинга&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Dead or Alive 6,&nbsp;</em>которая&nbsp;появится после релиза игры.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><em style=\"-webkit-font-smoothing: antialiased;\">Dead or Alive 6 Core Fighters&nbsp;</em>недавно появилась в&nbsp;Microsoft Store, однако почти сразу исчезла. Гейм-директор&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Dead or Alive 6&nbsp;</em>Йохей Симбори&nbsp;позднее подтвердил будущий выход бесплатной версии. По словам разработчика, Team Ninja пока не готова официально представить&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Dead or Alive 6 Core Fighters&nbsp;—</em>&nbsp;она&nbsp;выйдет в рамках пострелизной поддержки основной игры.</p><div class=\"reference clearfix\" style=\"-webkit-font-smoothing: antialiased; zoom: 1; margin-bottom: 16px; padding: 16px; border: 1px solid rgba(0, 0, 0, 0.1); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 4px; transition: all 0.3s ease 0s; position: relative; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><div class=\"reference-aside\" style=\"-webkit-font-smoothing: antialiased; float: left;\"><span style=\"color: rgb(0, 0, 0);\"><img width=\"150\" height=\"86\" src=\"https://cdn.shazoo.ru/c260x150/316026_TYLyY6ZEWo_25_01.jpg\" style=\"-webkit-font-smoothing: antialiased; border: 0px; vertical-align: bottom; max-width: 100%; height: auto;\"></span></div><div class=\"reference-content\" style=\"-webkit-font-smoothing: antialiased; margin-left: 166px;\"><h6 class=\"entryTitle\" style=\"-webkit-font-smoothing: antialiased; font-size: 1.0833em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-weight: 700; line-height: 1.3;\"><span style=\"color: rgb(255, 255, 255);\">Dead or Alive 6 сохранила \"классическую\" физику женской груди</span></h6><div class=\"entrySummary\" style=\"-webkit-font-smoothing: antialiased; font-size: 0.875em;\"><span style=\"color: rgb(255, 255, 255);\">Eurogamer выяснил, что файтинг Dead or Alive 6 все же...</span><a class=\"more\" href=\"https://shazoo.ru/2019/01/25/75236/dead-or-alive-6-sohranila-klassicheskuyu-fiziku-zhenskoj-grudi\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; display: block;\">Далее</a></div></div></div><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Детали бесплатной версии&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Dead or Alive 6&nbsp;</em>пока не разглашаются. Скорее всего, она выступит аналогом&nbsp;Dead or Alive 5 Core Fighters, в которой геймеры могут сражаться всего за четырёх персонажей и не имеют доступа к сюжетному режиму.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><em style=\"-webkit-font-smoothing: antialiased;\">Dead or Alive 6</em>&nbsp;выйдет<em style=\"-webkit-font-smoothing: antialiased;\">&nbsp;</em>1 марта на PC, PS4 и Xbox One — первоначальную дату&nbsp;<span style=\"outline-color: initial; outline-style: initial; transition-property: color;\">перенесли</span>&nbsp;на две недели.</p></div>', 58, '31 янв. 2019 20:30'),
(6, 0, 'Microsoft отчиталась о рекордном доходе игрового подразделения', 4, 'Администратор', 'Исполнительный директор Microsoft Сатья Наделла отчитался перед инвесторами о втором квартале финансового года.', '<div style=\"margin: 10px 0px 15px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, Helvetica, sans-serif; font-size: 16px;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Исполнительный директор Microsoft Сатья Наделла отчитался перед инвесторами о втором квартале финансового года. По словам Наделлы, игровое подразделение компании сгенерировало рекордный доход за три месяца.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">За аналогичный период прошлого года доход вырос на восемь процентов и составил 4.23 миллиарда долларов. Благодарить за это стоит игры и платные сервисы, их рост составил более 30 процентов. Продажи консолей сократились на 19%.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Наделла заявил, что среднее количество активных пользователи за месяц составило рекордные 64 миллиона. Xbox Game Pass и Mixer также бьют рекорды.</p><div class=\"reference clearfix\" style=\"-webkit-font-smoothing: antialiased; zoom: 1; margin-bottom: 16px; padding: 16px; border: 1px solid rgba(0, 0, 0, 0.1); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 4px; transition: all 0.3s ease 0s; position: relative; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><div class=\"reference-aside\" style=\"-webkit-font-smoothing: antialiased; float: left;\"><span style=\"color: rgb(0, 0, 0);\"><img width=\"150\" height=\"86\" src=\"https://cdn.shazoo.ru/c260x150/315023_VuQySNhGyt_omb_touch_large.jpg\" style=\"-webkit-font-smoothing: antialiased; border: 0px; vertical-align: bottom; max-width: 100%; height: auto;\"></span></div><div class=\"reference-content\" style=\"-webkit-font-smoothing: antialiased; margin-left: 166px;\"><h6 class=\"entryTitle\" style=\"-webkit-font-smoothing: antialiased; font-size: 1.0833em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-weight: 700; line-height: 1.3;\"><span style=\"color: rgb(255, 255, 255);\">Глава Microsoft рассказал о стриминговом сервисе Project xCloud</span></h6><div class=\"entrySummary\" style=\"-webkit-font-smoothing: antialiased; font-size: 0.875em;\"><span style=\"color: rgb(255, 255, 255);\">В рамках пресс-конференции глава Microsoft Сатья Наделла рас...</span><a class=\"more\" href=\"https://shazoo.ru/2019/01/22/75037/glava-microsoft-rasskazal-o-strimingovom-servise-project-xcloud\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; display: block;\">Далее</a>\n<br class=\"Apple-interchange-newline\"></div></div></div><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">В США финансовый год начинается в июле. В отчете речь идет о втором квартале, с октября по декабрь 2018 года. В этот период Microsoft купила студии inXile и Obsidian.</p></div>', 12, '31 янв. 2019 21:30'),
(7, 0, 'Гайд Resident Evil 2: Как победить Тирана?', 2, 'Администратор', 'Тиран является одним из противников в Resident Evil 2. Он появляется на вашем пути где-то в середине вашего исследования полицейского участка Раккун-сити и поисков возможностей для побегов.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Тиран является одним из противников в Resident Evil 2. Он появляется на вашем пути где-то в середине вашего исследования полицейского участка Раккун-сити и поисков возможностей для побегов. В этом гайде я дам несколько полезных советов о том, как противостоять этому милому парню в шляпе.</p><blockquote style=\"-webkit-font-smoothing: antialiased; margin-top: 20px; margin-bottom: 20px; padding: 8px 0px 8px 16px; border-left: 3px solid rgb(61, 138, 193); font-size: 18px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><h3 style=\"-webkit-font-smoothing: antialiased; font-size: 1.5em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3;\">Как его убить? Никак.</h3></blockquote><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Это самая важная информация, которую вы должны знать, когда столкнетесь с этим бугаем в шляпе. Не тратьте на него патроны, не пытайтесь отстрелить ему конечности, размозжить голову. Все тщетно. Поэтому не тратьте на Тирана патроны, они пригодятся. И не паникуйте, когда он выходит из-за угла.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Единственное, что вы можете сделать&nbsp;— сбить шляпу ради достижения.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://cdn.shazoo.ru/315082_vRl7k8fwH8_resident_evil_2_20190120162946.jpg\" alt=\"\" width=\"1500\" height=\"844\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Чтобы успешно бороться с ним, используйте запутанные коридоры полицейского участка и просто убегайте. Клэр и Леон быстрее Тирана, так что догнать вас он не сможет. Во время его атак вы можете уворачиваться&nbsp;— великану понадобится пара секунд поправить голову и подготовиться к следующей атаке, это ваше окно для побега.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Тиран бьет одним из двух способов: удар рукой или два удара подряд. От обоих можно уйти в сторону или назад. Максимум, на что способен удар, убрать у вас половину здоровья, так что не паникуйте, если пропустили. Просто убегайте.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">А пока вы бегаете по полицейскому участке, внимательно слушайте его топот&nbsp;— чем он громче, тем ближе к вам этот парень. Если вдруг шаги внезапно пропали, то готовьтесь&nbsp;— Тиран с большой долей вероятности стоит за углом и ждет, когда вы на него наткнетесь.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">P.S. Кстати, он отличное орудие против зомби, сметает их со своего пути на раз.</p>', 1, '04 фев. 2019 18:08'),
(8, 0, 'Советы начинающим в \"Затмении\" Call of Duty: Black Ops 4', 2, 'Администратор', 'В Call of Duty: Black Ops 4 идет ивент бесплатного доступа к режиму \"Затмение\", то желающим попробовать королевскую битву под соусом Treyarch могут пригодиться эти советы.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">В Call of Duty: Black Ops 4 идет ивент бесплатного доступа к режиму \"Затмение\", то желающим попробовать королевскую битву под соусом Treyarch могут пригодиться эти советы.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 700;\">Точка высадки</span></h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Начнем с самого начала, а именно с точки высадки на карте. На карте ниже красным мы отметим точки, куда очень редко прыгают другие игроки. Чаще всего игроки любят лететь на подписанные локации, но это не значит, что самый лучший лут там, спокойно можете прыгать на эти точки, если вы играете соло.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://pp.userapi.com/c844722/v844722462/18aaae/BRq-pKT8Em0.jpg\" alt=\"\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Если вы играете в паре, то также можете попробовать эти точки, но не факт, что вам хватит лута на двоих, лучше всего уже прыгать на точки обведенные синим цветом, там вам точно хватит лута на двоих, но можете уже ожидать компанию других игроков. Отрядом из 4 человек лучше уже прыгать на подписанные локации, не забывайте, что на Nuketown есть подземный уровень, где зачастую находится хороший лут.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 700;\">Лут</span></h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Первым делом постарайтесь найти достойное оружие. Лучший набор, на мой субъективный взгляд, который пришелся по вкусу почти всем игрокам в Blackout, это сет из ABR 223 и пистолета-пулемета.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://i.ytimg.com/vi/41BNKtYcXp8/maxresdefault.jpg\" alt=\"Картинки по запросу ABR 223 blackout\" width=\"1038\" height=\"584\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Пистолет-пулемет лучше всего взять SAUG, Cordit (кордит) или Spitfire (Дракончик). ABR 223 это тактическая винтовка, которая стреляет очередью из трех патронов, а также это лучший выбор для среднего и дальнего боя, если вы еще не умеете стрелять из снайперских винтовок или по какой-то причине не любите с ними играть. Урон достаточно высокий, стреляет далеко, почти все пули летят в цель. Обязательно найдите для нее прицел и хотя бы одну ручку, из прицелов подойдет даже х3, но оптимальным будет х4.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Если не будет ABR, то постарайтесь найти снайперскую винтовку, лучше всего для начала подойдет Bandit или SDM, если даже снайперских винтовок рядом не будет, то на крайний случай можно взять штурмовую винтовку. Для дальнего боя лучше всего подходит ICR-7 и Rampart 17 (Бастион 17). Также для среднего боя самой лучшей штурмовой винтовкой считается SWAT (Спецназ) или KN-57. Ни в коем случае не берите Auger DMR, это на вид хорошая винтовка, но наносит всего 20 единиц урона. Swordfish также достаточно тяжелое оружие для новичков. Дробовики стоит брать, если вы умеете с ними играть, для ближнего боя предпочтительнее пистолет-пулемет.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://geekdom.gr/wp-content/uploads/2018/11/armor.jpg\" alt=\"Картинки по запросу фкьщк blackout\" width=\"1038\" height=\"584\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Обязательно найдите броню. Без брони вас убьют очень быстро. Предпочтительнее всего вторая броня, ее можно увидеть выше, первая броня подойдет только на крайний случай, если вы нашли третью броню, то считайте, что половина победы у вас уже есть, потому что в третьей броне вы превращаетесь в танк, которого не убьет даже выстрел из снайперской винтовки в голову.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://i.imgur.com/mz988bN.jpg\" alt=\"Похожее изображение\" width=\"1038\" height=\"584\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 700;\">Перки</span></h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">В режиме Blackout игроки могут применять временные перки — небольшие контейнеры зеленого цвета с определенным рисунком, тактическое применение которых позволит вам одержать победу. Лучшие перки это:</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 700;\">Outlander</span>&nbsp;(чужак) — позволяет вам получат меньше урона вне зоны, а также ускоряет вас вне зоны. То что нужно, если до зоны нужно бежать очень долго.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 700;\">Consumer</span>&nbsp;(потребитель) — вы начинаете использовать предметы намного быстрее. Если вы с этим перком попадете в бой, то вы сможете вылечиться намного быстрее, чем соперник, а это очень важное преимущество.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 700;\">Paranoia</span>&nbsp;(паранойя) и&nbsp;<span style=\"-webkit-font-smoothing: antialiased; font-weight: 700;\">Awareness</span>&nbsp;(осведомленность) — при использовании первого перка будет издаваться звук, когда в вас кто-то целится, так вы не попадает врасплох, второй перк поможет вам лучше услышать врага, вообще звук очень важен в этом режиме, так что играйте в хороших наушниках.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://cdn.vox-cdn.com/thumbor/Dfp0opYrGe4pBtXK3NZkMGgmYZ8=/0x0:1920x1080/1200x0/filters:focal(0x0:1920x1080):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/13262289/Healing.jpg\" alt=\"Картинки по запросу trauma kits blackout\" width=\"1038\" height=\"584\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Также не забывайте собирать аптечки, особенно старайтесь найти Trauma Kit (перевязочный пакет), который повысит ваше здоровье до 200. С парой таких штук и третьей броней вы точно дойдете до последних зон. Из других предметов вам точно понадобятся кластерные гранаты и Sensor Dart (сенсорный дротик), он показывает врагов на карте в радиусе своего действия.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 700;\">Игра</span></h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Вы долетели до зоны, нашли самый лучший лут, теперь ваше дело выжить и стать победителем королевской битвы. Не советуем вступать в прямые конфронтации, если вы не уверены в своей победе, это не командный бой, тут другие правила игры, выигрывает часто не самый крутой игрок, а самый умный игрок. Также важно играть от края зоны, тем более, если вы только начали познавать этот режим, так будет проще, к вам никто не зайдет за спину от зоны, а вы будете себя чувствовать в безопасности.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Удачной охоты!&nbsp;</p>', 1, '04 фев. 2019 18:12'),
(9, 0, 'Лучший способ ловить рыбу в Red Dead Online', 2, 'Администратор', 'Рыбалка это спокойной и приятное занятие, требующее внутренней гармонии, выдержи и усердия. Даже в Red Dead Redemption 2 и Red Dead Online, хоть это и виртуальное занятие.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Рыбалка это спокойной и приятное занятие, требующее внутренней гармонии, выдержи и усердия. Даже в Red Dead Redemption 2 и Red Dead Online, хоть это и виртуальное занятие. Но иногда можно пойти на рыбалку с нервным и нетерпеливым другом, который сделает все совсем не так, как это принято.</p><blockquote class=\"twitter-tweet twitter-tweet-error\" data-twitter-extracted-i154929319632887777=\"true\" style=\"-webkit-font-smoothing: antialiased; margin: 20px auto; padding: 8px 0px 8px 16px; border-left: 3px solid rgb(61, 138, 193); font-size: 18px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p lang=\"en\" dir=\"ltr\" style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.4;\">Best way to fish in&nbsp;<a href=\"https://twitter.com/hashtag/RDR2?src=hash&amp;ref_src=twsrc%5Etfw\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">#RDR2</a>????<a href=\"https://t.co/kEcnAhO3v1\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\" target=\"_blank\">https://t.co/kEcnAhO3v1</a><a href=\"https://t.co/7imKcHCh53\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">pic.twitter.com/7imKcHCh53</a></p><div style=\"-webkit-font-smoothing: antialiased;\">— Red Dead Community (@rdr_online)</div><div style=\"-webkit-font-smoothing: antialiased;\"><a href=\"https://twitter.com/rdr_online/status/1072468043870232579?ref_src=twsrc%5Etfw\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; color: rgb(0, 0, 0);\">11 декабря 2018 г.</a></div></blockquote><p><twitter-widget class=\"twitter-tweet twitter-tweet-rendered\" id=\"twitter-widget-1\" style=\"-webkit-font-smoothing: antialiased; margin-left: auto; margin-right: auto; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; position: absolute; visibility: hidden; display: block; transform: rotate(0deg);\"></twitter-widget></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Впрочем, результат есть, так что взятки гладки. И не спрашивайте, зачем надо было рыбачить в фонтане.</p>', 0, '04 фев. 2019 18:14');
INSERT INTO `articles` (`id_art`, `art_game_id`, `name_art`, `cat_art`, `author_art`, `prewiew_text`, `text_art`, `views_art`, `date_art`) VALUES
(10, 0, 'Как найти и открыть все гробницы (склепы) в Just Cause 4', 2, 'Администратор', 'В Just Cause 4 есть три побочные квестовые линии, и одна из них связана с поиском секретов древних правителей Солиса. Квест выдает Хави, и здесь вам нужно будет заниматься поисками забытых могил.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">В&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Just Cause 4</em>&nbsp;есть три побочные квестовые линии, и одна из них связана с поиском секретов древних правителей Солиса. Квест выдает Хави, и здесь вам нужно будет заниматься поисками забытых могил. В отличие от всех сюжетных заданий данная миссия не сопровождается маркерами и прочими указателями, поэтому искать объекты придется вручную. Кроме того, каждый из них нужно будет открыть.</p><h3 style=\"-webkit-font-smoothing: antialiased; font-size: 1.5em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Тайная история Солиса</h3><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">С первой гробницей связано первое задание квестовой цепочки, которое вы берете у Хави. Данный квест считается частью сюжетной кампании, поэтому упустить его из виду не выйдет (только так вы получите лебедку для крюка). \"Тайная история Солиса\" ознакомит вас с принципом действия гробниц и механизмом, позволяющим их открывать. Вам нужно будет использовать лебедку, чтобы передвинуть с места деревянный рычаг. Это в свою очередь освободит большой круглый булыжник, который в игре называется Умой.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://cdn.shazoo.ru/306950_vFRjj7SajW_02.jpg\" alt=\"\" width=\"768\" height=\"430\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Ума скатится на гигантскую кнопку в небольшой впадине. Если Ума не добралась до впадины, то затолкайте ее самостоятельно, используя лебедку и притянув Уму к центру кнопки. Развернитесь и войдите в открывшийся склеп, чтобы зажечь свечу и прочесть на стене тайное послание. Забегая вперед, отметим, что таким же принципом будут открываться все гробницы, скрытые на острове Солис: опускается рычаг для освобождения Умы, после чего камень перемещается на кнопку. С гробницей трех сыновей чуть сложнее: там нужно воспользоваться тремя Умами, хотя но на деле — проще некуда.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Гробница трех сыновей</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://cdn.shazoo.ru/306951_lpNmMvAvoo_03.jpg\" alt=\"\" width=\"768\" height=\"430\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Эта гробница находится в центре тропического леса, в правой части карты. Нужно будет установить три разных Умы на три разные кнопки. Все Умы спрятаны на вершине холма. Оказавшись на месте, двигайтесь к разным краям холма, чтобы найти три одинаковые каменные конструкции. Нетрудно догадаться, что Ума спрятан внутри, и при помощи рычага можно открыть нижнюю часть.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">От всех трех конструкций идите в ближайшие руины справа. В них спрятаны рычаги. Опустите каждый из них, затем спуститесь к трем склепам, чтобы при помощи лебедки притянуть скатившиеся камни на кнопку. Когда все три Умы будут на месте, то откроется склеп на вершине. Как всегда, войдите внутрь и зажгите свечу, чтобы увидеть тайную надпись.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Гробница супруги</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://cdn.shazoo.ru/306952_4KE24kgRLO_04.jpg\" alt=\"\" width=\"768\" height=\"430\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Эта гробница находится в правой части карты, на юго-востоке Вачикуни. Отправляйтесь к небольшому месту раскопок. Вы увидите запертый булыжник Ума. Смотря на него, спуститесь в яму слева и за одной из каменных конструкций отыщите рычаг. Опустите его, затем лебедкой затолкайте Уму в шахту неподалеку от рычага. Когда камень свалится, то прыгайте за ним и передвигайте по единственному пути к кнопке и склепу. Войдите в склеп за новой фразой.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Гробница мудреца</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://cdn.shazoo.ru/306953_EJQYeXpKPh_05.jpg\" alt=\"\" width=\"768\" height=\"429\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Четвертая гробница нашего гайда расположена в верхней части карты над надписью Умина. Вход внутрь закрыт. Идите к берегу моря в противоположную сторону и сверните в пещеру слева, чтобы отыскать проход, ведущий в гробницу. Используя Уму (потянув за рычаг), откройте склеп и войдите внутрь. Тот же булыжник поможет вам разрушить преграду, чтобы открыть проход наружу. В склепе будет очередная строка стихотворения.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Гробница воина</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://cdn.shazoo.ru/306954_oJW4ugXwpa_06.jpg\" alt=\"\" width=\"768\" height=\"429\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Данная гробница расположена в дальнем правом углу карты, ниже дельты Рио и к северо-востоку от Кунки. Пройдите в область с Умой, запертым на вершине конструкции. Стоя лицом к ступеням, сверните влево и позади столба отыщите рычаг. Освободив Уму, вам придется проделать с булыжником долгий путь до кнопки. Чтобы дать достаточный импульс для камня, используйте несколько лебедок, что позволит поднять его по ступеням на поле с кнопкой. Войдите в склеп и изучите фразу.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Гробница принцессы</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://cdn.shazoo.ru/306955_YAB5Nm7VrU_07.jpg\" alt=\"\" width=\"768\" height=\"429\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Последняя гробница находится в левой части тропического леса, к западу от Альтойаку. В земле есть большая дыра, через которую вам нужно спрыгнуть вниз. Найдите широкую дорогу, покрытую травой. Она максимально ровная среди всех и напоминает каньон, по которому может скатиться камень. Идите по ней и в конце опустите рычаг, чтобы освободить Уму. Бегите за камнем и переместите его на кнопку. Войдите в склеп и изучите последнюю фразу.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Из собранных фраз (гробницы можно посещать в любом порядке), Хави составит стихотворение и узнает, где искать гробницу Оторонго. Поднимитесь на вершину указанного здания, после чего появятся маркеры, указывающие на шесть Ум. Перекатите все камни на шесть кнопок и найдете саркофаг.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://cdn.shazoo.ru/306949_VTqWrxsHJP_01.jpg\" alt=\"\" width=\"768\" height=\"429\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Прикрепите его к любому автомобилю и доставьте в указанное место, чтобы завершить квестовую цепочку и раскрыть тайну древних правителей.</p>', 0, '04 фев. 2019 18:15'),
(11, 0, 'Баги, ошибки, зависания и вылеты Just Cause 4', 2, 'Администратор', 'В Just Cause 4 много визуальных улучшений, игра была оптимизирована для всех платформ, поэтому проседания FPS здесь встречаются гораздо реже нежели это было в Just Cause 3, особенно на консолях. AMD даже выпустила новую версию Radeon Adrenalin Edition 18.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">В&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Just Cause 4</em>&nbsp;много визуальных улучшений, игра была оптимизирована для всех платформ, поэтому проседания FPS здесь встречаются гораздо реже нежели это было в Just Cause 3, особенно на консолях. AMD даже выпустила новую версию Radeon Adrenalin Edition 18.12.1 специально под релиз Just Cause 4.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Несмотря на все это геймеры жалуются на некоторые ошибки и проблемы, включая Direct3D Error Core: 34, черный экран и многое другое. Прежде чем запускать игру, убедитесь, что ваш ПК отвечает всем системным требованиям. А далее ознакомьтесь с вариантами решения тех или иных неприятностей.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Вылет при запуске</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Just Cause 4 может вылетать при запуске. И вот несколько способов решения проблемы. Убедитесь, что не используете стороннее ПО для мониторинга, включая MSI Afterburner.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Еще одной причиной вылетов при запуске может быть антивирус или защитник Windows. Вы можете создать исключение для \"экзешника\" игры в своем антивирусе или попросту отключить его. Это должно решить все проблемы.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Ошибка Direct3D Error Code: 34</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Некоторые геймеры жалуются на борьбу с ошибкой irect3D Error Code: 34 DXGI_ERROR_DEVICE_HUNG, которая возникает прямо во время игры. Есть разные варианты для ее исключения.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Откройте панель управления Nvidia и выберите строку \"Управление настройками 3D\". Затем перейдите в \"Настройки программы\" и в раскрывающемся списке выберите Just Cause 4 и установите \"Управление питанием\" на значение \"Адаптивный\". Это может помочь.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Кроме того, обновите драйвера видеокарты до последней версии или хотя бы используйте Game Ready Driver для Just Cause 4. Если это не сработает, возможно, проблема в самой видеокарте. Если вы ее разогнали или она была разогнана в заводских условиях, то верните тактовую частоту процессора на базовый уровень. Это устранит ошибку DXGI_ERROR_DEVICE_HUNG.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Отсутствует звук: что делать?</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Убедитесь, что в настройках звука установлено такое же количество аудиоканалов, что и на наушниках (именно с ними возникает проблема). Перейдите к разделу \"Воспроизведение\", \"Звуки\" и выберите свое активное оборудование. Теперь нажмите \"Настроить\" и вам предоставят набор опций. Выберите правильный канал для аудиоустройства и примените настройки.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Если проблема не устранена, то запустите игру от имени администратора. Для этого откройте папку с установленной игрой и отыщите \"экзешник\". Щелкните ПКМ по нему, выберите свойства, перейдите на вкладку \"Совместимость\" и установите \"флажок\" на пункте \"Запускать программу от имени администратора\". Примените настройки, а затем запустите Just Cause 4. Все должно заработать.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Исправление вылетов</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Если Just Cause 4 вылетает не на запуске, а в любой момент игры в случайном порядке, то воспользуйтесь вариантами ниже:</p><ol style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 1em; margin-left: 2em; padding: 0px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Обновите драйвера видеокарты до последней версии, что обеспечит корректную оптимизацию игры.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Отключите сторонние приложения для мониторинга, включая указанный ранее MSI Afterburner.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Запустите игру от имени администратора.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Отключите синхронизацию Steam Cloud. Для этого щелкните ПКМ по названию игры в библиотеке Steam и выберите \"Свойства\". Перейдите в раздел \"Обновления\" и снимите флажок на пункте Steam Cloud.</li></ol><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Как исправить черный экран</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Черный экран&nbsp;— распространенная проблема для компьютерных видеоигр, и Just Cause 4 не является исключением. Чтобы решите проблему, запустите игру и при появлении черного экрана нажмите на сочетание клавиша Alt и Enter. Это переведет игру в оконный режим. Перейдите к видеонастройкам и измените разрешение на родное разрешение монитора, затем выберите полноэкранный режим.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Зависания и лаги</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">На некоторых конфигурациях ПК могут возникать иные проблемы, связанные с торможениями и зависаниями, включая проседание частоты кадров. Для начала убедитесь, что обновили драйвера на видеокарте, поскольку она обеспечивает корректную оптимизацию игры. Убедитесь в отсутствии лишних программ, работающих в фоновом режиме, которые чрезмерно загружают ваш CPU или жесткий диск.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Если вы являетесь обладателем графического процессора серии GTX 10, то откройте панель управления Nvidia и выберите пункт \"Управление настройками 3D\". Выберите в списке Just Cause 4 и установите \"Вертикальную синхронизацию\" на значении \"Быстро\" (FAST). Это позволит значительно увеличить FPS, но только если с этим справятся ваши GPU и CPU.</p>', 0, '04 фев. 2019 18:16'),
(12, 0, 'Как разблокировать больше пилотов в Just Cause 4', 2, 'Администратор', 'Во вторник состоялся релиз Just Cause 4. Игра появилась на трех игровых платформах — ПК, PS4 и Xbox One. Экшен-адвенчура с открытым миром, за разработку которой отвечала Avalanche Studios, рассказывает историю полюбившегося многим главного героя — Рико Ро', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Во вторник состоялся релиз&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Just Cause 4</em>. Игра появилась на трех игровых платформах&nbsp;— ПК, PS4 и Xbox One. Экшен-адвенчура с открытым миром, за разработку которой отвечала Avalanche Studios, рассказывает историю полюбившегося многим главного героя&nbsp;— Рико Родригеса.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Четвертая запись серии является прямым продолжение Just Cause 3. События игры развиваются в вымышленной южноамериканской стране под названием Солис. Государство находится под узурпацией тирана Эспиносы, который управляет известной военной организацией \"Черная Рука\".</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">На протяжении игры вы будете находить новые гаджеты, транспортные средства, осваивать различные приемы для передвижения по локациям. Не являются исключением пилоты, которые используются в JC4 для быстрого перемещения на ранее посещенные локации (серые значки на карте). Кроме того, при помощи пилотов можно вызывать поставки разблокированной техники, оружия и т. п.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Как открыть больше пилотов</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Для этого вам нужно увеличивать уровень влияния армии Хаоса. В свою очередь, Хаос повышается при освобождении вражеских регионов, разрушении красных объектов \"Черной Руки\", расположенных на базах противника, убийстве солдат и выполнении любых действий, позволяющих продвинуться по сюжету.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">На каждом из следующих уровней появятся новые пилоты:</p><ul style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 1em; margin-left: 2em; padding: 0px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Четвертый.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Шестой.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Девятый.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Одиннадцатый.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Четырнадцатый.</li></ul><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Как увеличить скорость восстановление пилота (понизить кулдаун)</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">После использования определенного пилота вы не сможете его вызвать в течение ближайших пяти минут. Якобы он улетает на дозаправку. Чтобы сократить это время, нужно захватить заводы, доступные в игре, и обеспечить их безопасность. Большинство из них находятся на враждебных территория, поэтому нужно будет убивать солдат и освобождать регионы.</p>', 3, '04 фев. 2019 18:17'),
(13, 0, 'Как разблокировать новые резервные отряды в Just Cause 4', 2, 'Администратор', 'На протяжении всей игры вы будете уничтожать противников, захватывать новые территории для разблокировки заданий, получать доступ к различным транспортным средствам и оружию.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">На протяжении всей игры вы будете уничтожать противников, захватывать новые территории для разблокировки заданий, получать доступ к различным транспортным средствам и оружию. Чтобы сделать это, вам понадобятся резервные отряды сил Хаоса. На первых порах принцип разблокировки отрядов может показаться довольно запутанным и сложным.&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Just Cause 4</em>&nbsp;практически ничего об этом вам не рассказывает.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Увеличение уровня Хаос</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Чтобы повышать уровень Хаоса, вы должны уничтожать красные объекты, расположенные на вражеских базах, включая генераторы, сферы, цистерны, а также разрушать транспортную технику противника.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Если не хотите специально искать их, то откройте карту и отправляйтесь по маркерам в виде \"треугольников\". Они указывают на задания, которые нужно выполнить для того, чтобы получить возможность освободить регион. Обычно подобные миссии охватывают большие вражеские территории. Вам придется много воевать, что само по себе приведет к увеличению уровня Хаоса.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Получение отрядов при захвате региона</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Вместо того чтобы расходовать резервные отряды на захват той или иной области, вы можете оккупировать ее совершенно бесплатно либо и вовсе получить за это дополнительные отряды. Захватывайте области так, чтобы окружить одну из оккупированных территорий. Если вокруг нее будут только ваши регионы, то вы сможете автоматически освободить локацию, получив от двух до четырех бесплатных резервных отрядов.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Лучшая стратегия для накопления отрядов</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">На ранней стадии игры у вас будет минимальное количество резервных отрядов, хотя вокруг есть несколько регионов, доступных для освобождения. Чтобы не растратить отряды впустую, для начала отправляйтесь в южную часть карты и завершите сюжетную линию \"Повелитель бури\". Затем отправляйтесь в северную часть и выполните квестовую цепочку \"Громобаржа\". Наконец, двигайтесь в западные регионы, чтобы выполнить сюжетный квест \"Песчаная буря\".</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Завоевывая какие-либо регионы, старайтесь выбирать те, которые требуют от вас минимального количества отрядов. Не забывайте окружать территории противника, чтобы вместо растраты отрядов получать дополнительные совершенно бесплатно.</p>', 0, '04 фев. 2019 18:18'),
(14, 0, 'Как заполнять бланки в Beholder 2', 2, 'Администратор', 'Первое, с чем вы столкнетесь при прохождении Beholder 2 — заполнение бланков от заявителей, посетивших Министерство.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Первое, с чем вы столкнетесь при прохождении&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Beholder 2</em>&nbsp;— заполнение бланков от заявителей, посетивших Министерство. Один человек будет жаловаться на соседа, другой расскажет, что его брат разрабатывает какое-то странное устройство, а жена использует бюст Мудрого Вождя в качестве пресса при закваске капусты. Важно понимать, как работает система, что позволит заработать дополнительные монеты и очки авторитета.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Классификация обращений и выбор бланка:</p><ul style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 1em; margin-left: 2em; padding: 0px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Жалоба. Такие обращения поступают от людей, которые жалуются на совершение преступления, но не могу назвать конкретного имени виновника. Например, \"Кто-то украл мой велосипед\". Поскольку никто не знает, кто этот \"кто-то\", то обращение относится к жалобам.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Донос. Такие обращения нужно выбирать в том случае, если человек называет имя другого, совершившего неблагородных или противоречащий закону поступок. Например, \"Я здесь, чтобы сообщить вам, что Василий Иванов что-то скрывает у себя в подвале\". Таким образом, если человек называет имя, то выбирайте бланк доноса вместо жалобы.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Информация. Данный бланк подходит в тех случаях, когда человек предоставляет вам какую-либо информацию об определенных действиях.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Запрос. Эти обращения легко распознать, поскольку большинство людей с ними требуют от вас чего-то. Например, \"Я бы хотел узнать о…\".</li></ul><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Выбор отдела:</p><ul style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 1em; margin-left: 2em; padding: 0px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Порядок. Выбирайте отдел ко всем обращениям, связанным с законом и нарушением правопорядка, включая кражи, воровство, ограбления, убийства, преследования и т. д.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Патриотизм. Обращения, связанные со страной, Вождем и войной.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Социальная забота. Все, что связано с образованием, здравоохранением, жильем.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Труд. Различные обращения по трудовой занятости.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Культура и спорт. Бланк подойдет для обращений, связанных с театром, спортивными мероприятиями и т. д.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Наука и технология. Модернизация, изобретения, машиностроение и другие сферы.</li></ul><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Выбор офиса</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">С этим все намного проще. Каждый раз вам будут предоставлять на выбор шесть кабинетов. Справа находится список, указывающий на график работы кабинетов. Ищите предложенные в нем и сопоставьте с текущим днем недели (сверху над графиком). Если вдруг нет рабочего кабинета (случается тогда, когда вы обрабатываете слишком много бланков за день), то вы должны отказаться посетителю.</p>', 5, '04 фев. 2019 18:30'),
(15, 0, 'Несколько простых советов перед запуском Just Cause 4', 2, 'Администратор', 'Информация для тех, кто не осведомлен: Just Cause 4 разрабатывалась на новом движке, поэтому нет ничего удивительного в том, что геймплей существенно отличается от предыдущих частей серии. Таким образом, обучение понадобится как новичкам, так и опытным ве', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Информация для тех, кто не осведомлен:&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Just Cause 4</em>&nbsp;разрабатывалась на новом движке, поэтому нет ничего удивительного в том, что геймплей существенно отличается от предыдущих частей серии. Таким образом, обучение понадобится как новичкам, так и опытным ветеранам.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Возможно, вы уже знаете, что основное оружие в игре — это не автомат, пулемет или ракетница, а ваши крюк, вингсьют и парашют. Все эти предметы позволят забираться на высокие возвышенности, быстрее передвигаться по локациям и в целом упростят жизнь главного героя, максимально разнообразив ее. Например, во время бега можете воспользоваться крюком для захвата за отдаленную точку, после чего нажать на клавишу прыжка, чтобы раскрыть парашют и полететь куда-либо.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Падая с высоты, цепляйтесь крюком за землю</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Это еще одна механика, которая хороша знакома фанатам серии. Всякий раз, когда вы падаете на землю, можете воспользоваться крюком, чтобы ухватиться за асфальт, тем самым смягчив приземление и избежав урона. Данный прием можно использовать прямо во время боя для быстрого передвижения и уклонения от противников.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><a class=\"exposer\" href=\"https://cdn.shazoo.ru/306125_gM3IchSVss_03.jpg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; color: rgb(0, 0, 0);\"><img src=\"https://cdn.shazoo.ru/w800x800/306125_gM3IchSVss_03.jpg\" alt=\"\" width=\"800\" height=\"449\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></a></p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Перемещение при помощи вингсьюта</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Вингсьют — еще один инструмент, упрощающий передвижение Рико. Каждый раз, когда применяете крюк для захвата и находитесь в воздухе, можете нажать на клавишу E, чтобы переключиться на вингсьют и начать скольжение по воздуху. Этот метод может использоваться для доступа к множеству областей, к которым нельзя подобраться при помощи обычного крюка. Важно помнить, что приземление на вингсьюте может привести к серьезным повреждениям. По этой причине подберите место для посадки и зажмите нужную клавишу (кнопку), позволяющую уменьшить скорость.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><a class=\"exposer\" href=\"https://cdn.shazoo.ru/306126_JeqDRoj2nO_01.jpg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; color: rgb(0, 0, 0);\"><img src=\"https://cdn.shazoo.ru/w800x800/306126_JeqDRoj2nO_01.jpg\" alt=\"\" width=\"800\" height=\"450\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></a></p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Используйте ящики с оружием</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Обратите внимание на многочисленные ящики, которые разбросаны по игровым локациям и слегка поблескивают. Речь идет об оружейных боксах. Внутри них хранится оружие — три типа. Практически всегда среди трех предметов будет что-то более мощное, включая ракетницы и гранатометы. Используйте клавишу TAB, чтобы активировать ДР-сканирование и определить ближайший ящик с оружием.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Уровень Хаоса</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Функция, которая активно использовалась в Just Cause 2, возвращается в четвертой части серии. Повышение уровня Хаоса предоставит Рико множество преимуществ, открывая доступ к новым резервным отрядам для захвата областей и большему числу агентов. Деление уровней практически не отличается от системы, используемой во второй игре серии. Вы можете повысить Хаос, просто играя в Just Cause 4 и выполняя те действия, которые от вас требует игра.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Плавание</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Рико может не только плавать по воде, но и погружаться на глубину. Многие геймеры почему-то этого не замечают. Одновременно с тем у Рико не так велик запас кислорода. Более того, нет какой-либо шкалы, указывающей на него. Если задержитесь под водой, то, в конечном счете, начнете терять очки здоровья.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Играйте в свое удовольствие</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">В Just Cause 4 открыты практически все локации для посещения, поэтому вы можете выполнять задания на свое усмотрение. Если любите много воевать и уничтожать все, что движется — то игра создана для вас. Однако существуют и другие способы достижения целей. Вы можете убегать от противников, действовать скрытно, используя различные приемы движения. Сложностей в игре не так много: здоровье Рико восстанавливается достаточно быстро. Главное оперативно скрыться от врагов и переждать несколько секунд в укрытии.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Угоняйте вертолеты</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><a class=\"exposer\" href=\"https://cdn.shazoo.ru/306127_rXX5Rwftcz_02.jpg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; color: rgb(0, 0, 0);\"><img src=\"https://cdn.shazoo.ru/w800x800/306127_rXX5Rwftcz_02.jpg\" alt=\"\" width=\"800\" height=\"450\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></a></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Во многих сюжетных квестах вас будут атаковать вертолеты противника. Для их уничтожения понадобятся ракетницы, но не всегда есть возможность отыскать такое оружие под рукой. Однако существует творческий подход избавиться от назойливой вертушки. Вы можете воспользоваться своим крюком, чтобы притянуться к цели, а затем перехватить управление вертолетом. Если на базе противника имеются ЗРК, то сразу же покиньте вертушку. Летательное средство просто свалится вниз. Если зенитных орудий нет, то можете использовать вертолет для уничтожения своих противников. Можете даже цепляться крюком за снайперов, находящихся в салоне вертолета.</p><h2 style=\"-webkit-font-smoothing: antialiased; font-size: 1.666em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 1.3; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\">Разрушайте различные конструкции</h2><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Игра позволяет разрушать практически все, что вы видите. Вы можете уничтожать не только малые, но и крупные объекты (такие как огромные серебристо-красные сферы на базах \"Черной Руки\"). Иногда выстрела из ракетницы может быть недостаточно для подрыва объекта. Даже если закончились ракеты, возьмите в руки любое доступное оружие и расстреляйте конструкцию.</p>', 0, '04 фев. 2019 18:31');
INSERT INTO `articles` (`id_art`, `art_game_id`, `name_art`, `cat_art`, `author_art`, `prewiew_text`, `text_art`, `views_art`, `date_art`) VALUES
(16, 0, 'Как заработать более 10 000 XP за час в Red Dead Online', 2, 'Администратор', 'Читая название статьи, многие могли подумать, что сейчас мы расскажем вам об очередном баге или сбое в игре. На самом деле речь пойдет о легальном, законном и лучшем методе прокачки в Red Dead Online.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Читая название статьи, многие могли подумать, что сейчас мы расскажем вам об очередном баге или сбое в игре. На самом деле речь пойдет о легальном, законном и лучшем методе прокачки в&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Red Dead Online</em>. Единственный нюанс&nbsp;— понадобится еще один игрок, который и поможет заработать желаемые очки опыта.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">От вас потребуется добраться до финального чекпоинта сюжетной миссии из беты \"Убей их, всех и каждого\" (Kill Them, Each and Every One Of Them). Задание само по себе является хорошим источником очков опыта благодаря большому размеру и наличию босса, поджидающего геймеров в конце пути. Но если хотите заработать еще больше XP и сделать это быстро, то ознакомьтесь с трюком, описанным ниже.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Данный метод позволит прокачать персонажа до 50 уровня в мгновение ока. Как понимаете, продлиться такая \"лафа\" недолго, поэтому вы еще можете успеть выхватить свою часть пирога. Хоть способ и не основан на каком-то сбое в программном коде, но я не думаю, что Rockstar так и позволит игрокам настолько быстро прокачиваться до максимального уровня.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Чем больше игроков в группе, тем меньше очков опыта вы получите, поэтому в идеале нужно отправляться вдвоем с товарищем.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Требования:</p><ul style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 1em; margin-left: 2em; padding: 0px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Доступ к миссии \"Убей их, всех и каждого\".</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Вы уже можете повторить все предыдущие выполненные задания через раздел меню \"Прогресс\".</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Создайте отряд из двух человек. Можно пройти с тремя или четырьмя, но эффект ниже.</li></ul><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Как происходит фарм:</p><ol style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 1em; margin-left: 2em; padding: 0px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Создайте отряд и выберите миссию из меню \"Прогресс\". Когда она начнется, то немедленно покиньте лобби, или будете вынуждены играть со случайным геймером.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Когда покинете лобби, то появится желтый маркер, указывающий на миссию в Нью-Остине. Вместе с отрядом отправляйтесь к цели, чтобы запустить задание.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Когда окажетесь в области, то выберите пункт \"Начать миссию\" вместо создания матча.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Цель заключается в нескончаемом фарме убийств на первом чекпоинте. Вас интересуют очки опыта, получаемые от убийств, а не в конце миссии.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Зачищайте форт до тех пор, пока не окажетесь в дальней части с последними шестью-семью противниками. Позвольте себя убить и загрузите последний чекпоинт. Это позволит избежать сцены сражения с боссом.</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Чтобы получить максимальную отдачу в виде опыта, нужно использовать специальные боеприпасы Split-Point для револьвера. Выполняйте убийства из серии Execution Kills, чтобы за каждое получать свыше 30 очков опыта.</li></ol><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Не беспокойтесь о гибели персонажа. Погрузитесь в сражение, стреляйте из своего револьвера. Даже если погибнете, это ни на что не повлияет. Просто перезагрузитесь. Причина, по которой работает данный трюк, заключается в том, что у вас есть тяжелая броня, которая позволяет вам рашить противников и уничтожать всех вокруг. Вы будете получать по 50 специальных патронов каждый раз, когда перезагружаетесь после уничтожения команды.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Чем меньше игроков, тем больше убийств вы совершите для получения собственного опыта. Всего за 10 убийств при таком раскладе можно зарабатывать более 300 очков опыта. Такое количество вы обычно получаете в Red Dead Online за полное прохождение большого задания. И даже в таком случае это не всегда так. 30 убийств&nbsp;— практически 1000 очков опыта. Что может быть еще лучше?</p>', 1, '04 фев. 2019 18:32'),
(17, 0, 'Все убежища бандитов в Red Dead Online (фарм карт сокровищ)', 2, 'Администратор', 'Убежища бандитов в Red Dead Online позволяют не только заработать уйму очков опыта, выполняя миссии Free Roam, но и раздобыть более редкие и ценные предметы — карты сокровищ.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Убежища бандитов в&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Red Dead Online</em>&nbsp;позволяют не только заработать уйму очков опыта, выполняя миссии Free Roam, но и раздобыть более редкие и ценные предметы&nbsp;— карты сокровищ. Последние выпадают из лидеров банд, которые обычно прячутся в самом центре убежища.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Карты сокровищ работают не так, как в RDR 2. Они указывают на большую область, где спрятан клад. Вам придется искать его самостоятельно. Обычно сокровища спрятаны в ящике, а внутри лежат доллары и немного золота.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Чтобы упростить поиск сокровищ, используйте специальные режим, активирующийся одновременным нажатием L3 и R3. Ознакомьтесь с картой бандитских лагерей, найденных в игре на сегодняшний момент:</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://cdn.shazoo.ru/305417_43efL3WP4i_01.jpg\" alt=\"\" width=\"720\" height=\"469\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Убежища со временем респаунятся, поэтому вы можете передвигаться от одного к другому, уничтожать противников и тем самым фармить карты сокровищ.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">С востока до запада на карте выше расположены следующие убежища:</p><ul style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 1em; margin-left: 2em; padding: 0px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Willard’s Rest</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Mossy Flats</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Kamassa River</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Lakay</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">West Bayou</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Shady Belle</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Radley’s Pasture</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">The Loft</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Bacchus Station</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Six Point Cabin</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Colter</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Ewing Basin</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Grizzlies Mining</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Hanging Dog Ranch</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Cumberland Falls</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Fort Riggs</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Quaker’s Cove</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Bear Claw</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">San Luis River NE</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Pike’s Basin</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Twin Rocks</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Fort Mercer</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Solomon’s Folly</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Gaptooth Breach</li></ul>', 0, '04 фев. 2019 18:35'),
(18, 0, 'Как получить расширенную концовку в Darksiders 3', 2, 'Администратор', 'Пару дней назад состоялся официальный релиз ролевого экшена Darksiders 3. Несмотря на появившуюся в последнее время тенденцию добавлять в игры несколько концовок, в Darksiders 3 она одна.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Пару дней назад состоялся официальный релиз ролевого экшена&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Darksiders 3</em>. Несмотря на появившуюся в последнее время тенденцию добавлять в игры несколько концовок, в Darksiders 3 она одна. Тем не менее, есть один необычный способ приукрасить финальный видеоролик, добавив в него новые сцены и диалоги.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Для этого вам придется убить Абраксиса и с душой демона вернуться к Повелителю Пустот, после чего пощадить последнего. Сложность заключается в том, что оба персонажа являются дополнительными боссами игры, а Абраксиса вы и вовсе можете не обнаружить, если не будете исследовать все второстепенные локации. Кроме того, при встрече Абраксис предложит заключить сделку, и вместо себя убить Повелителя Пустот. Вы можете согласиться, но в таком случае забудьте о расширенной концовке и секретной ачивке.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Итак, Абраксиса можно встретить на локации \"Шрам\". Когда будете двигаться к огромному смерчу, терроризирующего пустошь за городом, то обратите внимание на выступ с большим монстром с левой стороны. Там есть воздушный поток, по которому в форме бури Ярость может взлететь вверх и добраться до недоступного уровня. Пройдите по коридору, войдите в лифт и поднимитесь в логово Абраксиса. В разговоре с демоном скажите, что пришли убить его, после чего победите в бою.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\"></p><div class=\"videoPlayer embed\" itemscope=\"\" itemtype=\"http://schema.org/VideoObject\" itemprop=\"video\" style=\"-webkit-font-smoothing: antialiased; margin: 16px 0px; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\"><iframe src=\"https://www.youtube.com/embed/S6vs7eS620o?rel=0&amp;wmode=transparent\" width=\"670\" height=\"378.53107344633\" allowfullscreen=\"\" frameborder=\"0\" sandbox=\"allow-scripts allow-popups allow-same-origin allow-presentation\" layout=\"responsive\" style=\"-webkit-font-smoothing: antialiased; border-width: initial; border-style: none; width: 670px; overflow: hidden;\"></iframe></div><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Заполучив душу Абраксиса, двигайтесь к любому постаменту и телепортируйтесь в покои Повелителя Пустот. Пообщайтесь с ним, а затем выберите опцию \"Пощадить\". Повелитель Пустот исчезнет, оставив на земле таинственный камень. Ярость подберет его. От камня не будет никакой пользы на всем протяжении игры, но во время финала вы увидите опциональные диалоги. В частности, будут очень удивлены представители Обугленного Совета и таинственный злодей, прячущийся в тени во время кат-сцены после титров.</p>', 0, '04 фев. 2019 18:36'),
(19, 0, 'Майкл Кондри возглавил новую студию 2K Games', 1, 'Администратор', '2K Games и Take-Two Interactive сообщили об открытии новой студии в Кремниевой долине Сан-Франциско. Главой назначен Майкл Кондри, бывший глава Sledgehammer Games (Call of Duty: WWII) и один из директоров Dead Space.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">2K Games и Take-Two Interactive сообщили об открытии новой студии в Кремниевой долине&nbsp;Сан-Франциско. Главой назначен Майкл Кондри, бывший глава Sledgehammer Games (<em style=\"-webkit-font-smoothing: antialiased;\">Call of Duty: WWII</em>) и один из директоров&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Dead Space</em>.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Студия получила временное название 2K Silicon Valley, на данный момент ей&nbsp;<a href=\"https://2k.com/2k-silicon-valley/\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">требуются</a>опытные специалисты широкого профиля без привязки к конкретным жанрам. Кондри и его команда получат творческую свободу и поддержку благодаря технической инфраструктуре 2K Games.</p><div class=\"reference clearfix\" style=\"-webkit-font-smoothing: antialiased; zoom: 1; margin-bottom: 16px; padding: 16px; border: 1px solid rgba(0, 0, 0, 0.1); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 4px; transition: all 0.3s ease 0s; position: relative; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><div class=\"reference-aside\" style=\"-webkit-font-smoothing: antialiased; float: left;\"><span style=\"color: rgb(255, 255, 255);\"><img width=\"150\" height=\"86\" src=\"https://cdn.shazoo.ru/c260x150/307098_iJL4I6QZPr_glen_schofield.jpg\" style=\"-webkit-font-smoothing: antialiased; border: 0px; vertical-align: bottom; max-width: 100%; height: auto;\"></span></div><div class=\"reference-content\" style=\"-webkit-font-smoothing: antialiased; margin-left: 166px;\"><h6 class=\"entryTitle\" style=\"-webkit-font-smoothing: antialiased; font-size: 1.0833em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-weight: 700; line-height: 1.3;\"><span style=\"color: rgb(255, 255, 255);\">Основатель Sledgehammer и создатель Dead Space покинул Activision</span></h6><div class=\"entrySummary\" style=\"-webkit-font-smoothing: antialiased; font-size: 0.875em;\"><span style=\"color: rgb(255, 255, 255);\">Девять лет назад создатель Dead Space Глен Шофилд покинул Vi...</span><a class=\"more\" href=\"https://shazoo.ru/2018/12/11/73629/osnovatel-sledgehammer-i-sozdatel-dead-space-pokinul-activision\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; display: block;\" target=\"_blank\">Далее</a></div></div><a class=\"overlayLink\" href=\"https://shazoo.ru/2018/12/11/73629/osnovatel-sledgehammer-i-sozdatel-dead-space-pokinul-activision\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; display: block; position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; z-index: 1;\"></a></div><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Глен Скофилд, который также работал над&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Dead Space</em>&nbsp;и покинул Sledgehammer Games вместе Майклом, пока не сообщил о своей дальнейшей карьере. Возможно, он присоединится к своему товарищу.</p>', 0, '04 фев. 2019 18:37'),
(20, 0, 'Разработчики Control показали прототип игры', 1, 'Администратор', 'Студия Remedy выпустила новое видео, посвященное мистическому экшену Control. В нем разработчики сравнили прототип игры с демо, которое привезли на E3 2018. ', '<section class=\"body\" itemprop=\"articleBody\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; width: 670px; overflow-wrap: break-word; font-size: 1.33333em; line-height: 1.6; position: relative; z-index: 1; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6;\">Студия Remedy выпустила новое видео, посвященное мистическому экшену&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Control</em>. В нем разработчики сравнили прототип игры с демо, которое привезли на E3 2018. Прогресс очевиден&nbsp;— вы только посмотрите, как локации игры наполнились деталями и стали выглядеть живее.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6;\"><em style=\"-webkit-font-smoothing: antialiased;\">Control</em>&nbsp;выйдет в этом году на PC, PS4 и Xbox One. Точную дату объявят позже.</p></section><p><span style=\"font-family: &quot;Open Sans&quot;, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 12px;\"></span></p><section class=\"media\" style=\"-webkit-font-smoothing: antialiased; display: block; margin-top: 24px; font-family: &quot;Open Sans&quot;, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 12px;\"><div class=\"videoPlayer embed\" itemscope=\"\" itemtype=\"http://schema.org/VideoObject\" itemprop=\"video\" style=\"-webkit-font-smoothing: antialiased; margin: 16px 0px;\"><iframe src=\"https://www.youtube.com/embed/g_LZKMTekuI?rel=0&amp;wmode=transparent\" width=\"670\" height=\"378.53107344633\" allowfullscreen=\"\" frameborder=\"0\" sandbox=\"allow-scripts allow-popups allow-same-origin allow-presentation\" layout=\"responsive\" style=\"-webkit-font-smoothing: antialiased; border-width: initial; border-style: none; width: 670px; overflow: hidden;\"></iframe></div></section>', 0, '04 фев. 2019 18:40'),
(21, 0, 'Capcom отчиталась о рекордной прибыли в свежем финансовом отчете', 1, 'Администратор', 'Издательство Capcom опубликовало свежий финансовый отчет за последние три квартала 2018 года. За данный период компания добилась рекордной выручки благодаря Monster Hunter: World, Mega Man 11 и Street Fighter 30th Anniversary Collection.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Издательство&nbsp;Capcom&nbsp;<a href=\"https://www.gamesindustry.biz/articles/2019-02-04-capcom-posts-record-profits-in-latest-financials\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\" target=\"_blank\">опубликовало</a>&nbsp;свежий финансовый отчет за последние три квартала 2018 года. За данный период компания добилась рекордной выручки благодаря Monster Hunter: World, Mega Man 11 и Street Fighter 30th Anniversary Collection.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Операционная прибыль выросла на 92% в годовом исчислении и составила 122.4 миллиона долларов. Чистые доходы Capcom составили 560 миллионов долларов, что на 28.3% больше, чем за аналогичный период 2017 года. Выручка от цифровых продаж составила 78% от общей суммы — 435.7 миллионов.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">По прогнозам Capcom, в текущем финансовым году компания поставит новый рекорд. Издательство рассчитывает на продажи в 870 миллионов долларов. Основной вклад должны внести Devil May Cry 5 и Resident Evil 2.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Всего Capcom планирует реализовать 53 миллиона копий видеоигр до конца текущего финансового года.</p>', 3, '04 фев. 2019 18:41'),
(22, 0, 'Сравнение демо-версии Anthem с презентацией игры на Е3 2017', 1, 'Администратор', 'Это было лишь вопросом времени. На канале TheRedTieGuy был опубликован ролик, в котором сравниваются демо-версия Anthem и презентация игры с Е3 2017. При этом во время анонса BioWare говорила, что уровень графики порезан не будет.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6;\">Это было лишь вопросом времени. На канале&nbsp;TheRedTieGuy был опубликован ролик, в котором сравниваются демо-версия&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Anthem</em>&nbsp;и презентация игры с Е3 2017. При этом во время анонса&nbsp;BioWare говорила, что уровень графики порезан не будет.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6;\"></p><div class=\"videoPlayer embed\" itemscope=\"\" itemtype=\"http://schema.org/VideoObject\" itemprop=\"video\" style=\"-webkit-font-smoothing: antialiased; margin: 16px 0px;\"><iframe src=\"https://www.youtube.com/embed/CPikVHsQTu8?rel=0&amp;wmode=transparent\" width=\"670\" height=\"378.53107344633\" allowfullscreen=\"\" frameborder=\"0\" sandbox=\"allow-scripts allow-popups allow-same-origin allow-presentation\" layout=\"responsive\" style=\"-webkit-font-smoothing: antialiased; border-width: initial; border-style: none; width: 670px; overflow: hidden;\"></iframe></div><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6;\">Больше всего в глаза бросается измененная стартовая локация перед самым первым прыжком, а также погружение в воду. Также можно заметить, что звуки в версии Е3 2017 звучат \"сочнее\", чем в демо. Однако стоит отметить, что&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Anthem&nbsp;</em>все еще выглядит отлично, а местные пейзажи располагают к тому, чтобы изучать их с высоты птичьего полета.</p><div class=\"reference clearfix\" style=\"-webkit-font-smoothing: antialiased; zoom: 1; margin-bottom: 16px; padding: 16px; border: 1px solid rgba(0, 0, 0, 0.1); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border-radius: 4px; transition: all 0.3s ease 0s; position: relative;\"><div class=\"reference-aside\" style=\"-webkit-font-smoothing: antialiased; float: left; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img width=\"150\" height=\"86\" src=\"https://cdn.shazoo.ru/c260x150/316363_uNO1Kc51tb_anthem_reveal_screenshot_1jpg.jpg\" style=\"-webkit-font-smoothing: antialiased; border: 0px; vertical-align: bottom; max-width: 100%; height: auto;\"></div><div class=\"reference-content\" style=\"-webkit-font-smoothing: antialiased; margin-left: 166px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><h6 class=\"entryTitle\" style=\"-webkit-font-smoothing: antialiased; font-size: 1.0833em; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-weight: 700; line-height: 1.3;\"><span style=\"color: rgb(255, 255, 255);\">Скрытый потенциал: Впечатления от демо Anthem</span></h6><div class=\"entrySummary\" style=\"-webkit-font-smoothing: antialiased; font-size: 0.875em;\"><span style=\"color: rgb(255, 255, 255);\">Демо-версия Anthem должна была показать потенциальным покупа...</span><a class=\"more\" href=\"https://shazoo.ru/2019/01/28/75300/skrytyj-potencial-vpechatleniya-ot-demo-anthem\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; display: block;\">Далее</a><div><br></div></div></div></div>', 5, '04 фев. 2019 18:42'),
(23, 0, 'Обсуждение: Какие игры убедили вас, что вы полюбите их, но разочаровали', 1, 'Администратор', 'Игровая индустрия ежегодно рождает сотни и тысячи новых тайтлов. Из всей этой горы обязательно будут игры, которые вы полюбите и запомните на годы вперед. ', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Игровая индустрия ежегодно рождает сотни и тысячи новых тайтлов. Из всей этой горы обязательно будут игры, которые вы полюбите и запомните на годы вперед. Неизбежны и разочарования — слишком рано выпустили, получилось просто скучно или геймплей вышел недостаточно динамичным. Конечно же, среди всей этой толпы обязательно будет несколько игр, которые своими роликами, скриншотами и рассказами друзей вызывали у вас ощущение, что уж эти тайтлы вы точно полюбите.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Мне лично вспоминается Sea of Thieves в качестве наглядного примера.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Активная демонстрация геймплея, красивая графика и приятный стиль почти сразу вызвали у меня умиление. В игру хотелось сыграть как можно быстрее... однако тянулись месяцы и релиз состоялся спустя год с лишним от запланированной даты. Однако в том виде Sea of Thieves получилась откровенным разочарованием.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">При всем желании полюбить игру после того, что нам показывали в роликах и геймплее, Sea of Thieves не смогла реализовать свой потенциал. Это вовсе не значит, что игра умерла — под конец 2018 года ее даже активно стримили, но неприятный осадок остался.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Какие игры создали у вас впечатление, что вы полюбите их, но не оправдали надежд?</p>', 12, '04 фев. 2019 18:43'),
(24, 0, 'Прохождение кампании Crackdown 3 займет более 15 часов', 1, 'Администратор', 'Креативный директор Microsoft Джозеф Стейтен в одном из интервью заявил, на прохождение одиночной кампании Crackdown 3 игроки потратят более 15 часов. Он также немного рассказал о причине введения синглплеера в игру. ', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Креативный директор Microsoft Джозеф Стейтен в одном из интервью&nbsp;<a href=\"https://venturebeat.com/2019/02/01/crackdown-3-creative-director-interview-how-microsofts-cloud-makes-the-wrecking-zone-so-destructible/\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">заявил</a>, на прохождение одиночной кампании&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Crackdown 3</em>&nbsp;игроки потратят более 15 часов. Он также немного рассказал о причине введения синглплеера в игру.&nbsp;</p><blockquote style=\"-webkit-font-smoothing: antialiased; margin-top: 20px; margin-bottom: 20px; padding: 8px 0px 8px 16px; border-left: 3px solid rgb(61, 138, 193); font-size: 18px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.4;\">Это, безусловно, научит вас играть, обучив быстрой реакции для соревновательного мультиплеера...</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.4;\">У нас классная кампания на 15+ часов. Мы хотим убедиться, что, когда миллионы людей будут \"прыгать\" в игру в&nbsp;Game Pass, каждый найдет себе формат по душе — сетевой или одиночный.</p></blockquote><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Исходя из прошлых геймплейных видео, синглплеер&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Crackdown 3&nbsp;</em><a href=\"https://shazoo.ru/2018/12/21/74015/gejmplej-odinochnoj-kampanii-crackdown-3\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">представляет</a>&nbsp;собой открытый мир, наполненный различными активностями. Во время выполнения заданий игроки будут подрывать влияние противника в городе и освобождать захваченные районы, попутно сталкиваясь с боссами.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><em style=\"-webkit-font-smoothing: antialiased;\">Crackdown 3</em>&nbsp;выйдет 15 февраля на Xbox One и PC.</p>', 2, '04 фев. 2019 18:45'),
(25, 0, 'Мод Resident Evil 2 с видом от первого лица уже в разработке', 1, 'Администратор', 'Если после Resident Evil 7 вы мечтаете о виде от первого лица в ремейке Resident Evil 2, то в скором времени ваши надежды оправдаются.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Если после Resident Evil 7 вы мечтаете о виде от первого лица в ремейке&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Resident Evil 2</em>, то в скором времени ваши надежды оправдаются.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Группа энтузиастов разрабатывает мод, позволяющий окунуться в мрачную атмосферу Раккун-Сити от лица самих персонажей. Рабочие версии мода&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Resident Evil 2&nbsp;</em>можно оценить в видео ниже.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\"></p><div class=\"videoPlayer embed\" itemscope=\"\" itemtype=\"http://schema.org/VideoObject\" itemprop=\"video\" style=\"-webkit-font-smoothing: antialiased; margin: 16px 0px; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\"><iframe src=\"https://www.youtube.com/embed/CQLX-x6RWBs?rel=0&amp;wmode=transparent\" width=\"670\" height=\"378.53107344633\" allowfullscreen=\"\" frameborder=\"0\" sandbox=\"allow-scripts allow-popups allow-same-origin allow-presentation\" layout=\"responsive\" style=\"-webkit-font-smoothing: antialiased; border-width: initial; border-style: none; width: 670px; overflow: hidden;\"></iframe></div><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Если решите ставить его, то учтите, что ряд сцен и моментов могут быть еще страшнее, чем в оригинале. Также возможны некоторые баги и проблемы с ориентированием.&nbsp;</p>', 2, '04 фев. 2019 18:49'),
(26, 0, 'Deep Silver: Metro не перестанет выходить на PC', 1, 'Администратор', 'В твиттере Metro Exodus опубликовано официальное заявление издателя на тему исхода игры из Steam в Epic Games Store.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">В твиттере&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Metro Exodus</em>&nbsp;опубликовано официальное&nbsp;<a href=\"https://twitter.com/MetroVideoGame/status/1092115385061646336\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">заявление</a>&nbsp;издателя на тему исхода игры из Steam в Epic Games Store. Таким образом Deep Silver решила защитить разработчиков от нападок пользователей. Решение принимал издатель Koch Media, а не студия 4A Games.</p><blockquote style=\"-webkit-font-smoothing: antialiased; margin-top: 20px; margin-bottom: 20px; padding: 8px 0px 8px 16px; border-left: 3px solid rgb(61, 138, 193); font-size: 18px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.4;\">Недавнее решение о переносе&nbsp;<em style=\"-webkit-font-smoothing: antialiased;\">Metro Exodus</em>&nbsp;из Steam в Epic Games Store было принято Koch Media/Deep Silver. Комментарии,&nbsp;<a href=\"https://shazoo.ru/2019/02/02/75534/budushee-serii-metro-na-pc-zavisit-ot-prodazh-metro-exodus\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">оставленные разработчиком</a>&nbsp;4A Games, не отражают позицию Deep Silver или 4A Games о будущем франшизы.</p></blockquote><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Издатель также заверил, что открыт для развития франшизы, в том числе и на PC. Никто не планирует ограничивать игру только на консолях.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><em style=\"-webkit-font-smoothing: antialiased;\">Metro Exodus</em>&nbsp;выйдет 15 февраля на PS4, PC и Xbox One.</p>', 5, '04 фев. 2019 18:50'),
(27, 0, 'Анбоксинг видеокарты Radeon VII', 3, 'Администратор', 'Официальный релиз Radeon VII состоится 7 февраля, однако некоторые издания уже начали получать эту ограниченную флагманскую серию AMD для обзоров. К сожалению, нам GPU не предоставили (впрочем, как и Nvidia c RTX), однако вы можете посмотреть на распаковк', '<section class=\"body\" itemprop=\"articleBody\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; width: 670px; overflow-wrap: break-word; font-size: 1.33333em; line-height: 1.6; position: relative; z-index: 1; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6;\">Официальный релиз Radeon VII состоится 7 февраля, однако некоторые издания уже начали получать эту ограниченную флагманскую серию AMD для обзоров. К сожалению, нам GPU не предоставили (впрочем, как и Nvidia c RTX), однако вы можете посмотреть на распаковку Radeon VII от PCGamesN на видео ниже.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6;\"><img src=\"https://cdn.shazoo.ru/318038_c1gKXo5hYl_screen_shot_2019_02_04_at_51022_pm.png\" alt=\"\" width=\"667\" height=\"345\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6;\">Напомню, что Radeon VII основана на чипе Vega 20, включает 16 Гб HBM и будет продаваться только в версии самой AMD. С учетом масштаба выпуска и цены в $700 данная видеокарта не будет массовым продуктом. Скорее всего ее AMD выпускает для разогрева 7нм производства, на котором будут печатать чипы Navi к запуску нового поколения видеокарт этим летом.&nbsp;</p></section><p><span style=\"font-family: &quot;Open Sans&quot;, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 12px;\"></span></p><section class=\"media\" style=\"-webkit-font-smoothing: antialiased; display: block; margin-top: 24px; font-family: &quot;Open Sans&quot;, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 12px;\"><div class=\"videoPlayer embed\" itemscope=\"\" itemtype=\"http://schema.org/VideoObject\" itemprop=\"video\" style=\"-webkit-font-smoothing: antialiased; margin: 16px 0px;\"><iframe src=\"https://www.youtube.com/embed/S6KIq8HGWX4?rel=0&amp;wmode=transparent\" width=\"670\" height=\"378.53107344633\" allowfullscreen=\"\" frameborder=\"0\" sandbox=\"allow-scripts allow-popups allow-same-origin allow-presentation\" layout=\"responsive\" style=\"-webkit-font-smoothing: antialiased; border-width: initial; border-style: none; width: 670px; overflow: hidden;\"></iframe></div><div class=\"gallery embed clearfix styleThumbs\" style=\"-webkit-font-smoothing: antialiased; zoom: 1; margin: 16px 0px;\"><ul class=\"galleryItems\" style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px;\"><li style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; -webkit-font-smoothing: antialiased; display: block; width: 75px; height: 75px; margin: 0px 3px 7px; float: left; position: relative; list-style: none;\"><a class=\"exposer\" href=\"https://cdn.shazoo.ru/318040_6yWZkiQ3GK_amd_radeon_vii_unboxing_kit_900x.jpg\" data-collection=\"12204\" data-title=\"\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; color: rgb(0, 0, 0);\"><img src=\"https://cdn.shazoo.ru/c75x75/318040_6yWZkiQ3GK_amd_radeon_vii_unboxing_kit_900x.jpg\" style=\"-webkit-font-smoothing: antialiased; border: 0px; vertical-align: bottom; max-width: 100%;\"></a></li><li style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; -webkit-font-smoothing: antialiased; display: block; width: 75px; height: 75px; margin: 0px 3px 7px; float: left; position: relative; list-style: none;\"><a class=\"exposer\" href=\"https://cdn.shazoo.ru/318041_oidRXsk7IC_amd_vega_20_vs_vega_10_900x506.jpg\" data-collection=\"12204\" data-title=\"\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; color: rgb(0, 0, 0);\"><img src=\"https://cdn.shazoo.ru/c75x75/318041_oidRXsk7IC_amd_vega_20_vs_vega_10_900x506.jpg\" style=\"-webkit-font-smoothing: antialiased; border: 0px; vertical-align: bottom; max-width: 100%;\"></a></li><li style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; -webkit-font-smoothing: antialiased; display: block; width: 75px; height: 75px; margin: 0px 3px 7px; float: left; position: relative; list-style: none;\"><a class=\"exposer\" href=\"https://cdn.shazoo.ru/318042_z4Iai6M3P0_amd_radeon_vii_vs_nvidia_rtx_208.jpg\" data-collection=\"12204\" data-title=\"\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; color: rgb(0, 0, 0);\"><img src=\"https://cdn.shazoo.ru/c75x75/318042_z4Iai6M3P0_amd_radeon_vii_vs_nvidia_rtx_208.jpg\" style=\"-webkit-font-smoothing: antialiased; border: 0px; vertical-align: bottom; max-width: 100%;\"></a></li></ul></div></section>', 0, '04 фев. 2019 18:52');
INSERT INTO `articles` (`id_art`, `art_game_id`, `name_art`, `cat_art`, `author_art`, `prewiew_text`, `text_art`, `views_art`, `date_art`) VALUES
(28, 0, 'Приложение Asus по разгону видеокарт лепит в игры рекламу Nvidia RTX', 3, 'Администратор', 'Вы думали реклама в играх куда-то пропала? Скорее ее размещение стало хитрее и менее очевидным... впрочем, бывают яркие исключения — например реклама Nvidia RTX, появляющаяся в играх при использовании софта Asus для разгона видеокарты.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Вы думали реклама в играх куда-то пропала? Скорее ее размещение стало хитрее и менее очевидным... впрочем, бывают яркие исключения — например реклама Nvidia RTX, появляющаяся в играх при использовании софта Asus для разгона видеокарты.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Выглядит это совершенно бесстыдно и абсурдно, даже если отключить опцию можно без труда. Естественно, большинство пользователей приложения не будет заниматься разгоном во время типичного вечера за геймингом — реклама вылезает на оверлее программы, однако сам факт ее наличия уже вызывал недовольство со стороны некоторых геймеров.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\"><a class=\"exposer\" href=\"https://cdn.shazoo.ru/317987_NU3HROgXMk_4r2y6uoo8z9u3l4m.jpg\" style=\"-webkit-font-smoothing: antialiased; color: rgb(40, 100, 154); outline: 0px; transition-timing-function: ease; transition-property: color;\"><img src=\"https://cdn.shazoo.ru/w800x800/317987_NU3HROgXMk_4r2y6uoo8z9u3l4m.jpg\" alt=\"\" width=\"800\" height=\"450\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></a></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Учитывая, что приложение уже работает на карте Asus, демонстрация рекламы видеокарты выглядит не к месту. Разве что заинтересовать тех, кто недоволен результатами своего разгона. Но даже в этом случае разбирающийся в железе геймер не требует напоминания о том, что доступно на рынке.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; color: rgb(85, 85, 85); font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(243, 245, 246);\">Если вы пользуетесь приложением Asus, то отключить рекламу можно одновременно нажав Ctrl+Alt+F.</p>', 0, '04 фев. 2019 18:53'),
(29, 0, 'Ютубер собрал рабочий PS4-контроллер для одной руки', 3, 'Администратор', 'Ютубер Бен Xeк опубликовал видео, в котором продемонстрировал контроллер собственной сборки для PS4. Отличительной особенностью этой версии стала компактность — им можно управлять одной руки.', '<section class=\"body\" itemprop=\"articleBody\" style=\"-webkit-font-smoothing: antialiased; display: inline-block; width: 670px; overflow-wrap: break-word; font-size: 1.33333em; line-height: 1.6; position: relative; z-index: 1; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6;\">Ютубер Бен Xeк опубликовал видео, в котором продемонстрировал контроллер собственной сборки для PS4. Отличительной особенностью этой версии стала компактность — им можно управлять одной руки.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6;\">Энтузиаст напечатал корпус контроллера на 3D-принтере, а за основу взял некоторые компоненты геймпада PS4 Mini.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6;\"></p><div class=\"videoPlayer embed\" itemscope=\"\" itemtype=\"http://schema.org/VideoObject\" itemprop=\"video\" style=\"-webkit-font-smoothing: antialiased; margin: 16px 0px;\"><iframe src=\"https://www.youtube.com/embed/OTGtbLhldPc?rel=0&amp;wmode=transparent\" width=\"670\" height=\"378.53107344633\" allowfullscreen=\"\" frameborder=\"0\" sandbox=\"allow-scripts allow-popups allow-same-origin allow-presentation\" layout=\"responsive\" style=\"-webkit-font-smoothing: antialiased; border-width: initial; border-style: none; width: 670px; overflow: hidden;\"></iframe></div><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6;\">В конце ролике Хек показал рабочую версию, которая напоминает стационарные джойстики для авиасимуляторов. Все кнопки находятся в диапазоне досягаемости пальцев — кроме одного аналогового стика, расположенного в нижней части корпуса. Ютубер управлял им, оперев устройство на ногу.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6;\">Нечто подобное Хек уже пытался сделать с геймпадом для Xbox One, но тогда он просто перенес кнопки на одну сторону контроллера.</p></section><p><span style=\"font-family: &quot;Open Sans&quot;, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 12px;\"></span></p><section class=\"media\" style=\"-webkit-font-smoothing: antialiased; display: block; margin-top: 24px; font-family: &quot;Open Sans&quot;, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 12px;\"><div class=\"videoPlayer embed\" itemscope=\"\" itemtype=\"http://schema.org/VideoObject\" itemprop=\"video\" style=\"-webkit-font-smoothing: antialiased; margin: 16px 0px;\"><iframe src=\"https://www.youtube.com/embed/vNvjdVJFW9A?rel=0&amp;wmode=transparent\" width=\"670\" height=\"378.53107344633\" allowfullscreen=\"\" frameborder=\"0\" sandbox=\"allow-scripts allow-popups allow-same-origin allow-presentation\" layout=\"responsive\" style=\"-webkit-font-smoothing: antialiased; border-width: initial; border-style: none; width: 670px; overflow: hidden;\"></iframe></div></section>', 1, '04 фев. 2019 18:54'),
(30, 0, 'Alienware: Не ждите от графики Intel Xe производительности уровня AMD и Nvidia', 3, 'Администратор', 'Со-основатель и вице-президент Alienware Фрэнк Азор позитивно относится к тому, что на рынке видеокарт появится третий игрок в лице Intel.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Со-основатель и вице-президент&nbsp;Alienware Фрэнк Азор позитивно относится к тому, что на рынке видеокарт появится третий игрок в лице Intel. Однако в разговоре на CES 2019 в январе он озвучил мысли, которые были в головах у многих — не стоит ждать, что с первого же раза новичок сможет конкурировать с AMD и Nvidia.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Релиз графики Intel Xe запланирован на 2020 год — это будет первая дискретная видеокарта компании. Несмотря на огромные финансовые и технические ресурсы, Intel только начинает заниматься подобной графикой, в то же время Nvidia и AMD (ATI) выпускает графику многие годы. Также необходимо помнить, что железо это еще не все, Intel предстоит написать драйвер и другой софт, необходимый для корректной и эффективной работы видеокарты. Начиная с нуля, Intel может получить преимущество в фокусе на новой разработке, но это едва ли способно заменить столь обширный опыт.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Азор рассказал в интервью&nbsp;<a href=\"https://www.indiatimes.com/technology/news/alienware-co-founder-frank-azor-on-women-in-gaming-secret-of-alienware-s-legendary-success-361139.html\" rel=\"noopener\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">India Times</a>:</p><blockquote style=\"-webkit-font-smoothing: antialiased; margin-top: 20px; margin-bottom: 20px; padding: 8px 0px 8px 16px; border-left: 3px solid rgb(61, 138, 193); font-size: 18px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.4;\">Попытка превзойти Nvidia и AMD в игровой сфере — это гигантская задача. Я не ожидаю, что это произойдет немедленно с GPU Intel. Мне кажется, что Intel предложит новый продукт, который просто займет свое место на рынке.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.4;\">Я не думаю, что они смогут превзойти RTX 2080 Ti. Если у вас такие ожидания, то вас ждет разочарование.&nbsp;</p></blockquote><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Вероятнее всего, Intel попробует свои первые силы в области среднего ценового диапазона, где самые большие продажи. Компании необходимо лишь придумать и выпустить видеокарту с адекватной ценой и производительностью.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Легким этот путь не будет.</p>', 0, '04 фев. 2019 18:55'),
(31, 0, 'Sony совместно с Seagate представила жесткий диск для PS4', 3, 'Администратор', 'Sony сообщила о сотрудничестве с Seagate и представила игровой внешний диск для PS4 на 2 ТБ. По словам компании, диск оптимизирован под любую версию консоли и готов к работе \"из коробки\" без необходимости проводить какие-либо настройки.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Sony сообщила о сотрудничестве с Seagate и&nbsp;<a href=\"https://www.dualshockers.com/playstation-seagate-hard-drive/\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">представила</a>&nbsp;игровой внешний диск для PS4 на 2 ТБ. По словам компании, диск оптимизирован под любую версию консоли и готов к работе \"из коробки\" без необходимости проводить какие-либо настройки.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">По словам Sony, на диск емкостью 2 ТБ влезет порядка 50 игр, если учитывать, что каждый тайтл весит 39 ГБ.&nbsp;Стоимость внешнего жесткого диска для PS4 составит 90 долларов. В продажу он поступит на следующей неделе.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">О подобном сотрудничестве несколько лет назад сообщала Microsoft. Тогда компания совместно с Seagate выпустила Game Drive специально под Xbox 360 и Xbox One на 2 или 4 ТБ.</p>', 0, '04 фев. 2019 18:55'),
(32, 0, 'Продажи линейки видеокарт Nvidia RTX не оправдали ожидания', 3, 'Администратор', 'Nvidia обновила свои финансовые прогнозы на четвертый квартал 2019 финансового года. Компания призналась, что продажи новой линейки видеокарт RTX Turing ниже ожидаемого.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Nvidia&nbsp;<a href=\"https://nvidianews.nvidia.com/news/nvidia-updates-financial-guidance-for-fourth-quarter-of-fiscal-year-2019\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\" target=\"_blank\">обновила</a>&nbsp;свои финансовые прогнозы на четвертый квартал 2019 финансового года. Компания призналась, что продажи новой линейки видеокарт&nbsp;RTX Turing ниже ожидаемого.&nbsp;По мнению Nvidia, в этом отчасти виноват китайский рынок, который переживает проблемы.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Также в компании посчитали, что пользователи просто решили дождаться снижения цен или появления на рынке большего числа игр с поддержкой трассировки лучей. Это объясняет, почему потенциальные покупатели решили отказаться от новинок Nvidia.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Кроме того компания отметила ряд проблем с дата-центрами. В этой области ряд сделок не был закрыт в декабре, так как клиенты стали относиться осторожно с заказами. И это не считая той головной боли, которую представляют непроданные видеокарты среднего диапазона, выпущенные в свете крипто-лихорадки.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><img src=\"https://cdn.shazoo.ru/316565_yJHkaRdTbX_screen_shot_2019_01_29_at_93633_am.png\" alt=\"\" width=\"649\" height=\"386\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Поставленная цель в 2.7 миллиарда долларов была снижена до $2.2 миллиардов — около 19% снижения. Акционеры компании отнеслись к снижению результатов резко негативно, из-за чего акции Nvidia подешевели на 15%.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Полный финансовый отчет будет представлен 14 февраля.</p>', 0, '04 фев. 2019 18:56'),
(33, 0, 'Intel поддерживает вывод трассировки лучей в мейнстрим', 3, 'Администратор', 'Вице-президентов Intel Роджер Чендлер напомнил, что компания очень заинтересована в технологии трассировки лучей.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Вице-президентов Intel&nbsp;Роджер Чендлер напомнил, что компания очень заинтересована в технологии трассировки лучей. Несмотря на то, что реализация в играх пока значительно ограничена даже на топовых RTX-картах Nvidia, Intel поддерживает идею, что в конечном счете трассировка лучей станет графическим стандартом и выйдет в мейнстрим.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Более десятилетия назад на форуме разработчиков Intel представила трассировку лучей в реальном времени на примере Quake Wars, однако отсутствие специализированных видеокарт стало ограничением для развития области. В прошлом году Nvidia начала толкать индустрию в направлении принятия трассировки, так что даже AMD начала принимать меры и экспериментировать с просчетом трассировки на своем железе.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Intel решила воспользоваться своим положением и собрала инженеров со всего мира, чтобы те работали над новым графическим продуктом. Деталей будущего GPU компании пока нет, но очевидно, что он сможет осуществлять поддержку трассировки лучей в том или ином виде.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Помимо этого Intel рассчитывает использовать технологии ИИ для различных целей, в том числе и игровых. В частности, это касается повышения правдоподобности NPC.&nbsp;&nbsp;</p>', 0, '04 фев. 2019 18:57'),
(34, 0, 'Тысячи GPU Nvidia могли быть уничтожены на фабрике TSMC', 3, 'Администратор', 'На одной из фабрик TSMC по производству чипов произошел инцидент, в результате которого могли быть повреждены тысячи 16нм и 12нм пластин — тех самых, из которых нарезают различные процессоры. Все это может крайне негативно сказаться на поставках видеокарт', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">На одной из фабрик TSMC по производству чипов произошел инцидент, в результате которого могли быть повреждены тысячи 16нм и 12нм пластин — тех самых, из которых нарезают различные процессоры. Все это может крайне негативно сказаться на поставках видеокарт Nvidia.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Проблема появилась из-за химического вещества, используемого в производстве — чистота оказалась ниже требуемой, что привело к \"загрязнению\" пластин, делая их бесполезными.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Это не первый случай, когда TSMC сталкивается с проблемами на производстве. В прошлом году во время установки нового инструмента сразу несколько фабрик были заражены вирусом, что привело к остановкам производства и уничтожению пластин. В прошлом году остановка производства стоила TSMC около $85 миллионов, однако урон от нового инцидента пока не определен.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(0, 0, 0);\"><a href=\"https://www.expreview.com/66620.html\" rel=\"noopener\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">Expreview</a>&nbsp;сообщил, что загрязнение пластин произошло только на Фабрике 14 в городе Нанкин и масштабного распространения не наблюдается. Так как отследить некачественные материалы просто, TSMC могла без труда ограничить его поставки и использование после выявления инцидента.&nbsp;</span></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">В случае, если объем загрязнения будет высоким, Nvidia может объявить о значительных задержках в поставках GPU, что приведет к взлету цен на них среди ритейлеров.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">В отличие от Nvidia чипы Radeon уже переходят на новый 7нм техпроцесс и первой картой станет Radeon VII.&nbsp;</p>', 0, '04 фев. 2019 19:06'),
(35, 0, 'AMD улучшит однопоточную производительность для игр в Ryzen 3000', 3, 'Администратор', 'Технический директор AMD Марк Пейпермастер в интервью изданию TheStreet поделился подробностями третьего поколения процессоров Ryzen.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Технический директор AMD&nbsp;Марк Пейпермастер в интервью&nbsp;изданию&nbsp;<a href=\"https://www.thestreet.com/investing/amd-cto-discusses-upcoming-products-14833554\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">TheStreet</a>&nbsp;поделился подробностями&nbsp;третьего поколения процессоров&nbsp;Ryzen. В частности, он рассказал, что компания собирается улучшить игровую и однопоточную производительность, но сделает это не в ущерб многопоточным вычислениям.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Процессоры Ryzen первого и второго поколения для PC выигрывали у конкурента в лице Intel благодаря многопоточным нагрузкам на чип. Однако&nbsp;Intel сохраняла лидерство в однопоточных нагрузках, что положительно сказывалось на результатах в видеоиграх. По словам Пейпермастера, AMD обеспечит \"впечатляющие успехи\" в данной области, сохранив при этом преимущество в многопоточном вычислении.</p><blockquote style=\"-webkit-font-smoothing: antialiased; margin-top: 20px; margin-bottom: 20px; padding: 8px 0px 8px 16px; border-left: 3px solid rgb(61, 138, 193); font-size: 18px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.4;\">То, что вы увидете вместе с нашем третьим поколением Ryzen? это просто выдающаяся игровая производительность.</p></blockquote><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Что касается перехода на 7-нм техпроцесс, то его получат сначала топовые решения семейства&nbsp;Ryzen Threadripper. Мобильные чипы для ноутбуков стоит ожидать в конце 2019 года или в начале 2020. Однако технический директор отметил, что это лишь его предположение.</p>', 0, '04 фев. 2019 19:07'),
(36, 0, 'Глава Nvidia уверен, что стриминг игр не убьет рынок железа', 3, 'Администратор', 'В разговоре с прессой глава Nvidia Дженсен Хуанг сообщил, что он не видит стриминг игр в качестве истиной замены физическому PC. Даже несмотря на популяризацию сервисов, они никогда не смогут быть на уровне реального железа.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">В разговоре с прессой глава Nvidia Дженсен Хуанг сообщил, что он не видит стриминг игр в качестве истиной замены физическому PC. Даже несмотря на популяризацию сервисов, они никогда не смогут быть на уровне реального железа.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Nvidia сама занимается разработками в области стриминга, и ее облачный сервис GeForce Now включает более 400 тайтлов для стриминга. Другими словами, компания понимает ценность каждой стороны.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Несмотря на развитие стриминга и появление новых сервисов от всех крупнейших компаний, Дженсен не убежден, что для рынка железа есть угроза.</p><blockquote style=\"-webkit-font-smoothing: antialiased; margin-top: 20px; margin-bottom: 20px; padding: 8px 0px 8px 16px; border-left: 3px solid rgb(61, 138, 193); font-size: 18px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.4;\">Если ваш вопрос в том, когда стриминг будет также хорош, как и PC, то ответ — никогда.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.4;\">Причина в том, что существует одна проблема, решения которой мы пока не знаем, и это скорость света. Когда вы играете в киберспортивный тайтл, вам нужна задержка в миллисекунды, а не несколько сотен миллисекунд. Это фундаментальная проблема. Это законы физики.</p></blockquote><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">В словах Хуанга действительно есть логика, однако не все согласны с тем, в чем суть проблемы. По мнению главы стартапа Blade, высокая задержка связана в первую очередь в системах кодировки и устаревших сетях.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Так или иначе, но со временем железо все же будет уступать стримингу в определенных областях. Модернизация сетей, новые способы кодировки и конкуренция приведут к снижению потребности в игровом железе.&nbsp;</p>', 0, '04 фев. 2019 19:08'),
(37, 0, 'Босс Nvidia о Radeon VII: Мы сокрушим ее', 3, 'Администратор', 'Во время презентации AMD на CES 2019 компания представила свою новую видеокарту — Radeon VII, основанную на 7нм чипе Vega 20. Radeon VII будет конкурировать за покупателя с RTX 2080, хотя по словам главы Nvidia, карта AMD не впечатлила его.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Во время презентации AMD на CES 2019 компания представила свою новую видеокарту —&nbsp;<a href=\"https://shazoo.ru/2019/01/09/74585/amd-anonsirovala-videokartu-radeon-vii-s-7-nm-tehprocessom\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">Radeon VII</a>, основанную на 7нм чипе Vega 20. Radeon VII будет конкурировать за покупателя с RTX 2080, хотя по словам главы Nvidia, карта AMD не впечатлила его.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Об этом босс Nvidia Дженсен Хуанг рассказал журналистам&nbsp;<a href=\"https://www.pcworld.com/article/3332025/computers/nvidia-disses-the-radeon-vii-vowing-the-rtx-2080-will-crush-amds-underwhelming-gpu.html\" rel=\"noopener\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">PCWorld</a>.</p><blockquote style=\"-webkit-font-smoothing: antialiased; margin-top: 20px; margin-bottom: 20px; padding: 8px 0px 8px 16px; border-left: 3px solid rgb(61, 138, 193); font-size: 18px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.4;\">Не впечатляет. Производительность паршивенькая, и нет ничего нового. Нет трассировки лучей, нет ИИ. Это 7нм чип с памятью HBM, который едва успевает за 2080. А если мы включим DLSS, то сокрушим ее. Если мы включим трассировку лучей, то сокрушим ее.</p></blockquote><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Radeon VII выходит в феврале с ценником $700, что сопоставимо с ценой некоторых сторонних производителей RTX 2080 и на $100 дешевле собственной версии Nvidia.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">На презентации AMD показала, что Radeon VII по производительности сопоставима с 2080 в Battlefield 5 и Far Cry 5, а в&nbsp;Strange Brigade заявленное преимущество составляет 15 кадров.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><a class=\"exposer\" href=\"https://cdn.shazoo.ru/312719_IRfjaaJYYj_dasdsadsa.jpg\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color; color: rgb(0, 0, 0);\"><img src=\"https://cdn.shazoo.ru/w800x800/312719_IRfjaaJYYj_dasdsadsa.jpg\" alt=\"\" width=\"800\" height=\"450\" style=\"-webkit-font-smoothing: antialiased; border: 0px; max-width: 100%; height: auto;\"></a></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Однако нельзя отрицать тот факт, что Radeon VII при цене $700 не несет на борту ничего сопоставимого с ИИ и трассировкой лучей. Даже если AMD заявляет, что ведет работу над трассировкой лучей и нейросетями, Radeon VII использует все ту же архитектуру Vega, хоть и новой версии.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Если компания хочет составить серьезную конкуренцию, то следующее поколение — Navi, должно включать все то же, что есть и будет у Nvidia, и даже больше.</p>', 1, '04 фев. 2019 19:09'),
(38, 0, 'Ученые разработали искусственную кожу с \"паучьим чутьем\"', 4, 'Администратор', 'Исследователи университетов Коннектикута и Торонто разработали искусственную кожу, которая способна наделить человека или робота суперспособностями.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Исследователи университетов Коннектикута и Торонто разработали искусственную кожу, которая способна наделить человека или робота суперспособностями. Летать, к сожалению, он не сможет, однако гибкая и растягивающаяся кожа оснащена мультифункциональными сенсорами, способными чувствовать сильное магнитное поле или изменения давления.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Один из разработчиков Ислам Моса рассказал в интервью&nbsp;<a href=\"https://www.digitaltrends.com/cool-tech/superhuman-skin/\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\" target=\"_blank\">Digital Trends</a>:</p><blockquote style=\"-webkit-font-smoothing: antialiased; margin-top: 20px; margin-bottom: 20px; padding: 8px 0px 8px 16px; border-left: 3px solid rgb(61, 138, 193); font-size: 18px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.4;\">Это новая группа умной нательной электроники, которая обладает гибкостью, может растягиваться, принимать форму и обладает уникальными способностями восприятия, похожими на человеческую кожу.</p></blockquote><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Амбиции не останавливаются на чувствительности уровня людей.&nbsp;</p><blockquote style=\"-webkit-font-smoothing: antialiased; margin-top: 20px; margin-bottom: 20px; padding: 8px 0px 8px 16px; border-left: 3px solid rgb(61, 138, 193); font-size: 18px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.4;\">Ключевой мотивацией разработки сенсора для искусственной кожи было желание расширить возможности человека. Мы доказали, что такая кожа способна предупреждать людей об опасности до инцидента.</p></blockquote><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Команда полагает, что в будущем электронную кожу можно будет использовать не только для создания нового поколения протезов, но также для дистанционного мониторинга здоровья, состояния среды и во множестве других областей.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Нынешний прототип стоит менее $5 за каждый сенсор, в будущем цена может ощутимо вырасти из-за расходов на последующие разработки, испытания и получение лицензии.&nbsp;</p>', 3, '04 фев. 2019 19:10'),
(39, 0, 'Криптообменник не может вернуть $190 миллионов из-за \"смерти\" основателя', 4, 'Администратор', 'Канадский обменник криптовалюты QuadrigaCX объявил, что не может выплатить почти 190 миллионов долларов, принадлежащих клиентам, после того как тридцатилетний основатель Джеральд Коттен \"неожиданно умер\" в декабре 2018.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Канадский обменник криптовалюты&nbsp;QuadrigaCX объявил, что не может выплатить почти 190 миллионов долларов, принадлежащих клиентам, после того как тридцатилетний основатель Джеральд Коттен \"неожиданно умер\" в декабре 2018. Он был единственным человеком, кто знал пароли к \"складу\".<br style=\"-webkit-font-smoothing: antialiased;\"><br style=\"-webkit-font-smoothing: antialiased;\">QuadrigaCX оформила документы по защите компании, заявив , что имеет доступ только к активному кошельку, где хранится относительно небольшая сумма. Вот, каковы активы обменника:</p><ul style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 1em; margin-left: 2em; padding: 0px; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Около 26500 биткоинов ($92.3 миллиона)</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">11 тысяч биткоин кэша ($1.3 миллиона)</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">11 тысяч биткоин кэша SV ($770 тысяч)</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">35 тысяч биткоин голд ($352 тысяч)</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">Почти 200 тысяч лайткоин ($6.5 миллионов)</li><li style=\"-webkit-font-smoothing: antialiased; margin: 10px 0px;\">430 тысяч эфира ($46 миллионов)</li></ul><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Это только криптовалюта. При этом не ясно, что из этого находится за пределами доступа.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Утверждается, что в компании только Джеральд Коттен отвечал за распределение финансов и криптовалюты — ни один другой член команды не имел доступов. Это само по себе вызвало подозрение. Однако, что практически кричит \"мошенничество\" — это объявление обменника в середине января, что Коттен умер в Индии от осложнения заболевания Крона 9 декабря 2018 года. В Индии Коттен открывал детский дом.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Ноутбук Коттена находится в руках компании, но технический специалист до сих пор не смог обойти шифровку системы. Также утверждается, что Коттен не оставил никаких бизнес-записей.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Несмотря на предоставление сертификата о смерти, новости вызвали волну обвинений в фальсификации для мошеннических целей, напоминая идентичную ситуацию из сериала \"Кремниевая долина\".</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><span style=\"color: rgb(0, 0, 0);\"><a href=\"https://www.cbc.ca/news/canada/british-columbia/quadrigo-cryptocurrency-bitcoin-exchange-gerald-cotten-death-india-1.5002955\" rel=\"noopener\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">CBC</a>&nbsp;сообщает, что власти подтвердили, что канадец умер в Индии, однако никаких деталей не предоставлено из-за закона о защите информации. Где находится тело Коттена — не сообщается.</span></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Тем временем канадский банк&nbsp;Imperial Bank of Commerce в январе уже заморозил $26 миллионов ассетов криптообменника, обнаружив несоответствия в обработке выплат. Утверждается, что транзакций на $67 миллионов провели на личный аккаунт обработчика платежей&nbsp;Costodian Inc. Сейчас обменник утверждает, что из-за разбирательства не может получить доступ к миллионам долларов, находящихся у обработчика.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Один из клиентов криптообменника, который не может вернуть $15 тысяч, заявил, что в будущем скорее всего будет избегать криптовалюту.</p>', 4, '04 фев. 2019 19:11');
INSERT INTO `articles` (`id_art`, `art_game_id`, `name_art`, `cat_art`, `author_art`, `prewiew_text`, `text_art`, `views_art`, `date_art`) VALUES
(40, 0, 'Илон Маск хочет долететь до Луны как можно быстрее', 4, 'Администратор', 'На этой неделе Илон Маск сообщил в своем личном Twitter, что хочет добраться до Луны настолько быстро, насколько это возможно.', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">На этой неделе Илон Маск сообщил в своем личном&nbsp;<a href=\"https://twitter.com/elonmusk/status/1091154222173712384\" target=\"_blank\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\">Twitter</a>, что хочет добраться до Луны настолько быстро, насколько это возможно. В качестве доказательства, что это не пустые слова, Илон опубликовал пару фотографий и детали относительно двигателя Raptor, который будет использоваться в ракете Starship.&nbsp;</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Один из методов ускорения планов — это упрощение процесса конструкции ракеты. Вместо использования нескольких ступеней, рассчитанных на атмосферу или вакуум SpaceX будет использовать один универсальный двигатель, что позволит значительно сократить расходы на разработку и тестирование.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"></p><div data-twitter-event-id=\"0\" class=\"SandboxRoot env-bp-350\" style=\"max-height: 10000px; direction: ltr; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 16px; line-height: 1.4; font-family: Helvetica, Roboto, &quot;Segoe UI&quot;, Calibri, sans-serif; white-space: initial; position: relative;\"><div class=\"EmbeddedTweet EmbeddedTweet--cta EmbeddedTweet--mediaForward media-forward js-clickToOpenTarget js-tweetIdInfo tweet-InformationCircle-widgetParent\" data-click-to-open-target=\"https://twitter.com/elonmusk/status/1091154222173712384\" data-iframe-title=\"Twitter Tweet\" data-scribe=\"page:tweet\" data-tweet-id=\"1091154222173712384\" id=\"twitter-widget-0\" lang=\"en\" data-twitter-event-id=\"1\" style=\"overflow: hidden; cursor: pointer; border: 0px; border-radius: 5px; max-width: 520px; position: relative;\"><article class=\"MediaCard\n           MediaCard--mediaForward\n           \n           customisable-border\" data-scribe=\"component:card\" dir=\"ltr\"><div class=\"MediaCard-mediaContainer js-cspForcedStyle\" data-scribe=\"element:photo_grid\" data-style=\"padding-bottom: 50%\" style=\"position: relative; padding-bottom: 250px;\"><a class=\"MediaCard-borderOverlay\" href=\"https://twitter.com/elonmusk/status/1091154222173712384/photo/1\" role=\"presentation\" tabindex=\"-1\" title=\"\" style=\"position: absolute; top: 0px; left: 0px; z-index: 10; width: 500px; height: 250px; border: 1px solid rgba(225, 232, 237, 0.75); border-radius: 4px 4px 0px 0px; outline: 0px;\"><span class=\"u-hiddenVisually\" style=\"position: absolute !important; overflow: hidden !important; width: 1px !important; height: 1px !important; padding: 0px !important; border: 0px !important; clip: rect(1px, 1px, 1px, 1px) !important;\"></span></a><div class=\"MediaCard-mediaAsset ImageGrid ImageGrid--2 ImageGrid--roundedTop\" style=\"position: absolute; top: 0px; left: 0px; width: 500px; height: 250px; line-height: 0; transition: opacity 0.5s ease 0s;\"><a href=\"https://twitter.com/elonmusk/status/1091154222173712384/photo/1\" class=\"ImageGrid-image ImageGrid-image-0 CroppedImage CroppedImage--fillHeight\" style=\"position: absolute; display: inline-block; overflow: hidden; width: 250px; padding-bottom: 250px; border: 0px solid rgb(225, 232, 237); transform: rotate(0deg); outline: 0px; top: 0px; left: 0px; border-top-left-radius: 4px;\"><img class=\"CroppedImage-image js-cspForcedStyle\" data-image=\"https://pbs.twimg.com/media/DySO-uIUYAA04Kj\" width=\"531\" height=\"358\" data-style=\"left:-24%;\" alt=\"View image on Twitter\" title=\"View image on Twitter\" src=\"https://pbs.twimg.com/media/DySO-uIUYAA04Kj?format=jpg&amp;name=360x360\" style=\"border: 0px; position: absolute; top: 0px; left: -60px; min-height: 100%; min-width: 100%; height: 250px; width: auto;\"></a><a href=\"https://twitter.com/elonmusk/status/1091154222173712384/photo/1\" class=\"ImageGrid-image ImageGrid-image-1 CroppedImage CroppedImage--fillHeight\" style=\"position: absolute; display: inline-block; overflow: hidden; width: 250px; padding-bottom: 250px; border-width: 0px 0px 0px 1px; border-style: solid; border-color: rgb(225, 232, 237); border-image: initial; transform: rotate(0deg); outline: 0px; top: 0px; right: 0px; border-top-right-radius: 4px;\"><img class=\"CroppedImage-image js-cspForcedStyle\" data-image=\"https://pbs.twimg.com/media/DySO-uIUwAAI77c\" width=\"484\" height=\"413\" data-style=\"left:-8%;\" alt=\"View image on Twitter\" title=\"View image on Twitter\" src=\"https://pbs.twimg.com/media/DySO-uIUwAAI77c?format=jpg&amp;name=360x360\" style=\"border: 0px; position: absolute; top: 0px; left: -20px; min-height: 100%; min-width: 100%; height: 250px; width: auto;\"></a></div></div></article><div class=\"EmbeddedTweet-tweetContainer\"><div class=\"EmbeddedTweet-tweet\" style=\"padding: 14.4px 20px 10px; border-style: solid solid none; border-top-color: rgb(225, 232, 237); border-right-color: rgb(225, 232, 237); border-bottom-color: initial; border-left-color: rgb(225, 232, 237); border-image: initial; border-top-width: 0px; border-right-width: 1px; border-bottom-width: initial; border-left-width: 1px; border-radius: 0px;\"><blockquote class=\"Tweet h-entry js-tweetIdInfo subject expanded\" cite=\"https://twitter.com/elonmusk/status/1091154222173712384\" data-tweet-id=\"1091154222173712384\" data-scribe=\"section:subject\" style=\"margin-bottom: 0px; padding: 0px; list-style: none; border: none;\"><div class=\"Tweet-header\" style=\"display: flex;\"><a class=\"TweetAuthor-avatar  Identity-avatar u-linkBlend\" data-scribe=\"element:user_link\" href=\"https://twitter.com/elonmusk\" aria-label=\"Elon Musk (screen name: elonmusk)\" style=\"text-decoration: inherit; -webkit-box-flex: 0; flex: 0 0 auto; height: 36px; margin-right: 9px; outline: 0px; font-weight: inherit;\"><span style=\"color: rgb(0, 0, 0);\"><img class=\"Avatar\" data-scribe=\"element:avatar\" data-src-2x=\"https://pbs.twimg.com/profile_images/1082975776113340416/-hQlqBJA_bigger.jpg\" alt=\"\" data-src-1x=\"https://pbs.twimg.com/profile_images/1082975776113340416/-hQlqBJA_normal.jpg\" src=\"https://pbs.twimg.com/profile_images/1082975776113340416/-hQlqBJA_normal.jpg\" style=\"border: 0px; max-width: 100%; max-height: 100%; border-radius: 50%;\"></span></a><div class=\"TweetAuthor js-inViewportScribingTarget\" data-scribe=\"component:author\" style=\"display: flex; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; overflow: hidden;\"><a class=\"TweetAuthor-link Identity u-linkBlend\" data-scribe=\"element:user_link\" href=\"https://twitter.com/elonmusk\" aria-label=\"Elon Musk (screen name: elonmusk)\" style=\"text-decoration: inherit; display: flex; -webkit-box-align: start; align-items: flex-start; outline: 0px; font-weight: inherit;\"><div class=\"TweetAuthor-nameScreenNameContainer\" style=\"display: flex; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; line-height: 1.2; -webkit-box-align: start; align-items: flex-start; min-width: 0px;\"><span class=\"TweetAuthor-decoratedName\" style=\"display: flex; -webkit-box-align: center; align-items: center; min-width: 0px;\"><span class=\"TweetAuthor-name Identity-name customisable-highlight\" title=\"Elon Musk\" data-scribe=\"element:name\" style=\"font-weight: 700; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; padding-right: 4px;\"><span style=\"color: rgb(0, 0, 0);\">Elon Musk</span></span><span class=\"TweetAuthor-verifiedBadge\" data-scribe=\"element:verified_badge\" style=\"position: static; -webkit-box-flex: 0; flex: 0 0 auto; padding-right: 4px;\"><span style=\"color: rgb(0, 0, 0);\"><div class=\"Icon Icon--verified \" aria-label=\"Verified Account\" title=\"Verified Account\" role=\"img\" style=\"display: inline-block; height: 1.25em; background-repeat: no-repeat; background-size: contain; vertical-align: text-bottom; width: 1.11111em; background-image: url(&quot;data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h64v72H0z%22%2F%3E%3Cpath%20fill%3D%22%231da1f2%22%20d%3D%22M3%2037.315c0%204.125%202.162%207.726%205.363%209.624-.056.467-.09.937-.09%201.42%200%206.103%204.72%2011.045%2010.546%2011.045%201.295%200%202.542-.234%203.687-.686C24.22%2062.4%2027.827%2064.93%2032%2064.93c4.174%200%207.782-2.53%209.49-6.213%201.148.45%202.39.685%203.69.685%205.826%200%2010.546-4.94%2010.546-11.045%200-.483-.037-.953-.093-1.42C58.83%2045.04%2061%2041.44%2061%2037.314c0-4.37-2.42-8.15-5.933-9.946.427-1.203.658-2.5.658-3.865%200-6.104-4.72-11.045-10.545-11.045-1.302%200-2.543.232-3.69.688-1.707-3.685-5.315-6.216-9.49-6.216-4.173%200-7.778%202.53-9.492%206.216-1.146-.455-2.393-.688-3.688-.688-5.827%200-10.545%204.94-10.545%2011.045%200%201.364.23%202.662.656%203.864C5.42%2029.163%203%2032.944%203%2037.314z%22%2F%3E%3Cpath%20fill%3D%22%23FFF%22%20d%3D%22M17.87%2039.08l7.015%206.978c.585.582%201.35.873%202.116.873.77%200%201.542-.294%202.127-.883.344-.346%2015.98-15.974%2015.98-15.974%201.172-1.172%201.172-3.07%200-4.243-1.17-1.17-3.07-1.172-4.242%200l-13.87%2013.863-4.892-4.868c-1.174-1.168-3.074-1.164-4.242.01-1.168%201.176-1.163%203.075.01%204.244z%22%2F%3E%3C%2Fsvg%3E&quot;);\"></div></span><span class=\"u-hiddenVisually\" style=\"position: absolute !important; overflow: hidden !important; width: 1px !important; height: 1px !important; padding: 0px !important; border: 0px !important; clip: rect(1px, 1px, 1px, 1px) !important;\"><span style=\"color: rgb(0, 0, 0);\">✔</span></span></span></span><span class=\"TweetAuthor-screenName Identity-screenName\" title=\"@elonmusk\" data-scribe=\"element:screen_name\" dir=\"ltr\" style=\"font-size: 14px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; flex-shrink: 1;\"><span style=\"color: rgb(0, 0, 0);\">@elonmusk</span></span></div></a></div><div class=\"Tweet-brand\" style=\"margin-left: auto;\"><a href=\"https://twitter.com/elonmusk/status/1091154222173712384\" data-scribe=\"element:logo\" style=\"outline: 0px; color: rgb(0, 0, 0);\"><div class=\"Icon Icon--twitter \" aria-label=\"View on Twitter\" title=\"View on Twitter\" role=\"presentation\" style=\"display: inline-block; height: 1.25em; background-repeat: no-repeat; background-size: contain; vertical-align: text-bottom; width: 1.25em; background-image: url(&quot;data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h72v72H0z%22%2F%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%231da1f2%22%20d%3D%22M68.812%2015.14c-2.348%201.04-4.87%201.744-7.52%202.06%202.704-1.62%204.78-4.186%205.757-7.243-2.53%201.5-5.33%202.592-8.314%203.176C56.35%2010.59%2052.948%209%2049.182%209c-7.23%200-13.092%205.86-13.092%2013.093%200%201.026.118%202.02.338%202.98C25.543%2024.527%2015.9%2019.318%209.44%2011.396c-1.125%201.936-1.77%204.184-1.77%206.58%200%204.543%202.312%208.552%205.824%2010.9-2.146-.07-4.165-.658-5.93-1.64-.002.056-.002.11-.002.163%200%206.345%204.513%2011.638%2010.504%2012.84-1.1.298-2.256.457-3.45.457-.845%200-1.666-.078-2.464-.23%201.667%205.2%206.5%208.985%2012.23%209.09-4.482%203.51-10.13%205.605-16.26%205.605-1.055%200-2.096-.06-3.122-.184%205.794%203.717%2012.676%205.882%2020.067%205.882%2024.083%200%2037.25-19.95%2037.25-37.25%200-.565-.013-1.133-.038-1.693%202.558-1.847%204.778-4.15%206.532-6.774z%22%2F%3E%3C%2Fsvg%3E&quot;);\"></div></a></div></div><div class=\"Tweet-body e-entry-content\" data-scribe=\"component:tweet\" style=\"margin-top: 14px;\"><div class=\"u-hiddenVisually js-inViewportScribingTarget\" style=\"position: absolute !important; overflow: hidden !important; width: 1px !important; height: 1px !important; padding: 0px !important; border: 0px !important; clip: rect(1px, 1px, 1px, 1px) !important;\"></div><p class=\"Tweet-text e-entry-title\" lang=\"en\" dir=\"ltr\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none; border: none; white-space: pre-wrap; cursor: text; overflow-wrap: break-word; direction: ltr;\">Preparing to fire the Starship Raptor engine at <a href=\"https://twitter.com/SpaceX\" class=\"PrettyLink profile customisable h-card\" dir=\"ltr\" data-mentioned-user-id=\"34743251\" data-scribe=\"element:mention\" style=\"outline: 0px;\"><span class=\"PrettyLink-prefix\">@</span><span class=\"PrettyLink-value\">SpaceX</span></a> Texas</p><div class=\"TweetInfo\" style=\"display: flex; margin-top: 3.2px; font-size: 14px;\"><div class=\"TweetInfo-like\"><a class=\"TweetInfo-heart\" title=\"Like\" href=\"https://twitter.com/intent/like?tweet_id=1091154222173712384\" data-scribe=\"component:actions\" style=\"display: flex; outline: 0px;\"><div data-scribe=\"element:heart\"><span style=\"color: rgb(0, 0, 0);\"><div class=\"Icon Icon--heart \" aria-label=\"Like\" title=\"Like\" role=\"img\" style=\"display: inline-block; height: 1.25em; background-repeat: no-repeat; background-size: contain; vertical-align: text-bottom; width: 1.25em; background-image: url(&quot;data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23697882%22%20d%3D%22M12%2021.638h-.014C9.403%2021.59%201.95%2014.856%201.95%208.478c0-3.064%202.525-5.754%205.403-5.754%202.29%200%203.83%201.58%204.646%202.73.813-1.148%202.353-2.73%204.644-2.73%202.88%200%205.404%202.69%205.404%205.755%200%206.375-7.454%2013.11-10.037%2013.156H12zM7.354%204.225c-2.08%200-3.903%201.988-3.903%204.255%200%205.74%207.035%2011.596%208.55%2011.658%201.52-.062%208.55-5.917%208.55-11.658%200-2.267-1.822-4.255-3.902-4.255-2.528%200-3.94%202.936-3.952%202.965-.23.562-1.156.562-1.387%200-.015-.03-1.426-2.965-3.955-2.965z%22%2F%3E%3C%2Fsvg%3E&quot;);\"></div></span></div><span class=\"TweetInfo-heartStat\" data-scribe=\"element:heart_count\" style=\"margin-left: 3px;\"><span style=\"color: rgb(0, 0, 0);\">63.7K</span></span></a></div><div class=\"TweetInfo-timeGeo\" style=\"margin-left: 12px; -webkit-box-flex: 1; flex: 1 1 0%;\"><a class=\"u-linkBlend u-url customisable-highlight long-permalink\" data-datetime=\"2019-02-01T02:00:13+0000\" data-scribe=\"element:full_timestamp\" href=\"https://twitter.com/elonmusk/status/1091154222173712384\" style=\"text-decoration: inherit; outline: 0px; font-weight: inherit; color: rgb(0, 0, 0);\">5:00 AM - Feb 1, 2019</a></div></div></div></blockquote></div><a class=\"CallToAction CallToAction--mediaForward\" title=\"View the conversation on Twitter\" href=\"https://twitter.com/elonmusk/status/1091154222173712384\" data-scribe=\"section:cta component:news\" style=\"display: flex; -webkit-box-align: center; align-items: center; border-color: rgb(225, 232, 237); border-style: solid; border-radius: 0px 0px 4px 4px; border-width: 1px; padding: 9px 20px; font-size: 14px; outline: 0px;\"><div class=\"CallToAction-icon\" data-scribe=\"element:conversation_icon\" style=\"display: inline;\"><div class=\"Icon Icon--replyCTA \" aria-label=\"View conversation on Twitter\" title=\"View conversation on Twitter\" role=\"img\" style=\"height: 1.25em; background-repeat: no-repeat; background-size: contain; vertical-align: text-bottom; width: 1.25em; background-image: url(&quot;data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%232b7bb9%22%20d%3D%22M14.046%202.242l-4.148-.01h-.002c-4.374%200-7.8%203.427-7.8%207.802%200%204.098%203.186%207.206%207.465%207.37v3.828c0%20.108.045.286.12.403.143.225.385.347.633.347.138%200%20.277-.038.402-.118.264-.168%206.473-4.14%208.088-5.506%201.902-1.61%203.04-3.97%203.043-6.312v-.017c-.006-4.368-3.43-7.788-7.8-7.79zm3.787%2012.972c-1.134.96-4.862%203.405-6.772%204.643V16.67c0-.414-.334-.75-.75-.75h-.395c-3.66%200-6.318-2.476-6.318-5.886%200-3.534%202.768-6.302%206.3-6.302l4.147.01h.002c3.532%200%206.3%202.766%206.302%206.296-.003%201.91-.942%203.844-2.514%205.176z%22%2F%3E%3C%2Fsvg%3E&quot;); transform: scaleX(1);\"></div></div><div class=\"CallToAction-text\" data-scribe=\"element:conversation_text\" style=\"margin-left: 4px;\"><span style=\"color: rgb(0, 0, 0);\">8,205 people are talking about this</span></div><div class=\"CallToAction-chevron\" data-scribe=\"element:cta_chevron\" style=\"margin-left: auto; display: inline;\"><div class=\"Icon Icon--chevronRightCTA \" aria-label=\"View on Twitter\" title=\"View on Twitter\" role=\"img\" style=\"height: 1.25em; background-repeat: no-repeat; background-size: contain; vertical-align: text-bottom; width: 1.25em; background-image: url(&quot;data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20class%3D%22icon%22%20fill%3D%22%23697882%22%20d%3D%22M17.207%2011.293l-7.5-7.5c-.39-.39-1.023-.39-1.414%200s-.39%201.023%200%201.414L15.086%2012l-6.793%206.793c-.39.39-.39%201.023%200%201.414.195.195.45.293.707.293s.512-.098.707-.293l7.5-7.5c.39-.39.39-1.023%200-1.414z%22%2F%3E%3C%2Fsvg%3E&quot;); transform: scaleX(1);\"></div></div></a></div><div class=\"tweet-InformationCircle--top tweet-InformationCircle\" data-scribe=\"element:notice\" style=\"position: absolute; right: 0px; top: 0px; margin: 0px; line-height: 0; padding: 6px 6px 5px 5px; z-index: 20;\"><a href=\"https://support.twitter.com/articles/20175256\" class=\"Icon Icon--informationCircleWhite js-inViewportScribingTarget\" title=\"Twitter Ads info and privacy\" style=\"display: inline-block; height: 18px; background-repeat: no-repeat; background-size: contain; vertical-align: text-bottom; width: 18px; background-image: url(&quot;data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2072%2072%22%3E%3Cg%20transform%3D%22translate(8%208)%22%3E%3Cpath%20fill%3D%22%23657786%22%20fill-opacity%3D%22.8%22%20d%3D%22M28%203.11C14.278%203.11%203.11%2014.276%203.11%2028c0%2013.723%2011.166%2024.887%2024.89%2024.887S52.89%2041.723%2052.89%2028C52.89%2014.274%2041.724%203.11%2028%203.11z%22%2F%3E%3Cpath%20fill%3D%22%23FFF%22%20d%3D%22M28%2044.593c-1.718%200-3.11-1.393-3.11-3.112V30.076c0-1.718%201.392-3.11%203.11-3.11s3.11%201.392%203.11%203.11V41.48c0%201.72-1.392%203.113-3.11%203.113z%22%2F%3E%3Ccircle%20fill%3D%22%23FFF%22%20cx%3D%2228%22%20cy%3D%2218.148%22%20r%3D%224.667%22%2F%3E%3Cpath%20fill%3D%22%23FFF%22%20d%3D%22M28%2056C12.56%2056%200%2043.44%200%2028S12.56%200%2028%200s28%2012.56%2028%2028-12.56%2028-28%2028zm0-49.778C15.99%206.222%206.222%2015.992%206.222%2028S15.992%2049.778%2028%2049.778c12.01%200%2021.778-9.77%2021.778-21.778S40.008%206.222%2028%206.222z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E&quot;); outline: 0px;\"><span class=\"u-hiddenVisually\" style=\"position: absolute !important; overflow: hidden !important; width: 1px !important; height: 1px !important; padding: 0px !important; border: 0px !important; clip: rect(1px, 1px, 1px, 1px) !important; color: rgb(0, 0, 0);\">Twitter Ads info and privacy</span></a></div></div><div class=\"resize-sensor\" style=\"position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;\"><div class=\"resize-sensor-expand\" style=\"position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;\"><div style=\"position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 510px; height: 419px;\"></div></div><div class=\"resize-sensor-shrink\" style=\"position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;\"><div style=\"position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 1000px; height: 818.156px;\"></div></div></div></div><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\"><span style=\"-webkit-font-smoothing: antialiased; font-weight: 700;\">К чему такая спешка и почему Луна, а не Марс?</span></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Маск все еще намерен отправить людей на Красную планету, однако сейчас основные ресурсы направлены на полет к Луне. Причина может заключаться в ограниченном бюджете — SpaceX уже сократила 10% своего состава для экономии средств. Все же подготовка к запуску тысяч аппаратов для создания спутникового интеренета и разработка гигантской ракеты стоят очень дорого.</p><p><twitter-widget class=\"twitter-tweet twitter-tweet-rendered\" id=\"twitter-widget-0\" data-tweet-id=\"1091154222173712384\" style=\"-webkit-font-smoothing: antialiased; margin: 10px auto; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px; position: static; visibility: visible; display: block; transform: rotate(0deg); max-width: 100%; width: 500px; min-width: 220px;\"></twitter-widget></p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Кроме того не стоит забывать, что SpaceX уже договорилась отправить японского миллиардера в полет вокруг луны на борту Starship.&nbsp;</p>', 0, '04 фев. 2019 19:12'),
(41, 0, 'Слух: Valve начнет предоставлять свои сервера сторонним разработчикам', 4, 'Администратор', 'Пользователь Resetera обнаружил в документации Steamworks подтверждения тому, что у Valve имеются большие планы на сторонних разработчиков онлайн-игр. Компания работает над тем, чтобы позволить другим студиям пользоваться выделенными серверами в собственн', '<p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Пользователь&nbsp;<a href=\"https://www.resetera.com/threads/valves-new-multiplayer-api-in-public-beta-vac-for-everyone-dedicated-servers-ip-hiding.96853/\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\" target=\"_blank\">Resetera</a>&nbsp;обнаружил в документации Steamworks подтверждения тому, что у Valve имеются большие планы на сторонних разработчиков онлайн-игр. Компания работает над тем, чтобы позволить другим студиям пользоваться выделенными серверами в собственных целях.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Как именно это должно работать на практике, пока неизвестно. Сообщается, что система находится в стадии бета-тестирования.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Valve предлагает разработчикам API, нацеленный на безопасное соединение с сервером через защищенные наборы инструкция VAC, в том числе через специальные ретрансляторы. В документации компания уточнила, что все заинтересованные разработчики уже могут обратиться к Valve за дальнейшими инструкциями.</p><p style=\"-webkit-font-smoothing: antialiased; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 1.6; font-family: Roboto, &quot;Trebuchet MS&quot;, Helvetica, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 16px;\">Издание&nbsp;<a href=\"https://www.pcgamesn.com/steam-dedicated-servers\" style=\"-webkit-font-smoothing: antialiased; outline: 0px; transition-timing-function: ease; transition-property: color;\" target=\"_blank\">PC GamesN</a>&nbsp;связалось с Valve, чтобы получить дополнительную информацию, но ответа не получило.</p>', 1, '04 фев. 2019 19:13'),
(42, 33, 'ЗНАКОМЬТЕСЬ С GRIDLOCK И MOZZIE', 5, 'Администратор', 'Gridlock и Mozzie — старые знакомые. Они встретились на «Битве роботов», а через несколько лет Mozzie уговорил подругу поступить на службу в армию.', '<p><img src=\"https://steamcdn-a.akamaihd.net/steamcommunity/public/images/clans/8328525/b7b80d142f98d1318fbd693b290b79450fdaa1cc.jpg\" style=\"border-width: initial; border-color: initial; border-image: initial; max-width: 100%; font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">Gridlock и Mozzie — старые знакомые. Они встретились на «Битве роботов», а через несколько лет Mozzie уговорил подругу поступить на службу в армию. С каждым днем их дружба только крепла. Во время одного из сильнейших пожаров века оперативники действовали в паре, окончательно сроднились и с тех пор всегда отправлялись на задание в составе одной группы.</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><a class=\"bb_link\" href=\"https://steamcommunity.com/linkfilter/?url=http://rainbow6.ubisoft.com/siege/ru-ru/news/detail.aspx?c=tcm:161-342820-16&amp;ct=tcm:154-76770-32\" target=\"_blank\" rel=\"noreferrer\" style=\"text-decoration-line: underline; cursor: pointer; font-family: Arial, Helvetica, Verdana, sans-serif;\">Посетите нашу официальную страницу, чтобы получить больше информации.</a><br></p>', 3, '19 фев. 2019 12:19'),
(43, 19, 'ACE COMBAT 7: SKIES UNKNOWN Flight Stick Support', 5, 'Администратор', '', '<p><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">ACE COMBAT 7 SKIES UNKNOWN is supporting the following flight sticks:</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">-Thrustmaster T. Flight Hotas 4</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">-Thrustmaster T. Flight Hotas One</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">-HORI HOTAS Flight Stick for PlayStation 4</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">-HORI HOTAS Flight Stick for XBOX ONE”</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">Please visit the official Thrustmaster homepage and read the FAQ for troubleshooting. Please also download and install the latest drivers as this may resolve the issue.</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><a class=\"bb_link\" href=\"https://steamcommunity.com/linkfilter/?url=https://support.thrustmaster.com/en/product/tflighthotas4-en/\" target=\"_blank\" rel=\"noreferrer\" style=\"text-decoration-line: underline; cursor: pointer; font-family: Arial, Helvetica, Verdana, sans-serif;\">https://support.thrustmaster.com/en/product/tflighthotas4-en/</a><br></p>', 0, '19 фев. 2019 12:44'),
(44, 18, 'Arma 3 Steam Free Weekend & sale starts now', 5, 'Администратор', '', '<p><img src=\"https://steamcdn-a.akamaihd.net/steamcommunity/public/images/clans/2799889/29290f95819be8fcb0726c0808a7138199a9fd3c.png\" style=\"border-width: initial; border-color: initial; border-image: initial; max-width: 100%; font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">The Arma 3 Steam Free Weekend (and sale) is live!&nbsp;</span><a class=\"bb_link\" href=\"https://store.steampowered.com/app/107410/Arma_3/\" target=\"_blank\" rel=\"noreferrer\" style=\"text-decoration-line: underline; cursor: pointer; font-family: Arial, Helvetica, Verdana, sans-serif;\">Install the game NOW</a><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">&nbsp;and play for&nbsp;</span><b style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">FREE</b><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">until Monday February 18 (18:00 UTC).</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">To get access to the Free Weekend, youll just need to visit the&nbsp;</span><a class=\"bb_link\" href=\"https://store.steampowered.com/app/107410/Arma_3/\" target=\"_blank\" rel=\"noreferrer\" style=\"text-decoration-line: underline; cursor: pointer; font-family: Arial, Helvetica, Verdana, sans-serif;\">Arma 3 store page on Steam</a><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">, and hit the Install button. If the option to Install Arma 3 doesnt show, we advise you to restart your Steam client.</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">During the Free Weekend, the&nbsp;</span><a class=\"bb_link\" href=\"https://store.steampowered.com/app/107410/Arma_3/\" target=\"_blank\" rel=\"noreferrer\" style=\"text-decoration-line: underline; cursor: pointer; font-family: Arial, Helvetica, Verdana, sans-serif;\">Arma 3 base game</a><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">,&nbsp;</span><a class=\"bb_link\" href=\"https://store.steampowered.com/app/395180/Arma_3_Apex/\" target=\"_blank\" rel=\"noreferrer\" style=\"text-decoration-line: underline; cursor: pointer; font-family: Arial, Helvetica, Verdana, sans-serif;\">Arma 3 Apex expansion</a><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">, and&nbsp;</span><a class=\"bb_link\" href=\"https://store.steampowered.com/dlc/107410/\" target=\"_blank\" rel=\"noreferrer\" style=\"text-decoration-line: underline; cursor: pointer; font-family: Arial, Helvetica, Verdana, sans-serif;\">Arma 3 DLC packs</a><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">&nbsp;will also be on sale, with massive discounts up to 66%. You will be able to carry over your save games and Steam Achievements from the Free Weekend when you decide to purchase the game.</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">Have a great weekend, everyone!</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><iframe src=\"https://store.steampowered.com/widget/107410/?dynamiclink=1\" frameborder=\"0\" width=\"100%\" height=\"190\" style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></iframe><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><iframe src=\"https://store.steampowered.com/widget/395180/?dynamiclink=1\" frameborder=\"0\" width=\"100%\" height=\"190\" style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></iframe><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><iframe src=\"https://store.steampowered.com/widget/288520/?dynamiclink=1\" frameborder=\"0\" width=\"100%\" height=\"190\" style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></iframe><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><iframe src=\"https://store.steampowered.com/widget/304380/?dynamiclink=1\" frameborder=\"0\" width=\"100%\" height=\"190\" style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></iframe><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><iframe src=\"https://store.steampowered.com/widget/332350/?dynamiclink=1\" frameborder=\"0\" width=\"100%\" height=\"190\" style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></iframe><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><iframe src=\"https://store.steampowered.com/widget/601670/?dynamiclink=1\" frameborder=\"0\" width=\"100%\" height=\"190\" style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></iframe><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><iframe src=\"https://store.steampowered.com/widget/571710/?dynamiclink=1\" frameborder=\"0\" width=\"100%\" height=\"190\" style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></iframe><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><iframe src=\"https://store.steampowered.com/widget/744950/?dynamiclink=1\" frameborder=\"0\" width=\"100%\" height=\"190\" style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></iframe><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><iframe src=\"https://store.steampowered.com/widget/798390/?dynamiclink=1\" frameborder=\"0\" width=\"100%\" height=\"190\" style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></iframe><br></p>', 1, '19 фев. 2019 12:51'),
(45, 17, 'Interested in ESO Plus Membership? Trial it for Free!', 5, 'Администратор', '', '<p><i style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">Check out ESO Plus membership for yourself during our free trial event – no strings attached!</i><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steamcommunity/public/images/clans/6349516/c7cf6f7b25805abae55e2957106068ea29a6a3f3.jpg\" style=\"border-width: initial; border-color: initial; border-image: initial; max-width: 100%; font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></p><div class=\"bb_h1\" style=\"font-size: 15px; font-family: Arial, Helvetica, Verdana, sans-serif;\">Try Out ESO Plus for Yourself</div><p><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">The ESO Plus Free Trial begins on Thursday, February 7 at 10:00AM EST and will run until Tuesday, February 12 at 10:00AM EST. Throughout the trial period, you can enjoy the following ESO Plus membership benefits, completely free:&nbsp;</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></p><ul class=\"bb_ul\" style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><li>Full access to DLC game packs – new zones, quests, dungeons, and more</li><ul class=\"bb_ul\"><li>Includes the&nbsp;<i>Imperial City</i>,&nbsp;<i>Orsinium</i>,&nbsp;<i>Thieves Guild</i>,&nbsp;<i>Dark Brotherhood</i>,&nbsp;<i>Shadows of the Hist</i>,&nbsp;<i>Horns of the Reach</i>,&nbsp;<i>Clockwork City, Dragon Bones</i>,&nbsp;<i>Morrowind&nbsp;</i>(zone and story)<i>, Wolfhunter,&nbsp;</i>and&nbsp;<i>Murkmire</i></li></ul><li>A Craft Bag offering you unlimited storage for all of your crafting materials</li><li>Double Bank space for all the characters on your account</li><li>10% increase to Experience and Gold acquisition, Crafting Inspiration, and Trait Research rates</li><li>Double Furnishings and Collectibles space in player housing</li><li>Exclusive ability to dye costumes</li><li>Double Transmute Crystal storage</li></ul><p><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">If you don’t have access to the&nbsp;</span><i style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">Morrowind</i><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">&nbsp;zone to participate in the recently announced Morrowind Celebration Event, you’ll get free access to it during the ESO Plus trial period.&nbsp;</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">Note that the monthly crown stipend and ESO Plus deals are only available to fully paid members. You can check out everything that comes with ESO Plus on&nbsp;</span><a class=\"bb_link\" href=\"https://steamcommunity.com/linkfilter/?url=https://www.elderscrollsonline.com/en-us/esoplus\" target=\"_blank\" rel=\"noreferrer\" style=\"text-decoration-line: underline; cursor: pointer; font-family: Arial, Helvetica, Verdana, sans-serif;\">our website</a><span class=\"bb_link_host\" style=\"font-size: 10px; padding: 4px; top: -1px; font-family: Arial, Helvetica, Verdana, sans-serif;\">[www.elderscrollsonline.com]</span><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">.&nbsp;</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">Sounds good? Here’s how you unlock trial and get started:&nbsp;</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></p><ul class=\"bb_ul\" style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><li>Log into&nbsp;<i>The Elder Scrolls Online</i>.</li><li>Navigate to the Crown Store.</li><li>Select the ESO Plus tab.</li><li>Select “Free Trial!”</li></ul><p><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">You don’t need to provide credit card or any other account info to check out ESO Plus. All you need to do is go to the in-game Crown Store and activate it.</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"></p><div class=\"bb_h1\" style=\"font-size: 15px; font-family: Arial, Helvetica, Verdana, sans-serif;\">Membership has its Benefits</div><p><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">From the Craft Bag, to bonuses to Experience and Gold accumulation, to the massive library of DLCs ready to be explored, ESO Plus membership certainly has its benefits. If you’ve never tested out ESO Plus membership before, you can now, completely free! Let us know if you’ll be checking out ESO Plus during this trial promotion on Twitter @</span><a class=\"bb_link\" href=\"https://twitter.com/TESOnline\" target=\"_blank\" rel=\"noreferrer\" style=\"text-decoration-line: underline; cursor: pointer; font-family: Arial, Helvetica, Verdana, sans-serif;\">TESOnline</a><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">,&nbsp;</span><a class=\"bb_link\" href=\"https://steamcommunity.com/linkfilter/?url=https://www.instagram.com/elderscrollsonline/\" target=\"_blank\" rel=\"noreferrer\" style=\"text-decoration-line: underline; cursor: pointer; font-family: Arial, Helvetica, Verdana, sans-serif;\">Instagram</a><span class=\"bb_link_host\" style=\"font-size: 10px; padding: 4px; top: -1px; font-family: Arial, Helvetica, Verdana, sans-serif;\">[www.instagram.com]</span><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">,&nbsp;or&nbsp;</span><a class=\"bb_link\" href=\"https://steamcommunity.com/linkfilter/?url=https://www.facebook.com/ElderScrollsOnline\" target=\"_blank\" rel=\"noreferrer\" style=\"text-decoration-line: underline; cursor: pointer; font-family: Arial, Helvetica, Verdana, sans-serif;\">Facebook</a><span class=\"bb_link_host\" style=\"font-size: 10px; padding: 4px; top: -1px; font-family: Arial, Helvetica, Verdana, sans-serif;\">[www.facebook.com]</span><span style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">.</span><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><br style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\"><i style=\"font-family: Arial, Helvetica, Verdana, sans-serif;\">The ESO Plus Trial begins on Thursday, February 7 at 10:00AM EST and will run until Tuesday, February 12 at 10:00AM EST.</i><br></p>', 1, '19 фев. 2019 12:55');

-- --------------------------------------------------------

--
-- Структура таблицы `articles_category`
--

CREATE TABLE `articles_category` (
  `id_art_cat` int(12) NOT NULL,
  `name_art_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles_category`
--

INSERT INTO `articles_category` (`id_art_cat`, `name_art_cat`) VALUES
(1, 'Игры'),
(2, 'Гайды'),
(3, 'Железо'),
(4, 'IT'),
(5, 'Обновления');

-- --------------------------------------------------------

--
-- Структура таблицы `article_comments`
--

CREATE TABLE `article_comments` (
  `id_comment` int(12) NOT NULL,
  `id_art` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `text_comment` varchar(255) NOT NULL,
  `date_comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article_comments`
--

INSERT INTO `article_comments` (`id_comment`, `id_art`, `id_user`, `name_user`, `text_comment`, `date_comment`) VALUES
(1, 2, 1, 'Игорь', 'Интересно', '01 фев. 2019 15:15'),
(2, 5, 3, 'qwew', 'интересно!', '11 март 2019 03:37'),
(3, 14, 3, 'qwew', 'тест\r\n', '11 март 2019 03:39'),
(4, 14, 3, 'qwew', 'тест2', '11 март 2019 03:39'),
(5, 39, 3, 'qwew', 'test', '12 март 2019 00:29');

-- --------------------------------------------------------

--
-- Структура таблицы `badges`
--

CREATE TABLE `badges` (
  `id_badge` int(12) NOT NULL,
  `name_badge` varchar(100) NOT NULL,
  `cnt_games` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `badges`
--

INSERT INTO `badges` (`id_badge`, `name_badge`, `cnt_games`) VALUES
(1, 'One-Stop Shopper', 1),
(2, 'Select Collector', 5),
(3, 'Adept Accumulator', 10),
(4, 'Sharp-Eyed Stockpiler', 25),
(5, 'Collection Agent', 50),
(6, 'Power Player', 100),
(7, 'Game Mechanic', 250),
(8, 'Director of Acquisitions', 500),
(9, 'Game Industry Guardian', 1000),
(10, 'Gaming God', 2000),
(11, 'Accrual Expert', 3000),
(12, 'Ambassador of Amassment', 4000),
(13, 'Digital Deity', 5000),
(14, 'Collection King', 6000),
(15, 'Magnate of Amassment', 7000),
(16, 'Stockpiler Supreme', 8000),
(17, 'Almighty Aggregator', 9000),
(18, 'Master Gatherer', 10000),
(19, 'Omnipotent Assembler\r\n', 11000),
(20, 'Acquisition Idol\r\n', 12000),
(21, 'Game Collector: 13,000+\r\n', 13000),
(22, 'Game Collector: 14,000+\r\n', 14000),
(23, 'Game Collector: 15,000+\r\n', 15000);

-- --------------------------------------------------------

--
-- Структура таблицы `buyed_games`
--

CREATE TABLE `buyed_games` (
  `id_buy` int(12) NOT NULL,
  `buy_user_id` int(12) NOT NULL,
  `buy_game_id` int(12) NOT NULL,
  `buy_game_name` varchar(255) NOT NULL,
  `buy_game_cnt` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `buyed_games`
--

INSERT INTO `buyed_games` (`id_buy`, `buy_user_id`, `buy_game_id`, `buy_game_name`, `buy_game_cnt`) VALUES
(6, 1, 17, 'The Elder Scrolls Online', 4),
(7, 1, 16, 'Warhammer: Vermintide 2', 4),
(8, 1, 2, 'Party Hard 2', 1),
(9, 1, 14, 'Rocket League', 20),
(10, 1, 13, 'Divinity: Original Sin 2 - Definitive Edition', 1),
(11, 1, 15, 'Raft', 19),
(12, 1, 18, 'Arma 3', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `categories_alt`
--

CREATE TABLE `categories_alt` (
  `id_alt_cat` int(12) NOT NULL,
  `name_alt_cat` varchar(100) NOT NULL,
  `class_alt_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories_alt`
--

INSERT INTO `categories_alt` (`id_alt_cat`, `name_alt_cat`, `class_alt_cat`) VALUES
(1, 'Лидеры продаж', 'top_sellers'),
(2, 'Недавно обновленные', 'updated'),
(3, 'Новинки', 'recent'),
(4, 'Скоро выйдут', 'upcoming'),
(5, 'Скидки', 'discounts');

-- --------------------------------------------------------

--
-- Структура таблицы `categories_recommended`
--

CREATE TABLE `categories_recommended` (
  `id_rec_cat` int(12) NOT NULL,
  `name_rec_cat` varchar(100) NOT NULL,
  `class_rec_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories_recommended`
--

INSERT INTO `categories_recommended` (`id_rec_cat`, `name_rec_cat`, `class_rec_cat`) VALUES
(1, 'Друзьями', 'friends'),
(2, 'По меткам', 'tags'),
(3, 'Рекомендации', 'queue'),
(4, 'Новинки', 'queue_new');

-- --------------------------------------------------------

--
-- Структура таблицы `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id_message` int(12) NOT NULL,
  `id_chat_room` int(12) NOT NULL,
  `from_user` int(12) NOT NULL,
  `to_user` int(12) NOT NULL,
  `text_message` varchar(100) NOT NULL,
  `image_message` mediumtext NOT NULL,
  `is_img_hide_first_user` int(12) NOT NULL,
  `is_img_hide_second_user` int(12) NOT NULL,
  `time_message` varchar(100) NOT NULL,
  `date_message` varchar(100) NOT NULL,
  `status_message` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat_messages`
--

INSERT INTO `chat_messages` (`id_message`, `id_chat_room`, `from_user`, `to_user`, `text_message`, `image_message`, `is_img_hide_first_user`, `is_img_hide_second_user`, `time_message`, `date_message`, `status_message`) VALUES
(26, 4, 1, 6, 'fsdafs', '', 0, 0, '2019-03-14 04:32:24', '4 марта 2019 г.', 1),
(27, 4, 1, 6, 'fsdfs', '', 0, 0, '2019-03-14 04:34:31', '4 марта 2019 г.', 1),
(28, 4, 1, 6, 'qq', '', 0, 0, '2019-03-14 04:35:02', '4 марта 2019 г.', 1),
(29, 4, 1, 6, 'qq', '', 0, 0, '2019-03-14 04:35:17', '4 марта 2019 г.', 1),
(30, 4, 1, 6, 'hi', '', 0, 0, '2019-03-14 04:40:45', '4 марта 2019 г.', 1),
(31, 4, 1, 6, 'привет', '', 0, 0, '2019-03-14 04:40:52', '4 марта 2019 г.', 1),
(32, 4, 1, 6, 'привет', '', 0, 0, '2019-03-14 04:41:02', '4 марта 2019 г.', 1),
(33, 4, 1, 6, 'как дела?', '', 0, 0, '2019-03-14 04:41:13', '4 марта 2019 г.', 1),
(34, 4, 1, 6, 'йй', '', 0, 0, '2019-03-14 04:41:32', '4 марта 2019 г.', 1);
INSERT INTO `chat_messages` (`id_message`, `id_chat_room`, `from_user`, `to_user`, `text_message`, `image_message`, `is_img_hide_first_user`, `is_img_hide_second_user`, `time_message`, `date_message`, `status_message`) VALUES
INSERT INTO `chat_messages` (`id_message`, `id_chat_room`, `from_user`, `to_user`, `text_message`, `image_message`, `is_img_hide_first_user`, `is_img_hide_second_user`, `time_message`, `date_message`, `status_message`) VALUES
(106, 3, 1, 3, 'а я все', '', 0, 0, '2019-03-14 16:42:05', '4 марта 2019 г.', 1),
(107, 0, 1, 0, 'lkojk', '', 0, 0, '2019-03-14 18:45:02', '4 марта 2019 г.', 0),
(108, 0, 1, 0, 'thtrh', '', 0, 0, '2019-03-14 18:45:09', '4 марта 2019 г.', 0),
(109, 3, 1, 3, 'дарова', '', 0, 0, '2019-03-17 16:53:02', '7 марта 2019 г.', 1),
(110, 3, 1, 3, 'аууу', '', 0, 0, '2019-03-17 16:53:27', '7 марта 2019 г.', 1),
(111, 3, 3, 1, 'Шо', '', 0, 0, '2019-03-17 16:53:50', '7 марта 2019 г.', 1),
(112, 3, 3, 1, 'Дарова', '', 0, 0, '2019-03-17 16:53:53', '7 марта 2019 г.', 1),
(113, 3, 3, 1, 'Черт', '', 0, 0, '2019-03-17 16:53:56', '7 марта 2019 г.', 1),
(114, 3, 1, 3, 'пока', '', 0, 0, '2019-03-17 16:54:05', '7 марта 2019 г.', 1),
(115, 3, 1, 3, 'я не дружу с тобой', '', 0, 0, '2019-03-17 16:54:23', '7 марта 2019 г.', 1);
INSERT INTO `chat_messages` (`id_message`, `id_chat_room`, `from_user`, `to_user`, `text_message`, `image_message`, `is_img_hide_first_user`, `is_img_hide_second_user`, `time_message`, `date_message`, `status_message`) VALUES
INSERT INTO `chat_messages` (`id_message`, `id_chat_room`, `from_user`, `to_user`, `text_message`, `image_message`, `is_img_hide_first_user`, `is_img_hide_second_user`, `time_message`, `date_message`, `status_message`) VALUES
(117, 3, 3, 1, 'А я дружу', '', 0, 0, '2019-03-17 16:54:32', '7 марта 2019 г.', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `chat_rooms`
--

CREATE TABLE `chat_rooms` (
  `id_room` int(12) NOT NULL,
  `arUser_room` int(12) NOT NULL,
  `rsUser_room` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat_rooms`
--

INSERT INTO `chat_rooms` (`id_room`, `arUser_room`, `rsUser_room`) VALUES
(1, 1, 4),
(2, 5, 1),
(3, 1, 3),
(4, 1, 6),
(5, 7, 1),
(6, 3, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `coming_soon`
--

CREATE TABLE `coming_soon` (
  `id_com_game` int(12) NOT NULL,
  `url_com_game` varchar(255) NOT NULL,
  `name_com_game` varchar(100) NOT NULL,
  `date_com_game` varchar(100) NOT NULL,
  `publisher_com_game` varchar(100) NOT NULL,
  `desc_com_game` varchar(255) NOT NULL,
  `platforms_com_game` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `coming_soon`
--

INSERT INTO `coming_soon` (`id_com_game`, `url_com_game`, `name_com_game`, `date_com_game`, `publisher_com_game`, `desc_com_game`, `platforms_com_game`) VALUES
(1, 'https://www.ubisoft.com/en-us/game/far-cry-new-dawn/', 'FAR CRY® NEW DAWN', '15 фев. 2019 ', 'Ubisoft', 'Вы отправитесь в постапокалиптический округ Хоуп штата Монтана через 17 лет после ядерной катастрофы. Возглавьте борьбу с рейдерами, которые хотят захватить последние в мире ресурсы.', 'XBOX, PS4, PC'),
(2, 'https://www.sekirothegame.com/', 'Sekiro™: Shadows Die Twice', '22 мар. 2019', 'Activision', 'Составляйте и воплощайте собственные планы мести в новом приключенческом боевике от студии FromSoftware, создавшей Bloodborne и серию Dark Souls. Мстите врагам. Восстановите свою честь. Убивайте изощренно.', 'PC');

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id_country` int(12) NOT NULL,
  `code_country` varchar(100) NOT NULL,
  `name_country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id_country`, `code_country`, `name_country`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AX', 'Åland Islands'),
(3, 'AL', 'Albania'),
(4, 'DZ', 'Algeria'),
(5, 'AS', 'American Samoa'),
(6, 'AD', 'Andorra'),
(7, 'AO', 'Angola'),
(8, 'AI', 'Anguilla'),
(9, 'AQ', 'Antarctica'),
(10, 'AG', 'Antigua and Barbuda'),
(11, 'AR', 'Argentina'),
(12, 'AM', 'Armenia'),
(13, 'AW', 'Aruba'),
(14, 'AU', 'Australia'),
(15, 'AT', 'Austria'),
(16, 'AZ', 'Azerbaijan'),
(17, 'BS', 'Bahamas'),
(18, 'BH', 'Bahrain'),
(19, 'BD', 'Bangladesh'),
(20, 'BB', 'Barbados'),
(21, 'BY', 'Belarus'),
(22, 'BE', 'Belgium'),
(23, 'BZ', 'Belize'),
(24, 'BJ', 'Benin'),
(25, 'BM', 'Bermuda'),
(26, 'BT', 'Bhutan'),
(27, 'BO', 'Bolivia'),
(28, 'BQ', 'Bonaire, Sint Eustatius and Saba'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island (Bouvetøya)'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British Indian Ocean Territory (Chagos Archipelago)'),
(34, 'VG', 'British Virgin Islands'),
(35, 'BN', 'Brunei Darussalam'),
(36, 'BG', 'Bulgaria'),
(37, 'BF', 'Burkina Faso'),
(38, 'BI', 'Burundi'),
(39, 'KH', 'Cambodia'),
(40, 'CM', 'Cameroon'),
(41, 'CA', 'Canada'),
(42, 'CV', 'Cabo Verde'),
(43, 'KY', 'Cayman Islands'),
(44, 'CF', 'Central African Republic'),
(45, 'TD', 'Chad'),
(46, 'CL', 'Chile'),
(47, 'CN', 'China'),
(48, 'CX', 'Christmas Island'),
(49, 'CC', 'Cocos (Keeling) Islands'),
(50, 'CO', 'Colombia'),
(51, 'KM', 'Comoros'),
(52, 'CD', 'Congo'),
(53, 'CG', 'Congo'),
(54, 'CK', 'Cook Islands'),
(55, 'CR', 'Costa Rica'),
(56, 'CI', 'Cote d\'Ivoire'),
(57, 'HR', 'Croatia'),
(58, 'CU', 'Cuba'),
(59, 'CW', 'Curaçao'),
(60, 'CY', 'Cyprus'),
(61, 'CZ', 'Czechia'),
(62, 'DK', 'Denmark'),
(63, 'DJ', 'Djibouti'),
(64, 'DM', 'Dominica'),
(65, 'DO', 'Dominican Republic'),
(66, 'EC', 'Ecuador'),
(67, 'EG', 'Egypt'),
(68, 'SV', 'El Salvador'),
(69, 'GQ', 'Equatorial Guinea'),
(70, 'ER', 'Eritrea'),
(71, 'EE', 'Estonia'),
(72, 'ET', 'Ethiopia'),
(73, 'FO', 'Faroe Islands'),
(74, 'FK', 'Falkland Islands (Malvinas)'),
(75, 'FJ', 'Fiji'),
(76, 'FI', 'Finland'),
(77, 'FR', 'France'),
(78, 'GF', 'French Guiana'),
(79, 'PF', 'French Polynesia'),
(80, 'TF', 'French Southern Territories'),
(81, 'GA', 'Gabon'),
(82, 'GM', 'Gambia'),
(83, 'GE', 'Georgia'),
(84, 'DE', 'Germany'),
(85, 'GH', 'Ghana'),
(86, 'GI', 'Gibraltar'),
(87, 'GR', 'Greece'),
(88, 'GL', 'Greenland'),
(89, 'GD', 'Grenada'),
(90, 'GP', 'Guadeloupe'),
(91, 'GU', 'Guam'),
(92, 'GT', 'Guatemala'),
(93, 'GG', 'Guernsey'),
(94, 'GN', 'Guinea'),
(95, 'GW', 'Guinea-Bissau'),
(96, 'GY', 'Guyana'),
(97, 'HT', 'Haiti'),
(98, 'HM', 'Heard Island and McDonald Islands'),
(99, 'VA', 'Holy See (Vatican City State)'),
(100, 'HN', 'Honduras'),
(101, 'HK', 'Hong Kong'),
(102, 'HU', 'Hungary'),
(103, 'IS', 'Iceland'),
(104, 'IN', 'India'),
(105, 'ID', 'Indonesia'),
(106, 'IR', 'Iran'),
(107, 'IQ', 'Iraq'),
(108, 'IE', 'Ireland'),
(109, 'IM', 'Isle of Man'),
(110, 'IL', 'Israel'),
(111, 'IT', 'Italy'),
(112, 'JM', 'Jamaica'),
(113, 'JP', 'Japan'),
(114, 'JE', 'Jersey'),
(115, 'JO', 'Jordan'),
(116, 'KZ', 'Kazakhstan'),
(117, 'KE', 'Kenya'),
(118, 'KI', 'Kiribati'),
(119, 'KP', 'Korea'),
(120, 'KR', 'Korea'),
(121, 'KW', 'Kuwait'),
(122, 'KG', 'Kyrgyz Republic'),
(123, 'LA', 'Lao People\'s Democratic Republic'),
(124, 'LV', 'Latvia'),
(125, 'LB', 'Lebanon'),
(126, 'LS', 'Lesotho'),
(127, 'LR', 'Liberia'),
(128, 'LY', 'Libya'),
(129, 'LI', 'Liechtenstein'),
(130, 'LT', 'Lithuania'),
(131, 'LU', 'Luxembourg'),
(132, 'MO', 'Macao'),
(133, 'MK', 'Macedonia'),
(134, 'MG', 'Madagascar'),
(135, 'MW', 'Malawi'),
(136, 'MY', 'Malaysia'),
(137, 'MV', 'Maldives'),
(138, 'ML', 'Mali'),
(139, 'MT', 'Malta'),
(140, 'MH', 'Marshall Islands'),
(141, 'MQ', 'Martinique'),
(142, 'MR', 'Mauritania'),
(143, 'MU', 'Mauritius'),
(144, 'YT', 'Mayotte'),
(145, 'MX', 'Mexico'),
(146, 'FM', 'Micronesia'),
(147, 'MD', 'Moldova'),
(148, 'MC', 'Monaco'),
(149, 'MN', 'Mongolia'),
(150, 'ME', 'Montenegro'),
(151, 'MS', 'Montserrat'),
(152, 'MA', 'Morocco'),
(153, 'MZ', 'Mozambique'),
(154, 'MM', 'Myanmar'),
(155, 'NA', 'Namibia'),
(156, 'NR', 'Nauru'),
(157, 'NP', 'Nepal'),
(158, 'NL', 'Netherlands'),
(159, 'NC', 'New Caledonia'),
(160, 'NZ', 'New Zealand'),
(161, 'NI', 'Nicaragua'),
(162, 'NE', 'Niger'),
(163, 'NG', 'Nigeria'),
(164, 'NU', 'Niue'),
(165, 'NF', 'Norfolk Island'),
(166, 'MP', 'Northern Mariana Islands'),
(167, 'NO', 'Norway'),
(168, 'OM', 'Oman'),
(169, 'PK', 'Pakistan'),
(170, 'PW', 'Palau'),
(171, 'PS', 'Palestine'),
(172, 'PA', 'Panama'),
(173, 'PG', 'Papua New Guinea'),
(174, 'PY', 'Paraguay'),
(175, 'PE', 'Peru'),
(176, 'PH', 'Philippines'),
(177, 'PN', 'Pitcairn Islands'),
(178, 'PL', 'Poland'),
(179, 'PT', 'Portugal'),
(180, 'PR', 'Puerto Rico'),
(181, 'QA', 'Qatar'),
(182, 'RE', 'Réunion'),
(183, 'RO', 'Romania'),
(184, 'RU', 'Russian Federation'),
(185, 'RW', 'Rwanda'),
(186, 'BL', 'Saint Barthélemy'),
(187, 'SH', 'Saint Helena, Ascension and Tristan da Cunha'),
(188, 'KN', 'Saint Kitts and Nevis'),
(189, 'LC', 'Saint Lucia'),
(190, 'MF', 'Saint Martin'),
(191, 'PM', 'Saint Pierre and Miquelon'),
(192, 'VC', 'Saint Vincent and the Grenadines'),
(193, 'WS', 'Samoa'),
(194, 'SM', 'San Marino'),
(195, 'ST', 'Sao Tome and Principe'),
(196, 'SA', 'Saudi Arabia'),
(197, 'SN', 'Senegal'),
(198, 'RS', 'Serbia'),
(199, 'SC', 'Seychelles'),
(200, 'SL', 'Sierra Leone'),
(201, 'SG', 'Singapore'),
(202, 'SX', 'Sint Maarten (Dutch part)'),
(203, 'SK', 'Slovakia (Slovak Republic)'),
(204, 'SI', 'Slovenia'),
(205, 'SB', 'Solomon Islands'),
(206, 'SO', 'Somalia'),
(207, 'ZA', 'South Africa'),
(208, 'GS', 'South Georgia and the South Sandwich Islands'),
(209, 'SS', 'South Sudan'),
(210, 'ES', 'Spain'),
(211, 'LK', 'Sri Lanka'),
(212, 'SD', 'Sudan'),
(213, 'SR', 'Suriname'),
(214, 'SJ', 'Svalbard & Jan Mayen Islands'),
(215, 'SZ', 'Eswatini'),
(216, 'SE', 'Sweden'),
(217, 'CH', 'Switzerland'),
(218, 'SY', 'Syrian Arab Republic'),
(219, 'TW', 'Taiwan'),
(220, 'TJ', 'Tajikistan'),
(221, 'TZ', 'Tanzania'),
(222, 'TH', 'Thailand'),
(223, 'TL', 'Timor-Leste'),
(224, 'TG', 'Togo'),
(225, 'TK', 'Tokelau'),
(226, 'TO', 'Tonga'),
(227, 'TT', 'Trinidad and Tobago'),
(228, 'TN', 'Tunisia'),
(229, 'TR', 'Turkey'),
(230, 'TM', 'Turkmenistan'),
(231, 'TC', 'Turks and Caicos Islands'),
(232, 'TV', 'Tuvalu'),
(233, 'UG', 'Uganda'),
(234, 'UA', 'Ukraine'),
(235, 'AE', 'United Arab Emirates'),
(236, 'GB', 'United Kingdom of Great Britain & Northern Ireland'),
(237, 'US', 'United States of America'),
(238, 'UM', 'United States Minor Outlying Islands'),
(239, 'VI', 'United States Virgin Islands'),
(240, 'UY', 'Uruguay'),
(241, 'UZ', 'Uzbekistan'),
(242, 'VU', 'Vanuatu'),
(243, 'VE', 'Venezuela'),
(244, 'VN', 'Vietnam'),
(245, 'WF', 'Wallis and Futuna'),
(246, 'EH', 'Western Sahara'),
(247, 'YE', 'Yemen'),
(248, 'ZM', 'Zambia'),
(249, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Структура таблицы `friend_list`
--

CREATE TABLE `friend_list` (
  `id_list` int(12) NOT NULL,
  `parent_user` int(12) NOT NULL,
  `child_user` int(12) NOT NULL,
  `list_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `friend_list`
--

INSERT INTO `friend_list` (`id_list`, `parent_user`, `child_user`, `list_status`) VALUES
(19, 1, 6, 1),
(23, 1, 4, 0),
(24, 1, 7, 1),
(28, 3, 1, 1),
(30, 3, 7, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id_photo` int(12) NOT NULL,
  `path_photo` varchar(100) NOT NULL,
  `name_photo` varchar(100) NOT NULL,
  `name_pic` varchar(30) NOT NULL,
  `user_id_photo` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id_photo`, `path_photo`, `name_photo`, `name_pic`, `user_id_photo`) VALUES
(17, '/www/images/users/1/gallery/', '1551098796.jpg', 'test', 1),
(18, '/www/images/users/1/gallery/', '1551125391.jpg', 'Маяк', 1),
(19, '/www/images/users/1/gallery/', '1551116844.jpg', 'Пингвины', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `gallery_review`
--

CREATE TABLE `gallery_review` (
  `id_gall_review` int(12) NOT NULL,
  `gall_vote_review` varchar(15) NOT NULL,
  `gall_user_id` int(12) NOT NULL,
  `gall_pic_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery_review`
--

INSERT INTO `gallery_review` (`id_gall_review`, `gall_vote_review`, `gall_user_id`, `gall_pic_id`) VALUES
(1, 'like', 1, 21),
(2, 'like', 1, 20),
(3, 'like', 1, 19),
(4, 'dislike', 1, 18),
(5, 'like', 1, 17),
(6, 'like', 1, 22),
(7, 'dislike', 1, 23);

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

CREATE TABLE `games` (
  `id_game` int(12) NOT NULL,
  `parent_game` int(12) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `platform_id` varchar(255) NOT NULL,
  `users_cat_id` varchar(100) NOT NULL,
  `Developer` varchar(50) NOT NULL,
  `Publisher` varchar(50) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `game_date` date NOT NULL,
  `name_game` varchar(100) NOT NULL,
  `price_game` float NOT NULL,
  `discount_game` int(12) DEFAULT NULL,
  `discount_price_game` float DEFAULT NULL,
  `description_game` mediumtext NOT NULL,
  `desc_game` mediumtext NOT NULL,
  `cnt_view` int(12) NOT NULL,
  `cnt_sale` int(12) NOT NULL,
  `pegi_rating` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `games`
--

INSERT INTO `games` (`id_game`, `parent_game`, `category_id`, `tags`, `platform_id`, `users_cat_id`, `Developer`, `Publisher`, `Date`, `game_date`, `name_game`, `price_game`, `discount_game`, `discount_price_game`, `description_game`, `desc_game`, `cnt_view`, `cnt_sale`, `pegi_rating`) VALUES
(1, 0, '1', 'Файтинг', '1', '1,2,4,5,7,8,9,10', 'NetherRealm Studios, QLOC', 'WB Games', '1 дек. 2017', '2017-12-01', 'Injustice 2', 1799, 50, 900, 'Injustice 2 — это продолжение суперхита Injustice: Gods Among Us, в котором игроки могут создать и развивать сильнейшие версии своих любимых персонажей вселенной DC. Игра включает впечатляющее количество супергероев и суперзлодеев DC и позволяет изменять легендарных персонажей за счет уникального и мощного снаряжения, которое можно получить в ходе игры. Кроме того, впервые игроки могут управлять тем, как их персонажи выглядят, сражаются и развиваются, с помощью ряда игровых режимов.', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Снаряжайте и развивайте любимых героев и злодеев вселенной DC в INJUSTICE 2.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• ГЕРОЙ РОЖДАЕТСЯ В БОЮ: усиливайте и изменяйте любимого персонажа вселенной DC в каждом сражении с совершенно новой системой экипировки.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• ГРАНДИОЗНЫЙ СЮЖЕТ: пока Бэтмен воевал с Суперменом, возникла новая угроза Земле.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• ЛУЧШИЕ БОЙЦЫ ВСЕЛЕННОЙ DC: выбирайте из множества супергероев и суперзлодеев и сталкивайте их в эпических битвах.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• ИГРА СТУДИИ NETHERREALM: от авторов знаменитого MORTAL KOMBAT.</span>', 80, 8, 12),
(2, 0, '1,2', 'Насилие', '1,2', '1,4,5,7,8,12', ' Pinokl Games, Kverta, Hologryph', ' tinyBuild', '25 окт. 2018', '2018-10-25', 'Party Hard 2', 435, 10, 392, 'С возвращением в расширенную вселенную Party Hard! Используйте сотни способов, чтобы расправиться с шумными тусовщиками, мимовольно уничтожьте наркосиндикат и спасите планету от вторжения инопланетных пришельцев. Да прибудут с вами курицы!', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">С возвращением в расширенную вселенную Party Hard! Используйте сотни способов, чтобы расправиться с шумными тусовщиками, мимовольно уничтожьте наркосиндикат и спасите планету от вторжения инопланетных пришельцев. Да прибудут с вами курицы!</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/572430/extras/Party_Hard_2_Hide_plus_vision_gif_copy.png?t=1548260246\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Вы давно мечтали поспать... Но на часах снова 3 после полуночи, и тусовщики по соседству отрываются громко как никогда. Вы должны наконец покончить с этим – во всех смыслах.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Самый безумный симулятор порчи вечеринок на планете вернулся! Используйте сотни методов, чтобы расправиться с шумными тусовщиками, мимовольно уничтожьте наркосиндикат и спасите планету от вторжения инопланетных пришельцев. Party Hard 2 хранит верность сумасшедшим корням серии, при этом представляя массу свежих фишек:</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><ul class=\"bb_ul\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 16px; list-style-type: square; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Десятки новых ловушек</strong>&nbsp;и их комбинации: используйте различные вещества, которые взаимодействуют!<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">4 персонажа</strong>, два из которых необходимо открыть, каждый – с уникальными управлением, характеристиками и возможностями!<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Система крафта</strong>: бутылка + канистра с бензином = ...верно, вы угадали<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Убейте&nbsp;<strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">несколько целей</strong>&nbsp;одновременно, используя новое умение \"Мульти-убийство\"<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Используйте умение&nbsp;<strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">\"Пати-видение\"</strong>, чтобы обнаружить ловушки и предметы<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Взаимодействуйте с тусовщиками:</strong>&nbsp;споите девушку, подкупите панка или заставьте кого-то наложить в штаны от страха!<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Различные задания</strong>&nbsp;под любые стили прохождения. Не трогать гражданских и убирать только плохих парней или действовать по старой доброй схеме \"Убей их всех\"? Вам выбирать! Однако помните: ваши действия могут иметь последствия<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Открывайте уникальные предметы в зависимости от стиля вашего прохождения<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Портите вечеринки вместе с другом:&nbsp;<strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">локальный мультиплеер</strong>&nbsp;возвращается!<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Возвращается и&nbsp;<strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">режим Twitch-интеграции</strong>! Кто-то стримит Party Hard 2? Не сидите без дела, участвуйте! Наполняйте уровень персонажами и предметами, выбирайте стримеру задания и станьте Королем Игры!<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Новые&nbsp;<strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">3D-графика</strong>&nbsp;и освещение!<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Интригующая&nbsp;<strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">история</strong>&nbsp;мести и расякаяния. Да, с неожиданным поворотом. И со сбежавшим из цирка&nbsp;<strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">медведем bear</strong>.</li></ul>', 45, 6, 18),
(3, 0, '8', 'Вождение', '1', '1,2,4,7,9,15', ' Slightly Mad Studios', ' BANDAI NAMCO Entertainment', ' 22 сен. 2017', '2016-12-01', 'Project CARS 2', 1999, 40, 1199, 'ПУТЕШЕСТВИЕ В МИР АВТОСПОРТА В Project CARS 2 вас ждут захватывающие впечатления, прекрасные автомобили и невероятные трассы, а еще реалистичное управление, динамическая погода и множество режимов.', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">ОСОБЕННОСТИ:</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• Более 180 машин</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• Разрешение 12K и VR</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• Реалистичное управление, проверенное профи</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• Карьера как в жизни</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• Новые виды автоспорта (IndyCar, овалы, ралли-кросс)</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• Изменения поверхности и погоды</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• Трассы с неровным покрытием (лед, грязь)</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• 24-часовой цикл</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• Поддержка геймпадов/рулей</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">• Возможности для киберспорта</span>', 4, 10, 16),
(5, 0, '1,9', 'Ранний доступ', '1', '1,2,3,4,5,6,7', ' The Farm 51', ' The Farm 51', '20 окт. 2018', '2018-10-20', 'World War 3', 999, 20, 799, 'World War 3 - это многопользовательский военный шутер от первого лица в декорациях современного глобального конфликта. Принимайте бой в массовых пехотных сражениях, получайте преимущество над врагом с помощью персонализированного оружия, транспортных ', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">World War 3 - это многопользовательский военный шутер от первого лица в декорациях современного глобального конфликта. Сплоченная командная игра, национальные вооруженные силы, реальные локации, осознание тела персонажа и многогранная система кастомизации - все это способствует аутентичности современного боевого опыта, дополненного такими важными элементами как надежная баллистическая система, современное обмундирование и вооружение из реальной жизни. Созданная в сотрудничестве с военными научно-исследовательскими центрами и консультантами, World War 3 демонстрирует последствия каждой битвы в контексте глобальной военной кампании на стратегической карте войны.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">ОСНОВНЫЕ ОСОБЕННОСТИ:</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Современный боевой опыт</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">World War 3 представляет собой современный конфликт с тактикой и методами, в основу которых легли реальные боевые действия. Все это заложено в два захватывающих игровых режима. \"Warzone\" дает все возможности для динамичных, интенсивных перестрелок в ориентированных на командные действия боях пехоты и техники за укрепленные пункты. Сосредоточенный на тактике режим \"Recon\" предлагает игрокам работать вместе в рамках небольших разведывательных отрядов для того, чтобы выжить и успешно захватить особо важные цели на вражеской территории. Вместе эти режимы создают согласованный игровой опыт с прицелом на фактическое ощущение современных военных действий.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Реально существующие локации</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Мы с гордостью предоставляем вам одни из самых реалистичных уровней в истории жанра FPS. Сражайтесь на улицах Варшавы, Берлина и Москвы. Воспользуйтесь преимуществами городской среды, чтобы удивить вражеские силы и доминировать на поле боя.&nbsp;</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Многогранная кастомизация</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Создайте свой собственный, уникальный боевой набор, соответствующий твоим потребностям и стилю, без привязки к каким-либо классам или ролям. Выбирайте из сотен комбинаций уникальных частей оружия, приспособлений, скинов, камуфляжей и раскрасок. То же самое относится к технике, тактическому снаряжению и униформе. Если это возможно в реальной жизни, значит это возможно и в World War 3 - все очень просто!&nbsp;</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Национальная гордость&nbsp;</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">World War 3 в значительной степени основана на военном реализме, предлагая точные образцы оружия, униформы и экипировки национальных вооруженных сил. Все это должно вдохновить вас приложить максимум усилий для победы и доказать, что именно ваша страна является господствующей на поле боя. Все карты основаны на известных местах из реальной жизни, таких как улицы Варшавы, Берлина и Москвы (в планах значительно больше локаций). И все они воссозданы с непревзойденным вниманием к деталям.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Сильная командная игра</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">World War 3 поддерживает геймплей, ориентированный на командную игру, вознаграждая за желание быть значимой частью отряда, слаженная работа в котором - лучший рецепт для эффективного противостояния. Игрок может принять на себя роль атакующего или обороняющегося и использовать любое снаряжение, подходящее для поддержки собственного стиля игры, – только победа имеет значение.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Броня против Снарядов</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Самая аутентичная система взаимодействия снарядов с броней в жанре FPS на сегодняшний день, достигнутая за годы исследований и разработок при участии военных специалистов. Баллистика, система веса, осознание тела персонажа, физика транспортных средств и обширная система кастомизации - все это оказывает существенное влияние на игровой процесс.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Стратегическая карта войны</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Чтобы показать последствия каждого боя, эффективность игрока вознаграждается ресурсами, которые можно использовать для завоевания или защиты территории. Получайте бонусы через метагейм и меняйте ход сражения! Каждое уничтоженное транспортное средство, каждое убийство, каждая выпущенная пуля, каждое достижение влияют на общую картину, представленную на постоянно развивающейся интерактивной карте войны, в конечном счете охватывающей всю планету.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Развитие с опорой на Сообщество</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">World War 3 разрабатывается геймерами, выросшими на играх жанра FPS. Как независимая студия, мы твердо убеждены в том, что вклад Сообщества имеет решающее значение в создании приятных и запоминающихся игр. Мы хотим пригласить всех вас присоединиться к нам в стремлении сделать World War 3 именно той игрой, которую вы всегда хотели!</span>', 39, 57, 18),
(6, 0, '1', 'Зомби,Хоррор на выживание,Мясо,Хоррор', '1,2,3', '1,4,5,7,8', ' CAPCOM Co., Ltd.', ' CAPCOM Co., Ltd.', '25 янв. 2019', '2019-01-25', 'RESIDENT EVIL 2 / BIOHAZARD RE:2', 1999, 30, 1399, 'Выход Resident Evil 2 состоялся в 1998 году, и теперь одна из самых знаменитых игр всех времен возвращается на современные консоли в совершенно новом облике.', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Выход Resident Evil 2 состоялся в 1998 году, и теперь одна из самых знаменитых игр всех времен возвращается на современные консоли в совершенно новом облике.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Пройдите отдельные кампании за Leon Kennedy и Claire Redfield в новом режиме от третьего лица. Отправляйтесь в кишащий зомби Raccoon City, воссозданный на RE Engine — эксклюзивном движке Capcom. Ужасающие открытия ждут не только новых игроков, но и закаленных поклонников, ведь город наполнен головоломками, ответвлениями сюжета и областями!</span>', 16, 0, 18),
(7, 0, '7,9', 'Стратегия,Пошаговая стратегия,История,4Х', '1', '1,4,5,9,14', ' Firaxis Games, Aspyr (Mac), Aspyr (Linux)', ' 2K, Aspyr (Mac), Aspyr (Linux)', '21 окт. 2016', '2016-10-21', 'Sid Meier’s Civilization® VI', 1999, 0, 0, 'Сыграйте за одного из 20 лидеров – например за Петра Великого, российского императора.', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Изначально созданная легендарным дизайнером Сидом Мейером,&nbsp;</span><i style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Civilization</i><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">&nbsp;представляет собой пошаговую стратегию, в которой игроку предлагается построить империю, способную выдержать испытание временем. Станьте одним из сильных мира сего, основав цивилизацию и возглавив ее в течение многих эпох, начиная с каменного века и заканчивая веком информации. Объявляйте войны, ведите дипломатические переговоры, развивайте культуру и бросьте вызов величайшим лидерам в истории человечества, чтобы построить величайшую цивилизацию из всех, когда-либо известных человечеству.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><i style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Civilization VI</i><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">&nbsp;предлагает множество новых способов взаимодействия с игровым миром: теперь города растут, занимая все больше и больше места на карте, ваши действия влияют на ход научных исследований и культурной жизни цивилизации, а противники преследуют различные цели в зависимости от своих исторических черт в попытках достигнуть один из пяти способов одержать окончательную победу.&nbsp;</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><ul class=\"bb_ul\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 16px; list-style-type: square; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\"><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif; letter-spacing: 0px;\">ОГРОМНЫЕ ИМПЕРИИ:</h2></strong>Ваши владения будут простираться дальше, чем когда-либо. Каждый город занимает несколько клеток, и вы сможете выстроить их так, чтобы извлечь максимальную пользу из окружающей территории.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\"><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif; letter-spacing: 0px;\">АКТИВНЫЕ ИССЛЕДОВАНИЯ:</h2></strong>Ищите усиления, которые помогут развитию вашей цивилизации. Этот процесс можно ускорить, исследуя белые пятна на карте, улучшая окружающие территории и вступая в контакт с новыми культурами.&nbsp;<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\"><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif; letter-spacing: 0px;\">ДИНАМИЧЕСКАЯ ДИПЛОМАТИЯ:</h2></strong>По ходу игры у вас будут появляться новые возможности для взаимодействия с другими цивилизациями, с первых дней человечества, когда конфликты являются неотъемлемой частью повседневной жизни, до военных альянсов и сложных дипломатических переговоров современности.&nbsp;<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\"><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif; letter-spacing: 0px;\">ОБЪЕДИНЕННЫЕ ВОЙСКА:</h2></strong>Благодаря переосмыслению концепции “одна боевая единица на одной клетке”, теперь вы можете прикреплять к обычным войскам отряды поддержки: например, вы сможете обеспечить пехоту противотанковыми средствами или приказать поселенцам сопровождать ваших воинов. Боевые единицы одного типа можно объединять, тем самым формируя из них грозные “войска”.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\"><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif; letter-spacing: 0px;\">УЛУЧШЕННАЯ СЕТЕВАЯ ИГРА:</h2></strong>В дополнение к традиционным режимам сетевой игры, вы сможете помочь или бросить вызов вашим друзьям в большом количестве различных сценариев, многие из которых можно пройти в течение одной игровой сессии.&nbsp;<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\"><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif; letter-spacing: 0px;\">ЦИВИЛИЗАЦИЯ ДЛЯ ВСЕХ:</h2></strong><i style=\"padding: 0px; margin: 0px;\">Civilization VI&nbsp;</i>подарит опытным игрокам возможность сделать свою империю именно такой, какой они хотят ее видеть, и благодаря этому добиться успеха. Новая система обучения поможет новым игрокам ознакомиться с основополагающими идеями жанра и легко окунуться в игру с первых минут.</li></ul>', 1, 0, 16),
(8, 0, '1', 'Выживание,Шутер,Для нескольких игроков', '1', '2,9', ' PUBG Corporation', ' PUBG Corporation', '21 дек. 2017', '2017-12-21', 'PLAYERUNKNOWNS BATTLEGROUNDS', 949, 0, 0, 'PLAYERUNKNOWNS BATTLEGROUNDS - это шутер в котором выигрывает последний оставшийся в живых участник. Летите, исследуйте окрестности, найдите оружие, припасы и станьте единственным выжившим. Это КОРОЛЕВСКАЯ БИТВА!', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">PLAYERUNKNOWNS BATTLEGROUNDS - это шутер в котором выигрывает последний оставшийся в живых участник. Начиная игру ни с чем, вы должны раздобыть оружие и припасы чтобы бороться за первое место и стать последним героем. Напряженная битва в этой реалистичной игре происходит на огромном 8х8 километровом пост-советском черноморском острове Эрангель. PLAYERUNKNOWNS BATTLEGROUNDS разрабатывается на Unreal Engine 4 с постоянной помощью и поддержкой от наших игроков.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">PLAYERUNKNOWN, также известный как Брендан Грин, является пионером жанра Battle Royale. Как создатель игрового режима Battle Royale в серии ARMA и H1Z1: King of the Kill, Грин разрабатывает игру совместно с командой ветеранов в Bluehole, чтобы создать самую разнообразную и взрывоопасную версию Battle Royale на сегодняшний день.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Это не просто игра. Это Королевская Битва!</span>', 3, 0, 18),
(9, 0, '1,2,3', 'Экшен,Охота,Открытый мир,Кооператив', '1', '1,4,5,6,7,9,11,15', ' CAPCOM Co., Ltd.', ' CAPCOM Co., Ltd.', '9 авг. 2018', '2018-08-09', 'MONSTER HUNTER: WORLD', 1999, 0, 0, 'Добро пожаловать в новый мир! Отправляйтесь на незабываемую охоту в продолжении серии Monster Hunter: World, используйте любые подручные средства, выслеживайте чудовищ в новом мире, полном сюрпризов и ярких впечатлений.', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Добро пожаловать в новый мир! Почувствуйте себя охотником, убивая свирепых чудовищ в кипящей жизнью экосистеме, где любой камень и любая букашка могут дать преимущество в бою. Охотьтесь в одиночку или в компании до трех человек, создавайте новое снаряжение из сырья, добытого с поверженных врагов, и бросайте вызов самым крупным и опасным тварям!</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">ВВЕДЕНИЕ</h2><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Общая информация</h2><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Сражайтесь с гигантскими чудовищами в живописных локациях.</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Ваша задача как охотника — выслеживать чудовищ в их родной среде обитания.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Побеждайте их и добывайте сырье, необходимое для создания мощного оружия и крепких доспехов, которые пригодятся в бою с еще более опасными созданиями.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Отправляйтесь на незабываемую охоту в продолжении серии Monster Hunter: World, используйте любые подручные средства и выслеживайте чудовищ в новом мире, полном сюрпризов и ярких впечатлений.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/582010/extras/MHW_introduction.jpg?t=1550022250\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">История</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Раз в десять лет древние драконы пересекают море, чтобы попасть в Новый свет.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Для того, чтобы изучить природу этого загадочного явления, известного как перелет Древних, гильдия снаряжает в Новый свет полномасштабную исследовательскую экспедицию.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">На поиски гигантского древнего дракона, известного как Дзора Магдарос, экспедиция отправляет Пятый флот, и один из охотников оказывается на пороге приключения, о котором раньше не мог и мечтать.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/582010/extras/MHW_story.jpg?t=1550022250\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">ЭКОСИСТЕМА</h2><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Мир, в котором кипит жизнь</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Природа Нового света изобилует самыми разными формами жизни, и каждая вылазка приносит удивительные открытия.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">ОХОТА</h2><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Широкий выбор оружия и незаменимый напарник</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Правильное снаряжение поможет вам занять достойное место в Новом свете.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Арсенал охотника</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">В вашем распоряжении четырнадцать видов оружия, каждое из которых отличается уникальными свойствами и атаками.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Одни охотники учатся обращаться с несколькими видами оружия, другие же предпочитают оттачивать мастерство с каким-то одним.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/582010/extras/MHW_hunters.jpg?t=1550022250\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Светлячки</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Новый свет испещрен следами чудовищ вроде отпечатков лап и рубцов.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Светлячки запоминают запах чудовища и ведут вас к ближайшим следам.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Продолжайте искать следы, и светлячки дадут вам еще больше информации.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/582010/extras/MHW_shirubemushi_s.jpg?t=1550022250\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Самострел</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Самострел — незаменимое орудие любого охотника, позволяющее вооружиться камнями и орехами, которые можно найти повсюду.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">У самострела множество применений от отвлекающих маневров до прокладывания коротких троп, а его использование открывает новые оригинальные способы охоты.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/582010/extras/MHW_slinger_s.jpg?t=1550022250\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Специальные инструменты</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Специальные инструменты временно активируют мощные эффекты, причем носить с собой можно до двух инструментов одновременно.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Использовать их очень просто: достаточно выбрать и активировать их, как любой другой предмет.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/582010/extras/MHW_specialTool_s.jpg?t=1550022250\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Палико</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Палико — верные помощники охотников, обладающие целым рядом атакующих, защитных и восстанавливающих способностей.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Вступить в Пятый флот — большая честь для палико, которые считаются полноправными членами экспедиции наравне с другими охотниками.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/582010/extras/MHW_otomo.jpg?t=1550022250\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\">', 65, 0, 16),
(10, 0, '1', 'Открытый мир,Экшен,Для нескольких игроков', '1,2,3', '1,4,8,9', ' Rockstar North', ' Rockstar Games', '14 апр. 2015', '2015-04-14', 'Grand Theft Auto V', 1499, 0, 0, 'Лос-Сантос – город ярких огней, долгих ночей и грязных секретов, в чем вы убедитесь с выходом обновления «Ночная жизнь» для GTA Online. Вечеринка начинается.', '<strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Вместе с легендарным Тони Принсом вы сможете открыть ночной клуб и пригласить туда диджеев с мировым именем: Solomun, Tale Of Us, Dixon и The Black Madonna. Клуб послужит прикрытием для вашего бизнеса, и из него вы будете проворачивать невероятные сделки.</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Когда молодой уличный жулик, отставной грабитель банков и опасный для общества психопат оказываются втянуты в разборки с самыми пугающими и сумасшедшими представителями криминального мира, правительства США и индустрии развлечений, им приходится выполнить серию рискованных налетов, чтобы выжить в безжалостном городе, где они не могут доверять никому – и в первую очередь друг другу.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Grand Theft Auto V для PC позволяет игрокам исследовать знаменитый мир Лос-Сантоса и округа Блэйн в разрешении до 4k и выше с частотой 60 кадров в секунду.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Игра предлагает множество уникальных для компьютера настроек, в том числе более 25 отдельных параметров для настройки качества текстур, шейдеров, тесселяции, сглаживания и не только, а также поддержку и настройку управления с помощью клавиатуры и мыши. Из дополнительных возможностей можно отметить ползунок населенности города, управляющий плотностью потока машин и пешеходов, поддержку двух и трех мониторов, поддержку 3D и функцию «plug-and-play» для геймпадов.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">А еще Grand Theft Auto V для PC включает Grand Theft Auto Online с поддержкой 30 игроков и двух зрителей. В состав Grand Theft Auto Online для PC входят все ранее выпущенные улучшения игрового процесса и созданные Rockstar материалы, в том числе недавно вышедшее обновление «Ограбления» и режим «Противоборство», которые доступны с первого дня.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">В PC-версии Grand Theft Auto V и Grand Theft Auto Online представлен режим от первого лица, позволяющий еще ближе рассмотреть невероятно достоверный мир Лос-Сантоса и округа Блэйн.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">В Grand Theft Auto V для PC впервые появляется редактор&nbsp;Rockstar – набор мощных творческих инструментов для быстрой и удобной записи, монтажа и публикации видеороликов, снятых в Grand Theft Auto V и Grand Theft Auto Online. Доступный в редакторе Rockstar режим режиссера позволяет игрокам создавать свои сцены с участием известных персонажей из сюжетного режима, пешеходов и даже животных. Помимо развитой системы управления камерой, режимов монтажа, в том числе ускоренного и замедленного воспроизведения, и ряда фильтров камеры, игроки могут добавлять музыку из фонотеки радиостанций GTA V и динамически изменять интенсивность музыкального воспроизведения игры. Готовые видеоролики можно легко загрузить прямо из редактора Rockstar в YouTube или Rockstar Games Social Club.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Авторы саундтрека игры, The Alchemist и Oh No, вернулись в качестве ведущих новой радиостанции, которая называется The Lab FM и транслирует новую и эксклюзивную музыку этих авторов, созданную по мотивам оригинального саундтрека игры. Гостями станции бывают Earl Sweatshirt, Freddie Gibbs, Little Dragon, Killer Mike, Sam Herring из Future Islands и другие музыканты. Кроме того, игроки могут исследовать Лос-Сантос и округ Блэйн под выбранную ими музыку – это возможно благодаря новой радиостанции Self Radio, проигрывающей собранные игроком саундтреки.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Для доступа к этим эксклюзивным материалам необходимо зарегистрироваться в Social Club. Подробности можно прочитать на сайте&nbsp;</span><a href=\"https://steamcommunity.com/linkfilter/?url=http://rockstargames.com/V/bonuscontent\" target=\"_blank\" rel=\"noopener\" style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\">http://rockstargames.com/V/bonuscontent</a><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">.</span>', 1, 0, 18);
INSERT INTO `games` (`id_game`, `parent_game`, `category_id`, `tags`, `platform_id`, `users_cat_id`, `Developer`, `Publisher`, `Date`, `game_date`, `name_game`, `price_game`, `discount_game`, `discount_price_game`, `description_game`, `desc_game`, `cnt_view`, `cnt_sale`, `pegi_rating`) VALUES
(11, 0, '1', 'Хоррор,Хоррор на выживание,Кооператив', '1', '2,3,4,5,7,8,9,11', ' Behaviour Digital Inc.', ' Behaviour Digital Inc.', '14 июн. 2016', '2016-06-14', 'Dead by Daylight', 499, 0, 0, 'Dead by Daylight - это многопользовательская игра в жанре ужасов в режиме (4 против 1), где один игрок берет на себя роль жестокого Убийцы, а четыре других игрока являются Выжившими, пытающимися сбежать от убийцы.', '<strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Смерть — это не выход</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Dead by Daylight - это многопользовательская игра в жанре ужасов в режиме (4 против 1), где один игрок берет на себя роль жестокого Убийцы, а четыре других игрока являются Выжившими, пытающимися сбежать от убийцы.&nbsp;</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Выжившие играют от третьего лица и имеют преимущество в ситуационной осведомленности. Убийца играет от первого лица и больше сосредоточен на своей добыче.&nbsp;</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Цель Выживших в каждой игре - постараться, чтобы Убийца не поймал, и сбежать с места убийств – это звучит проще, чем на самом деле, особенно когда обстановка меняется в каждой игре.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Дополнительная информация об игре доступна на&nbsp;</span><a href=\"https://steamcommunity.com/linkfilter/?url=http://www.deadbydaylight.com\" target=\"_blank\" rel=\"noopener\" style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\">http://www.deadbydaylight.com</a><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Основные характеристики</h2><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">•	</span><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Выжить вместе... или нет.</strong><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">&nbsp;- Выжившие могут либо сотрудничать с другими, либо быть эгоистичными. Ваш шанс на выживание будет различаться в зависимости от того, работаете ли вы вместе как команда, или же ходите в одиночку. Сможете ли вы обхитрить Убийцу и сбежать с места убийств?&nbsp;</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">•	</span><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Где Я?</strong><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">&nbsp;- Каждый уровень сгенерирован случайным образом, так что вы никогда не знаете, чего ожидать. Случайные точки вашего появления означают, что вы никогда не будете чувствовать себя в безопасности, потому что мир и его опасности измененяются в каждой игре.&nbsp;</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">•	</span><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Праздник для Убийцы</strong><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">&nbsp;- в Dead by Daylight присутствует что-то со всех уголков мира ужасов. В роли Убийцы вы сможете сыграть кем угодно, от мощного мясника до жутких паранормальных сущностей. Ознакомьтесь со своим местом убийства и отточите уникальные навыки каждого Убийцы, чтобы уметь охотиться, ловить и жертвовать своей добычей.&nbsp;</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">•	</span><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Глубже и глубже</strong><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">&nbsp;- Каждый Убийца и Выживший имеют свою собственную глубокую систему развития и много предметов для разблокирования, которые могут быть настроены в соответствии с вашей собственной стратегией. Опыт, навыки и понимание окружающей среды являются ключевыми элементами для того, чтобы охотиться или перехитрить Убийцу.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">•	</span><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Реальные люди, реальный страх</strong><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">&nbsp;- Случайно сгенерированные уровни - это настоящая человеческая реакция на чистый ужас, создающая каждую игровую сессию с неожиданным сценарием. Вы никогда не сможете сказать, что случится. Атмосфера, музыка и прохладная окружающая среда соединяются в ужасающий опыт. С достаточным количеством времени вы даже сможете обнаружить, что скрывается в тумане.</span>', 1, 0, 18),
(12, 0, '1,2', 'Открытый мир,Экшен,Ролевая игра,История', '1,2,3', '1,4,5,6,13', ' Ubisoft Quebec, Ubisoft Montreal, Ubisoft Buchare', ' Ubisoft', '5 окт. 2018', '2018-10-05', 'Assassins Creed® Odyssey', 1999, 0, 0, 'Определите свою судьбу в \"Assassins Creed® Одиссея\". Пройдите путь от изгоя до живой легенды: отправьтесь в далекое странствие, чтобы раскрыть тайны своего прошлого и изменить будущее Древней Греции.', '<img src=\"https://steamcdn-a.akamaihd.net/steam/apps/812140/extras/600x200_Verbatim-Steam_Rus.jpg?t=1540836192\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Определите свою судьбу в \"Assassins Creed® Одиссея\".</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Пройдите путь от изгоя до живой легенды: отправьтесь в далекое странствие, чтобы раскрыть тайны своего прошлого и изменить будущее Древней Греции. Вас ждет совершенно новая боевая система и морские путешествия в огромном бесшовном мире, который постоянно развивается и реагирует на каждое ваше действие.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">МАГИЯ ВЗГЛЯДА</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Испытайте игровое взаимодействие в совершенно новом свете с Tobii Eye Tracking – системой слежения за направлением взгляда. Функция Extended View открывает перед вами более широкую перспективу на окружающую среду, а Dynamic Light и Sun Effects переносят вашего персонажа по песчаным дюнам в соответствии с направлением вашего взгляда. Прицеливание и удержание целей становятся более естественными действиями, когда вы осуществляете их взглядом. Пусть ваше зрение расширит игровой процесс.&nbsp;</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Пожалуйста ознакомьтесь со списком совместимых устройств на сайте Tobii&nbsp;</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">-----</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Внимание:</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Возможности слежения за взглядом доступны с Tobii Eye Tracking.</span>', 3, 0, 18),
(13, 0, '2,5', 'Ролевая игра,Пошаговая,Глубокий сюжет', '1', '1,2,3,4,5,7,8,9,10,11,12,13,14,16', ' Larian Studios', ' Larian Studios', '14 сен. 2017', '2017-09-14', 'Divinity: Original Sin 2 - Definitive Edition', 799, 35, 519, 'Долгожданное продолжение знаменитой ролевой игры. Соберите отряд. Освойте мощную боевую систему. Пригласите с собой до трех друзей, но помните, что только один из вас сможет стать богом.', '<img src=\"https://steamcdn-a.akamaihd.net/steam/apps/435150/extras/Steam-Info-Banner.jpg?t=1550246678\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Божественный мертв. Пустота надвигается. А внутри вас просыпаются доселе неведомые силы. Битва за божественность началась. Тщательно выбирайте, кому верить: в эти непростые времена тьма может скрываться в каждом сердце.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/435150/extras/SteamGif-Titlev3,2_GyP-(RU).png?t=1550246678\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Кем вы хотите стать?</h2><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Эльфом, поедающим плоть собратьев? Царственным ящером? Мертвецом, восставшим из могилы? Окружающий мир будет реагировать на вас в зависимости от вашего выбора.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Пришло время нового бога!</h2><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Собирайте отряд и развивайте отношения со спутниками. Расправляйтесь с врагами в продуманных тактических пошаговых сражениях. Пользуйтесь ландшафтом как оружием; используйте высоту, чтобы получить преимущество, и загоняйте врагов в ловушки.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Станьте богом, в котором так отчаянно нуждается Ривеллон.</h2><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Исследуйте обширный мир Ривеллона в одиночку или вместе с друзьями. Играть могут до 4 игроков одновременно, присоединяясь к игре и выходя из нее в любой момент. Направляйтесь куда угодно, отпустите на волю свое воображение и изучайте бесчисленные возможности взаимодействия с игровым миром. А после приключений в Ривеллоне вас ждут новый PvP-режим и режим гейм-мастера!</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/435150/extras/SteamGif-Titlev3,1_BecomeDivine-(RU).png?t=1550246678\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><ul class=\"bb_ul\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 16px; list-style-type: square; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><li style=\"padding: 0px; margin: 0px 0px 8px;\">Выберите расу и биографию на свой вкус. Вы можете играть за любого из 6 уникальных персонажей – каждого со своими историей и задачами – или же создать собственного героя: человека, ящера, эльфа, гнома или нежить. Но помните: у каждого выбора есть последствия.<br style=\"padding: 0px; margin: 0px;\"><br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Неограниченная свобода для странствий и экспериментов – идите куда угодно, говорите с кем угодно, используйте что угодно! Вы можете убить любого неигрового персонажа, не жертвуя при этом прохождением, можете говорить со всеми животными. Даже у призраков есть свои секреты...<br style=\"padding: 0px; margin: 0px;\"><br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Новое поколение пошаговых боев: расправляйтесь с врагами, используя силы стихий и их сочетания, а также не забывайте использовать окружение. Вам доступны более 200 навыков 12 разных школ. Но будьте осторожны: игровой ИИ 2.0 неимоверно хитер и находчив!<br style=\"padding: 0px; margin: 0px;\"><br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Совместная игра до 4 игроков по сети или в режиме разделения экрана: играйте с друзьями по сети или на разделенном экране с полной поддержкой геймпадов.<br style=\"padding: 0px; margin: 0px;\"><br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Режим гейм-мастера: дайте волю воображению и творите собственные приключения в режиме гейм-мастера. Загружайте любительские кампании и моды через Steam Workshop.<br style=\"padding: 0px; margin: 0px;\"><br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Поддержка 4K:</strong>&nbsp;небывалые впечатления 4K открывают для ролевых игр новую эпоху!<br style=\"padding: 0px; margin: 0px;\"><br style=\"padding: 0px; margin: 0px;\"><a href=\"https://steamcommunity.com/linkfilter/?url=https://www.nvidia.com/en-us/geforce/products/10series/ultimate-4k/\" target=\"_blank\" rel=\"noopener\" style=\"padding: 0px; margin: 0px;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/435150/extras/4K_ULTIMATE_Logo_vert_BLKBGRD_V2_150.png?t=1550246678\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial;\"></a></li></ul>', 5, 1, 18),
(14, 0, '1,6,8', 'Для нескольких игроков,Гонки,Футбол,Экшен', '1,2,3', '1,4,5,7,8,9,11,14', ' Psyonix, Inc.', ' Psyonix, Inc.', '7 июл. 2015', '2015-07-07', 'Rocket League', 419, 40, 251, 'Встречайте долгожданное продолжение Supersonic Acrobatic Rocket-Powered Battle-Cars — всеми любимого основанного на физике сочетания футбола и гонок!', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Встречайте долгожданное продолжение&nbsp;</span><i style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Supersonic Acrobatic Rocket-Powered Battle-Cars</i><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">&nbsp;— всеми любимого основанного на физике сочетания футбола и гонок!</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">В футуристической спортивной игре&nbsp;</span><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Rocket League®</strong><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">&nbsp;игроки могут управлять мощными болидами, разрушать все вокруг ради наград и мастерски избегать столкновений на самых разнообразных аренах.&nbsp;</span><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Rocket League®</strong><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">&nbsp;реалистично передает взаимодействия в игре за счет продвинутой физической системы и реализации законов массы и импульса, что дает игрокам возможность интуитивного управления в этом невероятно энергичном варианте футбола.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Особенности</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><ul class=\"bb_ul\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 16px; list-style-type: square; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><li style=\"padding: 0px; margin: 0px 0px 8px;\">Новый сезонный режим, где можно играть в одиночку.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Огромный выбор предметов для тюнинга — свыше 10 миллионов сочетаний.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Возможность открывать предметы и болиды, а также статистика игр, списки лидеров и многое другое.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Увлекательные матчи вплоть до 8 игроков, которые можно настроить по своему желанию.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Потрясающий режим разделенного экрана, позволяющих играть сразу 2, 3 и даже 4 игрокам, как друг с другом, так и против других игроков в сети.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Повторы высокого качества, которые позволяют вам ускорять и перематывать запись, а также видеть происходящее из любого угла арены.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Соревновательные кроссплатформенные матчи для пользователей PlayStation®4, Xbox One и Nintendo Switch.</li></ul><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><i style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\">ПРИМЕЧАНИЕ: Rocket League® предоставляет возможность многопользовательской игры только по разрешению поставщиков онлайн-сервисов, поэтому доступ к серверам отсутствует в Иране, Китае, Крыму, Северной Корее, Сирии, Судане и на Кубе. Приносим свои извинения пользователям этих регионов.</i><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Бета-версии для SteamOS и Mac</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">8 сентября 2016 были выпущены бета-версии&nbsp;</span><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">Rocket League®</strong><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">&nbsp;для SteamOS и Mac. SteamOS — единственный «официально поддерживаемый клиент Linux. Однако другие платформы Linux тоже могут быть совместимы. Аналогичным образом версия для Mac может не работать на старых системах с встроенной поддержкой видео, поэтому настоятельно рекомендуется использовать отдельный графический процессор (проблем не должно возникнуть на Mac 2013-го года и позднее). Системные требования для Mac:</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><ul class=\"bb_ul\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 16px; list-style-type: square; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><li style=\"padding: 0px; margin: 0px 0px 8px;\">ОС: MacOS X 10.8.5;<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">процессор: Intel Core i5 2.4 ГГц;<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">оперативная память: 8 ГБ ОЗУ;<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">видеокарта: OpenGL 4.1 — ATI Radeon HD 5670, NVIDIA GeForce GT 640M, Intel HD Graphics 4000 или Iris Pro Graphics.</li></ul><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Не забывайте проверять наличие обновлений бета-версий для SteamOS и Mac. Ниже указаны самые частые неполадки обеих версий в обновлении от 1 июня 2017.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><ul class=\"bb_ul\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 16px; list-style-type: square; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><li style=\"padding: 0px; margin: 0px 0px 8px;\">Страница покупки дополнений в торговом зале не отображается в режиме Big Picture. Эта неполадка связана с клиентом Steam, и Valve устранит ее в ближайшем обновлении.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Игра неожиданно прекращает работу при выходе из матча в главное меню.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">В Городском центре неправильно отображаются статуи.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">На экране периодически возникают нечеткие элементы.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Для работы геймпада Xbox 360 требуются драйверы от третьих лиц (только Mac).<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\">Контроллер Steam не имеет поддержки по умолчанию (только Mac).</li></ul><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Условия использования Rocket League® можно прочитать на сайте:&nbsp;</span><a href=\"https://steamcommunity.com/linkfilter/?url=http://www.rocketleaguegame.com/tos\" target=\"_blank\" rel=\"noopener\" style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\">www.rocketleaguegame.com/tos</a>', 7, 20, 16),
(15, 0, '5,6,9', 'Ранний доступ,Выживание,Крафтинг,Экшен', '1', '1,2,3,4,7', 'Redbeet Interactive', 'Axolot Games', '23 мая. 2018', '2018-05-23', 'Raft', 419, 0, 0, 'Raft throws you and your friends into an epic oceanic adventure! Alone or together, players battle to survive a perilous voyage across a vast sea! Gather debris, scavenge reefs and build your own floating home, but be wary of the man-eating sharks!', '<strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\">By yourself or with friends, your mission is to survive an epic oceanic adventure across<br style=\"padding: 0px; margin: 0px;\">a perilous sea! Gather debris to survive, expand your raft and be wary of the dangers of<br style=\"padding: 0px; margin: 0px;\">the ocean!</strong><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Trapped on a small raft with nothing but a hook made of old plastic, players awake on a vast,</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">blue ocean totally alone and with no land in sight! With a dry throat and an empty stomach,</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">survival will not be easy!</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Raft throws you and your friends into an epic adventure out on the big open sea, with the</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">objective to stay alive, gather resources and build yourself a floating home worthy of</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">survival.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Resources are tough to come by at sea: Players will have to make sure to catch whatever debris floats by using their trusty hook and when possible, scavenge the reefs beneath the waves and the islands above.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">However, thirst and hunger is not the only danger in the ocean… watch out for the man-</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">eating shark determined to end your voyage!</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Features:</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">● Multiplayer! Survive by yourself or with friends in online co-op!</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">● Hook! Use your hook to catch debris floating by.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">● Craft! Build survival equipment, weapons, crop plots and more to help you stay alive!</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">● Build! Expand your raft from a simple wreckage to a buoyant mansion.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">● Research! Learn new things to craft in the research table.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">● Navigate! Sail your raft towards new places!</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">● Dive! Drop anchor and explore the depths for more resources.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">● Fight! Defend your raft from the dangers of the ocean.</span>', 1, 19, 16),
(16, 0, '1', 'Кооператив,Мясо,От первого лица,Экшен', '1,2,3', '1,3,4,5,6,11', ' Fatshark', ' Fatshark', '8 мар. 2018', '2018-03-08', 'Warhammer: Vermintide 2', 515, 60, 206, 'Продолжение одобренной критиками игры Vermintide — это революционная экшн-игра, что поражает своей картинкой и выводит на новый уровень кооперативные игры от первого лица. Скорее вступайте в сражение!', '<img src=\"https://steamcdn-a.akamaihd.net/steam/apps/552500/extras/about_the_game.png?t=1550482930\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\">Игра Vermintide вернулась — более мрачная, кровавая и напряженная, чем когда бы то ни было!</span><br style=\"padding: 0px; margin: 0px; color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\">Warhammer: Vermintide 2 — это продолжение одобренной критиками игры Vermintide. Настало время вновь погрузиться в свирепое кооперативное рубилово от первого лица, где вас ждут неистовые первоклассные рукопашные схватки в апокалиптическом мире Конца Времен — истерзанном войной мире варгейма Warhammer Fantasy Battles.&nbsp;</span><br style=\"padding: 0px; margin: 0px; color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\">Пять наших героев вернулись, чтобы сразиться с еще большей угрозой — объединенными силами злобной и разрушительной армии Хаоса и кишащего полчища скавенов. Приготовьтесь столкнуться с такими испытаниями, которых еще не встречали, отчаянно пытаясь выжить в бесконечной резне. Выбирайте один из 15 путей развития, карабкайтесь по деревьям талантов, подстраивайте арсенал пой свой стиль игры, пробивайтесь через множество потрясающих уровней и испытайте себя в нашей новой системе героических подвигов. Единственное, что стоит меж полным крахом и победой, — это вы и ваши союзники. Падете вы — падет Империя.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; color: rgb(47, 137, 188); background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"padding: 0px; margin: 0px;\">ОСНОВНЫЕ ОСОБЕННОСТИ</span></h2><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; color: rgb(47, 137, 188); background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Беспощадная кооперативная схватка для 4 игроков</h2><span style=\"color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\">Объединенные силы Хаоса и скавенов неистовы и безжалостны, и чтобы выбраться живыми, понадобится слаженно работать в команде.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; color: rgb(47, 137, 188); background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">5 героев и 15 путей развития</h2><span style=\"color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\">Выбирайте один из 15 уникальных путей развития, каждый из которых предусматривает собственные облики, способности, таланты и оружие.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; color: rgb(47, 137, 188); background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Порождения Хаоса и скавены действуют сообща</h2><span style=\"color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\">Приготовьтесь встретиться с угрозой небывалого размаха, ведь армии Хаоса и скавенов заключили темный союз, чтобы погрузить мир в гибель и упадок. Наши герои столкнутся с полчищем вражеских бойцов всевозможных видов и размеров.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; color: rgb(47, 137, 188); background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Система героических подвигов</h2><span style=\"color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\">Проходите уникальные сценарии и напряженные испытания с нашей новой системой героических подвигов — одноразовых заданий, что кардинально меняют состав вражеской армии, настройки уровня, использование оружия и цели миссии.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; color: rgb(47, 137, 188); background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Дерево талантов и развитие</h2><span style=\"color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\">Повышайте уровень своих героев и карабкайтесь по дереву талантов выбранного пути развития, открывая новые способности и попутно получая доступ к мощному снаряжению.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; color: rgb(47, 137, 188); background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Приключение продолжается</h2><span style=\"color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\">Исследуйте большое разнообразие захватывающих уровней внутри и вокруг Хельмгарта, города-крепости, защищающего бретонскую границу Империи.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; color: rgb(47, 137, 188); background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Новая улучшенная система добычи</h2><span style=\"color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\">В конце каждой миссии вы получаете в награду соответствующую добычу: оружие, одноразовые задания, обереги, головные уборы, материалы для улучшения и другое — все, что подходит для выбранного вами пути развития.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; color: rgb(47, 137, 188); background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Сражайтесь с несметными полчищами врагов</h2><span style=\"color: rgb(172, 178, 184); font-family: &quot;Motiva Sans&quot;, sans-serif;\">Вступая в противостояние с бесчисленной ордой скавенов, усиленной свирепой мощью армии Хаоса, герои должны сплотиться и найти золотую середину между здравой тактикой и яростью, чтобы преодолеть свое невыгодное положение.</span>', 25, 6, 18),
(17, 0, '2,3', 'Ролевая игра,Открытый мир,MMORPG,MMO', '1', '5,6', ' Zenimax Online Studios', ' Bethesda Softworks', '4 апр. 2014', '2014-04-04', 'The Elder Scrolls Online', 1999, 0, 0, 'Join over 10 million players in the award-winning online multiplayer RPG and experience limitless adventure in a persistent Elder Scrolls world. Battle, craft, steal, or explore, and combine different types of equipment and abilities to create your own style of play. No game subscription required.', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Experience an ever-expanding story across all of Tamriel in The Elder Scrolls Online, an award-winning online RPG. Explore a rich, living world with friends or embark upon a solo adventure. Enjoy complete control over how your character looks and plays, from the weapons you wield to the skills you learn – the choices you make will shape your destiny. Welcome to a world without limits.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">PLAY THE WAY YOU LIKE</h2><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Battle, craft, steal, siege, or explore, and combine different types of armor, weapons, and abilities to create your own style of play. The choice is yours to make in a persistent, ever-growing Elder Scrolls world.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">TELL YOUR OWN STORY</h2><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Discover the secrets of Tamriel as you set off to regain your lost soul and save the world from Oblivion. Experience any story in any part of the world, in whichever order you choose – with others or alone.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">A MULTIPLAYER RPG</h2><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Complete quests with friends, join fellow adventurers to explore dangerous, monster-filled dungeons, or take part in epic PvP battles with hundreds of other players.</span>', 7, 7, 18),
(18, 0, '1,7,9', 'Симулятор,Военные действия,Реализм', '1', '1,2,9,10,3,11,12,4,5,13,14,6,15,16', ' Bohemia Interactive', ' Bohemia Interactive', '12 сен. 2013', '2013-09-12', 'Arma 3', 1499, 0, 0, 'Испытайте вкус боевых действий в массовой военной игре. C более чем 20 видами боевой техники и 40 видами оружия, а также с безграничными возможностями создания контента, это лучшая военная игра для ПК. Аутентичная, разнообразная, открытая – Arma 3.', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Испытайте настоящий вкус боевых действий в массовой военной \"песочнице\". С обширным многообразием контента для одиночной и многопользовательской игры, с более чем 20 видами боевой техники и 40 видами оружия, а также с безграничными возможностями для создания контента, это лучшая военная игра для ПК. Аутентичная, разнообразная, открытая - Arma 3 отправляет вас на войну.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><strong style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif; font-weight: bold;\"></strong><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Основные характеристики Arma 3</h2><ul class=\"bb_ul\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 16px; list-style-type: square; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Алтис и Стратис</strong><br style=\"padding: 0px; margin: 0px;\">Разгромите противника на детализированном поле боя в открытом мире, занимающем более 290 км² островной территории в Средиземном море. От масштабных городов до покатых холмов - пересекаете ли вы пыльные равнины в танке, летите ли на транспортном вертолете над густым лесом или ведете бой в холмистой местности - острова Алтис и Стратис являются динамическими мирами, подходящими для ведения самых разнообразных боевых действий в игре.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Оружие и боевая техника</strong><br style=\"padding: 0px; margin: 0px;\">Окунитесь в сражение в качестве пехотинца, управляйте бронированной техникой или взмойте под небеса на вертолете или истребителе. Проводите комбинированные атаки по воздуху, на суше и на море, располагая более чем 20 видами боевой техники, более 40 видами оружия, настраиваемым снаряжением с приспособлениями для ближнего и дальнего боя, а также различными типами экипировки под ваши потребности на поле боя. С богатым арсеналом, предоставляемым в ваше распоряжение, Arma 3 вводит вас в мир тактических возможностей.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Одиночная игра</strong><br style=\"padding: 0px; margin: 0px;\">Следуйте перипетиям нелегкой службы капрала Бена Кэрри, волею судеб втянутого в вооруженный конфликт на Средиземном море, проходя три эпизода одной кампании: Выжить, Приспособиться, Победить. Погрузитесь в разнообразный геймплей Arma 3, проходя специально созданные показательные сценарии. Выполняйте учебные стрельбы, чтобы оттачивать свои стрелковые и прочие боевые навыки, и завершите свою тренировку в Arma 3 Bootcamp, воспользовавшись учебными материалами для одиночной и многопользовательской игры и специальными тренировками в виртуальной среде.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Многопользовательская игра</strong><br style=\"padding: 0px; margin: 0px;\">Сражайтесь в режиме онлайн в массовой военной \"песочнице\", коей является Arma 3. Сформируйте группу и объединитесь против своего врага в многопользовательских сценариях по защите и захвату. Или окунитесь в один из многих популярных неофициальных игровых режимов, разработанных сообществом Arma 3. Опробуйте новый тип многопользовательской игры в Arma 3 Zeus, где Мастера Игры могут влиять на сражение других игроков в режиме реального времени.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Создание контента</strong><br style=\"padding: 0px; margin: 0px;\">Начните сами творить с помощью интуитивно понятно редактора сценариев Arma 3 и мощных инструментов для создания модов. Наслаждайтесь платформой, наполненной контетом, созданным игроками, начиная от оружия и техники с измененными параметрами и заканчивая сценариями для одиночной игры и совершенно новыми режимами многопользовательской игры. Делитесь контентом в Arma 3 Steam Workshop и устанавливайте контент, созданный другими игроками, по щелчку мыши.<br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Усовершенствованный движок</strong><br style=\"padding: 0px; margin: 0px;\">Наслаждайтесь новыми плавными анимациями на поле боя; почувствуйте разрушительную мощь сражений с улучшенным звуковым движком, новым Ragdoll-моделированием и боевой техникой с поддержкой физики PhysX™. Начиненный передовыми инновациями модифицируемый движок Real Virtuality™ 4 наделяет игру нового поколения серии Arma еще более потрясающей графикой, лучшим моделированием и обширнейшими игровыми пространствами.</li></ul>', 5, 6, 18),
(19, 0, '1,9', 'Полёты,Экшен,Шлубокий сюжет,Аркада', '1', '1,2,4,5,7,8', ' BANDAI NAMCO Studios', ' BANDAI NAMCO Entertainment', '1 фев. 2019', '2019-02-01', 'ACE COMBAT 7: SKIES UNKNOWN', 1999, 0, 0, 'Станьте летчиком-асом, покорите фотореалистичные небеса и сбивайте противников в напряженных воздушных боях! Таких беспощадных схваток между пилотами вы еще не видели.', '<img src=\"https://steamcdn-a.akamaihd.net/steam/apps/502500/extras/GIF-AC7-4.png?t=1548984914\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Купите ACE COMBAT™ 7: SKIES UNKNOWN и получите в подарок дополнение F-104C: Avril.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Станьте летчиком-асом и сбивайте противников в реалистичных воздушных боях! Таких перестрелок между пилотами вы еще не видели.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Погода влияет на самолет и сказывается на управлении. Вас ждут легендарные сражения!</span>', 26, 0, 12);
INSERT INTO `games` (`id_game`, `parent_game`, `category_id`, `tags`, `platform_id`, `users_cat_id`, `Developer`, `Publisher`, `Date`, `game_date`, `name_game`, `price_game`, `discount_game`, `discount_price_game`, `description_game`, `desc_game`, `cnt_view`, `cnt_sale`, `pegi_rating`) VALUES
(22, 0, '1,2', 'Шутер от первого лица,Кооператив,Ролевая игра', '1,2,3', '1,4,5,7,8,11', ' Gearbox Software, Aspyr (Mac), Aspyr (Linux)', ' 2K, Aspyr (Mac), Aspyr (Linux)', '20 сен. 2012', '2012-09-20', 'Borderlands 2', 999, 75, 250, 'Дополнение Ultimate Vault Hunter’s Upgrade позволит вам выжать из Borderlands 2 максимум.', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Наступает новая пора в духе «стреляй-собирай»! В команде с тремя Охотниками за Хранилищем встретьтесь лицом к лицу с целым миром тварей, психов и злым гением — Красавчиком Джеком. Заводите друзей, снаряжайте их пушками из гигантского арсенала и отправляйтесь с напарниками сражаться плечом к плечу в поисках мести и искупления грехов на неизведанных еще территориях Пандоры.</span><h2 class=\"bb_tag\" style=\"padding: 2px 0px 0px; margin: 18px 0px 0px; line-height: 26px; font-size: 15px; background-image: none; background-repeat: no-repeat; background-position: left bottom; font-family: &quot;Motiva Sans&quot;, sans-serif;\">Ключевые особенности:</h2><ul class=\"bb_ul\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 16px; list-style-type: square; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Новые лица:</strong>&nbsp;наши герои теперь — Siren, Commando, Gunzerker и Assassin. Испытайте в деле бойца нового класса под названием «Шизострел» (Gunzerker). Этот здоровяк-коротышка так силен, что легко управляется с двумя любыми пушками разом. Хотите поливать врага свинцом из пары тяжелых пулеметов? Нет проблем! А может, вам больше нравятся два гранатомета? Запросто! Две снайперки? Вообще не вопрос! Ваша тактика плюс огневая мощь Шизострела — и у врага нет шансов уцелеть!<br style=\"padding: 0px; margin: 0px;\"><br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Динамичная сетевая и онлайн-игра:</strong>&nbsp;развлекайтесь с друзьями, объединившись в команду по Интернету или же по локальной сети. Подключайтесь к кампании и выходите из нее в любой момент, это не помешает вашим товарищам продолжать приключения — перезагрузка игры не потребуется. Мало того, все приобретенное снаряжение вы сможете использовать в каждой новой игре!<br style=\"padding: 0px; margin: 0px;\"><br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Та еще история:</strong>&nbsp;на этот раз ваше пребывание в мире Borderlands начнется с того, что вы обнаружите себя брошенным на погибель посреди заледенелой тундры. Предстоит выяснить, кто и почему столь жестоко обошелся с вами, отыскать обидчика и, разумеется, всыпать ему по первое число. Вам придется обследовать владения корпорации «Гиперион» и столкнуться со злодеем вселенского масштаба — ее директором, известным под прозвищем Красавчик Джек. (И да, это он украл денежки за открытие Хранилища.)<br style=\"padding: 0px; margin: 0px;\"><br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Бесконечное множество… всего:</strong>&nbsp;уникальная система создания игровых объектов — неиссякаемый источник не только самого фантастического оружия, но также другого снаряжения, включая щиты, гранаты, инопланетные артефакты… Да мало ли чего! И не забудьте про тонны всевозможного добра из оригинальной Borderlands!<br style=\"padding: 0px; margin: 0px;\"><br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">В далекие края:</strong>&nbsp;совершите экспедицию по неизведанным районам Пандоры, которая удивит вас разнообразием ландшафтов и пейзажей. Вас ждет морозная тундра, зеленые полные опасностей луга и таинственные подземные пещеры.<br style=\"padding: 0px; margin: 0px;\"><br style=\"padding: 0px; margin: 0px;\"></li><li style=\"padding: 0px; margin: 0px 0px 8px;\"><strong style=\"padding: 0px; margin: 0px; font-weight: bold;\">Интересные знакомства:</strong>&nbsp;а уж сколько невиданных ранее обитателей Пандоры с нетерпением ожидают встречи с вами! Громадные, смахивающие на горилл, мордоплюи (Bullymongs), безжалостные хищные живоглоты (Stalkers) и целая армия механоидов «Гипериона», возглавляемая Красавчиком Джеком — лишь малая толика всех невообразимых страшилищ, избежать встречи с которыми у вас нипочем не выйдет. А не очень-то и хотелось! Пушки к бою!</li></ul><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Примечание: Версия игры для Mac доступна только на английском, французском, итальянском, немецком и испанском языках.</span>', 5, 0, 16),
(23, 22, '', '', '', '', '', '', ' 21 сен. 2012', '0000-00-00', 'Borderlands 2 Season Pass', 659, 67, 217, 'Для запуска требуется Steam-версия игры Borderlands 2.', 'Вам недостаточно основной кампании в Borderlands 2? Приобретите Borderlands 2 Season Pass и получите доступ к четырем дополнениям для Borderlands 2 по одной низкой цене:\nПолучите доступ к четырем дополнениям для Borderlands 2 в момент их выхода.\nПо плану дополнения выйдут до июля 2013 года\nКаждая кампания добавит несколько часов игры, союзников, врагов и незабываемые приключения на новых локациях.', 0, 0, 18),
(24, 22, '', '', '', '', '', '', '14 мая. 2013', '2013-05-14', 'Borderlands 2 - Psycho Pack', 249, 67, 82, 'Для запуска требуется Steam-версия игры Borderlands 2.', 'Take a peek at Pandora from behind the menacing eyes of Krieg, the Psycho Bandit, an all-new character and the 6th playable class in Borderlands 2.  You’ve fought against them as enemies, now use that aggressive energy on the vault hunter’s side.  Slice, dice, light yourself on fire and blow things up – taking damage was never so rewarding – or so much fun!', 0, 0, 18),
(25, 22, '', '', '', '', '', '', '', '0000-00-00', 'Borderlands 2: Ultimate Vault Hunter Upgrade Pack 2', 99, 68, 32, 'Для запуска требуется Steam-версия игры Borderlands 2.', 'The Ultimate Vault Hunter Upgrade Pack 2: Digistruct Peak Challenge adds 11 more levels of character growth, new legendary gear, and the challenging “Raid on Digistruct Peak” map offering even more high-level play. For players who want to get the most out of their Borderlands 2 experience, the first Ultimate Upgrade Pack and Ultimate Upgrade Pack 2 can be combined for a max level cap of 72 , even more legendary gear, and new over-leveled modes!', 0, 0, 18),
(26, 22, '', '', '', '', '', '', '25 июн. 2013', '2013-06-25', 'Borderlands 2: Tiny Tinas Assault on Dragon Keep', 249, 67, 82, '', '', 0, 0, 18),
(27, 22, '', '', '', '', '', '', ' 2 апр. 2013', '0000-00-00', 'Borderlands 2: Ultimate Vault Hunters Upgrade Pack', 169, 67, 56, '', '', 0, 0, 18),
(28, 22, '', '', '', '', '', '', '15 янв. 2013', '2013-01-15', 'Borderlands 2: Sir Hammerlock’s Big Game Hunt', 149, 67, 49, '', '', 0, 0, 18),
(29, 0, '1,2', 'Тёмное фэнтези,Сложная,Ролевая игра', '1,2,3', '1,4,5,8,9,11', ' FromSoftware, Inc.', ' FromSoftware, Inc., BANDAI NAMCO Entertainment', '11 апр. 2016', '2016-04-11', 'DARK SOULS™ III', 1999, 75, 500, 'Dark Souls продолжит испытывать игроков на прочность в новой главе знаменитой серии, собравшей множество наград и определившей лицо жанра. Соберитесь с духом и погрузитесь во тьму!', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Купите сезонный пропуск DARK SOULS™ III и получите все дополнительные материалы!</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Лучшая ролевая игра 2015 года по версии GamesCom.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">DARK SOULS™ III испытает вас на прочность в новой главе саги, определившей лицо жанра.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Огонь гаснет, мир обращается в руины, и вам предстоят сражения с еще более колоссальными врагами. Традиционная мрачная и атмосфера, напряженные битвы и еще более динамичный геймплей.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Лишь угли тлеют во мраке... Соберитесь с духом и погрузитесь во тьму!</span>', 2, 0, 16),
(30, 29, '', '', '', '', '', '', '24 июн. 2016', '2016-06-24', 'DARK SOULS™ III - Season Pass', 999, 50, 500, '', 'Лучшая ролевая игра 2015 года по версии GamesCom и обладатель более 35 наград и номинаций на E3 2015, DARK SOULS™ III снова зовёт вас в суровый мир тьмы и отчаяния. Приобретите сезонный пропуск и получите два эпических дополнения со скидкой — вас ждут дополнительные карты, боссы, враги, новое оружие и броня. Соберитесь с духом и погрузитесь во тьму!', 0, 0, 16),
(31, 29, '', '', '', '', '', '', ' 25 окт. 2016', '0000-00-00', 'DARK SOULS™ III - Ashes of Ariandel™', 599, 50, 300, '', 'Вы — негорящий... Узнайте мир Dark Souls III™ еще лучше, установив дополнение «Ashes of Ariandel», входящее в состав сезонного пропуска Dark Souls™ III. Отправляйтесь в заснеженный мир Арианделя — вас ждут новые области, враги, боссы, оружие, наборы брони, заклинания и прочее. Примете ли вы вызов и отважитесь ли погрузиться во тьму ещё раз?', 0, 0, 16),
(32, 29, '', '', '', '', '', '', '28 мар. 2017', '2017-03-28', 'DARK SOULS™ III - The Ringed City™', 599, 50, 300, '', 'Не бойся тьмы, пепельный!\nThe Ringed City — последнее дополнение к Dark Souls III, игре года по версии Golden Joystick Awards 2016. Отправляйтесь на край света в поисках города за стеной — вас ждут новые земли, враги и боссы, доспехи, оружие и магия! Повествование о темном мире, созданное Хидэтакой Миядзаки, подходит к своему завершению.\nНовый мир. Последнее путешествие.', 0, 0, 16),
(33, 0, '1', 'Шутер от первого лица,Для нескольких игроков', '1,2,3', '1,5,6,9,11', 'Ubisoft Montreal', 'Ubisoft', '1 дек. 2015', '2015-12-01', 'Tom Clancys Rainbow Six Siege', 999, 0, 0, 'Tom Clancys Rainbow Six Осада – это продолжение нашумевшего шутера от первого лица, разработанного студией Ubisoft Montreal.', '<span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Освойте искусство разрушения и использования устройств в Rainbow Six Осада. Игроков ждут напряженные бои на коротких дистанциях и открытом пространстве. Новая часть серии игр Tom Clancy’s Rainbow Six выводит жаркие перестрелки, сноровку и опыт, тактическое планирование и соревновательный аспект на новый уровень.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/359550/extras/20637_R6S_STEAM_CLOSE_QUARTERS_GIF_RUSSE.gif.png?t=1550183637\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Разрушение — основа игрового процесса Rainbow Six Осада.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Касательно стратегии защиты игра предоставляет практически неограниченные возможности: оперативникам доступны всевозможные средства усиления стен и полов, ростовые щиты, колючая проволока, и многое другое.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Атакующая сторона сможет захватить позицию противника с помощью разведывательных роботов, пробивных зарядов и других инструментов, используемых при штурме.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/359550/extras/20636_R6S_STEAM_TOOLS_OF_DESTRUCTION_GIF_RUSSE.gif.png?t=1550183637\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Набирайте команду из опытнейших оперативников спецподразделений со всего мира. Используйте новейшие технологии выслеживания врага. Разрушайте стены, чтобы создать новые огневые позиции. Пробивайте бреши в полу и потолке и используйте их как новые точки входа. Применяйте оружие и устройства, доступные в снаряжении, чтобы изменить окружение, обнаружить врага, перехитрить его и устранить угрозу.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/359550/extras/20478_R6S_STEAM_ALWAYS_EVOLVING_GIF_RUSSE.gif.png?t=1550183637\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Изучайте новые тактики и стратегии по мере развития Rainbow Six Осада. Изменяйте правила боя благодаря новым оперативникам, оружию и устройствам. Объединяйтесь с друзьями, исследуйте новые карты — станьте самыми опытными и опасными оперативниками.</span><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><img src=\"https://steamcdn-a.akamaihd.net/steam/apps/359550/extras/20477_R6S_STEAM_HIGHLY_COMPETITIVE_GIF_113017b_RUSSE.gif.png?t=1550183637\" style=\"padding: 0px; margin: 0px; border-width: initial; border-color: initial; border-image: initial; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><br style=\"padding: 0px; margin: 0px; font-family: &quot;Motiva Sans&quot;, sans-serif;\"><span style=\"font-family: &quot;Motiva Sans&quot;, sans-serif;\">Сражайтесь с игроками из любой точки мира в рейтинговых играх. Соберите крепкую команду и присоединяйтесь к сообществу в рамках еженедельных турниров, или следите за успехами лучших из лучших в соревнованиях профессиональной лиги Rainbow Six.</span>', 121, 0, 16),
(34, 33, '', '', '', '', '', '', '11 дек. 2018', '2018-12-11', 'Tom Clancys Rainbow Six Siege - Year 4 Pass', 1499, 0, 0, '', 'Получите 8 оперативников 4-го года и мн. др. с Year 4 Pass!\nПри покупке до 04.03.2019 — раскраска «Вулкан». \nВладельцам Year 3 Pass — еще 600 кред. R6.\n\nVIP-бонусы на год* с Year 4 Pass: \n\nОПЕР. 4-ГО ГОДА И DLC\n- 8 опер.\n- По 8 униф. и элем. перс.\n- Значок R6\n- 600 кред. R6\n\nVIP-БОНУСЫ\n- Доступ к новым опер. на 7 дн. раньше\n- Скидка 10% в магазине**\n- 5% бонус ОС\n- Усил. для пакетов «Альфа» — 0,3%', 0, 0, 16),
(35, 33, '', '', '', '', '', '', '18 дек. 2018', '2018-12-18', 'Tom Clancys Rainbow Six Siege - Pro League Alibi Set', 499, 0, 0, '', 'Поддержите проф. лигу Rainbow Six - разблокируйте золотой тиби Alibi, униформу \"Лунный свет\", элемент \"Геминид\" и раскраску \"Падающая звезда\" для Mx4 Storm.', 0, 0, 16),
(36, 33, '', '', '', '', '', '', '18 дек. 2018', '2018-12-18', 'Tom Clancys Rainbow Six Siege - Pro League Finka Set', 499, 0, 0, '', 'Поддержите проф. лигу Rainbow Six - разблокируйте золотой тиби Finka, униформу \"Лунный свет\", элемент \"Ариетид\" и раскраску \"Падающая звезда\" для Spear .308.', 1, 0, 16);

-- --------------------------------------------------------

--
-- Структура таблицы `game_categories`
--

CREATE TABLE `game_categories` (
  `id_category` int(12) NOT NULL,
  `name_category` varchar(30) NOT NULL,
  `category_view` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `game_categories`
--

INSERT INTO `game_categories` (`id_category`, `name_category`, `category_view`) VALUES
(1, 'Экшен', 4),
(2, 'РПГ', 6),
(3, 'ММО', 10),
(4, 'MOBA', 21),
(5, 'Приключения', 15),
(6, 'Инди', 18),
(7, 'Стратегии', 9),
(8, 'Гонки', 35),
(9, 'Симуляторы', 19);

-- --------------------------------------------------------

--
-- Структура таблицы `game_keys`
--

CREATE TABLE `game_keys` (
  `id_key` int(21) NOT NULL,
  `key_game` int(12) NOT NULL,
  `key_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `game_keys`
--

INSERT INTO `game_keys` (`id_key`, `key_game`, `key_number`) VALUES
(1, 5, 'eQ//I-cymit-tKPxp'),
(2, 5, 'eZHzY-oLX8d-k07ut'),
(3, 5, 'rF/K1-v/1YW-hG7a9'),
(4, 5, 'jFQ8Z-zT3hW-1QVOe'),
(5, 5, '86Lfu-2Z5F1-0JNnA'),
(6, 5, 'T80Hy-/14EI-zFCPQ'),
(7, 5, 'yIBEX-y5ZTm-/5Xqg'),
(8, 5, 'WZXiy-sx1Pv-uTwKL'),
(9, 5, 'H7ljF-IOYXe-ps6V2'),
(10, 5, 'ajXQf-OXRjX-z/sUn'),
(11, 5, 'AWCoE-accSG-UrOKc'),
(12, 5, 'tLTgy-nlXBe-+/UBs'),
(13, 5, 'cKcKF-R6Yn+-JyBYO'),
(14, 5, 'Tv8RM-QJmPz-/Ra4o'),
(15, 5, '58//b-Ljw8n-JRQnG'),
(16, 5, 'aE+zt-kOwgl-Cs8pM'),
(17, 5, 'Op0Oj-jlTTQ-JcE+b'),
(18, 5, 'IwPdi-KK2+h-R01kg'),
(19, 5, '1iaIA-oAlzR-7o6xr'),
(20, 5, 'L/VI+-ejI10-J2R6g'),
(21, 5, 'qWsvz-ZXIPN-fKm/E'),
(22, 5, 'OBJmv-e+ZlE-/yIct'),
(23, 5, '2WCXW-eFCpK-SZeot'),
(24, 1, '6wYst-leCJf-/UyQT'),
(25, 1, 'HYOzi-tpkge-fz/0j'),
(26, 1, 'zjxgn-jnlcv-H360o'),
(27, 1, 'Kd47Q-mSNoh-0Tsm+'),
(28, 1, 'Udhgw-cvM78-UoV1H'),
(29, 1, 'AhomB-fsPNd-5Dj9f'),
(30, 1, 'F8GGV-ecQjr-suPIw'),
(31, 1, 'soD9F-aET7d-dwnQM'),
(32, 1, 'isUMm-nu7qM-D7Pm9'),
(33, 1, 'uKACx-5bp/r-dzZIx'),
(34, 1, 'Etdld-YGbfz-CjjYB'),
(35, 1, '0Hwim-Hn/J0-GY0Cm'),
(36, 1, 'QtgoD-sQ9dc-FpO8P'),
(37, 1, 'MbspJ-qwz6B-Jvzfp'),
(38, 1, 'lFZtJ-QBmmE-Xl2IM'),
(39, 1, '/RlxE-LDtR4-J1Rwl'),
(40, 1, 'Wwhs7-svFde-DKx7e'),
(41, 1, 'i4T82-iImeW-aOMGz'),
(42, 1, 'oedZH-I8xjF-Mq3tC'),
(43, 1, 'Dg7X4-61Gz8-knHD8'),
(44, 1, 'ox590-z3une-3q0Pp'),
(45, 1, 'AGBJK-uVEmm-HubMF'),
(46, 1, 'wcPV6-opPiB-BkZAM'),
(47, 1, 'eyfVJ-xQaJQ-n/wcJ'),
(48, 6, 'pQa+f-bndT4-Krcng'),
(49, 6, 'MgHEU-EI6jz-icf9c'),
(50, 6, 'KheDP-BONJE-DxtwF'),
(51, 6, 'BWVpp-24v7K-uu1j/'),
(52, 6, '5WTQp-4zjrM-Z1Szv'),
(53, 6, 'PjVr8-rrsdU-7Q3xU'),
(54, 6, '1ZbZV-5GaU3-YBBMA'),
(55, 6, 'eZNMG-ARrHR-YEuKY'),
(56, 6, '1fjvE-I+6+l-/ExyS'),
(57, 6, '6XQWy-BN5l6-AhTws'),
(58, 6, 'qKhHB-l8+i9-n1Tdl'),
(59, 6, 'd5qoY-7TKhG-9mP7t'),
(60, 6, 'GIdvM-QQ775-5SA+/'),
(61, 6, 'mFSDn-uWpoz-DjmW9'),
(62, 6, 'CCilu-Z18bc-rGZIg'),
(63, 6, 'YVznX-H16Ep-0Xx0q'),
(64, 6, 'OF/0l-y+FHO-4jpYT'),
(65, 6, 'j4LF6-Vi7Cp-b1cI8'),
(66, 6, 'wcBeM-4kdv0-KWmz6'),
(67, 7, 'rcr8S-I0dFL-VyWog'),
(68, 7, 'gk5mc-tuLEo-Ko3vu'),
(69, 7, 'rKVkO-E7bK+-EbYf+'),
(70, 7, 'eHp2a-qOusQ-DOIj0'),
(71, 7, 'WGnZm-euq6N-4aUo0'),
(72, 7, '7sK2d-9dScI-tHztv'),
(73, 7, 'pJCam-PFwyU-27Tan'),
(74, 7, 'PPsFE-W7ZIb-YsN1u'),
(75, 7, 'aynpg-v4mRy-9lqBj'),
(76, 7, '+BrZg-6ZXzn-RTqcx'),
(77, 7, 'SsqC7-fPLTo-7u/zw'),
(78, 7, 'faGkV-qrvJT-VOcDh'),
(79, 7, 'uznCT-D16EG-vV4fX'),
(80, 7, 'sdBzB-62I5b-bPUxF'),
(81, 7, 'RpFzk-azreB-0zYvk'),
(82, 7, 'N36cZ-qu73t-KVFjx'),
(83, 7, 'u9OeK-3tTH6-tGIK8'),
(84, 7, 'OT3Kl-FSdU/-rIYTs'),
(85, 7, 'VYuWM-7JMsn-g/cPL'),
(86, 7, 'pKzmR-ssWyX-ZZk+C'),
(87, 10, '4yDY1-owmJg-ssdiO'),
(88, 10, 'zYnv5-ZnX4a-O4CzH'),
(89, 10, 'KjSBD-kPDpb-F4Wnh'),
(90, 10, '8Oq59-Gowk7-EkGT0'),
(91, 10, 'FhBsJ-4Smfo-WEeSK'),
(92, 10, '77gPW-nGzqZ-t4yCv'),
(93, 10, 'SomsB-w72OW-Lx6+i'),
(94, 10, 'mI2b7-g0NzI-E2bcM'),
(95, 10, '43IdE-wzHO0-LhtUE'),
(96, 10, '+5gat-BypYV-r23MR'),
(97, 10, 'Cn2W9-YNaj4-o3Ht8'),
(98, 10, 'BPN3V-y/mCa-2OFcm'),
(99, 10, 'J1G7o-BdMhE-UbF/3'),
(100, 10, '+ambG-3a/8h-vgLeX'),
(101, 10, 'FBxjJ-SHLM3-RgoK6'),
(102, 10, 'L+xJw-bmkOP-So+GH'),
(103, 10, 'fW8rH-VnZKL-hy/1k'),
(104, 10, '154EH-Bt/9O-g1SZF'),
(105, 10, 'GUbaf-ogrUW-rSR6u'),
(106, 10, '/t3Px-d5Gqw-py0Ch'),
(107, 10, 'Hd4US-/taRX-RkDsx'),
(108, 10, '7v8p4-bITh/-keEh0'),
(109, 10, 'sbY/S-6AEBm-9urx4'),
(110, 9, 'rT0RE-Qxnhg-ffuz8'),
(111, 9, 'syTJY-VP/d9-Jornk'),
(112, 9, 'AwB0X-I6tzF-WNoo0'),
(113, 9, '+mYJX-b4fXg-YDj3X'),
(114, 9, 'gnruj-Sy88b-lKhPa'),
(115, 9, 'asS/n-VUpRv-zAjkb'),
(116, 9, 'MKuvV-ZxoWb-mKE5+'),
(117, 9, 'm1X6C-b/wPp-7yiue'),
(118, 9, 'Lycev-W77dP-LsYt6'),
(119, 9, '7LC/D-f4wGh-h4K6V'),
(120, 9, 'FSfYL-iHPaA-ZAHuS'),
(121, 9, 'rBReI-m9hvR-Yp4Fa'),
(122, 9, 'Agqh1-xI9fS-VtKY2'),
(123, 9, 'v8u2a-2P/Xv-+GCNK'),
(124, 9, 'SVc4g-nyJAn-8sp4b'),
(125, 9, 'RkI14-3olrn-2EmHj'),
(126, 9, 'WzeZm-CL4tH-cj/Py'),
(127, 9, 'N0YkY-CuU+L-qvMQ2'),
(128, 9, '3nsLr-sVOe2-wbO6d'),
(129, 9, 'IZRTA-d5WJj-EFVHt'),
(130, 9, 'mfKJT-M3tZq-I3yPl'),
(131, 9, '2IdBa-2gJp1-WFRym'),
(132, 9, '7QidT-aNpyk-DFsJf'),
(133, 8, 'Y1szU-dnrr2-jTBoY'),
(134, 8, 'lg3dE-RECR+-m88PS'),
(135, 8, 'FAJBw-IpJfg-lfAa+'),
(136, 8, 'HBtrF-UhzQy-ZL1C9'),
(137, 8, '5GPuz-P1zRK-8Ul/G'),
(138, 8, 'ZKRkw-wIEU8-mawrP'),
(139, 8, '6m/q3-MHa+c-LmG7q'),
(140, 8, '8Fev3-gtV/b-u0MUT'),
(141, 8, 'wyBYC-CEn3O-0YWLK'),
(142, 8, 'cxm+B-lOMlr-g9lPD'),
(143, 8, 'aZ3gT-YAWiE-UFCHl'),
(144, 8, 'yNykk-Q2Z6m-w7Rp7'),
(145, 8, 'KQPP7-2lpA1-GqG94'),
(146, 8, '6RyEg-DNmXM-XpcLh'),
(147, 8, 'CrXpN-hVZDd-bDkHu'),
(148, 8, '7WJ8y-N1Vlu-r4acu'),
(149, 8, 'nJ5Of-0LZM1-DcGe2'),
(150, 8, 'XO/Cq-g27k7-rnkhR'),
(151, 8, 'hIOWF-W110U-3pZ47'),
(152, 8, '1Yeb2-oeGMD-D20xf'),
(153, 8, 'vs6kz-VGH7F-rbK1R'),
(154, 8, 'D1OpY-g6dvl-2ntM1'),
(155, 8, 'eGAW5-2UBFK-gJDR7'),
(156, 8, 'aoq50-uigXH-OfBwm'),
(157, 11, 'LhIRx-8hPKE-HnLOz'),
(158, 11, 'lUhfL-h9Z+0-LXK/F'),
(159, 11, '0tscK-UwY64-Vagyu'),
(160, 11, 'x+TAW-m+ZSA-8ByaJ'),
(161, 11, 'Q9L1u-kxv2w-IblPY'),
(162, 11, 'GnL0Z-8opgc-APWXv'),
(163, 11, 'nupeu-4ymEr-BGOkD'),
(164, 11, '0HCmq-fJ7Ld-NiQFm'),
(165, 11, 'gFgtL-dQJZ0-fjIUG'),
(166, 11, 'aqCUa-0MbSJ-A9xAg'),
(167, 11, '4QpDO-0wq06-g4X24'),
(168, 11, 'T19hq-PDvzZ-ENfsc'),
(169, 11, 'kXwoN-PIPCP-l7MJ2'),
(170, 11, 'UyCS/-SMEl8-XIG0p'),
(171, 11, 'oj7GI-+0PAl-FU1xK'),
(172, 11, 'BMNYn-hjDkC-iXWAt'),
(173, 11, 'QrG5V-lpUgZ-R8XTs'),
(174, 11, '9DrXU-jwTKr-SgMEt'),
(175, 11, 'rq9Qa-WfH7E-bI7Hy'),
(176, 11, '1kpZv-A94IE-8yQSW'),
(177, 11, 'o/+8f-WhSdB-Zolpx'),
(178, 11, '1Z78H-SM0tt-3Hz3Y'),
(179, 11, 'qR0sO-zC2G3-rdVnP'),
(180, 11, '4l9ME-0n2R3-/1Y4O'),
(181, 11, '6eHzi-oXeBN-gDTfW'),
(182, 12, 'l+w4d-nC/IO-fJPwJ'),
(183, 12, '2b62N-OxJQ6-3H7j2'),
(184, 12, 'WXBMj-jn90p-0rhGA'),
(185, 12, 'AL52b-5asx6-HaySG'),
(186, 12, 'SjOJ4-xeptX-3kS9J'),
(187, 12, 'eBBFC-6Du9c-eq6xv'),
(188, 12, 'vMupl-XuIvd-YY6Ao'),
(189, 12, '0wxRj-FPkLl-ItWuB'),
(190, 12, 'QkkN1-6SLov-77+Q0'),
(191, 12, 'rQPyn-AxGu+-JJWnC'),
(192, 13, 'xIa2G-DyVxK-lAbdw'),
(193, 13, '/NrUU-ADeOX-4B7uT'),
(194, 13, 'R0ntf-Rp6Wk-fFQ4A'),
(195, 13, 'WTvJ9-5sXqL-qoiM4'),
(196, 13, 'ZOYgv-mV5F1-qkQuh'),
(197, 13, '+wWJd-xTO/v-w5Z8x'),
(198, 13, 'AmJLn-Ojw+z-PWTcS'),
(199, 13, 'dhnFW-ezucB-PqII8'),
(200, 13, 'xpyIE-eJ//+-C+MmC'),
(201, 13, 'D84Ts-llpcK-xoY2H'),
(202, 13, 'ylqyP-aiQXh-yCOh4'),
(203, 13, '+0cvd-FAGFG-anE1K'),
(204, 13, 'Uljhh-xO/u5-O5Lv5'),
(205, 13, 'viXPK-9MJET-1ESum'),
(206, 13, 'ZpVES-bOBPz-eHLaw'),
(207, 13, '1++tH-/IACv-ItERy'),
(208, 13, 'mZDkP-E0rqp-33DG5'),
(209, 13, 'x4Ysr-v+bbg-qjTR7'),
(210, 13, 'fAc95-bpGMZ-/cFr3'),
(211, 13, 'eAiRY-KHajk-pmrDM'),
(212, 13, 'uwHux-sNxlo-4sreQ'),
(213, 13, 'Zo9uQ-hLmYJ-1WLyT'),
(214, 13, 'T4rWQ-FlMQU-nyVav'),
(215, 13, 'YJZhV-4iDvX-5iiLz'),
(216, 13, 'Fcx1w-2vUUr-cvQvU'),
(217, 13, 'cZriT-2YUGJ-SrflQ'),
(218, 13, 'F8xtc-1h77E-5cfS9'),
(219, 13, 'SOSfo-K32Zx-+9sUr'),
(221, 14, 'wuk6h-0qVPX-P713G'),
(222, 14, '3LbRK-dXXTQ-TzNoN'),
(223, 14, 'RZUF2-urSda-IxoDu'),
(224, 14, 'rdMTd-xLtAn-Bq+h0'),
(245, 15, 'iyiRA-DkwMG-1ZXqu'),
(246, 15, 'H/eMm-cab1C-3VCqk'),
(247, 15, 'imrpP-BPWZL-YHWol'),
(248, 15, 'WCEEE-I2Hku-AyV+d'),
(249, 15, 'g6cZT-p8Xco-vIxJv'),
(250, 15, 'jw1Yy-oOeje-LpsjZ'),
(251, 15, 'ECB1x-WudyT-YoDGh'),
(252, 15, 'x/7aA-/b83H-SSEAk'),
(253, 15, 'wKl7A-jHBhM-aGIhn'),
(254, 15, 'nIOsm-rPSGf-mdual'),
(274, 16, 'A2Oq8-DzdSN-yGIG+'),
(275, 16, 'RwsMy-Y/b+j-7KUDc'),
(276, 16, 'JWDhr-i0c/w-Os6Ye'),
(277, 16, 'MDrjK-ZiFse-bSVLF'),
(278, 16, 'LZ3PA-ROxEQ-YtmW3'),
(279, 16, 'BJcjI-OMHmk-I1wph'),
(280, 16, 'X1ttg-DgUTT-fAiBs'),
(281, 16, 'C8ssv-gbmfi-m+M+F'),
(282, 16, '0X9Fg-SZVM0-BBDYH'),
(283, 16, '8/56j-lHNIf-MtLTk'),
(284, 16, '2p3tX-LLP/Q-xp/M/'),
(285, 16, 'V11F0-KptOZ-I1oKx'),
(286, 16, 'gBhFm-JRH2L-MGaG1'),
(287, 16, 'PKjk1-uTPHG-E539Z'),
(288, 16, 'xkuJi-2B6R+-AV0cL'),
(289, 16, 'kQiue-tDuh3-Q/zko'),
(290, 16, 'FYxTS-5wmak-GlMVt'),
(291, 16, 'nzTb0-PHM7W-57bJO'),
(299, 17, 'wLp+c-LCkY9-8Ibji'),
(300, 17, 'CK2zK-0j5vP-UbIk5'),
(301, 17, 'TN0nn-K7VpC-erpkQ'),
(302, 17, 'T5Nmn-B9mcl-jfJyR'),
(303, 17, 'uwFVJ-4uH7S-mjwJW'),
(304, 17, 'K9p7e-43/u2-4GvPX'),
(305, 17, 'zFM43-eG5m2-DrwMG'),
(306, 17, 'C2elS-WbvRH-+Ip3S'),
(307, 17, 'a2Loh-7VVRq-7y+qP'),
(308, 17, '/+HHy-6bYRX-XwUVV'),
(309, 17, 'DOWNT-uKYdc-DH2wG'),
(310, 17, '4i57o-vMkAj-98XOl'),
(311, 17, 'KdwfP-aE5/F-3Vmd6'),
(331, 19, 'uyK+7-+E9NF-jhWa6'),
(332, 19, 'dSNNd-eEPef-T53fk'),
(333, 19, 'o+p88-LAlEa-Q5HVA'),
(334, 19, 'uDtUs-SnZTY-amJgg'),
(335, 19, 'kVOno-XWKTs-iYBQv'),
(336, 19, 'YNpj/-JiPWH-cV54z'),
(337, 19, '8EFy2-Je38a-LqKsu'),
(338, 19, 'sCE+Q-3KwXX-/Fen/'),
(339, 19, 'TBG+A-zsEy+-c1Nq9'),
(340, 19, 'MSiF8-XBU+f-MTRZX'),
(341, 19, 'zYbpO-cYzm1-QNhAK'),
(342, 19, 'Fk9c3-huNx2-1XR5n'),
(343, 19, 'G90tl-siLI4-Z4Sc/'),
(344, 19, 'XEQOP-hv3Ze-pzNit'),
(345, 19, 'Scdk7-9XC9w-b7M2M'),
(346, 19, 'UezKO-HKO/e-9F2+h'),
(347, 19, '/b/cH-oJt3L-G8H6v'),
(348, 19, 'TP5bG-o6SiR-CFHO6'),
(349, 19, 'F3gK5-F7bke-SYfLR'),
(350, 19, 'As4mA-mUs2T-8mgT2'),
(351, 19, 'NdPpm-uHhCl-b5yRv'),
(352, 19, 'q3Hq0-5T2RE-ulJ6/'),
(353, 19, 'L20S/-g+krG-JYsZC'),
(354, 18, 'QG2SJ-VNGyS-n4kzX'),
(355, 18, 'U/Z/1-OFXvB-xfqJt'),
(356, 18, 'MdlQY-rOqER-2J8pf'),
(357, 18, 'fbIgu-vr7/G-tPhrj'),
(358, 18, '5aDY7-QzvXp-mnDXU'),
(359, 18, 'lIu+M-+v/Ak-XOZs+'),
(360, 18, 'gVEwH-LY37J-oLDwU'),
(361, 18, 'HIVCZ-5da31-Y791S'),
(362, 18, 'bcguW-1PY+6-CBDJ1'),
(363, 18, 'yd9XY-ztXft-kfihi'),
(364, 18, 'cZjIj-BdEQk-cbi68'),
(365, 22, '9YyP+-Ijowa-qogx6'),
(366, 22, 'vEwQI-6A/Xb-yApun'),
(367, 22, '9i5qC-CKAbG-S4JS2'),
(368, 22, '8saK0-sg4Cp-DYnvo'),
(369, 22, 'vg6hn-wJekV-9xd+5'),
(370, 22, 'ssCJ1-CQp6q-5z9Te'),
(371, 22, '9iESr-n/yv9-7IUYN'),
(372, 22, 'Ec6gB-ngG3s-DPSmC'),
(373, 22, 'Kh2AG-PZWuN-YHMVD'),
(374, 22, '7mDPS-7K+5b-US9g1'),
(375, 22, 'XZZHY-TEaP+-RkVm4'),
(376, 22, 'XiBdx-mL/vs-n3V+2'),
(377, 22, 'IvM0I-rm4ll-CWqzI'),
(378, 22, 'y3iAD-CyiyO-t/Uv4'),
(379, 22, 'Rt4Hv-4vRc9-L0+0c'),
(380, 22, 'gtJga-WuieM-KQB8p'),
(381, 22, 'Jm3J8-xnJQq-b3FEL'),
(382, 22, 'C3CK0-n2Qog-rZLhL'),
(383, 22, 'AOOIZ-1KpDw-LzeVe'),
(384, 22, 'GlWa8-3RtoB-oyGLk'),
(385, 22, 'ep9G8-qqtxP-IgldL'),
(386, 22, 'oc2gS-YAyVK-IvYIY'),
(387, 22, 'yrvgR-HSm0C-m4l97'),
(388, 22, 'JfAo6-WHaWV-eplfZ'),
(389, 22, 'J3abH-QvFVJ-6cjAo'),
(390, 22, 'cYjNQ-mQ/Pt-XJJZK'),
(391, 22, 'TDLw9-YP5Q9-vUAMN'),
(392, 22, 'Z7zrn-S8KmQ-pW+e8'),
(393, 23, 'pSPI6-oS3Sj-js2dF'),
(394, 23, 'V9wGx-D2wvo-Qkzbk'),
(395, 23, 'SacYm-uXl3c-4eMcd'),
(396, 23, 'NbIbc-xM3At-lskJp'),
(397, 23, 'EifRh-29pV9-vrXhz'),
(398, 23, 's+YRT-gDCKX-cDkax'),
(399, 23, 'ekmg4-WcI5F-j101x'),
(400, 23, 'Pyt0+-JBYOO-F1ZFv'),
(401, 23, '4CJvV-jJe4f-eoOmh'),
(402, 23, 'v6Wnu-IubQk-Jiq0w'),
(403, 23, 'snG+o-2ZOj9-1p7so'),
(404, 23, 'uALa0-6SRmI-qtPEz'),
(405, 23, 'STFMD-hLzpp-jtk3A'),
(406, 24, 'Oj/PL-qlsHV-/POqT'),
(407, 24, '8DY1b-ZCtwH-iTrSk'),
(408, 24, 'ndcBY-Tvkw6-nUZee'),
(409, 24, 'ev3yZ-fyNAK-t2ceS'),
(410, 24, 'ubFYp-H4EBO-Lqkpd'),
(411, 24, 'EMupO-pJNTe-FMOcd'),
(412, 24, 'Y1wCC-WWWYj-uq1FE'),
(413, 24, 'bMkhL-tGqxL-C8AoU'),
(414, 24, 'qGJk/-oLt6M-zEmc5'),
(415, 24, '8M9d7-7b/Uh-GaCCp'),
(416, 24, 'iWSzx-fCS1B-9RvJS'),
(417, 24, 'XaV8V-ve6P8-Gl697'),
(418, 24, 'uVEQg-qQVju-RFP7i'),
(419, 24, 'RFK4/-TdOds-gK+1m'),
(420, 24, 'ARlYM-mmUeG-G/UyK'),
(421, 24, 'bO2EA-1yenJ-M3scP'),
(422, 24, 'O4dOP-pmmgo-8zakb'),
(423, 24, 'NVsa/-1tvuR-P3aQH'),
(424, 24, 'gXgFt-qUYDQ-QxOAU'),
(425, 24, 'hVPGg-jLJ09-IZAY1'),
(426, 24, '9b3Jh-G4GiF-pbJST'),
(427, 24, '1A2U1-Zz06U-h3QC2'),
(428, 24, 'M3PJr-Ph8uv-rHY2J'),
(429, 24, 'bmHz/-S6vjJ-bkWMz'),
(430, 24, 'qkYp8-snQwo-auTeI'),
(431, 24, 'NSDeh-DfsuG-bCGc4'),
(432, 24, 'kdFQl-o9dOE-nbuGe'),
(433, 25, 'MxUaV-1Jnc4-EPIjE'),
(434, 25, 'QnLcp-snAM1-lA2yE'),
(435, 25, 'B95qp-tLISQ-XjGcs'),
(436, 25, 'XwEb7-LRGCR-EU4Mp'),
(437, 25, 'lSMiw-dMNue-ryJKH'),
(438, 25, 'B3AVW-GznIv-r86LN'),
(439, 25, 'FCroI-lXH1s-t+cmQ'),
(440, 25, 'wO5Rg-IRKZx-qI8C0'),
(441, 25, 'bGZE8-7x40M-tlXLu'),
(442, 25, 'Q6UAI-m/NLv-wv+bj'),
(443, 25, '99nz/-KUJRy-XRJto'),
(444, 25, 'yr5mM-SkeDo-HPMNp'),
(445, 25, 'Aayww-Cb4LL-C5lvu'),
(446, 25, '4+ysZ-dYeoo-moHNC'),
(447, 25, 'yzh17-XVPgw-n9nKI'),
(448, 25, 'F9iPJ-xrzQy-9IPa4'),
(449, 25, 'jCk7f-Px+Y4-MDzQJ'),
(450, 25, 'f3HyR-pE9I3-MrkI6'),
(451, 25, '+DWeK-ulsNw-3toYF'),
(452, 25, 'A3tdI-4I8+I-N0zkz'),
(453, 25, 'fpmrX-AZS8i-mKtVA'),
(454, 25, 'lS/aH-z4bpr-/OjDB'),
(455, 25, 'dqYVN-5lLjh-/fm46'),
(456, 25, 'gt+Wi-n0Uux-53wV7'),
(457, 25, '2Rwi9-pJ2Qj-AvyR/'),
(458, 25, 't6Lna-8rq5J-69FLg'),
(459, 26, 'kQevw-f9p5I-qiAKa'),
(460, 26, 'hxODp-wjHF6-ynwTP'),
(461, 26, 'i/0ZC-nV3U5-bwRWd'),
(462, 26, 'WamBf-O+XxK-ZkX/V'),
(463, 26, 'Vm69L-e/JyT-g0x5G'),
(464, 26, 'srkhn-bpIeY-gZMz3'),
(465, 26, 'Jfco4-0dpBY-N9DzV'),
(466, 26, 'V6gHx-KUuxS-VfWbF'),
(467, 26, 'pRLaU-imhyp-VgoAV'),
(468, 26, 'WJwBT-j67Ht-z/1Y5'),
(469, 26, 'tWZ0t-cdVm4-l4b+N'),
(470, 26, 'sBpAx-sCUpm-leSkr'),
(471, 27, 'ZyATN-iQG95-Hs4z0'),
(472, 27, 'CXLmw-301UP-q1C/v'),
(473, 27, 'T95Qk-a2VdI-omQei'),
(474, 27, '4CPzs-6EJsy-hFP8x'),
(475, 27, '0aauT-LAdJu-721Sb'),
(476, 27, 'mIlfO-X7LeJ-wceFN'),
(477, 27, '60oRl-ZfVYj-yuQ/w'),
(478, 27, '54SeP-C/O0f-bTGUO'),
(479, 27, 'FDEVV-RrN26-On3r8'),
(480, 27, 'Gu6vX-ErxSi-OG4zA'),
(481, 27, '8ST+b-j8MUZ-g3pnE'),
(482, 27, 'xLzEI-rLDn5-Wifzx'),
(483, 27, '6swFJ-xRvrh-aDvd/'),
(484, 27, '8546f-TI+jC-aKwLz'),
(485, 27, 'XQnYm-lVVlC-Kz8QJ'),
(486, 27, 'EV9KH-tv33d-QIdaX'),
(487, 27, '5WqGQ-pENoY-ENMA1'),
(488, 27, 'g7GlH-WmGr0-qAG1A'),
(489, 28, '1aFf+-CofNU-hiai8'),
(490, 28, 'fQxNq-doC2U-1Xie9'),
(491, 28, 'A3/EB-MOypQ-1bbur'),
(492, 28, 'Pb3nk-rZQgy-wQvd4'),
(493, 28, 'kRymk-9e+y0-fFcrS'),
(494, 28, 'wKSp0-1sdnm-ky5s1'),
(495, 28, 'xNyLN-cAZxv-v82GY'),
(496, 28, 'aYP8C-5pv6M-V2JCS'),
(497, 28, 'xMYzk-j38Wq-MGnXg'),
(498, 28, '4tF9J-eddCR-tu5Ub'),
(499, 28, '8pren-jlKNI-v5vP5'),
(500, 28, 'BLDS/-Ew1T0-5d1i9'),
(501, 28, '3W3DE-aqnvZ-r0a/E'),
(502, 28, 'JjUmw-KKfFs-VlvAy'),
(503, 28, 'o+UVx-C2qVa-xQWmH'),
(504, 28, 'X+XgZ-s8GZU-+W58v'),
(505, 28, '4e3bI-CtKW+-fnTMK'),
(506, 28, '7045Y-rwvF+-mZ/ij'),
(507, 28, '0cggi-qqXas-vFaUH'),
(508, 28, 'ImCxS-bfyU0-M4vGu'),
(509, 28, 'Fef/B-3xfXB-Kom42'),
(510, 28, 'fXGqr-LG0hf-R1tPb'),
(511, 28, '/LSVq-bV8nf-F36YK'),
(512, 28, 'tRT2/-7iq2Y-RZoM4'),
(513, 28, 'FrfQa-p1eLX-s8lar'),
(514, 28, 'try5M-qUyIW-kzQ+o'),
(515, 28, 'Sfjda-nBqSv-6BhFr'),
(516, 29, '3f5nc-0nfev-QTQgJ'),
(517, 29, 'Gjrgh-gWqV8-pBHQ1'),
(518, 29, 'HpGJu-aaVeD-mZBvc'),
(519, 29, 'XtWls-OIhzL-rOwMS'),
(520, 29, 'D/ZTT-Fd3d1-PMR1n'),
(521, 29, 'tF7qO-qdOFF-7+xXB'),
(522, 29, 'zSXX1-5EBak-J1KDQ'),
(523, 29, 'toXul-E+UDL-xcE3k'),
(524, 29, 'hJKRj-tqqVl-LkA53'),
(525, 29, 'wIbru-CLCim-HI2W8'),
(526, 29, 'l8qhy-HJWC5-1ePel'),
(527, 29, 'pliVm-YL0AE-KjhEh'),
(528, 29, '7meDf-igVIS-mirIT'),
(529, 29, 'Woym+-DBOG2-th5EQ'),
(530, 29, 'vqIOo-vWrLN-OtnKi'),
(531, 29, 'H00mP-HRvRZ-rqYDs'),
(532, 29, '/gF0h-lIFbG-dYjLB'),
(533, 29, 'WQspl-0v5py-6TUuo'),
(534, 29, 'VUWHY-Ra40R-krJeG'),
(535, 29, 'ZlR+R-MqHOt-995Qb'),
(536, 29, 'oXZdN-1prbH-zamww'),
(537, 30, 'dnWT0-Yb+WK-vaFwQ'),
(538, 30, 'jelgU-DGWdJ-WycaQ'),
(539, 30, '3wgPG-HkZsb-QXeQ4'),
(540, 30, 'Rv0IU-brasQ-xL2J0'),
(541, 30, '8Y8dg-VxAVp-ibww0'),
(542, 30, 'lSSdX-L94gY-srRf0'),
(543, 30, 'owA+u-5FwaL-K3e4z'),
(544, 30, '4CmO6-XRTHz-k/Ibl'),
(545, 30, 'c8mC3-iUY9k-oDojB'),
(546, 30, 'kide5-j9qZx-yWtBw'),
(547, 30, 'b3+3N-0MTwL-rQeHz'),
(548, 30, '2STdb-8K9HN-nZPDs'),
(549, 30, 'eaoSg-TveF+-6sTmZ'),
(550, 30, 'rWeD4-ZTx9W-VZWk+'),
(551, 30, 'tpDGM-b7HNm-H4APY'),
(552, 31, 'WXL4V-enHBy-jSdCv'),
(553, 31, 'Wiq50-WxZNF-nBfUS'),
(554, 31, 'G5yyu-FzofD-rSq3D'),
(555, 31, 'owz2a-D6yCE-fIP7J'),
(556, 31, 'tNC+q-RmX/o-79ECg'),
(557, 31, 'v6Wfc-k8OUS-p3S4M'),
(558, 31, 'oTz2H-AOkRr-HOvH+'),
(559, 31, 'U3Oag-alRra-18q7T'),
(560, 31, 'P3qNL-m87mZ-CkA4y'),
(561, 31, 'gEDES-f95D7-djIrM'),
(562, 31, '+ipjh-AXwJ2-sbhfI'),
(563, 31, 'lz2Oe-Zy/Nn-DM7nQ'),
(564, 32, 'bAxJn-jpItX-zSgS/'),
(565, 32, 'lKp4G-AJu4C-XuAK+'),
(566, 32, 'ZF7/k-vn3dz-mMzkh'),
(567, 32, 'EOTpo-F+2cI-ZOn4O'),
(568, 32, 'sGXqp-XXvZs-sWWe/'),
(569, 32, 'hrlsZ-D/Okt-ZVbVE'),
(570, 32, '8QOcg-iyob7-t1dtF'),
(571, 32, '9FUbb-Ylzqi-9WF4h'),
(572, 32, 'qeFuA-TYfgY-ZMHVG'),
(573, 32, 'HUYQc-nRnGS-0a7GP'),
(574, 32, 'QnR1J-Q/18B-O2AFW'),
(575, 32, '4ncSe-gC26i-er5/N'),
(576, 32, 'pLqZ2-3tfd5-Wb17+'),
(577, 32, 'vviDN-v9iNE-YhSA8'),
(578, 32, 'pWpgM-7sSFb-FuaBw'),
(579, 32, 'XemT5-3zzla-2Zdmj'),
(580, 32, 'ubFhT-hItSE-cUOhG'),
(581, 32, '8cHhG-OP4k9-qc6pv'),
(582, 32, 'QUQbX-j4hnh-8476q'),
(583, 32, '89kub-S/TTU-JjQ6S'),
(584, 32, '8mxFg-rVHGK-7+XLV'),
(585, 32, '0a+XM-BDgOX-YBY/b'),
(586, 32, 'vBTJj-mXSFd-euUeG'),
(587, 32, 'jaSr9-8pH17-3ccvX'),
(588, 32, 'yJpmY-5vUpS-peKMw'),
(589, 32, 'ddWPo-b6qzW-vwJXL'),
(590, 32, 'ZYDj3-UDg2T-Dc077'),
(591, 32, 'cNrkB-UM8Ik-KlRNF'),
(592, 32, 'WxSCe-7KyCn-5TEx6'),
(593, 33, 'N9RHe-iGF7U-0lJoZ'),
(594, 33, 'TckHK-Yec69-LCTT+'),
(595, 33, 'Xs5qI-eV4jb-+tyCB'),
(596, 33, 'kb3+a-BeyZ9-/Kc4t'),
(597, 33, 'Jji7j-JQt4O-Y3rw6'),
(598, 33, 'Lc8Tr-m16Vl-rlwYM'),
(599, 33, 'w5UEL-ECif8-kLcB4'),
(600, 33, 'mhk8h-6nFY4-FT5I/'),
(601, 33, 'yKvOv-WlqbN-5GPmN'),
(602, 33, 'JghFI-iz2Xx-na3aU'),
(603, 33, 'wIlzn-q+vjB-bbvyx'),
(604, 33, 'rQD4S-xLXgU-ZsIQ4'),
(605, 33, 'Xt6mX-K7ece-3volS'),
(606, 33, '2U1L+-EZewh-jhFvl'),
(607, 33, 'e7bCj-cldVe-RQNm5'),
(608, 33, 'nt0k3-/ipqk-uY6XY'),
(609, 34, 'BR9bq-/akjM-o+elT'),
(610, 34, 'w4hh6-ZfUCd-I4N2X'),
(611, 34, 'EIHDk-BrQ8E-WiOSP'),
(612, 34, 'bTiw2-ITy21-I3zap'),
(613, 34, 'zxacR-imOEC-PCrBM'),
(614, 34, '6D0tC-8L8Us-3lgrT'),
(615, 34, '0VO/6-iQs4y-rTq5U'),
(616, 34, 'fWI1f-P2e33-Ti4Z4'),
(617, 34, '3Sa99-ENWdK-UGHBq'),
(618, 34, 'mnJAM-e78Yq-k4Hz5'),
(619, 34, 'iK97M-T26ZT-QjfS7'),
(620, 34, 'qKBxz-HS1s8-9xyTO'),
(621, 34, 'eQ9pi-CtxkF-gArOx'),
(622, 35, 'PzTX6-9z1xR-0xkj8'),
(623, 35, 'D+WQk-k0jtK-+5gy7'),
(624, 35, 'vHTMe-HkK00-NEh7h'),
(625, 35, 'ryQvR-4hOPh-kNnHv'),
(626, 35, 'i4rWn-fYpZq-nxMZf'),
(627, 35, 'Ie6tt-RpNo/-80/cE'),
(628, 35, 'jbPjH-XS36R-3wBJn'),
(629, 35, 'F2Pq3-FXDGe-Ls0d8'),
(630, 35, 'VxOLJ-OiEcH-yd/1d'),
(631, 35, 'CmH2k-3IJlE-BEOvh'),
(632, 35, 'VPbxi-h5nBX-oTWGR'),
(633, 35, 'dIsJA-FiTsH-jbn+n'),
(634, 35, 'ontZ6-3DJgY-pqY6C'),
(635, 35, 'A5Ae6-F7HDv-bbrfm'),
(636, 35, 'ulhoE-IJvGC-7fem6'),
(637, 35, 'CAkJD-s2OkD-oE2FR'),
(638, 35, '0QfBx-LY0Ie-TsLXN'),
(639, 35, 'NGkVv-Z+wey-sphe+'),
(640, 35, 'Q1ZTM-igQzZ-wEcxK'),
(641, 35, 'WVSKI-72jlK-DhTWn'),
(642, 35, 'LyUyP-6oUmx-NjzBm'),
(643, 36, 'XK4Zx-K5tZq-PHVCG'),
(644, 36, 'FNtMl-2Iqo1-d0LE+'),
(645, 36, 'ZeBy9-VqQNz-zUHJw'),
(646, 36, 'myFO4-afMzp-bssrf'),
(647, 36, 'T9mJ7-0eEG/-442+M'),
(648, 36, 'wIfMt-3voD2-ke/FZ'),
(649, 36, 'ESJQu-XbiMa-WtCxn'),
(650, 36, 'yhNwV-ldzmy-uWbFw'),
(651, 36, 'CwqyI-azdI9-5beLI'),
(652, 36, 'IryLg-3EyL5-dUuNm'),
(653, 36, 'IQaeK-V1AxW-961mh'),
(654, 36, '4aXxY-oQ/rC-aWczc'),
(655, 36, 'DuwOL-XubHa-iPTnv'),
(656, 36, 'xs+sw-NAfjR-qOJB4'),
(657, 36, 'jQ9Dw-LnoIW-Lz7fJ'),
(658, 36, 'iu4C0-NEmuX-dmXci'),
(659, 36, '+xPzY-429GL-kMrbU'),
(660, 36, '2SiXE-DdTgb-jhHD9'),
(661, 36, 'lx9M5-30wmZ-nGyGD'),
(662, 36, 'NvuIT-3ld57-EFut0'),
(663, 36, 'vq5Z7-huSQq-kfaTf'),
(664, 36, 'iF0Kn-0AQw2-rVbR1'),
(665, 36, '7SMme-3y0aL-Y/Qj4'),
(666, 36, 'rP7fW-2uP9b-gYCYK'),
(667, 36, 'ron2G-+eiJc-suS48');

-- --------------------------------------------------------

--
-- Структура таблицы `game_languages`
--

CREATE TABLE `game_languages` (
  `id_game_lang` int(12) NOT NULL,
  `lang_game_id` int(12) NOT NULL,
  `lang_interf` varchar(12) NOT NULL,
  `lang_sound` varchar(12) NOT NULL,
  `lang_subtit` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `game_languages`
--

INSERT INTO `game_languages` (`id_game_lang`, `lang_game_id`, `lang_interf`, `lang_sound`, `lang_subtit`) VALUES
(1, 5, '1,2,3,4,5', '1,2,3,4', '1,2,3,4,5'),
(2, 19, '1,2,3,4,5', '2', '1,2,3,4,5'),
(3, 18, '1,2,3,4,5', '2', '1,2,3,4,5'),
(4, 17, '2,4', '2,4', '2,4'),
(5, 16, '1,2,3,4,5', '2', '1,2,3,4,5'),
(6, 15, '1,2,3,4,5', '2', ''),
(7, 14, '1,2,3,4,5', '', ''),
(8, 13, '1,2,3,4,5', '2', '1,2,3,4,5'),
(9, 12, '1,2,3,4,5', '1,2,3,4,5', '1,2,3,4,5'),
(10, 11, '1,2,3,4,5', '2', '1,2,3,4,5'),
(11, 10, '1,2,3,4,5', '2', '1,2,3,4,5'),
(12, 9, '1,2,3,4,5', '2,3,4,5', '1,2,3,4,5'),
(13, 8, '1,2,3,4,5', '', ''),
(14, 7, '1,2,3,4,5', '1,2,3,4,5', '1,2,3,4,5'),
(15, 6, '1,2,3,4,5', '2,3,4,5', '1,2,3,4,5'),
(16, 3, '1,2,3,4,5', '2', '1,2,3,4,5'),
(17, 2, '1,2,3,4,5', '2', '1,2,3,4,5'),
(18, 1, '1,2,3,4,5', '2,3,4,5', '1,2,3,4,5'),
(19, 22, '2,3,4,5', '2,3,4,5', '2,3,4,5'),
(20, 29, '1,2,3,4,5', '2', '1,2,3,4,5'),
(21, 33, '1,2,3,4,5', '1,2,3,4,5', '1,2,3,4,5');

-- --------------------------------------------------------

--
-- Структура таблицы `game_platforms`
--

CREATE TABLE `game_platforms` (
  `id_platform` int(12) NOT NULL,
  `name_platform` varchar(10) NOT NULL,
  `platform_view` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `game_platforms`
--

INSERT INTO `game_platforms` (`id_platform`, `name_platform`, `platform_view`) VALUES
(1, 'PC', 0),
(2, 'PS4', 0),
(3, 'XBOX', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `game_users_cat`
--

CREATE TABLE `game_users_cat` (
  `id_user_cat` int(12) NOT NULL,
  `name_user_cat` varchar(255) NOT NULL,
  `user_cat_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `game_users_cat`
--

INSERT INTO `game_users_cat` (`id_user_cat`, `name_user_cat`, `user_cat_icon`) VALUES
(1, 'Для одного игрока', 'ico_singlePlayer.png'),
(2, 'Мультиплеер по сети', 'ico_multiPlayer.png'),
(3, 'Кооперативная игра по сети', 'ico_coop.png'),
(4, 'Достижения Steam', 'ico_achievements.png'),
(5, 'Коллекционные карточки', 'ico_cards.png'),
(6, 'Контроллер (частично)', 'ico_partial_controller.png'),
(7, 'Steam Cloud', 'ico_cloud.png'),
(8, 'Контроллер (полностью)', 'ico_controller.png'),
(9, 'Для нескольких игроков', 'ico_multiPlayer.png'),
(10, 'Локальный мультиплеер', 'ico_multiPlayer.png'),
(11, 'Кооперативная игра', 'ico_coop.png'),
(12, 'Локальный кооператив', 'ico_coop.png'),
(13, 'Имеются субтитры', 'ico_cc.png'),
(14, 'Мастерская Steam', 'ico_workshop.png'),
(15, 'Доски почета Steam', 'ico_leaderboards.png'),
(16, 'Включает редактор уровней', 'ico_editor.png');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id_lang` int(11) NOT NULL,
  `name_lang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id_lang`, `name_lang`) VALUES
(1, 'русский'),
(2, 'английский'),
(3, 'японский'),
(4, 'французский'),
(5, 'итальянский');

-- --------------------------------------------------------

--
-- Структура таблицы `levels`
--

CREATE TABLE `levels` (
  `id_level` int(12) NOT NULL,
  `cnt_level` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `levels`
--

INSERT INTO `levels` (`id_level`, `cnt_level`) VALUES
(1, 100),
(2, 200),
(3, 300),
(4, 400),
(5, 500),
(6, 600),
(7, 700),
(8, 800),
(9, 900),
(10, 1000),
(11, 1100),
(12, 1200),
(13, 1300),
(14, 1400),
(15, 1500),
(16, 1600),
(17, 1700),
(18, 1800),
(19, 1900),
(20, 2000),
(21, 2100),
(22, 2200),
(23, 2300),
(24, 2400),
(25, 2500),
(26, 2600),
(27, 2700),
(28, 2800),
(29, 2900),
(30, 3000),
(31, 3100),
(32, 3200),
(33, 3300),
(34, 3400),
(35, 3500),
(36, 3600),
(37, 3700),
(38, 3800),
(39, 3900),
(40, 4000),
(41, 4100),
(42, 4200),
(43, 4300),
(44, 4400),
(45, 4500),
(46, 4600),
(47, 4700),
(48, 4800),
(49, 4900),
(50, 5000),
(51, 0),
(52, 10),
(53, 20),
(54, 30),
(55, 40),
(56, 50),
(57, 60),
(58, 70),
(59, 80),
(60, 90);

-- --------------------------------------------------------

--
-- Структура таблицы `levels_plus`
--

CREATE TABLE `levels_plus` (
  `id_lvl_plus` int(3) NOT NULL,
  `cnt_lvl_plus` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `levels_plus`
--

INSERT INTO `levels_plus` (`id_lvl_plus`, `cnt_lvl_plus`) VALUES
(1, 10),
(2, 20),
(3, 30),
(4, 40),
(5, 50),
(6, 60),
(7, 70),
(8, 80),
(9, 90);

-- --------------------------------------------------------

--
-- Структура таблицы `min_require`
--

CREATE TABLE `min_require` (
  `id_req` int(12) NOT NULL,
  `req_game` int(12) NOT NULL,
  `OS` varchar(255) NOT NULL,
  `Processor` varchar(255) NOT NULL,
  `OZU` varchar(255) NOT NULL,
  `GPU` varchar(255) NOT NULL,
  `DirectX` varchar(255) NOT NULL,
  `Memory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `min_require`
--

INSERT INTO `min_require` (`id_req`, `req_game`, `OS`, `Processor`, `OZU`, `GPU`, `DirectX`, `Memory`) VALUES
(1, 1, '64-bit Windows 7 / Windows 10', 'Intel Core i5-750, 2.66 GHz / AMD Phenom II X4 965, 3.4 GHz or AMD Ryzen™ 3 1200, 3.1 GHz', '4 GB ОЗУ', 'NVIDIA® GeForce™ GTX 670 or NVIDIA® GeForce™ GTX 1050 / AMD® Radeon™ HD 7950 or AMD® Radeon™ R9 270', 'Версии 11', '52 GB'),
(2, 2, 'Windows XP/7/8/10', 'Intel Core i3', '4096 MB ОЗУ', 'NVIDIA GeForce GT 920M', 'Версии 11', '6 GB'),
(3, 3, 'Windows 10 (+ specific versions of 7)', '3.5 GHz Intel Core i5 3450, 4.0 GHz AMD FX-8350', '8 GB ОЗУ', 'GTX680 or equivalent', 'Версии 11', '50 GB'),
(4, 5, 'Windows 7 SP1 (x64)', 'Intel Core i5-2500K CPU', '8 GB ОЗУ', 'Geforce GTX 770 or AMD Radeon HD 7870', 'Версии 11', '45 GB'),
(5, 6, 'WINDOWS® 7, 8.1, 10 (64-BIT Required)', 'Intel® Core™ i5-4460 or AMD FX™-6300 or better', '8 GB ОЗУ', 'NVIDIA® GeForce® GTX 760 or AMD Radeon™ R7 260x with 2GB Video RAM', 'Версии 11', '26 GB'),
(6, 7, 'Windows 7x64 / Windows 8.1x64 / Windows 10x64', 'Intel Core i3 2.5 Ghz or AMD Phenom II 2.6 Ghz or greater', '4 GB ОЗУ', '1 GB & AMD 5570 or nVidia 450', 'Версии 11', '12 GB'),
(7, 8, '64-bit Windows 7, Windows 8.1, Windows 10', 'Intel Core i5-4430 / AMD FX-6300', '8 GB ОЗУ', 'NVIDIA GeForce GTX 960 2GB / AMD Radeon R7 370 2GB', 'Версии 11', '30 GB'),
(8, 9, 'WINDOWS® 7, 8, 8.1, 10 (требуется 64-разрядная)', 'Intel® Core™ i5-4460 3,20 ГГц или AMD FX™-6300', '8 GB ОЗУ', 'NVIDIA® GeForce® GTX 760 или AMD Radeon™ R7 260x (видеопамять 2 ГБ)', 'Версии 11', '20 GB'),
(9, 10, 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1', 'Intel Core 2 Q6600 @ 2.40 Ггц (четырехъядерный) / AMD Phenom 9850 (четырехъядерный) @ 2.5 Ггц', '4 GB ОЗУ', 'NVIDIA 9800 GT c 1 Гб видеопамяти/ AMD HD 4870 с 1 Гб видеопамяти (DX 10, 10.1, 11)', 'DirectX 10', '72 GB'),
(10, 11, '64-разрядные операционные системы (Windows 7, Windows 8 и Windows 8.1)', 'Intel Core i3-4170 или AMD FX-8120', '8 GB ОЗУ', 'поддержка DX11, совместимая видеокарта GeForce GTX 460 1 ГБ или AMD с HD 6850 1 ГБ', 'Версии 11', '25 GB'),
(11, 12, 'Windows 7 SP1, Windows 8.1, Windows 10 (64bit versions only)', 'AMD FX 6300 @ 3.8 GHz, Ryzen 3 - 1200, Intel Core i5 2400 @ 3.1 GHz (MORE DETAILS HERE)', '8 GB ОЗУ', 'AMD Radeon R9 285, NVIDIA GeForce GTX 660 (2GB VRAM with Shader Model 5.0) (MORE DETAILS HERE)', 'Версии 11', '46+ GB'),
(12, 13, 'Windows 7 SP1 64-bit or Windows 8.1 64-bit or Windows 10 64-bit', 'Intel Core i5 or equivalent', '4 GB ОЗУ', 'NVIDIA® GeForce® GTX 550 or ATI™ Radeon™ HD 6XXX or higher', 'Версии 11', '60 GB'),
(13, 14, 'Windows 7 or Newer', '2.4 GHz Dual core', '2 GB ОЗУ', 'NVIDIA GTX 260 or ATI 4850', 'Версии 9.0c', '7 GB'),
(14, 15, 'Windows 7 or later', '2.6 GHz Dual Core or similar', '4 GB ОЗУ', 'GeForce GTX 500 series or similar', 'Версии 11', '3 GB'),
(15, 16, '64-bit Windows 7, 64-bit Windows 8 (8.1) or 64-bit Windows 10', 'Intel Core i5-2300 @ 2.80 GHz / AMD FX-4350 @ 4.2 GHz', '6 GB ОЗУ', 'NVIDIA GeForce GTX 460 or AMD Radeon HD 5870', 'Версии 11', '65 GB'),
(16, 17, 'Windows 7 64-bit', 'Intel® Core i3 540 or AMD A6-3620 or higher', '3 GB ОЗУ', 'Direct X 11.0 compliant video card with 1GB RAM (NVidia GeForce 460 or AMD Radeon 6850)', 'Версии 11', '85 GB'),
(17, 18, 'Windows 7 SP1 (64bit)', 'двуядерный Intel 2,4 ГГц или AMD Athlon 2,5 ГГц', '4 ГБ ОЗУ', 'NVIDIA GeForce 9800GT / AMD Radeon HD 5670 / Intel HD Graphics 4000 с 512 МБ видеопамяти', '10', '20 ГБ свободного пространства'),
(18, 19, 'Windows 7 / 8 / 8.1 / 10 (64-bit OS required)', 'Intel Core i3-7100', '4 GB ОЗУ', 'NVIDIA GeForce GTX 750Ti(2GB)', 'Версии 11', '50 GB'),
(19, 22, 'Windows XP с пакетом обновления 3', 'двухъядерный с тактовой частотой 2,4 ГГц', '2 ГБ (XP), 2 ГБ (Vista)', 'NVIDIA GeForce 8500 или ATI Radeon HD 2600', 'DirectX 9.0c', '13 ГБ свободного места'),
(20, 29, 'Windows 7 SP1 64bit, Windows 8.1 64bit Windows 10 64bit', 'Intel Core i3-2100 / AMD® FX-6300', '4 GB ОЗУ', 'NVIDIA® GeForce GTX 750 Ti / ATI Radeon HD 7950', 'Версии 11', '25 GB'),
(21, 33, 'Windows 7, Windows 8.1, Windows 10 (64bit versions required)', 'Intel Core i3 560 @ 3.3 GHz or AMD Phenom II X4 945 @ 3.0 GHz', '6 GB ОЗУ', 'NVIDIA GeForce GTX 460 or AMD Radeon HD 5870 (DirectX-11 compliant with 1GB of VRAM)', 'DirectX® 9.0c', '61 GB');

-- --------------------------------------------------------

--
-- Структура таблицы `online_users`
--

CREATE TABLE `online_users` (
  `id_online` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `online_user_ip` varchar(30) NOT NULL,
  `online_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int(12) NOT NULL,
  `order_user_email` varchar(100) NOT NULL,
  `order_user_name` varchar(100) NOT NULL,
  `order_user_id` int(12) NOT NULL,
  `order_games_id` varchar(255) NOT NULL,
  `order_games_cnt` int(12) NOT NULL,
  `order_games_name` mediumtext NOT NULL,
  `order_price` int(12) NOT NULL,
  `order_status` int(1) NOT NULL,
  `order_payment` varchar(2) NOT NULL,
  `order_date` varchar(30) NOT NULL,
  `order_time` varchar(6) NOT NULL,
  `order_time_for_pay` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `order_user_email`, `order_user_name`, `order_user_id`, `order_games_id`, `order_games_cnt`, `order_games_name`, `order_price`, `order_status`, `order_payment`, `order_date`, `order_time`, `order_time_for_pay`) VALUES
(3, 'igorek7967@gmail.com', 'Игорь', 1, '16,17,14,12,13', 15000, 'Warhammer: Vermintide 2,The Elder Scrolls Online,Rocket League,Assassins Creed® Odyssey,Divinity: Original Sin 2 - Definitive Edition', 4974, 1, 'AC', '11 фев. 2019', '10:30', 1),
(4, 'igorek7967@gmail.com', 'Игорь', 1, '17,16', 2, ' The Elder Scrolls Online, Warhammer: Vermintide 2', 2205, 1, 'PC', '11 фев. 2019', '10:30', 1),
(9, 'igorek7967@gmail.com', 'Игорь', 1, '2', 1, ' Party Hard 2', 392, 1, 'PC', '11 фев. 2019', '10:30', 1),
(10, 'igorek7967@gmail.com', 'Игорь', 1, '17,16,14,13', 4, ' The Elder Scrolls Online, Warhammer: Vermintide 2, Rocket League, Divinity: Original Sin 2 - Definitive Edition', 2975, 1, 'AC', '11 фев. 2019', '10:30', 1),
(14, 'igorek7967@gmail.com', 'Игорь', 1, '18', 1, ' Arma 3', 1499, 1, 'PC', '11 фев. 2019', '11:35', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `recommended_require`
--

CREATE TABLE `recommended_require` (
  `id_require` int(12) NOT NULL,
  `require_game` int(12) NOT NULL,
  `OS` varchar(255) NOT NULL,
  `Processor` varchar(255) NOT NULL,
  `OZU` varchar(255) NOT NULL,
  `GPU` varchar(255) NOT NULL,
  `DirectX` varchar(255) NOT NULL,
  `Memory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `recommended_require`
--

INSERT INTO `recommended_require` (`id_require`, `require_game`, `OS`, `Processor`, `OZU`, `GPU`, `DirectX`, `Memory`) VALUES
(1, 1, 'Windows', 'Intel Core i3-2100, 3.10 GHz', '8 GB ОЗУ', 'NVIDIA® GeForce™ GTX 780', 'Версии 11', '60 GB'),
(2, 2, 'Windows XP/7/8/10', 'Intel Core i5', '4096 MB ОЗУ', 'Geforce GTX560', 'Версии 11', '6 GB'),
(3, 3, 'Windows 10', 'Intel i7 6700k', '16 GB ОЗУ', 'NVidia GTX 1080 or AMD Radeon RX480', 'Версии 11', '50 GB'),
(4, 5, 'Windows 7 SP1 (x64), Windows 8 (x64), Windows 10 (', 'Intel Core i7 4790k CPU', '16 GB ОЗУ', 'Geforce GTX 970 or AMD Radeon R9 290', 'Версии 12', '45 GB'),
(5, 6, 'WINDOWS® 7, 8.1, 10 (64-BIT Required)', 'Intel® Core™ i7-3770 or AMD FX™-9590 or better', '8 GB ОЗУ', 'NVIDIA® GeForce® GTX 1060 or AMD Radeon™ RX 480 with 3GB VRAM', 'Версии 11', '26 GB'),
(6, 7, ' Windows 7x64 / Windows 8.1x64 / Windows 10x64', 'Fourth Generation Intel Core i5 2.5 Ghz or AMD FX8350 4.0 Ghz or greater', '8 GB ОЗУ', '2GB & AMD 7970 or nVidia 770 or greater', 'Версии 11', '12 GB'),
(7, 8, '64-bit Windows 7, Windows 8.1, Windows 10', 'Intel Core i5-6600K / AMD Ryzen 5 1600', '16 GB ОЗУ', 'NVIDIA GeForce GTX 1060 3GB / AMD Radeon RX 580 4GB', 'Версии 11', '30 GB'),
(8, 9, 'WINDOWS® 7, 8, 8.1, 10 (требуется 64-разрядная)', 'Intel® Core™ i7 3770 3,4 ГГц или Intel® Core™ i3 8350 4ГГц или AMD Ryzen™ 5 1500X', '8 GB ОЗУ', 'NVIDIA® GeForce® GTX 1060 (видеопамять 3 ГБ) или AMD Radeon™ RX 570 (видеопамять 4 ГБ)', 'Версии 11', '20 GB'),
(9, 10, 'Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64', 'Intel Core i5 3470 @ 3.2 Ггц (четырехъядерный) / AMD X8 FX-8350 @ 4 Ггц (восьмиядерный)', '8 GB ОЗУ', 'NVIDIA GTX 660 с 2 Гб видеопамяти / AMD HD7870 с 2 Гб видеопамяти', 'DirectX 10', '72 GB'),
(10, 11, '64-разрядные Операционные системы (Windows 7, Wind', 'Intel Core i3-4170 или AMD FX-8300 и выше', '8 GB ОЗУ', 'поддержка DX11, совместимая видеокарта GeForce 760 или AMD HD на 8800 или выше c 4 Гб оперативной памяти', 'Версии 11', '25 GB'),
(11, 12, 'Windows 7 SP1, Windows 8.1, Windows 10 (64bit vers', 'AMD FX-8350 @ 4.0 GHz, Ryzen 5 - 1400, Intel Core i7-3770 @ 3.5 GHz or better (MORE DETAILS HERE)', '8 GB ОЗУ', 'AMD Radeon R9 290, NVIDIA GeForce GTX 970 (4GB VRAM with Shader Model 5.0) or better (MORE DETAILS HERE)', 'Версии 12', '46+ GB'),
(12, 13, 'Windows 7 SP1 64-bit or Windows 8.1 64-bit or Wind', 'Intel Core i7 or equivalent', '8 GB ОЗУ', 'NVIDIA GeForce GTX 770 or AMD R9 280', 'Версии 11', '60 GB'),
(13, 14, 'Windows 7 or Newer', '2.5+ GHz Quad core', '4 GB ОЗУ', 'NVIDIA GTX 660 or better, ATI 7950 or better', 'Версии 9.0c', '7 GB'),
(14, 15, 'Windows 7 or later', 'Intel Core i5 2.6GHz or similar', '8 GB ОЗУ', 'GeForce GTX 700 series or similar', 'Версии 11', '3 GB'),
(15, 16, '64-bit Windows 10', 'Intel Core i7- 3770 @ 3.5 GHz or AMD FX-8350 @ 4 GHz', '8 GB ОЗУ', 'NVIDIA GeForce GTX 970/1060 or ATI Radeon R9 series', 'Версии 12', '65 GB'),
(16, 17, 'Windows 7 64-bit', 'Intel® Core i5 2300 or AMD FX4350', '8 GB ОЗУ', 'Direct X 11.0 compliant video card with 2GB RAM (NVIDIA® GeForce® GTX 750 or AMD Radeon™ HD 7850) or higher', 'Версии 11', '85 GB'),
(17, 18, 'Windows 7/ 8 / 10 (64-разрядная)', 'Intel Core i5-4460 или AMD FX 4300 или лучше', '6 ГБ ОЗУ', 'NVIDIA GeForce GTX 660 / AMD Radeon HD 7800 с 1 ГБ видеопамяти или лучше', '11', '25 ГБ свободного пространства (SSD/Hybrid HDD/SSHD'),
(18, 19, 'Windows 7 / 8 / 8.1 / 10 (64-bit OS required)', 'Intel Core i5-7500', '8 GB ОЗУ', 'NVIDIA GeForce GTX 1060 (3GB)', 'Версии 11', '50 GB'),
(19, 22, 'Windows XP с пакетом обновления 3, Vista и 7', 'четырехъядерный с тактовой частотой 2,3 ГГц', '2 ГБ', 'NVIDIA GeForce GTX 560 или ATI Radeon HD 5850', 'DirectX 9.0c', '20 ГБ свободного места'),
(20, 29, 'Windows 7 SP1 64bit, Windows 8.1 64bit Windows 10 64bit', 'Intel Core i7-3770 / AMD® FX-8350', '8 GB ОЗУ', 'NVIDIA® GeForce GTX 970 / ATI Radeon R9 series', 'Версии 11', '25 GB'),
(21, 33, 'Windows 7 SP1, Windows 8.1, Windows 10 (64bit versions required)', 'Intel Core i5-2500K @ 3.3 GHz or better or AMD FX-8120 @ 3.1 Ghz or better', '8 GB ОЗУ', 'NVIDIA GeForce GTX 670 (or GTX 760 / GTX 960) or AMD Radeon HD 7970 (or R9 280x [2GB VRAM] / R9 380 / Fury X)', 'DirectX® 9.0c', '61 GB');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id_review` int(11) NOT NULL,
  `user_name_review` varchar(30) NOT NULL,
  `text_review` mediumtext NOT NULL,
  `vote_review` varchar(10) NOT NULL,
  `game_id_review` int(12) NOT NULL,
  `review_date` varchar(50) NOT NULL,
  `review_time` varchar(30) NOT NULL,
  `auth_user_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id_review`, `user_name_review`, `text_review`, `vote_review`, `game_id_review`, `review_date`, `review_time`, `auth_user_id`) VALUES
(19, 'Игорь', 'qwe', 'like', 16, '13 фев. 2019', '00:23', 1),
(21, 'Игорь', 'test', 'dislike', 2, '13 фев. 2019', '02:15', 1),
(22, 'Игорь', 'Test12', 'like', 5, '14 фев. 2019', '07:28', 1),
(23, 'Игорь', 'test', 'dislike', 19, '16 фев. 2019', '16:06', 1),
(24, 'hit or miss?', 'ffsdfsffds', 'like', 9, '28 фев. 2019', '15:54', 1),
(25, 'qwew', 'qwe', 'dislike', 33, '11 март 2019', '23:47', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews_of_review`
--

CREATE TABLE `reviews_of_review` (
  `id_rev` int(12) NOT NULL,
  `id_rev_of_rev` int(12) NOT NULL,
  `rev_likes` int(12) NOT NULL,
  `rev_useful` int(12) NOT NULL,
  `rev_user` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews_of_review`
--

INSERT INTO `reviews_of_review` (`id_rev`, `id_rev_of_rev`, `rev_likes`, `rev_useful`, `rev_user`) VALUES
(4, 19, 0, 2, 1),
(6, 21, 1, 0, 1),
(7, 22, 0, 2, 1),
(8, 23, 0, 2, 1),
(9, 24, 1, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `steam_buy_links`
--

CREATE TABLE `steam_buy_links` (
  `id_steam_link` int(12) NOT NULL,
  `link_game_id` int(12) NOT NULL,
  `link_game` varchar(255) NOT NULL,
  `site_game` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `steam_buy_links`
--

INSERT INTO `steam_buy_links` (`id_steam_link`, `link_game_id`, `link_game`, `site_game`) VALUES
(1, 19, '<iframe src=\"https://store.steampowered.com/widget/502500/304971/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'https://ace7.acecombat.jp/'),
(2, 18, '<iframe src=\"https://store.steampowered.com/widget/107410/31539/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'https://arma3.com/'),
(3, 17, '<iframe src=\"https://store.steampowered.com/widget/306130/164609/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'https://www.elderscrollsonline.com'),
(4, 16, '<iframe src=\"https://store.steampowered.com/widget/552500/259128/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://www.vermintide.com'),
(5, 15, '<iframe src=\"https://store.steampowered.com/widget/648800/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://www.raft-game.com'),
(6, 14, '<iframe src=\"https://store.steampowered.com/widget/252950/30948/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://www.rocketleague.com/'),
(7, 13, '<iframe src=\"https://store.steampowered.com/widget/435150/207600/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://divinity.game'),
(8, 12, '<iframe src=\"https://store.steampowered.com/widget/812140/247989/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://www.assassinscreed.com'),
(9, 11, '<iframe src=\"https://store.steampowered.com/widget/381210/71374/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://www.deadbydaylight.com'),
(10, 10, '<iframe src=\"https://store.steampowered.com/widget/271590/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://www.rockstargames.com/V/'),
(11, 9, '<iframe src=\"https://store.steampowered.com/widget/582010/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://www.monsterhunterworld.com/'),
(12, 8, '<iframe src=\"https://store.steampowered.com/widget/578080/147588/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://www.playbattlegrounds.com'),
(13, 7, '<iframe src=\"https://store.steampowered.com/widget/289070/123215/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://www.civilization.com/'),
(14, 6, '<iframe src=\"https://store.steampowered.com/widget/883710/280800/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://www.residentevil2.com/'),
(15, 5, '<iframe src=\"https://store.steampowered.com/widget/674020/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://worldwar3.com'),
(16, 3, '<iframe src=\"https://store.steampowered.com/widget/378860/70550/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://www.slightlymadstudios.com/'),
(17, 2, '<iframe src=\"https://store.steampowered.com/widget/572430/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'https://www.partyhard.game/'),
(18, 1, '<iframe src=\"https://store.steampowered.com/widget/627270/169899/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'https://www.injustice.com/'),
(19, 22, '<iframe src=\"https://store.steampowered.com/widget/49520/16725/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://www.borderlands2.com/'),
(20, 23, '<iframe src=\"https://store.steampowered.com/widget/218560/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', ''),
(21, 24, '<iframe src=\"https://store.steampowered.com/widget/230090/27600/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', ''),
(22, 25, '<iframe src=\"https://store.steampowered.com/widget/224180/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', ''),
(23, 26, '<iframe src=\"https://store.steampowered.com/widget/218550/28580/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', ''),
(24, 27, '<iframe src=\"https://store.steampowered.com/widget/224200/26705/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', ''),
(25, 28, '<iframe src=\"https://store.steampowered.com/widget/213250/18945/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', ''),
(26, 29, '<iframe src=\"https://store.steampowered.com/widget/374320/69024/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'https://en.bandainamcoent.eu/dark-souls'),
(27, 30, '<iframe src=\"https://store.steampowered.com/widget/442010/93692/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', ''),
(28, 31, '<iframe src=\"https://store.steampowered.com/widget/506970/117007/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', ''),
(29, 32, '<iframe src=\"https://store.steampowered.com/widget/506971/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', ''),
(30, 33, '<iframe src=\"https://store.steampowered.com/widget/359550/88522/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', 'http://rainbow6.ubi.com/'),
(31, 34, '<iframe src=\"https://store.steampowered.com/widget/982730/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', ''),
(32, 35, '<iframe src=\"https://store.steampowered.com/widget/957126/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', ''),
(33, 36, '<iframe src=\"https://store.steampowered.com/widget/957122/\" frameborder=\"0\" width=\"646\" height=\"190\"></iframe>', '');

-- --------------------------------------------------------

--
-- Структура таблицы `support`
--

CREATE TABLE `support` (
  `id_support` int(12) NOT NULL,
  `support_user_id` int(12) NOT NULL,
  `support_user_email` varchar(100) NOT NULL,
  `support_user_name` varchar(30) NOT NULL,
  `support_user_theme` varchar(255) NOT NULL,
  `support_user_text` varchar(255) NOT NULL,
  `support_checked` int(1) NOT NULL,
  `supp_user_photo` int(1) NOT NULL,
  `support_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `support`
--

INSERT INTO `support` (`id_support`, `support_user_id`, `support_user_email`, `support_user_name`, `support_user_theme`, `support_user_text`, `support_checked`, `supp_user_photo`, `support_date`) VALUES
(1, 1, 'igorek7967@gmail.com', 'Igorek', 'Загрузка', 'Долго загружаются игры', 1, 0, '22 дек. 2017 22:30'),
(2, 2, 'Test@gmail.com', 'Test', 'Test', 'Test', 1, 0, '22 янв. 2018 22:30'),
(3, 1, 'igorek7967@gmail.com', 'Igor', 'test', 'test', 1, 0, '27 янв. 2019 13:44'),
(4, 1, 'igorek7967@gmail.com', 'Igor', 'fsdfsdfsdfsdf', 'fsdfsdfsdferqweewq', 1, 0, '27 янв. 2019 15:52'),
(5, 1, 'igorek7967@gmail.com', 'Igor', 'test', 'Привет', 1, 0, '01 фев. 2019 02:35'),
(6, 1, 'igorek7967@ovi.com', '132', '123', '132', 1, 1, '10 фев. 2019 00:48'),
(7, 1, 'igorek7967@gmail.com', 'Igor', 'test', '1561', 1, 1, '10 фев. 2019 00:49'),
(8, 1, 'igorek7967@gmail.com', 'Igor', 'Ответ', '55555', 1, 1, '10 фев. 2019 00:50'),
(9, 1, 'igorek7967@gmail.com', 'Igor', 'qwe', '44915161', 1, 1, '10 фев. 2019 00:52');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(12) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_login` varchar(100) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_country` varchar(100) NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_desc` varchar(100) NOT NULL,
  `user_link` varchar(15) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_have_photo` int(1) NOT NULL,
  `user_have_bg` int(1) NOT NULL,
  `user_level` int(12) NOT NULL,
  `2FA` int(1) NOT NULL,
  `2FA_secret` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `user_email`, `user_login`, `user_name`, `user_country`, `user_city`, `user_desc`, `user_link`, `user_pwd`, `user_have_photo`, `user_have_bg`, `user_level`, `2FA`, `2FA_secret`) VALUES
(1, 'igorek7967@gmail.com', 'nekit2000', 'hit or miss?', 'RU', 'Moscow', 'Информация не отсутствует.', 'hitormiss', 'ikmd9m/Aet1M3cT9Pf9vzT6VMBi+k2AXBFZ8HSh1sW73s3DMXeQuEPKVsKNbOv5oZeLVgUwkVKqW7aRgvoMbfQAztXLnE/unSAGGps/uAytSncg4u2IUvHuYGNjJS/xT|CvwnaxCHFRgclMLj8+AtuFXrradPilzMN9/EbR1KU4Q=', 1, 0, 5000, 0, ''),
(3, 'qwe@gmail.com', 'qweqwe', 'qwew', 'CN', '', 'Информация отсутствует.', '', '+zanarLA0tSPQkmRno1a6PoMD2+SWS7+vrq0d79rDAbDi3A8vQ2J8f28vp5cOra3ZxG1HBiQdez/qZqCnIna0J1JbLqnfRe2hGWkIJyuRS20OezRbLG27PAoiRfvilB1|DwF5I+KgTGFoZdZEBWs44hHylslu1jOrog4a/nOuxNE=', 1, 0, 10, 0, ''),
(4, 'qwe1@gmail.com', 'Rito123', 'Rito', '', '', '', '', 'Mosf6ITF2ByG6os/H6AVR3H675xuA0shdPUU1RL/8l8ropjIzcJ2+eapmI9gWV9PIo4eg3zRcGx8j1n//EgxMqwCZ8nqsVAMoadGCV8zg+aR3saGHH/MD7P3BZZqa3OE|OrhHXDT6XnIoU+AvGTEZflAr16UB6Co4RsRi0xKSlRg=', 1, 0, 1, 0, ''),
(5, 'qwe2@gmail.com', 'Yams123', 'YAMS', '', '', '', '', 'fVJpLyiFfuDcNFT37t24qW1zrZ1PUjdmvrtqBh6Ct0I13bFkJjuUnWgNRxCpQhHdgJr1g6oamzMGMJU2rfn5ZDokyoL+8FmwKx1l3OSfT3JCCs1FnP3Z6jEmjXZOwbDE|rqz5dTCxNA0lVXfOBcQzG8/7q8OMVslS6wZc9yXWsOo=', 1, 0, 1, 0, ''),
(6, 'qwe3@gmail.com', 'Budgotov123', 'budgotov', '', '', '', '', 'j5p9D/xkRYe0F7XTosIjFNHN2EVPexfA7CFhRZ88kNQK2Tu9xo9GYFXVbH2TD08mCd0fs6HgHo/irgF0cwbw6SSkW38dRw6191h7B/BHUWwfqIZWxsi+5AUKkBWP3OkU|MfnYgj8RfdAG4PiInDIN8L6VeuknLf5Asls6PcVCBHA=', 1, 0, 1, 0, ''),
(7, 'eleralexa873@gmail.com', 'Anya123', 'Anya', '', '', '', '', 'WuCTeOtERfRUKwZLe80x3QSElN5uOxQpWMqLUPMMWgokXMlzgjzG8CI+Pw26NLHrBe4GrgYSV6+c3q7JhHD6B0CGjJABBkvWZ7ek8I9iUiJ25VHRI/GnHkvkMgwNaIUl|SpswZX5zGYN2zPynVvr9h0d0GizktsYujNl3KBD7TiY=', 0, 0, 1, 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `user_comments`
--

CREATE TABLE `user_comments` (
  `id_com` int(12) NOT NULL,
  `user_id_com` int(12) NOT NULL,
  `user_com` int(12) NOT NULL,
  `name_user_com` varchar(100) NOT NULL,
  `text_com` varchar(255) NOT NULL,
  `date_com` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_comments`
--

INSERT INTO `user_comments` (`id_com`, `user_id_com`, `user_com`, `name_user_com`, `text_com`, `date_com`) VALUES
(1, 3, 1, 'hit or miss?', 'Привет, это тестовый коммент', '27 фев. 2019 18:58'),
(2, 3, 1, 'hit or miss?', 'Тестовый коммент №2', '27 фев. 2019 19:00'),
(3, 3, 1, 'hit or miss?', 'qwe', '27 фев. 2019 21:01');

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id_video` int(12) NOT NULL,
  `url_video` varchar(255) NOT NULL,
  `id_on_youtube` varchar(255) NOT NULL,
  `id_game_video` int(12) NOT NULL,
  `name_game_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id_video`, `url_video`, `id_on_youtube`, `id_game_video`, `name_game_video`) VALUES
(1, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/hX0WA6yIZ7I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'hX0WA6yIZ7I', 1, 'Injustice 2'),
(2, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eVtFckioqjk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'eVtFckioqjk', 2, 'Party Hard 2'),
(3, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/xRkfDBK3rDk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'xRkfDBK3rDk', 3, 'Project CARS 2'),
(4, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ysgzR2jMwNE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'ysgzR2jMwNE', 5, 'World War 3'),
(9, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TdbocZWvviM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'TdbocZWvviM', 6, 'RESIDENT EVIL 2 / BIOHAZARD RE:2'),
(10, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qvBf6WBatk0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'qvBf6WBatk0', 7, 'Sid Meier’s Civilization® VI'),
(11, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/m07avVy73hs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'm07avVy73hs', 8, 'PLAYERUNKNOWNS BATTLEGROUNDS'),
(12, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ro6r15wzp2o\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Ro6r15wzp2o', 9, 'MONSTER HUNTER: WORLD'),
(13, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/QkkoHAzjnUs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'QkkoHAzjnUs', 10, 'Grand Theft Auto V'),
(14, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JGhIXLO3ul8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'JGhIXLO3ul8', 11, 'Dead by Daylight'),
(15, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/YyuIaNvhVZ0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'YyuIaNvhVZ0', 12, 'Assassins Creed® Odyssey'),
(16, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/bTWTFX8qzPI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'bTWTFX8qzPI', 13, 'Divinity: Original Sin 2 - Definitive Edition'),
(17, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Vce7Z9ziAjs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Vce7Z9ziAjs', 14, 'Rocket League'),
(18, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/__w615A5lC4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '__w615A5lC4', 15, 'Raft'),
(19, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JTlpd3O6-gE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'JTlpd3O6-gE', 16, 'Warhammer: Vermintide 2'),
(20, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/_cdOlq1JRos\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '_cdOlq1JRos', 17, 'The Elder Scrolls Online'),
(21, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/M1YBZUxMX8g\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'M1YBZUxMX8g', 18, 'Arma 3'),
(22, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/A9QBFErOIH4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'A9QBFErOIH4', 19, 'ACE COMBAT 7: SKIES UNKNOWN'),
(23, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6wlvYh0h63k\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '6wlvYh0h63k', 33, 'Tom Clancys Rainbow Six Siege');

-- --------------------------------------------------------

--
-- Структура таблицы `wish_list`
--

CREATE TABLE `wish_list` (
  `id_wish` int(12) NOT NULL,
  `wish_user_id` int(12) NOT NULL,
  `wish_game_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wish_list`
--

INSERT INTO `wish_list` (`id_wish`, `wish_user_id`, `wish_game_id`) VALUES
(1, 1, 19),
(2, 1, 16),
(3, 3, 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_art`);

--
-- Индексы таблицы `articles_category`
--
ALTER TABLE `articles_category`
  ADD PRIMARY KEY (`id_art_cat`);

--
-- Индексы таблицы `article_comments`
--
ALTER TABLE `article_comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Индексы таблицы `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id_badge`);

--
-- Индексы таблицы `buyed_games`
--
ALTER TABLE `buyed_games`
  ADD PRIMARY KEY (`id_buy`);

--
-- Индексы таблицы `categories_alt`
--
ALTER TABLE `categories_alt`
  ADD PRIMARY KEY (`id_alt_cat`);

--
-- Индексы таблицы `categories_recommended`
--
ALTER TABLE `categories_recommended`
  ADD PRIMARY KEY (`id_rec_cat`);

--
-- Индексы таблицы `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id_message`);

--
-- Индексы таблицы `chat_rooms`
--
ALTER TABLE `chat_rooms`
  ADD PRIMARY KEY (`id_room`);

--
-- Индексы таблицы `coming_soon`
--
ALTER TABLE `coming_soon`
  ADD PRIMARY KEY (`id_com_game`);

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id_country`);

--
-- Индексы таблицы `friend_list`
--
ALTER TABLE `friend_list`
  ADD PRIMARY KEY (`id_list`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_photo`);

--
-- Индексы таблицы `gallery_review`
--
ALTER TABLE `gallery_review`
  ADD PRIMARY KEY (`id_gall_review`);

--
-- Индексы таблицы `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id_game`);

--
-- Индексы таблицы `game_categories`
--
ALTER TABLE `game_categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `game_keys`
--
ALTER TABLE `game_keys`
  ADD PRIMARY KEY (`id_key`);

--
-- Индексы таблицы `game_languages`
--
ALTER TABLE `game_languages`
  ADD PRIMARY KEY (`id_game_lang`);

--
-- Индексы таблицы `game_platforms`
--
ALTER TABLE `game_platforms`
  ADD PRIMARY KEY (`id_platform`);

--
-- Индексы таблицы `game_users_cat`
--
ALTER TABLE `game_users_cat`
  ADD PRIMARY KEY (`id_user_cat`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id_lang`);

--
-- Индексы таблицы `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id_level`);

--
-- Индексы таблицы `levels_plus`
--
ALTER TABLE `levels_plus`
  ADD PRIMARY KEY (`id_lvl_plus`);

--
-- Индексы таблицы `min_require`
--
ALTER TABLE `min_require`
  ADD PRIMARY KEY (`id_req`);

--
-- Индексы таблицы `online_users`
--
ALTER TABLE `online_users`
  ADD PRIMARY KEY (`id_online`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `recommended_require`
--
ALTER TABLE `recommended_require`
  ADD PRIMARY KEY (`id_require`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_review`);

--
-- Индексы таблицы `reviews_of_review`
--
ALTER TABLE `reviews_of_review`
  ADD PRIMARY KEY (`id_rev`);

--
-- Индексы таблицы `steam_buy_links`
--
ALTER TABLE `steam_buy_links`
  ADD PRIMARY KEY (`id_steam_link`);

--
-- Индексы таблицы `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id_support`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `user_comments`
--
ALTER TABLE `user_comments`
  ADD PRIMARY KEY (`id_com`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`);

--
-- Индексы таблицы `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id_wish`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `articles_category`
--
ALTER TABLE `articles_category`
  MODIFY `id_art_cat` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `article_comments`
--
ALTER TABLE `article_comments`
  MODIFY `id_comment` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `badges`
--
ALTER TABLE `badges`
  MODIFY `id_badge` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `buyed_games`
--
ALTER TABLE `buyed_games`
  MODIFY `id_buy` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `categories_alt`
--
ALTER TABLE `categories_alt`
  MODIFY `id_alt_cat` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `categories_recommended`
--
ALTER TABLE `categories_recommended`
  MODIFY `id_rec_cat` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id_message` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT для таблицы `chat_rooms`
--
ALTER TABLE `chat_rooms`
  MODIFY `id_room` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `coming_soon`
--
ALTER TABLE `coming_soon`
  MODIFY `id_com_game` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id_country` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT для таблицы `friend_list`
--
ALTER TABLE `friend_list`
  MODIFY `id_list` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_photo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `gallery_review`
--
ALTER TABLE `gallery_review`
  MODIFY `id_gall_review` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `games`
--
ALTER TABLE `games`
  MODIFY `id_game` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `game_categories`
--
ALTER TABLE `game_categories`
  MODIFY `id_category` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `game_keys`
--
ALTER TABLE `game_keys`
  MODIFY `id_key` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=668;

--
-- AUTO_INCREMENT для таблицы `game_languages`
--
ALTER TABLE `game_languages`
  MODIFY `id_game_lang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `game_platforms`
--
ALTER TABLE `game_platforms`
  MODIFY `id_platform` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `game_users_cat`
--
ALTER TABLE `game_users_cat`
  MODIFY `id_user_cat` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id_lang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `levels`
--
ALTER TABLE `levels`
  MODIFY `id_level` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `levels_plus`
--
ALTER TABLE `levels_plus`
  MODIFY `id_lvl_plus` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `min_require`
--
ALTER TABLE `min_require`
  MODIFY `id_req` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `online_users`
--
ALTER TABLE `online_users`
  MODIFY `id_online` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `recommended_require`
--
ALTER TABLE `recommended_require`
  MODIFY `id_require` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `reviews_of_review`
--
ALTER TABLE `reviews_of_review`
  MODIFY `id_rev` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `steam_buy_links`
--
ALTER TABLE `steam_buy_links`
  MODIFY `id_steam_link` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `support`
--
ALTER TABLE `support`
  MODIFY `id_support` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user_comments`
--
ALTER TABLE `user_comments`
  MODIFY `id_com` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id_wish` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;