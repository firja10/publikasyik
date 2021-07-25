-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 03:43 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publikasyik`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jurnals`
--

CREATE TABLE `jurnals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_jurnal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poster_jurnal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_jurnal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_jurnal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_jurnal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_jurnal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurnals`
--

INSERT INTO `jurnals` (`id`, `judul_jurnal`, `poster_jurnal`, `deskripsi_jurnal`, `link_jurnal`, `nomor_jurnal`, `tanggal_jurnal`, `created_at`, `updated_at`) VALUES
(1, 'Perengkahan Katalitik Metil Ester dari Minyak Jelantah Menggunakan Katalis Ni/ZSM5 yang Dihasilkan dengan Metode Ion Exchangee', NULL, 'Perengkahan Katalitik Metil Ester dari Minyak Jelantah Menggunakan Katalis Ni/ZSM5 yang Dihasilkan dengan Metode Ion Exchangee merupakan salah satu jurnal terbaik yang kami pilih', 'https://drive.google.com/file/d/1-W2KDDRe0co4ZQPuYyM32K_7WARBRb-v/view?usp=sharing', NULL, NULL, '2021-07-23 05:02:16', '2021-07-23 05:02:16'),
(2, 'METODE PEMBELAJARAN AKTIF TIPE GROUP TO GROUP EXCHANGE (GGE) UNTUK MENINGKATKAN HASIL BELAJAR SISWA PADA MATERI CAHAYA', NULL, 'METODE PEMBELAJARAN AKTIF TIPE GROUP TO GROUP EXCHANGE (GGE) UNTUK MENINGKATKAN HASIL BELAJAR SISWA PADA MATERI CAHAYA merupakan jurnal yang ditulis oleh Titin Anggraini dari Program Studi Teknik Kimia Fakultas Teknik Universitas Jambi', 'https://drive.google.com/file/d/1-W2KDDRe0co4ZQPuYyM32K_7WARBRb-v/view?usp=sharing', NULL, NULL, '2021-07-23 05:18:04', '2021-07-23 05:18:04'),
(3, 'PENINGKATAN KOMPETENSI PADA MATA PELAJARAN KEWIRAUSAHAAN DENGAN PENERAPAN PEMBELAJARAN KOOPERATIF MODEL THINK PAIR SHARE (TPS) DI SMK NEGERI 2 GODEAN', NULL, 'PENINGKATAN KOMPETENSI PADA MATA PELAJARAN KEWIRAUSAHAAN\r\nDENGAN PENERAPAN PEMBELAJARAN KOOPERATIF MODEL\r\nTHINK PAIR SHARE (TPS) DI SMK NEGERI 2 GODEAN adalah jurnal yang ditulis oleh Armavian Herda Murdhani', 'https://drive.google.com/file/d/1aMaV1dQbm1MYD6a5Zgk9Kt7r4M1ctgtC/view?usp=sharing', NULL, NULL, '2021-07-23 05:20:41', '2021-07-23 05:20:41'),
(4, 'PERAN KEBIJAKAN RASKIN TERHADAP ALOKASI PENGELUARAN RUMAH TANGGA PETANI DALAM UPAYA MENDUKUNG KETAHANAN PANGAN: Studi Kasus di Desa Gambarsari Kecamatan Kemangkon Kabupaten Purbalingga', NULL, 'PERAN KEBIJAKAN RASKIN TERHADAP ALOKASI PENGELUARAN RUMAH TANGGA PETANI DALAM UPAYA MENDUKUNG KETAHANAN PANGAN: Studi Kasus di Desa Gambarsari Kecamatan Kemangkon Kabupaten Purbalingga adalah jurnal yang ditulis oleh Noviar Wicaksono', 'https://www.academia.edu/3808084/PERAN_KEBIJAKAN_RASKIN_TERHADAP_ALOKASI_PENGELUARAN_RUMAHTANGGA_PETANI_DALAM_UPAYA_MENDUKUNG_KETAHANAN_PANGAN_Studi_Kasus_di_Desa_Gambarsari_Kecamatan_Kemangkon_Kabupaten_Purbalingga?auto=download', NULL, NULL, '2021-07-23 05:25:32', '2021-07-23 05:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_22_054827_create_papers_table', 1),
(5, '2021_07_22_055827_create_seminars_table', 1),
(6, '2021_07_22_060018_create_jurnals_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_paper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poster_paper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_paper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_paper` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_paper` date DEFAULT NULL,
  `tanggal_akhir_paper` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`id`, `judul_paper`, `poster_paper`, `deskripsi_paper`, `link_paper`, `tanggal_paper`, `tanggal_akhir_paper`, `created_at`, `updated_at`) VALUES
