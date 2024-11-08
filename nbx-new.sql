-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 07:15 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbx-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `sub_heading`, `long_description`, `created_at`, `updated_at`) VALUES
(1, 'Who We Are', '<b>At NBX Capital Investments, we\'re a team of real estate investment professionals that provide a 360-degree solution for real estate business. We\'re not just about deals; we\'re about making a meaningful impact.&nbsp; We\'re your partners in overcoming financial challenges. We specialize in assisting owners facing pre-foreclosures and those who were once cash buyers. We believe in human connection and are dedicated to helping you regain control of your assets and financial stability. We have in-house expertise from construction to house flipping from dealing with lenders to assisting you in your real estate journey, providing you with a path to financial success we enable individuals to maximize the opportunities in the real estate sector across the United States</b>', '2023-12-04 13:50:52', '2023-12-31 04:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `advantages`
--

CREATE TABLE `advantages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advantages`
--

INSERT INTO `advantages` (`id`, `heading`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Visionaries', 'We are the experts who look ahead. Our commitment extends beyond current market conditions. We give you in-depth insights into the present market and make bold predictions on how housing expenses in your area will change in the next years. Your real estate future begins here.', '1', '2023-12-04 15:02:54', '2024-01-01 04:53:33'),
(2, 'End to End Service', 'We offer a comprehensive range of services that span every stage of your real estate experience. We handle everything from property acquisition to flipping, as well as legal complexities and financial aspects (including Hard Money Financing, Self-Financing, and Line of Credit), to skilled property management.', '1', '2023-12-04 17:20:11', '2024-01-01 04:53:53'),
(3, 'Come to the ‘Real’ Experts', 'A profound mastery of real estate is at the heart of our expertise. We are seasoned specialists with over 130 properties in our portfolio. When it comes to you, though, we adopt a more personalized approach, adjusting our selection to include only the solutions that completely correspond with your specific needs and interests.', '1', '2023-12-04 17:20:23', '2024-01-01 04:54:08'),
(4, 'Find your Haven', 'The proper home should improve your mood, which is why we carefully consider your needs and preferences. Our real estate approach is all about matching your objectives with the ideal property, ensuring that your future move truly makes you feel at home.', '1', '2023-12-04 17:20:37', '2024-01-01 04:54:23'),
(5, 'Ask Us Anything', 'We\'re you go-to resource for information. Our brokers are your skilled guides through the complexities of legal processes, the beauty of interior design, and the nitty-gritty technical features of a building. Please ask any questions you have, and we will make sure you have all the information you require.', '1', '2023-12-04 17:20:50', '2024-01-01 04:54:41'),
(6, 'We Will Answer Any Question', 'We\'re committed to clarity and transparency. Our expert team is dedicated to addressing all your queries regarding real estate wholesale. From property evaluation to market trends, count on us for insightful answers to empower your investment decisions.', '1', '2023-12-04 17:21:01', '2024-01-01 06:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `case_studies`
--

CREATE TABLE `case_studies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `case_studies`
--

INSERT INTO `case_studies` (`id`, `heading`, `description`, `long_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sadad', 'sdsadsa', '<p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '320064.png', '1', '2023-12-04 13:23:54', '2023-12-04 18:05:39'),
(2, 'Test Ahmer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<p><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; text-align: left; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"></div></p><div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\"><br></strong></p><p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify;\"><br></p><p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify;\"><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; text-align: left; float: right; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"></div></p><div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; text-align: left; float: left; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div></div></div>', '727682.png', '1', '2023-12-16 10:26:24', '2023-12-16 10:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `number`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sasa', 'test@gmail.com', 'adasdsad', 'asdasdasdasdsadsadasdadsadsa', '2023-12-02 22:15:58', '2023-12-02 22:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `c_m_s`
--

CREATE TABLE `c_m_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_m_s`
--

INSERT INTO `c_m_s` (`id`, `heading`, `description`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Capital Investments', 'NBX Capital Investments is a place where real estate meets opportunity. We specialize in high-yielding smart investments. Explore our comprehensive variety of services, which includes everything from property acquisition, renovation and Airbnb investments to custom finance options. We are your dependable partner in realising the maximum potential of your real estate sndeavors. Help us shape your Financial future by making wise real estate investments.', 'Home', '347905.png', '2023-12-02 20:51:34', '2023-12-02 20:51:34'),
(2, 'Construction', 'Test', 'Construction', '120135.png', '2023-12-02 20:52:26', '2024-09-27 05:48:27'),
(3, 'Financing', NULL, 'Financing', '668082.jpg', '2023-12-02 20:53:34', '2024-09-27 05:48:54'),
(4, 'Home Buying and Selling', NULL, 'Home Buying and Selling', '856925.png', '2023-12-02 20:53:57', '2024-09-27 05:51:54'),
(5, 'Home Rehab', NULL, 'Home Rehab', '781850.png', '2023-12-02 20:54:18', '2024-09-27 05:52:48'),
(7, 'Property Management', NULL, 'Property Management', '359488.png', '2023-12-02 20:54:58', '2024-09-27 05:53:21'),
(8, 'CONTACT US', NULL, 'Contact', '207796.jpg', '2023-12-02 21:58:04', '2024-01-01 06:13:25'),
(9, 'Case Studies', NULL, 'Case Studies', '613407.jpg', '2023-12-04 12:33:02', '2024-09-27 05:57:41'),
(10, 'About Us', NULL, 'About us', '579095.jpg', '2023-12-04 12:33:57', '2023-12-31 04:01:57'),
(11, 'REI Wholesale', 'Test', 'Wholesale', '204255.png', '2023-12-31 22:14:02', '2024-09-27 05:54:00'),
(12, 'Details', 'Details', 'Case Studies Details', '350192.jpg', '2024-09-27 05:58:40', '2024-09-27 05:58:40');

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
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `heading`, `location`, `contact`, `email`, `instagram`, `facebook`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Together With You We Can Do More', 'Chicago, IL, US', '+1 815-325-2866', 'nbxcapitalinvestments@gmail.com', 'https://www.instagram.com/nbxcapitalinvestments?igsh=MXRnN2s3ajBiYW1rZw%3D%3D', 'https://www.facebook.com/NBXCapitalInvestments?mibextid=LQQJ4d', '364018.svg', '2023-12-02 21:21:09', '2024-01-05 04:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `home_rehabs`
--

CREATE TABLE `home_rehabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_rehabs`
--

INSERT INTO `home_rehabs` (`id`, `heading`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Self-Financing', 'For consumers who wish to invest with their own money, NBX provides self-financing possibilities. Self-financing allows you to manage your financial resources as you see fit in real estate ventures, giving you more flexibility and independence.', '666.png', '1', '2023-11-29 19:00:45', '2023-11-29 19:00:45'),
(2, 'Credit Facility', 'NBX offers a line of credit, providing clients with a flexible financial alternative. As needed, this revolving credit line can be utilized to fund property purchases, repairs, or other real estate projects. The line of credit provides flexibility by guaranteeing that you have access to capital when market opportunities occur.', '666.png', '1', '2023-11-29 19:03:11', '2023-11-29 19:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `landmark_section_firsts`
--

CREATE TABLE `landmark_section_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landmark_section_firsts`
--

INSERT INTO `landmark_section_firsts` (`id`, `heading`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Plan', 'At NBX Capital Investments our plan is to deliver exceptional value to clients through meticulous planning, innovative strategies, and unwavering commitment to every excellence in aspect of real estate investment and management. By aligning with our clients\' goals and leveraging our expertise, we aim to expectations exceed and foster lasting success in the dynamic world of property ventures.', '922365.png', '1', '2023-12-04 16:01:35', '2024-09-27 05:33:51'),
(2, 'Location', 'Plays a pivotal role in NBX Capital Investment\'s strategy, with a focus on identifying prime real estate opportunities in thriving markets with strong growth potential and favorable economic indicators. By carefully selecting locations with high demand and promising future prospects, we aim to maximize investment returns and create lasting value for our clients.', '884237.png', '1', '2023-12-04 16:02:09', '2024-09-27 05:34:04'),
(3, 'Infrastructure', 'Infrastructure is a cornerstone of NBX Capital Investment\'s approach, emphasizing the development and maintenance of essential facilities and services to support thriving communities and enhance property value. By investing in robust infrastructure projects, we contribute to sustainable growth and foster long-term prosperity in the regions where we operate.', '326972.png', '1', '2024-09-27 05:35:21', '2024-09-27 05:35:21'),
(4, 'Life Scenarios', 'Life scenarios are diverse and dynamic situations that individuals encounter, ranging from career changes and personal milestones to unexpected challenges and triumphs. By navigating these scenarios with resilience and adaptability, individuals can shape their own narratives and find fulfillment in the journey of life.', '467794.png', '1', '2024-09-27 05:35:45', '2024-09-27 05:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `landmark_section_seconds`
--

CREATE TABLE `landmark_section_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landmark_section_seconds`
--

INSERT INTO `landmark_section_seconds` (`id`, `heading`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Newell', '47 deals completed', '740985.png', '1', '2023-12-04 16:16:23', '2023-12-04 16:16:23'),
(2, 'Mir', '17 deals completed', '712728.png', '1', '2023-12-04 16:16:46', '2023-12-04 16:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `leads_contacts`
--

CREATE TABLE `leads_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads_contacts`
--

INSERT INTO `leads_contacts` (`id`, `name`, `email`, `number`, `service`, `zip_code`, `office`, `message`, `lead_type`, `created_at`, `updated_at`) VALUES
(1, 'Syed', 'syedsiraj5666@gmail.com', '21323', 'adbadb', '78500', 'saahscj', 'sahacasbhj', 'Property Listing', '2023-12-04 11:59:11', '2023-12-04 11:59:11'),
(2, 'Odette Henry', 'gikunysa@mailinator.com', '+1 (744) 309-2273', 'Aut consequatur Qui', '44183', 'Vero officiis enim t', 'Corporis recusandae', 'construction', '2023-12-04 12:08:02', '2023-12-04 12:08:02'),
(3, 'Erica Faulkner', 'wihy@mailinator.com', '+1 (137) 652-7507', 'Est est consectetur', '23663', 'Aliquam amet enim a', 'At consequatur veni', 'financing', '2023-12-04 12:14:13', '2023-12-04 12:14:13'),
(4, 'Brock Ryan', 'poty@mailinator.com', '+1 (315) 279-6742', 'Deleniti quis delect', '29708', 'Aut similique eum ea', 'At iusto eaque recus', 'home buying and selling', '2023-12-04 12:14:24', '2023-12-04 12:14:24'),
(5, 'Selma James', 'gosowyt@mailinator.com', '+1 (453) 884-5134', 'Laudantium laborum', '70437', 'Ea est fugiat commo', 'Neque nisi similique', 'home rehab', '2023-12-04 12:14:38', '2023-12-04 12:14:38'),
(6, 'Clio Fulton', 'cupezisi@mailinator.com', '+1 (744) 646-1553', 'Labore rerum et ex q', '79382', 'Dolor sed sed est re', 'Mollit laborum Sint', 'investment', '2023-12-04 12:14:51', '2023-12-04 12:14:51'),
(7, 'Stephanie Morton', 'buqavabaja@mailinator.com', '+1 (926) 397-3238', 'Consequat Sit quo v', '55974', 'Fuga Adipisicing ve', 'Dolore hic harum in', 'property management', '2023-12-04 12:15:06', '2023-12-04 12:15:06'),
(8, 'Josephine Fleming', 'gajiwyh@mailinator.com', '+1 (194) 142-2383', 'Quo enim velit excep', '64719', 'Nostrum voluptatem a', 'Quidem sit eaque max', 'contact us form', '2023-12-04 12:15:13', '2023-12-04 12:15:13'),
(9, 'Newell Broadway', 'brokerbroadway@gmail.com', '+1 (815) 325-2866', 'Wholesale', '75300', NULL, NULL, 'contact us form', '2023-12-05 13:12:22', '2023-12-05 13:12:22'),
(10, 'Tara Dickerson', 'sosyfuka@mailinator.com', '+1 (326) 343-3075', 'Quis molestiae atque', '76251', NULL, 'Dolore praesentium n', 'contact us form', '2023-12-31 03:09:15', '2023-12-31 03:09:15'),
(11, 'Demo Studnet2', 'EMAIL@GMAIL.COM', '1', 'fg', '74500', NULL, 'fdgdfg', 'contact us form', '2024-01-04 01:08:40', '2024-01-04 01:08:40'),
(12, 'arijit', 'sarijit129@gmail.com', '03462818090', 'stagimnh', '75050', NULL, NULL, 'contact us form', '2024-03-25 01:06:41', '2024-03-25 01:06:41');

-- --------------------------------------------------------

--
-- Table structure for table `lead_services`
--

CREATE TABLE `lead_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `leads_contact_id` int(11) NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lead_services`
--

INSERT INTO `lead_services` (`id`, `leads_contact_id`, `service`, `created_at`, `updated_at`) VALUES
(1, 1, 'Construction', '2023-12-04 11:59:11', '2023-12-04 11:59:11'),
(2, 2, 'Financing', '2023-12-04 12:08:02', '2023-12-04 12:08:02'),
(3, 2, 'Home Rehab', '2023-12-04 12:08:02', '2023-12-04 12:08:02'),
(4, 2, 'Investment', '2023-12-04 12:08:02', '2023-12-04 12:08:02'),
(5, 3, 'Construction', '2023-12-04 12:14:13', '2023-12-04 12:14:13'),
(6, 3, 'Financing', '2023-12-04 12:14:13', '2023-12-04 12:14:13'),
(7, 4, 'Buying and Selling', '2023-12-04 12:14:24', '2023-12-04 12:14:24'),
(8, 4, 'Investment', '2023-12-04 12:14:24', '2023-12-04 12:14:24'),
(9, 5, 'Construction', '2023-12-04 12:14:38', '2023-12-04 12:14:38'),
(10, 5, 'Home Rehab', '2023-12-04 12:14:38', '2023-12-04 12:14:38'),
(11, 5, 'Investment', '2023-12-04 12:14:38', '2023-12-04 12:14:38'),
(12, 5, 'Property Management', '2023-12-04 12:14:38', '2023-12-04 12:14:38'),
(13, 6, 'Construction', '2023-12-04 12:14:51', '2023-12-04 12:14:51'),
(14, 6, 'Financing', '2023-12-04 12:14:51', '2023-12-04 12:14:51'),
(15, 6, 'Home Rehab', '2023-12-04 12:14:51', '2023-12-04 12:14:51'),
(16, 6, 'Investment', '2023-12-04 12:14:51', '2023-12-04 12:14:51'),
(17, 7, 'Construction', '2023-12-04 12:15:06', '2023-12-04 12:15:06'),
(18, 7, 'Buying and Selling', '2023-12-04 12:15:06', '2023-12-04 12:15:06'),
(19, 7, 'Investment', '2023-12-04 12:15:06', '2023-12-04 12:15:06'),
(20, 8, 'Financing', '2023-12-04 12:15:13', '2023-12-04 12:15:13'),
(21, 8, 'Buying and Selling', '2023-12-04 12:15:13', '2023-12-04 12:15:13'),
(22, 8, 'Property Management', '2023-12-04 12:15:13', '2023-12-04 12:15:13'),
(23, 9, 'Construction', '2023-12-05 13:12:22', '2023-12-05 13:12:22'),
(24, 9, 'Buying and Selling', '2023-12-05 13:12:22', '2023-12-05 13:12:22'),
(25, 10, 'Financing', '2023-12-31 03:09:15', '2023-12-31 03:09:15'),
(26, 10, 'Home Rehab', '2023-12-31 03:09:15', '2023-12-31 03:09:15'),
(27, 10, 'Investment', '2023-12-31 03:09:15', '2023-12-31 03:09:15'),
(28, 11, 'Construction', '2024-01-04 01:08:40', '2024-01-04 01:08:40'),
(29, 12, 'Construction', '2024-03-25 01:06:41', '2024-03-25 01:06:41');

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
(5, '2023_11_26_190307_create_property_management_table', 2),
(6, '2023_11_27_074500_create_home_rehabs_table', 3),
(7, '2023_11_29_131252_create_properties_listings_table', 4),
(8, '2023_11_29_135447_create_properties_listing_values_table', 5),
(9, '2023_12_01_173510_create_c_m_s_table', 6),
(10, '2023_12_01_180654_create_footers_table', 7),
(11, '2023_12_01_190913_create_contact_us_table', 8),
(12, '2023_12_03_081517_create_leads_contacts_table', 9),
(13, '2023_12_03_081549_create_lead_services_table', 10),
(14, '2023_12_03_101603_create_case_studies_table', 11),
(15, '2023_12_03_104347_create_about_us_table', 12),
(16, '2023_12_03_105341_create_testimonials_table', 13),
(17, '2023_12_03_114518_create_advantages_table', 14),
(18, '2023_12_03_121939_create_services_table', 15),
(19, '2023_12_03_124535_create_landmark_section_firsts_table', 16),
(20, '2023_12_03_130453_create_landmark_section_seconds_table', 17),
(21, '2024_09_29_163220_create_service_constructions_table', 18),
(22, '2024_09_29_163240_create_service_construction_twos_table', 19);

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
-- Table structure for table `properties_listings`
--

CREATE TABLE `properties_listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero_heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` int(11) NOT NULL DEFAULT 0,
  `sequence` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optional_message_start` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optional_message_end` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties_listings`
--

INSERT INTO `properties_listings` (`id`, `hero_heading`, `featured`, `sequence`, `optional_message_start`, `optional_message_end`, `cover_image`, `url`, `created_at`, `updated_at`) VALUES
(1, '902 S 3rd Ave #A, Maywood, IL 60153', 1, '[\"asset\",\"devider\",\"asset\",\"devider\",\"devider\",\"asset\",\"devider\"]', 'To-Be Constructed. Unique opportunity to fully customize a luxury unit in historic Maywood.', 'DIRECT-VENT FIREPLACE, PRIVATE BALCONY, PRIVATE PATIO, BEAUTIFULLY RENEWED ORIGINAL EXTERIOR, OPEN FLOOR-PLAN, ADDITIONAL PARKING SPACE, COVERED PARKING', '577894.png', 'https://stagifi.com/nbxcapitalinvestment/property_listing/1', '2023-12-31 06:01:09', '2024-01-05 17:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `properties_listing_values`
--

CREATE TABLE `properties_listing_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `properties_listing_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties_listing_values`
--

INSERT INTO `properties_listing_values` (`id`, `properties_listing_id`, `heading`, `description`, `image`, `link`, `pdf`, `image_type`, `created_at`, `updated_at`) VALUES
(1, '1', 'https://www.nucupysakoze.me.uk', 'Ad mollitia illum a', '961906.jpg', NULL, NULL, 'image', '2023-12-31 06:01:09', '2024-01-05 05:39:58'),
(2, '1', 'https://www.hajevezodemu.ca', 'Consequatur neque no', '208485.png', 'https://chat.openai.com/', NULL, 'link', '2023-12-31 06:01:09', '2024-01-04 06:52:09'),
(3, '1', 'https://www.vugur.biz', 'Natus ipsum optio v', NULL, NULL, '657511.pdf', 'pdf', '2023-12-31 06:01:09', '2024-01-04 06:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `property_management`
--

CREATE TABLE `property_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `services` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_management`
--

INSERT INTO `property_management` (`id`, `heading`, `description`, `image`, `status`, `services`, `created_at`, `updated_at`) VALUES
(1, 'Property Management', 'NBX Property Management provides a full range of services to effectively manage your real estate investments, ensuring they are well-maintained and lucrative. Our knowledgeable property management team has extensive expertise managing a wide range of properties, including residential, commercial, and rental units.', '266696.jpg', '1', 'Property Management', '2023-11-28 09:42:54', '2024-01-01 07:36:43'),
(2, 'Knowledge of a Wide Range of Properties', 'Our knowledgeable property management team has extensive expertise managing a wide range of properties, including residential, commercial, and rental units.', '315171.jpg', '1', 'Property Management', '2023-11-29 19:05:01', '2024-01-01 07:23:51'),
(3, 'Complete Construction Solutions', 'NBX Capital offers a wide range of construction services, such as new home construction, renovation, and property rehabilitation. Our experience ranges from new building to revitalizing existing houses.', '899794.png', '1', 'Construction', '2023-12-02 19:50:45', '2023-12-02 19:50:45'),
(4, 'Customized Financial Services', 'NBX recognizes that each client\'s financial position and investing objectives are unique. We collaborate closely with clients to develop customized financial solutions that meet their individual needs and aspirations.', '480816.png', '1', 'Financing', '2023-12-02 19:52:51', '2023-12-02 19:52:51'),
(5, 'Expert Advice', 'Throughout the financing process, our team of financial specialists is there to provide guidance and support, ensuring you make informed decisions about your real estate investments.', '193131.png', '1', 'Financing', '2023-12-02 19:53:22', '2023-12-02 19:53:22'),
(6, '360° Real Estate Services', 'We manage the entire buying and selling of properties for you.  Welcome to NBX Capital, a one stop shop for a fruitful and hassle free experience in real estate buying and selling. Your true dependable partner for all of your house selling and buying needs. We specialize in creating captivating real estate listings, matching prospective buyers with available properties, and guiding you through the entire selling process. Our knowledgeable real estate specialists, excel at accurately evaluating your home, helping you get the greatest listing price possible. We use in-depth market analysis to strategically position your home, giving you an advantage in a competitive market. When the time comes to sell your home, you can count on us to make the process easy, profitable, and stress-free.', '621569.jpg', '1', 'Home Buying and Selling', '2023-12-02 19:54:05', '2023-12-31 05:41:29'),
(7, 'Customer Satisfaction', 'We do realize how cumbersome selling a house can be. It is not only a financial struggle but an emotional upheaval as well. At NBX Capital, we are determined to serve you with the home buying and selling expertise. Our expert team of licensed professionals help you along the way, up to your complete satisfaction, ensuring smart and time and cost saving processes to help you achieve your needs.', '711256.jpg', '1', 'Home Buying and Selling', '2023-12-02 19:54:27', '2023-12-31 05:40:21'),
(8, 'Property Acquisition and Selection', 'The rigorous selection of properties with the potential for restoration and flipping is the first step in the process. Location, market trends, and budget considerations all play a role in the selection of properties.', '542544.jpg', '1', 'Home Rehab', '2023-12-02 19:54:59', '2024-01-02 03:19:00'),
(9, 'Acquisition', 'A property is purchased when it has been chosen and judged suitable.', '122244.jpg', '1', 'Home Rehab', '2023-12-02 19:55:27', '2024-01-02 03:20:29'),
(10, 'Investments', 'NBX Capital Investments, without a doubt, specializes in acquiring properties for Airbnb purposes. We assist clients in identifying, purchasing, renovating, and managing properties specifically designed for short-term rentals on platforms such as Airbnb. Because of our expertise in this particular market, we can provide a complete solution for individuals wishing to invest in and profit from the rising short-term rental industry. NBX Capital Investments will help you acquire and optimize properties for optimal rental income and guest happiness, whether you\'re looking to enter the Airbnb market or increase your existing portfolio.', '785143.png', '1', 'Investment', '2023-12-02 19:55:59', '2023-12-02 19:55:59'),
(11, 'Highly Resourceful Team', 'Our building team is made up of both internal employees and third-party associations.  To provide complete, high-quality services, in-house experts, licensed contractors, architects, and interior designers work together.  We ensure that your project get the greatest talent available by collaborating with specialists in their respective industries.', '788653.jpg', '1', 'Construction', '2023-12-31 05:02:45', '2023-12-31 05:07:52'),
(12, 'Customer Satisfaction', 'Our main goal is your satisfaction, and we are dedicated to providing construction services that not only meet, but also surpass your expectations.  NBX Capital\'s construction services take a comprehensive approach, producing remarkable outcomes through a skilled staff, high-quality materials, and bespoke solutions that truly bring your vision to life.', '444994.jpg', '1', 'Construction', '2023-12-31 05:03:11', '2023-12-31 05:11:29'),
(13, 'Best Construction Materials', 'At NBX Capital, we prioritize the use of high-quality construction materials. We recognize that the materials utilized are the cornerstone of any successful building project.  To improve the overall quality and lifespan of your project, we prioritize the selection of durable, sustainable, and visually beautiful materials.  NBX Capital has created solid ties with leading suppliers, including industry heavyweights like Home Depot, to ensure that we have access to the best supplies available. This allows us to obtain the best materials for your building projects, ensuring that every aspect is perfect.', '941591.jpg', '1', 'Construction', '2023-12-31 05:03:37', '2023-12-31 05:17:31'),
(14, 'Hard Money Loans', 'We recommend Hard Money Financing or bridge loans to purchasers looking to finance properties with potential.  Many promising assets are in crisis and are therefore ineligible for typical long-term finance. A short-term hard money loan provides the flexibility required to buy, repair, and sell a property in a few of months.  Borrowers might use hard money loans to access the expected value of the rehabilitated property rather than the appraised present value. This enables required repairs and renovations to be funded.', '152420.jpg', '1', 'Financing', '2023-12-31 05:20:23', '2023-12-31 05:24:24'),
(15, 'Self-Financing', 'For consumers who wish to invest with their own money, NBX provides self-financing possibilities.  Self-financing allows you to manage your financial resources as you see fit in real estate ventures, giving you more flexibility and independence.', '727010.jpg', '1', 'Financing', '2023-12-31 05:20:41', '2023-12-31 05:26:15'),
(16, 'Credit Facility', 'NBX offers a line of credit, providing clients with a flexible financial alternative. As needed, this revolving credit line can be utilized to fund property purchases, repairs, or other real estate projects.  The line of credit provides flexibility by guaranteeing that you have access to capital when market opportunities occur.', '816512.jpg', '1', 'Financing', '2023-12-31 05:21:20', '2023-12-31 05:28:18'),
(17, 'Market Analysis', 'Our team conducts thorough market analysis, providing valuable insights to assist you in making informed investment decisions.', '635378.jpg', '1', 'Wholesale', '2023-12-31 22:15:03', '2024-01-02 03:27:13'),
(18, 'Negotiation and Acquisition', 'Leveraging our industry expertise, we negotiate favorable terms and facilitate the acquisition of properties at below-market rates.', '527055.jpg', '0', 'Wholesale', '2023-12-31 22:15:46', '2024-01-02 03:30:35'),
(20, 'Due Diligence', 'To examine the property\'s condition, legal status, and market value, extensive investigation and due diligence are performed. This stage entails property inspections, title searches, and market research.', '803180.jpg', '1', 'Home Rehab', '2024-01-01 05:11:58', '2024-01-02 03:05:47'),
(21, 'Renovation and Rehabilitation', 'Our well rounded team of experts, including contractors, architects, and interior designers, collaborates to plan and carry out the renovation of the house. This phase consists of structural repairs, cosmetic renovations, and modifications designed to raise the property\'s appeal and value.', '905471.jpg', '1', 'Home Rehab', '2024-01-01 05:14:49', '2024-01-02 03:08:22'),
(22, 'Budget Administration', 'Careful financial planning and budgeting are required to keep the restoration process on track and under budget.', '775919.jpg', '1', 'Home Rehab', '2024-01-01 05:15:04', '2024-01-02 03:08:57'),
(23, 'Staging and Interior Design', 'Professionally designed and arranged properties maximize their appeal to potential buyers or tenants.', '127307.jpg', '1', 'Home Rehab', '2024-01-01 05:15:20', '2024-01-02 03:09:08'),
(24, 'Sales and Marketing', 'To attract potential purchasers or tenants, comprehensive marketing methods are used. Sales are handled efficiently and professionally, with an emphasis on maximizing profits.', '981107.jpg', '1', 'Home Rehab', '2024-01-01 05:15:40', '2024-01-02 03:09:20'),
(25, 'Property Management (If Using Airbnb)', 'The company maintains the listings, bookings, and property maintenance for properties selected for Airbnb investment.', '553905.jpg', '1', 'Home Rehab', '2024-01-01 05:16:01', '2024-01-02 03:09:48'),
(26, 'Financing Options', 'To help with the rehabilitation process, NBX provides flexible financing choices such as Hard Money Financing, Self-Financing, and Line of Credit.', '525895.jpg', '1', 'Home Rehab', '2024-01-01 05:16:17', '2024-01-02 03:16:54'),
(27, 'Monitoring and Reporting', 'NBX Capital delivers regular updates and reports to clients throughout the process, providing transparency and clear communication.', '747911.jpg', '1', 'Home Rehab', '2024-01-01 05:16:33', '2024-01-02 03:10:18'),
(28, 'Exit Strategy', 'The company creates exit strategies, such as selling the property for a profit, holding it for rental revenue, or other financial methods.', '698141.jpg', '1', 'Home Rehab', '2024-01-01 05:16:49', '2024-01-02 03:10:28'),
(29, 'Market Analysis Continued', 'Market study is continual in order to adapt to changing real estate trends and ensure the profitability of the company\'s investments.', '894463.jpg', '1', 'Home Rehab', '2024-01-01 05:17:03', '2024-01-02 03:13:30'),
(30, 'Customer and Community Satisfaction', 'The ultimate goal is not simply financial success, but also client happiness and positively impacting the communities in which properties are located.', '631151.jpg', '1', 'Home Rehab', '2024-01-01 05:17:19', '2024-01-02 03:11:50'),
(31, 'Acquisition and Management of Tenants', 'We know tenant acquisition well, conducting extensive tenant screening processes to assure dependable and responsible tenants for your properties. We handle tenant interactions, lease negotiations, and day-to-day management, enabling you to relax and enjoy this journey.', '724674.jpg', '1', 'Property Management', '2024-01-01 05:30:51', '2024-01-01 07:25:18'),
(32, 'Upkeep and repairs', 'NBX Property Management handles all maintenance and repair needs, resolving issues quickly and keeping your properties in peak shape. Property inspections are performed on a regular basis to identify and remedy maintenance issues.', '687778.jpg', '1', 'Property Management', '2024-01-01 05:31:26', '2024-01-01 07:25:36'),
(33, 'Financial and Lease Management', 'We manage lease agreements, rent collection, and the financial aspects of property ownership, providing property owners with clear accounting and reporting.', '752850.jpg', '1', 'Property Management', '2024-01-01 05:31:42', '2024-01-01 07:25:55'),
(34, 'Property Maintenance and Improvements', 'We create strategic recommendations for property renovations and manage remodeling projects to increase property value and tenant appeal.', '665362.jpg', '1', 'Property Management', '2024-01-01 05:40:38', '2024-01-01 07:26:12'),
(35, 'Legal Obligation', 'Our team maintains current on local and national rental legislation, assuring complete legal compliance and protecting property owners from potential legal difficulties.', '527696.jpg', '1', 'Property Management', '2024-01-01 05:41:04', '2024-01-01 07:38:41'),
(36, 'Cost-effective Solutions', 'NBX Property Management works hard to reduce operational costs so that property owners can maximize their ROI without sacrificing property quality.', '637452.jpg', '1', 'Property Management', '2024-01-01 05:41:38', '2024-01-01 07:26:53'),
(37, 'Around-the-clock Emergency Response', 'We provide 24-hour emergency response to address unanticipated property issues and assure tenant safety and satisfaction.', '129779.jpg', '1', 'Property Management', '2024-01-01 05:42:08', '2024-01-01 07:27:08'),
(38, 'Client-Centered Approach', 'Our strategy is centered on client happiness. We personalize our services to your specific needs and goals, building a collaborative and trusted partnership.', '508425.jpg', '1', 'Property Management', '2024-01-01 05:42:36', '2024-01-01 07:27:25'),
(39, 'Integration of Technology', 'We use cutting-edge property management tools, such as software for online rent payments, maintenance requests, and financial reporting, to streamline the management process for both properties owners and tenants.', '820591.jpg', '1', 'Property Management', '2024-01-01 05:43:00', '2024-01-01 07:27:40'),
(40, 'Communication Transparency', 'NBX Property Management encourages open and honest contact with its clients, offering regular updates and reports on the status of their assets. NBX Property Management Service is dedicated to providing efficient, cost-effective, and worry-free property management solutions that ensure your real estate investments are well-cared for and continuously produce good outcomes.', '521610.jpg', '1', 'Property Management', '2024-01-01 05:43:42', '2024-01-01 07:28:00'),
(41, 'Property Sourcing', 'We diligently scout and assess properties with high potential for profitability, ensuring they meet your investment criteria.', '481048.jpg', '0', 'Construction', '2024-01-01 05:55:24', '2024-01-02 03:31:25'),
(42, 'Market Analysis', 'Our team conducts thorough market analysis, providing valuable insights to assist you in making informed investment decisions.', '914893.jpg', '0', 'Construction', '2024-01-01 05:55:41', '2024-01-02 03:31:02'),
(43, 'Negotiation and Acquisition', 'Leveraging our industry expertise, we negotiate favorable terms and facilitate the acquisition of properties at below-market rates.', '278196.jpg', '1', 'Wholesale', '2024-01-01 05:55:58', '2024-01-02 03:30:00'),
(44, 'Assignment and Support', 'Once a property is secured, we assist in assigning the contract to the buyer, ensuring a seamless transaction process.', '683368.jpg', '0', 'Construction', '2024-01-01 05:56:13', '2024-01-02 03:31:40'),
(45, 'Consultation and Guidance', 'We offer professional guidance and consultation throughout the wholesale process, ensuring you\'re equipped with the knowledge to make sound investment choices.', '819223.jpg', '0', 'Construction', '2024-01-01 05:56:31', '2024-01-02 03:31:50'),
(47, 'Property Sourcing', 'We diligently scout and assess properties with high potential for profitability, ensuring they meet your investment criteria.', '465545.jpg', '1', 'Wholesale', '2024-01-01 14:10:07', '2024-01-02 03:26:20'),
(48, 'Assignment and Support', 'Once a property is secured, we assist in assigning the contract to the buyer, ensuring a seamless transaction process.', '112671.jpg', '1', 'Wholesale', '2024-01-02 03:28:37', '2024-01-02 03:28:37'),
(49, 'Consultation and Guidance', 'We offer professional guidance and consultation throughout the wholesale process, ensuring you\'re equipped with the knowledge to make sound investment choices.', '842105.jpg', '1', 'Wholesale', '2024-01-02 03:28:58', '2024-01-02 03:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urls` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `heading_slug`, `heading`, `description`, `image`, `urls`, `editor1`, `editor2`, `editor3`, `created_at`, `updated_at`) VALUES
(1, NULL, 'ss', 'ss', NULL, NULL, NULL, NULL, NULL, '2024-09-29 11:50:44', '2024-09-29 11:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `service_constructions`
--

CREATE TABLE `service_constructions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_constructions`
--

INSERT INTO `service_constructions` (`id`, `service_id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'ss', 'images/ZXR9QH6H8ZxUSVtaaakd3Rc2icWcbTezfI1x3GtV.png', 'sss', '2024-09-29 11:50:44', '2024-09-29 11:50:44');

-- --------------------------------------------------------

--
-- Table structure for table `service_construction_twos`
--

CREATE TABLE `service_construction_twos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_construction_twos`
--

INSERT INTO `service_construction_twos` (`id`, `service_id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, '1', 'ss', 'images/dLGT3aYY1L6Fp8lFKvv53Rn6wsOBd3ZaWZV5AlKw.mkv', 'sss', '2024-09-29 11:50:45', '2024-09-29 11:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `heading`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sofia Ferriño', 'Newell and Talanda were great throughout the whole process and extra patient with my thousand questions haha they made the process smooth and easy to understand for us, new home owners. Thank you so much!! 10/10', '1', '279050.png', '2023-12-04 14:09:02', '2024-01-04 02:48:49'),
(2, 'Talanda Herron', 'Newell is fantastic to work with. Very knowledgable, patient, and available to answer my questions at all times. His process has makes things simple and stress-free. I strongly advise you to engage with him on your next real estate purchase', '1', '334046.png', '2023-12-04 17:36:26', '2024-01-04 02:16:50'),
(3, 'Areal Mckay', 'Newell did an amazing job ensuring that I closed on my property. He is very knowledgeable and always willing to help. Very communicative and has the right connections.', '1', '855274.png', '2024-01-04 02:09:12', '2024-01-04 02:09:20'),
(4, 'Genie Monegan', 'Very pleased, Newell tackled issues and challenges with a positive, can-do attitude.  Looking forward to working with Newell again in the future!! Best regards,', '1', '406237.png', '2024-01-04 02:10:05', '2024-01-04 02:10:05'),
(5, 'DollarsignDzTv', 'Newel is the best realtor I worked with so far.. I’ve worked with many realtors before and they just don’t understand real estate and investing the way he does. Definitely investor friendly..', '1', '694386.png', '2024-01-04 02:10:45', '2024-01-04 02:10:45'),
(6, 'Bobby Williams', 'Buying a home for the first time can be complicated and difficult. Newell made the process seamless and was responsive to my wife and I needs every step of the way. We were discouraged when we got outbid on our first house, but within a day he had other options that ultimately led us to the perfect home. I would definitely use his services again.', '1', '449445.png', '2024-01-04 02:11:31', '2024-01-04 02:11:31'),
(7, 'Jasmine Scott', 'I was very impressed at the fact that he had a seller for my property within a less than a week of me hiring him.  I would definitely recommend doing busy with Newell, he’s quick, responsive, and definitely keeps you in the loop during the process.', '1', '971941.png', '2024-01-04 02:12:10', '2024-01-04 02:12:10'),
(8, 'Dedric Moore', 'Very knowledgeable realtor. I\'m a professional in the field and it was an educational experience working with Newell', '1', '878162.png', '2024-01-04 02:12:43', '2024-01-04 02:12:43'),
(9, 'Melissa Jolly', 'Newell is on top of things and ensures that timely action and resolution are a priority. Great realtor! Highly recommend!', '1', '530744.png', '2024-01-04 02:13:07', '2024-01-04 02:13:07'),
(10, 'Timothy Buck', 'Newell is a very good person to work with on finding a home and anything else I need the future, I will go with him.', '1', '562775.png', '2024-01-04 02:13:44', '2024-01-04 02:13:44'),
(11, 'Josh Freemon', 'Couldn\'t ask for a better experience. They were very knowledgeable and made sure I was taken care of ever step of the way.', '1', '132784.png', '2024-01-04 02:14:12', '2024-01-04 02:14:12'),
(12, 'Destini Wade', 'Help assist me get my first investment flip... I’ll forever be thankful!!!', '1', '558329.png', '2024-01-04 02:14:35', '2024-01-04 02:14:35'),
(13, 'Victoria LP Presents', 'Broker Broadway went above and beyond my expectations. Thank you!!!', '1', '155979.png', '2024-01-04 02:15:12', '2024-01-04 02:15:12'),
(14, 'Cyna Sawyer', 'Very helpful and a pleasure to work with', '1', '394215.png', '2024-01-04 02:15:37', '2024-01-04 02:15:37'),
(15, 'Tung Le', 'Very professional', '1', '154611.png', '2024-01-04 02:16:00', '2024-01-04 02:16:00');

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
(1, 'Admin', 'admin@nbx.com', NULL, '$2y$10$72pVrnH58hJQiDr/YLdGo.Cgk0H240cWMqO9nYovq8igzXWdRXS9S', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_studies`
--
ALTER TABLE `case_studies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_m_s`
--
ALTER TABLE `c_m_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_rehabs`
--
ALTER TABLE `home_rehabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landmark_section_firsts`
--
ALTER TABLE `landmark_section_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landmark_section_seconds`
--
ALTER TABLE `landmark_section_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads_contacts`
--
ALTER TABLE `leads_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead_services`
--
ALTER TABLE `lead_services`
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
-- Indexes for table `properties_listings`
--
ALTER TABLE `properties_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties_listing_values`
--
ALTER TABLE `properties_listing_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_management`
--
ALTER TABLE `property_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_constructions`
--
ALTER TABLE `service_constructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_construction_twos`
--
ALTER TABLE `service_construction_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `case_studies`
--
ALTER TABLE `case_studies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_m_s`
--
ALTER TABLE `c_m_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_rehabs`
--
ALTER TABLE `home_rehabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `landmark_section_firsts`
--
ALTER TABLE `landmark_section_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `landmark_section_seconds`
--
ALTER TABLE `landmark_section_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leads_contacts`
--
ALTER TABLE `leads_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lead_services`
--
ALTER TABLE `lead_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties_listings`
--
ALTER TABLE `properties_listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties_listing_values`
--
ALTER TABLE `properties_listing_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_management`
--
ALTER TABLE `property_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_constructions`
--
ALTER TABLE `service_constructions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_construction_twos`
--
ALTER TABLE `service_construction_twos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
