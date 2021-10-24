-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2021 lúc 04:43 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookstore`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'Tình cảm'),
(2, 'Truyện tranh'),
(3, 'Khoa học');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `pr_id` int(11) NOT NULL,
  `pr_name` varchar(255) NOT NULL,
  `pr_author` varchar(255) NOT NULL,
  `pr_pub` varchar(255) NOT NULL,
  `pr_status` int(11) NOT NULL DEFAULT 1,
  `pr_category` int(11) NOT NULL,
  `pr_code` int(11) NOT NULL,
  `pr_number` int(11) NOT NULL,
  `pr_price` bigint(15) NOT NULL,
  `pr_discount` bigint(15) NOT NULL,
  `pr_img` text NOT NULL,
  `pr_date` date DEFAULT current_timestamp(),
  `pr_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`pr_id`, `pr_name`, `pr_author`, `pr_pub`, `pr_status`, `pr_category`, `pr_code`, `pr_number`, `pr_price`, `pr_discount`, `pr_img`, `pr_date`, `pr_desc`) VALUES
(1, 'Apple Watch Series 4', '', '', 0, 1, 0, 0, 399, 10, '', '0000-00-00', ''),
(2, 'Apple Watch Series 4', '', '', 0, 1, 0, 0, 399, 10, '', '0000-00-00', ''),
(3, 'Apple Watch Series 4', '', '', 0, 1, 0, 0, 399, 10, '', '0000-00-00', ''),
(4, 'Apple Watch Series 4', '', '', 0, 2, 0, 0, 399, 10, '', '0000-00-00', 'abcbhd'),
(5, 'Apple Watch Series 4', '', '', 1, 1, 0, 0, 399, 10, 'av.png', '2021-10-24', ''),
(6, 'Apple Watch Series 4', '', '', 1, 1, 0, 0, 399, 10, 'av.png', '2021-10-24', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pr_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
