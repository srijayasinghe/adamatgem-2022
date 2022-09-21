-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 07:12 PM
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
-- Database: `adamantg_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(11) NOT NULL,
  `Available_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `Available_name`, `created_at`, `updated_at`) VALUES
(1, 'Available Gems', '2021-11-26 01:42:32', '2021-11-26 01:42:32'),
(2, 'Recently Sold', '2021-11-26 01:42:44', '2021-11-26 01:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `description_value` tinyint(1) DEFAULT 0,
  `name_value` tinyint(1) DEFAULT 0,
  `id` int(11) NOT NULL,
  `category_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`description_value`, `name_value`, `id`, `category_name`, `category_description`, `category_image`, `created_at`, `updated_at`) VALUES
(NULL, NULL, 1, 'Sapphire', 'Fine natural sapphires.', 'images/category-images/1725016765563576.jpg', '2021-11-26 01:28:51', '2022-08-01 16:19:03'),
(0, 0, 2, 'Spinel', 'Fine natural spinels.', 'images/category-images/1725016718142381.jpg', '2021-11-26 01:29:23', '2022-03-27 13:53:38'),
(1, 1, 3, 'Chrysoberyl', 'Fine natural chrysoberyls.', 'images/category-images/1732365344943880.jpg', '2021-11-26 01:29:37', '2022-05-09 21:05:36'),
(1, 1, 5, 'Garnet', 'Fine natural garnets.', 'images/category-images/1733351551119803.jpg', '2021-11-26 01:30:05', '2022-05-20 18:20:55'),
(NULL, NULL, 6, 'Other Varieties', 'Zircon, tourmaline, aquamarine, zoisite, and other fine natural gems.', 'images/category-images/1725016432460872.jpg', '2021-12-20 01:35:08', '2022-04-27 11:19:16'),
(NULL, NULL, 7, 'Add-ons', 'Stones purchasable only in combination with another stone from the main categories.', 'images/category-images/1725016475367578.jpg', '2021-11-26 01:30:22', '2022-08-01 16:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `clarity`
--

CREATE TABLE `clarity` (
  `id` int(11) NOT NULL,
  `clarity_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clarity_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clarity`
--

INSERT INTO `clarity` (`id`, `clarity_name`, `clarity_description`, `created_at`, `updated_at`) VALUES
(9, 'Opaque', 'Opaque', '2022-03-27 17:05:51', '2022-03-27 17:05:51'),
(10, 'Translucent', 'Translucent', '2022-03-27 17:06:05', '2022-03-27 17:06:05'),
(11, 'Included', 'Included', '2022-03-27 17:06:41', '2022-03-27 17:06:41'),
(12, 'Slightly Included', 'Slightly included', '2022-03-27 17:07:03', '2022-03-27 17:08:23'),
(13, 'Very Slightly Included', 'Very slightly included', '2022-03-27 17:07:18', '2022-03-27 17:08:34'),
(15, 'Very Very Slightly Included', 'Very, very slightly included', '2022-03-27 17:09:04', '2022-03-27 17:09:04'),
(16, 'Eye Clean', 'Eye clean', '2022-03-27 17:09:24', '2022-03-27 17:09:24'),
(17, 'Loupe Clean', 'Loupe clean', '2022-03-27 17:09:40', '2022-03-27 17:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `color_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_code` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `color_name`, `color_code`, `color_description`, `created_at`, `updated_at`) VALUES
(27, 'Black', '#000000', 'Black', '2022-03-27 16:05:01', '2022-03-27 16:05:01'),
(30, 'Grey', '#808080', 'Grey', '2022-03-27 16:06:36', '2022-03-27 16:06:36'),
(31, 'Brown', '#8b4513', 'Brown', '2022-03-27 16:08:18', '2022-03-27 16:08:18'),
(32, 'Violet', '#bb9ff1', 'Violet', '2022-03-27 16:10:37', '2022-03-27 16:17:38'),
(33, 'Purple', '#6d00c1', 'Purple', '2022-03-27 16:13:03', '2022-03-27 16:13:03'),
(34, 'Teal', '#008080', 'Teal', '2022-03-27 16:14:48', '2022-03-27 16:14:48'),
(35, 'Green', '#008000', 'Green', '2022-03-27 16:16:08', '2022-03-27 16:16:08'),
(38, 'Chartreuse', '#dfff00', 'Chartreuse', '2022-03-27 16:21:57', '2022-03-27 16:21:57'),
(39, 'Peach', '#f7a38f', 'Peach', '2022-03-27 16:22:15', '2022-03-27 16:22:15'),
(40, 'Orange', '#ff7518', 'Orange', '2022-03-27 16:22:38', '2022-03-27 16:22:38'),
(41, 'Red', '#e00f0f', 'Red', '2022-03-27 16:23:51', '2022-03-27 16:23:51'),
(42, 'Pink', '#ff3f84', 'Pink', '2022-03-27 16:25:09', '2022-03-27 16:25:09'),
(43, 'Yellow', 'rgba(255,251,0,1)', 'Yellow', '2022-03-27 16:26:05', '2022-05-09 14:51:46'),
(44, 'Blue', 'rgba(4,51,255,0.9)', 'Blue', '2022-03-27 16:27:32', '2022-05-09 14:51:03'),
(45, 'Bi-color', 'linear-gradient(90deg, #FFFB00 0%, #0433FF 99%)', 'Bi-color', '2022-04-27 07:26:56', '2022-05-09 14:56:31'),
(46, 'White', 'radial-gradient(ellipse, rgba(255,255,255,0.4) 63%, #000000 100%)', 'White', '2022-05-19 13:27:52', '2022-06-02 13:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `conatct_header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conatct_header_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conatct_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conatct_number_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conatct_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conatct_email_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conatct_insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conatct_insta_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conatct_register_office` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conatct_register_adress1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conatct_register_adress2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conatct_register_adress3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conatct_ourlist` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conatct_ourlist_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `conatct_header`, `conatct_header_text`, `conatct_number`, `conatct_number_image`, `conatct_email`, `conatct_email_image`, `conatct_insta`, `conatct_insta_image`, `conatct_register_office`, `conatct_register_adress1`, `conatct_register_adress2`, `conatct_register_adress3`, `conatct_ourlist`, `conatct_ourlist_text`, `created_at`, `updated_at`) VALUES
(1, 'Talk to us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam purus, tempus quis mollis vitae, gravida eu nulla.', '+94 77 986 8202', 'images/contacts/1717456145186917.png', 'adamant.international@gmail.com', 'images/contacts/1717456145190345.jpg', 'instagram.com/adamant.gems', 'images/contacts/1717456145192950.jpg', 'Registered office', 'Adamant International Ltd.', '81 Ward Place 3/2, Colombo 7,', 'Sri Lanka.', 'Get on our list.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam purus, tempus quis mollis vitae, gravida eu nulla.', '2021-11-25 21:00:15', '2022-05-31 15:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `enhancements`
--

CREATE TABLE `enhancements` (
  `id` int(11) NOT NULL,
  `enhancement_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enhancement_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enhancements`
--

INSERT INTO `enhancements` (`id`, `enhancement_name`, `enhancement_description`, `created_at`, `updated_at`) VALUES
(1, 'Standard heat only', 'Standard heated', '2021-11-26 01:48:41', '2022-05-09 14:59:34'),
(2, 'None', 'Unheated & untreated', '2021-11-26 01:48:50', '2022-05-09 14:59:11');

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `faq_category_id` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_question` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `faq_category_id`, `faq_question`, `faq_answer`, `created_at`, `updated_at`) VALUES
(10, '1', 'What are my shipping options?', '<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Shipping options vary slightly by country/geographical region, due to a few international postal limitations which have sprung up post-COVID.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">We usually send exports by EMS, which is the default cost-effective and safe&nbsp;delivery method offered to gemstone exporters by the Sri Lankan government body in charge of gemstone and jewelry exports (the National Gem and&nbsp;Jewellery&nbsp;Authority).</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">EMS, or Express Mail Service, is a co-op service formed by the global&nbsp;Universal Postal Union which gets handled by the domestic post of each&nbsp;participating country. The parcels are tracked, fully insured and need to be&nbsp;signed for on delivery.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">EMS shipping between Sri Lanka and the United States was suspended in 2020 due to delays owing to disruptions in global logistics, and the service hasn\'t resumed as of 2022. All of our U.S.-bound parcels go through registered and fully insured air mail.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">We&rsquo;ve never had a parcel go missing but if greater security is required,&nbsp;FedEx, Brinks, Malca Amit and G4S are all options too. Please note that these&nbsp;come at an additional cost, as charged by the respective companies themselves.</p>', '2022-05-30 18:11:31', '2022-05-30 18:13:51'),
(11, '1', 'What are the estimated delivery times?', '<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">From experience, EMS and air mail usually take:</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\"><strong>North America</strong></p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">7-14 working days for EMS, 14-21 working days for air mail</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\"><strong>Europe</strong></p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">5-7 working days for EMS, 14 working days for air mail</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\"><strong>Australia</strong></p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">5-10 working days for EMS, 14-18 working days for air mail</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\"><strong>South America</strong></p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">7-10 working days for EMS, 14-21 working days for air mail</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\"><strong>Asia</strong></p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">2-7 working days for EMS, 7-14 working days for air mail</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\"><strong>Africa</strong></p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">8-10 working days for EMS, 14-21 working days for air mail</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">...Not sure about Antarctica, but we&rsquo;ll ask the penguins.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">FedEx and other courier options usually deliver within 3-4 days worldwide.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">In any case, we will update you with a tracking number, detailed&nbsp;documentation and an ETA once your order is sealed for export with the local&nbsp;customs and is on its way to the airport.</p>', '2022-05-30 18:29:19', '2022-05-30 18:29:56'),
(12, '1', 'Customs and import?', '<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">While we cannot influence customs duties payable on delivery to various countries, it should be fairly easy to find these out beforehand: a call to your national Customs hotline should put you on the right track.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">With that said, we\'d be happy to assist you in finding this out, so for more info please just contact us about it.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Loose gemstone shipments regardless of value are normally free of import fees&nbsp;and taxes in the U.S., Israel and Malaysia; while buyers in Hong Kong only pay a&nbsp;0.35% government fee on loose gemstones.</p>', '2022-05-30 18:31:59', '2022-05-30 18:31:59'),
(13, '3', 'How do the colors in your images relate to the actual colors of the gems in real life?', '<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">All of our images are extensively, carefully and thoroughly edited and&nbsp;color-matched to reflect how our gems look in diffused daylight outdoors, which is considered the default grading standard for colored gems by the global gem trade. We do this by editing them with the stone and the&nbsp;monitor side by side in ambient daylight.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">This long and very meticulous process is an absolute necessity, as anyone who has ever had the chance to photograph&nbsp;gemstones with high accuracy in mind can attest to. It&rsquo;s all the same whether you use&nbsp;a smartphone, a $5-10k Canon or Nikon or a $50k Hasselblad, no modern camera system will capture a gemstone&rsquo;s color accurately at all times&nbsp;(or even most of the time for that matter). &ldquo;No editing&rdquo; simply means &ldquo;no consistent accuracy&rdquo;.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">The colors in our photos are purposely made to be as&nbsp;close as they get to reality when viewed on an average modern monitor with a generic (s)RGB&nbsp;display calibration profile.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">This includes most mobile devices but please&nbsp;always check the images on a desktop/laptop to be sure, since many mobile devices&nbsp;have a tendency to oversaturate colors.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">If you&rsquo;d like more info on this, or want to ensure you&rsquo;re seeing what we&rsquo;re seeing, please drop us a mail.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">One other thing to note is that no gem looks exactly the same at two different&nbsp;geographical latitudes on Earth. Anecdotally, we&rsquo;ve noticed our stones looking&nbsp;&lsquo;sharper&rsquo; and crisper in more northerly latitudes for example than they do&nbsp;around the equator &ndash; and how gems look varies with the viewing environment,&nbsp;light, time of day, atmospheric conditions (even pollution) and so on. The same&nbsp;stone can appear slightly different on different days even in the same location,&nbsp;but these are mostly minor changes that are stated more as a pro forma fact than&nbsp;because they\'d make any significant practical difference.</p>\r\n<p style=\"padding: 0px; margin: 0px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">We usually edit to reflect an &lsquo;average&rsquo; of a gem&rsquo;s possible looks &ndash; they are&nbsp;never ever edited to show their absolute best, but neither are they at their&nbsp;worst.</p>\r\n<p style=\"padding: 0px; margin: 0px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">&nbsp;</p>\r\n<p style=\"padding: 0px; margin: 0px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">The idea is to replicate &lsquo;usual&rsquo; diffused daylight conditions outdoors but you can request additional media showing fluorescent, incandescent, indoors,&nbsp;outdoors, and just about any other lighting scenario you\'d like. Just drop us a mail and we&rsquo;ll get back to you showing the stone in whichever light setting you&rsquo;d like.</p>', '2022-05-30 18:38:48', '2022-05-30 18:41:28'),
(14, '9', 'Which forms of payment do you accept?', '<p>We currently accept wire/bank transfers and PayPal.</p>\r\n<p>We\'re also happy to accept cryptocurrency, but this option may not apply to all stones so if you\'re wondering whether it applies to a stone you\'re interested in, please feel free to e-mail us and we\'ll be happy to expand on that.</p>', '2022-05-30 18:46:08', '2022-05-30 18:49:23'),
(15, '9', 'A note on high value stones', '<p>Please note that certain high value stones will only be payable via direct bank transfer or crypto to ensure maximum security on our end and protect ourselves from chargeback fraud, as well as to avoid the exorbitantly high PayPal fees which usually accompany high value transfers.&nbsp;</p>\r\n<p>If your purchase falls under this category, we will definitely let you know beforehand.</p>', '2022-05-30 18:52:02', '2022-05-30 18:52:44'),
(16, '10', 'General Info', '<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Simply put, we want happy deals.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">We&rsquo;re not here to take your money and pass you inferior stones as something worth wasting your time, effort and resources on. We don&rsquo;t consider them worth ours, and we don\'t think they\'re worth yours either.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">We work closely with everyone who orders from us so there\'s no strict &lsquo;return policy&rsquo; as such &ndash; it&rsquo;s more of a relaxed ongoing conversation. We want people to be completely satisfied with their new stones and to that end we spend and inordinate amount of time making sure they are accurately represented in all of our photos, videos and descriptions.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">So once you receive your stones, check them freely and decide whether you&rsquo;re happy to keep them.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">And remember we&rsquo;re here to answer your questions and provide as much additional info and media as necessary before shipment to help you make the right decisions to begin with. Loads of questions are totally expected, so there\'s really no need to be shy &ndash; these are gems, not groceries, and it&rsquo;s completely understood they&rsquo;re difficult to buy online.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">It doesn&rsquo;t matter if you need a week and a&nbsp;hundred additional questions, photos and videos to decide &ndash; the idea is to make well-informed purchases and only be pleasantly surprised (or not surprised at&nbsp;all) whenever you receive the stones.</p>', '2022-05-30 19:01:01', '2022-05-30 19:01:01'),
(17, '10', 'What’s your return policy for loose gemstones?', '<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">If for some reason you aren&rsquo;t happy with the stones, you are of course free and welcome to return them. Nothing is ever considered &ldquo;sold&rdquo; until we hear back from you after you&rsquo;ve seen the stones in person.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">We don&rsquo;t charge restocking fees, but refunds do come minus the shipping, insurance and transfer costs that we actually had to pay to send the stones your way.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">As well as cost reimbursement, this is also in place to prevent disingenuous orders &ndash; we&nbsp;don&rsquo;t want to encourage people to order several stones knowing they&rsquo;ll be returning half of them and incurring import costs for us, or order and keep them for a week, then return them.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Export of gemstones out of Sri Lanka is a long and complicated process full of red tape, government oversight and hoops to jump through. We put a lot of work into&nbsp;seeing every minute of it through perfectly so please only order if you actually want the stone, or if you wish to consider it and&nbsp;need to see it in person to decide (which is completely understandable and justified).</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">We don&rsquo;t charge import fees to receive stones back, although returning parcels do in fact incur import taxes on our end (as strange as it is, return taxes are still charged for the same&nbsp;stones that were just exported and paid export fees for).</p>', '2022-05-30 19:08:03', '2022-05-30 19:08:03'),
(18, '10', 'What’s your policy on returns of custom ordered gemstones (“gem hunts”)?', '<p>Finding the exact gemstones you&rsquo;re looking for takes a lot of time, effort and resources and return conditions for those are usually always agreed on in advance.</p>\r\n<p>They&rsquo;re settled on an individual basis, in agreement between you and us.</p>\r\n<p>Generally speaking, returns for these are discouraged if we buy a stone on your behalf that we otherwise wouldn&rsquo;t want to consider keeping in stock ourselves. On the other hand, there are also sometimes stones that we wouldn&rsquo;t mind taking back even if we didn&rsquo;t buy them intending to keep. It&rsquo;s always open for discussion and can be agreed upon as required.</p>', '2022-05-30 19:09:17', '2022-05-30 19:09:17'),
(19, '10', 'What if my lab says differently from yours?', '<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Every country/continent has their own preferred gem labs. Lab marketing,&nbsp;terminology differences and method differences all account for this. And that&rsquo;s&nbsp;just as well.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">We know our sources very well, and we stand behind our identification of treatments without reservation. So if for example we send you a stone that we are certain is unheated and you&nbsp;submit it for a lab report and it comes back as heated, we will refund you in&nbsp;full, including lab report fees, insurance and shipping. Treatments are nothing to mess with and we take this very seriously.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Treatment ID should be sacrosanct and inviolable in the gem trade &ndash; if something is said to be&nbsp;unheated/standard heated, it must test as such in any reputable gem lab worldwide.</p>\r\n<p style=\"padding: 0px; margin: 0px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">In short, enhancement identification needs to add up wherever you get the&nbsp;report from. Any discrepancies would be grounds for a full refund for the stone, lab report, shipping, insurance, export fees, PayPal/bank charges, etc.</p>', '2022-05-30 19:15:29', '2022-05-30 19:15:29'),
(20, '11', 'Why buy online?', '<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">The main advantages of buying online are a wider range of stones to choose from, a pricing structure substantially friendlier than what you could normally expect to pay in brick and mortar jewelry stores, and being able to order from the comfort of your home.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">While development and maintenance of an online store can be costly, it&rsquo;s nowhere near the overheads paid by retail stores. No real estate mortgage/cost/rent, no utilities and no retail insurance means that considerable savings translate into lower final prices.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Our excellent position at the source and our wide contact base also ensure that we get stones from as close to the mines as possible, rather than further down the supply chain with multiple markups included into the cost.</p>', '2022-05-30 19:18:49', '2022-05-30 19:18:49'),
(21, '11', 'How can I be sure that I made the right choice? That the stone is right for me?', '<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">You will know pretty much the moment the stone is delivered and you see it for yourself, in person.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">This is why we back stones with a return and refund policy. We want everyone we deal with to be completely content with their purchases and we do understand it&rsquo;s impossible to know whether that&rsquo;ll be the case before a person sees the stones for themselves live.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Nothing is ever considered &ldquo;sold&rdquo; until you see the stone and specifically state that you wish to keep it, but we also do our best to inform people as well as possible before they decide to order something to begin with.</p>', '2022-05-30 19:21:03', '2022-05-30 19:21:03'),
(22, '11', 'Buying a stone I’ve never seen from a person I’ve never met?', '<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">With thousands of scammers scamming their merry way around the web, a bit of skepticism is in everyone\'s best interest. Caveat emptor, of course.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">But as trained gemologists and experienced dealers, we know what we deal in and we stand behind our stones unreservedly. No excuses, no exceptions.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">It&rsquo;s in no one&rsquo;s interest, least of all ours, to try and portray them as something they&rsquo;re not. Doing so would translate to returns and losses in time, shipping and non-refundable import taxes paid on our part (not to even mention unquantifiables like reputation and trust that takes years to build).</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 10px; caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">So to help you visualize the stones you&rsquo;re looking at as closely and as accurately as possible, we&rsquo;ll provide you with high quality photos and videos and take great care to portray all of their internal and external characteristics as objectively as possible. Our practically nonexistent return rate is a good testament to this approach working well over the years.</p>', '2022-05-30 19:26:35', '2022-05-30 19:26:35'),
(23, '11', 'Wondering about something else?', '<p>The laws of the universe? The meaning of life? Anything - feel free to just contact us!</p>', '2022-05-30 19:27:33', '2022-05-30 19:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `faq_category`
--

CREATE TABLE `faq_category` (
  `order` int(11) DEFAULT 0,
  `id` int(11) NOT NULL,
  `faq_category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_category`
--

INSERT INTO `faq_category` (`order`, `id`, `faq_category_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Shipping', '2021-11-25 21:27:03', '2022-07-26 15:29:36'),
(3, 3, 'Colors And Accuracy', '2021-11-25 21:27:29', '2022-07-26 15:29:00'),
(2, 9, 'Payment', '2022-05-30 18:42:12', '2022-07-26 15:29:36'),
(4, 10, 'Returns', '2022-05-30 18:42:18', '2022-07-26 15:29:00'),
(5, 11, 'Buying Online', '2022-05-30 18:42:26', '2022-07-26 15:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `feature_images` longtext CHARACTER SET armscii8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `category_id`, `feature_images`, `created_at`, `updated_at`) VALUES
(1, 1, '620f061bebe27_61c167b08d1af_1-21.jpg', '2022-02-18 08:36:36', '2022-02-18 08:36:36'),
(2, 2, '620f0661ac1cb_61f835199fb98_1.06-Lavender-Spinel-1.jpg', '2022-02-18 08:38:22', '2022-02-18 08:38:22'),
(3, 2, '620f0671119d8_61f8326276286_0.94-Blue-Sapphire-1.jpg', '2022-02-18 08:38:22', '2022-02-18 08:38:22'),
(4, 3, '620f06f103c17_61f83cc33ca25_1.00-Garnet-1.jpg', '2022-02-18 08:41:40', '2022-02-18 08:41:40'),
(5, 5, '620f078b0813b_61f83dabcad4d_1.14-Garnet-1.jpg', '2022-02-18 08:42:38', '2022-02-18 08:42:38'),
(6, 5, '620f079b2958e_61f83e8219eed_0.66-Teal-Sapphire-1.jpg', '2022-02-18 08:42:38', '2022-02-18 08:42:38'),
(7, 6, '620f07d1a5ed0_61f82ef0f22cd_0.66-Teal-Sapphire-1.jpg', '2022-02-18 08:45:21', '2022-02-18 08:45:21'),
(8, 6, '620f07dd13f54_61f82f74a7d5f_0.72-Fancy-Grey-Sapphire-1.jpg', '2022-02-18 08:45:21', '2022-02-18 08:45:21'),
(9, 6, '620f07dda8cff_61f83cc33ca25_1.00-Garnet-1.jpg', '2022-02-18 08:45:21', '2022-02-18 08:45:21'),
(10, 7, '620f086a4af88_61f83f2b74ddd_0.95-Tourmaline-1.jpg', '2022-02-18 08:47:43', '2022-02-18 08:47:43'),
(11, 7, '620f086b98572_61f83e8219eed_0.66-Teal-Sapphire-1.jpg', '2022-02-18 08:47:43', '2022-02-18 08:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `footer_description`
--

CREATE TABLE `footer_description` (
  `id` int(11) NOT NULL,
  `footer_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_description`
--

INSERT INTO `footer_description` (`id`, `footer_description`, `footer_logo1`, `footer_logo2`, `footer_logo3`, `created_at`, `updated_at`) VALUES
(2, 'No synthetics, no lead glass filling, no composites and no beryllium diffusion, ever. We offer a selection of heated and unheated sapphires, untreated spinels, chrysoberyls, tourmalines and other varieties that we source through a network of contacts spanning miners, mine owners, gemstone dealers, jewelers and gemologists. You can also let us know if you’d like a specialized, on demand search for any special stones you might have in mind.', 'images/home-select/1728068774313879.png', 'images/home-select/1722459432718840.png', 'images/home-select/1722459432719014.png', '2022-01-20 13:55:22', '2022-03-23 10:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `footer_gallery`
--

CREATE TABLE `footer_gallery` (
  `id` int(11) NOT NULL,
  `footer_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `gallery_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_name`, `gallery_description`, `created_at`, `updated_at`) VALUES
(1, 'Lavender Spinel', 'An ultra vivid, extremely saturated hot pink sapphire.', '2022-03-23 09:32:47', '2022-03-23 09:32:47'),
(2, 'Teal Spinel', 'Teal Spinel', '2022-03-23 09:46:30', '2022-03-23 09:46:30'),
(3, 'Blue Sapphire, 0.94 ct', 'Blue Sapphire, 0.94 ct', '2022-03-23 09:50:19', '2022-03-23 09:50:19'),
(4, 'Green Sapphire, 0.80 ct', 'Green Sapphire, 0.80 ct', '2022-03-23 10:09:59', '2022-03-23 10:09:59'),
(5, 'Green Tourmaline, 0.95 ct', 'Green Tourmaline, 0.95 ct', '2022-03-23 10:18:10', '2022-03-23 10:18:10'),
(6, 'Pink Tourmaline, 1.24 ct', 'Pink Tourmaline, 1.24 ct', '2022-03-23 10:23:13', '2022-03-23 10:23:13'),
(9, 'Blue Sapphire, 0.72 ct', 'Blue Sapphire, 0.72 ct', '2022-03-23 10:48:12', '2022-03-23 10:48:12'),
(10, 'Fancy Sapphire', 'Fancy Sapphire', '2022-03-24 13:24:21', '2022-03-24 13:24:21'),
(13, 'Yellow Zircon, 1.74 ct', 'Yellow Color Test', '2022-03-24 13:34:54', '2022-03-27 15:31:21'),
(14, 'Blue Sapphire, 2.22 ct.', 'Blue Sapphire, 2.22 ct.', '2022-03-27 15:34:41', '2022-03-27 15:34:41'),
(17, 'Green Chrysoberyl, 0.82 ct.', 'Green Chrysoberyl, 0.82 ct.', '2022-05-09 19:40:31', '2022-05-09 19:40:31'),
(18, 'Green Chrysoberyl, 0.99 ct.', 'Green Chrysoberyl, 0.99 ct.', '2022-05-09 19:43:28', '2022-05-09 19:43:28'),
(19, 'Chartreuse Chrysoberyl, 1.21 ct.', 'Chartreuse Chrysoberyl, 1.21 ct.', '2022-05-09 19:55:27', '2022-05-09 19:55:27'),
(20, 'Chartreuse Chrysoberyl, 1.24 ct.', 'Chartreuse Chrysoberyl, 1.24 ct.', '2022-05-09 20:08:37', '2022-05-09 20:08:37'),
(21, 'Chartreuse Chrysoberyl, 1.37 ct.', 'Chartreuse Chrysoberyl, 1.37 ct.', '2022-05-09 20:17:30', '2022-05-09 20:17:30'),
(22, 'Green Chrysoberyl, 1.38 ct.', 'Green Chrysoberyl, 1.38 ct.', '2022-05-09 20:38:36', '2022-05-09 20:38:36'),
(23, 'Chartreuse Chrysoberyl, 1.39 ct.', 'Chartreuse Chrysoberyl, 1.39 ct.', '2022-05-09 21:18:23', '2022-05-09 21:18:23'),
(29, 'Chartreuse Chrysoberyl, 1.40 ct.', 'Chartreuse Chrysoberyl, 1.40 ct.', '2022-05-12 17:54:21', '2022-05-12 17:54:21'),
(30, 'Brown Chrysoberyl, 1.40 ct.', 'Brown Chrysoberyl, 1.40 ct.', '2022-05-12 17:56:04', '2022-05-12 17:56:04'),
(31, 'Chartreuse Chrysoberyl, 1.48 ct. (Round)', 'Chartreuse Chrysoberyl, 1.48 ct. (Round)', '2022-05-12 18:00:45', '2022-05-12 18:37:24'),
(32, 'Chartreuse Chrysoberyl, 1.48 ct. (Oval)', 'Chartreuse Chrysoberyl, 1.48 ct. (Oval)', '2022-05-12 18:36:45', '2022-05-12 18:37:12'),
(33, 'Green Chrysoberyl, 1.49 ct.', 'Green Chrysoberyl, 1.49 ct.', '2022-05-12 21:10:13', '2022-05-12 21:10:13'),
(34, 'Yellow Chrysoberyl, 1.50 ct.', 'Yellow Chrysoberyl, 1.50 ct.', '2022-05-12 21:19:12', '2022-05-12 21:19:12'),
(35, 'Chartreuse Chrysoberyl, 1.64 ct.', 'Chartreuse Chrysoberyl, 1.64 ct.', '2022-05-13 19:09:22', '2022-05-13 19:09:22'),
(36, 'Brown Chrysoberyl, 1.84 ct.', 'Brown Chrysoberyl, 1.84 ct.', '2022-05-13 19:16:13', '2022-05-13 19:16:13'),
(37, 'Brown Chrysoberyl, 2.18 ct.', 'Brown Chrysoberyl, 2.18 ct.', '2022-05-13 19:21:24', '2022-05-13 19:21:24'),
(38, 'Brown Chrysoberyl, 2.36 ct.', 'Brown Chrysoberyl, 2.36 ct.', '2022-05-13 19:26:36', '2022-05-13 19:26:36'),
(39, 'Brown Chrysoberyl Pair, 2.57 ct.', 'Brown Chrysoberyl Pair, 2.57 ct.', '2022-05-13 19:38:27', '2022-05-13 19:38:27'),
(40, 'Brown Chrysoberyl, 3.16 ct.', 'Brown Chrysoberyl, 3.16 ct.', '2022-05-13 20:00:52', '2022-05-13 20:00:52'),
(41, 'Vanadium Chrysoberyl, 0.82 ct.', 'Vanadium Chrysoberyl, 0.82 ct.', '2022-05-16 18:21:32', '2022-05-16 18:21:32'),
(42, 'Chartreuse Chrysoberyl, 1.00 ct.', 'Chartreuse Chrysoberyl, 1.00 ct.', '2022-05-19 12:50:55', '2022-05-19 12:50:55'),
(43, 'Green Chrysoberyl, 1.03 ct.', 'Green Chrysoberyl, 1.03 ct.', '2022-05-19 13:03:28', '2022-05-19 13:03:28'),
(44, 'Chartreuse Chrysoberyl, 1.05 ct.', 'Chartreuse Chrysoberyl, 1.05 ct.', '2022-05-19 13:08:06', '2022-05-19 13:08:06'),
(45, 'Vanadium Chrysoberyl, 1.06 ct.', 'Vanadium Chrysoberyl, 1.06 ct.', '2022-05-19 13:17:41', '2022-05-19 13:17:41'),
(46, 'Colorless Chrysoberyl, 1.08 ct.', 'Colorless Chrysoberyl, 1.08 ct.', '2022-05-19 13:24:11', '2022-05-19 13:24:11'),
(47, 'Chartreuse Chrysoberyl, 1.09 ct. (Cushion)', 'Chartreuse Chrysoberyl, 1.09 ct. (Cushion)', '2022-05-19 13:36:07', '2022-05-19 13:37:04'),
(48, 'Chartreuse Chrysoberyl, 1.09 ct. (Octagon)', 'Chartreuse Chrysoberyl, 1.09 ct. (Octagon)', '2022-05-19 13:44:44', '2022-05-19 13:44:44'),
(49, 'Chartreuse Chrysoberyl, 1.16 ct.', 'Chartreuse Chrysoberyl, 1.16 ct.', '2022-05-19 13:49:37', '2022-05-19 13:49:37'),
(50, 'Chartreuse Chrysoberyl, 1.21 ct.', 'Chartreuse Chrysoberyl, 1.21 ct.', '2022-05-19 13:55:28', '2022-05-19 13:55:28'),
(51, 'Chartreuse Chrysoberyl, 1.22 ct.', 'Chartreuse Chrysoberyl, 1.22 ct.', '2022-05-19 13:58:23', '2022-05-19 13:58:23'),
(52, 'Chartreuse Chrysoberyl, 1.30 ct.', 'Chartreuse Chrysoberyl, 1.30 ct.', '2022-05-19 14:05:01', '2022-05-19 14:05:01'),
(53, 'Chartreuse Chrysoberyl, 1.34 ct.', 'Chartreuse Chrysoberyl, 1.34 ct.', '2022-05-19 15:39:08', '2022-05-19 15:39:08'),
(54, 'Chartreuse Chrysoberyl, 1.42 ct.', 'Chartreuse Chrysoberyl, 1.42 ct.', '2022-05-19 15:45:43', '2022-05-19 15:45:43'),
(55, 'Chartreuse Chrysoberyl, 1.47 ct.', 'Chartreuse Chrysoberyl, 1.47 ct.', '2022-05-19 15:50:27', '2022-05-19 15:51:46'),
(56, 'Vanadium Chrysoberyl, 1.52 ct.', 'Vanadium Chrysoberyl, 1.52 ct.', '2022-05-19 16:06:41', '2022-05-19 16:06:41'),
(57, 'Vanadium Chrysoberyl, 1.53 ct.', 'Vanadium Chrysoberyl, 1.53 ct.', '2022-05-19 16:12:17', '2022-05-19 16:12:17'),
(58, 'Chartreuse Chrysoberyl, 1.54 ct.', 'Chartreuse Chrysoberyl, 1.54 ct.', '2022-05-19 16:32:56', '2022-05-19 16:32:56'),
(59, 'Green Chrysoberyl, 1.58 ct.', 'Green Chrysoberyl, 1.58 ct.', '2022-05-19 16:47:56', '2022-05-19 16:47:56'),
(60, 'Vanadium Chrysoberyl, 1.80 ct.', 'Vanadium Chrysoberyl, 1.80 ct.', '2022-05-19 16:52:08', '2022-05-19 16:52:08'),
(61, 'Colorless Chrysoberyl, 1.96 ct.', 'Colorless Chrysoberyl, 1.96 ct.', '2022-05-19 16:56:36', '2022-05-19 16:56:36'),
(62, 'Chartreuse Chrysoberyl, 2.02 ct.', 'Chartreuse Chrysoberyl, 2.02 ct.', '2022-05-19 17:09:03', '2022-05-19 17:09:03'),
(63, 'Green Chrysoberyl, 2.02 ct.', 'Green Chrysoberyl, 2.02 ct.', '2022-05-19 18:39:22', '2022-05-19 18:39:22'),
(64, 'Vanadium Chrysoberyl, 2.18 ct.', 'Vanadium Chrysoberyl, 2.18 ct.', '2022-05-19 18:50:25', '2022-05-19 18:50:25'),
(65, 'Chartreuse Chrysoberyl, 2.34 ct.', 'Chartreuse Chrysoberyl, 2.34 ct.', '2022-05-19 19:41:02', '2022-05-19 19:41:02'),
(66, 'Chartreuse Chrysoberyl, 2.35 ct.', 'Chartreuse Chrysoberyl, 2.35 ct.', '2022-05-19 20:12:33', '2022-05-19 20:12:33'),
(67, 'Green Chrysoberyl, 2.58 ct.', 'Green Chrysoberyl, 2.58 ct.', '2022-05-20 13:59:05', '2022-05-20 13:59:05'),
(68, 'Chartreuse Chrysoberyl, 2.85 ct.', 'Chartreuse Chrysoberyl, 2.85 ct.', '2022-05-20 14:09:54', '2022-05-20 14:09:54'),
(69, 'Chartreuse Chrysoberyl, 3.25 ct.', 'Chartreuse Chrysoberyl, 3.25 ct.', '2022-05-20 14:20:21', '2022-05-20 14:20:21'),
(70, 'Brown Chrysoberyl, 4.59 ct.', 'Brown Chrysoberyl, 4.59 ct.', '2022-05-20 14:28:39', '2022-05-20 14:28:39'),
(71, 'Rhodolite Garnet, 1.00 ct.', 'Rhodolite Garnet, 1.00 ct.', '2022-05-20 16:43:40', '2022-05-20 16:43:40'),
(72, 'Pyrope-Almandine Garnet, 1.14 ct.', 'Pyrope-Almandine Garnet, 1.14 ct.', '2022-05-20 17:39:39', '2022-05-20 17:39:39'),
(73, 'Spessartite Garnet, 1.21 ct.', 'Spessartite Garnet, 1.21 ct.', '2022-05-20 18:23:01', '2022-05-20 18:23:01'),
(74, 'Pyrope-Almandine Garnet, 1.26 ct.', 'Pyrope-Almandine Garnet, 1.26 ct.', '2022-05-25 14:54:53', '2022-05-25 14:54:53'),
(75, 'Pyrope-Almandine Garnet, 1.28 ct.', 'Pyrope-Almandine Garnet, 1.28 ct.', '2022-05-25 15:09:26', '2022-05-25 15:09:26'),
(76, 'Pyrope-Almandine Garnet, 1.29 ct.', 'Pyrope-Almandine Garnet, 1.29 ct.', '2022-05-25 15:48:34', '2022-05-25 15:48:34'),
(77, 'Rhodolite Garnet, 1.32 ct.', 'Rhodolite Garnet, 1.32 ct.', '2022-05-25 16:20:48', '2022-05-25 16:20:48'),
(78, 'Hessonite Garnet, 1.36 ct.', 'Hessonite Garnet, 1.36 ct.', '2022-05-25 16:36:22', '2022-05-25 16:36:22'),
(79, 'Rhodolite Garnet, 1.38 ct. (Radiant)', 'Rhodolite Garnet, 1.38 ct. (Radiant)', '2022-05-25 16:44:26', '2022-05-25 17:02:04'),
(80, 'Rhodolite Garnet, 1.38 ct. (Fancy)', 'Rhodolite Garnet, 1.38 ct. (Fancy)', '2022-05-25 17:01:22', '2022-05-25 17:02:17'),
(81, 'Hessonite Garnet, 1.39 ct.', 'Hessonite Garnet, 1.39 ct.', '2022-05-25 17:08:30', '2022-05-25 17:08:30'),
(82, 'Rhodolite Garnet, 1.43 ct.', 'Rhodolite Garnet, 1.43 ct.', '2022-05-25 17:18:43', '2022-05-25 17:18:43'),
(83, 'Rhodolite Garnet, 1.50 ct.', 'Rhodolite Garnet, 1.50 ct.', '2022-05-25 17:30:17', '2022-05-25 17:30:17'),
(84, 'Rhodolite Garnet, 1.54 ct.', 'Rhodolite Garnet, 1.54 ct.', '2022-05-25 17:36:54', '2022-05-25 17:36:54'),
(85, 'Pyrope-Almandine Garnet, 1.61 ct.', 'Pyrope-Almandine Garnet, 1.61 ct.', '2022-05-25 17:42:03', '2022-05-25 17:42:03'),
(86, 'Rhodolite Garnet, 1.87 ct.', 'Rhodolite Garnet, 1.87 ct.', '2022-05-25 17:50:05', '2022-05-25 17:50:05'),
(87, 'Pyrope-Almandine Garnet, 3.69 ct.', 'Pyrope-Almandine Garnet, 3.69 ct.', '2022-05-25 17:54:33', '2022-05-25 17:54:33'),
(88, 'Hessonite Garnet, 0.81 ct.', 'Hessonite Garnet, 0.81 ct.', '2022-05-31 17:35:42', '2022-05-31 17:35:42'),
(89, 'Grossular Garnet, 1.06 ct.', 'Grossular Garnet, 1.06 ct.', '2022-05-31 17:42:35', '2022-05-31 17:42:35'),
(90, 'Hessonite Garnet, 1.69 ct.', 'Hessonite Garnet, 1.69 ct.', '2022-05-31 17:48:24', '2022-05-31 17:48:24'),
(91, 'Pyrope-Almandine Garnet, 1.90 ct.', 'Pyrope-Almandine Garnet, 1.90 ct.', '2022-05-31 18:00:56', '2022-05-31 18:00:56'),
(92, 'Spessartite Garnet, 1.94 ct.', 'Spessartite Garnet, 1.94 ct.', '2022-05-31 18:06:41', '2022-05-31 18:06:41'),
(93, 'Pyrope-Almandine Garnet, 1.98 ct.', 'Pyrope-Almandine Garnet, 1.98 ct.', '2022-05-31 19:01:15', '2022-05-31 19:01:15'),
(94, 'Pyrope-Almandine Garnet, 2.20 ct.', 'Pyrope-Almandine Garnet, 2.20 ct.', '2022-05-31 19:24:40', '2022-05-31 19:24:40'),
(95, 'Grossular Garnet, 2.93 ct.', 'Grossular Garnet, 2.93 ct.', '2022-05-31 19:39:06', '2022-05-31 19:39:06'),
(96, 'Mandarin Garnets, 3.10 ct.', 'Mandarin Garnets, 3.10 ct.', '2022-05-31 19:55:16', '2022-05-31 19:55:16'),
(97, 'Pyrope-Almandine Garnet, 5.31 ct.', 'Pyrope-Almandine Garnet, 5.31 ct.', '2022-05-31 19:59:00', '2022-05-31 19:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `order` int(11) NOT NULL DEFAULT 0,
  `id` int(11) NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `gallery_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`order`, `id`, `gallery_id`, `gallery_image`, `created_at`, `updated_at`) VALUES
(2, 1, 1, '623aa389d8b1a_1.06-Lavender-Spinel-1.jpg', '2022-03-23 09:37:19', '2022-04-27 07:13:25'),
(1, 2, 2, '623aa63bcdfbf_1.05-Teal-Spinel-1.jpg', '2022-03-23 09:47:24', '2022-04-27 07:13:25'),
(3, 3, 2, '623aa64877365_1.05-Teal-Spinel-2.jpg', '2022-03-23 09:47:24', '2022-04-27 07:13:25'),
(4, 4, 2, '623aa658ef8c1_1.05-Teal-Spinel-4.jpg', '2022-03-23 09:47:24', '2022-04-27 07:13:25'),
(5, 5, 3, '623aa8329d35b_0.94-Blue-Sapphire-1.jpg', '2022-03-23 09:56:24', '2022-04-27 07:13:25'),
(6, 6, 3, '623aa846b0715_0.94-Blue-Sapphire-2.jpg', '2022-03-23 09:56:24', '2022-04-27 07:13:25'),
(7, 7, 3, '623aa84d90ea1_0.94-Blue-Sapphire-3.jpg', '2022-03-23 09:56:24', '2022-04-27 07:13:25'),
(8, 8, 4, '623aabf012808_1.jpg', '2022-03-23 10:11:25', '2022-04-27 07:13:25'),
(9, 9, 4, '623aabf73b4fb_5-3.jpg', '2022-03-23 10:11:25', '2022-04-27 07:13:25'),
(10, 10, 4, '623aabf8f21dd_4.jpg', '2022-03-23 10:11:25', '2022-04-27 07:13:25'),
(1, 11, 5, '623aadde746e4_0.95-Tourmaline-1.jpg', '2022-03-23 10:19:54', '2022-05-09 14:21:35'),
(2, 12, 5, '623aadeebf314_0.95-Tourmaline-2.jpg', '2022-03-23 10:19:54', '2022-05-09 14:21:35'),
(3, 13, 5, '623aadf1de74c_0.95-Tourmaline-4.jpg', '2022-03-23 10:19:54', '2022-05-09 14:19:17'),
(5, 14, 6, '623aaef31c4dd_Tourmaline-1.24-ct.jpg', '2022-03-23 10:24:15', '2022-05-09 20:10:08'),
(10, 20, 9, '623ab4e265a3f_0.72-Blue-Sapphire-1.jpg', '2022-03-23 10:49:32', '2022-05-09 14:19:17'),
(4, 22, 10, '623c2adb76c77_0.72-Fancy-Grey-Sapphire-1.jpg', '2022-03-24 13:25:18', '2022-05-19 19:41:55'),
(5, 24, 10, '623c2ae6dd74f_0.72-Fancy-Grey-Sapphire-3.jpg', '2022-03-24 13:25:18', '2022-05-19 19:41:55'),
(6, 31, 13, '623c2d4da28fe_2-8.jpg', '2022-03-24 13:35:47', '2022-05-19 19:41:55'),
(7, 32, 13, '623c2d4ec10e9_3-5.jpg', '2022-03-24 13:35:47', '2022-05-19 19:41:55'),
(8, 33, 13, '623c2d5766b38_4-5.jpg', '2022-03-24 13:35:47', '2022-05-19 19:41:55'),
(9, 34, 13, '623c2d5803e9b_5-5.jpg', '2022-03-24 13:35:47', '2022-05-19 19:41:55'),
(10, 35, 13, '623c2da3e58df_Yellow-Zircon-1.74-ct-1.jpg', '2022-03-24 13:35:47', '2022-05-19 19:41:55'),
(4, 37, 14, '629872d146152_2.22 Blue Sapphire 1.jpg', '2022-03-27 15:35:11', '2022-06-02 13:20:33'),
(5, 38, 14, '62403dd5d49c1_2.22 Blue Sapphire 3.jpg', '2022-03-27 15:35:11', '2022-05-19 20:13:30'),
(6, 39, 14, '62403dd627932_2.22 Blue Sapphire 4.jpg', '2022-03-27 15:35:11', '2022-05-19 20:13:30'),
(7, 40, 14, '62403dd8b1a55_2.22 Blue Sapphire 5.jpg', '2022-03-27 15:35:11', '2022-05-19 20:13:30'),
(8, 41, 14, '62403dd91179a_2.22 Blue Sapphire 6.jpg', '2022-03-27 15:35:12', '2022-05-19 20:13:30'),
(9, 42, 14, '62403ddb50829_2.22 Blue Sapphire 7.jpg', '2022-03-27 15:35:12', '2022-05-19 20:13:30'),
(10, 43, 14, '62403ddc37c11_2.22 Blue Sapphire Report.jpg', '2022-03-27 15:35:12', '2022-05-19 20:13:30'),
(4, 44, 14, '6241afb267e7f_0.72 Pink Sapphire Report.jpg', '2022-03-27 15:41:30', '2022-05-19 20:20:01'),
(5, 53, 17, '0.82_Chrysoberyl_2.jpg', '2022-05-09 19:41:26', '2022-05-19 12:44:46'),
(4, 54, 17, '0.82_Chrysoberyl_1.jpg', '2022-05-09 19:41:26', '2022-05-19 12:44:46'),
(6, 55, 17, '0.82_Chrysoberyl_3.jpg', '2022-05-09 19:41:26', '2022-05-19 12:44:46'),
(7, 56, 17, '0.82_Chrysoberyl_4.jpg', '2022-05-09 19:41:26', '2022-05-19 12:44:46'),
(5, 57, 18, '0.99_Green_Chrysoberyl_1.jpg', '2022-05-09 19:43:53', '2022-05-19 20:20:01'),
(6, 58, 18, '0.99_Green_Chrysoberyl_2.jpg', '2022-05-09 19:43:53', '2022-05-19 20:20:01'),
(7, 59, 18, '0.99_Green_Chrysoberyl_3.jpg', '2022-05-09 19:43:53', '2022-05-19 20:20:01'),
(8, 60, 18, '0.99_Green_Chrysoberyl_4.jpg', '2022-05-09 19:43:53', '2022-05-19 20:20:01'),
(9, 61, 18, '0.99_Green_Chrysoberyl_5.jpg', '2022-05-09 19:43:53', '2022-05-19 20:20:01'),
(9, 62, 19, '1.21_Chrysoberyl_2.jpg', '2022-05-09 19:55:50', '2022-05-20 18:30:56'),
(8, 63, 19, '1.21_Chrysoberyl_1.jpg', '2022-05-09 19:55:50', '2022-05-19 13:56:01'),
(10, 64, 19, '1.21_Chrysoberyl_3.jpg', '2022-05-09 19:55:50', '2022-05-19 13:56:01'),
(10, 65, 19, '1.21Chrysoberyl_4.jpg', '2022-05-09 19:55:50', '2022-05-20 18:30:56'),
(1, 66, 20, '1.24_Chrysoberyl_1.jpg', '2022-05-09 20:09:34', '2022-05-09 20:10:08'),
(2, 67, 20, '1.24_Chrysoberyl_2.jpg', '2022-05-09 20:09:34', '2022-05-09 20:10:08'),
(4, 68, 20, '1.24_Chrysoberyl_4.jpg', '2022-05-09 20:09:34', '2022-05-09 20:10:08'),
(3, 69, 20, '1.24_Chrysoberyl_3.jpg', '2022-05-09 20:09:34', '2022-05-09 20:10:08'),
(2, 70, 21, '1.37_Chrysoberyl_2.jpg', '2022-05-09 20:18:23', '2022-05-09 20:18:34'),
(1, 71, 21, '1.37_Chrysoberyl_1.jpg', '2022-05-09 20:18:23', '2022-05-09 20:18:34'),
(3, 72, 21, '1.37_Chrysoberyl_3.jpg', '2022-05-09 20:18:23', '2022-05-09 20:18:34'),
(4, 73, 21, '1.37_Chrysoberyl_4.jpg', '2022-05-09 20:18:23', '2022-05-09 20:18:34'),
(5, 74, 21, '1.37_Chrysoberyl_5.jpg', '2022-05-09 20:18:23', '2022-05-09 20:18:34'),
(6, 75, 21, '1.37_Chrysoberyl_6.jpg', '2022-05-09 20:18:23', '2022-05-09 20:18:34'),
(9, 76, 22, '1.38_Chrysoberyl_1.jpg', '2022-05-09 20:41:58', '2022-06-02 18:07:14'),
(10, 77, 22, '1.38_Chrysoberyl_2.jpg', '2022-05-09 20:41:58', '2022-06-02 18:07:18'),
(11, 78, 22, '1.38_Chrysoberyl_3.jpg', '2022-05-09 20:41:58', '2022-06-02 18:07:18'),
(12, 79, 22, '1.38_Chrysoberyl_4.jpg', '2022-05-09 20:41:58', '2022-06-02 18:07:18'),
(13, 80, 22, '1.38_Chrysoberyl_5.jpg', '2022-05-09 20:41:58', '2022-06-02 18:07:16'),
(6, 81, 23, '1.39_Chrysoberyl_1.jpg', '2022-05-09 21:19:04', '2022-05-25 17:10:06'),
(7, 82, 23, '1.39_Chrysoberyl_2.jpg', '2022-05-09 21:19:04', '2022-05-25 17:10:06'),
(8, 83, 23, '1.39_Chrysoberyl_3.jpg', '2022-05-09 21:19:04', '2022-05-25 17:10:06'),
(9, 84, 23, '1.39_Chrysoberyl_4.jpg', '2022-05-09 21:19:04', '2022-05-25 17:10:06'),
(1, 105, 29, '627d0396b3f7e_1.40_Chrysoberyl_1.jpg', '2022-05-12 17:54:57', '2022-05-12 17:57:38'),
(2, 106, 29, '627d0396cf810_1.40_Chrysoberyl_2.jpg', '2022-05-12 17:54:57', '2022-05-12 17:57:38'),
(3, 107, 29, '627d039c5e033_1.40_Chrysoberyl_3.jpg', '2022-05-12 17:54:57', '2022-05-12 17:57:38'),
(4, 108, 29, '627d039cc3dc5_1.40_Chrysoberyl_4.jpg', '2022-05-12 17:54:57', '2022-05-12 17:57:38'),
(5, 109, 29, '627d039f5098e_1.40_Chrysoberyl_5.jpg', '2022-05-12 17:54:57', '2022-05-12 17:57:38'),
(7, 110, 30, '627d03fa693b5_1.40_Chrysoberyl_2.jpg', '2022-05-12 17:56:32', '2022-05-12 17:57:38'),
(6, 111, 30, '627d03fa7eab6_1.40_Chrysoberyl_1.jpg', '2022-05-12 17:56:32', '2022-05-12 17:57:38'),
(9, 112, 30, '627d03fd98387_1.40_Chrysoberyl_4.jpg', '2022-05-12 17:56:32', '2022-05-12 17:57:44'),
(8, 113, 30, '627d03fe64de6_1.40_Chrysoberyl_3.jpg', '2022-05-12 17:56:32', '2022-05-12 17:57:44'),
(5, 114, 31, '627d05126225a_1.48_Chrysoberyl_1.jpg', '2022-05-12 18:01:12', '2022-05-12 19:24:50'),
(6, 115, 31, '627d051277716_1.48_Chrysoberyl_2.jpg', '2022-05-12 18:01:12', '2022-05-12 19:24:50'),
(8, 116, 31, '627d05155484f_1.48_Chrysoberyl_4.jpg', '2022-05-12 18:01:12', '2022-05-12 19:24:50'),
(7, 117, 31, '627d051656765_1.48_Chrysoberyl_3.jpg', '2022-05-12 18:01:12', '2022-05-12 19:24:50'),
(2, 122, 32, '627d1c4b6426a_1.48_Chrysoberyl_2.jpg', '2022-05-12 19:40:20', '2022-05-12 19:40:30'),
(1, 123, 32, '627d1c4c0e3f9_1.48_Chrysoberyl_1.jpg', '2022-05-12 19:40:20', '2022-05-12 19:40:30'),
(4, 124, 32, '627d1c4db5cbc_1.48_Chrysoberyl_4.jpg', '2022-05-12 19:40:20', '2022-05-12 19:40:34'),
(3, 125, 32, '627d1c4e4a9e6_1.48_Chrysoberyl_3.jpg', '2022-05-12 19:40:20', '2022-05-12 19:40:34'),
(6, 131, 34, '627d33c682e8a_1.50_Chrysoberyl_2.jpg', '2022-05-12 21:38:42', '2022-05-25 17:30:58'),
(5, 132, 34, '627d33c6b280a_1.50_Chrysoberyl_1.jpg', '2022-05-12 21:38:42', '2022-05-25 17:30:58'),
(8, 133, 34, '627d33c8889b4_1.50_Yellow_Chrysoberyl_4.jpg', '2022-05-12 21:38:42', '2022-05-25 17:30:58'),
(7, 134, 34, '627d33c91ba83_1.50_Chrysoberyl_3.jpg', '2022-05-12 21:38:42', '2022-05-25 17:30:58'),
(2, 135, 35, '627e66b04a459_1.64_Chrysoberyl_2.jpg', '2022-05-13 19:09:56', '2022-05-13 19:10:06'),
(1, 136, 35, '627e66b0f4204_1.64_Chrysoberyl_1.jpg', '2022-05-13 19:09:56', '2022-05-13 19:10:06'),
(4, 137, 35, '627e66b30a6a6_1.64_Chrysoberyl_4.jpg', '2022-05-13 19:09:56', '2022-05-13 19:10:09'),
(3, 138, 35, '627e66b3090ee_1.64_Chrysoberyl_3.jpg', '2022-05-13 19:09:56', '2022-05-13 19:10:09'),
(2, 139, 36, '627e683e99689_1.84_Chrysoberyl_2.jpg', '2022-05-13 19:16:43', '2022-05-13 19:16:52'),
(1, 140, 36, '627e683f4177d_1.84_Chrysoberyl_1.jpg', '2022-05-13 19:16:43', '2022-05-13 19:16:52'),
(3, 141, 36, '627e684190b7c_1.84_Chrysoberyl_3.jpg', '2022-05-13 19:16:43', '2022-05-13 19:16:52'),
(4, 142, 36, '627e6842313e2_1.84_Chrysoberyl_4.jpg', '2022-05-13 19:16:43', '2022-05-13 19:16:52'),
(5, 143, 36, '627e6844b67bd_1.84_Chrysoberyl_5.jpg', '2022-05-13 19:16:43', '2022-05-13 19:16:52'),
(6, 144, 36, '627e68456acfa_1.84_Chrysoberyl_6.jpg', '2022-05-13 19:16:43', '2022-05-13 19:16:52'),
(7, 145, 36, '627e6847038b2_1.84_Chrysoberyl_Report.jpg', '2022-05-13 19:16:43', '2022-05-13 19:16:52'),
(3, 146, 37, '627e6976be8b4_2.18_Chrysoberyl_1.jpg', '2022-05-13 19:21:53', '2022-05-19 19:39:35'),
(4, 147, 37, '627e69771900b_2.18_Chrysoberyl_2.jpg', '2022-05-13 19:21:53', '2022-05-19 19:39:35'),
(5, 148, 37, '627e697a3860c_2.18_Chrysoberyl_3.jpg', '2022-05-13 19:21:53', '2022-05-19 19:39:35'),
(6, 149, 37, '627e697a9b2b7_2.18_Chrysoberyl_4.jpg', '2022-05-13 19:21:53', '2022-05-19 19:39:35'),
(7, 150, 37, '627e697e09ec6_2.18_Chrysoberyl_5.jpg', '2022-05-13 19:21:53', '2022-05-19 19:39:35'),
(8, 151, 37, '627e697f66e4a_2.18_Chrysoberyl_6.jpg', '2022-05-13 19:21:53', '2022-05-19 19:39:35'),
(2, 158, 38, '627e6cc8ccd3a_2.36_Chrysoberyl_2.jpg', '2022-05-13 19:37:24', '2022-05-13 19:37:43'),
(1, 159, 38, '627e6cd2c27b4_2.36_Chrysoberyl_1.jpg', '2022-05-13 19:37:24', '2022-05-13 19:37:43'),
(3, 160, 38, '627e6cd49f5fd_2.36_Chrysoberyl_4.jpg', '2022-05-13 19:37:24', '2022-05-13 19:37:43'),
(4, 161, 38, '627e6cdf12c11_2.36_Chrysoberyl_5.jpg', '2022-05-13 19:37:24', '2022-05-13 19:37:43'),
(5, 162, 38, '627e6ce12cae6_2.36_Chrysoberyl_6.jpg', '2022-05-13 19:37:24', '2022-05-13 19:37:43'),
(6, 163, 38, '627e6ce2e3673_2.36_Chrysoberyl_Report.jpg', '2022-05-13 19:37:24', '2022-05-13 19:37:43'),
(2, 164, 39, '627e6da027168_2.57_Chrysoberyl_Pair_2.jpg', '2022-05-13 19:39:38', '2022-05-13 19:39:47'),
(1, 165, 39, '627e6da11a9d6_2.57_Chrysoberyl_Pair_1.jpg', '2022-05-13 19:39:38', '2022-05-13 19:39:47'),
(3, 166, 39, '627e6da37cac6_2.57_Chrysoberyl_Pair_3.jpg', '2022-05-13 19:39:38', '2022-05-13 19:39:47'),
(4, 167, 39, '627e6da4a1d80_2.57_Chrysoberyl_Pair_4.jpg', '2022-05-13 19:39:38', '2022-05-13 19:39:47'),
(5, 168, 39, '627e6da6c258b_2.57_Chrysoberyl_Pair_6.jpg', '2022-05-13 19:39:38', '2022-05-13 19:39:47'),
(6, 169, 39, '627e6da6d77dc_2.57_Chrysoberyl_Pair_7.jpg', '2022-05-13 19:39:38', '2022-05-13 19:39:47'),
(2, 171, 40, '627e72edbdfaf_3.16_Chrysoberyl_2.jpg', '2022-05-13 20:02:14', '2022-05-13 20:02:28'),
(1, 172, 40, '627e72eeeac10_3.16_Chrysoberyl_1.jpg', '2022-05-13 20:02:14', '2022-05-13 20:02:28'),
(3, 173, 40, '627e72f16486a_3.16_Chrysoberyl_3.jpg', '2022-05-13 20:02:14', '2022-05-13 20:02:28'),
(4, 174, 40, '627e72f276ddd_3.16_Chrysoberyl_4.jpg', '2022-05-13 20:02:14', '2022-05-13 20:02:28'),
(5, 175, 40, '627e72f46c2f9_3.16_Chrysoberyl_6.jpg', '2022-05-13 20:02:14', '2022-05-13 20:02:28'),
(6, 176, 40, '627e72f522741_3.16_Chrysoberyl_7.jpg', '2022-05-13 20:02:14', '2022-05-13 20:02:28'),
(5, 177, 33, '627e99634b287_1.49_Green_Chrysoberyl_1.jpg', '2022-05-13 22:46:22', '2022-05-20 14:20:55'),
(6, 178, 33, '627e99640c836_1.49_Green_Chrysoberyl_2.jpg', '2022-05-13 22:46:22', '2022-05-20 14:20:55'),
(7, 179, 33, '627e99664c76f_1.49_Green_Chrysoberyl_3.jpg', '2022-05-13 22:46:22', '2022-05-20 14:20:55'),
(8, 180, 33, '627e9966e8147_1.49_Green_Chrysoberyl_4.jpg', '2022-05-13 22:46:22', '2022-05-20 14:20:55'),
(9, 181, 33, '627e996861694_1.49_Green_Chrysoberyl_5.jpg', '2022-05-13 22:46:22', '2022-05-20 14:20:55'),
(1, 185, 41, '6285f510b54c8_0.82_Vanadium_Chrysoberyl_1.jpg', '2022-05-19 12:43:14', '2022-05-19 12:43:25'),
(2, 186, 41, '6285f5112527c_0.82_Vanadium_Chrysoberyl_2.jpg', '2022-05-19 12:43:14', '2022-05-19 12:43:25'),
(3, 187, 41, '6285f560f113d_0.82_Vanadium_Chrysoberyl_3.jpg', '2022-05-19 12:44:34', '2022-05-19 12:44:46'),
(2, 191, 42, '6285f9758b264_1.00_Chrysoberyl_2.jpg', '2022-05-19 13:02:02', '2022-05-19 13:02:10'),
(1, 192, 42, '6285f975e1a5e_1.00_Chrysoberyl_1.jpg', '2022-05-19 13:02:02', '2022-05-19 13:02:10'),
(3, 193, 42, '6285f9783324e_1.00_Chrysoberyl_3.jpg', '2022-05-19 13:02:02', '2022-05-19 13:02:10'),
(1, 194, 43, '6285f9df30c50_1.03_Chrysoberyl_1.jpg', '2022-05-19 13:03:45', '2022-06-02 18:10:03'),
(2, 195, 43, '6285f9dfde31b_1.03_Chrysoberyl_2.jpg', '2022-05-19 13:03:45', '2022-06-02 18:10:03'),
(0, 196, 44, '6285fafc76dd4_1.05_Chrysoberyl_1.jpg', '2022-05-19 13:08:33', '2022-05-19 13:08:33'),
(0, 197, 44, '6285fafd1056a_1.05_Chrysoberyl_2.jpg', '2022-05-19 13:08:33', '2022-05-19 13:08:33'),
(0, 198, 44, '6285fafea8ef8_1.05_Chrysoberyl_3.jpg', '2022-05-19 13:08:33', '2022-05-19 13:08:33'),
(0, 199, 45, '6285fd3b05625_1.06_Vanadium_Chrysoberyl_1.jpg', '2022-05-19 13:18:08', '2022-05-19 13:18:08'),
(0, 200, 45, '6285fd3b50b0c_1.06_Vanadium_Chrysoberyl_2.jpg', '2022-05-19 13:18:08', '2022-05-19 13:18:08'),
(0, 201, 45, '6285fd3e52717_1.06_Vanadium_Chrysoberyl_3.jpg', '2022-05-19 13:18:08', '2022-05-19 13:18:08'),
(0, 202, 46, '6285fecb5353d_1.08_Chrysoberyl_1.jpg', '2022-05-19 13:24:52', '2022-05-19 13:24:52'),
(0, 204, 46, '6298b7451526f_1.08_Chrysoberyl_2.jpg', '2022-05-19 13:24:52', '2022-06-02 18:12:37'),
(2, 205, 47, '6286019b02735_1.09_Chrysoberyl_2.jpg', '2022-05-19 13:36:47', '2022-05-19 13:37:18'),
(1, 206, 47, '6286019b4a1bc_1.09_Chrysoberyl_1.jpg', '2022-05-19 13:36:47', '2022-05-19 13:37:18'),
(3, 207, 47, '6286019d2f171_1.09_Chrysoberyl_3.jpg', '2022-05-19 13:36:47', '2022-05-19 13:37:18'),
(0, 208, 48, '628603969db85_1.09_Chrysoberyl_1.jpg', '2022-05-19 13:45:14', '2022-05-19 13:45:14'),
(0, 209, 48, '6286039867bd5_1.09_Chrysoberyl_2.jpg', '2022-05-19 13:45:14', '2022-05-19 13:45:14'),
(2, 210, 49, '628604b205f15_1.16_Chrysoberyl_2.jpg', '2022-05-19 13:49:59', '2022-05-19 13:50:14'),
(1, 211, 49, '628604b33599d_1.16_Chrysoberyl_1.jpg', '2022-05-19 13:49:59', '2022-05-19 13:50:14'),
(3, 212, 49, '628604b4eb23e_1.16_Chrysoberyl_3.jpg', '2022-05-19 13:49:59', '2022-05-19 13:50:14'),
(6, 213, 50, '6286061308bfc_1.21_Chrysoberyl_2.jpg', '2022-05-19 13:55:52', '2022-05-20 18:30:32'),
(5, 214, 50, '6286061375b4d_1.21_Chrysoberyl_1.jpg', '2022-05-19 13:55:52', '2022-05-20 18:30:32'),
(7, 215, 50, '628606156a85d_1.21_Chrysoberyl_3.jpg', '2022-05-19 13:55:52', '2022-05-20 18:30:32'),
(2, 216, 51, '6286072f0f417_1.22_Chrysoberyl_2.jpg', '2022-05-19 14:00:37', '2022-05-19 14:00:50'),
(1, 217, 51, '6286072f26300_1.22_Chrysoberyl_1.jpg', '2022-05-19 14:00:37', '2022-05-19 14:00:50'),
(3, 218, 51, '6286073298370_1.22_Chrysoberyl_3.jpg', '2022-05-19 14:00:37', '2022-05-19 14:00:50'),
(2, 219, 52, '62861880d06f8_1.30_Chrysoberyl_2.jpg', '2022-05-19 15:14:30', '2022-05-19 15:14:58'),
(1, 220, 52, '62861880d071f_1.30_Chrysoberyl_1.jpg', '2022-05-19 15:14:30', '2022-05-19 15:14:58'),
(3, 221, 52, '62861883489a7_1.30_Chrysoberyl_3.jpg', '2022-05-19 15:14:30', '2022-05-19 15:14:58'),
(0, 222, 53, '62861e70c3542_1.34_Chrysoberyl_1.jpg', '2022-05-19 15:40:58', '2022-05-19 15:40:58'),
(0, 223, 53, '62861e710e5d1_1.34_Chrysoberyl_2.jpg', '2022-05-19 15:40:58', '2022-05-19 15:40:58'),
(0, 224, 54, '628620269cb80_1.42_Chrysoberyl_1.jpg', '2022-05-19 15:47:06', '2022-05-19 15:47:06'),
(0, 225, 54, '6286202862087_1.42_Chrysoberyl_2.jpg', '2022-05-19 15:47:06', '2022-05-19 15:47:06'),
(2, 226, 55, '62862169ad41f_1.47_Chrysoberyl_2.jpg', '2022-05-19 15:52:29', '2022-05-19 15:52:39'),
(1, 227, 55, '6286216b0bc61_1.47_Chrysoberyl_1.jpg', '2022-05-19 15:52:29', '2022-05-19 15:52:39'),
(0, 228, 56, '628624e8f2d5f_1.52_Vanadium_Chrysoberyl_1.jpg', '2022-05-19 16:07:30', '2022-05-19 16:07:30'),
(0, 229, 56, '628624e910047_1.52_Vanadium_Chrysoberyl_2.jpg', '2022-05-19 16:07:30', '2022-05-19 16:07:30'),
(0, 230, 56, '628624eb9cd07_1.52_Vanadium_Chrysoberyl_3.jpg', '2022-05-19 16:07:30', '2022-05-19 16:07:30'),
(0, 231, 57, '62862629030c8_1.53_Vanadium_Chrysoberyl_1.jpg', '2022-05-19 16:12:53', '2022-05-19 16:12:53'),
(0, 232, 57, '628626290a2d0_1.53_Vanadium_Chrysoberyl_2.jpg', '2022-05-19 16:12:53', '2022-05-19 16:12:53'),
(0, 233, 57, '6286262c2410e_1.53_Vanadium_Chrysoberyl_3.jpg', '2022-05-19 16:12:53', '2022-05-19 16:12:53'),
(0, 234, 58, '62862afe2d28e_1.54_Chrysoberyl_1.jpg', '2022-05-19 16:33:21', '2022-05-19 16:33:21'),
(0, 235, 58, '62862afe761af_1.54_Chrysoberyl_2.jpg', '2022-05-19 16:33:21', '2022-05-19 16:33:21'),
(0, 236, 58, '62862b002f3b1_1.54_Chrysoberyl_3.jpg', '2022-05-19 16:33:21', '2022-05-19 16:33:21'),
(0, 237, 59, '62862e8ba1d64_1.58_Vanadium_Chrysoberyl_1.jpg', '2022-05-19 16:48:29', '2022-05-19 16:48:29'),
(0, 238, 59, '62862e8bcb87c_1.58_Vanadium_Chrysoberyl_2.jpg', '2022-05-19 16:48:29', '2022-05-19 16:48:29'),
(0, 239, 60, '62862f7d39e9b_1.80_Vanadium_Chrysoberyl_1.jpg', '2022-05-19 16:52:37', '2022-05-19 16:52:37'),
(0, 240, 60, '62862f7fc36d3_1.80_Vanadium_Chrysoberyl_2.jpg', '2022-05-19 16:52:37', '2022-05-19 16:52:37'),
(0, 241, 60, '62862f8378d6b_1.80_Vanadium_Chrysoberyl_3.jpg', '2022-05-19 16:52:37', '2022-05-19 16:52:37'),
(2, 242, 61, '628630a40fc82_1.96_Chrysoberyl_2.jpg', '2022-05-19 16:57:32', '2022-05-19 16:57:44'),
(1, 243, 61, '628630a468819_1.96_Chrysoberyl_1.jpg', '2022-05-19 16:57:32', '2022-05-19 16:57:44'),
(2, 244, 62, '62863379427ed_2.02_Chrysoberyl_2.jpg', '2022-05-19 17:09:34', '2022-05-19 17:09:46'),
(1, 245, 62, '6286337b846ff_2.02_Chrysoberyl_1.jpg', '2022-05-19 17:09:34', '2022-05-19 17:09:46'),
(3, 246, 62, '6286337be47cd_2.02_Chrysoberyl_3.jpg', '2022-05-19 17:09:34', '2022-05-19 17:09:46'),
(0, 247, 63, '6286489f51ab1_2.02_Chrysoberyl_1.jpg', '2022-05-19 18:39:48', '2022-05-19 18:39:48'),
(0, 248, 63, '6286489ff3703_2.02_Chrysoberyl_2.jpg', '2022-05-19 18:39:48', '2022-05-19 18:39:48'),
(0, 249, 63, '628648a208fd9_2.02_Chrysoberyl_3.jpg', '2022-05-19 18:39:48', '2022-05-19 18:39:48'),
(2, 254, 64, '6286567e1317e_2.18_Vanadium_Chrysoberyl_2.jpg', '2022-05-19 19:38:56', '2022-05-19 19:39:35'),
(1, 255, 64, '6286567e7c119_2.18_Vanadium_Chrysoberyl_1.jpg', '2022-05-19 19:38:56', '2022-05-19 19:39:35'),
(2, 262, 66, '6286600cd47b7_2.35_Chrysoberyl_2.jpg', '2022-05-19 20:19:50', '2022-05-19 20:20:01'),
(1, 263, 66, '6286600e8fbb0_2.35_Chrysoberyl_1.jpg', '2022-05-19 20:19:50', '2022-05-19 20:20:01'),
(3, 264, 66, '62866013553b8_2.35_Chrysoberyl_3.jpg', '2022-05-19 20:19:50', '2022-05-19 20:20:01'),
(2, 265, 67, '62875a60e66bb_2.58_Chrysoberyl_2.jpg', '2022-05-20 14:07:48', '2022-05-20 14:07:54'),
(1, 266, 67, '62875a61018aa_2.58_Chrysoberyl_1.jpg', '2022-05-20 14:07:48', '2022-05-20 14:07:54'),
(2, 269, 69, '62875d6923590_3.25_Chrysoberyl_2.jpg', '2022-05-20 14:20:43', '2022-05-20 14:21:14'),
(1, 270, 69, '62875d697c195_3.25_Chrysoberyl_1.jpg', '2022-05-20 14:20:43', '2022-05-20 14:21:14'),
(2, 271, 70, '62970978a4c8f_62875f5dc1005_4.59_Chrysoberyl_2.jpg', '2022-05-20 14:29:07', '2022-06-02 13:24:53'),
(4, 273, 70, '62875f61207b1_4.59_Chrysoberyl_4.jpg', '2022-05-20 14:29:07', '2022-06-02 13:24:49'),
(3, 274, 70, '62875f614e1b9_4.59_Chrysoberyl_3.jpg', '2022-05-20 14:29:07', '2022-06-02 13:25:33'),
(2, 275, 65, '6287676d628d7_2.34_Chrysoberyl_2.jpg', '2022-05-20 15:03:36', '2022-05-20 15:03:46'),
(1, 276, 65, '6287676e23b13_2.34_Chrysoberyl_1.jpg', '2022-05-20 15:03:36', '2022-05-20 15:03:46'),
(3, 277, 65, '628767702337b_2.34_Chrysoberyl_3.jpg', '2022-05-20 15:03:36', '2022-05-20 15:03:46'),
(0, 278, 68, '62876a4ae842f_2.85_Chrysoberyl_1.jpg', '2022-05-20 15:15:44', '2022-05-20 15:15:44'),
(0, 279, 68, '62876a4c075d5_2.85_Chrysoberyl_2.jpg', '2022-05-20 15:15:44', '2022-05-20 15:15:44'),
(0, 280, 68, '62876a4d598ac_2.85_Chrysoberyl_3.jpg', '2022-05-20 15:15:44', '2022-05-20 15:15:44'),
(0, 281, 71, '62877f31d1bc3_1.00_Garnet_1.jpg', '2022-05-20 16:47:53', '2022-05-20 16:47:53'),
(0, 282, 71, '62877f35160da_1.00_Garnet_2.jpg', '2022-05-20 16:47:53', '2022-05-20 16:47:53'),
(0, 283, 71, '62877f474b31f_1.00_Garnet_3.jpg', '2022-05-20 16:47:53', '2022-05-20 16:47:53'),
(0, 284, 71, '62877f4a5f633_1.00_Garnet_4.jpg', '2022-05-20 16:47:53', '2022-05-20 16:47:53'),
(1, 285, 72, '62878c4be775b_1.14_Garnet_1.jpg', '2022-05-20 17:41:30', '2022-05-20 17:44:31'),
(2, 286, 72, '62878c4c662bb_1.14_Garnet_2.jpg', '2022-05-20 17:41:30', '2022-05-20 17:44:31'),
(4, 287, 72, '62878c62bf8b6_1.14_Garnet_4.jpg', '2022-05-20 17:41:30', '2022-05-20 17:44:31'),
(3, 288, 72, '62878c62ea6a8_1.14_Garnet_3.jpg', '2022-05-20 17:41:30', '2022-05-20 17:44:31'),
(2, 289, 73, '62879677505c9_1.21_Garnet_2.jpg', '2022-05-20 18:24:26', '2022-05-20 18:30:35'),
(1, 290, 73, '62879677a5a10_1.21_Garnet_1.jpg', '2022-05-20 18:24:26', '2022-05-20 18:30:35'),
(4, 291, 73, '6287967989384_1.21_Garnet_4.jpg', '2022-05-20 18:24:26', '2022-05-20 18:30:32'),
(3, 292, 73, '6287967a29fb1_1.21_Garnet_3.jpg', '2022-05-20 18:24:26', '2022-05-20 18:30:32'),
(2, 298, 74, '628dff5440d20_1.26_Garnet_2.jpg', '2022-05-25 15:05:18', '2022-05-25 15:05:30'),
(1, 299, 74, '628dff546109d_1.26_Garnet_1.jpg', '2022-05-25 15:05:18', '2022-05-25 15:05:30'),
(4, 300, 74, '628dff579bf7a_1.26_Garnet_4.jpg', '2022-05-25 15:05:18', '2022-05-25 15:08:34'),
(3, 301, 74, '628dff57e2cad_1.26_Garnet_3.jpg', '2022-05-25 15:05:18', '2022-05-25 15:08:34'),
(5, 302, 74, '628dff59e8f67_1.26_Garnet_5.jpg', '2022-05-25 15:05:18', '2022-05-25 15:05:30'),
(2, 303, 75, '628e007377f98_1.28_Garnet_2.jpg', '2022-05-25 15:10:04', '2022-05-25 15:10:16'),
(1, 304, 75, '628e0074595ed_1.28_Garnet_1.jpg', '2022-05-25 15:10:04', '2022-05-25 15:10:16'),
(4, 305, 75, '628e00779aac1_1.28_Garnet_4.jpg', '2022-05-25 15:10:04', '2022-05-25 15:10:19'),
(3, 306, 75, '628e00786cf6b_1.28_Garnet_3.jpg', '2022-05-25 15:10:04', '2022-05-25 15:10:19'),
(2, 307, 76, '628e0d1879824_1.29_Garnet_2.jpg', '2022-05-25 16:13:39', '2022-05-25 16:13:47'),
(1, 308, 76, '628e0d18ba532_1.29_Garnet_1.jpg', '2022-05-25 16:13:39', '2022-05-25 16:13:47'),
(3, 309, 76, '628e0d19db5e1_1.29_Garnet_3.jpg', '2022-05-25 16:13:39', '2022-05-25 16:13:47'),
(0, 310, 77, '628e1121796d2_1.32_Garnet_1.jpg', '2022-05-25 16:21:09', '2022-05-25 16:21:09'),
(0, 311, 77, '628e11231c093_1.32_Garnet_2.jpg', '2022-05-25 16:21:09', '2022-05-25 16:21:09'),
(0, 312, 77, '628e11247d399_1.32_Garnet_3.jpg', '2022-05-25 16:21:09', '2022-05-25 16:21:09'),
(2, 313, 78, '628e155351519_1.36_Garnet_2.jpg', '2022-05-25 16:39:06', '2022-05-25 16:39:23'),
(1, 314, 78, '628e155446da4_1.36_Garnet_1.jpg', '2022-05-25 16:39:06', '2022-05-25 16:39:23'),
(3, 315, 78, '628e1557bf771_1.36_Garnet_3.jpg', '2022-05-25 16:39:06', '2022-05-25 16:39:23'),
(4, 316, 78, '628e1557cf232_1.36_Garnet_4.jpg', '2022-05-25 16:39:06', '2022-05-25 16:39:23'),
(6, 317, 79, '628e16cb20855_1.38_Garnet_2.jpg', '2022-05-25 16:45:28', '2022-05-25 17:03:48'),
(5, 318, 79, '628e16ccaefd3_1.38_Garnet_1.jpg', '2022-05-25 16:45:28', '2022-05-25 17:03:48'),
(7, 319, 79, '628e16d553a31_1.38_Garnet_3.jpg', '2022-05-25 16:45:28', '2022-05-25 17:03:48'),
(8, 320, 79, '628e16d6b211b_1.38_Garnet_4.jpg', '2022-05-25 16:45:28', '2022-06-02 18:07:14'),
(2, 321, 80, '628e1b025e2e1_1.38_Garnet_2.jpg', '2022-05-25 17:03:38', '2022-05-25 17:03:48'),
(1, 322, 80, '628e1b0437a3b_1.38_Garnet_1.jpg', '2022-05-25 17:03:38', '2022-05-25 17:03:48'),
(3, 323, 80, '628e1b1749652_1.38_Garnet_3.jpg', '2022-05-25 17:03:38', '2022-05-25 17:03:48'),
(4, 324, 80, '628e1b1760bbb_1.38_Garnet_4.jpg', '2022-05-25 17:03:38', '2022-05-25 17:03:48'),
(2, 325, 81, '628e1c5da0e74_1.39_Garnet_2.jpg', '2022-05-25 17:09:56', '2022-05-25 17:10:06'),
(1, 326, 81, '628e1c609a0f0_1.39_Garnet_1.jpg', '2022-05-25 17:09:56', '2022-05-25 17:10:06'),
(3, 327, 81, '628e1c671ad42_1.39_Garnet_3.jpg', '2022-05-25 17:09:56', '2022-05-25 17:10:06'),
(5, 328, 81, '628e1c72e7844_1.39_Garnet_5.jpg', '2022-05-25 17:09:56', '2022-05-25 17:10:12'),
(4, 329, 81, '628e1c7449cea_1.39_Garnet_4.jpg', '2022-05-25 17:09:56', '2022-05-25 17:10:12'),
(0, 334, 82, '628e20ec6ad6e_1.43_Garnet_1.jpg', '2022-05-25 17:28:37', '2022-05-25 17:28:37'),
(0, 335, 82, '628e20edc4da7_1.43_Garnet_2.jpg', '2022-05-25 17:28:37', '2022-05-25 17:28:37'),
(0, 336, 82, '628e20f335538_1.43_Garnet_3.jpg', '2022-05-25 17:28:37', '2022-05-25 17:28:37'),
(0, 337, 82, '628e20f3458cc_1.43_Garnet_4.jpg', '2022-05-25 17:28:37', '2022-05-25 17:28:37'),
(1, 338, 83, '628e216c6e71d_1.50_Garnet_1.jpg', '2022-05-25 17:30:45', '2022-05-25 17:30:58'),
(2, 339, 83, '628e216c88882_1.50_Garnet_2.jpg', '2022-05-25 17:30:45', '2022-05-25 17:30:58'),
(4, 340, 83, '628e216f8d03b_1.50_Garnet_4.jpg', '2022-05-25 17:30:45', '2022-05-25 17:30:58'),
(3, 341, 83, '628e216fd686c_1.50_Garnet_3.jpg', '2022-05-25 17:30:45', '2022-05-25 17:30:58'),
(0, 342, 84, '628e23f3b9943_1.54_Garnet_1.jpg', '2022-05-25 17:41:32', '2022-05-25 17:41:32'),
(0, 343, 84, '628e23f4a671b_1.54_Garnet_2.jpg', '2022-05-25 17:41:33', '2022-05-25 17:41:33'),
(0, 344, 84, '628e23f64e9d1_1.54_Garnet_3.jpg', '2022-05-25 17:41:33', '2022-05-25 17:41:33'),
(0, 345, 84, '628e23f6e084a_1.54_Garnet_4.jpg', '2022-05-25 17:41:33', '2022-05-25 17:41:33'),
(2, 346, 85, '628e242ec3986_1.61_Garnet_2.jpg', '2022-05-25 17:46:02', '2022-05-25 17:46:10'),
(1, 347, 85, '628e24308750d_1.61_Garnet_1.jpg', '2022-05-25 17:46:02', '2022-05-25 17:46:10'),
(3, 348, 85, '628e24319f115_1.61_Garnet_3.jpg', '2022-05-25 17:46:02', '2022-05-25 17:46:10'),
(4, 349, 85, '628e243274a98_1.61_Garnet_4.jpg', '2022-05-25 17:46:02', '2022-05-25 17:46:10'),
(0, 350, 86, '628e260e76848_1.87_Garnet_1.jpg', '2022-05-25 17:50:30', '2022-05-25 17:50:30'),
(0, 351, 86, '628e260ee15c0_1.87_Garnet_2.jpg', '2022-05-25 17:50:30', '2022-05-25 17:50:30'),
(0, 352, 86, '628e2611781e7_1.87_Garnet_3.jpg', '2022-05-25 17:50:30', '2022-05-25 17:50:30'),
(0, 353, 86, '628e2611f022c_1.87_Garnet_4.jpg', '2022-05-25 17:50:30', '2022-05-25 17:50:30'),
(0, 354, 86, '628e2613bd941_1.87_Garnet_5.jpg', '2022-05-25 17:50:30', '2022-05-25 17:50:30'),
(2, 355, 87, '628e271d1a638_3.69_Garnet_2.jpg', '2022-05-25 17:55:02', '2022-05-25 17:55:12'),
(1, 356, 87, '628e271d8edb2_3.69_Garnet_1.jpg', '2022-05-25 17:55:02', '2022-05-25 17:55:12'),
(3, 357, 87, '628e271fbd10d_3.69_Garnet_3.jpg', '2022-05-25 17:55:02', '2022-05-25 17:55:12'),
(4, 358, 87, '628e272088236_3.69_Garnet_4.jpg', '2022-05-25 17:55:02', '2022-05-25 17:55:12'),
(5, 359, 87, '628e2722a2e55_3.69_Garnet_5.jpg', '2022-05-25 17:55:02', '2022-05-25 17:55:12'),
(6, 360, 87, '628e272337595_3.69_Garnet_6.jpg', '2022-05-25 17:55:02', '2022-05-25 17:55:12'),
(0, 361, 88, '62960bc7e59af_0.81_Hessonite_1.jpg', '2022-05-31 17:36:32', '2022-05-31 17:36:32'),
(0, 362, 88, '62960bc8ae381_0.81_Hessonite_2.jpg', '2022-05-31 17:36:32', '2022-05-31 17:36:32'),
(0, 363, 88, '62960bcc1baaa_0.81_Hessonite_3.jpg', '2022-05-31 17:36:32', '2022-05-31 17:36:32'),
(0, 364, 89, '62960d5559e58_1.06_Tsavorite_1.jpg', '2022-05-31 17:43:05', '2022-05-31 17:43:05'),
(0, 365, 89, '62960d57630e5_1.06_Tsavorite_2.jpg', '2022-05-31 17:43:05', '2022-05-31 17:43:05'),
(0, 366, 89, '62960d5939caf_1.06_Tsavorite_3.jpg', '2022-05-31 17:43:05', '2022-05-31 17:43:05'),
(2, 371, 90, '62960f619c844_1.69_Hessonite_2.jpg', '2022-05-31 17:51:47', '2022-05-31 17:51:56'),
(1, 372, 90, '62960f623fc3b_1.69_Hessonite_1.jpg', '2022-05-31 17:51:47', '2022-05-31 17:51:56'),
(2, 373, 91, '629611a552252_1.90_Garnet_2.jpg', '2022-05-31 18:01:34', '2022-05-31 18:01:44'),
(1, 374, 91, '629611a93608f_1.90_Garnet_1.jpg', '2022-05-31 18:01:34', '2022-05-31 18:01:44'),
(3, 375, 91, '629611ad12d4d_1.90_Garnet_3.jpg', '2022-05-31 18:01:34', '2022-05-31 18:01:44'),
(2, 382, 92, '62961f463c87d_1.94_Spessartite_2.jpg', '2022-05-31 18:59:47', '2022-05-31 18:59:57'),
(1, 383, 92, '62961f46b1d75_1.94_Spessartite_1.jpg', '2022-05-31 18:59:47', '2022-05-31 18:59:57'),
(3, 384, 92, '62961f48dab6a_1.94_Spessartite_3.jpg', '2022-05-31 18:59:47', '2022-05-31 18:59:57'),
(2, 385, 93, '62961fc646f80_1.98_Garnet_2.jpg', '2022-05-31 19:01:45', '2022-05-31 19:01:54'),
(1, 386, 93, '62961fc7a3458_1.98_Garnet_1.jpg', '2022-05-31 19:01:45', '2022-05-31 19:01:54'),
(2, 387, 94, '6296253b0c18c_2.20_Garnet_2.jpg', '2022-05-31 19:25:01', '2022-05-31 19:25:19'),
(1, 388, 94, '6296253bb4d90_2.20_Garnet_1.jpg', '2022-05-31 19:25:01', '2022-05-31 19:25:19'),
(0, 389, 95, '629628b5e002d_2.93_Grossular_Garnet_1.jpg', '2022-05-31 19:40:08', '2022-05-31 19:40:08'),
(0, 390, 95, '629628b86546d_2.93_Grossular_Garnet_2.jpg', '2022-05-31 19:40:08', '2022-05-31 19:40:08'),
(0, 391, 95, '629628c3d8e4d_2.93_Grossular_Garnet_3.jpg', '2022-05-31 19:40:08', '2022-05-31 19:40:08'),
(0, 392, 96, '62962c66b995e_3.10_Mandarin_Garnets_1.jpg', '2022-05-31 19:55:43', '2022-05-31 19:55:43'),
(0, 393, 96, '62962c6831507_3.10_Mandarin_Garnets_2.jpg', '2022-05-31 19:55:43', '2022-05-31 19:55:43'),
(0, 394, 96, '62962c69d33c3_3.10_Mandarin_Garnets_3.jpg', '2022-05-31 19:55:43', '2022-05-31 19:55:43'),
(0, 395, 97, '62962d46d92c1_5.31_Garnet_1.jpg', '2022-05-31 19:59:35', '2022-05-31 19:59:35'),
(0, 396, 97, '62962d471a37a_5.31_Garnet_2.jpg', '2022-05-31 19:59:35', '2022-05-31 19:59:35'),
(0, 397, 97, '62962d4bef4f6_5.31_Garnet_3.jpg', '2022-05-31 19:59:35', '2022-05-31 19:59:35'),
(0, 398, 97, '62962d4d13066_5.31_Garnet_4.jpg', '2022-05-31 19:59:35', '2022-05-31 19:59:35'),
(1, 399, 70, '629873c36b5a4_4.59_Chrysoberyl_1.jpg', '2022-06-02 13:24:37', '2022-06-02 13:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `genesis_bodys`
--

CREATE TABLE `genesis_bodys` (
  `id` int(11) NOT NULL,
  `genesis_body_header1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_body_header2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_body_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_body_image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_image1_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_image1_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_body_image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_image2_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_image2_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genesis_bodys`
--

INSERT INTO `genesis_bodys` (`id`, `genesis_body_header1`, `genesis_body_header2`, `genesis_body_text`, `genesis_body_image1`, `genesis_image1_header`, `genesis_image1_body`, `genesis_body_image2`, `genesis_image2_header`, `genesis_image2_body`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum libero adipiscing', 'dolor amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et libero nec leo rhoncus sagittis. Duis imperdiet tortor sit amet eros volutpat, at vehicula felis aliquet. Donec scelerisque posuere felis, vel tempus massa malesuada vitae. Suspendisse nec aliquet neque, ac consectetur odio. Praesent in suscipit dui. Morbi convallis,', 'images/Genesis-backend/1734243218430433.png', 'Adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et libero nec leo rhoncus sagittis. Duis imperdiet tortor sit amet eros volutpat, at vehicula felis aliquet. Donec scelerisque posuere felis, vel tempus massa malesuada vitae.', 'images/Genesis-backend/1717406880175359.png', 'Lorem ipsum 02', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et libero nec leo rhoncus sagittis. Duis imperdiet tortor sit amet eros volutpat,. at vehicula felis aliquet. Donec scelerisque posuere felis, vel tempus massa malesuada vitae', '2021-11-25 07:57:12', '2022-05-30 14:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `genesis_ends`
--

CREATE TABLE `genesis_ends` (
  `id` int(11) NOT NULL,
  `genesis_ends_text1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_ends_text2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_ends_text3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_ends_image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_image1_text1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_image1_text2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_ends_image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_image2_text1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_image2_text2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genesis_ends`
--

INSERT INTO `genesis_ends` (`id`, `genesis_ends_text1`, `genesis_ends_text2`, `genesis_ends_text3`, `genesis_ends_image1`, `genesis_image1_text1`, `genesis_image1_text2`, `genesis_ends_image2`, `genesis_image2_text1`, `genesis_image2_text2`, `created_at`, `updated_at`) VALUES
(1, 'Note: There are no additional charges for this service, nor does an inquiry oblige you to buy anything at all. You request a stone, we tap the source and find options for you if any are available at the time. Simple. There are no guarantees that a stone could be found – particularly with demanding orders/cuts but it doesn’t hurt to try.', 'For more info, estimated supply times and detailed explanations, just contact us.', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'images/genesis_new/1717408536406874.png', 'Lorem Ipsum is simply', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s', 'images/genesis_new/1717408536410261.png', 'Lorem Ipsum is simply', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s', '2021-11-25 08:23:32', '2021-11-25 08:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `genesis_headers`
--

CREATE TABLE `genesis_headers` (
  `id` int(11) NOT NULL,
  `genesis_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genesis_headers`
--

INSERT INTO `genesis_headers` (`id`, `genesis_header`, `genesis_body`, `created_at`, `updated_at`) VALUES
(2, 'Our Company', 'We started out as a business to business gem provider in 2011 by exporting Ceylon sapphires to dealers, jewelers and retailers across the planet. Our main market is the U.S., but we’ve established relationships with companies and clients in other countries as well.', '2021-11-25 07:53:55', '2021-12-15 03:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `genesis_lasts`
--

CREATE TABLE `genesis_lasts` (
  `id` int(11) NOT NULL,
  `genesis_lasts_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_lasts_text1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_lasts_text2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_lasts_text3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_lasts_text4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_lasts_text5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genesis_lasts`
--

INSERT INTO `genesis_lasts` (`id`, `genesis_lasts_header`, `genesis_lasts_text1`, `genesis_lasts_text2`, `genesis_lasts_text3`, `genesis_lasts_text4`, `genesis_lasts_text5`, `created_at`, `updated_at`) VALUES
(1, 'Gemstones On Request', 'What if you can’t find the stone you’re looking for ?', 'Spent hours poring over displays in jewelry stores and came back empty handed? Or Googled for days but found nothing ?', 'We’ll find it for you, if we can.', 'Before we went public and made our gems and services available to the broader market we operated mainly as an on-demand stone provider for other companies within the industry. Dealers or jewelers looking for specific stones or sets would come to us and we’d find it for them. We still do sometimes. In transitioning to a more open business model, we’ve extended the opportunity to leverage this service to all our clients.', 'So whether it’s about finding the perfect stone to pop the question, working on a jewelry project or adding the latest masterpiece to your collection, simply contact us and we’ll keep an eye out!', '2021-11-25 08:12:40', '2021-12-17 05:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `genesis_seconds`
--

CREATE TABLE `genesis_seconds` (
  `id` int(11) NOT NULL,
  `genesis_seconds_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genesis_seconds_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genesis_seconds`
--

INSERT INTO `genesis_seconds` (`id`, `genesis_seconds_header`, `genesis_seconds_body`, `created_at`, `updated_at`) VALUES
(1, 'Being based in Sri Lanka,', 'fine quality Ceylon sapphires naturally became our primary focus point and they used to comprise the largest share of our exports. But due to the rising popularity of alternatives to the ‘big three’ of the colored gem trade, we’ve recently started offering other varieties like chrysoberyls, spinels, tourmalines and garnets as well. We do not, have not, nor ever will deal in synthetic, lead-glass filled or beryllium diffusion treated stones. We’re trained gemologists and Fellows of the Gemmological Association of Great Britain, as well as members of the GIA Alumni association.', '2021-11-25 07:54:50', '2021-11-25 07:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `order` int(11) DEFAULT 0,
  `id` int(11) NOT NULL,
  `home_banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_body_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_banner_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_banner_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`order`, `id`, `home_banner_image`, `home_body_image`, `home_banner_header`, `home_banner_description`, `disabled`, `created_at`, `updated_at`) VALUES
(2, 1, 'images/home_slider/1734071669087786.jpg', '', NULL, NULL, 1, '2022-02-11 02:04:14', '2022-06-17 17:18:47'),
(1, 2, 'images/home_slider/1734071643628200.jpg', '', 'Fine, Exquisitely Faceted Gems', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '2022-02-11 02:06:55', '2022-06-17 17:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `home_body`
--

CREATE TABLE `home_body` (
  `id` int(11) NOT NULL,
  `home_body_banner` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_body_banner_text1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_body_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_body_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_body_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_body`
--

INSERT INTO `home_body` (`id`, `home_body_banner`, `home_body_banner_text1`, `home_body_text`, `home_body_content`, `home_body_logo`, `created_at`, `updated_at`) VALUES
(1, 'images/home_body/1734073920401054.jpg', 'Lorem Ipsum is simply dummy text of the printing and 5', 'typesetting industry. 6', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, unknown printer took a galley of type and scrambled it to make a type. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, unknown printer took a galley of type and scrambled it to make a type.</p>', 'images/home_body/1734073950751716.jpg', '2021-11-26 00:02:40', '2022-05-28 17:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `home_map`
--

CREATE TABLE `home_map` (
  `id` int(11) NOT NULL,
  `home_map_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_map_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_map`
--

INSERT INTO `home_map` (`id`, `home_map_text`, `home_map_body`, `created_at`, `updated_at`) VALUES
(2, 'Customer Map', 'Lorem Ipsum is simply dummy text of the printing and typesetting', '2021-11-26 00:06:10', '2022-02-24 11:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `home_select_us`
--

CREATE TABLE `home_select_us` (
  `id` int(11) NOT NULL,
  `home_selectus_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_selectus_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_selectus_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_select_us`
--

INSERT INTO `home_select_us` (`id`, `home_selectus_logo`, `home_selectus_header`, `home_selectus_body`, `created_at`, `updated_at`) VALUES
(1, 'images/home-select/1717435637860923.png', 'Lorem Ipsum is simply dummy text 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an.', '2021-11-25 15:34:17', '2022-02-18 10:41:58'),
(2, 'images/home-select/1717435647413328.png', 'Lorem Ipsum is simply dummy text 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an.', '2021-11-25 15:34:27', '2022-02-18 10:41:43'),
(3, 'images/home-select/1728268690219274.png', 'Test Lorem Ipsum Test', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an.', '2021-11-25 15:35:03', '2022-05-30 14:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `post_main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `post_main_image`, `post_text`, `post_body`, `created_at`, `updated_at`) VALUES
(1, 'images/Journal_fq/1717471931422971.jpg', 'Lorem Ipsum is simply dummy text of.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam purus, tempus quis mollis vitae, gravida eu nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque lacinia magna a sagittis cursus. Aliquam erat volutpat. Cras eu tortor et nibh varius commodo quis et lorem. In hac habitasse platea dictumst. Vestibulum in elementum diam. Cras lobortis pulvinar libero in elementum. Quisque pharetra lorem ac quam hendrerit, ac efficitur elit venenatis.</p>\r\n\r\n<p>Fusce non faucibus enim. Praesent sit amet varius erat, sed varius tellus. Sed aliquam molestie nulla quis porttitor. Donec id tempor erat. Quisque in libero vitae eros elementum consequat vitae et erat. Morbi facilisis tincidunt dolor quis pretium. Aenean at mauris sit amet eros venenatis ultrices. Mauris neque nisi, vehicula vel dolor eleifend, dignissim dapibus velit. Mauris dictum erat ut pretium egestas. Phasellus dui nisl, molestie vitae varius quis, molestie dapibus urna. Ut id lobortis lectus. Proin molestie euismod porttitor.</p>\r\n\r\n<p>Donec tristique eros nec sem pharetra, eleifend vulputate enim eleifend. Ut ac erat lectus. Quisque at volutpat massa. Etiam sit amet elit sit amet lectus mollis suscipit lacinia a elit. Suspendisse nec interdum dolor, vitae dictum mi. In hac habitasse platea dictumst. Ut varius, risus et placerat ultrices, lacus urna tempor nibh, ut accumsan felis velit non neque. Nam non dolor turpis. Suspendisse feugiat massa non felis placerat, vitae posuere lorem porttitor. Fusce vitae congue augue. Aenean fermentum nulla mi, eget tincidunt ligula pharetra eu. Aliquam volutpat orci id est elementum, ut aliquam eros rutrum. Praesent in orci a massa condimentum accumsan sit amet in nunc. Sed felis diam, fermentum vitae ipsum a, viverra ultricies arcu.</p>', '2021-11-26 01:11:10', '2022-02-25 11:25:52'),
(2, 'images/Journal_fq/1717471986370908.jpg', 'Lorem Ipsum is simply dummy text of.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam purus, tempus quis mollis vitae, gravida eu nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque lacinia magna a sagittis cursus. Aliquam erat volutpat. Cras eu tortor et nibh varius commodo quis et lorem. In hac habitasse platea dictumst. Vestibulum in elementum diam. Cras lobortis pulvinar libero in elementum. Quisque pharetra lorem ac quam hendrerit, ac efficitur elit venenatis.</p>\r\n\r\n<p>Fusce non faucibus enim. Praesent sit amet varius erat, sed varius tellus. Sed aliquam molestie nulla quis porttitor. Donec id tempor erat. Quisque in libero vitae eros elementum consequat vitae et erat. Morbi facilisis tincidunt dolor quis pretium. Aenean at mauris sit amet eros venenatis ultrices. Mauris neque nisi, vehicula vel dolor eleifend, dignissim dapibus velit. Mauris dictum erat ut pretium egestas. Phasellus dui nisl, molestie vitae varius quis, molestie dapibus urna. Ut id lobortis lectus. Proin molestie euismod porttitor.</p>\r\n\r\n<p>Donec tristique eros nec sem pharetra, eleifend vulputate enim eleifend. Ut ac erat lectus. Quisque at volutpat massa. Etiam sit amet elit sit amet lectus mollis suscipit lacinia a elit. Suspendisse nec interdum dolor, vitae dictum mi. In hac habitasse platea dictumst. Ut varius, risus et placerat ultrices, lacus urna tempor nibh, ut accumsan felis velit non neque. Nam non dolor turpis. Suspendisse feugiat massa non felis placerat, vitae posuere lorem porttitor. Fusce vitae congue augue. Aenean fermentum nulla mi, eget tincidunt ligula pharetra eu. Aliquam volutpat orci id est elementum, ut aliquam eros rutrum. Praesent in orci a massa condimentum accumsan sit amet in nunc. Sed felis diam, fermentum vitae ipsum a, viverra ultricies arcu.</p>\r\n\r\n<p>&nbsp;</p>', '2021-11-26 01:12:02', '2022-02-25 11:25:31'),
(3, 'images/Journal_fq/1717471996178786.jpg', 'Lorem Ipsum is simply dummy text of.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam purus, tempus quis mollis vitae, gravida eu nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque lacinia magna a sagittis cursus. Aliquam erat volutpat. Cras eu tortor et nibh varius commodo quis et lorem. In hac habitasse platea dictumst. Vestibulum in elementum diam. Cras lobortis pulvinar libero in elementum. Quisque pharetra lorem ac quam hendrerit, ac efficitur elit venenatis.</p>\r\n\r\n<p>Fusce non faucibus enim. Praesent sit amet varius erat, sed varius tellus. Sed aliquam molestie nulla quis porttitor. Donec id tempor erat. Quisque in libero vitae eros elementum consequat vitae et erat. Morbi facilisis tincidunt dolor quis pretium. Aenean at mauris sit amet eros venenatis ultrices. Mauris neque nisi, vehicula vel dolor eleifend, dignissim dapibus velit. Mauris dictum erat ut pretium egestas. Phasellus dui nisl, molestie vitae varius quis, molestie dapibus urna. Ut id lobortis lectus. Proin molestie euismod porttitor.</p>\r\n\r\n<p>Donec tristique eros nec sem pharetra, eleifend vulputate enim eleifend. Ut ac erat lectus. Quisque at volutpat massa. Etiam sit amet elit sit amet lectus mollis suscipit lacinia a elit. Suspendisse nec interdum dolor, vitae dictum mi. In hac habitasse platea dictumst. Ut varius, risus et placerat ultrices, lacus urna tempor nibh, ut accumsan felis velit non neque. Nam non dolor turpis. Suspendisse feugiat massa non felis placerat, vitae posuere lorem porttitor. Fusce vitae congue augue. Aenean fermentum nulla mi, eget tincidunt ligula pharetra eu. Aliquam volutpat orci id est elementum, ut aliquam eros rutrum. Praesent in orci a massa condimentum accumsan sit amet in nunc. Sed felis diam, fermentum vitae ipsum a, viverra ultricies arcu.</p>\r\n\r\n<p>&nbsp;</p>', '2021-11-26 01:12:11', '2022-02-25 11:25:12'),
(4, 'images/Journal_fq/1717472005166233.jpg', 'Lorem Ipsum is simply dummy text of.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam purus, tempus quis mollis vitae, gravida eu nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque lacinia magna a sagittis cursus. Aliquam erat volutpat. Cras eu tortor et nibh varius commodo quis et lorem. In hac habitasse platea dictumst. Vestibulum in elementum diam. Cras lobortis pulvinar libero in elementum. Quisque pharetra lorem ac quam hendrerit, ac efficitur elit venenatis.</p>\r\n\r\n<p>Fusce non faucibus enim. Praesent sit amet varius erat, sed varius tellus. Sed aliquam molestie nulla quis porttitor. Donec id tempor erat. Quisque in libero vitae eros elementum consequat vitae et erat. Morbi facilisis tincidunt dolor quis pretium. Aenean at mauris sit amet eros venenatis ultrices. Mauris neque nisi, vehicula vel dolor eleifend, dignissim dapibus velit. Mauris dictum erat ut pretium egestas. Phasellus dui nisl, molestie vitae varius quis, molestie dapibus urna. Ut id lobortis lectus. Proin molestie euismod porttitor.</p>\r\n\r\n<p>Donec tristique eros nec sem pharetra, eleifend vulputate enim eleifend. Ut ac erat lectus. Quisque at volutpat massa. Etiam sit amet elit sit amet lectus mollis suscipit lacinia a elit. Suspendisse nec interdum dolor, vitae dictum mi. In hac habitasse platea dictumst. Ut varius, risus et placerat ultrices, lacus urna tempor nibh, ut accumsan felis velit non neque. Nam non dolor turpis. Suspendisse feugiat massa non felis placerat, vitae posuere lorem porttitor. Fusce vitae congue augue. Aenean fermentum nulla mi, eget tincidunt ligula pharetra eu. Aliquam volutpat orci id est elementum, ut aliquam eros rutrum. Praesent in orci a massa condimentum accumsan sit amet in nunc. Sed felis diam, fermentum vitae ipsum a, viverra ultricies arcu.</p>\r\n\r\n<p>&nbsp;</p>', '2021-11-26 01:12:20', '2022-02-25 11:24:49'),
(5, 'images/Journal_fq/1717472014643072.jpg', 'Lorem Ipsum is simply dummy text of.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam purus, tempus quis mollis vitae, gravida eu nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque lacinia magna a sagittis cursus. Aliquam erat volutpat. Cras eu tortor et nibh varius commodo quis et lorem. In hac habitasse platea dictumst. Vestibulum in elementum diam. Cras lobortis pulvinar libero in elementum. Quisque pharetra lorem ac quam hendrerit, ac efficitur elit venenatis.</p>\r\n\r\n<p>Fusce non faucibus enim. Praesent sit amet varius erat, sed varius tellus. Sed aliquam molestie nulla quis porttitor. Donec id tempor erat. Quisque in libero vitae eros elementum consequat vitae et erat. Morbi facilisis tincidunt dolor quis pretium. Aenean at mauris sit amet eros venenatis ultrices. Mauris neque nisi, vehicula vel dolor eleifend, dignissim dapibus velit. Mauris dictum erat ut pretium egestas. Phasellus dui nisl, molestie vitae varius quis, molestie dapibus urna. Ut id lobortis lectus. Proin molestie euismod porttitor.</p>\r\n\r\n<p>Donec tristique eros nec sem pharetra, eleifend vulputate enim eleifend. Ut ac erat lectus. Quisque at volutpat massa. Etiam sit amet elit sit amet lectus mollis suscipit lacinia a elit. Suspendisse nec interdum dolor, vitae dictum mi. In hac habitasse platea dictumst. Ut varius, risus et placerat ultrices, lacus urna tempor nibh, ut accumsan felis velit non neque. Nam non dolor turpis. Suspendisse feugiat massa non felis placerat, vitae posuere lorem porttitor. Fusce vitae congue augue. Aenean fermentum nulla mi, eget tincidunt ligula pharetra eu. Aliquam volutpat orci id est elementum, ut aliquam eros rutrum. Praesent in orci a massa condimentum accumsan sit amet in nunc. Sed felis diam, fermentum vitae ipsum a, viverra ultricies arcu.</p>\r\n\r\n<p>&nbsp;</p>', '2021-11-26 01:12:29', '2022-02-25 11:24:02'),
(6, 'images/Journal_fq/1717472025842433.jpg', 'Lorem Ipsum is simply dummy text of.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam purus, tempus quis mollis vitae, gravida eu nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque lacinia magna a sagittis cursus. Aliquam erat volutpat. Cras eu tortor et nibh varius commodo quis et lorem. In hac habitasse platea dictumst. Vestibulum in elementum diam. Cras lobortis pulvinar libero in elementum. Quisque pharetra lorem ac quam hendrerit, ac efficitur elit venenatis.</p>\r\n\r\n<p>Fusce non faucibus enim. Praesent sit amet varius erat, sed varius tellus. Sed aliquam molestie nulla quis porttitor. Donec id tempor erat. Quisque in libero vitae eros elementum consequat vitae et erat. Morbi facilisis tincidunt dolor quis pretium. Aenean at mauris sit amet eros venenatis ultrices. Mauris neque nisi, vehicula vel dolor eleifend, dignissim dapibus velit. Mauris dictum erat ut pretium egestas. Phasellus dui nisl, molestie vitae varius quis, molestie dapibus urna. Ut id lobortis lectus. Proin molestie euismod porttitor.</p>\r\n\r\n<p>Donec tristique eros nec sem pharetra, eleifend vulputate enim eleifend. Ut ac erat lectus. Quisque at volutpat massa. Etiam sit amet elit sit amet lectus mollis suscipit lacinia a elit. Suspendisse nec interdum dolor, vitae dictum mi. In hac habitasse platea dictumst. Ut varius, risus et placerat ultrices, lacus urna tempor nibh, ut accumsan felis velit non neque. Nam non dolor turpis. Suspendisse feugiat massa non felis placerat, vitae posuere lorem porttitor. Fusce vitae congue augue. Aenean fermentum nulla mi, eget tincidunt ligula pharetra eu. Aliquam volutpat orci id est elementum, ut aliquam eros rutrum. Praesent in orci a massa condimentum accumsan sit amet in nunc. Sed felis diam, fermentum vitae ipsum a, viverra ultricies arcu.</p>\r\n\r\n<p>&nbsp;</p>', '2021-11-26 01:12:40', '2022-02-25 11:23:41'),
(7, 'images/Journal_fq/1717472131197833.jpg', 'Lorem Ipsum is simply dummy text of.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam purus, tempus quis mollis vitae, gravida eu nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque lacinia magna a sagittis cursus. Aliquam erat volutpat. Cras eu tortor et nibh varius commodo quis et lorem. In hac habitasse platea dictumst. Vestibulum in elementum diam. Cras lobortis pulvinar libero in elementum. Quisque pharetra lorem ac quam hendrerit, ac efficitur elit venenatis.</p>\r\n\r\n<p>Fusce non faucibus enim. Praesent sit amet varius erat, sed varius tellus. Sed aliquam molestie nulla quis porttitor. Donec id tempor erat. Quisque in libero vitae eros elementum consequat vitae et erat. Morbi facilisis tincidunt dolor quis pretium. Aenean at mauris sit amet eros venenatis ultrices. Mauris neque nisi, vehicula vel dolor eleifend, dignissim dapibus velit. Mauris dictum erat ut pretium egestas. Phasellus dui nisl, molestie vitae varius quis, molestie dapibus urna. Ut id lobortis lectus. Proin molestie euismod porttitor.</p>\r\n\r\n<p>Donec tristique eros nec sem pharetra, eleifend vulputate enim eleifend. Ut ac erat lectus. Quisque at volutpat massa. Etiam sit amet elit sit amet lectus mollis suscipit lacinia a elit. Suspendisse nec interdum dolor, vitae dictum mi. In hac habitasse platea dictumst. Ut varius, risus et placerat ultrices, lacus urna tempor nibh, ut accumsan felis velit non neque. Nam non dolor turpis. Suspendisse feugiat massa non felis placerat, vitae posuere lorem porttitor. Fusce vitae congue augue. Aenean fermentum nulla mi, eget tincidunt ligula pharetra eu. Aliquam volutpat orci id est elementum, ut aliquam eros rutrum. Praesent in orci a massa condimentum accumsan sit amet in nunc. Sed felis diam, fermentum vitae ipsum a, viverra ultricies arcu.</p>\r\n\r\n<p>&nbsp;</p>', '2021-11-26 01:14:20', '2022-02-25 11:23:18'),
(8, 'images/Journal_fq/1717472143149507.jpg', 'Lorem Ipsum is simply dummy text of.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam purus, tempus quis mollis vitae, gravida eu nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque lacinia magna a sagittis cursus. Aliquam erat volutpat. Cras eu tortor et nibh varius commodo quis et lorem. In hac habitasse platea dictumst. Vestibulum in elementum diam. Cras lobortis pulvinar libero in elementum. Quisque pharetra lorem ac quam hendrerit, ac efficitur elit venenatis.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://demo.adamantgems.com/images/post/blog-featured-2_1645772349.jpg\" style=\"height:166px; width:250px\" /></p>\r\n\r\n<p>Fusce non faucibus enim. Praesent sit amet varius erat, sed varius tellus. Sed aliquam molestie nulla quis porttitor. Donec id tempor erat. Quisque in libero vitae eros elementum consequat vitae et erat. Morbi facilisis tincidunt dolor quis pretium. Aenean at mauris sit amet eros venenatis ultrices. Mauris neque nisi, vehicula vel dolor eleifend, dignissim dapibus velit. Mauris dictum erat ut pretium egestas. Phasellus dui nisl, molestie vitae varius quis, molestie dapibus urna. Ut id lobortis lectus. Proin molestie euismod porttitor.</p>\r\n\r\n<p>Donec tristique eros nec sem pharetra, eleifend vulputate enim eleifend. Ut ac erat lectus. Quisque at volutpat massa. Etiam sit amet elit sit amet lectus mollis suscipit lacinia a elit. Suspendisse nec interdum dolor, vitae dictum mi. In hac habitasse platea dictumst. Ut varius, risus et placerat ultrices, lacus urna tempor nibh, ut accumsan felis velit non neque. Nam non dolor turpis. Suspendisse feugiat massa non felis placerat, vitae posuere lorem porttitor. Fusce vitae congue augue. Aenean fermentum nulla mi, eget tincidunt ligula pharetra eu. Aliquam volutpat orci id est elementum, ut aliquam eros rutrum. Praesent in orci a massa condimentum accumsan sit amet in nunc. Sed felis diam, fermentum vitae ipsum a, viverra ultricies arcu.</p>\r\n\r\n<p>&nbsp;</p>', '2021-11-26 01:14:32', '2022-02-25 13:04:06'),
(9, 'images/Journal_fq/1725731094334987.jpg', 'ABC sample', '<p>wbbshjbws&nbsp; akjahkja AJKABSA&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://demo.adamantgems.com/images/post/1.04-Blue-Sapphire-1a_1645785315.jpg\" style=\"height:150px; width:150px\" /></p>\r\n\r\n<p>jhjwhjwjkkwkjkwjjkwsjk kajajk ajkaba akjakaj ajkabk ajka.naa&nbsp;jhjwhjwjkkwkjkwjjkwsjk kajajk ajkaba akjakaj ajkabk ajka.naa&nbsp;jhjwhjwjkkwkjkwjjkwsjk kajajk ajkaba akjakaj ajkabk ajka.naa&nbsp;jhjwhjwjkkwkjkwjjkwsjk kajajk ajkaba akjakaj ajkabk ajka.naa&nbsp;jhjwhjwjkkwkjkwjjkwsjk kajajk ajkaba akjakaj ajkabk ajka.naa</p>', '2022-02-25 16:37:01', '2022-02-25 16:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `log_date` datetime NOT NULL,
  `table_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `log_date`, `table_name`, `log_type`, `data`) VALUES
(1, 9, '2022-03-23 03:17:43', '', 'login', '{\"ip\":\"156.146.59.4\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko\\/20100101 Firefox\\/98.0\"}'),
(2, 9, '2022-03-23 04:33:36', '', 'login', '{\"ip\":\"66.203.112.101\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.82 Safari\\/537.36\"}'),
(3, 9, '2022-03-23 13:29:06', '', 'login', '{\"ip\":\"66.203.112.101\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.82 Safari\\/537.36\"}'),
(4, 9, '2022-03-23 13:33:25', '', 'login', '{\"ip\":\"92.119.179.10\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.82 Safari\\/537.36\"}'),
(5, 9, '2022-03-23 17:49:49', '', 'login', '{\"ip\":\"109.169.23.76\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.82 Safari\\/537.36\"}'),
(6, 9, '2022-03-23 20:38:02', '', 'login', '{\"ip\":\"103.77.232.59\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.82 Safari\\/537.36\"}'),
(7, 9, '2022-03-24 08:17:33', '', 'login', '{\"ip\":\"66.203.112.89\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.82 Safari\\/537.36\"}'),
(8, 9, '2022-03-24 12:42:27', '', 'login', '{\"ip\":\"89.187.163.153\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.51 Safari\\/537.36\"}'),
(9, 9, '2022-03-25 01:39:00', '', 'login', '{\"ip\":\"103.77.232.102\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko\\/20100101 Firefox\\/98.0\"}'),
(10, 9, '2022-03-25 02:07:48', '', 'login', '{\"ip\":\"46.165.250.72\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.82 Safari\\/537.36\"}'),
(11, 9, '2022-03-25 04:41:34', '', 'login', '{\"ip\":\"66.203.112.89\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko\\/20100101 Firefox\\/98.0\"}'),
(12, 9, '2022-03-25 09:15:57', '', 'login', '{\"ip\":\"103.77.232.102\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko\\/20100101 Firefox\\/98.0\"}'),
(13, 9, '2022-03-25 12:28:17', '', 'login', '{\"ip\":\"103.77.232.102\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko\\/20100101 Firefox\\/98.0\"}'),
(14, 10, '2022-03-25 12:50:20', '', 'login', '{\"ip\":\"223.224.8.196\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko\\/20100101 Firefox\\/98.0\"}'),
(15, 10, '2022-03-25 12:50:37', '', 'login', '{\"ip\":\"223.224.8.196\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko\\/20100101 Firefox\\/98.0\"}'),
(16, 10, '2022-03-25 15:50:26', '', 'login', '{\"ip\":\"193.176.86.37\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.82 Safari\\/537.36\"}'),
(17, 10, '2022-03-27 08:40:49', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(18, 9, '2022-03-27 15:26:00', '', 'login', '{\"ip\":\"223.224.10.98\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.84 Safari\\/537.36\"}'),
(19, 9, '2022-03-27 17:48:18', '', 'login', '{\"ip\":\"89.187.162.180\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.82 Safari\\/537.36\"}'),
(20, 9, '2022-03-27 18:08:09', '', 'login', '{\"ip\":\"89.187.162.180\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.82 Safari\\/537.36\"}'),
(21, 10, '2022-03-28 07:17:05', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(22, 10, '2022-03-28 08:08:38', '', 'login', '{\"ip\":\"223.224.10.98\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko\\/20100101 Firefox\\/98.0\"}'),
(23, 9, '2022-03-28 08:36:20', '', 'login', '{\"ip\":\"193.176.86.35\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.82 Safari\\/537.36\"}'),
(24, 10, '2022-03-28 12:52:04', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(25, 10, '2022-03-29 10:49:21', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(26, 10, '2022-03-29 14:18:28', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(27, 9, '2022-03-30 04:40:28', '', 'login', '{\"ip\":\"66.203.112.89\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/99.0.4844.84 Safari\\/537.36\"}'),
(28, 9, '2022-04-01 08:31:17', '', 'login', '{\"ip\":\"43.245.161.179\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.60 Safari\\/537.36\"}'),
(29, 9, '2022-04-21 02:09:21', '', 'login', '{\"ip\":\"89.187.163.180\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.127 Safari\\/537.36\"}'),
(30, 9, '2022-04-25 06:04:48', '', 'login', '{\"ip\":\"89.187.163.162\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.127 Safari\\/537.36\"}'),
(31, 9, '2022-04-25 12:53:13', '', 'login', '{\"ip\":\"89.187.163.169\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.127 Safari\\/537.36\"}'),
(32, 9, '2022-04-27 02:08:46', '', 'login', '{\"ip\":\"66.203.112.89\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko\\/20100101 Firefox\\/99.0\"}'),
(33, 10, '2022-04-27 06:01:27', '', 'login', '{\"ip\":\"43.245.161.179\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko\\/20100101 Firefox\\/99.0\"}'),
(34, 9, '2022-04-27 08:22:35', '', 'login', '{\"ip\":\"89.187.162.107\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.127 Safari\\/537.36\"}'),
(35, 9, '2022-04-27 14:17:42', '', 'login', '{\"ip\":\"89.187.162.107\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.127 Safari\\/537.36\"}'),
(36, 9, '2022-04-28 01:51:23', '', 'login', '{\"ip\":\"89.187.163.154\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.127 Safari\\/537.36\"}'),
(37, 10, '2022-04-28 02:00:03', '', 'login', '{\"ip\":\"103.77.232.59\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko\\/20100101 Firefox\\/99.0\"}'),
(38, 9, '2022-04-28 10:24:56', '', 'login', '{\"ip\":\"103.77.232.59\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.127 Safari\\/537.36\"}'),
(39, 9, '2022-04-29 03:15:24', '', 'login', '{\"ip\":\"43.245.161.179\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.127 Safari\\/537.36\"}'),
(40, 9, '2022-04-29 04:09:28', '', 'login', '{\"ip\":\"89.187.163.163\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.127 Safari\\/537.36\"}'),
(41, 10, '2022-04-29 07:22:34', '', 'login', '{\"ip\":\"43.245.161.179\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko\\/20100101 Firefox\\/99.0\"}'),
(42, 10, '2022-04-29 07:24:29', '', 'login', '{\"ip\":\"43.245.161.179\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko\\/20100101 Firefox\\/99.0\"}'),
(43, 9, '2022-05-02 09:39:18', '', 'login', '{\"ip\":\"89.187.162.104\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.127 Safari\\/537.36\"}'),
(44, 9, '2022-05-02 13:34:56', '', 'login', '{\"ip\":\"2402:4000:124a:8de7:c520:8c27:974d:1bf7\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.127 Safari\\/537.36\"}'),
(45, 9, '2022-05-03 04:51:07', '', 'login', '{\"ip\":\"103.77.232.102\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/100.0.4896.127 Safari\\/537.36\"}'),
(46, 9, '2022-05-06 13:19:51', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(47, 10, '2022-05-09 09:15:24', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(48, 10, '2022-05-09 12:30:37', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(49, 10, '2022-05-09 13:08:54', '', 'login', '{\"ip\":\"43.245.161.179\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko\\/20100101 Firefox\\/100.0\"}'),
(50, 10, '2022-05-09 13:14:19', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(51, 10, '2022-05-09 14:37:13', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(52, 10, '2022-05-10 12:28:17', '', 'login', '{\"ip\":\"43.245.161.179\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko\\/20100101 Firefox\\/100.0\"}'),
(53, 10, '2022-05-10 12:35:50', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(54, 9, '2022-05-10 12:44:41', '', 'login', '{\"ip\":\"66.203.112.89\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/101.0.4951.54 Safari\\/537.36\"}'),
(55, 9, '2022-05-12 03:05:35', '', 'login', '{\"ip\":\"223.224.27.108\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/101.0.4951.64 Safari\\/537.36\"}'),
(56, 10, '2022-05-12 12:48:04', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(57, 10, '2022-05-13 14:05:55', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(58, 10, '2022-05-13 17:44:44', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(59, 10, '2022-05-16 12:30:51', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(60, 10, '2022-05-17 03:34:53', '', 'login', '{\"ip\":\"66.203.112.101\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko\\/20100101 Firefox\\/100.0\"}'),
(61, 10, '2022-05-18 08:54:24', '', 'login', '{\"ip\":\"43.245.161.179\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko\\/20100101 Firefox\\/100.0\"}'),
(62, 10, '2022-05-18 11:19:25', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(63, 10, '2022-05-19 07:22:40', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(64, 10, '2022-05-20 08:55:48', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(65, 10, '2022-05-25 09:49:26', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(66, 10, '2022-05-26 12:53:48', '', 'login', '{\"ip\":\"223.224.10.193\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko\\/20100101 Firefox\\/100.0\"}'),
(67, 10, '2022-05-28 08:41:23', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(68, 10, '2022-05-30 09:26:12', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(69, 10, '2022-05-31 07:20:30', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(70, 10, '2022-05-31 12:20:43', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(71, 10, '2022-06-01 06:38:06', '', 'login', '{\"ip\":\"223.224.9.43\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64; rv:100.0) Gecko\\/20100101 Firefox\\/100.0\"}'),
(72, 10, '2022-06-02 07:31:28', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(73, 10, '2022-06-02 13:02:54', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(74, 10, '2022-06-02 13:09:06', '', 'login', '{\"ip\":\"123.231.14.201\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(75, 9, '2022-06-17 12:17:34', '', 'login', '{\"ip\":\"223.224.7.104\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/102.0.0.0 Safari\\/537.36\"}'),
(76, 9, '2022-06-17 12:24:09', '', 'login', '{\"ip\":\"223.224.7.104\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/102.0.0.0 Safari\\/537.36\"}'),
(77, 9, '2022-07-26 10:26:30', '', 'login', '{\"ip\":\"37.120.155.43\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/103.0.0.0 Safari\\/537.36\"}'),
(78, 9, '2022-07-27 04:21:33', '', 'login', '{\"ip\":\"94.198.41.251\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/103.0.0.0 Safari\\/537.36\"}'),
(79, 9, '2022-07-29 14:31:24', '', 'login', '{\"ip\":\"207.254.30.108\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(80, 9, '2022-07-29 14:34:38', '', 'login', '{\"ip\":\"207.254.30.108\",\"user_agent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit\\/605.1.15 (KHTML, like Gecko) Version\\/15.1 Safari\\/605.1.15\"}'),
(81, 9, '2022-08-01 11:15:35', '', 'login', '{\"ip\":\"156.146.61.198\",\"user_agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/103.0.0.0 Safari\\/537.36\"}');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2021_10_04_101402_create_category_table', 1),
(8, '2021_10_04_102843_create_color_table', 1),
(9, '2021_10_04_103613_create_availability_table', 1),
(10, '2021_10_04_104000_create_shape_table', 1),
(11, '2021_10_04_104407_create_clarity_table', 1),
(12, '2021_10_04_104938_create_enhancements_table', 1),
(14, '2021_10_08_052238_create_galleries_table', 1),
(15, '2021_10_08_103154_create_gallery_images_table', 1),
(16, '2021_10_27_182013_create_journal_table', 1),
(17, '2021_10_29_165620_create_reviews_table', 1),
(18, '2021_11_01_062437_create_faq_category', 1),
(19, '2021_11_01_062533_create_faq', 1),
(21, '2021_11_17_100223_create_home_body_table', 1),
(22, '2021_11_17_100729_create_home_map_table', 1),
(23, '2021_11_17_101819_create_home_select_us_table', 1),
(24, '2021_11_17_103546_create_footer_gallery_table', 1),
(25, '2021_11_17_103614_create_footer_description_table', 1),
(27, '2021_11_22_040814_create_genesis_headers_table', 1),
(28, '2021_11_22_040940_create_genesis_seconds_table', 1),
(29, '2021_11_22_041000_create_genesis_bodys_table', 1),
(30, '2021_11_22_041115_create_genesis_lasts_table', 1),
(31, '2021_11_22_042108_create_genesis_ends_table', 1),
(32, '2021_11_23_120138_create_process_onesections_table', 1),
(33, '2021_11_23_121215_create_process_twosections_table', 1),
(34, '2021_11_23_121324_create_process_thresections_table', 1),
(35, '2021_11_23_121342_create_process_forsections_table', 1),
(36, '2021_11_23_121400_create_process_fivesections_table', 1),
(37, '2021_11_24_095533_create_process_studios_table', 1),
(38, '2021_11_24_101301_create_process_studiobodys_table', 1),
(39, '2021_11_24_101643_create_process_studiosliders_table', 1),
(40, '2021_11_25_012951_create_process_daylights_table', 1),
(41, '2021_11_25_013038_create_process_goldens_table', 1),
(42, '2021_11_25_063132_create_reviews_headers_table', 1),
(44, '2021_11_25_082109_create_contact_details_table', 2),
(46, '2021_12_17_073420_create_our_stone_category_table', 4),
(47, '2021_11_19_111020_create_our_stone_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `our_stone`
--

CREATE TABLE `our_stone` (
  `id` int(11) NOT NULL,
  `our_stone_banner` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_stone_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_stone_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_stone`
--

INSERT INTO `our_stone` (`id`, `our_stone_banner`, `our_stone_header`, `our_stone_body`, `created_at`, `updated_at`) VALUES
(1, 'images/our-stones/1734253114902697.jpg', NULL, NULL, '2021-12-17 04:11:22', '2022-05-30 17:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `our_stone_category`
--

CREATE TABLE `our_stone_category` (
  `id` int(11) NOT NULL,
  `our_category_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_category_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_stone_category`
--

INSERT INTO `our_stone_category` (`id`, `our_category_header`, `our_category_body`, `created_at`, `updated_at`) VALUES
(1, 'Our Stones', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing', '2021-12-17 04:12:18', '2022-03-27 21:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('wasalas893@gmail.com', '$2y$10$9DavNOmf5LoBLGvbDFMZDeWP4V/.23qJ5aUHh7qH8Jt/yTkPtsJLq', '2021-12-19 10:52:30'),
('admin@gmail.com', '$2y$10$Wnv8IrrIcI.GTif6Zerh9.l4/8utuGuvv17NIM3PP2eLyHiTagg/y', '2022-02-17 13:20:08');

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
-- Table structure for table `process_daylights`
--

CREATE TABLE `process_daylights` (
  `id` int(11) NOT NULL,
  `process_daylights_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_daylights_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_daylights_text1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_daylights`
--

INSERT INTO `process_daylights` (`id`, `process_daylights_image`, `process_daylights_header`, `process_daylights_text1`, `created_at`, `updated_at`) VALUES
(1, 'images/process-ends/1734247172950002.jpg', 'Daylight images', '<p>pictures taken in hand in diffused daylight outdoors.</p>\r\n<p>Then, the photos are cleaned to a microscopic level of any dust or lint or imperfections, but keeping all the features of every stone intact. All inclusions remain shown&nbsp;</p>', '2021-11-25 15:16:45', '2022-05-30 15:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `process_fivesections`
--

CREATE TABLE `process_fivesections` (
  `id` int(11) NOT NULL,
  `process_new_banner` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_new_body_text1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_new_body_text2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_new_body_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_new_icon1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_new_icon2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_new_icon_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_fivesections`
--

INSERT INTO `process_fivesections` (`id`, `process_new_banner`, `process_new_body_text1`, `process_new_body_text2`, `process_new_body_image`, `process_new_icon1`, `process_new_icon2`, `process_new_icon_text`, `created_at`, `updated_at`) VALUES
(1, '<p>Pictures are finalized, and accurate photos and descriptions are uploaded to the website. Nobody else on the entire internet puts that much <em>attention to detail</em></p>', 'Finally, the stones are exported through legal channels, in compliance with a whole lot of local and international laws and regulations.', 'As a result of the amount of work we put in pre-sale, we have a return rate well below 1% (in an industry where <10% is considered “great”). 1 return per several years, which shows that the amount of work we put in pays off because people know what they buy in advance (which is otherwise difficult with gems).', 'images/process-ends/1734247966484353.jpg', 'images/process-ends/1717434822325591.png', 'images/process-ends/1717434822329505.png', 'And we are always here for prompt, fast customer service with a lot of attention to detail and willingness to work with people in a completely transparent, ethical way with honesty and integrity.', '2021-11-25 15:21:20', '2022-05-30 15:49:03');

-- --------------------------------------------------------

--
-- Table structure for table `process_forsections`
--

CREATE TABLE `process_forsections` (
  `id` int(11) NOT NULL,
  `process_center_banner` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_center_banner_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_center_text1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_center_text2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_center_text3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_forsections`
--

INSERT INTO `process_forsections` (`id`, `process_center_banner`, `process_center_banner_text`, `process_center_text1`, `process_center_text2`, `process_center_text3`, `created_at`, `updated_at`) VALUES
(1, 'images/process-section/1734244276411227.jpg', 'Lab Reports', 'We’re well aware of the need to have your stones tested by a reputable third party gemological laboratory. Even though we are personally qualified to test stones and issue reports, we believe that standard disclosure by a third party institution is absolutely necessary to keep the industry transparent and would never issue papers for our own gems.', 'We usually have our gemstones tested at the Gemmological Institute of Colombo, which is the best equipped laboratory in Sri Lanka tech-wise. In addition to the spate of commonly used gemological instruments, GIC uses FTIR, LIBS and UV-Vis-NIR for a much more reliable identification and analysis process. Certification by GRS, a well known Swiss lab with a branch in Sri Lanka, is also available on demand. Occasionally, you might wish to have a stone tested at a different laboratory of your own preference – and that’s perfectly okay.', 'We expect treatments to add up to the same conclusions regardless of where you wish to test and will stand behind that. Please see our FAQ for more detailed info on this (last paragraph of the Returns section).', '2021-11-25 14:44:29', '2022-05-30 14:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `process_goldens`
--

CREATE TABLE `process_goldens` (
  `color_1` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_2` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_3` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_4` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_5` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `process_golden_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_golden_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_golden_image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_golden_image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_golden_image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_golden_image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_golden_image5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_goldens`
--

INSERT INTO `process_goldens` (`color_1`, `color_2`, `color_3`, `color_4`, `color_5`, `id`, `process_golden_header`, `process_golden_text`, `process_golden_image1`, `process_golden_image2`, `process_golden_image3`, `process_golden_image4`, `process_golden_image5`, `created_at`, `updated_at`) VALUES
('rgba(0,8,255,1)', 'rgba(255,0,111,1)', 'rgba(0,255,51,1)', 'rgba(204,93,56,1)', 'rgba(0,255,89,1)', 1, 'Golden standard', 'Then, color on all pictures is edited with the stones and the monitor side by side in diffused daylight (which is golden standard for colored gem grading) until the images on the monitor(s) exactly match how the stone looks in real life. Color profiles are inserted to try to make sure that the images display as similarly as possible online to a wide range of devices.', 'images/process-ends/1734247440855464.jpg', 'images/process-ends/1734247507736946.jpg', 'images/process-ends/1734247543049386.jpg', 'images/process-ends/1734247563069711.jpg', 'images/process-ends/1734247592291438.jpg', '2021-11-25 15:18:56', '2022-07-26 15:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `process_onesections`
--

CREATE TABLE `process_onesections` (
  `id` int(11) NOT NULL,
  `process_header_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_header_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_onesections`
--

INSERT INTO `process_onesections` (`id`, `process_header_text`, `process_header_body`, `created_at`, `updated_at`) VALUES
(1, 'ipsum libero adipiscing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et libero nec leo rhoncus sagittis. Duis imperdiet tortor sit amet eros volutpat, at vehicula felis aliquet. Donec scelerisque posuere felis, vel tempus massa malesuada vitae. Suspendisse nec aliquet neque, ac consectetur odio. Praesent in suscipit dui. Morbi convallis,', '2021-11-25 14:29:15', '2022-01-20 09:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `process_studiobodys`
--

CREATE TABLE `process_studiobodys` (
  `id` int(11) NOT NULL,
  `process_studios_slider_headertext1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_studios_slider_headertext2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_studiobodys`
--

INSERT INTO `process_studiobodys` (`id`, `process_studios_slider_headertext1`, `process_studios_slider_headertext2`, `created_at`, `updated_at`) VALUES
(1, 'The studio photos are not Photoshopped onto backgrounds, they are actual real life mini-dioramas with the stone in the centre and a “scene” created around it.', 'We have photos of these dioramas “before-after” style.', '2021-11-25 14:55:56', '2021-11-25 14:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `process_studios`
--

CREATE TABLE `process_studios` (
  `id` int(11) NOT NULL,
  `process_studios_header_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_studios_header_text2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_studios`
--

INSERT INTO `process_studios` (`id`, `process_studios_header_text`, `process_studios_header_text2`, `created_at`, `updated_at`) VALUES
(1, 'Studio images', 'Studio images are taken and added together to form an X-ray like image of the stone revealing its inner characteristics and nature. Nothing is hidden, the photos are high resolution and more clear and magnified than a jeweler’s loupe.', '2021-11-25 14:52:24', '2021-11-25 14:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `process_studiosliders`
--

CREATE TABLE `process_studiosliders` (
  `id` int(11) NOT NULL,
  `process_studios_slider_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_studios_slider_endtext` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_studiosliders`
--

INSERT INTO `process_studiosliders` (`id`, `process_studios_slider_image`, `process_studios_slider_endtext`, `created_at`, `updated_at`) VALUES
(1, 'images/process-ends/1734244820573351.jpg', 'Blue Sapphire studio close up', '2021-11-25 15:00:32', '2022-05-30 14:59:03'),
(2, 'images/process-ends/1734244806305073.jpg', 'Blue Sapphire studio close up', '2021-11-25 15:00:43', '2022-05-30 14:58:50'),
(3, 'images/process-ends/1734246693128628.jpg', 'Blue Sapphire studio close up 567', '2021-11-25 15:00:58', '2022-05-30 15:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `process_thresections`
--

CREATE TABLE `process_thresections` (
  `id` int(11) NOT NULL,
  `process_center_header1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_center_header2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_center_header3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_thresections`
--

INSERT INTO `process_thresections` (`id`, `process_center_header1`, `process_center_header2`, `process_center_header3`, `created_at`, `updated_at`) VALUES
(1, 'Re-cutting', 'We recut these stones so they conform to international high standards of gem cutting. We add value and beauty through consistent very high quality cutting.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et libero nec leo rhoncus sagittis. Duis imperdiet tortor sit amet eros volutpat, at vehicula felis aliquet. Donec scelerisque posuere felis, vel tempus massa malesuada vitae. Suspendisse nec aliquet neque, ac consectetur odio. Praesent in suscipit dui. Morbi convallis,', '2021-11-25 14:37:47', '2021-11-25 14:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `process_twosections`
--

CREATE TABLE `process_twosections` (
  `id` int(11) NOT NULL,
  `process_sub_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_sub_header2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_sub_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_sub_image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_twosections`
--

INSERT INTO `process_twosections` (`id`, `process_sub_header`, `process_sub_header2`, `process_sub_body`, `process_sub_image1`, `created_at`, `updated_at`) VALUES
(1, 'Choosing the right stone', 'We check thousands of stones from gem dealers, miners, mine owners every month.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et libero nec leo rhoncus sagittis. Duis imperdiet tortor sit amet eros volutpat, at vehicula felis aliquet. Donec scelerisque posuere felis vel tempus massa malesuada vitae. Suspendisse nec aliquet neque, ac consectetur odio.', 'images/process-section/1734243664533184.jpg', '2021-11-25 14:32:01', '2022-05-30 14:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `order` tinyint(11) DEFAULT 0,
  `Shape_Cut` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solid` tinyint(1) DEFAULT 0,
  `Variety_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `Available_id` int(11) DEFAULT NULL,
  `shape_id` int(11) DEFAULT NULL,
  `clarity_id` int(11) DEFAULT NULL,
  `enhancement_id` int(11) DEFAULT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `value` tinyint(1) DEFAULT 0,
  `color` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avalibility_status` int(11) DEFAULT NULL,
  `order_value` int(11) DEFAULT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_dimensions` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_treatments` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_labreport` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_Weight` double DEFAULT NULL,
  `product_variety` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`order`, `Shape_Cut`, `solid`, `Variety_id`, `id`, `category_id`, `color_id`, `Available_id`, `shape_id`, `clarity_id`, `enhancement_id`, `gallery_id`, `value`, `color`, `product_name`, `product_image`, `avalibility_status`, `order_value`, `product_description`, `product_dimensions`, `product_treatments`, `product_labreport`, `product_price`, `product_Weight`, `product_variety`, `created_at`, `updated_at`) VALUES
(0, NULL, 0, NULL, 1, 2, NULL, 1, 14, 16, 1, 1, 1, 'Intense lavender of a medium tone with a bluish tint', 'Lavender Spinel', 'images/stone-banner/1728064457383291.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">An absolutely top quality lavender spinel.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">The stone has an exceptionally pleasant, well balanced and intense color for a lavender spinel and stays pleasant looking in any sort of natural light. It is completely eye clean, and also very well cut. The face-up spread is larger than its weight would suggest, but that doesn&rsquo;t come with any of the usual downsides.</p>', '6.50 x 6.48 x 3.81 mm', 'None', 'A card/brief format lab report is included with the stone', 650, 1.06, 'Spinel', '2022-03-23 09:44:50', '2022-03-27 17:12:06'),
(0, NULL, 0, NULL, 2, 2, NULL, 2, 8, 17, 2, 2, 1, 'A mixture of teal and grey of a medium tone', 'Teal Spinel', 'images/stone-banner/1728064555926641.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">The stone looks amazingly clear and sharp; it has a &lsquo;crystalline&rsquo; quality more often seen in extremely clean chrysoberyls and sapphires than spinels.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">It was recut from a 1.80-odd carat dull looking and windowed trillion into one of Arya Akhavan&rsquo;s razor sharp designs. Fittingly, considering its cold and distant-feeling color, the cut actually shows a brilliance pattern reminiscent of snowflake crystals when viewed in person.</p>', '7.21 x 7.18 x 7.16 x 3.87 mm', 'None', 'A card/brief format lab report is included with the stone', 400, 1.05, 'Spinel', '2022-03-23 09:46:24', '2022-03-27 17:11:56'),
(1, NULL, 0, NULL, 3, 1, NULL, 2, 14, 16, 2, 3, 1, 'Intense blue of a medium to medium-light tone', 'Blue Sapphire', 'images/stone-banner/1728065802074015.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">A bright, brilliant blue sapphire that was recut from 1.15 ct. to close its window and center its culet, resulting in a more pleasant look and much better light return.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">The tone is light enough to stay well-lit in practically all environments, and its saturation is sufficient to never let it look greyish.</p>', '5.81 – 5.83 x 3.69 mm', 'Standard heat only', 'A full format lab report is included with the stone stating standard heat without diffusion', 700, 0.94, 'Blue sapphire', '2022-03-23 10:06:12', '2022-08-01 16:19:57'),
(3, NULL, NULL, 1, 4, 1, 45, 1, 13, 16, 2, 4, 1, 'Well saturated green of a medium tone', 'Green Sapphire', 'images/stone-banner/1728066312395314.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">A small and sweet green sapphire with quite a pure and lively hue for corundum. Most green sapphires show brownish, yellowish or blackish undertones, but this one doesn&rsquo;t. Also, where most of them look fairly dim, this stone lights up remarkably well for its variety.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">While the iron-stained feathers do show up in the photos, the stone is completely eye clean to the unaided eye in daylight.</p>', '5.47 x 4.97 x 3.46 mm', 'Standard heat only.', 'A full format lab report is included with the stone stating standard heat without diffusion', 400, 0.8, 'Green sapphire', '2022-03-23 10:14:19', '2022-08-01 16:18:59'),
(2, NULL, 0, NULL, 5, 7, NULL, 2, 14, 16, 1, 5, 1, 'Intense green of a medium to medium-light tone with a bluish tint', 'Green Tourmaline', 'images/stone-banner/1728066813980966.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">A bright bluish green tourmaline with lots of brilliance and a very sharp, clean looking cut.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">Completely eye clean and brilliant, and comes in a standard 6.50 mm setting size.</p>', '6.47 – 6.53 x 3.96 mm', 'None', 'A card/brief format lab report is included with the stone', 290, 0.95, 'Tourmaline', '2022-03-23 10:22:17', '2022-08-01 16:16:28'),
(1, 'new', NULL, NULL, 6, 7, NULL, 2, 7, 15, 1, 6, 1, 'Intensely saturated purplish pink of a medium tone with an orange admixture', 'Pink Tourmaline', 'images/stone-banner/1728067458829028.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">An incredibly lively and colorful tourmaline. Magenta-pink overall, with a light orange admixture near the center and a slightly colder purple mix towards the edges. Neither the orange nor the purple undertones are clearly delineated to the unaided eye, unlike in the photos, so the overall effect looks blended and seamless.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">The sharp cut with a &ldquo;burst&rdquo; type of brilliance pattern animates it further, and excellent clarity helps it look sharp.</p>', '7.22 x 5.69 x 4.62 mm', 'None', 'A card/brief format lab report is included with the stone', 400, 1.24, 'Tourmaline', '2022-03-23 10:32:32', '2022-08-01 16:16:28'),
(1, NULL, 1, NULL, 9, 6, 45, 1, 12, 11, 1, 9, 1, 'Blue of a medium-light tone with a bluish white zone in the middle', 'Blue Sapphire', 'images/stone-banner/1728068652948145.jpg', NULL, NULL, '<p><span style=\"color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A sharply cut blue sapphire with plenty of brilliance. Eye clean despite some crystals under the loupe. The sides show a stronger blue hue, while the middle is more of a light blue or strongly bluish white.</span></p>', '6.57 x 4.32 x 3.37 mm', 'None', 'A card/brief format lab report is included with the stone stating no heat', 200, 0.72, 'Blue sapphire', '2022-03-23 10:51:31', '2022-08-01 16:16:59'),
(2, NULL, 1, NULL, 10, 6, 41, 1, 13, 10, 2, 10, 1, 'Light greenish grey with beige flashes', 'Fancy Sapphire', 'images/stone-banner/1728168846429410.jpg', NULL, NULL, '<p><span style=\"color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A sparkly, well cut, sharp looking fancy sapphire in greenish grey.</span></p>', '5.12 x 5.07 x 3.23 mm', 'None', 'A card/brief format lab report is included with the stone stating no heat', 150, 0.72, 'Fancy sapphire', '2022-03-24 13:24:03', '2022-08-01 16:16:59'),
(3, NULL, NULL, NULL, 13, 7, 33, 2, 13, 16, 1, 13, 1, 'Intensely saturated orangish golden yellow of a medium tone', 'Yellow Zircon', 'images/stone-banner/1728169734362779.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">A very well cut, highly saturated orangish-golden zircon. The cut complements the color really well &ndash; the four corners start out orange and seamlessly blend into the golden yellow hue of the rest of the body, changing and shifting as the stone is rotated. The effect looks really beautiful and unusual.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; line-height: inherit !important;\">It&rsquo;s a fair bit brighter than yellow zircons usually are.</p>', '6.29 x 5.90 x 4.21 mm', 'None', 'A card/brief format lab report is included with the stone', 350, 1.74, 'Zircon', '2022-03-24 13:38:10', '2022-08-01 16:16:28'),
(2, NULL, 1, NULL, 14, 1, 44, 2, 11, 17, 1, 14, 1, 'Medium toned vividly saturated blue', 'Blue Sapphire', 'images/stone-banner/1728449132291907.jpg', NULL, NULL, '<p>Test description</p>', '5.55 x 5.55 x 5.55', 'Standard heat only', 'Full format lab report', 100, 2.22, 'Vivid blue', '2022-03-27 15:39:04', '2022-08-01 16:19:57'),
(47, 'Triangular, modified brilliant cut crown with a step cut pavilion', NULL, 19, 16, 3, 35, 1, 8, 16, 2, 17, 1, 'Intensely saturated green of a medium tone', 'Vanadium Chrysoberyl', 'images/stone-banner/1732360140751262.jpg', NULL, NULL, '<p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;\">While sharing its bluish tint with chrysoberyls from Madagascar and Tanzania, this rare vanadium-bearing chrysoberyl from Ratnapura, Sri Lanka simultaneously also looks looks quite different &ndash; it has a darker toned, more pronounced green hue than would usually be found in its African counterparts. It&rsquo;s an excellent example of fine quality Ceylon green chrysoberyl.</p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;\">&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;\">We were pretty lucky to buy it as a chrysoberyl, since any chrysoberyl with a daylight color this pleasant usually gets sold as an alexandrite in the gem markets of Sri Lanka regardless of the degree of change it may (or may not) exhibit.</p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;\">&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;\">It has plenty of sharp brilliance when seen in person, but this didn&rsquo;t unfortunately manage to translate that well into the images.</p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;\">&nbsp;</p>\r\n<p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0.0001pt; font-size: medium; font-family: Calibri, sans-serif;\">The spread is also excellent, as it looks like a carat face-up but doesn&rsquo;t pay the price for it i.e. it has no window.</p>', '6.19 x 6.10 x 5.88 x 3.37 mm', 'None', 'A full format lab report stating vanadium content is included, along with added EDXRF testing results', 700, 0.82, 'Indian parakeet green', '2022-05-09 15:27:58', '2022-08-01 16:18:39'),
(46, 'Oval, modified brilliant cut crown with a modified Portuguese cut pavilion', NULL, 19, 17, 3, 35, 1, 12, 16, 2, 18, 1, 'Yellowish green of a medium tone', 'Green Chrysoberyl', 'images/stone-banner/1732360537784014.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Cut from a piece of 2.52 ct. rough, this bright and sparkly green chrysoberyl is just 0.01 shy of a carat. It looks like a carat face-up though.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Well cut and completely eye clean.</p>', '6.49 x 5.10 x 3.73 mm', 'None', 'A card/brief format lab report is included with the stone', 300, 0.99, 'Lime green', '2022-05-09 19:49:11', '2022-08-01 16:18:39'),
(45, 'Oval, barion cut', NULL, 19, 18, 3, 38, 1, 12, 17, 2, 19, 1, 'Greenish chartreuse of a medium tone with a brown modifier', 'Chartreuse Chrysoberyl', 'images/stone-banner/1732361519527272.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A well cut, loupe clean and lively chrysoberyl.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Its color shifts from a more yellowish chartreuse to a more greenish one depending on the environment and time of day.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">&ldquo;Pear&rdquo; would be a pretty close color approximation.</p>', '7.26 x 5.85 x 4.28 mm', 'None', 'A card/brief format lab report is included with the stone', 350, 1.21, 'Pear chartreuse', '2022-05-09 20:04:47', '2022-08-01 16:18:39'),
(44, 'Square, modified brilliant cut crown with a step cut pavilion', NULL, 19, 19, 3, 38, 1, 13, 16, 2, 20, 1, 'Greenish yellow of a medium-light tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1732362096542026.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A well cut greenish yellow chrysoberyl.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Like many chrysoberyls of this hue, it looks more greenish in the mornings and early afternoons or on overcast days, and gains yellow as sunlight color temperature drops towards the end of the day.</p>', '6.39 x 6.37 x 4.15 mm', 'None', 'A card/brief format lab report is included with the stone', 350, 1.24, 'Mindaro chartreuse', '2022-05-09 20:13:58', '2022-08-01 16:18:39'),
(43, 'Round, standard brilliant cut crown with a step cut pavilion', NULL, 19, 20, 3, 38, 1, 14, 16, 2, 21, 1, 'Intense yellowish green of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1732362585639148.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A very bright, beautiful looking chartreuse chrysoberyl. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Absolutely no undertones, casts or modifiers of any kind at all, so the hue looks pure and pristinely clean in practically any light.</span></p>', '6.71 x 6.61 x 4.34 mm', 'None', 'A card/brief format lab report is included with the stone', 450, 1.37, 'Lime yellow', '2022-05-09 20:21:44', '2022-08-01 16:18:39'),
(42, 'Oval, modified brilliant cut crown with a Portuguese cut pavilion', NULL, 19, 21, 3, 35, 1, 12, 16, 2, 22, 1, 'Yellowish green of a medium tone', 'Green Chrysoberyl', 'images/stone-banner/1732364100122416.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A very bright and brilliant rounded oval chrysoberyl.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The color shifts quite a lot: its default look in daylight is yellowish green, but the degree of yellow changes a with the surrounding light.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Time of day also makes a difference &ndash; it can appear almost yellow, almost entirely green, and at times even faintly bluish green depending on the light it&rsquo;s seen in.</p>', '6.90 x 6.15 x 4.39 mm', 'None', 'A card/brief format lab report is included with the stone', 400, 1.38, 'Yellowish green', '2022-05-09 20:45:48', '2022-08-01 16:18:39'),
(41, 'Oval, modified brilliant cut crown with a brilliant/Portuguese hybrid cut pavilion', NULL, 19, 22, 3, 38, 1, 12, 16, 2, 23, 1, 'Light toned yellowish green', 'Chartreuse Chrysoberyl', 'images/stone-banner/1732366346226014.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A bright pastel chartreuse stone.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Clean and full of sparkle, as light colors usually are &ndash; but despite the light tone, it&rsquo;s not greyish or washed out at all and holds it color well.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It looks best in ambient daylight indoors, where it gains a bit of saturation.</p>', '7.88 x 5.98 x 4.05 mm', 'None', 'A card/brief format lab report is included with the stone', 400, 1.39, 'Tea green', '2022-05-09 21:21:31', '2022-08-01 16:18:39'),
(40, 'Oval, modified brilliant cut crown with a modified Portuguese cut pavilion', NULL, 19, 23, 3, 38, 1, 12, 16, 2, 29, 1, 'Intense to vivid greenish yellow of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1732366716067542.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A bright and brilliant chartreuse chrysoberyl in a very popular and very rare color.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Stones of this type tend to retain their color and brightness exceptionally well, even considering that purer-hued chrysoberyls generally don&rsquo;t usually have any issues lighting up to begin with.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Zero brown, no unfavorable undertones at all, and well cut.</p>', '7.65 x 5.57 x 4.22 mm', 'None', 'A card/brief format lab report is included with the stone', 700, 1.4, 'Luminous chartreuse', '2022-05-09 21:27:23', '2022-08-01 16:18:39'),
(39, 'Square, modified brilliant cut crown with a step cut pavilion', NULL, 19, 24, 3, 31, 1, 13, 17, 2, 30, 1, 'Intensely saturated brown of a medium to medium-dark tone with yellow and orange undertones', 'Brown Chrysoberyl', 'images/stone-banner/1732367559846752.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">&lsquo;Brown chrysoberyl&rsquo; &ndash; most in the gem trade would expect a dim, dark, lifeless stone with a strong blackish undertone or possibly a greenish tint.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">This stone is none of those things: it&rsquo;s a bright, lively, well saturated, warm brown stone with yellow and orange undertones that give it extra life and sparkle.&nbsp;</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Cinnamon, caramel latte and cognac all come to mind depending on the light it&rsquo;s viewed in and the time of day/sunlight temperature.&nbsp;</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A very rare and exceptionally pleasant looking chrysoberyl overall.</p>', '6.46 x 6.41 x 4.36 mm', 'None', 'A card/brief format lab report is included with the stone', 550, 1.4, 'Caramel latte', '2022-05-09 21:40:48', '2022-08-01 16:18:39'),
(38, 'Round, standard brilliant cut', NULL, 19, 25, 3, 38, 1, 14, 16, 2, 31, 1, 'Medium to medium light yellow with a slight green modifier', 'Chartreuse Chrysoberyl', 'images/stone-banner/1732625786853057.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Lots of sparkle and brilliance. Despite the highly magnified macro lens images showing many tiny pinpoint crystals in it, the stone is actually eye clean to the unaided eye.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It also has a great spread and looks quite large for its weight.</p>', '7.32 – 7.28 x 4.37 mm', 'None', 'A card/brief format lab report is included with the stone', 400, 1.48, 'Honeysuckle yellow', '2022-05-12 18:05:13', '2022-08-01 16:18:39'),
(37, 'Oval, fancy cut', NULL, 19, 26, 3, 38, 1, 12, 16, 2, 32, 1, 'Greenish yellow of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1732631929491470.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A very well cut, bright, sharp looking stone with good saturation. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">There&rsquo;s a tiny dent in the girdle where an inclusion got cut into half when it was cut from rough, but it isn&rsquo;t visible to the unaided eye and would not impact setting options.</span></p>', '7.84 x 6.10 x 4.28 mm', 'None', 'A card/brief format lab report is included with the stone', 400, 1.48, 'Buttery chartreuse', '2022-05-12 19:32:57', '2022-08-01 16:18:39'),
(36, 'Rectangular, radiant cut', NULL, 19, 27, 3, 35, 1, 11, 16, 2, 33, 1, 'Intensely saturated green of a medium tone', 'Green Chrysoberyl', 'images/stone-banner/1732734140124690.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A very well cut green chrysoberyl.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Like most chrysoberyls, this stone has a degree of color shift: it shifts between bluish green (in diffused daylight outdoors) and yellowish green (in ambient daylight indoors). The rough was a mix of bluish and yellowish green pre-cut, so the stone reflects both.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It&rsquo;s eye clean and has plenty of brilliance.</p>', '7.51 x 5.51 x 3.99 mm', 'None', 'A card/brief format lab report is included with the stone', 600, 1.49, 'Spring green', '2022-05-12 21:17:18', '2022-08-01 16:18:39'),
(35, 'Round, standard brilliant cut crown with a hybrid brilliant-Portuguese cut pavilion', NULL, 19, 28, 3, 43, 1, 14, 17, 2, 34, 1, 'Orange and yellow of a medium tone, with brown and orange tints', 'Yellow Chrysoberyl', 'images/stone-banner/1732639621778708.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">An amazing chrysoberyl. Super bright, full of brilliance, and incredibly unusual color-wise.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It&rsquo;s difficult to call it a particular color because it&rsquo;s basically a Venn diagram of orange, yellow and dark beige. On top of that, an ever so slight green undertone pops up every now and then, depending on the light.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It looks great in all lights &ndash; indoors, outdoors, incandescent, fluorescent, etc.</p>', '6.64 – 6.54 x 4.81 mm', 'None', 'A card/brief format lab report is included with the stone', 450, 1.5, 'Honey butter', '2022-05-12 21:45:06', '2022-08-01 16:18:39'),
(34, 'Rectangular cushion, modified brilliant cut crown with a step cut pavilion', NULL, 19, 29, 3, 38, 1, 13, 16, 2, 35, 1, 'Greenish yellow of a medium tone, with a brownish modifier', 'Chartreuse Chrysoberyl', 'images/stone-banner/1732720740096525.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">This stone&rsquo;s unusual hue resembles the color of olives: it&rsquo;s a mix of yellow, green and brown.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Unlike most brownish chrysoberyls however, it&rsquo;s anything but dark or dim &ndash; it has plenty of brilliance and stays bright-looking very easily.</p>', '6.70 x 6.17 x 4.65 mm', 'None', 'A card/brief format lab report is included with the stone', 450, 1.64, 'Bright olive green', '2022-05-13 19:14:27', '2022-08-01 16:18:39'),
(33, 'Rectangular, modified brilliant cut crown with an emerald cut pavilion', NULL, 19, 30, 3, 31, 1, 11, 16, 2, 36, 1, 'Intense orangish brown of a medium tone', 'Brown Chrysoberyl', 'images/stone-banner/1732721029752198.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A rare and exceptionally pleasant looking bright orangy brown chrysoberyl. Eye clean, well cut and with excellent &lsquo;crystal&rsquo;.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It was recut to fix its window and remove the heavy abrasions on its facets which were partially a result of bad polishing.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Its cut is designed for optimal light return when set vertically, so this should be a consideration when setting.</p>', '7.89 x 6.64 x 4.28 mm', 'None', 'A card/brief format lab report is included with the stone', 950, 1.84, 'Honey brown', '2022-05-13 19:19:03', '2022-08-01 16:18:39'),
(0, 'Oval, barion cut', NULL, 19, 31, 3, 31, 1, 12, 16, 2, 37, NULL, 'Yellowish brown and orange-brown, with a green modifier', 'Brown Chrysoberyl', 'images/stone-banner/1732721464445595.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A bright and brilliant brown chrysoberyl.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Its color is a mixture of brown, yellow, orange and even a hint of green. Chrysoberyls with these super-bright, clean looking hues are extremely rare without chatoyancy &ndash; plenty of drab, dull looking brown/yellow mixes are cut into faceted stones, but bright and lively colors of this type are almost always cut as cat&rsquo;s eye cabochons rather than faceted.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">On top of the color rarity factor, the stone is completely eye clean, very brilliant, and cut into a sharp looking barion that really didn&rsquo;t spare rough weight: the initial rough was a 6+ carat oblong river-mined pebble. The choice was to either make a conventional 3 carat oval or a barion, but since colors like this in chrysoberyl tend to look phenomenal in sharp, straight, angular cuts, this particular barion design made more sense.</p>', '8.97 x 6.44 x 5.21 mm', 'None', 'A full format lab report is included with the stone', 850, 2.18, 'Pumpkin & cinnamon', '2022-05-13 19:25:58', '2022-05-13 19:25:58'),
(32, 'Round, standard brilliant cut crown with a Portuguese cut pavilion', NULL, 19, 32, 3, 31, 1, 14, 16, 2, 38, 1, 'Yellowish and greenish brown of a medium tone', 'Brown Chrysoberyl', 'images/stone-banner/1732721853155624.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A very lively, bright and well cut stone with exceptionally good light return and nearly no extinction at all.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It was recut to fix the broken culet and give it more symmetrical light return.</p>', '8.03 x 7.99 x 5.21 mm', 'None', 'A card/brief format lab report is included with the stone', 800, 2.36, 'Golden brown', '2022-05-13 19:32:08', '2022-08-01 16:18:39'),
(31, 'Round, standard brilliant cut crown with a Portuguese cut pavilion', NULL, 19, 33, 3, 31, 1, 14, 16, 2, 39, 1, 'Intense orangish brown of a medium tone', 'Brown Chrysoberyl Pair', 'images/stone-banner/1732722757865425.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">If these were silkier, they&rsquo;d be high grade chrysoberyl cat&rsquo;s eyes &ndash; but being free of silk and faceted, they&rsquo;re bright brown chrysoberyls with a tinge of cinnamony orange instead.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">As evident in the second photo, the two stones came from vastly different starting points but they ended up matching flawlessly after being recut.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">They\'re bright and brilliant, and their color is very rare and pleasant for faceted chrysoberyl. The fact that they&rsquo;re also well cut and well matched just adds to their rarity.</p>', '6.43 x 6.42 x 4.36 mm / 6.40 x 6.39 x 4.25 mm', 'None', 'A card/brief format lab report is included with the stones', 850, 2.57, 'Cinnamon & honey', '2022-05-13 19:46:31', '2022-08-01 16:18:39'),
(30, 'Round, standard brilliant cut crown with a Portuguese cut pavilion', NULL, 19, 34, 3, 31, 1, 14, 16, 2, 40, 1, 'Yellowish and greenish brown of a medium tone', 'Brown Chrysoberyl', 'images/stone-banner/1732723979353942.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A brown chrysoberyl with a pleasant and even overall color and good brilliance.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The stone is well cut and eye clean and unlike most brown chrysoberyls, isn\'t dull, dim or dark in the slightest.</p>', '8.49 x 8.46 x 6.08 mm', 'None', 'A card/brief format lab report is included with the stone', 800, 3.16, 'Cumin brown', '2022-05-13 20:05:56', '2022-08-01 16:18:39'),
(29, NULL, NULL, 19, 35, 3, 35, 2, 11, 16, 2, 41, 1, 'Intensely saturated bluish green of a medium to medium-light tone', 'Vanadium Chrysoberyl', 'images/stone-banner/1733239832749148.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A gorgeous vanadium-bearing chrysoberyl from Madagascar cut from a 2.10 carat piece of rough.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Clearly bluish, eye clean and very, very rare. Includes a lab report and additional EDXRF testing results proving vanadium content.</p>', NULL, 'None', NULL, NULL, 0.82, 'Minty bluish green', '2022-05-19 12:27:09', '2022-08-01 16:18:39'),
(0, NULL, NULL, 19, 36, 3, 38, 2, 11, 16, 2, 42, NULL, 'Vividly saturated chartreuse of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733240920539612.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A bright, luminous and well cut stone. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Just like several others in its category, it&rsquo;s top of the line where color is concerned. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A minute amount of silk gives its saturation an extra kick, without impacting brilliance at all. Bright and sparkly.</span></p>', NULL, 'None', NULL, NULL, 1, 'Luminous vivid chartreuse', '2022-05-19 12:54:12', '2022-05-19 13:02:30'),
(28, NULL, NULL, 19, 37, 3, 35, 2, 10, 16, 2, 43, 1, 'Yellowish green of a medium tone with a slight brown modifier', 'Green Chrysoberyl', 'images/stone-banner/1733241127416564.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Brilliant and lively thanks to a well made pear cut, this stone would look best set into a halo with lighter stones around it. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">It\'s sparkly, and looks green even in incandescent light.</span></p>', NULL, 'None', NULL, NULL, 1.03, 'Pear green', '2022-05-19 13:05:47', '2022-08-01 16:18:39'),
(27, NULL, NULL, 19, 38, 3, 38, 2, 12, 16, 2, 44, 1, 'Vividly saturated chartreuse of a medium dark tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733241707862017.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">While chrysoberyls cannot reach true &ldquo;neon&rdquo; saturations that spinels and other gems like hauyne and Paraiba show, this (and a few others we\'ve had) is about as close as it gets. The stone\'s color is like highlighter yellow on steroids.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The difference between this type of chrysoberyl and our usual &ldquo;luminous vivid chartreuse&rdquo; bestseller is that this type looks about a half tone darker and significantly more saturated when viewed in diffused daylight outdoors.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">At the same time however, the lighter &ldquo;luminous vivid chartreuse&rdquo; version looks consistently glowy in any lighting, while this type does tend to close up a bit in low light and incandescent.</p>', NULL, 'None', NULL, NULL, 1.05, 'Luminous vivid chartreuse', '2022-05-19 13:15:00', '2022-08-01 16:18:39'),
(26, NULL, NULL, 19, 39, 3, 35, 2, 14, 16, 2, 45, 1, 'Intense green of a medium tone with a slight blue modifier', 'Vanadium Chrysoberyl', 'images/stone-banner/1733242242476760.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A beautiful vanadium-bearing chrysoberyl from Madagascar.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Like all chrysoberyls, it shifts to a small degree depending on the temperature of the surrounding light. We&rsquo;ve captured these changes in the images but its default diffused daylight state, as well as its graded color, is bluish green. At times, it can turn bluish enough to appear almost fluorite-like.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Most vanadium chrysoberyls are cut with only weight in mind so it\'s worth mentioning that rounds - which don\'t spare material - are really rare and difficult to find in this variety; and well cut rounds without windowing even more so.</p>', NULL, 'None', NULL, NULL, 1.06, 'Minty bluish green', '2022-05-19 13:23:30', '2022-08-01 16:18:39'),
(25, NULL, NULL, 19, 40, 3, 46, 2, 12, 17, 2, 46, 1, 'Colorless, with a teal tint', 'Colorless Chrysoberyl', 'images/stone-banner/1733242485822357.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A very light, near-colorless Tanzanian stone with the slightest hint of teal.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The minty overtone intensifies indoors in ambient daylight and gives the entire stone an evenly distributed creamy white-green look, but it practically disappears entirely outside and leaves the stone looking white.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The tint is always visible from the girdle, but face-up the color shifts depending on how intense the surrounding light is &ndash; and consequently it can appear anywhere from completely colorless, to completely pale teal and everything in between.</p>', NULL, 'None', NULL, NULL, 1.08, 'Pale mint cream', '2022-05-19 13:27:22', '2022-08-01 16:18:39'),
(24, NULL, NULL, 19, 41, 3, 38, 2, 11, 16, 2, 47, 1, 'Vivid chartreuse of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733243365828845.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A vividly saturated and bright chartreuse chrysoberyl.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It has a bit of silk, but not enough to seriously impact its brilliance &ndash; rather, the silk just gives it a slight edge in low-light situations by dispersing and reflecting light inside it evenly.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">No cutting or clarity issues to speak of. Looks like a vivid little lightbulb.</p>', NULL, 'None', NULL, NULL, 1.09, 'Luminous vivid chartreuse', '2022-05-19 13:41:22', '2022-08-01 16:18:39'),
(23, NULL, NULL, 19, 42, 3, 38, 2, 7, 17, 2, 48, 1, 'Vividly saturated chartreuse of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733243813019835.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A clean, bright and luminous chrysoberyl.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Cut from a 3.49 carat piece of Tanzanian rough into a brilliant and sharp-looking octagon.&nbsp;It lights up best under a slight tilt though.</p>', NULL, 'None', NULL, NULL, 1.09, 'Luminous vivid chartreuse', '2022-05-19 13:48:28', '2022-08-01 16:18:39'),
(22, NULL, NULL, 19, 43, 3, 38, 2, 12, 16, 2, 49, 1, 'Vivid chartreuse of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733244133978541.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A rare vivid chartreuse chrysoberyl.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The stone has tons of saturation for a chrysoberyl &ndash; it&rsquo;s the hue of a greenish yellow highlighter, and equally as vivid. It\'s also very well cut and very clean (nearly loupe clean).</p>', NULL, 'None', NULL, NULL, 1.16, 'Luminous vivid chartreuse', '2022-05-19 13:53:34', '2022-08-01 16:18:39'),
(21, NULL, NULL, 19, 44, 3, 38, 2, 11, 16, 2, 50, 1, 'Intense chartreuse of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733244406463224.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A well cut and well proportioned chrysoberyl that stays consistently bright in all lighting scenarios.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Eye clean and sparkly.</p>', NULL, 'None', NULL, NULL, 1.21, 'Intense chartreuse', '2022-05-19 13:57:54', '2022-08-01 16:18:39'),
(20, NULL, NULL, 19, 45, 3, 38, 2, 12, 16, 2, 51, 1, 'Intensely saturated chartreuse yellow of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733244721506814.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A bright and glowy lime green chrysoberyl.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Great light return thanks to the Portuguese cut pavilion.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Not quite enough saturation to push it into the vivid/luminous category, but it&rsquo;s close.</p>', NULL, 'None', NULL, NULL, 1.22, 'Yellowish lime', '2022-05-19 14:02:54', '2022-08-01 16:18:39'),
(19, NULL, NULL, 19, 46, 3, 38, 2, 12, 17, 2, 52, 1, 'Vivid chartreuse of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733250700175186.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Eye-popping color and tons of sparkle!&nbsp;</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">This stone looks as vivid as any chrysoberyl possibly could and retains that saturation and visual punch in all sorts of light. It&rsquo;s slightly more yellowish than our other top of the line chartreuse chrysoberyls in daylight, but it shifts on a green-yellow scale like these always do.</p>', NULL, 'None', NULL, NULL, 1.3, 'Luminous vivid chartreuse', '2022-05-19 15:37:56', '2022-08-01 16:18:39');
INSERT INTO `product` (`order`, `Shape_Cut`, `solid`, `Variety_id`, `id`, `category_id`, `color_id`, `Available_id`, `shape_id`, `clarity_id`, `enhancement_id`, `gallery_id`, `value`, `color`, `product_name`, `product_image`, `avalibility_status`, `order_value`, `product_description`, `product_dimensions`, `product_treatments`, `product_labreport`, `product_price`, `product_Weight`, `product_variety`, `created_at`, `updated_at`) VALUES
(18, NULL, NULL, 19, 47, 3, 38, 2, 8, 17, 2, 53, 1, 'Vivid chartreuse of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733251113217891.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A luminous chrysoberyl cut from a 3.89 ct. piece of Tanzanian rough.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The face up brilliance pattern is an interplay of light and dark patches that shift as the stone is rotated, which makes contrasts between brilliance and extinction really stand out &ndash; and while this isn&rsquo;t everyone&rsquo;s cup of tea, the end result is definitely a unique, sharp looking stone that looks nothing like most other trillions.</p>', NULL, 'None', NULL, NULL, 1.34, 'Vivid lemon chartreuse', '2022-05-19 15:44:30', '2022-08-01 16:18:39'),
(17, NULL, NULL, 19, 48, 3, 38, 2, 13, 16, 2, 54, 1, 'Greenish chartreuse of a medium-light tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733251417661600.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A greenish yellow chrysoberyl cut into a modified asscher cut.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Completely eye clean despite the colorless feather clearly visible in the images (it simply doesn&rsquo;t show up to the eye in daylight no matter how close up and carefully it&rsquo;s checked).</p>', NULL, 'None', NULL, NULL, 1.42, 'Mindaro chartreuse', '2022-05-19 15:49:20', '2022-08-01 16:18:39'),
(16, NULL, NULL, 19, 49, 3, 38, 2, 12, 16, 2, 55, 1, 'Chartreuse of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733252409346855.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Recut from a windowed oval of 1.78 carats into a sharp and sparkly oval with a brilliant cut crown and a Portuguese cut pavilion.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Lots of brilliance and almost loupe clean.</p>\r\n<p>&nbsp;</p>', NULL, 'None', NULL, NULL, 1.47, 'Bright chartreuse', '2022-05-19 16:05:06', '2022-08-01 16:18:39'),
(15, NULL, NULL, 19, 50, 3, 35, 2, 11, 16, 2, 56, 1, 'Intense green of a medium to medium-light tone', 'Vanadium Chrysoberyl', 'images/stone-banner/1733252764746356.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A bright and well cut vanadium-bearing chrysoberyl.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Its gentle green hue has a pleasant tendency to appear softly, evenly green indoors.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Includes a lab report and additional EDXRF testing results proving vanadium content.</p>', NULL, 'None', NULL, NULL, 1.52, 'Mint green', '2022-05-19 16:10:45', '2022-08-01 16:18:39'),
(14, NULL, NULL, 19, 51, 3, 35, 2, 10, 16, 2, 57, 1, 'Intense green of a medium tone with a slight blue modifier', 'Vanadium Chrysoberyl', 'images/stone-banner/1733253641633823.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The Tunduru region of southern Tanzania has been famous for producing bluish-tinted light green chrysoberyls for almost three decades now, and these super-rare stones have invariably stayed in high demand ever since they were first discovered in the 1990s.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It isn&rsquo;t difficult to see why, as the color is very pleasant and chrysoberyl is more than durable enough for regular and even carefree daily wear (unlike most of its competitors in this hue range).</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The blue tint in this pear is by far the most visible in the edges - the point and the base - while the middle shifts from pure light green to a slightly yellow-tinged green. The stone shifts a lot even generally speaking due to some chromium content, so it looks the best in daylight and under fluorescent light. Good for office wear and daylight both indoors and outdoors, but perhaps less so for candle-lit dinners.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">While the colorless needles inside it are clearly visible in some of the macro closeups, the stone is absolutely eye clean in all lighting scenarios no matter how close up and carefully it&rsquo;s observed.</p>', NULL, 'None', NULL, NULL, 1.53, 'Minty bluish green', '2022-05-19 16:24:41', '2022-08-01 16:18:39'),
(13, NULL, NULL, 19, 52, 3, 38, 2, 12, 16, 2, 58, 1, 'Vivid chartreuse of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733255057996186.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A glowy, luminous chrysoberyl cut from a 3.90-odd carat piece of bright Madagascan rough into a nicely saturated oval.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Its vivid highlighter yellow color is ultra rare, and the stone retains its saturation in all types of light: incandescent, fluorescent, indoors and outdoors equally.</p>', NULL, 'None', NULL, NULL, 1.54, 'Luminous vivid chartreuse', '2022-05-19 16:47:12', '2022-08-01 16:18:39'),
(12, NULL, NULL, 19, 53, 3, 35, 2, 8, 16, 2, 59, 1, 'Green of a medium-light tone', 'Green Chrysoberyl', 'images/stone-banner/1733255322847879.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A very bright and brilliant Tanzanian stone, thanks largely to its excellent fancy cut with 139 facets.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Lots of life and sparkle.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It was sold before it received an EDXRF check, but it&rsquo;s possible that it may have contained minute amounts of vanadium.</p>', NULL, 'None', NULL, NULL, 1.58, 'Light green', '2022-05-19 16:51:25', '2022-08-01 16:18:39'),
(11, NULL, NULL, 19, 54, 3, 35, 2, 9, 16, 2, 60, 1, 'Intensely saturated green of a medium tone', 'Vanadium Chrysoberyl', 'images/stone-banner/1733255563258041.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A bright and lively vanadium chrysoberyl with lots of brilliance.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The stone lights up easily and has a tendency to look very pleasantly soft green in ambient daylight indoors.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Includes a lab report and additional EDXRF testing results proving vanadium content.</p>', NULL, 'None', NULL, NULL, 1.8, 'Mint green', '2022-05-19 16:55:14', '2022-08-01 16:18:39'),
(10, NULL, NULL, 19, 55, 3, 46, 2, 7, 17, 2, 61, 1, 'Colorless, with yellow and green tints', 'Colorless Chrysoberyl', 'images/stone-banner/1733256397521651.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Amazingly enough, the rough this stone came from weighed 7.93 carats &ndash; but by the time all the inclusions were ground away and the preform was done, only a fraction of that remained.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The cut design also didn&rsquo;t spare weight at all, since it was made with sharp pavilion angles and without much regard for weight retention in mind.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The final result ended up looking incredibly pleasant though: an uncommon color, loupe clean clarity and lots of cold, crystalline brilliance.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Its color would best be described as ivory: it\'s creamy off-white and as far as chrysoberyls go neither entirely colorless nor chartreuse, but still closer to the former than the latter.</p>', NULL, 'None', NULL, NULL, 1.96, 'Ivory white', '2022-05-19 17:08:30', '2022-08-01 16:18:39'),
(1, NULL, NULL, 19, 56, 3, 38, 2, 12, 17, 2, 62, 1, 'Vivid chartreuse of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733257141989541.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A vividly saturated, glowy chrysoberyl cut into an oval barion. Razor sharp and crystal clear (clich&eacute;s, but fitting in this case).</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It turned out a bit too greyish/brownish in the images but it actually looks clearer, cleaner and more brilliant in reality than it does in the photos.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Absolutely no undesirable tints - just a pure chartreuse with saturation dialled to the max for this variety.</p>', NULL, 'None', NULL, NULL, 2.02, 'Luminous vivid chartreuse', '2022-05-19 17:20:20', '2022-08-01 16:18:39'),
(9, NULL, NULL, 19, 57, 3, 35, 2, 12, 16, 2, 63, 1, 'Intense yellowish green with bluish green zoning', 'Green Chrysoberyl', 'images/stone-banner/1733262777221349.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">This stone&rsquo;s predominant color is undoubtedly yellowish green, with a visible zone of bluish green running through the middle.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Color zoning isn&rsquo;t commonly encountered in chrysoberyls, and in this one the two colors meet in a diagonal boundary running through the middle &ndash; if immersed in water, half of it is clearly yellowish green and the other half is clearly bluish green. Viewed in hand, it is best described as a color-zoned green chrysoberyl.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">While it does contain vanadium, we\'re not selling it as a vanadium chrysoberyl or at a vanadium price due to the yellowish component in its color.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It\'s entirely eye clean, very well cut and full of brilliance.</p>', NULL, 'None', NULL, NULL, 2.02, 'Meadow green', '2022-05-19 18:49:54', '2022-08-01 16:18:39'),
(8, NULL, NULL, 19, 58, 3, 35, 2, 12, 17, 2, 64, 1, 'Intensely saturated green of a medium to medium-light tone', 'Vanadium Chrysoberyl', 'images/stone-banner/1733265914813711.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Vanadium chrysoberyls are rare enough as it is, but flawlessly clean and exceptionally well cut ones are one in a million.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">We had this stone recut from a relatively well made but windowed standard oval of 2.89 carats. While the new cut certainly adds a lot of brilliance and makes it look amazingly sharp and pleasant, the stone lost a full tonal grade and went from a full medium tone to a medium-light one.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Whether the tradeoff was worth it depends on one&rsquo;s personal preferences and priorities, but the remaining color still looks amazing. It goes without saying that it&rsquo;s incredibly difficult to find this combination of color, clarity and cut in vanadium-bearing chrysoberyl.</p>', NULL, 'None', NULL, NULL, 2.18, 'Mint green', '2022-05-19 18:59:23', '2022-08-01 16:18:39'),
(7, NULL, NULL, 19, 59, 3, 43, 2, 13, 16, 2, 65, 1, 'Chartreuse of a medium-light tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733339210235520.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A bright chrysoberyl cut into a Portuguese cushion full of brilliance and life.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The stone has a nice spread and despite the light tone, enough saturation to ensure it never looks dull or greyish.</p>', NULL, 'None', NULL, NULL, 2.34, 'Creamy lemon chiffon', '2022-05-19 19:49:33', '2022-08-01 16:18:39'),
(6, NULL, NULL, 19, 60, 3, 38, 2, 11, 16, 2, 66, 1, 'Chartreuse of a medium tone with intense to vivid saturation', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733268460419890.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">An amazing looking chrysoberyl. Plenty of brightness, even more brilliance, nearly no extinction at all, almost loupe clean and intensely to vividly saturated (the exact grade depends on the surrounding light).</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The most remarkable thing about the stone is the fact that it lights up unusually well &ndash; in person, the light return looks close to 100% and this persists in all lighting scenarios, including fluorescent and incandescent indoors. The areas of extinction are very small and spread out so despite the excellent brightness, they still manage to break up the brilliance pattern and give it an impression of liveliness and sparkle.</p>', NULL, 'None', NULL, NULL, 2.35, 'Intense chartreuse', '2022-05-19 20:16:44', '2022-08-01 16:18:39'),
(5, NULL, NULL, 19, 61, 3, 35, 2, 11, 16, 2, 67, 1, 'Yellowish green of a medium to medium-light tone', 'Green Chrysoberyl', 'images/stone-banner/1733335638370723.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A pastel green chrysoberyl from Madagascar.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Like most other medium-light toned stones, this stone looks particularly pleasant indoors during the day and outdoors on overcast, darker days. It shows a slight color shift between bluish green in fluorescent light and greenish yellow in incandescent, as many light green chrysoberyls do.</p>', NULL, 'None', NULL, NULL, 2.58, 'Tea green', '2022-05-20 14:08:00', '2022-08-01 16:18:39'),
(4, NULL, NULL, 19, 62, 3, 38, 2, 8, 16, 2, 68, 1, 'Vividly saturated chartreuse of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733339945595337.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A fancy cut, vividly saturated chrysoberyl.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Chrysoberyls with just the right amount of silk and saturation sometimes display a desirable &lsquo;glow&rsquo; of sorts, but that usually comes at the cost of brilliance. In this stone&rsquo;s case however, it&rsquo;s like having your cake and eating it too: its complex cut with 139 facets makes it shine and sparkle despite the silk that gives it a slight glow at the same time.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It&rsquo;s a really rare stone overall, with the best of all worlds &ndash; saturation, glow and brilliance &ndash; intertwined in it. It can look sparkly on bright, sunny days, faintly glowy on overcast afternoons outdoors, or glowy and sparkly in incandescent light indoors.</p>', NULL, 'None', NULL, NULL, 2.85, 'Luminous vivid chartreuse', '2022-05-20 14:15:45', '2022-08-01 16:18:39'),
(3, NULL, NULL, 19, 63, 3, 38, 2, 8, 16, 2, 69, 1, 'Intensely saturated yellowish chartreuse of a medium tone', 'Chartreuse Chrysoberyl', 'images/stone-banner/1733336595260511.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">An intensely chrysoberyl with more yellow than is usually seen in chartreuse chrysoberyls. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Well cut, bright and full of brilliance.</span></p>', NULL, 'None', NULL, NULL, 3.25, 'Yellowish chartreuse', '2022-05-20 14:23:12', '2022-08-01 16:18:39'),
(2, NULL, NULL, 19, 64, 3, 31, 2, 11, 16, 2, 70, 1, 'Vividly saturated golden brown of a medium tone, with yellow and orange tints', 'Brown Chrysoberyl', 'images/stone-banner/1733337415433411.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">If ever there was a pi&egrave;ce de r&eacute;sistance in golden-brown chrysoberyl, this is it.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Neither words nor images adequately portray how pristinely bright and clean this stone looks.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The brilliance on it is amazing and it has a mesmerizing cold crystalline sparkle that&rsquo;s quite uncommon in chrysoberyls of any cut or hue. Speaking of hue, it&rsquo;s likewise amazing: a mixture of yellow, brown, gold and orange that shifts throughout the day but stays bright at all times.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The stone&rsquo;s behavior reminds of clean, glassy, well saturated medium to medium-light tsavorites when they&rsquo;re cut into cuts with elongated, large facets such as asscher or emerald &ndash; the crisp and crystalline effect seen here is pretty much the same, which is exceptionally rare for chrysoberyls.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">In a way, it&rsquo;s a live demo of the fact that the generally accepted gem trade ideals don&rsquo;t define beauty &ndash; the stone is a good deal more beautiful in person than many more &lsquo;traditional&rsquo; color grades (and not to mention rarer).</p>', NULL, 'None', NULL, NULL, 4.59, 'Bright squash', '2022-05-20 14:36:14', '2022-08-01 16:18:39'),
(27, 'Rectangular, radiant cut', NULL, 20, 65, 5, 42, 1, 11, 16, 2, 71, 1, 'Vividly saturated purplish pink of a medium tone', 'Rhodolite Garnet', 'images/stone-banner/1733345995718766.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A beautiful, unusually bright rhodolite. Clean and brilliant.</span></p>', '6.79 x 4.92 x 3.19 mm', 'None', 'A card/brief format lab report is included with the stone', 350, 1, 'Purplish pink', '2022-05-20 16:52:37', '2022-08-01 16:17:24'),
(26, 'Rectangular, radiant cut', NULL, 21, 66, 5, 41, 1, 11, 16, 2, 72, 1, 'Vividly saturated reddish orange of a medium to medium-dark tone', 'Pyrope-Almandine Garnet', 'images/stone-banner/1733349680003040.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Quite an interesting color for a pyrope-almandine &ndash; more likely to be found in spinel than in garnet.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Clean, vividly saturated and very well cut.</p>', '7.31 x 5.08 x 3.32 mm', 'None', 'A card/brief format lab report is included with the stone', 350, 1.14, 'Vermillion', '2022-05-20 17:51:11', '2022-08-01 16:17:24'),
(25, 'Square cushion, modified brilliant cut crown with a step cut pavilion', NULL, 22, 67, 5, 40, 1, 13, 16, 2, 73, 1, 'Vividly saturated reddish orange of a medium to medium-dark tone', 'Spessartite Garnet', 'images/stone-banner/1733351992399937.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A bright, vivid and lively spessartite garnet. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">The slightly reddish orange hue looks beautiful, and the stone is quite clean for a spessartite. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Would look nice as a solitaire or with diamonds.</span></p>', '5.73 x 5.56 x 4.00 mm', 'None', 'A card/brief format lab report is included with the stone', 500, 1.21, 'Safety orange', '2022-05-20 18:27:56', '2022-08-01 16:17:24'),
(24, 'Round, standard brilliant cut', NULL, 21, 68, 5, 41, 1, 14, 16, 2, 74, 1, 'Vivid orangish red of a medium tone', 'Pyrope-Almandine Garnet', 'images/stone-banner/1733792377839204.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A bright garnet with ample light return and a consistently bright red color. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">The stone stays as easily lit as possible for red pyrope-almandine garnets thanks to its lighter tone and excellent cut.</span></p>', '6.76 x 6.74 x 4.00 mm', 'None', 'A card/brief format lab report is included with the stone', 350, 1.26, 'Vivid crimson', '2022-05-25 15:00:20', '2022-08-01 16:17:24'),
(23, 'Dodecagonal, fancy cut', NULL, NULL, 69, 5, 41, 1, 14, 16, 2, 75, 1, 'Vividly saturated pinkish red of a medium-dark tone', 'Pyrope-Almandine Garnet', 'images/stone-banner/1733792940262558.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A wonderful bright red garnet. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">The stone is very well cut with a whirlwind-like facet arrangement on its pavilion and despite the needles visible in some of the images, it remains completely eye clean even close up in any lighting.</span></p>', '6.52 – 6.84 x 4.23 mm', 'None', 'A card/brief format lab report is included with the stone', 350, 1.28, 'Bright crimson', '2022-05-25 15:16:37', '2022-08-01 16:17:24'),
(22, 'Hexadecagonal, fancy cut', NULL, 21, 70, 5, 41, 1, 14, 17, 2, 76, 1, 'Vividly saturated orangish red of a medium-dark tone', 'Pyrope-Almandine Garnet', 'images/stone-banner/1733796926504780.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A rich and saturated color, pristine clarity and a very well made cut are the main selling points for this stone. It&rsquo;s really beautiful for a pyrope-almandine.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Recut from a dull looking 1.80 ct. stone full of extinction into its present sparkly form.</p>', '6.54 – 6.86 x 4.31 mm', 'None', 'A card/brief format lab report is included with the stone', 350, 1.29, 'Scarlet red', '2022-05-25 16:17:00', '2022-08-01 16:17:24'),
(21, 'Rectangular, radiant cut', NULL, 20, 71, 5, 42, 1, 13, 16, 2, 77, 1, 'Vividly saturated purplish pink of a medium to medium-dark tone', 'Rhodolite Garnet', 'images/stone-banner/1733797921481280.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Vivid and bright, with an \"open\" color. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Quite an amazing rhodolite garnet that&rsquo;s also clean and very well cut.</span></p>', '6.24 x 5.99 x 3.93 mm', 'None', 'A card/brief format lab report is included with the stone', 350, 1.32, 'Purplish pink', '2022-05-25 16:35:47', '2022-08-01 16:17:24'),
(20, 'Oval, modified brilliant cut crown with a modified Portuguese cut pavilion', NULL, 23, 72, 5, 43, 1, 12, 16, 2, 78, 1, 'Orangish yellow of a medium tone, with a slight brown modifier', 'Hessonite Garnet', 'images/stone-banner/1733798413379180.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A bright orangish yellow hessonite with a nice Portuguese cut and a good spread. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Completely eye clean, with the usual hessonite \'treacle\' effect visible as the stone is examined and rotated.</span></p>', '7.54 x 6.10 x 4.18 mm', 'None', 'A card/brief format lab report is included with the stone', 350, 1.36, 'Sandy yellow', '2022-05-25 16:43:36', '2022-08-01 16:17:24'),
(19, 'Square, radiant cut', NULL, 20, 73, 5, 42, 1, 13, 15, 2, 79, 1, 'Vividly saturated purplish and reddish pink of a medium to medium-dark tone', 'Rhodolite Garnet', 'images/stone-banner/1733799369368217.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A very well cut and vivid garnet.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The single crystal beneath the table of this stone isn\'t too readily apparent to the unaided eye (despite the macro lens blowing it out of proportion) since it looks like just a pinpoint that gets lost in the overall brilliance.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Most of the time, it looks eye clean but we graded it VVS just to be on the safe side anyway.</p>', '6.32 x 6.07 x 4.09 mm', 'None', 'A card/brief format lab report is included with the stone', 250, 1.38, 'Purplish pink', '2022-05-25 16:58:48', '2022-08-01 16:17:24'),
(18, 'Dodecagonal, fancy cut', NULL, 20, 74, 5, 41, 1, 7, 17, 2, 80, 1, 'Intense purplish red of a medium-dark tone', 'Rhodolite Garnet', 'images/stone-banner/1733799917172629.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A burgundy colored loupe clean garnet recut from a 2.04 ct. badly made &lsquo;roval&rsquo; into this clean looking dodecagon.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The stone looks crisp and clear.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">While the cut features plenty of sharp lines, its appearance is softened by its rounded shape so the overall effect is very pleasant and well-balanced.</p>', '6.51 x 6.50 x 6.47 x 4.43 mm', 'None', 'A card/brief format lab report is included with the stone', 350, 1.38, 'Rich burgundy', '2022-05-25 17:07:30', '2022-08-01 16:17:24'),
(17, 'Dodecagonal, fancy cut', NULL, 23, 75, 5, 40, 1, 14, 16, 2, 81, 1, 'Vividly saturated slightly reddish orange of a medium to medium-dark tone', 'Hessonite Garnet', 'images/stone-banner/1733800571852927.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A well cut, glowy, incredibly bright and vivid orange garnet. So much so it&rsquo;s practically impossible to capture how it looks in daylight in the images.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Similarly to how a small amount of silk produces a slight glow in vividly saturated medium-toned sapphires, the &lsquo;treacle effect&rsquo; of this hessonite exists in just the right amount to heighten its apparent brightness and saturation without impacting its clarity grade or brilliance.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The stone is completely eye clean close up in any viewing environment, but its saturation and brightness still seem to gain from the treacle.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It persistently looks well saturated in all kinds/intensities of daylight.</p>', '6.83 – 7.13 x 4.37 mm', 'None', 'A card/brief format lab report is included with the stone', 400, 1.39, 'Vivid Fanta orange', '2022-05-25 17:17:55', '2022-08-01 16:17:24'),
(16, 'Round, standard brilliant cut crown with a modified brilliant cut pavilion', NULL, 20, 76, 5, 42, 1, 14, 16, 2, 82, 1, 'Vividly saturated purplish pink of a medium tone', 'Rhodolite Garnet', 'images/stone-banner/1733801275384296.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A bright, vividly saturated and very well cut rhodolite garnet.</span></p>', '6.68 x 6.62 x 4.52 mm', 'None', 'A card/brief format lab report is included with the stone', 300, 1.43, 'Purplish pink', '2022-05-25 17:24:26', '2022-08-01 16:17:24'),
(15, 'Rectangular, radiant cut', NULL, 20, 77, 5, 42, 1, 11, 16, 2, 83, 1, 'Vividly saturated purplish pink of a medium to medium-dark tone', 'Rhodolite Garnet', 'images/stone-banner/1733801616764339.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A beautiful, bright, &ldquo;open colored&rdquo; pyrope-almandine garnet. </span><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Clean, very well cut and brilliant.</span></p>', '7.59 x 5.80 x 3.74 mm', 'None', 'A card/brief format lab report is included with the stone', 400, 1.5, 'Purplish pink', '2022-05-25 17:34:31', '2022-08-01 16:17:24'),
(14, 'Rectangular, radiant cut', NULL, 20, 78, 5, 42, 1, 11, 16, 2, 84, 1, 'Vividly saturated reddish and purplish pink of a medium-dark tone', 'Rhodolite Garnet', 'images/stone-banner/1733801955194939.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A well-saturated, clean rhodolite garnet cut into a radiant.</span></p>', '7.55 x 5.69 x 3.79 mm', 'None', 'A card/brief format lab report is included with the stone', 350, 1.54, 'Reddish pink', '2022-05-25 17:39:54', '2022-08-01 16:17:24'),
(13, 'Hexadecagonal, fancy cut', NULL, 21, 79, 5, 41, 1, 14, 17, 2, 85, 1, 'Intensely saturated slightly purplish red of a medium-dark tone', 'Pyrope-Almandine Garnet', 'images/stone-banner/1733802291745164.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A beautiful fancy cut garnet. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Bright and intense red hue, sharp and precise cutting and excellent clarity.</span></p>', '7.04 – 7.29 x 4.62 mm', 'None', 'A card/brief format lab report is included with the stone', 400, 1.61, 'Cardinal red', '2022-05-25 17:45:15', '2022-08-01 16:17:24'),
(12, 'Oval, modified brilliant cut crown with a modified Portuguese cut pavilion', NULL, 20, 80, 5, 33, 1, 12, 17, 2, 86, 1, 'Vivid purple of a medium to medium-dark tone', 'Rhodolite Garnet', 'images/stone-banner/1733802803519942.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The color of this stone is so exceptionally good that when we first saw it we thought it might be purple-colored lead glass that sometimes gets offered as &ldquo;garnet&rdquo; on the rough markets.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Fortunately, it is a natural, untreated garnet with an amazing color. It&rsquo;s so rich, vivid and bright for a garnet that it&rsquo;d take sifting through thousands of stones to even have a chance of finding another.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Loupe clean, well cut and brilliant.</p>', '7.62 x 6.81 x 4.72 mm', 'None', 'A card/brief format lab report is included with the stone', 450, 1.87, 'Vivid purple', '2022-05-25 17:53:23', '2022-08-01 16:17:24'),
(11, 'Octagonal, fancy cut', NULL, 21, 81, 5, 41, 1, 7, 17, 2, 87, 1, 'Intense to vivid red of a medium dark tone with a purplish tint', 'Pyrope-Almandine Garnet', 'images/stone-banner/1733803108942658.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A very well cut and clean garnet.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">We didn&rsquo;t quite expect to get 3.69 carats out of the rough considering how sharp the cut is and how low the angles on the pavilion are, but fortunately the yield turned out better than expected.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The color shifts from a darker reddish purple indoors, to bright and vivid purplish red in daylight outdoors.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Additionally, the stone is loupe clean.</p>', '8.60 x 8.59 x 8.57 x 6.24 mm', 'None', 'A full format lab report is included with the stone', 600, 3.69, 'Raspberry red', '2022-05-25 17:58:14', '2022-08-01 16:17:24'),
(10, NULL, NULL, 23, 82, 5, 40, 2, 8, 17, 2, 88, 1, 'Intense yellowish orange of a medium tone', 'Hessonite Garnet', 'images/stone-banner/1734345613334236.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A bright and crystal-clear hessonite cut into one of A. Akhavan\'s sharp looking designs.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The stone was actually cut from a piece of rough of 4-something carats, but while it was possible to cut around a carat and a half in a standard trillion cut, the stone would have had some inclusions &ndash; so the rough was instead ground away until eventually only the loupe clean part of it remained.</p>', NULL, 'None', NULL, NULL, 0.81, 'Pumpkin orange', '2022-05-31 17:41:07', '2022-08-01 16:17:24'),
(9, NULL, NULL, 26, 83, 5, 35, 2, 11, 16, 2, 89, 1, 'Vividly saturated slightly bluish green of a medium tone', 'Grossular Garnet', 'images/stone-banner/1734346029836054.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A gorgeous grossular garnet (\"mint garnet\" i.e. tsavorite in gem trade parlance) that&rsquo;s vivid, well cut and exceptionally clean for its kind.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The stone stays green and fully lit in just about every lighting scenario imaginable, and has brilliance to spare.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Clarity is almost flawless &ndash; the few tiny pinpoint crystals near the girdle only appear under the loupe after a very thorough search and we initially had to put it under a microscope to even confirm they were actually there.</p>', NULL, 'None', NULL, NULL, 1.06, 'Mint green', '2022-05-31 17:47:44', '2022-08-01 16:17:24'),
(8, NULL, NULL, 23, 84, 5, 40, 2, 14, 11, 2, 90, 1, 'Vividly saturated slightly reddish orange of a medium-dark tone', 'Hessonite Garnet', 'images/stone-banner/1734346461957594.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A fancy cut hessonite.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">After recutting, the stone lights up very well but the inclusions stayed so a few small crystals can be seen by the unaided eye on close inspection.</p>', NULL, 'None', NULL, NULL, 1.69, 'Reddish orange', '2022-05-31 17:54:36', '2022-08-01 16:17:24'),
(7, NULL, NULL, 21, 85, 5, 41, 2, 14, 16, 2, 91, 1, 'Vivid orangish red of a medium-dark tone', 'Pyrope-Almandine Garnet', 'images/stone-banner/1734347159587635.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">A sharp-looking, well cut red garnet made into a beautiful variant of the round brilliant cut.</span></p>', NULL, 'None', NULL, NULL, 1.9, 'Scarlet red', '2022-05-31 18:05:41', '2022-08-01 16:17:24'),
(6, NULL, NULL, 22, 86, 5, 40, 2, 12, 16, 2, 92, 1, 'Intensely to vividly saturated pastel orange of a medium tone', 'Spessartite Garnet', 'images/stone-banner/1734350469072788.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">&ldquo;Bright, peachy and unique&rdquo; aptly describes&nbsp;this very well cut spessartite garnet from Mahenge, Tanzania.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The stone is quite rare in its own category in that it has an uncommon pastel apricot/peach type of hue, but still shows excellent (intense to vivid) saturation nonetheless. On top of that it&rsquo;s almost loupe clean, which is exceptional even for spessartites of far more common colors.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It&rsquo;s a very bright and brilliant stone that looks intensely apricot-orange outdoors and gains further saturation indoors in ambient daylight. Looks particularly amazing on overcast days.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Plenty of brilliance and sparkle in all lights thanks to the excellent clarity and the naturally high RI of spessartites.</p>', NULL, 'None', NULL, NULL, 1.94, 'Fresh apricot', '2022-05-31 18:17:36', '2022-08-01 16:17:24');
INSERT INTO `product` (`order`, `Shape_Cut`, `solid`, `Variety_id`, `id`, `category_id`, `color_id`, `Available_id`, `shape_id`, `clarity_id`, `enhancement_id`, `gallery_id`, `value`, `color`, `product_name`, `product_image`, `avalibility_status`, `order_value`, `product_description`, `product_dimensions`, `product_treatments`, `product_labreport`, `product_price`, `product_Weight`, `product_variety`, `created_at`, `updated_at`) VALUES
(5, NULL, NULL, 21, 87, 5, 41, 2, 12, 17, 2, 93, 1, 'Intensely saturated slightly orangish red of a medium to medium-dark tone', 'Pyrope-Almandine Garnet', 'images/stone-banner/1734350886577664.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A very well cut red garnet, lustrous and bright thanks to the oval barion cut.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Loupe clean and well saturated as well.</p>', NULL, 'None', NULL, NULL, 1.98, 'Vermillion red', '2022-05-31 19:04:56', '2022-08-01 16:17:24'),
(2, NULL, NULL, 21, 88, 5, 33, 2, 11, 16, 2, 94, 1, 'Intense reddish purple of a medium-dark tone', 'Pyrope-Almandine Garnet', 'images/stone-banner/1734352967009728.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">An intensely reddish purple garnet recut from a 3.83 carat commercial cushion into a loupe clean, sparkly and well made modified rectangular cushion.</span></p>', NULL, 'None', NULL, NULL, 2.2, 'Purple sangria', '2022-05-31 19:38:00', '2022-08-01 16:17:24'),
(4, NULL, NULL, 26, 89, 5, 35, 2, 13, 15, 2, 95, 1, 'Intensely to vividly saturated slightly yellowish green of a medium-light tone', 'Grossular Garnet', 'images/stone-banner/1734353812638834.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">A bright and well saturated green garnet from Arusha in Tanzania.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Just like in the photos, the inclusions in it are difficult to pinpoint due to the brilliance provided by the Portuguese cut pavilion and the stone&rsquo;s natural saturation working together to overwhelm them since they&rsquo;re colorless.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The result is that the stone faces up eye clean, but a few crystals can be seen in it if it&rsquo;s tilted to the side so just to be safe we\'re calling it VVS.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">It has plenty of brightness and lights up easily in any lighting.</p>', NULL, 'None', NULL, NULL, 2.93, 'Spring green', '2022-05-31 19:51:26', '2022-08-01 16:17:24'),
(3, NULL, NULL, 22, 90, 5, 40, 2, 12, 16, 2, 96, 1, 'Vivid orange of a medium tone', 'Mandarin Garnets', 'images/stone-banner/1734354249057367.jpg', NULL, NULL, '<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Top of the line neon orange spessartites.&nbsp;</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">Simply put &ndash; if Mahenge spinels were orange, this is how they&rsquo;d look.</p>\r\n<p style=\"padding: 0px; margin: 0px 0px 1em; box-sizing: border-box; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px; color: #85868c; caret-color: #85868c; line-height: inherit !important;\">The stones look vivid and glowy in all sorts of light, and have practically no extinction to speak of at all. They drip with saturation and show that tell-tale glow of Tanzania&rsquo;s finest.</p>', NULL, 'None', NULL, NULL, 3.1, 'Neon Fanta orange', '2022-05-31 19:58:22', '2022-08-01 16:17:24'),
(1, NULL, NULL, 21, 91, 5, 33, 2, 13, 16, 2, 97, 1, 'Vividly saturated pinkish purple of a medium to medium-dark tone', 'Pyrope-Almandine Garnet', 'images/stone-banner/1734354464082237.jpg', NULL, NULL, '<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">An outlier even among the best purple garnets of Mozambique and Tanzania &ndash; a ridiculously bright, ridiculously vivid pinkish purple that doesn&rsquo;t have the slightest bit of a black undertone that these gems normally show even when viewed in full daylight. </span></p>\r\n<p><span style=\"caret-color: #85868c; color: #85868c; font-family: Raleway, Helvetica, Arial, Verdana, sans-serif; font-size: 15px;\">Or to put it this way &ndash; if we merged the best possible color for a purple garnet with a sapphire&rsquo;s capacity to light up, this is what we&rsquo;d end up with.</span></p>', NULL, 'None', NULL, NULL, 5.31, 'Hot magenta purple', '2022-05-31 20:01:47', '2022-08-01 16:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `reviews_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviews_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviews_client` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviews_city` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `reviews_header`, `reviews_body`, `reviews_client`, `reviews_city`, `created_at`, `updated_at`) VALUES
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; letter-spacing: 0.06px; background-color: #ffffff; color: #606060 !important; font-family: \'EB Garamond\', serif !important; font-size: 20px !important; line-height: 30px !important;\">As I was worried how the sapphire would perform in dreary grey conditions (ie the UK), he sent me about 10 different videos of the sapphire using all different lighting conditions, inside, outside, bright sunlight, shaded etc etc. He told me all about the sapphire and how they had recut it and anything I wanted to know Ivan helped with. I have NEVER had such phenomenal customer service.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; letter-spacing: 0.06px; background-color: #ffffff; color: #606060 !important; font-family: \'EB Garamond\', serif !important; font-size: 20px !important; line-height: 30px !important;\">&nbsp;</p>', 'A client from IL', 'USA', '2021-12-19 12:39:28', '2021-12-19 12:39:28'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; letter-spacing: 0.06px; background-color: #ffffff; color: #606060 !important; font-family: \'EB Garamond\', serif !important; font-size: 20px !important; line-height: 30px !important;\">As I was worried how the sapphire would perform in dreary grey conditions (ie the UK), he sent me about 10 different videos of the sapphire using all different lighting conditions, inside, outside, bright sunlight, shaded etc etc. He told me all about the sapphire and how they had recut it and anything I wanted to know Ivan helped with. I have NEVER had such phenomenal customer service.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; letter-spacing: 0.06px; background-color: #ffffff; color: #606060 !important; font-family: \'EB Garamond\', serif !important; font-size: 20px !important; line-height: 30px !important;\">&nbsp;</p>', 'A client from IL', 'USA', '2021-12-19 12:39:33', '2021-12-19 12:39:33'),
(8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; letter-spacing: 0.06px; background-color: #ffffff; color: #606060 !important; font-family: \'EB Garamond\', serif !important; font-size: 20px !important; line-height: 30px !important;\">As I was worried how the sapphire would perform in dreary grey conditions (ie the UK), he sent me about 10 different videos of the sapphire using all different lighting conditions, inside, outside, bright sunlight, shaded etc etc. He told me all about the sapphire and how they had recut it and anything I wanted to know Ivan helped with. I have NEVER had such phenomenal customer service.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; letter-spacing: 0.06px; background-color: #ffffff; color: #606060 !important; font-family: \'EB Garamond\', serif !important; font-size: 20px !important; line-height: 30px !important;\">&nbsp;</p>', 'A client from IL', 'USA', '2021-12-19 12:39:41', '2021-12-19 12:39:41'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; letter-spacing: 0.06px; background-color: #ffffff; color: #606060 !important; font-family: \'EB Garamond\', serif !important; font-size: 20px !important; line-height: 30px !important;\">As I was worried how the sapphire would perform in dreary grey conditions (ie the UK), he sent me about 10 different videos of the sapphire using all different lighting conditions, inside, outside, bright sunlight, shaded etc etc. He told me all about the sapphire and how they had recut it and anything I wanted to know Ivan helped with. I have NEVER had such phenomenal customer service.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; letter-spacing: 0.06px; background-color: #ffffff; color: #606060 !important; font-family: \'EB Garamond\', serif !important; font-size: 20px !important; line-height: 30px !important;\">&nbsp;</p>', 'A client from IL', 'USA', '2021-12-19 12:39:47', '2022-02-24 13:21:51'),
(11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '<p>As I was worried how the sapphire would perform in dreary grey conditions (ie the UK), he sent me about 10 different videos of the sapphire using all different lighting conditions, inside, outside, bright sunlight, shaded etc etc. He told me all about the sapphire and how they had recut it and anything I wanted to know Ivan helped with. I have NEVER had such phenomenal customer service.</p>', 'A client from IL', 'USA', '2022-02-25 12:51:46', '2022-02-25 12:51:46'),
(12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '<p>&ldquo;Yes I did receive it and am very happy with the color! It is very beautiful and exactly as described. I probably won&rsquo;t have my ring made for a while but I&rsquo;ll be sure to send you pictures of the completed piece. Thank you so much for all of the video&rsquo;s and patience while I made my decision. I will definitely purchase from your company again. Feel free to add my comments to your testimonial page.&rdquo;</p>', 'A client from IL', 'USA', '2022-03-23 12:04:55', '2022-03-23 12:04:55'),
(13, 'Maecenas ac mauris sodales, venenatis enim convallis, laoreet felis.', '<p>&ldquo;I was so so so worried by using a seller I haven&rsquo;t dealt with before but decided to make an enquiry. I contacted Adamantgems via their website to enquire about &ldquo;my precious&rdquo;!</p>\r\n<p>Ivan replied, answering all the questions I had sent him plus more insights. As I was worried how the sapphire would perform in dreary grey conditions (ie the UK), he sent me about 10 different videos of the sapphire using all different lighting conditions, inside, outside, bright sunlight, shaded etc etc. He told me all about the sapphire and how they had recut it and anything I wanted to know Ivan helped with. I have NEVER had such phenomenal customer service. There was no pressure to buy and he told me not to worry about making an immediate purchase and to take my time making the decision. Honestly, I think this was the best gemstone buying experience I&rsquo;ve ever had. At every step of the way, Ivan kept me informed &ndash; the packaging, the sending to the courier, the tracking etc etc. and unbelievably the sapphire arrived in less than a week!&rdquo;</p>', 'A client from IL', 'USA', '2022-03-23 12:05:45', '2022-03-23 12:05:45'),
(14, 'I am beyond thrilled, I am completely enchanted with this sapphire.', '<p>&ldquo;It was incredibly sparkly and blue even under our indoor light at night, but the next day when I took it outside, it was absolutely mesmerising. The colour is just fantastic, and it is so, so beautiful. I am beyond thrilled, I am completely enchanted with this sapphire.</p>\r\n<p>You&rsquo;re absolutely right in that it stays perceptibly blue in all lighting, and I&rsquo;ve loved examining the colour in all my rooms, at all times of the day. I don&rsquo;t know what else to say except thank you a thousand times to you and Zana, for all the time, videos, emails, pictures, education, explanations, patience and professionalism these last few months. It has culminated in a wonderful stone that is exactly, perfectly what I hoped for in every way. It&rsquo;s been so smooth, easy, and fun &mdash; I really can&rsquo;t express my appreciation enough. Every time I glance at this stone, it&rsquo;s only positive, happy, good vibes, thanks to you and Zana. The next step will be the jeweler&rsquo;s, and I don&rsquo;t know how long that will take, but I would love to send you a picture of the finished piece. Thank you again, truly and sincerely. I can&rsquo;t wait to come back to you at the next opportunity to obtain a gorgeous gemstone.&rdquo;</p>', 'A client from IL', 'USA', '2022-03-23 12:06:18', '2022-05-30 17:26:20'),
(15, 'Will wait with pleasure your new stock, and the next, and the next.', '<p>&ldquo;Ivan, I am really happy your work. I will definitly buy again. Kowangoa Yellow, True orange, True green, True hot-pink or strongly-pink &ndash; True Blue &ndash; Royal &ndash; Vivid of courses.</p>\r\n<p>Tourmaline and spinel and chryso. Nothing more to say, the 3 chrysoberyl are perfect , these Parcel of saphire are all very high grade &ndash; I am verry happy and thankful. Will wait with pleasure your new stock, and the next, and the next, and the next.</p>', 'A client from IL', 'USA', '2022-03-23 12:06:48', '2022-05-30 17:25:42');

-- --------------------------------------------------------

--
-- Table structure for table `reviews_headers`
--

CREATE TABLE `reviews_headers` (
  `id` int(11) NOT NULL,
  `reviews_banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviews_header_header` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviews_header_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews_headers`
--

INSERT INTO `reviews_headers` (`id`, `reviews_banner_image`, `reviews_header_header`, `reviews_header_text`, `created_at`, `updated_at`) VALUES
(1, 'images/reviews-backend/1734252634918304.jpg', 'Reviews', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2021-11-25 15:36:02', '2022-05-30 17:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('70Kvjn5U7NZ9922E5sHzPeZroYbNYGLCniMCRoYI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieE4xd1lmYW1aZnIzanlVcHczZkU3V2NOZEZIYUxyN1lMYm1uWG01USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9jb2xsZWN0aW9ucy9hdmFpbGFibGUtZ2Vtcy9hdmFpbGFibGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1663681084);

-- --------------------------------------------------------

--
-- Table structure for table `shape`
--

CREATE TABLE `shape` (
  `id` int(11) NOT NULL,
  `shape_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shape_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shape_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shape`
--

INSERT INTO `shape` (`id`, `shape_name`, `shape_image`, `shape_description`, `created_at`, `updated_at`) VALUES
(7, 'Fancy', 'images/shape/1728453410192083.png', 'Fancy', '2022-03-27 16:47:04', '2022-03-27 16:47:04'),
(8, 'Triangular', 'images/shape/1728453437537041.png', 'Triangular', '2022-03-27 16:47:30', '2022-03-27 16:47:30'),
(9, 'Heart', 'images/shape/1728453455266525.png', 'Heart', '2022-03-27 16:47:47', '2022-03-27 16:47:47'),
(10, 'Pear', 'images/shape/1728453475656997.png', 'Pear', '2022-03-27 16:48:06', '2022-03-27 16:48:06'),
(11, 'Rectangular', 'images/shape/1728453560933535.png', 'Rectangular', '2022-03-27 16:49:28', '2022-03-27 16:49:28'),
(12, 'Oval', 'images/shape/1728453576185621.png', 'Oval', '2022-03-27 16:49:42', '2022-03-27 16:49:42'),
(13, 'Square', 'images/shape/1728453612366897.png', 'Square', '2022-03-27 16:50:17', '2022-03-27 16:50:17'),
(14, 'Round', 'images/shape/1728453627441700.png', 'Round', '2022-03-27 16:50:31', '2022-03-27 16:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(9, 'admin', 'admin@gmail.com', NULL, '$2y$10$IXUeW8AQFsFF2wERnnO3UOrLI6CFkpi1i8BDIL66jCdcgafrYpkZe', NULL, NULL, NULL, NULL, NULL, '2022-03-21 00:07:40', '2022-06-17 17:23:48'),
(10, 'adamant_admin', 'adamant@gmail.com', NULL, '$2y$10$WPHv5gJKWCGb6zjdbQhPB.cZOr84kBxKbRbrbw40/i/LK1D0Nj/Tq', NULL, NULL, NULL, NULL, NULL, '2022-03-25 17:50:20', '2022-04-29 12:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_activitylogs`
--

CREATE TABLE `user_activitylogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_activitylogs`
--

INSERT INTO `user_activitylogs` (`id`, `name`, `email`, `status`, `date_time`, `created_at`, `updated_at`) VALUES
(14, 'kk', 'kk@gmail.com', 'user logout', 'Mon, Mar 14, 2022 3:01 AM', '2022-03-13 21:31:53', '2022-03-13 21:31:53'),
(15, 'kk', 'kk@gmail.com', 'user login', 'Mon, Mar 14, 2022 3:02 AM', '2022-03-13 21:32:08', '2022-03-13 21:32:08'),
(16, 'kk', 'kk@gmail.com', 'user logout', 'Mon, Mar 14, 2022 3:03 AM', '2022-03-13 21:33:33', '2022-03-13 21:33:33'),
(17, 'new', 'new@gmail.com', 'user login', 'Mon, Mar 14, 2022 3:03 AM', '2022-03-13 21:33:43', '2022-03-13 21:33:43'),
(18, 'wasala', 'wasalas893@gmail.com', 'user login', 'Tue, Mar 15, 2022 1:23 AM', '2022-03-14 19:53:09', '2022-03-14 19:53:09'),
(19, 'wasala', 'wasalas893@gmail.com', 'user logout', 'Tue, Mar 15, 2022 1:51 AM', '2022-03-14 20:21:30', '2022-03-14 20:21:30'),
(20, 'kk', 'kk@gmail.com', 'user login', 'Tue, Mar 15, 2022 1:51 AM', '2022-03-14 20:21:43', '2022-03-14 20:21:43'),
(21, 'kk', 'kk@gmail.com', 'user login', 'Tue, Mar 15, 2022 1:51 AM', '2022-03-14 20:21:57', '2022-03-14 20:21:57'),
(22, 'kk', 'kk@gmail.com', 'user logout', 'Tue, Mar 15, 2022 1:52 AM', '2022-03-14 20:22:26', '2022-03-14 20:22:26'),
(23, 'wasala', 'wasalas893@gmail.com', 'user login', 'Tue, Mar 15, 2022 1:52 AM', '2022-03-14 20:22:39', '2022-03-14 20:22:39'),
(24, 'wasala', 'wasalas893@gmail.com', 'user login', 'Tue, Mar 15, 2022 1:54 AM', '2022-03-14 20:24:19', '2022-03-14 20:24:19'),
(25, 'wasala', 'wasalas893@gmail.com', 'user logout', 'Tue, Mar 15, 2022 1:54 AM', '2022-03-14 20:24:30', '2022-03-14 20:24:30'),
(26, 'new', 'new@gmail.com', 'user login', 'Tue, Mar 15, 2022 1:55 AM', '2022-03-14 20:25:28', '2022-03-14 20:25:28'),
(27, 'new', 'new@gmail.com', 'user login', 'Tue, Mar 15, 2022 1:55 AM', '2022-03-14 20:25:44', '2022-03-14 20:25:44'),
(28, 'new', 'new@gmail.com', 'user logout', 'Tue, Mar 15, 2022 1:57 AM', '2022-03-14 20:27:11', '2022-03-14 20:27:11'),
(29, 'new', 'new@gmail.com', 'user logout', 'Tue, Mar 15, 2022 1:57 AM', '2022-03-14 20:27:43', '2022-03-14 20:27:43'),
(30, 'wasala', 'wasalas893@gmail.com', 'user logout', 'Tue, Mar 15, 2022 1:59 AM', '2022-03-14 20:29:13', '2022-03-14 20:29:13'),
(31, 'kk', 'kk@gmail.com', 'user logout', 'Tue, Mar 15, 2022 2:00 AM', '2022-03-14 20:30:56', '2022-03-14 20:30:56'),
(32, 'wasala', 'wasalas893@gmail.com', 'user login', 'Tue, Mar 15, 2022 2:07 AM', '2022-03-14 20:37:56', '2022-03-14 20:37:56'),
(33, 'wasala', 'wasalas893@gmail.com', 'user login', 'Tue, Mar 15, 2022 2:09 AM', '2022-03-14 20:39:53', '2022-03-14 20:39:53'),
(34, 'wasala', 'wasalas893@gmail.com', 'user logout', 'Tue, Mar 15, 2022 2:14 AM', '2022-03-14 20:44:52', '2022-03-14 20:44:52'),
(35, 'kk', 'kk@gmail.com', 'user login', 'Tue, Mar 15, 2022 2:15 AM', '2022-03-14 20:45:08', '2022-03-14 20:45:08'),
(36, 'kk', 'kk@gmail.com', 'user login', 'Tue, Mar 15, 2022 2:16 AM', '2022-03-14 20:46:01', '2022-03-14 20:46:01'),
(37, 'kk', 'kk@gmail.com', 'user logout', 'Tue, Mar 15, 2022 2:16 AM', '2022-03-14 20:46:23', '2022-03-14 20:46:23'),
(38, 'wasala', 'wasalas893@gmail.com', 'user login', 'Tue, Mar 15, 2022 2:16 AM', '2022-03-14 20:46:45', '2022-03-14 20:46:45'),
(39, 'kk', 'kk@gmail.com', 'user logout', 'Tue, Mar 15, 2022 2:20 AM', '2022-03-14 20:50:20', '2022-03-14 20:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `variety`
--

CREATE TABLE `variety` (
  `id` int(10) UNSIGNED NOT NULL,
  `variety_name` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `variety_description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `variety`
--

INSERT INTO `variety` (`id`, `variety_name`, `variety_description`, `created_at`, `updated_at`) VALUES
(1, 'Blue sapphire', 'Blue sapphire', '2022-04-27 07:09:33', '2022-05-06 18:23:39'),
(2, 'Pink sapphire', 'Pink sapphire', '2022-05-09 14:26:57', '2022-05-09 14:26:57'),
(3, 'Purple sapphire', 'Purple sapphire', '2022-05-09 14:27:13', '2022-05-09 14:27:13'),
(4, 'Yellow sapphire', 'Yellow sapphire', '2022-05-09 14:27:27', '2022-05-09 14:27:27'),
(5, 'Green sapphire', 'Green sapphire', '2022-05-09 14:27:41', '2022-05-09 14:27:41'),
(6, 'Fancy sapphire', 'Fancy sapphire', '2022-05-09 14:27:53', '2022-05-09 14:27:53'),
(7, 'Orange sapphire', 'Orange sapphire', '2022-05-09 14:28:06', '2022-05-09 14:28:06'),
(8, 'Violet sapphire', 'Violet sapphire', '2022-05-09 14:30:37', '2022-05-09 14:30:37'),
(9, 'Bi-color sapphire', 'Bi-color sapphire', '2022-05-09 14:31:26', '2022-05-09 14:31:26'),
(10, 'Color change sapphire', 'Color change sapphire', '2022-05-09 14:31:50', '2022-05-09 14:31:50'),
(11, 'Teal sapphire', 'Teal sapphire', '2022-05-09 14:32:07', '2022-05-09 14:32:07'),
(12, 'Brown sapphire', 'Brown sapphire', '2022-05-09 14:33:00', '2022-05-09 14:33:00'),
(13, 'Blue & pink sapphire', 'Blue & pink sapphire', '2022-05-09 14:33:45', '2022-05-09 14:33:45'),
(14, 'White sapphire', 'White sapphire', '2022-05-09 14:35:29', '2022-05-09 14:35:29'),
(15, 'Padparadscha sapphire', 'Padparadscha sapphire', '2022-05-09 14:35:43', '2022-05-09 14:35:43'),
(16, 'Multi-color sapphire', 'Multi-color sapphire', '2022-05-09 14:36:23', '2022-05-09 14:36:23'),
(17, 'Spinel', 'Spinel', '2022-05-09 14:37:47', '2022-05-09 14:37:47'),
(18, 'Gahnospinel', 'Gahnospinel', '2022-05-09 14:38:05', '2022-05-09 14:38:05'),
(19, 'Chrysoberyl', 'Chrysoberyl', '2022-05-09 14:39:12', '2022-05-09 14:39:12'),
(20, 'Rhodolite garnet', 'Rhodolite garnet', '2022-05-09 14:40:16', '2022-05-09 14:40:16'),
(21, 'Pyrope-almandine garnet', 'Pyrope-almandine garnet', '2022-05-09 14:40:35', '2022-05-09 14:40:35'),
(22, 'Spessartite garnet', 'Spessartite garnet', '2022-05-09 14:40:52', '2022-05-09 14:45:48'),
(23, 'Hessonite garnet', 'Hessonite garnet', '2022-05-09 14:41:17', '2022-05-09 14:41:17'),
(24, 'Pyrope-spessartine garnet', 'Pyrope-spessartine garnet', '2022-05-09 14:42:31', '2022-05-09 14:42:31'),
(25, 'Almandine garnet', 'Almandine garnet', '2022-05-09 14:42:51', '2022-05-09 14:42:51'),
(26, 'Grossular garnet', 'Grossular garnet', '2022-05-09 14:44:46', '2022-05-09 14:44:46'),
(27, 'Tourmaline', 'Tourmaline', '2022-05-09 14:46:59', '2022-05-09 14:46:59'),
(28, 'Zoisite', 'Zoisite', '2022-05-09 14:47:45', '2022-05-09 14:47:45'),
(29, 'Zircon', 'Zircon', '2022-05-09 14:47:55', '2022-05-09 14:47:55'),
(30, 'Beryl', 'Beryl', '2022-05-09 14:48:03', '2022-05-09 14:48:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clarity`
--
ALTER TABLE `clarity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enhancements`
--
ALTER TABLE `enhancements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_category`
--
ALTER TABLE `faq_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_description`
--
ALTER TABLE `footer_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genesis_bodys`
--
ALTER TABLE `genesis_bodys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genesis_ends`
--
ALTER TABLE `genesis_ends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genesis_headers`
--
ALTER TABLE `genesis_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genesis_lasts`
--
ALTER TABLE `genesis_lasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genesis_seconds`
--
ALTER TABLE `genesis_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_body`
--
ALTER TABLE `home_body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_map`
--
ALTER TABLE `home_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_select_us`
--
ALTER TABLE `home_select_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_stone`
--
ALTER TABLE `our_stone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_stone_category`
--
ALTER TABLE `our_stone_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_daylights`
--
ALTER TABLE `process_daylights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_fivesections`
--
ALTER TABLE `process_fivesections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_forsections`
--
ALTER TABLE `process_forsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_goldens`
--
ALTER TABLE `process_goldens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_onesections`
--
ALTER TABLE `process_onesections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_studiobodys`
--
ALTER TABLE `process_studiobodys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_studios`
--
ALTER TABLE `process_studios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_studiosliders`
--
ALTER TABLE `process_studiosliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_thresections`
--
ALTER TABLE `process_thresections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_twosections`
--
ALTER TABLE `process_twosections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews_headers`
--
ALTER TABLE `reviews_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shape`
--
ALTER TABLE `shape`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variety`
--
ALTER TABLE `variety`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clarity`
--
ALTER TABLE `clarity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enhancements`
--
ALTER TABLE `enhancements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `faq_category`
--
ALTER TABLE `faq_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `footer_description`
--
ALTER TABLE `footer_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;

--
-- AUTO_INCREMENT for table `genesis_bodys`
--
ALTER TABLE `genesis_bodys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genesis_ends`
--
ALTER TABLE `genesis_ends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genesis_headers`
--
ALTER TABLE `genesis_headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `genesis_lasts`
--
ALTER TABLE `genesis_lasts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genesis_seconds`
--
ALTER TABLE `genesis_seconds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_body`
--
ALTER TABLE `home_body`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_map`
--
ALTER TABLE `home_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_select_us`
--
ALTER TABLE `home_select_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `our_stone`
--
ALTER TABLE `our_stone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_stone_category`
--
ALTER TABLE `our_stone_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `process_daylights`
--
ALTER TABLE `process_daylights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `process_fivesections`
--
ALTER TABLE `process_fivesections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `process_forsections`
--
ALTER TABLE `process_forsections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `process_goldens`
--
ALTER TABLE `process_goldens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `process_onesections`
--
ALTER TABLE `process_onesections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `process_studiobodys`
--
ALTER TABLE `process_studiobodys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `process_studios`
--
ALTER TABLE `process_studios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `process_studiosliders`
--
ALTER TABLE `process_studiosliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `process_thresections`
--
ALTER TABLE `process_thresections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `process_twosections`
--
ALTER TABLE `process_twosections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reviews_headers`
--
ALTER TABLE `reviews_headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shape`
--
ALTER TABLE `shape`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `variety`
--
ALTER TABLE `variety`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
