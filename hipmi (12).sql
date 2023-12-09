-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Sep 2022 pada 00.48
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hipmi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'updated', 210, 'App\\User', 210, 'App\\User', '[]', '2022-09-14 09:39:01', '2022-09-14 09:39:01'),
(2, 'logout', 'Logout success', NULL, NULL, 210, 'App\\User', '{\"url\":\"http:\\/\\/com.hipmi\\/logout\",\"ip\":\"127.0.0.1\"}', '2022-09-14 09:39:01', '2022-09-14 09:39:01'),
(3, 'login', 'Login success', NULL, NULL, 210, 'App\\User', '{\"url\":\"http:\\/\\/com.hipmi\\/login\",\"ip\":\"127.0.0.1\"}', '2022-09-14 09:43:25', '2022-09-14 09:43:25'),
(4, 'login', 'Login success', NULL, NULL, 210, 'App\\User', '{\"url\":\"http:\\/\\/com.hipmi\\/login\",\"ip\":\"127.0.0.1\"}', '2022-09-15 06:44:25', '2022-09-15 06:44:25'),
(5, 'default', 'updated', 1, 'App\\User', 210, 'App\\User', '[]', '2022-09-15 06:52:14', '2022-09-15 06:52:14'),
(6, 'login', 'Login success', NULL, NULL, 1, 'App\\User', '{\"url\":\"http:\\/\\/com.hipmi\\/login\",\"ip\":\"127.0.0.1\"}', '2022-09-15 06:52:31', '2022-09-15 06:52:31'),
(7, 'logout', 'Logout success', NULL, NULL, 1, 'App\\User', '{\"url\":\"http:\\/\\/com.hipmi\\/logout\",\"ip\":\"127.0.0.1\"}', '2022-09-15 06:52:34', '2022-09-15 06:52:34'),
(8, 'default', 'updated', 210, 'App\\User', 210, 'App\\User', '[]', '2022-09-15 07:02:45', '2022-09-15 07:02:45'),
(9, 'default', 'updated', 210, 'App\\User', 210, 'App\\User', '[]', '2022-09-15 07:02:55', '2022-09-15 07:02:55'),
(10, 'default', 'updated', 210, 'App\\User', 210, 'App\\User', '[]', '2022-09-15 07:06:13', '2022-09-15 07:06:13'),
(11, 'default', 'updated', 210, 'App\\User', 210, 'App\\User', '[]', '2022-09-15 07:06:47', '2022-09-15 07:06:47'),
(12, 'login', 'Login success', NULL, NULL, 210, 'App\\User', '{\"url\":\"http:\\/\\/com.hipmi\\/login\",\"ip\":\"127.0.0.1\"}', '2022-09-15 14:08:57', '2022-09-15 14:08:57'),
(13, 'login', 'Login success', NULL, NULL, 210, 'App\\User', '{\"url\":\"http:\\/\\/com.hipmi\\/login\",\"ip\":\"127.0.0.1\"}', '2022-09-16 11:53:48', '2022-09-16 11:53:48'),
(14, 'login', 'Login success', NULL, NULL, 210, 'App\\User', '{\"url\":\"http:\\/\\/com.hipmi\",\"ip\":\"127.0.0.1\"}', '2022-09-19 06:49:38', '2022-09-19 06:49:38'),
(15, 'default', 'updated', 210, 'App\\User', 210, 'App\\User', '[]', '2022-09-19 06:49:43', '2022-09-19 06:49:43'),
(16, 'logout', 'Logout success', NULL, NULL, 210, 'App\\User', '{\"url\":\"http:\\/\\/com.hipmi\\/logout\",\"ip\":\"127.0.0.1\"}', '2022-09-19 06:49:43', '2022-09-19 06:49:43'),
(17, 'login', 'Login success', NULL, NULL, 210, 'App\\User', '{\"url\":\"http:\\/\\/com.hipmi\\/login\",\"ip\":\"127.0.0.1\"}', '2022-09-19 06:52:20', '2022-09-19 06:52:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banom`
--

CREATE TABLE `banom` (
  `id` int(11) NOT NULL,
  `logo` varchar(225) DEFAULT NULL,
  `judul` varchar(225) DEFAULT NULL,
  `deskripsi_pendek` varchar(300) DEFAULT NULL,
  `deskripsi` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banom`
--

INSERT INTO `banom` (`id`, `logo`, `judul`, `deskripsi_pendek`, `deskripsi`, `created_at`, `updated_at`) VALUES
(13, 'banom-1663228723.jpg', 'Law and Tax23', 'Badan Otonom Womenpreneur merupakan wadah untuk para pengusaha Hipmi Wanita Bandung dengan bertujuan Menggali, Membangun dan Meningkatkan  potensi diri bagi para pengusaha Hipmi wanita Bandung.23', '<p>Badan Otonom Womenpreneur merupakan wadah untuk para pengusaha Hipmi Wanita Bandung dengan bertujuan Menggali, Membangun dan Meningkatkan potensi diri bagi para pengusaha Hipmi wanita <strong>Bandung.23</strong></p>', '2022-08-17 15:00:54', '2022-09-15 07:59:53'),
(14, 'banom-1660748505.png', 'HIPMI PT (Perguruan Tinggi)', 'Badan Otonom Womenpreneur merupakan wadah untuk para pengusaha Hipmi Wanita Bandung dengan bertujuan Menggali, Membangun dan Meningkatkan  potensi diri bagi para pengusaha Hipmi wanita Bandung.', '<p>Badan Otonom Womenpreneur merupakan wadah untuk para pengusaha Hipmi Wanita Bandung dengan bertujuan Menggali, Membangun dan Meningkatkan potensi diri bagi para pengusaha Hipmi wanita Bandung. <strong>Badan Otonom Womenpreneur merupakan wadah untuk para pengusaha Hipmi Wanita Bandung dengan bertujuan Menggali, Membangun dan Meningkatkan potensi diri bagi para pengusaha Hipmi wanita Bandung.&nbsp;</strong></p>', '2022-08-17 15:01:45', '2022-08-17 15:01:45'),
(15, 'banom-1663052812.png', 'q', 'q', '<p>qq</p>', '2022-09-13 07:06:52', '2022-09-13 07:06:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `nama_brand` varchar(225) DEFAULT NULL,
  `deskripsi_brand` longtext,
  `logo_brand` varchar(225) DEFAULT NULL,
  `katalog_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `brand`
--

INSERT INTO `brand` (`id`, `nama_brand`, `deskripsi_brand`, `logo_brand`, `katalog_id`, `created_at`, `updated_at`) VALUES
(1, 'Ditz farm', 'Merupakan Brand yang bergerak di bidang', 'HIPMI-Bandung(Himpunan-Pengusaha-Muda-Indonesia-Bandung)-Brand-1663145387.png', 1, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(2, 'FISH ID', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 2, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(3, 'Fresh Farm', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 3, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(4, 'B\'COF Bandung, Aspasia Coffee, Malaya Kopi Indonesia', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 4, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(5, 'M-BEEF INDONESIA', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 5, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(6, 'ayam potong', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 6, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(7, 'Dillco Chocolate', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 7, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(8, 'Sixplus Agrotech', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 8, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(9, 'Hey Farm', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 9, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(10, 'www.sikok.co.id', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 10, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(11, NULL, 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 11, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(12, 'LEMON', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 12, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(13, 'SP', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 13, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(14, 'Inovindo', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 14, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(15, 'lokapoin', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(16, 'Funder Asia', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 16, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(17, 'CYBERLABS', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(18, 'Titik Terang', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 18, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(19, 'LCS', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 19, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(20, 'RID', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 20, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(21, 'Mores Strategics', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 21, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(22, 'Automate All', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 22, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(23, 'Jasa konsultasi IT & Training Project/Product Management', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(24, 'Evermos', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 24, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(25, 'General Contractor,Supplier,Trade', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 25, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(26, 'nn', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 26, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(27, 'Surya Gemilang', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(28, 'Koperasi', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 28, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(29, NULL, 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 29, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(30, 'PLR', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 30, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(31, 'tokobugar', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 31, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(32, NULL, 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(33, 'BIGBEN POWER SPORT', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 33, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(34, 'Roar_Clothier', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 34, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(35, 'Servvo', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 35, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(36, 'Cleanforyou Express Laundry', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 36, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(37, 'LiberBreed(Fasion) ,Goodnews (Media Kreatif), Mattress Tablora (Manufaktur Kasur)', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(38, 'ALKOM FROM CANADA', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 38, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(39, 'Berkreatif Studio', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 39, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(40, 'binajaya', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 40, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(41, 'JCD Production', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 41, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(42, 'Vecha event organizer', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 42, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(43, 'Kojo.Cloth', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 43, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(44, 'Raas Solusi Indonesia', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 44, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(45, 'Pandawa', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 45, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(46, 'Beras FJ', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 46, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(47, 'Rizki Anugrah Perkasa; Airsquare', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 47, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(48, 'Kersa Construction', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 48, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(49, 'Nata Bumi Desain And Build', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 49, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(50, 'Garuda Teknik', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 50, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(51, 'Membangun Untuk Kemanusiaan', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 51, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(52, 'SFU Construction', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 52, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(53, 'WORKTOCREATE Interior Workshop', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 53, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(54, 'JLS Geopraktika', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 54, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(55, 'Konsep Rumah Indoneisa', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 55, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(56, 'PT. Almahyra (SLF)', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 56, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(57, 'Duxay Build and Design', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 57, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(58, 'Berdaya', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 58, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(59, 'Pikirmikir Design Studio | IG : @pikirmikir', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 59, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(60, 'arkides', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 60, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(61, 'Esbi', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 61, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(62, 'Z Make Clothes', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 62, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(63, 'ALTAIRYA KARYA', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 63, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(64, '-', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 64, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(65, 'MGM', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 65, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(66, 'sinar galuh pakuan', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 66, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(67, 'MAB (Mitra Abadi Barokah)', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 67, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(68, 'Jamas', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 68, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(69, 'Trisapta Group', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 69, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(70, 'Textile industri & Jaring', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 70, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(71, 'Artbrandcy.co.id / engineer.co.id / djapa hotel laundry / Parahyangan Village', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 71, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(72, 'BSJ', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 72, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(73, 'PT. Sinar Guna Makmur', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 73, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(74, 'Begacron', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 74, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(75, 'Sebelas binatu, Next in', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 75, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(76, 'Aequalis Consultant', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 76, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(77, 'Amanah Group', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 77, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(78, 'CAB', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 78, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(79, 'Bandung Jaya Hose', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 79, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(80, 'ejg', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 80, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(81, 'Alpha rules brand', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 81, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(82, 'INSAN NUSANTARA', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 82, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(83, 'Infini', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 83, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(84, 'lmjartandcraft', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 84, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(85, 'CreMe Patisserie', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 85, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(86, 'Swichaway Sandwich', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 86, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(87, 'Kedai Mam & Paw', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 87, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(88, 'Seafood', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 88, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(89, 'Bau bawang', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 89, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(90, 'BABAKARAN & GEGEPREKAN', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 90, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(91, 'Aralenyotnyot , colourmusikentertainment', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 91, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(92, 'Baso PuSiMa (Putra Sido Mampir)', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 92, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(93, 'Tahu hamil', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 93, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(94, 'Momis Bakery', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 94, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(95, 'Dapur Kuweh', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 95, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(96, 'Lantai 3 coffee & pairing', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 96, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(97, 'Restoran Ayam Sawce', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 97, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(98, 'Vitamin Sea', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 98, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(99, 'Konnichiwa (Japanese Food and More)', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 99, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(100, 'Panache Sweets dan Panache Kitchen', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 100, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(101, 'SAPARASA', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 101, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(102, 'Bite Toast', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 102, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(103, 'Ganesha Cafe', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 103, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(104, 'Mare Cafe', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 104, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(105, 'Kayi Food', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 105, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(106, 'Rajo Pempek', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 106, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(107, 'ANGKRINGAN SERBU', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 107, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(108, 'Mouthfeel Coffee', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 108, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(109, 'S&F Law Office', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 109, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(110, 'artos.id', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 110, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(111, 'Viersa Working Space', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 111, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(112, 'Mini Mall Hijab || Hallo Hijab || Pusat Hijab Murah Bandung || Hijab-In', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 112, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(113, 'BARGO Enterprises', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 113, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(114, 'Mimaki racing', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 114, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(115, 'TWINFIT', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 115, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(116, 'Kawi Mekar', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 116, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(117, 'HIJRAHMEN', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 117, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(118, 'Muqtencustomleather & broers leather', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 118, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(119, 'JelitaClo', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 119, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(120, 'Padjadjaran production', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 120, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(121, 'Whoo Outfitters', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 121, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(122, 'Wils Bali', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 122, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(123, 'AFaza', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 123, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(124, 'Hoya Fields', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 124, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(125, 'eicktex', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 125, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(126, 'Pala nusantara', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 126, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(127, 'Kebaya, gamis', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 127, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(128, 'Janma', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 128, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(129, 'Segilima', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 129, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(130, 'zaemerci', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 130, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(131, 'RADIUZ', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 131, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(132, 'IKS Surfactant', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 132, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(133, 'Villain Garment', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 133, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(134, 'difroseries.id & difrostreetwear', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 134, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(135, 'Vordavo', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 135, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(136, 'WETAN', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 136, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(137, 'Seander', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 137, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(138, 'Delapan Padi Resto. Dan SNCO. SOKB', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 138, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(139, 'ZD', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 139, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(140, 'Raudha Wear dan Luna Residence', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 140, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(141, 'Mohaki Indonesia', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 141, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(142, 'Karta Prabu Jaya', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 142, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(143, 'Kojo.Cloth', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 143, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(144, 'Naylatuhijab', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 144, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(145, 'Imah Batik Bandung', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 145, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(146, '5.11 tactical Bandung', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 146, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(147, 'One Stop Polos, Vision Carwash, Ayank Jeans', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 147, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(148, 'Chesta Collection', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 148, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(149, 'Reyl Man Footwear & Kenzios Shoes', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 149, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(150, 'Aracraft', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 150, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(151, 'Celosia Etnik', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 151, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(152, 'Suwarnayasa Land', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 152, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(153, 'rajasaland', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 153, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(154, 'Berdikari Residence', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 154, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(155, 'Property', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 155, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(156, 'Riviera', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 156, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(157, 'Dawuan asri', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 157, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(158, 'SADAJIWALAND', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 158, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(159, 'GM Property', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 159, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(160, 'Prolov', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 160, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(161, 'Arovala', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 161, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(162, 'Radaryaland', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 162, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(163, 'Indovationland', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 163, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(164, 'Bandung Utara Realty', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 164, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(165, 'radaryaland', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 165, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(166, 'Developer Property', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 166, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(167, 'De Ruang', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 167, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(168, 'Raudha Wear dan Luna Residence', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 168, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(169, 'Cluster De coffee', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 169, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(170, 'Bandung TV', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 170, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(171, 'CAFE ADS MEDIA', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 171, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(172, 'CV. Persona', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 172, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(173, 'Pendidikan dan Literasi', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 173, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(174, 'Abinarada', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 174, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(175, 'Mind-Set Creative Project', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 175, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(176, 'Aequalis Consultant', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 176, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(177, 'Wedding Photography', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 177, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(178, 'Vecha event organizer', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 178, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(179, 'Arjuna Medika', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 179, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(180, 'Klinik dr susan', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 180, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(181, 'OCLife & Holygrail.Shoescare', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 181, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(182, 'Chaneva beauty', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 182, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(183, 'MD Clinic', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 183, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(184, 'Stacia Makeup Artistry, Stacia Additional Lashes', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 184, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(185, 'Optimal service and good enviro', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 185, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(186, 'Manolo', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 186, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(187, 'SUPRA', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 187, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(188, 'MKE', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 188, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(189, 'Sekolah Mutiara Bunda', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 189, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(190, 'Ngampus Bareng', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 190, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(191, 'dirgantara training center', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 191, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(192, 'Collaboratives', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 192, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(193, 'Indonesia flourish', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 193, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(194, 'new las vegas ktv', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 194, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(195, 'Cihampelas Hotel', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 195, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(196, 'Prudential', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 196, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(197, 'SyarQ', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 197, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(198, 'Yourfinplan Consulting', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 198, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(199, 'FM FACTORY', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 199, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(200, 'Arsanjaya', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 200, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(201, 'Aftech', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 201, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(202, 'FIN KOMODO', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 202, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(203, 'BIMA', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 203, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(204, 'ELVINDO', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 204, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(205, 'Mavens Studio', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 205, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(206, 'EnergyLab', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 206, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(207, 'CO-LAB.ID', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 207, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(208, 'SLUG', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 208, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(209, 'Startupco', 'Merupakan Brand yang bergerak di bidang ', 'hipmi.jpg', 209, '2021-12-31 17:00:00', '2021-12-31 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_konten`
--

CREATE TABLE `cms_konten` (
  `id` int(11) NOT NULL,
  `halaman` varchar(225) DEFAULT NULL,
  `logo1` longtext,
  `logo2` longtext,
  `logo3` longtext,
  `k1` longtext,
  `k2` longtext,
  `k3` longtext,
  `k4` longtext,
  `k5` longtext,
  `k6` longtext,
  `k7` longtext,
  `k8` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cms_konten`
--

INSERT INTO `cms_konten` (`id`, `halaman`, `logo1`, `logo2`, `logo3`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `created_at`, `updated_at`) VALUES
(1, 'sejarah', 'HIPMI-Bandung-Sejarah-1662969054.png', NULL, NULL, '<p><strong>(HIPMI) didirikan pada 10 Juni 1972. Pendirian organisasi ini dilandasi semangat untuk menumbuhkan wirausaha di kalangan pemuda, karena pada saat itu tidak banyak kaum muda yang bercita-cita menjadi pengusaha.</strong><br><br><strong>HIPMI Kota Bandung sebagai organisasi pengusaha muda terbesar di Kota Bandung yang senantiasa melahirkan inovasi dan kreasi melalui unit usaha para anggotanya ingin memulai suatu pergerakan untuk mendukung implementasi Semangat Pengusaha Muda dalam menghadapi pandemi in dengan mencanangkan suatu semangat dan kiat-kiat membuat inovasi terdepan dalam mempertahankan bisnisnya. Sebuah visi dimana Bandung meniadi garda terdepan perkembangan ekonomi kreatif Indonesia walaupun adanya pandemi.</strong></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(2, 'vmm', NULL, NULL, NULL, '<p>Menjadi komunitas kewirausahaan yang unggul, berkarakter dan berkelas dunia dengan Spiritual, Kreatifitas, dan Intelektualitas (SKI) untuk terciptanya kemakmuran seluruh rakyat Indonesia Raya serta menjadi representatasi pengusaha muda intelektual Indonesia di tatanan Nasional dan Internasional.</p>', '<ol><li>Membentuk sistem keorganisasian dengan Memperkokoh asas nilai Integritas, Passion, Kreatifitas, Rendah Hati, dan Profesionalisme Universitas Esa Unggul.</li><li>Membangun jaringan luas dengan lembaga internal, dan eksternal kampus di tingkat nasional dan internasional.</li><li>Memaksimalkan potensi dan minat jiwa kewirausahaan anggota melalui ilmu pengetahuan dan keadaan sosial.</li><li>Mempengaruhi semangat kewirausahaan dengan konsep SKI (Spiritual, Kreatifitas, dan Intelektualitas).</li></ol>', '<p>Pengusaha Pejuang-Pejuang Pengusaha yang bermakna bahwa kader-kader HIPMI tidak saja diharapkan menjadi pengusaha nasional yang tangguh tetapi juga menjadi pengusaha yang berwawasan kebangsaan dan memiliki kepedulian terhadap tuntutan nurani rakyat.</p>', NULL, NULL, NULL, NULL, NULL, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(3, 'anggota', NULL, NULL, NULL, 'Bergabung dan memulai langkah bersama HIPMI Kota Bandung untuk mendorong hadirnya pengusaha indonesia yang tangguh dan mandiri.', '<ol><li><strong>Warga negara Republik Indonesia</strong></li><li><strong>Pemilik / Penanggung Jawab Usaha</strong></li><li><strong>Berusia 18-40th</strong></li><li><strong>Melampirkan copy identitas dan legalitas usaha</strong></li><li><strong>Membayar iuran keanggotaan dan biaya administrasi</strong></li><li><strong>Bersedia mematuhi tata tertib, anggaran dasar dan anggaran rumah tangga organisasi.</strong></li></ol>', '<ol><li><strong>Regulasi 1</strong></li><li><strong>Regulasi 2</strong></li></ol>', 'https://docs.google.com/forms/u/0/', NULL, NULL, NULL, NULL, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(4, 'banom', NULL, NULL, NULL, 'Badan otonom atau banom sebagai perangkat yang bertugas menjalankan program HIPMI Kota Bandung sesuai dengan basis keanggotaannya.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-31 17:00:00', '2021-12-31 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `email_tokens`
--

CREATE TABLE `email_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expired_date_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `email_tokens`
--

INSERT INTO `email_tokens` (`id`, `user_id`, `token`, `expired_date_time`, `created_at`, `updated_at`) VALUES
(1, 210, 'DOncOIyTMTk9WJYUNQ1Y30Llm99UPaqs', '2022-09-15 17:04:20', NULL, NULL),
(2, 210, 'FjGsP7XBdENyVhIgyfDSo3awfhe1IlkJ', '2022-09-15 17:04:39', NULL, NULL),
(3, 210, NULL, '2022-09-15 17:05:35', NULL, NULL),
(4, 210, NULL, '2022-09-15 17:06:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE `katalog` (
  `id` int(11) NOT NULL,
  `nama_katalog` varchar(225) DEFAULT NULL,
  `jenis` longtext,
  `deskripsi` longtext,
  `logo` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `nama_pemilik` varchar(225) DEFAULT NULL,
  `no_pemilik` varchar(20) DEFAULT NULL,
  `email_pemilik` varchar(225) DEFAULT NULL,
  `facebook` varchar(225) DEFAULT NULL,
  `instagram` varchar(225) DEFAULT NULL,
  `twitter` varchar(225) DEFAULT NULL,
  `youtube` varchar(225) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `master_bidang_usaha_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `katalog`
--

INSERT INTO `katalog` (`id`, `nama_katalog`, `jenis`, `deskripsi`, `logo`, `alamat`, `nama_pemilik`, `no_pemilik`, `email_pemilik`, `facebook`, `instagram`, `twitter`, `youtube`, `user_id`, `master_bidang_usaha_id`, `created_at`, `updated_at`) VALUES
(1, 'CV. Anugerah Alam', NULL, NULL, 'hipmi.jpg', 'Jln. Sersan surip no. 159/169a bandung', 'Aditya Rizki', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(2, 'Cv. Fish ID', NULL, NULL, 'hipmi.jpg', 'Jln. Laswi', 'Mochamad ilham', NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(3, 'PT. Yekoyo Pratama Yuriandi', NULL, NULL, 'hipmi.jpg', 'Jl. Bukit Sangkuriang No 3', 'Dandi Gustri Yuriandi', NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(4, 'CV. Anugrah Parahyangan Jaya', NULL, NULL, 'hipmi.jpg', 'Jln. Sulanjana nomer 5.', 'Ikhwal Rheza Zaeni', NULL, NULL, NULL, NULL, NULL, NULL, 4, 2, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(5, 'PT Bintang Timur Transindo', NULL, NULL, 'hipmi.jpg', 'Jl arjuna no 45', 'Marshall', NULL, NULL, NULL, NULL, NULL, NULL, 5, 3, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(6, 'cv yundian prastita', NULL, NULL, 'hipmi.jpg', 'jl palasari no 60', 'yundian pratama', NULL, NULL, NULL, NULL, NULL, NULL, 6, 3, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(7, 'Dillco Group Indonesia', NULL, NULL, 'hipmi.jpg', 'Jalan Yupiter Utama E2 106 Kota Bandung', 'Fadillah Satria Gama', NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(8, 'Sixplus Agrotech', NULL, NULL, 'hipmi.jpg', 'Jl. Raya Maribaya Timur No. 08, Cibodas, Lembang, Cibodas, Lembang, Kabupaten Bandung Barat, Jawa Barat 40391', 'Irza Aulia Zaim', NULL, NULL, NULL, NULL, NULL, NULL, 8, 1, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(9, 'Hey Farm', NULL, NULL, 'hipmi.jpg', 'Jl. Boncenang no. 3', 'Adrian Maulana', NULL, NULL, NULL, NULL, NULL, NULL, 9, 1, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(10, 'PT Batanghari Nusantara Indonesia', NULL, NULL, 'hipmi.jpg', 'Jl Cimanuk 6 Citarum - Bandung', 'Achmad Fathi', NULL, NULL, NULL, NULL, NULL, NULL, 10, 4, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(11, 'PT Kazee Digital Indonesia', NULL, NULL, 'hipmi.jpg', 'Jalan Jurang nomor 31, Pasteur, Bandung', 'I Made Ariya Sanjaya', NULL, NULL, NULL, NULL, NULL, NULL, 11, 5, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(12, 'PT Indokonten Sukses Makmur', NULL, NULL, 'hipmi.jpg', 'Ruko Setrasari Kav 11B, Jalan Surya Sumantri Bandung', 'Ellangga Seta', NULL, NULL, NULL, NULL, NULL, NULL, 12, 5, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(13, 'PT.Sahabat Pratama', NULL, NULL, 'hipmi.jpg', 'Jl.Budhi no.129 Cimahi Utara', 'Aditya Triyulianto Nugroho', NULL, NULL, NULL, NULL, NULL, NULL, 13, 6, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(14, 'Pt. Inovindo digital media', NULL, NULL, 'hipmi.jpg', 'Pascal hypersquare c29 bandung', 'Genta Dirgantara', NULL, NULL, NULL, NULL, NULL, NULL, 14, 5, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(15, 'PT Lokapoin Kreasi Indonesia', NULL, NULL, 'hipmi.jpg', 'Jalan Naripan Nomor 53, Bandung', 'Mochammad Nurcahyo', NULL, NULL, NULL, NULL, NULL, NULL, 15, 7, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(16, NULL, NULL, NULL, 'hipmi.jpg', 'Jalan Dipatiukur, Sekeloa Utara. RT/RW 01/05 No 223b. Kecamatan Coblong, Kota Bandung, Jawa Barat', 'ARCHY RENALDY PRATAMA NUGRAHA', NULL, NULL, NULL, NULL, NULL, NULL, 16, 8, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(17, 'PT Laskar Teknologi Mulia', NULL, NULL, 'hipmi.jpg', 'Jl Guntur Sari 2 no 37 Buah Batu Bandung', 'hardyansyah', NULL, NULL, NULL, NULL, NULL, NULL, 17, 9, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(18, 'PT. Titik Terang Teknologi', NULL, NULL, 'hipmi.jpg', 'Jln. Gelombang Cinta No. 38 B Cisaranten Kulon', 'Ekky Fauzan Maulana', NULL, NULL, NULL, NULL, NULL, NULL, 18, 5, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(19, 'PT. Langgeng Cipta Solusi', NULL, NULL, 'hipmi.jpg', 'Jl. Babakan Jeruk III No. 31, Kota Bandung', 'Aldyva Ferdianza', NULL, NULL, NULL, NULL, NULL, NULL, 19, 5, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(20, 'Reka Informatika Digital', NULL, NULL, 'hipmi.jpg', 'Wisma Monex lt 9, Jl Asia Afrika no 133-137', 'Angga Kusnan Qodafi', NULL, NULL, NULL, NULL, NULL, NULL, 20, 5, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(21, 'PT. Mores Data Analitika', NULL, NULL, 'hipmi.jpg', 'Gd. Gondangdia Lama 25 Lt. 4 1A,B Jl. RP. Soeroso No.25 Menteng-Jakarta Pusat 10330', 'Indra Hidayat', NULL, NULL, NULL, NULL, NULL, NULL, 21, 10, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(22, 'CV Solusi Automasi Indonesia', NULL, NULL, 'hipmi.jpg', 'Gedung C Lantai 1, BandungTechno Park, Jalan Telekomunikasi No 1 Terusan Buahbatu, Bandung', 'Subkhan Ibnu Aji', NULL, NULL, NULL, NULL, NULL, NULL, 22, 11, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(23, 'PT. Cintessa Tangkas Inovasi', NULL, NULL, 'hipmi.jpg', 'jln. Graha Jati No 15 RT 01 RW 20 Kec Margaasih Kelurahan Lagadar Kab Bandung', 'Anggy Edo Prasetya', NULL, NULL, NULL, NULL, NULL, NULL, 23, 12, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(24, 'PT Setiap Hari Dipakai / Evermos Pte Ltd (Singapore)', NULL, NULL, 'hipmi.jpg', 'Jl. Sindang Sirna No.38, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40153', 'Muhammad Ghufron Mustaqim', NULL, NULL, NULL, NULL, NULL, NULL, 24, 12, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(25, 'PT. Reyraka Dinasty', NULL, NULL, 'hipmi.jpg', 'Jl.Paledang No.154 Campaka Andir Bandung 40184', 'Rina Triannisa Fauziah T', NULL, NULL, NULL, NULL, NULL, NULL, 25, 14, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(26, 'noname', NULL, NULL, 'hipmi.jpg', 'nn', 'anto suryanto', NULL, NULL, NULL, NULL, NULL, NULL, 26, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(27, 'CV Surya Artha Gemilang', NULL, NULL, 'hipmi.jpg', 'Jl. Simpang 38, Garut', 'Fiki Arisandi', NULL, NULL, NULL, NULL, NULL, NULL, 27, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(28, 'Koperasi Kesejahteraan Mahasiswa Bandung', NULL, NULL, 'hipmi.jpg', 'Jl. Jalaprang No. 11, Sukaluyu', 'Dudi Setiawan', NULL, NULL, NULL, NULL, NULL, NULL, 28, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(29, 'Koperasi KKMB', NULL, NULL, 'hipmi.jpg', 'Jl. Jalaprang No 9', 'LILIH MUFLIH', NULL, NULL, NULL, NULL, NULL, NULL, 29, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(30, 'cv patanjala lumbung raharja', NULL, NULL, 'hipmi.jpg', 'Jl. Naripan no.31-35', 'Ramadhani Febriantoro', NULL, NULL, NULL, NULL, NULL, NULL, 30, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(31, 'CV BERINGIN GROUP INDONESIA', NULL, NULL, 'hipmi.jpg', 'Jl. Ir. H. Djuanda No 320 Blk Dago Bandung', 'M Cholil Abdul Hapid', NULL, NULL, NULL, NULL, NULL, NULL, 31, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(32, 'CV. PADJADJARAN INTI KREASINDO', NULL, NULL, 'hipmi.jpg', 'Jl. Permai 2 ME 103 Maper RT. 03 RW. 10 Desa Mekerrahayu Kecamatan Margaasih Kabupaten Bandung', 'Gilang Pratama', NULL, NULL, NULL, NULL, NULL, NULL, 32, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(33, 'CV RAHADIAN GLOBALINDO', NULL, NULL, 'hipmi.jpg', 'Komp. Gempol Asri No. 20F Kel. Gempol Asri Kec. Bandung Kulon Kota Bandung', 'DADAN RAHADIAN GUNAWAN', NULL, NULL, NULL, NULL, NULL, NULL, 33, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(34, 'Roar Clothier', NULL, NULL, 'hipmi.jpg', 'Jl. Babakan ciamis no.65', 'David Wijaya', NULL, NULL, NULL, NULL, NULL, NULL, 34, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(35, 'CV. Haluan Mas Utama', NULL, NULL, 'hipmi.jpg', 'Jl. Kelapa Sawit Ujung No. 54', 'Naufaldi Hilmi', NULL, NULL, NULL, NULL, NULL, NULL, 35, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(36, 'Hotel Wisma Indonesia', NULL, NULL, 'hipmi.jpg', 'JL poros bandara haluoleo, lepo-lepo, kota kendari', 'Dio Wibowo', NULL, NULL, NULL, NULL, NULL, NULL, 36, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(37, 'LiberBreed', NULL, NULL, 'hipmi.jpg', 'Jl Denki No 27A Moh Toha Bandung', 'Selna Moh Triwidarto,S.T.', NULL, NULL, NULL, NULL, NULL, NULL, 37, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(38, 'PT KONSTRUKSI TEKNOLOGI HARAPAN', NULL, NULL, 'hipmi.jpg', 'Jl danau toba no 104', 'Ikhlas hadi santoso', NULL, NULL, NULL, NULL, NULL, NULL, 38, 16, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(39, 'Berkreatif', NULL, NULL, 'hipmi.jpg', 'Batununggal indah 2 blok RA25', 'Moch ajie bagus kusumah wardhani', NULL, NULL, NULL, NULL, NULL, NULL, 39, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(40, 'bina jaya scaffolding', NULL, NULL, 'hipmi.jpg', 'jl. taman kopo indah 3 blok g no 8a', 'ferdinandes dwi jaya naibaho S.T', NULL, NULL, NULL, NULL, NULL, NULL, 40, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(41, '-', NULL, NULL, 'hipmi.jpg', 'jl. Cikutra no. 132', 'Surya Prawira Berlian', NULL, NULL, NULL, NULL, NULL, NULL, 41, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(42, 'Pt. Suara sanara juara', NULL, NULL, 'hipmi.jpg', 'Komolek bandung inten b1 no 13 rt 02 rw 12', 'Billy Sandi Pratama', NULL, NULL, NULL, NULL, NULL, NULL, 42, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(43, 'CV Kojo Group Indonesia', NULL, NULL, 'hipmi.jpg', 'Alamat domisili : Komplek Perumahan Permata Biru K.85 Cinunuk Cileunyi Bandung', 'Faizal Nur Sodik', NULL, NULL, NULL, NULL, NULL, NULL, 43, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(44, 'PT Raas Solusi Indonesia', NULL, NULL, 'hipmi.jpg', 'Jalan Otto Iskandar Dinata No 392', 'Destry Amartiwi Sartika', NULL, NULL, NULL, NULL, NULL, NULL, 44, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(45, 'CV. Pandawa Lima', NULL, NULL, 'hipmi.jpg', 'Jl. Panyawungan 2 No.3, Cileunyi Wetan, Cileunyi, Bandung, Jawa Barat 40622, Indonesia', 'Irwan Zaelan', NULL, NULL, NULL, NULL, NULL, NULL, 45, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(46, 'CV. Fahmi Jaya Trimandiri', NULL, NULL, 'hipmi.jpg', 'Jalan Babakan Sari I no 24. Kiaracondong Bandung', 'Fahmi Amiruldin', NULL, NULL, NULL, NULL, NULL, NULL, 46, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(47, 'PT Rizki Anugrah Perkasa; PT Tekno Dirgantara Investama', NULL, NULL, 'hipmi.jpg', 'Gading Tutuka 2 Blok P.5 No 39 RT01/012 Desa Ciluncat Kecamatan Cangkuang', 'Reza Andy', NULL, NULL, NULL, NULL, NULL, NULL, 47, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(48, 'CV. KERSA CIPTA PRATAMA', NULL, NULL, 'hipmi.jpg', 'Jl. Babakan Sukatma No.99A/210A Kota Bandung', 'H.R. RANGGA GUMILAR SUBAGJA, ST.', NULL, NULL, NULL, NULL, NULL, NULL, 48, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(49, 'Cv. Bumi Raya Agung', NULL, NULL, 'hipmi.jpg', 'Jl. Permata taman sari XIV no 7 Cisaranten Bandung', 'Mochamad Yoesep Ali Rachman', NULL, NULL, NULL, NULL, NULL, NULL, 49, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(50, 'CV. SATU GARUDA', NULL, NULL, 'hipmi.jpg', 'Jalan Gedung Lima No. 3C, Padalarang , Kab. Bandung Barat & Jalan Cihanjuang No 182', 'Moch Fachri Haikal', NULL, NULL, NULL, NULL, NULL, NULL, 50, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(51, 'PT. Csrhub Indonesia', NULL, NULL, 'hipmi.jpg', 'Jalan Sido Mulyo No.39, Kota Bandung', 'Ikrardhi Putera Jumawan D. R', NULL, NULL, NULL, NULL, NULL, NULL, 51, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(52, 'CV. Sembiring Ferdianza Utama', NULL, NULL, 'hipmi.jpg', 'Jl. Dr. Sukimin No. 2, Kota Bandung', 'Aldyva Ferdianza', NULL, NULL, NULL, NULL, NULL, NULL, 52, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(53, 'WORKTOCREATE Interior Workshop', NULL, NULL, 'hipmi.jpg', 'Jl.Arcamanik Sindanglaya No33', 'Fadel Ramadhan', NULL, NULL, NULL, NULL, NULL, NULL, 53, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(54, 'CV. Jagat Lagang Santanu Geopraktika', NULL, NULL, 'hipmi.jpg', 'Jl. Gunung Mas No. E-24 Pav, Kompleks Lipi, Kel. Ciumbuleuit. Kec. Cidadap, Kota Bandung, Jawa Barat', 'Kevin Martandi Setianto', NULL, NULL, NULL, NULL, NULL, NULL, 54, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(55, 'PT Konsep Rumah Indonesia', NULL, NULL, 'hipmi.jpg', 'Taman Kopo Katapang Blok E 20, Kelurahan Pangauban Kecamatan Katapang Kabupaten Bndung Jawa Barat', 'Rizky Pangestu Setiawan', NULL, NULL, NULL, NULL, NULL, NULL, 55, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(56, 'PT. Almahyra Bumi Hijau Mandiri', NULL, NULL, 'hipmi.jpg', 'Jl. Jombang Raya Rt 004 Rw 004, Kota tangerang Selatan', 'Rizal Fahmi', NULL, NULL, NULL, NULL, NULL, NULL, 56, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(57, 'PT. DUXAY BANGUN PERSADA', NULL, NULL, 'hipmi.jpg', 'Jl. terusan jakarta no 175 A Antapani Kota Bandung', 'Keren Hapukh Wakkary', NULL, NULL, NULL, NULL, NULL, NULL, 57, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(58, 'PT. Inovasi Berdayakan Bangsa', NULL, NULL, 'hipmi.jpg', 'Jalan Ir.H Djuanda No.70', 'Vincent Oktavian Kaulika', NULL, NULL, NULL, NULL, NULL, NULL, 58, 9, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(59, 'CV.Pikirmikir', NULL, NULL, 'hipmi.jpg', 'Graha Putra Jl. H.Wasid No.29 Lantai 1 Kav 5A Coblong Bandung', 'Yuckiancha Isa', NULL, NULL, NULL, NULL, NULL, NULL, 59, 18, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(60, 'PT. arkides asia', NULL, NULL, 'hipmi.jpg', 'sarijadi blok 17 no.10', 'Gania Nanggala', NULL, NULL, NULL, NULL, NULL, NULL, 60, 19, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(61, 'CV. Esbi Project', NULL, NULL, 'hipmi.jpg', 'Jalan bukit alam 1 no 35, ciguruwik', 'Immanuel gerin johansyah', NULL, NULL, NULL, NULL, NULL, NULL, 61, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(62, 'PT. Salma Akbar Cemerlang', NULL, NULL, 'hipmi.jpg', 'Jln. Cibodas Raya No.39. Komplek Casa De Esta D 5', 'Fanny Gunawan', NULL, NULL, NULL, NULL, NULL, NULL, 62, 20, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(63, 'PT. Altairya karya interio', NULL, NULL, 'hipmi.jpg', 'Jl. Keadilan 1 no.1 riung bandung', 'Muhamad Nurul Alam', NULL, NULL, NULL, NULL, NULL, NULL, 63, 17, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(64, 'CV. Mitra Inovasi Teknik', NULL, NULL, 'hipmi.jpg', 'Jl. Martanegara no.56', 'Bilal Akbar Hidayansyah', NULL, NULL, NULL, NULL, NULL, NULL, 64, 21, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(65, 'PT Mandala Geoteknika Mandiri', NULL, NULL, 'hipmi.jpg', 'Jalan Cimareme Cluster Selaras Blok E9', 'Ivan Ade Sofiyan', NULL, NULL, NULL, NULL, NULL, NULL, 65, 22, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(66, 'Sinar Galuh Pakuan', NULL, NULL, 'hipmi.jpg', 'jl. purwakarta no. 145 antapani bandung', 'Annisa Primanty', NULL, NULL, NULL, NULL, NULL, NULL, 66, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(67, 'PT. Mitra Abadi Barokah', NULL, NULL, 'hipmi.jpg', 'Jalan Raya Cnunuk km.16 Cileunyi, Kab.Bandung.', 'rifki aditya mutaqin', NULL, NULL, NULL, NULL, NULL, NULL, 67, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(68, 'Ud. Jaya makmur setia', NULL, NULL, 'hipmi.jpg', 'Jl.majalaya-cicalengka kp.bojong ds.cigentur rrt.04 rw.03 kec.paseh kab.bandung', 'Fajar anur rahman', NULL, NULL, NULL, NULL, NULL, NULL, 68, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(69, 'PT. Trisapta Kabel Industri', NULL, NULL, 'hipmi.jpg', 'Kompleks Pergudangan Bizpark Blok A3 no.10', 'Jeremy Owen', NULL, NULL, NULL, NULL, NULL, NULL, 69, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(70, 'CV. Cahaya Sinar Berlian (CASIBER)', NULL, NULL, 'hipmi.jpg', 'Jl. Baru No.78 Rancakasumba Solokan Jeruk Bandung', 'Nicky Sonjaya', NULL, NULL, NULL, NULL, NULL, NULL, 70, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(71, 'Bintang Muda Wijaya. Corp', NULL, NULL, 'hipmi.jpg', 'Jalan Sukahaji Permai 11 Sukarasa/ Sukasari Bandung 40152', 'Anggasa Wijaya', NULL, NULL, NULL, NULL, NULL, NULL, 71, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(72, 'BRILLIANS SINAR JAYA', NULL, NULL, 'hipmi.jpg', 'jln.cukang kawung no 7 tanimulya', 'RANDY RINALDO', NULL, NULL, NULL, NULL, NULL, NULL, 72, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(73, 'PT. Sinar Guna Makmur', NULL, NULL, 'hipmi.jpg', 'Komp. Bizparj Commercial Estate Blok A7 No.8 Kopo', 'Adiguna', NULL, NULL, NULL, NULL, NULL, NULL, 73, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(74, 'PT. Colorindo Aneka Warna', NULL, NULL, 'hipmi.jpg', 'Pergudangan Bizpark B5-35 Jl Kopo no 455', 'Willy Setiawan', NULL, NULL, NULL, NULL, NULL, NULL, 74, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(75, 'PT Putra Putri Nugraha, PT Berkah Sebelas Binatu, PT Amanah Karya Sukirman', NULL, NULL, 'hipmi.jpg', 'Jln terusan jakarta ruko puri dago no 14a, Jln pangarang dalam 3, Jln endang anjali', 'Muhammad irfan nugraha', NULL, NULL, NULL, NULL, NULL, NULL, 75, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(76, 'PT. Aequalis Indonesia Raya', NULL, NULL, 'hipmi.jpg', 'Komp. Ruko Cikawao Permai Kavling B-19, Kel. Paledang, Kec. Lengkong, Kota Bandung, Prov. Jawa Barat', 'Affabile Rifawan', NULL, NULL, NULL, NULL, NULL, NULL, 76, 24, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(77, 'Amanah Akhlak Mulia', NULL, NULL, 'hipmi.jpg', 'Bizpark 3 Bekasi Blok D nomo 20', 'Fahmi Atriadi', NULL, NULL, NULL, NULL, NULL, NULL, 77, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(78, 'PT. CITRA ANUGRAH BHINEKAS', NULL, NULL, 'hipmi.jpg', 'Jl taman mekar abadi I no39', 'Muhammad eddy rahardi', NULL, NULL, NULL, NULL, NULL, NULL, 78, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(79, 'Cv. Bandung Jaya Hose', NULL, NULL, 'hipmi.jpg', 'Jalan Soekarno Hatta no.575 H', 'Ilham Akbar Ramadhan', NULL, NULL, NULL, NULL, NULL, NULL, 79, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(80, 'PT. Eunoia Jaya Gautama', NULL, NULL, 'hipmi.jpg', 'Jl. Mekar Sejahtera No. 10 h', 'Fajar Kusumah P.N', NULL, NULL, NULL, NULL, NULL, NULL, 80, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(81, 'Alfa Niaga Store', NULL, NULL, 'hipmi.jpg', 'Jl. Mars utara I no. 8a Manjahlega, Rancasari, Kota Bandung', 'Iqro husodo', NULL, NULL, NULL, NULL, NULL, NULL, 81, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(82, 'CV. Inovasi Santri Nusantara', NULL, NULL, 'hipmi.jpg', 'Jl. Guntur Sari Kulon No.19, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264', 'Adhy Satya Dharma Octavia', NULL, NULL, NULL, NULL, NULL, NULL, 82, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(83, 'PT Infini Mulia Investama', NULL, NULL, 'hipmi.jpg', 'Jl Setra Dago Timur IV No 27', 'Ridwan Hilmi', NULL, NULL, NULL, NULL, NULL, NULL, 83, 25, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(84, NULL, NULL, NULL, 'hipmi.jpg', 'Puri Dago Mas Utama no 44, Cibodas - Antapani, Bandung', 'Indri Hafsari', NULL, NULL, NULL, NULL, NULL, NULL, 84, 26, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(85, 'CV Dwitunggal Kreasi Bersama', NULL, NULL, 'hipmi.jpg', 'Miko Mall, Lt. 1 : Area Food Garden - Blok A6/02, Jl. Raya Kopo No. 599, Cirangrang, Babakan Ciparay, Bandung, 40225', 'FEBRIANSYAH AGUSMAN ABADI', NULL, NULL, NULL, NULL, NULL, NULL, 85, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(86, 'CV. Vierama', NULL, NULL, 'hipmi.jpg', 'Jl. Sukabumi no. 42, Bandung', 'Dalzi Danil', NULL, NULL, NULL, NULL, NULL, NULL, 86, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(87, NULL, NULL, NULL, 'hipmi.jpg', 'JL.Peta No.229', 'Derry Caesarrio Saputra', NULL, NULL, NULL, NULL, NULL, NULL, 87, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(88, 'Cv Pantai Indah', NULL, NULL, 'hipmi.jpg', 'Jalan Gajah Mada Rt. 21 No 112\nTarakan Kaltara', 'Abdul Majid', NULL, NULL, NULL, NULL, NULL, NULL, 88, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(89, 'Cv. Bau bawang', NULL, NULL, 'hipmi.jpg', 'Jl. Gerlong hilir 143', 'Visha Agni Fradana', NULL, NULL, NULL, NULL, NULL, NULL, 89, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(90, 'CV.BABAKARAN/PT.MAJESTYANARAWATA', NULL, NULL, 'hipmi.jpg', 'Jl.Taman pramuka no.180', 'Faras Muhammad', NULL, NULL, NULL, NULL, NULL, NULL, 90, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(91, 'PT . VINUSS OGAN JAYA', NULL, NULL, 'hipmi.jpg', 'Jl.ciptakarya perumahan patramaya residence no.23 bodogol ciwastra', 'R Yusti Plasenta Setiawati, S.H', NULL, NULL, NULL, NULL, NULL, NULL, 91, 28, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(92, 'Baso PuSiMa (Putra sido Mampir)', NULL, NULL, 'hipmi.jpg', 'Jl. Caringin No. 164 Bandung', 'Agung, S.Pd', NULL, NULL, NULL, NULL, NULL, NULL, 92, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(93, 'Tahu hamil', NULL, NULL, 'hipmi.jpg', 'Jl. Hasanudin no 22', 'Mutia Nabilah Hashifah', NULL, NULL, NULL, NULL, NULL, NULL, 93, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(94, 'CV. Fajar Nugraha Abadi', NULL, NULL, 'hipmi.jpg', 'Pondok Mas Raya No 36 Baros', 'Aldi Fajar Nugraha', NULL, NULL, NULL, NULL, NULL, NULL, 94, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(95, 'Dapur Kuweh', NULL, NULL, 'hipmi.jpg', 'Jl. Raya Cinunuk No.192 Bandung', 'Fakhrul Hilman Ramadhan', NULL, NULL, NULL, NULL, NULL, NULL, 95, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(96, 'Belum ada', NULL, NULL, 'hipmi.jpg', 'Jalan bukit dago selatan no 4', 'Anugrah kharisma chandra meigantara', NULL, NULL, NULL, NULL, NULL, NULL, 96, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(97, 'Restoran Ayam Sawce', NULL, NULL, 'hipmi.jpg', 'Jl. Pahlawan No. 76 Kota Bandung', 'muhammad faza', NULL, NULL, NULL, NULL, NULL, NULL, 97, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(98, 'PT. Adhipramana Rasa Juara', NULL, NULL, 'hipmi.jpg', 'Jln. Laswi no. 99, RT001/RW004, Samoja, Batununggal, Kota bandung 40273', 'Tarindra Raditya Rangga W. S.Bn.', NULL, NULL, NULL, NULL, NULL, NULL, 98, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(99, 'CV. Fikuri Business Indonesia', NULL, NULL, 'hipmi.jpg', 'Jl. Terusan Ranca Goong II no.14B, Bandung', 'Muhammad Fikri Fahrurreza', NULL, NULL, NULL, NULL, NULL, NULL, 99, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(100, 'Panache', NULL, NULL, 'hipmi.jpg', 'Jalan Sinom Raya no.09', 'Farhana Desfila', NULL, NULL, NULL, NULL, NULL, NULL, 100, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(101, 'Kedai Kopi Saparasa', NULL, NULL, 'hipmi.jpg', 'Jalan Veteran no 24 Sukoharjo', 'Aninditya Santiko Wibowo', NULL, NULL, NULL, NULL, NULL, NULL, 101, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(102, 'PT. BITE Berkah sejahtera', NULL, NULL, 'hipmi.jpg', 'Jalan cisitu lama no 34', 'Salman Hafidz', NULL, NULL, NULL, NULL, NULL, NULL, 102, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(103, NULL, NULL, NULL, 'hipmi.jpg', 'Jl. Katamso, Cihaergeulis, Bandung', 'Aulia Ramadhani', NULL, NULL, NULL, NULL, NULL, NULL, 103, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(104, 'Mare Fruit Club', NULL, NULL, 'hipmi.jpg', 'Jl. Jawa No. 34, Bandung', 'Muhammad Akbar Ridho Hilal', NULL, NULL, NULL, NULL, NULL, NULL, 104, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(105, 'CV. Garuda Mandiri Jaya', NULL, NULL, 'hipmi.jpg', 'Jl. WL nomor 5 samping Gor Futsal HM, Cisaranten Kulon, Kec. Arcamanik, Kota Bandung, Jawa Barat 40293', 'Ganjar Hidayat', NULL, NULL, NULL, NULL, NULL, NULL, 105, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(106, 'Rajo Pempek', NULL, NULL, 'hipmi.jpg', 'Jl. Tubagus Ismail No 24 Bandung', 'Rezza Andriansyah', NULL, NULL, NULL, NULL, NULL, NULL, 106, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(107, 'Angkringan Serbu', NULL, NULL, 'hipmi.jpg', 'Jl L.L.R.E Martadinata no 86 kel. Cihapit, kec. Bandung Wetan kota Bandung Jawa Barat', 'Stevanus Fardian Arusea Purwanto', NULL, NULL, NULL, NULL, NULL, NULL, 107, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(108, 'Papudi Indonesia', NULL, NULL, 'hipmi.jpg', 'Jl. Sukamenak Gg.Maksudi No. 35', 'Jihad Putera Kurnia Alfarisi', NULL, NULL, NULL, NULL, NULL, NULL, 108, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(109, 'CV. Sembiring Ferdianza Consulting', NULL, NULL, 'hipmi.jpg', 'Jl. Dr. Sukimin No. 2, Kota Bandung', 'Aldyva Ferdianza', NULL, NULL, NULL, NULL, NULL, NULL, 109, 29, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(110, 'Izin Praktik : KIP-5860/IP. B/PJ/2020', NULL, NULL, 'hipmi.jpg', 'Jl Neptunus Selatan IV Blok K II No 103', 'Angga Prayoga', NULL, NULL, NULL, NULL, NULL, NULL, 110, 30, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(111, 'PT SEJATI PUTRA MANDIRI', NULL, NULL, 'hipmi.jpg', 'jl buah batu no.161 bandung', 'Shasya Rajendra Rachman', NULL, NULL, NULL, NULL, NULL, NULL, 111, 31, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(112, 'CV. Kusuma Wijaya', NULL, NULL, 'hipmi.jpg', 'Jl. Bukit Raya IV No 3 Bukit Sariwangi Bandung', 'AIDIL AKSAL IKHWAN', NULL, NULL, NULL, NULL, NULL, NULL, 112, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(113, 'CV. Aryabhazda Bargo Internasional', NULL, NULL, 'hipmi.jpg', 'Jl Gegerkalong Hilir no 17 Bandung', 'Eggy Aryabhazda Suwandi', NULL, NULL, NULL, NULL, NULL, NULL, 113, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(114, NULL, NULL, NULL, 'hipmi.jpg', 'Jl susmita no 179', 'Muhamad hendarsyah (reza)', NULL, NULL, NULL, NULL, NULL, NULL, 114, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(115, NULL, NULL, NULL, 'hipmi.jpg', 'TAMAN HOLIS INDAH II A1 NO 9', 'Eric Steven Lee Setiawan', NULL, NULL, NULL, NULL, NULL, NULL, 115, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(116, 'PT. Kawi Mekar', NULL, NULL, 'hipmi.jpg', 'Jalan Leuwigajah No. 158\nCimahi Bandung 40521', 'Kiki Hendrawan', NULL, NULL, NULL, NULL, NULL, NULL, 116, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(117, 'CV Garuda Jaya Mandiri', NULL, NULL, 'hipmi.jpg', 'Jl. Bukit VIII no 7 Sariwangi Regency Bandung', 'Ganjar Hidayat', NULL, NULL, NULL, NULL, NULL, NULL, 117, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(118, 'Menyusul', NULL, NULL, 'hipmi.jpg', 'Jalan gegerkalong girang,komplek taman setiabudi kav 12 b', 'Rully aulia rahim', NULL, NULL, NULL, NULL, NULL, NULL, 118, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(119, 'JelitaClo', NULL, NULL, 'hipmi.jpg', 'Kinagara row 9 no 9,bandung', 'Dwi okta jelita', NULL, NULL, NULL, NULL, NULL, NULL, 119, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(120, 'Cv. alliyyin', NULL, NULL, 'hipmi.jpg', 'Kp talun desa tanggulun rt 03/04 kecamatan ibun. Kab.bandung', 'Muhammad sakhin aliyyin', NULL, NULL, NULL, NULL, NULL, NULL, 120, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(121, 'Kreativana Prima', NULL, NULL, 'hipmi.jpg', 'Jl. Baladewa Dpn No 2 RT.01 RW.09 Kel. Pajajaran Kec.Cicendo Bandung', 'Romantika Putra Lesmana', NULL, NULL, NULL, NULL, NULL, NULL, 121, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(122, 'DHIFDAYS', NULL, NULL, 'hipmi.jpg', 'Jl. Tirta Indah III No. 305B', 'Yudi Wahyudi', NULL, NULL, NULL, NULL, NULL, NULL, 122, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(123, 'AFaza', NULL, NULL, 'hipmi.jpg', 'BALUBUR TOWN SQUARE Jl Tamansari lantai D2 blok J15', 'aghnia faza', NULL, NULL, NULL, NULL, NULL, NULL, 123, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(124, 'CV Bintang anugerah', NULL, NULL, 'hipmi.jpg', 'Jalan taman indah utara A 296 Cimahi', 'Bintang Tri Perkasa', NULL, NULL, NULL, NULL, NULL, NULL, 124, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(125, 'CV Indo Karya', NULL, NULL, 'hipmi.jpg', 'JL Raya Nagreg km.38 Desa Nagreg Kendan. Kab.Bandung 40397', 'Erik Saputra Chandra', NULL, NULL, NULL, NULL, NULL, NULL, 125, 33, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(126, 'Kreasi pala nusantara', NULL, NULL, 'hipmi.jpg', 'Jl kaum cipaganti 44/35a', 'Ilham pinastiko', NULL, NULL, NULL, NULL, NULL, NULL, 126, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(127, 'Dama collection', NULL, NULL, 'hipmi.jpg', 'Pasar baru square lt 1 B11', 'Avinash Kalay', NULL, NULL, NULL, NULL, NULL, NULL, 127, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(128, '(sedang proses)', NULL, NULL, 'hipmi.jpg', 'Jl Kangkung Kidul no 28', 'jordi hendrisa', NULL, NULL, NULL, NULL, NULL, NULL, 128, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(129, 'PT. Segilima corps', NULL, NULL, 'hipmi.jpg', 'Jl. Neptunus timur blok r2 no 40G', 'Ryand Daddy', NULL, NULL, NULL, NULL, NULL, NULL, 129, 34, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(130, 'CV. Cahaya Mulia Lestari', NULL, NULL, 'hipmi.jpg', 'Jl - Gading Utama Timur B3 - No 10 Rt 004 Rw 008 Kelurahan Cisaranten Endah Kecamatan Arcamanik Kota Bandung', 'Mohamad Abda\'u Zaki Priyambodo', NULL, NULL, NULL, NULL, NULL, NULL, 130, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(131, 'RADIUZ INDONESIA', NULL, NULL, 'hipmi.jpg', 'Jl. Sersan Bajuri no.24 RT.08 RW.04 Kel.Isola Kec.Sukasari 40154 Bandung', 'Rizal Khoirul Insan', NULL, NULL, NULL, NULL, NULL, NULL, 131, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(132, 'PT. Enviro Citra Chikara', NULL, NULL, 'hipmi.jpg', 'Cipaganti Graha 1 Tahap 3. Blok F-16, Ciwastra', 'Miftah Faris', NULL, NULL, NULL, NULL, NULL, NULL, 132, 35, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(133, 'CV. Kurnia Jaya', NULL, NULL, 'hipmi.jpg', 'Komp. Pemda No.24, Arcamanik, Bandung', 'Helmy Mansur Marie', NULL, NULL, NULL, NULL, NULL, NULL, 133, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(134, 'difroseries.id', NULL, NULL, 'hipmi.jpg', 'JL.pagarsih gg.onong no 183/89 rt07 rw09', 'Mulyadi', NULL, NULL, NULL, NULL, NULL, NULL, 134, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(135, 'PT Vorindo Inti Produk', NULL, NULL, 'hipmi.jpg', 'Cisaranten Wetan no 57', 'Dapit Alexsander', NULL, NULL, NULL, NULL, NULL, NULL, 135, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(136, 'WETAN Empire', NULL, NULL, 'hipmi.jpg', 'Permata Kopo Jl Sukun Blok GA No 75 Sayati, Margahayu, Bandung', 'Amir Fauzi', NULL, NULL, NULL, NULL, NULL, NULL, 136, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(137, 'Vorindo Inti Produk', NULL, NULL, 'hipmi.jpg', 'Jalan Cisaranten Wetan II No 57 RT 03 RW 05, Cisaranten Wetan, Cinambo', 'Dapit Alexsander', NULL, NULL, NULL, NULL, NULL, NULL, 137, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(138, 'PT. Soerianata Indo Cipta (SNCO)', NULL, NULL, 'hipmi.jpg', 'Jalan Kalimatan No. 11 Bandung. Jabar', 'Febby Farlina Soerianata', NULL, NULL, NULL, NULL, NULL, NULL, 138, 27, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(139, 'PT ARSADELIA PUTRA PRATAMA', NULL, NULL, 'hipmi.jpg', 'Kalimalang square ks 06 jakarta timur & royal view residence no 63 ciwaruga bandung barat', 'Zyta delia rahmah', NULL, NULL, NULL, NULL, NULL, NULL, 139, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(140, 'Belum didaftarkan', NULL, NULL, 'hipmi.jpg', 'Bandung', 'Nadia Raudhattu Syifa', NULL, NULL, NULL, NULL, NULL, NULL, 140, 36, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(141, 'Mohaki Indonesia', NULL, NULL, 'hipmi.jpg', 'Jalan Cibaduyut Gg. Maeja No. 64 A', 'Mochamad Rizki', NULL, NULL, NULL, NULL, NULL, NULL, 141, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(142, 'Karta Prabu Jaya', NULL, NULL, 'hipmi.jpg', 'jl. Cibaduyut Raya no 57 Kel. Cibaduyut kec. Bojongloa kidul kota Bandung', 'Adi Priambudi', NULL, NULL, NULL, NULL, NULL, NULL, 142, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(143, 'CV Kojo Group Indonesia', NULL, NULL, 'hipmi.jpg', 'Alamat domisili : Komplek Perumahan Permata Biru K.85 Cinunuk Cileunyi Bandung', 'Faizal Nur Sodik', NULL, NULL, NULL, NULL, NULL, NULL, 143, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(144, 'Naylatuhijab', NULL, NULL, 'hipmi.jpg', 'Komplek cempaka arum cluster andalus c11', 'Muhammad Hafidz Faqihuddin', NULL, NULL, NULL, NULL, NULL, NULL, 144, 23, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(145, 'PT. Sinergi Citra Persada', NULL, NULL, 'hipmi.jpg', 'Jl.ir. Djuanda 281', 'Weny Windya Hapsary', NULL, NULL, NULL, NULL, NULL, NULL, 145, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(146, 'PT Anugrah Bintang Nirwana', NULL, NULL, 'hipmi.jpg', 'Jl aceh no 155', 'Aulia Ramadhani', NULL, NULL, NULL, NULL, NULL, NULL, 146, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(147, 'CV. Vision Pramaesindo', NULL, NULL, 'hipmi.jpg', 'Jl. Cingised no. 105, cisaranten kulon, arcamanik, bandung', 'Taufan pramaesya, ST', NULL, NULL, NULL, NULL, NULL, NULL, 147, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(148, 'Chesta Collection', NULL, NULL, 'hipmi.jpg', 'Mega Regency', 'Mela Nurmalia Puspita Sari', NULL, NULL, NULL, NULL, NULL, NULL, 148, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(149, 'CV. Sepatu Kreasi Anak Bangsa', NULL, NULL, 'hipmi.jpg', 'Jalan singgasana raya. Ruko nomor 41. Bandung', 'Muhammad Reynaldo', NULL, NULL, NULL, NULL, NULL, NULL, 149, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(150, 'Aracraft', NULL, NULL, 'hipmi.jpg', 'Jl. Kebon Jayanti No. 74 RT 02/09', 'Asep Indra Cahyadi', NULL, NULL, NULL, NULL, NULL, NULL, 150, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(151, 'SKU/Peorangan', NULL, NULL, 'hipmi.jpg', 'Jl Tegal Kawung No 66 RT 01/08 Kel Cipageran Kec Cimahi Utara Kota Cimahi', 'Valeria Nisatama', NULL, NULL, NULL, NULL, NULL, NULL, 151, 32, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(152, 'PT. Bhumi Cipta Suwarna', NULL, NULL, 'hipmi.jpg', 'Jalan Raya Ciwastra No. 73 B Kota Bandung', 'Abdul Razak', NULL, NULL, NULL, NULL, NULL, NULL, 152, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(153, 'pt raja prima sumatera', NULL, NULL, 'hipmi.jpg', 'ah nasution 455a', 'MAS ARFAN KALAM AKBAR', NULL, NULL, NULL, NULL, NULL, NULL, 153, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(154, 'PT. Omah Berdikari Perkasa', NULL, NULL, 'hipmi.jpg', 'Cik9 building, jl. Cikini raya, jakpus', 'Dida khrisna', NULL, NULL, NULL, NULL, NULL, NULL, 154, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(155, 'Cv. Wiradhika Land', NULL, NULL, 'hipmi.jpg', 'Jl. Paledang no. 84 kel. Pasanggrahan kec. Ujungberung Kota Bandung', 'Abdurochman', NULL, NULL, NULL, NULL, NULL, NULL, 155, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(156, 'Pt. Tilford Pilar Santosa', NULL, NULL, 'hipmi.jpg', 'Perumahan Riviera Kaveling 3 Gegerkalong Kota Bandung', 'Ryan Hilman Setiawan', NULL, NULL, NULL, NULL, NULL, NULL, 156, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(157, 'PT. Satria Ayu', NULL, NULL, 'hipmi.jpg', 'Puri selaras asri no. 3 rancabolang', 'Yoga raharja kartoyo', NULL, NULL, NULL, NULL, NULL, NULL, 157, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(158, 'PT. Saba Wahyudi Sadajiwa', NULL, NULL, 'hipmi.jpg', 'Komplek Kurdi Selatan No. 15 Rt. 06 Rw. 06', 'Sandi Achmad Baehaki', NULL, NULL, NULL, NULL, NULL, NULL, 158, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(159, 'CV. Geizco Mandiri', NULL, NULL, 'hipmi.jpg', 'Jl. Titimplik No 9 Bandung', 'Raden Gerry Gurnita', NULL, NULL, NULL, NULL, NULL, NULL, 159, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(160, 'PT. Urbaniaga Kreasi', NULL, NULL, 'hipmi.jpg', 'Jln.suci 35 lt 3', 'Yoga gandara', NULL, NULL, NULL, NULL, NULL, NULL, 160, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(161, 'Arovala Property Management', NULL, NULL, 'hipmi.jpg', 'Jalan Cisitu Baru 21', 'Christian Harazaki Mendroda', NULL, NULL, NULL, NULL, NULL, NULL, 161, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(162, 'PT. Cipta Radarya Nusantara', NULL, NULL, 'hipmi.jpg', 'Jl. A.H Nasution no. 94 Bandung', 'Muhamad Harisman', NULL, NULL, NULL, NULL, NULL, NULL, 162, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(163, 'Indovationland', NULL, NULL, 'hipmi.jpg', 'Rukopasarmodern batununggal blok RA 25', 'R Rangga Cahayanagara', NULL, NULL, NULL, NULL, NULL, NULL, 163, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(164, 'PT Karya Sukses Propertindo', NULL, NULL, 'hipmi.jpg', 'Jalan gegerkalong hilir no 28 kota bandung', 'Mahfudin', NULL, NULL, NULL, NULL, NULL, NULL, 164, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(165, 'PT. Cipta Radarya Nusantara', NULL, NULL, 'hipmi.jpg', 'Jl. A.H Nasution No. 94 Bandung', 'Muhamad Harisman', NULL, NULL, NULL, NULL, NULL, NULL, 165, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(166, 'MFA Group dan PT. Mandaka Bumi Sanjaya', NULL, NULL, 'hipmi.jpg', 'Bukit Dago Selatan Kav 53', 'Muhammad Bagus Samhan', NULL, NULL, NULL, NULL, NULL, NULL, 166, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(167, 'De Ruang', NULL, NULL, 'hipmi.jpg', 'Jalan Batu Indah VI No.10 Batununggal , Kota Bandung', 'Muhammad Gaudy Garibaldia', NULL, NULL, NULL, NULL, NULL, NULL, 167, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(168, 'Belum didaftarkan', NULL, NULL, 'hipmi.jpg', 'Bandung', 'Nadia Raudhattu Syifa', NULL, NULL, NULL, NULL, NULL, NULL, 168, 36, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(169, 'Cluster Hill n city', NULL, NULL, 'hipmi.jpg', 'Cluster Hill n city blok a9', 'Muhammad akmal arrafat', NULL, NULL, NULL, NULL, NULL, NULL, 169, 37, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(170, 'PT Bandung Media Televisi Indonesia', NULL, NULL, 'hipmi.jpg', 'Jl. Pacuan Kuda no 63 Arcamanik Bandung', 'Alit Suwirya', NULL, NULL, NULL, NULL, NULL, NULL, 170, 5, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(171, 'PT ARTHA SAVANA DIGITAL', NULL, NULL, 'hipmi.jpg', 'Ruko Simprug plaza blok A2 No 22 Cikarang baru Jababeka dekat stadion wibawa mukti, Sertajaya, Kec. Cikarang Tim., Bekasi, Jawa Barat', 'Alif Fauzi', NULL, NULL, NULL, NULL, NULL, NULL, 171, 38, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(172, 'CV. Persona', NULL, NULL, 'hipmi.jpg', 'Jl. Cipadang Manah (Andir) No. 122, Padalarang, Kab. Bandung Barat', 'Raden Rama Satya', NULL, NULL, NULL, NULL, NULL, NULL, 172, 39, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(173, 'CV. Nuansa Cendekia', NULL, NULL, 'hipmi.jpg', 'Jl. Sukup Baru No.23, Pasir Endah, Ujung Berung, Kota Bandung, Jawa Barat 40619', 'Muhammad Rezha Taufani', NULL, NULL, NULL, NULL, NULL, NULL, 173, 40, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(174, 'Abinarada', NULL, NULL, 'hipmi.jpg', 'Jakarta', 'Nugraha Amijaya', NULL, NULL, NULL, NULL, NULL, NULL, 174, 41, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(175, 'Mind-Set Creative Project', NULL, NULL, 'hipmi.jpg', 'Jl Cisitu Baru No 21', 'Futi Valenniasti Mendrofa', NULL, NULL, NULL, NULL, NULL, NULL, 175, 42, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(176, 'PT. Aequalis Indonesia Raya', NULL, NULL, 'hipmi.jpg', 'Komp. Ruko Cikawao Permai Kavling B-19, Kel. Paledang, Kec. Lengkong, Kota Bandung, Prov. Jawa Barat', 'Affabile Rifawan', NULL, NULL, NULL, NULL, NULL, NULL, 176, 24, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(177, 'Pijar Ideas', NULL, NULL, 'hipmi.jpg', 'Belum ada (online IG: pijar.ideas)', 'Rizki Ramadhana Putra', NULL, NULL, NULL, NULL, NULL, NULL, 177, 43, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(178, 'Pt. Suara sanara juara', NULL, NULL, 'hipmi.jpg', 'Komolek bandung inten b1 no 13 rt 02 rw 12', 'Billy Sandi Pratama', NULL, NULL, NULL, NULL, NULL, NULL, 178, 15, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(179, 'PT. Arjuna Husada Madyatama', NULL, NULL, 'hipmi.jpg', 'Jl. Bomber VIII No.1 Komp. Melong Green Garden', 'Dony Septriana Rosady', NULL, NULL, NULL, NULL, NULL, NULL, 179, 44, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(180, 'Klinik dr Susan', NULL, NULL, 'hipmi.jpg', 'Sumedang , majalaya', 'Susan S Fauziah', NULL, NULL, NULL, NULL, NULL, NULL, 180, 44, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(181, 'CV. Sendi Abdhi Karya', NULL, NULL, 'hipmi.jpg', 'Jl.Tanjidor No.2A', 'Senandhika Pascariyadi Prabowo', NULL, NULL, NULL, NULL, NULL, NULL, 181, 44, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(182, 'Skin care', NULL, NULL, 'hipmi.jpg', 'Bandung', 'Nenden andini', NULL, NULL, NULL, NULL, NULL, NULL, 182, 45, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(183, 'MD Clinic', NULL, NULL, 'hipmi.jpg', 'Jalan aceh no 60', 'Irfandie Adi Pradana', NULL, NULL, NULL, NULL, NULL, NULL, 183, 45, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(184, 'Stacia Makeup Artistry', NULL, NULL, 'hipmi.jpg', 'Jl. Cigadung Indah no 12 Bandung', 'Stacia Edina Hasiana Sitohang', NULL, NULL, NULL, NULL, NULL, NULL, 184, 45, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(185, 'PT Lingga Perkasa Nusantara', NULL, NULL, 'hipmi.jpg', 'Komplek pasir jati blok C.2 No.2 RT 01 RW 016 desa jatiendah kecamatan cilengkrang kabupaten bandung', 'Hidayatul Ikhwani', NULL, NULL, NULL, NULL, NULL, NULL, 185, 46, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(186, 'PT. Manolo Putra', NULL, NULL, 'hipmi.jpg', 'Jalan Sumber Endah no 20-12 Sumber Sari, Bandung', 'Erwin Chrisman Hendri', NULL, NULL, NULL, NULL, NULL, NULL, 186, 46, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(187, 'PT Supra Indodrill, PT Tiga Medika Persada, Yayasan AIR', NULL, NULL, 'hipmi.jpg', 'Dago Suites GF-A Jalan Sangkuriang 13', 'R M Iwan Aryanggi', NULL, NULL, NULL, NULL, NULL, NULL, 187, 47, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(188, 'PT. Mitra Kinerja Enjineering', NULL, NULL, 'hipmi.jpg', 'Wijaya Graha. Kebayoran Baru Jakarta Selatan', 'Roy Wangintan', NULL, NULL, NULL, NULL, NULL, NULL, 188, 48, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(189, 'PT Cahaya Mutiara Bunda', NULL, NULL, 'hipmi.jpg', 'Jl. Padang golf no 11 arcamanik bandung', 'Muhamad Haekal', NULL, NULL, NULL, NULL, NULL, NULL, 189, 49, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(190, 'PT. Menara Fatih Indonesia', NULL, NULL, 'hipmi.jpg', 'jl. brigjend katamso no 19b cihaurgelis cibenying kaler kota bandung', 'Yandi Purnawijaya', NULL, NULL, NULL, NULL, NULL, NULL, 190, 49, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(191, 'pt das aviation training center', NULL, NULL, 'hipmi.jpg', 'jalan pahlawan no 55', 'mochammad iqbal amin', NULL, NULL, NULL, NULL, NULL, NULL, 191, 49, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(192, 'Koperasi Jasa Insani Sumber Solusi', NULL, NULL, 'hipmi.jpg', 'Jl Gunung Sahari 3 no 7', 'Vincentius arnold', NULL, NULL, NULL, NULL, NULL, NULL, 192, 50, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(193, 'Indonesiaflourish', NULL, NULL, 'hipmi.jpg', 'Jl bukit sari no 1A', 'Christopher tjuaca', NULL, NULL, NULL, NULL, NULL, NULL, 193, 51, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(194, 'cv las vegas', NULL, NULL, 'hipmi.jpg', 'jl angkasa mulyono reremi puncak - amban manokwari', 'elfinna tryasti nurul rahma', NULL, NULL, NULL, NULL, NULL, NULL, 194, 51, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(195, 'PT. Cihampelas Cerdas Mandiri', NULL, NULL, 'hipmi.jpg', 'Jl. Cihampelas No.222', 'Gerry Satria Muchtar', NULL, NULL, NULL, NULL, NULL, NULL, 195, 52, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(196, 'Legacy Inc.', NULL, NULL, 'hipmi.jpg', 'Jl Pasirkaliki no 178', 'Alpha Rhesa Suryadjaja', NULL, NULL, NULL, NULL, NULL, NULL, 196, 53, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(197, 'PT SyarQ Solusi Indonesia', NULL, NULL, 'hipmi.jpg', 'Komplek Dai-Chi Jl. Ters. Jakarta Utara No.55, Kota Bandung 40282', 'Raden Nanda Teguh Perkasa', NULL, NULL, NULL, NULL, NULL, NULL, 197, 53, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(198, 'Yourfinplan Consulting', NULL, NULL, 'hipmi.jpg', 'Jl Buah Batu No 107', 'Albar Hakim', NULL, NULL, NULL, NULL, NULL, NULL, 198, 53, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(199, 'FM FACTORY', NULL, NULL, 'hipmi.jpg', 'jln A H Nasution no 383/99 tagog 1', 'fahmi ahmad fauzi', NULL, NULL, NULL, NULL, NULL, NULL, 199, 54, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(200, 'Arsanjaya Teknik', NULL, NULL, 'hipmi.jpg', 'Jl Sindangsari 3 RT 05 RW 09 No 92 Bandung 40291', 'priyan aras sandi', NULL, NULL, NULL, NULL, NULL, NULL, 200, 55, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(201, 'PT. Aftech Indonesia', NULL, NULL, 'hipmi.jpg', 'Jl Batu Indah XI No 16a', 'Alvin Fitra', NULL, NULL, NULL, NULL, NULL, NULL, 201, 56, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(202, 'PT. FIN KOMODO TEKNOLOGI', NULL, NULL, 'hipmi.jpg', 'Jl. Kolonel Masturi 106A, Cimahi', 'Aviantara Karisma Putra', NULL, NULL, NULL, NULL, NULL, NULL, 202, 57, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(203, 'PT. Bima Sakti Tekindo', NULL, NULL, 'hipmi.jpg', 'JL. MK Wiganda Sasmita No 11 Cimahi', 'Stephen Setiadi', NULL, NULL, NULL, NULL, NULL, NULL, 203, 58, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(204, 'PT Bina Keluarga Bersama Sejahtera', NULL, NULL, 'hipmi.jpg', 'Jalan BKR No 107, Bandung', 'Muhammad Akbar Ridho Hilal', NULL, NULL, NULL, NULL, NULL, NULL, 204, 59, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(205, 'PT. Mavens Studio Indonesia', NULL, NULL, 'hipmi.jpg', 'Jalan Terusan Ekologi No.6, Cigadung, Cibeunying Kaler, Kota Bandung 40191', 'Ibrahim Imaduddin Islam', NULL, NULL, NULL, NULL, NULL, NULL, 205, 60, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(206, 'Yayasan EnergyLab Indonesia', NULL, NULL, 'hipmi.jpg', '-', 'Muhammad Fathahillah Zuhri', NULL, NULL, NULL, NULL, NULL, NULL, 206, 61, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(207, 'CO-LAB.ID', NULL, NULL, 'hipmi.jpg', 'Jalan Veteran No 12, Kolega Coworking Space', 'Fauzan Kemal Akbar', NULL, NULL, NULL, NULL, NULL, NULL, 207, 62, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(208, 'CV. SLUG', NULL, NULL, 'hipmi.jpg', 'Jalan panyawangan 8 no 4 panghegar', 'Soultan Taufiq', NULL, NULL, NULL, NULL, NULL, NULL, 208, 63, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(209, 'Skdu STARTUPCO', NULL, NULL, 'hipmi.jpg', 'Jl lodaya no 65', 'Arya shani', NULL, NULL, NULL, NULL, NULL, NULL, 209, 64, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(210, 'PT Eco City Indonesia2', NULL, 'adalah perusahaan yang bergerak di bidang...2', 'HIPMI-Bandung(Himpunan-Pengusaha-Muda-Indonesia-Bandung)1663142483.png', 'jakarta2', 'jaja2', '1232', 'jaja123@gmail.com2', '12', '22', '32', '42', 2, 13, '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(211, 'cek pt', NULL, 'c', 'HIPMI-Bandung(Himpunan-Pengusaha-Muda-Indonesia-Bandung)1663251404.jpg', 'c', 'c', '123', '1@asd.asd', NULL, NULL, NULL, NULL, 1, 1, '2022-09-15 14:16:44', '2022-09-15 14:16:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_bidang_usaha`
--

CREATE TABLE `master_bidang_usaha` (
  `id` int(11) NOT NULL,
  `bidang_usaha` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_bidang_usaha`
--

INSERT INTO `master_bidang_usaha` (`id`, `bidang_usaha`, `created_at`, `updated_at`) VALUES
(1, 'Pertanian, Perikanan dan Kehutanan', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(2, 'Proses Pengolahan Kopi', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(3, 'Peternakan', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(4, 'eksportir', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(5, 'Informasi dan Komunikasi', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(6, 'engineering Services (Electrical & Automation Solution)', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(7, 'Pariwisata dan Digital Platform', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(8, 'Startup dan Jasa Pembuatan Sistem Informasi (Website, Aplikasi Mobile)', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(9, 'Teknologi Informasi', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(10, 'Konsultan', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(11, 'Teknologi (Jasa Automasi)', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(12, 'Konsultan IT dan Training Project/Product Management', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(13, 'Ecommerce', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(14, 'Perdagangan Barang dan Jasa dan konstruksi', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(15, 'Pengadaan Barang & Jasa', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(16, 'ALUSISTA ,PENGADAAN UMUM N RENOVASI', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(17, 'Konstruksi dan Pembangunan', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(18, 'Jasa Desain dan Hasil Produk Desain Grafis dan Interior', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(19, 'jasa konsultasi desain arsitektur, interior, dan landscape', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(20, 'Konstruksi, Kelistrikan, Konveksi', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(21, 'Elektrical dan mekanikal', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(22, 'Konsultan Engineering dan Survey', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(23, 'Perdagangan Umum', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(24, 'Perdagangan Eceran Khusus Barang Baru, Aktivitas Professional Ilmiah, Penyelenggara Pertemuan, Event Organizer, Aktivitas Lainnya yang berkaitan dengan Olahraga', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(25, 'Perdagangan, Investasi, Keuangan', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(26, 'Craft', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(27, 'Kuliner', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(28, 'Kuliner dan musik entertainment', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(29, 'Hukum', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(30, 'Konsultan Pajak', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(31, 'persewaan kantor, Virtual Office dan Jasa legalitas', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(32, 'Fashion & Mode', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(33, 'Manufaktur Tekstil', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(34, 'Konveksi', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(35, 'Industri Kimia', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(36, 'Fashion dan Property', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(37, 'Real Estate, Developer dan Property', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(38, 'periklanan out home', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(39, 'Percetakan', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(40, 'Jasa Penerbitan dan Percetakan', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(41, 'Event Organizer', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(42, 'EO party planner decoration', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(43, 'Fotografi', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(44, 'Jasa Kesehatan dan Kegiatan Sosial', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(45, 'Kecantikan', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(46, 'Pertambangan dan Penggalian', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(47, 'Pengeboran', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(48, 'Energy, Plant Assesment & Environmnet', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(49, 'Jasa Pendidikan', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(50, 'Jasa Konsultasi Manajemen & Training', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(51, 'Kesenian, Hiburan dan Rekreasi', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(52, 'Perhotelan', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(53, 'Jasa Keuangan dan Asuransi', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(54, 'otomotif roda 2', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(55, 'Bengkel Mekanik dan Jasa Mekanik', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(56, 'Supplier Mesin & Alat alat Teknik', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(57, 'Otomotif', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(58, 'Industri Mesin dan suku cadang', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(59, 'Transportasi dan Pergudangan', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(60, 'Creative Agency', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(61, 'Inkubator', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(62, 'Startup Ecosystem', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(63, 'Creative Production', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(64, 'Business office space', '2021-12-31 17:00:00', '2021-12-31 17:00:00');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Struktur dari tabel `pertanyaanumum`
--

CREATE TABLE `pertanyaanumum` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) DEFAULT NULL,
  `deskripsi` longtext,
  `nourut` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pertanyaanumum`
--

INSERT INTO `pertanyaanumum` (`id`, `judul`, `deskripsi`, `nourut`, `created_at`, `updated_at`) VALUES
(3, 'Bagaimana Cara Menjadi Anggota HIPMI?', '...', 1, '2022-09-13 10:57:01', '2022-09-13 10:57:01'),
(4, 'Bagaimana cara melihat informasi anggota HIPMI?', '...', 2, '2022-09-13 10:57:24', '2022-09-13 10:57:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `kategori` enum('slider','flyer') NOT NULL DEFAULT 'slider',
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id`, `gambar`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'slider1.png', 'slider', NULL, NULL),
(2, 'slider2.png', 'slider', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `susunanpengurus`
--

CREATE TABLE `susunanpengurus` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT 'blank.svg',
  `nourut` int(100) NOT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `periode` varchar(225) DEFAULT NULL,
  `kategori` enum('aktif','partner','riwayat') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `susunanpengurus`
--

INSERT INTO `susunanpengurus` (`id`, `nama`, `gambar`, `nourut`, `jabatan`, `periode`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Alfian Saniputra S.Kom', 'blank.svg', 1, 'ketua', NULL, 'partner', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(3, 'Muhammad Sumbi', 'HIPMI-Pengurus-1663059442.jpg', 1, 'Sekretariat Umum', '2007-2012', 'riwayat', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(4, 'Ahmad Fatin Sudoramos Siko Bagi Duo', 'HIPMI-Pengurus-1663060239.jpg', 2, 'Ketua Umum', '2019 - 2020', 'riwayat', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(5, 'Martin Garix', 'HIPMI-Pengurus-1663060298.jpg', 3, 'Ketua Umum', '2014-2022', 'riwayat', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(6, 'Sultan Hasanudin', 'HIPMI-Pengurus-1663060322.jpg', 4, 'Ketua Umum', '2019 - 2020', 'riwayat', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(7, 'Maruf Amin', 'HIPMI-Pengurus-1663060351.png', 5, 'Ketua Umum', '2001 - 2005', 'riwayat', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(8, 'Djalaludin Ahmad Hutapea', 'HIPMI-Pengurus-1663060384.jpg', 6, 'Ketua Umum', '2001 - 2005', 'riwayat', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(9, 'Jajang Koswara', 'HIPMI-Pengurus-1663060442.jpg', 2, 'Sekretariat Umum', '2023', 'aktif', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(10, 'Ningsih Bagja2', 'HIPMI-Pengurus-1663227096.jpg', 2, 'Ketua Umum2', '2023', 'aktif', '2021-12-31 17:00:00', '2022-09-15 07:33:02'),
(11, 'Kosasih Noer', 'HIPMI-Pengurus-1663227035.jpg', 1, 'sekretaris', '2023', 'aktif', '2021-12-31 17:00:00', '2022-09-15 07:30:35'),
(12, 'Herman', 'HIPMI-Pengurus-1663062817.jpg', 10, NULL, '2019 - 2020', 'riwayat', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(13, 'Mey Mey', 'HIPMI-Pengurus-1663062859.jpg', 5, 'Sekum', NULL, 'aktif', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(14, 'Amin', 'blank.svg', 2, 'Kabag Persidangan', NULL, 'partner', '2021-12-31 17:00:00', '2021-12-31 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('pengurus','anggota','admin') COLLATE utf8mb4_unicode_ci DEFAULT 'anggota',
  `photo` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT 'user.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'CV. Anugerah Alam2', 'anggota1@hipmibdg.org2', '0000-00-00 00:00:00', '$2y$10$CYsBY7HQjEXc3oCjU64tLO.jalSlcEnsvo8tUTmkyYHP/Zd9djtq.', NULL, 'anggota', 'pengguna-1663224734.jpg', '2021-12-31 17:00:00', '2022-09-15 06:52:14'),
(2, 'Cv. Fish ID', 'anggota2@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(3, 'PT. Yekoyo Pratama Yuriandi', 'anggota3@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(4, 'CV. Anugrah Parahyangan Jaya', 'anggota4@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(5, 'PT Bintang Timur Transindo', 'anggota5@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(6, 'cv yundian prastita', 'anggota6@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(7, 'Dillco Group Indonesia', 'anggota7@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(8, 'Sixplus Agrotech', 'anggota8@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(9, 'Hey Farm', 'anggota9@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(10, 'PT Batanghari Nusantara Indonesia', 'anggota10@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(11, 'PT Kazee Digital Indonesia', 'anggota11@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(12, 'PT Indokonten Sukses Makmur', 'anggota12@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(13, 'PT.Sahabat Pratama', 'anggota13@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(14, 'Pt. Inovindo digital media', 'anggota14@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(15, 'PT Lokapoin Kreasi Indonesia', 'anggota15@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(16, '-', 'anggota16@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(17, 'PT Laskar Teknologi Mulia', 'anggota17@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(18, 'PT. Titik Terang Teknologi', 'anggota18@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(19, 'PT. Langgeng Cipta Solusi', 'anggota19@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(20, 'Reka Informatika Digital', 'anggota20@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(21, 'PT. Mores Data Analitika', 'anggota21@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(22, 'CV Solusi Automasi Indonesia', 'anggota22@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(23, 'PT. Cintessa Tangkas Inovasi', 'anggota23@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(24, 'PT Setiap Hari Dipakai / Evermos Pte Ltd (Singapore)', 'anggota24@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(25, 'PT. Reyraka Dinasty', 'anggota25@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(26, 'noname', 'anggota26@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(27, 'CV Surya Artha Gemilang', 'anggota27@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(28, 'Koperasi Kesejahteraan Mahasiswa Bandung', 'anggota28@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(29, 'Koperasi KKMB', 'anggota29@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(30, 'cv patanjala lumbung raharja', 'anggota30@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(31, 'CV BERINGIN GROUP INDONESIA', 'anggota31@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(32, 'CV. PADJADJARAN INTI KREASINDO', 'anggota32@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(33, 'CV RAHADIAN GLOBALINDO', 'anggota33@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(34, 'Roar Clothier', 'anggota34@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(35, 'CV. Haluan Mas Utama', 'anggota35@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(36, 'Hotel Wisma Indonesia', 'anggota36@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(37, 'LiberBreed', 'anggota37@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(38, 'PT KONSTRUKSI TEKNOLOGI HARAPAN', 'anggota38@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(39, 'Berkreatif', 'anggota39@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(40, 'bina jaya scaffolding', 'anggota40@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(41, '-', 'anggota41@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(42, 'Pt. Suara sanara juara', 'anggota42@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(43, 'CV Kojo Group Indonesia', 'anggota43@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(44, 'PT Raas Solusi Indonesia', 'anggota44@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(45, 'CV. Pandawa Lima', 'anggota45@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(46, 'CV. Fahmi Jaya Trimandiri', 'anggota46@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(47, 'PT Rizki Anugrah Perkasa; PT Tekno Dirgantara Investama', 'anggota47@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(48, 'CV. KERSA CIPTA PRATAMA', 'anggota48@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(49, 'Cv. Bumi Raya Agung', 'anggota49@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(50, 'CV. SATU GARUDA', 'anggota50@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(51, 'PT. Csrhub Indonesia', 'anggota51@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(52, 'CV. Sembiring Ferdianza Utama', 'anggota52@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(53, 'WORKTOCREATE Interior Workshop', 'anggota53@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(54, 'CV. Jagat Lagang Santanu Geopraktika', 'anggota54@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(55, 'PT Konsep Rumah Indonesia', 'anggota55@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(56, 'PT. Almahyra Bumi Hijau Mandiri', 'anggota56@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(57, 'PT. DUXAY BANGUN PERSADA', 'anggota57@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(58, 'PT. Inovasi Berdayakan Bangsa', 'anggota58@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(59, 'CV.Pikirmikir', 'anggota59@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(60, 'PT. arkides asia', 'anggota60@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(61, 'CV. Esbi Project', 'anggota61@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(62, 'PT. Salma Akbar Cemerlang', 'anggota62@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(63, 'PT. Altairya karya interio', 'anggota63@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(64, 'CV. Mitra Inovasi Teknik', 'anggota64@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(65, 'PT Mandala Geoteknika Mandiri', 'anggota65@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(66, 'Sinar Galuh Pakuan', 'anggota66@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(67, 'PT. Mitra Abadi Barokah', 'anggota67@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(68, 'Ud. Jaya makmur setia', 'anggota68@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(69, 'PT. Trisapta Kabel Industri', 'anggota69@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(70, 'CV. Cahaya Sinar Berlian (CASIBER)', 'anggota70@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(71, 'Bintang Muda Wijaya. Corp', 'anggota71@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(72, 'BRILLIANS SINAR JAYA', 'anggota72@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(73, 'PT. Sinar Guna Makmur', 'anggota73@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(74, 'PT. Colorindo Aneka Warna', 'anggota74@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(75, 'PT Putra Putri Nugraha, PT Berkah Sebelas Binatu, PT Amanah Karya Sukirman', 'anggota75@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(76, 'PT. Aequalis Indonesia Raya', 'anggota76@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(77, 'Amanah Akhlak Mulia', 'anggota77@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(78, 'PT. CITRA ANUGRAH BHINEKAS', 'anggota78@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(79, 'Cv. Bandung Jaya Hose', 'anggota79@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(80, 'PT. Eunoia Jaya Gautama', 'anggota80@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(81, 'Alfa Niaga Store', 'anggota81@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(82, 'CV. Inovasi Santri Nusantara', 'anggota82@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(83, 'PT Infini Mulia Investama', 'anggota83@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(84, '-', 'anggota84@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(85, 'CV Dwitunggal Kreasi Bersama', 'anggota85@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(86, 'CV. Vierama', 'anggota86@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(87, '-', 'anggota87@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(88, 'Cv Pantai Indah', 'anggota88@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(89, 'Cv. Bau bawang', 'anggota89@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(90, 'CV.BABAKARAN/PT.MAJESTYANARAWATA', 'anggota90@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(91, 'PT . VINUSS OGAN JAYA', 'anggota91@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(92, 'Baso PuSiMa (Putra sido Mampir)', 'anggota92@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(93, 'Tahu hamil', 'anggota93@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(94, 'CV. Fajar Nugraha Abadi', 'anggota94@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(95, 'Dapur Kuweh', 'anggota95@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(96, 'Belum ada', 'anggota96@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(97, 'Restoran Ayam Sawce', 'anggota97@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(98, 'PT. Adhipramana Rasa Juara', 'anggota98@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(99, 'CV. Fikuri Business Indonesia', 'anggota99@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(100, 'Panache', 'anggota100@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(101, 'Kedai Kopi Saparasa', 'anggota101@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(102, 'PT. BITE Berkah sejahtera', 'anggota102@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(103, '-', 'anggota103@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(104, 'Mare Fruit Club', 'anggota104@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(105, 'CV. Garuda Mandiri Jaya', 'anggota105@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(106, 'Rajo Pempek', 'anggota106@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(107, 'Angkringan Serbu', 'anggota107@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(108, 'Papudi Indonesia', 'anggota108@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(109, 'CV. Sembiring Ferdianza Consulting', 'anggota109@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(110, 'Izin Praktik : KIP-5860/IP. B/PJ/2020', 'anggota110@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(111, 'PT SEJATI PUTRA MANDIRI', 'anggota111@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(112, 'CV. Kusuma Wijaya', 'anggota112@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(113, 'CV. Aryabhazda Bargo Internasional', 'anggota113@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(114, '-', 'anggota114@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(115, '-', 'anggota115@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(116, 'PT. Kawi Mekar', 'anggota116@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(117, 'CV Garuda Jaya Mandiri', 'anggota117@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(118, 'Menyusul', 'anggota118@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(119, 'JelitaClo', 'anggota119@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(120, 'Cv. alliyyin', 'anggota120@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(121, 'Kreativana Prima', 'anggota121@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(122, 'DHIFDAYS', 'anggota122@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(123, 'AFaza', 'anggota123@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(124, 'CV Bintang anugerah', 'anggota124@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(125, 'CV Indo Karya', 'anggota125@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(126, 'Kreasi pala nusantara', 'anggota126@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(127, 'Dama collection', 'anggota127@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(128, '(sedang proses)', 'anggota128@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(129, 'PT. Segilima corps', 'anggota129@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(130, 'CV. Cahaya Mulia Lestari', 'anggota130@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(131, 'RADIUZ INDONESIA', 'anggota131@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(132, 'PT. Enviro Citra Chikara', 'anggota132@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(133, 'CV. Kurnia Jaya', 'anggota133@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(134, 'difroseries.id', 'anggota134@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(135, 'PT Vorindo Inti Produk', 'anggota135@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(136, 'WETAN Empire', 'anggota136@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(137, 'Vorindo Inti Produk', 'anggota137@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(138, 'PT. Soerianata Indo Cipta (SNCO)', 'anggota138@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(139, 'PT ARSADELIA PUTRA PRATAMA', 'anggota139@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(140, 'Belum didaftarkan', 'anggota140@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(141, 'Mohaki Indonesia', 'anggota141@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(142, 'Karta Prabu Jaya', 'anggota142@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(143, 'CV Kojo Group Indonesia', 'anggota143@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(144, 'Naylatuhijab', 'anggota144@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(145, 'PT. Sinergi Citra Persada', 'anggota145@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(146, 'PT Anugrah Bintang Nirwana', 'anggota146@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(147, 'CV. Vision Pramaesindo', 'anggota147@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(148, 'Chesta Collection', 'anggota148@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(149, 'CV. Sepatu Kreasi Anak Bangsa', 'anggota149@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(150, 'Aracraft', 'anggota150@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(151, 'SKU/Peorangan', 'anggota151@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(152, 'PT. Bhumi Cipta Suwarna', 'anggota152@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(153, 'pt raja prima sumatera', 'anggota153@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(154, 'PT. Omah Berdikari Perkasa', 'anggota154@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(155, 'Cv. Wiradhika Land', 'anggota155@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(156, 'Pt. Tilford Pilar Santosa', 'anggota156@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(157, 'PT. Satria Ayu', 'anggota157@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(158, 'PT. Saba Wahyudi Sadajiwa', 'anggota158@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(159, 'CV. Geizco Mandiri', 'anggota159@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(160, 'PT. Urbaniaga Kreasi', 'anggota160@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(161, 'Arovala Property Management', 'anggota161@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(162, 'PT. Cipta Radarya Nusantara', 'anggota162@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(163, 'Indovationland', 'anggota163@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(164, 'PT Karya Sukses Propertindo', 'anggota164@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(165, 'PT. Cipta Radarya Nusantara', 'anggota165@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(166, 'MFA Group dan PT. Mandaka Bumi Sanjaya', 'anggota166@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(167, 'De Ruang', 'anggota167@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(168, 'Belum didaftarkan', 'anggota168@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(169, 'Cluster Hill n city', 'anggota169@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(170, 'PT Bandung Media Televisi Indonesia', 'anggota170@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(171, 'PT ARTHA SAVANA DIGITAL', 'anggota171@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(172, 'CV. Persona', 'anggota172@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(173, 'CV. Nuansa Cendekia', 'anggota173@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(174, 'Abinarada', 'anggota174@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(175, 'Mind-Set Creative Project', 'anggota175@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(176, 'PT. Aequalis Indonesia Raya', 'anggota176@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(177, 'Pijar Ideas', 'anggota177@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(178, 'Pt. Suara sanara juara', 'anggota178@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(179, 'PT. Arjuna Husada Madyatama', 'anggota179@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(180, 'Klinik dr Susan', 'anggota180@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(181, 'CV. Sendi Abdhi Karya', 'anggota181@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(182, 'Skin care', 'anggota182@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(183, 'MD Clinic', 'anggota183@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(184, 'Stacia Makeup Artistry', 'anggota184@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(185, 'PT Lingga Perkasa Nusantara', 'anggota185@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(186, 'PT. Manolo Putra', 'anggota186@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(187, 'PT Supra Indodrill, PT Tiga Medika Persada, Yayasan AIR', 'anggota187@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(188, 'PT. Mitra Kinerja Enjineering', 'anggota188@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(189, 'PT Cahaya Mutiara Bunda', 'anggota189@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(190, 'PT. Menara Fatih Indonesia', 'anggota190@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(191, 'pt das aviation training center', 'anggota191@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(192, 'Koperasi Jasa Insani Sumber Solusi', 'anggota192@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(193, 'Indonesiaflourish', 'anggota193@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(194, 'cv las vegas', 'anggota194@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(195, 'PT. Cihampelas Cerdas Mandiri', 'anggota195@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(196, 'Legacy Inc.', 'anggota196@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(197, 'PT SyarQ Solusi Indonesia', 'anggota197@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(198, 'Yourfinplan Consulting', 'anggota198@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(199, 'FM FACTORY', 'anggota199@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(200, 'Arsanjaya Teknik', 'anggota200@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(201, 'PT. Aftech Indonesia', 'anggota201@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(202, 'PT. FIN KOMODO TEKNOLOGI', 'anggota202@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(203, 'PT. Bima Sakti Tekindo', 'anggota203@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(204, 'PT Bina Keluarga Bersama Sejahtera', 'anggota204@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(205, 'PT. Mavens Studio Indonesia', 'anggota205@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(206, 'Yayasan EnergyLab Indonesia', 'anggota206@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(207, 'CO-LAB.ID', 'anggota207@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(208, 'CV. SLUG', 'anggota208@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(209, 'Skdu STARTUPCO', 'anggota209@hipmibdg.org', '0000-00-00 00:00:00', '$2y$10$9.a6M2TkAPNSzanst.yF5uR3.Glk/pmMAZNvEXpERZ0T3wuo60EUm', NULL, 'anggota', 'user.png', '2021-12-31 17:00:00', '2021-12-31 17:00:00'),
(210, 'administrator', 'admin@hipmibdg.org', '2022-09-01 07:50:43', '$2y$10$VAmyS6JPmDRMghWZOb53WeSCWjypoS/7Lh5yWA6/P6psD3TBZRmIa', 'Syvf0LGXu1hbETo96EgmDZFkqly2tfFL0rFamlHRwVCT9wLxIMi3W8sIj457', 'admin', 'user.png', '2021-12-31 17:00:00', '2022-09-15 07:06:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `banom`
--
ALTER TABLE `banom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `katalog_id` (`katalog_id`);

--
-- Indexes for table `cms_konten`
--
ALTER TABLE `cms_konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_tokens`
--
ALTER TABLE `email_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `master_bidang_usaha_id` (`master_bidang_usaha_id`);

--
-- Indexes for table `master_bidang_usaha`
--
ALTER TABLE `master_bidang_usaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `pertanyaanumum`
--
ALTER TABLE `pertanyaanumum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `susunanpengurus`
--
ALTER TABLE `susunanpengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `banom`
--
ALTER TABLE `banom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `cms_konten`
--
ALTER TABLE `cms_konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `email_tokens`
--
ALTER TABLE `email_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `master_bidang_usaha`
--
ALTER TABLE `master_bidang_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `pertanyaanumum`
--
ALTER TABLE `pertanyaanumum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `susunanpengurus`
--
ALTER TABLE `susunanpengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`katalog_id`) REFERENCES `katalog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `katalog`
--
ALTER TABLE `katalog`
  ADD CONSTRAINT `katalog_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `katalog_ibfk_2` FOREIGN KEY (`master_bidang_usaha_id`) REFERENCES `master_bidang_usaha` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
