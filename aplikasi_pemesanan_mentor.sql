-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2024 at 06:27 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_pemesanan_mentor`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_mentor`
--

CREATE TABLE `daftar_mentor` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portofolio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vidio_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_mentor`
--

INSERT INTO `daftar_mentor` (`id`, `photo`, `nama`, `pendidikan`, `keahlian`, `portofolio`, `vidio_profile`, `harga`, `jenis`, `alamat`, `created_at`, `updated_at`) VALUES
(8, 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto/g1Iyc5qhf9INJw3LwwC1qqGxqJBcQC3KgMkJbjrO.png', 'Ex ut dolorem quam v', 'Explicabo Minima ul', 'Dolor et rerum nostr', 'A quis nulla enim ad', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/video/StlMDwxA84Ww4WMU0OyjHFLDL6If3J8yyRGIEgUR.mp4', '40000', 'Trainer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quas reprehenderit, quia et distinctio laudantium numquam nostrum sint ab. Consequatur nobis earum, qui odio odit soluta explicabo accusamus error assumenda!', '2023-11-18 03:24:26', '2023-11-22 01:53:42'),
(11, 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto_mentor/P3WkaGzSgcixzYa67KYKnGvgZv06RXZ8V2sGFK7s.png', 'Facilis hic soluta u', 'At qui eum repudiand', 'Sapiente sed sed et', 'Ex Nam optio fugit', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/video_mentor/LIiLrA0Go5JOBapNwHIxMK9W7tLczH5JZgithnEV.mp4', '280000', 'Motivator', 'nostrum sint ab. Consequatur    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quas reprehenderit, quia et distinctio laudantium numquam nobis earum, qui odio odit soluta explicabo accusamus error assumenda!', '2023-11-20 02:04:30', '2023-11-22 01:53:55'),
(12, 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto_mentor/CknVlBkI1X21PWDKjBOLejTlctlmRbcPzxb5R77v.png', 'Nulla eveniet susci', 'Amet quis doloremqu', 'Magni minus nulla pe', 'Autem voluptas asper', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/video_mentor/HD2CWnbGkRivx2BkraXRX6lJt1w4ITYtshZ1ESXE.mp4', '940000', 'Coach', 't consectetur adipisiciLorem ipsum dolor sit amenLorem ipsum dolor sit ameg elit. Accusantium quas reprehenderit, quia et distinctio laudantium numquam', '2023-11-20 02:13:18', '2023-11-22 01:53:16'),
(13, 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto_mentor/bzkYTiH0UAkvhETv2yKY6uav4i1DAnFVOECPBMRh.png', 'Ullamco iste volupta', 'Consequat Voluptate', 'Nisi cum ipsum conse', 'Do distinctio Labor', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/video_mentor/lDxpzrSz7MsGPM7RwS6zodxp1UzNPU25MY3UwkQx.mp4', '88000', 'Psikolog', 'orem ipsum dolor sit amen   tconsectetur adipisiciLLorem ipsum dolor sit ameg elit. Accusantium quas reprehenderit, quia et distinctio laudantium numquam', '2023-11-20 02:13:58', '2023-11-22 01:52:22'),
(14, 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto_mentor/JEnRXLcVLe6rqDyj6sKQssJBso8qkluPQBWvnC70.png', 'Autem id aut maxime', 'Ea sunt maiores ius', 'Incidunt debitis si', 'Aut commodo libero e', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/video_mentor/UnNNWgRcQnneo9G6VYA1VbbGllX81EbY9QNjaw02.mp4', '67000', 'Konselor & Hypnotherapist', 'Reprehenderit est d', '2023-11-20 07:43:19', '2023-11-22 01:52:40'),
(15, 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto_mentor/dEl1vq82BzSUNKyfrBeczqzSela6i2M8m8IMgulq.jpg', 'Labore eos magni dol', 'Reiciendis corporis', 'Consequatur sit co', 'Nulla in quis enim p', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/video_mentor/2FpkN2n1w6O9BQbvBhWm2D5SxmXe9wtAHPiacF7j.mp4', '490000', 'Motivator', 'Numquam hic eiusmod', '2023-11-20 07:49:04', '2023-11-22 01:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_15_145939_create_pendaftaran_mentor_table', 1),
(6, '2023_11_15_150050_create_daftar_mentor_table', 1),
(7, '2023_11_15_150114_create_pemesanan_table', 1),
(8, '2023_11_22_143029_create_pembatalan_table', 2),
(9, '2024_01_18_190042_create_pembayaran_trainer_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembatalan`
--

