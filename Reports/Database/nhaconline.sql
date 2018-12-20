-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2018 lúc 04:04 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhaconline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listsong`
--

CREATE TABLE `listsong` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `author` varchar(40) NOT NULL,
  `singer` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `listsong`
--

INSERT INTO `listsong` (`id`, `name`, `author`, `singer`, `type`, `link`) VALUES
(3, 'Lam Nguoi Yeu Anh Nhe Baby', 'Nguyen Jenda', 'Ba Chu Bo Doi', 'NT', 'http://www.nhaccuatui.com/bai-hat/lam-nguoi-yeu-anh-nhe-baby-nguyen-jenda-ft-tuan-den-ft-manh-mh.y0wiA7mNlDHk.html'),
(5, 'Gia Nhu Anh Lang Im', 'Nguyen Jenda', 'Nguyen Jenda', 'ND', 'http://www.nhaccuatui.com/bai-hat/gia-nhu-anh-lang-im-onlyc-ft-lou-hoang-ft-quang-hung.65yGj70rS2JS.html'),
(7, 'Suy Nghi Trong Anh', 'Khac Viet', 'Duy Khoa', 'NB', 'http://www.nhaccuatui.com/bai-hat/dieu-anh-biet-chi-dan.cG0LtbZ1h01w.html'),
(10, ' Tháº£ VÃ o MÆ°a', 'Trung QuÃ¢n', 'Trung QuÃ¢n', 'NT', 'http://www.nhaccuatui.com/bai-hat/tha-vao-mua-trung-quan-idol.CRJu8MxAq0Zk.html'),
(11, ' Tan ', 'Tuáº¥n HÆ°ng', 'Tuáº¥n HÆ°ng', 'ND', 'http://www.nhaccuatui.com/bai-hat/tan-tuan-hung.lt5HlCrw2WrA.html'),
(12, 'Gá»­i Anh Xa ', 'Nhá»› BÃ­ch PhÆ°Æ¡ng', 'Nhá»› BÃ­ch PhÆ°Æ¡ng', 'NR', 'http://www.nhaccuatui.com/bai-hat/gui-anh-xa-nho-bich-phuong.3CkFF2g6njA4.html'),
(18, 'Lalala ', 'Soobin HoÃ ng SÆ¡n', 'Soobin HoÃ ng SÆ¡n', 'NT', 'http://www.nhaccuatui.com/bai-hat/lalala-soobin-hoang-son.wvOPKkY0eGYC.html'),
(21, 'PhÃ­a Sau Má»™t CÃ´ GÃ¡i', 'Soobin HoÃ ng SÆ¡n', 'Soobin HoÃ ng SÆ¡n', 'NP', 'http://www.nhaccuatui.com/bai-hat/phia-sau-mot-co-gai-soobin-hoang-son.oqiVbrTwTD3H.html'),
(43, 'Thu Cuá»‘i', 'Háº±ng BingBoong, Yanbi, Mr.T', 'Háº±ng BingBoong, Yanbi, Mr.T', 'NP', 'https://nhac.vn/bai-hat/thu-cuoi-hang-bingboong-yanbi-mr-t-sooJmrk');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`username`, `password`, `email`, `fullname`, `birthday`, `sex`) VALUES
('congly1007', '55fb1ba9ac2f198830efce12b58539c6', 'bbb@gmail.com', 'ggggg', '10/11/1998', 'Nam'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'bbllllb@gmail.com', 'ggggg', '10/9/1998', 'Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `music`
--

CREATE TABLE `music` (
  `id` int(20) NOT NULL,
  `music` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `music`
--

INSERT INTO `music` (`id`, `music`, `type`) VALUES
(19, 'Rock Music', 'NR'),
(24, 'Nhac Acoustic', 'NN'),
(25, 'Ballad Music', 'NB');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `listsong`
--
ALTER TABLE `listsong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `listsong`
--
ALTER TABLE `listsong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `music`
--
ALTER TABLE `music`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
