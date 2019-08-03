-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2019 at 04:24 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `company_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_artikel`
--

CREATE TABLE IF NOT EXISTS `tabel_artikel` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `slug_artikel` varchar(256) NOT NULL,
  `isi` text NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `gambar_artikel` varchar(256) NOT NULL,
  `dibuat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_artikel`
--

INSERT INTO `tabel_artikel` (`id`, `user_id`, `judul`, `slug_artikel`, `isi`, `kategori_id`, `gambar_artikel`, `dibuat`) VALUES
(1, 2, 'Belajar PHP 7asdasd', 'Belajar-PHP-7asdasd', '<p>I started to use Codeigniter framework and in their new release doc&#39;s they say</p>\r\n\r\n<p>DO NOT use this or any other encryption library for user password storage! Passwords must be hashed instead, and you should do that via PHP&rsquo;s own Password</p>\r\n', 1, 'weather.jpg', 1562644270),
(3, 2, 'test 1', 'test-1', '<p><strong>Hi Developer!</strong></p>\r\n\r\n<p><strong>Dicoding bekerja sama dengan Microsoft untuk menge</strong>mbangkan Academy terbaru, yakni kelas Menjadi Azure Cloud Developer. Microsoft Azure adalah sebuah platform komputasi awan Microsoft yang ditujukan untuk membantu bisnis dalam memberi layanan teknologi informasi dan kemudahan untuk membangun, mengelola, dan deploy suatu aplikasi tanpa harus memikirkan pengadaan perangkat keras seperti server dan jaringan.</p>\r\n\r\n<p>Melalui kelas &ldquo;<strong>Menjadi Azure Cloud Developer</strong>&rdquo; kalian akan belajar bagaimana :</p>\r\n\r\n<ul>\r\n	<li>mengembangkan aplikasi web dan mobile</li>\r\n	<li>men-deploy-nya menggunakan Azure App Service</li>\r\n	<li>membuat server database SQL</li>\r\n	<li>menyimpan beragam jenis data dan file menggunakan Azure Storage</li>\r\n	<li>menganalisa gambar dan membuat aplikasi tanya jawab menggunakan layanan Azure Cognitive</li>\r\n</ul>\r\n\r\n<p>Pembelajaran kelas ini sangat cocok bagi para developer yang tertarik untuk men-deploy aplikasi dengan memanfaatkan Azure Cloud. Microsoft akan memberikan beasiswa kelas&nbsp;Menjadi Azure Cloud Developer&nbsp;dan token Azure secara GRATIS (kuota terbatas). Jika tertarik, silakan daftar melalui tautan berikut:&nbsp;<a href="http://bit.ly/BeasiswaMenjadiAzureCloudDeveloper">http://bit.ly/BeasiswaMenjadiAzureCloudDeveloper</a></p>\r\n\r\n<p>Beasiswa ini akan dibagi menjadi 4 Batch, antara lain :</p>\r\n\r\n<ul>\r\n	<li>Pengumuman penerima beasiswa Batch 1 pada tanggal 14 Maret 2019.</li>\r\n	<li>Pengumuman penerima beasiswa Batch 2 pada tanggal 29 Maret 2019.</li>\r\n	<li>Pengumuman penerima beasiswa Batch 3 pada tanggal 30 April 2019.</li>\r\n	<li>Pengumuman penerima beasiswa&nbsp;Batch 4&nbsp;pada tanggal&nbsp;14 Juni 2019.</li>\r\n</ul>\r\n\r\n<p>Kami akan mengumumkan daftar penerima beasiswa via blog dan social media Dicoding. Jika ada pertanyaan, silakan hubungi kami melalui email Tim Dicoding. Dengan senang hati kami akan membantu Anda.</p>\r\n\r\n<p>Ayo daftar sekarang!</p>\r\n', 2, 'instagram1.jpg', 1562507430),
(5, 2, 'Analisysis data dengan metode simbiosis mutualisme', 'Analisysis-data-dengan-metode-simbiosis-mutualisme', '<p>Saat ini teknologi sangat membantu dalam setiap pergerakan manusia. Kemajuan dalam dunia internet membuat kehidupan semakin mudah dan seakan-akan tanpa jarak. Begitupun dengan aktivitas manusia tak jauh dari hal yang dilaksanakan secara online, sebut saja online banking, online shop, meeting online, termasuk kegiatan belajar pemrograman pun bisa secara online.</p>\r\n\r\n<p>Sebagian orang lebih memilih untuk belajar pemrograman secara online dibandingkan offline. Hal ini karena belajar online memiliki beberapa keuntungan yang tidak didapatkan dari kegiatan belajar pemrograman offline. Beberapa keuntungan inilah yang akan pertimbangan Anda untuk memilih mengikuti kegiatan belajar pemrograman online.</p>\r\n\r\n<p>Berikut adalah 5 keuntungan belajar pemrograman secara online:</p>\r\n', 3, 'profile-02.jpg', 1562643362),
(8, 2, 'test 1', 'test-1', '<p>qwe</p>\r\n', 2, 'blog2.jpg', 1562650695),
(10, 2, 'asdsdgstrtasssssasdasaaaasaaaaaaaaaaaaaaaaas', 'asdsdgstrtasssssasdasaaaasaaaaaaaaaaaaaaaaas', '<p>sssssssssssssssss</p>\r\n', 1, 'blog1.jpg', 1562650939),
(12, 2, 'test 333', 'test-333', '<p>asfasdfgsdgsdbghdfghdfghdfgh</p>\r\n', 2, 'Untitled.png', 1564651528);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_company`
--

CREATE TABLE IF NOT EXISTS `tabel_company` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(128) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_company`
--

