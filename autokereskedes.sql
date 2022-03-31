-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Már 31. 10:15
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `autokereskedes`
--
CREATE DATABASE IF NOT EXISTS `autokereskedes` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `autokereskedes`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `belters`
--

CREATE TABLE `belters` (
  `beltérId` int(10) UNSIGNED NOT NULL,
  `szin` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anyag` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ár` int(11) NOT NULL,
  `kép` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `belters`
--

INSERT INTO `belters` (`beltérId`, `szin`, `anyag`, `ár`, `kép`, `created_at`, `updated_at`) VALUES
(1, 'Fekete', 'ARTICO műbőr / DINAMICA mikros', 0, 'x', NULL, NULL),
(2, 'Nyeregbarna / Fekete', 'MANUFAKTUR kéttónusú exkluzív', 1250000, 'x', NULL, NULL),
(3, 'Tartufo-barna / Fekete', 'MANUFAKTUR kéttónusú exkluzív', 1250000, 'x', NULL, NULL),
(4, 'Macchiato-bézs / Magmaszürke', 'MANUFAKTUR exkluzív nappa bőr', 2000000, 'x', NULL, NULL),
(5, 'Mély-fehér / Fekete', 'MANUFAKTUR exkluzív nappa bőr', 2200000, 'x', NULL, NULL),
(6, 'Fekete, piros díszvarrással', 'Exkluzív Nappa bőr / DINAMICA', 2500000, 'x', NULL, NULL),
(7, 'Red Pepper / Fekete', 'Exkluzív kéttónusú nappa bőrká', 1500000, 'x', NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felszereles`
--

CREATE TABLE `felszereles` (
  `felszerelesCsomag` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipus` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leírás` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ár` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `felszereles`
--

INSERT INTO `felszereles` (`felszerelesCsomag`, `tipus`, `leírás`, `ár`, `created_at`, `updated_at`) VALUES
('1 Economy', 'Cheap', 'Parkoló csomag,\r\nTükör csomag,\r\nKonnektivitás csomag - Navigáció,\r\n10,25\"-os Média kijelző', 0, NULL, NULL),
('2 Premium', 'Mid', 'Economy csomag,\r\nCOMAND ONLINE,\r\nMULTIBEAM LED fényszórók,\r\nTeljesen digitális, 12,3\"-os kombinált műszeregység,\r\nMercedes-Benz hangrendszer,\r\nAmbiente megvilágítás', 1250000, NULL, NULL),
('3 Premium Plus', 'Premium', 'Economy csomag + Premium csomag,\r\nPanoráma tolótető,\r\nBurmester® térhatású hangrendszer,\r\nKEYLESS-GO,\r\nParkoló csomag 360°-os kamerával,\r\nÜlésfűtés az első üléseken', 2575000, NULL, NULL),
('4 Luxury', 'Luxury', 'Economy csomag + Premium csomag + Premium Plus csomag,\r\nÜléshűtés az első üléseken,\r\nÜlésmasszírozás az első üléseken,\r\nSötétített hátsó ablakok,\r\nAmbiente Lighting Plus', 4125000, NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fenyezes`
--

CREATE TABLE `fenyezes` (
  `fényId` int(10) UNSIGNED NOT NULL,
  `szin` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ár` int(11) NOT NULL,
  `kép` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `fenyezes`
--

INSERT INTO `fenyezes` (`fényId`, `szin`, `ár`, `kép`, `created_at`, `updated_at`) VALUES
(1, 'Polár-fehér uni fényezés', 0, 'x', NULL, NULL),
(2, 'Fényes gyémántfehér metálfénye', 650000, 'x', NULL, NULL),
(3, 'Szelenit-szürke designo magno', 900000, 'x', NULL, NULL),
(4, 'Obszidián-fekete metálfényezés', 600000, 'x', NULL, NULL),
(5, 'Grafitszürke designo magno fén', 900000, 'x', NULL, NULL),
(6, 'Spectral-kék metálfényezés', 600000, 'x', NULL, NULL),
(7, 'MANUFAKTUR patagónia-vörös met', 500000, 'x', NULL, NULL),
(8, 'Rosé gold metálfényezés', 600000, 'x', NULL, NULL),
(9, 'Napsárga uni fényezés', 400000, 'x', NULL, NULL),
(10, 'MANUFAKTUR kalahári-arany magn', 800000, 'x', NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hitels`
--

CREATE TABLE `hitels` (
  `hazon` int(10) UNSIGNED NOT NULL,
  `kezdőrészlet` int(11) NOT NULL,
  `futamidő` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `szorzó` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `hitels`
--

INSERT INTO `hitels` (`hazon`, `kezdőrészlet`, `futamidő`, `szorzó`, `created_at`, `updated_at`) VALUES
(1, 10, '12', 2, NULL, NULL),
(2, 10, '24', 5, NULL, NULL),
(3, 10, '36', 8, NULL, NULL),
(4, 20, '12', 2, NULL, NULL),
(5, 20, '24', 5, NULL, NULL),
(6, 20, '36', 8, NULL, NULL),
(7, 30, '12', 2, NULL, NULL),
(8, 30, '24', 5, NULL, NULL),
(9, 30, '36', 8, NULL, NULL),
(10, 50, '12', 2, NULL, NULL),
(11, 50, '24', 5, NULL, NULL),
(12, 50, '36', 8, NULL, NULL),
(13, 100, '1', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kivitels`
--

CREATE TABLE `kivitels` (
  `kivId` int(10) UNSIGNED NOT NULL,
  `kivNev` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ajtóSzáma` tinyint(4) NOT NULL,
  `ülésSzáma` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `kivitels`
--

INSERT INTO `kivitels` (`kivId`, `kivNev`, `ajtóSzáma`, `ülésSzáma`, `created_at`, `updated_at`) VALUES
(1, 'Limuzin', 5, 5, NULL, NULL),
(2, 'Coupe', 3, 2, NULL, NULL),
(3, 'Shooting Brake', 5, 5, NULL, NULL),
(4, 'Hatchback', 5, 5, NULL, NULL),
(5, 'Roadster', 3, 2, NULL, NULL),
(6, 'SUV', 5, 5, NULL, NULL),
(7, 'Van', 4, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_01_24_153128_create_kivitels_table', 1),
(2, '2022_01_24_141750_create_motors_table', 2),
(3, '2022_01_24_141552_create_modells_table', 3),
(4, '2022_01_24_153329_create_fenyezes_table', 4),
(5, '2022_01_24_153343_create_belters_table', 5),
(6, '2022_01_24_153409_create_hitels_table', 6),
(7, '2022_03_27_153828_create_felszereles_table', 7),
(8, '2014_10_12_000000_create_users_table', 8),
(9, '2014_10_12_100000_create_password_resets_table', 8),
(10, '2014_10_12_200000_add_two_factor_columns_to_users_table', 8),
(11, '2019_08_19_000000_create_failed_jobs_table', 8),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 8),
(14, '2022_02_14_151526_create_sessions_table', 8),
(15, '2022_01_24_153431_create_rendelt_autos_table', 9);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `modells`
--

CREATE TABLE `modells` (
  `modell` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kivId` int(10) UNSIGNED NOT NULL,
  `motor` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alapár` int(11) NOT NULL,
  `kép` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `modells`
--

INSERT INTO `modells` (`modell`, `kivId`, `motor`, `alapár`, `kép`, `created_at`, `updated_at`) VALUES
('A 160', 4, '160', 6500000, 'A_hatchback.jpg', NULL, NULL),
('A 180', 4, '180', 6700000, 'A_hatchback.jpg', NULL, NULL),
('A 180d', 4, '180d', 6750000, 'A_hatchback.jpg', NULL, NULL),
('A 200', 1, '200', 7000000, 'A_limuzin.jpg', NULL, NULL),
('A 200d', 1, '200d', 7050000, 'A_limuzin.jpg', NULL, NULL),
('AMG A 35', 4, '35', 9000000, 'AMG_A.jpg', NULL, NULL),
('AMG C 63 S', 2, '63 S', 25000000, 'AMG_C.jpg', NULL, NULL),
('AMG C 63 S Cabrio', 5, '63 S', 32000000, 'AMG_C.jpg', NULL, NULL),
('AMG CLA 35', 2, '35', 17000000, 'AMG_CLA.jpg', NULL, NULL),
('AMG CLA 45 S', 2, '45 S', 20000000, 'AMG_CLA.jpg', NULL, NULL),
('AMG CLA 45 S SB', 3, '45 S', 22000000, 'AMG_CLA.jpg', NULL, NULL),
('AMG E 53 Hybrid', 2, '53 Hibrid', 24000000, 'E_hybrid.jpg', NULL, NULL),
('AMG GLC 35', 6, '35', 22000000, 'AMG_GLC.jpg', NULL, NULL),
('AMG GLC 63 S', 6, '63 S', 25000000, 'AMG_GLC.jpg', NULL, NULL),
('AMG GT 53 Hybrid', 1, '53 Hibrid', 40000000, 'AMG_GT.jpg', NULL, NULL),
('AMG GT 63 S E', 1, '63 S E', 68000000, 'AMG_GT.jpg', NULL, NULL),
('C 200', 1, '200', 17000000, 'C_limuzin.jpg', NULL, NULL),
('C 200d', 1, '200d', 17050000, 'C_limuzin.jpg', NULL, NULL),
('CLA 200', 2, '200', 12000000, 'CLA_coupe.jpg', NULL, NULL),
('CLA 200d', 2, '200d', 12050000, 'CLA_coupe.jpg', NULL, NULL),
('E 200', 1, '200', 16000000, 'E_limuzin.jpg', NULL, NULL),
('E 200d', 1, '200d', 16050000, 'E_limuzin.jpg', NULL, NULL),
('E 250 Hybrid', 1, '250e Hibrid', 18000000, 'E_limuzin.jpg', NULL, NULL),
('EQS 450', 1, '450 E', 32000000, 'EQS_limuzin.jpg', NULL, NULL),
('GLC 250 Hybrid', 6, '250e Hibrid', 19000000, 'E_hybrid.jpg', NULL, NULL),
('V 180d', 7, '180d', 15000000, 'V_van.jpg', NULL, NULL),
('V 200d', 7, '200d', 16000000, 'V_van.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `motors`
--

CREATE TABLE `motors` (
  `motor` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `üzemanyag` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teljesítmény` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `váltó` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebességfokozat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `motors`
--

INSERT INTO `motors` (`motor`, `üzemanyag`, `teljesítmény`, `váltó`, `sebességfokozat`, `created_at`, `updated_at`) VALUES
('160', 'Beznin', '80 kW (109 LE)', 'Manuális', 6, NULL, NULL),
('180', 'Benzin', '100 kW (136 LE)', 'Manuális', 6, NULL, NULL),
('180d', 'Dízel', '85 kW (116 LE)', 'Manuális', 6, NULL, NULL),
('200', 'Benzin', '120 kW (163 LE)', 'Manuális', 6, NULL, NULL),
('200d', 'Dízel', '110 kW (150 LE)', 'Manuális', 6, NULL, NULL),
('250e Hibrid', 'Hibrid(benzin)', '118 kW+75 kW(160LE+102 LE)', 'Automata', 7, NULL, NULL),
('35', 'Benzin', '225 kW (306 LE)', 'Automata', 8, NULL, NULL),
('45 S', 'Benzin', '310 kW (421 LE)', 'Automata', 8, NULL, NULL),
('450 E', 'Áram', '245 kW (333 LE)', 'Automata', 1, NULL, NULL),
('53 E', 'Áram', '484 kW (658 LE)', 'Automata', 1, NULL, NULL),
('53 Hibrid', 'Hibrid(benzin)', '320kW+16 kW(435LE+22LE)', 'Automata', 8, NULL, NULL),
('580 E', 'Áram', '385 kW (523 LE)', 'Automata', 1, NULL, NULL),
('63 S', 'Benzin', '375 kW (510 LE)', 'Automata', 9, NULL, NULL),
('63 S E', 'Hibrid(benzin)', '470kW+150kW(639LE+204)', 'Automata', 9, NULL, NULL),
('S 580 e Hibrid', 'Hibrid(benzin)', '270kW+110kW(367LE+150LE)', 'Automata', 8, NULL, NULL),
('S 680', 'Benzin', '450 kW (612 LE)', 'Automata', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rendelt_autos`
--

CREATE TABLE `rendelt_autos` (
  `rendazon` int(10) UNSIGNED NOT NULL,
  `modell` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `felszerelesCsomag` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `fenyezes` int(10) UNSIGNED NOT NULL,
  `belter` int(10) UNSIGNED NOT NULL,
  `összár` int(11) NOT NULL,
  `hazon` int(10) UNSIGNED NOT NULL,
  `státusz` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `rendelt_autos`
--

INSERT INTO `rendelt_autos` (`rendazon`, `modell`, `felszerelesCsomag`, `userId`, `fenyezes`, `belter`, `összár`, `hazon`, `státusz`, `created_at`, `updated_at`) VALUES
(8, 'AMG GT 63 S E', '4 Luxury', 2, 5, 6, 77035500, 1, 'Kezdő: 7552500Ft, Futam: 12Hónap, Havi: 6419625Ft', '2022-03-30 20:30:49', '2022-03-30 20:30:49'),
(9, 'A 180', '1 Economy', 2, 1, 1, 6700000, 13, 'Egy összegben tervezi kifizetni.', '2022-03-30 20:42:02', '2022-03-30 20:42:02');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('TVVdWgiGXQGgaW7XP0BdNdJhw0WGCPPeC8ajbz6d', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUFAyZmhMcjZDTFFZTkh2T1loNFN3STkxbHlNNkoyWDdoNURKdERPYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tb2RlbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1648714467);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'flame', 'flamegaming@freemail.hu', NULL, '$2y$10$yaRCBdotlIYUvZJD/nnPm.pGw47wrWkyPYD4zni8e2U5IoqJUlPO2', NULL, NULL, NULL, NULL, NULL, 0, '2022-03-30 19:33:20', '2022-03-30 19:33:20'),
(2, 'King', 'king@gmail.com', NULL, '$2y$10$XVKKgFo4va8WgZze3634Oel5mfp2pxmwj5S2mjw8H4ATAPXLL/TKu', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-30 19:55:14', '2022-03-30 19:55:14');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `belters`
--
ALTER TABLE `belters`
  ADD PRIMARY KEY (`beltérId`);

--
-- A tábla indexei `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- A tábla indexei `felszereles`
--
ALTER TABLE `felszereles`
  ADD PRIMARY KEY (`felszerelesCsomag`);

--
-- A tábla indexei `fenyezes`
--
ALTER TABLE `fenyezes`
  ADD PRIMARY KEY (`fényId`);

--
-- A tábla indexei `hitels`
--
ALTER TABLE `hitels`
  ADD PRIMARY KEY (`hazon`);

--
-- A tábla indexei `kivitels`
--
ALTER TABLE `kivitels`
  ADD PRIMARY KEY (`kivId`);

--
-- A tábla indexei `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `modells`
--
ALTER TABLE `modells`
  ADD PRIMARY KEY (`modell`),
  ADD KEY `modells_kivid_foreign` (`kivId`),
  ADD KEY `modells_motor_foreign` (`motor`);

--
-- A tábla indexei `motors`
--
ALTER TABLE `motors`
  ADD PRIMARY KEY (`motor`);

--
-- A tábla indexei `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- A tábla indexei `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- A tábla indexei `rendelt_autos`
--
ALTER TABLE `rendelt_autos`
  ADD PRIMARY KEY (`rendazon`),
  ADD KEY `rendelt_autos_modell_foreign` (`modell`),
  ADD KEY `rendelt_autos_felszerelescsomag_foreign` (`felszerelesCsomag`),
  ADD KEY `rendelt_autos_userid_foreign` (`userId`),
  ADD KEY `rendelt_autos_fenyezes_foreign` (`fenyezes`),
  ADD KEY `rendelt_autos_belter_foreign` (`belter`),
  ADD KEY `rendelt_autos_hazon_foreign` (`hazon`);

--
-- A tábla indexei `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `belters`
--
ALTER TABLE `belters`
  MODIFY `beltérId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `fenyezes`
--
ALTER TABLE `fenyezes`
  MODIFY `fényId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT a táblához `hitels`
--
ALTER TABLE `hitels`
  MODIFY `hazon` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT a táblához `kivitels`
--
ALTER TABLE `kivitels`
  MODIFY `kivId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `rendelt_autos`
--
ALTER TABLE `rendelt_autos`
  MODIFY `rendazon` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `modells`
--
ALTER TABLE `modells`
  ADD CONSTRAINT `modells_kivid_foreign` FOREIGN KEY (`kivId`) REFERENCES `kivitels` (`kivId`),
  ADD CONSTRAINT `modells_motor_foreign` FOREIGN KEY (`motor`) REFERENCES `motors` (`motor`);

--
-- Megkötések a táblához `rendelt_autos`
--
ALTER TABLE `rendelt_autos`
  ADD CONSTRAINT `rendelt_autos_belter_foreign` FOREIGN KEY (`belter`) REFERENCES `belters` (`beltérId`),
  ADD CONSTRAINT `rendelt_autos_felszerelescsomag_foreign` FOREIGN KEY (`felszerelesCsomag`) REFERENCES `felszereles` (`felszerelesCsomag`),
  ADD CONSTRAINT `rendelt_autos_fenyezes_foreign` FOREIGN KEY (`fenyezes`) REFERENCES `fenyezes` (`fényId`),
  ADD CONSTRAINT `rendelt_autos_hazon_foreign` FOREIGN KEY (`hazon`) REFERENCES `hitels` (`hazon`),
  ADD CONSTRAINT `rendelt_autos_modell_foreign` FOREIGN KEY (`modell`) REFERENCES `modells` (`modell`),
  ADD CONSTRAINT `rendelt_autos_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
