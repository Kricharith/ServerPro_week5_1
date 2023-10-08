-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 07:42 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `member` (
  `id` smallint(10) UNSIGNED NOT NULL,
  `username` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dateapply` date DEFAULT NULL,
  `namethai` varchar(100) DEFAULT NULL,
  `nameeng` varchar(100) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `idcard` int(20) DEFAULT NULL,
  `registrarame` varchar(50) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `address` text,
  `tel` varchar(20) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `companyname` varchar(80) DEFAULT NULL,
  `addrcompany` text,
  `telcompany` varchar(20) DEFAULT NULL,
  `membertype` varchar(20) DEFAULT NULL,
  `imagefile` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people`
--
-- INSERT INTO `member` (`id`, `username`, `password`, 'dateapply`, `namethai`, `nameeng`, `sex`, `birthday`, `age`, `nationality`,`idcard`, `registrarame`, `startdate`, `enddate`, `email`, `address`, `tel`, `occupation`, `position`, `companyname`, `addrcompany`, `telcompany`, `membertype`, `imagefile`)VALUES
-- (1, 'somsak', 'somsak123', '2023-10-5',`สมศักดิ์ มีทอง`, `Somsak Methong`, `ชาย`, `1993-05-15`, `30`, `ไทย`,`1133423454325`, `นายสมปอง ศรีชัย`, `2020-8-12`, `2025-8-12`, 'somsak@example.com', `1 หมู่1 ตำบล บางนา อำเภอ บางกรวย จังหวัดนนทบุรี 11110`, `0987847362`, `วิศวกร`, `ผู้จัดการ`, `WDC Company`, `7/8 หมู่4 ตำบล บางนา อำเภอ บางกรวย จังหวัดนนทบุรี 11110`, `098858495`, `สามัญ`, `somsak.jpg`),
-- (2, 'sompong', 'sompong123', '2023-10-5',`สมปอง สุขดี`, `Sompong Sukdi`, `ชาย`, `1982-03-05`, `41`, `ไทย`,`1133423454325`, `นายธนาธร พรหมสัมพันธ์`, `2020-5-15`, `2025-5-15`, 'sompong@example.com', `99/5 หมู่5 ตำบล คลองหนึ่ง อำเภอ ลาดกระบัง จังหวัดกรุงเทพมหานคร 10520`, `0866435743`, `วิศวกร`, `วิศวกรโยธา`, `WDC Company `, `7/8 หมู่4 ตำบล บางนา อำเภอ บางกรวย จังหวัดนนทบุรี 11110`, `09885939453`, `สามัญ`, `sompong.jpg`),
-- (3, 'nuttawut ', 'nuttawut123', '2023-10-6',`ณัฐวุฒิ สุขใจ`, `Nuttawut Sukjai`, `ชาย`, `1985-09-05,`, `38`, `ไทย`,`1133423454325`, `นายวิชัย รัตนศรี`, `2020-8-4`, `2025-8-4`, 'nuttawut@example.com', `56/7 หมู่6 ตำบล หนองเพราง อำเภอ พุทธมณฑล จังหวัดนครปฐม 73170`, `0988647321`, `ช่างไฟฟ้า`, `ช่างไฟฟ้าผู้ชำนาญการ`, `ABC Company `, `65/3 หมู่3 ตำบล สุขสวัสดิ์ อำเภอ ภูเขาไชย จังหวัดเชียงใหม่ 50180`, `0922746321`, `สมทบ`, `nuttawut.jpg`),
-- (4, 'warakorn ', 'warakorn123', '2023-10-7',`วรากร สุขสาธร`, `Warakorn Suksathorn`, `ชาย`, `1988-03-05`, `35`, `ไทย`,`1133423454325`, `นายนันทวัฒน์ ชาติสุวรรณ`, `2020-6-2`, `2025-6-2`, 'warakorn@example.com', `42/3 หมู่3 ตำบล สุขสวัสดิ์ อำเภอ ภูเขาไชย จังหวัดเชียงใหม่ 50180 18240`, `0984335342`, `วิศวกร`, `วิศวกรโยธา`, `BKK Company `, `56/8 หมู่5 ตำบล คลองหนึ่ง อำเภอ ลาดกระบัง จังหวัดกรุงเทพมหานคร 10520`, `0988905967`, `สามัญ`, `warakorn.jpg`),
-- (5, 'kanjana', 'kanjana123', '2023-10-7',`กาญจนา อ่อนดี`, `Kanjana Ondi`, `หญิง`, `1979-09-05`, `44`, `ไทย`,`1133423454325`, `นายอภิชาติ พงศ์พิริยะ`, `2020-2-12`, `2025-2-12`, 'kanjana@example.com', `27 หมู่2 ตำบล วังหิน อำเภอ หาดใหญ่ จังหวัดสงขลา 90110`, `0924665432543`, `นักธุรกิจ`, ` ผู้จัดการธุรกิจ`, `ABC Company `, `65/3 หมู่3 ตำบล สุขสวัสดิ์ อำเภอ ภูเขาไชย จังหวัดเชียงใหม่ 50180`, `09566534532`, `สมทบ`, `kanjana.jpg`),
-- (6, 'warisara', 'warisara123', '2023-10-7',`วริศรา มีชัย`, `Warisara Meechai`, `หญิง`, `1983-01-25`, `40`, `ไทย`,`1133423454325`, `นายสุทธิพงศ์ มีทอง`, `2020-1-16`, `2025-1-16`, 'warisara@example.com', `88/9 หมู่1 ตำบล หนองหว้า อำเภอ บางละมุง จังหวัดชลบุรี 20150`, `0957483953`, `วิศวกร`, `วิศวกรเครื่องกล`, `WDC Company `, `7/8 หมู่4 ตำบล บางนา อำเภอ บางกรวย จังหวัดนนทบุรี 11110`, `0922434221`, `สมทบ`, `warisara.jpg`),
-- (7, 'wirat', 'wirat123', '2023-10-7',`วิรัช สมชาย`, `Wirat Samchai`, `ชาย`, `1983-01-25`, `40`, `ไทย`,`1133423454325`, `นายวีระชัย สมบูรณ์`, `2020-3-6`, `2025-3-6`, 'wirat@example.com', `12/4 หมู่3 ตำบล บ้านหมี่ อำเภอ สูงเนิน จังหวัดนครราชสีมา 30210`, `0807584632`, `นักธุรกิจ`, ` ผู้จัดการธุรกิจ`, `MAX Company `, `65/3 หมู่3 ตำบล สุขสวัสดิ์ อำเภอ ภูเขาไชย จังหวัดเชียงใหม่ 50180`, `0922345643`, `สามัญ`, `wirat.jpg`),
-- (8, 'prasit', 'prasit123', '2023-10-8',`ประสิทธิ์ ทวีกาญจน์`, `Prasit Taweeakan`, `ชาย`, ` 1981-05-15,`, `42`, `ไทย`,`1133423454325`, `นายสุกฤษฏิ์ รัตน์พันธุ์`, `2020-9-9`, `2025-9-9`, 'prasit@example.com', `33/6 หมู่4 ตำบล คลองสาม อำเภอ หนองบัว จังหวัดอุดรธานี 41130`, `0984564322`, `วิศวกร`, `วิศวกรเครื่องกล`, `MIN Company `, `29/6 หมู่4 ตำบล คลองสาม อำเภอ หนองบัว จังหวัดอุดรธานี 41130`, `0987564738`, `สมทบ`, `prasit.jpg`),
-- (9, 'wongthep', 'wongthep123', '2023-10-8',`วงศ์เทพ พรหมสังข์`, `Wongthep Promsang`, `ชาย`, `2000-07-15`, `23`, `ไทย`,`1133423454325`, `นายวิษณุ สมบูรณ์สุข`, `2020-5-10`, `2025-5-10`, 'somjitr@example.com', `2/11 หมู่5 ตำบล หนองปรือ อำเภอ บางละมุง จังหวัดชลบุรี 20150`, `0956473221`, `วิศวกร`, `ผู้จัดการ`, `POM Company `, `3/6 หมู่3 ตำบล บ้านหมี่ อำเภอ สูงเนิน จังหวัดนครราชสีมา 30210`, `0933775465`, `สามัญ`, `wongthep.jpg`),
-- (10, 'somjitr', 'somjitr123', '2023-10-9',`สมจิตร วงศ์วิวัฒน์`, `Somjitr Wongwiwat`, `หญิง`, `1993-05-15`, `30`, `ไทย`,`1133423454325`, `นายนิวัฒน์ วัชรชาติ`, `2020-6-11`, `2025-6-11`, 'somjitr@example.com', `64/1 หมู่6 ตำบล ท่านา อำเภอ ท่าอุเทน จังหวัดตราด 23170`, `0977424852`, `วิศวกร`, `วิศวกรอิเล็กทรอนิกส์`, `WDC Company `, `7/8 หมู่4 ตำบล บางนา อำเภอ บางกรวย จังหวัดนนทบุรี 11110`, `0786575748`, `สามัญ`, `somjitr.jpg`),
-- (11, 'witthaya', 'witthaya123', '2023-10-9',`วิทยา สุขใจ`, `Witthaya Sukjai`, `ชาย`, `1989-01-25`, `33`, `ไทย`,`1133423454325`, `นายภัทรพงศ์ ศรีเกิด`, `2020-6-2`, `2025-6-2`, 'witthaya@example.com', `56/12 หมู่1 ตำบล หนองหว้า อำเภอ บางละมุง จังหวัดชลบุรี 20150`, `0922746323`, `วิศวกร`, `วิศวกรโยธา`, `APO Company `, `27/7 หมู่6 ตำบล หนองเพราง อำเภอ พุทธมณฑล จังหวัดนครปฐม 73170`, `0988675869`, `สมทบ`, `witthaya.jpg`),
-- (12, 'suwimol', 'suwimol123', '2023-10-10',` สุวิมล วงศ์รัตน์`, `Suwimol Wongrattan`, `หญิง`, `1999-09-25`, `24`, `ไทย`,`1133423454325`, `นายสุภาพ สมสวย`, `2020-9-1`, `2025-9-1`, 'suwimol@example.com', `2/8 หมู่5 ตำบล หนองปรือ อำเภอ บางละมุง จังหวัดชลบุรี 20150`, `0922764633`, `วิศวกร`, `วิศวกรไฟฟ้า`, `ABC Company `, `65/3 หมู่3 ตำบล สุขสวัสดิ์ อำเภอ ภูเขาไชย จังหวัดเชียงใหม่ 50180`, `0932456656`, `สมทบ`, `suwimol.jpg`),
-- (13, 'sommai', 'sommai123', '2023-10-10',`สมหมาย ทวีวรรณ`, `Sommai Tawiwann`, `ชาย`, `1993-05-15`, `30`, `ไทย`,`1133423454325`, `นายวิเชียร พงศาวัฒนา`, `2020-10-6`, `2025-10-6`, 'sommai@example.com', `56/8 หมู่5 ตำบล คลองหนึ่ง อำเภอ ลาดกระบัง จังหวัดกรุงเทพมหานคร 10520`, `0987678594`, `วิศวกร`, `วิศวกรเครื่องกล`, `CCK Company `, `33/4 หมู่2 ตำบล วังหิน อำเภอ หาดใหญ่ จังหวัดสงขลา 90110`, `0922756432`, `สมทบ`, `sommai.jpg`),
-- (14, 'somjai', 'somjai123', '2023-10-10',`สมใจ สุขใจดี`, `Somjai Sukjaidi`, `หญิง`, `1982-03-05`, `41`, `ไทย`,`1133423454325`, `นายณัฐพล รัตนวัน`, `2020-2-9`, `2025-2-9`, 'somjai@example.com', `8/14 หมู่5 ตำบล หนองปรือ อำเภอ บางละมุง จังหวัดชลบุรี 20150`, `0988756477`, `ช่างไฟฟ้า`, `ช่างไฟฟ้าผู้ชำนาญการ`, `BKK Company `, `56/8 หมู่5 ตำบล คลองหนึ่ง อำเภอ ลาดกระบัง จังหวัดกรุงเทพมหานคร 10520`, `0999575869`, `สมทบ`, `somjai.jpg`),
-- (15, 'surapol', 'surapol123', '2023-10-10',`สุรพล ใจดี`, `Surapol Jaidi`, `ชาย`, `1992-07-25`, `31`, `ไทย`,`1133423454325`, `นางอรวรรณ ชินวัตร`, `2020-12-13`, `2025-12-13`, 'surapol@example.com', `123/4 หมู่5 ตำบล คลองหนึ่ง อำเภอ ลาดกระบัง จังหวัดกรุงเทพมหานคร 10520`, `0998776546`, `นักธุรกิจ`, ` ผู้จัดการธุรกิจ`, `BKK Company `, `56/8 หมู่5 ตำบล คลองหนึ่ง อำเภอ ลาดกระบัง จังหวัดกรุงเทพมหานคร 10520`, `0998675744`, `สามัญ`, `surapol.jpg`);
INSERT INTO `member` (`id`, `username`, `password`, `dateapply`, `namethai`, `nameeng`, `sex`, `birthday`, `age`, `nationality`, `idcard`, `registrarame`, `startdate`, `enddate`, `email`, `address`, `tel`, `occupation`, `position`, `companyname`, `addrcompany`, `telcompany`, `membertype`, `imagefile`)
VALUES
(1, 'somsak', 'somsak123', '2023-10-5', 'สมศักดิ์ มีทอง', 'Somsak Methong', 'ชาย', '1993-05-15', 30, 'ไทย', '1133423454325', 'นายสมปอง ศรีชัย', '2020-8-12', '2025-8-12', 'somsak@example.com', '1 หมู่1 ตำบล บางนา อำเภอ บางกรวย จังหวัดนนทบุรี 11110', '0987847362', 'วิศวกร', 'ผู้จัดการ', 'WDC Company', '7/8 หมู่4 ตำบล บางนา อำเภอ บางกรวย จังหวัดนนทบุรี 11110', '098858495', 'สามัญ', 'somsak.jpg'),
(2, 'sompong', 'sompong123', '2023-10-5', 'สมปอง สุขดี', 'Sompong Sukdi', 'ชาย', '1982-03-05', 41, 'ไทย', '1133423454325', 'นายธนาธร พรหมสัมพันธ์', '2020-5-15', '2025-5-15', 'sompong@example.com', '99/5 หมู่5 ตำบล คลองหนึ่ง อำเภอ ลาดกระบัง จังหวัดกรุงเทพมหานคร 10520', '0866435743', 'วิศวกร', 'วิศวกรโยธา', 'WDC Company ', '7/8 หมู่4 ตำบล บางนา อำเภอ บางกรวย จังหวัดนนทบุรี 11110', '09885939453', 'สามัญ', 'sompong.jpg'),
(3, 'nuttawut ', 'nuttawut123', '2023-10-6', 'ณัฐวุฒิ สุขใจ', 'Nuttawut Sukjai', 'ชาย', '1985-09-05', 38, 'ไทย', '1133423454325', 'นายวิชัย รัตนศรี', '2020-8-4', '2025-8-4', 'nuttawut@example.com', '56/7 หมู่6 ตำบล หนองเพราง อำเภอ พุทธมณฑล จังหวัดนครปฐม 73170', '0988647321', 'ช่างไฟฟ้า', 'ช่างไฟฟ้าผู้ชำนาญการ', 'ABC Company ', '65/3 หมู่3 ตำบล สุขสวัสดิ์ อำเภอ ภูเขาไชย จังหวัดเชียงใหม่ 50180', '0922746321', 'สมทบ', 'nuttawut.jpg'),
(4, 'warakorn ', 'warakorn123', '2023-10-7', 'วรากร สุขสาธร', 'Warakorn Suksathorn', 'ชาย', '1988-03-05', 35, 'ไทย', '1133423454325', 'นายนันทวัฒน์ ชาติสุวรรณ', '2020-6-2', '2025-6-2', 'warakorn@example.com', '42/3 หมู่3 ตำบล สุขสวัสดิ์ อำเภอ ภูเขาไชย จังหวัดเชียงใหม่ 50180 18240', '0984335342', 'วิศวกร', 'วิศวกรโยธา', 'BKK Company ', '56/8 หมู่5 ตำบล คลองหนึ่ง อำเภอ ลาดกระบัง จังหวัดกรุงเทพมหานคร 10520', '0988905967', 'สามัญ', 'warakorn.jpg'),
(5, 'kanjana', 'kanjana123', '2023-10-7', 'กาญจนา อ่อนดี', 'Kanjana Ondi', 'หญิง', '1979-09-05', 44, 'ไทย', '1133423454325', 'นายอภิชาติ พงศ์พิริยะ', '2020-2-12', '2025-2-12', 'kanjana@example.com', '27 หมู่2 ตำบล วังหิน อำเภอ หาดใหญ่ จังหวัดสงขลา 90110', NULL, 'นักธุรกิจ', ' ผู้จัดการธุรกิจ', 'ABC Company ', '65/3 หมู่3 ตำบล สุขสวัสดิ์ อำเภอ ภูเขาไชย จังหวัดเชียงใหม่ 50180', '09566534532', 'สมทบ', 'kanjana.jpg'),
(6, 'warisara', 'warisara123', '2023-10-7', 'วริศรา มีชัย', 'Warisara Meechai', 'หญิง', '1983-01-25', 40, 'ไทย', '1133423454325', 'นายสุทธิพงศ์ มีทอง', '2020-1-16', '2025-1-16', 'warisara@example.com', '88/9 หมู่1 ตำบล หนองหว้า อำเภอ บางละมุง จังหวัดชลบุรี 20150', '0957483953', 'วิศวกร', 'วิศวกรเครื่องกล', 'WDC Company ', '7/8 หมู่4 ตำบล บางนา อำเภอ บางกรวย จังหวัดนนทบุรี 11110', '0922434221', 'สมทบ', 'warisara.jpg'),
(7, 'wirat', 'wirat123', '2023-10-7', 'วิรัช สมชาย', 'Wirat Samchai', 'ชาย', '1983-01-25', 40, 'ไทย', '1133423454325', 'นายวีระชัย สมบูรณ์', '2020-3-6', '2025-3-6', 'wirat@example.com', '12/4 หมู่3 ตำบล บ้านหมี่ อำเภอ สูงเนิน จังหวัดนครราชสีมา 30210', '0807584632', 'นักธุรกิจ', ' ผู้จัดการธุรกิจ', 'MAX Company ', '65/3 หมู่3 ตำบล สุขสวัสดิ์ อำเภอ ภูเขาไชย จังหวัดเชียงใหม่ 50180', '0922345643', 'สามัญ', 'wirat.jpg'),
(8, 'prasit', 'prasit123', '2023-10-8', 'ประสิทธิ์ ทวีกาญจน์', 'Prasit Taweeakan', 'ชาย', '1981-05-15', 42, 'ไทย', '1133423454325', 'นายสุกฤษฏิ์ รัตน์พันธุ์', '2020-9-9', '2025-9-9', 'prasit@example.com', '33/6 หมู่4 ตำบล คลองสาม อำเภอ หนองบัว จังหวัดอุดรธานี 41130', NULL, 'วิศวกร', 'วิศวกรเครื่องกล', 'MIN Company ', '29/6 หมู่4 ตำบล คลองสาม อำเภอ หนองบัว จังหวัดอุดรธานี 41130', '0987564738', 'สมทบ', 'prasit.jpg'),
(9, 'wongthep', 'wongthep123', '2023-10-8', 'วงศ์เทพ พรหมสังข์', 'Wongthep Promsang', 'ชาย', '2000-07-15', 23, 'ไทย', '1133423454325', 'นายวิษณุ สมบูรณ์สุข', '2020-5-10', '2025-5-10', 'somjitr@example.com', '2/11 หมู่5 ตำบล หนองปรือ อำเภอ บางละมุง จังหวัดชลบุรี 20150', '0956473221', 'วิศวกร', 'ผู้จัดการ', 'POM Company ', '3/6 หมู่3 ตำบล บ้านหมี่ อำเภอ สูงเนิน จังหวัดนครราชสีมา 30210', '0933775465', 'สามัญ', 'wongthep.jpg'),
(10, 'somjitr', 'somjitr123', '2023-10-9', 'สมจิตร วงศ์วิวัฒน์', 'Somjitr Wongwiwat', 'หญิง', '1993-05-15', 30, 'ไทย', '1133423454325', 'นายนิวัฒน์ วัชรชาติ', '2020-6-11', '2025-6-11', 'somjitr@example.com', '64/1 หมู่6 ตำบล ท่านา อำเภอ ท่าอุเทน จังหวัดตราด 23170', NULL, 'วิศวกร', 'วิศวกรอิเล็กทรอนิกส์', 'WDC Company ', '7/8 หมู่4 ตำบล บางนา อำเภอ บางกรวย จังหวัดนนทบุรี 11110', '0786575748', 'สามัญ', 'somjitr.jpg'),
(11, 'witthaya', 'witthaya123', '2023-10-9', 'วิทยา สุขใจ', 'Witthaya Sukjai', 'ชาย', '1989-01-25', 33, 'ไทย', '1133423454325', 'นายภัทรพงศ์ ศรีเกิด', '2020-6-2', '2025-6-2', 'witthaya@example.com', '56/12 หมู่1 ตำบล หนองหว้า อำเภอ บางละมุง จังหวัดชลบุรี 20150', '0922746323', 'วิศวกร', 'วิศวกรโยธา', 'APO Company ', '27/7 หมู่6 ตำบล หนองเพราง อำเภอ พุทธมณฑล จังหวัดนครปฐม 73170', '0988675869', 'สมทบ', 'witthaya.jpg'),
(12, 'suwimol', 'suwimol123', '2023-10-10', 'สุวิมล วงศ์รัตน์', 'Suwimol Wongrattan', 'หญิง', '1999-09-25', 24, 'ไทย', '1133423454325', 'นายสุภาพ สมสวย', '2020-9-1', '2025-9-1', 'suwimol@example.com', '2/8 หมู่5 ตำบล หนองปรือ อำเภอ บางละมุง จังหวัดชลบุรี 20150', NULL, 'วิศวกร', 'วิศวกรไฟฟ้า', 'ABC Company', '65/3 หมู่3 ตำบล สุขสวัสดิ์ อำเภอ ภูเขาไชย จังหวัดเชียงใหม่ 50180', '0932456656', 'สมทบ', 'suwimol.jpg'),
(13, 'sommai', 'sommai123', '2023-10-10', 'สมหมาย ทวีวรรณ', 'Sommai Tawiwann', 'ชาย', '1993-05-15', 30, 'ไทย', '1133423454325', 'นายวิเชียร พงศาวัฒนา', '2020-10-6', '2025-10-6', 'sommai@example.com', '56/8 หมู่5 ตำบล คลองหนึ่ง อำเภอ ลาดกระบัง จังหวัดกรุงเทพมหานคร 10520', '0987678594', 'วิศวกร', 'วิศวกรเครื่องกล', 'CCK Company', '33/4 หมู่2 ตำบล วังหิน อำเภอ หาดใหญ่ จังหวัดสงขลา 90110', '0922756432', 'สมทบ', 'sommai.jpg'),
(14, 'somjai', 'somjai123', '2023-10-10', 'สมใจ สุขใจดี', 'Somjai Sukjaidi', 'หญิง', '1982-03-05', 41, 'ไทย', '1133423454325', 'นายณัฐพล รัตนวัน', '2020-2-9', '2025-2-9', 'somjai@example.com', '8/14 หมู่5 ตำบล หนองปรือ อำเภอ บางละมุง จังหวัดชลบุรี 20150', '0988756477', 'ช่างไฟฟ้า', 'ช่างไฟฟ้าผู้ชำนาญการ', 'BKK Company', '56/8 หมู่5 ตำบล คลองหนึ่ง อำเภอ ลาดกระบัง จังหวัดกรุงเทพมหานคร 10520', '0999575869', 'สมทบ', 'somjai.jpg'),
(15, 'surapol', 'surapol123', '2023-10-10', 'สุรพล ใจดี', 'Surapol Jaidi', 'ชาย', '1992-07-25', 31, 'ไทย', '1133423454325', 'นางอรวรรณ ชินวัตร', '2020-12-13', '2025-12-13', 'surapol@example.com', '123/4 หมู่5 ตำบล คลองหนึ่ง อำเภอ ลาดกระบัง จังหวัดกรุงเทพมหานคร 10520', NULL, 'นักธุรกิจ', 'ผู้จัดการธุรกิจ', 'BKK Company', '56/8 หมู่5 ตำบล คลองหนึ่ง อำเภอ ลาดกระบัง จังหวัดกรุงเทพมหานคร 10520', '0998675744', 'สามัญ', 'surapol.jpg');



--
-- Indexes for dumped member
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped member
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
