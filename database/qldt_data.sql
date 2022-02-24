-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 03:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qldt_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(6) NOT NULL,
  `subject_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `couse_id` int(11) NOT NULL,
  `class_size` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `subject_id`, `teacher_id`, `couse_id`, `class_size`, `time`) VALUES
(130672, 'SSH1151', 'hiep.pc@hust.edu.vn', 20211, 0, '2022-01-04 22:29:11'),
(713555, 'ET3260', 'hiep.pc@hust.edu.vn', 20211, 0, '2022-01-04 22:29:11'),
(713556, 'ET3260', 'hiep.pc@hust.edu.vn ', 20211, 0, '2022-01-04 22:51:34'),
(713557, 'ET3260', 'tung.nm@hust.edu.vn	', 0, 0, '2022-01-04 22:53:22'),
(713558, 'ET3260', 'hiep.pc@hust.edu.vn', 20212, 0, '2022-01-05 12:45:03'),
(789547, 'RT1223', 'tung.nm@hust.edu.vn', 20212, 0, '2022-01-04 22:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `couse`
--

CREATE TABLE `couse` (
  `couse_id` int(11) NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `couse`
--

INSERT INTO `couse` (`couse_id`, `details`) VALUES
(20211, 'Kỳ I năm học 2021-2022'),
(20212, 'Kỳ II năm học 2021-2022'),
(20213, 'Kỳ hè năm học 2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `khoa_data`
--

CREATE TABLE `khoa_data` (
  `Ma_Khoa` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Ten_Khoa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Dia_Chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoa_data`
--

INSERT INTO `khoa_data` (`Ma_Khoa`, `Ten_Khoa`, `Dia_Chi`) VALUES
('fpt', 'Khoa Lý luận Chính trị', 'D3 - 306'),
('gdqp', 'Khoa Giáo dục Quốc phòng & An ninh', 'D3 - 504'),
('gdtc', 'Khoa Giáo dục Thể chất', 'Tầng 2 - Nhà thi đấu Bách Khoa'),
('inest', 'Viện Khoa học và Công nghệ Môi trường', 'C10 - 312'),
('mse', 'Viện Khoa học và Kỹ thuật Vật liệu', 'C5 - 315'),
('pdt', 'Phòng Đào Tạo', 'Nhà C1'),
('sami', 'Viện Toán ứng dụng và Tin học', 'D3 - 105A'),
('sbf', 'Viện Công nghệ Sinh học và Công nghệ Thực phẩm', 'C4 - 210'),
('sce', 'Viện Kỹ thuật Hóa học', 'C4 - 214'),
('see', 'Viện Điện', 'C1 - 320'),
('sem', 'Viện Kinh tế và Quản lý', 'C9 - 303,304'),
('sep', 'Viện Vật lý Kỹ thuật', 'C10-101'),
('sepd', 'Viện Sư phạm Kỹ thuật', 'D3-5-301'),
('set', 'Viện Điện tử - Viễn thông', 'C9 - 405'),
('sheer', 'Viện Khoa học và Công nghệ Nhiệt lạnh', 'C7 - T2- 204'),
('sme', 'Viện Cơ khí', 'C10 - 304'),
('sofl', 'Viện Ngoại ngữ', 'D4 - 209'),
('soict', 'Viện Công nghệ Thông tin và Truyền thông', 'Nhà B1'),
('ste', 'Viện Cơ khí Động lực', 'C6 - 102'),
('tx', 'Viện Dệt may - Da giầy và Thời trang', 'C5-216');

-- --------------------------------------------------------

--
-- Table structure for table `mark_data`
--

