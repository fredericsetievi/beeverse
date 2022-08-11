-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 06:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beeverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatars`
--

CREATE TABLE `avatars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avatars`
--

INSERT INTO `avatars` (`id`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'avatar-1.jpg', 500, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(2, 'avatar-2.jpg', 1500, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(3, 'avatar-3.jpg', 50, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(4, 'avatar-4.jpg', 57500, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(5, 'avatar-5.jpg', 8900, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(6, 'avatar-6.jpg', 100000, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(7, 'avatar-7.jpg', 3415, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(8, 'avatar-8.jpg', 100, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(9, 'avatar-9.jpg', 17500, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(10, 'avatar-10.jpg', 3900, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(11, 'avatar-11.jpg', 2910, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(12, 'avatar-12.jpg', 70000, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(13, 'avatar-13.jpg', 530, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(14, 'avatar-14.jpg', 145, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(15, 'avatar-15.jpg', 80, '2022-08-11 12:11:22', '2022-08-11 12:11:22'),
(16, 'avatar-16.jpg', 1100, '2022-08-11 12:11:23', '2022-08-11 12:11:23'),
(17, 'avatar-17.jpg', 1900, '2022-08-11 12:11:23', '2022-08-11 12:11:23'),
(18, 'avatar-18.jpg', 7700, '2022-08-11 12:11:23', '2022-08-11 12:11:23'),
(19, 'avatar-19.jpg', 9800, '2022-08-11 12:11:23', '2022-08-11 12:11:23'),
(20, 'avatar-20.jpg', 43000, '2022-08-11 12:11:23', '2022-08-11 12:11:23'),
(21, 'avatar-21.jpg', 9990, '2022-08-11 12:11:23', '2022-08-11 12:11:23'),
(22, 'avatar-22.jpg', 31700, '2022-08-11 12:11:23', '2022-08-11 12:11:23'),
(23, 'avatar-23.jpg', 200, '2022-08-11 12:11:23', '2022-08-11 12:11:23'),
(24, 'avatar-24.jpg', 95, '2022-08-11 12:11:23', '2022-08-11 12:11:23'),
(25, 'avatar-25.jpg', 750, '2022-08-11 12:11:23', '2022-08-11 12:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sending_user_id` bigint(20) UNSIGNED NOT NULL,
  `receiving_user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `sending_user_id`, `receiving_user_id`, `message`, `image`, `created_at`, `updated_at`) VALUES
(1, 5, 4, 'halo frederic!', NULL, '2022-08-11 16:12:20', '2022-08-11 16:12:20'),
(2, 5, 4, 'salam kenal ya, aku irene', NULL, '2022-08-11 16:12:28', '2022-08-11 16:12:28'),
(3, 5, 4, 'keren ya ini, menurutmu gimana?', 'chat1660234374.jpg', '2022-08-11 16:12:54', '2022-08-11 16:12:54'),
(4, 4, 5, 'halo irene', NULL, '2022-08-11 16:13:01', '2022-08-11 16:13:01'),
(5, 4, 5, 'wah keren banget, itu rumah di film parasite bukan?', NULL, '2022-08-11 16:13:16', '2022-08-11 16:13:16'),
(6, 5, 4, 'iya benar sekali!', NULL, '2022-08-11 16:13:24', '2022-08-11 16:13:24');

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
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `name_en`, `name_id`, `created_at`, `updated_at`) VALUES
(1, 'Fishing', 'Memancing', '2022-08-11 12:11:09', '2022-08-11 12:11:09'),
(2, 'Cooking', 'Memasak', '2022-08-11 12:11:09', '2022-08-11 12:11:09'),
(3, 'Photography', 'Fotografi', '2022-08-11 12:11:10', '2022-08-11 12:11:10'),
(4, 'Singing', 'Menyanyi', '2022-08-11 12:11:10', '2022-08-11 12:11:10'),
(5, 'Traveling', 'Jalan-jalan', '2022-08-11 12:11:10', '2022-08-11 12:11:10'),
(6, 'Reading', 'Membaca', '2022-08-11 12:11:10', '2022-08-11 12:11:10'),
(7, 'Writing', 'Menulis', '2022-08-11 12:11:11', '2022-08-11 12:11:11'),
(8, 'Watching', 'Menonton', '2022-08-11 12:11:11', '2022-08-11 12:11:11'),
(9, 'Playing Game', 'Bermain Game', '2022-08-11 12:11:11', '2022-08-11 12:11:11'),
(10, 'Playing Music', 'Bermain Musik', '2022-08-11 12:11:12', '2022-08-11 12:11:12'),
(11, 'Swimming', 'Berenang', '2022-08-11 12:11:12', '2022-08-11 12:11:12'),
(12, 'Coding', 'Membuat Aplikasi', '2022-08-11 12:11:12', '2022-08-11 12:11:12'),
(13, 'Dancing', 'Menari', '2022-08-11 12:11:12', '2022-08-11 12:11:12'),
(14, 'Diving', 'Menyelam', '2022-08-11 12:11:13', '2022-08-11 12:11:13'),
(15, 'Drawing', 'Menggambar', '2022-08-11 12:11:13', '2022-08-11 12:11:13'),
(16, 'Sports', 'Olahraga', '2022-08-11 12:11:13', '2022-08-11 12:11:13'),
(17, 'Gardening', 'Berkebun', '2022-08-11 12:11:13', '2022-08-11 12:11:13'),
(18, 'Video Editing', 'Mengedit Video', '2022-08-11 12:11:13', '2022-08-11 12:11:13'),
(19, 'Handcrafting', 'Membuat Kerajinan', '2022-08-11 12:11:13', '2022-08-11 12:11:13'),
(20, 'Knitting', 'Merajut', '2022-08-11 12:11:14', '2022-08-11 12:11:14'),
(21, 'Chess', 'Bermain Catur', '2022-08-11 12:11:14', '2022-08-11 12:11:14'),
(22, 'Card Games', 'Bermain Kartu', '2022-08-11 12:11:14', '2022-08-11 12:11:14'),
(23, 'Collecting Things', 'Mengumpulkan Barang', '2022-08-11 12:11:14', '2022-08-11 12:11:14'),
(24, 'Meditation', 'Meditasi', '2022-08-11 12:11:14', '2022-08-11 12:11:14'),
(25, 'Study', 'Belajar', '2022-08-11 12:11:15', '2022-08-11 12:11:15'),
(26, 'Yoga', 'Yoga', '2022-08-11 12:11:15', '2022-08-11 12:11:15');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_08_08_000000_create_users_table', 1),
(5, '2022_08_08_043052_create_hobbies_table', 1),
(6, '2022_08_08_044826_create_user_hobbies_table', 1),
(7, '2022_08_08_051754_create_wishlists_table', 1),
(8, '2022_08_08_052037_create_chats_table', 1),
(9, '2022_08_08_063841_create_avatars_table', 1),
(10, '2022_08_08_063956_create_user_avatars_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `registration_price` int(11) NOT NULL,
  `coin` int(11) NOT NULL DEFAULT 0,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bin_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `phone`, `dob`, `registration_price`, `coin`, `instagram`, `image`, `bin_image`, `email`, `email_verified_at`, `password`, `visible`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Mayler', 'Male', '6289613465413', '1984-06-28', 125000, 100, 'http://www.instagram.com/john_mayler', 'user-1.jpg', NULL, 'johnmayler@gmail.com', NULL, '$2y$10$UDtWWX5timR2yKirIKOQT.p4J9mwfB4xwYCheZCvLWvliHiwrBEZ6', 1, NULL, '2022-08-11 12:11:06', '2022-08-11 12:11:06'),
(2, 'Jenny Perry O', 'Female', '628961348810', '1999-04-21', 120100, 160, 'http://www.instagram.com/jenny_p_o_', 'user-2.jpg', NULL, 'jenny.perry.o@gmail.com', NULL, '$2y$10$R6kbn6DeuYe9CQxQoOE2muST8lVg8xuX.FAG88tngY/UivrOSXO2O', 1, NULL, '2022-08-11 12:11:06', '2022-08-11 12:11:06'),
(3, 'Maria Zelensky', 'Female', '6289613457800', '2000-09-28', 110400, 170, 'http://www.instagram.com/maria_zelensky', 'user-3.jpg', NULL, 'mariazelensky@gmail.com', NULL, '$2y$10$IVRqLDBmED4Sd6wFQxz8zOSx3.G1iFUvTFJCSZQh49SzD7XenvxV6', 1, NULL, '2022-08-11 12:11:06', '2022-08-11 12:11:06'),
(4, 'Frederic Setievi', 'Male', '6289613468804', '2002-08-06', 100000, 200, 'http://www.instagram.com/frederic_s_', 'user-4.jpg', NULL, 'fredericsetievi@gmail.com', NULL, '$2y$10$l8OynE4kdRe2fSv06NsCG.2dwtaN07YgC/3TBf1qorr3xCMvRF3Fa', 1, NULL, '2022-08-11 12:11:07', '2022-08-11 12:11:07'),
(5, 'Irene S', 'Female', '6289613401354', '2001-10-13', 116000, 50, 'http://www.instagram.com/irene_s', 'user-5.jpg', NULL, 'irene@gmail.com', NULL, '$2y$10$mmN0Bd8ldHUU61XAtqIt0eKx5M0DkD9p7dPkRaylUibBCpxEWgU7C', 1, NULL, '2022-08-11 12:11:07', '2022-08-11 12:11:07'),
(6, 'Ricardo Emanuel', 'Male', '6289613401123', '1989-12-27', 118610, 80, 'http://www.instagram.com/ricard_e_', 'user-6.jpg', NULL, 'ricardo.emanuel@gmail.com', NULL, '$2y$10$pJT98uYENaAHkdsHfCa2Yef.hxAssj6XwbZgHR/zGfbF5sS3egRMy', 1, NULL, '2022-08-11 12:11:07', '2022-08-11 12:11:07'),
(7, 'Paula Wee', 'Female', '6289703408799', '1994-02-11', 121210, 98, 'http://www.instagram.com/paula_wee', 'user-7.jpg', NULL, 'paula.wee@gmail.com', NULL, '$2y$10$IhButDCRfWeEbIj0SWY/duFNGIacr8frtJfO956UXXZcApui6cqJy', 1, NULL, '2022-08-11 12:11:07', '2022-08-11 12:11:07'),
(8, 'Sita lim', 'Female', '6289703407614', '1987-08-10', 121321, 70, 'http://www.instagram.com/sita_lim', 'user-8.jpg', NULL, 'sita.lim@gmail.com', NULL, '$2y$10$t/Tn.3i6Sx.fe7yuzzdjzu/FEvRg7PerE6FVDXYAZaiF64f9KecQO', 1, NULL, '2022-08-11 12:11:08', '2022-08-11 16:22:00'),
(9, 'Evan max', 'Male', '6289709878799', '1992-10-13', 123210, 65, 'http://www.instagram.com/max_evan', 'user-9.jpg', NULL, 'evanmax@gmail.com', NULL, '$2y$10$7OjAtUs0O7goHR1W3l8ZgOvkl.oI83NpmDHsGNeEPOhrMRlb2QB1.', 1, NULL, '2022-08-11 12:11:08', '2022-08-11 12:11:08'),
(10, 'Maxi fernando', 'Male', '6289709814563', '1992-12-13', 110213, 130, 'http://www.instagram.com/fernandomax', 'user-10.jpg', NULL, 'maxifernando@gmail.com', NULL, '$2y$10$0BMDWBASLfw3xCaR7WclH.bkjBv09QkkdTKJKgw7mya6iZT9TzEF.', 1, NULL, '2022-08-11 12:11:08', '2022-08-11 12:11:08'),
(11, 'Andrew Colin', 'Male', '6289732578799', '2000-11-05', 119640, 90, 'http://www.instagram.com/andrewww', 'user-11.jpg', NULL, 'andrewcolin@gmail.com', NULL, '$2y$10$tTD0YqRnBz.hs2GwvaxhMuBI13n/7s7AdRorY4zN.DRXQjyDdX7Iq', 1, NULL, '2022-08-11 12:11:08', '2022-08-11 16:21:06'),
(12, 'Sendi effendi', 'Male', '6289787353999', '2001-06-21', 120710, 44, 'http://www.instagram.com/effendisendi', 'user-12.jpg', NULL, 'sendieffendi@gmail.com', NULL, '$2y$10$Hn9GZotMAe.o061tWwTM/uIaRnnsqVwYkbrMoQ/6A0pghtP7hDxze', 1, NULL, '2022-08-11 12:11:09', '2022-08-11 12:11:09'),
(13, 'Yusak andani', 'Male', '6289732786145', '2002-04-29', 102657, 89, 'http://www.instagram.com/yusak_anda', 'user-13.jpg', NULL, 'andaniyusak@gmail.com', NULL, '$2y$10$ADvGjrlg.W2Y3oj7Y.sYfOj13PynrNAeqrhpM3isXXnDZaFj4i7f2', 1, NULL, '2022-08-11 12:11:09', '2022-08-11 12:11:09'),
(14, 'Rudi lang', 'Male', '6289709972591', '1996-06-30', 109900, 92, 'http://www.instagram.com/rudii_lang', 'user-14.jpg', NULL, 'rudilang@gmail.com', NULL, '$2y$10$8C1xN2y9kTcJb93GL3GaVu9e8IQeWUuEsCQaxdDilGoIn0w3FRiTy', 1, NULL, '2022-08-11 12:11:09', '2022-08-11 12:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_avatars`
--

