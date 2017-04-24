-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 06:27 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ts_techstore`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_03_31_172957_create_loaisanpham_table', 1),
(4, '2017_03_31_174809_create_khuyenmai_table', 1),
(5, '2017_03_31_174902_create_thongso_table', 1),
(6, '2017_03_31_174952_create_sanpham_table', 1),
(7, '2017_03_31_175035_create_loaithongso_table', 1),
(8, '2017_03_31_175106_create_anh_table', 1),
(9, '2017_03_31_175151_create_dondathang_table', 1),
(10, '2017_03_31_175229_create_ctddh_table', 1),
(11, '2017_03_31_175303_create_donnhap_table', 1),
(12, '2017_03_31_175333_create_ctdonnhap_table', 1),
(13, '2017_03_31_175406_create_kmc2_table', 1),
(14, '2017_03_31_175428_create_ctkmc2_table', 1),
(15, '2017_03_31_175517_create_quangcao_table', 1),
(16, '2017_03_31_175549_create_lienhe_table', 1),
(17, '2017_03_31_175613_create_caidat_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ts_anh`
--

CREATE TABLE `ts_anh` (
  `id` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ts_anh`
--

INSERT INTO `ts_anh` (`id`, `Ten`, `product_id`, `created_at`, `updated_at`) VALUES
(34, 'oto1.jpg', 27, '2017-04-13 10:20:48', '2017-04-13 10:20:48'),
(35, 'oto2.jpg', 27, '2017-04-13 10:20:48', '2017-04-13 10:20:48'),
(36, 'oto3.jpg', 27, '2017-04-13 10:20:49', '2017-04-13 10:20:49'),
(41, 'detail2.jpg', 23, '2017-04-13 10:25:18', '2017-04-13 10:25:18'),
(42, 'detail3.jpg', 23, '2017-04-13 10:25:18', '2017-04-13 10:25:18'),
(43, 'detail1.jpg', 23, '2017-04-13 11:05:43', '2017-04-13 11:05:43'),
(47, 'Untitled.png', 29, '2017-04-13 11:49:50', '2017-04-13 11:49:50'),
(48, 'pic3.jpg', 39, '2017-04-21 03:50:27', '2017-04-21 03:50:27'),
(49, 'pic2.jpg', 39, '2017-04-21 03:50:27', '2017-04-21 03:50:27'),
(50, 'pic5.jpg', 39, '2017-04-21 03:50:27', '2017-04-21 03:50:27'),
(51, 'pic7.jpg', 40, '2017-04-21 03:52:05', '2017-04-21 03:52:05'),
(52, 'pic7.jpg', 41, '2017-04-21 03:55:14', '2017-04-21 03:55:14'),
(53, 'detail1.jpg', 42, '2017-04-23 06:21:16', '2017-04-23 06:21:16'),
(54, 'detail2.jpg', 42, '2017-04-23 06:21:16', '2017-04-23 06:21:16'),
(55, 'detail3.jpg', 42, '2017-04-23 06:21:16', '2017-04-23 06:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `ts_caidat`
--

CREATE TABLE `ts_caidat` (
  `id` int(10) UNSIGNED NOT NULL,
  `bien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatri` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ts_chuongtrinhkhuyenmai`
--

CREATE TABLE `ts_chuongtrinhkhuyenmai` (
  `id` int(11) NOT NULL,
  `TenSK` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8mb4_unicode_ci,
  `Anh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ts_chuongtrinhkhuyenmai`
--

INSERT INTO `ts_chuongtrinhkhuyenmai` (`id`, `TenSK`, `MoTa`, `Anh`, `created_at`, `updated_at`) VALUES
(1, 'Tưng bừng khai chương 1', 'abc', 'pic1.jpg', '2017-04-23 08:52:34', '2017-04-23 09:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `ts_ctddh`
--

CREATE TABLE `ts_ctddh` (
  `idDDH` int(10) UNSIGNED NOT NULL,
  `idSP` int(10) UNSIGNED NOT NULL,
  `SLDat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ts_ctddh`
--

INSERT INTO `ts_ctddh` (`idDDH`, `idSP`, `SLDat`, `Gia`, `created_at`, `updated_at`) VALUES
(3, 41, '1', 3182971, '2017-04-22 14:19:16', '2017-04-22 14:19:16'),
(4, 41, '1', 3182971, '2017-04-22 14:29:10', '2017-04-22 14:29:10'),
(4, 40, '1', 12356777, '2017-04-22 14:29:11', '2017-04-22 14:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `ts_ctspkm`
--

CREATE TABLE `ts_ctspkm` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `idKM` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ts_dondathang`
--

CREATE TABLE `ts_dondathang` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `NgayDatHang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ts_dondathang`
--

INSERT INTO `ts_dondathang` (`id`, `idUser`, `NgayDatHang`, `GhiChu`, `TrangThai`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-04-22 21:07:43', 'test', 0, '2017-04-22 14:07:43', '2017-04-22 14:07:43'),
(2, 1, '2017-04-22 21:16:14', 'test2', 0, '2017-04-22 14:16:14', '2017-04-22 14:16:14'),
(3, 1, '2017-04-22 21:19:16', 'test2', 0, '2017-04-22 14:19:16', '2017-04-22 14:19:16'),
(4, 1, '2017-04-22 21:29:10', 'test', 1, '2017-04-22 14:29:10', '2017-04-22 15:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `ts_lienhe`
--

CREATE TABLE `ts_lienhe` (
  `id` int(10) UNSIGNED NOT NULL,
  `TieuDe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ts_lienhe`
--

INSERT INTO `ts_lienhe` (`id`, `TieuDe`, `NoiDung`, `HoTen`, `email`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, 'dlálkálk', 'dlkaflasj', 'thanh', 'dsa@gmail.com', 1, '2017-04-18 15:13:10', '2017-04-18 17:02:42'),
(2, 'fsd', 'test lien he', 'abv', 'abds@gmail.com', 1, '2017-04-19 06:08:44', '2017-04-20 11:05:43'),
(3, 'test', 'Lien he test', 'nguyen thanh', 'abcdd@gmail.com', 0, '2017-04-20 11:42:57', '2017-04-20 11:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `ts_loaisanpham`
--

CREATE TABLE `ts_loaisanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKhongDau` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ts_loaisanpham`
--

INSERT INTO `ts_loaisanpham` (`id`, `Ten`, `TenKhongDau`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', 'laptop', 0, '2017-04-02 13:28:42', '2017-04-02 13:28:42'),
(2, 'Máy tính bảng', 'may-tinh-bang', 0, '2017-04-02 13:32:28', '2017-04-11 11:49:59'),
(3, 'Linh kiện', 'linh-kien', 0, '2017-04-02 13:35:58', '2017-04-02 13:35:58'),
(6, 'Điện thoại', 'dien-thoai', 0, '2017-04-12 17:32:39', '2017-04-12 17:32:39'),
(7, 'Phụ kiện', 'phu-kien', 0, '2017-04-12 17:32:54', '2017-04-12 17:32:54'),
(8, 'Dell', 'dell', 1, '2017-04-12 17:33:05', '2017-04-12 17:33:05'),
(9, 'Asus', 'asus', 1, '2017-04-12 17:33:14', '2017-04-12 17:33:14'),
(10, 'Acer', 'acer', 1, '2017-04-12 17:33:58', '2017-04-12 17:33:58'),
(12, 'HP', 'hp', 1, '2017-04-12 17:34:25', '2017-04-12 17:34:25'),
(13, 'Lelovo', 'lelovo', 1, '2017-04-12 17:34:59', '2017-04-12 17:34:59'),
(14, 'Pin laptop', 'pin-laptop', 3, '2017-04-12 17:35:32', '2017-04-12 17:35:32'),
(15, 'RAM', 'ram', 3, '2017-04-12 17:35:54', '2017-04-12 17:35:54'),
(16, 'Bàn phím', 'ban-phim', 3, '2017-04-12 17:36:27', '2017-04-12 17:36:27'),
(17, 'Màn hình', 'man-hinh', 3, '2017-04-12 17:36:37', '2017-04-12 17:36:37'),
(18, 'Chuột', 'chuot', 7, '2017-04-12 17:37:05', '2017-04-12 17:37:05'),
(19, 'Sạc dự phòng', 'sac-du-phong', 7, '2017-04-12 17:37:31', '2017-04-12 17:37:31'),
(20, 'Thẻ nhớ', 'the-nho', 7, '2017-04-12 17:37:42', '2017-04-12 17:37:42'),
(21, 'Tai nghe', 'tai-nghe', 7, '2017-04-12 17:38:04', '2017-04-12 17:38:04'),
(22, 'USB', 'usb', 7, '2017-04-12 17:38:16', '2017-04-12 17:38:16'),
(23, 'Samsung', 'samsung', 6, '2017-04-12 17:38:35', '2017-04-12 17:38:35'),
(24, 'Apple', 'apple', 6, '2017-04-12 17:38:57', '2017-04-12 17:38:57'),
(25, 'oppo', 'oppo', 6, '2017-04-12 17:39:09', '2017-04-12 17:39:09'),
(26, 'Macbook', 'macbook', 1, '2017-04-12 17:39:40', '2017-04-13 13:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `ts_loaithongso`
--

CREATE TABLE `ts_loaithongso` (
  `id` int(11) NOT NULL,
  `idTS` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `ctTS` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ts_loaithongso`
--

INSERT INTO `ts_loaithongso` (`id`, `idTS`, `product_id`, `ctTS`, `created_at`, `updated_at`) VALUES
(16, 3, 23, '', '2017-04-13 04:21:20', '2017-04-13 04:21:20'),
(17, 4, 23, '', '2017-04-13 04:21:20', '2017-04-13 04:21:20'),
(18, 5, 23, '', '2017-04-13 04:21:20', '2017-04-13 04:21:20'),
(19, 1, 27, '', '2017-04-13 10:20:49', '2017-04-13 10:20:49'),
(20, 3, 27, '', '2017-04-13 10:20:49', '2017-04-13 10:20:49'),
(23, 3, 29, '', '2017-04-13 11:49:50', '2017-04-13 11:49:50'),
(24, 6, 29, '', '2017-04-13 11:49:50', '2017-04-13 11:49:50'),
(25, 4, 33, '', '2017-04-13 12:34:17', '2017-04-13 12:34:17'),
(26, 3, 34, '', '2017-04-13 12:35:22', '2017-04-13 12:35:22'),
(27, 4, 34, '', '2017-04-13 12:35:22', '2017-04-13 12:35:22'),
(28, 1, 39, 'ram', '2017-04-21 03:50:27', '2017-04-21 03:50:27'),
(29, 3, 39, 'he dieu hanh', '2017-04-21 03:50:27', '2017-04-21 03:50:27'),
(30, 4, 39, 'kich thuoc', '2017-04-21 03:50:27', '2017-04-21 03:50:27'),
(31, 5, 39, '', '2017-04-21 03:50:27', '2017-04-21 03:50:27'),
(32, 6, 39, '', '2017-04-21 03:50:27', '2017-04-21 03:50:27'),
(33, 1, 40, 'ram', '2017-04-21 03:52:05', '2017-04-21 03:52:05'),
(34, 3, 40, 'he dieu hanh', '2017-04-21 03:52:05', '2017-04-21 03:52:05'),
(35, 4, 40, '', '2017-04-21 03:52:05', '2017-04-21 03:52:05'),
(36, 5, 40, '', '2017-04-21 03:52:05', '2017-04-21 03:52:05'),
(37, 6, 40, '', '2017-04-21 03:52:05', '2017-04-21 03:52:05'),
(38, 1, 42, '8Gb', '2017-04-23 06:21:16', '2017-04-23 06:21:16'),
(39, 3, 42, 'intel core I5', '2017-04-23 06:21:16', '2017-04-23 06:21:16'),
(40, 4, 42, '15.6', '2017-04-23 06:21:16', '2017-04-23 06:21:16'),
(41, 5, 42, '', '2017-04-23 06:21:16', '2017-04-23 06:21:16'),
(42, 6, 42, '', '2017-04-23 06:21:16', '2017-04-23 06:21:16'),
(43, 1, 43, '', '2017-04-23 07:51:01', '2017-04-23 07:51:01'),
(44, 3, 43, '', '2017-04-23 07:51:01', '2017-04-23 07:51:01'),
(45, 4, 43, '', '2017-04-23 07:51:01', '2017-04-23 07:51:01'),
(46, 5, 43, '', '2017-04-23 07:51:01', '2017-04-23 07:51:01'),
(47, 6, 43, '', '2017-04-23 07:51:01', '2017-04-23 07:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `ts_quangcao`
--

CREATE TABLE `ts_quangcao` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Anh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ViTri` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ts_quangcao`
--

INSERT INTO `ts_quangcao` (`id`, `url`, `Anh`, `ViTri`, `created_at`, `updated_at`) VALUES
(4, NULL, 'anh1.jpg', 0, '2017-04-24 15:49:57', '2017-04-24 15:49:57'),
(5, NULL, 'anh2.jpg', 0, '2017-04-24 15:50:04', '2017-04-24 15:50:04'),
(6, NULL, 'anh3.jpg', 0, '2017-04-24 15:50:11', '2017-04-24 15:50:11'),
(7, NULL, 'anh4.jpg', 0, '2017-04-24 15:50:20', '2017-04-24 15:50:20'),
(8, NULL, 'anh5.jpg', 0, '2017-04-24 15:50:27', '2017-04-24 15:50:27'),
(9, NULL, 'blqc1.png', 1, '2017-04-24 15:50:34', '2017-04-24 15:50:34'),
(10, NULL, 'blqc2.jpg', 1, '2017-04-24 15:50:40', '2017-04-24 15:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `ts_sanpham`
--

CREATE TABLE `ts_sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaSP` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenSP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenKhongDau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL DEFAULT '1',
  `AnhChinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BaoHanh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiamGia` int(10) NOT NULL DEFAULT '0',
  `idLSP` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ts_sanpham`
--

INSERT INTO `ts_sanpham` (`id`, `MaSP`, `TenSP`, `TenKhongDau`, `Gia`, `soluong`, `AnhChinh`, `NoiDung`, `BaoHanh`, `GiamGia`, `idLSP`, `created_at`, `updated_at`) VALUES
(22, 'LA21', 'Laptop Asus K401UB-FR049D', 'laptop-asus-k401ub-fr049d', '12130000', 1, 'anhchinh.jpg', '<h3>M&ocirc; Tả Sản Phẩm</h3>\r\n\r\n<h3>Thiết kế hiện đại, trọng lượng 1.65 kg</h3>\r\n\r\n<p><a href="http://tiki.vn/laptop/c2742/asus">Laptop Asus</a>&nbsp;K401UB-FR049D c&oacute; thiết kế mang phong c&aacute;ch hiện đại với chất liệu vỏ nh&ocirc;m sang trọng. Với trọng lượng chỉ 1.65 kg, bạn c&oacute; thể dễ d&agrave;ng sử dụng v&agrave; di chuyển nhiều m&agrave; kh&ocirc;ng cảm thấy qu&aacute; nặng d&ugrave; l&agrave; nữ giới.</p>\r\n\r\n<h3>Tốc độ xử l&yacute; mạnh mẽ</h3>\r\n\r\n<p><a href="http://tiki.vn/laptop/c2742">Laptop</a>&nbsp;Asus K401UB-FR049D sử dụng bộ vi xử l&yacute; Intel Core i5-6200U. Với card đồ họa Nvidia GeForce 940M, m&aacute;y c&oacute; khả năng chạy đa nhiệm c&aacute;c ứng dụng mượt m&agrave;. Bạn c&oacute; thể sử dụng c&aacute;c ứng dụng văn ph&ograve;ng, c&aacute;c phần mềm thiết kế đồ họa tầm trung, chỉnh sửa ảnh, video, xem phim HD, chơi game online...</p>\r\n\r\n<h3>M&agrave;n h&igrave;nh 14 inches, độ ph&acirc;n giải Full HD</h3>\r\n\r\n<p>K401UB-FR049D c&oacute; k&iacute;ch thước 14 inches, ph&ugrave; hợp cho những người kh&ocirc;ng th&iacute;ch sử dụng một chiếc laptop c&oacute; m&agrave;n h&igrave;nh qu&aacute; lớn. Với độ ph&acirc;n giải Full HD (1920 x 1080 pixels), m&aacute;y cho khả năng hiển thị h&igrave;nh ảnh v&ocirc; c&ugrave;ng sắc n&eacute;t, m&agrave;u sắc sống động c&ugrave;ng độ tương phản cao.</p>\r\n\r\n<h3>Bộ nhớ RAM 4GB, ổ cứng HDD 500 GB</h3>\r\n\r\n<p>Laptop Asus K401UB-FR049D c&oacute; bộ nhớ RAM 4 GB, với ổ cứng HDD dung lượng 500 GB, bạn c&oacute; thể lưu trữ lượng lớn dữ liệu c&ocirc;ng việc, học tập, giải tr&iacute; m&agrave; kh&ocirc;ng l&agrave;m giảm hiệu suất hoạt động của laptop.</p>\r\n\r\n<h3>Đa kết nối tiện &iacute;ch</h3>\r\n\r\n<p>Khi sử dụng laptop, bạn c&oacute; thể kết nối nhiều thiết bị điện tử c&ugrave;ng một l&uacute;c th&ocirc;ng qua c&aacute;c cổng đ&atilde; được thiết kế sẵn như HDMI,&nbsp;<a href="http://tiki.vn/usb-luu-tru/c1828">USB</a>, giắc 3.5 mm, cổng LAN, khe cắm&nbsp;<a href="http://tiki.vn/the-nho-sd/c2681">thẻ nhớ SD</a>... một c&aacute;ch dễ d&agrave;ng v&agrave; tiện dụng hơn bao giờ hết.</p>\r\n\r\n<h3>Pin 3 cell, thời gian sử dụng l&acirc;u</h3>\r\n\r\n<p>Asus K401UB-FR049D được trang bị vi&ecirc;n pin 3 cell, kết hợp với d&ograve;ng chip U của Intel với khả năng tiết kiệm điện cao, m&aacute;y cho thời gian sử dụng trong thời gian v&agrave;i giờ li&ecirc;n tục với những t&aacute;c vụ cơ bản.</p>', '12 tháng', 5, 9, '2017-04-13 04:17:40', '2017-04-13 04:17:40'),
(23, 'LD34', 'Laptop Dell Inspiron 3467 C4I51107', 'laptop-dell-inspiron-3467-c4i51107', '11620000', 1, 'detail3.jpg', '<h3>Tốc độ xử l&yacute; hiệu quả</h3>\r\n\r\n<p><a href="http://tiki.vn/laptop/c2742/dell">Laptop Dell</a>&nbsp;Inspiron 3467 C4I51107 sử dụng Intel Core I5-7200U c&ugrave;ng bộ nhớ 4GB DDR4 2400MHz&nbsp;cho tốc độ truyền v&agrave; xử l&yacute; dữ liệu nhanh ch&oacute;ng, tr&aacute;nh sự cố lag m&aacute;y khi t&aacute;c vụ đa nhiệm tr&ecirc;n m&aacute;y. Kết hợp với ổ cứng 1TB 5400 rpm HDD c&ugrave;ng hệ điều h&agrave;nh Ubuntu sẽ gi&uacute;p bạn kh&ocirc;ng phải chờ đợi l&acirc;u khi truyền tải dữ liệu, gi&uacute;p bạn tiết kiệm thời gian v&agrave; đ&aacute;p ứng được nhu cầu cho c&ocirc;ng việc.</p>\r\n\r\n<p><img alt="Laptop Dell Inspiron 3467 C4I51107" src="https://tikicdn.com/media/catalog/product/5/3/5302201478349--1-.u4485.d20170306.t090729.638346.jpg" style="height:500px; width:750px" title="Laptop Dell Inspiron 3467 C4I51107" /></p>\r\n\r\n<h3>M&agrave;n h&igrave;nh 14.0 inch HD</h3>\r\n\r\n<p><a href="http://tiki.vn/laptop/c2742">Laptop</a>&nbsp;Dell Inspiron 3467 C4I51107 được thiết kế với m&agrave;n h&igrave;nh 14.0 inch c&ugrave;ng độ ph&acirc;n giải HD cho h&igrave;nh ảnh trung thực, sống động v&agrave; r&otilde; n&eacute;t hơn.</p>\r\n\r\n<p><img alt="Laptop Dell Inspiron 3467 C4I51107" src="https://tikicdn.com/media/catalog/product/5/3/5302201478349--2-.u4485.d20170306.t090729.678748.jpg" style="height:500px; width:750px" title="Laptop Dell Inspiron 3467 C4I51107" /></p>\r\n\r\n<h3>Cổng kết nối tiện dụng</h3>\r\n\r\n<p>Laptop Dell Inspiron 3467 C4I51107 được hỗ trợ với nhiều cổng kết nối như USB 2.0;&nbsp;<a href="http://tiki.vn/usb-luu-tru/c1828">USB 3.0</a>; HDMI&hellip; sẽ gi&uacute;p bạn dễ d&agrave;ng kết nối với c&aacute;c thiết bị điện tử, hỗ trợ cho c&ocirc;ng việc, học tập v&agrave; giải tr&iacute;.</p>\r\n\r\n<p><img alt="Laptop Dell Inspiron 3467 C4I51107" src="https://tikicdn.com/media/catalog/product/5/3/5302201478349--3-.u4485.d20170306.t090729.713047.jpg" style="height:500px; width:750px" title="Laptop Dell Inspiron 3467 C4I51107" /></p>\r\n\r\n<h3>Card đồ họa Intel HD Graphics 620</h3>\r\n\r\n<p>Laptop sử dụng card đồ họa Intel HD Graphics 620 chuy&ecirc;n dụng sẽ đ&aacute;p ứng nhu cầu sử dụng của bạn với c&ocirc;ng việc thiết kế đồ họa, chơi game 3D hay xem phim HD.</p>\r\n\r\n<p><img alt="Laptop Dell Inspiron 3467 C4I51107" src="https://tikicdn.com/media/catalog/product/5/3/5302201478349--4-.u4485.d20170306.t090729.747310.jpg" style="height:500px; width:750px" title="Laptop Dell Inspiron 3467 C4I51107" /></p>\r\n\r\n<h3>Kiểu d&aacute;ng hiện đại</h3>\r\n\r\n<p>Laptop Dell Inspiron 3467 C4I51107 c&oacute; kiểu d&aacute;ng v&agrave; trọng lượng nhỏ gọn. Với thiết kế n&agrave;y, bạn sẽ dễ d&agrave;ng mang theo laptop đến bất kỳ nơi đ&acirc;u để l&agrave;m việc, học tập m&agrave; kh&ocirc;ng g&acirc;y trở ngại n&agrave;o.</p>\r\n\r\n<p><img alt="Laptop Dell Inspiron 3467 C4I51107" src="https://tikicdn.com/media/catalog/product/5/3/5302201478349--5-.u4485.d20170306.t090729.780537.jpg" style="height:500px; width:750px" title="Laptop Dell Inspiron 3467 C4I51107" /></p>', '18 tháng', 7, 8, '2017-04-13 04:21:19', '2017-04-13 12:31:02'),
(24, 'test', 'Sản phẩm test', 'san-pham-test', '123513202', 1, 'pic1.jpg', '<p>nội dung test</p>', 'ssda', 7, 23, '2017-04-13 10:07:12', '2017-04-13 10:07:12'),
(27, 'test3', 'kfdja', 'kfdja', '4781', 1, 'avdlon.jpg', '<p>rqewtewq</p>', 'dsa', 5, 12, '2017-04-13 10:20:48', '2017-04-13 10:20:48'),
(29, 'test4', 'sản phẩm test 4', 'san-pham-test-4', '37891274', 1, 'tron.jpg', '<p>bjkllkjhjkl</p>', 'sagsg', 6, 10, '2017-04-13 11:49:49', '2017-04-13 11:49:49'),
(31, 'abc3', 'ágsag', 'agsag', '43153161', 1, 'Untitled.png', '<p>sfahfa</p>', 'hsahá', 6, 8, '2017-04-13 12:32:17', '2017-04-13 12:32:17'),
(32, 'fffff', 'dshshs', 'dshshs', '2352252', 1, 'csdlTS.png', '<p>t&egrave;hssgjgs</p>', 'jgsjsgj', 6, 8, '2017-04-13 12:33:49', '2017-04-13 12:33:49'),
(33, 'fffff4', 'dshshs', 'dshshs', '2352252', 1, 'csdlTS.png', '<p>t&egrave;hssgjgs</p>', 'jgsjsgj', 6, 8, '2017-04-13 12:34:17', '2017-04-13 12:34:17'),
(34, 'dhs234', 'fdsahds', 'fdsahds', '12234566', 1, 'detail2.jpg', '<p>hdgjdg</p>', 'djggdjgd', 6, 10, '2017-04-13 12:35:22', '2017-04-13 13:56:27'),
(35, 'fdss', 'fdsagds', 'fdsagds', '12421312', 1, 'detail3.jpg', '<p>5dagdsah</p>', 'hdsahads', 6, 8, '2017-04-13 12:37:57', '2017-04-13 12:37:57'),
(36, 'fsdf', 'gdsa', 'gdsa', '54326423', 1, 'loi.png', '<p>gtfdshdfsj</p>', 'fsjfsjs', 6, 8, '2017-04-20 17:40:11', '2017-04-20 17:40:11'),
(37, 'fdsagdas', 'ahdash', 'ahdash', '6427327432', 1, 'loi.png', '<p>gfsdjds</p>', 'jfdsj', 6, 25, '2017-04-20 17:42:08', '2017-04-20 17:42:08'),
(38, 'fdsagd', 'ahdash', 'ahdash', '6427327432', 1, 'logo.png', '<p>gfsdjds</p>', 'jfdsj', 6, 18, '2017-04-20 17:44:48', '2017-04-20 17:44:48'),
(39, 'masp', 'ten san pham', 'ten-san-pham', '12345678', 1, 'pic1.jpg', '<p>abcddddd</p>', 'ffffffffffffffffffffff', 7, 1, '2017-04-21 03:50:27', '2017-04-21 03:50:27'),
(40, 'abc', 'ten san pham', 'ten-san-pham', '12356777', 1, 'screenshot.png', '<p>asgdsagdas</p>', 'agdsah', 6, 8, '2017-04-21 03:52:04', '2017-04-21 03:52:04'),
(41, 'abcd', '1kan', '1kan', '3182971', 1, 'pic1.jpg', '<p>fdsagdsa</p>', 'dsahsa', 6, 8, '2017-04-21 03:55:14', '2017-04-21 03:55:14'),
(42, 'LH01', 'laptop HP 3251', 'laptop-hp-3251', '12000000', 6, 'anhchinh.jpg', '<p>M&atilde; sản phẩm</p>', '12 tháng', 2, 12, '2017-04-23 06:21:16', '2017-04-23 06:21:16'),
(43, 'LA009', 'ten san pham', 'ten-san-pham', '2190841', 6, 'pic7.jpg', '<p>saga</p>', 'ága', 3, 9, '2017-04-23 07:51:01', '2017-04-23 07:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `ts_spkhuyenmai`
--

CREATE TABLE `ts_spkhuyenmai` (
  `id` int(11) NOT NULL,
  `Ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `anh` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idSK` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ts_spkhuyenmai`
--

INSERT INTO `ts_spkhuyenmai` (`id`, `Ten`, `soluong`, `anh`, `idSK`, `created_at`, `updated_at`) VALUES
(2, 'Chuột không dây1', 20, 'screenshot.png', 1, '2017-04-23 10:17:16', '2017-04-23 10:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `ts_thongso`
--

CREATE TABLE `ts_thongso` (
  `id` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ts_thongso`
--

INSERT INTO `ts_thongso` (`id`, `Ten`, `created_at`, `updated_at`) VALUES
(1, 'RAM 8GB', '2017-04-04 10:03:22', '2017-04-13 11:26:11'),
(3, 'Hệ điều hanh', '2017-04-04 10:06:24', '2017-04-04 10:06:24'),
(4, 'Kích thước màn hình', '2017-04-04 13:57:11', '2017-04-04 13:57:11'),
(5, 'Ram 2GB', '2017-04-11 11:08:27', '2017-04-11 11:08:27'),
(6, 'RAM 4GB', '2017-04-11 11:10:22', '2017-04-11 11:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `ts_users`
--

CREATE TABLE `ts_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ts_users`
--

INSERT INTO `ts_users` (`id`, `username`, `email`, `password`, `HoTen`, `DiaChi`, `SDT`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'supperadmin', 'thanh@gmail.com', '$2y$10$kB/jFWyfQjxGsgFSvb6Pd.iDgdz69Na53FlUu8/LqD0e27qEYA2F6', 'Nguyen Van Thanh', 'Ha Noi', '0124588722', 1, 'cm8W1qkw8W9Z13QEhtpBMykhPgo0vl76PEHJrY6uf4QyhGuca9jJKL90NMXr', NULL, NULL),
(2, 'admin', 'thanh1@gmail.com', '$2y$10$wIhFf0QVueoiiYW9Bp7.wOj7yykJ1wLqhGHPhOoSHSLz0KpuGSjqy', 'Van Thanh', 'Ha Noi', '0124588722', 1, '8Yijg6MB7benmlnoT9Utru6bIVYPds4lsnA9pp7aNO2HG9fSrpU99LeXE7Cg', NULL, NULL),
(6, 'khachhang', 'ash@gmail.com', '$2y$10$9WUERrBLNMy1rmqaTv0kq.4NiIsJkhHBsYf7MrW6LCOc1pTPhiPvq', 'skah', 'asj', '512621', 0, NULL, '2017-04-13 13:42:13', '2017-04-13 13:42:13'),
(13, 'fahjka', 'tieuyentu1231@gmail.com', '$2y$10$.KhIPxU66gA7tQa9jg4jgO..X..wi8rr6E4ENYdb/u9ytxU5dbK6e', 'test03', 'djsâg', '50821750', 0, NULL, '2017-04-22 06:15:39', '2017-04-22 06:15:39'),
(14, 'test01', 'thanh181094@gmail.com', '$2y$10$Np//69u/xCinLzoSJi933ORLe/xqOom41bvZgpsaeD9R1JuRwZMay', 'test01', 'fdsahdsa', '14326', 0, NULL, '2017-04-22 07:07:15', '2017-04-22 07:07:15'),
(15, 'test02', 'nguyenthanh.devc@gmail.com', '$2y$10$hijtVyXxblaoUMZSvi6UZeAKjCi/hVwMUfG0eUujyryYHvFUpJaGO', 'test02', 'fsdahs', '124231', 0, NULL, '2017-04-22 07:08:39', '2017-04-22 07:08:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_username_index` (`username`);

--
-- Indexes for table `ts_anh`
--
ALTER TABLE `ts_anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ts_anh_idsp_foreign` (`product_id`);

--
-- Indexes for table `ts_caidat`
--
ALTER TABLE `ts_caidat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_chuongtrinhkhuyenmai`
--
ALTER TABLE `ts_chuongtrinhkhuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_ctddh`
--
ALTER TABLE `ts_ctddh`
  ADD KEY `ts_ctddh_idddh_foreign` (`idDDH`),
  ADD KEY `ts_ctddh_idsp_foreign` (`idSP`);

--
-- Indexes for table `ts_ctspkm`
--
ALTER TABLE `ts_ctspkm`
  ADD PRIMARY KEY (`product_id`,`idKM`),
  ADD KEY `idSP` (`product_id`),
  ADD KEY `idKM` (`idKM`);

--
-- Indexes for table `ts_dondathang`
--
ALTER TABLE `ts_dondathang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ts_dondathang_iduser_foreign` (`idUser`);

--
-- Indexes for table `ts_lienhe`
--
ALTER TABLE `ts_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_loaisanpham`
--
ALTER TABLE `ts_loaisanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ts_loaisanpham_ten_unique` (`Ten`);

--
-- Indexes for table `ts_loaithongso`
--
ALTER TABLE `ts_loaithongso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idTS` (`idTS`),
  ADD KEY `idLSP` (`product_id`);

--
-- Indexes for table `ts_quangcao`
--
ALTER TABLE `ts_quangcao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_sanpham`
--
ALTER TABLE `ts_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ts_sanpham_masp_unique` (`MaSP`),
  ADD KEY `ts_sanpham_idkm_foreign` (`GiamGia`),
  ADD KEY `ts_sanpham_idlsp_foreign` (`idLSP`);

--
-- Indexes for table `ts_spkhuyenmai`
--
ALTER TABLE `ts_spkhuyenmai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idSK` (`idSK`);

--
-- Indexes for table `ts_thongso`
--
ALTER TABLE `ts_thongso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_users`
--
ALTER TABLE `ts_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ts_users_username_unique` (`username`),
  ADD UNIQUE KEY `ts_users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ts_anh`
--
ALTER TABLE `ts_anh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `ts_caidat`
--
ALTER TABLE `ts_caidat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ts_chuongtrinhkhuyenmai`
--
ALTER TABLE `ts_chuongtrinhkhuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ts_dondathang`
--
ALTER TABLE `ts_dondathang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ts_lienhe`
--
ALTER TABLE `ts_lienhe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ts_loaisanpham`
--
ALTER TABLE `ts_loaisanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `ts_loaithongso`
--
ALTER TABLE `ts_loaithongso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `ts_quangcao`
--
ALTER TABLE `ts_quangcao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ts_sanpham`
--
ALTER TABLE `ts_sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `ts_spkhuyenmai`
--
ALTER TABLE `ts_spkhuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ts_thongso`
--
ALTER TABLE `ts_thongso`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ts_users`
--
ALTER TABLE `ts_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ts_anh`
--
ALTER TABLE `ts_anh`
  ADD CONSTRAINT `ts_anh_idsp_foreign` FOREIGN KEY (`product_id`) REFERENCES `ts_sanpham` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ts_ctddh`
--
ALTER TABLE `ts_ctddh`
  ADD CONSTRAINT `ts_ctddh_idddh_foreign` FOREIGN KEY (`idDDH`) REFERENCES `ts_dondathang` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ts_ctddh_idsp_foreign` FOREIGN KEY (`idSP`) REFERENCES `ts_sanpham` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ts_ctspkm`
--
ALTER TABLE `ts_ctspkm`
  ADD CONSTRAINT `ts_ctspkm_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `ts_sanpham` (`id`),
  ADD CONSTRAINT `ts_ctspkm_ibfk_2` FOREIGN KEY (`idKM`) REFERENCES `ts_spkhuyenmai` (`id`);

--
-- Constraints for table `ts_dondathang`
--
ALTER TABLE `ts_dondathang`
  ADD CONSTRAINT `ts_dondathang_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `ts_users` (`id`);

--
-- Constraints for table `ts_loaithongso`
--
ALTER TABLE `ts_loaithongso`
  ADD CONSTRAINT `ts_loaithongso_ibfk_1` FOREIGN KEY (`idTS`) REFERENCES `ts_thongso` (`id`),
  ADD CONSTRAINT `ts_loaithongso_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `ts_sanpham` (`id`);

--
-- Constraints for table `ts_sanpham`
--
ALTER TABLE `ts_sanpham`
  ADD CONSTRAINT `ts_sanpham_idlsp_foreign` FOREIGN KEY (`idLSP`) REFERENCES `ts_loaisanpham` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ts_spkhuyenmai`
--
ALTER TABLE `ts_spkhuyenmai`
  ADD CONSTRAINT `ts_spkhuyenmai_ibfk_1` FOREIGN KEY (`idSK`) REFERENCES `ts_chuongtrinhkhuyenmai` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
