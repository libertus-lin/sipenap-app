-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 01:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_sipenap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `satker_admin` varchar(50) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `satker_admin`, `username_admin`, `password_admin`) VALUES
(1, 'admin', 'Polisi', 'admin', 'admin'),
(2, 'user', 'anggota', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi_berita`, `gambar`) VALUES
(1, 'Tentang Narkotika', 'Tentang narkotika bla bla bla...', 'narkotika.jpg'),
(2, 'Psikotropika', 'Tentang psikotropika bla bla bla...', 'psikotropika.jpg'),
(3, 'Zat Adiktif ', 'Zat Adiktif adalah obat serta bahan-bahan aktif yang apabila dikonsumsi oleh organisme hidup, maka dapat menyebabkan kerja biologi serta menimbulkan ketergantungan atau adiksi yang sulit dihentikan dan berefek ingin menggunakannya secara terus-menerus. Jika dihentikan dapat memberi efek lelah luar biasa atau rasa sakit luar biasa. Zat yang bukan tergolong narkotika dan psikotropika tetapi menimbulkan ketagihan antara lain kopi, rokok, minuman keras, dll.', 'zat-adiktif.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `video_animasi` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `Golngan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `id_berita`, `judul`, `video_animasi`, `kategori`, `Golngan`, `keterangan`) VALUES
(3, 1, 'Narkotika', 'vide-narkotika.mp4', 'Narkotika', 'Golongan I', 'Tentang narkotika bla....'),
(4, 2, 'Psikotropika', 'video-psikotropika.mp4', 'Psikotropika', 'Golongan II', 'Tentang psikotropika'),
(6, 3, 'Zat Adiktif', 'video-zat-adiktif.mp4', 'Zat Adiktif', 'Golongan II', 'Zat adiktif adalah obat serta bahan-bahan aktif yang apabila dikonsumsi oleh organisme hidup, maka dapat menyebabkan kerja biologi serta menimbulkan ketergantungan atau adiksi yang sulit dihentikan dan berefek ingin menggunakannya secara terus-menerus. Jika dihentikan dapat memberi efek lelah luar biasa atau rasa sakit luar biasa. Zat yang bukan tergolong narkotika dan psikotropika tetapi menimbulkan ketagihan antara lain kopi, rokok, minuman keras, dll.');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `benar` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `id_pertanyaan`, `deskripsi`, `benar`) VALUES
(1, 1, 'Obat bius', 1),
(2, 2, 'Soda', 1),
(3, 3, 'Kecanduan', 1),
(4, 4, 'Rokok', 1),
(5, 5, 'Zat adiktif', 1),
(6, 6, 'Psikotropika', 1),
(7, 7, 'Metadon', 1),
(8, 8, 'Egosentrik', 1),
(9, 9, 'Over dosis', 1),
(10, 10, 'Pendidikan keluarga', 1);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `telp_pelapor` varchar(12) NOT NULL,
  `isi_laporan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_admin`, `nama_pelapor`, `telp_pelapor`, `isi_laporan`) VALUES
(2, 1, 'pengunjung', '081346111649', 'Lapor ');

-- --------------------------------------------------------

--
-- Table structure for table `narkotika`
--

