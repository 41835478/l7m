-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2017 at 06:37 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fintolog_sahalat`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE IF NOT EXISTS `activations` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'tPf97iNBjpypHyyhFSHE0TmgdzdcYEIw', 1, '2016-03-13 15:05:12', '2016-03-13 15:05:12', '2016-03-13 15:05:12'),
(2, 2, '4O7HxmHdDXLLhEL21DoxY8tVs9TLZ4hX', 1, '2016-03-13 15:05:12', '2016-03-13 15:05:12', '2016-03-13 15:05:12'),
(23, 3, 'chdb2kUrImQgiliEt5MX8tTyvMiGBLBe', 1, NULL, '2016-04-03 07:55:47', '2016-04-03 08:16:07'),
(25, 6, '57dzZka4R03hD9jDuHuNOVX5VylRkf74', 1, NULL, '2016-04-03 08:16:49', '2016-04-03 08:16:49'),
(26, 4, 'K89rkP0DWLxLRi3rJKS0XhRRNVX2JIwE', 1, NULL, '2016-04-03 12:41:10', '2016-04-03 12:41:10'),
(30, 10, 'ksg4G06PGLF3NnfEVW5JJpGfm0fUZLqn', 1, NULL, '2016-04-26 13:53:03', '2016-04-26 13:55:34'),
(31, 11, 'ZYHjAxNlKVz0e6G8KZTOXctzn9Xb6gSt', 1, NULL, '2016-04-27 12:49:08', '2016-04-27 12:49:08'),
(32, 12, 'djXW7VAbp6KE8pqLKYjqlmc6rJwmMUTC', 1, NULL, '2016-04-27 12:55:37', '2016-04-27 12:56:07'),
(33, 13, 'JL7avcoawOAvQ5Mr0V5lCPxSaMP17Mpl', 1, '2016-05-01 13:01:21', '2016-05-01 13:01:21', '2016-05-01 13:01:21'),
(35, 15, 'InxZVzKaU3ISzvLlpGJGHPMqcn4YCfr8', 1, '2016-05-01 13:04:34', '2016-05-01 13:04:34', '2016-05-01 13:04:34'),
(37, 16, 'Xo7d8vAk19k83eA2oUO76CTvQ7OtpqQh', 1, '2016-05-01 13:05:12', '2016-05-01 13:05:12', '2016-05-01 13:05:12'),
(39, 17, 'dBtdr8fpNtuGxJcEbPuNoiBXelOOD0cu', 1, '2016-05-01 13:11:23', '2016-05-01 13:11:23', '2016-05-01 13:11:23'),
(41, 18, 'gu5JQSd9ly0QPKu9MF2nCScxcO5uwGqw', 1, '2016-05-01 13:12:22', '2016-05-01 13:12:22', '2016-05-01 13:12:22'),
(43, 19, 'e8s2ZTZWQlJ7m3x86Dg3S8SWQlhmyFXs', 1, '2016-05-01 13:14:07', '2016-05-01 13:14:07', '2016-05-01 13:14:07'),
(45, 20, 'r4zLDah67AznM1zkVRhob3gNYb8XWwGj', 1, '2016-05-01 13:17:20', '2016-05-01 13:17:20', '2016-05-01 13:17:20'),
(47, 21, 'jZeoeqMEnecZbMhH0g9EcoMzZI2w12Nx', 1, '2016-05-01 13:22:34', '2016-05-01 13:22:34', '2016-05-01 13:22:34'),
(48, 22, 'Yd0eGosRjJYuJ9lHy4ctna7MAK39BSKP', 1, '2016-05-01 13:28:23', '2016-05-01 13:28:23', '2016-05-01 13:28:23'),
(49, 23, 'X7qlgmI7cob0pdXqr2f1o3qFj3zEFjOr', 1, '2016-05-01 13:28:54', '2016-05-01 13:28:54', '2016-05-01 13:28:54'),
(50, 24, 'U5FhTJHWeqZamLA4qIvinrRY0sL9mPHj', 1, '2016-05-01 13:29:13', '2016-05-01 13:29:13', '2016-05-01 13:29:13'),
(51, 25, 'uRUR8Q3XvmqnRqvmJm69qFbBhAPdEBCP', 1, '2016-05-01 13:33:39', '2016-05-01 13:33:39', '2016-05-01 13:33:39'),
(52, 26, 'cN1jWNfLjxDQWz9rLMkYwEtEFYp3LLeW', 1, '2016-05-01 13:35:54', '2016-05-01 13:35:54', '2016-05-01 13:35:54'),
(53, 27, 'xgwqIvjLxKELsidSPg0uM2sNa3zw4lvw', 1, '2016-05-01 13:46:24', '2016-05-01 13:46:24', '2016-05-01 13:46:24'),
(54, 28, 'fzq00Yn0KhGlDPWjiv7HMdm4hmVjANkV', 1, '2016-05-01 13:46:55', '2016-05-01 13:46:55', '2016-05-01 13:46:55'),
(55, 29, 'iYF6ubSG8fyz5NniBLInUg1lF7KHXf60', 1, '2016-05-01 13:48:29', '2016-05-01 13:48:29', '2016-05-01 13:48:29'),
(56, 30, 'l3PtmrpdwumRMeQRgaHBFF3S4YWRzJw2', 1, '2016-05-01 13:49:41', '2016-05-01 13:49:41', '2016-05-01 13:49:41'),
(57, 31, 'iXcg1CGDz0xpI79gVLBL7Wzox7a2JTqD', 1, '2016-05-01 13:49:57', '2016-05-01 13:49:57', '2016-05-01 13:49:57'),
(58, 33, 'DDTR4RWYbZbyofng0arphVdxtLiuCYAX', 1, '2016-05-01 13:50:38', '2016-05-01 13:50:38', '2016-05-01 13:50:38'),
(59, 34, 'CJyqUWfRqnw8m5IvjnkHH9X184x0f23m', 1, '2016-05-01 13:50:47', '2016-05-01 13:50:47', '2016-05-01 13:50:47'),
(60, 35, 'U3JoFYSltvlcPjSxoICUDq8539XvrDZr', 1, '2016-05-01 13:53:10', '2016-05-01 13:53:10', '2016-05-01 13:53:10'),
(61, 36, '8y3UDBBZ9XM1mKNfDqxYnM3yWzzfqToF', 1, '2016-05-01 13:53:16', '2016-05-01 13:53:16', '2016-05-01 13:53:16'),
(62, 37, '2uwyRggW8K149vkNmv85o4k48XpgiR7N', 1, '2016-05-01 13:53:24', '2016-05-01 13:53:24', '2016-05-01 13:53:25'),
(63, 38, '8OF6m4azklbXjFj3urnIuQQn6DOLbiBq', 1, '2016-05-01 14:02:28', '2016-05-01 14:02:28', '2016-05-01 14:02:28'),
(64, 39, 'EZEv82huie3moSmcqqMIax6iln5eJ8BH', 1, '2016-05-01 14:07:24', '2016-05-01 14:07:24', '2016-05-01 14:07:24'),
(65, 40, 'TvbzBY6gqenH5UEgbWrXEG1Axk2urAIy', 1, '2016-05-01 14:10:48', '2016-05-01 14:10:48', '2016-05-01 14:10:48'),
(66, 41, 'RtXiCeIVz09ytzStqY023by18zB6BOhb', 1, '2016-05-01 14:14:07', '2016-05-01 14:14:07', '2016-05-01 14:14:07'),
(67, 43, 'eTA27Hi37t5mWSl3Ka3e3a31NcPe5Rl3', 1, '2016-05-01 14:14:43', '2016-05-01 14:14:43', '2016-05-01 14:14:43'),
(68, 44, '77WN0Sh66exXZ4E54rPcRYPrr0KpG1OA', 1, '2016-05-01 14:17:26', '2016-05-01 14:17:26', '2016-05-01 14:17:26'),
(70, 45, 'uTRb0VX8JahSgMvxWUu7fzkWoBH7Lycs', 1, NULL, '2016-05-09 13:23:05', '2016-05-09 13:27:00'),
(71, 45, 'wrs1fyC19FkKjrpvbgCJtC0ctjiUsxO4', 1, NULL, '2016-05-09 13:23:43', '2016-05-09 13:27:00'),
(72, 45, 'JiUXEkVNrWDJtlpjNAwQz21gbdIEQwb6', 1, NULL, '2016-05-09 13:24:05', '2016-05-09 13:27:00'),
(73, 45, 'gWuhzk8QyEB0X8GEYf9NGbR6esvHHMjQ', 1, NULL, '2016-05-09 13:24:10', '2016-05-09 13:27:00'),
(74, 45, 'Xv1uHKiw6b6Y6X1WBTPf73OQGubT7PU1', 1, NULL, '2016-05-09 13:26:08', '2016-05-09 13:27:00'),
(75, 45, '0P46UgZnXMMjBfVGbfxuBxyUEEMaN5I2', 1, NULL, '2016-05-09 13:27:00', '2016-05-09 13:27:00'),
(76, 5, 'x3heK3iakXcXlZF4Xk989NazxUZlB7Qr', 1, NULL, '2016-05-09 13:30:32', '2016-05-10 08:02:59'),
(80, 5, 'jpnafXF4sQiWF3Yo8G8tG43WilQnoRSs', 1, NULL, '2016-05-10 07:40:20', '2016-05-10 08:02:59'),
(81, 5, 'PH8aZpg0qdOCl6zepqnCVYJQrSxRMKHH', 1, NULL, '2016-05-10 07:40:56', '2016-05-10 08:02:59'),
(82, 5, 'POcB9yg27dHcXxpcGRp7pGShvamZ0QC4', 1, NULL, '2016-05-10 07:42:06', '2016-05-10 08:02:59'),
(83, 5, 'EQQQWRy6cCMj1y5SyZnGq2nO8HqkRCkg', 1, NULL, '2016-05-10 07:42:13', '2016-05-10 08:02:59'),
(84, 5, 'sRlYuLe6tKqteVqizO1jgyXh7YePOXr3', 1, NULL, '2016-05-10 07:42:43', '2016-05-10 08:02:59'),
(85, 5, 'uguqiwaqkHArF11sjiNBfJwVYGPnHX0A', 1, NULL, '2016-05-10 07:42:50', '2016-05-10 08:02:59'),
(86, 5, '4dawz9kr7raOCRSGsF7YdFANR91OvJJS', 1, NULL, '2016-05-10 07:51:52', '2016-05-10 08:02:59'),
(87, 5, '5sxywo700I4oqTaAd3iKw0E2qEjFryiV', 1, NULL, '2016-05-10 08:02:59', '2016-05-10 08:02:59'),
(98, 56, 'XfYSBKjmBD7Ec4OFWYowrTsVrl1pfTcx', 1, '2016-05-10 11:17:02', '2016-05-10 11:16:41', '2016-05-10 11:17:02'),
(99, 57, 'uUm4a9wADTtMtNisGzMgVQZ0V6nLL70h', 1, '2016-05-10 11:21:37', '2016-05-10 11:21:28', '2016-05-10 11:21:37'),
(100, 58, '6ZjLlnSSJF73I4LLIQLMjYNNqSFyVMJD', 1, '2016-05-10 11:24:31', '2016-05-10 11:24:26', '2016-05-10 11:24:31'),
(101, 59, 'x9mugFlJyzVLjhBDMKfkGXw1w1a70ZoA', 1, '2016-05-10 11:40:07', '2016-05-10 11:39:27', '2016-05-10 11:40:07'),
(102, 60, 'ScFgUNVZynEA7BGbAd7WkwDpmjV86P1r', 1, '2016-05-10 12:00:58', '2016-05-10 11:59:33', '2016-05-10 12:00:58'),
(103, 60, 'bOhFo8rWZ0i15ZKZzC4dDl7J6q6JrTXh', 1, '2016-05-10 12:02:03', '2016-05-10 12:01:42', '2016-05-10 12:02:03'),
(104, 60, '1EM3JYVSW4vytTf6qKeCbRXUeXAvn6bl', 1, '2016-05-10 12:12:18', '2016-05-10 12:02:48', '2016-05-10 12:12:18'),
(116, 60, 'eOHrp2koznt9hn7ge6NNU2BgKcvTu4m3', 1, '2016-05-10 12:14:22', '2016-05-10 12:14:10', '2016-05-10 12:14:22'),
(118, 62, '34pbdVIYpKmxvRTMljIDwKVFwWqLM8mt', 1, '2016-05-10 12:17:35', '2016-05-10 12:17:20', '2016-05-10 12:17:35'),
(120, 64, 'fyw73k63hp6oYd0vABNFAn0lrvJ35w9M', 1, NULL, '2016-05-24 08:38:45', '2016-05-24 08:44:09'),
(125, 69, 'TUsfohei0PSGpv7MmPD4WES9BX120Kqq', 1, '2016-05-29 11:37:44', '2016-05-29 11:33:21', '2016-05-29 11:37:44'),
(128, 72, '6M6iQ2QfDwEMWhPtc0QR4w4Fz1yyf82d', 1, '2016-06-12 12:37:46', '2016-06-12 12:37:46', '2016-06-12 12:37:46'),
(129, 73, 'U5vlzNBZdYVeLw6gIiE8tkNkeqL8tU3w', 1, '2016-06-12 12:46:27', '2016-06-12 12:46:27', '2016-06-12 12:46:27'),
(130, 74, 'iHXJ6mn79U2onVb7dmWdle8m2Zgehbnh', 1, '2016-06-12 12:53:44', '2016-06-12 12:53:44', '2016-06-12 12:53:44'),
(131, 75, 'bc7fvcDm2DoDFfe22sp8VmOSNndjVA2F', 1, '2016-06-13 08:59:23', '2016-06-13 08:59:23', '2016-06-13 08:59:23'),
(132, 76, 'j71eRD7aCsLqC8WSDEzPZU7em7NQeUld', 1, '2016-07-04 12:40:10', '2016-07-04 12:40:10', '2016-07-04 12:40:10'),
(133, 77, 'dFq3fmww1UUSd2mpGsqlgb1Psv6VgrXg', 1, '2016-07-04 12:57:23', '2016-07-04 12:57:23', '2016-07-04 12:57:23'),
(134, 76, '5uYLkdC5YVEsVWlTfvLP2HgKEQm3g3fP', 1, '2016-12-27 12:38:50', '2016-12-27 12:38:50', '2016-12-27 12:38:50'),
(135, 71, 'dBQWDYKSVBRAQT0wo0VkDKFiud244Paz', 1, NULL, '2017-01-03 10:40:18', '2017-01-03 10:40:18'),
(136, 70, 'Q6rTcjEEk3q56MtdZVhiYG1FfTN0giBb', 1, NULL, '2017-01-03 10:45:30', '2017-01-03 10:45:30'),
(137, 68, 'wtcbpSv7h1zA36jrIkOuenJF5mRhxeL0', 1, NULL, '2017-01-03 11:12:01', '2017-01-03 11:12:01'),
(138, 77, 'WJsOOtOGwC8jDmrrhMkV8M7S1ih2hjEX', 1, '2017-03-22 03:59:04', '2017-03-22 03:59:04', '2017-03-22 03:59:04'),
(139, 78, '0Uz4S5jyRmRWYukKZsw3Yw5jblsp1cgn', 1, '2017-03-22 21:43:26', '2017-03-22 21:43:26', '2017-03-22 21:43:26'),
(140, 79, '5Xr87r2OzNQIoiQrMwUOM5MkAsQSk1yi', 1, '2017-03-22 21:54:59', '2017-03-22 21:54:59', '2017-03-22 21:54:59'),
(141, 80, 'RYxgasRve41DM8s6mhOS3PPCXnRgRTy2', 1, '2017-03-22 21:55:47', '2017-03-22 21:55:47', '2017-03-22 21:55:47'),
(142, 81, 'SjBZa3jgXtrysKb3gSQbdkxD9wbmxmtW', 1, '2017-03-22 21:58:12', '2017-03-22 21:58:12', '2017-03-22 21:58:12'),
(143, 82, 'nucioEkxUEoXR6OclmMyOhGgFclU3M5L', 1, '2017-05-20 12:18:06', '2017-05-20 12:18:06', '2017-05-20 12:18:06'),
(144, 89, 'CFlWDVoLtA3t6IhXwVUs4qqk3yR8Mt29', 1, '2017-05-22 09:22:12', '2017-05-22 09:22:12', '2017-05-22 09:22:12'),
(145, 90, 'QOP3ICrzIWfqX1UklmheshfwnnPOxJH7', 1, '2017-05-23 04:55:32', '2017-05-23 04:55:32', '2017-05-23 04:55:32'),
(146, 91, '2vUHtW1GViGgVIpmrq93s4niCagOG0lZ', 1, '2017-05-23 04:57:03', '2017-05-23 04:57:03', '2017-05-23 04:57:03'),
(147, 92, 'd1O7Y0YZlIuM9zC9O7bZrEaPoJ4qcTAZ', 1, '2017-05-23 04:58:10', '2017-05-23 04:58:10', '2017-05-23 04:58:10'),
(148, 93, 'loKY7uWSOQwtM1yuAHAU9byWreAbyZ1y', 1, '2017-05-26 13:40:50', '2017-05-26 13:40:50', '2017-05-26 13:40:50'),
(149, 94, 'anLMmvo5WHME6rP54BjsevFN4iZuhNnN', 1, '2017-06-03 15:19:33', '2017-06-03 15:19:33', '2017-06-03 15:19:33'),
(150, 95, '24paPJ7Tk4M7wnnGwadv6r7njlGOM8ro', 1, '2017-06-03 17:41:35', '2017-06-03 17:41:35', '2017-06-03 17:41:35'),
(151, 96, 'qex2G3hIG6SfEyDIcX0bqeuNhAktACdl', 1, '2017-06-06 06:39:22', '2017-06-06 06:39:22', '2017-06-06 06:39:22'),
(153, 97, 'TY7rOfvkqB1XC9sLlOiMLtSo4mdJOTVj', 1, '2017-06-07 09:39:51', '2017-06-07 09:39:51', '2017-06-07 09:39:51'),
(154, 98, '5XfshfSLacxUOuECANEKXGWYsUmW9qjm', 1, '2017-06-07 10:04:00', '2017-06-07 10:04:00', '2017-06-07 10:04:00'),
(155, 99, 'RjZ9ElDLhh8wMdklRXwROhu0FxJmh3Ad', 1, '2017-06-07 10:05:27', '2017-06-07 10:05:27', '2017-06-07 10:05:27'),
(156, 100, '9JLz6N3Bo2TgsaYEEeVAWK6XxDqJTlKi', 1, '2017-06-08 06:34:31', '2017-06-08 06:34:31', '2017-06-08 06:34:31'),
(157, 101, 'LBzlZtY45pUKycqZfRnV1eKPN7upMPyq', 1, '2017-06-11 06:41:14', '2017-06-11 06:41:14', '2017-06-11 06:41:14'),
(158, 102, '7ZqXfnHgbw2CWqeo8IYJlRQAAvbgjECA', 1, '2017-06-11 07:58:45', '2017-06-11 07:58:45', '2017-06-11 07:58:45'),
(159, 103, 'okDLtD72yiCRRdWONtRzwdPhoD1q8ORl', 1, '2017-06-11 10:41:58', '2017-06-11 10:41:58', '2017-06-11 10:41:58'),
(160, 104, '6Krnaad3iZp7WKjB99hGBmXs0pOd0azp', 1, '2017-06-15 06:45:35', '2017-06-15 06:45:35', '2017-06-15 06:45:35'),
(161, 105, 't7SfjCSIEG8aUNHXDSiw6AS1a7skH5A6', 1, '2017-06-15 20:49:29', '2017-06-15 20:49:29', '2017-06-15 20:49:29'),
(162, 106, 'Vlilqg8FSr4o06FKyfyQow1xJXkGxRMF', 1, '2017-08-27 18:19:44', '2017-08-27 18:19:44', '2017-08-27 18:19:44'),
(163, 107, 'diq0u85QVuolnIYtHPAMO9T8T1HxPMKD', 1, '2017-08-27 18:21:18', '2017-08-27 18:21:18', '2017-08-27 18:21:18'),
(164, 108, 'goe7UfDAFxJpAMGxm4djZg2zqpkOKdhA', 1, '2017-08-27 18:27:48', '2017-08-27 18:27:48', '2017-08-27 18:27:48'),
(165, 109, 'z03nI8FYwUPGb5Oi1xHCKg80n7utB02U', 1, '2017-08-27 18:30:04', '2017-08-27 18:30:04', '2017-08-27 18:30:04'),
(166, 110, 'WaZ361NHVLCIP1GHQWntXb2c7TQBlahY', 1, '2017-08-27 18:45:25', '2017-08-27 18:45:25', '2017-08-27 18:45:25'),
(167, 111, 'rIlfSjVlELTIEavdr7K5PV5hN1tSYtgR', 1, '2017-08-28 12:58:54', '2017-08-28 12:58:54', '2017-08-28 12:58:54'),
(168, 112, 'ryKsGalsoC3Fizk5gQ6I8AjVn1Y1adfg', 1, '2017-08-28 14:33:35', '2017-08-28 14:33:35', '2017-08-28 14:33:35'),
(169, 113, 'FiPTHpeNLGskhR7wgAKckWTR16CdZiID', 1, '2017-08-28 14:42:42', '2017-08-28 14:42:42', '2017-08-28 14:42:42'),
(170, 114, 'WL4xJnm3ekywwliy8zJaUco2dL4gGTCw', 1, '2017-08-29 12:59:58', '2017-08-29 12:59:58', '2017-08-29 12:59:58'),
(171, 115, 'RcSF2deOU53PCHvG2Kb4v2rcYoPzg73B', 1, '2017-08-29 15:08:19', '2017-08-29 15:08:19', '2017-08-29 15:08:19'),
(172, 116, 'lOwgKIy74sgCzfduF1ZaZXDY4ZnSMCju', 1, '2017-08-29 15:16:48', '2017-08-29 15:16:48', '2017-08-29 15:16:48'),
(173, 117, 'mP7nEQNWwQJ4CjXXKrcnjlTb3Kg7bqzn', 1, '2017-08-29 15:19:37', '2017-08-29 15:19:37', '2017-08-29 15:19:37'),
(174, 118, 'AxnADaz1CToNQ0QHdq80aBG9ocHQOn2Z', 1, '2017-08-29 15:35:18', '2017-08-29 15:35:18', '2017-08-29 15:35:18'),
(175, 119, 'geaEmp2ygV8GR7gxZKF1rwxFDku9RQdE', 1, '2017-08-30 17:38:52', '2017-08-30 17:38:52', '2017-08-30 17:38:52'),
(176, 121, 'iNcJ2SuTzZynAMt4A76IBAghmiC5WcAI', 1, '2017-08-30 18:22:50', '2017-08-30 18:22:50', '2017-08-30 18:22:50'),
(177, 122, 'wlJXCmxvh3FvKumWaLsYAIpa46Ts5oQa', 1, '2017-08-30 18:23:13', '2017-08-30 18:23:13', '2017-08-30 18:23:13'),
(178, 123, 'qULjReArZFgyYjP7iWoL4sSjmfkiYhnN', 1, '2017-09-06 12:47:48', '2017-09-06 12:47:48', '2017-09-06 12:47:48'),
(179, 124, 's0Bgcg57YNslgRkticgrHMRQsi2T53S4', 1, '2017-09-06 13:31:55', '2017-09-06 13:31:55', '2017-09-06 13:31:55'),
(180, 125, 'bZUS4gzlK8RgECuxjV2EtrLjVIgmHoiy', 1, '2017-09-06 17:54:51', '2017-09-06 17:54:51', '2017-09-06 17:54:51'),
(181, 126, 'FoBLR0gUQA8aLA03zGrvoQ4iKv889T0z', 1, '2017-09-06 17:59:14', '2017-09-06 17:59:14', '2017-09-06 17:59:14'),
(182, 127, 'Q4tDW76dZnUi0SSsIhgZ71CTBsjvigUZ', 1, '2017-09-07 12:14:59', '2017-09-07 12:14:59', '2017-09-07 12:14:59'),
(183, 128, 'Q9Wdkox3Rdo3SFvueC7CN8uzoPCLu0d6', 1, '2017-09-07 14:50:53', '2017-09-07 14:50:53', '2017-09-07 14:50:53'),
(184, 129, 'yQbo2tAPyjOGuw4Iyl8Kny05301pATaS', 1, '2017-09-07 14:52:50', '2017-09-07 14:52:50', '2017-09-07 14:52:50'),
(185, 130, 'vSmPWkuDYn6Hfp6VbOSugiOxW87tBUEt', 1, '2017-09-07 14:55:25', '2017-09-07 14:55:25', '2017-09-07 14:55:25'),
(186, 131, 'KGMAYoHlhKXURfnSXtmFC0QKRdN4dsDz', 1, '2017-09-07 17:42:29', '2017-09-07 17:42:29', '2017-09-07 17:42:29'),
(187, 132, '9r1nld7SrB2NuSQDPZrd0hlChg1Gtdqg', 1, '2017-09-10 13:28:14', '2017-09-10 13:28:14', '2017-09-10 13:28:14'),
(188, 134, 'eU9TKiBexL9REzQvjKlxh8KQxC0U9kB9', 1, '2017-09-11 18:17:42', '2017-09-11 18:17:42', '2017-09-11 18:17:42'),
(189, 135, 'XvuaELKBiXD8Rbw7bSE1Yox4sldlCyvq', 1, '2017-09-13 12:03:33', '2017-09-13 12:03:33', '2017-09-13 12:03:33'),
(190, 136, '80alpFTsmkD9ZfZwN2cqejK9THrsGkNR', 1, '2017-09-13 12:34:47', '2017-09-13 12:34:47', '2017-09-13 12:34:47'),
(191, 137, '63AftXvbmuvBv9ABK4JnONeo2HDgvX4K', 1, '2017-09-13 13:11:15', '2017-09-13 13:11:15', '2017-09-13 13:11:15'),
(192, 138, 'ofVGsHLGzm9FKJP6AJqzIDVa9AXjASew', 1, '2017-09-13 13:13:52', '2017-09-13 13:13:52', '2017-09-13 13:13:52'),
(193, 139, 'ddUT5YnsYRKTrmU3PQGr3FUJogjEm27F', 1, '2017-09-13 15:36:33', '2017-09-13 15:36:33', '2017-09-13 15:36:33'),
(194, 140, 'J4dKgE481YFloNn73qxvDOVYDWCzdtDU', 1, '2017-09-19 16:39:51', '2017-09-19 16:39:51', '2017-09-19 16:39:51'),
(195, 141, 'p2x4vH6nxb9NE11DodVkvYOT6bkfxBDf', 1, '2017-09-20 14:13:01', '2017-09-20 14:13:01', '2017-09-20 14:13:01'),
(196, 142, 'uqc1yzXNJBnyKkkBrEJRUQYeDowOdb4d', 1, '2017-09-26 15:39:25', '2017-09-26 15:39:25', '2017-09-26 15:39:25'),
(197, 143, 'X1teTALQ2DdeCZKd0BvJ7gDZX5jXuv8R', 1, '2017-10-04 18:36:33', '2017-10-04 18:36:33', '2017-10-04 18:36:33'),
(198, 144, 'QOVEZuSz7oVV7slcGs68jIrEvhY4OYkO', 1, '2017-10-05 12:06:45', '2017-10-05 12:06:45', '2017-10-05 12:06:45'),
(199, 145, 'OCL54zZXcXbnhRZNTeV4vmSwPrHvur1M', 1, '2017-10-05 18:31:13', '2017-10-05 18:31:13', '2017-10-05 18:31:13'),
(200, 146, 'j18mvDcqJPIsOgyWTNHTpKw7xm7tabNi', 1, '2017-10-08 13:38:44', '2017-10-08 13:38:44', '2017-10-08 13:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `paci_number` varchar(20) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `judda` varchar(255) DEFAULT NULL,
  `avenue` varchar(255) DEFAULT NULL,
  `building` varchar(255) DEFAULT NULL,
  `floor` varchar(255) DEFAULT NULL,
  `apartment_number` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `long` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `directions` varchar(255) DEFAULT NULL,
  `default` int(11) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `users_id`, `area_id`, `name`, `type`, `first_name`, `last_name`, `paci_number`, `block`, `street`, `judda`, `avenue`, `building`, `floor`, `apartment_number`, `mobile`, `phone`, `long`, `lat`, `directions`, `default`, `notification`, `created_at`, `updated_at`) VALUES
(1, 82, 4, 'second address', 1, 'taylor', 'successor', '234', 'block', 'sdf', 'sdf', 'sdf', 'building', 'floor', 'sfg', '3454353', '345345', '35.90153503', '31.91148692', 'sdfg', 1, 0, '2017-05-20 15:54:17', '2017-05-26 17:33:21'),
(2, 0, 3, 'city address', 0, 'asdf', 'ksjdf', 'asdf', 'lkjsdf', 'lkjdsf', NULL, 'kjldsf', 'lk', 'lkj', 'lkj', 'sdkfj', 'jksdf', '35.91526794', '31.91265266', '', NULL, NULL, '2017-05-22 10:50:54', '2017-05-22 10:50:54'),
(3, 0, 3, 'ksdjf', 0, 'admin', 'adin', 'sdklfj', 'kjsdf', 'klsjdf', NULL, 'kjdfs', 'jklsdf', 'lkjsdf', 'lkjkjsdf', '234324', '234234', '35.92556762', '31.91381837', 'kjfsdf', NULL, NULL, '2017-05-22 11:15:58', '2017-05-22 11:15:58'),
(4, 89, 3, 'yousif', 0, 'aslkdfj', 'skldfj', 'skdflj', 'slkjdf', 'kljsdf', NULL, 'kjlsdf', 'kljdsf', 'kljsdf', 'lkjsdf', '23443', '234', '35.93380737', '31.92897136', 'slkdfj', NULL, NULL, '2017-05-22 12:22:12', '2017-05-22 12:22:12'),
(5, 92, 3, 'vacation address ', 0, 'rrrrrr', 'rrrrrr', 'rrrrrr', 'rrrrrr', 'rrrrrr', NULL, 'rrrrrr', 'rrrrrr', 'rrrrrr', 'rrrrrr', '34534345', '3534534', '35.94136047', '31.94179116', 'sddddddddddddd', NULL, NULL, '2017-05-23 07:58:10', '2017-05-23 07:58:10'),
(6, 82, 5, 'home address', 0, NULL, NULL, '', '23', 'sdf', NULL, 'sdf', 'sdfg', 'sdfg', 'sfg', '', '', '35.94410705', '31.96393025', 'sdfg', NULL, NULL, '2017-05-23 19:48:24', '2017-05-26 17:06:10'),
(7, 82, 5, 'third address', NULL, NULL, NULL, NULL, '23', 'sdf', NULL, 'sdf', 'sdfg', 'sdfg', 'sfg', NULL, NULL, '35.95646667', '31.94645247', 'sdfg', NULL, NULL, '2017-05-23 19:49:11', '2017-05-23 19:54:59'),
(8, 93, 3, 'last address', 0, 'sdf', 'sdf', 'sdf', 'sfd', 'sdf', NULL, 'safd', 'asfd', 'sg', 'sadf', '234', '24234', '35.94960022', '31.96626037', 'sdf', NULL, NULL, '2017-05-26 16:40:50', '2017-05-26 16:40:50'),
(9, 82, 3, 'address2', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.91732788', '31.95227876', 'hgjh', NULL, NULL, '2017-05-26 17:41:43', '2017-05-26 17:41:43'),
(11, 82, 3, 'address 1', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.88642883', '31.95402658', 'hgjh', NULL, NULL, '2017-05-26 21:26:23', '2017-05-26 21:26:23'),
(13, 82, 3, 'address now', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.90192557', '31.9590672', 'hgjh', NULL, NULL, '2017-05-26 21:27:25', '2017-05-26 21:27:25'),
(14, 82, 3, 'new address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.90261221', '31.96256254', 'hgjh', NULL, NULL, '2017-05-26 21:28:08', '2017-06-03 17:33:31'),
(15, 95, 3, 'demo', 0, NULL, NULL, 'dsf', 'dsf', 'hkjh', NULL, 'hk', 'jhj', 'hjh', 'hkjh', '976', '8768768', '35.90947867', '31.95498913', 'dsf', NULL, NULL, '2017-06-03 21:06:16', '2017-06-03 21:06:16'),
(16, 95, 3, 'demo', 0, NULL, NULL, 'dsf', 'dsf', 'hkjh', NULL, 'hk', 'jhj', 'hjh', 'hkjh', '976', '8768768', '35.91085196', '31.96197999', 'dsf', NULL, NULL, '2017-06-03 21:06:46', '2017-06-03 21:06:46'),
(17, 82, 3, 'salim address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.91840506', '31.98178455', 'hgjh', NULL, NULL, '2017-06-07 13:43:22', '2017-06-07 13:43:22'),
(18, 82, 3, 'shamiya address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.90055228', '31.97945482', 'hgjh', NULL, NULL, '2017-06-07 20:10:22', '2017-06-07 20:10:22'),
(19, 82, 7, 'shamiya address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.89437247', '31.98586143', 'hgjh', NULL, NULL, '2017-06-07 20:10:56', '2017-06-07 20:10:56'),
(20, 82, 6, 'khaldiya address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.88063956', '31.98586143', 'hgjh', NULL, NULL, '2017-06-07 20:33:52', '2017-06-07 20:33:52'),
(23, 82, 4, 'kuwait city address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.86141348', '31.97013533', 'hgjh', NULL, NULL, '2017-06-07 20:59:35', '2017-06-07 20:59:35'),
(26, 82, 5, 'kaifan address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.83669424', '31.95557172', 'hgjh', NULL, NULL, '2017-06-07 21:15:22', '2017-06-07 21:15:22'),
(27, 82, 3, 'shuwaikh address', 1, NULL, NULL, 'sfsdf', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.8661521', '31.9589647', 'hgjh', NULL, NULL, '2017-06-07 21:22:22', '2017-06-07 21:22:22'),
(28, 91, 5, 'كيفان أدرس ', 0, 'sd', 'vdsfv', '2424', 'المجمع', 'الشارع', 'sdc', 'الجادة', 'البناء', 'الطابق', '43', '28472394', '28492834', '47.97720868786621', '29.27966221534416', 'إضافي', 0, 0, '2017-06-15 09:50:57', '2017-06-15 22:43:26'),
(29, 106, 8, 'Hawalli', 0, 'Raghda', 'Mawaqaa', '10733451', '1', 'St 8', NULL, 'Hawalli', '544', '3', '10', '97367306', '97367306', '48.006189', '29.334709', '29.334709,48.006189', NULL, NULL, '2017-08-27 12:19:44', '2017-08-27 12:19:44'),
(30, 108, 8, 'Hawalli', NULL, 'Raghda', 'Mawaqaa', '10733451', '1', 'St 8', NULL, 'Hawalli', '10', '3', '10', '97367306', '97367306', '48.006189', '29.334709', '29.334709,48.006189', NULL, NULL, '2017-08-27 12:27:48', '2017-08-27 12:27:48'),
(31, 109, 3, 'Shuwaikh', 2, NULL, NULL, '', '1', '44', NULL, '55', '10', '3', '10', '97367306', '97367306', '47.95334815979004', '29.35371350710515', '', NULL, NULL, '2017-08-27 12:33:52', '2017-08-27 12:33:52'),
(32, 110, 3, 'fasd', 0, NULL, NULL, '', 'fsdf', 'lkj', NULL, 'lkj', 'lkj', '76', '76', '987969', '876876', '35.896968841552734', '31.95536654821663', 'kjhkjh', NULL, NULL, '2017-08-27 12:46:24', '2017-08-27 12:46:24'),
(33, 111, 4, 'Kuwait', 0, NULL, NULL, '', '55', '5', NULL, '55', '77', '7', '10', '99', '99', '47.989139556884766', '29.380155725491882', 'uuu', NULL, NULL, '2017-08-28 07:00:39', '2017-08-28 07:00:39'),
(34, 114, 7, 'Shamiya', 0, NULL, NULL, '', '2', '22', NULL, '56', '67', '19', '5', '555', '777', '47.985877990722656', '29.334373055436533', '', NULL, NULL, '2017-08-29 07:02:40', '2017-08-29 07:02:40'),
(35, 114, 7, 'Shamiya', 0, NULL, NULL, '', '2', '22', NULL, '56', '67', '19', '5', '555', '777', '47.985877990722656', '29.334373055436533', '', NULL, NULL, '2017-08-29 07:37:04', '2017-08-29 07:37:04'),
(36, 114, 3, 'Shuwaikh', 0, NULL, NULL, '', '2', '22', NULL, '56', '67', '19', '5', '555', '777', '47.944207191467285', '29.34761623669405', '', NULL, NULL, '2017-08-29 07:38:05', '2017-08-29 07:38:05'),
(37, 82, 3, 'shuwaikh address', 1, NULL, NULL, '10733451', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.8661521', '31.9589647', 'hgjh', NULL, NULL, '2017-08-30 12:25:30', '2017-08-30 12:25:30'),
(38, 82, 3, 'shuwaikh address', 1, NULL, NULL, '10733451', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.8661521', '31.9589647', 'hgjh', NULL, NULL, '2017-08-30 12:25:37', '2017-08-30 12:25:37'),
(39, 82, 3, 'shuwaikh address', 1, NULL, NULL, '10733451', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.8661521', '31.9589647', 'hgjh', NULL, NULL, '2017-08-30 12:25:45', '2017-08-30 12:25:45'),
(40, 82, 3, 'shuwaikh address', 1, NULL, NULL, '10733451', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.8661521', '31.9589647', 'hgjh', NULL, NULL, '2017-08-30 12:25:50', '2017-08-30 12:25:50'),
(41, 82, 3, 'shuwaikh address', 1, NULL, NULL, '10733451', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.8661521', '31.9589647', 'hgjh', NULL, NULL, '2017-08-30 12:26:21', '2017-08-30 12:26:21'),
(42, 118, 8, 'Hawalli', NULL, NULL, NULL, '10733451', '6', '6', NULL, '8', '8', '78', '8', '', '', '47.990169525146484', '29.381314986673438', '', NULL, NULL, '2017-08-30 12:26:48', '2017-08-30 12:26:48'),
(43, 118, 8, 'Hawalli', NULL, NULL, NULL, '10733451', '6', '6', NULL, '8', '8', '78', '8', '', '', '47.990169525146484', '29.381314986673438', '', NULL, NULL, '2017-08-30 12:27:45', '2017-08-30 12:27:45'),
(44, 123, 3, 'ashraf', 0, NULL, NULL, '', '212', '21', NULL, '21', '12', '212', '212', '51204020', '+96551204020', '', '', '', NULL, NULL, '2017-09-06 06:49:48', '2017-09-06 06:49:48'),
(45, 82, 3, 'shuwaikh address', 1, NULL, NULL, '10733451', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.8661521', '31.9589647', 'hgjh', NULL, NULL, '2017-09-06 08:08:45', '2017-09-06 08:08:45'),
(46, 82, 3, 'shuwaikh address', 1, NULL, NULL, '10733451', 'jkj', 'lkjlk', NULL, 'jlkj', 'lkj', 'lkjl', 'kjkjl', '876876', '67868', '35.8661521', '31.9589647', 'hgjh', NULL, NULL, '2017-09-06 08:08:55', '2017-09-06 08:08:55'),
(47, 82, 3, 'shuwaikh address', 1, NULL, NULL, '10733451', '54', '555', NULL, '55', '66فغفا', 'gff', 'f4', '876876', '67868', '35.8661521', '31.9589647', 'hgjh', NULL, NULL, '2017-09-06 08:10:19', '2017-09-06 08:10:19'),
(48, 82, 5, 'kaifan address', 1, NULL, NULL, '10733451', '54', '555', NULL, '55', '66فغفا', 'gff', 'f4', '876876', '67868', '35.8661521', '31.9589647', 'hgjh', NULL, NULL, '2017-09-06 08:19:50', '2017-09-06 08:19:50'),
(49, 125, 8, 'Hawalli', NULL, 'Raghda', 'Mawaqaa', '', '5', '5', NULL, '32', '66', '66', '55', '555', '777', '', '', '', NULL, NULL, '2017-09-06 11:54:51', '2017-09-06 11:54:51'),
(50, 126, 3, 'Shuwaikh', 2, NULL, NULL, '', '144', '44', NULL, '44', '10', '19', '10', '97367306', '777', '', '', '', NULL, NULL, '2017-09-06 12:00:07', '2017-09-06 12:00:07'),
(51, 126, 4, 'Kuwait', 2, NULL, NULL, '', '144', '44', NULL, '44', '10', '19', '10', '97367306', '777', '', '', '', NULL, NULL, '2017-09-06 12:18:17', '2017-09-06 12:18:17'),
(52, 127, 4, 'merhan', 0, NULL, NULL, '', '2', '2', NULL, '2', '2', '2', '2', 'mera', 'mera', '', '', 'Directions ', NULL, NULL, '2017-09-07 06:20:08', '2017-09-07 06:20:08'),
(53, 127, 3, ' Amman', 0, NULL, NULL, '', '28', '8', NULL, '8', '8', '8', '8', '99999999', '999999999', '', '', 'Amman jordan', NULL, NULL, '2017-09-07 06:36:39', '2017-09-10 07:30:05'),
(54, 127, 7, ' test', 0, NULL, NULL, '', '2', '2', NULL, '2', '2', '2', '2', 'test', 'test', '', '', 'test', NULL, NULL, '2017-09-07 07:53:52', '2017-09-07 07:53:52'),
(55, 128, 4, 'test', 0, 'tees', 'tes', '', '2', '2', NULL, '2', '2', '2', '2', '8888888888', '888888888', '', '', 'Directions', NULL, NULL, '2017-09-07 08:50:53', '2017-09-07 08:50:53'),
(56, 129, 5, 'teeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeest', 0, 'teeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeest', 'teeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeest', '', '7', '7', NULL, '7', '7', '7', '7', '8888888888', '888888888', '', '', 'teeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeest', NULL, NULL, '2017-09-07 08:52:50', '2017-09-07 08:52:50'),
(57, 130, 4, 'ميرهان', NULL, 'ميرهان', 'ميرهان', '', '7', '2', NULL, '2', '2', '7', '7', '8888888888', '888888888', '', '', 'Directions (optional) ', NULL, NULL, '2017-09-07 08:55:25', '2017-09-07 08:55:25'),
(58, 127, 4, 'Zarqa', 0, NULL, NULL, '', '4', '4', NULL, '4', '4', '4', '4', '444444444', '4444444444', '', '', 'zarqa', NULL, NULL, '2017-09-07 11:49:29', '2017-09-10 07:30:45'),
(59, 127, 7, ' test', 0, NULL, NULL, '', '2', '2', NULL, '2', '2', '2', '2', 'test', 'test', '', '', 'test', NULL, NULL, '2017-09-07 11:50:26', '2017-09-07 11:50:26'),
(60, 127, 4, 'merhan', 0, NULL, NULL, '', '2', '2', NULL, '2', '2', '2', '2', 'mera', 'mera', '', '', 'Directions ', NULL, NULL, '2017-09-10 05:46:43', '2017-09-10 05:46:43'),
(61, 127, 4, 'merhan', 0, NULL, NULL, '', '2', '2', NULL, '2', '2', '2', '2', 'mera', 'mera', '', '', 'Directions ', NULL, NULL, '2017-09-10 05:50:21', '2017-09-10 05:50:21'),
(62, 132, 6, 'rose', 0, 'rose', 'rose', '', '1', '1', NULL, '1', '1', '1', '1', '0799999999', '0799999999', '', '', '', NULL, NULL, '2017-09-10 07:28:14', '2017-09-10 07:28:14'),
(63, 127, 4, 'Zarqa', 0, NULL, NULL, '', '4', '4', NULL, '4', '4', '4', '4', '444444444', '4444444444', '', '', 'zarqa', NULL, NULL, '2017-09-10 08:20:58', '2017-09-10 08:20:58'),
(64, 127, 5, 'Kaifan', NULL, NULL, NULL, '', '4', '8', NULL, '4', '8', '8', '8', '11111', '1111111111', '', '', '', NULL, NULL, '2017-09-10 12:06:29', '2017-09-10 12:06:29'),
(65, 127, 3, 'shuwaikh', 1, NULL, NULL, '', '4', '2', NULL, '4', '8', '8', '4', '07999999999', '8888888', '', '', 'shuwaikh', NULL, NULL, '2017-09-10 12:07:12', '2017-09-10 12:07:12'),
(66, 127, 3, 'shuwaikh', 0, NULL, NULL, '', '4', '2', NULL, '4', '8', '8', '4', '07999999999', '8888888', '', '', 'shuwaikh', NULL, NULL, '2017-09-10 12:26:50', '2017-09-10 12:26:50'),
(67, 127, 6, 'test', 1, 'test', 'test', NULL, '2', '2', '2', '2', '2', '2', '2', '2222222', '222222', '2', '2', 'test', 0, 0, '2017-09-12 06:23:36', '2017-09-12 06:23:36'),
(68, 130, 7, 'Merhan', 2, 'Merhan', 'Merhan', NULL, '2', '2', '2', '2', '2', '2', '2', '07999999999', '8888888', '2', '2', 'Merhan', 0, 0, '2017-09-12 06:26:57', '2017-09-12 06:26:57'),
(69, 137, 5, 'as', 2, 'mohmmed', 'eloustah', '', 'a', 'a', NULL, 'a', 'q', 'q', 'q', '0788888888', '88888888', '', '', 'q', NULL, NULL, '2017-09-13 07:11:15', '2017-09-13 07:11:15'),
(70, 138, 5, 's', 1, 'aa', 'aa', '', 'k', 'k', NULL, 'k', 'k', 'k', 'k', '8888888', '888888', '', '', 'k', NULL, NULL, '2017-09-13 07:13:52', '2017-09-13 07:13:52'),
(71, 138, 3, 's', 1, NULL, NULL, '', 'k', 'k', NULL, 'k', 'k', 'k', 'k', '8888888', '888888', '', '', 'k', NULL, NULL, '2017-09-13 07:55:32', '2017-09-13 07:55:32'),
(72, 82, 9, 'amman', 1, NULL, NULL, '', '1', '1', NULL, '1', '1', '1', '1', '88888888888', '8888888888', '', '', 'amman', NULL, NULL, '2017-09-13 08:12:56', '2017-09-13 08:12:56'),
(73, 82, 9, 'Amman', 1, NULL, NULL, '', '2', '8', NULL, '2', '8', '2', '2', '8888888', '8888888', '', '', 'Amman', NULL, NULL, '2017-09-13 08:14:01', '2017-09-13 08:14:01'),
(74, 138, 3, 's', 1, NULL, NULL, '', 'k', 'k', NULL, 'k', 'k', 'k', 'k', '8888888', '888888', '47.97278881072998', '29.22896493254656', 'k', NULL, NULL, '2017-09-13 08:16:52', '2017-09-13 08:16:52'),
(75, 138, 3, 'HOME', 1, NULL, NULL, '', 'k', 'k', NULL, 'k', 'k', 'k', 'k', '8888888', '888888', '47.97313213348389', '29.23057531986917', 'k', NULL, NULL, '2017-09-13 08:17:28', '2017-09-13 08:17:28'),
(76, 139, 8, 'Hawalli', NULL, NULL, NULL, '', '66', '6', NULL, '6', '8978', '767', '66', '666', '77', '', '', '', NULL, NULL, '2017-09-13 09:39:23', '2017-09-13 09:39:23'),
(77, 139, 8, 'Hawalli', NULL, NULL, NULL, '', '66', '6', NULL, '6', '8978', '767', '66', '666', '77', '', '', '', NULL, NULL, '2017-09-13 09:40:38', '2017-09-13 09:40:38'),
(78, 139, 3, 'Shuwaikh', 0, NULL, NULL, '', '66', '6', NULL, '6', '8978', '767', '66', '666', '77', '', '', '', NULL, NULL, '2017-09-13 09:42:05', '2017-09-13 09:42:05'),
(79, 82, 3, 'second address', 1, NULL, NULL, '234', 'block', 'sdf', NULL, 'sdf', 'building', 'floor', 'sfg', '3454353', '345345', '35.9013032913208', '31.911734639671515', 'sdfg', NULL, NULL, '2017-09-13 10:43:24', '2017-09-13 10:43:24'),
(80, 142, 8, 'test', 1, NULL, NULL, '', '2', '2', NULL, '2', '2', '2', '2', '8888', '8888', '', '', '', NULL, NULL, '2017-09-26 09:42:23', '2017-09-26 09:42:23'),
(81, 82, 5, 'second address', 1, NULL, NULL, '234', 'block', 'sdf', NULL, 'sdf', 'building', 'floor', 'sfg', '3454353', '345345', '35.9013032913208', '31.911734639671515', 'sdfg', NULL, NULL, '2017-10-08 07:12:02', '2017-10-08 07:12:02'),
(82, 146, 3, 'mohmmed', 0, NULL, NULL, '', 'aq', 'aas', NULL, 'sad', 'sad', 'asd', 'sad', '546784', '1235667', '47.98150062561035', '29.230088461256667', 'sd', NULL, NULL, '2017-10-08 07:39:17', '2017-10-08 07:39:17'),
(83, 146, 4, 'mohmmed', 0, NULL, NULL, '', 'aq', 'aas', NULL, 'sad', 'sad', 'asd', 'sad', '546784', '1235667', '47.98150062561035', '29.230088461256667', 'sd', NULL, NULL, '2017-10-08 07:41:15', '2017-10-08 07:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `governorate_id` int(11) NOT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name_en`, `name_ar`, `governorate_id`, `description_en`, `description_ar`, `created_at`, `updated_at`) VALUES
(3, 'Shuwaikh', 'الشويكة', 3, 'Shuwaikh area', 'منطقة الشويكة', '2017-05-19 13:39:11', '2017-06-07 16:18:14'),
(4, 'Kuwait City', 'مدينة الكويت', 4, 'Kuwait City area', 'مدينة الكويت', '2017-05-19 13:40:00', '2017-06-07 16:21:23'),
(5, 'Kaifan', 'كيفان', 4, 'Kaifan area', 'منطقة كيفان', '2017-05-19 13:41:17', '2017-06-07 16:19:52'),
(6, 'Khaldiya', 'الخالدية', 3, 'Khaldiya area', 'منطقة الخالدية', '2017-06-07 16:22:21', '2017-06-07 16:22:21'),
(7, 'Shamiya', 'شامية', 3, 'Shamiya area', 'منطقة الشامية', '2017-06-07 16:35:15', '2017-06-07 16:35:15'),
(8, 'Hawalli', 'حولي', 3, 'Hawalli', 'حولي', '2017-08-27 12:16:36', '2017-08-27 12:16:36'),
(9, 'Amman', 'عمان', 3, 'amman', 'amman', '2017-09-13 06:14:10', '2017-09-13 06:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `audit_track`
--

CREATE TABLE IF NOT EXISTS `audit_track` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `action` varchar(255) DEFAULT NULL,
  `users_name` varchar(100) DEFAULT NULL,
  `users_role` varchar(100) DEFAULT NULL,
  `description` text,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `audit_track`
--

INSERT INTO `audit_track` (`id`, `users_id`, `action`, `users_name`, `users_role`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'addAddress', 'dddd', 'dddd', '{"_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","users_id":"13","area_id":"3","name":"sd","type":"0","first_name":"oijo","last_name":"ijoi","pacl_number":"joijoi","block":"joij","street":"oijoi","judda":"joi","avenue":"jo","building":"ijo","floor":"ijoi","apartment_number":"joi","mobile":"jo","phone":"ijoi","long":"joijo","lat":"ijo","directions":"ijoj","default":"0","notification":"0"}', '2017-06-15 22:28:39', '2017-06-15 22:28:39'),
(2, 82, 'Delete Address', 'taylor successor', 'Admin . Client . ', '{"id":29,"users_id":13,"area_id":3,"name":"sd","type":0,"first_name":"oijo","last_name":"ijoi","paci_number":null,"block":"joij","street":"oijoi","judda":"joi","avenue":"jo","building":"ijo","floor":"ijoi","apartment_number":"joi","mobile":"jo","phone":"ijoi","long":"joijo","lat":"ijo","directions":"ijoj","default":0,"notification":0,"created_at":"2017-06-15 22:28:39","updated_at":"2017-06-15 22:28:39"}', '2017-06-15 22:41:15', '2017-06-15 22:41:15'),
(3, 82, 'Update Address', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","users_id":"91","area_id":"5","name":"\\u0643\\u064a\\u0641\\u0627\\u0646 \\u0623\\u062f\\u0631\\u0633 ","type":"0","first_name":"sd","last_name":"vdsfv","pacl_number":"","block":"\\u0627\\u0644\\u0645\\u062c\\u0645\\u0639","street":"\\u0627\\u0644\\u0634\\u0627\\u0631\\u0639","judda":"sdc","avenue":"\\u0627\\u0644\\u062c\\u0627\\u062f\\u0629","building":"\\u0627\\u0644\\u0628\\u0646\\u0627\\u0621","floor":"\\u0627\\u0644\\u0637\\u0627\\u0628\\u0642","apartment_number":"43","mobile":"28472394","phone":"28492834","long":"47.97720868786621","lat":"29.27966221534416","directions":"\\u0625\\u0636\\u0627\\u0641\\u064a","default":"0","notification":"0"}', '2017-06-15 22:43:26', '2017-06-15 22:43:26'),
(4, 82, 'Add Area', 'taylor successor', 'Admin . Client . ', '{"_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","name_en":"area","name_ar":"area","governorate_id":"3","description_en":"hjb","description_ar":"hgvy"}', '2017-06-15 23:12:34', '2017-06-15 23:12:34'),
(5, 82, 'Update area', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","name_en":"area","name_ar":"arean","governorate_id":"3","description_en":"hjb","description_ar":"hgvy"}', '2017-06-15 23:12:50', '2017-06-15 23:12:50'),
(6, 82, 'Delete Area', 'taylor successor', 'Admin . Client . ', '{"id":8,"name_en":"area","name_ar":"arean","governorate_id":3,"description_en":"hjb","description_ar":"hgvy","created_at":"2017-06-15 23:12:34","updated_at":"2017-06-15 23:12:50"}', '2017-06-15 23:12:59', '2017-06-15 23:12:59'),
(7, 82, 'Add Restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","name_en":"ohiuo","available_payment":"jh","status":"0","min_amount":"hi","working_hour_from":"uh","working_hour_to":"ih","deliver_time_from":"ih","deliver_time_to":"iu","deliver_charge":"hiu","rating":"h","show_menu":"iuh","order_accept_days":"iu","offline_order":"0","url":"uh","img":"iuh","commission_type":"0","discount_type":"0","discount":"uh","area_id":"3","follow_us":"0","notification":"0","name_ar":"jhi","address_ar":"","description_ar":"","summary_ar":"","Owner_first_name":"oijo","Owner_last_name":"hoh","email":"ih","telephone":"ih","address_en":"","description_en":"","summary_en":""}', '2017-06-15 23:14:56', '2017-06-15 23:14:56'),
(8, 82, 'Update Restaurant', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","name_en":"ohiuo","available_payment":"jhj","status":"0","min_amount":"hi","working_hour_from":"uh","working_hour_to":"ih","deliver_time_from":"ih","deliver_time_to":"iu","deliver_charge":"hiu","rating":"0","show_menu":"0","order_accept_days":"0","offline_order":"0","url":"uh","img":"iuh","commission_type":"0","discount_type":"0","discount":"uh","area_id":"3","follow_us":"0","notification":"0","name_ar":"jhi","address_ar":"","description_ar":"","summary_ar":"","Owner_first_name":"oijo","Owner_last_name":"hoh","email":"ih","telephone":"ih","address_en":"","description_en":"","summary_en":""}', '2017-06-15 23:15:08', '2017-06-15 23:15:08'),
(9, 82, 'delete restaurant', 'taylor successor', 'Admin . Client . ', '{"id":11,"name_en":"ohiuo","name_ar":"jhi","Owner_first_name":"oijo","Owner_last_name":"hoh","email":"ih","available_payment":"jhj","telephone":"ih","address_en":"","address_ar":"","description_en":"","description_ar":"","status":0,"min_amount":"hi","working_hour_from":"uh","working_hour_to":"ih","deliver_time_from":"ih","deliver_time_to":"iu","deliver_charge":"hiu","rating":0,"show_menu":0,"order_accept_days":0,"offline_order":0,"summary_en":"","summary_ar":"","url":"uh","img":"iuh","commission_type":0,"discount_type":0,"discount":"uh","area_id":3,"follow_us":0,"notification":0,"long":"","lat":"","created_at":"2017-06-15 23:14:56","updated_at":"2017-06-15 23:15:08"}', '2017-06-15 23:15:18', '2017-06-15 23:15:18'),
(10, 82, 'Add area to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","restaurant_id":"3","cuisine_id":"1"}', '2017-06-15 23:16:21', '2017-06-15 23:16:21'),
(11, 82, 'Update restaurant cuisine', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","restaurant_id":"3","cuisine_id":"1"}', '2017-06-15 23:16:33', '2017-06-15 23:16:33'),
(12, 82, 'delete restaurant cuisine', 'taylor successor', 'Admin . Client . ', '{"id":8,"restaurant_id":3,"cuisine_id":1}', '2017-06-15 23:16:42', '2017-06-15 23:16:42'),
(13, 82, 'Add Dish', 'taylor successor', 'Admin . Client . ', '{"_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","name_en":"rec","name_ar":"gd","restaurant_id":"3","cuisine_id":"1","menu_section_id":"1","category_id":"3","delivery_menu_id":"1","parent_id":"u","price":"gu","quantity":"gu","img":"\\/files\\/18952_9633res4.jpg","discount":"u","available_from":"2017-06-15","available_to":"2017-06-16","description_en":"jhgu\\r\\n","description_ar":"uygu","status":"0"}', '2017-06-15 23:17:24', '2017-06-15 23:17:24'),
(14, 82, 'Update Dish', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","name_en":"rec","name_ar":"gdjh","restaurant_id":"3","cuisine_id":"1","menu_section_id":"1","category_id":"3","delivery_menu_id":"1","parent_id":"0","price":"gu","quantity":"0","img":"\\/files\\/18952_9633res4.jpg","discount":"u","available_from":"2017-06-15","available_to":"2017-06-16","description_en":"jhgu\\r\\n","description_ar":"uygu","status":"0"}', '2017-06-15 23:17:35', '2017-06-15 23:17:35'),
(15, 82, 'Delete Dish', 'taylor successor', 'Admin . Client . ', '{"id":12,"name_en":"rec","name_ar":"gdjh","restaurant_id":3,"cuisine_id":1,"menu_section_id":1,"category_id":3,"delivery_menu_id":1,"parent_id":0,"price":"gu","quantity":0,"img":"\\/files\\/18952_9633res4.jpg","discount":"u","available_from":"2017-06-15","available_to":"2017-06-16","description_en":"jhgu\\r\\n","description_ar":"uygu","status":0,"rating":0,"created_at":"2017-06-15 23:17:24","updated_at":"2017-06-15 23:17:35"}', '2017-06-15 23:17:44', '2017-06-15 23:17:44'),
(16, 82, 'Add Order', 'taylor successor', 'Admin . Client . ', '{"_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","users_id":"13","restaurant_id":"3","area_id":"3","address_id":"1","deliver_time":"23:26","deliver_date":"2017-06-15","deliver_charge":"","sahalat_charge":"","extra_charge":"","sub_total":"","total":"","rate":"","point":"","status":"0","notification":"0","note":""}', '2017-06-15 23:26:07', '2017-06-15 23:26:07'),
(17, 82, 'Update Order', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","users_id":"13","restaurant_id":"3","area_id":"3","address_id":"1","deliver_time":"23:26","deliver_date":"2017-06-15","deliver_charge":"","sahalat_charge":"0","extra_charge":"0","sub_total":"0","total":"0","rate":"0","point":"0","status":"0","notification":"0","note":""}', '2017-06-15 23:26:30', '2017-06-15 23:26:30'),
(18, 82, 'Delete Order', 'taylor successor', 'Admin . Client . ', '{"id":31,"users_id":13,"restaurant_id":3,"area_id":3,"from_id":null,"address_id":1,"order_time":null,"deliver_time":"23:26","expected_time":"","deliver_date":"2017-06-15","note":"","deliver_charge":"","sahalat_charge":0,"extra_charge":0,"sub_total":0,"total":0,"rate":0,"point":0,"notification":0,"status":0,"created_at":"2017-06-15 23:26:07","updated_at":"2017-06-15 23:26:30"}', '2017-06-15 23:26:42', '2017-06-15 23:26:42'),
(19, 82, 'Add Cart', 'taylor successor', 'Admin . Client . ', '{"_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","users_id":"13","restaurant_id":"3","dish_id":"3","order_id":"1","deliver_charge":"1","quantity":"1","unit_price":"1","total_price":"1","special_request":"x\\r\\n"}', '2017-06-15 23:27:22', '2017-06-15 23:27:22'),
(20, 82, 'Update Cart', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","users_id":"13","restaurant_id":"3","dish_id":"3","order_id":"1","deliver_charge":"1","quantity":"1","unit_price":"1","total_price":"1","special_request":"xzd3\\r\\n"}', '2017-06-15 23:27:39', '2017-06-15 23:27:39'),
(21, 82, 'Delete Cart', 'taylor successor', 'Admin . Client . ', '{"id":33,"users_id":13,"restaurant_id":3,"dish_id":3,"order_id":1,"deliver_charge":"1","quantity":1,"unit_price":"1","total_price":"1","special_request":"xzd3\\r\\n","created_at":"2017-06-15 23:27:22","updated_at":"2017-06-15 23:27:39"}', '2017-06-15 23:27:49', '2017-06-15 23:27:49'),
(22, 82, 'Add Payment', 'taylor successor', 'Admin . Client . ', '{"_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","users_id":"13","order_id":"1","amount":"1","status":"0","type":"0","notification":"0"}', '2017-06-15 23:28:50', '2017-06-15 23:28:50'),
(23, 82, 'delete payment', 'taylor successor', 'Admin . Client . ', '{"id":12,"order_id":1,"users_id":13,"amount":"1","status":0,"type":0,"notification":0,"created_at":"2017-06-15 23:28:50","updated_at":"2017-06-15 23:28:50"}', '2017-06-15 23:29:03', '2017-06-15 23:29:03'),
(24, 82, 'Add CMS', 'taylor successor', 'Admin . Client . ', '{"_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","title_en":"kl","title_ar":"jlkj","alias":"lkjlk","content_en":"jlkj","content_ar":"lkj"}', '2017-06-15 23:29:44', '2017-06-15 23:29:44'),
(25, 82, 'Delete CMS', 'taylor successor', 'Admin . Client . ', '{"id":5,"title_en":"kl","title_ar":"jlkj","alias":"lkjlk","content_en":"jlkj","content_ar":"lkj","created_at":"2017-06-15 23:29:44","updated_at":"2017-06-15 23:29:44"}', '2017-06-15 23:29:51', '2017-06-15 23:29:51'),
(26, 82, 'Add Restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","name_en":"e;djf","long":"35.93949794769287","lat":"31.93956238929864","available_payment":"kl","status":"0","min_amount":"ij","working_hour_from":"oijoi","working_hour_to":"ho","deliver_time_from":"ho","deliver_time_to":"h","deliver_charge":"ou","rating":"ho","show_menu":"h","order_accept_days":"oh","offline_order":"0","url":"iho","img":"ih","commission_type":"0","discount_type":"0","discount":"ho","area_id":"3","follow_us":"0","notification":"0","name_ar":"sdfsdf","address_ar":"","description_ar":"","summary_ar":"","Owner_first_name":"j","Owner_last_name":"hoih","email":"oih","telephone":"oh","address_en":"","description_en":"","summary_en":""}', '2017-06-15 23:35:53', '2017-06-15 23:35:53'),
(27, 82, 'Add Restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","name_en":"kjoj","long":"36.06566905975342","lat":"32.06591949246112","available_payment":"jh","status":"0","min_amount":"kjh","working_hour_from":"kjh","working_hour_to":"kj","deliver_time_from":"hk","deliver_time_to":"jh","deliver_charge":"kjhkj","rating":"hk","show_menu":"jh","order_accept_days":"kjh","offline_order":"0","url":"hk","img":"jh","commission_type":"0","discount_type":"0","discount":"kj","area_id":"3","follow_us":"0","notification":"0","name_ar":"kjhh","address_ar":"","description_ar":"","summary_ar":"","Owner_first_name":"lkjlkj","Owner_last_name":"lkj","email":"lkj","telephone":"lk","address_en":"","description_en":"","summary_en":""}', '2017-06-15 23:37:57', '2017-06-15 23:37:57'),
(28, 82, 'Add Restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","name_en":"kjkjkj","long":"36.11081600189209","lat":"32.083738118953725","available_payment":"lkjl","status":"0","min_amount":"jl","working_hour_from":"kj","working_hour_to":"lkj","deliver_time_from":"lkj","deliver_time_to":"lk","deliver_charge":"jlk","rating":"j","show_menu":"lkj","order_accept_days":"lkj","offline_order":"0","url":"jlk","img":"jlk","commission_type":"0","discount_type":"0","discount":"lkj","area_id":"3","follow_us":"0","notification":"0","name_ar":"lknjlkjl","address_ar":"kjlkj","description_ar":"lkj","summary_ar":"lkj","Owner_first_name":"kmlk","Owner_last_name":"lkmlk","email":"mlkm","telephone":"lkm","address_en":"","description_en":"","summary_en":""}', '2017-06-15 23:39:56', '2017-06-15 23:39:56'),
(29, 82, 'Update Restaurant', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"Q2sv3JzpXeNLiVXnur131E4TJsKoKcW1qhtyZAjl","name_en":"kjoj","long":"36.139397621154785","lat":"32.08908302965641","available_payment":"jh","status":"0","min_amount":"kjh","working_hour_from":"kjh","working_hour_to":"kj","deliver_time_from":"hk","deliver_time_to":"jh","deliver_charge":"kjhkj","rating":"0","show_menu":"0","order_accept_days":"0","offline_order":"0","url":"hk","img":"jh","commission_type":"0","discount_type":"0","discount":"kj","area_id":"3","follow_us":"0","notification":"0","name_ar":"kjhh","address_ar":"","description_ar":"","summary_ar":"","Owner_first_name":"lkjlkj","Owner_last_name":"lkj","email":"lkj","telephone":"lk","address_en":"","description_en":"","summary_en":""}', '2017-06-15 23:41:42', '2017-06-15 23:41:42'),
(30, 82, 'Update Order Driver', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"wljiLYMDMIxUCGKiI6IssHiWeGTTMXGLc3swnydJ","users_id":"82","order_id":"19","current_long":"35.8746053","current_lat":"31.9799521","delivering_id":"3","deliver_distance":"90","deliver_time":"12","return_distance":"120","return_time":"90","deliver_start_hour":"04:40","deliver_end_hour":"06:10","return_start_hour":"","return_end_hour":"","status":"0","note":"","notification":"1"}', '2017-08-21 13:29:06', '2017-08-21 13:29:06'),
(31, 82, 'Add Area', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","name_en":"Hawalli","name_ar":"\\u062d\\u0648\\u0644\\u064a","governorate_id":"3","description_en":"Hawalli","description_ar":"\\u062d\\u0648\\u0644\\u064a"}', '2017-08-27 12:16:36', '2017-08-27 12:16:36'),
(32, 82, 'Update Dish', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"wljiLYMDMIxUCGKiI6IssHiWeGTTMXGLc3swnydJ","name_en":"dish 1","name_ar":"\\u0627\\u0644\\u0637\\u0628\\u0642 1","restaurant_id":"4","cuisine_id":"1","menu_section_id":"1","category_id":"3","delivery_menu_id":"1","parent_id":"1","price":"13","quantity":"100000","img":"\\/assets\\/website\\/images\\/dishes\\/dishes1.jpg","discount":"","available_from":"2016-06-06","available_to":"2019-06-18","description_en":"dish 1 description","description_ar":"\\u0634\\u0631\\u062d \\u0627\\u0644\\u0637\\u0628\\u0642 1","status":"0"}', '2017-08-27 12:47:36', '2017-08-27 12:47:36'),
(33, 82, 'Add Order to driver', 'taylor successor', 'Admin . Client . ', '{"order_id":"33","users_id":"82","current_lat":"31.9799521","current_long":"35.8746053","status":0,"notification":0}', '2017-08-27 12:48:24', '2017-08-27 12:48:24'),
(34, 82, 'Update Order', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"wljiLYMDMIxUCGKiI6IssHiWeGTTMXGLc3swnydJ","users_id":"110","restaurant_id":"4","area_id":"3","address_id":"32","deliver_time":"00:45","deliver_date":"2017-08-30","deliver_charge":"1","sahalat_charge":"2","extra_charge":"0","sub_total":"26","total":"24.4","rate":"","point":"","status":"2","notification":"0","note":""}', '2017-08-27 12:49:24', '2017-08-27 12:49:24'),
(35, 82, 'Add Dish', 'taylor successor', 'Admin . Client . ', '{"_token":"wljiLYMDMIxUCGKiI6IssHiWeGTTMXGLc3swnydJ","name_en":"my dish","name_ar":"\\u0637\\u0628\\u0642\\u064a","restaurant_id":"4","cuisine_id":"1","menu_section_id":"1","category_id":"3","delivery_menu_id":"1","parent_id":"","price":"4","quantity":"10000","img":"\\/files\\/26342_5159dishes1.jpg","discount":"1","available_from":"2017-08-27","available_to":"2017-08-27","description_en":"my description","description_ar":"\\u0634\\u0631\\u062d","status":"0"}', '2017-08-27 13:04:28', '2017-08-27 13:04:28'),
(36, 82, 'Update Dish', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"wljiLYMDMIxUCGKiI6IssHiWeGTTMXGLc3swnydJ","name_en":"supper  sobrem ","name_ar":"\\u0633\\u0648\\u064a\\u0631 \\u0633\\u0648\\u0628\\u0631\\u064a\\u0645 \\u0643\\u0628\\u064a\\u0631 ","restaurant_id":"5","cuisine_id":"1","menu_section_id":"1","category_id":"3","delivery_menu_id":"1","parent_id":"0","price":"3.650","quantity":"74","img":"\\/files\\/3856_31241dishes3.jpg","discount":"100","available_from":"2016-06-07","available_to":"2018-06-07","description_en":"sober sobrem ","description_ar":"\\u0633\\u0648\\u064a\\u0631 \\u0633\\u0648\\u0628\\u0631\\u064a\\u0645 \\u0643\\u0628\\u064a\\u0631 ","status":"0"}', '2017-08-28 05:52:41', '2017-08-28 05:52:41'),
(37, 82, 'Add Order to driver', 'taylor successor', 'Admin . Client . ', '{"order_id":"38","users_id":"82","current_lat":"31.9799521","current_long":"35.8746053","status":0,"notification":0}', '2017-08-29 07:13:54', '2017-08-29 07:13:54'),
(38, 82, 'Add Order to driver', 'taylor successor', 'Admin . Client . ', '{"order_id":"39","users_id":"82","current_lat":"31.9799521","current_long":"35.8746053","status":0,"notification":0}', '2017-08-29 07:47:55', '2017-08-29 07:47:55'),
(39, 82, 'Update Order Driver', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"82","order_id":"38","current_long":"35.8746053","current_lat":"31.9799521","delivering_id":"0","deliver_distance":"0","deliver_time":"0","return_distance":"0","return_time":"0","deliver_start_hour":"","deliver_end_hour":"","return_start_hour":"","return_end_hour":"","status":"3","note":"","notification":"0"}', '2017-08-29 07:49:31', '2017-08-29 07:49:31'),
(40, 82, 'Update Order Driver', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"82","order_id":"39","current_long":"35.8746053","current_lat":"31.9799521","delivering_id":"0","deliver_distance":"0","deliver_time":"0","return_distance":"0","return_time":"0","deliver_start_hour":"","deliver_end_hour":"","return_start_hour":"","return_end_hour":"","status":"3","note":"","notification":"0"}', '2017-08-29 07:50:29', '2017-08-29 07:50:29'),
(41, 82, 'Update Order', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"114","restaurant_id":"4","area_id":"3","address_id":"36","deliver_time":"07:53","deliver_date":"2017-08-30","deliver_charge":"1","sahalat_charge":"2","extra_charge":"0","sub_total":"26","total":"24.4","rate":"","point":"","status":"2","notification":"0","note":""}', '2017-08-29 07:54:09', '2017-08-29 07:54:09'),
(42, 82, 'Update Order', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"114","restaurant_id":"8","area_id":"7","address_id":"34","deliver_time":"11:05","deliver_date":"2017-08-30","deliver_charge":"1","sahalat_charge":"1","extra_charge":"0","sub_total":"375","total":"372.25","rate":"","point":"","status":"2","notification":"1","note":""}', '2017-08-29 07:54:49', '2017-08-29 07:54:49'),
(43, 82, 'Add Cuisine', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","name_en":"Fast Food","name_ar":"\\u0623\\u0644\\u0648\\u062c\\u0628\\u0627\\u062a \\u0627\\u0644\\u0633\\u0631\\u064a\\u0639\\u0629","status":"0","description_en":"Fast Food","description_ar":"\\u0623\\u0644\\u0648\\u062c\\u0628\\u0627\\u062a \\u0627\\u0644\\u0633\\u0631\\u064a\\u0639\\u0629"}', '2017-08-29 08:59:30', '2017-08-29 08:59:30'),
(44, 82, 'Add Dish', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","name_en":"Angus Burger","name_ar":"\\u0623\\u0646\\u062c\\u0648\\u0633 \\u0628\\u064a\\u0631\\u062c\\u0631","restaurant_id":"15","cuisine_id":"6","menu_section_id":"1","category_id":"3","delivery_menu_id":"1","parent_id":"","price":"10","quantity":"10000","img":"\\/files\\/11714_18387img_order1.jpg","discount":"2","available_from":"2017-08-29","available_to":"2019-01-01","description_en":"burger","description_ar":"\\u0628\\u0631\\u062c\\u0631","status":"0"}', '2017-08-29 09:04:36', '2017-08-29 09:04:36'),
(45, 82, 'Add user to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"115","restaurant_id":"15","status":"0","type":"4"}', '2017-08-29 09:09:23', '2017-08-29 09:09:23'),
(46, 82, 'Add service company order', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"115","service_company_id":"3","service_boy_id":"4","service":{"3":"1"},"description":"flat tire","status":"0","notification":"0"}', '2017-08-29 09:27:23', '2017-08-29 09:27:23'),
(47, 82, 'Add user to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"118","restaurant_id":"15","status":"0","type":"0"}', '2017-08-29 09:38:20', '2017-08-29 09:38:20'),
(48, 118, 'Add area to restaurant', 'admin hardees', 'dispatcher . restaurant manager . ', '{"_token":"hcBZarzmvWu9qcnan6T32tkfnvmcm460nSHU7VzT","restaurant_id":"15","cuisine_id":"6"}', '2017-08-29 09:41:54', '2017-08-29 09:41:54'),
(49, 82, 'Update Restaurant', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","name_en":"Hardees","branch":"0","long":"","lat":"","available_payment":"KNET","status":"1","min_amount":"10","working_hour_from":"08:00","working_hour_to":"00:00","deliver_time_from":"09:00","deliver_time_to":"00:00","deliver_charge":"2","rating":"5","show_menu":"Yes","order_accept_days":"Saturday, Sunday, Monday, Tuesday, Wednesday, Thursday, Friday","offline_order":"0","url":"www,hardees.com","img":"\\/files\\/143558620_183805428hardees.png","commission_type":"0","discount_type":"0","discount":"2","area_id":"8","follow_us":"0","notification":"1","name_ar":"\\u0647\\u0627\\u0631\\u062f\\u064a\\u0632","address_ar":"\\u0647\\u0627\\u0631\\u062f\\u064a\\u0632","description_ar":"\\u0647\\u0627\\u0631\\u062f\\u064a\\u0632","summary_ar":"\\u0647\\u0627\\u0631\\u062f\\u064a\\u0632","Owner_first_name":"Hardees","Owner_last_name":"Hardees","email":"info@hardees.com","telephone":"9999","address_en":"Kuwait","description_en":"","summary_en":""}', '2017-08-30 11:57:23', '2017-08-30 11:57:23'),
(50, 82, 'Add user to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"118","restaurant_id":"15","status":"0","type":"3"}', '2017-08-30 12:10:37', '2017-08-30 12:10:37'),
(51, 82, 'Update Restaurant', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","name_en":"KFC","branch":"0","long":"","lat":"","available_payment":"","status":"1","min_amount":"5","working_hour_from":"12:00","working_hour_to":"23:00","deliver_time_from":"12:00","deliver_time_to":"22:58","deliver_charge":"1","rating":"5","show_menu":"Yes","order_accept_days":"Saturday, Sunday, Monday, Tuesday, Wednesday, Thursday, Friday","offline_order":"1","url":"kfc.com","img":"\\/files\\/18952_9633res4.jpg","commission_type":"0","discount_type":"0","discount":"5","area_id":"3","follow_us":"0","notification":"0","name_ar":"kfc","address_ar":"kfc","description_ar":"kfc","summary_ar":"kfc","Owner_first_name":"test","Owner_last_name":"test","email":"info@kfc.com","telephone":"5555","address_en":"ggg","description_en":"","summary_en":""}', '2017-09-06 07:29:51', '2017-09-06 07:29:51'),
(52, 82, 'Add user to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"13","restaurant_id":"16","status":"0","type":"0"}', '2017-09-06 07:32:35', '2017-09-06 07:32:35'),
(53, 82, 'Add area to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","restaurant_id":"16","cuisine_id":"6"}', '2017-09-06 07:43:49', '2017-09-06 07:43:49'),
(54, 118, 'Add Dish', 'admin hardees', 'dispatcher . restaurant manager . ', '{"_token":"hcBZarzmvWu9qcnan6T32tkfnvmcm460nSHU7VzT","name_en":"Burger","name_ar":"\\u0628\\u0631\\u062c\\u0631","restaurant_id":"15","cuisine_id":"6","menu_section_id":"2","category_id":"3","delivery_menu_id":"1","parent_id":"","price":"5","quantity":"10000","img":"\\/files\\/11714_18387img_order1.jpg","discount":"0.5","available_from":"2017-09-06","available_to":"2018-08-22","description_en":"burger","description_ar":"\\u0628\\u0631\\u062c\\u0631","status":"0"}', '2017-09-06 07:53:17', '2017-09-06 07:53:17'),
(55, 118, 'Add Order to driver', 'admin hardees', 'dispatcher . restaurant manager . ', '{"order_id":"43","users_id":"115","current_lat":"0","current_long":"0","status":0,"notification":0}', '2017-09-06 08:21:08', '2017-09-06 08:21:08'),
(56, 82, 'update restaurant user', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"13","restaurant_id":"16","status":"0","type":"0"}', '2017-09-06 08:22:48', '2017-09-06 08:22:48'),
(57, 82, 'Add user to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"124","restaurant_id":"15","status":"0","type":"0"}', '2017-09-06 08:23:31', '2017-09-06 08:23:31'),
(58, 118, 'Add Order to driver', 'admin hardees', 'dispatcher . restaurant manager . ', '{"order_id":"48","users_id":"115","current_lat":"0","current_long":"0","status":0,"notification":0}', '2017-09-06 12:55:19', '2017-09-06 12:55:19'),
(59, 82, 'Add Restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"pasta","branch":"18","long":"","lat":"","available_payment":"cash","status":"1","min_amount":"2","working_hour_from":"09:00","working_hour_to":"12:00","deliver_time_from":"09:30","deliver_time_to":"11:30","deliver_charge":"1","rating":"3","show_menu":"pasta","order_accept_days":"all days","offline_order":"1","url":"pasta.com","img":"\\/files\\/12328_24897dishes5.jpg","commission_type":"0","discount_type":"0","discount":"1","area_id":"4","follow_us":"0","notification":"0","name_ar":"\\u0628\\u0627\\u0633\\u062a\\u0627","address_ar":"Pasta","description_ar":"Pasta","summary_ar":"Pasta","Owner_first_name":"merhan","Owner_last_name":"merhan","email":"merhan@yahoo.com","telephone":"88888888888","address_en":"Pasta","description_en":"Pasta","summary_en":"Pasta"}', '2017-09-11 09:50:36', '2017-09-11 09:50:36'),
(61, 127, 'test', 'test', 'test', 'test', '2017-09-11 13:33:01', '2017-09-11 13:33:01'),
(62, 82, 'Add CMS', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","title_en":"test","title_ar":"test","alias":"test","content_en":"test","content_ar":"test"}', '2017-09-11 13:38:44', '2017-09-11 13:38:44'),
(63, 82, 'Add banner', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","img":"\\/files\\/3132_11717dishes2.jpg","order":"2","status":"0"}', '2017-09-11 13:42:13', '2017-09-11 13:42:13'),
(64, 82, 'Update banner', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","img":"\\/files\\/3132_11717dishes2.jpg","order":"2","status":"1"}', '2017-09-11 13:42:40', '2017-09-11 13:42:40'),
(65, 82, 'Delete banner', 'taylor successor', 'Admin . Client . ', '{"id":4,"img":"\\/files\\/3132_11717dishes2.jpg","order":2,"status":1,"created_at":"2017-09-11 13:42:13","updated_at":"2017-09-11 13:42:40"}', '2017-09-11 13:43:52', '2017-09-11 13:43:52'),
(66, 82, 'delete service company order', 'taylor successor', 'Admin . Client . ', '{"id":12,"users_id":115,"service_company_id":3,"service_boy_id":4,"description":"flat tire","status":0,"notification":1,"created_at":"2017-08-29 09:27:23","updated_at":"2017-08-29 09:27:53"}', '2017-09-12 06:18:53', '2017-09-12 06:18:53'),
(67, 82, 'delete service company order', 'taylor successor', 'Admin . Client . ', '{"id":2,"users_id":13,"service_company_id":1,"service_boy_id":1,"description":"kkhk","status":0,"notification":1,"created_at":"2017-06-02 15:40:25","updated_at":"2017-06-12 20:20:16"}', '2017-09-12 06:19:41', '2017-09-12 06:19:41'),
(68, 82, 'addAddress', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"127","area_id":"6","name":"test","type":"1","first_name":"test","last_name":"test","pacl_number":"2","block":"2","street":"2","judda":"2","avenue":"2","building":"2","floor":"2","apartment_number":"2","mobile":"2222222","phone":"222222","long":"2","lat":"2","directions":"test","default":"0","notification":"0"}', '2017-09-12 06:23:36', '2017-09-12 06:23:36'),
(69, 82, 'addAddress', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"130","area_id":"7","name":"Merhan","type":"2","first_name":"Merhan","last_name":"Merhan","pacl_number":"2","block":"2","street":"2","judda":"2","avenue":"2","building":"2","floor":"2","apartment_number":"2","mobile":"07999999999","phone":"8888888","long":"2","lat":"2","directions":"Merhan","default":"0","notification":"0"}', '2017-09-12 06:26:57', '2017-09-12 06:26:57'),
(70, 82, 'Add Order', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"128","restaurant_id":"19","area_id":"4","address_id":"16","deliver_time":"06:49","deliver_date":"2017-09-12","deliver_charge":"1","sahalat_charge":"1","extra_charge":"1","sub_total":"1","total":"1","rate":"1","point":"1","status":"1","notification":"0","note":"test"}', '2017-09-12 06:49:57', '2017-09-12 06:49:57'),
(71, 82, 'Add Order', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"15","restaurant_id":"3","area_id":"3","address_id":"1","deliver_time":"06:54","deliver_date":"2017-09-12","deliver_charge":"","sahalat_charge":"","extra_charge":"","sub_total":"","total":"","rate":"","point":"","status":"0","notification":"0","note":""}', '2017-09-12 06:54:59', '2017-09-12 06:54:59'),
(72, 82, 'Add Order', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"15","restaurant_id":"3","area_id":"3","address_id":"1","deliver_time":"06:55","deliver_date":"2017-09-12","deliver_charge":"","sahalat_charge":"","extra_charge":"","sub_total":"","total":"","rate":"","point":"","status":"0","notification":"0","note":""}', '2017-09-12 06:55:23', '2017-09-12 06:55:23'),
(73, 82, 'Add Order', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"15","restaurant_id":"3","area_id":"3","address_id":"1","deliver_time":"06:55","deliver_date":"2017-09-12","deliver_charge":"","sahalat_charge":"","extra_charge":"","sub_total":"","total":"","rate":"","point":"","status":"0","notification":"0","note":""}', '2017-09-12 06:57:28', '2017-09-12 06:57:28'),
(74, 82, 'Update Order Driver', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"127","order_id":"48","current_long":"1","current_lat":"1","delivering_id":"1","deliver_distance":"1","deliver_time":"1","return_distance":"1","return_time":"1","deliver_start_hour":"","deliver_end_hour":"12:55","return_start_hour":"","return_end_hour":"01:00","status":"0","note":"test","notification":"1"}', '2017-09-12 07:01:45', '2017-09-12 07:01:45'),
(75, 82, 'Delete Order Driver', 'taylor successor', 'Admin . Client . ', '{"id":35,"users_id":127,"order_id":48,"current_long":"1","current_lat":"1","delivering_id":1,"deliver_distance":1,"deliver_time":"1","return_distance":1,"return_time":"1","status":0,"note":"test","notification":1,"deliver_start_hour":"","deliver_end_hour":"12:55","return_start_hour":"","return_end_hour":"01:00","created_at":"2017-09-06 12:55:19","updated_at":"2017-09-12 07:01:45"}', '2017-09-12 07:01:58', '2017-09-12 07:01:58'),
(76, 82, 'Delete Order Driver', 'taylor successor', 'Admin . Client . ', '{"id":34,"users_id":115,"order_id":43,"current_long":"0","current_lat":"0","delivering_id":0,"deliver_distance":0,"deliver_time":"0","return_distance":0,"return_time":"0","status":0,"note":null,"notification":1,"deliver_start_hour":"","deliver_end_hour":"","return_start_hour":"","return_end_hour":"","created_at":"2017-09-06 08:21:08","updated_at":"2017-09-06 12:54:31"}', '2017-09-12 07:02:11', '2017-09-12 07:02:11'),
(77, 82, 'Delete Order Driver', 'taylor successor', 'Admin . Client . ', '{"id":33,"users_id":82,"order_id":39,"current_long":"35.8746053","current_lat":"31.9799521","delivering_id":0,"deliver_distance":0,"deliver_time":"0","return_distance":0,"return_time":"0","status":3,"note":"","notification":1,"deliver_start_hour":"","deliver_end_hour":"","return_start_hour":"","return_end_hour":"","created_at":"2017-08-29 07:47:55","updated_at":"2017-08-29 07:52:15"}', '2017-09-12 07:02:18', '2017-09-12 07:02:18'),
(78, 82, 'Add Payment', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"127","order_id":"1","amount":"2","status":"2","type":"0","notification":"0"}', '2017-09-12 07:07:40', '2017-09-12 07:07:40'),
(79, 82, 'Update Payment', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"127","order_id":"1","amount":"2","status":"1","type":"0","notification":"0"}', '2017-09-12 07:07:59', '2017-09-12 07:07:59'),
(80, 82, 'delete payment', 'taylor successor', 'Admin . Client . ', '{"id":27,"order_id":1,"users_id":127,"amount":"2","status":1,"type":0,"module_id":"","notification":1,"created_at":"2017-09-12 07:07:40","updated_at":"2017-09-12 07:08:05"}', '2017-09-12 07:08:16', '2017-09-12 07:08:16'),
(81, 82, 'Add Area', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"amman","name_ar":"\\u0639\\u0645\\u0627\\u0646","governorate_id":"6","description_en":"pasta","description_ar":"pasta"}', '2017-09-12 07:19:31', '2017-09-12 07:19:31'),
(82, 82, 'Add Cuisine', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"test","name_ar":"test","status":"0","description_en":"test","description_ar":"test"}', '2017-09-12 07:20:42', '2017-09-12 07:20:42'),
(83, 82, 'Update Cuisine', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"test","name_ar":"test","status":"1","description_en":"test","description_ar":"test"}', '2017-09-12 07:21:00', '2017-09-12 07:21:00'),
(84, 82, 'Delete Cuisine', 'taylor successor', 'Admin . Client . ', '{"id":7,"name_en":"test","name_ar":"test","status":1,"description_en":"test","description_ar":"test","created_at":"2017-09-12 07:20:42","updated_at":"2017-09-12 07:21:00"}', '2017-09-12 07:21:11', '2017-09-12 07:21:11'),
(85, 82, 'Delete Cuisine', 'taylor successor', 'Admin . Client . ', '{"id":6,"name_en":"Fast Food","name_ar":"\\u0623\\u0644\\u0648\\u062c\\u0628\\u0627\\u062a \\u0627\\u0644\\u0633\\u0631\\u064a\\u0639\\u0629","status":0,"description_en":"Fast Food","description_ar":"\\u0623\\u0644\\u0648\\u062c\\u0628\\u0627\\u062a \\u0627\\u0644\\u0633\\u0631\\u064a\\u0639\\u0629","created_at":"2017-08-29 08:59:30","updated_at":"2017-08-29 08:59:30"}', '2017-09-12 07:21:18', '2017-09-12 07:21:18'),
(86, 82, 'Delete Cuisine', 'taylor successor', 'Admin . Client . ', '{"id":6,"name_en":"Fast Food","name_ar":"\\u0623\\u0644\\u0648\\u062c\\u0628\\u0627\\u062a \\u0627\\u0644\\u0633\\u0631\\u064a\\u0639\\u0629","status":0,"description_en":"Fast Food","description_ar":"\\u0623\\u0644\\u0648\\u062c\\u0628\\u0627\\u062a \\u0627\\u0644\\u0633\\u0631\\u064a\\u0639\\u0629","created_at":"2017-08-29 08:59:30","updated_at":"2017-08-29 08:59:30"}', '2017-09-12 07:21:25', '2017-09-12 07:21:25'),
(87, 82, 'Update Restaurant', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"pastaa","branch":"0","long":"","lat":"","available_payment":"cash","status":"1","min_amount":"2","working_hour_from":"09:00","working_hour_to":"12:00","deliver_time_from":"09:30","deliver_time_to":"11:30","deliver_charge":"1","rating":"3","show_menu":"0","order_accept_days":"0","offline_order":"1","url":"pasta.com","img":"\\/files\\/12328_24897dishes5.jpg","commission_type":"0","discount_type":"0","discount":"1","area_id":"4","follow_us":"0","notification":"1","name_ar":"\\u0628\\u0627\\u0633\\u062a\\u0627","address_ar":"Pasta","description_ar":"Pasta","summary_ar":"Pasta","Owner_first_name":"merhan","Owner_last_name":"merhan","email":"merhan@yahoo.com","telephone":"88888888888","address_en":"Pasta","description_en":"Pasta","summary_en":"Pasta"}', '2017-09-12 07:24:43', '2017-09-12 07:24:43'),
(88, 82, 'delete restaurant', 'taylor successor', 'Admin . Client . ', '{"id":19,"name_en":"pastaa","name_ar":"\\u0628\\u0627\\u0633\\u062a\\u0627","branch":0,"Owner_first_name":"merhan","Owner_last_name":"merhan","email":"merhan@yahoo.com","available_payment":"cash","telephone":"88888888888","address_en":"Pasta","address_ar":"Pasta","description_en":"Pasta","description_ar":"Pasta","status":1,"min_amount":"2","working_hour_from":"09:00","working_hour_to":"12:00","deliver_time_from":"09:30","deliver_time_to":"11:30","deliver_charge":"1","rating":3,"show_menu":0,"order_accept_days":0,"offline_order":1,"summary_en":"Pasta","summary_ar":"Pasta","url":"pasta.com","img":"\\/files\\/12328_24897dishes5.jpg","commission_type":0,"discount_type":0,"discount":"1","area_id":4,"follow_us":0,"notification":1,"long":"","lat":"","created_at":"2017-09-11 09:50:36","updated_at":"2017-09-12 07:24:43"}', '2017-09-12 07:25:04', '2017-09-12 07:25:04'),
(89, 82, 'Add Category', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"Pasta","name_ar":"Pasta","min_quantity":"2","max_quantity":"100","restaurant_id":"10"}', '2017-09-12 07:25:53', '2017-09-12 07:25:53'),
(90, 82, 'Delete Category', 'taylor successor', 'Admin . Client . ', '{"id":4,"name_en":"Pasta","name_ar":"Pasta","min_quantity":2,"max_quantity":100,"restaurant_id":10,"created_at":"2017-09-12 07:25:53","updated_at":"2017-09-12 07:25:53"}', '2017-09-12 07:27:36', '2017-09-12 07:27:36'),
(91, 82, 'Add Category', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"pasta","name_ar":"\\u0628\\u0627\\u0633\\u062a\\u0627","min_quantity":"1","max_quantity":"100","restaurant_id":"10"}', '2017-09-12 07:27:57', '2017-09-12 07:27:57'),
(92, 82, 'Add area to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","restaurant_id":"10","cuisine_id":"3"}', '2017-09-12 07:30:07', '2017-09-12 07:30:07'),
(93, 82, 'Update restaurant cuisine', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","restaurant_id":"10","cuisine_id":"4"}', '2017-09-12 07:30:17', '2017-09-12 07:30:17'),
(94, 82, 'delete restaurant cuisine', 'taylor successor', 'Admin . Client . ', '{"id":10,"restaurant_id":10,"cuisine_id":4}', '2017-09-12 07:30:25', '2017-09-12 07:30:25'),
(95, 82, 'delete restaurant cuisine', 'taylor successor', 'Admin . Client . ', '{"id":9,"restaurant_id":16,"cuisine_id":6}', '2017-09-12 07:30:31', '2017-09-12 07:30:31'),
(96, 82, 'Add Dish', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"MCDONALD","name_ar":"\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0627\\u0644\\u0637\\u0639\\u0627\\u0645","restaurant_id":"3","cuisine_id":"1","menu_section_id":"1","category_id":"3","delivery_menu_id":"1","parent_id":"1","price":"2","quantity":"2","img":"\\/files\\/31768_22129banner1.jpg","discount":"2","available_from":"2017-09-12","available_to":"2017-09-12","description_en":"test","description_ar":"sahalat","status":"0"}', '2017-09-12 07:33:14', '2017-09-12 07:33:14'),
(97, 82, 'Update Dish', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"MCDONALD","name_ar":"\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0627\\u0644\\u0637\\u0639\\u0627\\u0645","restaurant_id":"3","cuisine_id":"1","menu_section_id":"1","category_id":"3","delivery_menu_id":"1","parent_id":"1","price":"2","quantity":"2","img":"\\/files\\/31768_22129banner1.jpg","discount":"2","available_from":"2017-09-12","available_to":"2017-09-12","description_en":"test","description_ar":"sahalat","status":"1"}', '2017-09-12 07:33:24', '2017-09-12 07:33:24'),
(98, 82, 'Delete Dish', 'taylor successor', 'Admin . Client . ', '{"id":16,"name_en":"MCDONALD","name_ar":"\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0627\\u0644\\u0637\\u0639\\u0627\\u0645","restaurant_id":3,"cuisine_id":1,"menu_section_id":1,"category_id":3,"delivery_menu_id":1,"parent_id":1,"price":"2","quantity":2,"img":"\\/files\\/31768_22129banner1.jpg","discount":"2","available_from":"2017-09-12","available_to":"2017-09-12","description_en":"test","description_ar":"sahalat","status":1,"rating":0,"created_at":"2017-09-12 07:33:14","updated_at":"2017-09-12 07:33:24"}', '2017-09-12 07:33:47', '2017-09-12 07:33:47'),
(99, 82, 'Update Dish', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"dish 1","name_ar":"\\u0627\\u0644\\u0637\\u0628\\u0642 1","restaurant_id":"4","cuisine_id":"1","menu_section_id":"1","category_id":"3","delivery_menu_id":"1","parent_id":"1","price":"13","quantity":"99980","img":"\\/assets\\/website\\/images\\/dishes\\/dishes1.jpg","discount":"","available_from":"2016-06-06","available_to":"2019-06-18","description_en":"dish 1 description","description_ar":"\\u0634\\u0631\\u062d \\u0627\\u0644\\u0637\\u0628\\u0642 1","status":"0"}', '2017-09-12 07:36:28', '2017-09-12 07:36:28'),
(100, 82, 'Add Cart', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"127","restaurant_id":"3","dish_id":"3","order_id":"1","deliver_charge":"1","quantity":"1","unit_price":"1","total_price":"2","special_request":"test"}', '2017-09-12 07:36:58', '2017-09-12 07:36:58'),
(101, 82, 'Update Cart', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"127","restaurant_id":"3","dish_id":"14","order_id":"1","deliver_charge":"1","quantity":"1","unit_price":"1","total_price":"2","special_request":"test"}', '2017-09-12 07:37:29', '2017-09-12 07:37:29'),
(102, 82, 'Delete Cart', 'taylor successor', 'Admin . Client . ', '{"id":73,"users_id":127,"restaurant_id":3,"dish_id":14,"order_id":1,"deliver_charge":"1","quantity":1,"unit_price":"1","total_price":"2","special_request":"test","created_at":"2017-09-12 07:36:58","updated_at":"2017-09-12 07:37:29"}', '2017-09-12 07:37:43', '2017-09-12 07:37:43'),
(103, 82, 'Update CMS', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","title_en":"teeest","title_ar":"test","alias":"test","content_en":"test","content_ar":"test"}', '2017-09-12 09:08:52', '2017-09-12 09:08:52'),
(104, 82, 'Delete CMS', 'taylor successor', 'Admin . Client . ', '{"id":5,"title_en":"teeest","title_ar":"test","alias":"test","content_en":"test","content_ar":"test","created_at":"2017-09-11 13:38:44","updated_at":"2017-09-12 09:08:52"}', '2017-09-12 09:09:15', '2017-09-12 09:09:15'),
(105, 82, 'Add Restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"Pasta","branch":"10","long":"","lat":"","available_payment":"2","status":"1","min_amount":"1","working_hour_from":"09:15","working_hour_to":"12:00","deliver_time_from":"09:30","deliver_time_to":"09:27","deliver_charge":"1","rating":"5","show_menu":"1","order_accept_days":"1","offline_order":"1","url":"pasta.com","img":"\\/files\\/31768_22129banner1.jpg","commission_type":"0","discount_type":"0","discount":"0","area_id":"6","follow_us":"0","notification":"0","name_ar":"\\u0628\\u0627\\u0633\\u062a\\u0627","address_ar":"pasta","description_ar":"pasta","summary_ar":"pasta","Owner_first_name":"merhan","Owner_last_name":"merhan","email":"merhan@yahoo.com","telephone":"7777777","address_en":"Pasta","description_en":"Pasta","summary_en":"Pasta"}', '2017-09-12 09:29:25', '2017-09-12 09:29:25'),
(106, 82, 'Update Restaurant', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"Pasta","branch":"20","long":"","lat":"","available_payment":"2","status":"1","min_amount":"1","working_hour_from":"09:15","working_hour_to":"12:00","deliver_time_from":"09:30","deliver_time_to":"09:27","deliver_charge":"1","rating":"5","show_menu":"1","order_accept_days":"1","offline_order":"1","url":"pasta.com","img":"\\/files\\/31768_22129banner1.jpg","commission_type":"0","discount_type":"0","discount":"0","area_id":"6","follow_us":"0","notification":"0","name_ar":"\\u0628\\u0627\\u0633\\u062a\\u0627","address_ar":"pasta","description_ar":"pasta","summary_ar":"pasta","Owner_first_name":"merhan","Owner_last_name":"merhan","email":"merhan@yahoo.com","telephone":"7777777","address_en":"Pasta","description_en":"Pasta","summary_en":"Pasta"}', '2017-09-12 09:30:42', '2017-09-12 09:30:42'),
(107, 82, 'Add area to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","restaurant_id":"20","cuisine_id":"6"}', '2017-09-12 09:31:19', '2017-09-12 09:31:19'),
(108, 82, 'Add Category', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"phototchine","name_ar":"\\u0641\\u0648\\u062a\\u0648\\u062a\\u0634\\u064a\\u0646\\u064a","min_quantity":"1","max_quantity":"1000","restaurant_id":"20"}', '2017-09-12 09:33:22', '2017-09-12 09:33:22'),
(109, 82, 'Add Dish', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"pasta","name_ar":"\\u0628\\u0627\\u0633\\u062a\\u0627","restaurant_id":"20","cuisine_id":"6","menu_section_id":"5","category_id":"5","delivery_menu_id":"4","parent_id":"1","price":"2","quantity":"1","img":"\\/files\\/10846_24127logo.png","discount":"0","available_from":"2017-09-12","available_to":"2017-09-12","description_en":"pasta","description_ar":"pasta","status":"0"}', '2017-09-12 09:38:56', '2017-09-12 09:38:56'),
(110, 82, 'Add Area', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"Amman","name_ar":"\\u0639\\u0645\\u0627\\u0646","governorate_id":"3","description_en":"amman","description_ar":"amman"}', '2017-09-13 06:14:10', '2017-09-13 06:14:10'),
(111, 82, 'Update Payment', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"138","order_id":"68","amount":"59.5","status":"2","type":"0","notification":"1"}', '2017-09-13 07:59:59', '2017-09-13 07:59:59'),
(112, 82, 'Update Payment', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","users_id":"82","order_id":"27","amount":"24.4","status":"2","type":"0","notification":"1"}', '2017-09-13 08:03:13', '2017-09-13 08:03:13'),
(113, 82, 'Add Restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"tasty","branch":"10","long":"","lat":"","available_payment":"1","status":"1","min_amount":"0","working_hour_from":"00:00","working_hour_to":"12:00","deliver_time_from":"03:00","deliver_time_to":"08:04","deliver_charge":"1","rating":"5","show_menu":"1","order_accept_days":"all days","offline_order":"1","url":"tasty.com","img":"\\/files\\/1851817532_2140414147download.jpg","commission_type":"0","discount_type":"0","discount":"0","area_id":"9","follow_us":"0","notification":"0","name_ar":"tasty","address_ar":"tasty","description_ar":"tasty","summary_ar":"tasty","Owner_first_name":"merhan","Owner_last_name":"merhan","email":"merhan@yahoo.com","telephone":"888888","address_en":"","description_en":"","summary_en":""}', '2017-09-13 08:08:13', '2017-09-13 08:08:13'),
(114, 82, 'Add Cuisine', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"tasty","name_ar":"tasty","status":"0","description_en":"tasty","description_ar":"tasty"}', '2017-09-13 08:08:55', '2017-09-13 08:08:55'),
(115, 82, 'Add area to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","restaurant_id":"21","cuisine_id":"7"}', '2017-09-13 08:09:46', '2017-09-13 08:09:46');
INSERT INTO `audit_track` (`id`, `users_id`, `action`, `users_name`, `users_role`, `description`, `created_at`, `updated_at`) VALUES
(116, 82, 'Add Dish', 'taylor successor', 'Admin . Client . ', '{"_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"phototchine","name_ar":"\\u0641\\u0648\\u062a\\u0648\\u062a\\u0634\\u064a\\u0646\\u064a","restaurant_id":"21","cuisine_id":"7","menu_section_id":"1","category_id":"3","delivery_menu_id":"5","parent_id":"2","price":"4","quantity":"1","img":"\\/files\\/138647785_1312074881download (1).jpg","discount":"0","available_from":"2017-09-13","available_to":"2017-12-15","description_en":"phototchine","description_ar":"phototchine","status":"0"}', '2017-09-13 08:11:18', '2017-09-13 08:11:18'),
(117, 82, 'Add Order to driver', 'taylor successor', 'Admin . Client . ', '{"order_id":"27","users_id":"82","current_lat":"31.9799521","current_long":"35.8746053","status":0,"notification":0}', '2017-09-13 08:11:39', '2017-09-13 08:11:39'),
(118, 82, 'Update Dish', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"RPyHNcZ6Nd62QHvaU2jkvmsr2qkaI5h1pIYylolv","name_en":"phototchine","name_ar":"\\u0641\\u0648\\u062a\\u0648\\u062a\\u0634\\u064a\\u0646\\u064a","restaurant_id":"21","cuisine_id":"7","menu_section_id":"1","category_id":"3","delivery_menu_id":"5","parent_id":"2","price":"3","quantity":"1","img":"\\/files\\/138647785_1312074881download (1).jpg","discount":"0","available_from":"2017-09-13","available_to":"2017-12-15","description_en":"phototchine","description_ar":"phototchine","status":"0"}', '2017-09-13 08:11:43', '2017-09-13 08:11:43'),
(119, 82, 'update restaurant user', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"u2DBz9ZmKzy6kjDovvCPnZkZGYZRVRjKCZ1iUxTA","users_id":"115","restaurant_id":"4","status":"0","type":"4"}', '2017-09-13 08:25:40', '2017-09-13 08:25:40'),
(120, 82, 'delete restaurant', 'taylor successor', 'Admin . Client . ', '{"id":14,"name_en":"kjkjkj","name_ar":"lknjlkjl","branch":0,"Owner_first_name":"kmlk","Owner_last_name":"lkmlk","email":"mlkm","available_payment":"lkjl","telephone":"lkm","address_en":"","address_ar":"kjlkj","description_en":"","description_ar":"lkj","status":0,"min_amount":"jl","working_hour_from":"kj","working_hour_to":"lkj","deliver_time_from":"lkj","deliver_time_to":"lk","deliver_charge":"jlk","rating":0,"show_menu":0,"order_accept_days":0,"offline_order":0,"summary_en":"","summary_ar":"lkj","url":"jlk","img":"jlk","commission_type":0,"discount_type":0,"discount":"lkj","area_id":3,"follow_us":0,"notification":1,"long":"36.11081600189209","lat":"32.083738118953725","created_at":"2017-06-15 23:39:57","updated_at":"2017-08-30 08:08:07"}', '2017-09-13 08:39:19', '2017-09-13 08:39:19'),
(121, 82, 'delete restaurant', 'taylor successor', 'Admin . Client . ', '{"id":18,"name_en":"test","name_ar":null,"branch":0,"Owner_first_name":"test","Owner_last_name":"test","email":"gggggggggggggg","available_payment":null,"telephone":"ggggggggggggg","address_en":"Jordan","address_ar":null,"description_en":null,"description_ar":null,"status":null,"min_amount":null,"working_hour_from":null,"working_hour_to":null,"deliver_time_from":null,"deliver_time_to":null,"deliver_charge":null,"rating":null,"show_menu":null,"order_accept_days":null,"offline_order":null,"summary_en":null,"summary_ar":null,"url":null,"img":null,"commission_type":null,"discount_type":null,"discount":null,"area_id":0,"follow_us":null,"notification":null,"long":"","lat":"","created_at":"2017-09-10 06:28:24","updated_at":"2017-09-10 06:28:24"}', '2017-09-13 08:39:26', '2017-09-13 08:39:26'),
(122, 82, 'delete restaurant', 'taylor successor', 'Admin . Client . ', '{"id":17,"name_en":"test","name_ar":null,"branch":0,"Owner_first_name":"test","Owner_last_name":"test","email":"test","available_payment":null,"telephone":"test","address_en":"test","address_ar":null,"description_en":null,"description_ar":null,"status":null,"min_amount":null,"working_hour_from":null,"working_hour_to":null,"deliver_time_from":null,"deliver_time_to":null,"deliver_charge":null,"rating":null,"show_menu":null,"order_accept_days":null,"offline_order":null,"summary_en":null,"summary_ar":null,"url":null,"img":null,"commission_type":null,"discount_type":null,"discount":null,"area_id":0,"follow_us":null,"notification":null,"long":"","lat":"","created_at":"2017-09-07 07:10:46","updated_at":"2017-09-07 07:10:46"}', '2017-09-13 08:40:08', '2017-09-13 08:40:08'),
(123, 82, 'delete restaurant', 'taylor successor', 'Admin . Client . ', '{"id":9,"name_en":"hkj","name_ar":null,"branch":0,"Owner_first_name":"j","Owner_last_name":"hj","email":"kjh","available_payment":null,"telephone":"jhkj","address_en":"hk","address_ar":null,"description_en":null,"description_ar":null,"status":null,"min_amount":null,"working_hour_from":null,"working_hour_to":null,"deliver_time_from":null,"deliver_time_to":null,"deliver_charge":null,"rating":null,"show_menu":null,"order_accept_days":null,"offline_order":null,"summary_en":null,"summary_ar":null,"url":null,"img":null,"commission_type":null,"discount_type":null,"discount":null,"area_id":0,"follow_us":null,"notification":1,"long":"","lat":"","created_at":"2017-06-14 00:49:44","updated_at":"2017-06-15 23:46:31"}', '2017-09-13 08:40:17', '2017-09-13 08:40:17'),
(124, 82, 'Add user to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"u2DBz9ZmKzy6kjDovvCPnZkZGYZRVRjKCZ1iUxTA","users_id":"138","restaurant_id":"3","status":"0","type":"0"}', '2017-09-13 09:15:06', '2017-09-13 09:15:06'),
(125, 82, 'Add Order to driver', 'taylor successor', 'Admin . Client . ', '{"order_id":"68","users_id":"115","current_lat":"0","current_long":"0","status":0,"notification":0}', '2017-09-13 09:18:09', '2017-09-13 09:18:09'),
(126, 82, 'Add Order', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"19","restaurant_id":"6","area_id":"3","address_id":"1","deliver_time":"10:42","deliver_date":"2017-09-13","deliver_charge":"1","sahalat_charge":"","extra_charge":"","sub_total":"","total":"","rate":"","point":"","status":"0","notification":"0","note":""}', '2017-09-13 10:48:42', '2017-09-13 10:48:42'),
(127, 82, 'Add Order to driver', 'taylor successor', 'Admin . Client . ', '{"order_id":"71","users_id":"115","current_lat":"0","current_long":"0","status":0,"notification":0}', '2017-09-13 11:27:23', '2017-09-13 11:27:23'),
(128, 82, 'Update Order Driver', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"115","order_id":"71","current_long":"0","current_lat":"0","delivering_id":"0","deliver_distance":"0","deliver_time":"0","return_distance":"0","return_time":"0","deliver_start_hour":"","deliver_end_hour":"","return_start_hour":"","return_end_hour":"","status":"3","note":"","notification":"1"}', '2017-09-13 11:31:06', '2017-09-13 11:31:06'),
(129, 118, 'Add Restaurant', 'admin hardees', 'dispatcher . restaurant manager . ', '{"_token":"rDF5RONfC2AGrd9ZQByrl7He7Vrn8DaqsDoh2qTf","name_en":"Hardees Kuwait City","branch":"15","long":"","lat":"","available_payment":"","status":"1","min_amount":"5","working_hour_from":"10:00","working_hour_to":"23:00","deliver_time_from":"10:00","deliver_time_to":"23:00","deliver_charge":"1","rating":"5","show_menu":"yes","order_accept_days":"sunday, monday, tuesday, wednesday, thursday, friday, saturday","offline_order":"0","url":"hardees.com","img":"\\/files\\/143558620_183805428hardees.png","commission_type":"0","discount_type":"0","discount":"","area_id":"8","follow_us":"0","notification":"0","name_ar":"\\u0647\\u0627\\u0631\\u062f\\u064a\\u0632 \\u0627\\u0644\\u0643\\u0648\\u064a\\u062a","address_ar":"","description_ar":"","summary_ar":"","Owner_first_name":"Hardees 2","Owner_last_name":"Hardees 2","email":"admin2@hardees.com","telephone":"654456","address_en":"","description_en":"","summary_en":""}', '2017-09-14 09:01:58', '2017-09-14 09:01:58'),
(130, 118, 'Add Restaurant', 'admin hardees', 'dispatcher . restaurant manager . ', '{"_token":"M58cRHxytueIc502JoPbsY227qY2g5yhqk0N1BQs","name_en":"Hamra Tower","branch":"15","long":"","lat":"","available_payment":"","status":"1","min_amount":"1.000","working_hour_from":"09:06","working_hour_to":"09:06","deliver_time_from":"09:06","deliver_time_to":"09:06","deliver_charge":"1.500","rating":"4","show_menu":"1","order_accept_days":"1","offline_order":"0","url":"www.hardees.com","img":"\\/files\\/143558620_183805428hardees.png","commission_type":"0","discount_type":"0","discount":"","area_id":"3","follow_us":"0","notification":"0","name_ar":"Hamra Tower","address_ar":"","description_ar":"","summary_ar":"","Owner_first_name":"Raghda","Owner_last_name":"Mohammed","email":"raghda@mawaqaa.com","telephone":"76767676","address_en":"","description_en":"","summary_en":""}', '2017-09-14 09:08:50', '2017-09-14 09:08:50'),
(131, 118, 'Add user to restaurant', 'admin hardees', 'dispatcher . restaurant manager . ', '{"_token":"rDF5RONfC2AGrd9ZQByrl7He7Vrn8DaqsDoh2qTf","users_id":"124","restaurant_id":"15","status":"0","type":"0"}', '2017-09-14 09:15:40', '2017-09-14 09:15:40'),
(132, 118, 'Add Restaurant', 'admin hardees', 'dispatcher . restaurant manager . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","name_en":"Hardees Kuwait City","branch":"0","long":"","lat":"","available_payment":"1","status":"1","min_amount":"5","working_hour_from":"10:00","working_hour_to":"22:00","deliver_time_from":"10:00","deliver_time_to":"22:00","deliver_charge":"2","rating":"5","show_menu":"1","order_accept_days":"7","offline_order":"1","url":"hardees.com","img":"\\/files\\/143558620_183805428hardees.png","commission_type":"0","discount_type":"0","discount":"","area_id":"3","follow_us":"0","notification":"0","name_ar":"Hardees Kuwait","address_ar":"Hardees Kuwait","description_ar":"Hardees Kuwait","summary_ar":"Hardees Kuwait","Owner_first_name":"hardees kuwait","Owner_last_name":"hardees kuwait","email":"kuwait@hardees.com","telephone":"5555","address_en":"","description_en":"","summary_en":""}', '2017-09-19 09:53:56', '2017-09-19 09:53:56'),
(133, 118, 'Add user to restaurant', 'admin hardees', 'dispatcher . restaurant manager . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"125","restaurant_id":"15","status":"0","type":"3"}', '2017-09-19 10:36:01', '2017-09-19 10:36:01'),
(134, 82, 'Add user to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"140","restaurant_id":"15","status":"0","type":"0"}', '2017-09-19 10:40:24', '2017-09-19 10:40:24'),
(135, 82, 'Add user to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"140","restaurant_id":"25","status":"0","type":"3"}', '2017-09-19 10:40:48', '2017-09-19 10:40:48'),
(136, 82, 'Add user to restaurant', 'taylor successor', 'Admin . Client . ', '{"_token":"6B3aOFftKhvJMlmEhCeuYpLG6alTZjSSHIHVQADz","users_id":"141","restaurant_id":"4","status":"0","type":"0"}', '2017-09-20 08:13:31', '2017-09-20 08:13:31'),
(137, 82, 'Delete banner', 'taylor successor', 'Admin . Client . ', '{"id":2,"img":"\\/files\\/27734_1239banner2.jpg","order":2,"status":0,"created_at":"2017-06-06 14:39:08","updated_at":"2017-06-06 14:51:00"}', '2017-10-01 09:02:48', '2017-10-01 09:02:48'),
(138, 116, 'Add service company order', 'servicecompany servicecompany', 'service company manager . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"","service_company_id":"3","service_boy_id":"","description":"","status":"0","notification":"0"}', '2017-10-02 12:05:40', '2017-10-02 12:05:40'),
(139, 82, 'Add Order', 'taylor successor', 'Admin . Client . ', '{"_token":"6WAZyUWXMvFBjIj6NxU55LDrCSdAwPJW3EDLcd8l","users_id":"16","restaurant_id":"3","area_id":"3","address_id":"1","deliver_time":"11:00","deliver_date":"2017-10-03","deliver_charge":"1","sahalat_charge":"","extra_charge":"","sub_total":"","total":"","rate":"","point":"","status":"0","notification":"0","note":""}', '2017-10-03 11:01:04', '2017-10-03 11:01:04'),
(140, 116, 'Add service company order', 'servicecompany servicecompany', 'service company manager . ', '{"_token":"KNGBw25XXCkUXxjyFdxiSFKUVGA4uaSGPx9wRrFy","users_id":"115","service_company_id":"3","service_boy_id":"","service":{"1":"1","2":"1"},"description":"","status":"0","notification":"0"}', '2017-10-04 08:37:51', '2017-10-04 08:37:51'),
(141, 82, 'Update Order', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"vCI5kSb2SR0PiYJRbeTgCJNESK5aT9yXFALmZx87","users_id":"82","restaurant_id":"4","area_id":"3","address_id":"79","deliver_time":"07:24","deliver_date":"2017-10-09","deliver_charge":"1","sahalat_charge":"2","extra_charge":"0","sub_total":"26","total":"24.4","rate":"","point":"","status":"3","notification":"0","note":""}', '2017-10-08 07:10:50', '2017-10-08 07:10:50'),
(142, 82, 'Update Order', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"vCI5kSb2SR0PiYJRbeTgCJNESK5aT9yXFALmZx87","users_id":"82","restaurant_id":"7","area_id":"5","address_id":"81","deliver_time":"11:57","deliver_date":"2017-10-08","deliver_charge":"1","sahalat_charge":"1","extra_charge":"0","sub_total":"20","total":"20.8","rate":"0","point":"0","status":"3","notification":"0","note":""}', '2017-10-08 07:13:36', '2017-10-08 07:13:36'),
(143, 82, 'Update Order', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"vCI5kSb2SR0PiYJRbeTgCJNESK5aT9yXFALmZx87","users_id":"82","restaurant_id":"7","area_id":"5","address_id":"81","deliver_time":"11:57","deliver_date":"2017-10-08","deliver_charge":"1","sahalat_charge":"1","extra_charge":"0","sub_total":"20","total":"20.8","rate":"0","point":"0","status":"3","notification":"0","note":""}', '2017-10-08 07:13:40', '2017-10-08 07:13:40'),
(144, 82, 'Update Order', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"vCI5kSb2SR0PiYJRbeTgCJNESK5aT9yXFALmZx87","users_id":"82","restaurant_id":"7","area_id":"5","address_id":"81","deliver_time":"11:57","deliver_date":"2017-10-08","deliver_charge":"1","sahalat_charge":"1","extra_charge":"0","sub_total":"20","total":"20.8","rate":"0","point":"0","status":"3","notification":"0","note":""}', '2017-10-08 07:13:49', '2017-10-08 07:13:49'),
(145, 82, 'Update Order', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"Ks6WCPA50WrSOL0RhaIUN0LfHa1aiqggbENKwsLq","users_id":"146","restaurant_id":"6","area_id":"4","address_id":"83","deliver_time":"08:15","deliver_date":"2017-10-09","deliver_charge":"1","sahalat_charge":"1","extra_charge":"0","sub_total":"41.4","total":"1","rate":"","point":"","status":"2","notification":"0","note":""}', '2017-10-08 07:45:33', '2017-10-08 07:45:33'),
(146, 82, 'Add CMS', 'taylor successor', 'Admin . Client . ', '{"_token":"hquJnffyYmod0k5ipEt0k0PKO1aSxZDuoeUoe99L","title_en":"FAQs","title_ar":"FAQs","alias":"faq","content_en":"<section class=\\"inner_content_area\\">\\r\\n<div class=\\"container\\">\\r\\n<div class=\\"row\\">\\r\\n\\t<div class=\\"col-sm-9\\">\\r\\n    \\t<div class=\\"panel-group faqs\\" id=\\"accordion\\">\\r\\n            \\r\\n            <div class=\\"panel panel-default\\">\\r\\n                <div class=\\"panel-heading\\">\\r\\n                    <div class=\\"panel-title\\">\\r\\n                        <a class=\\"accordion-toggle\\" data-toggle=\\"collapse\\" data-parent=\\"#accordion\\" href=\\"#collapseOne\\">\\r\\n                        Your wished quistion will be here Your wished quistion will be here Your wished quistion will be here?<\\/a>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n                <div id=\\"collapseOne\\" class=\\"panel-collapse collapse in\\">\\r\\n                    <div class=\\"panel-body\\">\\r\\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <\\/p>  \\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n            <\\/div>\\r\\n            <div class=\\"panel panel-default\\">\\r\\n                <div class=\\"panel-heading\\">\\r\\n                    <div class=\\"panel-title\\">\\r\\n                        <a class=\\"accordion-toggle collapsed\\" data-toggle=\\"collapse\\" data-parent=\\"#accordion\\" href=\\"#collapseTwo\\">Your wished quistion will be here Your wished quistion will be here ?<\\/a>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n                <div id=\\"collapseTwo\\" class=\\"panel-collapse collapse\\">\\r\\n                    <div class=\\"panel-body\\">\\r\\n                       <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <\\/p>   \\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n            <\\/div>\\r\\n            <div class=\\"panel panel-default\\">\\r\\n                <div class=\\"panel-heading\\">\\r\\n                    <div class=\\"panel-title\\">\\r\\n                        <a class=\\"accordion-toggle collapsed\\" data-toggle=\\"collapse\\" data-parent=\\"#accordion\\" href=\\"#collapseThree\\">Your wished quistion will be here ?<\\/a>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n                <div id=\\"collapseThree\\" class=\\"panel-collapse collapse\\">\\r\\n                    <div class=\\"panel-body\\">\\r\\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <\\/p>\\t\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n            <\\/div>\\r\\n            <div class=\\"panel panel-default\\">\\r\\n                <div class=\\"panel-heading\\">\\r\\n                    <div class=\\"panel-title\\">\\r\\n                        <a class=\\"accordion-toggle collapsed\\" data-toggle=\\"collapse\\" data-parent=\\"#accordion\\" href=\\"#collapseFour\\">Your wished quistion will be here Your wished quistion will be here Your wished quistion will be here ?<\\/a>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n                <div id=\\"collapseFour\\" class=\\"panel-collapse collapse\\">\\r\\n                    <div class=\\"panel-body\\">\\r\\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n            <\\/div>\\r\\n            <div class=\\"panel panel-default\\">\\r\\n                <div class=\\"panel-heading\\">\\r\\n                    <div class=\\"panel-title\\">\\r\\n                        <a class=\\"accordion-toggle collapsed\\" data-toggle=\\"collapse\\" data-parent=\\"#accordion\\" href=\\"#collapseFive\\">Your wished quistion will be here Your wished quistion will be here ?<\\/a>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n                <div id=\\"collapseFive\\" class=\\"panel-collapse collapse\\">\\r\\n                    <div class=\\"panel-body\\">\\r\\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <\\/p> \\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n            <\\/div>\\r\\n            <div class=\\"panel panel-default\\">\\r\\n                <div class=\\"panel-heading\\">\\r\\n                    <div class=\\"panel-title\\">\\r\\n                        <a class=\\"accordion-toggle collapsed\\" data-toggle=\\"collapse\\" data-parent=\\"#accordion\\" href=\\"#collapseSix\\">Your wished quistion will be here ?<\\/a>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n                <div id=\\"collapseSix\\" class=\\"panel-collapse collapse\\">\\r\\n                    <div class=\\"panel-body\\">\\r\\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <\\/p> \\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n            <\\/div>\\r\\n            \\r\\n    <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\"col-sm-3\\">\\r\\n    \\t<section class=\\"in-section\\">\\r\\n        \\t<h3>iN THIS sECTION<\\/h3>\\r\\n            <ul>\\r\\n            \\t<li><a class=\\"active\\" href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n            <\\/ul>\\r\\n        <\\/section>\\r\\n    <\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n\\r\\n\\r\\n<\\/section>\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n","content_ar":"<section class=\\"inner_content_area\\">\\r\\n<div class=\\"container\\">\\r\\n<div class=\\"row\\">\\r\\n\\t<div class=\\"col-sm-9\\">\\r\\n    \\t<div class=\\"panel-group faqs\\" id=\\"accordion\\">\\r\\n            \\r\\n            <div class=\\"panel panel-default\\">\\r\\n                <div class=\\"panel-heading\\">\\r\\n                    <div class=\\"panel-title\\">\\r\\n                        <a class=\\"accordion-toggle\\" data-toggle=\\"collapse\\" data-parent=\\"#accordion\\" href=\\"#collapseOne\\">\\r\\n                        Your wished quistion will be here Your wished quistion will be here Your wished quistion will be here?<\\/a>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n                <div id=\\"collapseOne\\" class=\\"panel-collapse collapse in\\">\\r\\n                    <div class=\\"panel-body\\">\\r\\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <\\/p>  \\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n            <\\/div>\\r\\n            <div class=\\"panel panel-default\\">\\r\\n                <div class=\\"panel-heading\\">\\r\\n                    <div class=\\"panel-title\\">\\r\\n                        <a class=\\"accordion-toggle collapsed\\" data-toggle=\\"collapse\\" data-parent=\\"#accordion\\" href=\\"#collapseTwo\\">Your wished quistion will be here Your wished quistion will be here ?<\\/a>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n                <div id=\\"collapseTwo\\" class=\\"panel-collapse collapse\\">\\r\\n                    <div class=\\"panel-body\\">\\r\\n                       <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <\\/p>   \\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n            <\\/div>\\r\\n            <div class=\\"panel panel-default\\">\\r\\n                <div class=\\"panel-heading\\">\\r\\n                    <div class=\\"panel-title\\">\\r\\n                        <a class=\\"accordion-toggle collapsed\\" data-toggle=\\"collapse\\" data-parent=\\"#accordion\\" href=\\"#collapseThree\\">Your wished quistion will be here ?<\\/a>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n                <div id=\\"collapseThree\\" class=\\"panel-collapse collapse\\">\\r\\n                    <div class=\\"panel-body\\">\\r\\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <\\/p>\\t\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n            <\\/div>\\r\\n            <div class=\\"panel panel-default\\">\\r\\n                <div class=\\"panel-heading\\">\\r\\n                    <div class=\\"panel-title\\">\\r\\n                        <a class=\\"accordion-toggle collapsed\\" data-toggle=\\"collapse\\" data-parent=\\"#accordion\\" href=\\"#collapseFour\\">Your wished quistion will be here Your wished quistion will be here Your wished quistion will be here ?<\\/a>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n                <div id=\\"collapseFour\\" class=\\"panel-collapse collapse\\">\\r\\n                    <div class=\\"panel-body\\">\\r\\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <\\/p>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n            <\\/div>\\r\\n            <div class=\\"panel panel-default\\">\\r\\n                <div class=\\"panel-heading\\">\\r\\n                    <div class=\\"panel-title\\">\\r\\n                        <a class=\\"accordion-toggle collapsed\\" data-toggle=\\"collapse\\" data-parent=\\"#accordion\\" href=\\"#collapseFive\\">Your wished quistion will be here Your wished quistion will be here ?<\\/a>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n                <div id=\\"collapseFive\\" class=\\"panel-collapse collapse\\">\\r\\n                    <div class=\\"panel-body\\">\\r\\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <\\/p> \\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n            <\\/div>\\r\\n            <div class=\\"panel panel-default\\">\\r\\n                <div class=\\"panel-heading\\">\\r\\n                    <div class=\\"panel-title\\">\\r\\n                        <a class=\\"accordion-toggle collapsed\\" data-toggle=\\"collapse\\" data-parent=\\"#accordion\\" href=\\"#collapseSix\\">Your wished quistion will be here ?<\\/a>\\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n                <div id=\\"collapseSix\\" class=\\"panel-collapse collapse\\">\\r\\n                    <div class=\\"panel-body\\">\\r\\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <\\/p> \\r\\n                    <\\/div>\\r\\n                <\\/div>\\r\\n            <\\/div>\\r\\n            \\r\\n    <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\"col-sm-3\\">\\r\\n    \\t<section class=\\"in-section\\">\\r\\n        \\t<h3>iN THIS sECTION<\\/h3>\\r\\n            <ul>\\r\\n            \\t<li><a class=\\"active\\" href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n            <\\/ul>\\r\\n        <\\/section>\\r\\n    <\\/div>\\r\\n<\\/div>\\r\\n<\\/div>\\r\\n\\r\\n\\r\\n<\\/section>\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n"}', '2017-10-08 10:46:56', '2017-10-08 10:46:56'),
(147, 82, 'Add CMS', 'taylor successor', 'Admin . Client . ', '{"_token":"hquJnffyYmod0k5ipEt0k0PKO1aSxZDuoeUoe99L","title_en":"Terms","title_ar":"Terms","alias":"Terms","content_en":"<section class=\\"inner_content_area\\">\\r\\n<div class=\\"container\\">\\r\\n<div class=\\"row\\">\\r\\n\\t<div class=\\"col-sm-9\\">\\r\\n\\t\\t<div class=\\"row\\">\\r\\n\\t\\t\\t<p>Privacy policy paragraph will be here...<\\/p>\\r\\n\\t\\t<\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\"col-sm-3\\">\\r\\n    \\t<section class=\\"in-section\\">\\r\\n        \\t<h3>iN THIS sECTION<\\/h3>\\r\\n            <ul>\\r\\n            \\t<li><a class=\\"active\\" href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n            <\\/ul>\\r\\n        <\\/section>\\r\\n    <\\/div>\\r\\n    \\r\\n<\\/div>\\r\\n<\\/div>\\r\\n\\r\\n\\r\\n<\\/section>\\r\\n\\r\\n\\r\\n","content_ar":"<section class=\\"inner_content_area\\">\\r\\n<div class=\\"container\\">\\r\\n<div class=\\"row\\">\\r\\n\\t<div class=\\"col-sm-9\\">\\r\\n\\t\\t<div class=\\"row\\">\\r\\n\\t\\t\\t<p>Privacy policy paragraph will be here...<\\/p>\\r\\n\\t\\t<\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\"col-sm-3\\">\\r\\n    \\t<section class=\\"in-section\\">\\r\\n        \\t<h3>iN THIS sECTION<\\/h3>\\r\\n            <ul>\\r\\n            \\t<li><a class=\\"active\\" href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n                <li><a href=\\"#\\">Menues will be here<\\/a><\\/li>\\r\\n            <\\/ul>\\r\\n        <\\/section>\\r\\n    <\\/div>\\r\\n    \\r\\n<\\/div>\\r\\n<\\/div>\\r\\n\\r\\n\\r\\n<\\/section>\\r\\n\\r\\n\\r\\n"}', '2017-10-08 10:47:37', '2017-10-08 10:47:37'),
(148, 82, 'Update CMS', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"hquJnffyYmod0k5ipEt0k0PKO1aSxZDuoeUoe99L","title_en":"site <br><span>map<\\/span>","title_ar":"site <br><span>map<\\/span>","alias":"sitemap","content_en":"<section class=\\"inner_content_area\\">\\r\\n<div class=\\"container\\">\\r\\n<div class=\\"row\\">\\r\\n\\t<div class=\\"col-sm-9\\">\\r\\n\\t\\t<div class=\\"row\\">\\r\\n\\t\\t\\t<ul class=\\"sitemap\\">\\r\\n\\t\\t\\t\\t<li><a class=\\"home\\" href=\\"#\\"> Home<\\/a><\\/li>\\r\\n\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/restaurant\\">All Restaurants<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/restaurant?type=new\\">New Restaurants<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/dish?type=mostSelling\\">Most Selling Dishes<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Promotions<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Members Area<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/area\\">All Locations<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/cuisine\\">All Cuisines<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Consultation<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/restaurant\\/create\\">Add Restaurant<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/feedback\\">Feedback<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"Terms\\">Terms<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/faq\\">FAQ<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/privacy\\">Privacy<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Social responsibility<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/sitemap\\">Sitemap<\\/a><\\/li>\\r\\n\\t\\t\\t<\\/ul>\\r\\n\\t\\t<\\/div>\\r\\n    <\\/div>\\r\\n        \\r\\n<\\/div>\\r\\n<\\/div>\\r\\n\\r\\n\\r\\n<\\/section>\\r\\n","content_ar":"<section class=\\"inner_content_area\\">\\r\\n<div class=\\"container\\">\\r\\n<div class=\\"row\\">\\r\\n\\t<div class=\\"col-sm-9\\">\\r\\n\\t\\t<div class=\\"row\\">\\r\\n\\t\\t\\t<ul class=\\"sitemap\\">\\r\\n\\t\\t\\t\\t<li><a class=\\"home\\" href=\\"#\\"> Home<\\/a><\\/li>\\r\\n\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">All Restaurants<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">New Restaurants<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Most Selling Dishes<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Promotions<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Members Area<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">All Locations<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">All Cuisines<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Consultation<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Add Restaurant<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Feedback<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Terms<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">FAQ<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Privacy<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Social responsibility<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Sitemap<\\/a><\\/li>\\r\\n\\t\\t\\t<\\/ul>\\r\\n\\t\\t<\\/div>\\r\\n    <\\/div>\\r\\n        \\r\\n<\\/div>\\r\\n<\\/div>\\r\\n\\r\\n\\r\\n<\\/section>\\r\\n"}', '2017-10-08 12:22:09', '2017-10-08 12:22:09'),
(149, 82, 'Update CMS', 'taylor successor', 'Admin . Client . ', '{"_method":"PATCH","_token":"hquJnffyYmod0k5ipEt0k0PKO1aSxZDuoeUoe99L","title_en":"site <br><span>map<\\/span>","title_ar":"site <br><span>map<\\/span>","alias":"sitemap","content_en":"<section class=\\"inner_content_area\\">\\r\\n<div class=\\"container\\">\\r\\n<div class=\\"row\\">\\r\\n\\t<div class=\\"col-sm-9\\">\\r\\n\\t\\t<div class=\\"row\\">\\r\\n\\t\\t\\t<ul class=\\"sitemap\\">\\r\\n\\t\\t\\t\\t<li><a class=\\"home\\" href=\\"#\\"> Home<\\/a><\\/li>\\r\\n\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/restaurant\\">All Restaurants<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/restaurant?type=new\\">New Restaurants<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/dish?type=mostSelling\\">Most Selling Dishes<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Promotions<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Members Area<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/area\\">All Locations<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/cuisine\\">All Cuisines<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Consultation<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/restaurant\\/create\\">Add Restaurant<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/feedback\\">Feedback<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"Terms\\">Terms<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/faq\\">FAQ<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/privacy\\">Privacy<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Social responsibility<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/sitemap\\">Sitemap<\\/a><\\/li>\\r\\n\\t\\t\\t<\\/ul>\\r\\n\\t\\t<\\/div>\\r\\n    <\\/div>\\r\\n        \\r\\n<\\/div>\\r\\n<\\/div>\\r\\n\\r\\n\\r\\n<\\/section>\\r\\n","content_ar":"<section class=\\"inner_content_area\\">\\r\\n<div class=\\"container\\">\\r\\n<div class=\\"row\\">\\r\\n\\t<div class=\\"col-sm-9\\">\\r\\n\\t\\t<div class=\\"row\\">\\r\\n\\t\\t\\t<ul class=\\"sitemap\\">\\r\\n\\t\\t\\t\\t<li><a class=\\"home\\" href=\\"#\\"> Home<\\/a><\\/li>\\r\\n\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/restaurant\\">All Restaurants<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/restaurant?type=new\\">New Restaurants<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/dish?type=mostSelling\\">Most Selling Dishes<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Promotions<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Members Area<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/area\\">All Locations<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/cuisine\\">All Cuisines<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Consultation<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/restaurant\\/create\\">Add Restaurant<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/feedback\\">Feedback<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"Terms\\">Terms<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/faq\\">FAQ<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/privacy\\">Privacy<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"#\\">Social responsibility<\\/a><\\/li>\\r\\n\\t\\t\\t\\t<li><a href=\\"\\/sitemap\\">Sitemap<\\/a><\\/li>\\r\\n\\t\\t\\t<\\/ul>\\r\\n\\t\\t<\\/div>\\r\\n    <\\/div>\\r\\n        \\r\\n<\\/div>\\r\\n<\\/div>\\r\\n\\r\\n\\r\\n<\\/section>\\r\\n"}', '2017-10-08 12:22:55', '2017-10-08 12:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `available_from` varchar(20) NOT NULL,
  `available_to` varchar(20) NOT NULL,
  `url` varchar(255) NOT NULL,
  `default` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `img`, `order`, `status`, `type`, `available_from`, `available_to`, `url`, `default`, `created_at`, `updated_at`) VALUES
(1, '/files/31768_22129banner1.jpg', 1, 0, 0, '2017-06-25', '2020-07-31', '', 0, '2017-06-06 14:36:56', '2017-10-02 09:12:49'),
(2, '/files/27734_1239banner2.jpg', 2, 0, 0, '2017-06-26', '2020-08-02', '', 0, '2017-06-06 14:39:08', '2017-10-02 09:13:37'),
(3, '/files/16836_26797banner3.jpg', 3, 0, 0, '2017-06-27', '2020-07-31', '', 0, '2017-06-06 14:51:28', '2017-10-02 09:14:28'),
(4, '/files/17350_24455res1.jpg', 4, 0, 1, '2017-06-30', '2020-06-17', '', 1, '2017-06-30 23:03:57', '2017-10-02 09:38:59'),
(10, '/files/add-1.jpg', 3, 0, 3, '2017-08-06', '2019-08-06', '', 0, '2017-08-06 07:08:16', '2017-08-06 07:08:16'),
(12, '/files/banner-bg2.jpg', 2, 0, 4, '2017-08-06', '2019-08-06', '', 0, '2017-08-06 07:51:56', '2017-08-06 07:51:56'),
(13, '/files/category.jpg', 3, 0, 4, '2017-08-06', '2019-08-06', '', 0, '2017-08-06 07:52:26', '2017-08-06 07:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `deliver_charge` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `special_request` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `users_id`, `restaurant_id`, `dish_id`, `order_id`, `deliver_charge`, `quantity`, `unit_price`, `total_price`, `special_request`, `created_at`, `updated_at`) VALUES
(5, 13, 4, 3, 1, '2', 12, '12', '32', 'dfsdg', '2017-06-03 16:13:10', '2017-06-03 16:13:10'),
(6, 94, 4, 3, 7, NULL, 1, '13', NULL, '', '2017-06-03 18:19:54', '2017-06-03 18:19:54'),
(7, 95, 4, 3, 8, NULL, 1, '13', NULL, '', '2017-06-03 20:41:35', '2017-06-03 20:41:35'),
(9, 96, 4, 3, 10, NULL, 1, '13', NULL, '', '2017-06-06 13:57:26', '2017-06-06 13:57:26'),
(10, 97, 4, 3, 11, NULL, 1, '13', NULL, '', '2017-06-07 12:39:51', '2017-06-07 12:39:51'),
(11, 98, 4, 3, 12, NULL, 1, '13', NULL, '', '2017-06-07 13:04:00', '2017-06-07 13:04:00'),
(12, 99, 4, 3, 13, NULL, 1, '13', NULL, '', '2017-06-07 13:05:27', '2017-06-07 13:05:27'),
(14, 82, 8, 4, 15, NULL, 2, '375', NULL, '', '2017-06-07 19:51:25', '2017-06-07 19:51:25'),
(17, 82, 7, 10, 18, NULL, 5, '4', NULL, '', '2017-06-07 21:14:37', '2017-10-08 07:12:17'),
(20, 82, 6, 8, 20, NULL, 2, '3.45', NULL, '', '2017-06-07 21:28:41', '2017-06-07 21:32:34'),
(21, 82, 6, 7, 20, NULL, 2, '2.550', NULL, '', '2017-06-07 21:33:24', '2017-06-11 14:01:24'),
(22, 82, 6, 11, 20, NULL, 1, '5', NULL, '', '2017-06-07 21:35:42', '2017-06-07 21:35:42'),
(24, 100, 4, 3, 22, NULL, 1, '13', NULL, '', '2017-06-08 09:34:31', '2017-06-08 09:34:31'),
(25, 82, 7, 10, 23, NULL, 11, '4', NULL, '', '2017-06-10 22:44:25', '2017-09-13 12:22:18'),
(26, 101, 8, 4, 24, NULL, 1, '375', NULL, '', '2017-06-11 09:41:14', '2017-06-11 09:41:14'),
(27, 102, 8, 4, 25, NULL, 1, '375', NULL, '', '2017-06-11 10:58:45', '2017-06-11 10:58:45'),
(28, 103, 7, 10, 26, NULL, 1, '4', NULL, '', '2017-06-11 13:41:58', '2017-06-11 13:41:58'),
(29, 82, 4, 3, 27, NULL, 2, '13', NULL, '', '2017-06-13 08:16:03', '2017-06-13 17:38:14'),
(30, 82, 8, 4, 28, NULL, 11, '375', NULL, '', '2017-06-13 17:29:07', '2017-09-17 08:52:21'),
(31, 104, 6, 7, 29, NULL, 1, '2.550', NULL, '', '2017-06-15 09:45:36', '2017-06-15 09:45:36'),
(32, 104, 7, 10, 30, NULL, 6, '4', NULL, '', '2017-06-15 09:47:31', '2017-06-15 09:49:03'),
(33, 107, 4, 3, 31, NULL, 3, '13', NULL, '', '2017-08-27 12:21:18', '2017-08-27 12:21:18'),
(34, 109, 4, 3, 32, NULL, 3, '13', NULL, '', '2017-08-27 12:30:04', '2017-08-27 12:30:04'),
(35, 110, 4, 3, 33, NULL, 2, '13', NULL, '', '2017-08-27 12:45:25', '2017-08-27 12:45:29'),
(36, 110, 4, 3, 34, NULL, 2, '13', NULL, '', '2017-08-27 12:49:47', '2017-08-27 12:49:47'),
(37, 82, 5, 6, 35, NULL, 7, '3,650', NULL, '', '2017-08-27 12:58:38', '2017-09-13 10:41:49'),
(39, 109, 5, 6, 36, NULL, 6, '3.650', NULL, '', '2017-08-28 05:54:06', '2017-08-28 05:54:06'),
(40, 111, 6, 7, 37, NULL, 5, '2.550', NULL, '', '2017-08-28 06:58:54', '2017-08-28 06:58:54'),
(41, 114, 8, 4, 38, NULL, 1, '375', NULL, '', '2017-08-29 06:59:58', '2017-08-29 07:01:13'),
(42, 114, 4, 3, 39, NULL, 2, '13', NULL, '', '2017-08-29 07:35:59', '2017-08-29 07:35:59'),
(44, 118, 15, 13, 40, NULL, 2, '10', NULL, '', '2017-08-30 12:19:27', '2017-08-30 12:19:27'),
(45, 121, 15, 13, 41, NULL, 2, '10', NULL, '', '2017-08-30 12:22:51', '2017-08-30 12:22:51'),
(46, 122, 15, 13, 42, NULL, 2, '10', NULL, '', '2017-08-30 12:23:13', '2017-08-30 12:23:13'),
(47, 82, 15, 13, 43, NULL, 3, '10', NULL, '', '2017-08-30 12:25:12', '2017-09-06 08:10:53'),
(48, 123, 4, 3, 44, NULL, 3, '13', NULL, '', '2017-09-06 06:47:48', '2017-09-06 06:50:36'),
(50, 82, 4, 3, 45, NULL, 1, '13', NULL, '', '2017-09-06 09:02:17', '2017-09-06 09:02:17'),
(51, 126, 5, 6, 46, NULL, 5, '3.650', NULL, '', '2017-09-06 11:59:15', '2017-09-06 11:59:15'),
(53, 126, 6, 11, 47, NULL, 5, '5', NULL, '', '2017-09-06 12:17:41', '2017-09-06 12:19:38'),
(54, 126, 15, 13, 48, NULL, 50, '10', NULL, '', '2017-09-06 12:47:42', '2017-09-06 12:47:42'),
(55, 127, 4, 3, 49, NULL, 4, '13', NULL, '', '2017-09-07 06:15:00', '2017-09-10 10:00:09'),
(57, 127, 3, 5, 50, NULL, 1, '325', NULL, '', '2017-09-07 07:39:46', '2017-09-10 11:45:23'),
(60, 127, 6, 8, 51, NULL, 5, '3.45', NULL, '', '2017-09-07 07:41:59', '2017-09-10 09:24:12'),
(61, 127, 6, 11, 51, NULL, 13, '5', NULL, '', '2017-09-07 07:42:14', '2017-09-10 10:03:30'),
(62, 127, 15, 13, 52, NULL, 2, '10', NULL, '', '2017-09-07 07:53:43', '2017-09-10 12:11:52'),
(63, 127, 8, 4, 53, NULL, 8, '375', NULL, '', '2017-09-07 11:35:59', '2017-09-10 11:43:20'),
(64, 131, 15, 14, 54, NULL, 1, '5', NULL, '', '2017-09-07 11:42:29', '2017-09-07 11:42:29'),
(65, 127, 7, 10, 55, NULL, 15, '4', NULL, '', '2017-09-07 12:07:12', '2017-09-10 09:23:24'),
(67, 127, 15, 14, 52, NULL, 4, '5', NULL, '', '2017-09-10 05:41:59', '2017-09-10 11:38:25'),
(68, 127, 6, 9, 51, NULL, 1, '2.555', NULL, '', '2017-09-10 06:57:23', '2017-09-10 11:44:27'),
(69, 127, 5, 6, 56, NULL, 6, '3.650', NULL, '', '2017-09-10 07:44:35', '2017-09-10 11:40:30'),
(70, 127, 5, 6, 57, NULL, 2, '3.650', NULL, '', '2017-09-10 09:23:58', '2017-09-10 11:04:01'),
(71, 127, 15, 14, 58, NULL, 2, '5', NULL, '', '2017-09-10 12:11:31', '2017-09-11 08:38:41'),
(72, 127, 8, 4, 59, NULL, 3, '375', NULL, '', '2017-09-10 12:14:49', '2017-09-11 06:52:29'),
(74, 82, 20, 17, 64, NULL, 1005, '2', NULL, '', '2017-09-12 09:39:41', '2017-09-12 09:39:50'),
(75, 135, 4, 3, 65, NULL, 1, '13', NULL, '', '2017-09-13 06:03:33', '2017-09-13 06:03:33'),
(76, 135, 4, 12, 65, NULL, 1, '4', NULL, '', '2017-09-13 06:03:42', '2017-09-13 06:03:42'),
(77, 136, 4, 12, 66, NULL, 1, '4', NULL, '', '2017-09-13 06:34:47', '2017-09-13 06:34:47'),
(78, 138, 3, 5, 67, NULL, 12, '325', NULL, '', '2017-09-13 07:47:18', '2017-09-13 07:48:36'),
(79, 138, 4, 3, 68, NULL, 5, '13', NULL, '', '2017-09-13 07:49:32', '2017-09-13 07:50:21'),
(80, 82, 21, 18, 69, NULL, 1, '3', NULL, '', '2017-09-13 08:11:57', '2017-09-13 09:17:05'),
(81, 138, 4, 3, 70, NULL, 1, '13', NULL, '', '2017-09-13 08:18:39', '2017-09-13 08:18:39'),
(82, 139, 15, 13, 71, NULL, 2, '10', NULL, '', '2017-09-13 09:36:33', '2017-09-13 09:36:33'),
(83, 139, 4, 3, 72, NULL, 2, '13', NULL, '', '2017-09-13 09:40:14', '2017-09-13 09:40:14'),
(85, 82, 4, 12, 45, NULL, 3, '4', NULL, '', '2017-09-13 11:57:20', '2017-09-13 12:39:38'),
(86, 142, 4, 3, 74, NULL, 4, '13', NULL, '', '2017-09-26 09:39:25', '2017-09-26 09:39:51'),
(87, 145, 20, 17, 76, NULL, 3, '2', NULL, '', '2017-10-05 12:31:14', '2017-10-05 12:31:14'),
(88, 146, 4, 12, 77, NULL, 1, '4', NULL, '', '2017-10-08 07:38:44', '2017-10-08 07:38:44'),
(90, 146, 6, 8, 78, NULL, 12, '3.45', NULL, '', '2017-10-08 07:42:29', '2017-10-08 07:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `min_quantity` int(11) DEFAULT NULL,
  `max_quantity` int(11) DEFAULT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name_en`, `name_ar`, `min_quantity`, `max_quantity`, `restaurant_id`, `created_at`, `updated_at`) VALUES
(3, 'category', 'gff', 65, 56, 4, '2017-05-19 14:42:34', '2017-05-19 14:42:34'),
(5, 'pasta', 'باستا', 1, 100, 10, '2017-09-12 07:27:57', '2017-09-12 07:27:57'),
(6, 'phototchine', 'فوتوتشيني', 1, 1000, 20, '2017-09-12 09:33:22', '2017-09-12 09:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `id` int(11) NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `content_en` longtext,
  `content_ar` longtext,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title_en`, `title_ar`, `alias`, `content_en`, `content_ar`, `created_at`, `updated_at`) VALUES
(1, 'about', 'about', 'about', '\r\n<section class="inner_content_area">\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-md-6">\r\n	<strong class="blue">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,</strong> \r\n    <p>when an unknown printer took a galley of type and scrambled it to make a type  specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker..\r\nthe 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker..</p><br>\r\n<br>\r\n\r\n</div>\r\n<div class="col-md-6">\r\n	<div class="vision clearfix">\r\n        <img src="/assets/website/images/vision.png" alt="">\r\n        <h5>Our Vision</h5>\r\n        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, </p>\r\n    </div>\r\n    <div class="mission clearfix">\r\n        <img src="/assets/website/images/mission.png" alt="">\r\n        <h5>Our Mission</h5>\r\n        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, </p>\r\n    </div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n\r\n</section>\r\n\r\n\r\n', '\r\n<section class="inner_content_area">\r\n<div class="container">\r\n<div class="row">\r\n<div class="col-md-6">\r\n	<strong class="blue">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,</strong> \r\n    <p>when an unknown printer took a galley of type and scrambled it to make a type  specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker..\r\nthe 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker..</p><br>\r\n<br>\r\n\r\n</div>\r\n<div class="col-md-6">\r\n	<div class="vision clearfix">\r\n        <img src="/assets/website/images/vision.png" alt="">\r\n        <h5>Our Vision</h5>\r\n        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, </p>\r\n    </div>\r\n    <div class="mission clearfix">\r\n        <img src="/assets/website/images/mission.png" alt="">\r\n        <h5>Our Mission</h5>\r\n        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, </p>\r\n    </div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n\r\n</section>\r\n\r\n\r\n', '2017-05-31 14:28:55', '2017-05-31 14:46:50'),
(2, 'PRIVACY<br><span> POLICY</span>', 'PRIVACY POLICY', 'privacy', '<section class="inner_content_area">\r\n<div class="container">\r\n<div class="row">\r\n	<div class="col-sm-9">\r\n		<div class="row">\r\n			<p>Privacy policy paragraph will be here...</p>\r\n		</div>\r\n    </div>\r\n    <div class="col-sm-3">\r\n    	<section class="in-section">\r\n        	<h3>iN THIS sECTION</h3>\r\n            <ul>\r\n            	<li><a class="active" href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n            </ul>\r\n        </section>\r\n    </div>\r\n    \r\n</div>\r\n</div>\r\n\r\n\r\n</section>\r\n\r\n\r\n', '<section class="inner_content_area">\r\n<div class="container">\r\n<div class="row">\r\n	<div class="col-sm-9">\r\n		<div class="row">\r\n			<p>Privacy policy paragraph will be here...</p>\r\n		</div>\r\n    </div>\r\n    <div class="col-sm-3">\r\n    	<section class="in-section">\r\n        	<h3>iN THIS sECTION</h3>\r\n            <ul>\r\n            	<li><a class="active" href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n            </ul>\r\n        </section>\r\n    </div>\r\n    \r\n</div>\r\n</div>\r\n\r\n\r\n</section>\r\n\r\n\r\n', '2017-05-31 14:56:29', '2017-05-31 14:58:39'),
(3, 'site <br><span>map</span>', 'site <br><span>map</span>', 'sitemap', '<section class="inner_content_area">\r\n<div class="container">\r\n<div class="row">\r\n	<div class="col-sm-9">\r\n		<div class="row">\r\n			<ul class="sitemap">\r\n				<li><a class="home" href="#"> Home</a></li>\r\n\r\n				<li><a href="/restaurant">All Restaurants</a></li>\r\n				<li><a href="/restaurant?type=new">New Restaurants</a></li>\r\n				<li><a href="/dish?type=mostSelling">Most Selling Dishes</a></li>\r\n				<li><a href="#">Promotions</a></li>\r\n				<li><a href="#">Members Area</a></li>\r\n				<li><a href="/area">All Locations</a></li>\r\n				<li><a href="/cuisine">All Cuisines</a></li>\r\n				<li><a href="#">Consultation</a></li>\r\n				<li><a href="/restaurant/create">Add Restaurant</a></li>\r\n				<li><a href="/feedback">Feedback</a></li>\r\n				<li><a href="Terms">Terms</a></li>\r\n				<li><a href="/faq">FAQ</a></li>\r\n				<li><a href="/privacy">Privacy</a></li>\r\n				<li><a href="#">Social responsibility</a></li>\r\n				<li><a href="/sitemap">Sitemap</a></li>\r\n			</ul>\r\n		</div>\r\n    </div>\r\n        \r\n</div>\r\n</div>\r\n\r\n\r\n</section>\r\n', '<section class="inner_content_area">\r\n<div class="container">\r\n<div class="row">\r\n	<div class="col-sm-9">\r\n		<div class="row">\r\n			<ul class="sitemap">\r\n				<li><a class="home" href="#"> Home</a></li>\r\n\r\n				<li><a href="/restaurant">All Restaurants</a></li>\r\n				<li><a href="/restaurant?type=new">New Restaurants</a></li>\r\n				<li><a href="/dish?type=mostSelling">Most Selling Dishes</a></li>\r\n				<li><a href="#">Promotions</a></li>\r\n				<li><a href="#">Members Area</a></li>\r\n				<li><a href="/area">All Locations</a></li>\r\n				<li><a href="/cuisine">All Cuisines</a></li>\r\n				<li><a href="#">Consultation</a></li>\r\n				<li><a href="/restaurant/create">Add Restaurant</a></li>\r\n				<li><a href="/feedback">Feedback</a></li>\r\n				<li><a href="Terms">Terms</a></li>\r\n				<li><a href="/faq">FAQ</a></li>\r\n				<li><a href="/privacy">Privacy</a></li>\r\n				<li><a href="#">Social responsibility</a></li>\r\n				<li><a href="/sitemap">Sitemap</a></li>\r\n			</ul>\r\n		</div>\r\n    </div>\r\n        \r\n</div>\r\n</div>\r\n\r\n\r\n</section>\r\n', '2017-05-31 15:01:37', '2017-10-08 12:22:55'),
(4, 'thank', 'شكرا ', 'thank', '<div style="display:block;text-align:center;clear:both;padding:200px 0px;"><h1>Thank You ......<a href=''/''>SAHALAT</a> </h1></div>', '<div style="display:block;text-align:center;clear:both;padding:200px 0px;"><h1>شكرا لك ......<a href=''/''>سهلات</a> </h1></div>', '2017-06-14 00:12:09', '2017-06-14 00:18:00'),
(5, 'FAQs', 'FAQs', 'faq', '<section class="inner_content_area">\r\n<div class="container">\r\n<div class="row">\r\n	<div class="col-sm-9">\r\n    	<div class="panel-group faqs" id="accordion">\r\n            \r\n            <div class="panel panel-default">\r\n                <div class="panel-heading">\r\n                    <div class="panel-title">\r\n                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">\r\n                        Your wished quistion will be here Your wished quistion will be here Your wished quistion will be here?</a>\r\n                    </div>\r\n                </div>\r\n                <div id="collapseOne" class="panel-collapse collapse in">\r\n                    <div class="panel-body">\r\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>  \r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class="panel panel-default">\r\n                <div class="panel-heading">\r\n                    <div class="panel-title">\r\n                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Your wished quistion will be here Your wished quistion will be here ?</a>\r\n                    </div>\r\n                </div>\r\n                <div id="collapseTwo" class="panel-collapse collapse">\r\n                    <div class="panel-body">\r\n                       <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>   \r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class="panel panel-default">\r\n                <div class="panel-heading">\r\n                    <div class="panel-title">\r\n                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Your wished quistion will be here ?</a>\r\n                    </div>\r\n                </div>\r\n                <div id="collapseThree" class="panel-collapse collapse">\r\n                    <div class="panel-body">\r\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>	\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class="panel panel-default">\r\n                <div class="panel-heading">\r\n                    <div class="panel-title">\r\n                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Your wished quistion will be here Your wished quistion will be here Your wished quistion will be here ?</a>\r\n                    </div>\r\n                </div>\r\n                <div id="collapseFour" class="panel-collapse collapse">\r\n                    <div class="panel-body">\r\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class="panel panel-default">\r\n                <div class="panel-heading">\r\n                    <div class="panel-title">\r\n                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Your wished quistion will be here Your wished quistion will be here ?</a>\r\n                    </div>\r\n                </div>\r\n                <div id="collapseFive" class="panel-collapse collapse">\r\n                    <div class="panel-body">\r\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p> \r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class="panel panel-default">\r\n                <div class="panel-heading">\r\n                    <div class="panel-title">\r\n                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Your wished quistion will be here ?</a>\r\n                    </div>\r\n                </div>\r\n                <div id="collapseSix" class="panel-collapse collapse">\r\n                    <div class="panel-body">\r\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p> \r\n                    </div>\r\n                </div>\r\n            </div>\r\n            \r\n    </div>\r\n    </div>\r\n    <div class="col-sm-3">\r\n    	<section class="in-section">\r\n        	<h3>iN THIS sECTION</h3>\r\n            <ul>\r\n            	<li><a class="active" href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n            </ul>\r\n        </section>\r\n    </div>\r\n</div>\r\n</div>\r\n\r\n\r\n</section>\r\n\r\n\r\n\r\n\r\n', '<section class="inner_content_area">\r\n<div class="container">\r\n<div class="row">\r\n	<div class="col-sm-9">\r\n    	<div class="panel-group faqs" id="accordion">\r\n            \r\n            <div class="panel panel-default">\r\n                <div class="panel-heading">\r\n                    <div class="panel-title">\r\n                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">\r\n                        Your wished quistion will be here Your wished quistion will be here Your wished quistion will be here?</a>\r\n                    </div>\r\n                </div>\r\n                <div id="collapseOne" class="panel-collapse collapse in">\r\n                    <div class="panel-body">\r\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>  \r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class="panel panel-default">\r\n                <div class="panel-heading">\r\n                    <div class="panel-title">\r\n                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Your wished quistion will be here Your wished quistion will be here ?</a>\r\n                    </div>\r\n                </div>\r\n                <div id="collapseTwo" class="panel-collapse collapse">\r\n                    <div class="panel-body">\r\n                       <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>   \r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class="panel panel-default">\r\n                <div class="panel-heading">\r\n                    <div class="panel-title">\r\n                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Your wished quistion will be here ?</a>\r\n                    </div>\r\n                </div>\r\n                <div id="collapseThree" class="panel-collapse collapse">\r\n                    <div class="panel-body">\r\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>	\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class="panel panel-default">\r\n                <div class="panel-heading">\r\n                    <div class="panel-title">\r\n                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Your wished quistion will be here Your wished quistion will be here Your wished quistion will be here ?</a>\r\n                    </div>\r\n                </div>\r\n                <div id="collapseFour" class="panel-collapse collapse">\r\n                    <div class="panel-body">\r\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class="panel panel-default">\r\n                <div class="panel-heading">\r\n                    <div class="panel-title">\r\n                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Your wished quistion will be here Your wished quistion will be here ?</a>\r\n                    </div>\r\n                </div>\r\n                <div id="collapseFive" class="panel-collapse collapse">\r\n                    <div class="panel-body">\r\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p> \r\n                    </div>\r\n                </div>\r\n            </div>\r\n            <div class="panel panel-default">\r\n                <div class="panel-heading">\r\n                    <div class="panel-title">\r\n                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Your wished quistion will be here ?</a>\r\n                    </div>\r\n                </div>\r\n                <div id="collapseSix" class="panel-collapse collapse">\r\n                    <div class="panel-body">\r\n                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p> \r\n                    </div>\r\n                </div>\r\n            </div>\r\n            \r\n    </div>\r\n    </div>\r\n    <div class="col-sm-3">\r\n    	<section class="in-section">\r\n        	<h3>iN THIS sECTION</h3>\r\n            <ul>\r\n            	<li><a class="active" href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n            </ul>\r\n        </section>\r\n    </div>\r\n</div>\r\n</div>\r\n\r\n\r\n</section>\r\n\r\n\r\n\r\n\r\n', '2017-10-08 10:46:56', '2017-10-08 10:46:56'),
(6, 'Terms', 'Terms', 'Terms', '<section class="inner_content_area">\r\n<div class="container">\r\n<div class="row">\r\n	<div class="col-sm-9">\r\n		<div class="row">\r\n			<p>Privacy policy paragraph will be here...</p>\r\n		</div>\r\n    </div>\r\n    <div class="col-sm-3">\r\n    	<section class="in-section">\r\n        	<h3>iN THIS sECTION</h3>\r\n            <ul>\r\n            	<li><a class="active" href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n            </ul>\r\n        </section>\r\n    </div>\r\n    \r\n</div>\r\n</div>\r\n\r\n\r\n</section>\r\n\r\n\r\n', '<section class="inner_content_area">\r\n<div class="container">\r\n<div class="row">\r\n	<div class="col-sm-9">\r\n		<div class="row">\r\n			<p>Privacy policy paragraph will be here...</p>\r\n		</div>\r\n    </div>\r\n    <div class="col-sm-3">\r\n    	<section class="in-section">\r\n        	<h3>iN THIS sECTION</h3>\r\n            <ul>\r\n            	<li><a class="active" href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n                <li><a href="#">Menues will be here</a></li>\r\n            </ul>\r\n        </section>\r\n    </div>\r\n    \r\n</div>\r\n</div>\r\n\r\n\r\n</section>\r\n\r\n\r\n', '2017-10-08 10:47:37', '2017-10-08 10:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `columns_info`
--

CREATE TABLE IF NOT EXISTS `columns_info` (
  `id` int(10) unsigned NOT NULL,
  `users_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `columns_info` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `columns_info`
--

INSERT INTO `columns_info` (`id`, `users_id`, `columns_info`, `created_at`, `updated_at`) VALUES
(3, '1', '{"/admin/reports/closed-orders":{"0":{"Order#":1,"Login":1,"Live/Demo":1,"Symbol":1,"Type":1,"Lots":0,"Open Time":0,"Open Price":0,"SL":1,"TP":1,"Commission":1,"Swaps":1,"Price":1,"Profit":1}},"/admin/reports/open-orders":{"0":{"Order#":1,"Login":1,"Live/Demo":1,"Symbol":0,"Type":0,"Lots":1,"Open Time":0,"Open Price":0,"SL":0,"TP":1,"Commission":0,"Swaps":0,"Price":1,"Profit":1}},"/admin/reports/account-statement":{"0":{"Order#":0,"Login":0,"Live/Demo":0,"Symbol":0,"Type":0,"Lots":0,"Open Time":1,"Open Price":0,"SL":0,"TP":1,"Commission":1,"Swaps":1,"Price":1,"Profit":1},"1":{"Order#":0,"Login":1,"Live/Demo":0,"Symbol":0,"Type":1,"Lots":1,"Open Time":1,"Open Price":1,"SL":1,"TP":1,"Commission":1,"Swaps":1,"Price":1,"Profit":1},"2":{"Order#":1,"Login":0,"Live/Demo":0,"Symbol":0,"Type":1,"Lots":1,"Open Time":1,"Open Price":1,"SL":1,"TP":1,"Commission":1,"Swaps":1,"Price":1,"Profit":1},"3":{"Order#":1,"Login":1,"Live/Demo":1,"Symbol":1,"Type":1,"Lots":0,"Open Time":0,"Open Price":1,"SL":1,"TP":1,"Commission":1,"Swaps":1,"Price":1,"Profit":1},"4":{"Order#":1,"Login":1,"Live/Demo":1,"Symbol":0,"Type":0,"Lots":0,"Open Time":1,"Open Price":0,"SL":0,"TP":0,"Commission":0,"Swaps":0,"Price":0,"Profit":1}},"/admin/accounts/accounts-list":{"0":{"Id":1,"Last Name":0,"Email ":1,"Last Login":1,"":1}},"/admin/mt4Configrations/groups-list":{"0":{"Name":1,"Company":1,"MC/SO":1}},"/admin/reports/daily-report":{"0":{"Login":1,"Live/Demo":1,"Time":1,"Group":1,"Bank":0,"Prev balance":0,"Balance":0,"Deposit":0,"Credit":0,"Profit Closed":1,"Profit":1,"Equity":1,"Margin":1,"Margin Free":1}},"/admin/settings/admins-list":{"0":{"Id":1,"First Name":1,"Last Name":1,"Email ":1,"":1}}}', '2017-01-18 10:43:53', '2017-02-06 09:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `users_id`, `email`, `phone`, `comments`, `created_at`, `updated_at`) VALUES
(1, 0, 'kijhiho@gfg.jh', '7676', 'gf', '2017-06-02 16:25:18', '2017-06-02 16:25:18'),
(2, 0, 'kijhiho@gfg.jh', '7676', 'gf', '2017-06-02 16:26:32', '2017-06-02 16:26:32'),
(3, 0, 'skdf@Oho.df', '7657', 'iuhiu', '2017-06-02 16:27:15', '2017-06-02 16:27:15'),
(4, 0, 'dfsd@kjd.sdf', '234234', 'sdf', '2017-06-02 16:27:54', '2017-06-02 16:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `cuisine`
--

CREATE TABLE IF NOT EXISTS `cuisine` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cuisine`
--

INSERT INTO `cuisine` (`id`, `name_en`, `name_ar`, `status`, `description_en`, `description_ar`, `created_at`, `updated_at`) VALUES
(1, 'kuwaiti', 'كويتي', 0, 'description kuwaiti ', 'شرح المطبخ الكويتي', '2017-05-19 13:42:52', '2017-06-07 16:37:00'),
(2, 'chinese', 'صيني', 0, 'description chinese', 'شرح المطبخ الصيني', '2017-05-19 13:43:48', '2017-06-07 16:38:03'),
(3, 'lebanese', 'لبناني', 0, 'description of lebanese cuisine', 'المطعم اللبناني', '2017-06-07 16:39:37', '2017-06-07 16:39:37'),
(4, 'continental', 'غربي', 0, 'continental description', 'continental ', '2017-06-07 16:41:11', '2017-06-07 16:41:11'),
(5, 'indian', 'هندي', 0, 'indian', 'هندي', '2017-06-07 16:41:55', '2017-06-07 16:41:55'),
(6, 'Fast Food', 'ألوجبات السريعة', 0, 'Fast Food', 'ألوجبات السريعة', '2017-08-29 08:59:30', '2017-08-29 08:59:30'),
(7, 'tasty', 'tasty', 0, 'tasty', 'tasty', '2017-09-13 08:08:55', '2017-09-13 08:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_menu`
--

CREATE TABLE IF NOT EXISTS `delivery_menu` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `restaurant_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery_menu`
--

INSERT INTO `delivery_menu` (`id`, `name_en`, `name_ar`, `restaurant_id`, `status`, `description_en`, `description_ar`, `created_at`, `updated_at`) VALUES
(1, 'deliver menu 1', 'قائمة التوصيل 1', 4, 1, 'deliver menu description 1', 'شرح قائمة التوصيل 1', '2017-05-19 14:45:06', '2017-05-19 14:45:06'),
(4, 'pasta', 'باستا', 20, 1, 'phototchine', 'phototchine', '2017-09-12 09:34:03', '2017-09-12 09:34:03'),
(5, 'phototchine', 'فوتوتشيني', 21, 1, 'phototchine', 'phototchine', '2017-09-13 08:09:34', '2017-09-13 08:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `deliver_package`
--

CREATE TABLE IF NOT EXISTS `deliver_package` (
  `id` int(11) NOT NULL,
  `deliver_number` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deliver_package`
--

INSERT INTO `deliver_package` (`id`, `deliver_number`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '0.05', '2017-08-30 19:03:49', '2017-08-30 19:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE IF NOT EXISTS `dish` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `restaurant_id` int(11) NOT NULL,
  `cuisine_id` int(11) NOT NULL,
  `menu_section_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `delivery_menu_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `available_from` varchar(20) DEFAULT NULL,
  `available_to` varchar(20) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`id`, `name_en`, `name_ar`, `restaurant_id`, `cuisine_id`, `menu_section_id`, `category_id`, `delivery_menu_id`, `parent_id`, `price`, `quantity`, `img`, `discount`, `available_from`, `available_to`, `description_en`, `description_ar`, `status`, `rating`, `created_at`, `updated_at`) VALUES
(3, 'dish 1', 'الطبق 1', 4, 1, 1, 3, 1, 1, '13', 99962, '/assets/website/images/dishes/dishes1.jpg', '', '2016-06-06', '2019-06-18', 'dish 1 description', 'شرح الطبق 1', 0, 4, '2017-05-20 14:06:58', '2017-10-08 07:09:24'),
(4, 'max xtrem mel', 'ماكس اكستريم ميل ', 8, 2, 1, 3, 1, 0, '375', 182, '/files/27734_1239banner2.jpg', '1', '2016-06-07', '2018-06-07', 'max xtrem mel', 'ماكس اكستريم ميل', 0, 2, '2017-06-07 18:37:54', '2017-09-10 12:15:25'),
(5, 'strbs', 'وجبة الارز بدجاج الكرسبي ', 3, 3, 1, 3, 1, 0, '325', 0, '/files/31768_22129banner1.jpg', '300', '2016-06-07', '2018-06-07', 'strbs', 'وجبة الارز بدجاج الكرسبي ستربس', 0, 0, '2017-06-07 18:50:24', '2017-09-10 11:45:29'),
(6, 'supper  sobrem ', 'سوير سوبريم كبير ', 5, 1, 1, 3, 1, 0, '3.650', 25, '/files/3856_31241dishes3.jpg', '100', '2016-06-07', '2018-06-07', 'sober sobrem ', 'سوير سوبريم كبير ', 0, 0, '2017-06-07 19:00:58', '2017-09-13 10:43:54'),
(7, 'big taisty', 'بيج تايستي ', 6, 1, 1, 3, 1, 0, '2.550', 77, '/files/11714_18387img_order1.jpg', '10', '2017-06-07', '2017-06-07', 'big taisty', 'بيج تايستي ', 0, 3, '2017-06-07 19:07:39', '2017-06-14 22:31:32'),
(8, 'big mak', 'بيج ماك', 6, 4, 1, 3, 1, 0, '3.45', 72, '/files/16836_26797banner3.jpg', '100', '2016-06-07', '2018-06-07', 'big mak', 'بيج ماك', 0, 5, '2017-06-07 19:11:23', '2017-10-08 07:44:12'),
(9, 'mak roial', 'ماك رويال', 6, 1, 1, 3, 1, 0, '2.555', 0, '/files/13082_24139dishes6.jpg', '150', '2016-06-07', '2018-06-07', 'mak roial', 'ماك رويال', 0, 0, '2017-06-07 19:14:46', '2017-09-10 11:44:37'),
(10, 'Falafil', 'فلافل', 7, 1, 1, 3, 1, 0, '4', 64, '/files/3856_31241dishes3.jpg', '1', '2016-06-07', '2018-06-07', 'falafil', 'فلافل', 0, 6, '2017-06-07 21:14:21', '2017-10-08 07:12:45'),
(11, 'Burger max', 'برغر', 6, 1, 1, 3, 1, 0, '5', 186, '/files/16836_26797banner3.jpg', '1', '2016-06-07', '2018-06-07', 'Burger max', 'Burger max', 0, 5, '2017-06-07 21:27:55', '2017-09-10 11:44:37'),
(12, 'my dish', 'طبقي', 4, 1, 1, 3, 1, 0, '4', 10000, '/files/26342_5159dishes1.jpg', '1', '2017-08-27', '2017-08-27', 'my description', 'شرح', 0, 0, '2017-08-27 13:04:28', '2017-08-27 13:04:28'),
(13, 'Angus Burger', 'أنجوس بيرجر', 15, 6, 1, 3, 1, 0, '10', 9989, '/files/11714_18387img_order1.jpg', '2', '2017-08-29', '2019-01-01', 'burger', 'برجر', 0, 5, '2017-08-29 09:04:36', '2017-09-13 09:39:24'),
(14, 'Burger', 'برجر', 15, 6, 2, 3, 1, 0, '5', 9974, '/files/11714_18387img_order1.jpg', '0.5', '2017-09-06', '2018-08-22', 'burger', 'برجر', 0, 0, '2017-09-06 07:53:17', '2017-09-10 12:26:54'),
(17, 'pasta', 'باستا', 20, 6, 5, 5, 4, 1, '2', 1, '/files/10846_24127logo.png', '0', '2017-09-12', '2017-09-12', 'pasta', 'pasta', 0, 0, '2017-09-12 09:38:56', '2017-09-12 09:38:56'),
(18, 'phototchine', 'فوتوتشيني', 21, 7, 1, 3, 5, 2, '3', 1, '/files/138647785_1312074881download (1).jpg', '0', '2017-09-13', '2017-12-15', 'phototchine', 'phototchine', 0, 0, '2017-09-13 08:11:18', '2017-09-13 08:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `dish_rate`
--

CREATE TABLE IF NOT EXISTS `dish_rate` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dish_rate`
--

INSERT INTO `dish_rate` (`id`, `users_id`, `dish_id`, `rate`, `description`, `status`, `notification`, `created_at`, `updated_at`) VALUES
(2, 82, 3, 3, 'oijdfg', 0, 1, '1', '2017-09-11 11:21:38'),
(3, 82, 8, 5, 'dvsd', 0, 1, '2017-06-14 22:37:04', '2017-09-12 09:50:57'),
(4, 82, 11, 5, 'sdsssssssssssss', 0, 1, '2017-06-14 22:37:43', '2017-06-14 22:38:01'),
(5, 114, 3, 4, '', 0, 1, '2017-08-29 07:35:52', '2017-09-12 09:54:02'),
(6, 82, 13, 5, '', 0, 1, '2017-09-06 07:51:45', '2017-09-12 09:54:24'),
(7, 127, 10, 6, '', 0, 1, '2017-09-07 11:41:21', '2017-09-12 09:50:49'),
(8, 127, 3, 5, '', 0, 1, '2017-09-10 06:33:52', '2017-09-12 09:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `email_group`
--

CREATE TABLE IF NOT EXISTS `email_group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_group`
--

INSERT INTO `email_group` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'drivers', '2017-06-08 10:53:35', '2017-06-08 10:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `email_group_users`
--

CREATE TABLE IF NOT EXISTS `email_group_users` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_group_users`
--

INSERT INTO `email_group_users` (`id`, `group_id`, `users_id`, `type`) VALUES
(117, 2, 16, NULL),
(118, 2, 17, NULL),
(119, 2, 82, NULL),
(120, 2, 134, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_mass_queue`
--

CREATE TABLE IF NOT EXISTS `email_mass_queue` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `last_users_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `email_group_id` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `email_mass_template`
--

CREATE TABLE IF NOT EXISTS `email_mass_template` (
  `id` int(11) NOT NULL,
  `email_group_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_mass_template`
--

INSERT INTO `email_mass_template` (`id`, `email_group_id`, `name`, `subject`, `body`, `language`, `created_at`, `updated_at`) VALUES
(3, 2, 'driver', 'driver', '', 'ar', '2017-09-11 13:15:43', '2017-09-11 13:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE IF NOT EXISTS `email_template` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `to_field` varchar(255) DEFAULT NULL,
  `to_email` varchar(255) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`id`, `name`, `subject`, `body`, `type`, `to_field`, `to_email`, `language`, `status`, `created_at`, `updated_at`) VALUES
(2, 'signUp', 'sssssss', '<p><img alt="" src="http://localhost:8000/files/15697_31158business-user-group-icon-44614.png" style="height:256px; width:256px" />sssssss</p>\r\n', 0, 'sssssssssss', 'ssssss', 'en', 0, '2017-03-21 11:50:22', '2017-03-23 08:42:43'),
(3, 'signUp', 'sdfg', 'sdfgggggggg', 2, 'gdf', 'gsdfg', 'en', 0, '2017-03-21 12:05:04', '2017-03-21 12:05:04'),
(4, 'signUp', 'gmmmmmmm', 'mmmmmmmmmmmmm', 0, 'mmmmmm', 'm', 'en', 1, '2017-03-21 12:05:34', '2017-03-21 12:05:34'),
(5, 'forgetPassword', 'forgetPassword', 'reminder_id : 25<br>reminder_user_id : 82<br>reminder_code : g8MwzIY7Tg58tl8zR5pO5J4E58WGtVvv<br>reminder_completed : <br>reminder_completed_at : <br>reminder_created_at : 2017-06-06 22:49:23<br>reminder_updated_at : 2017-06-06 22:49:23<br>accountInfo_id ', 0, 'accountInfo_email', 'manager@fintolog.com', 'en', 0, '2017-06-06 22:49:23', '2017-06-06 22:49:23'),
(6, 'forgetPassword', 'client forget password', '<p>this is forget password for client</p>\r\n', 1, 'accountInfo_email', 'admin@fintolog.com', 'en', 0, '2017-06-15 23:57:40', '2017-06-15 23:57:40'),
(7, 'contract', 'test', '<p>test</p>\r\n', 0, 'test', 'test', 'en', 0, '2017-09-11 13:16:46', '2017-09-11 13:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `governorate`
--

CREATE TABLE IF NOT EXISTS `governorate` (
  `id` int(11) NOT NULL,
  `name_en` varchar(50) DEFAULT NULL,
  `name_ar` varchar(50) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `governorate`
--

INSERT INTO `governorate` (`id`, `name_en`, `name_ar`, `created_at`, `updated_at`) VALUES
(3, 'governorate 1', 'المحافظة 1', '2017-05-19 12:59:05', '2017-05-19 12:59:05'),
(4, 'GOVERNORATE 2', 'محافظة 2', '2017-05-19 13:01:24', '2017-05-19 13:01:24'),
(5, 'GOVERNORATE 3', 'محافظة 3', '2017-05-19 13:01:48', '2017-05-19 13:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `knet`
--

CREATE TABLE IF NOT EXISTS `knet` (
  `id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `PaymentID` varchar(255) DEFAULT NULL,
  `Result` varchar(255) DEFAULT NULL,
  `PostDate` varchar(255) DEFAULT NULL,
  `TranID` varchar(255) DEFAULT NULL,
  `Auth` varchar(255) DEFAULT NULL,
  `Ref` varchar(255) DEFAULT NULL,
  `TrackID` varchar(255) DEFAULT NULL,
  `UDF1` varchar(255) DEFAULT NULL,
  `UDF2` varchar(255) DEFAULT NULL,
  `UDF3` varchar(255) DEFAULT NULL,
  `UDF4` varchar(255) DEFAULT NULL,
  `UDF5` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `knet`
--

INSERT INTO `knet` (`id`, `payment_id`, `users_id`, `order_id`, `amount`, `PaymentID`, `Result`, `PostDate`, `TranID`, `Auth`, `Ref`, `TrackID`, `UDF1`, `UDF2`, `UDF3`, `UDF4`, `UDF5`, `created_at`, `updated_at`) VALUES
(0, 12, 110, 33, '24.4', '6067611501572390', 'CAPTURED', '0828', '4404968501572390', '884136', '723915377066', '33', '', '', '', '', '', '2017-08-27 12:50:05', '2017-08-27 12:50:32'),
(0, 14, 114, 38, '372.25', '6632985031072410', 'CAPTURED', '0829', '4576659041072410', '986463', '724110355815', '38', '', '', '', '', '', '2017-08-29 07:03:07', '2017-08-29 07:04:29'),
(0, 0, 123, 44, '36.1', '2002400510972490', NULL, NULL, NULL, NULL, NULL, '44', NULL, NULL, NULL, NULL, '', '2017-09-06 06:51:30', '2017-09-06 06:51:30'),
(0, 17, 82, 43, '25', '2511081131172490', 'CAPTURED', '0906', '8903536141172490', '218206', '724911261287', '43', 'taylor', '', '', '', '', '2017-09-06 08:13:16', '2017-09-06 08:14:02'),
(0, 0, 126, 46, '-480.75', '', NULL, NULL, NULL, NULL, NULL, '46', NULL, NULL, NULL, NULL, '', '2017-09-06 12:03:15', '2017-09-06 12:03:15'),
(0, 19, 126, 47, '25.75', '7989656191572490', 'NOT CAPTURED', '0907', '7837208201572490', '', '724915086349', '47', '', '', '', '', '', '2017-09-06 12:19:45', '2017-09-06 12:20:12'),
(0, 0, 126, 48, '401', '8659387501572490', NULL, NULL, NULL, NULL, NULL, '48', NULL, NULL, NULL, NULL, '', '2017-09-06 12:50:33', '2017-09-06 12:50:33'),
(0, 20, 126, 48, '401', '1244958501572490', 'CAPTURED', '0907', '7252990511572490', '964710', '724915086366', '48', '', '', '', '', '', '2017-09-06 12:50:37', '2017-09-06 12:50:58'),
(0, 2, 2, 2, '', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2017-09-12 07:13:12', '2017-09-12 07:13:12'),
(0, 29, 139, 72, '24.4', '6428523421272560', 'CAPTURED', '0913', '3426441431272560', '652183', '725612909893', '72', '', '', '', '', '', '2017-09-13 09:42:19', '2017-09-13 09:42:57'),
(0, 13, 82, 27, '24.4', '7457053340972690', 'NOT CAPTURED', '0926', '1644291350972690', '', '726909929214', '27', 'taylor', '', '', '', '', '2017-09-26 06:34:26', '2017-09-26 06:34:58'),
(0, 13, 82, 27, '24.4', '8883398360972690', 'CAPTURED', '0926', '1766538360972690', '143636', '726909929218', '27', 'taylor', '', '', '', '', '2017-09-26 06:36:18', '2017-09-26 06:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `menu_section`
--

CREATE TABLE IF NOT EXISTS `menu_section` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `restaurant_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_section`
--

INSERT INTO `menu_section` (`id`, `name_en`, `name_ar`, `restaurant_id`, `status`, `description_en`, `description_ar`, `created_at`, `updated_at`) VALUES
(1, 'menu section 1', 'قسم القاشمة 1', 4, 0, 'description menu section 1', 'شرح القائمة 1', '2017-05-20 14:06:42', '2017-05-20 14:06:42'),
(2, 'Sandwiches', 'سندويش', 15, 0, 'Sandwiches', 'سندويش', '2017-09-06 07:48:05', '2017-09-06 07:48:05'),
(5, 'phototchine', 'فوتوتشيني', 20, 0, 'phototchine', 'phototchine', '2017-09-12 09:32:15', '2017-09-12 09:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `to_field` varchar(255) DEFAULT NULL,
  `to_email` varchar(255) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  `body` longtext,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `name`, `title`, `type`, `status`, `to_field`, `to_email`, `language`, `data`, `body`, `created_at`, `updated_at`) VALUES
(2, 'create_user', 'welcome', 'email', 0, '0', '', 'en', '', 'from here we are start', '2017-10-03 10:48:52', '2017-10-05 05:42:40'),
(3, 'contact_us', 'Contact us', 'email', 0, '0', '', 'en', '', 'we will contact you soon', '2017-10-05 05:50:49', '2017-10-05 05:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `id` int(11) NOT NULL,
  `deliver_number` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `operation_hour`
--

CREATE TABLE IF NOT EXISTS `operation_hour` (
  `id` int(11) NOT NULL,
  `restaurant_area_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `day` varchar(20) DEFAULT NULL,
  `shift1_from` varchar(20) DEFAULT NULL,
  `shift1_to` varchar(20) DEFAULT NULL,
  `shift2_from` varchar(20) DEFAULT NULL,
  `shift2_to` varchar(20) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `operation_hour`
--

INSERT INTO `operation_hour` (`id`, `restaurant_area_id`, `restaurant_id`, `day`, `shift1_from`, `shift1_to`, `shift2_from`, `shift2_to`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '0', '08:00:00', '12:00:00', '12:00:00', '20:00:00', '2017-05-26 22:22:44', '2017-05-26 22:22:44'),
(2, 2, 3, '4', '08:00:00', '12:00:00', '12:00:00', '20:', '2017-05-29 11:14:44', '2017-05-29 11:14:44'),
(3, 2, 4, '1', '08:00:00', '12:00:00', '12:00:00', '20:00:00', '2017-05-29 11:16:33', '2017-05-29 11:16:33'),
(4, 1, 3, '0', '08:00:00', '13:00:00', '13:00:00', '23:00:00', '2017-06-02 11:32:13', '2017-06-02 11:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `from_id` int(11) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `order_time` varchar(20) DEFAULT NULL,
  `deliver_time` varchar(20) DEFAULT NULL,
  `expected_time` varchar(10) NOT NULL,
  `deliver_date` varchar(20) DEFAULT NULL,
  `note` text,
  `deliver_charge` varchar(255) DEFAULT NULL,
  `sahalat_charge` double NOT NULL,
  `extra_charge` double NOT NULL,
  `sub_total` double NOT NULL,
  `total` double NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `users_id`, `restaurant_id`, `area_id`, `from_id`, `address_id`, `order_time`, `deliver_time`, `expected_time`, `deliver_date`, `note`, `deliver_charge`, `sahalat_charge`, `extra_charge`, `sub_total`, `total`, `rate`, `point`, `notification`, `status`, `created_at`, `updated_at`) VALUES
(1, 13, 4, 4, 1, 1, '1', '1', '', '1', 'sdfsd', '2', 0, 0, 0, 0, 2, 2, 1, 4, '2017-05-19 19:42:56', '2017-06-03 16:11:30'),
(6, 13, 3, 5, NULL, 1, NULL, '16:09', '', '2017-06-03', 'sdf', '2', 2, 1, 33, 50, 2, 1, 1, 3, '2017-06-03 16:10:19', '2017-06-07 18:29:37'),
(7, 94, 4, 0, NULL, 1, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-06-03 18:19:53', '2017-06-03 18:19:53'),
(8, 95, 4, 3, NULL, 1, NULL, '00:15', '', '2017-06-04', '', '2', 2, 0, 13, 16, NULL, NULL, 1, 1, '2017-06-03 20:41:35', '2017-06-04 13:11:55'),
(9, 13, 4, 3, NULL, 0, NULL, '17:55', '', '2017-06-04', '', '2', 0, 0, 0, 0, 0, 0, 1, 0, '2017-06-04 17:55:56', '2017-06-05 17:39:39'),
(10, 96, 4, 3, NULL, 1, NULL, '18:30', '', '', '', '2', 1, 0, 0, 0, 0, 0, 1, 0, '2017-06-06 09:39:22', '2017-09-12 09:52:34'),
(11, 97, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 1, 0, 0, 0, NULL, NULL, NULL, 0, '2017-06-07 12:39:51', '2017-06-07 12:39:51'),
(12, 98, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-06-07 13:04:00', '2017-06-07 13:04:00'),
(13, 99, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-06-07 13:05:27', '2017-06-07 13:05:27'),
(15, 82, 8, 7, NULL, 19, NULL, '20:00', '16:37:00', '2017-06-08', '', '2', 1, 0, 750, 744.5, 0, 0, 1, 3, '2017-06-07 19:51:25', '2017-06-10 18:24:44'),
(17, 82, 6, 4, NULL, 23, NULL, '08:15', '16:23:00', '2017-06-08', '', '2', 44, 0, 31.05, 2, 0, 0, 1, 1, '2017-06-07 20:53:51', '2017-09-12 09:53:18'),
(18, 82, 7, 5, NULL, 81, NULL, '11:57', '16:31:00', '2017-10-08', '', '1', 1, 0, 20, 20.8, 0, 0, 0, 3, '2017-06-07 21:14:37', '2017-10-08 07:13:36'),
(19, 82, 5, 3, NULL, 27, NULL, '21:40', '16:42:00', '2017-06-08', '', '2', 1, 0, 18, -580, 0, 0, 1, 1, '2017-06-07 21:20:56', '2017-06-12 11:01:25'),
(20, 82, 6, 4, NULL, 23, NULL, '08:15', '16:23:00', '2017-06-08', '', '2', 1, 0, 14.45, 9.24, 0, 0, 1, 1, '2017-06-07 21:28:29', '2017-06-10 16:21:34'),
(22, 100, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-06-08 09:34:31', '2017-06-08 09:34:31'),
(23, 82, 7, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-06-10 22:44:25', '2017-06-10 22:44:25'),
(24, 101, 8, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-06-11 09:41:14', '2017-06-11 09:41:14'),
(25, 102, 8, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-06-11 10:58:45', '2017-06-11 10:58:45'),
(26, 103, 7, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-06-11 13:41:58', '2017-06-11 13:41:58'),
(27, 82, 4, 3, NULL, 79, NULL, '07:24', ':00', '2017-10-09', '', '1', 2, 0, 26, 24.4, 0, 0, 0, 3, '2017-06-13 08:16:03', '2017-10-08 07:10:51'),
(28, 82, 8, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-06-13 17:29:07', '2017-06-13 17:29:07'),
(29, 104, 6, 0, NULL, 0, NULL, NULL, '', NULL, NULL, '2', 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-06-15 09:45:36', '2017-06-15 09:45:36'),
(30, 104, 7, 5, NULL, 28, NULL, '10:06', '23:09:00', '2017-06-15', '', '2', 1, 0, 24, 24.76, NULL, NULL, 1, 3, '2017-06-15 09:47:31', '2017-06-15 09:58:16'),
(31, 107, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-08-27 12:21:18', '2017-08-27 12:21:18'),
(32, 109, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-08-27 12:30:04', '2017-08-27 12:30:04'),
(33, 110, 4, 3, NULL, 32, NULL, '13:04', '12:59:00', '2017-08-28', '', '1', 2, 0, 26, 24.4, 0, 0, 1, 1, '2017-08-27 12:45:25', '2017-09-12 09:53:15'),
(34, 110, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-08-27 12:49:47', '2017-08-27 12:49:47'),
(35, 82, 5, 3, NULL, 79, NULL, '10:58', '', '2017-09-14', '', '1', 1, 0, 21, -678, NULL, NULL, 1, 1, '2017-08-27 12:58:38', '2017-10-08 06:49:28'),
(36, 109, 5, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-08-28 05:54:06', '2017-08-28 05:54:06'),
(37, 111, 6, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-08-28 06:58:54', '2017-08-28 06:58:54'),
(38, 114, 8, 7, NULL, 34, NULL, '11:05', '21:04:00', '2017-08-30', '', '1', 1, 0, 375, 372.25, 0, 0, 1, 2, '2017-08-29 06:59:58', '2017-08-29 07:54:49'),
(39, 114, 4, 3, NULL, 36, NULL, '07:53', '21:36:00', '2017-08-30', '', '1', 2, 0, 26, 24.4, 0, 0, 1, 2, '2017-08-29 07:35:59', '2017-08-29 07:54:29'),
(40, 118, 15, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-08-30 12:19:27', '2017-08-30 12:19:27'),
(41, 121, 15, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-08-30 12:22:51', '2017-08-30 12:22:51'),
(42, 122, 15, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-08-30 12:23:13', '2017-08-30 12:23:13'),
(43, 82, 15, 3, NULL, 47, NULL, '12:41', ':00', '2017-09-06', '', '1', 1, 0, 30, 25, NULL, NULL, 1, 3, '2017-08-30 12:25:12', '2017-09-12 09:52:24'),
(44, 123, 4, 3, NULL, 44, NULL, '07:05', '', '2017-09-07', '', '1', 2, 0, 39, 36.1, NULL, NULL, 1, 1, '2017-09-06 06:47:48', '2017-09-12 09:53:11'),
(45, 82, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-06 09:02:17', '2017-09-06 09:02:17'),
(46, 126, 5, 3, NULL, 50, NULL, '12:15', '', '2017-09-07', 'Test general request', '1', 1, 0, 18.25, -480.75, NULL, NULL, 1, 1, '2017-09-06 11:59:15', '2017-09-12 09:53:07'),
(47, 126, 6, 4, NULL, 51, NULL, '12:33', '', '2017-09-07', '', '1', 1, 0, 25, 25.75, NULL, NULL, 1, 1, '2017-09-06 12:17:31', '2017-09-12 09:52:20'),
(48, 126, 15, 3, NULL, 50, NULL, '13:05', ':00', '2017-09-06', '', '1', 1, 0, 500, 401, NULL, NULL, 1, 3, '2017-09-06 12:47:42', '2017-09-06 12:55:19'),
(49, 127, 4, 3, NULL, 66, NULL, '17:33', '', '2017-09-11', '', '1', 2, 0, 52, 47.8, NULL, NULL, 1, 1, '2017-09-07 06:15:00', '2017-09-11 16:21:41'),
(50, 127, 3, 3, NULL, 53, NULL, '12:00', '', '2017-09-10', '', 'g', 0, 0, 325, 25, NULL, NULL, 1, 1, '2017-09-07 07:39:46', '2017-09-12 09:52:16'),
(51, 127, 6, 4, NULL, 52, NULL, '11:59', '', '2017-09-11', '', '1', 1, 0, 84.805, 64.075, NULL, NULL, 1, 1, '2017-09-07 07:41:58', '2017-09-12 09:52:58'),
(52, 127, 15, 3, NULL, 66, NULL, '12:41', '', '2017-09-10', '', '1', 1, 0, 40, 35, NULL, NULL, 1, 1, '2017-09-07 07:53:43', '2017-09-12 09:52:12'),
(53, 127, 8, 7, NULL, 54, NULL, '12:30', '', '2017-09-11', '', '1', 1, 0, 3000, 2971, NULL, NULL, 1, 1, '2017-09-07 11:35:59', '2017-09-12 09:52:54'),
(54, 131, 15, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-07 11:42:29', '2017-09-07 11:42:29'),
(55, 127, 7, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-07 12:07:12', '2017-09-07 12:07:12'),
(56, 127, 5, 3, NULL, 65, NULL, '12:22', '', '2017-09-11', '', '1', 1, 0, 21.9, -577.1, NULL, NULL, 1, 1, '2017-09-10 07:44:35', '2017-09-11 16:21:45'),
(57, 127, 5, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-10 09:23:58', '2017-09-10 09:23:58'),
(58, 127, 15, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-10 12:11:31', '2017-09-10 12:11:31'),
(59, 127, 8, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-10 12:14:49', '2017-09-10 12:14:49'),
(60, 128, 19, 4, NULL, 16, NULL, '06:49', '', '2017-09-12', 'test', '1', 1, 1, 1, 1, 1, 1, 1, 1, '2017-09-12 06:49:57', '2017-09-12 09:52:07'),
(61, 15, 3, 3, NULL, 1, NULL, '06:54', '', '2017-09-12', '', '', 0, 0, 0, 0, 0, 0, 1, 0, '2017-09-12 06:54:59', '2017-09-12 09:52:03'),
(62, 15, 3, 3, NULL, 1, NULL, '06:55', '', '2017-09-12', '', '', 0, 0, 0, 0, 0, 0, 1, 0, '2017-09-12 06:55:23', '2017-09-12 07:38:07'),
(63, 15, 3, 3, NULL, 1, NULL, '06:55', '', '2017-09-12', '', '', 0, 0, 0, 0, 0, 0, 1, 0, '2017-09-12 06:57:28', '2017-09-12 09:51:34'),
(64, 82, 20, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-12 09:39:41', '2017-09-12 09:39:41'),
(65, 135, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-13 06:03:33', '2017-09-13 06:03:33'),
(66, 136, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-13 06:34:47', '2017-09-13 06:34:47'),
(67, 138, 3, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-13 07:47:18', '2017-09-13 07:47:18'),
(68, 138, 4, 3, NULL, 75, NULL, '08:33', ':00', '2017-09-14', '', '1', 2, 0, 65, 59.5, NULL, NULL, 1, 3, '2017-09-13 07:49:32', '2017-09-13 09:18:09'),
(69, 82, 21, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-13 08:11:57', '2017-09-13 08:11:57'),
(70, 138, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-13 08:18:39', '2017-09-13 08:18:39'),
(71, 139, 15, 8, NULL, 0, NULL, '12:06', ':00', '2017-09-13', '', '1', 2, 0, 20, 17, NULL, NULL, 1, 3, '2017-09-13 09:36:33', '2017-09-13 11:28:07'),
(72, 139, 4, 3, NULL, 78, NULL, '09:57', '', '2017-09-14', '', '1', 2, 0, 26, 24.4, NULL, NULL, 1, 1, '2017-09-13 09:40:14', '2017-10-08 06:49:25'),
(73, 19, 6, 3, NULL, 1, NULL, '10:42', '', '2017-09-13', '', '1', 0, 0, 0, 0, 0, 0, 1, 0, '2017-09-13 10:48:42', '2017-09-13 10:49:26'),
(74, 142, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-09-26 09:39:25', '2017-09-26 09:39:25'),
(75, 16, 3, 3, NULL, 1, NULL, '11:00', '', '2017-10-03', '', '1', 0, 0, 0, 0, 0, 0, 1, 0, '2017-10-03 11:01:04', '2017-10-08 06:49:19'),
(76, 145, 20, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-10-05 12:31:14', '2017-10-05 12:31:14'),
(77, 146, 4, 0, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, 0, 0, 0, 0, NULL, NULL, NULL, 0, '2017-10-08 07:38:44', '2017-10-08 07:38:44'),
(78, 146, 6, 4, NULL, 83, NULL, '08:15', '', '2017-10-09', '', '1', 1, 0, 41.4, 1, 0, 0, 1, 2, '2017-10-08 07:40:16', '2017-10-08 10:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_driver`
--

CREATE TABLE IF NOT EXISTS `order_driver` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `current_long` varchar(255) DEFAULT NULL,
  `current_lat` varchar(255) DEFAULT NULL,
  `delivering_id` int(11) NOT NULL DEFAULT '0',
  `deliver_distance` double NOT NULL DEFAULT '0',
  `deliver_time` varchar(20) NOT NULL DEFAULT '0',
  `return_distance` double NOT NULL DEFAULT '0',
  `return_time` varchar(20) NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `deliver_start_hour` varchar(20) NOT NULL,
  `deliver_end_hour` varchar(20) NOT NULL,
  `return_start_hour` varchar(20) NOT NULL,
  `return_end_hour` varchar(20) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_driver`
--

INSERT INTO `order_driver` (`id`, `users_id`, `order_id`, `current_long`, `current_lat`, `delivering_id`, `deliver_distance`, `deliver_time`, `return_distance`, `return_time`, `status`, `note`, `notification`, `deliver_start_hour`, `deliver_end_hour`, `return_start_hour`, `return_end_hour`, `created_at`, `updated_at`) VALUES
(11, 82, 8, '35.8894614', '32.0054921', 1, 19, '19', 43, '19', 0, NULL, 1, '01:00', '03:00', '', '', '2017-06-07 22:34:56', '2017-06-08 11:05:16'),
(15, 82, 1, '35.8746053', '31.9799521', 1, 200, '200', 200, '200', 0, NULL, 1, '17:23', '18:45', '', '', '2017-06-10 12:36:40', '2017-09-12 09:54:36'),
(22, 82, 15, '35.8746053', '31.9799521', 2, 50, '50', 12, '50', 0, NULL, 1, '05:20', '07:15', '', '', '2017-06-10 16:13:03', '2017-09-12 09:54:57'),
(24, 82, 20, '35.8746053', '31.9799521', 2, 100, '100', 60, '100', 0, NULL, 1, '03:03', '05:40', '', '', '2017-06-10 16:17:18', '2017-09-12 09:54:54'),
(25, 82, 17, '35.8746053', '31.9799521', 2, 60, '60', 5, '60', 0, NULL, 1, '08:00', '09:00', '', '', '2017-06-10 16:19:21', '2017-09-12 09:55:00'),
(26, 82, 19, '35.8746053', '31.9799521', 3, 90, '12', 120, '90', 0, '', 1, '04:40', '06:10', '', '', '2017-06-10 16:19:37', '2017-08-21 13:29:06'),
(28, 82, 18, '35.8746053', '31.9799521', 4, 150, '150', 13, '150', 0, NULL, 1, '18:30', '19:20', '', '', '2017-06-10 16:19:37', '2017-09-12 09:54:46'),
(29, 81, 30, '35.8746053', '31.9799521', 5, 120, '120', 70, '120', 1, '', 1, '05:10', '05:15', '', '', '2017-06-15 09:58:16', '2017-06-15 10:00:05'),
(30, 82, 13, '35.8746053', '31.9799521', 2, 180, '180', 90, '180', 0, NULL, 1, '20:20', '23:00', '', '', '2017-06-10 16:19:21', '2017-09-12 09:54:51'),
(31, 82, 33, '35.8746053', '31.9799521', 0, 0, '0', 0, '0', 0, NULL, 1, '', '', '', '', '2017-08-27 12:48:24', '2017-08-27 13:07:08'),
(32, 82, 38, '35.8746053', '31.9799521', 0, 0, '0', 0, '0', 3, '', 1, '', '', '', '', '2017-08-29 07:13:54', '2017-09-12 09:54:41'),
(33, 82, 27, '35.8746053', '31.9799521', 0, 0, '0', 0, '0', 0, NULL, 1, '', '', '', '', '2017-09-13 08:11:39', '2017-09-13 08:19:47'),
(34, 115, 68, '0', '0', 0, 0, '0', 0, '0', 0, NULL, 1, '', '', '', '', '2017-09-13 09:18:09', '2017-09-13 09:21:41'),
(35, 115, 71, '0', '0', 0, 0, '0', 0, '0', 3, '', 1, '', '', '', '', '2017-09-13 11:27:23', '2017-09-13 11:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `module_id` varchar(30) NOT NULL,
  `notification` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `order_id`, `users_id`, `amount`, `status`, `type`, `module_id`, `notification`, `created_at`, `updated_at`) VALUES
(4, 8, 95, '16', 0, 0, '', 1, '2017-06-03 20:41:54', '2017-09-13 07:17:00'),
(6, 15, 82, '744.5', 2, 0, '', 1, '2017-06-07 20:13:01', '2017-09-13 07:16:44'),
(7, 17, 82, '2', 2, 0, '', 1, '2017-06-07 21:08:56', '2017-09-13 07:16:40'),
(8, 19, 82, '-580', 0, 0, '', 1, '2017-06-07 21:24:37', '2017-09-13 07:16:36'),
(9, 20, 82, '9.24', 0, 0, '', 1, '2017-06-07 21:36:24', '2017-09-13 07:16:48'),
(10, 18, 82, '20.8', 0, 0, '', 0, '2017-06-08 09:52:40', '2017-10-08 07:12:45'),
(11, 30, 104, '24.76', 0, 0, '', 1, '2017-06-15 09:51:38', '2017-09-13 07:17:11'),
(12, 33, 110, '24.4', 2, 1, '6067611501572390', 1, '2017-08-27 12:47:48', '2017-09-13 07:16:25'),
(13, 27, 82, '24.4', 0, 0, '8883398360972690', 0, '2017-08-28 05:37:57', '2017-10-08 07:08:14'),
(14, 38, 114, '372.25', 2, 1, '6632985031072410', 1, '2017-08-29 07:03:04', '2017-09-13 07:17:18'),
(15, 39, 114, '24.4', 0, 0, '', 1, '2017-08-29 07:41:45', '2017-09-13 07:17:07'),
(16, 44, 123, '36.1', 0, 1, '2002400510972490', 1, '2017-09-06 06:50:55', '2017-09-13 07:16:21'),
(17, 43, 82, '25', 2, 1, '2511081131172490', 1, '2017-09-06 08:13:13', '2017-09-13 07:15:48'),
(18, 46, 126, '-480.75', 0, 1, '', 1, '2017-09-06 12:03:12', '2017-09-06 12:33:17'),
(19, 47, 126, '25.75', 0, 1, '7989656191572490', 1, '2017-09-06 12:19:40', '2017-09-13 07:17:15'),
(20, 48, 126, '401', 2, 1, '1244958501572490', 1, '2017-09-06 12:50:30', '2017-09-13 07:16:20'),
(21, 56, 127, '-577.1', 0, 0, '', 1, '2017-09-10 08:17:49', '2017-09-13 07:16:16'),
(22, 49, 127, '47.8', 0, 0, '', 1, '2017-09-10 10:00:37', '2017-09-13 07:16:02'),
(23, 52, 127, '35', 0, 0, '', 1, '2017-09-10 11:32:22', '2017-09-13 07:15:56'),
(24, 51, 127, '64.075', 0, 0, '', 1, '2017-09-10 11:44:37', '2017-09-12 09:54:31'),
(25, 50, 127, '25', 0, 0, '', 1, '2017-09-10 11:45:29', '2017-09-13 07:16:11'),
(26, 53, 127, '2971', 0, 0, '', 1, '2017-09-10 11:46:38', '2017-09-13 07:16:06'),
(27, 68, 138, '59.5', 0, 0, '', 1, '2017-09-13 07:56:08', '2017-10-08 06:49:46'),
(28, 71, 139, '17', 0, 0, '', 1, '2017-09-13 09:39:24', '2017-10-08 06:49:40'),
(29, 72, 139, '24.4', 2, 1, '6428523421272560', 1, '2017-09-13 09:42:16', '2017-10-08 06:49:43'),
(30, 35, 82, '-678', 0, 0, '', 1, '2017-09-13 10:43:54', '2017-09-13 11:22:01'),
(31, 78, 146, '1', 0, 0, '', 1, '2017-10-08 07:44:12', '2017-10-08 10:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE IF NOT EXISTS `persistences` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=1325 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(13, 6, 'aGBPzjGUrSTzGrFWqIqfBUYvdBcu3IKz', '2016-03-14 11:11:24', '2016-03-14 11:11:24'),
(21, 2, '0bsTPqQffZJUYINtFELUiTwRbd6n99Mb', '2016-03-15 11:08:45', '2016-03-15 11:08:45'),
(198, 6, 'DhP1XiaQ6ravLOhlCDmOsXc2KodsqOug', '2016-03-31 22:08:21', '2016-03-31 22:08:21'),
(200, 2, 'G0CvO9N8A1dfs2aSRmwKs8EqPjKVLPx4', '2016-04-01 17:25:40', '2016-04-01 17:25:40'),
(201, 2, 'tfNy8ZvSi4ZNXlG9UKnTS9YERHqpnwVq', '2016-04-01 18:27:34', '2016-04-01 18:27:34'),
(202, 2, 'eD04LoOYTd8rd1oJORQVFG9vI8WUh1UX', '2016-04-01 22:17:05', '2016-04-01 22:17:05'),
(213, 2, 'vlHgdDzy8cECi0MAmTf7HittgKJ2qZO2', '2016-04-04 06:38:58', '2016-04-04 06:38:58'),
(216, 2, 'mqLb4PaaBxQSoGutmIc9nwDjB5mLSgxm', '2016-04-05 07:37:01', '2016-04-05 07:37:01'),
(239, 2, 'DcDlJRWbi4dQbWNjQuflfOCWKlkwHbB1', '2016-04-08 17:57:23', '2016-04-08 17:57:23'),
(240, 2, 'tJmo4912LPXUxYVNJRe9U9e4ntS79BHG', '2016-04-08 20:29:42', '2016-04-08 20:29:42'),
(241, 2, 'REr5LXnnuyyImKiw8cmf0uTQsJovugvP', '2016-04-09 07:19:41', '2016-04-09 07:19:41'),
(246, 2, '9FxqSqdsQeDVlAa3g9puhX8zAnasUfF8', '2016-04-10 19:52:57', '2016-04-10 19:52:57'),
(268, 2, 'vz2qSKpx6kkUvSB6P7XcOUdOMyXAJG8p', '2016-04-13 18:39:37', '2016-04-13 18:39:37'),
(296, 4, 'ZtQJVPkNkMUlFDI7V3XQlfFikhA9qOji', '2016-04-19 14:45:34', '2016-04-19 14:45:34'),
(322, 4, '84sqz4XOyQVlc5RycNBPoi0ZBds01mVR', '2016-04-26 14:46:33', '2016-04-26 14:46:33'),
(330, 4, 'GxcieRdtZ9W0ZuC9phigoiX1PClhBrLS', '2016-04-27 12:02:04', '2016-04-27 12:02:04'),
(336, 4, 'l3Ch8sMgucWsV4FOe42faoipM9OCGjPK', '2016-04-30 15:49:09', '2016-04-30 15:49:09'),
(350, 20, 'WBGDzIYYWyneYLWEBgIRXcTp3JhQHMAT', '2016-05-01 13:18:01', '2016-05-01 13:18:01'),
(352, 18, 'HgMkihmdqosW8HXQUNLRbx0W5pbZa1cZ', '2016-05-01 13:22:35', '2016-05-01 13:22:35'),
(353, 21, 'e1Ijuw5yeXSfZApXWtSwkCOSpmEjByhe', '2016-05-01 13:23:05', '2016-05-01 13:23:05'),
(356, 26, 'FAeE7eqvmepKMEKbxM6YnI3rM3ITQ8RX', '2016-05-01 13:36:36', '2016-05-01 13:36:36'),
(357, 28, 'ODN81CXLx4QR1vczvFdhqzIz6Hku44Yy', '2016-05-01 13:47:29', '2016-05-01 13:47:29'),
(358, 12, 'kW11CamqTa3noWxxN02KRF8BW80PaiUK', '2016-05-01 13:59:26', '2016-05-01 13:59:26'),
(359, 39, '2fLMrqC2aDnVQCQ2oUv2ayglVuuQsyid', '2016-05-01 14:08:17', '2016-05-01 14:08:17'),
(360, 40, 'fhFjD5so2K3rxjRub2g3qmmZlWu0K44k', '2016-05-01 14:11:17', '2016-05-01 14:11:17'),
(362, 4, 'mPrmFHW16wggdaPFYcUMXBIHgiGEsvhI', '2016-05-01 14:34:04', '2016-05-01 14:34:04'),
(378, 12, 'YToBg3sS8R3Xxp6kufW0CqcHHf7Lpc9n', '2016-05-09 07:23:07', '2016-05-09 07:23:07'),
(385, 12, 'ksrIus9ZbV6i6URyGSgVZKCsrj3c29sq', '2016-05-10 06:53:35', '2016-05-10 06:53:35'),
(391, 11, '1g4msvKw3JfxJtMCV7nDejsdHfXPHoXS', '2016-05-10 11:14:05', '2016-05-10 11:14:05'),
(392, 56, 'dLPFAvR1FSGfo65vJQAyuRIVukn3VAiL', '2016-05-10 11:17:12', '2016-05-10 11:17:12'),
(393, 57, 'Be7kBATXAOzaTEdc1tJ2KSrBsEs9FWDJ', '2016-05-10 11:21:48', '2016-05-10 11:21:48'),
(395, 59, 'sFFhsIOII0r7zuDZEos0O2rhJO0MWkYo', '2016-05-10 11:40:16', '2016-05-10 11:40:16'),
(396, 59, 'Fv7ySwol0SnvdXqjYIb5bw324M5URpLz', '2016-05-10 11:46:05', '2016-05-10 11:46:05'),
(401, 59, 'FQC8mpXw0SCa1SX1xjPHYFFxvKE3uTVL', '2016-05-10 11:57:58', '2016-05-10 11:57:58'),
(402, 60, 'X2Z91KsVmdqRFvEkjhsZdM699mk4eR9h', '2016-05-10 12:11:07', '2016-05-10 12:11:07'),
(403, 60, 'meYifxiLMmMZ8OyCg9vXD4iMKMO66MQK', '2016-05-10 12:14:42', '2016-05-10 12:14:42'),
(405, 62, '3p1Z95LClarupWPkwjEJalIUAIb78Q4S', '2016-05-10 12:18:08', '2016-05-10 12:18:08'),
(462, 64, 'vttSfarMntiWYxNhMUqDzKXrx01glNA1', '2016-05-29 06:47:05', '2016-05-29 06:47:05'),
(470, 69, 'TagiBTWWF4NiiNvPoQtyZKG47YYyTyDb', '2016-05-29 11:38:10', '2016-05-29 11:38:10'),
(487, 4, 'AE7f2jTsLd8l4UJjAhzOu1TpAqjCHt9n', '2016-06-01 09:32:49', '2016-06-01 09:32:49'),
(507, 4, 'UdfuXc5X2TKbLDHtSuaX2ZNOUfLvnUPH', '2016-06-09 13:30:01', '2016-06-09 13:30:01'),
(759, 5, 'LsEf94NVFuMZ5w7hVh29tJFDbk0hEdtP', '2017-01-04 11:13:23', '2017-01-04 11:13:23'),
(760, 5, 'CMh19Tb6fzo0HR5aLGaz7JEyjN61zaoP', '2017-01-04 11:35:03', '2017-01-04 11:35:03'),
(762, 5, 'i6Vq9llTFN6ynkQGg5OswceRB9WbvjNU', '2017-01-04 11:46:51', '2017-01-04 11:46:51'),
(764, 5, 'zz8ARNLcEHDRFm6S6iMSTMePVLQrv0KN', '2017-01-04 12:36:58', '2017-01-04 12:36:58'),
(765, 5, '9MXAGm6vA1J4og4cndTAJqHXFgvlakvw', '2017-01-04 12:45:20', '2017-01-04 12:45:20'),
(768, 5, 'MXJJnSLUAEokkbTnyHWa0Wt3cpWJv3Xv', '2017-01-04 12:52:44', '2017-01-04 12:52:44'),
(770, 5, 'h65Fb2HIxmKm71g9uLU8ILuWxKhViu8u', '2017-01-04 13:16:34', '2017-01-04 13:16:34'),
(772, 5, 'orF9EdXntpOtHR3uI4enUrCFN8OO3efQ', '2017-02-08 21:25:08', '2017-02-08 21:25:08'),
(942, 89, 'llTk8YHKyjUBfS6yJATMGgjOqbePZp15', '2017-05-23 02:46:15', '2017-05-23 02:46:15'),
(1003, 94, 'svqsK6B6PDJGmNKMLGMMmpUtZC6yaiYO', '2017-06-03 15:19:33', '2017-06-03 15:19:33'),
(1005, 95, 'MfVuc8wdyRB9MbGXiYRXNtZShkndQTLk', '2017-06-03 17:41:35', '2017-06-03 17:41:35'),
(1041, 96, 'ZouvnfqIkwVlfaIZX4hxNjK6l3pzewgQ', '2017-06-06 06:39:22', '2017-06-06 06:39:22'),
(1057, 99, 'kzkbi8RuuzdflfApKVg8HYo99G6CkUjp', '2017-06-07 10:05:27', '2017-06-07 10:05:27'),
(1072, 100, 'Q2OCYiM9h98JbXGywQh2i9gEUgnYp5SP', '2017-06-08 06:34:31', '2017-06-08 06:34:31'),
(1075, 13, 'th0pq6RGYDs4FuexVtlSHOdnbLZKTTSn', '2017-06-08 07:14:59', '2017-06-08 07:14:59'),
(1076, 13, 'Dl9zrj0yMBzETGnCPbVNrpp3rvvdhXRc', '2017-06-08 07:16:12', '2017-06-08 07:16:12'),
(1090, 101, 'KgNGZv88oOHNY5lvLD1FKXpqhtfIImml', '2017-06-11 06:41:14', '2017-06-11 06:41:14'),
(1092, 102, 'Der5DP1caZAlOYHiqIM00ZDnA3cHwyvE', '2017-06-11 07:58:45', '2017-06-11 07:58:45'),
(1094, 103, 'MwO3lcIweJmTDRAkNGdy4rU5t4gYhufT', '2017-06-11 10:41:58', '2017-06-11 10:41:58'),
(1112, 104, 'g3OpvHz7V43aNp1yM4w5jlJ5tR1Wn21Q', '2017-06-15 06:45:36', '2017-06-15 06:45:36'),
(1115, 107, 'laH8Bs7Ja0NXCIhsVIN5VV3cCi9BwCP8', '2017-08-27 18:21:18', '2017-08-27 18:21:18'),
(1116, 109, 'ApdxKs8PsZVYO3qOP6mPAVeHoXhp41GX', '2017-08-27 18:30:04', '2017-08-27 18:30:04'),
(1118, 110, 'wUwCwIbdFEb0GH3FFycVM4ZpMSwM4Iup', '2017-08-27 18:45:25', '2017-08-27 18:45:25'),
(1121, 111, '5eoFj5Y8Xz2zeYWpunMNn8Cmrhc8KYKu', '2017-08-28 12:58:54', '2017-08-28 12:58:54'),
(1126, 113, 'LdMaKyJKYXJDcbunUVpg5w9ROsz4auNx', '2017-08-28 14:43:03', '2017-08-28 14:43:03'),
(1127, 114, '1Iz9c9pcxrjMwEGdZi6x6IjN7rWC57Ud', '2017-08-29 12:59:58', '2017-08-29 12:59:58'),
(1142, 119, 'oc2WXfnLcz5PKYUBOW9KsVqzH8J8aGwY', '2017-08-30 17:41:14', '2017-08-30 17:41:14'),
(1143, 119, 'avKt9BkERa6Qm6GqAZqm4OtPE83ZZcfu', '2017-08-30 17:41:34', '2017-08-30 17:41:34'),
(1144, 119, 'vzukusJ3EjBqOAi4ErsM9qy2R8d3Jzn4', '2017-08-30 17:42:28', '2017-08-30 17:42:28'),
(1145, 119, 'woBL9tVgB7EOXDFn5Kytbrokfr0zaJ4n', '2017-08-30 17:45:55', '2017-08-30 17:45:55'),
(1147, 121, '8p5l6tOC3SwvDCeksIm2yJxMHiJTM7Bj', '2017-08-30 18:22:51', '2017-08-30 18:22:51'),
(1148, 122, 'ho8IB5d1s6xHvcy15nNMxuJwIrKDQPLg', '2017-08-30 18:23:13', '2017-08-30 18:23:13'),
(1155, 115, 'gpM4h16AmPsispTNWxCLDollGFO8yjVH', '2017-09-05 11:33:35', '2017-09-05 11:33:35'),
(1156, 123, 'PcX1WGl2LBvTZ2WgY838hpIbYluUTPMb', '2017-09-06 12:47:48', '2017-09-06 12:47:48'),
(1161, 126, 'Uva0LVYE0aiAvRyUXGga2yihBF5mP4hS', '2017-09-06 17:59:15', '2017-09-06 17:59:15'),
(1164, 127, 'Rctq4VFf0Sj9xup7LG1E3wSUCcapLWhw', '2017-09-07 12:15:00', '2017-09-07 12:15:00'),
(1165, 131, 't9AW9Wy3MD989oLYvUC349o5jESVgr7w', '2017-09-07 17:42:29', '2017-09-07 17:42:29'),
(1167, 119, 'ynmj26OCbQ2uC8OQeWCRP6iYhBIqUHpJ', '2017-09-10 18:37:13', '2017-09-10 18:37:13'),
(1168, 119, 'bhklWn5GwxWTkFRkNm8Cz5YiKXHXpoYf', '2017-09-10 18:37:33', '2017-09-10 18:37:33'),
(1170, 119, '2WLdy6sGjZZdBP5rez0QvyuqSlnSv1eU', '2017-09-10 18:40:44', '2017-09-10 18:40:44'),
(1174, 135, 'P47ZxeOQ80pRAmYJ507HLTfPbbZ4RmvT', '2017-09-13 12:03:33', '2017-09-13 12:03:33'),
(1176, 136, 'YnFaAu7zYL6GiLSmsxzXOHF46iLSVoje', '2017-09-13 12:34:47', '2017-09-13 12:34:47'),
(1177, 138, '6x3RPhqESvOuk8Q8RUXrJKjsarFW7XG8', '2017-09-13 13:46:45', '2017-09-13 13:46:45'),
(1182, 139, 'UsU9YWS2tUKBrW6ZW0n07pkUvJZ38obL', '2017-09-13 15:36:33', '2017-09-13 15:36:33'),
(1222, 140, 'mmmJGf84p018hIQEvbWXWZhSUor5jCBP', '2017-09-19 16:41:03', '2017-09-19 16:41:03'),
(1225, 141, 'h0Vb4LkYXQtCGEd9IAQj9GCixDW8X8vi', '2017-09-20 14:13:52', '2017-09-20 14:13:52'),
(1226, 141, 'kM3mAOi7qHIUsWfCFAeghhGoFChAh3gf', '2017-09-20 14:14:07', '2017-09-20 14:14:07'),
(1228, 138, 'xm22zWYc8kJ5pHHgEboZoZAQGBOn7d8o', '2017-09-20 14:16:06', '2017-09-20 14:16:06'),
(1230, 138, 'RwpC83jvRrFksanAauz73rA6vCdVMC9q', '2017-09-20 14:17:06', '2017-09-20 14:17:06'),
(1239, 142, 'lkxP8ouDbUHvHKTZNqb7dnDEjSFQYKV3', '2017-09-26 15:39:25', '2017-09-26 15:39:25'),
(1258, 119, '1Q5Fkhu2i5waVy7OId4uyU6fB6YI0hV4', '2017-10-01 18:49:52', '2017-10-01 18:49:52'),
(1259, 119, 'k9G8GjxN8mWxClFXQ28Ht0tk7GLDbFyD', '2017-10-01 18:50:04', '2017-10-01 18:50:04'),
(1261, 119, 'wNbBQe5sp57hZE9qQ0511oVaautb65p0', '2017-10-01 19:01:09', '2017-10-01 19:01:09'),
(1274, 116, 'pi4Dkj0qAEDK8X6ecafxv8MuFCdi3avF', '2017-10-04 14:13:40', '2017-10-04 14:13:40'),
(1275, 116, 'z2QC2yR0AaQdukJrNnYm8uHOcyNmZm5B', '2017-10-04 14:27:49', '2017-10-04 14:27:49'),
(1276, 116, 'uZCmz4Z48vkGWhJRPzS5SC72fFjg2nV0', '2017-10-04 14:28:02', '2017-10-04 14:28:02'),
(1277, 116, 'rD3MkXCQWvLqY7xVCcOyzkVJ0bRbAIsp', '2017-10-04 14:28:02', '2017-10-04 14:28:02'),
(1278, 116, 'FNZKU4fea4r9Hb0u0GHXXUZWSVJhdBGk', '2017-10-04 14:28:41', '2017-10-04 14:28:41'),
(1280, 116, 'fq8YrTINeHEu65737sMnEX56na7xewYM', '2017-10-04 14:29:42', '2017-10-04 14:29:42'),
(1281, 116, 'kmOWGdvsKuVO2bNXCzylZYEkjoYqvQXv', '2017-10-04 14:37:29', '2017-10-04 14:37:29'),
(1298, 145, 'XL6dcMSufA67HUaldb9ZMRSZTTyEXAhH', '2017-10-05 18:31:14', '2017-10-05 18:31:14'),
(1308, 146, 'BFMtEoLicvux2dS5kYKyp2sm3OleEzac', '2017-10-08 13:38:44', '2017-10-08 13:38:44'),
(1322, 82, 'N3vqXohSuLhvgDTY66touBlKT3h8LFIK', '2017-10-08 17:07:00', '2017-10-08 17:07:00'),
(1323, 82, 'fVAtHjm8KUkbpidVy0cRq4BYUgLzuF0G', '2017-10-08 17:57:55', '2017-10-08 17:57:55'),
(1324, 82, 'WWvuD8ZWoAPde3imYAWD8CAcvnmPonGg', '2017-10-08 18:15:19', '2017-10-08 18:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE IF NOT EXISTS `reminders` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(11, 3, 'Tf82pzBVSKQCocIl4wLAJHOYnjQmCyqc', 1, '2016-04-24 07:07:13', '2016-04-24 07:06:19', '2016-04-24 07:07:13'),
(12, 3, 'bg8a6p52d0Y1fLdvaWjPXrTWBDIss6Tm', 1, '2016-12-27 13:31:16', '2016-12-27 12:22:15', '2016-12-27 13:31:16'),
(25, 82, 'g8MwzIY7Tg58tl8zR5pO5J4E58WGtVvv', 1, '2017-06-06 20:31:57', '2017-06-06 19:49:23', '2017-06-06 20:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `branch` int(11) NOT NULL,
  `Owner_first_name` varchar(255) DEFAULT NULL,
  `Owner_last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `available_payment` varchar(25) DEFAULT NULL,
  `telephone` varchar(25) DEFAULT NULL,
  `address_en` varchar(255) DEFAULT NULL,
  `address_ar` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `min_amount` varchar(255) DEFAULT NULL,
  `working_hour_from` varchar(20) DEFAULT NULL,
  `working_hour_to` varchar(20) DEFAULT NULL,
  `deliver_time_from` varchar(20) DEFAULT NULL,
  `deliver_time_to` varchar(20) DEFAULT NULL,
  `deliver_charge` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `show_menu` int(11) DEFAULT NULL,
  `order_accept_days` int(11) DEFAULT NULL,
  `offline_order` int(11) DEFAULT NULL,
  `summary_en` varchar(255) DEFAULT NULL,
  `summary_ar` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `commission_type` int(11) DEFAULT NULL,
  `discount_type` int(11) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `area_id` int(11) NOT NULL,
  `follow_us` int(11) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `long` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name_en`, `name_ar`, `branch`, `Owner_first_name`, `Owner_last_name`, `email`, `available_payment`, `telephone`, `address_en`, `address_ar`, `description_en`, `description_ar`, `status`, `min_amount`, `working_hour_from`, `working_hour_to`, `deliver_time_from`, `deliver_time_to`, `deliver_charge`, `rating`, `show_menu`, `order_accept_days`, `offline_order`, `summary_en`, `summary_ar`, `url`, `img`, `commission_type`, `discount_type`, `discount`, `area_id`, `follow_us`, `notification`, `long`, `lat`, `created_at`, `updated_at`) VALUES
(3, 'landy', 'sfdj', 0, 'landy', 'landy', 'landy@gmail.com', '', '0785181656', 'lkj', 'lj', 'lj', 'lk', 1, '30', '12:00', '19:35', '00:00', '18:30', '1', 3, 0, 0, 0, 'kj', 'lkj', '/', '/files/17350_24455res1.jpg', 0, 0, 'klj', 6, 0, 1, '35.9391932', '31.9466904', '2017-05-18 07:31:26', '2017-09-10 08:24:19'),
(4, 'MCDonald', 'ماك', 0, 'taylor', 'successor', 'taylorsuccessor@gmail.com', 'knet,visa, cash ', '0785181656', 'address restaurant 1', 'عنوان 1', 'description restaurant 1', 'شرح المطعم 1', 1, '21.32', '08:00:00', '16:00:00', '09:00:00', '15:00:00', '2.5', 3, 1, 7, 1, 'summary restaurant 1', 'مختصر المطعم 1', '/assets/website/images/img_order1.jpg', '/files/18952_9633res4.jpg', 1, 1, '10', 3, 0, 1, '35.9754138', '31.9897962', '2017-05-19 14:26:54', '2017-09-10 13:09:40'),
(5, 'Pizza Hut', 'بيتزا', 0, 'owner name', 'yosif', 'yosit@pizza.com', 'knet,visa, cash ', '0785181656', '', 'عنوان بيتزا', '', 'بيتزا', 1, '10', '08:00', '23:55', '08:43', '16:43', '1', 0, 1, 3, 1, '', 'بيتزا', '/', '/files/1078_28471Pizza_Hut_logo.svg.png', 0, 0, '1', 3, 0, 1, '35.9089808', '31.9823706', '2017-06-07 17:52:09', '2017-09-12 09:53:46'),
(6, 'Burger King', 'برقر', 0, 'jon', 'land', 'jon@pros.com', 'knet,visa, cash ', '0096182783468', '', '', '', '', 1, '13', '05:25', '17:52', '08:00', '17:52', '1', 3, 1, 2, 1, '', '', '/', '/files/19620_18957res3.jpg', 0, 1, '1', 4, 0, 1, '35.8969645', '31.938096', '2017-06-07 17:57:06', '2017-09-12 09:53:52'),
(7, 'Johnny Rockets', 'Rockets', 0, 'kali', 'jonson', 'kali@produ.com', '', '0785181656', '', '', '', '', 1, '12', '17:57', '17:57', '00:00', '22:50', '1', 4, 1, 4, 0, '', '', '/', '/files/11714_18387img_order1.jpg', 1, 1, '1', 5, 0, 1, '35.9074359', '31.9056047', '2017-06-07 18:04:54', '2017-09-10 08:35:17'),
(8, 'KFC', 'KFC', 0, 'kfc', 'kfc', 'kfc@kfc.com', '', '0785181656', '', '', '', '', 1, '30', '10:50', '18:07', '10:50', '18:07', '1', 0, 1, 2, 1, '', '', '/', '/files/506_13227res2.jpg', 0, 1, '20', 7, 0, 1, '35.8988528', '31.9462535', '2017-06-07 18:11:01', '2017-06-07 19:46:15'),
(10, 'sahalat', 'sahalat', 0, 'sahalat', 'sahalat', 'info@sahalat.com', 'sahalat', '346346', '', '', '', '', 0, '1', '13:34', '13:34', '13:34', '13:34', '1', 5, 0, 0, 0, '', '', '/', '/files/12050_14051logo.png', 0, 0, '0', 3, 0, 1, '', '', '2017-06-15 13:36:37', '2017-09-12 09:53:33'),
(12, 'e;djf', 'sdfsdf', 0, 'j', 'hoih', 'oih', 'kl', 'oh', '', '', '', '', 0, 'ij', 'oijoi', 'ho', 'ho', 'h', 'ou', 0, 0, 0, 0, '', '', 'iho', 'ih', 0, 0, 'ho', 3, 0, 1, '', '', '2017-06-15 23:35:53', '2017-09-12 09:51:02'),
(13, 'kjoj', 'kjhh', 0, 'lkjlkj', 'lkj', 'lkj', 'jh', 'lk', '', '', '', '', 0, 'kjh', 'kjh', 'kj', 'hk', 'jh', 'kjhkj', 0, 0, 0, 0, '', '', 'hk', 'jh', 0, 0, 'kj', 3, 0, 1, '36.139397621154785', '32.08908302965641', '2017-06-15 23:37:57', '2017-06-15 23:42:04'),
(15, 'Hardees', 'هارديز', 0, 'Hardees', 'Hardees', 'info@hardees.com', 'KNET', '9999', 'Kuwait', 'هارديز', '', 'هارديز', 1, '10', '08:00', '00:00', '09:00', '00:00', '2', 3, 0, 0, 0, '', 'هارديز', 'www,hardees.com', '/files/143558620_183805428hardees.png', 0, 0, '2', 8, 0, 1, '', '', '2017-08-29 08:55:47', '2017-09-11 08:38:27'),
(16, 'KFC', 'kfc', 0, 'test', 'test', 'info@kfc.com', '', '5555', 'ggg', 'kfc', '', 'kfc', 1, '5', '12:00', '23:00', '12:00', '22:58', '1', 5, 0, 0, 1, '', 'kfc', 'kfc.com', '/files/18952_9633res4.jpg', 0, 0, '5', 3, 0, 1, '', '', '2017-09-06 07:23:32', '2017-09-12 09:53:24'),
(20, 'Pasta', 'باستا', 0, 'merhan', 'merhan', 'merhan@yahoo.com', '2', '7777777', 'Pasta', 'pasta', 'Pasta', 'pasta', 1, '1', '09:15', '12:00', '09:30', '09:27', '1', 5, 1, 1, 1, 'Pasta', 'pasta', 'pasta.com', '/files/31768_22129banner1.jpg', 0, 0, '0', 6, 0, 1, '', '', '2017-09-12 09:29:25', '2017-09-12 09:51:27'),
(21, 'tasty', 'tasty', 0, 'merhan', 'merhan', 'merhan@yahoo.com', '1', '888888', '', 'tasty', '', 'tasty', 1, '0', '00:00', '12:00', '03:00', '08:04', '1', 5, 1, 0, 1, '', 'tasty', 'tasty.com', '/files/1851817532_2140414147download.jpg', 0, 0, '0', 9, 0, 1, '', '', '2017-09-13 08:08:13', '2017-09-13 08:28:26'),
(22, 'merhan test', NULL, 0, 'merhan test', 'merhan test', 'merhan@yahoo.com', NULL, '7777777', 'Jordan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, '', '', '2017-09-13 08:29:35', '2017-09-13 08:29:35'),
(23, 'Hardees Kuwait City', 'هارديز الكويت', 0, 'Hardees 2', 'Hardees 2', 'admin2@hardees.com', '', '654456', '', '', '', '', 1, '5', '10:00', '23:00', '10:00', '23:00', '1', 5, 0, 0, 0, '', '', 'hardees.com', '/files/143558620_183805428hardees.png', 0, 0, '', 8, 0, 1, '', '', '2017-09-14 09:01:58', '2017-10-08 06:49:08'),
(24, 'Hamra Tower', 'Hamra Tower', 0, 'Raghda', 'Mohammed', 'raghda@mawaqaa.com', '', '76767676', '', '', '', '', 1, '1.000', '09:06', '09:06', '09:06', '09:06', '1.500', 4, 1, 1, 0, '', '', 'www.hardees.com', '/files/143558620_183805428hardees.png', 0, 0, '', 3, 0, 1, '', '', '2017-09-14 09:08:50', '2017-10-08 06:48:55'),
(25, 'Hardees Kuwait City', 'Hardees Kuwait', 0, 'hardees kuwait', 'hardees kuwait', 'kuwait@hardees.com', '1', '5555', '', 'Hardees Kuwait', '', 'Hardees Kuwait', 1, '5', '10:00', '22:00', '10:00', '22:00', '2', 5, 1, 7, 1, '', 'Hardees Kuwait', 'hardees.com', '/files/143558620_183805428hardees.png', 0, 0, '', 3, 0, 1, '', '', '2017-09-19 09:53:56', '2017-10-01 08:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_area`
--

CREATE TABLE IF NOT EXISTS `restaurant_area` (
  `id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `delivery_charges` varchar(255) DEFAULT NULL,
  `sahalat_charge` varchar(255) DEFAULT NULL,
  `min_amount` varchar(255) DEFAULT NULL,
  `deliver_time_from` varchar(20) DEFAULT NULL,
  `deliver_time_to` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `governorate_id` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_area`
--

INSERT INTO `restaurant_area` (`id`, `area_id`, `restaurant_id`, `delivery_charges`, `sahalat_charge`, `min_amount`, `deliver_time_from`, `deliver_time_to`, `status`, `governorate_id`, `created_at`, `updated_at`) VALUES
(1, 4, 4, '12', '2', '13', '08:00:00', '16:00:00', 0, 3, '2017-05-26 22:20:50', '2017-05-26 22:20:50'),
(2, 3, 4, '3', '2', '100', '09:00', '14:00', 0, 3, '2017-05-29 10:54:29', '2017-05-29 11:10:37'),
(3, 3, 4, '4', '6', '90', '08:00:00', '16:00:00', 0, 3, '2017-05-30 08:41:58', '2017-05-30 08:41:58'),
(4, 3, 4, '1', '2', '12', '00:00', '18:00:00', 0, 3, '2017-06-02 11:17:16', '2017-06-02 11:17:16'),
(5, 3, 3, 'g', 'dg', 'f', '08:00', '18:00:00', 0, 3, '2017-06-15 23:19:10', '2017-06-15 23:19:10'),
(6, 3, 15, '1', '1', '5', '08:00', '22:00:00', 0, 3, '2017-08-29 09:42:39', '2017-08-29 09:42:39'),
(7, 8, 15, '1', '2', '5', '08:00', '22:00:00', 0, 3, '2017-08-29 09:44:05', '2017-08-29 09:44:05'),
(8, 4, 15, '1', '0.5', '2', '08:00', '23:00', 0, 4, '2017-09-06 07:57:33', '2017-09-06 07:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_cuisine`
--

CREATE TABLE IF NOT EXISTS `restaurant_cuisine` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `cuisine_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_cuisine`
--

INSERT INTO `restaurant_cuisine` (`id`, `restaurant_id`, `cuisine_id`) VALUES
(1, 4, 2),
(2, 4, 1),
(3, 3, 2),
(4, 5, 2),
(5, 5, 3),
(6, 6, 4),
(7, 8, 5),
(8, 15, 6),
(11, 20, 6),
(12, 21, 7);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_notification`
--

CREATE TABLE IF NOT EXISTS `restaurant_notification` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `order_status` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_offer`
--

CREATE TABLE IF NOT EXISTS `restaurant_offer` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_rate`
--

CREATE TABLE IF NOT EXISTS `restaurant_rate` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_rate`
--

INSERT INTO `restaurant_rate` (`id`, `users_id`, `restaurant_id`, `rate`, `description`, `status`, `notification`, `created_at`, `updated_at`) VALUES
(2, 91, 4, 2, 'skdf asldkfjasdkfj', 1, 1, '2017-06-14 16:36:32', '2017-06-14 17:53:52'),
(3, 82, 4, 4, 'vsfdv', 0, 1, '2017-06-14 17:54:47', '2017-09-10 13:09:40'),
(4, 82, 6, 3, 'lksjdf', 0, 1, '2017-06-14 22:38:14', '2017-09-12 09:50:12'),
(5, 114, 4, 3, '', 0, 1, '2017-08-29 07:35:47', '2017-09-12 09:54:16'),
(6, 127, 15, 3, 'teest ', 1, 1, '2017-09-10 05:59:14', '2017-09-12 09:50:31'),
(7, 127, 3, 3, 'to be tested ', 0, 1, '2017-09-10 08:24:09', '2017-09-12 09:54:20'),
(8, 127, 7, 4, '', 0, 1, '2017-09-10 08:35:17', '2017-09-12 09:54:11');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_users`
--

CREATE TABLE IF NOT EXISTS `restaurant_users` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant_users`
--

INSERT INTO `restaurant_users` (`id`, `users_id`, `restaurant_id`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 82, 10, 0, 4, '2017-05-19 14:40:20', '2017-06-15 14:01:17'),
(2, 13, 4, 0, 1, '2017-06-02 08:43:57', '2017-06-02 08:43:57'),
(3, 115, 4, 0, 4, '2017-08-29 09:09:23', '2017-09-13 08:25:40'),
(4, 118, 15, 0, 0, '2017-08-29 09:38:20', '2017-08-29 09:38:20'),
(5, 118, 15, 0, 3, '2017-08-30 12:10:37', '2017-08-30 12:10:37'),
(6, 13, 16, 0, 0, '2017-09-06 07:32:35', '2017-09-06 07:32:35'),
(7, 124, 15, 0, 0, '2017-09-06 08:23:31', '2017-09-06 08:23:31'),
(8, 138, 3, 0, 0, '2017-09-13 09:15:06', '2017-09-13 09:15:06'),
(9, 124, 15, 0, 0, '2017-09-14 09:15:40', '2017-09-14 09:15:40'),
(10, 125, 15, 0, 3, '2017-09-19 10:36:01', '2017-09-19 10:36:01'),
(11, 140, 15, 0, 0, '2017-09-19 10:40:24', '2017-09-19 10:40:24'),
(12, 140, 25, 0, 3, '2017-09-19 10:40:48', '2017-09-19 10:40:48'),
(13, 141, 4, 0, 0, '2017-09-20 08:13:31', '2017-09-20 08:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `deny_permissions` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `deny_permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '|*.*.*.*', '|', '2016-03-28 13:25:48', '2017-03-23 02:56:17'),
(3, 'client', 'Client', '|', '', '2017-03-22 21:52:50', '2017-03-22 21:52:50'),
(4, 'public', 'public', '|*.*.*.*', '', '2017-03-22 22:15:21', '2017-03-22 22:15:21'),
(9, 'driver', 'driver', '|dashboard.*.*.*|admin.delivery_menu.*.*|admin.order_driver.*.*|admin.order.*.*', '|*.*.otherData.*|*.*.allData.*|*.order.create.*', '2017-06-04 14:18:53', '2017-06-04 20:11:25'),
(10, 'dispatcher', 'dispatcher', '|*.address.*.*|*.order_driver.*.*|*.service_company_order.*.*|*.service_company.index.*|dashboard.*.*.*|*.*.groupData.*|*.order.*.*|*.cart.*.*|*.*.deliverMap.*|*.*.map.*|*.*.allmap.*|*.service_company_order_service.*.*', '|*.*.userData.*', '2017-06-05 10:47:26', '2017-06-15 21:54:54'),
(11, 'sahalatdriver', 'sahalatdriver', '|*.address.*.*|*.order.*.*|*.order_driver.*.*|*.*.allData.*|dashboard.*.*.*|*.*.map.*|*.*.allmap.*|*.*.deliverMap.*|*.service_company_order_service.*.*', '|*.*.userData.*', '2017-06-05 15:16:18', '2017-06-15 21:56:27'),
(12, 'restaurant-manager', 'restaurant manager', '|*.restaurant.*.*|*.*.groupData.*|*.restaurant_area.*.*|*.restaurant_users.*.*|*.order_driver.*.*|*.cart.*.*|*.order.*.*|*.payment.*.*|*.dish_rate.*.*|*.dish.*.*|*.menu_section.*.*|dashboard.*.*.*|*.restaurant_cuisine.*.*', '|*.*.allData.*', '2017-06-05 15:23:02', '2017-06-05 15:23:02'),
(13, 'call-center', 'call center', '|dashboard.*.*.*|*.dish_rate.*.*|*.restaurant_rate.*.*|*.contact_us.*.*|*.order.*.*|*.order_driver.*.*|*.*.groupData.*', '|*.*.create.*|*.*.allData.*', '2017-06-05 18:34:30', '2017-06-05 18:35:52'),
(14, 'cms', 'cms', '|*.cms.*.*|*.contact_us.*.*|*.banner.*.*|dashboard.*.*.*', '|', '2017-06-05 18:40:47', '2017-06-05 18:40:47'),
(15, 'guest', 'guest', '|', '|', '2017-06-07 09:39:24', '2017-06-07 09:39:24'),
(16, 'block', 'block', '|', '|*.*.*.*', '2017-06-15 21:50:05', '2017-06-15 21:50:05'),
(17, 'service-company-manager', 'service company manager', '|admin.service_boy.*.*|admin.service_company.*.*|admin.service_company_order_service.*.*|admin.service.*.*|admin.service_company_order.*.*', '|*.*.allData.*', '2017-08-28 03:50:34', '2017-08-28 04:43:50'),
(18, 'service-boy', 'service boy', '|admin.service_company_order.*.*|admin.service_company_order_service.*.*|*.*.userData.*|*.service_company.*.*', '|*.*.allData.*|*.*.groupData.*|*.*.create.*', '2017-08-28 04:55:33', '2017-08-28 05:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE IF NOT EXISTS `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(4, 3, NULL, NULL),
(13, 9, NULL, NULL),
(15, 10, NULL, NULL),
(16, 12, NULL, NULL),
(19, 1, NULL, NULL),
(79, 1, NULL, NULL),
(80, 1, NULL, NULL),
(80, 3, NULL, NULL),
(81, 3, NULL, NULL),
(82, 1, NULL, NULL),
(82, 3, NULL, NULL),
(97, 3, '2017-06-07 09:39:51', '2017-06-07 09:39:51'),
(97, 15, '2017-06-07 09:39:51', '2017-06-07 09:39:51'),
(98, 3, '2017-06-07 10:04:00', '2017-06-07 10:04:00'),
(98, 15, '2017-06-07 10:04:00', '2017-06-07 10:04:00'),
(99, 3, '2017-06-07 10:05:27', '2017-06-07 10:05:27'),
(99, 15, '2017-06-07 10:05:27', '2017-06-07 10:05:27'),
(100, 3, '2017-06-08 06:34:31', '2017-06-08 06:34:31'),
(100, 15, '2017-06-08 06:34:31', '2017-06-08 06:34:31'),
(101, 3, '2017-06-11 06:41:14', '2017-06-11 06:41:14'),
(101, 15, '2017-06-11 06:41:14', '2017-06-11 06:41:14'),
(102, 3, '2017-06-11 07:58:45', '2017-06-11 07:58:45'),
(102, 15, '2017-06-11 07:58:45', '2017-06-11 07:58:45'),
(103, 3, '2017-06-11 10:41:58', '2017-06-11 10:41:58'),
(103, 15, '2017-06-11 10:41:58', '2017-06-11 10:41:58'),
(104, 3, '2017-06-15 06:45:35', '2017-06-15 06:45:35'),
(104, 15, '2017-06-15 06:45:36', '2017-06-15 06:45:36'),
(105, 4, NULL, NULL),
(106, 10, NULL, NULL),
(106, 12, NULL, NULL),
(107, 3, '2017-08-27 18:21:18', '2017-08-27 18:21:18'),
(107, 15, '2017-08-27 18:21:18', '2017-08-27 18:21:18'),
(109, 3, '2017-08-27 18:30:04', '2017-08-27 18:30:04'),
(109, 15, '2017-08-27 18:30:04', '2017-08-27 18:30:04'),
(110, 3, '2017-08-27 18:45:25', '2017-08-27 18:45:25'),
(110, 15, '2017-08-27 18:45:25', '2017-08-27 18:45:25'),
(111, 3, '2017-08-28 12:58:54', '2017-08-28 12:58:54'),
(111, 15, '2017-08-28 12:58:54', '2017-08-28 12:58:54'),
(112, 17, NULL, NULL),
(113, 18, NULL, NULL),
(114, 3, '2017-08-29 12:59:58', '2017-08-29 12:59:58'),
(114, 15, '2017-08-29 12:59:58', '2017-08-29 12:59:58'),
(115, 9, NULL, NULL),
(116, 17, NULL, NULL),
(117, 18, NULL, NULL),
(118, 10, NULL, NULL),
(118, 12, NULL, NULL),
(119, 13, NULL, NULL),
(121, 3, '2017-08-30 18:22:50', '2017-08-30 18:22:50'),
(121, 15, '2017-08-30 18:22:51', '2017-08-30 18:22:51'),
(122, 3, '2017-08-30 18:23:13', '2017-08-30 18:23:13'),
(122, 15, '2017-08-30 18:23:13', '2017-08-30 18:23:13'),
(123, 3, '2017-09-06 12:47:48', '2017-09-06 12:47:48'),
(123, 15, '2017-09-06 12:47:48', '2017-09-06 12:47:48'),
(124, 10, NULL, NULL),
(124, 12, NULL, NULL),
(126, 3, '2017-09-06 17:59:15', '2017-09-06 17:59:15'),
(126, 15, '2017-09-06 17:59:15', '2017-09-06 17:59:15'),
(127, 3, '2017-09-07 12:14:59', '2017-09-07 12:14:59'),
(127, 15, '2017-09-07 12:15:00', '2017-09-07 12:15:00'),
(131, 3, '2017-09-07 17:42:29', '2017-09-07 17:42:29'),
(131, 15, '2017-09-07 17:42:29', '2017-09-07 17:42:29'),
(134, 12, NULL, NULL),
(135, 3, '2017-09-13 12:03:33', '2017-09-13 12:03:33'),
(135, 15, '2017-09-13 12:03:33', '2017-09-13 12:03:33'),
(136, 3, '2017-09-13 12:34:47', '2017-09-13 12:34:47'),
(136, 15, '2017-09-13 12:34:47', '2017-09-13 12:34:47'),
(138, 12, NULL, NULL),
(139, 3, '2017-09-13 15:36:33', '2017-09-13 15:36:33'),
(139, 15, '2017-09-13 15:36:33', '2017-09-13 15:36:33'),
(140, 10, NULL, NULL),
(140, 12, NULL, NULL),
(141, 12, NULL, NULL),
(142, 3, '2017-09-26 15:39:25', '2017-09-26 15:39:25'),
(142, 15, '2017-09-26 15:39:25', '2017-09-26 15:39:25'),
(143, 13, NULL, NULL),
(144, 13, NULL, NULL),
(145, 3, '2017-10-05 18:31:14', '2017-10-05 18:31:14'),
(145, 15, '2017-10-05 18:31:14', '2017-10-05 18:31:14'),
(146, 3, '2017-10-08 13:38:44', '2017-10-08 13:38:44'),
(146, 15, '2017-10-08 13:38:44', '2017-10-08 13:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name_en`, `name_ar`) VALUES
(1, 'first service', 'الخدمة الأولى'),
(2, 'oil change', 'تغيير زيت'),
(3, 'Flat Tire', 'عجل مثقوب');

-- --------------------------------------------------------

--
-- Table structure for table `service_boy`
--

CREATE TABLE IF NOT EXISTS `service_boy` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL,
  `service_company_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_boy`
--

INSERT INTO `service_boy` (`id`, `users_id`, `manager_id`, `service_company_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 34, 13, 2, 0, '2017-06-02 15:30:42', '2017-06-02 15:30:42'),
(2, 13, 13, 1, 0, '2017-06-02 15:51:25', '2017-06-02 15:51:25'),
(3, 66, 13, 1, 0, '2017-06-12 20:49:03', '2017-06-12 20:49:03'),
(4, 117, 117, 3, 0, '2017-08-29 09:24:23', '2017-08-29 09:24:23'),
(5, 127, 127, 2, 0, '2017-09-12 06:08:41', '2017-09-12 06:08:41'),
(6, 15, 15, 1, 0, '2017-09-12 09:23:52', '2017-09-12 09:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `service_company`
--

CREATE TABLE IF NOT EXISTS `service_company` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `manager_id` int(11) NOT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_company`
--

INSERT INTO `service_company` (`id`, `name`, `manager_id`, `created_at`, `updated_at`) VALUES
(1, 'service company 1', 0, '2017-06-02 15:24:39', '2017-06-02 15:24:39'),
(2, 'service company 2', 112, '2017-06-02 15:24:57', '2017-08-28 08:33:56'),
(3, 'Service Company test', 116, '2017-08-29 09:23:22', '2017-10-04 08:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `service_company_order`
--

CREATE TABLE IF NOT EXISTS `service_company_order` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `service_company_id` int(11) NOT NULL,
  `service_boy_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_company_order`
--

INSERT INTO `service_company_order` (`id`, `users_id`, `service_company_id`, `service_boy_id`, `description`, `status`, `notification`, `created_at`, `updated_at`) VALUES
(1, 13, 2, 1, 'jojo', 0, 1, '2017-06-02 15:40:06', '2017-09-12 09:51:48'),
(3, 66, 1, 82, 'jkb', 0, 1, '2017-06-02 15:40:54', '2017-06-12 19:55:14'),
(4, 82, 1, 1, 'hhjhk', 0, 1, '2017-06-02 15:41:19', '2017-06-04 13:07:23'),
(5, 20, 1, 8, 'fgjfgjfg', 4, 1, '2017-06-08 10:33:19', '2017-06-11 14:13:58'),
(6, 13, 1, 1, '', 0, 1, '2017-06-12 13:07:36', '2017-06-12 13:07:44'),
(7, 20, 2, 7, 'sssssssssssss', 0, 1, '2017-06-12 13:35:41', '2017-06-12 19:54:32'),
(8, 20, 2, 82, 'sssssssssssss', 0, 1, '2017-06-12 13:37:29', '2017-06-12 13:37:38'),
(9, 0, 1, 1, '', 0, 1, '2017-06-12 17:33:07', '2017-06-12 19:49:41'),
(10, 82, 2, 1, 'fsf', 0, 1, '2017-06-12 19:50:18', '2017-06-12 19:54:11'),
(11, 0, 1, 0, 'ddddddddd', 0, 1, '2017-06-12 20:09:23', '2017-06-12 20:12:59'),
(12, 0, 3, 0, '', 0, 1, '2017-10-02 12:05:40', '2017-10-04 08:33:02'),
(13, 115, 3, 0, '', 0, 1, '2017-10-04 08:37:51', '2017-10-04 08:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `service_company_order_service`
--

CREATE TABLE IF NOT EXISTS `service_company_order_service` (
  `id` int(11) NOT NULL,
  `service_company_order_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_company_order_service`
--

INSERT INTO `service_company_order_service` (`id`, `service_company_order_id`, `service_id`) VALUES
(1, 8, 1),
(2, 8, 2),
(3, 9, 1),
(4, 9, 2),
(5, 10, 1),
(6, 10, 2),
(10, 11, 1),
(11, 13, 1),
(12, 13, 2);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `uid` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `oauth1_token_identifier` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth1_token_secret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth2_access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth2_refresh_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth2_expires` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `user_id`, `uid`, `provider`, `oauth1_token_identifier`, `oauth1_token_secret`, `oauth2_access_token`, `oauth2_refresh_token`, `oauth2_expires`, `created_at`, `updated_at`) VALUES
(1, 82, '104567598488922195517', 'google', NULL, NULL, 'ya29.GlthBOkiU0n6vxju6Yh7tYq63rR6C6ecCoBBiLvnG47e3N4Og0WT9csE2BSXjoxAQ27f8m3XKSOxWsHPv4QxRLXHEsW0yFDAWK-P_2iMf92sqUZmHyCsrS-3_wIB', NULL, '2017-06-06 20:20:19', '2017-06-06 19:03:42', '2017-06-06 19:20:21'),
(2, 82, 'zTEUdqQbCS', 'linkedin', NULL, NULL, 'AQWwCGOLQnAychcJ4MReXD9i0sE8xL_URVMRs9Ys9YoriCmPRfjAR5FI74cqvMZ-yK2z7d65W_rTatI2q3XlOGro7QAdEW_ORwDBwH52ltuztt8Y4XGo7aNgs4gj8hxm9MSkHKWOt1Q2YsSBd8wSC9e1JMOQUv1AuOj2Q0B6dHbQFQKCOLQ', NULL, '2017-08-07 07:57:37', '2017-06-06 19:16:24', '2017-06-08 07:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2017-05-21 10:55:01', '2017-05-21 10:55:01'),
(2, NULL, 'ip', '192.168.100.11', '2017-05-21 10:55:01', '2017-05-21 10:55:01'),
(3, NULL, 'global', NULL, '2017-05-23 05:48:01', '2017-05-23 05:48:01'),
(4, NULL, 'ip', '192.168.100.11', '2017-05-23 05:48:01', '2017-05-23 05:48:01'),
(5, 92, 'user', NULL, '2017-05-23 05:48:01', '2017-05-23 05:48:01'),
(6, NULL, 'global', NULL, '2017-06-06 20:33:33', '2017-06-06 20:33:33'),
(7, NULL, 'ip', '::1', '2017-06-06 20:33:33', '2017-06-06 20:33:33'),
(8, 82, 'user', NULL, '2017-06-06 20:33:33', '2017-06-06 20:33:33'),
(9, NULL, 'global', NULL, '2017-06-06 20:44:27', '2017-06-06 20:44:27'),
(10, NULL, 'ip', '::1', '2017-06-06 20:44:27', '2017-06-06 20:44:27'),
(11, 82, 'user', NULL, '2017-06-06 20:44:27', '2017-06-06 20:44:27'),
(12, NULL, 'global', NULL, '2017-06-06 20:44:35', '2017-06-06 20:44:35'),
(13, NULL, 'ip', '::1', '2017-06-06 20:44:35', '2017-06-06 20:44:35'),
(14, 82, 'user', NULL, '2017-06-06 20:44:35', '2017-06-06 20:44:35'),
(15, NULL, 'global', NULL, '2017-06-06 20:44:44', '2017-06-06 20:44:44'),
(16, NULL, 'ip', '::1', '2017-06-06 20:44:44', '2017-06-06 20:44:44'),
(17, 82, 'user', NULL, '2017-06-06 20:44:44', '2017-06-06 20:44:44'),
(18, NULL, 'global', NULL, '2017-06-06 20:45:59', '2017-06-06 20:45:59'),
(19, NULL, 'ip', '::1', '2017-06-06 20:45:59', '2017-06-06 20:45:59'),
(20, 82, 'user', NULL, '2017-06-06 20:45:59', '2017-06-06 20:45:59'),
(21, NULL, 'global', NULL, '2017-06-07 14:42:53', '2017-06-07 14:42:53'),
(22, NULL, 'ip', '::1', '2017-06-07 14:42:53', '2017-06-07 14:42:53'),
(23, NULL, 'global', NULL, '2017-06-15 21:47:10', '2017-06-15 21:47:10'),
(24, NULL, 'ip', '::1', '2017-06-15 21:47:10', '2017-06-15 21:47:10'),
(25, NULL, 'global', NULL, '2017-06-15 21:48:48', '2017-06-15 21:48:48'),
(26, NULL, 'ip', '::1', '2017-06-15 21:48:48', '2017-06-15 21:48:48'),
(27, NULL, 'global', NULL, '2017-06-15 21:48:54', '2017-06-15 21:48:54'),
(28, NULL, 'ip', '::1', '2017-06-15 21:48:54', '2017-06-15 21:48:54'),
(29, NULL, 'global', NULL, '2017-08-21 15:46:47', '2017-08-21 15:46:47'),
(30, NULL, 'ip', '83.96.113.132', '2017-08-21 15:46:47', '2017-08-21 15:46:47'),
(31, 82, 'user', NULL, '2017-08-21 15:46:47', '2017-08-21 15:46:47'),
(32, NULL, 'global', NULL, '2017-08-23 16:54:03', '2017-08-23 16:54:03'),
(33, NULL, 'ip', '83.96.113.132', '2017-08-23 16:54:03', '2017-08-23 16:54:03'),
(34, 82, 'user', NULL, '2017-08-23 16:54:03', '2017-08-23 16:54:03'),
(35, NULL, 'global', NULL, '2017-08-23 17:49:16', '2017-08-23 17:49:16'),
(36, NULL, 'ip', '83.96.113.132', '2017-08-23 17:49:16', '2017-08-23 17:49:16'),
(37, 82, 'user', NULL, '2017-08-23 17:49:16', '2017-08-23 17:49:16'),
(38, NULL, 'global', NULL, '2017-08-27 17:27:15', '2017-08-27 17:27:15'),
(39, NULL, 'ip', '94.129.250.248', '2017-08-27 17:27:15', '2017-08-27 17:27:15'),
(40, 82, 'user', NULL, '2017-08-27 17:27:15', '2017-08-27 17:27:15'),
(41, NULL, 'global', NULL, '2017-08-27 18:28:33', '2017-08-27 18:28:33'),
(42, NULL, 'ip', '83.96.113.132', '2017-08-27 18:28:33', '2017-08-27 18:28:33'),
(43, 108, 'user', NULL, '2017-08-27 18:28:33', '2017-08-27 18:28:33'),
(44, NULL, 'global', NULL, '2017-08-27 18:28:41', '2017-08-27 18:28:41'),
(45, NULL, 'ip', '83.96.113.132', '2017-08-27 18:28:41', '2017-08-27 18:28:41'),
(46, 108, 'user', NULL, '2017-08-27 18:28:41', '2017-08-27 18:28:41'),
(47, NULL, 'global', NULL, '2017-08-27 18:29:30', '2017-08-27 18:29:30'),
(48, NULL, 'ip', '83.96.113.132', '2017-08-27 18:29:30', '2017-08-27 18:29:30'),
(49, 106, 'user', NULL, '2017-08-27 18:29:30', '2017-08-27 18:29:30'),
(50, NULL, 'global', NULL, '2017-08-28 13:02:30', '2017-08-28 13:02:30'),
(51, NULL, 'ip', '83.96.113.132', '2017-08-28 13:02:30', '2017-08-28 13:02:30'),
(52, 82, 'user', NULL, '2017-08-28 13:02:30', '2017-08-28 13:02:30'),
(53, NULL, 'global', NULL, '2017-08-29 13:10:06', '2017-08-29 13:10:06'),
(54, NULL, 'ip', '83.96.113.132', '2017-08-29 13:10:06', '2017-08-29 13:10:06'),
(55, 82, 'user', NULL, '2017-08-29 13:10:06', '2017-08-29 13:10:06'),
(56, NULL, 'global', NULL, '2017-08-29 13:10:16', '2017-08-29 13:10:16'),
(57, NULL, 'ip', '83.96.113.132', '2017-08-29 13:10:16', '2017-08-29 13:10:16'),
(58, 82, 'user', NULL, '2017-08-29 13:10:16', '2017-08-29 13:10:16'),
(59, NULL, 'global', NULL, '2017-08-29 13:10:53', '2017-08-29 13:10:53'),
(60, NULL, 'ip', '83.96.113.132', '2017-08-29 13:10:53', '2017-08-29 13:10:53'),
(61, 82, 'user', NULL, '2017-08-29 13:10:53', '2017-08-29 13:10:53'),
(62, NULL, 'global', NULL, '2017-08-29 15:32:35', '2017-08-29 15:32:35'),
(63, NULL, 'ip', '83.96.113.132', '2017-08-29 15:32:35', '2017-08-29 15:32:35'),
(64, 82, 'user', NULL, '2017-08-29 15:32:35', '2017-08-29 15:32:35'),
(65, NULL, 'global', NULL, '2017-08-30 14:01:56', '2017-08-30 14:01:56'),
(66, NULL, 'ip', '83.96.113.132', '2017-08-30 14:01:56', '2017-08-30 14:01:56'),
(67, 82, 'user', NULL, '2017-08-30 14:01:56', '2017-08-30 14:01:56'),
(68, NULL, 'global', NULL, '2017-08-30 17:35:48', '2017-08-30 17:35:48'),
(69, NULL, 'ip', '83.96.113.132', '2017-08-30 17:35:48', '2017-08-30 17:35:48'),
(70, NULL, 'global', NULL, '2017-09-05 11:23:39', '2017-09-05 11:23:39'),
(71, NULL, 'ip', '83.96.113.132', '2017-09-05 11:23:39', '2017-09-05 11:23:39'),
(72, 82, 'user', NULL, '2017-09-05 11:23:39', '2017-09-05 11:23:39'),
(73, NULL, 'global', NULL, '2017-09-05 11:23:54', '2017-09-05 11:23:54'),
(74, NULL, 'ip', '83.96.113.132', '2017-09-05 11:23:54', '2017-09-05 11:23:54'),
(75, 82, 'user', NULL, '2017-09-05 11:23:54', '2017-09-05 11:23:54'),
(76, NULL, 'global', NULL, '2017-09-05 11:27:36', '2017-09-05 11:27:36'),
(77, NULL, 'ip', '83.96.113.132', '2017-09-05 11:27:36', '2017-09-05 11:27:36'),
(78, NULL, 'global', NULL, '2017-09-05 11:27:47', '2017-09-05 11:27:47'),
(79, NULL, 'ip', '83.96.113.132', '2017-09-05 11:27:47', '2017-09-05 11:27:47'),
(80, NULL, 'global', NULL, '2017-09-06 17:56:14', '2017-09-06 17:56:14'),
(81, NULL, 'ip', '83.96.113.132', '2017-09-06 17:56:14', '2017-09-06 17:56:14'),
(82, 125, 'user', NULL, '2017-09-06 17:56:14', '2017-09-06 17:56:14'),
(83, NULL, 'global', NULL, '2017-09-06 17:56:30', '2017-09-06 17:56:30'),
(84, NULL, 'ip', '83.96.113.132', '2017-09-06 17:56:30', '2017-09-06 17:56:30'),
(85, 125, 'user', NULL, '2017-09-06 17:56:30', '2017-09-06 17:56:30'),
(86, NULL, 'global', NULL, '2017-09-06 17:58:36', '2017-09-06 17:58:36'),
(87, NULL, 'ip', '83.96.113.132', '2017-09-06 17:58:36', '2017-09-06 17:58:36'),
(88, 125, 'user', NULL, '2017-09-06 17:58:36', '2017-09-06 17:58:36'),
(89, NULL, 'global', NULL, '2017-09-07 14:56:03', '2017-09-07 14:56:03'),
(90, NULL, 'ip', '185.96.70.232', '2017-09-07 14:56:03', '2017-09-07 14:56:03'),
(91, 129, 'user', NULL, '2017-09-07 14:56:03', '2017-09-07 14:56:03'),
(92, NULL, 'global', NULL, '2017-09-10 13:28:45', '2017-09-10 13:28:45'),
(93, NULL, 'ip', '185.96.70.232', '2017-09-10 13:28:45', '2017-09-10 13:28:45'),
(94, 132, 'user', NULL, '2017-09-10 13:28:45', '2017-09-10 13:28:45'),
(95, NULL, 'global', NULL, '2017-09-10 18:33:57', '2017-09-10 18:33:57'),
(96, NULL, 'ip', '83.96.113.132', '2017-09-10 18:33:57', '2017-09-10 18:33:57'),
(97, 82, 'user', NULL, '2017-09-10 18:33:57', '2017-09-10 18:33:57'),
(98, NULL, 'global', NULL, '2017-09-10 18:37:43', '2017-09-10 18:37:43'),
(99, NULL, 'ip', '83.96.113.132', '2017-09-10 18:37:43', '2017-09-10 18:37:43'),
(100, 82, 'user', NULL, '2017-09-10 18:37:43', '2017-09-10 18:37:43'),
(101, NULL, 'global', NULL, '2017-09-10 18:37:55', '2017-09-10 18:37:55'),
(102, NULL, 'ip', '83.96.113.132', '2017-09-10 18:37:55', '2017-09-10 18:37:55'),
(103, 82, 'user', NULL, '2017-09-10 18:37:55', '2017-09-10 18:37:55'),
(104, NULL, 'global', NULL, '2017-09-11 14:44:46', '2017-09-11 14:44:46'),
(105, NULL, 'ip', '185.96.70.232', '2017-09-11 14:44:46', '2017-09-11 14:44:46'),
(106, NULL, 'global', NULL, '2017-09-11 14:44:53', '2017-09-11 14:44:53'),
(107, NULL, 'ip', '185.96.70.232', '2017-09-11 14:44:53', '2017-09-11 14:44:53'),
(108, NULL, 'global', NULL, '2017-09-11 14:45:02', '2017-09-11 14:45:02'),
(109, NULL, 'ip', '185.96.70.232', '2017-09-11 14:45:02', '2017-09-11 14:45:02'),
(110, NULL, 'global', NULL, '2017-09-12 11:57:39', '2017-09-12 11:57:39'),
(111, NULL, 'ip', '185.96.70.232', '2017-09-12 11:57:39', '2017-09-12 11:57:39'),
(112, NULL, 'global', NULL, '2017-09-13 01:25:17', '2017-09-13 01:25:17'),
(113, NULL, 'ip', '94.29.157.51', '2017-09-13 01:25:17', '2017-09-13 01:25:17'),
(114, NULL, 'global', NULL, '2017-09-13 13:14:45', '2017-09-13 13:14:45'),
(115, NULL, 'ip', '185.96.70.232', '2017-09-13 13:14:45', '2017-09-13 13:14:45'),
(116, 138, 'user', NULL, '2017-09-13 13:14:45', '2017-09-13 13:14:45'),
(117, NULL, 'global', NULL, '2017-09-13 13:25:09', '2017-09-13 13:25:09'),
(118, NULL, 'ip', '185.96.70.232', '2017-09-13 13:25:09', '2017-09-13 13:25:09'),
(119, 138, 'user', NULL, '2017-09-13 13:25:09', '2017-09-13 13:25:09'),
(120, NULL, 'global', NULL, '2017-09-13 17:32:50', '2017-09-13 17:32:50'),
(121, NULL, 'ip', '185.96.70.232', '2017-09-13 17:32:50', '2017-09-13 17:32:50'),
(122, NULL, 'global', NULL, '2017-09-13 17:33:12', '2017-09-13 17:33:12'),
(123, NULL, 'ip', '185.96.70.232', '2017-09-13 17:33:12', '2017-09-13 17:33:12'),
(124, NULL, 'global', NULL, '2017-09-18 19:19:57', '2017-09-18 19:19:57'),
(125, NULL, 'ip', '83.96.113.132', '2017-09-18 19:19:57', '2017-09-18 19:19:57'),
(126, 82, 'user', NULL, '2017-09-18 19:19:57', '2017-09-18 19:19:57'),
(127, NULL, 'global', NULL, '2017-09-19 16:10:09', '2017-09-19 16:10:09'),
(128, NULL, 'ip', '83.96.113.132', '2017-09-19 16:10:09', '2017-09-19 16:10:09'),
(129, 82, 'user', NULL, '2017-09-19 16:10:09', '2017-09-19 16:10:09'),
(130, NULL, 'global', NULL, '2017-09-19 16:36:48', '2017-09-19 16:36:48'),
(131, NULL, 'ip', '83.96.113.132', '2017-09-19 16:36:48', '2017-09-19 16:36:48'),
(132, 106, 'user', NULL, '2017-09-19 16:36:48', '2017-09-19 16:36:48'),
(133, NULL, 'global', NULL, '2017-09-19 16:36:59', '2017-09-19 16:36:59'),
(134, NULL, 'ip', '83.96.113.132', '2017-09-19 16:36:59', '2017-09-19 16:36:59'),
(135, 82, 'user', NULL, '2017-09-19 16:36:59', '2017-09-19 16:36:59'),
(136, NULL, 'global', NULL, '2017-09-20 14:11:55', '2017-09-20 14:11:55'),
(137, NULL, 'ip', '196.153.65.229', '2017-09-20 14:11:55', '2017-09-20 14:11:55'),
(138, NULL, 'global', NULL, '2017-09-26 12:22:53', '2017-09-26 12:22:53'),
(139, NULL, 'ip', '83.96.113.132', '2017-09-26 12:22:53', '2017-09-26 12:22:53'),
(140, 82, 'user', NULL, '2017-09-26 12:22:53', '2017-09-26 12:22:53'),
(141, NULL, 'global', NULL, '2017-09-26 12:22:58', '2017-09-26 12:22:58'),
(142, NULL, 'ip', '83.96.113.132', '2017-09-26 12:22:58', '2017-09-26 12:22:58'),
(143, 82, 'user', NULL, '2017-09-26 12:22:58', '2017-09-26 12:22:58'),
(144, NULL, 'global', NULL, '2017-09-26 15:54:43', '2017-09-26 15:54:43'),
(145, NULL, 'ip', '94.129.243.59', '2017-09-26 15:54:43', '2017-09-26 15:54:43'),
(146, 82, 'user', NULL, '2017-09-26 15:54:43', '2017-09-26 15:54:43'),
(147, NULL, 'global', NULL, '2017-10-01 12:45:36', '2017-10-01 12:45:36'),
(148, NULL, 'ip', '83.96.113.132', '2017-10-01 12:45:36', '2017-10-01 12:45:36'),
(149, 82, 'user', NULL, '2017-10-01 12:45:36', '2017-10-01 12:45:36'),
(150, NULL, 'global', NULL, '2017-10-01 13:50:18', '2017-10-01 13:50:18'),
(151, NULL, 'ip', '83.96.113.132', '2017-10-01 13:50:18', '2017-10-01 13:50:18'),
(152, 82, 'user', NULL, '2017-10-01 13:50:18', '2017-10-01 13:50:18'),
(153, NULL, 'global', NULL, '2017-10-01 14:21:16', '2017-10-01 14:21:16'),
(154, NULL, 'ip', '83.96.113.132', '2017-10-01 14:21:16', '2017-10-01 14:21:16'),
(155, 82, 'user', NULL, '2017-10-01 14:21:16', '2017-10-01 14:21:16'),
(156, NULL, 'global', NULL, '2017-10-01 18:50:14', '2017-10-01 18:50:14'),
(157, NULL, 'ip', '83.96.113.132', '2017-10-01 18:50:14', '2017-10-01 18:50:14'),
(158, 82, 'user', NULL, '2017-10-01 18:50:14', '2017-10-01 18:50:14'),
(159, NULL, 'global', NULL, '2017-10-01 19:26:07', '2017-10-01 19:26:07'),
(160, NULL, 'ip', '83.96.113.132', '2017-10-01 19:26:07', '2017-10-01 19:26:07'),
(161, 82, 'user', NULL, '2017-10-01 19:26:07', '2017-10-01 19:26:07'),
(162, NULL, 'global', NULL, '2017-10-03 16:32:45', '2017-10-03 16:32:45'),
(163, NULL, 'ip', '83.96.113.132', '2017-10-03 16:32:45', '2017-10-03 16:32:45'),
(164, 82, 'user', NULL, '2017-10-03 16:32:45', '2017-10-03 16:32:45'),
(165, NULL, 'global', NULL, '2017-10-03 16:33:11', '2017-10-03 16:33:11'),
(166, NULL, 'ip', '83.96.113.132', '2017-10-03 16:33:11', '2017-10-03 16:33:11'),
(167, NULL, 'global', NULL, '2017-10-03 19:19:26', '2017-10-03 19:19:26'),
(168, NULL, 'ip', '83.96.113.132', '2017-10-03 19:19:26', '2017-10-03 19:19:26'),
(169, 82, 'user', NULL, '2017-10-03 19:19:26', '2017-10-03 19:19:26'),
(170, NULL, 'global', NULL, '2017-10-04 14:27:39', '2017-10-04 14:27:39'),
(171, NULL, 'ip', '83.96.113.132', '2017-10-04 14:27:39', '2017-10-04 14:27:39'),
(172, 116, 'user', NULL, '2017-10-04 14:27:39', '2017-10-04 14:27:39'),
(173, NULL, 'global', NULL, '2017-10-04 14:37:11', '2017-10-04 14:37:11'),
(174, NULL, 'ip', '83.96.113.132', '2017-10-04 14:37:11', '2017-10-04 14:37:11'),
(175, 116, 'user', NULL, '2017-10-04 14:37:11', '2017-10-04 14:37:11'),
(176, NULL, 'global', NULL, '2017-10-04 18:42:52', '2017-10-04 18:42:52'),
(177, NULL, 'ip', '185.96.70.232', '2017-10-04 18:42:52', '2017-10-04 18:42:52'),
(178, NULL, 'global', NULL, '2017-10-04 18:42:58', '2017-10-04 18:42:58'),
(179, NULL, 'ip', '185.96.70.232', '2017-10-04 18:42:58', '2017-10-04 18:42:58'),
(180, NULL, 'global', NULL, '2017-10-05 12:06:58', '2017-10-05 12:06:58'),
(181, NULL, 'ip', '185.96.70.232', '2017-10-05 12:06:58', '2017-10-05 12:06:58'),
(182, 144, 'user', NULL, '2017-10-05 12:06:58', '2017-10-05 12:06:58'),
(183, NULL, 'global', NULL, '2017-10-08 16:45:56', '2017-10-08 16:45:56'),
(184, NULL, 'ip', '185.96.70.232', '2017-10-08 16:45:56', '2017-10-08 16:45:56'),
(185, 82, 'user', NULL, '2017-10-08 16:45:56', '2017-10-08 16:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` blob,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `session_id` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `lat` double NOT NULL,
  `long` double NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `civil_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_company` text COLLATE utf8_unicode_ci NOT NULL,
  `driving_license_no` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `android_device_id` text COLLATE utf8_unicode_ci NOT NULL,
  `ios_device_id` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `avatar`, `mobile`, `phone`, `gender`, `occupation`, `type`, `session_id`, `lat`, `long`, `username`, `civil_id`, `mobile_company`, `driving_license_no`, `android_device_id`, `ios_device_id`, `created_at`, `updated_at`) VALUES
(15, 'dispatcher@sahalat.com', '$2y$10$.YBEnmlyQ30lycw..YHOcuyZsFvvrFxEN7NiUW/Vm49LboErg1znC', NULL, '2017-09-18 20:30:19', NULL, ': admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:04:34', '2017-09-18 20:30:19'),
(16, 'restaurant@sahalat.com', '$2y$10$qVF5MuFwYsMZ4.73HaFk5.uCpKYkddFqIRRMg8dd7qLiNvLpOBvLe', NULL, '2017-06-08 06:26:31', 'restaurant', 'kfc', NULL, '', '', 0, '0', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:05:12', '2017-06-08 06:26:31'),
(17, 'admin@admin7.com', '$2y$10$6YDAKpvtDaQy.QcH1wdV3uOZueFCAAFqn8JeiZowDVL8hqwHW/eGK', NULL, NULL, ': admin firstName', ': admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:11:23', '2016-05-01 13:11:23'),
(18, 'admintest@admin.com', '$2y$10$F8E6o6rlUgxh9xd49aDI..DnnsGKZ..10uFxqSYJ109ck8H0.UyWS', NULL, '2016-05-01 13:22:35', 'adminTest', 'Test', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:12:22', '2016-05-01 13:22:35'),
(19, 'admin@admi.com', '$2y$10$bCnkSmJrDVQtYkCU2Rh30.21yqyw/M9WQ2J2CkIoSe/Yls6zddmSK', NULL, '2017-06-07 08:42:50', 'A first', 'b Second', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:14:07', '2017-06-07 08:42:50'),
(20, 'admin@admin9.com', '$2y$10$33PXn.qz2Ktm48z7xgziK.8scy0wu5IMZli0/QODg1k.ntaU0PzCi', NULL, '2016-05-01 13:18:01', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:17:20', '2016-05-01 13:18:01'),
(21, 'admin@admina.com', '$2y$10$Y3Ht/J9B5VozrTqmerM8veTjIiF0GEcegPHuRyB5c7l3RGnmyi1KG', NULL, '2016-05-01 13:23:05', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:22:34', '2016-05-01 13:23:05'),
(22, 'admin@adminb.com', '$2y$10$WNjXQg8y8abXr4lZItJxCueIR3qHJquO3MVExTM98zz9QTqXOsFKy', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:28:23', '2016-05-01 13:28:23'),
(23, 'admin@adminc.com', '$2y$10$KD4oByWVRd4VkcJhTHhBGOeBmDaRAE/DiyqF/XydG/BvOtQ.NlmM6', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:28:54', '2016-05-01 13:28:54'),
(24, 'admin@admind.com', '$2y$10$fCblwhGnZfN54Vukn4hPS.g5LpCzzg8hA.c8XNHokf7id2bqTyGlu', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:29:13', '2016-05-01 13:29:13'),
(25, 'ddd@ddd.ddd', '$2y$10$orGG6KvMrH4TO1agzzSmvupHecZgciUHbO2r6.gzrQeLZQaBEpdGK', NULL, '2016-05-01 13:33:53', 'asdf', 'sf', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:33:39', '2016-05-01 13:33:53'),
(26, 'admin@admine.com', '$2y$10$M.KIZXmo.0Ox/BwwkXnjteR8ck0uWIf0dewsRj01njcvnThiWx9s2', NULL, '2016-05-01 13:36:36', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:35:54', '2016-05-01 13:36:36'),
(27, 'admin@adminv.com', '$2y$10$/tp9OFQq2vbsf.63/JFY5eKKDSKkmlfIiFks7TNPaTD6eL52mvs.y', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:46:24', '2016-05-01 13:46:24'),
(28, 'admin@adminz.com', '$2y$10$z6RFdmsA.kdgpMujELpBouYMLl2/XiciDrdX1O4DkzylfMT/Zybje', NULL, '2016-05-01 13:47:29', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:46:55', '2016-05-01 13:47:29'),
(29, 'admin@adminx.com', '$2y$10$ozdl9T7dMl.W/G64tU1cNuFJk30xj7VfZtri26QQl/s1q.W16Gsy2', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:48:29', '2016-05-01 13:48:29'),
(30, 'admin@admink.com', '$2y$10$fPBKMa4PpH7cyb9Keby.EOU8B8Oe0hmXpwmGQLFR5EOvo1MUda57C', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:49:41', '2016-05-01 13:49:41'),
(31, 'admin@admint.com', '$2y$10$MUZSx0j9aOmMMVplFosSE.8lVQjIdGL2m6WEt.zuuy8HFq844TV.K', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:49:57', '2016-05-01 13:49:57'),
(33, 'admin@admintt.com', '$2y$10$TgyW12bN1zRrTLCVhOEN5.1pVKdCuMP2INgwGZ0wAF2uuiAGf4/DW', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:50:38', '2016-05-01 13:50:38'),
(34, 'admin@admintx.com', '$2y$10$SqwIYTitU.eUORVnneZnAO/uLXnveMMUvSKQvXH2PmLuoUNkWEu1S', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:50:47', '2016-05-01 13:50:47'),
(35, 'admin@adminthx.com', '$2y$10$KbTUhocfRRpr.TkQaBPEwu/NX0j/VLBltUyW.2QrhTCoCQ/SVkCjm', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:53:10', '2016-05-01 13:53:10'),
(36, 'admin@admjinthx.com', '$2y$10$EpscExd4AFgDqFo44FitLu7Qen.ViLsopDvs93CFqC./ccAAk4rTS', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:53:16', '2016-05-01 13:53:16'),
(37, 'admin@ajdmjinthx.com', '$2y$10$Hi.7Wj0bgELIKRrtUR8afeVRDvpXsKOJHSIYu3oir3YS9TE6SQwGW', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 13:53:24', '2016-05-01 13:53:24'),
(38, 'admin@ajdmjintfhx.com', '$2y$10$tpU.G8mawQvrLAEvPsEm/u3uXKfpsu0h3tVXvsv2UWLT9Vri7wC1.', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 14:02:28', '2016-05-01 14:02:28'),
(39, 'admin1@admin.com', '$2y$10$LWCNmqpRdS6PQA6Kq3VuOu7WIqKsSmQk6rgIGz.ICeTb8qvElTbmy', NULL, '2016-05-01 14:08:17', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 14:07:24', '2016-05-01 14:08:17'),
(40, 'admin3@admin.com', '$2y$10$Jrnm/CmeA9oT6MGbEvRk4OIwjsZ8XnIo2/aBYyJaVLamo.3.RY/42', NULL, '2016-05-01 14:11:17', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 14:10:48', '2016-05-01 14:11:17'),
(41, 'admin4@admin.com', '$2y$10$2HeUvzgoooi9tvSeEn3aRegPVXC4EnX4KYf0Ic8IDe/8WXSCjVZGu', NULL, NULL, ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 14:14:07', '2016-05-01 14:14:07'),
(43, 'admin5@admin.com', '$2y$10$dTp2sKdyofdp4N.eS3scx.HRnSt6.cCkIdWysOAuDhKp5kI6SF2Ae', NULL, '2016-05-01 14:15:54', ' admin firstName', ' admin last_name', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 14:14:43', '2016-05-01 14:15:54'),
(44, 'admin6@admin.com', '$2y$10$zdBqpmXqpujNPalq6.W5meP0zIRuf/XYT1BkmuICJQHho1UO4BGPW', NULL, NULL, 'first', 'last', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-01 14:17:26', '2016-12-26 10:00:02'),
(64, 'abdalfattah.hammad@yahoo.com', '$2y$10$R6gGLALtsBIs7BWSkVzche5XURZ9k671XFbQ22g1Mrsmp.NW1YyGi', '', '2016-05-29 06:47:05', 'abdalfattah', 'hammad', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-24 08:38:45', '2016-05-29 06:47:05'),
(66, 'taylorsuccessor1@gmail.com', '$2y$10$FGuj819KqAmJNMIxi5qWne/qyvT8SpUhlrgGDJXkKjkYf597RgMby', '{"user.denyLiveAccount":true}', NULL, 'taylor', 'successor', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-25 13:05:11', '2016-05-25 13:05:16'),
(67, 'dfsa@ragf.com', '$2y$10$gMS96cK40k52LuVk7BDj2.lCjmrR.htpHH2jvZSw8Vsj/SEieeIoi', '{"user.denyLiveAccount":true}', NULL, 'weq', 'ewqrew', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-29 11:28:02', '2016-05-29 11:28:06'),
(68, 'sdaflh@dfs.com', '$2y$10$cE9o/HVrD0xKwQ435xf.o.FruuEBvkhtK9zzzO4wY.zAkiRRjeARG', '{"user.denyLiveAccount":true}', NULL, 'dfs', 'asfd', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-05-29 11:29:44', '2016-05-29 11:29:49'),
(70, 'taylorsuccessor2@gmail.com', '$2y$10$WOOk/daK6a37/0Z0vQStX.HmvuSJRF7jDQm3LBRPuLzKEECApIwTi', '{"user.denyLiveAccount":true}', NULL, 'sdf', 'sdfsdf', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-06-12 10:40:00', '2016-06-12 10:40:05'),
(71, 'taylorsuccessor3@gmail.com', '$2y$10$vEuPJ4u3ZzRIDaNwVTg.MObXT64Wjk840AF96e.EPbnY4nGR9H7Wq', '{"user.denyLiveAccount":true}', NULL, 'sdfs', 'dfgdfg', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-06-12 10:42:49', '2016-06-12 10:42:54'),
(72, 'taylorsuccessor4@gmail.com', '$2y$10$vyw6J2fgdFtchWsjQdV2EuhnEDmyfpX9p0Fb0SqH1LqgP6S0Uxxqu', '{"user.denyLiveAccount":true}', '2016-06-12 12:37:46', 'Test', '', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-06-12 12:37:46', '2016-06-12 12:37:52'),
(73, 'taylorsuccessor5@gmail.com', '$2y$10$aQ69hOigVigdEDLPIaJXO.KaXSkjVorqJv4hRNe1n.0cRhpF8hkT6', '{"user.denyLiveAccount":true}', '2016-06-12 12:46:28', 'Test', '', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-06-12 12:46:27', '2016-06-12 12:46:33'),
(74, 'taylorsuccessor6@gmail.com', '$2y$10$DOKqv/T4Hn6p6VCB496W8usXxtsdARnjMe/B6HsLCxcNWFmGvz9aq', '{"user.denyLiveAccount":true}', '2016-06-12 12:53:44', 'Test', '', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2016-06-12 12:53:44', '2016-06-12 12:53:49'),
(77, 'hbhuy', '$2y$10$SgJ2cJm/NXnCU0B.4/Ya3emRjKeBI77eHP7osCXYQfHdWNxvx7/kO', NULL, NULL, 'gfy', 'tyf', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-03-22 03:59:03', '2017-03-22 03:59:03'),
(78, 'vv', '$2y$10$g.bIACByPTjl.3GNq5TEm.XEdealK44IeAR8JSjcX4DZbXIshD7sm', NULL, NULL, 'vvvv', 'vvv', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-03-22 21:43:26', '2017-03-22 21:43:26'),
(79, 'test admin', '$2y$10$W4wwHxfeWRTX0N35zqpiru0tBjHGI6zLBsfaSmhGK3VWKoc3ieQ82', NULL, NULL, 'ffff', 'fffffff', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-03-22 21:54:59', '2017-03-22 21:54:59'),
(80, 'dfgsdfg', '$2y$10$vLQ5jLvll4mU0CA.6PNZM.qZzchaZ7BXdS03coY/SFEI2KlmqbUY.', NULL, NULL, 'dfgsdfg', 'gsdfg', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-03-22 21:55:47', '2017-03-22 21:55:47'),
(81, 'bbbbbbbbbb', '$2y$10$bBU./jpORO7jyZYlsNjeKubcu38Pv9PyDlYmQaHWaiL67Qvb5p7Fi', NULL, NULL, NULL, 'cvbcvb', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-03-22 21:58:12', '2017-03-22 21:58:12'),
(82, 'taylorsuccessor@gmail.com', '$2y$10$Bzx1t/8iNtjE4NRUEb1xruK2HMPXCLs5jO4YVUsgCg4IMuSeJEbeW', NULL, '2017-10-08 18:15:19', 'taylor', 'successor', NULL, '11111111111', '222222222', 1, '1', 0, '', 31.9799521, 35.8746053, '', '', '2', '', '', '', '2017-05-20 12:18:06', '2017-10-08 18:15:19'),
(83, 'asfd@sdf.sdf', 'admin', NULL, NULL, 'asdf', 'ksjdf', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'asfd@sddsf.sdf', 'admin', NULL, NULL, 'asdf', 'ksjdf', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'asfd@sddddsf.sdf', 'admin', NULL, NULL, 'asdf', 'ksjdf', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'asfad@sddddsf.sdf', 'admin', NULL, NULL, 'asdf', 'ksjdf', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'asdf@sdf.sdf', 'admin', NULL, NULL, 'admin', 'adin', NULL, '234324', '234234', 0, '1', 0, '', 0, 0, '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'slkdfj@sdf.sdf', '$2y$10$sh.w238mR9.TxyQoQittrucX71gbfEhkdkCQRtLg2X6bBs8k1jPbK', NULL, '2017-05-23 02:46:15', 'aslkdfj', 'skldfj', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-05-22 09:22:12', '2017-05-23 02:46:15'),
(90, 'rrrrrrrrr@rrrrrrr.rrrr', '$2y$10$/048LG5QGvzXeBziesRQVOPGhJ6RjxAK4Ub461IQI0bRLbxPB2Kpy', NULL, NULL, 'rrrrrr', 'rrrrrr', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-05-23 04:55:32', '2017-05-23 04:55:32'),
(91, 'rrrrrrrrrrrr@rrrrrrr.rrrr', 'admin', NULL, NULL, 'rrrrrr', 'rrrrrr', NULL, '34534345', '3534534', 0, '0', 0, '', 0, 0, '', '', '', '', '', '', '2017-05-23 04:57:03', '2017-05-23 04:57:03'),
(92, 'rrrrrrrrr@rr.rrr', 'admin', NULL, NULL, 'rrrrrr', 'rrrrrr', NULL, '34534345', '3534534', 0, '0', 0, '', 0, 0, '', '', '', '', '', '', '2017-05-23 04:58:10', '2017-05-23 04:58:10'),
(93, 'sdf@ddd.vdf', 'admin', NULL, NULL, 'sdf', 'sdf', NULL, '234', '24234', 0, '1', 0, '', 0, 0, '', '', '', '', '', '', '2017-05-26 13:40:50', '2017-05-26 13:40:50'),
(94, 'gest_32126656_80530962@sahalat.com', '$2y$10$BqQVbnq.f.PTEV/Dw6h1UeQup3bsC6brkuXaSjCXY0B56Wd7uoL6G', NULL, '2017-06-03 15:19:33', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-06-03 15:19:33', '2017-06-03 15:19:33'),
(95, 'gest_16718495_21294603@sahalat.com', '$2y$10$6jHZpO5EgT/fMNx4Jxt5VOd/6FoBw2T3dALpLD89zes6bCl6yaLiG', NULL, '2017-06-03 17:41:35', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-06-03 17:41:35', '2017-06-03 17:41:35'),
(96, 'gest_83994293_69461111@sahalat.com', '$2y$10$q73d0BT8HrGuYv5QslFSuOoteAaRCeOK5jwdxGNi9IuORXKZD.98W', NULL, '2017-06-06 06:39:22', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-06-06 06:39:22', '2017-06-06 06:39:22'),
(97, 'guest_94801956_72110436@sahalat.com', '$2y$10$Tuh13OEUbg/X/juxuxD0BOl.SMIsvgSjsKjqKJObIDB/4evFBGs22', NULL, '2017-06-07 09:39:51', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-06-07 09:39:51', '2017-06-07 09:39:51'),
(98, 'guest_94292822_40028902@sahalat.com', '$2y$10$/uWVVDqC9XxR9XxyM6YtG.ZdUV9EOV/QLMtcxys4T/KYK97.f7J1K', NULL, '2017-06-07 10:04:00', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-06-07 10:04:00', '2017-06-07 10:04:00'),
(99, 'guest_69479403_62324090@sahalat.com', '$2y$10$Uub6FsOWsFqnvnLVmRl0t.slKv1flNmn4QTnwyyS174n9BVLJoDFS', NULL, '2017-06-07 10:05:27', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-06-07 10:05:27', '2017-06-07 10:05:27'),
(100, 'guest_3947466_60632058@sahalat.com', '$2y$10$Y.Z5q6li7YHFT/U35kyfQ.RpnGiZgR3mle3B.0L.xwT8xH1Br/jHS', NULL, '2017-06-08 06:34:31', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-06-08 06:34:31', '2017-06-08 06:34:31'),
(101, 'guest_55241945_30794371@sahalat.com', '$2y$10$.iN05pc9JxO8WnLOa8QAHuesRFE2yJQKkJCD1dbzhisRqgPsZkUjG', NULL, '2017-06-11 06:41:14', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-06-11 06:41:14', '2017-06-11 06:41:14'),
(102, 'guest_80064510_92225799@sahalat.com', '$2y$10$4IMzi.XDk5waw.khf5SHRu/KbV/jWFZKS.XsN82nNYz3p1AV1pKsO', NULL, '2017-06-11 07:58:45', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-06-11 07:58:45', '2017-06-11 07:58:45'),
(103, 'guest_81921172_5828517@sahalat.com', '$2y$10$M7F6Qnv44cKckQ0BV.3FMeCSVI3IgrbkzZ/U5yIszlu4IeXioMfga', NULL, '2017-06-11 10:41:58', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-06-11 10:41:58', '2017-06-11 10:41:58'),
(104, 'guest_64000878_59882076@sahalat.com', '$2y$10$PL6xj51AWAGPaq2NTYTqvOAWFdmZc5iVf5owpqn0M7KF92H5z8Lvm', NULL, '2017-06-15 06:45:36', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-06-15 06:45:35', '2017-06-15 06:45:36'),
(105, 'klmkdc', '$2y$10$BmLvJuUY2dEqxEey4xfWyuQplEpxvPP8mLFpli4bJITylcfatNK0W', NULL, NULL, 'lkjo', 'ijoij', NULL, '', '', 0, '0', 0, '', 34.08906131584994, 38.14453125, '', '', '', '', '', '', '2017-06-15 20:49:29', '2017-06-15 20:49:29'),
(106, 'raghda@mawaqaa.com', '$2y$10$h7Gt/qOf2otOrnrntpC78OzffCD485TgQvGAfCGS0qM7RxhbxubXO', NULL, '2017-09-19 16:38:18', 'Raghda', 'Mawaqaa', NULL, '97367306', '97367306', 1, '0', 0, '', 29.334709, 48.006189, '', '', '', '', '', '', '2017-08-27 18:19:44', '2017-09-19 16:38:18'),
(107, 'guest_84331362_16223081@sahalat.com', '$2y$10$O0jSWDbTzJDS3JDetnWqFOrnaZsLIiINhDro50f4DZ/z6FwyJzyHm', NULL, '2017-08-27 18:21:18', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-27 18:21:18', '2017-08-27 18:21:18'),
(108, 'raghda@mawaqaa2.com', '123456', NULL, NULL, 'Raghda', 'Mawaqaa', NULL, '97367306', '97367306', 1, '1', 0, '', 29.334709, 48.006189, '', '', '', '', '', '', '2017-08-27 18:27:48', '2017-08-27 18:27:48'),
(109, 'guest_27497946_63070678@sahalat.com', '$2y$10$RsYasbsI7i8OL2rqLg2Efe9Hajp27OQCndfTjBTs2DD7s/aV/LC7m', NULL, '2017-08-27 18:30:04', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-27 18:30:04', '2017-08-27 18:30:04'),
(110, 'guest_39614439_60226660@sahalat.com', '$2y$10$Lrpup5hANsiRs05iUleT9uc86z2MszO6FUfw4gFdKA224EBdKaLpu', NULL, '2017-08-27 18:45:25', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-27 18:45:25', '2017-08-27 18:45:25'),
(111, 'guest_12083676_40771329@sahalat.com', '$2y$10$R6HTKpjWxrtLebYAAqJ4WOQtNWJMriID8LBjrLopnsYtAM253I0Ui', NULL, '2017-08-28 12:58:54', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-28 12:58:54', '2017-08-28 12:58:54'),
(112, 'companymanager@sahalat.com', '$2y$10$zE1YMU4OtSzv5sDdcSHBsuyVo4OIjZPehcTrn.29NaGKKdPhiJwf6', NULL, '2017-09-10 18:44:27', 'company man', 'manager', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-28 14:33:35', '2017-09-10 18:44:27'),
(113, 'serviceboy@sahalat.com', '$2y$10$YZYic08qTxO2VWE6EWvMCe.DoTX10K3iOXkhEXdt52GnU3Kxd3kye', NULL, '2017-08-28 14:43:03', 'serviceboy', 'serviceboy', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-28 14:42:42', '2017-08-28 14:43:03'),
(114, 'guest_93104997_13114764@sahalat.com', '$2y$10$HlarJNEFXk6SOmdoT4OPAe20ayqMWRUDs0xmmQcZB2cCniLkKYkd6', NULL, '2017-08-29 12:59:58', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-29 12:59:58', '2017-08-29 12:59:58'),
(115, 'driver@hardees.com', '$2y$10$nRFU3I9j9ZB2DEe9/4KuiuTbKTFZAbn3d68UBPWD96kUmrGIXBL0q', NULL, '2017-09-05 11:33:35', 'driver', 'driver', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-29 15:08:19', '2017-09-05 11:33:35'),
(116, 'service@company.com', '$2y$10$aMqscpKJEAtRfSp0ILOjwup47Y0Lepsj4LoAmTmmWcG0bis2VW/Bq', NULL, '2017-10-04 14:37:29', 'servicecompany', 'servicecompany', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-29 15:16:48', '2017-10-04 14:37:29'),
(117, 'service@boy.com', '$2y$10$ALtASs08FYL/PYjpJDo76eeyc2ONFTSoUJDyeP3mhA6K0OmJExJJq', NULL, '2017-08-29 15:28:58', 'serviceboy', 'serviceboy', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-29 15:19:37', '2017-08-29 15:28:58'),
(118, 'admin@hardees.com', '$2y$10$bNq.ms9zxmTFduu9wUEfSeFfXorztm2PIb5DobWtgN8nUl00thKXi', NULL, '2017-10-08 17:00:35', 'admin', 'hardees', NULL, '', '', 0, '0', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-29 15:35:18', '2017-10-08 17:00:35'),
(119, 'callcenter@sahalat.com', '$2y$10$L9T6Pg20cx/tMrjxMjHd1uM7ri8o5l/qMo6kxAU/HYtLE3ILkolh.', NULL, '2017-10-01 19:01:09', 'call', 'center', NULL, '', '', 0, '0', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-30 17:38:52', '2017-10-01 19:01:09'),
(121, 'guest_21550566_69725466@sahalat.com', '$2y$10$O0FNyn2z.j0K7diFPn.R8u5PwgXP6dPd8VUZHwkHbNhocoE6xHTsS', NULL, '2017-08-30 18:22:51', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-30 18:22:50', '2017-08-30 18:22:51'),
(122, 'guest_19807347_36373496@sahalat.com', '$2y$10$Ke9aGYMVYFh/O8JwEsfsxe0sOfjgNtLf9yjqu2gIm0favrnn8WCaa', NULL, '2017-08-30 18:23:13', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-08-30 18:23:13', '2017-08-30 18:23:13'),
(123, 'guest_69701954_67166684@sahalat.com', '$2y$10$r4WffRoswPwH.ITpCDAUxuWitYF7U5YItntB0B7FXZRLEsoN2HdaG', NULL, '2017-09-06 12:47:48', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-06 12:47:48', '2017-09-06 12:47:48'),
(124, 'admin@kfc.com', '$2y$10$ah.rKmdeIXaF027BXSC4QebiQNaBB6VNKPcLV6Nn0DUGnLueLifO6', NULL, '2017-09-06 13:41:32', 'admin', 'admin', NULL, '', '', 0, '0', 0, '', 33.74239866180934, 137.28541374206543, '', '', '', '', '', '', '2017-09-06 13:31:55', '2017-09-06 13:41:32'),
(125, 'raghda.omar@yahoo.com', '123456', NULL, NULL, 'Raghda', 'Mawaqaa', NULL, '555', '777', 1, '0', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-06 17:54:51', '2017-09-06 17:54:51'),
(126, 'guest_13584085_47016975@sahalat.com', '$2y$10$fiHMSgw/htD76YJIZ7Sqy.A6VBNpYtUFpLhQ7jEqfACK6afR3jk5S', NULL, '2017-09-06 17:59:15', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-06 17:59:14', '2017-09-06 17:59:15'),
(127, 'guest_78285819_78949918@sahalat.com', '$2y$10$PkW.PgREwLVbOaseQ/BteesUPJFrD6HbtKltBzDKIMc9IeAqMmUL2', NULL, '2017-09-07 12:15:00', 'test', 'test', NULL, '77777777', '777777777', 1, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-07 12:14:59', '2017-09-07 12:15:00'),
(128, 'test@gmail.com', '123456', NULL, NULL, 'tees', 'tes', NULL, '8888888888', '888888888', 1, '1', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-07 14:50:53', '2017-09-07 14:50:53'),
(129, 'test@yahoo.com', '123456', NULL, NULL, 'teeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeest', 'teeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeest', NULL, '8888888888', '888888888', 0, '2', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-07 14:52:50', '2017-09-07 14:52:50'),
(130, 'm@yahoo.com', '123456', NULL, NULL, 'ميرهان', 'ميرهان', NULL, '8888888888', '888888888', 1, '2', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-07 14:55:25', '2017-09-07 14:55:25'),
(131, 'guest_22345642_24074400@sahalat.com', '$2y$10$85cmQ5KBA2ntLPleKOF8tuNB8IG3z6pAxCQuPt338TdHbXCVuoZ1W', NULL, '2017-09-07 17:42:29', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-07 17:42:29', '2017-09-07 17:42:29'),
(134, 'resadmin@yahoo.com', '$2y$10$B4ZKlVUxCSH3LTircdsvSO2A7qxQkNSGSvQ5wv6g/nWeIV6DnFEt6', NULL, NULL, 'resadmin', 'resadmin', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-11 18:17:42', '2017-09-11 18:17:42'),
(135, 'guest_50330319_31316082@sahalat.com', '$2y$10$NEhiGWlk8.Yd0pD82zwUWuROTJqESGElwg1Bg0CRfQRFiLXklvwXy', NULL, '2017-09-13 12:03:33', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-13 12:03:33', '2017-09-13 12:03:33'),
(136, 'guest_71028279_49028005@sahalat.com', '$2y$10$.F.GjMd0EguK2baCU3s/Beu40DXqaPnbKnFBgdIE5F6X/w9w0yjr.', NULL, '2017-09-13 12:34:47', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-13 12:34:47', '2017-09-13 12:34:47'),
(137, 'admin123@gmail.com', '000000', NULL, NULL, 'mohmmed', 'eloustah', NULL, '0788888888', '88888888', 0, '0', 2, '', 0, 0, '', '', '', '', '', '', '2017-09-13 13:11:15', '2017-09-13 13:11:15'),
(138, 'eloustah@gmail.com', '$2y$10$nRkJayJ8hzars2aHnADFle3N6vHxkZQna8iO4AYiaaXF.k.llSH8K', NULL, '2017-09-20 14:17:06', 'aa', 'aa', NULL, '8888888', '888888', 1, '2', 1, '', 0, 0, '', '', '', '', '', '', '2017-09-13 13:13:52', '2017-09-20 14:17:06'),
(139, 'guest_25830090_22217067@sahalat.com', '$2y$10$FbyVgsxsB35piYsEYRd1xO7xbPwq/u6eIKFpFL.ZlrU1WzPCiyXTi', NULL, '2017-09-13 15:36:33', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-13 15:36:33', '2017-09-13 15:36:33'),
(140, 'test@hardees.com', '$2y$10$xjVPlIYOyAyRTuatPXM16OSYnkwItH0NnW1/Ho/kTWh0RiCeKg.ZC', NULL, '2017-09-19 16:41:03', 'hardess test', 'hardess test', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-19 16:39:51', '2017-09-19 16:41:03'),
(141, 'mohammad.shabaan@gmail.com', '$2y$10$SzpvSKbMm9uniXBWMhQ.1eHYaGfePVB2ckfYuELcYx8Awya8hU9z6', NULL, '2017-09-20 14:14:07', 'moegy', 'sh', NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-20 14:13:01', '2017-09-20 14:14:07'),
(142, 'guest_96268075_16968942@sahalat.com', '$2y$10$RWIQEtLxWl5qDX9oEkjm/e/rhsNwXDiibnOE7/u2dLRZOTsG34CaW', NULL, '2017-09-26 15:39:25', NULL, NULL, NULL, '', '', 0, '', 0, '', 0, 0, '', '', '', '', '', '', '2017-09-26 15:39:25', '2017-09-26 15:39:25'),
(143, 'call@call.com', '$2y$10$xI24GHR9zIsCJ/tOqD0VHOyCGtzqObdslpQ2uyKhGSZiQ.j8cCELK', NULL, '2017-10-05 12:04:36', 'call', 'call', NULL, '987978', '345', 0, '0', 0, '', 0, 0, 'call', 'lskdjf', '', 'fslkdjf', '', '', '2017-10-04 18:36:33', '2017-10-05 12:04:36'),
(144, 'call12@call12.com', '$2y$10$sX0pEzFB08glfjcP1vB6DuMGYAEM1rnVxnb4.OR0HQ3O.mYF.V76u', NULL, '2017-10-05 12:08:35', 'mohmmed', 'mohmmed', NULL, '55952035', '99230354896', 0, '0', 0, '', 0, 0, 'call11', '123123', '', '1231231', '', '', '2017-10-05 12:06:45', '2017-10-05 12:08:35'),
(145, 'guest_10165519_87559310@cofe.com', '$2y$10$d4O2kEeSNYmlEfLwouJhkeOWxFply90vXLRDjQxRaXM4sqYd/pqBu', NULL, '2017-10-05 18:31:14', 'guest', 'guest', NULL, '', '', 0, '', 1, '', 0, 0, '', '', '', '', '', '', '2017-10-05 18:31:13', '2017-10-05 18:31:14'),
(146, 'guest_37724880_79943730@cofe.com', '$2y$10$6aJmVxr6J8Q0o.AGO3lOEuqUG1DtvB7aqagP1dj2./KcAejVjYo22', NULL, '2017-10-08 13:38:44', 'guest', 'guest', NULL, '', '', 0, '', 1, '', 0, 0, '', '', '', '', '', '', '2017-10-08 13:38:44', '2017-10-08 13:38:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`), ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`), ADD KEY `governorate_id` (`governorate_id`);

--
-- Indexes for table `audit_track`
--
ALTER TABLE `audit_track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`), ADD KEY `restaurant_id` (`restaurant_id`), ADD KEY `dish_id` (`dish_id`), ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `columns_info`
--
ALTER TABLE `columns_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuisine`
--
ALTER TABLE `cuisine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_menu`
--
ALTER TABLE `delivery_menu`
  ADD PRIMARY KEY (`id`), ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `deliver_package`
--
ALTER TABLE `deliver_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id`), ADD KEY `restaurant_id` (`restaurant_id`), ADD KEY `cuisine_id` (`cuisine_id`), ADD KEY `menu_section_id` (`menu_section_id`), ADD KEY `category_id` (`category_id`), ADD KEY `delivery_menu_id` (`delivery_menu_id`);

--
-- Indexes for table `dish_rate`
--
ALTER TABLE `dish_rate`
  ADD PRIMARY KEY (`id`), ADD KEY `dish_id` (`dish_id`);

--
-- Indexes for table `email_group`
--
ALTER TABLE `email_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_group_users`
--
ALTER TABLE `email_group_users`
  ADD PRIMARY KEY (`id`), ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `email_mass_queue`
--
ALTER TABLE `email_mass_queue`
  ADD PRIMARY KEY (`id`), ADD KEY `email_group_id` (`email_group_id`);

--
-- Indexes for table `email_mass_template`
--
ALTER TABLE `email_mass_template`
  ADD PRIMARY KEY (`id`), ADD KEY `email_group_id` (`email_group_id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `governorate`
--
ALTER TABLE `governorate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_section`
--
ALTER TABLE `menu_section`
  ADD PRIMARY KEY (`id`), ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operation_hour`
--
ALTER TABLE `operation_hour`
  ADD PRIMARY KEY (`id`), ADD KEY `restaurant_area_id` (`restaurant_area_id`), ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_driver`
--
ALTER TABLE `order_driver`
  ADD PRIMARY KEY (`id`), ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`), ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`), ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `restaurant_area`
--
ALTER TABLE `restaurant_area`
  ADD PRIMARY KEY (`id`), ADD KEY `area_id` (`area_id`), ADD KEY `restaurant_id` (`restaurant_id`), ADD KEY `governorate_id` (`governorate_id`);

--
-- Indexes for table `restaurant_cuisine`
--
ALTER TABLE `restaurant_cuisine`
  ADD PRIMARY KEY (`id`), ADD KEY `restaurant_id` (`restaurant_id`), ADD KEY `cuisine_id` (`cuisine_id`);

--
-- Indexes for table `restaurant_notification`
--
ALTER TABLE `restaurant_notification`
  ADD PRIMARY KEY (`id`), ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `restaurant_offer`
--
ALTER TABLE `restaurant_offer`
  ADD PRIMARY KEY (`id`), ADD KEY `restaurant_id` (`restaurant_id`), ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `restaurant_rate`
--
ALTER TABLE `restaurant_rate`
  ADD PRIMARY KEY (`id`), ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `restaurant_users`
--
ALTER TABLE `restaurant_users`
  ADD PRIMARY KEY (`id`), ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_boy`
--
ALTER TABLE `service_boy`
  ADD PRIMARY KEY (`id`), ADD KEY `service_company_id` (`service_company_id`);

--
-- Indexes for table `service_company`
--
ALTER TABLE `service_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_company_order`
--
ALTER TABLE `service_company_order`
  ADD PRIMARY KEY (`id`), ADD KEY `service_company_id` (`service_company_id`), ADD KEY `order_id` (`service_boy_id`);

--
-- Indexes for table `service_company_order_service`
--
ALTER TABLE `service_company_order_service`
  ADD PRIMARY KEY (`id`), ADD KEY `service_company_order_id` (`service_company_order_id`), ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `social_provider_user_id_unique` (`provider`,`user_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`), ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `audit_track`
--
ALTER TABLE `audit_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `columns_info`
--
ALTER TABLE `columns_info`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cuisine`
--
ALTER TABLE `cuisine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `delivery_menu`
--
ALTER TABLE `delivery_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `deliver_package`
--
ALTER TABLE `deliver_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `dish_rate`
--
ALTER TABLE `dish_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `email_group`
--
ALTER TABLE `email_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `email_group_users`
--
ALTER TABLE `email_group_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `email_mass_queue`
--
ALTER TABLE `email_mass_queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `email_mass_template`
--
ALTER TABLE `email_mass_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `governorate`
--
ALTER TABLE `governorate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu_section`
--
ALTER TABLE `menu_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operation_hour`
--
ALTER TABLE `operation_hour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `order_driver`
--
ALTER TABLE `order_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1325;
--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `restaurant_area`
--
ALTER TABLE `restaurant_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `restaurant_cuisine`
--
ALTER TABLE `restaurant_cuisine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `restaurant_notification`
--
ALTER TABLE `restaurant_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `restaurant_offer`
--
ALTER TABLE `restaurant_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `restaurant_rate`
--
ALTER TABLE `restaurant_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `restaurant_users`
--
ALTER TABLE `restaurant_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service_boy`
--
ALTER TABLE `service_boy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `service_company`
--
ALTER TABLE `service_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service_company_order`
--
ALTER TABLE `service_company_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `service_company_order_service`
--
ALTER TABLE `service_company_order_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=186;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=147;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `area`
--
ALTER TABLE `area`
ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`governorate_id`) REFERENCES `governorate` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`dish_id`) REFERENCES `dish` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `delivery_menu`
--
ALTER TABLE `delivery_menu`
ADD CONSTRAINT `delivery_menu_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dish`
--
ALTER TABLE `dish`
ADD CONSTRAINT `dish_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `dish_ibfk_2` FOREIGN KEY (`cuisine_id`) REFERENCES `cuisine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `dish_ibfk_3` FOREIGN KEY (`menu_section_id`) REFERENCES `menu_section` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `dish_ibfk_4` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `dish_ibfk_5` FOREIGN KEY (`delivery_menu_id`) REFERENCES `delivery_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dish_rate`
--
ALTER TABLE `dish_rate`
ADD CONSTRAINT `dish_rate_ibfk_1` FOREIGN KEY (`dish_id`) REFERENCES `dish` (`id`);

--
-- Constraints for table `email_group_users`
--
ALTER TABLE `email_group_users`
ADD CONSTRAINT `email_group_users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `email_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `email_mass_queue`
--
ALTER TABLE `email_mass_queue`
ADD CONSTRAINT `email_mass_queue_ibfk_1` FOREIGN KEY (`email_group_id`) REFERENCES `email_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `email_mass_template`
--
ALTER TABLE `email_mass_template`
ADD CONSTRAINT `email_mass_template_ibfk_1` FOREIGN KEY (`email_group_id`) REFERENCES `email_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_section`
--
ALTER TABLE `menu_section`
ADD CONSTRAINT `menu_section_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `operation_hour`
--
ALTER TABLE `operation_hour`
ADD CONSTRAINT `operation_hour_ibfk_1` FOREIGN KEY (`restaurant_area_id`) REFERENCES `restaurant_area` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `operation_hour_ibfk_2` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_driver`
--
ALTER TABLE `order_driver`
ADD CONSTRAINT `order_driver_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurant_area`
--
ALTER TABLE `restaurant_area`
ADD CONSTRAINT `restaurant_area_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `restaurant_area_ibfk_2` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `restaurant_area_ibfk_3` FOREIGN KEY (`governorate_id`) REFERENCES `governorate` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurant_cuisine`
--
ALTER TABLE `restaurant_cuisine`
ADD CONSTRAINT `restaurant_cuisine_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `restaurant_cuisine_ibfk_2` FOREIGN KEY (`cuisine_id`) REFERENCES `cuisine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurant_notification`
--
ALTER TABLE `restaurant_notification`
ADD CONSTRAINT `restaurant_notification_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurant_offer`
--
ALTER TABLE `restaurant_offer`
ADD CONSTRAINT `restaurant_offer_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `restaurant_offer_ibfk_2` FOREIGN KEY (`offer_id`) REFERENCES `offer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurant_rate`
--
ALTER TABLE `restaurant_rate`
ADD CONSTRAINT `restaurant_rate_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `restaurant_users`
--
ALTER TABLE `restaurant_users`
ADD CONSTRAINT `restaurant_users_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_boy`
--
ALTER TABLE `service_boy`
ADD CONSTRAINT `service_boy_ibfk_1` FOREIGN KEY (`service_company_id`) REFERENCES `service_company` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_company_order_service`
--
ALTER TABLE `service_company_order_service`
ADD CONSTRAINT `service_company_order_service_ibfk_1` FOREIGN KEY (`service_company_order_id`) REFERENCES `service_company_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `service_company_order_service_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
