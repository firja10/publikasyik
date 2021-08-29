-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Agu 2021 pada 08.06
-- Versi server: 10.3.31-MariaDB-log-cll-lve
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publika2_asyikass`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarfestivals`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `eksekutifs`
--

CREATE TABLE `eksekutifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi_kelas` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diskon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `eksekutifs`
--

INSERT INTO `eksekutifs` (`id`, `nama_kelas`, `gambar_kelas`, `deskripsi_kelas`, `harga_kelas`, `materi_kelas`, `user_id`, `created_at`, `updated_at`, `grup_kelas`, `link_grup_diskusi`, `tanggal_mulai`, `tanggal_akhir`, `mentor`, `sertifikat`, `diskon`) VALUES
(1, 'Paket A (Silver)', 'silver-medal.png', 'Mendapatkan pendampingan ( 1 on 1 mentoring)  selama maks 2 bulan dalam menyusun Bab 1, \r\n - Mendapatkan materi di kelas satu minggu sekali terkait penulisan latar belakang, dan isi dari bab 1 secara keseluruhan beserta tips and tricknya,\r\n - Diberikan wawasan dasar \r\nmengenai karya tulis ilmiah dan publikasi, \r\n - Dapat mengikuti seminar satu bulan sekali secara gratis.', '360000', 'Bagaimana Membuat Penyusunan BAB 1 yang baik dan benar', NULL, '2021-08-05 05:34:17', '2021-08-14 21:09:50', NULL, NULL, '2021-08-16', NULL, NULL, NULL, '325000'),
(2, 'Paket B ( Bronze 1 )', 'bronze-1.png', 'Mendapatkan pendampingan ( 1 on 1 mentoring)  selama maks 2 bulan dalam menyusun Bab 2. - Mendapatkan materi di kelas satu minggu sekali terkait penulisan landasan teori, dan isi dari bab 2 secara keseluruhan beserta tips and tricknya, - Diberikan wawasan dasar mengenai karya tulis ilmiah dan publikasi - Dapat mengikuti seminar satu bulan sekali secara gratis.', '300000', 'Mempelajari Mengenai Penyusunan BAB 2', NULL, '2021-08-05 06:05:49', '2021-08-14 21:10:15', NULL, NULL, '2021-08-16', NULL, NULL, NULL, '270000'),
(3, 'Paket C (Bronze 2)', 'bronze-2.png', 'Mendapatkan pendampingan ( 1 on 1 mentoring)  selama maks 2 bulan dalam menyusun Bab 3 - Mendapatkan materi di kelas satu minggu sekali  terkait penulisan metode penelitian, dan isi dari bab 3 secara keseluruhan beserta tips and tricknya, - Diberikan wawasan dasar mengenai karya tulis ilmiah dan publikasi, - Dapat mengikuti seminar satu bulan sekali secara gratis.', '300000', 'Mempelajari mengenai cara menyusun BAB 3 dengan baik dan benar', NULL, '2021-08-11 02:47:33', '2021-08-14 21:10:23', NULL, NULL, '2021-08-16', NULL, NULL, NULL, '270000'),
(4, 'Paket D (Gold)', 'gold.png', 'Mendapatkan pendampingan ( 1 on 1 mentoring)  selama maks 2 bulan dalam menyusun Bab 4, - Mendapatkan materi di kelas satu minggu sekali terkait penulisan pembahasan serta cara menggunakan aplikasi pengolah data, dan isi dari bab 4 secara keseluruhan beserta tips and tricknya, - Diberikan wawasan dasar \r\nmengenai karya tulis ilmiah dan publikasi, - Dapat mengikuti seminar satu bulan sekali secara gratis.', '500000', 'Bagaimana Menyusun Bab 4 dengan baik dan benar', NULL, '2021-08-12 23:24:38', '2021-08-14 21:10:34', NULL, NULL, '2021-08-16', NULL, NULL, NULL, '450000'),
(5, 'Paket Komplit (Platinum)', 'platinum.png', 'Mendapatkan pendampingan ( 1 on 1 mentoring)  selama maksimal 6 bulan dalam menyusun Bab 1 hingga Bab 4. - Mendapatkan materi di kelas yang diselenggarakan satu minggu sekali terkait penulisan penelitian secara keseluruhan dari latar belakang hingga kesimpulan. Beserta tips and tricknya, - Diberikan wawasan dasar \r\nmengenai karya tulis ilmiah dan publikasi, - Mendapatkan kesempatan untuk mengikuti berbagai seminar satu bulan sekali yang diadakan oleh publikasyik secara gratis, - Mendapatkan evaluasi dari mentor\r\ndan tips and trick sidang, - Mendapatkan apresiasi berupa gifts sederhana beserta sertifikat, - Mendapatkan harga promo untuk melakukan publikasi.', '1700000', 'Bagaimana Menyusun Bab 1 - 4 dengan baik dan benar', NULL, '2021-08-12 23:29:57', '2021-08-14 21:12:07', NULL, NULL, '2021-08-16', NULL, NULL, NULL, '1500000');

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
-- Struktur dari tabel `festivals`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnals`
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
-- Dumping data untuk tabel `jurnals`
--

INSERT INTO `jurnals` (`id`, `judul_jurnal`, `poster_jurnal`, `deskripsi_jurnal`, `link_jurnal`, `nomor_jurnal`, `tanggal_jurnal`, `created_at`, `updated_at`) VALUES
(1, 'Perengkahan Katalitik Metil Ester dari Minyak Jelantah Menggunakan Katalis Ni/ZSM5 yang Dihasilkan dengan Metode Ion Exchangee', NULL, 'Perengkahan Katalitik Metil Ester dari Minyak Jelantah Menggunakan Katalis Ni/ZSM5 yang Dihasilkan dengan Metode Ion Exchangee merupakan salah satu jurnal terbaik yang kami pilih', 'https://drive.google.com/file/d/1-W2KDDRe0co4ZQPuYyM32K_7WARBRb-v/view?usp=sharing', NULL, NULL, '2021-07-23 05:02:16', '2021-07-23 05:02:16'),
(2, 'METODE PEMBELAJARAN AKTIF TIPE GROUP TO GROUP EXCHANGE (GGE) UNTUK MENINGKATKAN HASIL BELAJAR SISWA PADA MATERI CAHAYA', NULL, 'METODE PEMBELAJARAN AKTIF TIPE GROUP TO GROUP EXCHANGE (GGE) UNTUK MENINGKATKAN HASIL BELAJAR SISWA PADA MATERI CAHAYA merupakan jurnal yang ditulis oleh Titin Anggraini dari Program Studi Teknik Kimia Fakultas Teknik Universitas Jambi', 'https://drive.google.com/file/d/1-W2KDDRe0co4ZQPuYyM32K_7WARBRb-v/view?usp=sharing', NULL, NULL, '2021-07-23 05:18:04', '2021-07-23 05:18:04'),
(3, 'PENINGKATAN KOMPETENSI PADA MATA PELAJARAN KEWIRAUSAHAAN DENGAN PENERAPAN PEMBELAJARAN KOOPERATIF MODEL THINK PAIR SHARE (TPS) DI SMK NEGERI 2 GODEAN', NULL, 'PENINGKATAN KOMPETENSI PADA MATA PELAJARAN KEWIRAUSAHAAN\r\nDENGAN PENERAPAN PEMBELAJARAN KOOPERATIF MODEL\r\nTHINK PAIR SHARE (TPS) DI SMK NEGERI 2 GODEAN adalah jurnal yang ditulis oleh Armavian Herda Murdhani', 'https://drive.google.com/file/d/1aMaV1dQbm1MYD6a5Zgk9Kt7r4M1ctgtC/view?usp=sharing', NULL, NULL, '2021-07-23 05:20:41', '2021-07-23 05:20:41'),
(4, 'PERAN KEBIJAKAN RASKIN TERHADAP ALOKASI PENGELUARAN RUMAH TANGGA PETANI DALAM UPAYA MENDUKUNG KETAHANAN PANGAN: Studi Kasus di Desa Gambarsari Kecamatan Kemangkon Kabupaten Purbalingga', NULL, 'PERAN KEBIJAKAN RASKIN TERHADAP ALOKASI PENGELUARAN RUMAH TANGGA PETANI DALAM UPAYA MENDUKUNG KETAHANAN PANGAN: Studi Kasus di Desa Gambarsari Kecamatan Kemangkon Kabupaten Purbalingga adalah jurnal yang ditulis oleh Noviar Wicaksono', 'https://www.academia.edu/3808084/PERAN_KEBIJAKAN_RASKIN_TERHADAP_ALOKASI_PENGELUARAN_RUMAHTANGGA_PETANI_DALAM_UPAYA_MENDUKUNG_KETAHANAN_PANGAN_Studi_Kasus_di_Desa_Gambarsari_Kecamatan_Kemangkon_Kabupaten_Purbalingga?auto=download', NULL, NULL, '2021-07-23 05:25:32', '2021-07-23 05:25:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materis`
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
-- Dumping data untuk tabel `materis`
--