CREATE TABLE `narkotika` (
  `id_narkotika` int(11) NOT NULL,
  `id_golongan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `narkotika`
--

INSERT INTO `narkotika` (`id_narkotika`, `id_golongan`, `judul`, `gambar`, `keterangan`) VALUES
(1, 1, 'Judul Narkotika', 'narkotika.png', 'zat atau obat yang berasal dari tanaman atau bukan tanaman, baik sintetis maupun semi sintetis yang dapat menyebabkan penurunan atau perubahan kesadaran, hilangnya rasa nyeri dan dapat menimbulkan ketergantungan (Undang-Undang No. 22 tahun 1997).'),
(2, 2, 'Judul Narkotika Kedua', 'narkotika.jpg', 'zat atau obat yang menurunkan fungsi otak serta merangsang sistem saraf pusat menimbulkan reaksi halusinasi, ilusi, gangguan cara berpikir, perubahan perasaan yang tiba-tiba, dan menimbulkan rasa kecanduan pada pemakainya.'),
(3, 0, 'Penyuluhan narkotika', '22.-Undang-undang-yang-Mengatur-Tentang-Narkotika.jpg', 'Narkotika adalah zat atau obat yang berasal dari tanaman atau bukan tanaman, baik sintetis maupun semi sintetis yang dapat menyebabkan penurunan atau perubahan kesadaran, hilangnya rasa nyeri dan dapat menimbulkan ketergantungan (Undang-Undang No. 35 tahun 2009).');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `deskripsi`, `skor`) VALUES
(1, 'Istilah narkotik mempunyai arti...', 1),
(2, 'Berikut ini merupakan jenis-jenis nakorba, kecuali...', 1),
(3, 'Berikut ini merupakan risiko penyalahgunaan narkoba, yaitu...', 1),
(4, 'Nikotin merupakan zat berbahaya yang sanggup ditemukan pada...', 1),
(5, 'Minuman keras merupakan narkoba jenis...', 1),
(6, 'Zat atau obat, baik alamiah maupun sintetis bukan narkotika, yang berkhasiat psikoaktif melalui pengaruh selektif pada susunan syaraf pusat yang menyebabkan perubahan khas pada aktivitas mental dan perilaku. Pernyataan di atas merupakan pengertian dari...', 1),
(7, 'Narkotika Gol II merupakan bahan baku untuk produksi obat yang bisa menimbulkan potensi ketergantungan tinggi, dan hanya digunakan sebagai pilihan terakhir dalam pengobatan. Di bawah ini yang termasuk jenis narkotika Gol. II adalah...', 1),
(8, 'Seorang bernama Fulan menjadi sangat sensitif, mudah tersinggung, dan sering marah -marah. Berdasarkan ciri-ciri tersebut Fulan sedang mengalami gejala penyalahgunaan narkoba...', 1),
(9, 'Konsumsi narkoba melebihi kemampuan tubuh untuk menerimanya. Pernyataan tersebut adalah fase yang disebut...', 1),
(10, 'Pendidkan yang menjadi pondasi dari pencegahan penyalahgunaan narkoba adalah...', 1);

-- --------------------------------------------------------

--
-- Table structure for table `psikotropika`
--

CREATE TABLE `psikotropika` (
  `id_psikotropika` int(11) NOT NULL,
  `id_golongan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `psikotropika`
--

INSERT INTO `psikotropika` (`id_psikotropika`, `id_golongan`, `judul`, `gambar`, `keterangan`) VALUES
(1, 1, 'Judul Psikotropika', 'psikotropika.jpg', ' zat atau obat yang menurunkan fungsi otak serta merangsang sistem saraf pusat menimbulkan reaksi halusinasi, ilusi, gangguan cara berpikir, perubahan perasaan yang tiba-tiba, dan menimbulkan rasa kecanduan pada pemakainya.'),
(2, 0, 'Penyuluhan psikotropika', 'ciri-ciri-pengguna-narkoba-doktersehat.jpg', '<p>Zat atau obat psikotropika ini dapat menurunkan aktivitas&nbsp;<a href=\"https://id.wikipedia.org/wiki/Otak\">otak</a>&nbsp;atau merangsang susunan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Saraf\">saraf</a>&nbsp;pusat dan menimbulkan kelainan perilaku, disertai dengan timbulnya&nbsp;<a href=\"https://id.wikipedia.org/wiki/Halusinasi\">halusinasi</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Ilusi\">ilusi</a>, gangguan cara berpikir, perubahan alam perasaan dan dapat menyebabkan ketergantungan serta mempunyai efek&nbsp;<a href=\"https://id.wikipedia.org/wiki/Stimulasi\">stimulasi</a>&nbsp;bagi para pemakainya.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `zat_adiktif`
--

CREATE TABLE `zat_adiktif` (
  `id_zat_adiktif` int(11) NOT NULL,
  `id_golongan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zat_adiktif`
--

INSERT INTO `zat_adiktif` (`id_zat_adiktif`, `id_golongan`, `judul`, `gambar`, `keterangan`) VALUES
(1, 1, 'Judul Zat Adiktik', 'zat-adiktif.jpg', 'Zat Adiktif adalah obat serta bahan-bahan aktif yang apabila dikonsumsi oleh organisme hidup, maka dapat menyebabkan kerja biologi serta menimbulkan ketergantungan atau adiksi yang sulit dihentikan dan berefek ingin menggunakannya secara terus-menerus. Jika dihentikan dapat memberi efek lelah luar biasa atau rasa sakit luar biasa. Zat yang bukan tergolong narkotika dan psikotropika tetapi menimbulkan ketagihan antara lain kopi, rokok, minuman keras, dll.'),
(2, 0, 'Penyuluhan zat adiktif', 'nartkotika.jpg', '<p><strong>Zat adiktif</strong>&nbsp;adalah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Obat\">obat</a>&nbsp;serta bahan-bahan aktif yang apabila dikonsumsi oleh&nbsp;<a href=\"https://id.wikipedia.org/wiki/Organisme\">organisme</a>&nbsp;hidup, maka dapat menyebabkan kerja biologi serta menimbulkan ketergantungan atau&nbsp;<a href=\"https://id.wikipedia.org/wiki/Adiksi\">adiksi</a>&nbsp;yang sulit dihentikan dan berefek ingin menggunakannya secara terus-menerus. Jika dihentikan dapat memberi efek lelah luar biasa atau rasa&nbsp;<a href=\"https://id.wikipedia.org/wiki/Sakit\">sakit</a>&nbsp;luar biasa. Zat yang bukan tergolong&nbsp;<a href=\"https://id.wikipedia.org/wiki/Narkotika\">narkotika</a>&nbsp;dan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Psikotropika\">psikotropika</a>&nbsp;tetapi menimbulkan ketagihan antara lain&nbsp;<a href=\"https://id.wikipedia.org/wiki/Kopi\">kopi</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Rokok\">rokok</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Minuman_keras\">minuman keras</a>, dll.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `narkotika`
--
ALTER TABLE `narkotika`
  ADD PRIMARY KEY (`id_narkotika`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indexes for table `psikotropika`
--
ALTER TABLE `psikotropika`
  ADD PRIMARY KEY (`id_psikotropika`);

--
-- Indexes for table `zat_adiktif`
--
ALTER TABLE `zat_adiktif`
  ADD PRIMARY KEY (`id_zat_adiktif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `narkotika`
--
ALTER TABLE `narkotika`
  MODIFY `id_narkotika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `psikotropika`
--
ALTER TABLE `psikotropika`
  MODIFY `id_psikotropika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zat_adiktif`
--
ALTER TABLE `zat_adiktif`
  MODIFY `id_zat_adiktif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id_pertanyaan`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
