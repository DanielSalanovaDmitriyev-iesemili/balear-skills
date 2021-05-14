-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Temps de generació: 14-05-2021 a les 02:56:01
-- Versió del servidor: 10.4.19-MariaDB
-- Versió de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `art`
--

CREATE TABLE `art` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exposition_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` date NOT NULL,
  `format` enum('pintura','escultura','fotografia') COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'palma', '2021-05-14 00:17:40', '2021-05-14 00:17:40');

-- --------------------------------------------------------

--
-- Estructura de la taula `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `expositions`
--

CREATE TABLE `expositions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `space_id` bigint(20) UNSIGNED NOT NULL,
  `ini` date NOT NULL,
  `fin` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_05_13_175646_create_rols_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_05_13_174335_create_space_types_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2020_05_13_180819_create_cities_table', 1),
(7, '2021_05_13_174300_create_spaces_table', 1),
(8, '2021_05_13_174315_create_comments_table', 1),
(9, '2021_05_13_174350_create_expositions_table', 1),
(10, '2021_05_13_174358_create_art_table', 1),
(11, '2021_05_13_174414_create_services_table', 1),
(12, '2021_05_13_174427_create_modalities_table', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `modalities`
--

CREATE TABLE `modalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `modality_space`
--

CREATE TABLE `modality_space` (
  `space_id` bigint(20) UNSIGNED NOT NULL,
  `modality_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `rols`
--

CREATE TABLE `rols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `service_space`
--

CREATE TABLE `service_space` (
  `space_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `spaces`
--

CREATE TABLE `spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valoration` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `spaces`
--

INSERT INTO `spaces` (`id`, `name`, `description`, `direction`, `city_id`, `type_id`, `phone`, `email`, `img`, `destacado`, `web`, `valoration`, `created_at`, `updated_at`) VALUES
(1, 'space2', 'desc1', 'dasdas', 1, 1, 123123, 'email1@gmail.com', 'espacio', 0, 'web1', 5, '2021-05-14 00:19:54', '2021-05-14 00:19:54'),
(2, 'space1', 'desc1', 'dasdas', 1, 1, 123123, 'email1@gmail.com', 'espacio', 0, 'web1', 5, '2021-05-14 00:20:19', '2021-05-14 00:20:19'),
(3, 'space1', 'desc1', 'dasdas', 1, 1, 123123, 'email1@gmail.com', 'espacio', 1, 'web1', 5, '2021-05-14 00:20:19', '2021-05-14 00:20:19'),
(4, 'space1', 'desc1', 'dasdas', 1, 1, 123123, 'email1@gmail.com', 'espacio', 1, 'web1', 5, '2021-05-14 00:20:19', '2021-05-14 00:20:19'),
(5, 'space1', 'desc1', 'dasdas', 1, 1, 123123, 'email1@gmail.com', 'espacio', 1, 'web1', 5, '2021-05-14 00:20:19', '2021-05-14 00:20:19'),
(6, 'space1', 'desc1', 'dasdas', 1, 1, 123123, 'email1@gmail.com', 'espacio', 1, 'web1', 5, '2021-05-14 00:20:19', '2021-05-14 00:20:19'),
(7, 'space1', 'desc1', 'dasdas', 1, 1, 123123, 'email1@gmail.com', 'espacio', 0, 'web1', 5, '2021-05-14 00:20:19', '2021-05-14 00:20:19'),
(8, 'space1', 'desc1', 'dasdas', 1, 1, 123123, 'email1@gmail.com', 'espacio', 1, 'web1', 5, '2021-05-14 00:20:19', '2021-05-14 00:20:19'),
(9, 'space1', 'desc1', 'dasdas', 1, 1, 123123, 'email1@gmail.com', 'espacio', 1, 'web1', 5, '2021-05-14 00:20:19', '2021-05-14 00:20:19'),
(10, 'space1', 'desc1', 'dasdas', 1, 1, 123123, 'email1@gmail.com', 'espacio', 0, 'web1', 5, '2021-05-14 00:20:19', '2021-05-14 00:20:19'),
(11, 'space1', 'desc1', 'dasdas', 1, 1, 123123, 'email1@gmail.com', 'espacio', 0, 'web1', 5, '2021-05-14 00:20:19', '2021-05-14 00:20:19');

-- --------------------------------------------------------

--
-- Estructura de la taula `space_types`
--

CREATE TABLE `space_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `space_types`
--

INSERT INTO `space_types` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'typo1', '2021-05-13 22:02:14', '2021-05-13 22:02:14'),
(2, 'typo1', '2021-05-13 22:02:31', '2021-05-13 22:02:31'),
(3, 'typo1', '2021-05-13 22:04:00', '2021-05-13 22:04:00'),
(4, 'typo1', '2021-05-13 22:04:29', '2021-05-13 22:04:29'),
(5, 'typo1', '2021-05-13 22:04:39', '2021-05-13 22:04:39'),
(6, 'typo1', '2021-05-13 22:05:19', '2021-05-13 22:05:19'),
(7, 'typo1', '2021-05-13 22:05:30', '2021-05-13 22:05:30'),
(8, 'typo1', '2021-05-13 22:05:46', '2021-05-13 22:05:46'),
(9, 'typo1', '2021-05-13 22:07:17', '2021-05-13 22:07:17'),
(10, 'typo1', '2021-05-13 22:08:30', '2021-05-13 22:08:30'),
(11, 'typo1', '2021-05-13 22:08:52', '2021-05-13 22:08:52');

-- --------------------------------------------------------

--
-- Estructura de la taula `space_user`
--

CREATE TABLE `space_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `space_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valoration` int(11) DEFAULT NULL,
  `is_published` tinyint(1) DEFAULT NULL,
  `published_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `space_user`
--

INSERT INTO `space_user` (`user_id`, `space_id`, `comment`, `valoration`, `is_published`, `published_at`) VALUES
(11, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `users`
--

INSERT INTO `users` (`id`, `name`, `dni`, `number`, `email`, `rol_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Arlene Purdy', '1', NULL, 'janice.hermann@example.net', NULL, '2021-05-13 19:06:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IuZV596Vge', '2021-05-13 19:06:43', '2021-05-13 19:06:43'),
(2, 'Olaf Jacobi', '1', NULL, 'emelia.turcotte@example.org', NULL, '2021-05-13 19:06:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oKaIHg534C', '2021-05-13 19:06:43', '2021-05-13 19:06:43'),
(3, 'Maymie Dickens', '1', NULL, 'horacio.bergstrom@example.com', NULL, '2021-05-13 19:06:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9VFbx3rPXZ', '2021-05-13 19:06:43', '2021-05-13 19:06:43'),
(4, 'Julia Blick', '1', NULL, 'haylie.hickle@example.com', NULL, '2021-05-13 19:06:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'f81ajDVyn0', '2021-05-13 19:06:43', '2021-05-13 19:06:43'),
(5, 'Dr. Liana Schmitt', '1', NULL, 'gail.olson@example.net', NULL, '2021-05-13 19:06:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sAz23pWLEj', '2021-05-13 19:06:43', '2021-05-13 19:06:43'),
(6, 'Dr. Fredy McKenzie DVM', '1', NULL, 'magali.mccullough@example.net', NULL, '2021-05-13 19:06:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dCZ7ig5E3I', '2021-05-13 19:06:43', '2021-05-13 19:06:43'),
(7, 'Christy Yost', '1', NULL, 'eleanore27@example.org', NULL, '2021-05-13 19:06:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'zK6AWjWi1s', '2021-05-13 19:06:43', '2021-05-13 19:06:43'),
(8, 'Carlie Hagenes', '1', NULL, 'clara93@example.net', NULL, '2021-05-13 19:06:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FHjsFTEXVE', '2021-05-13 19:06:43', '2021-05-13 19:06:43'),
(9, 'Rahsaan Kunze', '1', NULL, 'mohr.noel@example.com', NULL, '2021-05-13 19:06:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cQMie4yepr', '2021-05-13 19:06:43', '2021-05-13 19:06:43'),
(10, 'Mervin Keeling', '1', NULL, 'camille58@example.net', NULL, '2021-05-13 19:06:43', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4PSXgQIWGG', '2021-05-13 19:06:43', '2021-05-13 19:06:43'),
(11, 'Daniel', NULL, NULL, 'daniel@gmail.com', NULL, NULL, '$2y$10$Ya2JF7vXDpFfl3krGRiC3urZI5IhVRQ.yoa9PHryVMjuc1xCdO6.e', NULL, '2021-05-13 22:35:17', '2021-05-13 22:35:17');

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`),
  ADD KEY `art_exposition_id_foreign` (`exposition_id`);

--
-- Índexs per a la taula `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `expositions`
--
ALTER TABLE `expositions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expositions_space_id_foreign` (`space_id`);

--
-- Índexs per a la taula `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índexs per a la taula `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `modalities`
--
ALTER TABLE `modalities`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `modality_space`
--
ALTER TABLE `modality_space`
  ADD KEY `modality_space_space_id_foreign` (`space_id`),
  ADD KEY `modality_space_modality_id_foreign` (`modality_id`);

--
-- Índexs per a la taula `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índexs per a la taula `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `service_space`
--
ALTER TABLE `service_space`
  ADD KEY `service_space_space_id_foreign` (`space_id`),
  ADD KEY `service_space_service_id_foreign` (`service_id`);

--
-- Índexs per a la taula `spaces`
--
ALTER TABLE `spaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spaces_city_id_foreign` (`city_id`),
  ADD KEY `spaces_type_id_foreign` (`type_id`);

--
-- Índexs per a la taula `space_types`
--
ALTER TABLE `space_types`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `space_user`
--
ALTER TABLE `space_user`
  ADD KEY `space_user_user_id_foreign` (`user_id`),
  ADD KEY `space_user_space_id_foreign` (`space_id`);

--
-- Índexs per a la taula `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_rol_id_foreign` (`rol_id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `art`
--
ALTER TABLE `art`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la taula `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `expositions`
--
ALTER TABLE `expositions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT per la taula `modalities`
--
ALTER TABLE `modalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `rols`
--
ALTER TABLE `rols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `spaces`
--
ALTER TABLE `spaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la taula `space_types`
--
ALTER TABLE `space_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la taula `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `art`
--
ALTER TABLE `art`
  ADD CONSTRAINT `art_exposition_id_foreign` FOREIGN KEY (`exposition_id`) REFERENCES `expositions` (`id`);

--
-- Restriccions per a la taula `expositions`
--
ALTER TABLE `expositions`
  ADD CONSTRAINT `expositions_space_id_foreign` FOREIGN KEY (`space_id`) REFERENCES `spaces` (`id`);

--
-- Restriccions per a la taula `modality_space`
--
ALTER TABLE `modality_space`
  ADD CONSTRAINT `modality_space_modality_id_foreign` FOREIGN KEY (`modality_id`) REFERENCES `modalities` (`id`),
  ADD CONSTRAINT `modality_space_space_id_foreign` FOREIGN KEY (`space_id`) REFERENCES `spaces` (`id`);

--
-- Restriccions per a la taula `service_space`
--
ALTER TABLE `service_space`
  ADD CONSTRAINT `service_space_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`),
  ADD CONSTRAINT `service_space_space_id_foreign` FOREIGN KEY (`space_id`) REFERENCES `spaces` (`id`);

--
-- Restriccions per a la taula `spaces`
--
ALTER TABLE `spaces`
  ADD CONSTRAINT `spaces_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `spaces_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `space_types` (`id`);

--
-- Restriccions per a la taula `space_user`
--
ALTER TABLE `space_user`
  ADD CONSTRAINT `space_user_space_id_foreign` FOREIGN KEY (`space_id`) REFERENCES `spaces` (`id`),
  ADD CONSTRAINT `space_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Restriccions per a la taula `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_rol_id_foreign` FOREIGN KEY (`rol_id`) REFERENCES `rols` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
