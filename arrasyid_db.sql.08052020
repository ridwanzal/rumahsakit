-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2020 at 03:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arrasyid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image_name` text NOT NULL,
  `caption` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image_name`, `caption`, `date_created`) VALUES
(21, 'hospital21.jpg', '', '0000-00-00 00:00:00'),
(22, 'hospital1.jpg', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `banner_jadwal_dokter`
--

CREATE TABLE `banner_jadwal_dokter` (
  `id` int(11) NOT NULL,
  `image_name` text NOT NULL,
  `caption` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banner_karir`
--

CREATE TABLE `banner_karir` (
  `id` int(11) NOT NULL,
  `image_name` text NOT NULL,
  `caption` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_karir`
--

INSERT INTO `banner_karir` (`id`, `image_name`, `caption`, `date_created`) VALUES
(22, 'blue_banner_karir1.png', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `subtitle` text NOT NULL,
  `slug` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `max_length` text NOT NULL,
  `image_path` text NOT NULL,
  `content` text NOT NULL,
  `category` varchar(128) NOT NULL,
  `tag` varchar(128) NOT NULL,
  `bookmark` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `type` int(2) NOT NULL COMMENT '1 post; 2 draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='blog data';

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `subtitle`, `slug`, `author_id`, `date_created`, `max_length`, `image_path`, `content`, `category`, `tag`, `bookmark`, `likes`, `type`) VALUES
(27, 'RSIY PDHI Terima Kunjungan RS Islam Ar-Rasyid Palembang', '', 'rsiy-pdhi-terima-kunjungan-rs-islam-ar-rasyid-palembang', 13, '2020-04-26', '', 'hospitalhallway.jpg', '<p>RSIY PDHI beberapa waktu lalu menerima kunjungan studi banding dari RS Islam Ar-Rasyid Palembang. Kunjungan dipimpin oleh Ketua Yayasan Rumah Sakit, H. Djuliar Rasyid dan Direktur Rumah Sakit As-Rasyid, dr. Tony Siguntang, Sp.THT-KL. Kunjungan disambut oleh Direktur RSIY PDHI, dr. Widodo Wirawan, MPH dan jajaran manajerial.</p>\r\n\r\n<p>Menurut penuturan Manajer SDM RSIY PDHI, H. Karnadi, kunjungan tersebut dalam rangka studi banding tentang rumah sakit Islam syariah. Mereka ingin belajar tentang syariah dalam rumah sakit karena sedang menuju proses ke arah sana. “Mereka memilih RSIY PDHI karena rumah sakit kita sudah dikenal di Palembang,” tuturnya.</p>\r\n\r\n<p>Meskipun, lanjut Karnadi, RSIY PDHI belum menjadi rumah sakit syariah, namun kita juga masih mempersiapkan diri untuk menuju ke arah sana. Secara praktik, RSIY PDHI sudah mendasarkan pelayanannya pada syariah. Seperti sudah memisahkan pasien antara laki-laki dan perempuan dengan memiliki ruangan secara terpisah. Layanan gizi pasien juga sudah terjamin kehalalannya. “Bahkan pelayanan keruhaniaan rumah sakit, khususnya bagi karyawan kita dilakukan secara aktif,” terangnya.</p>\r\n\r\n<p>Di RSIY PDHI, para tamu undangan dari RS Islam Ar-Rasyid ini belajar banyak tentang bagaimana struktur organisasi, penerapan syariah hingga pembinaan ruhani. Selain itu, mereka juga menanyakan tentang akreditasi RS yang diraih secara paripurna oleh RSIY PDHI. “Mereka bertanya banyak tentang itu juga karena salah satu syarat menuju rumah sakit syariah adalah harus terakreditasi dari Komisi Akreditasi Rumah Sakit (KARS),” terang Karnadi.</p>\r\n', '1', '', 0, 0, 1),
(28, 'Rumah Sakit ArRasyid sediakan Fasilitas General Chek Up Canggih', '', 'rumah-sakit-arrasyid-sediakan-fasilitas-general-chek-up-canggih', 13, '2020-04-26', '', '2-300x169.jpg', '<p>Berhasil menjadi salah satu rumah sakit Islam ternama di Kota Palembang, RS Islam Ar Rasyid terus mengembangkan pelayanan kesehatan bagi masyarakat, melalui Medical Check Up (MCU) Center atau Pelayanan Cak Kesehatan yang Terpusat, Terpadu dengan peralatan yang canggih.</p>\r\n\r\n<p>Wakil Direktur Pelayanan Medik, dr. Erna Purbasari, MKk mengatakan bahwa MCU Center RS Islam Ar Rasyid fokus terhadap pelayanan cek kesehatan bagi masyarakat umum dan tenaga kerja yang hendak melamar pekerjaan di perusahaan atau instansi.</p>\r\n\r\n<p>“MCU ini berguna untuk mengecek kesehatan, mengetahui penyakit atau pun kelainan yang ada didalam diri orang sehat, sebelum ada gejala yang timbul,” katanya saat ditemui di RS Islam Ar Rasyid, Senin, 25 Maret 2019.</p>\r\n\r\n<p>Selama ini, banyak rumah sakit yang memberikan pelayanan MCU namun tidak menyediakan tempat secara khusus sehingga terpisah dari pelayanan orang sakit.</p>\r\n\r\n<p>“Kita semua sudah siap, alat canggih, tenaga, tinggal pelaksanaannya saja. Alat dari pemeriksaan dasar sampai pada yang paling canggih, itu seperti treadmill, semua ada di MCU Center Ar-Rasyid ini,” ujar dr. Erna Purbasari.</p>\r\n\r\n<p>Selain itu, MCU di RS Islam Ar-Rasyid ini dapat disesuaikan dengan kebutuhan, baik bagi masyarakat maupun sesuai dengan bidang pekerjaan yang ditekuni oleh tenaga kerja perusahaan atau instansi.</p>\r\n\r\n<p>“Juga masyarakat boleh memilih dapat ditangani oleh dokter umum atau dokter spesialis,” tambahnya.</p>\r\n\r\n<p>dr Erna Purbasari, MKK juga menjelaskan bahwa secara peraturan Kementerian Kesehatan, masyarakat diimbau untuk melakukan MCU, walaupun hanya bagian-bagian tertentu. Misalkan perempuan, harus melakukan pemeriksaan papsmear, kemudian mencegah agar tidak terjadinya kanker rahim dengan imunisasi. Dan laki-laki pemeriksaan treadmill pemeriksaan jantung agar terhindar dari serangan jantung atau stroke.</p>\r\n\r\n<p>“Makanan minuman yang kita konsumsi dari kecil sampai sekarang, kita jadi tau berlebihan atau tidak melalui MCU ini. Pencegahannya, bisa dengan mengurangi asupan yang kurang bergizi, minum obat atau pun merubah pola hidup menjadi lebih baik. Dianjurkan umur 35 bagi laki-laki, agar terhindar dari struk,” tambah Erna.</p>\r\n\r\n<p>Kedepan, RS Islam Ar-Rasyid berharap semua tenaga kerja di Sumsel dapat melakukan MCU di RS Islam Ar-Rasyid, dengan peralatan yang lengkap, tenaga medis yang fokus dan ahli dalam bidang ini, serta fasilitas gedung yang terpusat.</p>\r\n\r\n<p>Hendra Wijaya, Humas RS Islam Ar-Rasyid mengatakan saat ini telah ada beberapa perusahaan yang menandatangani MoU terkait rekomendasi pemeriksaaan MCU di RS Islam Ar-Rasyid, yang telah menyiapkan  gedung dan fasilitas didalamnya, terdapat ruang khusus pemeriksaan yang cukup memadai di MCU RS Islam Ar-Rasyid, seperti Ruang Mata, Gigi, Jantung, THT, Syaraf, Bedah, Obgyn, Rontgen, penyakit dalam dan laboratorium.</p>\r\n\r\n<p>“Ini peralatan dan fasilitas sudah lengkap, kita sudah MoU dengan beberapa perusahaan, terlihat masih sepi mungkin karena belum jadwal mereka, dan kita masih menuju tahap launching,” kata Hendra.</p>\r\n\r\n<p>MCU Center Ar-Rasyid yang akan dilaunching pada 13 April 2019 mendatang ini, juga b dalam bentuk seminar kesehatan, dan setelah itu akan gencar memperkenalkan MCU Ar-Rasyid dengan membuka stand cek kesehatan di beberapa tempat.</p>\r\n\r\n<p>“Saat ini masih dalam tahap faskes.  Tanggal 13 April ini akan launching, sekaligus mengadakan seminar kesehatan,” tuturnya.</p>\r\n', '1', '', 0, 0, 1),
(29, 'Rumah Sakit Ar Rasyid Terapkan Pelayanan Bernuasa Islam', '', 'rumah-sakit-ar-rasyid-terapkan-pelayanan-bernuasa-islam', 13, '2020-04-26', '', 'e8xzy2VjTjws0CJHQKqrW9lJhu4Swrh2rYHSyjbj.jpg', '<p>Usai diresmikan secara langsung oleh walikota Palembang melalui pemotongan pita. Rumah sakit (RS) Ar Rasyid yang berada di jalan HM Saleh siap memberikan pelayanan kepada masyarat kota Palembang. RS sakit yang berprinsip nuansa islam ini bakal secepat mungkin membuka pelayanan BPJS. Kepala yayasan dan pemilik RS Ar-Rasyid, H Djuliar Rasyid menargetkan usai pembukaan, dan operasional pihaknya bisa langsung memberikan pelayanan kesehatan bagi masyarakat.</p>\r\n\r\n<p>Sambung Djuliar, dengan setiap sarana dan fasilitas yang sudah cukup memadai, bisa menja?di poin untuk dapat bergabung dalam asuransi kesehatan pemerintah khususnya BPJS kesehatan. Insyaallah setelah 21 hari peresmian ini, pihak BPJS langsung melakukan peninjauan kesini guna melihat kesiapan RS Ar Rasyid ini. Selain itu kita juga akan berkerja sama dengan pihak asuransi kesehatan lainnya. H Djuliar menuturkan, RS Ar Rasyid ini akan memberikan pelayanan yang prima sesuai dengan prinsip dari RS bernuansa islam dan Mewujudkan RS yang bersyariat.</p>\r\n\r\n<p>” Pelayanan akan kita tekankan pada pelayanan kesehatan yang profesional dan islami, tentu dengan menyediakan sumber daya manusia yang berkualitas serta didukung dengan peralatan yang modern dan menunjang. Dengan jumlah dokter spesialis sekitar 15 orang, yang terdiri dari dokter bedah, penyakit dalam, THT, mata dan gigi, serta anatesis dan radiologi. Serta dengan pelayanan ruangan instalasi gawat darurat yang buka 24 jam dapat memberikan sebuah kenyamanan bagi masyarakat yang datang. Keselamatan dan kesembuhan pasien merupakan prioritas kita nantinya.</p>\r\n\r\n<p>Hal ini akan kita tanamkan bagi setiap karyawan dan staff di rumah sakit ar rasyid ini,” bebernya. Sementara itu, Walikota Palembang Harnojoyo mengungkapkan apresiasinya terhadap pembukaan RS Ar Rasyid ini. Harno menilai RS Ar Rasyid dapat berkontribusi secara besar dalam memberikan pelayanan kesehatan yang prima bagi masyarakat kota Palembang. Kita amat mendukung dengan adanya RS Ar Rasyid ini dapat membantu program pemerintah dalam menggalangkan kesehatan,dan juga menambah jumlah rumah sakit yang ada di kota Palembang menjadi 27 rumah sakit.</p>\r\n\r\n<p>Harno, juga amat mendukung bila nantinya RS Ar Rasyid dapat bergabung dalam pelayanan BPJS kesehatan, sehingga mempermudah masyarakat Palembang khususnya di wilayah sukarame untuk berobat. Ini bisa menjadi jaminan bagi masyarakay sekitar dan seluruh kota Palembang untuk dapat menerima pelayanan bpjs secara menyeluruh. Semoga hal ini bisa segera diadakan dan lancar serta dapat sukses untuk kedepannya. </p>\r\n', '1', '', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `telepon` bigint(20) NOT NULL,
  `subject` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `telepon`, `subject`, `pesan`) VALUES
(35, 'adasd', 'asdas@asm.com', 0, 'dasd', 'asdasd'),
(36, 'asda', 'adasd@asdsad.com', 0, 'dasdasd', 'asd'),
(37, 'asdasd', 'adasdasd@adsa.com', 0, 'adasd', ''),
(38, 'adsad', 'adasd@asdsad.com', 81, 'asd', 'asd'),
(39, 'jhj', 'adasd@asdsad.com', 0, 'kajsdakj', '12'),
(40, 'asd', 'adjas@asdma.com', 8112, 'asd', 'asdjkad'),
(41, 'M. Ridwan Zalbina', 'zalbinaridwan@gmail.com', 81919992000, 'Belajar', 'Ini terbaik');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `image_name` text NOT NULL,
  `caption` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `image_name`, `caption`, `date_created`) VALUES
(27, 'photo-1526784725085-c69e947bf92e.jpeg', 'image one', '0000-00-00 00:00:00'),
(28, 'photo-1526288834969-1bc3a0a94dc9.jpeg', 'image two', '0000-00-00 00:00:00'),
(29, 'photo-1526382551041-3c817fc3d478.jpeg', 'image three', '0000-00-00 00:00:00'),
(30, 'photo-1525826212383-92e29530133e.jpeg', 'image for', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_video`
--

CREATE TABLE `galeri_video` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `caption` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri_video`
--

INSERT INTO `galeri_video` (`id`, `link`, `caption`, `date_created`) VALUES
(4, 'https://www.youtube.com/embed/9YBf1eLW_F8', 'Youtube first', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `karir_open`
--

CREATE TABLE `karir_open` (
  `id` int(11) NOT NULL,
  `posisi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `date_created` datetime NOT NULL,
  `status` enum('open','closed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karir_open`
--

INSERT INTO `karir_open` (`id`, `posisi`, `deskripsi`, `date_created`, `status`) VALUES
(1, 'Perawat', '<p>Perawat dapat memberikan yang terbaik</p>\r\n\r\n<ul>\r\n <li>Umur maksimal 30 tahun</li>\r\n <li>Tidak dalam status bekerja di perusahaan/instansi</li>\r\n <li>Sehat jasmano dan rohani</li>\r\n</ul>\r\n', '2020-04-26 03:39:03', 'open'),
(2, 'Perawat Pria', '<p>Spesifikasi</p>\r\n\r\n<ul>\r\n <li>Lulusan D3 Keperawatan</li>\r\n <li>Memiliki kendaraan pribadi</li>\r\n <li>Etos kerja yang tinggi</li>\r\n</ul>\r\n', '2020-04-26 04:34:32', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` text NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `role` enum('pelanggan','admin') NOT NULL,
  `email` varchar(128) NOT NULL,
  `telepon` bigint(20) NOT NULL,
  `alamat` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `nama_lengkap`, `role`, `email`, `telepon`, `alamat`, `password`) VALUES
(13, 'admin', 'Administrator', 'admin', 'admin@gmail.com', 81919992000, '', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_jadwal_dokter`
--
ALTER TABLE `banner_jadwal_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_karir`
--
ALTER TABLE `banner_karir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_video`
--
ALTER TABLE `galeri_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karir_open`
--
ALTER TABLE `karir_open`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `banner_jadwal_dokter`
--
ALTER TABLE `banner_jadwal_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `banner_karir`
--
ALTER TABLE `banner_karir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `galeri_video`
--
ALTER TABLE `galeri_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `karir_open`
--
ALTER TABLE `karir_open`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