CREATE TABLE `mark_data` (
  `student_id` int(8) NOT NULL,
  `subject_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(6) NOT NULL,
  `couse_id` int(11) NOT NULL,
  `midterm` int(2) DEFAULT NULL,
  `final_mark` int(2) DEFAULT NULL,
  `s_mark` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mark_data`
--

INSERT INTO `mark_data` (`student_id`, `subject_id`, `class_id`, `couse_id`, `midterm`, `final_mark`, `s_mark`) VALUES
(20193182, 'ET3260', 713555, 20211, 9, 5, 'C'),
(20193456, 'ET3260', 713555, 20211, 6, 3, 'F'),
(20193456, 'SSH115', 130672, 20211, 10, 10, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(8) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth_day` date NOT NULL,
  `khoa` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `fullname`, `birth_day`, `khoa`, `address`, `email`, `time`) VALUES
(20162332, 'Nguyễn Quang Hải', '1997-12-12', 'see', 'Hải Dương', 'hai.nq162332@sis.hust.edu.vn', '2022-01-03 16:55:19'),
(20182698, 'Trần Văn Nam', '2000-12-12', 'ste', 'Hà Tĩnh', 'nam.tv192698@sis.hust.edu.vn', '2022-01-03 16:55:19'),
(20193182, 'Nguyễn Mạnh Tùng', '2001-07-05', 'set', 'Nam Định', 'tung.nm193182@sis.hust.edu.vn', '2022-01-03 16:55:19'),
(20193183, 'Đinh Quỳnh Trang', '2001-12-30', 'soict', 'Nam Định', 'trang.dq193183', '2022-01-03 16:55:19'),
(20193227, 'Trần Văn An', '2022-01-20', 'sep', 'Hà Nam', 'an.tv193227@sis.hust.edu.vn', '2022-01-03 17:00:21'),
(20193256, 'Nguyễn Thị Hường', '2022-01-05', 'sep', 'Hà Nội', 'huong.nt193256@sis.hust.edu.vn', '2022-01-03 16:58:34'),
(20193333, 'Trần Đức An', '2022-01-18', 'see', '1 Đại Cồ Việt', 'an.td193333@sis.hust.edu.vn', '2022-01-07 21:44:40'),
(20193456, 'Nguyễn Trọng Nhân', '2001-05-31', 'set', 'Nghệ An', 'nhan.nt193456@sis.hust.edu.vn', '2022-01-03 16:55:19'),
(20193625, 'Nguyễn Danh Đức', '2001-05-31', 'set', 'Hà Nội', 'duc.nd193625@sis.hust.edu.vn', '2022-01-03 16:55:19'),
(20201235, 'Lưu Tuấn Đức', '2002-12-12', 'sepd', 'Ý Yên', 'duc.lt201235@sis.hust.edu.vn', '2022-01-03 16:55:19'),
(20201932, 'Nguyễn Hùng Dương', '2001-04-26', 'see', 'Nam Định', 'Duong.NH201932@sis.hust.edu.vn', '2022-01-03 16:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_id` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_Khoa` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `So_Tin` float NOT NULL,
  `Trong_So` float NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_name`, `subject_id`, `Ma_Khoa`, `So_Tin`, `Trong_So`, `time`) VALUES
('Kỹ Thuật Phần Mềm Ứng Dụng', 'ET3260', 'set', 2, 0.3, '2022-01-03 23:16:40'),
('Bóng rổ', 'RT1223', 'gdtc', 0, 0.3, '2022-01-03 23:16:40'),
('Tư tưởng Hồ Chí Minh', 'SSH1151', 'fpt', 2, 0.3, '2022-01-03 23:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `Ma_Khoa` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `fullname`, `birthday`, `Ma_Khoa`, `address`, `phone`, `password`, `level`, `time`) VALUES
('admin@hust.edu.vn', 'Nguyễn Mạnh Tùng', '2001-07-05', 'pdt', 'Nam Định', 843260856, 'e10adc3949ba59abbe56e057f20f883e', 1, '2022-01-03 17:14:16'),
('hiep.pc@hust.edu.vn', 'Phạm Chính Hiệp', '2002-06-13', 'set', 'Bắc Ninh', 978632541, 'e10adc3949ba59abbe56e057f20f883e', 0, '2022-01-03 17:14:16'),
('nam.nd@hust.edu.vn', 'Nguyễn Đức Nam', '2017-05-23', 'gdqp', 'Ý Yên', 265654684, 'e10adc3949ba59abbe56e057f20f883e', 0, '2022-01-03 17:27:46'),
('tung.nm@hust.edu.vn', 'Nguyễn Mạnh Tùng', '2001-07-05', 'set', 'Nam Định', 843260856, 'e10adc3949ba59abbe56e057f20f883e', 0, '2022-01-03 17:26:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`,`subject_id`,`teacher_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `couse`
--
ALTER TABLE `couse`
  ADD PRIMARY KEY (`couse_id`);

--
-- Indexes for table `khoa_data`
--
ALTER TABLE `khoa_data`
  ADD PRIMARY KEY (`Ma_Khoa`),
  ADD UNIQUE KEY `Ma_Khoa` (`Ma_Khoa`);

--
-- Indexes for table `mark_data`
--
ALTER TABLE `mark_data`
  ADD PRIMARY KEY (`student_id`,`subject_id`,`class_id`,`couse_id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `couse_id` (`couse_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD KEY `khoa` (`khoa`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `subject_id` (`subject_id`),
  ADD KEY `Ma_Khoa` (`Ma_Khoa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `Ma_Khoa` (`Ma_Khoa`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `mark_data`
--
ALTER TABLE `mark_data`
  ADD CONSTRAINT `mark_data_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `classes` (`class_id`),
  ADD CONSTRAINT `mark_data_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `mark_data_ibfk_3` FOREIGN KEY (`couse_id`) REFERENCES `couse` (`couse_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`khoa`) REFERENCES `khoa_data` (`Ma_Khoa`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Ma_Khoa`) REFERENCES `khoa_data` (`Ma_Khoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
