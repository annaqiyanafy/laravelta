-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2021 pada 17.59
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveltugasakhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomorhp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusperkawinan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `alamat`, `nomorhp`, `agama`, `statusperkawinan`, `created_at`, `updated_at`) VALUES
(1, 'Carla Halimah', 'Gorontalo', '1995-10-16', 'P', 'Ds. Bagonwoto  No. 979, Probolinggo 83385, Aceh', '2', 'Buddha', 'Lajang', NULL, NULL),
(2, 'Alambana Simbolon', 'Aceh', '2013-10-19', 'L', 'Jln. Yoga No. 372, Bitung 48184, Sultra', '7', 'Kristen', 'Duda', NULL, NULL),
(3, 'Samiah Hastuti', 'Kepulauan Bangka Belitung', '2010-07-01', 'P', 'Dk. Ronggowarsito No. 533, Padangpanjang 39624, Jatim', '4', 'Islam', 'Lajang', NULL, NULL),
(4, 'Laras Wijayanti', 'Riau', '2005-06-21', 'L', 'Jr. Dr. Junjunan No. 565, Banjarbaru 45003, Pabar', '6', 'Buddha', 'Lajang', NULL, NULL),
(5, 'Lanjar Yono Suwarno M.Pd', 'Lampung', '1984-08-23', 'L', 'Jln. Jambu No. 984, Palu 35126, Kalbar', '9', 'Islam', 'Janda', NULL, NULL),
(6, 'Nalar Dabukke', 'Sulawesi Tenggara', '2018-07-07', 'L', 'Kpg. Sugiyopranoto No. 380, Medan 62261, Sumbar', '3', 'Buddha', 'Janda', NULL, NULL),
(7, 'Rendy Simanjuntak', 'Kepulauan Bangka Belitung', '2011-10-20', 'L', 'Jr. Jambu No. 236, Palembang 52507, DIY', '5', 'Hindu', 'Janda', NULL, NULL),
(8, 'Bahuwarna Waluyo', 'Jawa Barat', '1991-07-18', 'P', 'Dk. Jambu No. 202, Padang 72473, Sumsel', '0', 'Buddha', 'Lajang', NULL, NULL),
(9, 'Jatmiko Mandala', 'Bengkulu', '2014-11-05', 'P', 'Jr. Siliwangi No. 649, Pariaman 86481, Jatim', '7', 'Hindu', 'Lajang', NULL, NULL),
(10, 'Karna Hakim M.Kom.', 'Gorontalo', '2005-01-19', 'L', 'Gg. Nakula No. 970, Administrasi Jakarta Pusat 11816, Sulteng', '4', 'Islam', 'Janda', NULL, NULL);

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
(1, '2021_05_08_072826_create_karyawans_table', 1),
(2, '2021_05_16_034047_create_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Annaqiya', 'annaqiyanaff@gmail.com', '$2y$10$n0P5Nv.oCxW9PbkwtyYT2eY75G49tK4FnaTyeGaDZNUojvKmwffqe', NULL, '2021-06-02 07:57:47', '2021-06-02 07:57:47'),
(3, 'admin', 'admin@gmail.com', '$2y$10$LhJj9tb1BL4/ei0au4v0jeGG08bAX8gzbjLXi1NomU/2RnVrilvzq', NULL, '2021-06-02 08:46:06', '2021-06-02 08:46:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
