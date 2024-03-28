-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2024 at 07:47 AM
-- Server version: 10.8.4-MariaDB
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SellBook`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`) VALUES
(1, './upload/img/banner/StPatrick.jpg'),
(2, './upload/img/banner/WomensHistoryMonth.jpg'),
(3, './upload/img/banner/BlackHistory.jpg'),
(4, './upload/img/banner/Lunar.jpg'),
(5, './upload/img/banner/EsterFavourites.jpg'),
(6, './upload/img/banner/ChildrenSpring.jpg'),
(7, './upload/img/banner/CollectionsRC.jpg'),
(8, './upload/img/banner/SpringBreakTravel.jpg'),
(9, './upload/img/banner/ShelfSteals.jpg'),
(10, './upload/img/banner/TheSchoolofAthens.jpg'),
(11, './upload/img/banner/sen.jpg'),
(12, './upload/img/banner/longden.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bestproduct`
--

CREATE TABLE `bestproduct` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `imgstatus` varchar(1000) NOT NULL,
  `timedelivery` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bestproduct`
--

INSERT INTO `bestproduct` (`id`, `category`, `image`, `name`, `price`, `imgstatus`, `timedelivery`) VALUES
(1, 1, './upload/img/BestProducts/sachvanhoc-tpkd/nhungtamlongcaoca.jpg', 'Những tấm lòng cao ', 55000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(2, 2, './upload/img/BestProducts/sachhocngoaingu-ta/destinationb1.jpg', 'Sách - Destination B1 Grammar and Vocabulary Kèm Đáp Án', 118300, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(3, 3, './upload/img/BestProducts/sachtuduykinangsong/cangkyluatcangtudo.jpg', 'Càng Kỷ Luật, Càng Tự Do', 78000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(4, 4, './upload/img/BestProducts/truyentranhcomic/conan101.jpg', 'Sách - Thám Tử Lừng Danh Conan - Tập 101 - NHBook', 25000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(5, 1, './upload/img/BestProducts/sachvanhoc-tpkd/haisophan.jpg', 'Hai Số Phận (Bìa Cứng) - Tặng Bookmark Happy Life', 211500, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(6, 1, './upload/img/BestProducts/sachvanhoc-tpkd/huckleberryfinn.jpg', 'Những Cuộc Phiêu Lưu Của Huckleberry Finn', 60000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(7, 1, './upload/img/BestProducts/sachvanhoc-tpkd/godfather.jpg', 'Bố Già (Bìa Cứng) (Tái Bản)', 157000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(8, 1, './upload/img/BestProducts/sachvanhoc-tpkd/daigiagatsby.jpg', 'Đại Gia Gatsby', 59000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(9, 1, './upload/img/BestProducts/sachvanhoc-tpkd/khonggiadinh.jpg', 'Không Gia Đình (Phiên Bản Mới) - Tặng kèm bộ Postcard', 120000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(10, 1, './upload/img/BestProducts/sachvanhoc-tpkd/nghinlemotdem.jpg', 'NGHÌN LẺ MỘT ĐÊM (Ấn bản bìa cứng)', 796000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(11, 1, './upload/img/BestProducts/sachvanhoc-tpkd/nhathoducbaparis.jpg', 'Nhà thờ Đức Bà Paris (Bìa Cứng)', 418000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(12, 1, './upload/img/BestProducts/sachvanhoc-tpkd/onggiavabienca.jpg', 'Ông già và biển cả', 128000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(13, 1, './upload/img/BestProducts/sachvanhoc-tpkd/robinsoncrusoe.jpg', 'Robinson Crusoe', 148000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(14, 1, './upload/img/BestProducts/sachvanhoc-tpkd/sherlockholmes.png', 'Sherlock Holmes Toàn Tập (3 Tập - Hộp Đứng) (Bìa Mềm)(Tái Bản', 318000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(15, 1, './upload/img/BestProducts/sachvanhoc-tpkd/tupleucuabactom.jpg', 'Túp Lều Bác Tom', 69000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(16, 2, './upload/img/BestProducts/sachhocngoaingu-ta/giaithichnguphapta.jpg', 'Giải Thích Ngữ Pháp Tiếng Anh (Với Bài Tập Và Đáp Án) (Tái Bản)', 143000, './upload/img/BestProducts/now.png', ''),
(17, 2, './upload/img/BestProducts/sachhocngoaingu-ta/combogiaotrinhhanngu.jpg', 'Combo Trọn Bộ 6 Cuốn Giáo Trình Hán Ngữ', 620000, './upload/img/BestProducts/now.png', ''),
(18, 2, './upload/img/BestProducts/sachhocngoaingu-ta/combogiaotrinhhsk.jpg', 'Combo Giáo Trình Chuẩn HSK 1 - Bài Học (Kèm 1 MP3) và Giáo Trình Chuẩn HSK 1 - Bài Tập (Kèm 1 MP3) ( Tặng Kèm Viết )', 283000, './upload/img/BestProducts/now.png', ''),
(19, 2, './upload/img/BestProducts/sachhocngoaingu-ta/combotienghantonghop.png', 'Combo Tiếng Hàn tổng hợp dành cho người Việt Nam sơ cấp 2 ( Sách giáo trình +  sách bài tập) bản 1 màu ', 158000, './upload/img/BestProducts/now.png', ''),
(20, 2, './upload/img/BestProducts/sachhocngoaingu-ta/tienganhchonguoibatdau.jpg', 'Sách ID Tiếng Anh cho người mới bắt đầu - người mới mất gốc Cô Trang Anh', 154000, './upload/img/BestProducts/now.png', ''),
(21, 2, './upload/img/BestProducts/sachhocngoaingu-ta/combo25chuyendenpta.png', 'Combo 25 Chuyên đề ngữ pháp tiếng anh trọng tâm ( trọn bộ tập 1+2 )', 142000, './upload/img/BestProducts/now.png', ''),
(22, 3, './upload/img/BestProducts/sachtuduykinangsong/camxucosho.jpg', 'OSHO - Cảm Xúc', 131000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(23, 3, './upload/img/BestProducts/sachtuduykinangsong/dacnhantam.jpg', 'Đắc Nhân Tâm (Bìa Mềm)(Tái Bản)', 58000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(24, 3, './upload/img/BestProducts/sachtuduykinangsong/danongsaohoadanbasaokim.jpg', 'Đàn Ông Sao Hỏa Đàn Bà Sao Kim', 130000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(25, 3, './upload/img/BestProducts/sachtuduykinangsong/gian.jpg', 'Giận (Tái Bản 2023)', 104000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(26, 3, './upload/img/BestProducts/sachtuduykinangsong/loisongtoigiancuanguoinhat.jpg', 'Lối Sống Tối Giản Của Người Nhật (Tái Bản)', 80400, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(27, 3, './upload/img/BestProducts/sachtuduykinangsong/yeuosho.jpg', 'Sách OSHO Yêu - Being In Love - Yêu Trong Tỉnh Thức', 114000, './upload/img/BestProducts/now.png', 'Giao siêu tốc 2h'),
(28, 4, './upload/img/BestProducts/truyentranhcomic/boxsethaikyu.jpg', 'Premium Boxset Haikyu!! 2 - Tập: 16 - 30 (Bộ 15 Cuốn) - Tặng Kèm Quà Bí Mật', 558000, './upload/img/BestProducts/now.png', 'Giao hàng siêu tốc 2h'),
(29, 4, './upload/img/BestProducts/truyentranhcomic/combonguoibataigioivungsaga.png', 'Combo Người Bà Tài Giỏi Vùng Saga (Tập 1+2+3+4+5+6+7+8)_Tặng Kèm Khóa và Bookmark', 383500, './upload/img/BestProducts/now.png', 'Giao hàng siêu tốc 2h'),
(30, 4, './upload/img/BestProducts/truyentranhcomic/doraemonphieuluuxuquy.jpg', 'Doraemon Movie Story: Tân Nobita Và Chuyến Phiêu Lưu Vào Xứ Quỷ - 7 Dũng Sĩ Phép Thuật', 30000, './upload/img/BestProducts/now.png', 'Giao hàng siêu tốc 2h'),
(31, 4, './upload/img/BestProducts/truyentranhcomic/onepiece99.jpg', 'One Piece - Tập 99', 25000, './upload/img/BestProducts/now.png', 'Giao hàng siêu tốc 2h'),
(32, 4, './upload/img/BestProducts/truyentranhcomic/thanhguomdietquy4.jpg', 'Thanh Gươm Diệt Quỷ Tập 4: Lưỡi Gươm Mạnh Mẽ', 23800, './upload/img/BestProducts/now.png', 'Giao hàng siêu tốc 2h'),
(33, 4, './upload/img/BestProducts/truyentranhcomic/tokyorevenger4.jpg', 'Tokyo Revengers - Tập 4', 72400, './upload/img/BestProducts/now.png', 'Giao hàng siêu tốc 2h');

-- --------------------------------------------------------

--
-- Table structure for table `brandofficial`
--

CREATE TABLE `brandofficial` (
  `id` int(11) NOT NULL,
  `imgbook` varchar(1000) NOT NULL,
  `imgbrand` varchar(1000) NOT NULL,
  `title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brandofficial`
--

INSERT INTO `brandofficial` (`id`, `imgbook`, `imgbrand`, `title`) VALUES
(1, './upload/img/BrandOfficial/book/hieuvetraitim.jpg', './upload/img/BrandOfficial/brand/firstnews.jpg', 'Sách best seller giảm đến 40%'),
(2, './upload/img/BrandOfficial/book/1980books.jpg', './upload/img/BrandOfficial/brand/1980books.png', ''),
(3, './upload/img/BrandOfficial/book/fahasa.jpg', './upload/img/BrandOfficial/brand/fahasa.jpg', ''),
(4, './upload/img/BrandOfficial/book/giver.png', './upload/img/BrandOfficial/brand/giver.jpg', ''),
(5, './upload/img/BrandOfficial/book/hocmai.png', './upload/img/BrandOfficial/brand/hocmai.png', ''),
(6, './upload/img/BrandOfficial/book/nhanam.jpg', './upload/img/BrandOfficial/brand/nhanam.png', ''),
(7, './upload/img/BrandOfficial/book/nhanvan.png', './upload/img/BrandOfficial/brand/nhanvan.jpg', ''),
(8, './upload/img/BrandOfficial/book/riobook.jpg', './upload/img/BrandOfficial/brand/riobook.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `careproduct`
--

CREATE TABLE `careproduct` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `imgstatus` varchar(1000) NOT NULL,
  `timedelivery` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careproduct`
--

INSERT INTO `careproduct` (`id`, `image`, `name`, `price`, `imgstatus`, `timedelivery`) VALUES
(1, './upload/img/ProductsCare/dichhach.jpg', 'Dịch Hạch (Nobel Văn Chương 1957)', 95000, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(2, './upload/img/ProductsCare/khihoithohoathinhkhong.jpg', 'Khi Hơi Thở Hóa Thinh Không', 79100, './upload/img/ProductsCare/day.png', 'Giao thứ hai, 04/03'),
(3, './upload/img/ProductsCare/doigiohu.jpg', 'Đồi Gió Hú (Tái Bản)', 80500, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(4, './upload/img/ProductsCare/utopia.jpg', 'Utopia - Địa đàng trần gian (Tái Bản 2020)', 44000, './upload/img/ProductsCare/day.png', 'Giao thứ hai, 04/03'),
(5, './upload/img/ProductsCare/nguoiduadieu.jpg', 'Người Đua Diều (Tái Bản 2018)', 100000, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(6, './upload/img/ProductsCare/buocchamlaigiuathegianvoiva.jpg', 'Bước Chậm Lại Giữa Thế Gian Vội Vã (Tái Bản)', 63300, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(7, './upload/img/ProductsCare/motthoangtarucroonhangian.jpg', 'Một Thoáng Ta Rực Rỡ Ở Nhân Gian', 100000, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(8, './upload/img/ProductsCare/dieukydieuotiemtaphoanamiya.jpg', 'Điều Kỳ Diệu Của Tiệm Tạp Hóa NAMIYA (Tái Bản)', 81400, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(9, './upload/img/ProductsCare/danhthucconnguoiphithuongtrongban.jpg', 'Sách Đánh Thức Con Người Phi Thường Trong Bạn', 114900, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(10, './upload/img/ProductsCare/4thoauoc.jpg', 'Bốn Thỏa Ước', 84300, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(11, './upload/img/ProductsCare/48nguyentacquyenluc.jpg', '48 Nguyên Tắc Chủ Chốt Của Quyền Lực (Tái Bản 2020)', 141000, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(12, './upload/img/ProductsCare/tuoithodudoi.jpg', 'Tuổi Thơ Dữ Dội - Tập 1 (Tái Bản)', 59000, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(13, './upload/img/ProductsCare/38lathu.jpg', 'Tỷ Phú John Davison Rockefeller và 38 Lá Thư Gửi Cho Con Trai', 113760, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h'),
(14, './upload/img/ProductsCare/sucmanhngontu.jpg', 'Sách Sức Mạnh Của Ngôn Từ (Tái Bản 2022)', 73900, './upload/img/ProductsCare/now.png', 'Giao nhanh trong 2h');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `Published_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `title`, `Published_at`) VALUES
(1, './upload/img/category/vanhoc.jpg\r\n', 'Sách Văn Học', '2024-03-10 16:43:54'),
(2, './upload/img/category/kinhte.jpg', 'Sách Kinh Tế', '2024-03-10 16:43:54'),
(3, './upload/img/category/thieunhi.jpg', 'Sách Thiếu Nhi', '2024-03-10 16:43:54'),
(4, './upload/img/category/selfhelp.jpg', 'Sách Kỹ Năng Sống', '2024-03-10 16:43:54'),
(5, './upload/img/category/mevabe.jpg', 'Sách Bà Mẹ - Em Bé', '2024-03-10 16:43:54'),
(6, './upload/img/category/giaotrinh.jpg', 'Sách Giáo Khoa - Giáo Trình', '2024-03-10 16:43:54'),
(7, './upload/img/category/thamkhao.jpeg', 'Sách Tham Khảo', '2024-03-10 16:43:54'),
(8, './upload/img/category/tudien.jpg', 'Từ Điển', '2024-03-10 16:43:54'),
(9, './upload/img/category/tonghop.jpg', 'Sách Kiến Thức Tổng Hợp', '2024-03-10 16:43:54'),
(10, './upload/img/category/kythuat.jpg', 'Sách Khoa Học - Kỹ Thuật ', '2024-03-10 16:43:54'),
(11, './upload/img/category/lichsu.jpg', 'Sách Lịch Sử', '2024-03-10 16:43:54'),
(12, './upload/img/category/dienanh.jpg', 'Điện Ảnh - Nhạc - Họa', '2024-03-10 16:43:54'),
(13, './upload/img/category/truyentranh.jpg', 'Truyện Tranh, Manga, Comic', '2024-03-10 16:43:54'),
(14, './upload/img/category/tongiao.jpg', 'Sách Tôn Giáo - Tâm Linh', '2024-03-10 16:43:54'),
(15, './upload/img/category/dialy.jpg', 'Sách Văn Hóa - Địa Lý - Du Lịch', '2024-03-10 16:43:54'),
(16, './upload/img/category/chinhtri.jpg', 'Sách Chính Trị - Pháp Lý', '2024-03-10 16:43:54'),
(17, './upload/img/category/nongnghiep.jpg', 'Sách Nông - Lâm - Ngư Nghiệp', '2024-03-10 16:43:54'),
(18, './upload/img/category/it.jpg', 'Sách Công Nghệ Thông Tin', '2024-03-10 16:43:54'),
(19, './upload/img/category/yhoc.jpg', 'Sách Y Học', '2024-03-10 16:43:54'),
(20, './upload/img/category/tapchi.jpeg', 'Tạp Chí - Catalogue', '2024-03-10 16:43:54'),
(21, './upload/img/category/tamly.jpg', 'Sách Tâm lý - Giới tính', '2024-03-10 16:43:54'),
(22, './upload/img/category/giadinh.jpg', 'Sách Thường Thức - Gia Đình', '2024-03-10 16:43:54'),
(23, './upload/img/category/thethao.jpg', 'Thể Dục - Thể Thao', '2024-03-10 16:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `dealtoday`
--

CREATE TABLE `dealtoday` (
  `dealtoday_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `category` varchar(256) NOT NULL,
  `subcategory` varchar(256) NOT NULL,
  `thumbnail1` varchar(256) NOT NULL,
  `thumbnail2` varchar(256) NOT NULL,
  `thumbnail3` varchar(256) NOT NULL,
  `thumbnail4` varchar(256) NOT NULL,
  `author` varchar(256) NOT NULL,
  `feature1` varchar(1000) NOT NULL,
  `feature2` varchar(1000) NOT NULL,
  `feature3` varchar(1000) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `pricediscount` decimal(10,0) NOT NULL,
  `status` varchar(100) NOT NULL,
  `percentsold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealtoday`
--

INSERT INTO `dealtoday` (`dealtoday_id`, `name`, `image`, `category`, `subcategory`, `thumbnail1`, `thumbnail2`, `thumbnail3`, `thumbnail4`, `author`, `feature1`, `feature2`, `feature3`, `quantity`, `sold`, `discount`, `pricediscount`, `status`, `percentsold`) VALUES
(1, '', './upload/img/Productsdeal/thientaibentraikedienbenphai.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 31, '124000', 'Vừa mở bán', 50),
(2, '', './upload/img/Productsdeal/caycamngotcuatoi.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 32, '73100', 'Vừa mở bán', 100),
(3, '', './upload/img/Productsdeal/chuthuathoichien.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 10, '30000', 'Vừa mở bán', 50),
(14, '', './upload/img/Productsdeal/chunghiakhacky.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 30, '106000', 'Vừa mở bán', 70),
(15, '', './upload/img/Productsdeal/giaithichnguphaptienganh.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 33, '147900', 'Vừa mở bán', 150),
(16, '', './upload/img/Productsdeal/hieuvetraitim.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 17, '130500', 'Vừa mở bán', 70),
(17, '', './upload/img/Productsdeal/khongphailasoicungdunglacuu.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 29, '91200', 'Vừa mở bán', 100),
(18, 'Luật Tâm Thức - Giải Mã Ma Trận Vũ Trụ', './upload/img/Productsdeal/luattamthuc.jpg', 'Sách kiến thức tổng hợp', 'Lĩnh vực khác', './upload/img/Productsdeal/luattamthuc.jpg', '/upload/img/Productdetails/sach/Luattamthuc/xemtruoc.jpg', '/upload/img/Productdetails/sach/Luattamthuc/xemtruoc1.jpg', '/upload/img/Productdetails/sach/Luattamthuc/xemtruoc2.jpg', 'Ngô Sa Thạch', 'Giải thích quy luật tự nhiên và nguồn gốc vũ trụ một cách đơn giản và liên quan chặt chẽ tới khoa học hiện đại.', 'Giải thích hiện tượng tâm linh như quy hồi tiền kiếp và tiên đoán sự kiện.', 'Cung cấp cách thay đổi cuộc sống bằng cách thay đổi tâm thức và hiểu đúng về quy luật vũ trụ.', 6640, 5000, 23, '226000', 'Vừa mở bán', 50),
(19, 'Nhà Giả Kim (Tái Bản 2020)', './upload/img/Productsdeal/nhagiakim.jpg', 'Sách văn học', 'Tác phẩm kinh điển', '/upload/img/Productdetails/sach/Nhagiakim/covertruoc.jpg', '/upload/img/Productdetails/sach/Nhagiakim/xemtruoc.jpg', '/upload/img/Productdetails/sach/Nhagiakim/xemtruoc1.jpg', '/upload/img/Productdetails/sach/Nhagiakim/xemtruoc2.jpg', 'Paulo Coelho', 'Câu chuyện cổ tích giản dị, giàu chất thơ và nhân ái.', 'Thấm đẫm những minh triết huyền bí của phương Đông.\r\n\r\n', 'Có khả năng thay đổi cuộc sống người đọc.', 5850, 5000, 23, '60600', 'Vừa mở bán', 160),
(20, '', './upload/img/Productsdeal/nonggianlabannang.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 29, '63200', 'Vừa mở bán', 90),
(21, '', './upload/img/Productsdeal/tuoithodudoi.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 40, '48000', 'Vừa mở bán', 60),
(22, '', './upload/img/Productsdeal/vithanquyetdinh.jpg', '', '', '', '', '', '', '', '', '', '', 0, 0, 28, '57000', 'Vừa mở bán', 50);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) DEFAULT NULL,
  `TitleEvent` varchar(1000) NOT NULL,
  `TimeEvent` varchar(1000) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `More` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `TitleEvent`, `TimeEvent`, `Description`, `More`) VALUES
(NULL, 'SALE KHỦNG NGÀY QUỐC TẾ PHỤ NỮ 8/3', 'Sự kiện diễn ra vào thứ sáu, 8/3/2024 vào lúc 0:00am (giờ Việt Nam).', 'Để tận hưởng trải nghiệm tốt nhất, hãy bật âm thanh.', 'Khám phá');

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
(13, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `populartool`
--

CREATE TABLE `populartool` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `populartool`
--

INSERT INTO `populartool` (`id`, `image`, `title`) VALUES
(1, './upload/img/populartool/giamgia.png', 'Mã giảm giá'),
(2, './upload/img/populartool/maydocsach.jpg', 'Máy Đọc Sách');

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE `productdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealtoday_id` bigint(20) UNSIGNED NOT NULL,
  `issuingcompany` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `versiontype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `translator` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `covertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publishingcompany` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titledescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionmore` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`id`, `dealtoday_id`, `issuingcompany`, `versiontype`, `publicationdate`, `size`, `translator`, `covertype`, `pages`, `language`, `publishingcompany`, `titledescription`, `description`, `descriptionmore`) VALUES
(1, 19, 'Nhã Nam', 'Phiên bản thường', '2020-04-01 00:00:00', '13 x 20.5 cm', 'Lê Chu Cầu', 'Bìa mềm', '228', 'Tiếng Việt', 'Nhà Xuất Bản Hà Nội', 'Sơ lược về tác phẩm', 'Tất cả những trải nghiệm trong chuyến phiêu du theo đuổi vận mệnh của mình đã giúp Santiago thấu hiểu được ý nghĩa sâu xa nhất của hạnh phúc, hòa hợp với vũ trụ và con người.\r\n\r\nTiểu thuyết Nhà giả kim của Paulo Coelho như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sách dành cho toàn nhân loại, vượt ra ngoài biên giới quốc gia, Nhà giả kim đã làm rung động hàng triệu tâm hồn, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại, và có thể làm thay đổi cuộc đời người đọc.', '“Nhưng nhà luyện kim đan không quan tâm mấy đến những điều ấy. Ông đã từng thấy nhiều người đến rồi đi, trong khi ốc đảo và sa mạc vẫn là ốc đảo và sa mạc. Ông đã thấy vua chúa và kẻ ăn xin đi qua biển cát này, cái biển cát thường xuyên thay hình đổi dạng vì gió thổi nhưng vẫn mãi mãi là biển cát mà ông đã biết từ thuở nhỏ. Tuy vậy, tự đáy lòng mình, ông không thể không cảm thấy vui trước hạnh phúc của mỗi người lữ khách, sau bao ngày chỉ có cát vàng với trời xanh nay được thấy chà là xanh tươi hiện ra trước mắt. ‘Có thể Thượng đế tạo ra sa mạc chỉ để cho con người biết quý trọng cây chà là,’ ông nghĩ.”\r\n\r\n- Trích Nhà giả kim\r\n\r\nNhận định\r\n\r\n“Sau Garcia Márquez, đây là nhà văn Mỹ Latinh được đọc nhiều nhất thế giới.”\r\n\r\n- The Economist, London, Anh\r\n\r\n“Santiago có khả năng cảm nhận bằng trái tim như Hoàng tử bé của Saint-Exupéry.”\r\n\r\n- Frankfurter Allgemeine Zeitung, Đức'),
(2, 18, 'Skybooks', 'Phiên bản đặc biệt', '2021-05-01 00:00:00', '18 x 23.5 cm', '\r\n', 'Bìa mềm', '408', 'Tiếng Việt', 'Nhà Xuất Bản Dân Trí', '', 'Dịch bệnh, thiên tai, chiến tranh… có phải là lời cảnh cáo của tự nhiên đến con người?\r\n\r\n“Biến đổi khí hậu” là một nước đi chính trị hay chỉ là sự thay đổi của Trái Đất theo chu kỳ?\r\n\r\nUFO, người ngoài hành tinh có thật không?\r\n\r\nTại sao Kinh dịch lại tiên đoán được các sự kiện?\r\n\r\nMỗi con người có số mệnh định sẵn không? Chúng ta sẽ đi về đâu sau khi chết?\r\n…', 'Liệu tất cả chỉ là ngẫu nhiên, hay có một sự sắp đặt tài tình của vũ trụ?\r\n\r\n“Luật Tâm Thức - giải mã ma trận vũ trụ” sẽ giải đáp tất cả những khía cạnh mà có thể bạn không nhận thức được chúng tồn tại, và có thể khám phá những vùng đất mình chưa từng biết đến.\r\n\r\nNhững góc nhìn trong “Luật Tâm Thức” bắt nguồn từ tất cả những kiến thức cổ xưa nhất của loài người… nhưng được tác giả Ngô Sa Thạch giải thích bằng một góc nhìn gần gũi, đặc biệt, qua đó bạn sẽ hiểu được:\r\n\r\nNguồn gốc của vũ trụ, những quy luật tự nhiên chi phối sự hình thành của mọi vật, trí tuệ cổ xưa khi thông hiểu và ứng dụng các quy luật tự nhiên.\r\n\r\nNăng lượng và tần số rung động, giải thích những hiện tượng tâm linh như quy hồi tiền kiếp, tiên đoán sự kiện, du hành thời gian,\r\n\r\nCon người: tổ hợp thân - tâm - trí, nghiệp quả, sứ mệnh trong các kiếp, sự tiến hóa của tâm thức.\r\n\r\nThay đổi cuộc sống bằng cách thay đổi tâm thức, hiểu đúng về các quy luật vũ trụ để thu hút năng lượng cải thiện cuộc sống của mình và cả vũ trụ.\r\nCuốn sách này sẽ giúp bạn thấy rằng những kiến thức của người xưa không hề cao siêu huyền bí mà vô cùng đơn giản và liên quan chặt chẽ tới khoa học hiện đại.\r\n\r\nViệc của bạn chỉ là đọc với một tâm trí cởi mở để thức tỉnh, vượt qua những rào cản của tâm trí, những niềm tin cố hữu của mình.\r\n\r\nNếu con người cứ đóng khung tư duy của mình trong hai trường phái duy vật và duy tâm, chúng ta sẽ mãi mãi không bao giờ có thể giải đáp được những vấn đề lớn lao của nhân loại. Khi đó, chúng ta cũng sẽ không bao giờ hiểu được bản chất của những câu chuyện về tâm linh, cũng như những vấn đề chưa lý giải được của khoa học.\r\n\r\nSự thiếu hiểu biết này, sẽ dẫn tới những con người mù quáng khi có một số trải nghiệm “tâm linh”, sa đà vào mê tín. Ngược lại, chính nó cũng hình thành một nhóm người mù quáng tin vào khoa học, duy vật, dẫn tới sự hủy hoại nghiêm trọng tới sự sống trên cả hành tinh này.\r\n\r\nHiểu về luật tâm thức, nâng cao tâm thức là quá trình mỗi linh hồn trải nghiệm và vượt qua những bài học cuộc đời.');

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE `qa` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `question` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qa`
--

INSERT INTO `qa` (`id`, `img`, `title`, `question`) VALUES
(1, './upload/img/QA/cart.jpg', 'Mua sắm', 'Cuốn sách nào để giúp tôi có thể giao tiếp tốt hơn?'),
(2, './upload/img/QA/cart.jpg', 'Mua sắm', 'Tôi muốn biết các thương hiệu sách nổi tiếng?'),
(3, './upload/img/QA/sale.jpg', 'Khuyến mãi', 'Chính sách freeship cho khác hàng thường xuyên là gì?'),
(4, './upload/img/QA/inbox.jpg', 'Dịch vụ', 'Làm thế nào để hủy đơn hàng?'),
(5, './upload/img/QA/knowledges.jpg', 'Kiến thức', 'Hãy chỉ cho tôi phương pháp đọc sách hiệu quả?'),
(6, './upload/img/QA/cart.jpg', 'Mua sắm', 'Tôi muốn thành công trong việc quản lý thời gian, vậy cuốn sách nào tốt nhất cho tôi?');

-- --------------------------------------------------------

--
-- Table structure for table `quicktoolswidget`
--

CREATE TABLE `quicktoolswidget` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quicktoolswidget`
--

INSERT INTO `quicktoolswidget` (`id`, `image`, `title`) VALUES
(1, './upload/img/quicklinkswidget/banchay.png', 'Sản phẩm bán chạy nhất của chúng tôi'),
(2, './upload/img/quicklinkswidget/giamgia.png', 'Ưu đãi'),
(3, './upload/img/quicklinkswidget/sanphammoi.png', 'Sách mới nhất'),
(4, './upload/img/quicklinkswidget/nhasach.png', 'Nhà sách BookWorld'),
(5, './upload/img/quicklinkswidget/maydocsach.jpg', 'Máy đọc sách');

-- --------------------------------------------------------

--
-- Table structure for table `similarproducts`
--

CREATE TABLE `similarproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealtoday_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `namebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgbook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subimg` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pricebook` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `similarproducts`
--

INSERT INTO `similarproducts` (`id`, `dealtoday_id`, `created_at`, `updated_at`, `namebook`, `imgbook`, `subimg`, `pricebook`) VALUES
(1, 19, NULL, NULL, '', '/upload/img/Productdetails/combo/nhagiakim.jpg', '', 0),
(2, 19, NULL, NULL, '', '/upload/img/Productdetails/combo/danongsaohoadanbasaokim.jpg', '', 0),
(3, 19, NULL, NULL, '', '/upload/img/Productdetails/combo/batdaucauhoitaisao.jpg', '', 0),
(4, 19, NULL, NULL, '', '/upload/img/Productdetails/combo/muonanduocan.jpg', '', 0),
(5, 18, NULL, NULL, '', '/upload/img/Productdetails/combo/luattamthuc.jpg', '', 0),
(6, 18, NULL, NULL, '', '/upload/img/Productdetails/combo/danongsaohoadanbasaokim.jpg', '', 0),
(7, 18, NULL, NULL, '', '/upload/img/Productdetails/combo/batdaucauhoitaisao.jpg', '', 0),
(8, 18, NULL, NULL, '', '/upload/img/Productdetails/combo/muonanduocan.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sugestionproduct`
--

CREATE TABLE `sugestionproduct` (
  `id` int(11) NOT NULL,
  `tab` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `imgstatus` varchar(1000) NOT NULL,
  `timedelivery` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sugestionproduct`
--

INSERT INTO `sugestionproduct` (`id`, `tab`, `image`, `name`, `price`, `imgstatus`, `timedelivery`) VALUES
(1, 1, './upload/img/suggestionwidget/book/tedtalks.jpg', 'Combo Hùng Biện Kiểu Ted Talk (3 quyển)', 450350, './upload/img/suggestionwidget/day.png', 'Giao thứ 2, 11/03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `phone`, `province_id`, `district_id`, `ward_id`, `address`, `birthday`, `image`, `description`, `user_agent`, `ip`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'TrungDepTrai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trungthpthy@gmail.com', NULL, '$2y$10$9dbOqYk.v/Ccl6dvPqh8QupRG9ID82FToyKoG/f6au8LegKqH4BNO', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bestproduct`
--
ALTER TABLE `bestproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandofficial`
--
ALTER TABLE `brandofficial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careproduct`
--
ALTER TABLE `careproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealtoday`
--
ALTER TABLE `dealtoday`
  ADD PRIMARY KEY (`dealtoday_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `populartool`
--
ALTER TABLE `populartool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productdetails`
--
ALTER TABLE `productdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quicktoolswidget`
--
ALTER TABLE `quicktoolswidget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `similarproducts`
--
ALTER TABLE `similarproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugestionproduct`
--
ALTER TABLE `sugestionproduct`
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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `productdetails`
--
ALTER TABLE `productdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `similarproducts`
--
ALTER TABLE `similarproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
