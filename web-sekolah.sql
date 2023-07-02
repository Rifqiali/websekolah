-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 04:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id_about` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` text NOT NULL,
  `gambar` text NOT NULL,
  `job` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id_about`, `nama`, `nim`, `gambar`, `job`) VALUES
(3, 'Indra Kusumah', 'A2.2100064', 'WhatsApp Image 2023-07-01 at 07.38.46.jpg', 'BackEnd'),
(4, 'Zaidan Ikhsan Gumilar', 'A2.2100140', '1676708482053-2.jpg', 'FrontEnd'),
(5, 'Bintang Agum Gumelar', 'A2.2100023', 'Bintang.jpg', 'UI / UX Design'),
(7, 'Muhammad Rifan Himawan', 'A22100085', 'rifan.jpg', 'Quality Control'),
(8, 'Rifqi Ali Abdullah', 'A22100114', 'rifqi.jpg', 'Hostinger');

-- --------------------------------------------------------

--
-- Table structure for table `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `id_agenda` int(11) NOT NULL,
  `nama_acara` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_agenda`
--

INSERT INTO `tb_agenda` (`id_agenda`, `nama_acara`, `waktu`, `deskripsi`, `gambar`) VALUES
(1, 'Ulang Tahun', '2023-06-26 16:04:53', 'Ulang Tahun Kepala Sekolah Pada  Hari Mnggu Tanggal 18 Juni 2023', 'taro.png'),
(5, 'Liburan ke jogja', '2023-07-01 09:02:42', 'Liburan  akhir semester untuk angkatan 2023', 'download.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` text NOT NULL,
  `cover` text NOT NULL,
  `content` text NOT NULL,
  `id_users` int(11) NOT NULL,
  `waktu_artikel` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `cover`, `content`, `id_users`, `waktu_artikel`) VALUES
