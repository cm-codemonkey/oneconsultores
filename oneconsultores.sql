-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-01-2021 a las 17:51:04
-- Versión del servidor: 10.0.38-MariaDB-0+deb8u1
-- Versión de PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `one_consultores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) NOT NULL,
  `url` text NOT NULL,
  `title` text NOT NULL,
  `id_category` bigint(20) DEFAULT NULL,
  `image` text,
  `article` longtext,
  `sm_title` text,
  `sm_description` text,
  `sm_image` text,
  `tags` text,
  `status` set('draft','published','unpublished','removed') NOT NULL DEFAULT 'published',
  `publication_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `url`, `title`, `id_category`, `image`, `article`, `sm_title`, `sm_description`, `sm_image`, `tags`, `status`, `publication_date`, `author`) VALUES
(1, 'Hello-world', 'a:1:{s:2:\"es\";s:11:\"Hello world\";}', NULL, '1_VR1dh5_eGjIQC7zhGTyCGA_ccGKHO.png', '{\"es\":\"<p>&iexcl;Hola mundo!<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fdharmannofficial%2Fvideos%2F730965147475738%2F&amp;show_text=0&amp;width=384\\\" width=\\\"384\\\" height=\\\"476\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p><iframe src=\\\"\\/\\/www.youtube.com\\/embed\\/7QU1nvuxaMA\\\" width=\\\"560\\\" height=\\\"314\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\"}', 'a:1:{s:2:\"es\";N;}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'removed', '2020-06-29 16:32:04', 2),
(2, 'Prueba-de-poligrafo', 'a:1:{s:2:\"es\";s:57:\"Capsula #SIPSE \"Pruebas de polígrafo en One Consultores\"\";}', NULL, '287Instagram_Post_4_zcwZUA.jpeg', '{\"es\":\"<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fmarinayzofy%2Fvideos%2F221299535670986%2F&amp;show_text=0&amp;width=560\\\" width=\\\"560\\\" height=\\\"315\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\"}', 'a:1:{s:2:\"es\";s:57:\"Capsula #SIPSE \"Pruebas de polígrafo en One Consultores\"\";}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'removed', '2020-07-28 12:54:54', 2),
(3, 'Re-incorporacion-laboral-despues-del-covid-19', 'a:1:{s:2:\"es\";s:49:\"\"Re-incorporación laboral después del covid-19\"\";}', 2, 'webinanr_5PRZ71.png', '{\"es\":\"<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?href=https%3A%2F%2Fwww.facebook.com%2FOneConsultoresMx%2Fvideos%2F870587543436321%2F&amp;show_text=0&amp;width=560\\\" width=\\\"560\\\" height=\\\"373\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\\r\\n<p>Webinar series CCF 2020<\\/p>\\r\\n<p>La prevenci&oacute;n y mitigaci&oacute;n de COVID-19 en los lugares de trabajo requiere procesos eficaces de evaluaci&oacute;n y gesti&oacute;n de riesgos. Conoce las herramientas para evaluar los riesgos relacionados al COVID-19 y la implementaci&oacute;n de medidas para proteger la seguridad y la salud de los trabajadores.<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>&nbsp;<\\/p>\"}', 'a:1:{s:2:\"es\";N;}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'removed', '2020-07-28 13:48:44', 2),
(4, 'Estas-listo-para-emprender', 'a:1:{s:2:\"es\";s:30:\"¿Estás listo para emprender?\";}', NULL, 'blogjuan_maria_SSfNgy.png', '{\"es\":\"<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?href=https%3A%2F%2Fwww.facebook.com%2FOneConsultoresMx%2Fvideos%2F2598500543746021%2F&amp;show_text=0&amp;width=560\\\" width=\\\"560\\\" height=\\\"315\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\\r\\n<p>&iquest;Est&aacute;s listo para emprender?<\\/p>\\r\\n<p>Sin duda comenzar un proyecto empresarial constituye un gran reto. Existen ciertos factores como financiero o inclusive el tener algunos conocimientos en el &aacute;rea en la que queremos emprender. Sin embargo, no es imposible.<\\/p>\\r\\n<p>Antes de nada, aqu&iacute; tienes algunas cuestiones sobre las que debes reflexionar:<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<ul>\\r\\n<li>Tienes un modelo de negocio definido.<\\/li>\\r\\n<li>Tienes financiamiento suficiente.<\\/li>\\r\\n<li>Entiendes los riesgos del negocio.<\\/li>\\r\\n<li>Est&aacute;s comprometido.<\\/li>\\r\\n<li>Estas dispuesto a aprender.<\\/li>\\r\\n<li>Tienes la experiencia clave.<\\/li>\\r\\n<\\/ul>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>En <strong>One Consultores<\\/strong> trabaja de la mano con un equipo <strong>profesional experimentado y multidisciplinario<\\/strong> hasta el final del camino. Contar con asesoramiento supone una gran ayuda en estos casos y tambi&eacute;n una oportunidad para estar al d&iacute;a de las novedades legales, contables y fiscales, del sector de tu negocio.<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>&nbsp;<\\/p>\\r\\n<p>&nbsp;<\\/p>\"}', 'a:1:{s:2:\"es\";N;}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'published', '2020-08-13 15:37:53', 2),
(5, 'Que-es-una-consultoria-en-recursos-humanos', 'a:1:{s:2:\"es\";s:47:\"¿Qué es una consultoría en recursos humanos?\";}', NULL, 'RH_zGy9Ze.png', '{\"es\":\"<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?href=https%3A%2F%2Fwww.facebook.com%2FOneConsultoresMx%2Fvideos%2F298699377863995%2F&amp;show_text=0&amp;width=560\\\" width=\\\"560\\\" height=\\\"315\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\"}', 'a:1:{s:2:\"es\";N;}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'published', '2020-09-15 13:34:27', 2),
(6, 'La-salud-de-tus-empleados', 'a:1:{s:2:\"es\";s:25:\"La salud de tus empleados\";}', NULL, 'blog_medico_XAIny6.png', '{\"es\":\"<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?href=https%3A%2F%2Fwww.facebook.com%2FOneConsultoresMx%2Fvideos%2F642469029805212%2F&amp;show_text=0&amp;width=476\\\" width=\\\"476\\\" height=\\\"476\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\"}', 'a:1:{s:2:\"es\";N;}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'published', '2020-09-17 10:35:12', 2),
(7, 'El-contador-en-la-actualidad', 'a:1:{s:2:\"es\";s:28:\"El contador en la actualidad\";}', NULL, 'contable_blog_aazX0w.png', '{\"es\":\"<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?href=https%3A%2F%2Fwww.facebook.com%2FOneConsultoresMx%2Fvideos%2F682631065664791%2F&amp;show_text=0&amp;width=560\\\" width=\\\"560\\\" height=\\\"315\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\"}', 'a:1:{s:2:\"es\";N;}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'published', '2020-09-17 12:29:30', 2),
(8, 'Aspectos-legales-para-iniciar-un-negocio', 'a:1:{s:2:\"es\";s:40:\"Aspectos legales para iniciar un negocio\";}', NULL, 'legal_blog_47Lkil.png', '{\"es\":\"<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?href=https%3A%2F%2Fwww.facebook.com%2FOneConsultoresMx%2Fvideos%2F695587921037981%2F&amp;show_text=0&amp;width=560\\\" width=\\\"560\\\" height=\\\"315\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\"}', 'a:1:{s:2:\"es\";N;}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'published', '2020-09-17 13:01:23', 2),
(9, 'El-poligrafo-como-prueba-laboral', 'a:1:{s:2:\"es\";s:33:\"El polígrafo como prueba laboral\";}', NULL, 'blogpoli_jEF0Si.png', '{\"es\":\"<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?href=https%3A%2F%2Fwww.facebook.com%2FOneConsultoresMx%2Fvideos%2F325979481953024%2F&amp;show_text=0&amp;width=560\\\" width=\\\"560\\\" height=\\\"315\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\"}', 'a:1:{s:2:\"es\";N;}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'published', '2020-09-18 10:38:40', 2),
(10, 'ID-ONE', 'a:1:{s:2:\"es\";s:6:\"ID-ONE\";}', NULL, 'BLOG_ID_ONE_enzuwP.png', '{\"es\":\"<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?href=https%3A%2F%2Fwww.facebook.com%2Foneconsultoresmx%2Fvideos%2F776104619901603%2F&amp;show_text=0&amp;width=560\\\" width=\\\"560\\\" height=\\\"315\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\\r\\n<p><strong>ID-ONE&nbsp;<\\/strong><\\/p>\\r\\n<p>La nueva tarjeta para tus trabajadores. En One consultores contamos con un software de alta seguridad, integrado a nuestras tarjetas inteligentes, donde solo el personal autorizado podr&aacute; tener acceso y visualizarlo en tiempo real con un simple escaneo.<\\/p>\"}', 'a:1:{s:2:\"es\";N;}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'published', '2020-10-13 15:14:30', 2),
(11, 'Tendencias-de-Marketing-y-Diseno-Grafico-que-debes-conocer', 'a:1:{s:2:\"es\";s:60:\"Tendencias de Marketing y Diseño Gráfico que debes conocer\";}', NULL, 'marketinggg_LVtXYp.png', '{\"es\":\"<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?height=314&amp;href=https%3A%2F%2Fwww.facebook.com%2Foneconsultoresmx%2Fvideos%2F613657112871808%2F&amp;show_text=false&amp;width=560\\\" width=\\\"560\\\" height=\\\"314\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\"}', 'a:1:{s:2:\"es\";N;}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'published', '2020-12-22 12:20:18', 2),
(12, 'Temas-fiscales-que-debes-conocer-si-vas-a-iniciar-un-negocio', 'a:1:{s:2:\"es\";s:60:\"Temas fiscales que debes conocer si vas a iniciar un negocio\";}', NULL, 'FC_uDJz5c.jpeg', '{\"es\":\"<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?height=314&amp;href=https%3A%2F%2Fwww.facebook.com%2Foneconsultoresmx%2Fvideos%2F3844193222298863%2F&amp;show_text=false&amp;width=560\\\" width=\\\"560\\\" height=\\\"314\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\"}', 'a:1:{s:2:\"es\";N;}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'published', '2020-12-22 12:46:27', 2),
(13, 'Funciones-de-la-Psicologia-Organizacional', 'a:1:{s:2:\"es\";s:43:\" Funciones de la Psicología Organizacional\";}', NULL, 'PSC_qTda4M.jpeg', '{\"es\":\"<p><iframe style=\\\"border: none; overflow: hidden;\\\" src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/video.php?height=314&amp;href=https%3A%2F%2Fwww.facebook.com%2Foneconsultoresmx%2Fvideos%2F1017168412138867%2F&amp;show_text=false&amp;width=560\\\" width=\\\"560\\\" height=\\\"314\\\" frameborder=\\\"0\\\" scrolling=\\\"no\\\" allowfullscreen=\\\"allowfullscreen\\\"><\\/iframe><\\/p>\"}', 'a:1:{s:2:\"es\";N;}', 'a:1:{s:2:\"es\";N;}', NULL, NULL, 'published', '2020-12-22 13:35:40', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) NOT NULL,
  `category` text NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category`, `description`) VALUES
(2, 'a:1:{s:2:\"es\";s:7:\"Webinar\";}', 'a:1:{s:2:\"es\";s:7:\"webinar\";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `title` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `levels`
--

INSERT INTO `levels` (`id`, `code`, `title`) VALUES
(1, '{sysadmin}', 'Administrador de sistemas'),
(2, '{administrator}', 'Administrador'),
(11, '{customer}', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `title` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `code`, `title`) VALUES
(1, '{users_read}', 'Ver los usuarios.'),
(2, '{users_create}', 'Crear usuarios.'),
(3, '{users_update}', 'Modificar usuarios.'),
(4, '{users_delete}', 'Eliminar usuarios.'),
(5, '{permissions_read}', 'Ver los permisos de usuario.'),
(6, '{permissions_create}', 'Crear permisos de usuario.'),
(7, '{permissions_delete}', 'Eliminar permisos de usuario.'),
(8, '{blog_read}', 'Ver el blog'),
(9, '{blog_create}', 'Crear articulos en el blog'),
(10, '{blog_update}', 'Editar artículos en el blog'),
(11, '{blog_delete}', 'Eliminar artículos en el blog'),
(12, '{categories_blog_read}', 'Ver las categorías del blog'),
(13, '{categories_blog_create}', 'Crear categorías en el blog'),
(14, '{categories_blog_delete}', 'Eliminar categorías del blog'),
(15, '{help_development}', 'Ayuda para desarrolladores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `token` longtext NOT NULL,
  `login_date` datetime DEFAULT NULL,
  `logout_date` datetime DEFAULT NULL,
  `connection` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `id_user`, `token`, `login_date`, `logout_date`, `connection`) VALUES
(1, 1, '0maqraHHxEWmn3o339fRSZlkw6x37C5gj3ZLMSeK1SglwMU06K7eVHgkQwIujOKI9TnnGXxZaDIDEna4U0SyxOGks70sF5jGdDz06lAMajwLs9mEWL6jbgeoO7PwQ6lU', '2020-07-02 21:38:49', '2020-07-02 21:55:10', 'a:5:{s:2:\"ip\";s:9:\"127.0.0.1\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36\";}'),
(2, 1, 'opRlcfhv9iAHtVwtI3iXTQpAo7NfMB8J6axUOoC1DLejixjpW1EWCEtN5areW6b5qVCCRX1kvEr1snAsLQgZG5A3TXzu4wDHDwZ8qjvYxLH0oh9AuAjb0B5EkE1r1rfJ', '2020-07-02 21:55:27', '2020-07-02 21:59:28', 'a:5:{s:2:\"ip\";s:9:\"127.0.0.1\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36\";}'),
(3, 2, 'I0XtEXVEAsHkDR7wnfODAi9EyAj8ObuRwDvkS901xUgKUwoqjydK6YqNVuF88lQwtAPRKFXiBUhJGhGwA5IIQk9VNWAdIwwC6UCL0przeS3WNQ9k9kwsFGWTEHnpD7rw', '2020-07-02 22:01:01', '2020-07-02 22:02:35', 'a:5:{s:2:\"ip\";s:9:\"127.0.0.1\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36\";}'),
(4, 2, 'gv29Ydr2AFSAGSgiHNyTTAtnptmPoMYLJ9U3u4DdXpIEGy2l2ROfLCiPqch2cVa0WuyvwnGOHZaSKKj7gCf8Y5EwmIDn7eNP0GzUYGLxAJRoOBUe0szIuglpvpIHhpKe', '2020-07-03 10:12:58', NULL, 'a:5:{s:2:\"ip\";s:15:\"187.190.175.173\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36\";}'),
(5, 2, 'quFIMO6vggeq3d0aiczXjjFWvCsTfJuSLmGDW627TaTuBkxhiDVKPTqGZK0z07q5ArnTrZzu9JFbixitGgh4FJpHEgU5T12axtm8sIWeI94YPezGVV36bbqLkyBz8K6e', '2020-07-03 10:14:45', NULL, 'a:5:{s:2:\"ip\";s:14:\"187.190.175.12\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36\";}'),
(6, 1, 'mNx6akS4ohhNFNWnd9aBmICfpRJdHuvFVeAN2ZH6qWHTwj75NxnCJ4jwQ6zYjUB0oM0eOXwihER4TGKLzQFU0meuhQW5LMMSgScFOwNi1fJQ1zQ0V0uhEtWkQ1dd0eAt', '2020-07-03 10:30:28', NULL, 'a:5:{s:2:\"ip\";s:14:\"187.189.50.142\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36\";}'),
(7, 2, 'SGTnqZPbpq1dZa2eejnUJWRdnwHKBHjMDkN9tNwHquuAok8tqgkWcb7syOveGYKy4d4P2KdXo33HatVwBhssjZV0NGQpulx43r9ovaxY1iV9i6C53jLLGMHPtwd9Oag1', '2020-07-06 20:47:00', '2020-07-06 20:54:15', 'a:5:{s:2:\"ip\";s:9:\"127.0.0.1\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36\";}'),
(8, 2, 'FHwDEz19KmTLdKzLRPUSbndMYmL2NRDDbCBAXegiDZMegOWV0KR1Uwzi8Z04hioFORKH3epj3WN7P20K1w1FKhrMMMmQFc8ndWhgAUAtMLvJf8jLaaARJpGtUyGtmZ1V', '2020-07-28 12:59:13', NULL, 'a:5:{s:2:\"ip\";s:15:\"187.190.174.140\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36\";}'),
(9, 2, 'Mi8EQNiqmjkXAmyBdbg6wwIhUOr4axb4y7ZpqWPj0dGuTKSdJkbztWabXkhWecd47CD7JpFpmduFqS67Jr7i5D2uuDQds2LMyRRt0ncdklpFghuytjdKE5FLw5RATYlm', '2020-09-10 16:54:45', NULL, 'a:5:{s:2:\"ip\";s:15:\"187.150.190.115\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.83 Safari/537.36\";}'),
(10, 2, 'Mpq63iNFjmbJQ5wJmoVBFgk5vgoJoelYzyXcu5WDARXyRtJYXF9hOzNRDrQNUesUvARU3aouQXITv45AEjcep7U062s7H34ofKGlr0MOP9o5nZJsK1lAj2OJd7ql2GNN', '2020-12-16 15:43:41', NULL, 'a:5:{s:2:\"ip\";s:15:\"187.150.137.185\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36\";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` text NOT NULL,
  `name` text,
  `email` text NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `password` text NOT NULL,
  `id_level` bigint(20) DEFAULT NULL,
  `permissions` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `phone`, `password`, `id_level`, `permissions`) VALUES
(1, 'admin', 'CodeMonkey', 'codemonkeymx@gmail.com', 529999999999, 'bbb733785aa18513c32863e05202e039b2c32dbf:5FE8Cwz5rpqgxnu9eMs8m2fWyVi96XEkTOuq00Rz5kIcXimCbhgyO6BqqRXS5Z3Y', 1, 'a:15:{i:0;s:12:\"{users_read}\";i:1;s:14:\"{users_create}\";i:2;s:14:\"{users_update}\";i:3;s:14:\"{users_delete}\";i:4;s:18:\"{permissions_read}\";i:5;s:20:\"{permissions_create}\";i:6;s:20:\"{permissions_delete}\";i:7;s:11:\"{blog_read}\";i:8;s:13:\"{blog_create}\";i:9;s:13:\"{blog_update}\";i:10;s:13:\"{blog_delete}\";i:11;s:22:\"{categories_blog_read}\";i:12;s:24:\"{categories_blog_create}\";i:13;s:24:\"{categories_blog_delete}\";i:14;s:18:\"{help_development}\";}'),
(2, 'one_consultores', 'One Consultores', 'contacto@oneconsultores.com', 52, '1e656a8228a67194c60c425543d79b5e31132e08:8ogsO1g5Nz4arNUg5nrZqsIsKrwMzXfvEMomj2oIFd2vUEPD9aASIIV8TzwPTEvO', 1, 'a:14:{i:0;s:12:\"{users_read}\";i:1;s:14:\"{users_create}\";i:2;s:14:\"{users_update}\";i:3;s:14:\"{users_delete}\";i:4;s:18:\"{permissions_read}\";i:5;s:20:\"{permissions_create}\";i:6;s:20:\"{permissions_delete}\";i:7;s:11:\"{blog_read}\";i:8;s:13:\"{blog_create}\";i:9;s:13:\"{blog_update}\";i:10;s:13:\"{blog_delete}\";i:11;s:22:\"{categories_blog_read}\";i:12;s:24:\"{categories_blog_create}\";i:13;s:24:\"{categories_blog_delete}\";}');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`),
  ADD KEY `id_category` (`id_category`);

--
-- Indices de la tabla `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`id_level`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `blog_categories` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