INSERT INTO `tabel_company` (`id`, `nama_perusahaan`, `alamat_perusahaan`, `logo`) VALUES
(4, 'PT. Agung Jaya Makmur', 'Perempatan Pasar Kliwon', 'fr-093.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori`
--

CREATE TABLE IF NOT EXISTS `tabel_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(256) NOT NULL,
  `slug_kategori` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kategori`
--

INSERT INTO `tabel_kategori` (`id`, `nama_kategori`, `slug_kategori`) VALUES
(1, 'Profile', 'profile'),
(2, 'Software SMS blasting', 'software-sms-blasting'),
(3, 'Video Tutorial', 'video-tutorial'),
(4, 'Buku', 'buku');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE IF NOT EXISTS `tabel_menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(128) NOT NULL,
  `link` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`id`, `nama_menu`, `link`, `icon`, `parent`) VALUES
(2, 'Dashboard', 'dashboard', 'fa fa-dashboard', 0),
(3, 'Artikel', 'artikel', 'fa fa-list', 0),
(4, 'Kategori', 'kategori', 'fa fa-tags', 0),
(5, 'Slider', 'slider', 'fa fa-sliders', 0),
(6, 'Pengaturan', '#', 'fa fa-cogs', 0),
(7, 'Menu Manajemen', 'menu', 'fa fa-chevron-circle-down', 6),
(9, 'Profile Settings', 'settings', 'fa fa-trash-o', 6),
(10, 'Buku', 'buku', 'fa fa-book', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_slider`
--

CREATE TABLE IF NOT EXISTS `tabel_slider` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_slider`
--

INSERT INTO `tabel_slider` (`id`, `gambar`) VALUES
(6, 'port06.jpg'),
(11, 'port043.jpg'),
(13, 'port03.jpg'),
(14, 'port051.jpg'),
(15, 'Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE IF NOT EXISTS `tabel_user` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(11) NOT NULL,
  `tanggal_dibuat` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id`, `nama_user`, `email`, `password`, `gambar`, `tanggal_dibuat`, `role_id`) VALUES
(1, 'ahmad', 'admadmaryam@gmail.com', '$2y$10$tDGs.2A5b97.iEiN4G9JI.dRAKIr6tGF8RLzMXZZIQuK7qjT7e0bm', 'noimage.png', 1562465737, 2),
(2, 'zakki', 'dezzp1995@gmail.com', '$2y$10$0OHm7eh8RTAZpVMxx//ceeJpWCdqyvzLmUL8exZVshDa7gD78yCgu', 'noimage.png', 1562500532, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_artikel`
--
ALTER TABLE `tabel_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_company`
--
ALTER TABLE `tabel_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_slider`
--
ALTER TABLE `tabel_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_artikel`
--
ALTER TABLE `tabel_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tabel_company`
--
ALTER TABLE `tabel_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tabel_slider`
--
ALTER TABLE `tabel_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