CREATE TABLE `user_avatars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `avatar_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_avatars`
--

INSERT INTO `user_avatars` (`id`, `user_id`, `avatar_id`, `created_at`, `updated_at`) VALUES
(1, 1, 7, '2022-08-11 12:11:23', '2022-08-11 12:11:23'),
(2, 1, 8, '2022-08-11 12:11:23', '2022-08-11 12:11:23'),
(3, 1, 10, '2022-08-11 12:11:23', '2022-08-11 12:11:23'),
(4, 2, 1, '2022-08-11 12:11:24', '2022-08-11 12:11:24'),
(5, 2, 12, '2022-08-11 12:11:24', '2022-08-11 12:11:24'),
(6, 2, 5, '2022-08-11 12:11:24', '2022-08-11 12:11:24'),
(7, 2, 7, '2022-08-11 12:11:24', '2022-08-11 12:11:24'),
(8, 3, 2, '2022-08-11 12:11:24', '2022-08-11 12:11:24'),
(9, 3, 8, '2022-08-11 12:11:24', '2022-08-11 12:11:24'),
(10, 3, 14, '2022-08-11 12:11:24', '2022-08-11 12:11:24'),
(11, 3, 16, '2022-08-11 12:11:24', '2022-08-11 12:11:24'),
(12, 3, 1, '2022-08-11 12:11:24', '2022-08-11 12:11:24'),
(13, 3, 7, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(14, 4, 11, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(15, 4, 18, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(16, 4, 25, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(17, 4, 4, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(18, 4, 13, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(19, 5, 12, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(20, 5, 9, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(21, 5, 4, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(22, 5, 7, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(23, 5, 19, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(24, 6, 16, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(25, 6, 4, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(26, 6, 6, '2022-08-11 12:11:25', '2022-08-11 12:11:25'),
(27, 7, 25, '2022-08-11 12:11:26', '2022-08-11 12:11:26'),
(28, 7, 16, '2022-08-11 12:11:26', '2022-08-11 12:11:26'),
(29, 7, 7, '2022-08-11 12:11:26', '2022-08-11 12:11:26'),
(30, 7, 5, '2022-08-11 12:11:26', '2022-08-11 12:11:26'),
(31, 8, 4, '2022-08-11 12:11:27', '2022-08-11 12:11:27'),
(32, 8, 17, '2022-08-11 12:11:27', '2022-08-11 12:11:27'),
(33, 8, 22, '2022-08-11 12:11:27', '2022-08-11 12:11:27'),
(34, 8, 13, '2022-08-11 12:11:27', '2022-08-11 12:11:27'),
(35, 8, 12, '2022-08-11 12:11:27', '2022-08-11 12:11:27'),
(36, 9, 4, '2022-08-11 12:11:27', '2022-08-11 12:11:27'),
(37, 9, 17, '2022-08-11 12:11:27', '2022-08-11 12:11:27'),
(38, 9, 25, '2022-08-11 12:11:27', '2022-08-11 12:11:27'),
(39, 9, 8, '2022-08-11 12:11:27', '2022-08-11 12:11:27'),
(40, 9, 11, '2022-08-11 12:11:27', '2022-08-11 12:11:27'),
(41, 11, 10, '2022-08-11 12:11:28', '2022-08-11 12:11:28'),
(42, 11, 13, '2022-08-11 12:11:28', '2022-08-11 12:11:28'),
(43, 11, 5, '2022-08-11 12:11:28', '2022-08-11 12:11:28'),
(44, 11, 12, '2022-08-11 12:11:28', '2022-08-11 12:11:28'),
(45, 12, 12, '2022-08-11 12:11:28', '2022-08-11 12:11:28'),
(46, 12, 10, '2022-08-11 12:11:28', '2022-08-11 12:11:28'),
(47, 12, 6, '2022-08-11 12:11:28', '2022-08-11 12:11:28'),
(48, 12, 4, '2022-08-11 12:11:28', '2022-08-11 12:11:28'),
(49, 12, 1, '2022-08-11 12:11:28', '2022-08-11 12:11:28'),
(50, 13, 3, '2022-08-11 12:11:29', '2022-08-11 12:11:29'),
(51, 13, 8, '2022-08-11 12:11:29', '2022-08-11 12:11:29'),
(52, 13, 1, '2022-08-11 12:11:29', '2022-08-11 12:11:29'),
(53, 13, 17, '2022-08-11 12:11:30', '2022-08-11 12:11:30'),
(54, 14, 7, '2022-08-11 12:11:30', '2022-08-11 12:11:30'),
(55, 14, 19, '2022-08-11 12:11:30', '2022-08-11 12:11:30'),
(56, 14, 4, '2022-08-11 12:11:30', '2022-08-11 12:11:30'),
(57, 14, 5, '2022-08-11 12:11:31', '2022-08-11 12:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_hobbies`
--