CREATE TABLE `pembatalan` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_instansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alasan_pembatalan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembatalan`
--

INSERT INTO `pembatalan` (`id`, `nama`, `instansi`, `alamat_instansi`, `lokasi_kegiatan`, `tanggal_kegiatan`, `jam`, `no_hp`, `jumlah_pembayaran`, `alasan_pembatalan`, `created_at`, `updated_at`) VALUES
(2, 'Necessitatibus elit', 'Eiusmod magna vero s', 'Enim maxime consequa', 'Fugit obcaecati dol', '1997-09-20', '02:03', '88', '96', 'Accusamus in optio', '2023-11-22 08:10:21', '2023-11-22 08:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_trainer`
--

CREATE TABLE `pembayaran_trainer` (
  `id` bigint UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_trainer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_potongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran_trainer`
--

INSERT INTO `pembayaran_trainer` (`id`, `nik`, `nama`, `jenis_trainer`, `tanggal`, `jumlah_potongan`, `jumlah_pembayaran`, `created_at`, `updated_at`) VALUES
(3, '2', '2', '13', '2222-02-02', '2', '2', '2024-01-18 21:37:57', '2024-01-18 21:38:24'),
(4, '65', 'Tempora accusamus ip', '14', '1982-05-04', '31', '7', '2024-01-18 21:41:43', '2024-01-18 21:41:59'),
(5, '21', 'Anim consectetur am', '12', '1996-05-23', '49', '79', '2024-01-18 21:49:21', '2024-01-18 21:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` bigint UNSIGNED NOT NULL,
  `mentor_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_instansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kendala_yang_di_alami` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harapan_dari_adanya_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bayar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `mentor_id`, `no_hp`, `nama`, `instansi`, `alamat_instansi`, `lokasi_kegiatan`, `tanggal_kegiatan`, `jam`, `kendala_yang_di_alami`, `harapan_dari_adanya_kegiatan`, `jumlah_pembayaran`, `bayar`, `created_at`, `updated_at`) VALUES
