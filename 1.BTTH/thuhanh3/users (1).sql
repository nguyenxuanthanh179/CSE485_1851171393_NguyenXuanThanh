-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2020 lúc 07:02 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `prac04`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userid` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` char(60) NOT NULL,
  `registration_date` datetime NOT NULL,
  `activation_code` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `activation_code`, `status`) VALUES
(13, 'Dung', 'Kieu', 'kieutuandung5@gmail.com', '$2y$10$SPrJ.R8fqZhja6UFfkj/HethoXOEaotS4rfl/E4YS8F7GSk3Xn7Oi', '2020-10-05 11:06:26', 'a08c522a5977754c', 0),
(14, 'Dung', 'Kieu', 'web2code2vn@gmail.com', '$2y$10$E5qW3VFD/hT24lwSnwgFaOXCjDo/36J9EKfcX8XD2xuBd.b5gEl9G', '2020-10-05 11:11:50', '4de6314b75c9279e', 1),
(15, 'thanh', 'nguyễn xuân', 'thanhreus2000@gmail.com', '$2y$10$oPa8W3jCkOR/bPEva6KLqujQX7ZqBSJfLgPUkNOxfnCJAdswehV6K', '2020-10-09 21:11:16', '6a6befe71e67c190', 1),
(16, 'tuan', 'nguyễn ', 'thanhreus@hahaha', '$2y$10$KJX0Uhx3JJQl2.LolrtLye2vMxx4ffW8z99X1Fme5vJIgQNcU8JTG', '2020-10-09 22:32:23', '141cdae89fc7d370', 0),
(17, 'thanh', 'nguyễn xuân', 'thanh@gmail.com', '$2y$10$Y9Vl4v1N5XUxs6kj7F66fO/VVCnp0WUraGUU7i3TWqR7dW1mRsSwi', '2020-10-11 21:36:03', 'c54dc27486dee970', 0),
(18, 'nguyễn', 'xuân thanh', 'thanhcr@gmail.com', '$2y$10$xIT2XUSmJ5CoQEan34o7LeO.F9AnhTQZ2e9goOEDaQt8uTifgfsGm', '2020-10-11 21:45:10', '636156352d9e74b9', 0),
(21, 'thanh', 'xuân thanh', 'ricardokaka1792@gmail.com', '$2y$10$ZYfDQZ7jYGQapqxUkvtJhOjTY5HytamUA/gwOwWhidTybd6PRICyO', '2020-11-04 16:29:51', '5834c5a1bf487499', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
