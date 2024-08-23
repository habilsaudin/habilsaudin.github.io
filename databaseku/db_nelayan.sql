-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2024 pada 06.14
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nelayan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'habil3', 4, '2024-08-13 21:42:50', 0),
(2, '::1', 'habil3', 4, '2024-08-13 21:46:15', 0),
(3, '::1', 'habil3', 4, '2024-08-13 21:46:29', 0),
(4, '::1', 'habil3', NULL, '2024-08-14 02:14:19', 0),
(5, '::1', 'habil7', 12, '2024-08-14 02:31:07', 0),
(6, '::1', 'habil7', 12, '2024-08-14 02:31:21', 0),
(7, '::1', 'habil3', NULL, '2024-08-14 07:41:06', 0),
(8, '::1', 'habil3', NULL, '2024-08-15 05:47:48', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan`
--

CREATE TABLE `bantuan` (
  `id` int(11) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `nama bantuan` varchar(200) NOT NULL,
  `jumlah bantuan` varchar(200) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bantuan`
--

INSERT INTO `bantuan` (`id`, `tahun`, `nama bantuan`, `jumlah bantuan`, `satuan`, `jenis`) VALUES
(1, '2024', 'perahu', '100', 'unit', 'perorang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1723588378, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nelayan`
--

CREATE TABLE `nelayan` (
  `id` int(100) NOT NULL,
  `no kk` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `no kn` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tgl` date NOT NULL,
  `jenis kelamin` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `status nelayan` varchar(200) NOT NULL,
  `jenis nelayan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nelayan`
--

INSERT INTO `nelayan` (`id`, `no kk`, `nik`, `no kn`, `nama`, `tgl`, `jenis kelamin`, `alamat`, `agama`, `status nelayan`, `jenis nelayan`) VALUES
(1, '7271040628980002', '7271040628980002', '727104', 'habil', '2024-08-13', 'laki-laki', 'jl.kabasara', 'islam', 'aktif', 'nelayan 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `parameter`
--

CREATE TABLE `parameter` (
  `id` int(11) NOT NULL,
  `no kk` varchar(200) NOT NULL,
  `nama kepala keluarga` varchar(200) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `no kn` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `status nelayan` varchar(100) NOT NULL,
  `pekerjaan istri` varchar(100) NOT NULL,
  `jumlah anggota keluarga` varchar(200) NOT NULL,
  `penghasilan perbulan/perhari` varchar(100) NOT NULL,
  `jenis nelayan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `parameter`
--

INSERT INTO `parameter` (`id`, `no kk`, `nama kepala keluarga`, `nik`, `no kn`, `alamat`, `status nelayan`, `pekerjaan istri`, `jumlah anggota keluarga`, `penghasilan perbulan/perhari`, `jenis nelayan`) VALUES
(1, '55644654', 'habil', '\r\n\r\n546465456', '5456465465', 'jl.kabasara', 'aktif', 'urt', '3', '10000000', 'nelayan 1'),
(2, '7564654', 'agil', '44454', '455555', 'jl.kabasara', 'aktif', '-', '-', '10000000', 'nelayan 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'lamalegros@gmail.com', 'lamale', '$2y$10$r9605IUg7cK2HgVadxhceOx20ZI3pRGcZHZJoD628YdYaRZPjDmsK', NULL, NULL, NULL, '1701f75495cae483d24ae6cb2546e089', NULL, NULL, 0, 0, '2024-08-13 23:09:51', '2024-08-13 23:09:51', NULL),
(10, 'habilsaudin@gmail.com', 'habil', '$2y$10$6mwGUAy6q4yn67jykhEuJ.ReMXRLwORqHmBq.ky6qdLTT7hOKk0fC', NULL, NULL, NULL, 'a6535498bc4bb9181f86e4bdaf7d8183', NULL, NULL, 0, 0, '2024-08-14 02:11:43', '2024-08-14 02:11:43', NULL),
(11, 'habil2@gmail.com', 'habil5', '$2y$10$TJWHlidoZ9LBX7p/6n0lzu3DHhFbvTEe5grjp5jikraIqt0bq/Ag2', NULL, NULL, NULL, '4d5e8b3a91e9c57cf7fa8770fd64f0e7', NULL, NULL, 0, 0, '2024-08-14 02:18:39', '2024-08-14 02:18:39', NULL),
(12, 'habil3@gmail.com', 'habil7', '$2y$10$/u7roGkiyA2tsdRoBWvnz.HbzvKJjl3ls1818fWPypzLJuRCmh8ne', NULL, NULL, NULL, '489c9613dcbe6d708698eb3c53870be3', NULL, NULL, 0, 0, '2024-08-14 02:28:15', '2024-08-14 02:28:15', NULL),
(13, 'agil@gmai.com', 'agil', '$2y$10$hHAoroO/cfwz0UjSuP920eM73r2BISfJQDzbFU5jGFo4xUygE52QG', NULL, NULL, NULL, 'aa2f606b09d5e1da2098d77d41ff30a2', NULL, NULL, 0, 0, '2024-08-14 10:49:58', '2024-08-14 10:49:58', NULL),
(14, 'habilsaudin30@gmail.com', 'habil30', '$2y$10$Vx5yxIMOMeaO9NufA3Z7eOCMwefzKVr1owuowrHAzbeJ3TRHh.fZy', NULL, NULL, NULL, '0fcded15a8436112980a9b16b5da627b', NULL, NULL, 0, 0, '2024-08-15 05:49:02', '2024-08-15 05:49:02', NULL),
(15, 'habil88@gmail.com', 'habil11', '$2y$10$upybqkxxwx/ZdNbFDX0OquuuEInoYR7lwFGdX/xAML6bfQzLnkvvK', NULL, NULL, NULL, '41270fc655b5980b2d9ea3686cbbb0a4', NULL, NULL, 0, 0, '2024-08-15 06:17:05', '2024-08-15 06:17:05', NULL),
(16, 'tuti@gmail.com', 'tuti', '$2y$10$AL8vH5Ntqc75nvssRrS85ukEsBRi.2OfWIykCbeAGEglyv5dWUZnq', NULL, NULL, NULL, '1993fcabef6eb9a7d7bd7783f7fd633d', NULL, NULL, 0, 0, '2024-08-15 08:36:05', '2024-08-15 08:36:05', NULL),
(17, 'tuti1@gmail.com', 'tuti1', '$2y$10$3NZkl5z9III6I0PgXkuci.KcmC/2ZhBVSG0RrKYPB6Lrkx8ZllQTi', NULL, NULL, NULL, '49dec7a1ab9e6559fd115b07498cf303', NULL, NULL, 0, 0, '2024-08-15 08:59:16', '2024-08-15 08:59:16', NULL),
(18, 'agil5@gmial.com', 'agil5', '$2y$10$0ToCn631dG.i4zsog2zPIuvjLcvG7JdQRyeIUaud/d8xXV87CVZQG', NULL, NULL, NULL, '67e13fa7d7fcf5aa7547584098d320ff', NULL, NULL, 0, 0, '2024-08-15 10:37:09', '2024-08-15 10:37:09', NULL),
(19, 'habil10@gmail.com', 'habil10', '$2y$10$Xq.G17W/9518kCTRyckFEedwSpa54EmtQ0gZH6z7Np5LpiBpIpSna', NULL, NULL, NULL, 'fe6f3aea24230490bbf242056f6c8cfe', NULL, NULL, 0, 0, '2024-08-15 10:38:29', '2024-08-15 10:38:29', NULL),
(20, 'anggun@gmail.com', 'anggun', '$2y$10$.c.OffGxxuXLr0Oo92i0sO/SUPwE8N6Dk3nA/OPD4DpLndbEwgofa', NULL, NULL, NULL, '4d039c92538626fcdbd8b83f45dae366', NULL, NULL, 0, 0, '2024-08-15 12:05:27', '2024-08-15 12:05:27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nelayan`
--
ALTER TABLE `nelayan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `parameter`
--
ALTER TABLE `parameter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nelayan`
--
ALTER TABLE `nelayan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `parameter`
--
ALTER TABLE `parameter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