(120, '11', '51', 'Itaque inventore qui', 'Maiores blanditiis i', 'Nemo dolorem ad id c', 'Ullamco nisi qui qui', '1972-12-20', '23:52', 'Sit iste alias adipi', 'Blanditiis alias nul', '280000', '0', '2024-01-18 11:51:19', '2024-01-18 11:51:19'),
(121, '11', '51', 'Itaque inventore qui', 'Maiores blanditiis i', 'Nemo dolorem ad id c', 'Ullamco nisi qui qui', '1972-12-20', '23:52', 'Sit iste alias adipi', 'Blanditiis alias nul', '280000', '0', '2024-01-18 11:51:43', '2024-01-18 11:51:43'),
(122, '11', '51', 'Itaque inventore qui', 'Maiores blanditiis i', 'Nemo dolorem ad id c', 'Ullamco nisi qui qui', '1972-12-20', '23:52', 'Sit iste alias adipi', 'Blanditiis alias nul', '280000', '0', '2024-01-18 11:52:01', '2024-01-18 11:52:01'),
(123, '11', '51', 'Itaque inventore qui', 'Maiores blanditiis i', 'Nemo dolorem ad id c', 'Ullamco nisi qui qui', '1972-12-20', '23:52', 'Sit iste alias adipi', 'Blanditiis alias nul', '280000', '0', '2024-01-18 11:52:19', '2024-01-18 11:52:19'),
(124, '11', '51', 'Itaque inventore qui', 'Maiores blanditiis i', 'Nemo dolorem ad id c', 'Ullamco nisi qui qui', '1972-12-20', '23:52', 'Sit iste alias adipi', 'Blanditiis alias nul', '280000', '0', '2024-01-18 11:52:45', '2024-01-18 11:52:45'),
(125, '11', '51', 'Itaque inventore qui', 'Maiores blanditiis i', 'Nemo dolorem ad id c', 'Ullamco nisi qui qui', '1972-12-20', '23:52', 'Sit iste alias adipi', 'Blanditiis alias nul', '280000', '0', '2024-01-18 11:53:03', '2024-01-18 11:53:03'),
(126, '11', '51', 'Itaque inventore qui', 'Maiores blanditiis i', 'Nemo dolorem ad id c', 'Ullamco nisi qui qui', '1972-12-20', '23:52', 'Sit iste alias adipi', 'Blanditiis alias nul', '280000', '0', '2024-01-18 11:53:27', '2024-01-18 11:53:27'),
(127, '11', '51', 'Itaque inventore qui', 'Maiores blanditiis i', 'Nemo dolorem ad id c', 'Ullamco nisi qui qui', '1972-12-20', '23:52', 'Sit iste alias adipi', 'Blanditiis alias nul', '280000', '0', '2024-01-18 11:53:37', '2024-01-18 11:53:37'),
(128, '8', '12', 'Quo totam dolor amet', 'Impedit nisi minus', 'Molestiae impedit a', 'Est nihil aute illu', '1973-08-14', '20:58', 'Accusamus reprehende', 'Iste ut velit in adi', '40000', '0', '2024-01-18 12:42:17', '2024-01-18 12:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_mentor`
--

CREATE TABLE `pendaftaran_mentor` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_non_akademik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sertifikat_keahlian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portofolio_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuplikan_vidio_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_mentor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ratecard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran_mentor`
--

INSERT INTO `pendaftaran_mentor` (`id`, `nama_lengkap`, `ttl`, `nik`, `alamat`, `pendidikan`, `pendidikan_non_akademik`, `keahlian`, `sertifikat_keahlian`, `portofolio_kegiatan`, `cuplikan_vidio_profile`, `upload_foto`, `jenis_mentor`, `ratecard`, `created_at`, `updated_at`) VALUES
(7, 'Ut unde aperiam omni', 'Illum eum cillum ac', 'Porro alias eaque in', 'Magnam ullam ducimus', 'Officia fugiat plac', 'Id nulla odio quia', 'Dolor perferendis ut', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto_sertifikat/fx3oXye0Kt2GKPs8wAyszU0GGqHEXHo1T34yACTF.png', 'Perferendis distinct', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/video/XQwNvWgSyPx77ohFDoLLrXsLnnUPCVXsqXr1etFs.mp4', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto/5kNQeQwbx5kqhGtSTi7B0uYeOVHSIrOFt2XbMQDF.png', 'Psikolog', 'Mollitia commodo ut', '2023-11-18 12:36:16', '2023-11-18 12:36:16'),
(8, 'Et ut deleniti odio', 'Ducimus at numquam', 'Delectus voluptates', 'Enim officia ducimus', 'Facilis quo qui offi', 'Dolorum est similiqu', 'Nisi rerum voluptate', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto_sertifikat/h7YD9E07lBPBKft8PtpFHdkRq0Pz0GauhQ1wh0NS.png', 'Consequuntur possimu', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/video/S2tQwgMn1E7YvYGsOsB7cIKWPr7b56JTLDAvQL8I.jpg', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto/iTwJoKTladfpFcoeZWDvWfeDpKnUiD7OZBiG0QqQ.jpg', 'Psikolog', 'Ea exercitation ut v', '2024-01-17 07:24:21', '2024-01-17 07:24:21'),
(9, 'Est quidem pariatur', 'Sapiente sed ut anim', 'Dolor aspernatur inc', 'Veniam non sunt omn', 'Aut at molestiae eni', 'Autem voluptas velit', 'Dolorum laboriosam', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto_sertifikat/JysR3K6tDiJMneAscnh6OK3px9lYBuJIeDnLhFOj.jpg', 'Ut Nam illum qui ex', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/video/phRjnaHlAVpe9yfnT88g29rAPfRTFAQX1cgvqcao.jpg', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto/RkXd7khdoKm6KRj68oAipchZpHtxkonHSy1XQmuD.jpg', 'Coach', 'Laborum veritatis ap', '2024-01-17 07:35:22', '2024-01-17 07:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `is_admin`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', '1', 'admin@gmail.com', NULL, '$2y$10$9vVrYdvpVy5BL/CI96kdxO0T4yngtsB3GQQPdZ.BhjXKpDX1/utta', NULL, '2023-11-17 11:57:13', '2023-11-17 11:57:13'),
(4, 'admin2', '1', 'admin2@gmail.com', NULL, '$2y$10$W0PQ/VeBeNxAc31eHdpz1unmJtJWh7MB7BIhrZLSnCt7SS87wdZ7y', NULL, '2024-01-18 20:49:19', '2024-01-18 20:49:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_mentor`
--
ALTER TABLE `daftar_mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembatalan`
--
ALTER TABLE `pembatalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_trainer`
--
ALTER TABLE `pembayaran_trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran_mentor`
--
ALTER TABLE `pendaftaran_mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_mentor`
--
ALTER TABLE `daftar_mentor`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembatalan`
--
ALTER TABLE `pembatalan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran_trainer`
--
ALTER TABLE `pembayaran_trainer`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `pendaftaran_mentor`
--
ALTER TABLE `pendaftaran_mentor`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
