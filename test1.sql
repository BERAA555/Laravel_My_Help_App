-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2022 at 12:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `explane` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `part_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `name`, `explane`, `code`, `path`, `part_id`, `created_at`, `updated_at`) VALUES
(19, 'Start and Run', 'Start server and Run laravel project', 'Start and Run26', 'bdeSx38EjZSLwQQmWcBxwXW00xPQy0LGXEHFrx3C.png', 26, '2022-11-28 05:06:31', '2022-11-28 05:06:31'),
(22, 'Class Form R_js', 'Create Class', 'Class Form R_js37', '3rQoDLwMYVbz5JMvpMGPnIZvCnB3ZKfmWWNx0QeG.png', 37, '2022-11-28 06:44:10', '2022-11-28 06:44:10'),
(23, 'Function Form R_js', 'Create Function Form', 'Function Form R_js37', 'Mc0OztPhBL4CQxfc3pqy50fpysuCbqFHH5cXRCYx.png', 37, '2022-11-28 06:45:01', '2022-11-28 06:45:01'),
(24, 'Run Project R_js', 'Run Project R_js', 'Run Project R_js36', 'EHmTY4CqRiibD54FY26nsSTjGUPud5rjgmgczFkf.png', 36, '2022-11-28 06:47:41', '2022-11-28 06:47:41'),
(25, 'import pages R_js', 'import pages', 'import pages R_js37', 'XPTOJrDqygwz3OeTwenoZg3H52sejcQRefEZA8rt.png', 37, '2022-11-28 06:54:40', '2022-11-28 06:54:40'),
(26, 'Inline Style R_js', 'Use Css with Inline Style way', 'Inline Style R_js38', 'XHTBx07n8sFuIiUjqfNHG8z6qCK5MlhKVvKnJWSl.png', 38, '2022-11-28 07:04:07', '2022-11-28 07:04:07'),
(27, 'Internal Style R_js', 'Use Css With Internal Style Way', 'Internal Style R_js38', 'qKrSpXZfiPYJiEg23oMmxq74r9s0LhryuE9WtSwg.png', 38, '2022-11-28 07:08:41', '2022-11-28 07:08:41'),
(28, 'external Style R_js', 'Use Css With external Style Way', 'external Style R_js38', '73zdnHOwF95dPYqnnMVIhO7Um5u14eVJavoJjQl8.png', 38, '2022-11-28 07:15:47', '2022-11-28 07:15:47'),
(29, 'BootStrap5 R_js', 'Add Bootstarp link in index.html ( inside public folder ) and use', 'BootStrap5 R_js29', '1kyAmp6NkAu8rjd78r8rrCa7QVi9alc9ajBTMYMz.png', 38, '2022-11-28 07:26:42', '2022-11-28 07:36:06'),
(30, 'JavaScript R_js', 'Use JavaScript in React_js', 'JavaScript R_js37', 'ExwWYGkT41YRKNolpqov3WFteBgA1zxgBy3hnAQK.png', 37, '2022-11-28 08:55:24', '2022-11-28 08:55:24'),
(32, 'Func\'s Forms R_js', 'functions form inside main functions or main class', 'Func\'s Forms R_js39', 'n7dyBgjhqWi9IxzSRMnunAI8JzKmQzwAmbzOIrEt.png', 39, '2022-11-28 09:17:20', '2022-11-28 09:17:20'),
(33, 'Example one', 'Example one for use Functions', 'Example one39', '60r41gCj3sn7mGzJxerTjSq5ZaGZjcSX8E7bbAbu.png', 39, '2022-11-28 09:22:57', '2022-11-28 09:22:57'),
(34, 'Ex_two with (.map)', 'Example two For Use Functions with Loop ( .map )', 'Ex_two with (.map)39', 'tvU4dzbNx6ZpsK4312UIrchDvpZ4yxkp7YxffU1X.png', 39, '2022-11-28 09:27:22', '2022-11-28 09:27:22'),
(36, 'Use Props', 'props : passing parameters from page (parent) to another page (children)', 'Use Props36', 'rzNrSx28rrNyuFR0ioysBFUlJkSpUDXbhSucs70d.png', 41, '2022-11-28 10:07:05', '2022-11-28 10:10:25'),
(37, 'Object Props', 'create Props using object', 'Object Props41', 'pNevOJlmG18934jwW9Q0FwAnuhePOrtTL65WGQpe.png', 41, '2022-11-28 10:08:52', '2022-11-28 10:08:52'),
(38, 'Class Props', 'use Props with class ( this with object way ) we can do it normally', 'Class Props41', 'NsUNWoCOBXk50jwEf5ruhyoqg8332rwI2O5Ybkxo.png', 41, '2022-11-28 10:24:26', '2022-11-28 10:24:26'),
(39, 'Onclick R_js', 'when click to botton do this function', 'Onclick R_js42', '5IoBIEesJu02cH1xORokhd6nDo1DeLTpPS8K5Unf.png', 42, '2022-11-30 09:01:58', '2022-11-30 09:01:58'),
(40, 'UseState', 'We Create Array , Contain Variable and Function For Change This Variable Because It\'s Const .\r\nAnd When Change Value,It Will Do Render For App  ', 'UseState43', 'uMWFByDxI0QMPxPb0bIVF7UrcJcjDyjmYGLHHTSi.png', 43, '2022-11-30 09:12:54', '2022-11-30 09:12:54'),
(41, 'UseState Example', 'Example for UseState With Object', 'Object UseState R_js41', 'lMviaLBueiXfkXvJt7ewS4A5JfGnS72bO1sziD6e.png', 43, '2022-11-30 09:31:03', '2022-11-30 09:34:02'),
(42, 'UseEffect', 'UseEffect it\'s will call every time when the app will do render', 'UseEffect43', '7mDJWXPwvaBqxuMB5CtVOLKZudcHpI39kYBJhbz0.png', 43, '2022-11-30 09:52:35', '2022-11-30 09:52:35'),
(43, 'UseEffect Example', 'make more than one UseEffect , make UseEffect run Just when change specific value not any value', 'UseEffect Ex43', 'x4UZecTMz5cg8My5EfISMTvDQnpuyu9D3ZLyfo1h.png', 43, '2022-11-30 10:01:43', '2022-11-30 10:01:43'),
(44, 'UseContext', 'UseContext : it used for send data from page (1.page) for any page(5.page) in project and return all this page (5.page) to (1.page) like we called this page but with sending data', 'UseContext43', 'dx1jQTqAtxfQqEORl6C7LVAiXZqYTeYHhapyaEqw.png', 43, '2022-12-01 05:03:40', '2022-12-01 05:03:40'),
(45, 'UseReduct R_js', 'UseReduct : used to send ( value and active value ) to function for do something according to this actions value , in the function we use if or switch for that', 'UseReduct R_js43', 'hOVQyENDvMjTDZYumqtSDmX6s4CH12U2uDop5E4b.png', 43, '2022-12-01 06:16:47', '2022-12-01 06:16:47'),
(46, 'UseReduct Ex R_js', 'use  UseReduct with object and switch', 'UseReduct Ex R_js43', 'VoonGsiUCN4XiKXS6u1mbQZ1DiMiFtYaPOZa6hGJ.png', 43, '2022-12-01 07:29:05', '2022-12-01 07:29:05'),
(47, 'UseMemo', 'UseMemo : used for avoid make rendar for functions there are no need, In the following example, the expensive function will only run when count is changed and not when todo\'s (array value) are added.', 'UseMemo43', 'swbmRQALjLmVAllwJ2jZssMQXwXA0NUEcHgP1R9o.png', 43, '2022-12-01 08:04:39', '2022-12-01 08:04:39'),
(48, 'Basic_One_Linux', 'basic tools for linux', 'basic_one _linux44', '7JQqQs3nLbVFa5Qg5C9bkxzbEy5F3RLj1nDcfm1Q.png', 44, '2022-12-01 10:00:36', '2022-12-01 10:00:36'),
(49, 'Basic_Two_Linux', 'Basic tools for linux', 'Basic_two_linux44', 'vmbOotSBLsyjbBCok2Z0Vw0n9Q4aQ6cP1DMR1HAY.png', 44, '2022-12-01 10:01:38', '2022-12-01 10:01:38'),
(50, 'Basics_Three_Linux', 'Basic tools for linux', 'Basics_Three_Linux50', 'SaugsWFtG6jLqHAAsc76oDPVe41RvjsgUVYIwPfF.png', 44, '2022-12-01 10:27:39', '2022-12-01 16:04:58'),
(51, 'Basic_Four_Linux', 'Basic tools  for linux', 'Basic_Four_Linux44', 'FApVRpHORr4t5rEnZqncOXZJ6r1qtY27rqjR0qh2.png', 44, '2022-12-01 16:05:56', '2022-12-01 16:05:56'),
(52, 'Basic_One_Bash', 'parametrs , echo , read and if', 'Basic_One_Bash45', 'lJO5rhQYsw2q1T2EXJWDHceOQRzRRAxJGi8VOZ1n.png', 45, '2022-12-02 05:22:23', '2022-12-02 05:22:23'),
(53, 'Basic_Loop_Bash', 'Case , While and Loop', 'Basic_Loop_Bash45', 'T8FldwpsW3NdrNm19bcS91xSFn7AsYctMpGr3Pxe.png', 45, '2022-12-02 06:06:07', '2022-12-02 06:06:07'),
(54, 'Examples', 'Examples for if and Loops', 'Examples45', 'zykpIT0r3pTCZW3Mw2MJrwaQnLulRDTaecdH9qc3.png', 45, '2022-12-02 08:23:46', '2022-12-02 08:23:46'),
(55, 'Color && EOF', 'make Color for text and make Design', 'Color && EOF45', 'I7sUSdNE72nU89Mxx1m3w6ViVMU9OhF6SpfhmR64.png', 45, '2022-12-02 09:13:02', '2022-12-02 09:13:02'),
(58, 'Blade', 'use Blade', 'Blade46', 'KQb10QQT7HvMnNRtCJ6IKWrSEOlE6twqcsHaFHMC.png', 46, '2022-12-15 10:22:18', '2022-12-15 10:22:18'),
(59, 'Route_Basic', 'Use Route_Basic', 'Route_Basic47', 'WwK5liyoHT63dw4TSHmujxBprucSOm65xKOSFrnO.png', 47, '2022-12-15 10:30:21', '2022-12-15 10:30:21'),
(60, 'Create Controller', 'Create Controller', 'Create Controller48', 'v9L9R0mJUmWn3a1RXBfv0j2jeG1hIVceRtaX4pAD.png', 48, '2022-12-16 03:48:43', '2022-12-16 03:48:43'),
(61, 'Controller Using Type', 'Controller Using Type', 'Controller Using Type48', 'NTFV0f0dLXHNFEJ0PC0BXqvpocKxWnInQgiFZWPt.png', 48, '2022-12-16 03:50:18', '2022-12-16 03:50:18'),
(62, 'Route With Controller', 'Use Route With Controller', 'Route With Controller47', 'uJUYbpwzeVxwcYvDS9MdSTRdX4SGB5ayX2xGfGyk.png', 47, '2022-12-16 04:01:17', '2022-12-16 04:01:17'),
(65, 'Create Migration', 'Create Migration', 'Create Migration49', 'gM0VTzYnerfHGOOT61razlXdnXBfUKWU5tgMdq7g.png', 49, '2022-12-16 04:21:08', '2022-12-16 04:21:08'),
(66, 'Use Migration', 'Use Migration', 'Use Migration49', 'InR17iK03lodMHUFP67zdskPMwVO2at3YJOf0cH3.png', 49, '2022-12-16 04:49:13', '2022-12-16 04:49:13'),
(68, 'One Column Migration', 'Create And Delete One Column Migration : It Use When There Are Data In DB And We Don\'t Want To Remove It', 'One Column Migration49', 'FXaCKfxFPB8hzX4cEQbFeIswESpWD85rH58ONfa3.png', 49, '2022-12-16 04:55:23', '2022-12-16 04:55:23'),
(70, 'Create Model', 'Model is the bridge between controller and DB <mrc> (model route controller)', 'Create Model50', 'wGHjZ1SvGYhsdXRRYOyoO0A1FNfjWcjRi8hGEcEf.png', 50, '2022-12-16 05:14:17', '2022-12-16 05:14:17'),
(71, 'Modle ( show , insert )', 'Use Modle with show and  insert', 'Modle ( show , insert )50', 'lmk8y8wLckIdVRkb5RWHI4usXSFuNCy8ThnxqvNl.png', 50, '2022-12-16 05:37:53', '2022-12-16 05:37:53'),
(73, 'Using Form', 'Using Form in View', 'Using Form51', 'sE3uIdPOZw4w4oXkvp8HnLLC5kTpOOJEHJQ5IOcM.png', 51, '2022-12-16 09:37:04', '2022-12-16 09:37:04'),
(74, 'Modle ( Update , Delete )', 'Use Modle With  Update and Delete', 'Modle ( Update , Delete )50', 'ffFORcf1MjIpl9MFIi1W5rTU1xkotKkXkITnfNUN.png', 50, '2022-12-16 09:54:50', '2022-12-16 09:54:50'),
(75, 'Soft Delete', 'Use Model With Soft Delete : add ( use SoftDeletes ) and it\'s path in model page and add column to it\'s table  ( $table -> softDeletes() )', 'Soft Delete50', 'whkwdHOYWVkNFuxN9D683IoJI8ahZhM7UkxdccT4.png', 50, '2022-12-16 10:10:39', '2022-12-16 10:10:39'),
(76, 'Deal With DB', 'Deal With DB ( insert , update , show , delete )', 'Deal With DB48', 'hpsvYvRIHQQg97NJlY1h1aUqujTPkGBqskONGn7b.png', 48, '2022-12-16 10:30:08', '2022-12-16 10:30:08'),
(77, 'Create Validate', 'Create Validate For Insert In Controller', 'Create Validate52', '3DLXwsEEDdegGm3OW74oaq2vw1UhJysRgKCcWIcS.png', 52, '2022-12-20 12:34:00', '2022-12-20 12:34:00'),
(78, 'Validata Error', 'Get Validate Error And Show If In View Page With Form', 'Validata Error52', 'vrd25sdcAW0mxYr25nEjlO8DcYHFkBQIXSXEz7iv.png', 52, '2022-12-20 12:35:55', '2022-12-20 12:35:55'),
(79, 'Special Validate', 'Create Special Validate and used it in all functions ( for every table Create one )', 'Special Validate52', 'VbElMHJVTp8EhKVFJv8mco6kQEjPgRjc5OAbx8yG.png', 52, '2022-12-21 04:26:41', '2022-12-21 04:26:41'),
(80, 'Change Error Message', 'Change Error Message to new Message', 'Change Error Message52', 'crk1BSkt4jMjXmm087M22Hn312Zbt8KBoI7nfh8Z.png', 52, '2022-12-21 04:32:48', '2022-12-21 04:32:48'),
(81, 'Save Old Value', 'input with Save Old Value in form', 'Save Old Value51', 'unl1tqRdBFTiieAYS6X3168YWJUxz2ASKe9OYXPX.png', 51, '2022-12-21 04:36:54', '2022-12-21 04:36:54'),
(82, 'One to (one and many)', 'Create relationship one to one and one to many ( in the code there is (show user\'s data from phone model)\'s code )', 'One to (one and many)53', 'FBolbREvMl8pEFrc42sUWv62ESxVS5TGYOgfGedn.png', 53, '2022-12-21 04:55:28', '2022-12-21 04:55:28'),
(83, 'many to many', 'Create relationship ( many to many )', 'many to many53', 'LtwttHuFt6qs0bHZSdU4Kky5OmjEnrMLx7Rdt1Lb.png', 53, '2022-12-21 05:07:49', '2022-12-21 05:07:49'),
(85, 'Accessor and Mutator', 'get or set data to database with now look ( upper , lower  ,  ucfirst , .... )', 'Accessor and Mutator46', 'i8nfcxwPbyLQr7brZgzGZ9YIPBc4NUjeN2Cdfq1k.png', 46, '2022-12-21 05:18:22', '2022-12-21 05:18:22'),
(86, 'Authentications_UI', 'Create ready login and register pages for Project', 'Authentications_UI46', 'pBH4VwinssmUgZD8DpMpwWAxs6wDNcuMheXVPDSN.png', 46, '2022-12-21 05:50:22', '2022-12-21 05:50:22'),
(87, 'MiddleWare', 'Create and use middleware with Example', 'MiddleWare46', 'KjgNYwJfQFz1aMUDkdlN5skJNjcfsM1NEOldg1gZ.png', 46, '2022-12-21 07:29:16', '2022-12-21 07:29:16'),
(88, 'Seeder', 'Create seeder and use it', 'Seeder46', 'qBVb9jOmq79bXuf37HNs0sdgidrUW7BntMQYRWeC.png', 46, '2022-12-21 07:34:04', '2022-12-21 07:34:04'),
(89, 'Factory', 'Create Factory and Use it', 'Factory46', '5QuPPxI4eDkyvKwGsnRkDBJIVrY85J2mIbZ32N82.png', 46, '2022-12-21 07:34:37', '2022-12-21 07:34:37'),
(90, 'Tinker', 'insert data to DB using terminal', 'Tinker46', 'atcssXOGOmahIM6oUHehuiWLWENLpFs3xI1M1NLc.png', 46, '2022-12-21 07:36:34', '2022-12-21 07:36:34'),
(91, 'Mail', 'Deal With Mail', 'Deal With Mail46', '2L912ZxJ97CguKF7BRflXuVtcQtku5RDYz535i5j.png', 46, '2022-12-21 08:09:35', '2022-12-21 08:09:35'),
(92, 'Trait', 'Create Trait and use it', 'Trait46', '42e0rL9TAq6fiDt7rabT9QvJ1neTtgjY2OIUmGLC.png', 46, '2022-12-21 09:47:08', '2022-12-21 09:47:08'),
(95, 'Storage', 'Deal With Storage', 'Storage46', 'MoA1DXG5WD6BDHhUvZ3DEraiq9VzJy6ftHDzx4De.png', 46, '2022-12-22 08:07:03', '2022-12-22 08:07:03'),
(96, 'Images', 'Deal With Images', 'Images46', 'nDkHtpVp8Plud7CZCXBPCbg7pA0RGxserFOERhXy.png', 46, '2022-12-22 08:07:56', '2022-12-22 08:07:56');

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
-- Table structure for table `langs`
--

CREATE TABLE `langs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(16, 'Laravel', '2022-11-28 04:50:32', '2022-11-28 04:50:32'),
(17, 'React_Js', '2022-11-28 04:50:44', '2022-11-28 04:50:44'),
(21, 'React_Native', '2022-12-01 03:43:05', '2022-12-01 03:43:05'),
(22, 'Bash_Scripting', '2022-12-01 03:43:27', '2022-12-01 03:43:27'),
(23, 'Python', '2022-12-01 03:43:40', '2022-12-01 03:43:40'),
(24, 'java', '2022-12-01 03:43:48', '2022-12-01 03:43:48'),
(25, 'php', '2022-12-01 03:43:53', '2022-12-01 03:43:53'),
(26, 'java_Script', '2022-12-01 03:44:02', '2022-12-01 03:44:02'),
(31, 'Sql', '2022-12-01 05:05:31', '2022-12-01 05:05:31');

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
(5, '2022_10_10_172935_create_langs_table', 1),
(6, '2022_10_10_183320_create_parts_table', 1),
(7, '2022_10_12_103439_create_contents_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lang_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `lang_id`, `name`, `created_at`, `updated_at`) VALUES
(26, 16, 'Install && Run', '2022-11-28 04:51:19', '2022-11-28 04:51:19'),
(36, 17, 'Install && Run R_js', '2022-11-28 06:42:36', '2022-11-28 06:42:36'),
(37, 17, 'Basic R_js', '2022-11-28 06:42:54', '2022-11-28 06:42:54'),
(38, 17, 'Css R_js', '2022-11-28 06:55:15', '2022-11-28 06:55:15'),
(39, 17, 'Functions R_js', '2022-11-28 08:56:58', '2022-11-28 08:56:58'),
(41, 17, 'Props R_js', '2022-11-28 10:06:50', '2022-11-28 10:06:50'),
(42, 17, 'Events R_js', '2022-11-29 13:24:47', '2022-11-29 13:24:47'),
(43, 17, 'Hook R_js', '2022-11-29 13:26:07', '2022-11-29 13:26:07'),
(44, 22, 'Basic_Linux', '2022-12-01 08:26:06', '2022-12-01 08:26:06'),
(45, 22, 'Basic Bash_S', '2022-12-01 08:26:37', '2022-12-01 08:26:37'),
(46, 16, 'Different Parts', '2022-12-15 02:25:51', '2022-12-15 02:25:51'),
(47, 16, 'Route', '2022-12-15 10:28:37', '2022-12-15 10:28:37'),
(48, 16, 'Controller', '2022-12-15 10:28:46', '2022-12-15 10:28:46'),
(49, 16, 'Migration', '2022-12-16 04:02:09', '2022-12-16 04:02:09'),
(50, 16, 'Modle', '2022-12-16 04:58:55', '2022-12-16 04:58:55'),
(51, 16, 'View', '2022-12-16 05:17:04', '2022-12-16 05:17:04'),
(52, 16, 'Validate', '2022-12-20 12:30:12', '2022-12-20 12:30:12'),
(53, 16, 'RelationShips', '2022-12-21 04:51:51', '2022-12-21 04:51:51');

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
(1, 'beraa ceze', 'beraaceze@gmail.com', NULL, '$2y$10$3sPCaTT/UYhuaM9zTsD.7e9uoP6xZt0nQQYVENL1YYFCK9JhQjae2', NULL, '2022-10-15 09:51:26', '2022-10-15 09:51:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_part_id_foreign` (`part_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parts_lang_id_foreign` (`lang_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `langs`
--
ALTER TABLE `langs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_part_id_foreign` FOREIGN KEY (`part_id`) REFERENCES `parts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `parts`
--
ALTER TABLE `parts`
  ADD CONSTRAINT `parts_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