CREATE TABLE `user_hobbies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hobby_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_hobbies`
--

INSERT INTO `user_hobbies` (`id`, `user_id`, `hobby_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2022-08-11 12:11:15', '2022-08-11 12:11:15'),
(2, 1, 7, '2022-08-11 12:11:15', '2022-08-11 12:11:15'),
(3, 1, 10, '2022-08-11 12:11:15', '2022-08-11 12:11:15'),
(4, 1, 24, '2022-08-11 12:11:16', '2022-08-11 12:11:16'),
(5, 2, 1, '2022-08-11 12:11:16', '2022-08-11 12:11:16'),
(6, 2, 13, '2022-08-11 12:11:16', '2022-08-11 12:11:16'),
(7, 2, 17, '2022-08-11 12:11:16', '2022-08-11 12:11:16'),
(8, 2, 9, '2022-08-11 12:11:16', '2022-08-11 12:11:16'),
(9, 3, 13, '2022-08-11 12:11:16', '2022-08-11 12:11:16'),
(10, 3, 11, '2022-08-11 12:11:16', '2022-08-11 12:11:16'),
(11, 3, 7, '2022-08-11 12:11:17', '2022-08-11 12:11:17'),
(12, 3, 4, '2022-08-11 12:11:17', '2022-08-11 12:11:17'),
(13, 4, 9, '2022-08-11 12:11:17', '2022-08-11 12:11:17'),
(14, 4, 11, '2022-08-11 12:11:18', '2022-08-11 12:11:18'),
(15, 4, 7, '2022-08-11 12:11:18', '2022-08-11 12:11:18'),
(16, 4, 17, '2022-08-11 12:11:19', '2022-08-11 12:11:19'),
(17, 4, 22, '2022-08-11 12:11:19', '2022-08-11 12:11:19'),
(18, 5, 7, '2022-08-11 12:11:19', '2022-08-11 12:11:19'),
(19, 5, 9, '2022-08-11 12:11:19', '2022-08-11 12:11:19'),
(20, 5, 11, '2022-08-11 12:11:19', '2022-08-11 12:11:19'),
(21, 5, 18, '2022-08-11 12:11:19', '2022-08-11 12:11:19'),
(22, 6, 18, '2022-08-11 12:11:19', '2022-08-11 12:11:19'),
(23, 6, 5, '2022-08-11 12:11:19', '2022-08-11 12:11:19'),
(24, 6, 23, '2022-08-11 12:11:19', '2022-08-11 12:11:19'),
(25, 6, 25, '2022-08-11 12:11:20', '2022-08-11 12:11:20'),
(26, 7, 8, '2022-08-11 12:11:20', '2022-08-11 12:11:20'),
(27, 7, 12, '2022-08-11 12:11:20', '2022-08-11 12:11:20'),
(28, 7, 13, '2022-08-11 12:11:20', '2022-08-11 12:11:20'),
(29, 7, 16, '2022-08-11 12:11:20', '2022-08-11 12:11:20'),
(32, 9, 1, '2022-08-11 12:11:20', '2022-08-11 12:11:20'),
(33, 9, 10, '2022-08-11 12:11:20', '2022-08-11 12:11:20'),
(34, 9, 17, '2022-08-11 12:11:20', '2022-08-11 12:11:20'),
(35, 10, 1, '2022-08-11 12:11:20', '2022-08-11 12:11:20'),
(36, 10, 17, '2022-08-11 12:11:20', '2022-08-11 12:11:20'),
(37, 10, 5, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(38, 10, 6, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(39, 12, 2, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(40, 12, 8, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(41, 12, 17, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(42, 13, 5, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(43, 13, 9, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(44, 13, 22, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(45, 14, 8, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(46, 14, 21, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(47, 14, 16, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(48, 14, 26, '2022-08-11 12:11:21', '2022-08-11 12:11:21'),
(49, 11, 4, '2022-08-11 16:21:06', '2022-08-11 16:21:06'),
(50, 11, 6, '2022-08-11 16:21:06', '2022-08-11 16:21:06'),
(51, 11, 7, '2022-08-11 16:21:06', '2022-08-11 16:21:06'),
(52, 11, 11, '2022-08-11 16:21:06', '2022-08-11 16:21:06'),
(53, 11, 13, '2022-08-11 16:21:06', '2022-08-11 16:21:06'),
(54, 8, 4, '2022-08-11 16:22:01', '2022-08-11 16:22:01'),
(55, 8, 6, '2022-08-11 16:22:01', '2022-08-11 16:22:01'),
(56, 8, 7, '2022-08-11 16:22:01', '2022-08-11 16:22:01'),
(57, 8, 11, '2022-08-11 16:22:02', '2022-08-11 16:22:02'),
(58, 8, 14, '2022-08-11 16:22:02', '2022-08-11 16:22:02'),
(59, 8, 24, '2022-08-11 16:22:02', '2022-08-11 16:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_liked_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `user_liked_id`, `created_at`, `updated_at`) VALUES
(1, 4, 5, '2022-08-11 16:10:05', '2022-08-11 16:10:05'),
(2, 5, 4, '2022-08-11 16:10:07', '2022-08-11 16:10:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_sending_user_id_foreign` (`sending_user_id`),
  ADD KEY `chats_receiving_user_id_foreign` (`receiving_user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
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
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `user_avatars`
--
ALTER TABLE `user_avatars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_avatars_user_id_foreign` (`user_id`),
  ADD KEY `user_avatars_avatar_id_foreign` (`avatar_id`);

--
-- Indexes for table `user_hobbies`
--
ALTER TABLE `user_hobbies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_hobbies_user_id_foreign` (`user_id`),
  ADD KEY `user_hobbies_hobby_id_foreign` (`hobby_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_user_liked_id_foreign` (`user_liked_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_avatars`
--
ALTER TABLE `user_avatars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user_hobbies`
--
ALTER TABLE `user_hobbies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_receiving_user_id_foreign` FOREIGN KEY (`receiving_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `chats_sending_user_id_foreign` FOREIGN KEY (`sending_user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_avatars`
--
ALTER TABLE `user_avatars`
  ADD CONSTRAINT `user_avatars_avatar_id_foreign` FOREIGN KEY (`avatar_id`) REFERENCES `avatars` (`id`),
  ADD CONSTRAINT `user_avatars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_hobbies`
--
ALTER TABLE `user_hobbies`
  ADD CONSTRAINT `user_hobbies_hobby_id_foreign` FOREIGN KEY (`hobby_id`) REFERENCES `hobbies` (`id`),
  ADD CONSTRAINT `user_hobbies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `wishlists_user_liked_id_foreign` FOREIGN KEY (`user_liked_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
