-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2023 at 10:19 AM
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
(8, '2023_11_22_143029_create_pembatalan_table', 2);

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
(52, '11', '39', 'Et sit ut aut do vol', 'Enim amet aut dolor', 'Ratione ex in incidi', 'Excepteur blanditiis', '2004-09-14', '06:15', 'Sapiente quia minus', 'Lorem cupidatat quo', '280000', '0', '2023-11-22 11:05:03', '2023-11-22 11:05:03'),
(53, '13', '39', 'Ut non distinctio A', 'Velit dolorum aute e', 'Et autem aspernatur', 'Impedit est alias p', '1986-09-19', '06:24', 'Quo optio expedita', 'Nemo omnis porro aut', '88000', '0', '2023-11-22 11:08:43', '2023-11-22 11:08:43'),
(54, '12', '18', 'Optio sit qui nihi', 'Ipsam rerum quas ut', 'Voluptatem iste lab', 'Non aute ad nisi obc', '1980-07-17', '14:32', 'Rem necessitatibus i', 'Sed aperiam quis et', '940000', '0', '2023-11-22 11:10:48', '2023-11-22 11:10:48'),
(55, '11', '20', 'Culpa reiciendis tem', 'Enim velit aliqua E', 'Facere reiciendis du', 'Vero omnis non sunt', '2012-12-28', '21:08', 'Qui sequi lorem exce', 'Aute repudiandae lau', '280000', '0', '2023-11-22 11:12:32', '2023-11-22 11:12:32'),
(56, '11', '20', 'Culpa reiciendis tem', 'Enim velit aliqua E', 'Facere reiciendis du', 'Vero omnis non sunt', '2012-12-28', '21:08', 'Qui sequi lorem exce', 'Aute repudiandae lau', '280000', '0', '2023-11-22 11:12:34', '2023-11-22 11:12:34'),
(57, '11', '20', 'Culpa reiciendis tem', 'Enim velit aliqua E', 'Facere reiciendis du', 'Vero omnis non sunt', '2012-12-28', '21:08', 'Qui sequi lorem exce', 'Aute repudiandae lau', '280000', '0', '2023-11-22 11:12:35', '2023-11-22 11:12:35'),
(58, '15', '37', 'Modi est vero doloru', 'Soluta consequatur', 'Nihil cum sint temp', 'Unde nihil ad verita', '1972-11-17', '12:43', 'Nulla pariatur Inci', 'Recusandae Magni om', '490000', '0', '2023-11-22 11:36:20', '2023-11-22 11:36:20'),
(59, '15', '77', 'Maiores facilis labo', 'Voluptas et ut minim', 'Consequatur aut nobi', 'Consequatur rerum en', '2008-10-19', '05:39', 'Culpa necessitatibu', 'Nulla mollit et est', '490000', '0', '2023-11-22 11:45:19', '2023-11-22 11:45:19'),
(60, '15', '77', 'Maiores facilis labo', 'Voluptas et ut minim', 'Consequatur aut nobi', 'Consequatur rerum en', '2008-10-19', '05:39', 'Culpa necessitatibu', 'Nulla mollit et est', '490000', '0', '2023-11-22 11:46:08', '2023-11-22 11:46:08'),
(61, '8', '12', 'Sint est quam sint', 'Dolor dolorem offici', 'Aliqua Ex soluta fa', 'Atque beatae eum inc', '2021-12-26', '22:24', 'Quia sed veritatis a', 'Aut est et ut error', '40000', '0', '2023-11-22 11:53:02', '2023-11-22 11:53:02'),
(62, '12', '62', 'Sequi cum non fugiat', 'Numquam dolor nulla', 'Et nostrum dolores i', 'At pariatur Quis vo', '1970-09-15', '05:34', 'Deserunt voluptas ul', 'Ut sint voluptatem e', '940000', '0', '2023-11-22 12:13:53', '2023-11-22 12:13:53'),
(63, '12', '62', 'Sequi cum non fugiat', 'Numquam dolor nulla', 'Et nostrum dolores i', 'At pariatur Quis vo', '1970-09-15', '05:34', 'Deserunt voluptas ul', 'Ut sint voluptatem e', '940000', '0', '2023-11-22 12:17:58', '2023-11-22 12:17:58'),
(64, '11', '41', 'Quis quidem dolorem', 'Delectus exercitati', 'Quidem aliquip lauda', 'Aut cillum praesenti', '2009-07-27', '21:08', 'Quasi ut magna eaque', 'Est molestiae unde', '280000', '0', '2023-11-22 12:25:00', '2023-11-22 12:25:00'),
(65, '11', '41', 'Quis quidem dolorem', 'Delectus exercitati', 'Quidem aliquip lauda', 'Aut cillum praesenti', '2009-07-27', '21:08', 'Quasi ut magna eaque', 'Est molestiae unde', '280000', '0', '2023-11-22 12:28:33', '2023-11-22 12:28:33'),
(66, '11', '41', 'Quis quidem dolorem', 'Delectus exercitati', 'Quidem aliquip lauda', 'Aut cillum praesenti', '2009-07-27', '21:08', 'Quasi ut magna eaque', 'Est molestiae unde', '280000', '0', '2023-11-22 12:39:14', '2023-11-22 12:39:14'),
(67, '11', '41', 'Quis quidem dolorem', 'Delectus exercitati', 'Quidem aliquip lauda', 'Aut cillum praesenti', '2009-07-27', '21:08', 'Quasi ut magna eaque', 'Est molestiae unde', '280000', '0', '2023-11-22 12:40:11', '2023-11-22 12:40:11'),
(68, '11', '21', 'Corrupti excepturi', 'Quia voluptatem ad', 'Officia doloribus es', 'Sint quia incidunt', '1998-12-23', '05:12', 'Voluptates officia s', 'Hic vel magni quibus', '280000', '0', '2023-11-22 12:54:18', '2023-11-22 12:54:18'),
(69, '12', '61', 'Quis esse nemo qui u', 'Impedit illum pers', 'Consequatur Eius fu', 'Labore magna dolorum', '2015-01-11', '14:16', 'Minima impedit in c', 'Doloremque et conseq', '940000', '0', '2023-11-22 23:45:05', '2023-11-22 23:45:05'),
(70, '12', '36', 'Mollitia esse illum', 'Consequat Totam ani', 'Adipisicing odio ut', 'Consectetur commodi', '2022-11-20', '18:27', 'Dolor anim voluptate', 'Aut consequatur Quo', '940000', '0', '2023-11-22 23:49:56', '2023-11-22 23:49:56'),
(71, '15', '90', 'Consequatur Laborum', 'Do irure veritatis s', 'Magnam quis est nihi', 'Pariatur Dolore eos', '1997-08-02', '02:31', 'Et impedit illum d', 'Sunt veniam molest', '490000', '0', '2023-11-23 00:03:08', '2023-11-23 00:03:08'),
(72, '13', '83', 'Sit qui dolores qua', 'Aliqua Do ipsum und', 'Cupidatat tempor bea', 'Labore illum delect', '1984-11-04', '23:05', 'Omnis fugiat enim co', 'Veritatis assumenda', '88000', '0', '2023-11-23 00:10:10', '2023-11-23 00:10:10'),
(73, '11', '73', 'Doloremque tempor do', 'Beatae quidem possim', 'Omnis ullamco except', 'Eius veritatis elige', '2007-12-27', '16:28', 'Esse nulla ducimus', 'Consectetur ipsum i', '280000', '0', '2023-11-23 00:41:47', '2023-11-23 00:41:47'),
(74, '11', '73', 'Doloremque tempor do', 'Beatae quidem possim', 'Omnis ullamco except', 'Eius veritatis elige', '2007-12-27', '16:28', 'Esse nulla ducimus', 'Consectetur ipsum i', '280000', '0', '2023-11-23 00:56:10', '2023-11-23 00:56:10'),
(75, '13', '5', 'Perferendis harum om', 'Magnam sed et et mol', 'Fugiat error ut reru', 'Officia non reprehen', '2002-01-20', '14:01', 'Sit recusandae Nemo', 'Eum neque fugit rep', '88000', '0', '2023-11-23 01:01:41', '2023-11-23 01:01:41'),
(76, '13', '5', 'Perferendis harum om', 'Magnam sed et et mol', 'Fugiat error ut reru', 'Officia non reprehen', '2002-01-20', '14:01', 'Sit recusandae Nemo', 'Eum neque fugit rep', '88000', '0', '2023-11-23 01:12:48', '2023-11-23 01:12:48'),
(77, '13', '5', 'Perferendis harum om', 'Magnam sed et et mol', 'Fugiat error ut reru', 'Officia non reprehen', '2002-01-20', '14:01', 'Sit recusandae Nemo', 'Eum neque fugit rep', '88000', '0', '2023-11-23 01:13:28', '2023-11-23 01:13:28'),
(78, '13', '5', 'Perferendis harum om', 'Magnam sed et et mol', 'Fugiat error ut reru', 'Officia non reprehen', '2002-01-20', '14:01', 'Sit recusandae Nemo', 'Eum neque fugit rep', '88000', '0', '2023-11-23 01:40:01', '2023-11-23 01:40:01'),
(79, '13', '5', 'Perferendis harum om', 'Magnam sed et et mol', 'Fugiat error ut reru', 'Officia non reprehen', '2002-01-20', '14:01', 'Sit recusandae Nemo', 'Eum neque fugit rep', '88000', '0', '2023-11-23 01:41:10', '2023-11-23 01:41:10'),
(80, '13', '5', 'Perferendis harum om', 'Magnam sed et et mol', 'Fugiat error ut reru', 'Officia non reprehen', '2002-01-20', '14:01', 'Sit recusandae Nemo', 'Eum neque fugit rep', '88000', '0', '2023-11-23 01:41:57', '2023-11-23 01:41:57'),
(81, '13', '5', 'Perferendis harum om', 'Magnam sed et et mol', 'Fugiat error ut reru', 'Officia non reprehen', '2002-01-20', '14:01', 'Sit recusandae Nemo', 'Eum neque fugit rep', '88000', '0', '2023-11-23 01:42:44', '2023-11-23 01:42:44'),
(82, '13', '5', 'Perferendis harum om', 'Magnam sed et et mol', 'Fugiat error ut reru', 'Officia non reprehen', '2002-01-20', '14:01', 'Sit recusandae Nemo', 'Eum neque fugit rep', '88000', '0', '2023-11-23 01:43:30', '2023-11-23 01:43:30'),
(83, '8', '74', 'Deserunt consequatur', 'Tempore placeat cu', 'Eum sunt dolore sap', 'Et tempora molestiae', '1979-02-08', '17:39', 'Laboriosam beatae l', 'Ex fugiat et mollit', '40000', '0', '2023-11-23 01:46:29', '2023-11-23 01:46:29'),
(84, '12', '21', 'Magnam aut tenetur a', 'A est non ad dolor', 'Voluptates totam rep', 'Et cupidatat dolor v', '2013-12-01', '01:35', 'Accusamus dolor et n', 'Architecto recusanda', '940000', '0', '2023-11-23 02:32:30', '2023-11-23 02:32:30'),
(85, '12', '21', 'Magnam aut tenetur a', 'A est non ad dolor', 'Voluptates totam rep', 'Et cupidatat dolor v', '2013-12-01', '01:35', 'Accusamus dolor et n', 'Architecto recusanda', '940000', '0', '2023-11-23 02:33:34', '2023-11-23 02:33:34'),
(86, '12', '21', 'Magnam aut tenetur a', 'A est non ad dolor', 'Voluptates totam rep', 'Et cupidatat dolor v', '2013-12-01', '01:35', 'Accusamus dolor et n', 'Architecto recusanda', '940000', '0', '2023-11-23 02:34:51', '2023-11-23 02:34:51'),
(87, '12', '21', 'Magnam aut tenetur a', 'A est non ad dolor', 'Voluptates totam rep', 'Et cupidatat dolor v', '2013-12-01', '01:35', 'Accusamus dolor et n', 'Architecto recusanda', '940000', '0', '2023-11-23 02:35:47', '2023-11-23 02:35:47'),
(88, '12', '21', 'Magnam aut tenetur a', 'A est non ad dolor', 'Voluptates totam rep', 'Et cupidatat dolor v', '2013-12-01', '01:35', 'Accusamus dolor et n', 'Architecto recusanda', '940000', '0', '2023-11-23 02:37:28', '2023-11-23 02:37:28'),
(89, '12', '21', 'Magnam aut tenetur a', 'A est non ad dolor', 'Voluptates totam rep', 'Et cupidatat dolor v', '2013-12-01', '01:35', 'Accusamus dolor et n', 'Architecto recusanda', '940000', '0', '2023-11-23 02:38:45', '2023-11-23 02:38:45'),
(90, '12', '21', 'Magnam aut tenetur a', 'A est non ad dolor', 'Voluptates totam rep', 'Et cupidatat dolor v', '2013-12-01', '01:35', 'Accusamus dolor et n', 'Architecto recusanda', '940000', '0', '2023-11-23 02:40:16', '2023-11-23 02:40:16'),
(91, '13', '22', 'Autem optio aliquam', 'Sint deserunt mollit', 'Sit dolores atque am', 'Corrupti impedit a', '2011-09-23', '04:38', 'Exercitationem expli', 'Eos error tempora et', '88000', '0', '2023-11-23 02:42:01', '2023-11-23 02:42:01'),
(92, '13', '22', 'Autem optio aliquam', 'Sint deserunt mollit', 'Sit dolores atque am', 'Corrupti impedit a', '2011-09-23', '04:38', 'Exercitationem expli', 'Eos error tempora et', '88000', '0', '2023-11-23 02:43:12', '2023-11-23 02:43:12'),
(93, '13', '22', 'Autem optio aliquam', 'Sint deserunt mollit', 'Sit dolores atque am', 'Corrupti impedit a', '2011-09-23', '04:38', 'Exercitationem expli', 'Eos error tempora et', '88000', '0', '2023-11-23 02:44:04', '2023-11-23 02:44:04'),
(94, '11', '24', 'Dolore quam sit labo', 'Laborum Amet labor', 'Maxime commodo quae', 'Aut cupidatat dolore', '2015-06-23', '02:18', 'Dolorum et aliqua Q', 'Minus tempor et volu', '280000', '0', '2023-11-23 02:45:48', '2023-11-23 02:45:48'),
(95, '11', '24', 'Dolore quam sit labo', 'Laborum Amet labor', 'Maxime commodo quae', 'Aut cupidatat dolore', '2015-06-23', '02:18', 'Dolorum et aliqua Q', 'Minus tempor et volu', '280000', '0', '2023-11-23 02:47:46', '2023-11-23 02:47:46'),
(96, '13', '9', 'Omnis velit culpa n', 'Autem enim culpa co', 'Et asperiores vitae', 'Itaque labore rem la', '1972-11-23', '08:14', 'Sed neque molestias', 'Omnis nulla dolore m', '88000', '0', '2023-11-23 02:51:51', '2023-11-23 02:51:51'),
(97, '13', '45', 'Commodo quo providen', 'Tenetur ex odio dign', 'Illum esse placeat', 'Dolore mollitia poss', '2015-04-18', '13:08', 'Optio sint consequu', 'Dolorem quos explica', '88000', '0', '2023-11-23 02:55:07', '2023-11-23 02:55:07'),
(98, '13', '45', 'Commodo quo providen', 'Tenetur ex odio dign', 'Illum esse placeat', 'Dolore mollitia poss', '2015-04-18', '13:08', 'Optio sint consequu', 'Dolorem quos explica', '88000', '0', '2023-11-23 02:57:29', '2023-11-23 02:57:29');

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
(7, 'Ut unde aperiam omni', 'Illum eum cillum ac', 'Porro alias eaque in', 'Magnam ullam ducimus', 'Officia fugiat plac', 'Id nulla odio quia', 'Dolor perferendis ut', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto_sertifikat/fx3oXye0Kt2GKPs8wAyszU0GGqHEXHo1T34yACTF.png', 'Perferendis distinct', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/video/XQwNvWgSyPx77ohFDoLLrXsLnnUPCVXsqXr1etFs.mp4', 'http://localhost/aplikasi_pemesanan_mentor/public/storage/foto/5kNQeQwbx5kqhGtSTi7B0uYeOVHSIrOFt2XbMQDF.png', 'Psikolog', 'Mollitia commodo ut', '2023-11-18 12:36:16', '2023-11-18 12:36:16');

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
(1, 'Hilda Stephenson', '0', 'savuwavih@mailinator.com', NULL, '$2y$10$AjhJe79vRxsrxaqk5mIgbeiWjsNsbvcf8E30YlzPzj69Gwmk6fgP6', NULL, '2023-11-17 11:49:16', '2023-11-17 11:49:16'),
(3, 'admin', '1', 'admin@gmail.com', NULL, '$2y$10$9vVrYdvpVy5BL/CI96kdxO0T4yngtsB3GQQPdZ.BhjXKpDX1/utta', NULL, '2023-11-17 11:57:13', '2023-11-17 11:57:13');

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pembatalan`
--
ALTER TABLE `pembatalan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `pendaftaran_mentor`
--
ALTER TABLE `pendaftaran_mentor`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
