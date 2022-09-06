-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 05:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi_ksu`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$PquVkSiGaXMeWIWrxZQFUOh7mkUTsOqYJ7heBNkgNekzC6ZnnrMa.');

-- --------------------------------------------------------

--
-- Table structure for table `data_berita`
--

CREATE TABLE `data_berita` (
  `gambar` varchar(256) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_berita` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_berita`
--

INSERT INTO `data_berita` (`gambar`, `tanggal`, `judul`, `isi`, `tanggal_update`, `id_berita`) VALUES
('026362500_1653031466-FOTO1.jpg', '2022-06-02', 'Percepat Digitalisasi, KemenkopUKM Bareng Grab Gelar Klinik ', 'Kementerian Koperasi dan UKM (KemenKopUKM) bersama Grab Indonesia menggelar Klinik UMKM. Ada 3 tujuan yang diharapkan bisa tercapai dengan Klinik Digital ini. Pertama adalah mencapai target transformasi digital Koperasi dan UMKM sebanyak 30 Juta UMKM onboarding digital. Kedua 500 koperasi modern berbasis digital pada tahun 2024. Ketiga 1 Juta UMKM onboarding di e-catalog LKPP pada 2022. \"Saya diminta Presiden Jokowi menyiapkan digital ekonomi. Jangan sampai ketika hobi belanja online masyarakat sudah semakin tinggi, semua UMKM digital, justru malah diambil alih oleh platform, penyedia platform sebagai wadah, jangan jadi pelaku juga yang menjual produk,\" tegas MenKopUKM dalam pembukaan Roadshow Klinik UMKM Bersama Grab Dalam Masifikasi Gerakan #BerubahDigital, di kantor Dinas Koperasi dan UKM Daerah Istimewa Yogyakarta, Jumat (20/5/2022). Lebih lanjut, Teten berharap branding dan kemasan UMKM dapat terus diperbaiki. Selain itu, UMKM diharapkan tidak berjuang sendiri untuk berkembang, salah satunya bisa bergabung dalam koperasi. Selain itu, telah tersedia Pusat Layanan Usaha Terpadu (PLUT) KUMKM yang memberikan pendampingan dan arahan bagi pelaku usaha di daerah. \"Ke depan juga supaya UMKM tak hanya mengambil modal dari bank atau lembaga pembiayaan, tapi juga lewat pasar modal. Tentunya dengan posisi UMKM yang kuat secara bersama-sama,\" ujarnya. Saat ini digitalisasi sangat penting bagi UMKM, sebab semua hal sudah serba digital. Kata Teten, potensi ekonomi digital Indonesia yang diprediksi mencapai Rp 4.531 triliun di tahun 2030 dapat dimanfaatkan sepenuhnya oleh para pelaku KUMKM dan masyarakat Indonesia. \"Ketika semua akses teknologi dibuka, maka apa pun bisa masuk. Jangan lagi seperti itu, UMKM kita harus jadi Raja di dalam negeri, mencari keunggulan produk jangan mengandalkan produk luar,\" imbau Menteri Teten Masduki. Lebih lanjut, Teten menyampaikan hingga kini baru tercatat 19 juta UMKM yang sudah go digital dari target 30 juta UMKM sampai tahun 2024. \"Tinggal 2 tahun lagi bisa capai 30 juta. Pasti kita bisa, sisa 11 juta usaha mikro akan kita didampingi untuk masuk digital,\" ujarnya. Dalam kesempatan yang sama President of Grab Indonesia Ridzki Kramadibrata mengatakan, momentum potensi digital harus dimanfaatkan para UMKM. Grab telah bermitra dengan Kementerian Koperasi dan UKM diberbagai kesempatan untuk mendorong digitalisasi UMKM. \"Presidensi G20 Indonesia ini salah satu fokusnya adalah digitalisasi. Kesempatan ini kita jadikan ajang memperlihatkan dunia bahwa sukses digitalisasi ekonomi di Indonesia khususnya datang dari UMKM,\" kata Ridzki. Adapun rangkaian roadshow juga akan digelar di beberapa kota di Indonesia. Di mulai dengan fase satu kuartal kedua tahun 2022 ini, di Yogyakarta (Mei 2022), Padang (Juni 2022), dan Makassar (Juni 2022). Kegiatan ini bertujuan untuk memajukan pelaku UMKM. \"Di luar ini kami juga rutin di menggelar pelatihan bertajuk Grab Academy. Menciptakan UMKM sukses, dan naik kelas,\" pungkas Ridzki. Sebelumnya, Menteri Koperasi dan UKM (MenkopUKM) Teten Masduki mengatakan, potensi oleh-oleh bisa menjadi kekuatan ekonomi di suatu daerah. Hal itu disampaikan Teten kepada media saat ditemui di Yogyakarta, Kamis (19/5/2022). \"Saya selalu menyampaikan dalam banyak kesempatan jangan remehkan potensi ekonomi oleh-oleh. Kita ini punya kultur mudik, setiap orang mudik ke kampung halaman pasti bawa oleh-oleh,\" kata Teten. Menurut Teten, jika dilihat momen lebaran pada awal bulan Mei 2022 kemarin, sentra wisata penuh dan geliat ekonomi berangsur membaik. Secara perlahan tapi pasti pandemi akan berubah menjadi endemi, dimana dibutuhkan skema baru, kebiasaan baru dan strategi baru harus dilakukan oleh UMKM Indonesia. \"Pasca lebaran ekonomi digerakan kuliner daerah dan oleh-oleh, cuman oleh-oleh kita ini belum didandani dengan baik,\" ujarnya. Pendampingan Maka, pendampingan dan pengembangan harus terus dilakukan dalam upaya kebangkitan UMKM, dalam menumbuhkan jiwa entrepreneurship yang memiliki mentalitas adaptif dan inovatif terhadap segala perubahan yang terjadi. Lebih lanjut, Teten membandingkan UMKM Indonesia dengan Jepang. Meskipun industri di Jepang telah berkembang pesat dan baik, namun mereka masih serius memperhatikan produk UMKM-nya. \"Kalau kita mendarat di Bandara Narita di Jepang, kita pasti tergiur ingin membeli oleh-oleh. Karena kemasannya cantik, dipajang dengan baik,\" kata Teten.', '2022-06-03 12:30:36', 1),
('komoditas-kopi-pacu-pergerakan-koperasi-dan-umkm-woj.jpg', '2022-06-03', 'Komoditas Kopi Pacu Pergerakan Koperasi dan UMKM\r\n\r\n', 'Menteri Koperasi dan UKM (MenKopUKM) Teten Masduki mengatakan bahwa komoditas kopi telah menggerakkan kinerja UMKM dan koperasi dari sisi hulu dan hilir. Buktinya, menurut Teten, 96% perkebunan kopi Indonesia dikuasai 1,3 juta petani dan lebih dari 2.950 kedai kopi dikelola anak muda dan pelaku ekonomi kreatif.\r\n“Di tengah pandemi, kopi dan rempah adalah komoditas unggulan yang harus dikelola dengan baik, dikuasai inovasi teknologinya, punya nilai tambah, menyejahterakan petani, dan berkelanjutan,\" Teten Masduki dalam keterangan resmi, dikutip Senin (23/5/2022). Menteri Teten menilai ada tiga tantangan untuk pengembangan kopi rakyat, di antaranya lemahnya kelembagaan usaha yang umumnya masih perorangan, rendahnya produktivitas dan kualitas produk UMKM dan koperasi, serta kesulitan akses pembiayaan dan pasar.\r\nKemenKopUKM pun memberikan dukungan dari hulu dan hilir. Dari hulu, kementerian ingin melakukan penguatan kelembagaan usaha melalui korporatisasi petani kopi berbasis koperasi dan pengembangan model bisnis terintegrasi hulu-hilir dari mulai produksi, akses pembiayan, rantai pasok, dan pemasarannya. Lebih lanjut, Menteri Teten menambahkan bahwa pihaknya sudah melakukan beberapa piloting terkait korporatisasi petani ini. Salah satunya adalah Koperasi Produsen Baitul Qiradh Baburrayyan di Aceh Tengah yang diusahakan untuk menguasai pasar ekspor 345,6 ton kopi arabica gayo ke pasar Amerika Serikat dan Eropa. \"Ini akan menjadi satu-satunya koperasi yang memiliki akses penjualan kopi langsung ke Starbucks,\" kata Menteri Teten.\r\nSelain itu, terdapat juga Koperasi Klasik Beans-Sunda Hejo di Jawa Barat yang mengonsolidasikan petani perhutanan sosial dan akan memasok kopi specialty untuk kebutuhan dalam negeri dan mancanegara. \"Juga ada Koperasi Kopi Wanita Gayo (Kokowagayo) yang menjadi satu-satunya koperasi wanita di Asia Tenggara yang masuk dalam Organic Product Trading Company (OPTCO) Cafe Femenino,” tandasnya.\r\n\r\n', '2022-06-03 15:28:15', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_berita`
--
ALTER TABLE `data_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_berita`
--
ALTER TABLE `data_berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
