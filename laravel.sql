-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 jun 2020 om 15:26
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artists`
--

CREATE TABLE `artists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spotifyUrlArtist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `artists`
--

INSERT INTO `artists` (`id`, `artist`, `birthday`, `country`, `spotifyUrlArtist`, `created_at`, `updated_at`) VALUES
(1, 'Harry Styles', '1994-09-01', 'UK', 'https://open.spotify.com/artist/6KImCVD70vtIoJWnq6nGn3?si=lplHiTFyTIuD8dDJwSHWfQ', '2020-06-17 20:30:00', '2020-06-19 07:19:58'),
(8, 'Marshmello', '1992-05-19', 'US', 'https://open.spotify.com/artist/64KEffDW9EtZ1y2vBYgq8T?autoplay=true&v=A', '2020-06-19 10:53:32', '2020-06-19 10:53:32'),
(9, 'Dua Lipa', '1995-08-22', 'UK', 'https://open.spotify.com/artist/6M2wZ9GZgrQXHCFfjv46we?autoplay=true&v=A', '2020-06-19 10:58:24', '2020-06-19 10:58:24');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2020_06_15_122800_create_cars_table', 1),
(9, '2020_06_15_140310_create_artists_table', 2),
(29, '2020_06_05_090546_creates_services_table', 3),
(42, '2014_10_12_000000_create_users_table', 4),
(43, '2014_10_12_100000_create_password_resets_table', 4),
(44, '2019_08_19_000000_create_failed_jobs_table', 4),
(45, '2020_06_15_151249_create_artists_table', 4),
(46, '2020_06_15_152502_create_songs_table', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `songs`
--

CREATE TABLE `songs` (
  `id` int(10) UNSIGNED NOT NULL,
  `song_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artistName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spotifyUrlSong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `songs`
--

INSERT INTO `songs` (`id`, `song_title`, `artistName`, `year`, `genre`, `spotifyUrlSong`, `created_at`, `updated_at`) VALUES
(1, 'watermelon sugar', 'Harry Styles', '2020', 'test', 'https://open.spotify.com/track/6UelLqGlWMcVH1E5c4H7lY?si=8ivmmv0JRpui1K0sA2AAKA', '2020-06-19 06:44:48', '2020-06-19 10:44:45'),
(3, 'happier', 'Marshmello', '2018', 'Dance/elektronische muziek', 'https://open.spotify.com/album/78EicdHZr5XBWD7llEZ1Jh?highlight=spotify:track:2dpaYNEQHiRxtZbfNsse99', '2020-06-19 10:54:31', '2020-06-19 10:54:31'),
(4, 'Alone', 'Marshmello', '2016', 'Future bass, Dance/elektronische muziek', 'https://open.spotify.com/album/5klOrlTBqRvvB3owPOpMwd?highlight=spotify:track:16rjXCCcu3APPtR4MUonZW', '2020-06-19 10:55:07', '2020-06-19 10:55:07'),
(5, 'FRIENDS', 'Marshmello', '2018', 'POP', 'https://open.spotify.com/album/1BmxOYHjQv1dKZRr13YRZM?highlight=spotify:track:08bNPGLD8AhKpnnERrAc6G', '2020-06-19 10:55:34', '2020-06-19 10:55:34'),
(6, 'adore you', 'Harry Styles', '2019', 'pop', 'https://open.spotify.com/track/1M4qEo4HE3PRaCOM7EXNJq?autoplay=true&v=T', '2020-06-19 10:56:09', '2020-06-19 10:56:09'),
(7, 'sign of the times', 'Harry Styles', '2017', 'POP', 'https://open.spotify.com/track/5ELRkzdzz0HvGpMDlfZHkV?autoplay=true&v=T', '2020-06-19 10:56:41', '2020-06-19 10:56:41'),
(8, 'don\'t start now', 'Dua Lipa', '2020', 'POP', 'https://open.spotify.com/track/6WrI0LAC5M1Rw2MnX2ZvEg?autoplay=true&v=T', '2020-06-19 10:58:57', '2020-06-19 10:58:57'),
(9, 'new rules', 'Dua Lipa', '2017', 'POP', 'https://open.spotify.com/track/2ekn2ttSfGqwhhate0LSR0?autoplay=true&v=T', '2020-06-19 10:59:23', '2020-06-19 10:59:23'),
(10, 'break my heart', 'Dua Lipa', '2020', 'POP', 'https://open.spotify.com/track/017PF4Q3l4DBUiWoXk4OWT?si=PIzmnYdBSC6oE_lJ-fIoKw', '2020-06-19 11:05:58', '2020-06-19 11:05:58');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$9X1iW9IHK22YmcL53ukzOe91rkE6QVYOm6PQ04np33JOJJF2.AElK', NULL, '2020-06-19 06:35:12', '2020-06-19 06:35:12'),
(3, 'Bjorn Van Der Horst', 'bjornvdhorst10@Gmail.com', NULL, '$2y$10$sTGfRn5G01I3tGWVz2UpPOLxCb4iCRf2lCIjQk49eEObBWIJIQq3i', NULL, '2020-06-19 07:22:22', '2020-06-19 07:22:22'),
(4, 'normaluser', 'normal@normal.com', NULL, '$2y$10$dHQoAq66E9XZwrMAmfub1u0yIJ6TAE71MWPVdaJa1Ruk3Juq5ORla', NULL, '2020-06-19 11:09:56', '2020-06-19 11:09:56');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artists_artist_unique` (`artist`);

--
-- Indexen voor tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexen voor tabel `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `songs_id_unique` (`id`),
  ADD KEY `songs_artistname_foreign` (`artistName`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `artists`
--
ALTER TABLE `artists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT voor een tabel `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_artistname_foreign` FOREIGN KEY (`artistName`) REFERENCES `artists` (`artist`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
