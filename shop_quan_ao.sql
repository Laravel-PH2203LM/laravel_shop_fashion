-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 05, 2022 lúc 11:20 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_quan_ao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attribute`
--

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `values` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attribute`
--

INSERT INTO `attribute` (`id`, `name`, `values`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Blue', 'color', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(2, 'Red', 'color', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(3, 'Yellow', 'color', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(4, 'Pink', 'color', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(5, 'Black', 'color', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(6, 'S', 'size', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(7, 'M', 'size', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(8, 'L', 'size', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(9, 'XL', 'size', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(10, 'XXL', 'size', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Calvin Klein', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(2, 'CHANEL', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(3, 'LOUIS VUITTON', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(4, 'Tommy Hilfiger', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(5, 'DIOR', 0, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(6, 'HERMÈS', 0, '2022-10-02 14:44:55', '2022-10-02 14:44:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(11) NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_shipping` double NOT NULL,
  `payment_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `full_name`, `address`, `email`, `phone`, `price_shipping`, `payment_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 2, 3, '2022-10-02 15:00:00', '2022-10-03 08:20:12'),
(2, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 3, '2022-10-02 15:00:03', '2022-10-03 08:20:15'),
(3, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 2, 0, '2022-10-02 15:00:18', '2022-10-02 15:00:18'),
(4, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 2, 0, '2022-10-03 07:33:47', '2022-10-03 07:33:47'),
(5, 2, 'Tester 01', '236 Hoàng Quốc Việt,Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan2001@gmail.com', '0930303030', 30000, 2, 0, '2022-10-03 07:50:56', '2022-10-03 07:50:56'),
(6, 2, 'Tester 01', '236 Hoàng Quốc Việt,Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan2001@gmail.com', '0930303030', 30000, 2, 3, '2022-10-03 07:55:25', '2022-10-03 08:20:18'),
(7, 2, 'Tester 01', '236 Hoàng Quốc Việt,Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan2001@gmail.com', '0930303030', 30000, 2, 3, '2022-10-03 07:56:25', '2022-10-03 08:20:28'),
(8, 2, 'Tester 01', '236 Hoàng Quốc Việt,Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan2001@gmail.com', '0930303030', 30000, 2, 3, '2022-10-03 07:59:51', '2022-10-03 08:20:30'),
(9, 2, 'Tester 01', '236 Hoàng Quốc Việt,Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan2001@gmail.com', '0930303030', 30000, 1, 3, '2022-10-03 08:00:32', '2022-10-03 08:20:33'),
(10, 2, 'Tester 01', '236 Hoàng Quốc Việt,Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan2001@gmail.com', '0930303030', 30000, 2, 0, '2022-10-03 08:02:50', '2022-10-03 08:02:50'),
(11, 2, 'Tester 01', '236 Hoàng Quốc Việt,Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan2001@gmail.com', '0930303030', 30000, 1, 3, '2022-10-03 08:05:34', '2022-10-03 08:05:34'),
(12, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 08:48:07', '2022-10-03 08:48:07'),
(13, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 08:50:15', '2022-10-03 08:50:15'),
(14, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 08:51:34', '2022-10-03 08:51:34'),
(15, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 08:54:25', '2022-10-03 08:54:25'),
(16, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 09:09:26', '2022-10-03 09:09:26'),
(17, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 09:16:36', '2022-10-03 09:16:36'),
(18, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 09:18:03', '2022-10-03 09:18:03'),
(19, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 09:27:29', '2022-10-03 09:27:29'),
(20, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 09:28:16', '2022-10-03 09:28:16'),
(21, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 11:13:00', '2022-10-03 11:13:00'),
(22, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 11:13:52', '2022-10-03 11:13:52'),
(23, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 11:14:02', '2022-10-03 11:14:02'),
(24, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 11:26:57', '2022-10-03 11:26:57'),
(25, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 11:27:12', '2022-10-03 11:27:12'),
(26, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 11:36:38', '2022-10-03 11:36:38'),
(27, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 11:37:15', '2022-10-03 11:37:15'),
(28, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 11:38:51', '2022-10-03 11:38:51'),
(29, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 11:39:17', '2022-10-03 11:39:17'),
(30, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 11:39:27', '2022-10-03 11:39:27'),
(31, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 11:41:09', '2022-10-03 11:41:09'),
(32, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 2, 0, '2022-10-03 11:42:19', '2022-10-03 11:42:19'),
(33, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 1, 0, '2022-10-03 11:51:08', '2022-10-03 11:51:08'),
(34, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 2, 0, '2022-10-03 11:52:54', '2022-10-03 11:52:54'),
(35, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 2, 0, '2022-10-03 11:56:23', '2022-10-03 11:56:23'),
(36, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 2, 0, '2022-10-03 11:58:58', '2022-10-03 11:58:58'),
(37, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 2, 0, '2022-10-03 11:59:39', '2022-10-03 11:59:39'),
(38, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 2, 0, '2022-10-03 12:03:54', '2022-10-03 12:03:54'),
(39, 1, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', 'dinhsan200@gmail.com', '0972580430', 30000, 2, 0, '2022-10-03 12:04:12', '2022-10-03 12:04:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `name`, `quantity`, `color_id`, `size_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 'Champion Change The World', 1, 2, 7, 200000, '2022-10-02 15:00:18', '2022-10-02 15:00:18'),
(2, 3, 5, 'No Smile Tee Purple', 1, 1, 7, 250000, '2022-10-02 15:00:18', '2022-10-02 15:00:18'),
(3, 4, 4, 'No Smile Tee Purple', 1, 2, 7, 250000, '2022-10-03 07:33:47', '2022-10-03 07:33:47'),
(4, 5, 4, 'No Smile Tee Purple', 1, 2, 7, 250000, '2022-10-03 07:50:56', '2022-10-03 07:50:56'),
(5, 10, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 08:02:50', '2022-10-03 08:02:50'),
(6, 11, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 08:05:34', '2022-10-03 08:05:34'),
(7, 12, 2, 'Champion Graphic Big Logo T-Shirt', 1, 1, 10, 149000, '2022-10-03 08:48:07', '2022-10-03 08:48:07'),
(8, 13, 2, 'Champion Graphic Big Logo T-Shirt', 1, 1, 10, 149000, '2022-10-03 08:50:15', '2022-10-03 08:50:15'),
(9, 14, 2, 'Champion Graphic Big Logo T-Shirt', 1, 1, 10, 149000, '2022-10-03 08:51:34', '2022-10-03 08:51:34'),
(10, 15, 2, 'Champion Graphic Big Logo T-Shirt', 1, 1, 10, 149000, '2022-10-03 08:54:25', '2022-10-03 08:54:25'),
(11, 16, 2, 'Champion Graphic Big Logo T-Shirt', 1, 1, 10, 149000, '2022-10-03 09:09:26', '2022-10-03 09:09:26'),
(12, 17, 2, 'Champion Graphic Big Logo T-Shirt', 1, 1, 10, 149000, '2022-10-03 09:16:36', '2022-10-03 09:16:36'),
(13, 18, 2, 'Champion Graphic Big Logo T-Shirt', 1, 1, 10, 149000, '2022-10-03 09:18:03', '2022-10-03 09:18:03'),
(14, 19, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 09:27:29', '2022-10-03 09:27:29'),
(15, 20, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 09:28:16', '2022-10-03 09:28:16'),
(16, 21, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:13:00', '2022-10-03 11:13:00'),
(17, 21, 4, 'No Smile Tee Purple', 1, 2, 7, 250000, '2022-10-03 11:13:00', '2022-10-03 11:13:00'),
(18, 22, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:13:52', '2022-10-03 11:13:52'),
(19, 22, 4, 'No Smile Tee Purple', 1, 2, 7, 250000, '2022-10-03 11:13:52', '2022-10-03 11:13:52'),
(20, 23, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:14:02', '2022-10-03 11:14:02'),
(21, 23, 4, 'No Smile Tee Purple', 1, 2, 7, 250000, '2022-10-03 11:14:02', '2022-10-03 11:14:02'),
(22, 24, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:26:57', '2022-10-03 11:26:57'),
(23, 25, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:27:12', '2022-10-03 11:27:12'),
(24, 26, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:36:38', '2022-10-03 11:36:38'),
(25, 27, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:37:15', '2022-10-03 11:37:15'),
(26, 28, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:38:51', '2022-10-03 11:38:51'),
(27, 29, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:39:17', '2022-10-03 11:39:17'),
(28, 30, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:39:27', '2022-10-03 11:39:27'),
(29, 31, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:41:09', '2022-10-03 11:41:09'),
(30, 32, 5, 'No Smile Tee Purple', 1, 1, 7, 50000, '2022-10-03 11:42:19', '2022-10-03 11:42:19'),
(31, 32, 8, 'Microfiber Wool Scarf', 1, 4, 9, 150000, '2022-10-03 11:42:19', '2022-10-03 11:42:19'),
(32, 32, 29, 'No Smile Tee Purple', 1, 2, 3, 350000, '2022-10-03 11:42:19', '2022-10-03 11:42:19'),
(33, 33, 8, 'Microfiber Wool Scarf', 1, 4, 9, 150000, '2022-10-03 11:51:08', '2022-10-03 11:51:08'),
(34, 33, 4, 'No Smile Tee Purple', 1, 1, 6, 250000, '2022-10-03 11:51:08', '2022-10-03 11:51:08'),
(35, 34, 8, 'Microfiber Wool Scarf', 1, 4, 9, 150000, '2022-10-03 11:52:54', '2022-10-03 11:52:54'),
(36, 34, 6, 'No Smile Tee Purple', 1, 1, 8, 50000, '2022-10-03 11:52:54', '2022-10-03 11:52:54'),
(37, 35, 4, 'No Smile Tee Purple', 1, 2, 7, 250000, '2022-10-03 11:56:23', '2022-10-03 11:56:23'),
(38, 35, 8, 'Microfiber Wool Scarf', 1, 4, 9, 150000, '2022-10-03 11:56:23', '2022-10-03 11:56:23'),
(39, 36, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:58:58', '2022-10-03 11:58:58'),
(40, 36, 4, 'No Smile Tee Purple', 1, 2, 7, 250000, '2022-10-03 11:58:58', '2022-10-03 11:58:58'),
(41, 37, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 11:59:39', '2022-10-03 11:59:39'),
(42, 37, 4, 'No Smile Tee Purple', 1, 2, 7, 250000, '2022-10-03 11:59:39', '2022-10-03 11:59:39'),
(43, 38, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 12:03:55', '2022-10-03 12:03:55'),
(44, 38, 4, 'No Smile Tee Purple', 1, 2, 7, 250000, '2022-10-03 12:03:55', '2022-10-03 12:03:55'),
(45, 39, 2, 'Champion Graphic Big Logo T-Shirt', 1, 2, 9, 149000, '2022-10-03 12:04:12', '2022-10-03 12:04:12'),
(46, 39, 4, 'No Smile Tee Purple', 1, 2, 7, 250000, '2022-10-03 12:04:12', '2022-10-03 12:04:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payments`
--

INSERT INTO `payments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Thanh toán khi nhận hàng', '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(2, 'MOMO', '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(3, 'VNPay', '2022-10-02 14:44:55', '2022-10-02 14:44:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `brand_id`, `product_category_id`, `name`, `description`, `content`, `price`, `qty`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'Champion Graphic Big Logo T-Shirt', 'Cổ Tròn Vạt Ngang Tay Ngắn Hình In Trước', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 149000, 100, 0, 0, '2022-10-02 14:44:55', '2022-10-04 09:49:26'),
(3, 1, 1, 'Champion Change The World', 'Cổ Tròn Vạt Ngang Tay Ngắn Hình In Trước', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 200000, 20, 0, 0, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(4, 1, 1, 'No Smile Tee Purple', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình Phía Trước Và Sau', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 250000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(5, 1, 1, 'No Smile Tee', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình Phía Trước Và Sau', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 250000, 20, 50000, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(6, 1, 1, 'Purple', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình Phía Trước Và Sau', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 250000, 20, 50000, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(7, 1, 1, 'No Purple', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình Phía Trước Và Sau', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 250000, 20, 0, 0, '2022-10-02 14:44:55', '2022-10-04 09:50:24'),
(8, 2, 2, 'Microfiber Wool Scarf', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình In Trước', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 150000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(9, 2, 3, 'Shin-chan Tee', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình In Trước', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 200000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(11, 2, 3, 'Converse Shoes', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình In Trước', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 200000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(13, 2, 4, 'Converse', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình In Trước', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 200000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(14, 2, 2, 'Converse Shoes', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình In Trước', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 200000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(15, 2, 4, 'The Sun Tie', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình In Trước', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 200000, 20, 50000, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(16, 2, 3, 'The Sun Tie Dye', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình In Trước', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 200000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(17, 6, 1, 'Tee Purple', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình Phía Trước Và Sau', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 250000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(18, 3, 1, 'Áo Polo nam công nghệ khử mùi Anti-Smell', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình Phía Trước Và Sau', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 250000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(19, 4, 2, 'Áo Thun Dáng Rộng Cổ Tròn Tay Lỡ', 'Áo thun dáng rộng với chất liệu vải bền và kiểu đơn giản.', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 250000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(20, 2, 4, 'Áo Thun Kẻ Sọc Cổ Tròn Dài Tay', 'Áo thun cotton 100% bền đẹp. Kẻ sọc rộng tạo cảm giác giản dị.', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 169000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(21, 1, 3, 'Áo Thun Mềm Cổ Lọ Dài Tay', 'Đã cập nhật lần cuối và xác định kích thước để tạo sự vừa vặn, thoải mái hơn. Chất liệu vải mềm mại khi chạm vào.', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 150000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(22, 1, 4, 'Áo Thun Dry-EX Cổ Tròn Ngắn Tay', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình Phía Trước Và Sau', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 199000, 20, 50000, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(23, 1, 2, 'Áo Thun Dáng Rộng Cổ Tròn Có Túi Tay Lỡ', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình Phía Trước Và Sau', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 220000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(24, 1, 1, 'Dry Áo Thun Cổ V Ngắn Tay Nhiều Màu', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình Phía Trước Và Sau', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 200000, 20, 50000, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(25, 1, 2, 'Áo Thun Dry-Ex Cổ Tròn Ngắn Tay', 'Chiếc áo với chất liệu siêu nhanh khô giúp bạn luôn có cảm giác mát mẻ cho những buổi chơi thể thao hoặc để mặc hằng ngày.', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 249000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(26, 1, 3, 'Áo Thun Dry-EX Cổ Tròn Ngắn Tay', 'Nhanh chóng thấm hút mồ hôi, cho bạn cảm giác thoáng mát và thoải mái. Gấp cổ tay áo để có thể để lộ các sọc màu nổi bật.', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 259000, 5, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(27, 1, 4, 'Áo Thun Gân Cổ Cao Dài Tay', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình Phía Trước Và Sau', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 299000, 0, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(28, 2, 3, 'No Smile Tee Purple', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình Phía Trước Và Sau', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 300000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(29, 3, 1, 'No Smile Tee Purple', 'Cổ Tròn Vạt Ngang Tay Ngắn Vạt Ngang Hình Phía Trước Và Sau', 'Champion được thành lập vào năm 1919 bởi các anh em Feinbloom là thương hiệu thuộc chi nhánh của Hanesbrands Inc. Sau hơn 1 thập kỉ thành lập Champion đã chứng minh rằng mình là một tượng đài của thời trang thế giới với rất nhiều những thành tựu mà thương hiệu này đã đạt được. Thật không quá ngạc nhiên khi Champion chính là nhà cung cấp đồng phục thể thao cho các câu lạc bộ bóng rổ, Học viện Quân Sự Hoa Kỳ và nhiều các trường đại học của Mỹ. Đặc biệt hơn Champion chính là cha đẻ của chiếc áo \"Hoodie\" mà bạn biết nổi tiếng đến tận ngày nay. Không những thế, Champion đã bắt tay và hợp tác với rất nhiều những ông lớn trong ngành thời trang thế giới như: Supreme, Off-White, Bape, ... Đó cũng chính là những bước ngoặt lớn tạo nên sự vững mạnh cho cái tên Champion trong suốt chiều dài lịch sử kéo dài hơn 100 năm của mình ở sân chơi thời trang khốc liệt này. Champion khẳng định rằng : Sẽ có nhiều thương hiệu, nhiều kẽ cạnh tranh, nhưng \" Nhà Vô Địch \" chỉ có một mà thôi.', 350000, 20, 0, 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_attribute`
--

INSERT INTO `product_attribute` (`id`, `product_id`, `color_id`, `size_id`, `created_at`, `updated_at`) VALUES
(3, 2, 2, 9, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(4, 2, 1, 10, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(5, 3, 2, 7, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(6, 3, 1, 8, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(7, 4, 2, 7, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(8, 4, 1, 6, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(9, 5, 1, 7, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(10, 5, 2, 10, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(11, 6, 1, 8, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(12, 6, 1, 7, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(13, 7, 2, 6, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(14, 7, 2, 7, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(15, 8, 4, 9, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(16, 8, 5, 6, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(17, 9, 1, 8, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(18, 9, 2, 10, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(21, 11, 4, 9, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(22, 11, 3, 8, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(25, 13, 1, 10, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(26, 13, 5, 9, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(27, 14, 2, 8, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(28, 14, 2, 9, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(29, 15, 4, 10, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(30, 15, 3, 8, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(31, 16, 4, 9, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(32, 16, 4, 7, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(33, 17, 1, 8, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(34, 17, 2, 9, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(35, 18, 4, 8, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(36, 19, 1, 9, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(37, 20, 4, 6, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(38, 21, 3, 7, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(39, 22, 4, 10, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(40, 23, 1, 8, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(41, 24, 3, 9, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(42, 25, 2, 10, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(43, 26, 1, 9, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(44, 27, 3, 6, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(45, 28, 2, 9, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(46, 29, 2, 3, '2022-10-02 14:44:55', '2022-10-02 14:44:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nam', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(2, 'Nữ', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(3, 'Trẻ em', 0, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(4, 'Trẻ sơ sinh', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `status`, `created_at`, `updated_at`) VALUES
(5, 2, 'T2106.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(6, 2, 'T2109.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(7, 2, 'T2119.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(8, 2, 'T2128.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(9, 3, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(10, 3, 'T2129.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(11, 3, 'T2130.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(12, 3, 'T2131.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(13, 4, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(14, 4, 'T2130.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(15, 4, 'T2128.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(16, 4, 'T2119.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(17, 5, 'TD509.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(18, 5, 'TD481.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(19, 5, 'T2131.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(20, 5, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(21, 6, 'TD509.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(22, 6, 'T2130.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(23, 6, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(24, 6, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(25, 7, 'T2130.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(26, 7, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(27, 7, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(28, 7, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(29, 8, 'T2129.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(30, 8, 'T2128.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(31, 8, 'T2119.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(32, 8, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(33, 8, 'T2109.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(34, 9, 'T2099.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(35, 9, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(36, 9, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(37, 9, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(42, 11, 'T2128.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(43, 11, 'T2129.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(44, 11, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(45, 11, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(50, 13, 'T2131.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(51, 13, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(52, 13, 'T2129.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(53, 13, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(54, 14, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(55, 14, 'T2129.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(56, 14, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(57, 14, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(58, 15, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(59, 15, 'T2129.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(60, 15, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(61, 15, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(62, 16, 'T2130.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(63, 16, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(64, 16, 'T2130.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(65, 16, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(66, 17, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(67, 17, 'T2130.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(68, 17, 'T2129.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(69, 17, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(70, 18, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(71, 18, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(72, 18, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(73, 18, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(74, 19, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(75, 19, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(76, 19, 'AT533.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(77, 19, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(78, 20, 'AT533.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(79, 20, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(80, 20, 'T2129.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(81, 20, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(82, 21, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(83, 21, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(84, 21, 'T2099.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(85, 21, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(86, 22, 'T2099.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(87, 22, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(88, 22, 'T2129.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(89, 22, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(90, 23, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(91, 23, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(92, 23, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(93, 23, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(94, 24, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(95, 24, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(96, 24, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(97, 24, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(98, 25, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(99, 25, 'T2129.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(100, 25, 'T2099.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(101, 25, 'T2127.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(102, 26, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(103, 26, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(104, 26, 'T2099.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(105, 26, 'T2099.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(106, 27, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(107, 27, 'T2099.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(108, 27, 'T2119.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(109, 27, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(110, 28, 'T2129.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(111, 28, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(112, 28, 'AT533.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(113, 28, 'T2099.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(114, 29, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(115, 29, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(116, 29, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(117, 29, 'AT536.png', 1, '2022-10-02 14:44:55', '2022-10-02 14:44:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `full_name`, `address`, `phone`, `avatar`, `level`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'dinhsan200@gmail.com', NULL, '$2y$10$s3wkSPMisgZmTGv8UJxdruF78je/ZRXwMBtsWsgE28Lm1J2QGN9.S', NULL, 'Đinh Trọng San', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', '0972580430', NULL, 0, 1, NULL, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(2, 'test01', 'dinhsan2001@gmail.com', NULL, '$2y$10$RrLQyOMxhE9jXc/DCykhhOIcSvv08wLmVakreo/kOqgIKXVoKP1vS', NULL, 'Tester 01', '236 Hoàng Quốc Việt,Cổ Nhuế, Từ Liêm, Hà Nội', '0930303030', NULL, 1, 1, NULL, '2022-10-02 14:44:55', '2022-10-02 14:50:14'),
(3, 'test02', 'dinhsan20011@gmail.com', NULL, '$2y$10$jnW0ng0CT35nMFdjBtnQCuXLikCEn7ZAbInEaFpcbBOo10tDbULKi', NULL, 'Tester 02', '236 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội', '0930303220', NULL, 1, 1, NULL, '2022-10-02 14:44:55', '2022-10-02 14:44:55'),
(4, 'test03', 'dinhsan200111@gmail.com', NULL, '$2y$10$dB.zClhixuv8UCQKI0UOEeputxt65q5fRtV4OWEwKAzeozIz9sJ.O', NULL, 'Tester 03', '200 Xã Đàn, Phương Liên, Đống Đa, Hà Nội', '0930301220', NULL, 1, 1, NULL, '2022-10-02 14:44:55', '2022-10-02 14:44:55');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_to_user` (`user_id`),
  ADD KEY `fk_order_to_payment` (`payment_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_details_to_product` (`product_id`),
  ADD KEY `fk_order_details_to_product_attribute_color` (`color_id`),
  ADD KEY `fk_order_details_to_product_attribute_size` (`size_id`),
  ADD KEY `fk_order_details_to_order` (`order_id`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_to_brand` (`brand_id`),
  ADD KEY `fk_product_to_category` (`product_category_id`);

--
-- Chỉ mục cho bảng `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_attribute_to_attribute_color_id` (`color_id`),
  ADD KEY `fk_product_attribute_to_attribute_size_id` (`size_id`),
  ADD KEY `fk_product_attribute_to_product` (`product_id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_to_product` (`product_id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_image_to_product` (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_order_to_payment` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `fk_order_to_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_order_details_to_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `fk_order_details_to_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_order_details_to_product_attribute_color` FOREIGN KEY (`color_id`) REFERENCES `attribute` (`id`),
  ADD CONSTRAINT `fk_order_details_to_product_attribute_size` FOREIGN KEY (`size_id`) REFERENCES `attribute` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_to_brand` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `fk_product_to_category` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`);

--
-- Các ràng buộc cho bảng `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD CONSTRAINT `fk_product_attribute_to_attribute_color_id` FOREIGN KEY (`color_id`) REFERENCES `attribute` (`id`),
  ADD CONSTRAINT `fk_product_attribute_to_attribute_size_id` FOREIGN KEY (`size_id`) REFERENCES `attribute` (`id`),
  ADD CONSTRAINT `fk_product_attribute_to_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  ADD CONSTRAINT `fk_comment_to_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `fk_product_image_to_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