INSERT INTO `materis` (`id`, `nama_materi`, `gambar_materi`, `penjelasan_materi`, `link_materi`, `referensi_materi`, `kelas_id`, `created_at`, `updated_at`) VALUES
(1, 'Pendahuluan', 'aerobotics-1.jpg', 'Pendahuluan adalah', 'https://mail.google.com/', 'https://mail.google.com/', 3, '2021-08-10 02:28:38', '2021-08-11 16:05:09'),
(9, 'Pendahuluantet', 'Jenis Buku Bacaan.PNG', 'eqweqweqe', 'qweqweqweqw', 'https://mail.google.com/', 3, '2021-08-11 16:10:51', '2021-08-11 16:10:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi_eksekutifs`
--

CREATE TABLE `materi_eksekutifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Struktur dari tabel `papers`
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
-- Dumping data untuk tabel `papers`
--

INSERT INTO `papers` (`id`, `judul_paper`, `poster_paper`, `deskripsi_paper`, `link_paper`, `tanggal_paper`, `tanggal_akhir_paper`, `created_at`, `updated_at`) VALUES
(1, 'Time To Deliver Clean Energy For The Nations', 'call-for-papers-1.jpeg', 'Time To Deliver Clean Energy For The Nations adalah acara yang diselenggarakan oleh MBTKE ConEx', 'http://bit.ly/Zoom1', '2014-06-04', '2014-06-06', '2021-07-23 02:51:17', '2021-07-23 02:51:17'),
(2, 'Berkala Ilmu Perpustakaan dan Informasi', 'call-for-papers-2.jpeg', 'Berkala Ilmu Perpustakaan dan Informasi adalah Call For Papers yang diadakan oleh Perpustakaan UGM', 'http://bit.ly/CVTekno25', '2021-06-01', '2021-06-30', '2021-07-23 03:32:23', '2021-07-23 07:40:04'),
(3, 'Security For Sovereignity', 'call-for-papers-3.jpeg', 'Security For Sovereignity adalah acara yang diselenggarakan oleh Universitas Padjadjaran', 'http://bit.ly/Zoom3', '2018-10-17', NULL, '2021-07-23 03:38:03', '2021-07-23 03:38:03'),
(5, 'ISITIA 2021', 'call-for-papers-4.jpg', 'ISITIA 2021 adalah acara yang diselenggarakan oleh ITS', 'http://bit.ly/Zoom4', '2021-07-21', '2021-07-22', '2021-07-23 03:41:30', '2021-07-23 03:41:30');

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
-- Struktur dari tabel `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(255) DEFAULT NULL,
  `harga_kelas` varchar(255) DEFAULT NULL,
  `deskripsi_kelas` longtext DEFAULT NULL,
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
  `diskon` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanans`
--

INSERT INTO `pemesanans` (`id`, `nama_kelas`, `harga_kelas`, `deskripsi_kelas`, `materi_kelas`, `grup_kelas`, `kelas_id`, `metode_pembayaran`, `status_pembayaran`, `user_id`, `updated_at`, `created_at`, `link_grup_diskusi`, `tanggal_mulai`, `tanggal_akhir`, `mentor`, `sertifikat`, `diskon`, `user_name`) VALUES
(19, 'Paket C (Bronze 2)', '300000', 'Mendapatkan pendampingan ( 1 on 1 mentoring)  selama maks 2 bulan dalam menyusun Bab 3 - Mendapatkan materi di kelas satu minggu sekali  terkait penulisan metode penelitian, dan isi dari bab 3 secara keseluruhan beserta tips and tricknya, - Diberikan wawasan dasar mengenai karya tulis ilmiah dan publikasi, - Dapat mengikuti seminar satu bulan sekali secara gratis.', 'Mempelajari mengenai cara menyusun BAB 3 dengan baik dan benar', NULL, 3, 'Mandiri', 1, 7, '2021-08-16 20:39:56', '2021-08-16 20:39:56', NULL, '2021-08-16', NULL, NULL, NULL, '270000', 'dummy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesans`
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
-- Dumping data untuk tabel `pesans`
--

INSERT INTO `pesans` (`id`, `nama`, `email`, `judul_pesan`, `isi_pesan`, `created_at`, `updated_at`) VALUES
(18, 'yellow', '5125964681@vtext.com', 'Silver', 'Shirt', '2021-08-17 09:03:06', '2021-08-17 09:03:06'),
(19, 'Wem:publikasyik.xyz Ich mag  www.audi.com', 'everodo6@mail.ru', 'Toggles18', NULL, '2021-08-21 00:52:14', '2021-08-21 00:52:14'),
(20, 'COM', 'kathysaraf@gmail.com', 'calculating', 'Field', '2021-08-21 06:45:47', '2021-08-21 06:45:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppts`
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
-- Struktur dari tabel `seminars`
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
-- Dumping data untuk tabel `seminars`
--

INSERT INTO `seminars` (`id`, `judul_seminar`, `poster_seminar`, `deskripsi_seminar`, `link_seminar`, `tanggal_seminar`, `created_at`, `updated_at`) VALUES
(2, 'Alternatif Pembiayaan Program Kerja Kemahasiswaan FISIP UNPAD', 'seminar-1.jpeg', 'Alternatif Pembiayaan Program Kerja Kemahasiswaan FISIP UNPAD merupakan webinar yang diadakan oleh FISIP UNPAD', 'http://bit.ly/CVTekno25', '2017-02-24', '2021-07-23 06:10:56', '2021-07-23 07:49:02'),
(3, 'Business Analytics : A New Source of Competitive Advantage', 'seminar-5.jpeg', 'Business Analytics : A New Source of Competitive Advantage adalah seminar yang diadakan oleh Manajemen Bisnis ITS', 'http://bit.ly/CVTekno25', '2018-10-25', '2021-07-23 06:13:55', '2021-07-23 06:13:55'),
(4, 'Era Baru Pendidikan Tinggi Pasca Penanganan Covid-19', 'seminar-3.jpeg', 'Era Baru Pendidikan Tinggi Pasca Penanganan Covid-19 adalah seminar yang diadakan oleh FDGBI UNPAD', 'http://bit.ly/streamingfdgbi2', '2021-07-26', '2021-07-23 06:15:14', '2021-07-23 06:15:14'),
(5, 'Seminar Nasional Kimia 2019', 'seminar-4.png', 'Seminar Nasional Kimia 2019 adalah seminar yang diadakan oleh Dosen Kimia ITS', 'http://bit.ly/streamingkimia', '2019-07-24', '2021-07-23 06:17:02', '2021-07-23 06:17:02'),
(7, 'EVOLVE 2021', 'hampers-2.jpg', 'EVOLVE 2021 merupakan seminar yang diselenggarakan oleh Departemen Teknik Elektro ITS', 'http://bit.ly/streamingEvolve', '2021-08-04', '2021-08-03 23:19:30', '2021-08-03 23:19:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submateris`
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
-- Dumping data untuk tabel `submateris`
--

INSERT INTO `submateris` (`id`, `nama_submateri`, `gambar_submateri`, `penjelasan_submateri`, `link_submateri`, `referensi_submateri`, `materi_id`, `created_at`, `updated_at`) VALUES
(1, 'Ultraman dyna', 'Logo ITS ROBOTICS.png', 'wqeqwqweqweqweqw', 'https://fairuzfirjatullah.github.io/', 'eqweqeqw', 1, '2021-08-10 04:58:15', '2021-08-10 05:17:26'),
(2, 'Ultraman TIga', 'alasan tidak suka baca.PNG', 'wewqeqwewqe', 'https://fairuzfirjatullah.github.io/', 'eqweqeqw', NULL, '2021-08-11 16:11:07', '2021-08-11 16:11:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@itsolutionstuff.com', NULL, '$2y$10$g52cQI6wKRU3vVqxzFM2IOPlKEEqa71sVCDjGKWIPkWsBhr4YKMq6', 1, NULL, '2021-07-22 00:21:18', '2021-07-22 00:21:18'),
(3, 'Panitia_Fairuz Firjatullah', 'fairuzfirjatullah3@gmail.com', NULL, '$2y$10$MbcFlWxbNM5ZHj77/38uuOcGEXgiF6wIPgX3xUpI.sPCvU4YlG6yW', NULL, NULL, '2021-07-23 17:20:14', '2021-07-23 17:20:14'),
(4, 'hasbi', 'fte07111840000121@gmail.com', NULL, '$2y$10$VOEsOQwBRgnSLPMyxuGKdu1OwB4ZQCyHgdlAG.86an9KyJlWQKCCi', NULL, NULL, '2021-08-14 03:53:52', '2021-08-14 03:53:52'),
(5, 'Kevin Reza Reynantha', 'kevinreynantha@gmail.com', NULL, '$2y$10$/rHUWK9SczRZIAH46Y10JOE.AFig6ubAtTPSCisFDCzCPBN9I2WUO', 1, NULL, '2021-08-14 09:33:30', '2021-08-16 18:55:39'),
(6, 'DITA AMALIA', 'dita.datahp@gmail.com', NULL, '$2y$10$0nhXS9il/T1RUI1SURgeku1..LQmSz/NFQVw43MoesuwkljbtBBo2', 1, NULL, '2021-08-14 23:18:28', '2021-08-16 18:55:38'),
(7, 'dummy', 'leceb46630@alltekia.com', NULL, '$2y$10$/VFsBDCtzIJfP14a1CwtpOXE.6F3NL4eU8ua.7V8TRjNS3t0rrMr.', NULL, NULL, '2021-08-16 19:50:25', '2021-08-16 19:50:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarfestivals`
--
ALTER TABLE `daftarfestivals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftarfestivals_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `eksekutifs`
--
ALTER TABLE `eksekutifs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eksekutifs_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `festivals`
--
ALTER TABLE `festivals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `festivals_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `jurnals`
--
ALTER TABLE `jurnals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materis`
--
ALTER TABLE `materis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `materis_kelas_id_foreign` (`kelas_id`);

--
-- Indeks untuk tabel `materi_eksekutifs`
--
ALTER TABLE `materi_eksekutifs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanans_user_id_foreign` (`user_id`),
  ADD KEY `pemesanans_kelas_id_foreign` (`kelas_id`);

--
-- Indeks untuk tabel `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppts`
--
ALTER TABLE `ppts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `submateris`
--
ALTER TABLE `submateris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submateris_materi_id_foreign` (`materi_id`);

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
-- AUTO_INCREMENT untuk tabel `daftarfestivals`
--
ALTER TABLE `daftarfestivals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `eksekutifs`
--
ALTER TABLE `eksekutifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `festivals`
--
ALTER TABLE `festivals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jurnals`
--
ALTER TABLE `jurnals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `materis`
--
ALTER TABLE `materis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `materi_eksekutifs`
--
ALTER TABLE `materi_eksekutifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `papers`
--
ALTER TABLE `papers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `ppts`
--
ALTER TABLE `ppts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `seminars`
--
ALTER TABLE `seminars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `submateris`
--
ALTER TABLE `submateris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftarfestivals`
--
ALTER TABLE `daftarfestivals`
  ADD CONSTRAINT `daftarfestivals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `eksekutifs`
--
ALTER TABLE `eksekutifs`
  ADD CONSTRAINT `eksekutifs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `festivals`
--
ALTER TABLE `festivals`
  ADD CONSTRAINT `festivals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `materis`
--
ALTER TABLE `materis`
  ADD CONSTRAINT `materis_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `eksekutifs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD CONSTRAINT `pemesanans_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `eksekutifs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `submateris`
--
ALTER TABLE `submateris`
  ADD CONSTRAINT `submateris_materi_id_foreign` FOREIGN KEY (`materi_id`) REFERENCES `submateris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
