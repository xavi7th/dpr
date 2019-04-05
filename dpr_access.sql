-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 02:35 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpr_access`
--

-- --------------------------------------------------------

--
-- Table structure for table `addon_ati_inspection_documents`
--

CREATE TABLE `addon_ati_inspection_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suitability_inspection_of_proposed_site` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy_of_current_storage_and_sales_license` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `retail_outlet_as_built_layout_drawing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposed_layout_drawing_for_the_lpg_addon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_services_report_indicating_the_lpg_addon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `environmental_evaluation_report` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relevant_town_planning_approval` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_letter_addressed_to_the_controller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suitability_inspection_of_proposed_site_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_of_current_storage_and_sales_license_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retail_outlet_as_built_layout_drawing_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proposed_layout_drawing_for_the_lpg_addon_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_services_report_indicating_the_lpg_addon_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `environmental_evaluation_report_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relevant_town_planning_approval_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suitability_inspection_of_proposed_site_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_of_current_storage_and_sales_license_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retail_outlet_as_built_layout_drawing_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proposed_layout_drawing_for_the_lpg_addon_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_services_report_indicating_the_lpg_addon_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `environmental_evaluation_report_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relevant_town_planning_approval_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suitability_inspection_of_proposed_site_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_of_current_storage_and_sales_license_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retail_outlet_as_built_layout_drawing_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proposed_layout_drawing_for_the_lpg_addon_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_services_report_indicating_the_lpg_addon_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `environmental_evaluation_report_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relevant_town_planning_approval_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addon_ati_inspection_documents`
--

