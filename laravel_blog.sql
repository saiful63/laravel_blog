-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2023 at 11:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` tinyint(4) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `order_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Computer', 'computer', 1, 1, '2023-08-17 20:03:26', '2023-08-17 20:03:26'),
(2, 'Mobile', 'mobile', 3, 1, '2023-08-17 20:03:43', '2023-08-18 04:01:38'),
(3, 'Life Style', 'life-style', 4, 1, '2023-08-19 19:43:24', '2023-08-19 19:43:38'),
(4, 'Programming', 'programming', 5, 1, '2023-08-22 04:25:46', '2023-08-22 04:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `number`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'saiful', 'student@gmail.com', '01848317007', 'kl', 'kjjjj', '2023-09-04 03:09:48', '2023-09-04 03:09:48'),
(2, 'saiful', 'student@gmail.com', '01848317007', 'kl', 'kjjjj', '2023-09-04 03:16:55', '2023-09-04 03:16:55'),
(3, 'sajidrahman', 'admin@gmail.com', '01848315007', 'iu', 'hj', '2023-09-04 03:17:19', '2023-09-04 03:17:19'),
(4, 'Super Admin', 'teacher@gmail.com', '01848315007', 'iu', 'jk', '2023-09-04 03:19:05', '2023-09-04 03:19:05'),
(5, 'sajidrahman', 'student@gmail.com', '01848315007', 'kl', 'n', '2023-09-04 03:26:57', '2023-09-04 03:26:57'),
(6, 'sajidrahman', 'saiful@gmail.com', '01848317007', 'kl', 'l', '2023-09-04 03:28:29', '2023-09-04 03:28:29'),
(7, 'Super Admin', 'admin@gmail.com', '01848315007', 'iu', 'jn', '2023-09-04 03:39:52', '2023-09-04 03:39:52'),
(8, 'Life Style', 'asad@gmail.com', '01848315047', 'kl', 'nb', '2023-09-04 03:40:16', '2023-09-04 03:40:16'),
(9, 'Life Style', 'nipun@gmail.com', '01848317007', 'hu', 'hh', '2023-09-04 03:41:28', '2023-09-04 03:41:28'),
(10, 'sajidrahman', 'nipun@gmail.com', '01848317007', 'hu', 'kkkkkkk', '2023-09-04 04:12:27', '2023-09-04 04:12:27'),
(11, 'sajidrahman', 'nipun@gmail.com', '01848317007', 'hu', 'kkkkkkk', '2023-09-04 04:14:32', '2023-09-04 04:14:32'),
(12, 'sajidrahman', 'teacher@gmail.com', '01848315047', 'hu', 'hg', '2023-09-04 04:28:24', '2023-09-04 04:28:24'),
(13, 'Life Style', 'asad@gmail.com', '01848317007', 'hu', 'gf', '2023-09-04 04:30:13', '2023-09-04 04:30:13'),
(14, 'sajidrahman', 'student@gmail.com', '01848317007', 'fr', 'bh', '2023-09-04 04:41:35', '2023-09-04 04:41:35'),
(15, 'Life Style', 'teacher@gmail.com', '01848317007', 'jk', 'jjjjjjjk', '2023-09-04 20:27:19', '2023-09-04 20:27:19'),
(16, 'Super Admin', 'student@gmail.com', '01848317007', 'hu', 'jk', '2023-09-04 20:34:15', '2023-09-04 20:34:15'),
(17, 'Raihan', 'nipun@gmail.com', '01848317007', 'rt', 'dsfffffffffgfgfd', '2023-09-04 20:35:35', '2023-09-04 20:35:35');

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

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '4a02893a-fd4f-47f8-9284-7a4380aab51b', 'database', 'default', '{\"uuid\":\"4a02893a-fd4f-47f8-9284-7a4380aab51b\",\"displayName\":\"App\\\\Jobs\\\\SendContactMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendContactMail\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\SendContactMail\\\":1:{s:33:\\\"\\u0000App\\\\Jobs\\\\SendContactMail\\u0000contact\\\";a:8:{s:4:\\\"name\\\";s:10:\\\"Life Style\\\";s:5:\\\"email\\\";s:17:\\\"teacher@gmail.com\\\";s:6:\\\"number\\\";s:11:\\\"01848317007\\\";s:7:\\\"subject\\\";s:2:\\\"jk\\\";s:7:\\\"message\\\";s:8:\\\"jjjjjjjk\\\";s:10:\\\"updated_at\\\";s:27:\\\"2023-09-05T02:27:19.000000Z\\\";s:10:\\\"created_at\\\";s:27:\\\"2023-09-05T02:27:19.000000Z\\\";s:2:\\\"id\\\";i:15;}}\"}}', 'Error: Class \"App\\Jobs\\ContactUs\" not found in /home/lenovo/Documents/laravel/blog/app/Jobs/SendContactMail.php:35\nStack trace:\n#0 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\SendContactMail->handle()\n#1 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#3 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#4 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#5 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#6 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#7 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#8 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#9 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#10 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#11 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#12 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#13 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#14 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()\n#15 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()\n#17 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()\n#18 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()\n#19 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#20 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#23 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#24 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#25 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()\n#26 /home/lenovo/Documents/laravel/blog/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#27 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()\n#28 /home/lenovo/Documents/laravel/blog/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()\n#29 /home/lenovo/Documents/laravel/blog/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()\n#30 /home/lenovo/Documents/laravel/blog/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()\n#31 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()\n#32 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()\n#33 /home/lenovo/Documents/laravel/blog/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#34 {main}', '2023-09-04 20:27:58'),
(2, 'ba7b4051-7c8d-4765-add8-d13eb2d8d688', 'database', 'default', '{\"uuid\":\"ba7b4051-7c8d-4765-add8-d13eb2d8d688\",\"displayName\":\"App\\\\Jobs\\\\SendContactMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendContactMail\",\"command\":\"O:24:\\\"App\\\\Jobs\\\\SendContactMail\\\":1:{s:33:\\\"\\u0000App\\\\Jobs\\\\SendContactMail\\u0000contact\\\";a:8:{s:4:\\\"name\\\";s:11:\\\"Super Admin\\\";s:5:\\\"email\\\";s:17:\\\"student@gmail.com\\\";s:6:\\\"number\\\";s:11:\\\"01848317007\\\";s:7:\\\"subject\\\";s:2:\\\"hu\\\";s:7:\\\"message\\\";s:2:\\\"jk\\\";s:10:\\\"updated_at\\\";s:27:\\\"2023-09-05T02:34:15.000000Z\\\";s:10:\\\"created_at\\\";s:27:\\\"2023-09-05T02:34:15.000000Z\\\";s:2:\\\"id\\\";i:16;}}\"}}', 'Error: Class \"App\\Jobs\\ContactUs\" not found in /home/lenovo/Documents/laravel/blog/app/Jobs/SendContactMail.php:35\nStack trace:\n#0 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): App\\Jobs\\SendContactMail->handle()\n#1 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#2 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#3 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#4 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#5 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(128): Illuminate\\Container\\Container->call()\n#6 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}()\n#7 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#8 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Bus/Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then()\n#9 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow()\n#10 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}()\n#11 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}()\n#12 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then()\n#13 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware()\n#14 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/Jobs/Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call()\n#15 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#16 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(375): Illuminate\\Queue\\Worker->process()\n#17 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(173): Illuminate\\Queue\\Worker->runJob()\n#18 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon()\n#19 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker()\n#20 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#21 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#22 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure()\n#23 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod()\n#24 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Container/Container.php(661): Illuminate\\Container\\BoundMethod::call()\n#25 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Console/Command.php(183): Illuminate\\Container\\Container->call()\n#26 /home/lenovo/Documents/laravel/blog/vendor/symfony/console/Command/Command.php(326): Illuminate\\Console\\Command->execute()\n#27 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Console/Command.php(152): Symfony\\Component\\Console\\Command\\Command->run()\n#28 /home/lenovo/Documents/laravel/blog/vendor/symfony/console/Application.php(1063): Illuminate\\Console\\Command->run()\n#29 /home/lenovo/Documents/laravel/blog/vendor/symfony/console/Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand()\n#30 /home/lenovo/Documents/laravel/blog/vendor/symfony/console/Application.php(174): Symfony\\Component\\Console\\Application->doRun()\n#31 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Console/Application.php(102): Symfony\\Component\\Console\\Application->run()\n#32 /home/lenovo/Documents/laravel/blog/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(155): Illuminate\\Console\\Application->run()\n#33 /home/lenovo/Documents/laravel/blog/artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle()\n#34 {main}', '2023-09-04 20:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_13_054341_create_categories_table', 1),
(6, '2023_08_14_132241_create_tags_table', 1),
(7, '2023_08_15_033806_create_sub_categories_table', 1),
(8, '2023_08_16_040254_create_posts_table', 1),
(9, '2023_08_18_013513_create_post_tag_table', 1),
(10, '2023_09_04_034721_create_comments_table', 2),
(11, '2023_09_04_034744_create_replays_table', 2),
(12, '2023_09_04_085753_create_contacts_table', 3),
(13, '2023_09_05_021904_create_jobs_table', 4);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1=>published,0=>unpublished',
  `is_approved` tinyint(4) DEFAULT NULL COMMENT '1=>approved,0=>not approved',
  `category` bigint(20) UNSIGNED NOT NULL,
  `sub_category` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `status`, `is_approved`, `category`, `sub_category`, `user_id`, `description`, `photo`, `admin_comment`, `deleted_at`, `created_at`, `updated_at`) VALUES
