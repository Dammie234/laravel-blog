-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 11, 2021 at 11:09 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` smallint(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `slug`, `count`, `created_at`, `updated_at`) VALUES
(1, 'Entertainment', NULL, 'entertainment', 2, '2021-11-10 14:52:43', '2021-11-11 17:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_11_09_220038_create_categories_table', 1),
(10, '2021_11_10_114442_create_posts_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 'Travis Scott to cover funeral costs of Astroworld tragedy victims', 'travis-scott-to-cover-funeral-costs-of-astroworld-tragedy-victims', '<p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, Georgia, &quot;Times New Roman&quot;, serif; font-size: 24px; letter-spacing: 0.3px;\">American rapper, Travis Scott, has pledged to cover all funeral costs of victims who died at his Astroworld Festival on Friday.</p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, Georgia, &quot;Times New Roman&quot;, serif; font-size: 24px; letter-spacing: 0.3px;\">This was made known in a statement released by the producer’s team on Monday, the CNN reported.</p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, Georgia, &quot;Times New Roman&quot;, serif; font-size: 24px; letter-spacing: 0.3px;\">Members of a densely packed crowd surged toward a stage and were crushed against each other during Scott’s concert on Friday, leading to the death of at least eight people while scores of others were injured in the chaos, according to witnesses.</p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, Georgia, &quot;Times New Roman&quot;, serif; font-size: 24px; letter-spacing: 0.3px;\">In addition to the payment of the funeral costs, Scott will also partner with a medical facility to offer mental health services to those who have been affected by the tragedy.</p><div class=\"avantis-incontent\" style=\"box-sizing: inherit; color: rgb(34, 34, 34); font-family: Alegreya, &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, Georgia, &quot;Times New Roman&quot;, serif; font-size: 24px; letter-spacing: 0.3px;\"></div><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, Georgia, &quot;Times New Roman&quot;, serif; font-size: 24px; letter-spacing: 0.3px;\">The facility, known as BetterHelp, through this partnership, will offer itse mental health services free-of-charge.</p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, Georgia, &quot;Times New Roman&quot;, serif; font-size: 24px; letter-spacing: 0.3px;\">The statement read, “Travis remains in active conversations with the city of Houston, law enforcement and local first responders to respectfully and appropriately connect with the individuals and families of those involved.</p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, Georgia, &quot;Times New Roman&quot;, serif; font-size: 24px; letter-spacing: 0.3px;\">“These are the first of many steps Travis plans on taking as a part of his personal vow to assist those affected throughout their grieving and recovery process.”</p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, Georgia, &quot;Times New Roman&quot;, serif; font-size: 24px; letter-spacing: 0.3px;\">Also, Astroworld organisers have vowed to fully refund all ticket holders of the show; the Friday attendees and those who paid for Saturday’s canceled events.</p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, Georgia, &quot;Times New Roman&quot;, serif; font-size: 24px; letter-spacing: 0.3px;\">Scott, a native of Houston, has multiple philanthropic projects in the community geared toward providing resources to youths in the city.</p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, Georgia, &quot;Times New Roman&quot;, serif; font-size: 24px; letter-spacing: 0.3px;\">The third annual festival, part of a week of charitable activities where Scott and partners unveiled several education and park beautification projects, is named after his 2018 album “Astroworld.”</p>', '20211110213127.jpg', '2021-11-10 20:31:27', '2021-11-10 20:31:27'),
(4, 1, 2, 'Actor Paul Rudd named People’s sexiest man alive', 'actor-paul-rudd-named-peoples-sexiest-man-alive', 'American actor, Paul Rudd, has been named the 2021 sexiest man alive by People’s magazine on Wednesday.<p></p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, \" palatino=\"\" linotype\",=\"\" \"book=\"\" antiqua\",=\"\" palatino,=\"\" georgia,=\"\" \"times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 24px;=\"\" letter-spacing:=\"\" 0.3px;\"=\"\">The 52-year-old actor who graced the front page of People’s magazine stated that he was having a hard time accepting his new title. However, he maintained that he’d own the crown.</p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, \" palatino=\"\" linotype\",=\"\" \"book=\"\" antiqua\",=\"\" palatino,=\"\" georgia,=\"\" \"times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 24px;=\"\" letter-spacing:=\"\" 0.3px;\"=\"\">“I’m going to lean into it hard. I’m going to own this,” Rudd said.</p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, \" palatino=\"\" linotype\",=\"\" \"book=\"\" antiqua\",=\"\" palatino,=\"\" georgia,=\"\" \"times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 24px;=\"\" letter-spacing:=\"\" 0.3px;\"=\"\">He also expressed surprise at his new title, stating that they are many people who should have gotten the crown before him.</p><div class=\"avantis-incontent\" style=\"box-sizing: inherit; color: rgb(34, 34, 34); font-family: Alegreya, \" palatino=\"\" linotype\",=\"\" \"book=\"\" antiqua\",=\"\" palatino,=\"\" georgia,=\"\" \"times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 24px;=\"\" letter-spacing:=\"\" 0.3px;\"=\"\"></div><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, \" palatino=\"\" linotype\",=\"\" \"book=\"\" antiqua\",=\"\" palatino,=\"\" georgia,=\"\" \"times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 24px;=\"\" letter-spacing:=\"\" 0.3px;\"=\"\">“This is not false humility. There are so many people that should get this before me,” he told&nbsp;<em style=\"box-sizing: inherit;\">People</em>&nbsp;during an interview.</p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, \" palatino=\"\" linotype\",=\"\" \"book=\"\" antiqua\",=\"\" palatino,=\"\" georgia,=\"\" \"times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 24px;=\"\" letter-spacing:=\"\" 0.3px;\"=\"\">With this feat, the Antman actor has bagged one of the most coveted titles in Hollywood, joining the league of past title holders like Idris Elba, George Clooney, Brad Pitt, Michael Jordan, and others.</p><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, \" palatino=\"\" linotype\",=\"\" \"book=\"\" antiqua\",=\"\" palatino,=\"\" georgia,=\"\" \"times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 24px;=\"\" letter-spacing:=\"\" 0.3px;\"=\"\">Speaking on the opportunities that come with the title, Rodd said, “I’m hoping now that I’ll finally be invited to some of those sexy dinners with Clooney and Pitt and B Jordan. And I figure I’ll be on a lot more yachts. I’m excited to expand my yachting life.</p><div class=\"ad-container ad-container-adsense\" style=\"box-sizing: inherit; margin-top: 1.5em; margin-bottom: 1.5em; max-width: calc(100vw - 1.25rem); color: rgb(34, 34, 34); font-family: Alegreya, \" palatino=\"\" linotype\",=\"\" \"book=\"\" antiqua\",=\"\" palatino,=\"\" georgia,=\"\" \"times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 24px;=\"\" letter-spacing:=\"\" 0.3px;\"=\"\"><div class=\"ad-adsense\" style=\"box-sizing: inherit; min-height: 350px; margin: 20px 0px;\"><span style=\"font-size: 0.88rem;\">“And I’ll probably try to get better at brooding in really soft light. I like to ponder. I think this is going to help me become more inward and mysterious. And I’m looking forward to that.”</span><ins class=\"adsbygoogle\" data-ad-client=\"ca-pub-7167863529667065\" data-ad-slot=\"7746968165\" data-ad-format=\"auto\" style=\"box-sizing: inherit; background: rgb(255, 249, 192); text-decoration-line: none; display: block;\"></ins></div></div><p style=\"box-sizing: inherit; margin-bottom: 0.75em; margin-top: 0.75em; color: rgb(34, 34, 34); font-family: Alegreya, \" palatino=\"\" linotype\",=\"\" \"book=\"\" antiqua\",=\"\" palatino,=\"\" georgia,=\"\" \"times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 24px;=\"\" letter-spacing:=\"\" 0.3px;=\"\" text-align:=\"\" justify;\"=\"\"><br></p>\"&gt;', '20211111182309.jpg', '2021-11-11 17:23:09', '2021-11-11 19:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(4) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'joy.dammie@gmail.com', '2021-11-10 14:52:11', 1, '$2y$10$clOlokARByFUSjNnk2s1C.LKHWnZLQV/N7R4cbrRN/3SiSUY5ZzuG', NULL, '2021-11-10 14:51:19', '2021-11-10 14:52:11'),
(2, 'Damilare Odusanya', 'joy.dammie@yahoo.com', '2021-11-11 16:37:31', 2, '$2y$10$WQBGRXONTXLY6YCtjJrWzuMmyLKvOxlVQkw8RDdXED5.B0AxTXSCS', NULL, '2021-11-11 16:36:24', '2021-11-11 16:37:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