INSERT INTO `addon_ati_inspection_documents` (`id`, `application_id`, `marketer_id`, `company_id`, `suitability_inspection_of_proposed_site`, `copy_of_current_storage_and_sales_license`, `retail_outlet_as_built_layout_drawing`, `proposed_layout_drawing_for_the_lpg_addon`, `fire_services_report_indicating_the_lpg_addon`, `environmental_evaluation_report`, `relevant_town_planning_approval`, `application_letter_addressed_to_the_controller`, `suitability_inspection_of_proposed_site_location_url`, `copy_of_current_storage_and_sales_license_location_url`, `retail_outlet_as_built_layout_drawing_location_url`, `proposed_layout_drawing_for_the_lpg_addon_location_url`, `fire_services_report_indicating_the_lpg_addon_location_url`, `environmental_evaluation_report_location_url`, `relevant_town_planning_approval_location_url`, `application_letter_addressed_to_the_controller_location_url`, `suitability_inspection_of_proposed_site_reason`, `copy_of_current_storage_and_sales_license_reason`, `retail_outlet_as_built_layout_drawing_reason`, `proposed_layout_drawing_for_the_lpg_addon_reason`, `fire_services_report_indicating_the_lpg_addon_reason`, `environmental_evaluation_report_reason`, `relevant_town_planning_approval_reason`, `application_letter_addressed_to_the_controller_reason`, `suitability_inspection_of_proposed_site_location_check`, `copy_of_current_storage_and_sales_license_location_check`, `retail_outlet_as_built_layout_drawing_location_check`, `proposed_layout_drawing_for_the_lpg_addon_location_check`, `fire_services_report_indicating_the_lpg_addon_location_check`, `environmental_evaluation_report_location_check`, `relevant_town_planning_approval_location_check`, `application_letter_addressed_to_the_controller_location_check`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00024', 'DPRMKT00008', NULL, 'yes', 'yes', 'yes', 'no', 'yes', 'null', 'null', 'yes', 'NnzxG4S.jpg', 'mastaace.jpg', 'oberhofer-4f904aa5577a0.jpg', 'null', 'park_autumn_trees_117202_1920x1080.jpg', 'null', 'null', 'godfather_marlon_brando_don_vito_corleone_black_rose_740_1920x1080.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', '2019-02-11 20:31:10', '2019-02-12 17:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `addon_lto_inspection_documents`
--

CREATE TABLE `addon_lto_inspection_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankdraft_of_statutory_fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_services_report_indicating_the_lpg_addon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photocopy_of_approval_to_install_lpg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_weight_measures_cert_of_verification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_letter_addressed_to_the_controller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_pressure_test_report_certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_three_years_income_tax_clearance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appropriate_plant_photography` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed_application_form_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_services_report_indicating_the_lpg_addon_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photocopy_of_approval_to_install_lpg_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_weight_measures_cert_of_verification_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_pressure_test_report_certificate_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_three_years_income_tax_clearance_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appropriate_plant_photography_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_services_report_indicating_the_lpg_addon_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photocopy_of_approval_to_install_lpg_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_weight_measures_cert_of_verification_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_pressure_test_report_certificate_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_three_years_income_tax_clearance_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appropriate_plant_photography_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_services_report_indicating_the_lpg_addon_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photocopy_of_approval_to_install_lpg_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_weight_measures_cert_of_verification_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_pressure_test_report_certificate_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_three_years_income_tax_clearance_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appropriate_plant_photography_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addon_lto_inspection_documents`
--

INSERT INTO `addon_lto_inspection_documents` (`id`, `application_id`, `marketer_id`, `company_id`, `completed_application_form`, `bankdraft_of_statutory_fees`, `fire_services_report_indicating_the_lpg_addon`, `photocopy_of_approval_to_install_lpg`, `current_weight_measures_cert_of_verification`, `application_letter_addressed_to_the_controller`, `current_pressure_test_report_certificate`, `current_three_years_income_tax_clearance`, `appropriate_plant_photography`, `completed_application_form_location_url`, `bankdraft_of_statutory_fees_location_url`, `fire_services_report_indicating_the_lpg_addon_location_url`, `photocopy_of_approval_to_install_lpg_location_url`, `current_weight_measures_cert_of_verification_location_url`, `application_letter_addressed_to_the_controller_location_url`, `current_pressure_test_report_certificate_location_url`, `current_three_years_income_tax_clearance_location_url`, `appropriate_plant_photography_location_url`, `completed_application_form_reason`, `bankdraft_of_statutory_fees_reason`, `fire_services_report_indicating_the_lpg_addon_reason`, `photocopy_of_approval_to_install_lpg_reason`, `current_weight_measures_cert_of_verification_reason`, `application_letter_addressed_to_the_controller_reason`, `current_pressure_test_report_certificate_reason`, `current_three_years_income_tax_clearance_reason`, `appropriate_plant_photography_reason`, `completed_application_form_location_check`, `bankdraft_of_statutory_fees_location_check`, `fire_services_report_indicating_the_lpg_addon_location_check`, `photocopy_of_approval_to_install_lpg_location_check`, `current_weight_measures_cert_of_verification_location_check`, `application_letter_addressed_to_the_controller_location_check`, `current_pressure_test_report_certificate_location_check`, `current_three_years_income_tax_clearance_location_check`, `appropriate_plant_photography_location_check`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00025', 'DPRMKT00008', NULL, 'yes', 'no', 'no', 'no', 'null', 'null', 'null', 'no', 'yes', 'e6f6.162713.jpg', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '1920x1080_Abstract_025120152.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', '2019-02-12 05:38:56', '2019-02-12 17:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `ado_inboxes`
--

CREATE TABLE `ado_inboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `to_outbox` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ado_inboxes`
--

INSERT INTO `ado_inboxes` (`id`, `application_id`, `from`, `application_type`, `sub_category`, `read`, `to_outbox`, `created_at`, `updated_at`) VALUES
(1, '2', 'DPRST00003', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2018-12-09 22:26:13', '2018-12-13 18:33:08'),
(2, '3', 'DPRST00003', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-13 19:29:07', '2019-01-19 12:43:42'),
(3, '3', 'DPRST00005', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-21 07:10:13', '2019-01-19 12:43:42'),
(4, '3', 'DPRST00005', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-21 09:28:58', '2019-01-19 12:43:42'),
(5, '3', 'DPRST00003', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-21 13:48:02', '2019-01-19 12:43:42'),
(6, '4', 'DPRST00003', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2018-12-23 12:58:44', '2019-01-19 12:43:33'),
(7, '6', 'DPRST00003', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2019-01-19 21:28:23', '2019-02-02 15:46:54'),
(8, '7', 'DPRST00003', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2019-01-20 00:26:09', '2019-01-20 00:29:14'),
(9, '9', 'DPRST00009', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2019-01-31 08:32:00', '2019-01-31 08:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `ado_outboxes`
--

CREATE TABLE `ado_outboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ado_outboxes`
--

INSERT INTO `ado_outboxes` (`id`, `application_id`, `to`, `role`, `application_type`, `sub_category`, `created_at`, `updated_at`) VALUES
(1, '2', 'DPRST00005', 'Head Gas M&G Lagos', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2018-12-12 10:14:36', '2018-12-12 10:14:36'),
(2, '3', 'DPRST00005', 'Head Gas M&G Lagos', 'LPG Retailer Outlets', 'ATC', '2018-12-13 19:41:05', '2018-12-13 19:41:05'),
(3, '3', 'DPRST00005', 'Head Gas M&G Lagos', 'LPG Retailer Outlets', 'ATC', '2018-12-21 09:28:42', '2018-12-21 09:28:42'),
(4, '3', 'DPRST00003', 'ZOPSCON', 'LPG Retailer Outlets', 'ATC', '2018-12-21 09:29:42', '2018-12-21 09:29:42'),
(5, '3', 'DPRST00003', 'ZOPSCON', 'LPG Retailer Outlets', 'ATC', '2018-12-21 09:30:32', '2018-12-21 09:30:32'),
(6, '3', 'DPRST00003', 'ZOPSCON', 'LPG Retailer Outlets', 'ATC', '2018-12-21 13:48:22', '2018-12-21 13:48:22'),
(7, '4', 'DPRST00005', 'Head Gas M&G Lagos', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2018-12-23 12:58:51', '2018-12-23 12:58:51'),
(8, '6', 'DPRST00005', 'Head Gas M&G Lagos', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2019-01-19 21:32:24', '2019-01-19 21:32:24'),
(9, '7', 'DPRST00005', 'Head Gas M&G Lagos', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2019-01-20 00:26:23', '2019-01-20 00:26:23'),
(10, '9', 'DPRST00005', 'Head Gas M&G Lagos', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2019-01-31 08:33:03', '2019-01-31 08:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `application_comments`
--

CREATE TABLE `application_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_comments`
--

INSERT INTO `application_comments` (`id`, `application_id`, `staff_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00002', 'DPRST00003', 'Ado treat this application please', '2018-12-09 22:25:57', '2018-12-09 22:25:57'),
(2, 'DPRAPPLICATION00002', 'DPRST00004', 'coming from Ado', '2018-12-12 10:14:32', '2018-12-12 10:14:32'),
(3, 'DPRAPPLICATION00002', 'DPRST00005', 'ok', '2018-12-12 10:14:54', '2018-12-12 10:14:54'),
(4, 'DPRAPPLICATION00002', 'DPRST00006', 'alright', '2018-12-12 10:15:36', '2018-12-12 10:15:36'),
(5, 'DPRAPPLICATION00003', 'DPRST00006', 'Mosay what is the update on this call...reply asap', '2018-12-13 19:43:03', '2018-12-13 19:43:03'),
(6, 'DPRAPPLICATION00003', 'DPRST00007', 'sir i\'m on it right away', '2018-12-13 19:43:29', '2018-12-13 19:43:29'),
(7, 'DPRAPPLICATION00003', 'DPRST00005', 'Bob call your staff to order on this...we need this tender to immediately', '2018-12-13 19:44:36', '2018-12-13 19:44:36'),
(8, 'DPRAPPLICATION00003', 'DPRST00004', 'hmm', '2018-12-21 08:27:58', '2018-12-21 08:27:58'),
(9, 'DPRAPPLICATION00006', 'DPRST00006', 'mosay handle this asap', '2019-01-19 21:34:30', '2019-01-19 21:34:30'),
(10, 'DPRAPPLICATION00010', 'DPRST00007', 'This message is from a staff', '2019-02-03 04:47:53', '2019-02-03 04:47:53'),
(11, 'DPRAPPLICATION00010', 'DPRST00005', 'This message is from a manager gas', '2019-02-03 04:48:24', '2019-02-03 04:48:24'),
(12, 'DPRAPPLICATION00017', 'DPRST00006', 'Head gas please treat this', '2019-02-04 22:48:58', '2019-02-04 22:48:58'),
(13, 'DPRAPPLICATION00023', 'DPRST00014', 'fire report certificate invalid', '2019-02-11 11:25:48', '2019-02-11 11:25:48'),
(14, 'DPRAPPLICATION00023', 'DPRST00014', 'Current Pressure Test Report / Certificate invalid', '2019-02-11 11:26:04', '2019-02-11 11:26:04'),
(15, 'DPRAPPLICATION00023', 'DPRST00014', 'Current Three Years Income Tax Clearance Invalid', '2019-02-11 11:26:18', '2019-02-11 11:26:18'),
(16, 'DPRAPPLICATION00026', 'DPRST00008', 'first to comment', '2019-02-13 18:01:52', '2019-02-13 18:01:52'),
(17, 'DPRAPPLICATION00027', 'DPRST00009', 'ado treat', '2019-03-02 18:01:08', '2019-03-02 18:01:08'),
(18, 'DPRAPPLICATION00034', 'DPRST00006', 'correct thse', '2019-03-18 13:28:45', '2019-03-18 13:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `app_doc_reviews`
--

CREATE TABLE `app_doc_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_gas_plant` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plant_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity_of_tank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_zopscon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_ADO` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_head_gas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_team_lead` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_staff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_doc_reviews`
--

INSERT INTO `app_doc_reviews` (`id`, `application_id`, `office`, `marketer_id`, `company_id`, `name_of_gas_plant`, `application_type`, `sub_category`, `plant_type`, `capacity_of_tank`, `state`, `lga`, `town`, `address`, `application_status`, `to_zopscon`, `to_ADO`, `to_head_gas`, `to_team_lead`, `to_staff`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00001', 'Warri', 'DPRMKT00008', 'DPRCOMP00004', 'benjones', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'Refilling Plant', NULL, 'Abia State', 'Aba South', 'aba', 'aba', 'Not Submitted', NULL, NULL, NULL, NULL, '', NULL, '2018-12-09 21:56:41', '2018-12-09 21:56:41'),
(2, 'DPRAPPLICATION00002', 'Warri', 'DPRMKT00008', 'DPRCOMP00001', 'homer', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'Refilling Plant', NULL, 'Abia State', 'Arochukwu', 'arochukwu', 'aba', 'Site Suitable', 'forwarded', 'forwarded', 'forwarded', 'received', 'forwarded', NULL, '2018-12-09 22:23:58', '2018-12-13 18:32:37'),
(3, 'DPRAPPLICATION00003', 'Warri', 'DPRMKT00008', 'DPRCOMP00001', 'homer', 'LPG Retailer Outlets', 'ATC', 'Refilling Plant', NULL, 'Abia State', 'Arochukwu', 'arochukwu', 'aba', 'ATC Issued', 'completed', 'completed', 'completed', 'completed', 'completed', NULL, '2018-12-13 19:12:48', '2018-12-21 14:00:28'),
(4, 'DPRAPPLICATION00004', 'Warri', 'DPRMKT00008', 'DPRCOMP00002', 'qq', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'Refilling Plant', NULL, 'Abia State', 'Aba South', '13', '3eqwr', 'Site Suitable', 'completed', 'completed', 'completed', 'completed', 'completed', NULL, '2018-12-23 12:58:00', '2018-12-24 20:57:59'),
(5, 'DPRAPPLICATION00005', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'neewer plant', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'Refilling Plant', NULL, 'Abia State', 'Aba South', 'aba', '12 aba road', 'Site Suitable', 'true', NULL, NULL, NULL, NULL, NULL, '2019-01-18 21:23:29', '2019-03-09 11:33:15'),
(6, 'DPRAPPLICATION00006', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'rodeo plant', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'Refilling Plant', NULL, 'Adamawa State', 'Ganye', 'ganye', 'ganye', 'Site Suitable', 'completed', 'completed', 'completed', 'completed', 'completed', NULL, '2019-01-18 23:44:34', '2019-01-25 18:28:10'),
(7, 'DPRAPPLICATION00007', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'benjen', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'Refilling Plant', NULL, 'Abia State', 'Aba South', 'awka', '56 awka road', 'Application Pending', 'forwarded', 'forwarded', 'forwarded', 'forwarded', 'true', NULL, '2019-01-20 00:23:51', '2019-01-20 00:27:26'),
(8, 'DPRAPPLICATION00008', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'mahjong', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'Refilling Plant', NULL, 'Abia State', 'Aba South', 'aba', '45 aba road', 'Not Submitted', NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-27 16:06:34', '2019-01-27 16:06:34'),
(9, 'DPRAPPLICATION00009', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'palmer oil', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'Refilling Plant', NULL, 'Edo State', 'Ikpoba Okha', 'benin', '12 ring road', 'Application Pending', 'forwarded', 'forwarded', 'true', NULL, NULL, NULL, '2019-01-29 19:18:46', '2019-01-31 08:33:03'),
(10, 'DPRAPPLICATION00010', 'Warri', 'DPRMKT00008', 'DPRCOMP00004', 'Cowin gas', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'Refilling Plant', NULL, 'Delta State', 'Warri South', 'warri', '12 airport road', 'Site Suitable', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-01 12:40:06', '2019-02-03 08:11:09'),
(11, 'DPRAPPLICATION00011', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'sedco plant', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'Industrial Plant', NULL, 'Delta State', 'Okpe', 'okpe', '51 okpe-isoko road', 'Site Suitable', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-02 17:24:11', '2019-02-06 19:14:25'),
(14, 'DPRAPPLICATION00012', 'Warri', 'DPRST00007', 'DPRCOMP00004', 'Cowin gas', 'LPG Retailer Outlets', 'ATC', 'Refilling Plant', NULL, 'Bayelsa State', 'Sagbama', 'sagbama town', '22, cane road', 'ATC Issued', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-03 12:00:51', '2019-02-03 16:15:39'),
(16, 'DPRAPPLICATION00013', 'Warri', 'DPRST00007', 'DPRCOMP00004', 'Cowin gas', 'LPG Retailer Outlets', 'LTO', 'Refilling Plant', '500', 'Bayelsa State', 'Sagbama', 'sagbama town', '22, cane road', 'Application Pending', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-03 20:16:40', '2019-02-03 20:31:42'),
(17, 'DPRAPPLICATION00014', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'neewer plant', 'LPG Retailer Outlets', 'Renewal', 'Select Type', '450', 'Bauchi State', 'Darazo', 'aba', '12 airport road', 'Not Submitted', NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-04 14:27:51', '2019-02-04 14:27:51'),
(18, 'DPRAPPLICATION00015', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'rodeo plant', 'LPG Retailer Outlets', 'ATC', 'Refilling Plant', NULL, 'Adamawa State', 'Ganye', 'ganye', 'ganye', 'ATC Issued', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-04 19:27:47', '2019-02-04 20:01:08'),
(19, 'DPRAPPLICATION00016', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'rodeo plant', 'LPG Retailer Outlets', 'LTO', 'Refilling Plant', '5000', 'Adamawa State', 'Ganye', 'ganye', 'ganye', 'Application Pending', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-04 20:09:21', '2019-02-04 20:11:35'),
(22, 'DPRAPPLICATION00017', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'ages gas', 'CNG Retailer Outlets', 'ATC', 'Auto Gas Plant', NULL, 'Delta State', 'Ughelli North', 'ughelli', '24, ugehlli road', 'ATC Issued', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-04 22:20:10', '2019-02-04 22:49:26'),
(23, 'DPRAPPLICATION00018', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'ages gas', 'CNG Retailer Outlets', 'LTO', 'Auto Gas Plant', '3400', 'Delta State', 'Ughelli North', 'ughelli', '24, ugehlli road', 'Application Pending', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-04 23:32:54', '2019-02-04 23:33:39'),
(24, 'DPRAPPLICATION00019', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'ages gas', 'LPG Retailer Outlets', 'Pressure Testing', 'Auto Gas Plant', NULL, 'Delta State', 'Ughelli North', 'ughelli', '24, ugehlli road', 'Application Pending', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-05 00:36:26', '2019-02-05 00:36:26'),
(25, 'DPRAPPLICATION00020', 'Warri', 'DPRMKT00008', 'DPRCOMP00001', 'homer', 'LPG Retailer Outlets', 'LTO', 'Refilling Plant', '6700', 'Abia State', 'Arochukwu', 'arochukwu', 'aba', 'LTO Issued', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-05 12:08:03', '2019-03-03 06:05:58'),
(26, 'DPRAPPLICATION00021', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'sedco plant', 'LPG Retailer Outlets', 'ATC', 'Industrial Plant', NULL, 'Delta State', 'Okpe', 'okpe', '51 okpe-isoko road', 'ATC Issued', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-06 19:38:03', '2019-02-06 22:54:58'),
(27, 'DPRAPPLICATION00022', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'tester rodes', 'LPG Retailer Outlets', 'ATC', 'Refilling Plant', NULL, 'Anambra State', 'Anaocha', 'aba', '45 aba road', 'Not Submitted', NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-06 22:22:36', '2019-02-06 22:22:36'),
(28, 'DPRAPPLICATION00023', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'sedco plant', 'LPG Retailer Outlets', 'LTO', 'Industrial Plant', '34500', 'Delta State', 'Okpe', 'okpe', '51 okpe-isoko road', 'LTO Issued', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-06 22:59:45', '2019-02-26 19:23:20'),
(29, 'DPRAPPLICATION00024', 'Warri', 'DPRMKT00008', 'DPRCOMP00004', 'platz gas', 'ADD-ON', 'ADD-ON ATI', 'Auto Gas Plant', NULL, 'Benue State', 'Konshisha', 'konshisha', '12 konshisha road', 'ATI Issued', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-11 20:28:31', '2019-02-12 18:24:17'),
(30, 'DPRAPPLICATION00025', 'Warri', 'DPRMKT00008', 'DPRCOMP00004', 'reality gas', 'ADD-ON', 'ADD-ON LTO', 'Auto Gas Plant', '67000', 'Abia State', 'Osisioma', 'Osisioma', '45 kings palace way', 'Application Pending', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-12 05:28:20', '2019-02-12 17:04:17'),
(32, 'DPRAPPLICATION00026', 'Warri', 'DPRMKT00008', 'DPRCOMP00004', NULL, 'CAT-D', 'CAT-D LTO', NULL, '71000', 'Delta State', 'Warri South', 'warri', '12 airport road', 'Application Pending', 'true', NULL, NULL, NULL, NULL, NULL, '2019-02-13 04:53:11', '2019-02-13 06:46:17'),
(37, 'DPRAPPLICATION00027', 'Warri', 'DPRMKT00008', 'DPRCOMP00004', 'vans', 'LPG Retailer Outlets', 'ATC', 'Refilling Plant', NULL, 'Delta State', 'Okpe', 'okpe', '24, okpe road', 'ATC Issued', 'true', NULL, NULL, NULL, NULL, NULL, '2019-03-02 17:54:35', '2019-03-02 19:08:11'),
(45, 'DPRAPPLICATION00028', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'sedco plant', 'LPG Retailer Outlets', 'Renewal', 'Industrial Plant', '34500', 'Delta State', 'Okpe', 'okpe', '51 okpe-isoko road', 'Application Pending', 'true', NULL, NULL, NULL, NULL, NULL, '2019-03-02 22:20:16', '2019-03-03 06:12:15'),
(52, 'DPRAPPLICATION00029', 'Warri', 'DPRMKT00008', 'DPRCOMP00004', 'vans', 'LPG Retailer Outlets', 'Pressure Testing', 'Refilling Plant', NULL, 'Delta State', 'Okpe', 'okpe', '24, okpe road', 'Pressure Test Succesful', 'true', NULL, NULL, NULL, NULL, NULL, '2019-03-03 19:48:38', '2019-03-05 19:04:49'),
(53, 'DPRAPPLICATION00030', 'Warri', 'DPRMKT00008', 'DPRCOMP00004', 'vans', 'LPG Retailer Outlets', 'LTO', 'Refilling Plant', '18000', 'Delta State', 'Okpe', 'okpe', '24, okpe road', 'Application Pending', 'true', NULL, NULL, NULL, NULL, NULL, '2019-03-05 20:49:34', '2019-03-05 21:00:00'),
(55, 'DPRAPPLICATION00031', 'Warri', 'DPRMKT00008', 'DPRCOMP00003', 'sedco plant', 'LPG Retailer Outlets', 'ATC', 'Industrial Plant', NULL, 'Delta State', 'Okpe', 'okpe', '51 okpe-isoko road', 'ATC Issued', 'true', NULL, NULL, NULL, NULL, NULL, '2019-03-09 12:08:00', '2019-03-09 12:13:24'),
(56, 'DPRAPPLICATION00032', NULL, 'DPRMKT00008', 'DPRCOMP00003', 'aloesoothe', 'LPG Retailer Outlets', 'ATC', 'Industrial Plant', NULL, 'Delta State', 'Okpe', 'okpe', '1, okpe road', 'ATC Issued', 'true', NULL, NULL, NULL, NULL, NULL, '2019-03-17 10:41:12', '2019-03-17 10:43:30'),
(57, 'DPRAPPLICATION00033', NULL, 'DPRMKT00008', 'DPRCOMP00003', 'aloesoothe', 'LPG Retailer Outlets', 'Pressure Testing', 'Industrial Plant', NULL, 'Delta State', 'Okpe', 'okpe', '1, okpe road', 'Pressure Test Succesful', 'true', NULL, NULL, NULL, NULL, NULL, '2019-03-17 10:57:20', '2019-03-17 10:58:45'),
(58, 'DPRAPPLICATION00034', NULL, 'DPRMKT00008', 'DPRCOMP00003', 'aloesoothe', 'LPG Retailer Outlets', 'LTO', 'Industrial Plant', '33000', 'Delta State', 'Okpe', 'okpe', '1, okpe road', 'Application Pending', 'true', NULL, NULL, NULL, NULL, NULL, '2019-03-17 11:00:25', '2019-03-17 11:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `atc_inspection_documents`
--

CREATE TABLE `atc_inspection_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applications_letter_for_suitability_inspection` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_and_memorandum_of_association` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_tax_clearance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_of_incorporation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_report` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed_application_form` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved_building_plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `survey_plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deed_of_conveyance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `piping_and_instrumentation_diagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `environmental_impact_accessment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankdraft_of_statutory_fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letter_confirmation_ministry_of_lands_and_survey` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codes_and_standard_adopted_in_the_tank_design` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_letter_addressed_to_the_controller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applications_letter_for_suitability_inspection_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_and_memorandum_of_association_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_tax_clearance_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_of_incorporation_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_certificate_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `police_report_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_building_plan_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `survey_plan_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deed_of_conveyance_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piping_and_instrumentation_diagram_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `environmental_impact_accessment_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_confirmation_ministry_of_lands_and_survey_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codes_and_standard_adopted_in_the_tank_design_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applications_letter_for_suitability_inspection_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_and_memorandum_of_association_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_tax_clearance_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_of_incorporation_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_certificate_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `police_report_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_building_plan_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `survey_plan_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deed_of_conveyance_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piping_and_instrumentation_diagram_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `environmental_impact_accessment_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_confirmation_ministry_of_lands_and_survey_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codes_and_standard_adopted_in_the_tank_design_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applications_letter_for_suitability_inspection_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_and_memorandum_of_association_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_tax_clearance_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_of_incorporation_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_certificate_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `police_report_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_building_plan_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `survey_plan_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deed_of_conveyance_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piping_and_instrumentation_diagram_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `environmental_impact_accessment_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_confirmation_ministry_of_lands_and_survey_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codes_and_standard_adopted_in_the_tank_design_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `atc_inspection_documents`
--

INSERT INTO `atc_inspection_documents` (`id`, `application_id`, `marketer_id`, `company_id`, `applications_letter_for_suitability_inspection`, `article_and_memorandum_of_association`, `current_tax_clearance`, `certificate_of_incorporation`, `fire_certificate`, `police_report`, `completed_application_form`, `approved_building_plan`, `survey_plan`, `deed_of_conveyance`, `piping_and_instrumentation_diagram`, `environmental_impact_accessment`, `bankdraft_of_statutory_fees`, `letter_confirmation_ministry_of_lands_and_survey`, `codes_and_standard_adopted_in_the_tank_design`, `application_letter_addressed_to_the_controller`, `applications_letter_for_suitability_inspection_location_url`, `article_and_memorandum_of_association_location_url`, `current_tax_clearance_location_url`, `certificate_of_incorporation_location_url`, `fire_certificate_location_url`, `police_report_location_url`, `completed_application_form_location_url`, `approved_building_plan_location_url`, `survey_plan_location_url`, `deed_of_conveyance_location_url`, `piping_and_instrumentation_diagram_location_url`, `environmental_impact_accessment_location_url`, `bankdraft_of_statutory_fees_location_url`, `letter_confirmation_ministry_of_lands_and_survey_location_url`, `codes_and_standard_adopted_in_the_tank_design_location_url`, `application_letter_addressed_to_the_controller_location_url`, `applications_letter_for_suitability_inspection_reason`, `article_and_memorandum_of_association_reason`, `current_tax_clearance_reason`, `certificate_of_incorporation_reason`, `fire_certificate_reason`, `police_report_reason`, `completed_application_form_reason`, `approved_building_plan_reason`, `survey_plan_reason`, `deed_of_conveyance_reason`, `piping_and_instrumentation_diagram_reason`, `environmental_impact_accessment_reason`, `bankdraft_of_statutory_fees_reason`, `letter_confirmation_ministry_of_lands_and_survey_reason`, `codes_and_standard_adopted_in_the_tank_design_reason`, `application_letter_addressed_to_the_controller_reason`, `applications_letter_for_suitability_inspection_location_check`, `article_and_memorandum_of_association_location_check`, `current_tax_clearance_location_check`, `certificate_of_incorporation_location_check`, `fire_certificate_location_check`, `police_report_location_check`, `completed_application_form_location_check`, `approved_building_plan_location_check`, `survey_plan_location_check`, `deed_of_conveyance_location_check`, `piping_and_instrumentation_diagram_location_check`, `environmental_impact_accessment_location_check`, `bankdraft_of_statutory_fees_location_check`, `letter_confirmation_ministry_of_lands_and_survey_location_check`, `codes_and_standard_adopted_in_the_tank_design_location_check`, `application_letter_addressed_to_the_controller_location_check`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00003', 'DPRMKT00008', 'DPRCOMP00001', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'vigor-1920x1080-screenshot-4k-19630.jpg', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ok', NULL, 'true', NULL, NULL, NULL, NULL, NULL, 'true', 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-13 19:12:48', '2019-02-10 19:00:45'),
(4, 'DPRAPPLICATION00012', 'DPRST00007', 'DPRCOMP00004', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'null', 'null', 'no', 'null', 'null', 'no', 'no', 'no', 'null', 'Delta-mall-pm-1.jpg', 'Delta-mall-pm-2.jpg', 'Delta-mall-pm-3.jpg', 'Delta-mall-pm-4.jpg', 'floki___vikings_by_dafnawinchester-d7agdbq.jpg', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'no good reason', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'this is not going as i planned', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-03 12:01:53', '2019-02-03 12:49:23'),
(5, 'DPRAPPLICATION00015', 'DPRMKT00008', 'DPRCOMP00003', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-04 19:27:47', '2019-02-04 20:01:08'),
(8, 'DPRAPPLICATION00017', 'DPRMKT00008', 'DPRCOMP00003', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'no', 'no', 'yes', 'yes', 'null', 'C__Data_Users_DefApps_AppData_INTERNETEXPLORER_Temp_Saved Images_images3GH8P4B5.jpg', 'C__Data_Users_DefApps_AppData_INTERNETEXPLORER_Temp_Saved Images_images7SEX5JFP.jpg', 'C__Data_Users_DefApps_AppData_INTERNETEXPLORER_Temp_Saved Images_images52METLFV.jpg', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'C__Data_Users_DefApps_AppData_INTERNETEXPLORER_Temp_Saved Images_imagesKCINJB1Q.jpg', 'C__Data_Users_DefApps_AppData_INTERNETEXPLORER_Temp_Saved Images_imagesD4XLW3LS.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-04 22:25:12', '2019-02-04 22:49:26'),
(9, 'DPRAPPLICATION00021', 'DPRMKT00008', NULL, 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', 'true', 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-06 19:38:03', '2019-02-06 19:54:00'),
(10, 'DPRAPPLICATION00022', 'DPRMKT00008', NULL, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-06 22:22:40', '2019-02-06 22:22:40'),
(11, 'DPRAPPLICATION00027', 'DPRMKT00008', NULL, 'yes', 'yes', 'yes', 'yes', 'no', 'null', 'null', 'null', 'yes', 'null', 'null', 'null', 'no', 'null', 'yes', 'yes', 'null', 'clouds_milky_way_eclipse_light_68883_1920x1080.jpg', 'null', 'NnzxG4S.jpg', 'null', 'null', 'null', 'null', 'fifty_shades_of_grey_2015_christian_gray_jamie_dornan_96584_1920x1080.jpg', 'null', 'null', 'null', 'null', 'null', 'null', 'ODESZA-Backgrounds-Desktop-1080.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-02 17:58:09', '2019-03-02 17:58:09'),
(12, 'DPRAPPLICATION00031', 'DPRMKT00008', NULL, 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-09 11:43:38', '2019-03-09 11:43:38'),
(13, 'DPRAPPLICATION00031', 'DPRMKT00008', NULL, 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-09 12:08:00', '2019-03-09 12:08:00'),
(14, 'DPRAPPLICATION00032', 'DPRMKT00008', NULL, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-17 10:41:16', '2019-03-17 10:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `catd_lto_application_extentions`
--

CREATE TABLE `catd_lto_application_extentions` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsoring_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_bottles` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catd_lto_application_extentions`
--

INSERT INTO `catd_lto_application_extentions` (`id`, `application_id`, `company_id`, `sponsoring_company`, `no_of_bottles`, `created_at`, `updated_at`) VALUES
(2, 'DPRAPPLICATION00026', 'DPRCOMP00004', 'Nitro Max', '62', '2019-02-13 04:53:11', '2019-02-13 04:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `catd_lto_inspection_documents`
--

CREATE TABLE `catd_lto_inspection_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_form_sponsoring_company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_inspection` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankdraft_of_statutory_fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_letter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_of_incorporation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letter_form_sponsoring_company_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification_inspection_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_of_incorporation_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_form_sponsoring_company_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification_inspection_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_of_incorporation_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_form_sponsoring_company_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification_inspection_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_of_incorporation_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catd_lto_inspection_documents`
--

INSERT INTO `catd_lto_inspection_documents` (`id`, `application_id`, `marketer_id`, `company_id`, `letter_form_sponsoring_company`, `verification_inspection`, `bankdraft_of_statutory_fees`, `application_letter`, `certificate_of_incorporation`, `letter_form_sponsoring_company_location_url`, `verification_inspection_location_url`, `bankdraft_of_statutory_fees_location_url`, `application_letter_location_url`, `certificate_of_incorporation_location_url`, `letter_form_sponsoring_company_reason`, `verification_inspection_reason`, `bankdraft_of_statutory_fees_reason`, `application_letter_reason`, `certificate_of_incorporation_reason`, `letter_form_sponsoring_company_location_check`, `verification_inspection_location_check`, `bankdraft_of_statutory_fees_location_check`, `application_letter_location_check`, `certificate_of_incorporation_location_check`, `created_at`, `updated_at`) VALUES
(2, 'DPRAPPLICATION00026', 'DPRMKT00008', NULL, 'yes', 'yes', 'yes', 'yes', 'yes', 'f8bfe4e908bb8b28.jpg', 'inspiration.jpg', '8G53dVXyoPjkMfx2AkBJ8M.jpg', 'viska-creative-one-page-theme.jpg', 'untitled-1-copy-3fghf.png', NULL, NULL, NULL, NULL, NULL, 'true', 'true', 'true', 'true', 'true', '2019-02-13 04:53:46', '2019-02-13 14:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `marketer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `marketer_id`, `company_id`, `company_name`, `company_alias`, `contract_type`, `state`, `lga`, `town`, `address`, `mobile_number`, `email_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'DPRCOMP00001', 'Homer coy.', 'homer', 'PLC', 'Abia State', 'Arochukwu', 'arochukwu', 'aba', '123458934', 'homer@gmail.com', NULL, '2018-12-12 10:23:15', '2018-12-12 10:23:15'),
(2, NULL, 'DPRCOMP00002', 'joohg', 'sd', 'JV', 'Abia State', 'Aba South', 'sfsf', 'sfsf', '1313', 's@yahoo.com', NULL, '2018-12-23 13:06:17', '2018-12-23 13:06:17'),
(3, 'DPRMKT00008', 'DPRCOMP00003', 'jerrycan industries', 'jey', 'Marginal', 'Abia State', 'Aba South', 'abuad', '12 aba road', '35434756865865', 'jey@gmail.com', NULL, '2019-01-18 23:04:38', '2019-01-18 23:04:38'),
(4, 'DPRMKT00008', 'DPRCOMP00004', 'cowin industries', 'cowin', 'PLC', 'Delta State', 'Warri South', 'warri', '12 airport road', '09078456213', 'info@cowin.org.ng', NULL, '2019-02-01 12:38:19', '2019-02-01 12:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `completed_jobs`
--

CREATE TABLE `completed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teamlead_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `completed_jobs`
--

INSERT INTO `completed_jobs` (`id`, `application_id`, `teamlead_id`, `staff_id`, `company_id`, `marketer_id`, `created_at`, `updated_at`) VALUES
(1, '6', 'DPRST00006', 'DPRST00007', 'DPRCOMP00003', 'DPRMKT00008', '2019-01-25 18:28:10', '2019-01-25 18:28:10'),
(2, '10', 'DPRST00006', 'DPRST00005', 'DPRCOMP00004', 'DPRMKT00008', '2019-02-03 08:11:09', '2019-02-03 08:11:09'),
(3, '14', 'DPRST00006', 'DPRST00005', 'DPRCOMP00004', 'DPRST00007', '2019-02-03 16:15:39', '2019-02-03 16:15:39'),
(4, '18', 'DPRST00006', 'DPRST00005', 'DPRCOMP00003', 'DPRMKT00008', '2019-02-04 20:01:08', '2019-02-04 20:01:08'),
(5, '22', 'DPRST00006', 'DPRST00007', 'DPRCOMP00003', 'DPRMKT00008', '2019-02-04 22:49:26', '2019-02-04 22:49:26'),
(6, '11', 'DPRST00006', 'DPRST00007', 'DPRCOMP00003', 'DPRMKT00008', '2019-02-06 19:14:25', '2019-02-06 19:14:25'),
(7, '26', 'DPRST00006', 'DPRST00007', 'DPRCOMP00003', 'DPRMKT00008', '2019-02-06 22:54:58', '2019-02-06 22:54:58'),
(9, '29', 'DPRST00006', 'DPRST00007', 'DPRCOMP00004', 'DPRMKT00008', '2019-02-12 18:24:17', '2019-02-12 18:24:17'),
(10, '28', 'DPRST00006', 'DPRST00007', 'DPRCOMP00003', 'DPRMKT00008', '2019-02-26 19:23:20', '2019-02-26 19:23:20'),
(11, '37', 'DPRST00006', 'DPRST00007', 'DPRCOMP00004', 'DPRMKT00008', '2019-03-02 19:08:11', '2019-03-02 19:08:11'),
(12, '25', 'DPRST00006', 'DPRST00007', 'DPRCOMP00001', 'DPRMKT00008', '2019-03-03 06:05:58', '2019-03-03 06:05:58'),
(13, '5', 'DPRST00006', 'DPRST00007', 'DPRCOMP00003', 'DPRMKT00008', '2019-03-09 11:33:15', '2019-03-09 11:33:15'),
(14, '55', 'DPRST00006', 'DPRST00007', 'DPRCOMP00003', 'DPRMKT00008', '2019-03-09 12:13:24', '2019-03-09 12:13:24'),
(15, '56', 'DPRST00006', 'DPRST00007', 'DPRCOMP00003', 'DPRMKT00008', '2019-03-17 10:43:30', '2019-03-17 10:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `headgas_inboxes`
--

CREATE TABLE `headgas_inboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `to_outbox` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headgas_inboxes`
--

INSERT INTO `headgas_inboxes` (`id`, `application_id`, `from`, `application_type`, `sub_category`, `read`, `to_outbox`, `created_at`, `updated_at`) VALUES
(1, '2', 'DPRST00004', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2018-12-12 10:14:36', '2018-12-13 18:33:01'),
(2, '3', 'DPRST00004', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-13 19:41:05', '2018-12-25 20:37:42'),
(3, '3', 'DPRST00006', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-19 15:02:14', '2018-12-25 20:37:42'),
(4, '3', 'DPRST00006', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-20 16:06:27', '2018-12-25 20:37:42'),
(5, '3', 'DPRST00006', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-21 07:03:55', '2018-12-25 20:37:42'),
(6, '3', 'DPRST00004', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-21 09:28:42', '2018-12-25 20:37:42'),
(7, '4', 'DPRST00004', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2018-12-23 12:58:51', '2018-12-23 13:24:09'),
(8, '6', 'DPRST00004', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2019-01-19 21:32:24', '2019-01-25 21:36:38'),
(9, '7', 'DPRST00004', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2019-01-20 00:26:23', '2019-01-20 00:26:36'),
(10, '9', 'DPRST00004', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'false', '2019-01-31 08:33:03', '2019-02-01 12:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `headgas_outboxes`
--

CREATE TABLE `headgas_outboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headgas_outboxes`
--

INSERT INTO `headgas_outboxes` (`id`, `application_id`, `to`, `role`, `application_type`, `sub_category`, `created_at`, `updated_at`) VALUES
(1, '2', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2018-12-12 10:14:56', '2018-12-12 10:14:56'),
(2, '3', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'ATC', '2018-12-13 19:41:15', '2018-12-13 19:41:15'),
(3, '3', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'ATC', '2018-12-20 16:06:01', '2018-12-20 16:06:01'),
(4, '3', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'ATC', '2018-12-20 16:07:25', '2018-12-20 16:07:25'),
(5, '3', 'DPRST00004', 'ADO', 'LPG Retailer Outlets', 'ATC', '2018-12-21 07:10:13', '2018-12-21 07:10:13'),
(6, '3', 'DPRST00004', 'ADO', 'LPG Retailer Outlets', 'ATC', '2018-12-21 09:28:58', '2018-12-21 09:28:58'),
(7, '4', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2018-12-23 12:59:13', '2018-12-23 12:59:13'),
(8, '6', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2019-01-19 21:33:00', '2019-01-19 21:33:00'),
(9, '7', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2019-01-20 00:26:36', '2019-01-20 00:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `inboxes`
--

CREATE TABLE `inboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `to_outbox` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inboxes`
--

INSERT INTO `inboxes` (`id`, `application_id`, `from`, `to`, `receiver_role`, `sender_role`, `office`, `read`, `to_outbox`, `created_at`, `updated_at`) VALUES
(6, '10', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-01 12:54:25', '2019-02-03 07:32:59'),
(8, '5', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-02 05:44:45', '2019-03-09 11:32:59'),
(17, '10', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-02 15:22:33', '2019-02-03 07:32:59'),
(19, '5', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-02 16:33:07', '2019-03-09 11:32:59'),
(20, '11', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-02 17:24:32', '2019-02-06 19:09:47'),
(21, '10', 'DPRST00004', 'DPRST00005', 'Head Gas M&G Lagos', 'ADO', 'Warri', 'true', 'true', '2019-02-02 18:12:30', '2019-02-03 07:32:59'),
(22, '10', 'DPRST00005', 'DPRST00006', 'Team Lead', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-02 19:03:47', '2019-02-03 07:32:59'),
(23, '10', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-02 20:30:23', '2019-02-03 07:32:59'),
(24, '10', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-03 06:02:32', '2019-02-03 09:35:34'),
(25, '10', 'DPRST00006', 'DPRST00005', 'Head Gas M&G Lagos', 'Team Lead', 'Warri', 'true', 'true', '2019-02-03 06:50:07', '2019-02-03 07:32:59'),
(26, '10', 'DPRST00005', 'DPRST00004', 'ADO', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-03 07:07:11', '2019-02-04 02:28:04'),
(27, '10', 'DPRST00004', 'DPRST00009', 'ZOPSCON', 'ADO', 'Warri', 'true', 'true', '2019-02-03 07:25:02', '2019-02-03 07:32:59'),
(28, '10', 'DPRST00009', 'DPRST00005', 'Head Gas M&G Lagos', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-03 07:32:06', '2019-02-03 07:32:59'),
(29, '10', 'DPRST00005', 'DPRST00006', 'Team Lead', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-03 07:32:59', '2019-02-03 08:11:09'),
(30, '11', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-03 09:23:34', '2019-02-06 19:09:47'),
(31, '11', 'DPRST00004', 'DPRST00005', 'Head Gas M&G Lagos', 'ADO', 'Warri', 'true', 'true', '2019-02-03 09:24:19', '2019-03-03 05:55:21'),
(32, '5', 'DPRST00004', 'DPRST00005', 'Head Gas M&G Lagos', 'ADO', 'Warri', 'true', 'true', '2019-02-03 09:24:25', '2019-03-09 11:32:59'),
(33, '11', 'DPRST00005', 'DPRST00006', 'Team Lead', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-03 09:25:06', '2019-02-06 19:09:47'),
(34, '11', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-03 09:25:48', '2019-02-06 19:09:47'),
(36, '14', 'DPRST00007', 'NA', 'ZOPSCON', 'Staff', 'Warri', 'true', 'true', '2019-02-03 12:59:44', '2019-03-03 06:08:15'),
(37, '14', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-03 13:00:10', '2019-02-03 13:12:11'),
(38, '14', 'DPRST00004', 'DPRST00005', 'Head Gas M&G Lagos', 'ADO', 'Warri', 'true', 'true', '2019-02-03 13:01:06', '2019-02-13 15:59:36'),
(39, '14', 'DPRST00005', 'DPRST00006', 'Team Lead', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-03 13:09:33', '2019-02-04 19:59:42'),
(40, '14', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-03 13:10:50', '2019-02-03 13:12:11'),
(41, '14', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-03 13:11:52', '2019-02-03 13:12:11'),
(42, '14', 'DPRST00006', 'DPRST00005', 'Head Gas M&G Lagos', 'Team Lead', 'Warri', 'true', 'true', '2019-02-03 13:12:11', '2019-02-03 16:15:39'),
(43, '16', 'DPRST00007', 'NA', 'ZOPSCON', 'Staff', 'Warri', 'true', 'true', '2019-02-03 20:31:42', '2019-02-03 20:49:13'),
(44, '16', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-03 20:41:22', '2019-02-03 20:49:13'),
(45, '16', 'DPRST00004', 'DPRST00006', 'Team Lead', 'ADO', 'Warri', 'true', 'true', '2019-02-03 20:41:47', '2019-02-03 20:49:13'),
(46, '16', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-03 20:42:43', '2019-02-03 20:49:13'),
(47, '16', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-03 20:44:43', '2019-02-03 20:49:13'),
(48, '16', 'DPRST00006', 'DPRST00005', 'Head Gas M&G Lagos', 'Team Lead', 'Warri', 'true', 'true', '2019-02-03 20:49:13', '2019-02-04 02:25:04'),
(49, '18', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-04 19:31:27', '2019-03-03 05:55:28'),
(50, '18', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-04 19:31:51', '2019-02-04 19:59:54'),
(51, '18', 'DPRST00004', 'DPRST00005', 'Head Gas M&G Lagos', 'ADO', 'Warri', 'true', 'true', '2019-02-04 19:34:32', '2019-02-04 19:59:54'),
(52, '18', 'DPRST00005', 'DPRST00006', 'Team Lead', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-04 19:35:10', '2019-02-04 19:59:54'),
(53, '18', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-04 19:35:29', '2019-02-04 19:59:54'),
(54, '18', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-04 19:39:03', '2019-02-04 19:59:54'),
(55, '18', 'DPRST00006', 'DPRST00005', 'Head Gas M&G Lagos', 'Team Lead', 'Warri', 'true', 'true', '2019-02-04 19:39:13', '2019-03-10 10:19:17'),
(56, '18', 'DPRST00005', 'DPRST00004', 'ADO', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-04 19:39:28', '2019-03-17 16:32:24'),
(57, '18', 'DPRST00004', 'DPRST00005', 'Head Gas M&G Lagos', 'ADO', 'Warri', 'true', 'true', '2019-02-04 19:44:57', '2019-02-04 19:59:54'),
(58, '18', 'DPRST00005', 'DPRST00006', 'Team Lead', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-04 19:45:15', '2019-02-04 19:59:54'),
(59, '18', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-04 19:45:24', '2019-02-04 19:59:54'),
(60, '18', 'DPRST00007', 'DPRST00010', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-04 19:48:06', '2019-02-04 19:59:54'),
(61, '18', 'DPRST00006', 'DPRST00005', 'Head Gas M&G Lagos', 'Team Lead', 'Warri', 'true', 'true', '2019-02-04 19:59:54', '2019-02-04 20:01:08'),
(62, '19', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-04 20:11:35', '2019-02-05 18:48:50'),
(63, '19', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-04 20:11:51', '2019-02-04 20:36:50'),
(64, '19', 'DPRST00004', 'DPRST00005', 'Head Gas M&G Lagos', 'ADO', 'Warri', 'true', 'true', '2019-02-04 20:12:00', '2019-02-04 20:36:50'),
(65, '19', 'DPRST00005', 'DPRST00006', 'Team Lead', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-04 20:12:17', '2019-02-04 20:36:50'),
(67, '19', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-04 20:34:30', '2019-02-04 20:36:50'),
(68, '19', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-04 20:36:39', '2019-02-10 19:32:20'),
(69, '19', 'DPRST00006', 'DPRST00005', 'Head Gas M&G Lagos', 'Team Lead', 'Warri', 'true', 'true', '2019-02-04 20:36:50', '2019-02-04 20:37:04'),
(70, '22', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-04 22:30:43', '2019-02-04 22:49:10'),
(71, '22', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-04 22:38:22', '2019-02-04 22:49:10'),
(72, '22', 'DPRST00004', 'DPRST00005', 'Head Gas M&G Lagos', 'ADO', 'Warri', 'true', 'true', '2019-02-04 22:43:21', '2019-02-13 16:07:34'),
(73, '5', 'DPRST00005', 'DPRST00010', 'Team Lead', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-04 22:45:32', '2019-03-09 11:32:59'),
(74, '22', 'DPRST00005', 'DPRST00006', 'Team Lead', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-04 22:45:39', '2019-02-04 22:49:10'),
(75, '22', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-04 22:46:44', '2019-02-04 22:49:10'),
(76, '22', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-04 22:48:26', '2019-02-04 22:49:10'),
(77, '22', 'DPRST00006', 'DPRST00005', 'Head Gas M&G Lagos', 'Team Lead', 'Warri', 'true', 'true', '2019-02-04 22:49:10', '2019-03-06 00:24:00'),
(78, '23', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-04 23:33:39', '2019-02-04 23:35:08'),
(79, '23', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-04 23:33:55', '2019-02-04 23:35:08'),
(80, '23', 'DPRST00004', 'DPRST00005', 'Head Gas M&G Lagos', 'ADO', 'Warri', 'true', 'true', '2019-02-04 23:34:04', '2019-02-05 13:33:37'),
(81, '23', 'DPRST00005', 'DPRST00006', 'Team Lead', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-04 23:34:16', '2019-03-03 05:51:26'),
(82, '23', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-04 23:34:27', '2019-02-05 21:00:34'),
(83, '23', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-04 23:34:57', '2019-02-06 19:10:00'),
(84, '23', 'DPRST00006', 'DPRST00005', 'Head Gas M&G Lagos', 'Team Lead', 'Warri', 'true', 'true', '2019-02-04 23:35:08', '2019-02-04 23:35:24'),
(85, '25', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-05 12:08:44', '2019-03-03 06:04:15'),
(86, '25', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-05 12:09:58', '2019-03-03 06:04:15'),
(87, '25', 'DPRST00004', 'DPRST00008', 'Manager Gas', 'ADO', 'Warri', 'true', 'true', '2019-02-05 12:10:19', '2019-03-03 06:04:15'),
(90, '25', 'DPRST00008', 'DPRST00006', 'Team Lead', 'Manager Gas', 'Warri', 'true', 'true', '2019-02-05 13:02:07', '2019-03-03 06:04:15'),
(91, '25', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-05 13:02:39', '2019-03-03 06:04:15'),
(92, '25', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-05 13:03:09', '2019-03-03 06:04:15'),
(93, '25', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-05 13:03:09', '2019-03-03 06:04:15'),
(94, '25', 'DPRST00006', 'DPRST00008', 'Manager Gas', 'Team Lead', 'Warri', 'true', 'true', '2019-02-05 13:03:24', '2019-03-03 06:04:15'),
(95, '25', 'DPRST00008', 'DPRST00007', 'Head Gas M&G Lagos', 'Manager Gas', 'HQ', 'true', 'true', '2019-02-05 13:32:14', '2019-03-05 19:41:23'),
(96, '25', 'DPRST00011', 'DPRST00012', 'Manager Gas', 'Head Gas M&G Lagos', 'HQ', 'true', 'true', '2019-02-05 20:34:00', '2019-03-03 06:51:06'),
(97, '25', 'DPRST00012', 'DPRST00014', 'Staff', 'Manager Gas', 'HQ', 'true', 'true', '2019-02-05 20:59:42', '2019-03-03 06:04:15'),
(98, '11', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-06 19:09:47', '2019-03-03 05:51:41'),
(99, '26', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-06 19:38:19', '2019-02-06 22:52:55'),
(100, '26', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-06 19:54:08', '2019-02-06 22:52:55'),
(101, '26', 'DPRST00004', 'DPRST00008', 'Manager Gas', 'ADO', 'Warri', 'true', 'true', '2019-02-06 19:54:21', '2019-02-06 22:52:55'),
(102, '26', 'DPRST00008', 'DPRST00006', 'Team Lead', 'Manager Gas', 'Warri', 'true', 'true', '2019-02-06 19:54:35', '2019-02-11 18:24:04'),
(103, '5', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-06 19:54:51', '2019-03-09 11:32:59'),
(104, '26', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-06 19:54:58', '2019-03-03 05:51:35'),
(105, '26', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-06 22:20:48', '2019-02-06 22:52:55'),
(106, '26', 'DPRST00006', 'DPRST00008', 'Manager Gas', 'Team Lead', 'Warri', 'true', 'true', '2019-02-06 22:52:55', '2019-02-11 21:40:54'),
(107, '28', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-10 19:34:49', '2019-02-11 11:39:36'),
(108, '28', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-10 19:46:30', '2019-02-11 11:39:36'),
(109, '28', 'DPRST00004', 'DPRST00008', 'Manager Gas', 'ADO', 'Warri', 'true', 'true', '2019-02-10 19:46:51', '2019-02-11 11:39:36'),
(110, '28', 'DPRST00008', 'DPRST00006', 'Team Lead', 'Manager Gas', 'Warri', 'true', 'true', '2019-02-10 19:47:24', '2019-02-11 11:39:36'),
(111, '28', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-10 19:47:36', '2019-02-11 11:39:36'),
(112, '28', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-11 10:40:15', '2019-02-13 15:59:20'),
(113, '28', 'DPRST00006', 'DPRST00008', 'Manager Gas', 'Team Lead', 'Warri', 'true', 'true', '2019-02-11 10:42:50', '2019-02-12 17:19:23'),
(114, '28', 'DPRST00008', 'DPRST00007', 'Head Gas M&G Lagos', 'Manager Gas', 'HQ', 'true', 'true', '2019-02-11 10:43:11', '2019-02-11 11:39:36'),
(115, '28', 'DPRST00011', 'DPRST00012', 'Manager Gas', 'Head Gas M&G Lagos', 'HQ', 'true', 'true', '2019-02-11 10:56:02', '2019-02-11 11:39:36'),
(116, '28', 'DPRST00012', 'DPRST00014', 'Staff', 'Manager Gas', 'HQ', 'true', 'true', '2019-02-11 11:13:49', '2019-02-11 11:39:36'),
(117, '28', 'DPRST00014', 'DPRST00012', 'Manager Gas', 'Staff', 'HQ', 'true', 'true', '2019-02-11 11:30:29', '2019-02-11 11:39:36'),
(118, '28', 'DPRST00012', 'DPRST00011', 'Head Gas M&G Lagos', 'Manager Gas', 'HQ', 'true', 'true', '2019-02-11 11:39:36', '2019-02-13 17:38:27'),
(121, '28', 'DPRST00011', 'DPRST00009', 'ZOPSCON', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-02-11 18:30:49', '2019-02-17 21:44:14'),
(122, '29', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-11 21:30:25', '2019-03-09 11:07:08'),
(123, '29', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-11 21:40:05', '2019-03-01 18:48:21'),
(124, '29', 'DPRST00004', 'DPRST00008', 'Manager Gas', 'ADO', 'Warri', 'true', 'true', '2019-02-11 21:40:24', '2019-03-01 18:42:31'),
(125, '29', 'DPRST00008', 'DPRST00006', 'Team Lead', 'Manager Gas', 'Warri', 'true', 'true', '2019-02-11 21:41:15', '2019-03-03 12:10:14'),
(126, '29', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-11 21:42:09', '2019-02-11 21:46:26'),
(127, '29', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-11 21:44:24', '2019-02-11 21:46:26'),
(128, '29', 'DPRST00006', 'DPRST00008', 'Manager Gas', 'Team Lead', 'Warri', 'true', 'true', '2019-02-11 21:46:26', '2019-02-12 18:24:17'),
(129, '30', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-12 17:04:17', '2019-02-12 17:45:07'),
(130, '30', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-12 17:18:17', '2019-02-12 17:45:07'),
(131, '30', 'DPRST00004', 'DPRST00008', 'Manager Gas', 'ADO', 'Warri', 'true', 'true', '2019-02-12 17:18:31', '2019-03-02 18:58:56'),
(132, '30', 'DPRST00008', 'DPRST00006', 'Team Lead', 'Manager Gas', 'Warri', 'true', 'true', '2019-02-12 17:18:51', '2019-02-12 17:45:07'),
(133, '30', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-12 17:23:56', '2019-02-12 17:45:07'),
(134, '30', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-12 17:44:22', '2019-02-12 17:45:07'),
(135, '30', 'DPRST00006', 'DPRST00008', 'Manager Gas', 'Team Lead', 'Warri', 'true', 'true', '2019-02-12 17:45:07', '2019-02-12 19:20:22'),
(136, '30', 'DPRST00008', 'DPRST00007', 'Head Gas M&G Lagos', 'Manager Gas', 'HQ', 'true', 'false', '2019-02-12 19:20:22', '2019-02-12 19:20:39'),
(137, '32', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-02-13 06:46:17', '2019-02-13 18:25:49'),
(138, '32', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-02-13 15:01:09', '2019-03-03 07:06:03'),
(139, '32', 'DPRST00004', 'DPRST00008', 'Manager Gas', 'ADO', 'Warri', 'true', 'true', '2019-02-13 17:50:56', '2019-03-03 06:49:44'),
(140, '32', 'DPRST00008', 'DPRST00006', 'Team Lead', 'Manager Gas', 'Warri', 'true', 'true', '2019-02-13 18:02:04', '2019-02-13 18:25:49'),
(141, '32', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-02-13 18:07:37', '2019-02-13 18:25:49'),
(142, '32', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-02-13 18:22:50', '2019-02-13 18:25:49'),
(143, '32', 'DPRST00006', 'DPRST00008', 'Manager Gas', 'Team Lead', 'Warri', 'true', 'false', '2019-02-13 18:25:49', '2019-03-09 11:25:37'),
(144, '28', 'DPRST00009', 'DPRST00007', 'Head Gas M&G Lagos', 'ZOPSCON', 'HQ', 'true', 'true', '2019-02-17 21:44:14', '2019-02-26 19:23:20'),
(145, '37', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-03-02 17:58:38', '2019-03-02 19:03:23'),
(146, '37', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-03-02 18:01:43', '2019-03-09 11:24:08'),
(147, '37', 'DPRST00004', 'DPRST00006', 'Team Lead', 'ADO', 'Warri', 'true', 'true', '2019-03-02 18:13:15', '2019-03-02 19:03:23'),
(148, '37', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-03-02 18:14:25', '2019-03-02 19:03:23'),
(149, '37', 'DPRST00007', 'DPRST00004', 'ADO', 'Staff', 'Warri', 'true', 'true', '2019-03-02 18:53:57', '2019-03-02 19:03:23'),
(150, '37', 'DPRST00004', 'DPRST00005', 'Head Gas M&G Lagos', 'ADO', 'Warri', 'true', 'true', '2019-03-02 18:55:15', '2019-03-02 19:03:23'),
(151, '37', 'DPRST00005', 'DPRST00008', 'Manager Gas', 'Head Gas M&G Lagos', 'Warri', 'true', 'true', '2019-03-02 18:56:11', '2019-03-17 10:37:29'),
(152, '37', 'DPRST00008', 'DPRST00007', 'Staff', 'Manager Gas', 'Warri', 'true', 'true', '2019-03-02 18:58:10', '2019-03-02 19:03:23'),
(153, '37', 'DPRST00007', 'DPRST00008', 'Manager Gas', 'Staff', 'Warri', 'true', 'true', '2019-03-02 19:03:23', '2019-03-02 19:08:11'),
(154, '25', 'DPRST00014', 'DPRST00003', 'ZOPSCON', 'Staff', 'HQ', 'true', 'true', '2019-03-03 05:58:17', '2019-03-03 06:04:15'),
(155, '25', 'DPRST00003', 'DPRST00011', 'Head Gas M&G Lagos', 'ZOPSCON', 'HQ', 'true', 'true', '2019-03-03 06:04:15', '2019-03-17 10:37:31'),
(156, '45', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-03-03 06:12:15', '2019-03-03 06:47:55'),
(157, '45', 'DPRST00009', 'DPRST00004', 'ADO', 'ZOPSCON', 'Warri', 'true', 'true', '2019-03-03 06:23:07', '2019-03-03 06:47:55'),
(158, '45', 'DPRST00004', 'DPRST00008', 'Manager Gas', 'ADO', 'Warri', 'true', 'true', '2019-03-03 06:24:32', '2019-03-03 06:47:55'),
(159, '45', 'DPRST00008', 'DPRST00006', 'Team Lead', 'Manager Gas', 'Warri', 'true', 'true', '2019-03-03 06:30:41', '2019-03-17 10:59:25'),
(160, '45', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-03-03 06:31:19', '2019-03-03 06:47:55'),
(161, '45', 'DPRST00007', 'DPRST00008', 'Manager Gas', 'Staff', 'Warri', 'true', 'false', '2019-03-03 06:47:55', '2019-03-03 07:06:24'),
(167, '52', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-03-03 20:17:59', '2019-03-03 20:21:05'),
(168, '52', 'DPRST00009', 'DPRST00006', 'Team Lead', 'ZOPSCON', 'Warri', 'true', 'true', '2019-03-03 20:18:49', '2019-03-03 20:21:05'),
(169, '52', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'false', '2019-03-03 20:21:05', '2019-03-17 10:37:08'),
(170, '53', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-03-05 21:00:00', '2019-03-09 11:24:28'),
(171, '53', 'DPRST00009', 'DPRST00006', 'Team Lead', 'ZOPSCON', 'Warri', 'true', 'true', '2019-03-05 21:07:18', '2019-03-09 11:24:28'),
(172, '53', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-03-05 21:08:21', '2019-03-09 11:24:28'),
(173, '53', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-03-09 11:10:15', '2019-03-09 11:24:28'),
(174, '53', 'DPRST00006', 'DPRST00008', 'Manager Gas', 'Team Lead', 'Warri', 'true', 'false', '2019-03-09 11:24:28', '2019-03-17 10:32:37'),
(175, '5', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-03-09 11:32:59', '2019-03-09 11:33:15'),
(176, '55', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-03-09 12:11:20', '2019-03-09 22:59:58'),
(177, '55', 'DPRST00009', 'DPRST00006', 'Team Lead', 'ZOPSCON', 'Warri', 'true', 'true', '2019-03-09 12:11:44', '2019-03-09 22:59:58'),
(178, '55', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-03-09 12:11:54', '2019-03-09 22:59:58'),
(179, '55', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-03-09 12:12:32', '2019-03-09 22:59:58'),
(180, '55', 'DPRST00006', 'DPRST00008', 'Manager Gas', 'Team Lead', 'Warri', 'true', 'true', '2019-03-09 12:13:15', '2019-03-09 22:59:58'),
(182, '55', 'DPRMKT00008', 'NA', 'Manager Gas', 'Marketer', 'Warri', 'true', 'true', '2019-03-09 21:46:06', '2019-03-09 22:59:58'),
(183, '55', 'DPRST00008', 'DPRST00006', 'Team Lead', 'Manager Gas', 'Warri', 'true', 'true', '2019-03-09 22:48:28', '2019-03-09 22:59:58'),
(184, '55', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-03-09 22:53:49', '2019-03-09 22:59:58'),
(185, '55', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-03-09 22:59:46', '2019-03-09 22:59:58'),
(186, '55', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-03-09 22:59:58', '2019-03-10 10:20:24'),
(187, '56', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-03-17 10:41:24', '2019-03-17 10:44:54'),
(188, '56', 'DPRST00009', 'DPRST00006', 'Team Lead', 'ZOPSCON', 'Warri', 'true', 'true', '2019-03-17 10:41:36', '2019-03-17 10:44:54'),
(189, '56', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-03-17 10:41:47', '2019-03-17 10:44:54'),
(190, '56', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-03-17 10:42:47', '2019-03-17 10:44:54'),
(191, '56', 'DPRST00006', 'DPRST00008', 'Manager Gas', 'Team Lead', 'Warri', 'true', 'true', '2019-03-17 10:43:21', '2019-03-17 10:44:54'),
(192, '56', 'DPRMKT00008', 'NA', 'Manager Gas', 'Marketer', 'Warri', 'true', 'true', '2019-03-17 10:44:06', '2019-03-17 10:44:54'),
(193, '56', 'DPRST00008', 'DPRST00006', 'Team Lead', 'Manager Gas', 'Warri', 'true', 'true', '2019-03-17 10:44:44', '2019-03-17 10:44:54'),
(194, '56', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-03-17 10:44:54', '2019-03-17 10:45:53'),
(195, '57', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-03-17 10:57:32', '2019-03-17 10:58:04'),
(196, '57', 'DPRST00009', 'DPRST00006', 'Team Lead', 'ZOPSCON', 'Warri', 'true', 'true', '2019-03-17 10:57:45', '2019-03-17 10:58:04'),
(197, '57', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'false', '2019-03-17 10:58:04', '2019-03-18 13:21:28'),
(198, '58', 'DPRMKT00008', 'NA', 'ZOPSCON', 'Marketer', 'Warri', 'true', 'true', '2019-03-17 11:00:41', '2019-03-18 13:28:53'),
(199, '58', 'DPRST00009', 'DPRST00006', 'Team Lead', 'ZOPSCON', 'Warri', 'true', 'true', '2019-03-17 11:00:58', '2019-03-18 13:28:53'),
(200, '58', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'true', '2019-03-18 13:26:40', '2019-03-18 13:28:53'),
(201, '58', 'DPRST00007', 'DPRST00006', 'Team Lead', 'Staff', 'Warri', 'true', 'true', '2019-03-18 13:28:03', '2019-03-18 13:28:53'),
(202, '58', 'DPRST00006', 'DPRST00007', 'Staff', 'Team Lead', 'Warri', 'true', 'false', '2019-03-18 13:28:53', '2019-03-18 13:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `issued_addon_ati_licenses`
--

CREATE TABLE `issued_addon_ati_licenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction_report` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_issued` datetime DEFAULT NULL,
  `expiry_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issued_addon_ati_licenses`
--

INSERT INTO `issued_addon_ati_licenses` (`id`, `application_id`, `company_id`, `staff_id`, `construction_report`, `date_issued`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00024', 'DPRCOMP00004', 'DPRST00007', NULL, '2019-02-12 19:24:17', '2019-08-12 19:24:17', '2019-02-12 18:24:17', '2019-02-12 18:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `issued_addon_lto_licenses`
--

CREATE TABLE `issued_addon_lto_licenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `construction_report` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_issued` datetime DEFAULT NULL,
  `expiry_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issued_atc_licenses`
--

CREATE TABLE `issued_atc_licenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `implementation_schedule` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_issued` datetime DEFAULT NULL,
  `expiry_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issued_atc_licenses`
--

INSERT INTO `issued_atc_licenses` (`id`, `application_id`, `company_id`, `staff_id`, `implementation_schedule`, `license_url`, `date_issued`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00003', 'DPRCOMP00001', 'DPRST00007', NULL, NULL, '2018-12-21 15:00:28', '2019-01-21 15:00:28', '2018-12-21 14:00:28', '2018-12-21 14:00:28'),
(2, 'DPRAPPLICATION00012', 'DPRCOMP00004', 'DPRST00007', NULL, NULL, '2019-02-03 17:15:39', '2019-08-03 02:03:03', '2019-02-03 16:15:39', '2019-02-03 16:15:39'),
(3, 'DPRAPPLICATION00015', 'DPRCOMP00003', 'DPRST00007', NULL, NULL, '2019-02-04 21:01:08', '2019-08-04 21:01:08', '2019-02-04 20:01:08', '2019-02-04 20:01:08'),
(4, 'DPRAPPLICATION00017', 'DPRCOMP00003', 'DPRST00007', NULL, NULL, '2019-02-04 23:49:26', '2019-08-04 23:49:26', '2019-02-04 22:49:26', '2019-02-04 22:49:26'),
(5, 'DPRAPPLICATION00021', 'DPRCOMP00003', 'DPRST00007', NULL, NULL, '2019-02-06 23:54:58', '2019-08-06 23:54:58', '2019-02-06 22:54:58', '2019-02-06 22:54:58'),
(6, 'DPRAPPLICATION00027', 'DPRCOMP00004', 'DPRST00007', NULL, NULL, '2019-03-02 20:08:11', '2019-09-02 20:08:11', '2019-03-02 19:08:11', '2019-03-02 19:08:11'),
(7, 'DPRAPPLICATION00031', 'DPRCOMP00003', 'DPRST00007', 'detailsprint.pdf', NULL, '2019-03-09 13:13:24', '2020-09-10 11:20:24', '2019-03-09 12:13:24', '2019-03-10 10:20:24'),
(8, 'DPRAPPLICATION00032', 'DPRCOMP00003', 'DPRST00007', 'scarves-hp-gq-6feb18_getty_b.jpg', NULL, '2019-03-17 11:43:30', '2020-09-17 11:45:53', '2019-03-17 10:43:30', '2019-03-17 10:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `issued_lto_licenses`
--

CREATE TABLE `issued_lto_licenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_issued` datetime DEFAULT NULL,
  `expiry_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issued_lto_licenses`
--

INSERT INTO `issued_lto_licenses` (`id`, `application_id`, `company_id`, `staff_id`, `license_url`, `date_issued`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00023', 'DPRCOMP00003', 'DPRST00007', 'desperados-iii-1920x1080-gamescom-2018-poster-4k-20045.jpg', '2019-02-26 20:23:20', '2019-03-26 20:23:20', '2019-02-26 19:23:20', '2019-03-03 01:21:59'),
(2, 'DPRAPPLICATION00020', 'DPRCOMP00001', 'DPRST00007', 'food-menu-design.jpg', '2019-03-03 07:05:58', '2021-03-03 07:05:58', '2019-03-03 06:05:58', '2019-03-03 06:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_timelines`
--

CREATE TABLE `jobs_timelines` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs_timelines`
--

INSERT INTO `jobs_timelines` (`id`, `application_id`, `from`, `to`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00002', 'DPRST00003', 'DPRST00004', '2018-12-09 22:26:13', '2018-12-09 22:26:13'),
(2, 'DPRAPPLICATION00002', 'DPRST00004', 'DPRST00005', '2018-12-12 10:14:36', '2018-12-12 10:14:36'),
(3, 'DPRAPPLICATION00002', 'DPRST00005', 'DPRST00006', '2018-12-12 10:14:56', '2018-12-12 10:14:56'),
(4, 'DPRAPPLICATION00002', 'DPRST00006', 'DPRST00007', '2018-12-12 10:15:10', '2018-12-12 10:15:10'),
(5, 'DPRAPPLICATION00002', 'DPRST00006', 'DPRST00007', '2018-12-12 10:16:11', '2018-12-12 10:16:11'),
(6, 'DPRAPPLICATION00002', 'DPRST00006', 'DPRST00007', '2018-12-12 10:20:27', '2018-12-12 10:20:27'),
(7, 'DPRAPPLICATION00002', 'DPRST00006', 'DPRST00007', '2018-12-12 10:20:27', '2018-12-12 10:20:27'),
(8, 'DPRAPPLICATION00002', 'DPRST00007', 'DPRST00006', '2018-12-13 18:16:03', '2018-12-13 18:16:03'),
(9, 'DPRAPPLICATION00003', 'DPRST00003', 'DPRST00004', '2018-12-13 19:29:07', '2018-12-13 19:29:07'),
(10, 'DPRAPPLICATION00003', 'DPRST00004', 'DPRST00005', '2018-12-13 19:41:05', '2018-12-13 19:41:05'),
(11, 'DPRAPPLICATION00003', 'DPRST00005', 'DPRST00006', '2018-12-13 19:41:15', '2018-12-13 19:41:15'),
(12, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00007', '2018-12-13 19:41:48', '2018-12-13 19:41:48'),
(13, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00007', '2018-12-13 19:41:48', '2018-12-13 19:41:48'),
(14, 'DPRAPPLICATION00003', 'DPRST00007', 'DPRST00006', '2018-12-13 19:50:28', '2018-12-13 19:50:28'),
(15, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00007', '2018-12-13 19:55:44', '2018-12-13 19:55:44'),
(16, 'DPRAPPLICATION00003', 'DPRST00007', 'DPRST00006', '2018-12-13 20:04:08', '2018-12-13 20:04:08'),
(17, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00005', '2018-12-13 20:04:27', '2018-12-13 20:04:27'),
(18, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00007', '2018-12-19 13:25:55', '2018-12-19 13:25:55'),
(19, 'DPRAPPLICATION00003', 'DPRST00007', 'DPRST00006', '2018-12-19 13:37:15', '2018-12-19 13:37:15'),
(20, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00007', '2018-12-19 13:42:23', '2018-12-19 13:42:23'),
(21, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00007', '2018-12-19 13:45:07', '2018-12-19 13:45:07'),
(22, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00007', '2018-12-19 13:55:11', '2018-12-19 13:55:11'),
(23, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00007', '2018-12-19 14:23:21', '2018-12-19 14:23:21'),
(24, 'DPRAPPLICATION00003', 'DPRST00007', 'DPRST00006', '2018-12-19 14:24:07', '2018-12-19 14:24:07'),
(26, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00007', '2018-12-19 15:02:13', '2018-12-19 15:02:13'),
(27, 'DPRAPPLICATION00003', 'DPRST00005', 'DPRST00004', '2018-12-20 14:58:02', '2018-12-20 14:58:02'),
(28, 'DPRAPPLICATION00003', 'DPRST00005', 'DPRST00006', '2018-12-20 15:48:45', '2018-12-20 15:48:45'),
(29, 'DPRAPPLICATION00003', 'DPRST00005', 'DPRST00006', '2018-12-20 15:53:57', '2018-12-20 15:53:57'),
(30, 'DPRAPPLICATION00003', 'DPRST00005', 'DPRST00006', '2018-12-20 16:02:48', '2018-12-20 16:02:48'),
(31, 'DPRAPPLICATION00003', 'DPRST00005', 'DPRST00006', '2018-12-20 16:06:01', '2018-12-20 16:06:01'),
(32, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00005', '2018-12-20 16:06:27', '2018-12-20 16:06:27'),
(33, 'DPRAPPLICATION00003', 'DPRST00005', 'DPRST00006', '2018-12-20 16:07:25', '2018-12-20 16:07:25'),
(34, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00005', '2018-12-21 07:03:55', '2018-12-21 07:03:55'),
(35, 'DPRAPPLICATION00003', 'DPRST00005', 'DPRST00004', '2018-12-21 07:10:13', '2018-12-21 07:10:13'),
(36, 'DPRAPPLICATION00003', 'DPRST00004', 'DPRST00005', '2018-12-21 09:28:42', '2018-12-21 09:28:42'),
(37, 'DPRAPPLICATION00003', 'DPRST00005', 'DPRST00004', '2018-12-21 09:28:58', '2018-12-21 09:28:58'),
(38, 'DPRAPPLICATION00003', 'DPRST00004', 'DPRST00003', '2018-12-21 09:29:42', '2018-12-21 09:29:42'),
(39, 'DPRAPPLICATION00003', 'DPRST00004', 'DPRST00003', '2018-12-21 09:30:32', '2018-12-21 09:30:32'),
(40, 'DPRAPPLICATION00003', 'DPRST00003', 'DPRST00004', '2018-12-21 13:48:02', '2018-12-21 13:48:02'),
(41, 'DPRAPPLICATION00003', 'DPRST00004', 'DPRST00003', '2018-12-21 13:48:22', '2018-12-21 13:48:22'),
(42, 'DPRAPPLICATION00004', 'DPRST00003', 'DPRST00004', '2018-12-23 12:58:44', '2018-12-23 12:58:44'),
(43, 'DPRAPPLICATION00004', 'DPRST00004', 'DPRST00005', '2018-12-23 12:58:51', '2018-12-23 12:58:51'),
(44, 'DPRAPPLICATION00004', 'DPRST00005', 'DPRST00006', '2018-12-23 12:59:13', '2018-12-23 12:59:13'),
(45, 'DPRAPPLICATION00004', 'DPRST00006', 'DPRST00007', '2018-12-23 13:00:45', '2018-12-23 13:00:45'),
(46, 'DPRAPPLICATION00004', 'DPRST00007', 'DPRST00006', '2018-12-23 13:23:41', '2018-12-23 13:23:41'),
(47, 'DPRAPPLICATION00004', 'DPRST00007', 'DPRST00006', '2018-12-23 13:24:51', '2018-12-23 13:24:51'),
(48, 'DPRAPPLICATION00004', 'DPRST00007', 'DPRST00006', '2018-12-24 20:57:48', '2018-12-24 20:57:48'),
(49, 'DPRAPPLICATION00006', 'DPRST00003', 'DPRST00004', '2019-01-19 21:28:23', '2019-01-19 21:28:23'),
(50, 'DPRAPPLICATION00006', 'DPRST00004', 'DPRST00005', '2019-01-19 21:32:24', '2019-01-19 21:32:24'),
(51, 'DPRAPPLICATION00006', 'DPRST00005', 'DPRST00006', '2019-01-19 21:33:00', '2019-01-19 21:33:00'),
(52, 'DPRAPPLICATION00006', 'DPRST00006', 'DPRST00007', '2019-01-19 21:35:04', '2019-01-19 21:35:04'),
(53, 'DPRAPPLICATION00007', 'DPRST00003', 'DPRST00004', '2019-01-20 00:26:09', '2019-01-20 00:26:09'),
(54, 'DPRAPPLICATION00007', 'DPRST00004', 'DPRST00005', '2019-01-20 00:26:23', '2019-01-20 00:26:23'),
(55, 'DPRAPPLICATION00007', 'DPRST00005', 'DPRST00006', '2019-01-20 00:26:36', '2019-01-20 00:26:36'),
(56, 'DPRAPPLICATION00007', 'DPRST00006', 'DPRST00007', '2019-01-20 00:27:26', '2019-01-20 00:27:26'),
(57, 'DPRAPPLICATION00006', 'DPRST00007', 'DPRST00006', '2019-01-25 18:03:55', '2019-01-25 18:03:55'),
(58, 'DPRAPPLICATION00009', 'DPRST00009', 'DPRST00004', '2019-01-31 08:32:00', '2019-01-31 08:32:00'),
(59, 'DPRAPPLICATION00009', 'DPRST00004', 'DPRST00005', '2019-01-31 08:33:03', '2019-01-31 08:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `job_assignments`
--

CREATE TABLE `job_assignments` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assigned_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teamlead_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_application_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_zopscon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_ADO` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_head_gas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_assignments`
--

INSERT INTO `job_assignments` (`id`, `application_id`, `assigned_by`, `staff_id`, `teamlead_id`, `company_id`, `job_application_status`, `to_zopscon`, `to_ADO`, `to_head_gas`, `approved_by`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00002', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00001', 'Site Suitable', NULL, NULL, NULL, 'DPRST00006', '2018-12-12 10:20:27', '2018-12-13 18:32:37'),
(2, 'DPRAPPLICATION00003', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00001', 'ATC Issued', NULL, NULL, NULL, 'DPRST00003', '2018-12-13 19:41:48', '2018-12-21 14:00:28'),
(3, 'DPRAPPLICATION00004', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00002', 'Site Suitable', NULL, NULL, NULL, 'DPRST00006', '2018-12-23 13:00:45', '2018-12-24 20:57:59'),
(4, 'DPRAPPLICATION00006', 'DPRST00006', 'DPRST00007', NULL, NULL, 'Site Suitable', NULL, NULL, NULL, 'DPRST00006', '2019-01-19 21:35:04', '2019-02-03 08:40:03'),
(5, 'DPRAPPLICATION00007', 'DPRST00006', 'DPRST00007', NULL, NULL, 'Assigned', NULL, NULL, NULL, NULL, '2019-01-20 00:27:26', '2019-01-20 00:27:26'),
(6, 'DPRAPPLICATION00010', 'DPRST00006', 'DPRST00005', NULL, NULL, 'Site Suitable', NULL, NULL, NULL, 'DPRST00006', '2019-02-02 20:30:23', '2019-02-03 09:36:03'),
(7, 'DPRAPPLICATION00011', 'DPRST00006', 'DPRST00007', NULL, NULL, 'Site Suitable', NULL, NULL, NULL, 'DPRST00006', '2019-02-03 09:25:48', '2019-02-06 19:14:25'),
(8, 'DPRAPPLICATION00012', 'DPRST00006', 'DPRST00005', NULL, 'DPRCOMP00004', 'ATC Issued', NULL, NULL, NULL, 'DPRST00005', '2019-02-03 13:10:50', '2019-02-03 16:15:39'),
(9, 'DPRAPPLICATION00013', 'DPRST00006', 'DPRST00005', NULL, 'DPRCOMP00004', 'Application Sent to HQ', NULL, NULL, NULL, NULL, '2019-02-03 20:42:43', '2019-02-04 02:25:04'),
(10, 'DPRAPPLICATION00015', 'DPRST00006', 'DPRST00005', NULL, 'DPRCOMP00003', 'ATC Issued', NULL, NULL, NULL, 'DPRST00005', '2019-02-04 19:35:29', '2019-02-04 20:01:08'),
(11, 'DPRAPPLICATION00016', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00003', 'Application Sent to HQ', NULL, NULL, NULL, NULL, '2019-02-04 20:34:30', '2019-02-04 20:37:04'),
(12, 'DPRAPPLICATION00017', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00003', 'ATC Issued', NULL, NULL, NULL, 'DPRST00005', '2019-02-04 22:46:44', '2019-02-04 22:49:26'),
(13, 'DPRAPPLICATION00018', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00003', 'Application Sent to HQ', NULL, NULL, NULL, NULL, '2019-02-04 23:34:27', '2019-02-04 23:35:24'),
(14, 'DPRAPPLICATION00020', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00001', 'LTO Issued', NULL, NULL, NULL, 'DPRST00011', '2019-02-05 13:02:39', '2019-03-03 06:05:58'),
(15, 'DPRAPPLICATION00005', 'DPRST00006', 'DPRST00007', NULL, NULL, 'Site Suitable', NULL, NULL, NULL, 'DPRST00006', '2019-02-06 19:54:51', '2019-03-09 11:33:15'),
(16, 'DPRAPPLICATION00021', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00003', 'ATC Issued', NULL, NULL, NULL, 'DPRST00008', '2019-02-06 19:54:58', '2019-02-06 22:54:58'),
(17, 'DPRAPPLICATION00023', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00003', 'LTO Issued', NULL, NULL, NULL, 'DPRST00011', '2019-02-10 19:47:36', '2019-02-26 19:23:20'),
(18, 'DPRAPPLICATION00024', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00004', 'ATI Issued', NULL, NULL, NULL, 'DPRST00008', '2019-02-11 21:42:09', '2019-02-12 18:24:17'),
(19, 'DPRAPPLICATION00025', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00004', 'Application Sent to HQ', NULL, NULL, NULL, NULL, '2019-02-12 17:23:56', '2019-02-12 19:20:22'),
(20, 'DPRAPPLICATION00026', 'DPRST00006', 'DPRST00007', NULL, NULL, 'Started', NULL, NULL, NULL, NULL, '2019-02-13 18:07:37', '2019-02-13 18:22:34'),
(21, 'DPRAPPLICATION00027', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00004', 'ATC Issued', NULL, NULL, NULL, 'DPRST00008', '2019-03-02 18:14:25', '2019-03-02 19:08:11'),
(22, 'DPRAPPLICATION00028', 'DPRST00006', 'DPRST00007', NULL, NULL, 'Started', NULL, NULL, NULL, NULL, '2019-03-03 06:31:19', '2019-03-03 06:47:30'),
(24, 'DPRAPPLICATION00029', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00004', 'Pressure Test Succesful', NULL, NULL, NULL, 'DPRST00007', '2019-03-03 20:21:05', '2019-03-05 19:04:49'),
(25, 'DPRAPPLICATION00030', 'DPRST00006', 'DPRST00007', NULL, NULL, 'Started', NULL, NULL, NULL, NULL, '2019-03-05 21:08:21', '2019-03-06 00:03:34'),
(26, 'DPRAPPLICATION00031', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00003', 'ATC Issued', NULL, NULL, NULL, 'DPRST00008', '2019-03-09 12:11:54', '2019-03-09 22:53:49'),
(27, 'DPRAPPLICATION00032', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00003', 'ATC Issued', NULL, NULL, NULL, 'DPRST00008', '2019-03-17 10:41:47', '2019-03-17 10:43:30'),
(28, 'DPRAPPLICATION00033', 'DPRST00006', 'DPRST00007', NULL, 'DPRCOMP00003', 'Pressure Test Succesful', NULL, NULL, NULL, 'DPRST00007', '2019-03-17 10:58:04', '2019-03-17 10:58:45'),
(29, 'DPRAPPLICATION00034', 'DPRST00006', 'DPRST00007', NULL, NULL, 'Started', NULL, NULL, NULL, NULL, '2019-03-18 13:26:40', '2019-03-18 13:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `lto_inspection_documents`
--

CREATE TABLE `lto_inspection_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankdraft_of_statutory_fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photocopy_of_approval_to_construct_lpg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_weight_measures_cert_of_verification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_letter_addressed_to_the_controller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_report_certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_pressure_test_report_certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_three_years_income_tax_clearance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appropriate_plant_photography` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `standard_operating_procedure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed_application_form_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photocopy_of_approval_to_construct_lpg_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_weight_measures_cert_of_verification_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_report_certificate_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_pressure_test_report_certificate_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_three_years_income_tax_clearance_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appropriate_plant_photography_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard_operating_procedure_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photocopy_of_approval_to_construct_lpg_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_weight_measures_cert_of_verification_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_report_certificate_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_pressure_test_report_certificate_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_three_years_income_tax_clearance_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appropriate_plant_photography_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard_operating_procedure_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photocopy_of_approval_to_construct_lpg_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_weight_measures_cert_of_verification_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_report_certificate_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_pressure_test_report_certificate_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_three_years_income_tax_clearance_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appropriate_plant_photography_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard_operating_procedure_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lto_inspection_documents`
--

INSERT INTO `lto_inspection_documents` (`id`, `application_id`, `marketer_id`, `company_id`, `completed_application_form`, `bankdraft_of_statutory_fees`, `photocopy_of_approval_to_construct_lpg`, `current_weight_measures_cert_of_verification`, `application_letter_addressed_to_the_controller`, `fire_report_certificate`, `current_pressure_test_report_certificate`, `current_three_years_income_tax_clearance`, `appropriate_plant_photography`, `standard_operating_procedure`, `completed_application_form_location_url`, `bankdraft_of_statutory_fees_location_url`, `photocopy_of_approval_to_construct_lpg_location_url`, `current_weight_measures_cert_of_verification_location_url`, `application_letter_addressed_to_the_controller_location_url`, `fire_report_certificate_location_url`, `current_pressure_test_report_certificate_location_url`, `current_three_years_income_tax_clearance_location_url`, `appropriate_plant_photography_location_url`, `standard_operating_procedure_location_url`, `completed_application_form_reason`, `bankdraft_of_statutory_fees_reason`, `photocopy_of_approval_to_construct_lpg_reason`, `current_weight_measures_cert_of_verification_reason`, `application_letter_addressed_to_the_controller_reason`, `fire_report_certificate_reason`, `current_pressure_test_report_certificate_reason`, `current_three_years_income_tax_clearance_reason`, `appropriate_plant_photography_reason`, `standard_operating_procedure_reason`, `completed_application_form_location_check`, `bankdraft_of_statutory_fees_location_check`, `photocopy_of_approval_to_construct_lpg_location_check`, `current_weight_measures_cert_of_verification_location_check`, `application_letter_addressed_to_the_controller_location_check`, `fire_report_certificate_location_check`, `current_pressure_test_report_certificate_location_check`, `current_three_years_income_tax_clearance_location_check`, `appropriate_plant_photography_location_check`, `standard_operating_procedure_location_check`, `created_at`, `updated_at`) VALUES
(2, 'DPRAPPLICATION00013', 'DPRST00007', 'DPRCOMP00004', 'yes', 'no', 'no', 'null', 'null', 'null', 'yes', 'yes', 'yes', 'yes', 'wallpaper_1470512056.jpg', 'null', 'null', 'null', 'null', 'null', 'wallpaper_1043666544.jpg', 'wallpaper_540077676.jpg', 'GOT1580939581.jpg', 'GOT1431897166.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-03 20:22:42', '2019-02-04 02:25:04'),
(3, 'DPRAPPLICATION00016', 'DPRMKT00008', 'DPRCOMP00003', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'null', 'no', 'null', 'future_sun-wide.jpg', 'GOT1031051798.jpg', 'GOT798659691.jpg', 'GOT529995915.jpg', 'wallpaper_1501537055.jpg', 'GOT378450085.jpg', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-04 20:11:03', '2019-02-04 20:37:04'),
(4, 'DPRAPPLICATION00018', 'DPRMKT00008', 'DPRCOMP00003', 'no', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'null', 'null', 'null', 'null', 'tumblr_nnfgqrz21Z1qccf1fo1_1280.jpg', 'Target.jpg', 'null', 'null', 'null', 'green_lantern_hj_by_randygreen-d5cyiqc.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-04 23:33:13', '2019-02-04 23:35:24'),
(5, 'DPRAPPLICATION00020', 'DPRMKT00008', 'DPRCOMP00001', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', 'true', 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-05 12:08:14', '2019-03-03 06:05:58'),
(6, 'DPRAPPLICATION00023', 'DPRMKT00008', 'DPRCOMP00003', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', '2019-02-06 22:59:49', '2019-03-03 06:51:05'),
(21, 'DPRAPPLICATION00028', 'DPRMKT00008', NULL, 'yes', 'yes', 'no', 'null', 'null', 'null', 'yes', 'yes', 'yes', 'yes', 'for-honor-1920x1080-gamescom-2018-screenshot-4k-20078.jpg', 'metro-exodus-1920x1080-autumn-gamescom-2018-artwork-poster-7k-20098.jpg', 'null', 'null', 'null', 'null', 'artistic-1920x1080-colors-4k-5k-18393.jpg', 'artistic-1920x1080-mushroom-world-19457.jpg', 'assassin-039-s-creed-odyssey-1920x1080-assassins-creed-odyssey-gamescom-2018-screenshot-4k-20088.jpg', 'asus-rog-phone-1920x1080-abstract-colorful-android-8-0-hd-20600.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-02 22:24:03', '2019-03-03 07:06:01'),
(22, 'DPRAPPLICATION00030', 'DPRMKT00008', NULL, 'yes', 'null', 'null', 'null', 'yes', 'yes', 'yes', 'null', 'null', 'null', 'TurfGrass-1250x650.jpg', 'null', 'null', 'null', '24bc9291c689d1e92247ada8689c85e7.jpg', 'luis-su-rez-1920x1080-barcelona-fcb-soccer-4k-19821.jpg', 'sneakers-1920x1080-colorful-4k-15171.jpg', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 20:57:26', '2019-03-05 20:57:26'),
(23, 'DPRAPPLICATION00034', 'DPRMKT00008', NULL, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'true', 'true', 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-17 11:00:29', '2019-03-18 13:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `lto_license_renewals`
--

CREATE TABLE `lto_license_renewals` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comp_license_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_of_last_expired_license` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy_of_last_expired_license_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previous_date_issued` datetime DEFAULT NULL,
  `previous_expiry_date` datetime DEFAULT NULL,
  `current_date_issued` datetime DEFAULT NULL,
  `current_expiry_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lto_license_renewals`
--

INSERT INTO `lto_license_renewals` (`id`, `application_id`, `comp_license_id`, `marketer_id`, `company_id`, `copy_of_last_expired_license`, `copy_of_last_expired_license_location_url`, `previous_date_issued`, `previous_expiry_date`, `current_date_issued`, `current_expiry_date`, `created_at`, `updated_at`) VALUES
(2, 'DPRAPPLICATION00028', 'DPRAPPLICATION00023', 'DPRMKT00008', 'DPRCOMP00003', 'yes', 'desperados-iii-1920x1080-gamescom-2018-poster-4k-20045.jpg', '2019-02-26 20:23:20', '2019-03-26 20:23:20', NULL, NULL, '2019-03-02 22:24:03', '2019-03-02 22:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_08_04_003114_create_staff_table', 1),
(2, '2018_08_04_210505_create_companies_table', 1),
(3, '2018_08_06_230802_create_app_doc_reviews_table', 1),
(4, '2018_09_03_193258_create_site_suitability_inspection_documents_table', 1),
(5, '2018_09_10_082912_create_job_assignments_table', 1),
(6, '2018_09_11_123844_create_application_comments_table', 1),
(7, '2018_09_11_124811_create_report_documents_table', 1),
(8, '2018_09_12_085408_create_site_suitability_reports_table', 1),
(9, '2018_09_13_195422_create_atc_inspection_documents_table', 1),
(10, '2018_09_17_232944_create_issued_atc_licenses_table', 1),
(11, '2018_09_18_101621_create_lto_inspection_documents_table', 1),
(12, '2018_09_18_211837_create_issued_lto_licenses_table', 1),
(14, '2018_09_25_113348_create_renewed_lto_licenses_table', 1),
(15, '2018_09_26_021747_create_takeover_reviews_table', 1),
(16, '2018_09_26_030217_create_takeover_inspection_documents_table', 1),
(17, '2018_09_27_214456_create_pressure_test_records_table', 1),
(18, '2018_09_29_193040_create_jobs_timelines_table', 1),
(19, '2018_10_17_085747_create_zopscon_inboxes_table', 1),
(20, '2018_10_26_010915_create_zopscon_outboxes_table', 1),
(21, '2018_10_26_010932_create_ado_inboxes_table', 1),
(22, '2018_10_26_010952_create_ado_outboxes_table', 1),
(23, '2018_10_28_130311_create_headgas_inboxes_table', 1),
(24, '2018_10_28_130328_create_headgas_outboxes_table', 1),
(25, '2018_10_28_130424_create_teamlead_outboxes_table', 1),
(26, '2018_10_28_130438_create_teamlead_inboxes_table', 1),
(27, '2018_11_09_105027_create_staff_inboxes_table', 1),
(28, '2018_11_09_105038_create_staff_outboxes_table', 1),
(29, '2018_12_26_200611_create_completed_jobs_table', 2),
(30, '2019_01_31_211351_create_inboxes_table', 3),
(31, '2019_01_31_211705_create_outboxes_table', 3),
(32, '2019_02_11_200526_create_addon_ati_inspection_documents_table', 4),
(33, '2019_02_12_032453_create_issued_addon_ati_licenses_table', 5),
(34, '2019_02_12_045213_create_addon_lto_inspection_documents_table', 6),
(35, '2019_02_12_181539_create_issued_addon_lto_licenses_table', 7),
(37, '2019_02_12_220230_create_catd_lto_application_extentions_table', 8),
(38, '2019_02_12_224108_create_catd_lto_inspection_documents_table', 9),
(39, '2018_09_25_013337_create_lto_license_renewals_table', 10),
(40, '2019_03_05_212616_create_pressure_test_licenses_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `outboxes`
--

CREATE TABLE `outboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `outboxes`
--

INSERT INTO `outboxes` (`id`, `application_id`, `to`, `role`, `office`, `created_at`, `updated_at`) VALUES
(8, '10', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-02 15:22:33', '2019-02-02 15:22:33'),
(10, '5', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-02 16:33:07', '2019-02-02 16:33:07'),
(11, '10', 'DPRST00005 (Head Gas M&G Lagos)', 'ADO', 'Warri', '2019-02-02 18:12:30', '2019-02-02 18:12:30'),
(12, '10', 'DPRST00006 (Team Lead)', 'Head Gas M&G Lagos', 'Warri', '2019-02-02 19:03:47', '2019-02-02 19:03:47'),
(13, '10', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-02 20:30:23', '2019-02-02 20:30:23'),
(14, '10', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-03 06:02:32', '2019-02-03 06:02:32'),
(15, '10', 'DPRST00005 (Head Gas M&G Lagos)', 'Team Lead', 'Warri', '2019-02-03 06:50:07', '2019-02-03 06:50:07'),
(16, '10', 'DPRST00004 (ADO)', 'Head Gas M&G Lagos', 'Warri', '2019-02-03 07:07:11', '2019-02-03 07:07:11'),
(17, '10', 'DPRST00009 (ZOPSCON)', 'ADO', 'Warri', '2019-02-03 07:25:02', '2019-02-03 07:25:02'),
(18, '10', 'DPRST00005 (Head Gas M&G Lagos)', 'ZOPSCON', 'Warri', '2019-02-03 07:32:06', '2019-02-03 07:32:06'),
(19, '10', 'DPRST00006 (Team Lead)', 'Head Gas M&G Lagos', 'Warri', '2019-02-03 07:32:59', '2019-02-03 07:32:59'),
(20, '11', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-03 09:23:34', '2019-02-03 09:23:34'),
(21, '11', 'DPRST00005 (Head Gas M&G Lagos)', 'ADO', 'Warri', '2019-02-03 09:24:19', '2019-02-03 09:24:19'),
(22, '5', 'DPRST00005 (Head Gas M&G Lagos)', 'ADO', 'Warri', '2019-02-03 09:24:25', '2019-02-03 09:24:25'),
(23, '11', 'DPRST00006 (Team Lead)', 'Head Gas M&G Lagos', 'Warri', '2019-02-03 09:25:06', '2019-02-03 09:25:06'),
(24, '11', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-03 09:25:48', '2019-02-03 09:25:48'),
(25, '14', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-03 13:00:10', '2019-02-03 13:00:10'),
(26, '14', 'DPRST00005 (Head Gas M&G Lagos)', 'ADO', 'Warri', '2019-02-03 13:01:06', '2019-02-03 13:01:06'),
(27, '14', 'DPRST00006 (Team Lead)', 'Head Gas M&G Lagos', 'Warri', '2019-02-03 13:09:33', '2019-02-03 13:09:33'),
(28, '14', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-03 13:10:50', '2019-02-03 13:10:50'),
(29, '14', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-03 13:11:52', '2019-02-03 13:11:52'),
(30, '14', 'DPRST00005 (Head Gas M&G Lagos)', 'Team Lead', 'Warri', '2019-02-03 13:12:11', '2019-02-03 13:12:11'),
(31, '16', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-03 20:41:22', '2019-02-03 20:41:22'),
(32, '16', 'DPRST00006 (Team Lead)', 'ADO', 'Warri', '2019-02-03 20:41:47', '2019-02-03 20:41:47'),
(33, '16', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-03 20:42:43', '2019-02-03 20:42:43'),
(34, '16', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-03 20:44:43', '2019-02-03 20:44:43'),
(35, '16', 'DPRST00005 (Head Gas M&G Lagos)', 'Team Lead', 'Warri', '2019-02-03 20:49:13', '2019-02-03 20:49:13'),
(36, '16', 'DPRST000000 (HEAD GAS HQ)', 'Head Gas M&G Lagos', 'Warri', '2019-02-04 02:25:04', '2019-02-04 02:25:04'),
(37, '18', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-04 19:31:51', '2019-02-04 19:31:51'),
(38, '18', 'DPRST00005 (Head Gas M&G Lagos)', 'ADO', 'Warri', '2019-02-04 19:34:32', '2019-02-04 19:34:32'),
(39, '18', 'DPRST00006 (Team Lead)', 'Head Gas M&G Lagos', 'Warri', '2019-02-04 19:35:10', '2019-02-04 19:35:10'),
(40, '18', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-04 19:35:29', '2019-02-04 19:35:29'),
(41, '18', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-04 19:39:03', '2019-02-04 19:39:03'),
(42, '18', 'DPRST00005 (Head Gas M&G Lagos)', 'Team Lead', 'Warri', '2019-02-04 19:39:13', '2019-02-04 19:39:13'),
(43, '18', 'DPRST00004 (ADO)', 'Head Gas M&G Lagos', 'Warri', '2019-02-04 19:39:28', '2019-02-04 19:39:28'),
(44, '18', 'DPRST00005 (Head Gas M&G Lagos)', 'ADO', 'Warri', '2019-02-04 19:44:57', '2019-02-04 19:44:57'),
(45, '18', 'DPRST00006 (Team Lead)', 'Head Gas M&G Lagos', 'Warri', '2019-02-04 19:45:15', '2019-02-04 19:45:15'),
(46, '18', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-04 19:45:24', '2019-02-04 19:45:24'),
(47, '18', 'DPRST00010 (Team Lead)', 'Staff', 'Warri', '2019-02-04 19:48:06', '2019-02-04 19:48:06'),
(48, '18', 'DPRST00005 (Head Gas M&G Lagos)', 'Team Lead', 'Warri', '2019-02-04 19:59:54', '2019-02-04 19:59:54'),
(49, '19', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-04 20:11:51', '2019-02-04 20:11:51'),
(50, '19', 'DPRST00005 (Head Gas M&G Lagos)', 'ADO', 'Warri', '2019-02-04 20:12:00', '2019-02-04 20:12:00'),
(51, '19', 'DPRST00006 (Team Lead)', 'Head Gas M&G Lagos', 'Warri', '2019-02-04 20:12:17', '2019-02-04 20:12:17'),
(52, '19', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-04 20:13:44', '2019-02-04 20:13:44'),
(53, '19', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-04 20:34:30', '2019-02-04 20:34:30'),
(54, '19', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-04 20:36:39', '2019-02-04 20:36:39'),
(55, '19', 'DPRST00005 (Head Gas M&G Lagos)', 'Team Lead', 'Warri', '2019-02-04 20:36:50', '2019-02-04 20:36:50'),
(56, '19', 'DPRST000000 (HEAD GAS HQ)', 'Head Gas M&G Lagos', 'Warri', '2019-02-04 20:37:04', '2019-02-04 20:37:04'),
(57, '22', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-04 22:38:22', '2019-02-04 22:38:22'),
(58, '22', 'DPRST00005 (Head Gas M&G Lagos)', 'ADO', 'Warri', '2019-02-04 22:43:21', '2019-02-04 22:43:21'),
(59, '5', 'DPRST00010 (Team Lead)', 'Head Gas M&G Lagos', 'Warri', '2019-02-04 22:45:32', '2019-02-04 22:45:32'),
(60, '22', 'DPRST00006 (Team Lead)', 'Head Gas M&G Lagos', 'Warri', '2019-02-04 22:45:39', '2019-02-04 22:45:39'),
(61, '22', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-04 22:46:44', '2019-02-04 22:46:44'),
(62, '22', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-04 22:48:26', '2019-02-04 22:48:26'),
(63, '22', 'DPRST00005 (Head Gas M&G Lagos)', 'Team Lead', 'Warri', '2019-02-04 22:49:10', '2019-02-04 22:49:10'),
(64, '23', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-04 23:33:55', '2019-02-04 23:33:55'),
(65, '23', 'DPRST00005 (Head Gas M&G Lagos)', 'ADO', 'Warri', '2019-02-04 23:34:04', '2019-02-04 23:34:04'),
(66, '23', 'DPRST00006 (Team Lead)', 'Head Gas M&G Lagos', 'Warri', '2019-02-04 23:34:16', '2019-02-04 23:34:16'),
(67, '23', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-04 23:34:27', '2019-02-04 23:34:27'),
(68, '23', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-04 23:34:57', '2019-02-04 23:34:57'),
(69, '23', 'DPRST00005 (Head Gas M&G Lagos)', 'Team Lead', 'Warri', '2019-02-04 23:35:08', '2019-02-04 23:35:08'),
(70, '23', 'DPRST000000 (HEAD GAS HQ)', 'Head Gas M&G Lagos', 'Warri', '2019-02-04 23:35:24', '2019-02-04 23:35:24'),
(71, '25', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-05 12:09:58', '2019-02-05 12:09:58'),
(72, '25', 'DPRST00008 (Manager Gas)', 'ADO', 'Warri', '2019-02-05 12:10:19', '2019-02-05 12:10:19'),
(73, '25', 'DPRST00006 (Team Lead)', 'Manager Gas', 'Warri', '2019-02-05 12:59:26', '2019-02-05 12:59:26'),
(74, '25', 'DPRST00006 (Team Lead)', 'Manager Gas', 'Warri', '2019-02-05 13:00:58', '2019-02-05 13:00:58'),
(75, '25', 'DPRST00006 (Team Lead)', 'Manager Gas', 'Warri', '2019-02-05 13:02:07', '2019-02-05 13:02:07'),
(76, '25', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-05 13:02:39', '2019-02-05 13:02:39'),
(77, '25', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-05 13:03:09', '2019-02-05 13:03:09'),
(78, '25', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-05 13:03:09', '2019-02-05 13:03:09'),
(79, '25', 'DPRST00008 (Manager Gas)', 'Team Lead', 'Warri', '2019-02-05 13:03:24', '2019-02-05 13:03:24'),
(80, '25', 'DPRST00011 (Head Gas M&G Lagos)', 'Manager Gas', 'Warri', '2019-02-05 13:32:14', '2019-02-05 13:32:14'),
(81, '25', 'DPRST00012 (Manager Gas)', 'Head Gas M&G Lagos', 'HQ', '2019-02-05 20:34:00', '2019-02-05 20:34:00'),
(82, '25', 'DPRST00014 (Staff)', 'Manager Gas', 'HQ', '2019-02-05 20:59:42', '2019-02-05 20:59:42'),
(83, '11', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-06 19:09:47', '2019-02-06 19:09:47'),
(84, '26', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-06 19:54:08', '2019-02-06 19:54:08'),
(85, '26', 'DPRST00008 (Manager Gas)', 'ADO', 'Warri', '2019-02-06 19:54:21', '2019-02-06 19:54:21'),
(86, '26', 'DPRST00006 (Team Lead)', 'Manager Gas', 'Warri', '2019-02-06 19:54:35', '2019-02-06 19:54:35'),
(87, '5', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-06 19:54:51', '2019-02-06 19:54:51'),
(88, '26', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-06 19:54:58', '2019-02-06 19:54:58'),
(89, '26', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-06 22:20:48', '2019-02-06 22:20:48'),
(90, '26', 'DPRST00008 (Manager Gas)', 'Team Lead', 'Warri', '2019-02-06 22:52:55', '2019-02-06 22:52:55'),
(91, '28', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-10 19:46:30', '2019-02-10 19:46:30'),
(92, '28', 'DPRST00008 (Manager Gas)', 'ADO', 'Warri', '2019-02-10 19:46:51', '2019-02-10 19:46:51'),
(93, '28', 'DPRST00006 (Team Lead)', 'Manager Gas', 'Warri', '2019-02-10 19:47:24', '2019-02-10 19:47:24'),
(94, '28', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-10 19:47:36', '2019-02-10 19:47:36'),
(95, '28', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-11 10:40:15', '2019-02-11 10:40:15'),
(96, '28', 'DPRST00008 (Manager Gas)', 'Team Lead', 'Warri', '2019-02-11 10:42:50', '2019-02-11 10:42:50'),
(97, '28', 'DPRST00011 (Head Gas M&G Lagos)', 'Manager Gas', 'Warri', '2019-02-11 10:43:11', '2019-02-11 10:43:11'),
(98, '28', 'DPRST00012 (Manager Gas)', 'Head Gas M&G Lagos', 'HQ', '2019-02-11 10:56:02', '2019-02-11 10:56:02'),
(99, '28', 'DPRST00014 (Staff)', 'Manager Gas', 'HQ', '2019-02-11 11:13:49', '2019-02-11 11:13:49'),
(100, '28', 'DPRST00012 (Manager Gas)', 'Staff', 'HQ', '2019-02-11 11:30:29', '2019-02-11 11:30:29'),
(101, '28', 'DPRST00011 (Head Gas M&G Lagos)', 'Manager Gas', 'HQ', '2019-02-11 11:39:36', '2019-02-11 11:39:36'),
(104, '28', 'DPRST00009 (ZOPSCON)', 'Head Gas M&G Lagos', 'HQ', '2019-02-11 18:30:49', '2019-02-11 18:30:49'),
(105, '29', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-11 21:40:05', '2019-02-11 21:40:05'),
(106, '29', 'DPRST00008 (Manager Gas)', 'ADO', 'Warri', '2019-02-11 21:40:24', '2019-02-11 21:40:24'),
(107, '29', 'DPRST00006 (Team Lead)', 'Manager Gas', 'Warri', '2019-02-11 21:41:15', '2019-02-11 21:41:15'),
(108, '29', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-11 21:42:09', '2019-02-11 21:42:09'),
(109, '29', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-11 21:44:24', '2019-02-11 21:44:24'),
(110, '29', 'DPRST00008 (Manager Gas)', 'Team Lead', 'Warri', '2019-02-11 21:46:26', '2019-02-11 21:46:26'),
(111, '30', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-12 17:18:17', '2019-02-12 17:18:17'),
(112, '30', 'DPRST00008 (Manager Gas)', 'ADO', 'Warri', '2019-02-12 17:18:31', '2019-02-12 17:18:31'),
(113, '30', 'DPRST00006 (Team Lead)', 'Manager Gas', 'Warri', '2019-02-12 17:18:51', '2019-02-12 17:18:51'),
(114, '30', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-12 17:23:56', '2019-02-12 17:23:56'),
(115, '30', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-12 17:44:22', '2019-02-12 17:44:22'),
(116, '30', 'DPRST00008 (Manager Gas)', 'Team Lead', 'Warri', '2019-02-12 17:45:07', '2019-02-12 17:45:07'),
(117, '30', 'DPRST00011 (Head Gas M&G Lagos)', 'Manager Gas', 'Warri', '2019-02-12 19:20:22', '2019-02-12 19:20:22'),
(118, '32', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-02-13 15:01:09', '2019-02-13 15:01:09'),
(119, '32', 'DPRST00008 (Manager Gas)', 'ADO', 'Warri', '2019-02-13 17:50:56', '2019-02-13 17:50:56'),
(120, '32', 'DPRST00006 (Team Lead)', 'Manager Gas', 'Warri', '2019-02-13 18:02:04', '2019-02-13 18:02:04'),
(121, '32', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-02-13 18:07:37', '2019-02-13 18:07:37'),
(122, '32', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-02-13 18:22:50', '2019-02-13 18:22:50'),
(123, '32', 'DPRST00008 (Manager Gas)', 'Team Lead', 'Warri', '2019-02-13 18:25:49', '2019-02-13 18:25:49'),
(124, '28', 'DPRST00011 (Head Gas M&G Lagos)', 'ZOPSCON', 'Warri', '2019-02-17 21:44:14', '2019-02-17 21:44:14'),
(125, '37', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-03-02 18:01:43', '2019-03-02 18:01:43'),
(126, '37', 'DPRST00006 (Team Lead)', 'ADO', 'Warri', '2019-03-02 18:13:15', '2019-03-02 18:13:15'),
(127, '37', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-02 18:14:25', '2019-03-02 18:14:25'),
(128, '37', 'DPRST00004 (ADO)', 'Staff', 'Warri', '2019-03-02 18:53:57', '2019-03-02 18:53:57'),
(129, '37', 'DPRST00005 (Head Gas M&G Lagos)', 'ADO', 'Warri', '2019-03-02 18:55:15', '2019-03-02 18:55:15'),
(130, '37', 'DPRST00008 (Manager Gas)', 'Head Gas M&G Lagos', 'Warri', '2019-03-02 18:56:11', '2019-03-02 18:56:11'),
(131, '37', 'DPRST00007 (Staff)', 'Manager Gas', 'Warri', '2019-03-02 18:58:10', '2019-03-02 18:58:10'),
(132, '37', 'DPRST00008 (Manager Gas)', 'Staff', 'Warri', '2019-03-02 19:03:23', '2019-03-02 19:03:23'),
(133, '25', 'DPRST00003 (ZOPSCON)', 'Staff', 'HQ', '2019-03-03 05:58:17', '2019-03-03 05:58:17'),
(134, '25', 'DPRST00011 (Head Gas M&G Lagos)', 'ZOPSCON', 'HQ', '2019-03-03 06:04:15', '2019-03-03 06:04:15'),
(135, '45', 'DPRST00004 (ADO)', 'ZOPSCON', 'Warri', '2019-03-03 06:23:07', '2019-03-03 06:23:07'),
(136, '45', 'DPRST00008 (Manager Gas)', 'ADO', 'Warri', '2019-03-03 06:24:32', '2019-03-03 06:24:32'),
(137, '45', 'DPRST00006 (Team Lead)', 'Manager Gas', 'Warri', '2019-03-03 06:30:41', '2019-03-03 06:30:41'),
(138, '45', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-03 06:31:19', '2019-03-03 06:31:19'),
(139, '45', 'DPRST00008 (Manager Gas)', 'Staff', 'Warri', '2019-03-03 06:47:55', '2019-03-03 06:47:55'),
(140, '50', 'DPRST00006 (Team Lead)', 'ZOPSCON', 'Warri', '2019-03-03 12:10:27', '2019-03-03 12:10:27'),
(141, '50', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-03 12:10:52', '2019-03-03 12:10:52'),
(142, '52', 'DPRST00006 (Team Lead)', 'ZOPSCON', 'Warri', '2019-03-03 20:18:49', '2019-03-03 20:18:49'),
(143, '52', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-03 20:21:05', '2019-03-03 20:21:05'),
(144, '53', 'DPRST00006 (Team Lead)', 'ZOPSCON', 'Warri', '2019-03-05 21:07:18', '2019-03-05 21:07:18'),
(145, '53', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-05 21:08:21', '2019-03-05 21:08:21'),
(146, '53', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-03-09 11:10:15', '2019-03-09 11:10:15'),
(147, '53', 'DPRST00008 (Manager Gas)', 'Team Lead', 'Warri', '2019-03-09 11:24:28', '2019-03-09 11:24:28'),
(148, '5', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-03-09 11:32:59', '2019-03-09 11:32:59'),
(149, '55', 'DPRST00006 (Team Lead)', 'ZOPSCON', 'Warri', '2019-03-09 12:11:44', '2019-03-09 12:11:44'),
(150, '55', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-09 12:11:54', '2019-03-09 12:11:54'),
(151, '55', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-03-09 12:12:32', '2019-03-09 12:12:32'),
(152, '55', 'DPRST00008 (Manager Gas)', 'Team Lead', 'Warri', '2019-03-09 12:13:15', '2019-03-09 12:13:15'),
(153, '55', 'DPRST00006 (Team Lead)', 'Manager Gas', 'Warri', '2019-03-09 22:48:28', '2019-03-09 22:48:28'),
(154, '55', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-09 22:53:49', '2019-03-09 22:53:49'),
(155, '55', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-03-09 22:59:46', '2019-03-09 22:59:46'),
(156, '55', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-09 22:59:58', '2019-03-09 22:59:58'),
(157, '56', 'DPRST00006 (Team Lead)', 'ZOPSCON', 'Warri', '2019-03-17 10:41:36', '2019-03-17 10:41:36'),
(158, '56', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-17 10:41:47', '2019-03-17 10:41:47'),
(159, '56', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-03-17 10:42:47', '2019-03-17 10:42:47'),
(160, '56', 'DPRST00008 (Manager Gas)', 'Team Lead', 'Warri', '2019-03-17 10:43:21', '2019-03-17 10:43:21'),
(161, '56', 'DPRST00006 (Team Lead)', 'Manager Gas', 'Warri', '2019-03-17 10:44:44', '2019-03-17 10:44:44'),
(162, '56', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-17 10:44:54', '2019-03-17 10:44:54'),
(163, '57', 'DPRST00006 (Team Lead)', 'ZOPSCON', 'Warri', '2019-03-17 10:57:45', '2019-03-17 10:57:45'),
(164, '57', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-17 10:58:04', '2019-03-17 10:58:04'),
(165, '58', 'DPRST00006 (Team Lead)', 'ZOPSCON', 'Warri', '2019-03-17 11:00:58', '2019-03-17 11:00:58'),
(166, '58', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-18 13:26:40', '2019-03-18 13:26:40'),
(167, '58', 'DPRST00006 (Team Lead)', 'Staff', 'Warri', '2019-03-18 13:28:03', '2019-03-18 13:28:03'),
(168, '58', 'DPRST00007 (Staff)', 'Team Lead', 'Warri', '2019-03-18 13:28:53', '2019-03-18 13:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `pressure_test_licenses`
--

CREATE TABLE `pressure_test_licenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pressure_test_licenses`
--

INSERT INTO `pressure_test_licenses` (`id`, `application_id`, `company_id`, `staff_id`, `license_url`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00029', 'DPRCOMP00004', 'DPRST00007', 'Chef-Petrus.jpg', '2019-03-05 20:41:59', '2019-03-05 20:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `pressure_test_records`
--

CREATE TABLE `pressure_test_records` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atc_application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipment_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacture_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commission_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `design_pressure` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test_pressure` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_tested` datetime DEFAULT NULL,
  `due_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pressure_test_records`
--

INSERT INTO `pressure_test_records` (`id`, `application_id`, `atc_application_id`, `marketer_id`, `company_name`, `equipment_name`, `facility_name`, `test_type`, `tag_number`, `manufacture_year`, `commission_year`, `design_pressure`, `test_pressure`, `date_last_tested`, `due_date`, `application_letter_location_url`, `license_url`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00019', 'DPRAPPLICATION00017', 'DPRMKT00008', 'DPRCOMP00003', 'ages gas tank 3', 'ages gas', 'Hydro Testing', '234', '1985', '1987', '28', '32', '2014-07-24 00:00:00', '2017-01-24', NULL, 'mastaace.jpg', '2019-02-05 00:36:26', '2019-02-05 00:36:26'),
(5, 'DPRAPPLICATION00029', 'DPRAPPLICATION00027', 'DPRMKT00008', 'DPRCOMP00004', 'vans hynet', 'vans', 'Hydro Testing', '341', '1999', '2000', '67', NULL, '2019-03-01 00:00:00', '2021-09-01', '71368f00818fb2bc25c19eab1b2ea63c.png', 'Chef-Petrus.jpg', '2019-03-03 19:48:38', '2019-03-05 23:54:04'),
(6, 'DPRAPPLICATION00033', 'DPRAPPLICATION00032', 'DPRMKT00008', 'DPRCOMP00003', 'aleosoothe', 'aloesoothe', 'Hydro Testing', '543', '2001', '2003', '56', NULL, '2019-03-17 00:00:00', '2024-03-17', 'bananaville_by_kerbyrosanes-d8kuj6v.jpg', 'codeaddict.jpg', '2019-03-17 10:57:20', '2019-03-17 11:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `renewed_lto_licenses`
--

CREATE TABLE `renewed_lto_licenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `comp_license_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previous_date_issued` datetime DEFAULT NULL,
  `previous_expiry_date` datetime DEFAULT NULL,
  `current_date_issued` datetime DEFAULT NULL,
  `current_expiry_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report_documents`
--

CREATE TABLE `report_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_inspection` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_documents`
--

INSERT INTO `report_documents` (`id`, `application_id`, `staff_id`, `company_id`, `report_url`, `report_type`, `office`, `date_of_inspection`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00002', 'DPRST00007', 'DPRCOMP00001', 'artistic-1920x1080-colors-4k-5k-18393.jpg', NULL, NULL, NULL, '2018-12-12 10:43:15', '2018-12-12 10:43:15'),
(2, 'DPRAPPLICATION00003', 'DPRST00007', 'DPRCOMP00001', 'red-dead-redemption-2-1920x1080-screenshot-4k-20466.jpg', NULL, NULL, NULL, '2018-12-13 19:47:52', '2018-12-19 13:31:07'),
(3, 'DPRAPPLICATION00004', 'DPRST00007', 'DPRCOMP00002', 'dying-light-bad-blood-1920x1080-gamescom-2018-screenshot-4k-20059.jpg', NULL, NULL, NULL, '2018-12-23 13:23:13', '2018-12-23 13:23:13'),
(4, 'DPRAPPLICATION00006', 'DPRST00007', 'DPRCOMP00003', 'Free-Gym-Fitness-Flyer-Design-Template.jpg', NULL, NULL, NULL, '2019-01-19 21:39:53', '2019-01-19 21:39:53'),
(5, 'DPRAPPLICATION00010', 'DPRST00007', 'DPRCOMP00004', 'AFROX.docx', NULL, NULL, NULL, '2019-02-03 05:29:27', '2019-02-03 05:47:04'),
(6, 'DPRAPPLICATION00012', 'DPRST00007', 'DPRCOMP00004', 'assassins-creed-odyssey-mercenary-entry.jpg', NULL, NULL, NULL, '2019-02-03 13:11:36', '2019-02-03 13:11:36'),
(7, 'DPRAPPLICATION00013', 'DPRST00007', 'DPRCOMP00004', 'fc-barcelona-415.jpg', NULL, NULL, NULL, '2019-02-03 20:44:34', '2019-02-03 20:44:34'),
(8, 'DPRAPPLICATION00015', 'DPRST00007', 'DPRCOMP00003', 'wallpaper_1846027371.jpg', NULL, NULL, NULL, '2019-02-04 19:36:40', '2019-02-04 19:47:52'),
(9, 'DPRAPPLICATION00016', 'DPRST00007', 'DPRCOMP00003', 'angry_birds_movie-HD.jpg', NULL, NULL, NULL, '2019-02-04 20:34:49', '2019-02-04 20:34:49'),
(10, 'DPRAPPLICATION00017', 'DPRST00007', 'DPRCOMP00003', 'World-Cup-Brazil.jpg', NULL, NULL, NULL, '2019-02-04 22:47:14', '2019-02-04 22:47:14'),
(11, 'DPRAPPLICATION00018', 'DPRST00007', 'DPRCOMP00003', 'wallpaper_1669067612.jpg', NULL, NULL, NULL, '2019-02-04 23:34:50', '2019-02-04 23:34:50'),
(12, 'DPRAPPLICATION00020', 'DPRST00007', 'DPRCOMP00001', 'wallpaper_1835610822.jpg', NULL, NULL, NULL, '2019-02-05 13:03:01', '2019-02-05 13:03:01'),
(13, 'DPRAPPLICATION00011', 'DPRST00007', 'DPRCOMP00003', 'GOT645218642.jpg', NULL, NULL, NULL, '2019-02-05 18:31:41', '2019-02-05 18:31:41'),
(14, 'DPRAPPLICATION00021', 'DPRST00007', 'DPRCOMP00003', 'IMG_24450772169197.jpeg', 'Site Suitability Inspection Report', 'Warri', '2019-02-08 00:00:00', '2019-02-06 22:10:49', '2019-02-06 22:10:49'),
(15, 'DPRAPPLICATION00023', 'DPRST00007', 'DPRCOMP00003', 'IMG_467821698520.jpeg', 'Final Report', 'Warri', '2019-02-13 00:00:00', '2019-02-11 10:39:24', '2019-02-11 10:39:24'),
(16, 'DPRAPPLICATION00024', 'DPRST00007', 'DPRCOMP00004', '3d_bars-wide.jpg', 'Pre-ATC Report', 'Warri', '2019-02-08 00:00:00', '2019-02-11 21:44:13', '2019-02-11 21:44:13'),
(17, 'DPRAPPLICATION00025', 'DPRST00007', 'DPRCOMP00004', 'GOT378450085.jpg', 'Final Report', 'Warri', '2019-02-12 00:00:00', '2019-02-12 17:39:53', '2019-02-12 17:39:53'),
(18, 'DPRAPPLICATION00026', 'DPRST00007', 'DPRCOMP00004', 'GOT450351003.jpg', 'Final Report', 'Warri', '2019-02-12 00:00:00', '2019-02-13 18:22:34', '2019-02-13 18:22:34'),
(19, 'DPRAPPLICATION00027', 'DPRST00007', 'DPRCOMP00004', '997d-Parking-Residential-On-street.jpg', 'Pre-ATC Report', 'Warri', '2019-03-21 00:00:00', '2019-03-02 19:03:00', '2019-03-02 19:03:00'),
(20, 'DPRAPPLICATION00028', 'DPRST00007', 'DPRCOMP00003', '24bc9291c689d1e92247ada8689c85e7.jpg', 'Final Report', 'Warri', '2019-03-02 00:00:00', '2019-03-03 06:47:30', '2019-03-03 06:47:30'),
(21, 'DPRAPPLICATION00029', 'DPRST00007', 'DPRCOMP00004', 'codeaddict.jpg', 'Pressure Test Report', 'Warri', '2019-03-02 00:00:00', '2019-03-03 20:21:54', '2019-03-03 20:21:54'),
(22, 'DPRAPPLICATION00030', 'DPRST00007', 'DPRCOMP00004', 'assassins-creed-odyssey-sparta_1535009259027.jpg', 'Final Report', 'Warri', '2019-03-01 00:00:00', '2019-03-06 00:03:34', '2019-03-06 00:03:34'),
(23, 'DPRAPPLICATION00005', 'DPRST00007', 'DPRCOMP00003', 'children-542104_960_720.jpg', 'Site Suitability Inspection Report', 'Warri', '2019-03-01 00:00:00', '2019-03-09 11:32:07', '2019-03-09 11:32:07'),
(24, 'DPRAPPLICATION00031', 'DPRST00007', 'DPRCOMP00003', 'Delta-mall-pm-1.jpg', 'Pre-ATC Report', 'Warri', '2019-03-02 00:00:00', '2019-03-09 12:12:15', '2019-03-09 12:12:15'),
(25, 'DPRAPPLICATION00031', 'DPRST00007', 'DPRCOMP00003', 'Law-Firm-Flyer-Design.jpg', 'Implementation Schedule Report', 'Warri', '2019-03-07 00:00:00', '2019-03-10 06:58:01', '2019-03-10 06:58:01'),
(26, 'DPRAPPLICATION00032', 'DPRST00007', 'DPRCOMP00003', 'Delta-mall-pm-2.jpg', 'Pre-ATC Report', 'Warri', '2019-03-17 00:00:00', '2019-03-17 10:42:34', '2019-03-17 10:42:34'),
(27, 'DPRAPPLICATION00032', 'DPRST00007', 'DPRCOMP00003', 'Delta-mall-pm-4.jpg', 'Implementation Schedule Report', 'Warri', '2019-03-17 00:00:00', '2019-03-17 10:45:34', '2019-03-17 10:45:34'),
(28, 'DPRAPPLICATION00033', 'DPRST00007', 'DPRCOMP00003', 'Delta-mall-pm-3.jpg', 'Pressure Test Report', 'Warri', '2019-03-17 00:00:00', '2019-03-17 10:58:37', '2019-03-17 10:58:37'),
(29, 'DPRAPPLICATION00034', 'DPRST00007', 'DPRCOMP00003', 'Delta-mall-pm-1.jpg', 'Final Report', 'Warri', '2019-03-08 00:00:00', '2019-03-18 13:27:55', '2019-03-18 13:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `site_suitability_inspection_documents`
--

CREATE TABLE `site_suitability_inspection_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applications_letter_for_suitability_inspection` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_and_memorandum_of_association` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_tax_clearance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_of_incorporation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fire_certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_report` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed_application_form` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved_building_plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `survey_plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deed_of_conveyance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `piping_and_instrumentation_diagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `environmental_impact_accessment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankdraft_of_statutory_fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letter_confirmation_ministry_of_lands_and_survey` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codes_and_standard_adopted_in_the_tank_design` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_letter_addressed_to_the_controller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applications_letter_for_suitability_inspection_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_and_memorandum_of_association_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_tax_clearance_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_of_incorporation_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_certificate_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `police_report_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_building_plan_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `survey_plan_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deed_of_conveyance_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piping_and_instrumentation_diagram_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `environmental_impact_accessment_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_confirmation_ministry_of_lands_and_survey_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codes_and_standard_adopted_in_the_tank_design_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_addressed_to_the_controller_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applications_letter_for_suitability_inspection_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_and_memorandum_of_association_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_tax_clearance_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_of_incorporation_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fire_certificate_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `police_report_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_building_plan_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `survey_plan_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deed_of_conveyance_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piping_and_instrumentation_diagram_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `environmental_impact_accessment_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_confirmation_ministry_of_lands_and_survey_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codes_and_standard_adopted_in_the_tank_design_location_check` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_suitability_inspection_documents`
--

INSERT INTO `site_suitability_inspection_documents` (`id`, `application_id`, `marketer_id`, `company_id`, `applications_letter_for_suitability_inspection`, `article_and_memorandum_of_association`, `current_tax_clearance`, `certificate_of_incorporation`, `fire_certificate`, `police_report`, `completed_application_form`, `approved_building_plan`, `survey_plan`, `deed_of_conveyance`, `piping_and_instrumentation_diagram`, `environmental_impact_accessment`, `bankdraft_of_statutory_fees`, `letter_confirmation_ministry_of_lands_and_survey`, `codes_and_standard_adopted_in_the_tank_design`, `application_letter_addressed_to_the_controller`, `applications_letter_for_suitability_inspection_location_url`, `article_and_memorandum_of_association_location_url`, `current_tax_clearance_location_url`, `certificate_of_incorporation_location_url`, `fire_certificate_location_url`, `police_report_location_url`, `completed_application_form_location_url`, `approved_building_plan_location_url`, `survey_plan_location_url`, `deed_of_conveyance_location_url`, `piping_and_instrumentation_diagram_location_url`, `environmental_impact_accessment_location_url`, `bankdraft_of_statutory_fees_location_url`, `letter_confirmation_ministry_of_lands_and_survey_location_url`, `codes_and_standard_adopted_in_the_tank_design_location_url`, `application_letter_addressed_to_the_controller_location_url`, `applications_letter_for_suitability_inspection_location_check`, `article_and_memorandum_of_association_location_check`, `current_tax_clearance_location_check`, `certificate_of_incorporation_location_check`, `fire_certificate_location_check`, `police_report_location_check`, `completed_application_form_location_check`, `approved_building_plan_location_check`, `survey_plan_location_check`, `deed_of_conveyance_location_check`, `piping_and_instrumentation_diagram_location_check`, `environmental_impact_accessment_location_check`, `bankdraft_of_statutory_fees_location_check`, `letter_confirmation_ministry_of_lands_and_survey_location_check`, `codes_and_standard_adopted_in_the_tank_design_location_check`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00002', 'DPRMKT00008', 'DPRCOMP00001', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-09 22:24:02', '2018-12-12 10:23:15'),
(2, 'DPRAPPLICATION00004', 'DPRMKT00008', 'DPRCOMP00002', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-23 12:58:04', '2018-12-23 13:06:17'),
(3, 'DPRAPPLICATION00005', 'DPRMKT00008', NULL, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'true', 'true', 'true', 'true', NULL, NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-18 21:23:33', '2019-03-03 06:55:17'),
(4, 'DPRAPPLICATION00006', 'DPRMKT00008', NULL, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-18 23:44:39', '2019-01-18 23:44:39'),
(5, 'DPRAPPLICATION00007', 'DPRMKT00008', NULL, 'null', 'null', 'null', 'null', 'yes', 'yes', 'yes', 'null', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'p033drkl.jpg', 'romelu-lukaku436yrdhf.jpg', 'messigooldenboot.jpg', 'null', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-20 00:24:54', '2019-01-20 00:24:54'),
(6, 'DPRAPPLICATION00009', 'DPRMKT00008', NULL, 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'Philippe-Coutinho-Barcelonaree3r.jpg', 'null', 'null', 'null', 'null', 'null', 'Justice-Walter-Onnoghen2.jpg', 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-29 19:19:27', '2019-01-29 19:19:27'),
(7, 'DPRAPPLICATION00010', 'DPRMKT00008', NULL, 'yes', 'yes', 'yes', 'yes', 'null', 'null', 'no', 'null', 'yes', 'no', 'yes', 'yes', 'null', 'null', 'yes', 'yes', 'null', 'GOT611048365.jpg', 'GOT614742449.jpg', 'GOT641524558.jpg', 'null', 'null', 'null', 'null', 'GOT645218642.jpg', 'null', 'null', 'null', 'null', 'null', 'wallpaper_1043666544.jpg', 'wallpaper_1831390870.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-01 12:41:23', '2019-02-01 12:41:23'),
(8, 'DPRAPPLICATION00011', 'DPRMKT00008', NULL, 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'true', 'false', 'false', 'false', 'true', 'true', 'true', 'false', NULL, '2019-02-02 17:24:21', '2019-02-06 19:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `site_suitability_reports`
--

CREATE TABLE `site_suitability_reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `report_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_suitability_reports`
--

INSERT INTO `site_suitability_reports` (`id`, `application_id`, `staff_id`, `company_id`, `marketer_id`, `report_location`, `created_at`, `updated_at`) VALUES
(1, 'DPRAPPLICATION00002', 'DPRST00007', 'DPRCOMP00001', 'DPRMKT00008', 'artistic-1920x1080-colors-4k-5k-18393.jpg', '2018-12-13 18:32:37', '2018-12-13 18:32:37'),
(3, 'DPRAPPLICATION00004', 'DPRST00007', 'DPRCOMP00002', 'DPRMKT00008', 'dying-light-bad-blood-1920x1080-gamescom-2018-screenshot-4k-20059.jpg', '2018-12-24 20:57:59', '2018-12-24 20:57:59'),
(4, 'DPRAPPLICATION00006', 'DPRST00007', 'DPRCOMP00003', 'DPRMKT00008', 'Free-Gym-Fitness-Flyer-Design-Template.jpg', '2019-01-25 18:05:45', '2019-01-25 18:05:45'),
(5, 'DPRAPPLICATION00006', 'DPRST00007', 'DPRCOMP00003', 'DPRMKT00008', 'Free-Gym-Fitness-Flyer-Design-Template.jpg', '2019-01-25 18:28:10', '2019-01-25 18:28:10'),
(6, 'DPRAPPLICATION00010', 'DPRST00007', 'DPRCOMP00004', 'DPRMKT00008', 'AFROX.docx', '2019-02-03 08:11:09', '2019-02-03 08:11:09'),
(7, 'DPRAPPLICATION00011', 'DPRST00007', 'DPRCOMP00003', 'DPRMKT00008', 'GOT645218642.jpg', '2019-02-06 19:14:25', '2019-02-06 19:14:25'),
(8, 'DPRAPPLICATION00005', 'DPRST00007', 'DPRCOMP00003', 'DPRMKT00008', 'children-542104_960_720.jpg', '2019-03-09 11:33:15', '2019-03-09 11:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_id`, `username`, `first_name`, `middle_name`, `surname`, `mobile_number`, `email_address`, `password`, `role`, `office`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'DPRST00002', 'sagay.i.b.dpr.gov.ng', 'itse', 'blessing', 'sagay', '1234567890', 'codeplay.erniie@gmail.com', '$2y$10$XhXE4FH6T7J72OoUpN5qf.P9x0WE3UxvCaKu58vfDlW8LL0DnAFVi', 'Admin', 'Warri', 'ajpGbmKTgpV5BbmVG2TOKEtcxtJDmnuicTe14qXaOs4tjj5LdnC56GenRmhC', '2018-12-09 21:41:42', '2018-12-09 21:41:42'),
(3, 'DPRST00003', 'obi.m.m.dpr.gov.ng', 'mark', 'mikel', 'obi', '1234567890', 'obi@mark.com', '$2y$10$m0ZjFFtd6gtM7EyuLm5pD.l12hjf45JDpg6csT/UqqyzvLhMhGdo2', 'ZOPSCON', 'HQ', '8VGZvWbbsVjxY9lLeARS6Kh8pH3ScisXOVp8JVtP75W5K6UIAcIoSClyGFly', '2018-12-09 21:46:05', '2018-12-09 21:46:05'),
(4, 'DPRST00004', 'plumber.j.f.dpr.gov.ng', 'joe', 'farah', 'plumber', '1234567890', 'joe@plumber.com', '$2y$10$1Be1kXm1nZfpv3G8lt0sLeCBNGY/xST0d2UuFyhKKpnRR3FYUCa7i', 'ADO', 'Warri', '2Vf1XWxUSd2jDRhaWkAvjouiIMMRgHTSx65GDWm2CWsMjsajiD05bCWlmkdQ', '2018-12-09 21:46:50', '2018-12-09 21:46:50'),
(5, 'DPRST00005', 'manny.s.a.dpr.gov.ng', 'sarah', 'ani', 'manny', '1234567890', 'sarah@manny.com', '$2y$10$f7OHcths/HfgNIqrcUqvrOZ4RZBArw03Dlyp3tEeRxTCfBJN6RDXi', 'Head Gas M&G Lagos', 'Warri', '5ABdAXajdJlo2PcCJUM8QIhuK1A4GK0qT2rMpfkDss7W5TLjXn3nxTqbyCFe', '2018-12-09 21:50:10', '2018-12-09 21:50:10'),
(6, 'DPRST00006', 'durant.b.j.dpr.gov.ng', 'bob', 'john', 'durant', '1234567890', 'bob@durant.com', '$2y$10$UJmdqYdHygWPmQthX1hxZ.0BAKnB4xk79prDB1s.9hxVA6rrdMXMe', 'Team Lead', 'Warri', 'XtAOzznxpvCSg3eOrZDQORVJvsn6yhg03iIn9GKEyBr9ylce1fchjwBlZOnt', '2018-12-09 21:50:44', '2018-12-09 21:50:44'),
(7, 'DPRST00007', 'isha.m.g.dpr.gov.ng', 'mosay', 'godwin', 'isha', '1234567890', 'mosay@isha.com', '$2y$10$YLTWQWDWBNP4t8lSjzsgTO0wRr3xppwsRqU.0O.10T871x5X0Pm4W', 'Staff', 'Warri', '0Ald6Ft3IcU4eknjhPL06QGXYy1ChbnaoIpzZwgZTGZ4G35cdTYjz6mxJ6RC', '2018-12-09 21:51:29', '2018-12-09 21:51:29'),
(8, 'DPRMKT00008', 'spiro.j.m.dpr.gov.ng', 'jerry', 'matt', 'spiro', '1234567890', 'jerry@spiro.com', '$2y$10$Eup1lMF51KvuxiflKgZ1OuoZryKw1zfwGWJFioegHp63m.dpLyFPK', 'Marketer', 'Marketer', 'gPhhlumUlGzkVvG2yvEFN2yth6xZQnynysuMHePCpQhjxVTlmulrfODgGS3n', '2018-12-09 21:52:29', '2018-12-09 21:52:29'),
(9, 'DPRST00008', 'sapele.u.e.dpr.gov.ng', 'udu', 'eff', 'sapele', '2136453468759', 'udu@yahoo.com', '$2y$10$6kwVPRtm5H047Ib/iCrVau.YetVhQP4iZ9rtc2gXvKnIxN.jP4CL.', 'Manager Gas', 'Warri', 'MPm2Fw5wSiMN95wwvsiTHeiLr8RIN9GJ54cmcrnwNxfhY5Xo9DcP25Qy9RFl', '2019-01-29 14:42:47', '2019-01-29 14:42:47'),
(10, 'DPRST00009', 'nunez.j.s.dpr.gov.ng', 'jorge', 'salcedo', 'nunez', '35434756865865', 'jorg@yahoo.com', '$2y$10$2teQWdZbcyVIwARmhzoyIuSLNXvEpNP6NKy2D3cYEv3GEUi85ktwi', 'ZOPSCON', 'Warri', 'qffTofTHXcV986Cxxp5UuXyCGwUwEvWrpMJuQoMBXmIlPTbv1kTepfHJ9HdA', '2019-01-29 18:01:11', '2019-01-29 18:01:11'),
(11, 'DPRST00010', 'Mene.J.T.dpr.gov.ng', 'Jackson', 'Tosan', 'Mene', '2132463574685', 'Jatosan@gmail.com', '$2y$10$f18m87hW.U5R0pmf2HUiuel/8F53wK5i8P4L4CBEyRSPYwqQkaKmK', 'Team Lead', 'HQ', 'V6q8tjpuFH01I5BvbKfYjHYTQhYlbmW4l5xyHst0Ayyq8yYpxec6qYRcO993', '2019-01-31 08:48:23', '2019-01-31 08:48:23'),
(12, 'DPRST00011', 'Chibuzor.E.R.dpr.gov.ng', 'Emeka', 'Ronald', 'Chibuzor', '134635742631', 'emeks@yahoo.com', '$2y$10$G3Jf.nFxXOeaII5.cKVV9eIF94LwCzhInBRfimsrYdt3JmuvfLPpi', 'Head Gas M&G Lagos', 'HQ', 'f23VlPedhhJuvCJSKgYvo4tTgxILzbKRxpQaqtPYRhBJ9JEyzRrbsD5QbLnh', '2019-02-05 11:52:07', '2019-02-05 11:52:07'),
(13, 'DPRST00012', 'Pena.J.O.dpr.gov.ng', 'John', 'Onoriode', 'Pena', '089799768798', 'Jonny@gmail.com', '$2y$10$IlodOzjrkS2HDysMG8pcrufrS3oRkGKm/io.Op4Pf2jA0XcainZ5q', 'Manager Gas', 'HQ', '95yWxH99kMeOf6Y1gYPUto9oTtSeZjrh2SJMjpJjrx5nH9fAYKOaZwf0aGBb', '2019-02-05 11:59:30', '2019-02-05 11:59:30'),
(14, 'DPRST00013', 'Aregbeshola.O.R.dpr.gov.ng', 'Olukolade', 'Richard', 'Aregbeshola', '7860493635', 'kola@gmail.com', '$2y$10$0x/Hsd35M4aEUgajtavNfudHH9E1je7oKkAc4lxJMXPx2lTJYyyWm', 'ADO', 'HQ', 'AiaQ43SDmJKWEjo2ibspi2tuhYoqtO0brysLzZq8UNkvpLNgHAzT9oT6EfLB', '2019-02-05 12:01:27', '2019-02-05 12:01:27'),
(15, 'DPRST00014', 'Olasanya.A.B.dpr.gov.ng', 'Ayoola', 'Ben', 'Olasanya', '0902563423624', 'ayben@yahoo.com', '$2y$10$4FMJ7llThc16402AbAC6qOPC6zK6LpAUIb/XpLluIguPPUmyZb1Wa', 'Staff', 'HQ', 'lvwyfHQlWGYKxB74twoe1t57DeJot6MwLtioPh10cBiLUw6YKC6i96H1srr6', '2019-02-05 12:04:29', '2019-02-05 12:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `staff_inboxes`
--

CREATE TABLE `staff_inboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `to_outbox` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_inboxes`
--

INSERT INTO `staff_inboxes` (`id`, `application_id`, `from`, `application_type`, `sub_category`, `read`, `to_outbox`, `created_at`, `updated_at`) VALUES
(1, '2', 'DPRST00006', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2018-12-12 10:15:10', '2019-01-31 04:17:52'),
(2, '3', 'DPRST00006', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-13 19:41:48', '2019-01-31 04:24:00'),
(3, '3', 'DPRST00006', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-19 13:25:55', '2019-01-31 04:24:00'),
(4, '3', 'DPRST00006', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-19 14:23:21', '2019-01-31 04:24:00'),
(5, '4', 'DPRST00006', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2018-12-23 13:00:45', '2019-01-25 19:30:58'),
(6, '6', 'DPRST00006', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2019-01-19 21:35:04', '2019-01-26 15:31:37'),
(7, '7', 'DPRST00006', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'false', '2019-01-20 00:27:26', '2019-01-31 05:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `staff_outboxes`
--

CREATE TABLE `staff_outboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_outboxes`
--

INSERT INTO `staff_outboxes` (`id`, `application_id`, `to`, `role`, `application_type`, `sub_category`, `created_at`, `updated_at`) VALUES
(1, '2', 'DPRST00007', 'Staff', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2018-12-13 18:16:03', '2018-12-13 18:16:03'),
(2, '3', 'DPRST00007', 'Staff', 'LPG Retailer Outlets', 'ATC', '2018-12-13 19:50:28', '2018-12-13 19:50:28'),
(3, '3', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'ATC', '2018-12-13 20:04:08', '2018-12-13 20:04:08'),
(4, '3', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'ATC', '2018-12-19 13:37:15', '2018-12-19 13:37:15'),
(5, '3', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'ATC', '2018-12-19 14:24:07', '2018-12-19 14:24:07'),
(6, '4', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2018-12-23 13:23:41', '2018-12-23 13:23:41'),
(8, '4', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2018-12-24 20:57:48', '2018-12-24 20:57:48'),
(9, '6', 'DPRST00006', 'Team Lead', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2019-01-25 18:03:55', '2019-01-25 18:03:55');

-- --------------------------------------------------------

--
-- Table structure for table `takeover_inspection_documents`
--

CREATE TABLE `takeover_inspection_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_and_memorandum_of_association` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_of_incorporation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight_measures_verification_certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_pressure_test_certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appropriate_plant_photography` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed_application_form` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bankdraft_of_statutory_fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modification_plant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_tax_clearance_certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_fire_report_certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_license_of_plant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letter_of_release` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_report_certificate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved_building_plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `environment_evaluation_report` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_letter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_and_memorandum_of_association_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_of_incorporation_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_measures_verification_certificate_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_pressure_test_certificate_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appropriate_plant_photography_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modification_plant_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_tax_clearance_certificate_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_fire_report_certificate_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_license_of_plant_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_of_release_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `police_report_certificate_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_building_plan_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `environment_evaluation_report_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_location_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_and_memorandum_of_association_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_of_incorporation_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_measures_verification_certificate_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_pressure_test_certificate_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appropriate_plant_photography_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_application_form_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankdraft_of_statutory_fees_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modification_plant_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_tax_clearance_certificate_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_fire_report_certificate_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `original_license_of_plant_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `letter_of_release_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `police_report_certificate_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_building_plan_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `environment_evaluation_report_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_letter_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `takeover_reviews`
--

CREATE TABLE `takeover_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_name_of_gas_plant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lpg_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_lto_issue_date` datetime DEFAULT NULL,
  `expiry_date_of_lto` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teamlead_inboxes`
--

CREATE TABLE `teamlead_inboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `to_outbox` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teamlead_inboxes`
--

INSERT INTO `teamlead_inboxes` (`id`, `application_id`, `from`, `application_type`, `sub_category`, `read`, `to_outbox`, `created_at`, `updated_at`) VALUES
(1, '2', 'DPRST00005', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2018-12-12 10:14:56', '2018-12-13 19:41:32'),
(3, '3', 'DPRST00005', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-13 19:41:15', '2018-12-25 20:26:35'),
(5, '3', 'DPRST00007', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-13 20:04:08', '2018-12-25 20:26:35'),
(6, '3', 'DPRST00007', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-19 13:37:15', '2018-12-25 20:26:35'),
(7, '3', 'DPRST00007', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-19 14:24:07', '2018-12-25 20:26:35'),
(8, '3', 'DPRST00005', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-20 16:06:01', '2018-12-25 20:26:35'),
(9, '3', 'DPRST00005', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-20 16:07:25', '2018-12-25 20:26:35'),
(10, '4', 'DPRST00005', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2018-12-23 12:59:13', '2018-12-25 20:32:05'),
(11, '4', 'DPRST00007', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2018-12-23 13:23:41', '2018-12-25 20:32:05'),
(13, '4', 'DPRST00007', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2018-12-24 20:57:48', '2018-12-25 20:32:05'),
(14, '6', 'DPRST00005', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2019-01-19 21:33:00', '2019-02-02 19:11:18'),
(15, '7', 'DPRST00005', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2019-01-20 00:26:36', '2019-01-21 20:39:28'),
(16, '6', 'DPRST00007', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'false', '2019-01-25 18:03:55', '2019-02-02 19:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `teamlead_outboxes`
--

CREATE TABLE `teamlead_outboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teamlead_outboxes`
--

INSERT INTO `teamlead_outboxes` (`id`, `application_id`, `to`, `role`, `application_type`, `sub_category`, `created_at`, `updated_at`) VALUES
(1, '2', 'DPRST00007', 'Staff', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2018-12-12 10:15:10', '2018-12-12 10:15:10'),
(2, '3', 'DPRST00007', 'Staff', 'LPG Retailer Outlets', 'ATC', '2018-12-13 19:41:48', '2018-12-13 19:41:48'),
(3, '3', 'DPRST00007', 'Staff', 'LPG Retailer Outlets', 'ATC', '2018-12-19 13:25:55', '2018-12-19 13:25:55'),
(4, '3', 'DPRST00007', 'Staff', 'LPG Retailer Outlets', 'ATC', '2018-12-19 14:23:21', '2018-12-19 14:23:21'),
(6, '3', 'DPRST00007', 'Staff', 'LPG Retailer Outlets', 'ATC', '2018-12-19 15:02:13', '2018-12-19 15:02:13'),
(7, '3', 'DPRST00005', 'Head Gas M&G Lagos', 'LPG Retailer Outlets', 'ATC', '2018-12-20 16:06:27', '2018-12-20 16:06:27'),
(8, '3', 'DPRST00005', 'Head Gas M&G Lagos', 'LPG Retailer Outlets', 'ATC', '2018-12-21 07:03:55', '2018-12-21 07:03:55'),
(9, '4', 'DPRST00007', 'Staff', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2018-12-23 13:00:45', '2018-12-23 13:00:45'),
(10, '6', 'DPRST00007', 'Staff', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2019-01-19 21:35:04', '2019-01-19 21:35:04'),
(11, '7', 'DPRST00007', 'Staff', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2019-01-20 00:27:26', '2019-01-20 00:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `zopscon_inboxes`
--

CREATE TABLE `zopscon_inboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `to_outbox` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zopscon_inboxes`
--

INSERT INTO `zopscon_inboxes` (`id`, `application_id`, `from`, `application_type`, `sub_category`, `read`, `to_outbox`, `created_at`, `updated_at`) VALUES
(1, '2', 'DPRMKT00008', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2018-12-09 22:24:16', '2018-12-13 18:33:14'),
(2, '3', 'DPRMKT00008', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-13 19:25:53', '2019-01-25 17:24:48'),
(3, '3', 'DPRST00004', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-21 09:30:32', '2019-01-25 17:24:48'),
(4, '3', 'DPRST00004', 'LPG Retailer Outlets', 'ATC', 'true', 'true', '2018-12-21 13:48:22', '2019-01-25 17:24:48'),
(5, '4', 'DPRMKT00008', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2018-12-23 12:58:10', '2018-12-23 13:24:20'),
(6, '6', 'DPRMKT00008', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2019-01-19 12:37:26', '2019-01-25 22:22:24'),
(7, '7', 'DPRMKT00008', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2019-01-20 00:25:26', '2019-01-30 05:10:34'),
(8, '9', 'DPRMKT00008', 'LPG Retailer Outlets', 'Site Suitability Inspection', 'true', 'true', '2019-01-31 08:16:07', '2019-01-31 08:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `zopscon_outboxes`
--

CREATE TABLE `zopscon_outboxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zopscon_outboxes`
--

INSERT INTO `zopscon_outboxes` (`id`, `application_id`, `to`, `role`, `application_type`, `sub_category`, `created_at`, `updated_at`) VALUES
(1, '2', 'DPRST00004', 'ADO', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2018-12-09 22:26:13', '2018-12-09 22:26:13'),
(2, '3', 'DPRST00004', 'ADO', 'LPG Retailer Outlets', 'ATC', '2018-12-13 19:29:07', '2018-12-13 19:29:07'),
(3, '3', 'DPRST00004', 'ADO', 'LPG Retailer Outlets', 'ATC', '2018-12-21 13:48:02', '2018-12-21 13:48:02'),
(4, '4', 'DPRST00004', 'ADO', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2018-12-23 12:58:44', '2018-12-23 12:58:44'),
(5, '6', 'DPRST00004', 'ADO', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2019-01-19 21:28:23', '2019-01-19 21:28:23'),
(6, '7', 'DPRST00004', 'ADO', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2019-01-20 00:26:09', '2019-01-20 00:26:09'),
(7, '9', 'DPRST00004', 'ADO', 'LPG Retailer Outlets', 'Site Suitability Inspection', '2019-01-31 08:32:00', '2019-01-31 08:32:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addon_ati_inspection_documents`
--
ALTER TABLE `addon_ati_inspection_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addon_lto_inspection_documents`
--
ALTER TABLE `addon_lto_inspection_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ado_inboxes`
--
ALTER TABLE `ado_inboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ado_outboxes`
--
ALTER TABLE `ado_outboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_comments`
--
ALTER TABLE `application_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_doc_reviews`
--
ALTER TABLE `app_doc_reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `app_doc_reviews_application_id_unique` (`application_id`);

--
-- Indexes for table `atc_inspection_documents`
--
ALTER TABLE `atc_inspection_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catd_lto_application_extentions`
--
ALTER TABLE `catd_lto_application_extentions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catd_lto_inspection_documents`
--
ALTER TABLE `catd_lto_inspection_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_company_id_unique` (`company_id`),
  ADD UNIQUE KEY `companies_email_address_unique` (`email_address`);

--
-- Indexes for table `completed_jobs`
--
ALTER TABLE `completed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headgas_inboxes`
--
ALTER TABLE `headgas_inboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headgas_outboxes`
--
ALTER TABLE `headgas_outboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inboxes`
--
ALTER TABLE `inboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issued_addon_ati_licenses`
--
ALTER TABLE `issued_addon_ati_licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issued_addon_lto_licenses`
--
ALTER TABLE `issued_addon_lto_licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issued_atc_licenses`
--
ALTER TABLE `issued_atc_licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issued_lto_licenses`
--
ALTER TABLE `issued_lto_licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_timelines`
--
ALTER TABLE `jobs_timelines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_assignments`
--
ALTER TABLE `job_assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lto_inspection_documents`
--
ALTER TABLE `lto_inspection_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lto_license_renewals`
--
ALTER TABLE `lto_license_renewals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outboxes`
--
ALTER TABLE `outboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pressure_test_licenses`
--
ALTER TABLE `pressure_test_licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pressure_test_records`
--
ALTER TABLE `pressure_test_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renewed_lto_licenses`
--
ALTER TABLE `renewed_lto_licenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_documents`
--
ALTER TABLE `report_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_suitability_inspection_documents`
--
ALTER TABLE `site_suitability_inspection_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_suitability_reports`
--
ALTER TABLE `site_suitability_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_staff_id_unique` (`staff_id`),
  ADD UNIQUE KEY `staff_email_address_unique` (`email_address`);

--
-- Indexes for table `staff_inboxes`
--
ALTER TABLE `staff_inboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_outboxes`
--
ALTER TABLE `staff_outboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `takeover_inspection_documents`
--
ALTER TABLE `takeover_inspection_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `takeover_reviews`
--
ALTER TABLE `takeover_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamlead_inboxes`
--
ALTER TABLE `teamlead_inboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamlead_outboxes`
--
ALTER TABLE `teamlead_outboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zopscon_inboxes`
--
ALTER TABLE `zopscon_inboxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zopscon_outboxes`
--
ALTER TABLE `zopscon_outboxes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addon_ati_inspection_documents`
--
ALTER TABLE `addon_ati_inspection_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `addon_lto_inspection_documents`
--
ALTER TABLE `addon_lto_inspection_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ado_inboxes`
--
ALTER TABLE `ado_inboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ado_outboxes`
--
ALTER TABLE `ado_outboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `application_comments`
--
ALTER TABLE `application_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `app_doc_reviews`
--
ALTER TABLE `app_doc_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `atc_inspection_documents`
--
ALTER TABLE `atc_inspection_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `catd_lto_application_extentions`
--
ALTER TABLE `catd_lto_application_extentions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `catd_lto_inspection_documents`
--
ALTER TABLE `catd_lto_inspection_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `completed_jobs`
--
ALTER TABLE `completed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `headgas_inboxes`
--
ALTER TABLE `headgas_inboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `headgas_outboxes`
--
ALTER TABLE `headgas_outboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inboxes`
--
ALTER TABLE `inboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `issued_addon_ati_licenses`
--
ALTER TABLE `issued_addon_ati_licenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `issued_addon_lto_licenses`
--
ALTER TABLE `issued_addon_lto_licenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issued_atc_licenses`
--
ALTER TABLE `issued_atc_licenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `issued_lto_licenses`
--
ALTER TABLE `issued_lto_licenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs_timelines`
--
ALTER TABLE `jobs_timelines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `job_assignments`
--
ALTER TABLE `job_assignments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `lto_inspection_documents`
--
ALTER TABLE `lto_inspection_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `lto_license_renewals`
--
ALTER TABLE `lto_license_renewals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `outboxes`
--
ALTER TABLE `outboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `pressure_test_licenses`
--
ALTER TABLE `pressure_test_licenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pressure_test_records`
--
ALTER TABLE `pressure_test_records`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `renewed_lto_licenses`
--
ALTER TABLE `renewed_lto_licenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_documents`
--
ALTER TABLE `report_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `site_suitability_inspection_documents`
--
ALTER TABLE `site_suitability_inspection_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `site_suitability_reports`
--
ALTER TABLE `site_suitability_reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staff_inboxes`
--
ALTER TABLE `staff_inboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff_outboxes`
--
ALTER TABLE `staff_outboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `takeover_inspection_documents`
--
ALTER TABLE `takeover_inspection_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `takeover_reviews`
--
ALTER TABLE `takeover_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teamlead_inboxes`
--
ALTER TABLE `teamlead_inboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teamlead_outboxes`
--
ALTER TABLE `teamlead_outboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `zopscon_inboxes`
--
ALTER TABLE `zopscon_inboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `zopscon_outboxes`
--
ALTER TABLE `zopscon_outboxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
