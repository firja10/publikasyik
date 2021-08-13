-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 06:17 AM
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
-- Table structure for table `daftarfestivals`
--

CREATE TABLE `daftarfestivals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_festival` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_festival` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_festival` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_festival` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materi_festival` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_festival` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_berakhir` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pembayaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftarfestivals`
--

INSERT INTO `daftarfestivals` (`id`, `nama_festival`, `gambar_festival`, `deskripsi_festival`, `harga_festival`, `materi_festival`, `link_festival`, `tanggal_mulai`, `tanggal_berakhir`, `created_at`, `updated_at`, `user_id`, `user_name`, `metode_pembayaran`, `status_pembayaran`) VALUES
(1, 'FestivL 2', NULL, 'werewrwerewrwerewrew', 'Free', '2131231', NULL, '2021-08-11', '2021-08-27', '2021-08-12 08:45:09', '2021-08-12 08:45:09', 3, NULL, NULL, NULL),
(4, 'FestivL 2', 'call-for-papers.jpeg', 'werewrwerewrwerewrew', 'Free', '2131231', NULL, '2021-08-11', '2021-08-27', '2021-08-12 08:56:02', '2021-08-12 08:56:02', 3, NULL, NULL, NULL),
(15, 'FestivL 3', '3.jpg', '234234242', '23400', '4234242', 'intip.in/', '2021-08-20', '2021-08-27', '2021-08-12 19:40:21', '2021-08-12 20:02:55', 3, 'Panitia_Fairuz Firjatullah', 'BNI', 2);

-- --------------------------------------------------------

--
-- Table structure for table `eksekutifs`
--

CREATE TABLE `eksekutifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materi_kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `grup_kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_grup_diskusi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `mentor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eksekutifs`
--

INSERT INTO `eksekutifs` (`id`, `nama_kelas`, `gambar_kelas`, `deskripsi_kelas`, `harga_kelas`, `materi_kelas`, `user_id`, `created_at`, `updated_at`, `grup_kelas`, `link_grup_diskusi`, `tanggal_mulai`, `tanggal_akhir`, `mentor`, `sertifikat`) VALUES
(1, 'Kelas BAB 1', 'Screenshot (6155).png', 'Kelas BAB 1 merupakan kelas berupa materi yang berisikan mengenai bagaimana caranya membuat suatu Pendahuluan dan Latar Belakang yang baik.', '120000', 'Bagaimana Membuat Pendahuluan dan Latar Belakang yang baik', NULL, '2021-08-05 05:34:17', '2021-08-05 05:34:17', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Kelas BAB 2', 'Screenshot (6156).png', 'Kelas BAB 2 merupakan kelas berupa materi mengenai Tinjauan Pustaka', '130000', 'Tinjauan Pustaka', NULL, '2021-08-05 06:05:49', '2021-08-05 06:05:49', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Kelas BAB 3', 'diagram tingkat minat baca.PNG', 'Kelas BAB 3 merupakan kelas tentang Pembahasan sebuah karya tulis', '150000', 'Pembahasan', NULL, '2021-08-11 02:47:33', '2021-08-11 02:47:33', NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Table structure for table `festivals`
--

CREATE TABLE `festivals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_festival` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_festival` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_festival` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_festival` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materi_festival` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link_festival` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_berakhir` date DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `festivals`
--

INSERT INTO `festivals` (`id`, `nama_festival`, `gambar_festival`, `deskripsi_festival`, `harga_festival`, `materi_festival`, `created_at`, `updated_at`, `link_festival`, `tanggal_mulai`, `tanggal_berakhir`, `user_id`) VALUES
(2, 'FestivL 2', 'Design class and digital.jpeg', 'werewrwerewrwerewrew', 'Free', '2131231', '2021-08-03 20:07:37', '2021-08-12 08:57:25', 'https://intip.in', '2021-08-11', '2021-08-27', NULL),
(3, 'FestivL 2', 'call-for-papers.jpeg', 'werewrwerewrwerewrew', 'Free', '2131231', '2021-08-12 05:25:27', '2021-08-12 07:59:53', NULL, '2021-08-11', '2021-08-27', NULL),
(4, 'FestivL 3', '3.jpg', '234234242', '23400', '4234242', '2021-08-12 19:07:15', '2021-08-12 19:07:15', 'intip.in/', '2021-08-20', '2021-08-27', NULL);

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
-- Table structure for table `materis`
--

CREATE TABLE `materis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_materi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_materi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penjelasan_materi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_materi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referensi_materi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materis`
--

INSERT INTO `materis` (`id`, `nama_materi`, `gambar_materi`, `penjelasan_materi`, `link_materi`, `referensi_materi`, `kelas_id`, `created_at`, `updated_at`) VALUES
(1, 'Pendahuluan', 'aerobotics-1.jpg', 'Pendahuluan adalah', 'https://mail.google.com/', 'https://mail.google.com/', 3, '2021-08-10 02:28:38', '2021-08-11 16:05:09'),
(9, 'Pendahuluantet', 'Jenis Buku Bacaan.PNG', 'eqweqweqe', 'qweqweqweqw', 'https://mail.google.com/', 3, '2021-08-11 16:10:51', '2021-08-11 16:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `materi_eksekutifs`
--

CREATE TABLE `materi_eksekutifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2021_07_22_060018_create_jurnals_table', 1),
(7, '2021_07_30_110552_create_festivals_table', 2),
(8, '2021_07_30_110744_create_eksekutifs_table', 2),
(9, '2021_07_30_110836_create_ppts_table', 2),
(10, '2021_07_30_114901_create_materi_eksekutifs_table', 2),
(11, '2021_08_09_004648_add_fk_to_eksekutifs', 3),
(12, '2021_08_09_010436_create_pemesanans_table', 4),
(13, '2021_08_09_145146_add_fk_to_pemesanans', 5),
(14, '2021_08_09_150255_create_pemesanans_table', 6),
(15, '2021_08_09_150436_add_fk_to_pemesanans', 7),
(16, '2021_08_09_160227_add_grup_to_eksekutifs', 8),
(17, '2021_08_09_235122_add_fk_to_pemesanans', 9),
(18, '2021_08_10_001620_add_fk_klas_to_pemesanans', 10),
(19, '2021_08_10_022722_add_status_bayar_to_users', 11),
(20, '2021_08_10_073238_create_materis_table', 11),
(21, '2021_08_10_083228_create_submateris_table', 11),
(22, '2021_08_10_085232_add_fk_to_submateris', 12),
(23, '2021_08_10_091158_add_fk_to_materis', 13),
(24, '2021_08_11_122820_add_bagian_to_pemesanans', 14),
(25, '2021_08_11_234639_add_bagian_to_eksekutifs', 14),
(26, '2021_08_12_111048_create_pesans_table', 15),
(27, '2021_08_12_133355_add_bagian_to_festivals', 16),
(28, '2021_08_12_133824_create_daftarfestivals_table', 17),
(29, '2021_08_12_134148_add_fk_to_daftarfestivals', 17),
(30, '2021_08_12_161205_add_name_to_daftarfestivals', 18),
(31, '2021_08_12_161319_add_name_to_pemesanans', 18),
(32, '2021_08_12_170424_add_status_to_daftarfestivals', 19);

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
-- Table structure for table `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(255) DEFAULT NULL,
  `harga_kelas` varchar(255) DEFAULT NULL,
  `deskripsi_kelas` varchar(255) DEFAULT NULL,
  `materi_kelas` varchar(255) DEFAULT NULL,
  `grup_kelas` varchar(255) DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `metode_pembayaran` varchar(255) DEFAULT NULL,
  `status_pembayaran` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `link_grup_diskusi` longtext DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_akhir` date DEFAULT NULL,
  `mentor` varchar(255) DEFAULT NULL,
  `sertifikat` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanans`
--

INSERT INTO `pemesanans` (`id`, `nama_kelas`, `harga_kelas`, `deskripsi_kelas`, `materi_kelas`, `grup_kelas`, `kelas_id`, `metode_pembayaran`, `status_pembayaran`, `user_id`, `updated_at`, `created_at`, `link_grup_diskusi`, `tanggal_mulai`, `tanggal_akhir`, `mentor`, `sertifikat`, `user_name`) VALUES
(6, 'Kelas BAB 2', '130000', 'Kelas BAB 2 merupakan kelas berupa materi mengenai Tinjauan Pustaka', 'Tinjauan Pustaka', NULL, 2, 'Mandiri', 2, 3, '2021-08-11 05:48:01', '2021-08-11 05:46:13', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Kelas BAB 2', '130000', 'Kelas BAB 2 merupakan kelas berupa materi mengenai Tinjauan Pustaka', 'Tinjauan Pustaka', NULL, NULL, 'Mandiri', 1, 3, '2021-08-12 09:20:32', '2021-08-12 09:20:32', NULL, NULL, NULL, NULL, NULL, 'Panitia_Fairuz Firjatullah');

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_pesan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_pesan` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesans`
--

INSERT INTO `pesans` (`id`, `nama`, `email`, `judul_pesan`, `isi_pesan`, `created_at`, `updated_at`) VALUES
(1, 'Fairuz Firjatullah', 'fairuzfirjatullah3@gmail.com', 'Lagi apa ?', 'uvuvewewqwewqqw', '2021-08-12 04:34:28', '2021-08-12 04:34:28'),
(15, 'Fairuz Firjatullah', 'fairuzfirjatullah3@gmail.com', 'Lagi apa ?', 'haloewewqeqwqeq', '2021-08-12 04:50:13', '2021-08-12 04:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `ppts`
--

CREATE TABLE `ppts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ppt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_ppt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_ppt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_ppt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materi_ppt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(5, 'Seminar Nasional Kimia 2019', 'seminar-4.png', 'Seminar Nasional Kimia 2019 adalah seminar yang diadakan oleh Dosen Kimia ITS', 'http://bit.ly/streamingkimia', '2019-07-24', '2021-07-23 06:17:02', '2021-07-23 06:17:02'),
(7, 'EVOLVE 2021', 'hampers-2.jpg', 'EVOLVE 2021 merupakan seminar yang diselenggarakan oleh Departemen Teknik Elektro ITS', 'http://bit.ly/streamingEvolve', '2021-08-04', '2021-08-03 23:19:30', '2021-08-03 23:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `submateris`
--

CREATE TABLE `submateris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_submateri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_submateri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penjelasan_submateri` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_submateri` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referensi_submateri` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `materi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submateris`
--

INSERT INTO `submateris` (`id`, `nama_submateri`, `gambar_submateri`, `penjelasan_submateri`, `link_submateri`, `referensi_submateri`, `materi_id`, `created_at`, `updated_at`) VALUES
(1, 'Ultraman dyna', 'Logo ITS ROBOTICS.png', 'wqeqwqweqweqweqw', 'https://fairuzfirjatullah.github.io/', 'eqweqeqw', 1, '2021-08-10 04:58:15', '2021-08-10 05:17:26'),
(2, 'Ultraman TIga', 'alasan tidak suka baca.PNG', 'wewqeqwewqe', 'https://fairuzfirjatullah.github.io/', 'eqweqeqw', NULL, '2021-08-11 16:11:07', '2021-08-11 16:11:07');

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
(3, 'Panitia_Fairuz Firjatullah', 'fairuzfirjatullah3@gmail.com', NULL, '$2y$10$MbcFlWxbNM5ZHj77/38uuOcGEXgiF6wIPgX3xUpI.sPCvU4YlG6yW', NULL, NULL, '2021-07-23 17:20:14', '2021-07-23 17:20:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarfestivals`
--
ALTER TABLE `daftarfestivals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftarfestivals_user_id_foreign` (`user_id`);

--
-- Indexes for table `eksekutifs`
--
ALTER TABLE `eksekutifs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eksekutifs_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `festivals`
--
ALTER TABLE `festivals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `festivals_user_id_foreign` (`user_id`);

--
-- Indexes for table `jurnals`
--
ALTER TABLE `jurnals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materis`
--
ALTER TABLE `materis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materis_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `materi_eksekutifs`
--
ALTER TABLE `materi_eksekutifs`
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
-- Indexes for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanans_user_id_foreign` (`user_id`),
  ADD KEY `pemesanans_kelas_id_foreign` (`kelas_id`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppts`
--
ALTER TABLE `ppts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submateris`
--
ALTER TABLE `submateris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submateris_materi_id_foreign` (`materi_id`);

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
-- AUTO_INCREMENT for table `daftarfestivals`
--
ALTER TABLE `daftarfestivals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `eksekutifs`
--
ALTER TABLE `eksekutifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `festivals`
--
ALTER TABLE `festivals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurnals`
--
ALTER TABLE `jurnals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `materis`
--
ALTER TABLE `materis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `materi_eksekutifs`
--
ALTER TABLE `materi_eksekutifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ppts`
--
ALTER TABLE `ppts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seminars`
--
ALTER TABLE `seminars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submateris`
--
ALTER TABLE `submateris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftarfestivals`
--
ALTER TABLE `daftarfestivals`
  ADD CONSTRAINT `daftarfestivals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `eksekutifs`
--
ALTER TABLE `eksekutifs`
  ADD CONSTRAINT `eksekutifs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `festivals`
--
ALTER TABLE `festivals`
  ADD CONSTRAINT `festivals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materis`
--
ALTER TABLE `materis`
  ADD CONSTRAINT `materis_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `eksekutifs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD CONSTRAINT `pemesanans_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `eksekutifs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `submateris`
--
ALTER TABLE `submateris`
  ADD CONSTRAINT `submateris_materi_id_foreign` FOREIGN KEY (`materi_id`) REFERENCES `submateris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
