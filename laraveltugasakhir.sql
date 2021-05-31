-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2021 pada 08.33
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
(25, 'Taufik Prabu Mustofa S.Pt', 'DI Aceh', '1991-11-20', 'L', 'Ds. Bambon No. 226, Jambi 61463, Aceh', '082344893903', 'Islam', 'Kawin', NULL, NULL),
(27, 'Yono Siregar', 'Jambi', '2009-11-01', 'L', 'Ds. Gading No. 959, Mojokerto 35910, Sulbar', '089191919191', 'Konghucu', 'Duda', NULL, NULL),
(29, 'Gamblang Setiawan', 'Kalimantan Timur', '1992-11-27', 'L', 'Jr. Veteran No. 162, Payakumbuh 51845, Sulteng', '3', 'Islam', 'Kawin', NULL, NULL),
(31, 'Dipa Kunthara Prasetya', 'Sulawesi Tenggara', '2019-06-04', 'L', 'Jln. Bagis Utama No. 421, Pontianak 98765, Sumsel', '3', 'Islam', 'Kawin', NULL, NULL),
(32, 'Amalia Mulyani', 'Jawa Timur', '1999-11-09', 'L', 'Ds. Bakit  No. 168, Kediri 99146, Kalbar', '7', 'Kristen', 'Lajang', NULL, NULL),
(33, 'Rafi Wibowo', 'Sulawesi Tengah', '2016-11-29', 'P', 'Psr. Baing No. 874, Pematangsiantar 39602, Kepri', '6', 'Kristen', 'Janda', NULL, NULL),
(34, 'Danu Kusumo', 'DI Yogyakarta', '2019-07-09', 'P', 'Gg. Sutarto No. 541, Tegal 17369, Jatim', '9', 'Hindu', 'Kawin', NULL, NULL),
(35, 'Emil Napitupulu', 'Maluku Utara', '2020-05-31', 'L', 'Psr. Abdul Rahmat No. 423, Sawahlunto 69994, Lampung', '9', 'Islam', 'Kawin', NULL, NULL),
(36, 'Alambana Pratama', 'DKI Jakarta', '2010-06-11', 'L', 'Dk. Hang No. 295, Tidore Kepulauan 32513, Aceh', '082121342098', 'Buddha', 'Lajang', NULL, NULL),
(37, 'Kanda Kusumo', 'Nusa Tenggara Barat', '2018-05-28', 'P', 'Gg. Setiabudhi No. 397, Ternate 70572, Jateng', '5', 'Kristen', 'Janda', NULL, NULL),
(38, 'Clara Unjani Handayani M.M.', 'Kepulauan Bangka Belitung', '1976-03-02', 'L', 'Ds. Bakhita No. 902, Pekanbaru 58976, Bengkulu', '8', 'Buddha', 'Kawin', NULL, NULL),
(39, 'Luis Prabowo', 'Sumatera Utara', '1999-05-27', 'L', 'Psr. Haji No. 862, Lhokseumawe 22698, Lampung', '0', 'Kristen', 'Duda', NULL, NULL),
(46, 'Muchamad Ramndani', 'Bandung', '2004-11-12', 'L', 'Batujajar', '082121342098', 'Kristen', 'Lajang', NULL, NULL),
(47, 'Astri', 'Bandung', '2004-04-16', 'L', 'Jl. Sadarmanah Cibebeur', '082134567821', 'Islam', 'Kawin', NULL, NULL),
(48, 'Annas bin', 'Kepulauan Seribu', '2004-11-12', 'L', 'Jl. Sadarmanah Cibebeur', '082157478318', 'Buddha', 'Lajang', NULL, NULL),
(50, 'Dea Puspita', 'Denpasar', '2004-04-28', 'P', 'Batujajar', '082134567821', 'Islam', 'Lajang', NULL, NULL);

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
(4, '2021_05_08_072826_create_karyawans_table', 2),
(5, '2021_05_16_034047_create_users_table', 3);

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Astri Fauziah', 'astrifauziah@gmail.com', NULL, '$2y$10$aSw3FCtW1aLtNGninHusX.9uaO08IdpTreKxDMC8v0uGS4oQr2Fe2', NULL, '2021-05-16 22:18:10', '2021-05-16 22:18:10'),
(7, 'Annaqiya Kafy', 'annaqiyakafy@gmail.com', NULL, '$2y$10$SaymyF6W3Sk0uo/IpIaiL.678TjBMJj9O4lmV4zbRzQJI323vM0XG', NULL, '2021-05-24 07:34:18', '2021-05-24 07:34:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
