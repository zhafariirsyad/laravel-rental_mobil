-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2019 pada 19.15
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plat_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cars`
--

INSERT INTO `cars` (`id`, `nama`, `merk`, `plat_no`, `warna`, `tahun`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Toyota Avanza', 'Toyota', 'B 9234 AC', 'Hitam', 2017, '0', '2019-05-06 04:39:51', '2019-05-30 04:30:23'),
(2, 'Toyota Innova', 'Toyota', 'B 9224 AB', 'Hitam', 2017, '0', '2019-05-06 23:32:59', '2019-05-30 04:14:16'),
(3, 'Honda Jazz', 'Honda', 'B 9234 AE', 'Putih', 2018, '0', '2019-05-30 04:14:46', '2019-05-30 04:18:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `costumers`
--

CREATE TABLE `costumers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `costumers`
--

INSERT INTO `costumers` (`id`, `nama`, `alamat`, `jk`, `no_telp`, `no_ktp`, `created_at`, `updated_at`) VALUES
(1, 'Alfonso Albuquerque', 'Ciawi', 'L', '0895635674795', '4795929043434', '2019-05-06 04:40:00', '2019-05-30 04:30:01'),
(3, 'Albert Enstein', 'Cibedug', 'L', '086969694311', '9081321894120', '2019-05-30 04:12:52', '2019-05-30 04:12:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_05_212501_create_cars_table', 1),
(4, '2019_05_05_213040_create_costumers_table', 1),
(6, '2019_05_05_213102_create_transactions_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `kostumer_id` int(10) UNSIGNED NOT NULL,
  `mobil_id` int(10) UNSIGNED NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `bayar` int(11) DEFAULT NULL,
  `kembalian` int(11) DEFAULT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_denda` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `tgl_dikembalikan` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `kostumer_id`, `mobil_id`, `tgl_pinjam`, `tgl_kembali`, `harga`, `denda`, `bayar`, `kembalian`, `tgl_transaksi`, `total_denda`, `status`, `tgl_dikembalikan`, `created_at`, `updated_at`) VALUES
(29, 3, 3, 3, '2019-05-30', '2019-06-01', 2000000, 50000, 2070000, 20000, '2019-05-30', 50000, 1, '2019-06-02', '2019-05-30 04:17:54', '2019-05-30 04:18:34'),
(31, 3, 1, 1, '2019-05-30', '2019-05-30', 2000000, 30000, 2000000, 0, '2019-05-30', 0, 1, '2019-05-30', '2019-05-30 04:30:17', '2019-05-30 04:30:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zhafari Irsyad', 'zhafari205@gmail.com', NULL, '$2y$10$C1/eFCbkwq2M7Xyu3lAUJOVFalW8x15xiUbGDXCHc.Zj9SbrhgTfW', '1dGvxZyEjZlLO9N1tH4wmcEFRRmHBc49Yi9TZEsYnGDyWgI0ADOUu5RBUXC8', '2019-05-06 04:39:33', '2019-05-06 04:39:33'),
(3, 'Muhamad Miftah', 'mmumiftah@gmail.com', NULL, '$2y$10$Z4AZdekJSmWSnxXCtr8.jOkPt01vpkYzDDZ9ayeW9../l5Pyi15LS', 'ekdVVEg8nBBM5Ssd1Co5l43qBq6AX3WlSW2S7BoJ7emdyOcMcZhVZfZ98De5', '2019-05-30 04:12:06', '2019-05-30 04:12:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `costumers`
--
ALTER TABLE `costumers`
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
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT untuk tabel `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `costumers`
--
ALTER TABLE `costumers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