(10, 'Web developmen', 'web-developmen', 1, 1, 2, 4, 1, '<p>web development</p>', 'web-developmen.webp', NULL, NULL, '2023-08-19 03:07:34', '2023-08-21 23:51:39'),
(11, 'Meme', 'meme', 1, 1, 2, 3, 1, '<p>Me</p>', 'meme.webp', NULL, NULL, '2023-08-19 03:15:44', '2023-08-22 00:27:10'),
(12, 'Plan development', 'plan-development', 1, 1, 1, 2, 1, '<p>Stand Blog is a free HTML CSS template for your CMS theme. You can easily adapt or customize it for any kind of CMS or website builder. You are allowed to use it for your business. You are NOT allowed to re-distribute the template ZIP file on any template collection site for the download purpose. <a href=\"https://templatemo.com/contact\">Contact TemplateMo</a> for more info. Thank you.</p>', 'plan-development.webp', NULL, NULL, '2023-08-19 04:02:12', '2023-08-19 04:02:12'),
(13, 'Outsider in beach', 'outsider-in-beach', 1, 1, 3, 5, 1, '<p>Beach life aweasome</p>', 'outsider-in-beach.webp', NULL, NULL, '2023-08-19 19:47:10', '2023-08-19 19:47:10'),
(15, 'Developer still trust php', 'developer-still-trust-php', 1, 1, 4, 6, 1, '<p>PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer. Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by the PHP Group. <a href=\"https://en.wikipedia.org/wiki/PHP\">Wikipedia</a></p>', 'developer-still-trust-php.webp', NULL, NULL, '2023-08-30 19:36:48', '2023-09-01 20:57:25'),
(16, 'Js dominating web', 'js-dominating-web', 1, 1, 4, 7, 1, '<p>JavaScript, often abbreviated as JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2023, 98.7% of websites use JavaScript on the client side for webpage behavior, often incorporating third-party libraries. <a href=\"https://en.wikipedia.org/wiki/JavaScript\">Wikipedia</a></p>', 'js-dominating-web.webp', NULL, NULL, '2023-08-30 19:39:08', '2023-08-30 19:39:08'),
(17, 'Java specilized for mobile development', 'java-specilized-for-mobile-development', 1, 1, 4, 8, 1, '<p>Java is a high-level, class-based, object-oriented programming language. that is designed to have as few implementation dependencies as possible. <a href=\"https://en.wikipedia.org/wiki/Java_(programming_language)\">Wikipedia</a></p>', 'java-specilized-for-mobile-development.webp', NULL, NULL, '2023-08-30 19:40:52', '2023-09-01 21:17:57'),
(18, 'php is user friendly', 'php-is-user-friendly', 1, 1, 4, 6, 1, '<p>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web page.PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft\'s <a href=\"https://www.w3schools.com/asp/default.ASP\">ASP.</a></p>', 'php-is-user-friendly.webp', NULL, NULL, '2023-08-30 22:54:02', '2023-09-01 21:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(17, 10, 2, NULL, NULL),
(18, 10, 3, NULL, NULL),
(19, 11, 2, NULL, NULL),
(21, 12, 2, NULL, NULL),
(22, 12, 3, NULL, NULL),
(23, 13, 4, NULL, NULL),
(24, 10, 1, NULL, NULL),
(26, 11, 1, NULL, NULL),
(29, 15, 1, NULL, NULL),
(30, 15, 5, NULL, NULL),
(31, 15, 6, NULL, NULL),
(32, 15, 7, NULL, NULL),
(33, 16, 1, NULL, NULL),
(34, 16, 5, NULL, NULL),
(36, 17, 1, NULL, NULL),
(37, 17, 5, NULL, NULL),
(38, 17, 7, NULL, NULL),
(40, 18, 1, NULL, NULL),
(42, 18, 6, NULL, NULL),
(43, 18, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `replays`
--

CREATE TABLE `replays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `replay_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `order_by` tinyint(4) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `slug`, `category_id`, `order_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mac', 'mac', 1, 1, 1, '2023-08-17 20:04:09', '2023-08-17 20:04:09'),
(2, 'Lenovo', 'lenovo', 1, 2, 1, '2023-08-17 20:04:30', '2023-08-17 20:04:30'),
(3, 'iphone', 'iphone', 2, 3, 1, '2023-08-17 20:05:00', '2023-08-17 20:05:00'),
(4, 'Samsung', 'samsung', 2, 4, 1, '2023-08-17 20:05:17', '2023-08-17 20:05:17'),
(5, 'Beach', 'beach', 3, 5, 1, '2023-08-19 19:44:14', '2023-08-19 19:44:32'),
(6, 'php', 'php', 4, 6, 1, '2023-08-22 04:27:26', '2023-08-22 04:27:26'),
(7, 'Javascript', 'javascript', 4, 7, 1, '2023-08-22 04:28:01', '2023-08-22 04:28:01'),
(8, 'Java', 'java', 4, 8, 1, '2023-08-22 04:28:17', '2023-08-22 04:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` tinyint(4) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=active, 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `tag`, `order_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Technology', 'technology', 1, 1, '2023-08-17 20:05:45', '2023-08-17 20:05:45'),
(2, 'Mobile', 'mobile', 2, 1, '2023-08-17 20:06:06', '2023-08-17 20:06:06'),
(3, 'Laptop', 'laptop', 3, 1, '2023-08-17 20:06:26', '2023-08-17 20:06:26'),
(4, 'Beach', 'beach', 4, 1, '2023-08-19 19:46:08', '2023-08-19 19:46:08'),
(5, 'Programming', 'programming', 5, 1, '2023-08-22 04:29:16', '2023-08-22 04:29:16'),
(6, 'Web development', 'web-development', 6, 1, '2023-08-30 19:30:34', '2023-08-30 19:30:34'),
(7, 'Software development', 'software-development', 7, 1, '2023-08-30 19:31:16', '2023-08-30 19:31:16');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'saiful', 'saiful@gmail.com', NULL, '$2y$10$TwdJP.fWio.uuJU70faZUe9gZIt6sIfRJtRiA50nr3BoVV6WI1X1S', NULL, '2023-08-17 20:02:48', '2023-08-17 20:02:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_foreign` (`category`),
  ADD KEY `posts_sub_category_foreign` (`sub_category`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `replays`
--
ALTER TABLE `replays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replays_user_id_foreign` (`user_id`),
  ADD KEY `replays_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `replays`
--
ALTER TABLE `replays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_foreign` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_sub_category_foreign` FOREIGN KEY (`sub_category`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `replays`
--
ALTER TABLE `replays`
  ADD CONSTRAINT `replays_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `replays_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
