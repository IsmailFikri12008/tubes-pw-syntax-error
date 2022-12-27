-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2022 pada 12.41
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syntax_error_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `animes`
--

CREATE TABLE `animes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `episode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rilis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tayang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lisensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demografis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `animes`
--

INSERT INTO `animes` (`id`, `user_id`, `category_id`, `judul`, `slug`, `tipe`, `episode`, `status`, `rilis`, `primer`, `tayang`, `produser`, `lisensi`, `studio`, `sumber`, `genre`, `demografis`, `durasi`, `rating`, `image`, `excerpt`, `sinopsis`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Go Toubun No Hanayome', 'go-toubun-no-hanayome-1', 'TV', '12 Episode', 'On Going', '10 Desember 2020', '10 Desember 2020', '20 Desember 2020', 'Mappa', 'Mappa Lisensi', 'Mappa Studio', 'Shounen Jump', 'Romance', 'Shounen', '24 Menit', '2.4', 'anime-images/JXljCA4C6ljqmHp4KjYgOEJGcy0BMnFKrvBESuLC.jpg', '', '<div><strong>Go Toubun no Hanayome</strong> atau disebut sebagai \"<strong>Quintessential Quintuplets</strong>\" dalam Bahasa Inggris atau dalam Bahasa Indonesia berarti \"Kembar 5 Klasik\" merupakan sebuah seri manga yang dibuat oleh Negi Haruba pada tahun 2017 hingga 2020 sebanyak 14 volume tankobon dan diterbitkan oleh Kodansha yang berarti serial manganya telah berakhir.&nbsp;<br><br>Selain manga serial ini juga telah diadaptasi menjadi Anime sebanyak sebanyak 2 season yaitu season pertama tayang pada tahun 2019 dan season keduanya tayang pada tahun 2021. Dan kabarnya seri Go Toubun no Hayanome masih akan berlanjut ke film anime Go Toubun no Hanayome Movie yang akan tayang pada bulan Mei tahun 2022 yang diproduksi oleh studio Bibury Animation Studios.</div>', NULL, '2022-12-24 22:48:45', '2022-12-25 00:50:16'),
(2, 1, 2, 'Go Toubun No Hanayome 2', 'go-toubun-no-hanayome-2', 'TV', '12 Episode', 'Complate', '03 Oktober 2022', '03 Oktober 2022', '10 Oktober 2022', 'TOHO Animation', 'TOHO Animation Lisensi', 'Seven Arcs', 'Shounen Jump', 'Drama, Romance', 'Shounen', '24 Menit', '9.0', 'anime-images/zyjzLi5VYCsOrOyNehaNXpv0oEii4Ibagjjk4whP.jpg', 'Ini merupakan sinopsis&nbsp;', '<div>Ini merupakan sinopsis&nbsp;</div>', NULL, '2022-12-25 00:45:08', '2022-12-25 00:45:08'),
(4, 1, 3, 'Horimiya', 'horimiya', 'Movie', '13 Episode', 'Complate', '20 April', '20 April', '25 April', 'Mappa', 'Warner Bros .Japan Lisensi', 'Mappa Studio', 'Shounen Jump', 'Romane, Drama, School', 'Shounen', '24 Menit', '8.84', 'anime-images/EJSQC1kRSLkjxCIEBYOhc1zTac4fjEyie4LpLA5I.jpg', 'Ini merupakan sinopsis', '<div>Ini merupakan sinopsis</div>', NULL, '2022-12-25 00:52:07', '2022-12-25 00:52:07'),
(5, 1, 4, 'Black Clover', 'black-clover', 'Movie', '24 Episode', 'Complate', '03 Oktober 2022', '03 Oktober 2022', '10 Oktober 2022', 'TOHO Animation', 'TOHO Animation Lisensi', 'Seven Arcs', 'Shounen Jump', 'Drama, Fantasy, Psychological', 'Shounen', '24 Menit', '8.0', 'anime-images/YAfAUJh6c439vWZynJhPN4YV0wI4N3UlnJXeyux0.jpg', 'Ini merupakan sinopsis', '<div>Ini merupakan sinopsis</div>', NULL, '2022-12-25 00:53:43', '2022-12-25 00:53:43'),
(6, 1, 2, 'Re:Zero', 'Re-zero', 'TV', '13 Episode', 'Complate', '20 Desember 2020', '20 Desember 2020', '25 Desember 2020', 'TOHO Animation', 'TOHO Animation Lisensi', 'Seven Arcs', 'Shounen Jump', 'Drama, Romance', 'Shounen', '24 Menit', '7.75', 'anime-images/Do4B3qpP0GjTG8XO80FVWXhWcdERmy3jwIet6kFK.jpg', 'Ini merupakan sinopsis', '<div>Ini merupakan sinopsis</div>', NULL, '2022-12-25 00:55:05', '2022-12-25 00:55:05'),
(7, 1, 1, 'Shingeki no Kyoujin', 'shingeki-no-kyoujin', 'Movie', '-', 'Complate', '20 Januari', '20 Januari', '25 Januari', 'Mappa', 'Mappa Lisensi', 'Mappa Studio', 'Seven Arcs', 'Fantasy, Horror, Sci-fi', 'Shounen', '120 Menit', '9.0', 'anime-images/X3o6UCVGjqVGJOADqjMV3EAp9EJXAfUHMGRasW9Y.jpg', 'Ini merupakan sinopsis', '<div>Ini merupakan sinopsis</div>', NULL, '2022-12-25 00:57:02', '2022-12-25 00:57:02'),
(8, 1, 1, 'Stone', 'stone', 'TV', '25 Episode', 'On-Going', '20 Oktober', '20 Oktober', '28 Oktober', 'Mappa', 'Mappa Lisensi', 'Mappa Studio', 'Seven Arcs', 'Drama, Fantasy, Psychological', 'Shounen', '24 Menit', '8.78', 'anime-images/E3gfuQGcr38oaDDYZ5CJelOdzaL6gk6qzMHmwY3v.jpg', 'Ini merupakan sinopsis', '<div>Ini merupakan sinopsis</div>', NULL, '2022-12-25 00:59:31', '2022-12-25 00:59:31'),
(9, 1, 1, 'Tonikaku Kawaii', 'tonikaku-kawaii', 'TV', '15 Episode', 'Complate', '10 Agustus', '10 Agustus', '25 Agustus 2022', 'TOHO Animation', 'TOHO Animation Lisensi', 'TOHO Studio', 'Shounen Jump', 'Drama, Romance', 'Shounen', '23 Menit', '9.0', 'anime-images/hb7Hw3vASeEkpy0LoGMs5Cqak0ni6Mci7rWv1OT5.jpg', 'Ini merupakan sinopsis', '<div>Ini merupakan sinopsis</div>', NULL, '2022-12-25 01:00:55', '2022-12-25 01:00:55'),
(10, 1, 3, 'Wonder Egg', 'Wonder Egg', 'TV', '12 Episode', 'Complate', '03 Oktober 2022', '03 Oktober 2022', '10 Oktober 2022', 'Warner Bros .Japan', 'Warner Bros .Japan Lisensi', 'Wander Bros Studio', 'Shounen Jump', 'Drama, Fantasy, Psychological', 'Shounen', '23 Menit', '8.78', 'anime-images/MNyE4574Dm7kbfwFwu7MGt7XfEVqI3YRX6nkbIFQ.jpg', 'Ini merupakan sinopsis', '<div>Ini merupakan sinopsis</div>', NULL, '2022-12-25 01:02:27', '2022-12-25 01:02:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Anime Fall', 'anime-fall', '2022-12-24 22:48:45', '2022-12-24 22:48:45'),
(2, 'Anime Spring', 'anime-spring', '2022-12-24 22:48:45', '2022-12-24 22:48:45'),
(3, 'Anime Summer', 'anime-summer', '2022-12-24 22:48:45', '2022-12-24 22:48:45'),
(4, 'Anime Winter', 'anime-winter', '2022-12-24 22:48:45', '2022-12-24 22:48:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_24_063355_create_categories_table', 1),
(6, '2022_11_20_143633_add_is_admin_to_users_table', 1),
(7, '2022_12_23_034618_create_animes_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Ismail Fikri', 'ismail fikri', '203040008@mail.unpas.ac.id', NULL, '$2y$10$fU4FjwU4Jy8QM1BLEFpTGeIp68hck1WIcV1uPlCGyvbTiZffjeB5i', NULL, '2022-12-24 22:48:44', '2022-12-24 22:48:44', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `animes`
--
ALTER TABLE `animes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
