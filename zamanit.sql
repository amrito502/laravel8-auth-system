-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 09:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zamanit`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `slug` mediumtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `mete_keyword` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `slug`, `image`, `meta_title`, `meta_description`, `mete_keyword`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Hire Freelancer SEO Consultant from Bangladesh | Zaman IT Consultant', 'Hire an experienced SEO consultant from a reputable IT Company in Bangladesh. Collaborate with a talented freelancer to achieve your digital goals', 'hire-freelancer-seo-consultant-from-bangladesh-|-zaman-it-consultant', '1707506741.jpg', 'Hire Freelancer SEO Consultant from Bangladesh | Zaman IT Consultant', 'Hire an experienced SEO consultant from a reputable IT Company in Bangladesh. Collaborate with a talented freelancer to achieve your digital goals', 'Zaman IT Consultant,SEO Consultant', 0, '2024-02-08 10:15:25', '2024-02-09 13:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `image`, `address`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$w14lxRwhblFm53g2/d6qYufQb5Tf/c4hsZIaSuh4fhWoArsopnRVa', 0, NULL, '2024-02-01 11:28:08', '2024-02-07 11:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext NOT NULL,
  `slug` mediumtext NOT NULL,
  `image` text NOT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `meta_title` mediumtext NOT NULL,
  `meta_description` text DEFAULT NULL,
  `mete_keyword` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `image`, `short_description`, `long_description`, `comment`, `meta_title`, `meta_description`, `mete_keyword`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aliqua Dolorem est', 'aliqua-dolorem-est', '1707391753.jpg', 'Molestiae ut nobis s', 'xcgfdgfh', NULL, 'Provident praesenti', 'Autem rem vel conseq', 'Provident omnis sun', 1, '2024-02-08 05:29:13', '2024-02-08 05:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `client_reviews`
--

CREATE TABLE `client_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `slug` mediumtext DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `mete_keyword` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_reviews`
--

INSERT INTO `client_reviews` (`id`, `title`, `rating`, `image`, `slug`, `meta_title`, `meta_description`, `mete_keyword`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Link Building', '5', '1707502620.png', 'link-building', 'Labore ut est explic', 'Incididunt quidem si', 'Aut voluptatum et di', 0, '2024-02-08 14:02:11', '2024-02-09 12:17:00'),
(4, 'App Development', '5', '1707502601.png', 'app-development', NULL, NULL, NULL, 0, '2024-02-09 06:16:23', '2024-02-09 12:16:41'),
(5, 'Web Development', '5', '1707502576.png', 'web-development', NULL, NULL, NULL, 0, '2024-02-09 06:16:37', '2024-02-09 12:16:16'),
(6, 'SEO Work', '5', '1707502549.png', 'seo-work', NULL, NULL, NULL, 0, '2024-02-09 06:16:54', '2024-02-09 12:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `client_says`
--

CREATE TABLE `client_says` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `profection` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `slug` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guestposts`
--

CREATE TABLE `guestposts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `post_rules` longtext DEFAULT NULL,
  `guest_post_title` text DEFAULT NULL,
  `slug` mediumtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `guest_post_description` longtext DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `mete_keyword` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guestposts`
--

