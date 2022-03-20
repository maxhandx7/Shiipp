-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2022 a las 20:19:28
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myshiippdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Noticias', 'noticias', 'Aquí presentamos las principales noticias del pacifico', '2020-04-12 05:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `from_user` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinos`
--

CREATE TABLE `destinos` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Empresa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FechaSalida` date NOT NULL,
  `HoraSalida` time NOT NULL,
  `Cupos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Valor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `destinos`
--

INSERT INTO `destinos` (`id`, `Nombre`, `Empresa`, `FechaSalida`, `HoraSalida`, `Cupos`, `Valor`, `created_at`, `updated_at`) VALUES
(1, 'Juanchaco', 'barcos embarca', '2020-04-23', '01:00:00', '5', '1445000', '2020-04-13 00:17:43', '2020-04-13 00:17:43'),
(8, 'Guapi', 'barcos embarca', '2020-07-17', '19:30:00', '30', '85.000', '2020-04-15 03:01:11', '2020-04-15 03:01:11'),
(13, 'Bahia Malaga', 'Tuyate', '2022-03-27', '16:31:00', '0', '85000', '2022-03-20 18:15:56', '2022-03-20 18:15:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_28_171507_create_destinos_table', 1),
(4, '2017_10_28_171846_create_reservas_table', 1),
(5, '2017_11_11_121527_create_comentarios_table', 1),
(6, '2017_11_11_160412_create_news_table', 1),
(7, '2018_03_07_161132_create_tags_table', 1),
(8, '2018_03_07_161246_create_posts_table', 1),
(9, '2018_03_07_161329_create_categories_table', 1),
(10, '2018_03_07_175209_create_post_tag_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Previa` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('PUBLISHED','DRAFT') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `name`, `slug`, `Previa`, `body`, `status`, `file`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Falsa cadena hizo que en Buenaventura se metieran al mar para “curar” coronavirus', 'Falsa cadena', 'En el mensaje figuraba un supuesto médico que aseguraba que el agua del océano, sumado a unas gotas de limón, era un antídoto para hacerle frente al virus.', 'En el mensaje figuraba un supuesto médico que aseguraba que el agua del océano, sumado a unas gotas de limón, era un antídoto para hacerle frente al virus.\r\n\r\nPor cuenta de una falsa cadena de mensajes que circuló a través de WhatsApp, decenas de ciudadanos en Buenaventura le hicieron el quite a la cuarentena y resultaron inmersos en el mar supuestamente como cura para el coronavirus, que deja en Colombia 2.709 casos confirmados, 100 muertos y 214 pacientes recuperados. \r\n\r\n\r\nLea también: En vivo: van 100 muertos y 2.709 casos por covid-19 en Colombia\r\n\r\nEn el mensaje que fue divulgado en redes sociales figuraba un supuesto médico quien aseguraba que el agua del océano, sumado a unas gotas de limón, era un antídoto para hacerle frente al virus, incluso, científicamente comprobado. \r\n\r\nA pesar de lo insólito de la cadena, el mensaje fue replicado una y otra vez, siendo viralizado entre los boaverences que, pese a la restricción vigente por la cuarentena, acudieron masivamente a las aguas del Pacífico para gozar de la supuesta cura.  \r\n\r\nEdwin Patiño, personero del puerto, sostuvo que el caso fue de conocimiento de la Secretaría de Salud de Buenaventura que, en coordinación con otras autoridades, retiraron a las personas del mar dado el riesgo de contagio.  \r\n\r\n“Ese mensaje hizo que algunas personas se lo tomaran de manera folclórica y se registraron varios casos en el sector de Kennedy”, declaró a Blu Radio el funcionario, quien corroboró que las personas aprovecharon el momento “para meterse al mar porque creyeron que eso les ayudaba a ser inmunes frente al coronavirus”. \r\n\r\nAnte lo ocurrido, se prevé que las autoridades intensifiquen las campañas de sensibilización para evitar la divulgación de información no corroborada y que las personas sigan cayendo en falsas cadenas. \r\n\r\nDe los 477 casos de coronavirus que se registran en Valle del Cauca, la segunda región más afectada por la pandemia, seis se presentan en Buenaventura. ', 'PUBLISHED', 'https://www.elespectador.com/sites/default/files/wappbuenaventura_0.jpg', '2020-04-12 05:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2020-04-12 05:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(10) UNSIGNED NOT NULL,
  `Destino` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Empresa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FechaSalida` date NOT NULL,
  `HoraSalida` time NOT NULL,
  `CC_Pasajero` int(11) NOT NULL,
  `Nom_Pasajero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ape_Pasajero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email_Pasajero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tel_Pasajero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cupos_reserva` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `Destino`, `Empresa`, `FechaSalida`, `HoraSalida`, `CC_Pasajero`, `Nom_Pasajero`, `Ape_Pasajero`, `Email_Pasajero`, `Tel_Pasajero`, `Cupos_reserva`, `created_at`, `updated_at`) VALUES
(13, 'Bahia Malaga', 'Tuyate', '2022-03-27', '16:31:00', 1143982071, 'Alan', 'Carabali', 'alancarabali@gmail.com', '3145561727', 3, '2022-03-20 18:22:45', '2022-03-20 18:22:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Noticias', 'noticias', '2020-04-12 05:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `cupos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `apellido`, `cedula`, `tel`, `email`, `password`, `type`, `plan`, `estado`, `cupos`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alan', 'Carabali', 1143982071, '3145561727', 'alancarabali@gmail.com', '$2y$10$74yjCXN/Io.RYgvbLBkLkOjIRdhgP7ZDJu1d8DbUFmMq1J6Zzk.xi', 'pasajero', 'null', 1, 'null', 'pwGfNb7idPhM9SHfL8oh8RswSzqjUrBgGybMbqj18My4b000ohl6aDAcLJEJ', '2020-04-12 22:22:29', '2020-04-12 22:22:29'),
(2, 'Tuyate', 'null', 5566789, '3108327515', 'Alan171996@gmail.com', '$2y$10$3Ok0U/q03VlM2LnsFY72UelIebY8BzgPKL.gTRq3bViqUG02AH1py', 'empresa', 'basic', 1, '5', 'MSsGEEde0KoMYWJA6dKbfYdOIeZIOvEVy5t1TnhuueCrY6K5Z3kMb2g7QfHZ', '2020-04-12 22:34:59', '2020-04-12 22:34:59'),
(3, 'diana', 'cegarra', 26603742, '3177167395', 'dianaamaamiranda@gmail.com', '$2y$10$iqTaWyEr3zzbvQJDk2KcG.jYXNdZc2fV09bDncnOadKqO1YIZaBmS', 'pasajero', 'null', 1, 'null', 'Eq5to8cHZVkSBRh3KiJruwwZza8hOhVBVtbUbiCCb10d7RD4lk71FdDlanex', '2020-04-12 23:06:05', '2020-04-12 23:06:05'),
(4, 'barcos embarca', 'null', 98745621, '3177167395', 'maxhand171996@gmail.com', '$2y$10$jD5Pl8q0ZuIoQlP8tsGmmOi/N/bzDwU8jYENesWbsPiyGIS4MAGA2', 'empresa', 'premium', 1, '30', 'bgPgFgwnzYKez9UQ2E6okbF9uJokOGdgjqigrkEES4Pjoa7vG2JGgAel8vUk', '2020-04-12 23:13:16', '2020-04-12 23:13:16'),
(5, 'Elver', 'Galarga', 12345678, '3137589612', 'danifejara@gmail.com', '$2y$10$w3HlsudGKnHI22m63RzLFuIx3vC4sZ7I77AIwcmx96fbRwVhCQa7i', 'pasajero', 'null', 1, 'null', NULL, '2020-06-11 01:00:30', '2020-06-11 01:00:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `destinos`
--
ALTER TABLE `destinos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