(61, 'Pentingnya Pendidikan Bagi Masa Depann', 'image 22.png', 'Sekolah adalah tempat bagi pelajar untuk menimba ilmu dan pengetahuan. Sekolah bukan hanya sekadar tempat untuk belajar, tetapi juga sebagai pembentuk karakter dan kepribadian seseorang. Oleh karena itu, penting bagi kita untuk memperhatikan perkembangan sekolah di Indonesia.\r\n\r\nSalah satu permasalahan utama di Indonesia saat ini adalah rendahnya kualitas pendidikan di beberapa daerah. Banyak sekolah di Indonesia yang belum memenuhi standar pendidikan yang seharusnya. Hal ini disebabkan oleh kurangnya dana dan tenaga pengajar yang memadai. Kondisi seperti ini tentunya akan berdampak pada kualitas pendidikan yang didapat oleh pelajar.\r\n\r\nNamun, bukan hanya tanggung jawab pemerintah untuk meningkatkan kualitas pendidikan di Indonesia. Para orang tua juga harus turut serta dalam memperhatikan pendidikan anak-anak mereka. Orang tua harus memastikan bahwa sekolah yang dipilih untuk anak-anaknya memiliki kurikulum yang baik dan tenaga pengajar yang berkualitas.\r\n\r\nSelain itu, para siswa juga harus berperan aktif dalam proses pendidikan mereka. Mereka harus bersemangat dalam belajar, mengikuti semua pelajaran dengan baik, dan berpartisipasi dalam semua kegiatan di sekolah. Siswa juga harus menghargai guru dan teman-teman mereka, serta menghormati aturan yang berlaku di sekolah.\r\n\r\nDi era globalisasi dan teknologi seperti saat ini, pendidikan sudah menjadi hal yang sangat penting bagi masa depan seseorang. Dengan kualitas pendidikan yang baik, seseorang dapat memiliki kesempatan untuk meraih pekerjaan yang lebih baik dan memiliki penghasilan yang lebih tinggi. Oleh karena itu, kita harus memperhatikan perkembangan pendidikan di Indonesia, dan menjadikan sekolah sebagai sarana untuk menimba ilmu dan pengetahuan, serta sebagai pembentuk karakter dan kepribadian seseorang.\r\n\r\nDalam rangka meningkatkan kualitas pendidikan di Indonesia, pemerintah, orang tua, dan siswa harus bekerjasama untuk mengatasi semua permasalahan yang ada. Dengan semangat dan tekad yang kuat, bersama-sama kita dapat membawa Indonesia menuju masa depan yang lebih cerah dan sejahtera.', 1, '2023-07-01 05:14:32'),
(64, 'SMA Rancakalong', 'Ngumpul-Bareng-Temen-temen-Di-Sekolah.jpg', 'Mengenal SMA Rancakalong Sebagai Sekolah Berkualitas di Kota Sumedang\r\nSMA Rancakalong merupakan salah satu sekolah menengah atas yang terletak di kota Sumedang. Sekolah ini terkenal sebagai salah satu sekolah berkualitas dengan standar pendidikan yang tinggi. Banyak orang tua memilih SMA Rancakalong sebagai pilihan utama untuk pendidikan anak-anak mereka.\r\n\r\nSelain memiliki fasilitas yang lengkap dan modern, SMA Rancakalong juga memiliki guru-guru yang berkualitas dan berpengalaman dalam bidangnya. Hal ini memungkinkan siswa-siswa SMA Rancakalong untuk mendapatkan pembelajaran yang optimal dan sesuai dengan kebutuhan mereka. Selain itu, SMA X juga memiliki program dan kegiatan yang dapat membantu siswa-siswinya dalam mengembangkan potensi mereka.\r\n\r\nProgram unggulan yang dimiliki oleh SMA Rancakalong adalah program unggulan IPA dan IPS. Program ini memiliki kurikulum yang dikembangkan oleh guru-guru ahli di bidangnya dan dilengkapi dengan fasilitas laboratorium yang modern. Selain itu, SMA Rancakalong juga memiliki program unggulan dalam bidang seni dan olahraga, seperti marching band dan tim futsal.\r\n\r\nSelain program unggulan, SMA Rancakalong juga memiliki kegiatan-kegiatan ekstrakurikuler yang beragam dan menarik. Kegiatan-kegiatan ini dapat membantu siswa-siswi dalam mengembangkan bakat dan minat mereka, seperti klub sastra, klub bahasa asing, dan klub musik.\r\n\r\nSMA Rancakalong juga berkomitmen untuk memberikan suasana belajar yang kondusif dan aman bagi siswa-siswinya. Oleh karena itu, sekolah ini memiliki sistem pengamanan yang tinggi dan menjalin kerjasama dengan pihak keamanan setempat.\r\n\r\nDengan semua keunggulan dan prestasi yang dimilikinya, SMA Rancakalong menjadi pilihan utama bagi banyak orang tua dan siswa-siswa yang ingin mendapatkan pendidikan yang berkualitas. Bagi para siswa dan siswi yang ingin bergabung dengan SMA Rancakalong, silahkan mengunjungi situs resmi sekolah atau datang langsung ke kampus SMA Rancakalong di kota Sumedang.', 1, '2023-07-01 05:13:25'),
(67, 'Sekolah Kita', 'images (1).jfif', 'Sekolah Kita adalah sebuah institusi pendidikan yang berkomitmen untuk memberikan pendidikan berkualitas kepada para siswa.\r\n\r\nDidirikan pada tahun 1990, Sekolah Kita telah mendedikasikan dirinya untuk menciptakan lingkungan belajar yang aman dan mendukung, dengan fokus pada pembelajaran yang holistik.\r\n\r\nKami menawarkan berbagai program akademik, mulai dari pendidikan pra-sekolah hingga sekolah menengah. Kurikulum kami mencakup mata pelajaran inti seperti matematika, ilmu pengetahuan, bahasa Inggris, dan juga program ekstrakurikuler yang beragam seperti seni, olahraga, dan teknologi.\r\n\r\nSelain itu, Sekolah Kita juga menempatkan pentingnya nilai-nilai karakter dalam pendidikan kami. Kami mendorong siswa untuk mengembangkan sikap disiplin, kerjasama, integritas, dan kepedulian terhadap sesama.\r\n\r\nJika Anda mencari sekolah yang memberikan pengalaman belajar yang bermakna dan mempersiapkan siswa untuk masa depan yang sukses, Sekolah Kita adalah pilihan yang tepat.', 1, '2023-07-01 05:15:32'),
(68, 'Sekolah Kita: Membangun Masa Depan Melalui Pendidikan yang inovatif', 'images (2).jpg', 'Sekolah Kita adalah lembaga pendidikan yang inovatif dan inspiratif, memberikan pengalaman belajar yang menarik dan mempersiapkan siswa untuk menghadapi tantangan di dunia nyata. Kami berkomitmen untuk memberikan pendidikan berkualitas tinggi yang memperkuat potensi siswa dan membantu mereka mencapai kesuksesan.\r\n\r\nSebagai sekolah yang berorientasi pada pembelajaran holistik, kami menggabungkan kurikulum yang luas dengan pengembangan karakter yang kuat. Kurikulum kami mencakup program akademik yang komprehensif, meliputi mata pelajaran inti seperti matematika, ilmu pengetahuan, bahasa Inggris, serta program seni dan olahraga yang menarik.\r\n\r\nKami memahami bahwa setiap siswa memiliki potensi unik. Oleh karena itu, kami menerapkan pendekatan diferensiasi dalam pembelajaran untuk memenuhi kebutuhan belajar individu setiap siswa. Kami memberikan perhatian pribadi, mendorong kreativitas, dan membangun rasa percaya diri siswa.\r\n\r\nSelain pendidikan akademik yang berkualitas, kami juga menekankan pentingnya pengembangan karakter dan kepemimpinan. Kami menginspirasi siswa untuk menjadi individu yang bertanggung jawab, berpikir kritis, kolaboratif, dan memiliki integritas tinggi. Kami menyediakan program ekstrakurikuler yang beragam, seperti debat, teater, klub sains, dan layanan masyarakat.\r\n\r\nDi Sekolah Kita, lingkungan belajar yang inklusif dan ramah memastikan siswa merasa diterima dan didukung. Fasilitas modern kami mencakup laboratorium ilmiah, perpustakaan lengkap, studio seni, lapangan olahraga, dan fasilitas teknologi mutakhir untuk meningkatkan pengalaman belajar siswa.\r\n\r\nKami memiliki tim pengajar yang berdedikasi dan berkualitas tinggi, siap membantu siswa mencapai potensi terbaik mereka. Mereka adalah pengajar yang berpengalaman dan peduli yang tidak hanya mengajar, tetapi juga menjadi mentornya.\r\n\r\nJika Anda mencari sekolah yang mengutamakan pendidikan berkualitas, pengembangan karakter, dan pengalaman belajar yang menarik, Sekolah Kita adalah pilihan yang tepat. Bergabunglah dengan kami dan mulailah perjalanan menuju masa depan yang sukses dan bermakna.', 1, '2023-07-01 09:54:50'),
(69, 'Sekolah Menengah Atas (SMA): Mempersiapkan Masa Depan', 'header2.jpg', 'Sekolah Menengah Atas (SMA) merupakan tahap penting dalam pendidikan setiap individu. Pada tingkat ini, siswa-siswi memasuki masa transisi yang krusial dalam kehidupan mereka. SMA tidak hanya menjadi tempat untuk memperoleh pengetahuan akademik, tetapi juga tempat untuk mengembangkan kepribadian, keterampilan, dan nilai-nilai yang akan membentuk dasar untuk masa depan yang gemilang. Dalam artikel ini, kita akan menjelajahi pentingnya SMA dalam membentuk perkembangan siswa-siswi, serta peran yang dimainkan oleh sekolah dalam mempersiapkan mereka untuk tantangan dunia nyata.', 1, '2023-07-01 09:54:15'),
(70, 'Pengetahuan Akademik yang Mendalam', 'images.jfif', 'SMA menyediakan kurikulum yang beragam dan mencakup berbagai mata pelajaran seperti matematika, sains, bahasa, seni, dan humaniora. Kurikulum yang komprehensif ini membantu siswa-siswi untuk memperdalam pengetahuan mereka dalam berbagai bidang. Mereka diberikan kesempatan untuk menjelajahi minat dan bakat mereka melalui pilihan mata pelajaran yang beragam, sehingga dapat mengembangkan keahlian yang sesuai dengan minat mereka. Selain itu, guru-guru yang berkualitas di SMA membantu siswa-siswi dalam memahami konsep-konsep yang kompleks dan menumbuhkan rasa ingin tahu yang kuat.', 1, '2023-07-01 05:23:32'),
(71, 'Pengembangan Keterampilan dan Bakat', 'images (3).jpg', 'SMA juga memberikan kesempatan kepada siswa-siswi untuk mengembangkan keterampilan dan bakat mereka di luar bidang akademik. Sekolah ini sering menyediakan beragam kegiatan ekstrakurikuler seperti olahraga, seni, musik, debat, dan berbagai klub yang sesuai dengan minat siswa. Melalui kegiatan-kegiatan ini, siswa-siswi dapat mengeksplorasi minat mereka, mengasah keterampilan sosial, dan meningkatkan kepercayaan diri. Keterlibatan dalam kegiatan ekstrakurikuler juga membantu mereka membangun karakter, disiplin, dan kerja tim, yang merupakan keterampilan penting untuk sukses dalam kehidupan.', 1, '2023-07-01 05:23:04'),
(72, 'Pembentukan Kepribadian dan Etika', 'images (2).jpg', 'SMA bukan hanya tentang akademik dan kegiatan ekstrakurikuler, tetapi juga tentang pembentukan kepribadian dan etika siswa-siswi. Melalui berbagai kegiatan yang dilakukan di sekolah, siswa-siswi belajar tentang nilai-nilai moral, toleransi, disiplin, tanggung jawab, dan menghormati perbedaan. Mereka juga diajarkan tentang pentingnya integritas, etika kerja, dan sikap positif. SMA menciptakan lingkungan yang mendukung pertumbuhan pribadi siswa-siswi, membangun pondasi untuk mereka menjadi warga negara yang bertanggung jawab dan berkontribusi secara positif terhadap masyarakat.', 1, '2023-07-01 05:18:45'),
(73, 'Mempersiapkan Tantangan Dunia Nyata', 'images (2).jpg', 'Terakhir, SMA mempersiapkan siswa-siswi untuk menghadapi tantangan dunia nyata. Mereka dilatih untuk mengembangkan keterampilan seperti pemecahan masalah, kritis berpikir, komunikasi efektif, dan kemampuan kerja tim. SMA juga memberikan siswa-siswi kesempatan untuk belajar tentang dunia kerja melalui program magang atau kunjungan ke perusahaan. Hal ini membantu mereka menghubungkan antara apa yang mereka pelajari di sekolah dengan dunia nyata, serta mempersiapkan mereka untuk masuk ke dunia kerja atau melanjutkan pendidikan mereka dengan bekal yang kuat.\r\n\r\nDalam kesimpulan, SMA memiliki peran yang sangat penting dalam mempersiapkan siswa-siswi untuk masa depan yang gemilang. Selain memberikan pengetahuan akademik yang mendalam, SMA juga mengembangkan keterampilan, bakat, kepribadian, dan etika siswa-siswi. Dengan mengintegrasikan semua aspek ini, SMA membentuk individu yang siap menghadapi tantangan dunia nyata dan melanjutkan pendidikan ke tingkat yang lebih tinggi. Oleh karena itu, penting bagi siswa-siswi untuk memanfaatkan kesempatan yang diberikan oleh SMA dan aktif terlibat dalam proses pendidikan mereka untuk mencapai kesuksesan dalam kehidupan.', 1, '2023-07-01 05:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `nama_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `gambar`, `nama_gambar`) VALUES
(1, 'unsplash_PDRFeeDniCk.png', 'Ruang Kelas'),
(2, 'unsplash_ml3js226u48.png', 'Halaman Luas'),
(3, 'unsplash_F8t2VGnI47I.png', 'Ruang Aula'),
(4, 'unsplash_9M9VYzjHYB8.png', 'Lapangan'),
(5, 'unsplash_6bKpHAun4d8.png', 'Kantin'),
(6, 'unsplash_NIJuEQw0RKg.png', 'Perpustakaan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_footer`
--

CREATE TABLE `tb_footer` (
  `id_footer` int(11) NOT NULL,
  `judul_footer` text NOT NULL,
  `konten_footer` text NOT NULL,
  `copyright` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_footer`
--

INSERT INTO `tb_footer` (`id_footer`, `judul_footer`, `konten_footer`, `copyright`) VALUES
(1, 'SMAN RANCAKALONG', 'Di Sekolah Kita, kami percaya bahwa setiap anak memiliki potensi tak terbatas. Kami berdedikasi untuk merangsang kreativitas, penemuan, dan kepemimpinan melalui pendekatan pembelajaran yang holistik. Kurikulum kami mencakup mata pelajaran yang luas, mulai dari ilmu pengetahuan hingga seni, serta program pengembangan karakter yang kuat.', 'Copyrights. All rights reserved. BRIMS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id_gallery` int(11) NOT NULL,
  `waktu_gallery` datetime NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gallery`
--

INSERT INTO `tb_gallery` (`id_gallery`, `waktu_gallery`, `gambar`) VALUES
(1, '2023-06-28 09:38:14', 'IMG_5699.JPG'),
(3, '2023-06-28 09:38:32', 'IMG_57002.png'),
(5, '2023-06-28 18:01:29', 'Firefly Inpaint 20230608002050.png'),
(6, '2023-06-28 18:01:37', 'IMG_5943.jpg'),
(7, '2023-06-28 18:01:44', 'IMG_6234-2.jpg'),
(8, '2023-06-28 18:01:53', 'IMG_6769.png'),
(9, '2023-06-28 18:02:02', 'IMG_9439.JPG'),
(10, '2023-06-28 18:02:50', 'IMG_7291.png'),
(11, '2023-06-28 18:03:03', 'ajdbadkln.png'),
(12, '2023-06-28 18:03:16', '1.jpeg'),
(13, '2023-06-28 18:03:30', 'DJI_0326.00_00_51_06.Still001-2.jpg'),
(14, '2023-06-28 18:03:41', 'Acer_Wallpaper_01_3840x2400.jpg'),
(15, '2023-06-28 18:12:50', 'IMG_6234.JPG'),
(16, '2023-06-28 18:19:50', 'ajdbadkln.png'),
(17, '2023-06-28 18:19:57', 'IMG_6234.JPG'),
(18, '2023-06-28 18:20:04', 'IMG_6761.JPG'),
(19, '2023-06-28 18:20:15', 'Firefly Inpaint 20230608002050.png'),
(20, '2023-06-28 18:20:24', 'me.jpg'),
(21, '2023-06-28 18:20:45', 'IMG_5943.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` text NOT NULL,
  `jabatan` text NOT NULL,
  `gambar` text NOT NULL,
  `mapel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama_guru`, `jabatan`, `gambar`, `mapel`) VALUES
(1, 'Maman', 'Guru', '', 'Bahasa Indonesia'),
(2, 'Wahyu', 'Guru', '', 'Biologi'),
(3, 'Wandy', 'Guru', '', 'Sejarah'),
(4, 'Narzi', 'Guru', '', 'Bahasa Jepang'),
(5, 'Mansyur', 'Guru', '', 'Agama'),
(6, 'Deni', 'Guru', '', 'Kimia'),
(7, 'Herman', 'Guru', '', 'Seni'),
(8, 'Ahmad', 'Guru', '', 'IPA'),
(9, 'Guntur', 'Guru', '', 'Fisika'),
(10, 'Restu', 'Guru', '', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lab`
--

CREATE TABLE `tb_lab` (
  `id_lab` int(11) NOT NULL,
  `nama_lab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lab`
--

INSERT INTO `tb_lab` (`id_lab`, `nama_lab`) VALUES
(1, 'Kimia'),
(2, 'Komputer'),
(3, 'Bahasa'),
(4, 'Biologi'),
(5, 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_tempat` text NOT NULL,
  `koordinat` float NOT NULL,
  `alamat` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `url`) VALUES
(1, 'Home', './index.php'),
(2, 'Profil', './profil.php'),
(3, 'Artikel', './details.php'),
(4, 'Gallery', './gallery.php'),
(6, 'About Us', './about.php');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama_gambar` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `nama_gambar`, `gambar`) VALUES
(1, 'Karate', 'unsplash_ryOMte-FerE.png'),
(2, 'Pramuka', 'unsplash_7rImz-goqfQ.png'),
(3, 'Bulutangkis', 'unsplash_rjWfNR_AC5g.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_profil` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_profil`, `url`) VALUES
(1, 'Fasilitas', 'a'),
(2, 'Lokasi', 'a'),
(3, 'Sejarah', 'a'),
(4, 'Prestasi', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruangan`
--

CREATE TABLE `tb_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ruangan`
--

INSERT INTO `tb_ruangan` (`id_ruangan`, `nama_ruangan`) VALUES
(1, 'Sakura'),
(2, 'Angrek'),
(3, 'Tulip'),
(4, 'Edelweiss'),
(5, 'Mawar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sejarah`
--

CREATE TABLE `tb_sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `judul` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sejarah`
--

INSERT INTO `tb_sejarah` (`id_sejarah`, `deskripsi`, `judul`) VALUES
(1, 'SMA Negeri Rancakalong merupakan sebuah sekolah menengah atas negeri yang berada di Kecamatan Rancakalong. Lokasinya berada di pinggir jalan Desa Nagarawangi, sekitar 600 meter ke arah timur dari Kantor Kecamatan Rancakalong.\r\n\r\nSekolah ini mulai berjalan pada tahun 1999 berdasarkan pada Surat Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 291/O/1999 tertanggal 20 Oktober 1999 tentang Pembukaan dan Penegerian Sekolah Tahun Pelajaran 1998/1999. Berdasarkan Surat Keputusan ini, SMA Negeri Rancakalong menjadi salah satu sekolah yang statusnya dinegerikan.\r\n\r\nPada tahun 2015 SMA Negeri Rancakalong mendapatkan akreditasi dari Badan Akreditasi Provinsi Sekolah/Madrasah (BAP-SM) dengan predikat A. Raihan akreditasi ini berdasarkan pada Surat Keputusan Badan Akreditasi Provinsi Sekolah/Madrasah dengan Nomor 02.00/203/BAP-SM/SK/XII/2015 tertanggal 10 Desember 2015.\r\n\r\nSebagaimana sekolah jenjang menengah atas lainnya, di SMA Negeri Rancakalong juga tersedia dua jurusan yang bisa diikuti oleh siswanya. Jurusan yang tersedia adalah jurusan Ilmu Pendidikan Alam (IPA), Ilmu Pendidikan Sosial (IPS) dan jurusan Bahasa.\r\n\r\nSaat ini, SMA Negeri Rancakalong sudah memiliki fasilitas atau sarana dan prasarana yang memadai dalam menjalankan kegiatan belajar mengajarnya.', 'Sejarah SMAN Rancakalong');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn_siswa` int(12) NOT NULL,
  `nama_siswa` varchar(124) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` text NOT NULL,
  `nama_orang_tua` varchar(124) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn_siswa`, `nama_siswa`, `alamat`, `tanggal_lahir`, `tempat_lahir`, `nama_orang_tua`, `jenis_kelamin`, `foto`) VALUES
(1, 123456789, 'Indra Kusumah', 'jalan mayor abdurahman', '2003-03-28', 'Sumedang', 'michael', 'laki laki', 'IMG_9649.JPG'),
(6, 987654321, 'kusumahh', 'bandung', '2003-03-25', 'Jakarta', 'thony', 'laki - laki', ''),
(7, 12345, 'Rizki', 'Paseh', '2001-02-03', 'Sumedang', 'Wawan', 'laki laki', ''),
(8, 9876, 'Bintang', 'Jatihurip', '2002-04-05', 'Sumedang', 'qwert', 'laki laki', ''),
(9, 45678, 'Rifqi', 'Pandai', '2000-01-02', 'Sumedang', 'zxcvb', 'laki laki', ''),
(10, 23456, 'Rifan', 'Cipadung', '2001-06-16', 'Sumedang', 'asdfg', 'laki laki', ''),
(11, 56789, 'Zaki', 'Wado', '2003-05-23', 'Sumedang', 'lkjhg', 'laki laki', ''),
(12, 89012, 'Martin', 'Situraja', '2002-05-07', 'Sumedang', 'mnbvc', 'laki laki', ''),
(13, 34567, 'Dilan', 'Darmaraja', '2002-07-17', 'Sumedang', 'oipuy', 'laki laki', ''),
(14, 56789, 'Heru', 'Surian', '2001-12-27', 'Sumedang', 'cvbnm', 'laki laki', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `nama`, `username`, `password`) VALUES
(1, 'indra kusumah', 'indra022', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'zaidan', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tb_footer`
--
ALTER TABLE `tb_footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_lab`
--
ALTER TABLE `tb_lab`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  ADD PRIMARY KEY (`id_ruangan`);

--
-- Indexes for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_footer`
--
ALTER TABLE `tb_footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_lab`
--
ALTER TABLE `tb_lab`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_ruangan`
--
ALTER TABLE `tb_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  MODIFY `id_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