INSERT INTO `guestposts` (`id`, `title`, `email`, `post_rules`, `guest_post_title`, `slug`, `image`, `guest_post_description`, `meta_title`, `meta_description`, `mete_keyword`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Quo rerum ut animi', 'xofivyfyn@mailinator.com', 'fgjfgfgjghjgf', 'Quia ad ut accusanti', 'quia-ad-ut-accusanti', '1707474445.png', 'fgghjfg', 'Reiciendis ullam mag', 'Pariatur Harum aper', 'Aut in nesciunt eum,In sint et provident,Exercitationem sit l', 0, '2024-02-09 04:11:06', '2024-02-09 04:27:55'),
(5, 'Aut doloribus volupt', 'wilevatexu@mailinator.com', 'sdfgsdfsgd', 'ffgfdsgs', 'ffgfdsgs', '1707474196.png', 'fdgfdsgfd', 'Enim est ex laborum dfsgsdfgsgsdgsd', 'Eos ratione fugit q', 'Dolores ab nesciunt', 1, '2024-02-09 04:23:16', '2024-02-09 04:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` mediumtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `mete_keyword` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `name`, `title`, `description`, `image`, `slug`, `meta_title`, `meta_description`, `mete_keyword`, `status`, `created_at`, `updated_at`) VALUES
(4, 'I\'m A.K.M. Ashrafuzzaman', 'SEO Services | Web and Software Development | Digital Marketing', 'Hire an experienced SEO consultant from a reputable IT Company in Bangladesh. Collaborate with a talented freelancer to achieve your digital goals. Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', '1707499874.png', 'seo-services-|-web-and-software-development-|-digital-marketing', 'SEO Services | Web and Software Development | Digital Marketing', 'SEO Services | Web and Software Development | Digital Marketing', 'SEO Services,Web and Software Development,Digital Marketing', 0, '2024-02-08 08:53:38', '2024-02-09 11:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_text` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `mete_keyword` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `logo_text`, `image`, `slug`, `meta_title`, `meta_description`, `mete_keyword`, `status`, `created_at`, `updated_at`) VALUES
(2, 'amrito', '1707395231.jpg', 'amrito', 'amrito', 'amrito', 'amrito', 1, '2024-02-08 06:23:08', '2024-02-08 06:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_12_29_093617_create_admins_table', 1),
(6, '2024_01_16_062319_create_logos_table', 1),
(7, '2024_01_16_063422_create_heroes_table', 1),
(8, '2024_01_16_063450_create_abouts_table', 1),
(9, '2024_01_16_063522_create_services_table', 1),
(10, '2024_01_16_063541_create_projects_table', 1),
(11, '2024_01_16_063601_create_teams_table', 1),
(12, '2024_01_21_141133_create_blogs_table', 1),
(13, '2024_01_22_091931_create_comments_table', 1),
(14, '2024_01_22_203902_create_messages_table', 1),
(15, '2024_02_05_120445_create_resources_table', 1),
(16, '2024_02_08_105331_create_client_reviews_table', 1),
(17, '2024_02_08_105710_create_guestposts_table', 1),
(18, '2024_02_08_110732_create_subscribes_table', 1),
(19, '2024_02_08_112355_create_client_says_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` mediumtext NOT NULL,
  `slug` mediumtext NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `mete_keyword` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `title`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `mete_keyword`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Moana Gay', 'Elit delectus iust', 'elit-delectus-iust', 'hfghfdggf', '1707417450.png', 'Numquam aut sint au', 'Veritatis ex hic rat', 'Molestias ullamco ad', 0, '2024-02-08 12:37:30', '2024-02-09 06:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `title` mediumtext DEFAULT NULL,
  `slug` mediumtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` longtext DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `mete_keyword` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `name`, `title`, `slug`, `image`, `short_description`, `long_description`, `meta_title`, `meta_description`, `mete_keyword`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Yolanda Wong', 'Et dolores asperiore', 'et-dolores-asperiore', '1707476787.png', 'Sapiente Nam earum m', 'dfsdfgfdgdfgsdfsfdVitae rerum illo aut.', 'Eveniet voluptas ex', 'Et quia incidunt ut', 'Id blanditiis culpa,Magna totam ullam et,Duis ut aspernatur c', 1, '2024-02-09 04:53:33', '2024-02-09 05:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` mediumtext NOT NULL,
  `slug` mediumtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `mete_keyword` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `title`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `mete_keyword`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Web and Software Development', 'Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', 'get-ahead-in-the-digital-world-with-top-notch-seo-optimization-and-tailored-web-and-software-development-solutions.-unleash-your-business\'s-full-potential-now!', '<span style=\"color: rgb(5, 5, 5); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space-collapse: preserve; background-color: rgb(240, 240, 240);\">  Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!</span>', '1707508855.png', 'Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', 'Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', 'Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', 0, '2024-02-08 11:03:09', '2024-02-09 14:00:55'),
(4, 'SEO Services', 'Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', 'get-ahead-in-the-digital-world-with-top-notch-seo-optimization-and-tailored-web-and-software-development-solutions.-unleash-your-business\'s-full-potential-now!', '<p><span style=\"color: rgb(5, 5, 5); font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space-collapse: preserve; background-color: rgb(240, 240, 240);\">Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!</span><br></p>', '1707508845.png', 'Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', 'Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', 'Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', 0, '2024-02-09 05:42:54', '2024-02-09 14:00:45'),
(5, 'Digital Marketing', 'Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', 'get-ahead-in-the-digital-world-with-top-notch-seo-optimization-and-tailored-web-and-software-development-solutions.-unleash-your-business\'s-full-potential-now!', '<p><div role=\"presentation\" class=\"html-div xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x1h91t0o xkh2ocl x78zum5 xdt5ytf x13a6bvl x193iq5w x1iyjqo2 x1eb86dx\" style=\"list-style: none; margin: 0px; justify-content: flex-end; background-color: var(--mwp-message-row-background); align-items: inherit; flex-grow: 1; padding: 0px; display: flex; flex-direction: column; align-self: stretch; max-width: 100%; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; color: rgb(28, 30, 33); font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"></div></p><div class=\"html-div xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r xexx8yu x4uap5 x18d9i69 xkhd6sd x6ikm8r x10wlt62\" style=\"list-style: none; margin: 0px; padding: 0px; overflow: hidden; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; color: rgb(28, 30, 33); font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><div role=\"presentation\" class=\"html-div xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r x1tlxs6b x1g8br2z x1gn5b1j x230xth x14ctfv x1okitfd x1k4qllp x6ikm8r x10wlt62 x1y1aw1k xwib8y2 x1ye3gou xn6708d x1n2onr6 x1vjfegm x1mzt3pk x13faqbe x1xr0vuk x1jm4cbz x1lmq8lz xrrpcnn x1xtl47e x13fuv20 xu3j5b3 x1q0q8m5 x26u7qi x1tdhcrn x17i5p6 xeqhmsb x1bab9rp\" style=\"outline: 10px solid var(--mwp-message-row-background); list-style: none; margin: 0px; word-break: break-word; border-style: solid; color: var(--always-white); border-right-width: var(--chat-incoming-message-border-width,0); border-left-width: var(--chat-incoming-message-border-width,0); border-radius: 18px; border-top-color: var(--chat-incoming-message-border-color,transparent); border-right-color: var(--chat-incoming-message-border-color,transparent); overflow-wrap: break-word; position: relative; border-top-width: var(--chat-incoming-message-border-width,0); z-index: 1; background-color: var(--chat-incoming-message-bubble-background-color); border-left-color: var(--chat-incoming-message-border-color,transparent); padding: 8px 12px; overflow: hidden; max-width: 564px; border-bottom-width: var(--chat-incoming-message-border-width,0); border-bottom-color: var(--chat-incoming-message-border-color,transparent); font-family: inherit;\"><div role=\"none\" class=\"x9f619 x1n2onr6 x1ja2u2z __fb-light-mode\" style=\"--fds-black: #000000; --fds-black-alpha-05: rgba(0, 0, 0, 0.05); --fds-black-alpha-10: rgba(0, 0, 0, 0.1); --fds-black-alpha-15: rgba(0, 0, 0, 0.15); --fds-black-alpha-20: rgba(0, 0, 0, 0.2); --fds-black-alpha-30: rgba(0, 0, 0, 0.3); --fds-black-alpha-40: rgba(0, 0, 0, 0.4); --fds-black-alpha-50: rgba(0, 0, 0, 0.5); --fds-black-alpha-60: rgba(0, 0, 0, 0.6); --fds-black-alpha-80: rgba(0, 0, 0, 0.8); --fds-blue-05: #ECF3FF; --fds-blue-30: #AAC9FF; --fds-blue-40: #77A7FF; --fds-blue-60: #1877F2; --fds-blue-70: #2851A3; --fds-blue-80: #1D3C78; --fds-button-text: #444950; --fds-comment-background: #F2F3F5; --fds-dark-mode-gray-35: #CCCCCC; --fds-dark-mode-gray-50: #828282; --fds-dark-mode-gray-70: #4A4A4A; --fds-dark-mode-gray-80: #373737; --fds-dark-mode-gray-90: #282828; --fds-dark-mode-gray-100: #1C1C1C; --fds-gray-00: #F5F6F7; --fds-gray-05: #F2F3F5; --fds-gray-10: #EBEDF0; --fds-gray-20: #DADDE1; --fds-gray-25: #CCD0D5; --fds-gray-30: #BEC3C9; --fds-gray-45: #8D949E; --fds-gray-70: #606770; --fds-gray-80: #444950; --fds-gray-90: #303338; --fds-gray-100: #1C1E21; --fds-green-55: #00A400; --fds-highlight: #3578E5; --fds-highlight-cell-background: #ECF3FF; --fds-primary-icon: #1C1E21; --fds-primary-text: #1C1E21; --fds-red-55: #FA383E; --fds-soft: cubic-bezier(.08,.52,.52,1); --fds-spectrum-aluminum-tint-70: #E4F0F6; --fds-spectrum-blue-gray-tint-70: #CFD1D5; --fds-spectrum-cherry: #F35369; --fds-spectrum-cherry-tint-70: #FBCCD2; --fds-spectrum-grape-tint-70: #DDD5F0; --fds-spectrum-grape-tint-90: #F4F1FA; --fds-spectrum-lemon-dark-1: #F5C33B; --fds-spectrum-lemon-tint-70: #FEF2D1; --fds-spectrum-lime: #A3CE71; --fds-spectrum-lime-tint-70: #E4F0D5; --fds-spectrum-orange-tint-70: #FCDEC5; --fds-spectrum-orange-tint-90: #FEF4EC; --fds-spectrum-seafoam-tint-70: #CAEEF9; --fds-spectrum-slate-dark-2: #89A1AC; --fds-spectrum-slate-tint-70: #EAEFF2; --fds-spectrum-teal: #6BCEBB; --fds-spectrum-teal-dark-1: #4DBBA6; --fds-spectrum-teal-dark-2: #31A38D; --fds-spectrum-teal-tint-70: #D2F0EA; --fds-spectrum-teal-tint-90: #F0FAF8; --fds-spectrum-tomato: #FB724B; --fds-spectrum-tomato-tint-30: #F38E7B; --fds-spectrum-tomato-tint-90: #FDEFED; --fds-strong: cubic-bezier(.12,.8,.32,1); --fds-white: #FFFFFF; --fds-white-alpha-05: rgba(255, 255, 255, 0.05); --fds-white-alpha-10: rgba(255, 255, 255, 0.1); --fds-white-alpha-20: rgba(255, 255, 255, 0.2); --fds-white-alpha-30: rgba(255, 255, 255, 0.3); --fds-white-alpha-40: rgba(255, 255, 255, 0.4); --fds-white-alpha-50: rgba(255, 255, 255, 0.5); --fds-white-alpha-60: rgba(255, 255, 255, 0.6); --fds-white-alpha-80: rgba(255, 255, 255, 0.8); --fds-yellow-20: #FFBA00; --accent: #0099FF; --always-white: #FFFFFF; --always-black: black; --always-dark-gradient: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0.6)); --always-dark-overlay: rgba(0, 0, 0, 0.4); --always-light-overlay: rgba(255, 255, 255, 0.4); --always-gray-40: #65676B; --always-gray-75: #BCC0C4; --always-gray-95: #F0F2F5; --attachment-footer-background: #F0F2F5; --background-deemphasized: #F0F2F5; --badge-background-color-blue: var(--accent); --badge-background-color-dark-gray: var(--secondary-icon); --badge-background-color-gray: var(--disabled-icon); --badge-background-color-green: var(--positive); --badge-background-color-light-blue: var(--highlight-bg); --badge-background-color-red: var(--notification-badge); --badge-background-color-yellow: var(--base-lemon); --base-blue: #1877F2; --base-cherry: #F3425F; --base-grape: #9360F7; --base-lemon: #F7B928; --base-lime: #45BD62; --base-pink: #FF66BF; --base-seafoam: #54C7EC; --base-teal: #2ABBA7; --base-tomato: #FB724B; --text-badge-info-background: hsl(214, 89%, 52%); --text-badge-success-background: #31A24C; --text-badge-attention-background: hsl(40, 89%, 52%); --text-badge-critical-background: #e41e3f; --blue-link: #216FDB; --border-focused: #65676B; --card-background: #FFFFFF; --card-background-flat: #F7F8FA; --comment-background: rgba(134, 142, 153, 0.1); --comment-footer-background: #F6F9FA; --dataviz-primary-1: rgb(48,200,180); --disabled-button-background: #E4E6EB; --disabled-button-text: #BCC0C4; --disabled-icon: #BCC0C4; --disabled-text: #BCC0C4; --divider: #CED0D4; --event-date: #F3425F; --fb-wordmark: #0866FF; --fb-logo: #0866FF; --filter-accent: invert(50%) sepia(94%) saturate(3979%) hue-rotate(183deg) brightness(104%) contrast(103%); --filter-always-white: invert(100%); --filter-disabled-icon: invert(80%) sepia(6%) saturate(200%) saturate(120%) hue-rotate(173deg) brightness(98%) contrast(89%); --filter-placeholder-icon: invert(59%) sepia(11%) saturate(200%) saturate(135%) hue-rotate(176deg) brightness(96%) contrast(94%); --filter-primary-accent: invert(39%) sepia(57%) saturate(200%) saturate(200%) saturate(200%) saturate(200%) saturate(200%) saturate(147.75%) hue-rotate(202deg) brightness(97%) contrast(96%); --filter-primary-icon: invert(8%) sepia(10%) saturate(200%) saturate(200%) saturate(166%) hue-rotate(177deg) brightness(104%) contrast(91%); --filter-secondary-icon: invert(39%) sepia(21%) saturate(200%) saturate(109.5%) hue-rotate(174deg) brightness(94%) contrast(86%); --filter-warning-icon: invert(77%) sepia(29%) saturate(200%) saturate(200%) saturate(200%) saturate(200%) saturate(200%) saturate(128%) hue-rotate(359deg) brightness(102%) contrast(107%); --filter-blue-link-icon: invert(30%) sepia(98%) saturate(200%) saturate(200%) saturate(200%) saturate(166.5%) hue-rotate(192deg) brightness(91%) contrast(101%); --filter-positive: invert(37%) sepia(61%) saturate(200%) saturate(200%) saturate(200%) saturate(200%) saturate(115%) hue-rotate(91deg) brightness(97%) contrast(105%); --filter-negative: invert(25%) sepia(33%) saturate(200%) saturate(200%) saturate(200%) saturate(200%) saturate(200%) saturate(200%) saturate(110%) hue-rotate(345deg) brightness(132%) contrast(96%); --focus-ring-blue: #1877F2; --glimmer-spinner-icon: #65676B; --hero-banner-background: #FFFFFF; --hosted-view-selected-state: rgba(0, 0, 0, 0.04); --highlight-bg: #E7F3FF; --hover-overlay: rgba(0, 0, 0, 0.05); --inverse-text: var(--always-white); --list-cell-chevron: #65676B; --media-hover: rgba(68, 73, 80, 0.15); --media-inner-border: rgba(0, 0, 0, 0.1); --media-outer-border: #FFFFFF; --media-pressed: rgba(68, 73, 80, 0.35); --messenger-card-background: #FFFFFF; --mwp-header-background-color: var(--messenger-card-background); --mwp-header-button-color: #0a7cff; --mwp-message-row-background: var(--messenger-card-background); --messenger-reply-background: #F0F2F5; --overlay-alpha-80: rgba(244, 244, 244, 0.8); --overlay-on-media: rgba(0, 0, 0, 0.6); --nav-bar-background: #FFFFFF; --nav-bar-background-gradient: linear-gradient(to top, #FFFFFF, rgba(255,255,255.9), rgba(255,255,255,.7), rgba(255,255,255,.4), rgba(255,255,255,0)); --nav-bar-background-gradient-wash: linear-gradient(to top, #F0F2F5, rgba(240,242,245.9), rgba(240,242,245,.7), rgba(240,242,245,.4), rgba(240,242,245,0)); --negative: hsl(350, 87%, 55%); --negative-background: hsl(350, 87%, 55%, 20%); --new-notification-background: #E7F3FF; --non-media-pressed: rgba(68, 73, 80, 0.15); --non-media-pressed-on-dark: rgba(255, 255, 255, 0.3); --notification-badge: #e41e3f; --placeholder-icon: #65676B; --placeholder-image: rgb(164, 167, 171); --placeholder-text: #65676B; --placeholder-text-on-media: rgba(255, 255, 255, 0.5); --popover-background: #FFFFFF; --positive: #5AD539; --positive-background: #DEEFE1; --press-overlay: rgba(0, 0, 0, 0.10); --primary-button-background: #0099FF; --primary-button-icon: #FFFFFF; --primary-button-pressed: #77A7FF; --primary-button-text: #FFFFFF; --primary-deemphasized-button-background: #E7F3FF; --primary-deemphasized-button-pressed: rgba(0, 0, 0, 0.05); --primary-deemphasized-button-pressed-overlay: rgba(25, 110, 255, 0.15); --primary-deemphasized-button-text: #1877F2; --primary-icon: #050505; --primary-text: #050505; --primary-text-on-media: #FFFFFF; --primary-web-focus-indicator: #D24294; --progress-ring-neutral-background: rgba(0, 0, 0, 0.2); --progress-ring-neutral-foreground: #000000; --progress-ring-on-media-background: rgba(255, 255, 255, 0.2); --progress-ring-on-media-foreground: #FFFFFF; --progress-ring-blue-background: rgba(24, 119, 242, 0.2); --progress-ring-blue-foreground: hsl(214, 89%, 52%); --progress-ring-disabled-background: rgba(190,195,201, 0.2); --progress-ring-disabled-foreground: #BEC3C9; --rating-star-active: #EB660D; --scroll-thumb: #BCC0C4; --scroll-shadow: 0 1px 2px rgba(0, 0, 0, 0.1), 0 -1px rgba(0, 0, 0, 0.1) inset; --secondary-button-background: #f5f5f5; --secondary-button-background-floating: #ffffff; --secondary-button-background-on-dark: rgba(0, 0, 0, 0.4); --secondary-button-pressed: rgba(0, 0, 0, 0.05); --secondary-button-stroke: transparent; --secondary-button-text: #050505; --secondary-icon: #65676B; --secondary-text: #65676B; --secondary-text-on-media: rgba(255, 255, 255, 0.9); --section-header-text: #4B4C4F; --shadow-1: rgba(0, 0, 0, 0.1); --shadow-2: rgba(0, 0, 0, 0.2); --shadow-5: rgba(0, 0, 0, 0.5); --shadow-8: rgba(0, 0, 0, 0.8); --shadow-inset: rgba(255, 255, 255, 0.5); --shadow-elevated: 0 8px 20px 0 rgba(0, 0, 0, 0.2), 0 2px 4px 0 rgba(0, 0, 0, 0.1); --shadow-persistent: 0px 0px 12px rgba(52, 72, 84, 0.05); --shadow-primary: 0px 5px 12px rgba(52, 72, 84, 0.2); --surface-background: #FFFFFF; --switch-active: hsl(214, 89%, 52%); --text-highlight: rgba(24, 119, 242, 0.2); --input-background: #FFFFFF; --input-background-disabled: #F0F2F5; --input-border-color: #CED0D4; --input-border-color-hover: var(--placeholder-text); --input-label-color-highlighted: hsl(214, 89%, 52%); --text-input-outside-label: #000000; --toast-background: #FFFFFF; --toast-text: #1C2B33; --toast-text-link: #216FDB; --toggle-active-background: #E7F3FF; --toggle-active-icon: rgb(24, 119, 242); --toggle-active-text: rgb(24, 119, 242); --toggle-button-active-background: #E7F3FF; --tooltip-background: rgba(244, 244, 244, 0.8); --tooltip-box-shadow: 0 2px 4px 0 var(--shadow-5); --wash: #E4E6EB; --web-wash: #F0F2F5; --warning: hsl(40, 89%, 52%); --chat-bubble-padding-vertical: 8px; --chat-bubble-padding-horizontal: 12px; --chat-bubble-border-radius: 18px; --chat-text-blockquote-color-background-line: rgba(0, 0, 0, 0.12); --chat-text-blockquote-color-text-primary-media: rgba(255, 255, 255, 0.7); --chat-incoming-message-bubble-background-color: #F0F0F0; --chat-outgoing-message-bubble-background-color: #0a7cff; --chat-replied-message-background-color: rgba(0, 0, 0, 0.03); --radio-border-color: var(--primary-icon); --radio-border-color-disabled: var(--disabled-button-background); --radio-border-color-selected: var(--accent); --radio-checked-icon-color: var(--accent); --radio-checked-icon-color-disabled: var(--disabled-button-background); --fb-logo-color: #2D88FF; --dialog-anchor-vertical-padding: 64px; --header-height: 0px; --global-panel-width: 0px; --global-panel-width-expanded: 0px; --alert-banner-corner-radius: 8px; --button-corner-radius: 6px; --button-corner-radius-medium: 10px; --button-corner-radius-large: 12px; --button-height-large: 40px; --button-height-medium: 36px; --button-padding-horizontal-large: 16px; --button-padding-horizontal-medium: 16px; --button-icon-padding-large: 16px; --button-icon-padding-medium: 16px; --button-inner-icon-spacing-large: 3px; --button-inner-icon-spacing-medium: 3px; --blueprint-button-height-medium: 40px; --blueprint-button-height-large: 48px; --card-corner-radius: 12px; --card-box-shadow: 0 12px 28px 0 var(--shadow-2), 0 2px 4px 0 var(--shadow-1); --card-padding-horizontal: 10px; --card-padding-vertical: 20px; --chip-corner-radius: 6px; --dialog-corner-radius: 8px; --glimmer-corner-radius: 8px; --image-corner-radius: 4px; --input-corner-radius: 6px; --input-border-width: 1px; --nav-list-cell-corner-radius: 8px; --list-cell-corner-radius: 8px; --list-cell-min-height: 52px; --list-cell-padding-vertical: 20px; --list-cell-padding-vertical-with-addon: 14px; --menu-item-base-margin-horizontal: 8px; --menu-item-base-padding-horizontal: 8px; --nav-list-cell-min-height: 0px; --nav-list-cell-padding-vertical: 16px; --nav-list-cell-padding-vertical-with-addon: 16px; --page-footer-padding-vertical: 16px; --section-header-addOnEnd-margin-horizontal: 8px; --section-header-addOnStart-margin-horizontal: 12px; --section-header-addOnEnd-button-padding-horizontal: 0px; --section-header-addOnEnd-button-padding-vertical: 0px; --section-header-padding-vertical: 16px; --section-header-subtitle-margin-vertical: 14px; --section-header-subtitle-with-addOnEnd-margin-vertical: 6px; --text-badge-corner-radius: 4px; --text-badge-padding-horizontal: 6px; --text-badge-padding-vertical: 6px; --text-input-multi-padding-between-text-scrollbar: 20px; --text-input-multi-padding-scrollbar: 16px; --text-input-caption-margin-top: 10px; --text-input-label-top: 22px; --text-input-min-height: 64px; --text-input-padding-vertical: 12px; --toast-addon-padding-horizontal: 6px; --toast-addon-padding-vertical: 6px; --toast-container-max-width: 100%; --toast-container-min-width: 288px; --toast-container-padding-horizontal: 10px; --toast-container-padding-vertical: 16px; --toast-corner-radius: 8px; --tooltip-corner-radius: 8px; --typeahead-list-outer-padding-vertical: 2px; --fds-animation-enter-exit-in: cubic-bezier(0.14, 1, 0.34, 1); --fds-animation-enter-exit-out: cubic-bezier(0.45, 0.1, 0.2, 1); --fds-animation-swap-shuffle-in: cubic-bezier(0.14, 1, 0.34, 1); --fds-animation-swap-shuffle-out: cubic-bezier(0.45, 0.1, 0.2, 1); --fds-animation-move-in: cubic-bezier(0.17, 0.17, 0, 1); --fds-animation-move-out: cubic-bezier(0.17, 0.17, 0, 1); --fds-animation-expand-collapse-in: cubic-bezier(0.17, 0.17, 0, 1); --fds-animation-expand-collapse-out: cubic-bezier(0.17, 0.17, 0, 1); --fds-animation-passive-move-in: cubic-bezier(0.5, 0, 0.1, 1); --fds-animation-passive-move-out: cubic-bezier(0.5, 0, 0.1, 1); --fds-animation-quick-move-in: cubic-bezier(0.1, 0.9, 0.2, 1); --fds-animation-quick-move-out: cubic-bezier(0.1, 0.9, 0.2, 1); --fds-animation-fade-in: cubic-bezier(0, 0, 1, 1); --fds-animation-fade-out: cubic-bezier(0, 0, 1, 1); --fds-duration-extra-extra-short-in: 100ms; --fds-duration-extra-extra-short-out: 100ms; --fds-duration-extra-short-in: 200ms; --fds-duration-extra-short-out: 150ms; --fds-duration-short-in: 280ms; --fds-duration-short-out: 200ms; --fds-duration-medium-in: 400ms; --fds-duration-medium-out: 350ms; --fds-duration-long-in: 500ms; --fds-duration-long-out: 350ms; --fds-duration-extra-long-in: 1000ms; --fds-duration-extra-long-out: 1000ms; --fds-duration-none: 0ms; --fds-fast: 200ms; --fds-slow: 400ms; --font-family-apple: system-ui, -apple-system, BlinkMacSystemFont, \'.SFNSText-Regular\', sans-serif; --font-family-code: ui-monospace, Menlo, Consolas, Monaco, monospace; --font-family-default: Helvetica, Arial, sans-serif; --font-family-segoe: Segoe UI Historic, Segoe UI, Helvetica, Arial, sans-serif; --body-font-family: Placeholder Font; --body-font-size: 0.9375rem; --body-font-weight: 400; --body-line-height: 1.3333; --body-emphasized-font-family: Placeholder Font; --body-emphasized-font-size: 0.9375rem; --body-emphasized-font-weight: 600; --body-emphasized-line-height: 1.3333; --headline1-font-family: Optimistic Display Bold, system-ui, sans-serif; --headline1-font-size: 1.75rem; --headline1-font-weight: 700; --headline1-line-height: 1.2143; --headline2-font-family: Optimistic Display Bold, system-ui, sans-serif; --headline2-font-size: 1.5rem; --headline2-font-weight: 700; --headline2-line-height: 1.25; --headline3-font-family: Optimistic Display Bold, system-ui, sans-serif; --headline3-font-size: 1.0625rem; --headline3-font-weight: 700; --headline3-line-height: 1.2941; --meta-font-family: Placeholder Font; --meta-font-size: 0.8125rem; --meta-font-weight: 400; --meta-line-height: 1.3846; --meta-emphasized-font-family: Placeholder Font; --meta-emphasized-font-size: 0.8125rem; --meta-emphasized-font-weight: 600; --meta-emphasized-line-height: 1.3846; --primary-label-font-family: Optimistic Display Medium, system-ui, sans-serif; --primary-label-font-size: 1.0625rem; --primary-label-font-weight: 500; --primary-label-line-height: 1.2941; --secondary-label-font-family: Placeholder Font; --secondary-label-font-size: 0.9375rem; --secondary-label-font-weight: 500; --secondary-label-line-height: 1.3333; --tertiary-label-font-family: Placeholder Font; --tertiary-label-font-size: 0.6875rem; --tertiary-label-font-weight: 500; --tertiary-label-line-height: 1.4545; --text-input-field-font-family: Placeholder Font; --text-input-field-font-size: 1rem; --text-input-field-font-weight: 500; --text-input-field-line-height: 1.2941; --text-input-label-font-family: Placeholder Font; --text-input-label-font-size: 17px; --text-input-label-font-size-scale-multiplier: 0.75; --text-input-label-font-weight: 400; --text-input-label-line-height: 1.2941; --dialog-size-medium-max-width: 700px; --dialog-size-medium-width: 100%; --dialog-size-small-max-width: 548px; --dialog-size-small-width: 100%; --focus-ring-outline-link: 2px auto var(--focus-ring-blue); --focus-ring-shadow-default: 0 0 0 2px var(--always-white), 0 0 0 4px var(--focus-ring-blue); --focus-ring-shadow-inset: 0 0 0 2px var(--focus-ring-blue) inset, 0 0 0 4px var(--always-white) inset; --glimmer-animation-direction: alternate; --glimmer-animation-duration: 1000ms; --glimmer-animation-timing-function: steps(10, end); --glimmer-opacity-min: 0.25; --glimmer-opacity-max: 1; --radio-checked-icon-size-large: 12px; --radio-checked-icon-size-medium: 12px; --radio-border-width: 2px; --radio-size-large: 24px; --radio-size-medium: 20px; --blue-primary: rgb(0,136,244); --blue-secondary: rgb(4,59,114); --blue-tertiary: rgb(235,245,255); --chartreuse-primary: rgb(106,147,22); --chartreuse-secondary: rgb(50,65,19); --chartreuse-tertiary: rgb(226,255,152); --cyan-primary: rgb(0,142,213); --cyan-secondary: rgb(15,63,93); --cyan-tertiary: rgb(231,245,255); --dataviz-primary-2: rgb(134,218,255); --dataviz-primary-3: rgb(73,156,255); --dataviz-secondary-1: rgb(118,62,230); --dataviz-secondary-2: rgb(147,96,247); --dataviz-secondary-3: rgb(219,26,139); --dataviz-supplementary-1: rgb(255,122,105); --dataviz-supplementary-2: rgb(241,168,23); --dataviz-supplementary-3: rgb(49,162,76); --dataviz-supplementary-4: rgb(50,52,54); --fuschia-primary: rgb(250,45,138); --fuschia-secondary: rgb(118,14,62); --fuschia-tertiary: rgb(255,241,246); --green-primary: rgb(43,154,53); --green-secondary: rgb(26,68,27); --green-tertiary: rgb(227,250,224); --magenta-primary: rgb(215,77,204); --magenta-secondary: rgb(96,36,91); --magenta-tertiary: rgb(255,239,254); --orange-primary: rgb(208,108,20); --orange-secondary: rgb(94,49,14); --orange-tertiary: rgb(255,241,239); --purple-primary: rgb(125,116,255); --purple-secondary: rgb(55,50,121); --purple-tertiary: rgb(245,241,255); --red-primary: rgb(251,60,68); --red-secondary: rgb(118,22,27); --red-tertiary: rgb(255,241,239); --teal-primary: rgb(0,152,124); --teal-secondary: rgb(10,68,56); --teal-tertiary: rgb(227,247,241); --yellow-primary: rgb(161,132,0); --yellow-secondary: rgb(72,59,12); --yellow-tertiary: rgb(255,246,161); --circle-button-normal-background-color: rgba(0, 0, 0, 0.04); --circle-button-red-background-color: #FF3A33; --circle-button-green-background-color: #31CC46; --icon-primary-color: #000000; --icon-secondary-color: rgba(0, 0, 0, 0.34); --icon-tertiary-color: rgba(0, 0, 0, 0.2); --icon-nux-color: #B4B8D9; --icon-accent-color: #0A7CFF; --icon-destructive-color: #FF3A33; --icon-inactive-color: rgba(134, 142, 153, 0.75); --icon-selected-color: #000000; --icon-white-color: #FFFFFF; --pressable-background-color-hover: rgba(0, 0, 0, 0.04); --pressable-background-color-selected: rgba(0, 0, 0, 0.06); --dialog-anchor-horizontal-padding: 8px; --dialog-box-shadow: 0 12px 28px 0 var(--shadow-2), 0 2px 4px 0 var(--shadow-1), inset 0 0 0 1px var(--shadow-inset); --dialog-border-radius: 12px; --mds-green: #31CC46; --focus-ring-outline-forced-colors: 2px auto transparent !important; z-index: 0; position: relative; box-sizing: border-box; font-family: inherit; --chat-composer-button-color: #0a7cff; --chat-composer-input-background-color: var(--comment-background); --mwp-message-list-actions-gap: 0px; --mwp-message-list-actions-width: calc(var(--mwp-message-list-actions-width,70px) + 3*0px); --mwp-reply-background-color: var(--comment-footer-background); --mwp-message-list-profile-start-padding: 12px; --mw-blockquote-border-start-color: var(--placeholder-text);\"><span class=\"x1lliihq x1plvlek xryxfnj x1n2onr6 x193iq5w xeuugli x13faqbe x1vvkbs x1s928wv xhkezso x1gmr53x x1cpjm7i x1fgarty x1943h6x x1xmvt09 x6prxxf x1fcty0u xzsf02u xudqn12 x3x7a5m xq9mrsl\" dir=\"auto\" style=\"word-break: break-word; font-weight: normal; display: block; position: relative; overflow-wrap: break-word; font-family: inherit; font-size: 0.9375rem; white-space: inherit; color: var(--primary-text); max-width: 100%; overflow: visible; min-width: 0px; line-height: var(--base-line-clamp-line-height); --base-line-clamp-line-height: 19.9995px;\"><div class=\"x1gslohp x11i5rnm x12nagc x1mh8g0r x1yc453h x126k92a x18lvrbx\" dir=\"auto\" style=\"margin: 4px 0px; white-space: pre-wrap; color: var(--chat-incoming-message-text-color,inherit); text-align: left; font-family: inherit;\">Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!</div></span></div></div></div>', '1707508831.png', 'Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', 'Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', 'Get ahead in the digital world with top-notch SEO optimization and tailored web and software development solutions. Unleash your business\'s full potential now!', 0, '2024-02-09 14:00:31', '2024-02-09 14:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profession` mediumtext NOT NULL,
  `about` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `meta_title` mediumtext DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `mete_keyword` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `profession`, `about`, `facebook`, `instagram`, `twitter`, `linkedin`, `image`, `slug`, `meta_title`, `meta_description`, `mete_keyword`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Amrito Bosu', 'Full Stack Developer', NULL, 'https://www.facebook.com/amrito.bosu.60.90.75', NULL, NULL, 'https://www.linkedin.com/in/amrito-bosu-919767213/', '1707509253.jpg', 'amrito-bosu', 'Full Stack Developer', 'Full Stack Developer', 'Full Stack Developer', 0, '2024-02-08 14:33:23', '2024-02-09 14:07:33'),
(4, 'A.K.M. Ashrafuzzaman', 'CEO & SEO Consultant', 'Labore aut minim eli', 'https://www.facebook.com/ZamanITcon', NULL, 'https://twitter.com/Ashrafnarail?fbclid=IwAR3SiwgrJE79cPioilwgBuhdH5LtjkmcliGtvwDIZW8SZIqjfv5rZsHGnmw', 'https://www.linkedin.com/in/a-k-m-ashrafuzzaman-aba26028/', '1707509088.jpg', 'a.k.m.-ashrafuzzaman', 'CEO & SEO Consultant', 'CEO & SEO Consultant', 'CEO & SEO Consultant', 0, '2024-02-09 06:40:14', '2024-02-09 14:04:48'),
(5, 'Kinjal Kumar Biswas', 'Fornt-End Developer', 'This Kinjal. I am a Fornt-End Developer. Expert in React js.', NULL, NULL, NULL, NULL, '1707509429.jpg', 'kinjal-kumar-biswas', 'This Kinjal. I am a Fornt-End Developer. Expert in React js.', 'This Kinjal. I am a Fornt-End Developer. Expert in React js.', 'This Kinjal. I am a Fornt-End Developer. Expert in React js.', 0, '2024-02-09 14:10:29', '2024-02-09 14:10:29'),
(6, 'Asif Atiq', 'Software Developer', 'Software Developer', NULL, NULL, NULL, NULL, '1707509609.jpg', 'asif-atiq', 'Software Developer', 'Software Developer', 'Software Developer', 0, '2024-02-09 14:13:29', '2024-02-09 14:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_reviews`
--
ALTER TABLE `client_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_says`
--
ALTER TABLE `client_says`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guestposts`
--
ALTER TABLE `guestposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_reviews`
--
ALTER TABLE `client_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client_says`
--
ALTER TABLE `client_says`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guestposts`
--
ALTER TABLE `guestposts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