(1, 'Time To Deliver Clean Energy For The Nations', 'call-for-papers-1.jpeg', 'Time To Deliver Clean Energy For The Nations adalah acara yang diselenggarakan oleh MBTKE ConEx', 'http://bit.ly/Zoom1', '2014-06-04', '2014-06-06', '2021-07-23 02:51:17', '2021-07-23 02:51:17'),
(2, 'Berkala Ilmu Perpustakaan dan Informasi', 'call-for-papers-2.jpeg', 'Berkala Ilmu Perpustakaan dan Informasi adalah Call For Papers yang diadakan oleh Perpustakaan UGM', 'http://bit.ly/CVTekno25', '2021-06-01', '2021-06-30', '2021-07-23 03:32:23', '2021-07-23 07:40:04'),
(3, 'Security For Sovereignity', 'call-for-papers-3.jpeg', 'Security For Sovereignity adalah acara yang diselenggarakan oleh Universitas Padjadjaran', 'http://bit.ly/Zoom3', '2018-10-17', NULL, '2021-07-23 03:38:03', '2021-07-23 03:38:03'),
(5, 'ISITIA 2021', 'call-for-papers-4.jpg', 'ISITIA 2021 adalah acara yang diselenggarakan oleh ITS', 'http://bit.ly/Zoom4', '2021-07-21', '2021-07-22', '2021-07-23 03:41:30', '2021-07-23 03:41:30');

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
-- Table structure for table `seminars`
--

CREATE TABLE `seminars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_seminar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poster_seminar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_seminar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_seminar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_seminar` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seminars`
--

INSERT INTO `seminars` (`id`, `judul_seminar`, `poster_seminar`, `deskripsi_seminar`, `link_seminar`, `tanggal_seminar`, `created_at`, `updated_at`) VALUES
(2, 'Alternatif Pembiayaan Program Kerja Kemahasiswaan FISIP UNPAD', 'seminar-1.jpeg', 'Alternatif Pembiayaan Program Kerja Kemahasiswaan FISIP UNPAD merupakan webinar yang diadakan oleh FISIP UNPAD', 'http://bit.ly/CVTekno25', '2017-02-24', '2021-07-23 06:10:56', '2021-07-23 07:49:02'),
(3, 'Business Analytics : A New Source of Competitive Advantage', 'seminar-5.jpeg', 'Business Analytics : A New Source of Competitive Advantage adalah seminar yang diadakan oleh Manajemen Bisnis ITS', 'http://bit.ly/CVTekno25', '2018-10-25', '2021-07-23 06:13:55', '2021-07-23 06:13:55'),
(4, 'Era Baru Pendidikan Tinggi Pasca Penanganan Covid-19', 'seminar-3.jpeg', 'Era Baru Pendidikan Tinggi Pasca Penanganan Covid-19 adalah seminar yang diadakan oleh FDGBI UNPAD', 'http://bit.ly/streamingfdgbi2', '2021-07-26', '2021-07-23 06:15:14', '2021-07-23 06:15:14'),
(5, 'Seminar Nasional Kimia 2019', 'seminar-4.png', 'Seminar Nasional Kimia 2019 adalah seminar yang diadakan oleh Dosen Kimia ITS', 'http://bit.ly/streamingkimia', '2019-07-24', '2021-07-23 06:17:02', '2021-07-23 06:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@itsolutionstuff.com', NULL, '$2y$10$g52cQI6wKRU3vVqxzFM2IOPlKEEqa71sVCDjGKWIPkWsBhr4YKMq6', 1, NULL, '2021-07-22 00:21:18', '2021-07-22 00:21:18'),
(2, 'User', 'user@itsolutionstuff.com', NULL, '$2y$10$uz5WMdyWvQ2AxbPA8bWcmOoK7jjjDKCAo9/6oIWO5vIrlQLmUzrgy', 0, NULL, '2021-07-22 00:21:18', '2021-07-22 00:21:18'),
(3, 'Panitia_Fairuz Firjatullah', 'fairuzfirjatullah3@gmail.com', NULL, '$2y$10$MbcFlWxbNM5ZHj77/38uuOcGEXgiF6wIPgX3xUpI.sPCvU4YlG6yW', NULL, NULL, '2021-07-23 17:20:14', '2021-07-23 17:20:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jurnals`
--
ALTER TABLE `jurnals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurnals`
--
ALTER TABLE `jurnals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seminars`
--
ALTER TABLE `seminars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
