-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Des 2019 pada 19.28
-- Versi server: 10.0.38-MariaDB-cll-lve
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekola34_db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_absen`
--

CREATE TABLE `tbl_absen` (
  `kode_absen` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_kelas` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_sms` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_absen`
--

INSERT INTO `tbl_absen` (`kode_absen`, `nis`, `kode_kelas`, `keterangan`, `tanggal`, `status_sms`) VALUES
(14, '7001', 'J353181H', 'hadir', '2019-10-07 17:04:55', 0),
(13, '7000', 'J353181H', 'hadir', '2019-10-07 17:04:50', 0),
(12, '7000', 'J353181H', 'hadir', '2019-10-07 17:04:50', 0),
(15, '70012', 'J353181H', 'hadir', '2019-10-07 17:04:57', 0),
(16, '7000', 'J353181H', 'sakit', '2019-10-20 03:18:04', 1),
(17, '70012', 'J353181H', 'izin', '2019-10-20 02:03:06', 1),
(18, '7001', 'J353181H', 'alfa', '2019-10-20 02:03:10', 1),
(19, '0783', 'K102373G', 'hadir', '2019-10-09 03:30:15', 0),
(20, '7003', 'S74457R', 'hadir', '2019-10-09 03:31:58', 0),
(21, '7004', 'S74457R', 'hadir', '2019-10-09 03:32:00', 0),
(22, '7000', 'J353181H', 'hadir', '2019-10-10 21:09:34', 0),
(23, '7003', 'S74457R', 'hadir', '2019-10-11 00:42:12', 0),
(24, '7004', 'S74457R', 'hadir', '2019-10-11 00:42:14', 0),
(25, '7003', 'S74457R', 'sakit', '2019-10-20 02:03:26', 1),
(26, '7004', 'S74457R', 'sakit', '2019-10-20 02:03:28', 1),
(27, '7003', 'S74457R', 'hadir', '2019-10-11 00:50:12', 0),
(28, '7004', 'S74457R', 'hadir', '2019-10-11 00:50:15', 0),
(29, '7000', 'J353181H', 'hadir', '2019-10-11 23:01:51', 0),
(30, '7001', 'J353181H', 'izin', '2019-10-20 02:03:15', 1),
(31, '7003', 'S74457R', 'hadir', '2019-10-12 16:42:43', 0),
(32, '7004', 'S74457R', 'hadir', '2019-10-12 16:42:46', 0),
(33, '7000', 'J353181H', 'izin', '2019-10-20 02:03:20', 1),
(34, '70012', 'J353181H', 'hadir', '2019-10-13 06:09:41', 0),
(35, '7001', 'J353181H', 'sakit', '2019-10-23 02:29:19', 1),
(36, '7003', 'S74457R', 'hadir', '2019-10-19 02:46:43', 0),
(37, '7004', 'S74457R', 'sakit', '2019-10-19 22:25:24', 1),
(38, '7011', 'S74457R', 'hadir', '2019-10-20 03:15:16', 0),
(39, '7011', 'S74457R', 'izin', '2019-10-20 11:32:02', 1),
(40, '7013', 'S74457R', 'hadir', '2019-10-20 11:35:27', 0),
(41, '7014', 'S74457R', 'izin', '2019-10-20 11:36:01', 1),
(42, '0783', 'S74457R', 'sakit', '2019-10-20 11:52:03', 1),
(43, '0783', 'S74457R', 'hadir', '2019-10-21 16:16:11', 0),
(44, '7011', 'S74457R', 'izin', '2019-10-21 16:28:18', 1),
(45, '7013', 'S74457R', 'sakit', '2019-10-21 16:28:18', 1),
(46, '7014', 'S74457R', 'alfa', '2019-10-21 16:28:19', 1),
(47, '7016', 'S74457R', 'hadir', '2019-10-21 16:16:19', 0),
(48, '7015', 'S74457R', 'hadir', '2019-10-21 16:16:21', 0),
(49, '9000', 'S74457R', 'sakit', '2019-10-22 10:08:01', 1),
(50, '0783', 'S74457R', 'alfa', '2019-10-23 03:56:01', 1),
(51, '0783', 'K102373G', 'sakit', '2019-10-25 02:49:00', 1),
(55, '7032', 'K102373G', 'sakit', '2019-10-31 11:34:01', 1),
(54, '7031', 'K102373G', 'sakit', '2019-10-26 09:05:00', 1),
(56, '7032', 'K102373G', 'alfa', '2019-10-31 11:44:01', 1),
(57, '7033', 'K102373G', 'izin', '2019-10-31 11:48:01', 1),
(58, '7031', 'K102373G', 'sakit', '2019-11-01 13:51:01', 1),
(59, '7023', 'E87152P', 'sakit', '2019-11-21 07:59:02', 1),
(60, '7023', 'E87152P', 'izin', '2019-11-21 08:00:01', 1),
(61, '7023', 'E87152P', 'sakit', '2019-11-23 06:48:01', 1),
(62, '7021', 'E87152P', 'alfa', '2019-11-23 06:51:00', 1),
(63, '87635', 'E87152P', 'alfa', '2019-11-23 06:56:00', 1),
(64, '87635', 'E87152P', 'izin', '2019-11-23 06:59:00', 1),
(65, '7023', 'E87152P', 'sakit', '2019-11-24 05:48:00', 1),
(66, '7023', 'E87152P', 'izin', '2019-11-28 04:49:01', 1),
(67, '7023', 'E87152P', 'sakit', '2019-11-28 04:50:02', 1),
(68, '7023', 'E87152P', 'alfa', '2019-12-02 00:21:00', 1),
(69, '7023', 'E87152P', 'hadir', '2019-12-05 09:21:44', 0),
(70, '7023', 'E87152P', 'izin', '2019-12-09 02:10:01', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_absen_chace`
--

CREATE TABLE `tbl_absen_chace` (
  `id_chace` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_kelas` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ajukan`
--

CREATE TABLE `tbl_ajukan` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `isi` text,
  `poin` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `nip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ajukan`
--

INSERT INTO `tbl_ajukan` (`id`, `kategori`, `isi`, `poin`, `status`, `nip`) VALUES
(16, '1', 'Setiap terlambat jam pertama setelah bel berbunyi', 2, 0, '1000'),
(18, '1', 'Setiap terlambat masuk kelas setelah bel istirahat berbunyi, pergantian jam', 2, 0, '1000'),
(19, '1', 'Setiap keluar ketika KBM berlangsung dan baru kembali 10-15 menit', 4, 0, '1000'),
(20, '1', 'Setiap izin keluar ketika KBM berkangsung dan tidak kembali lagi', 5, 0, '1000'),
(21, '2', 'Setiap yang tidak masuk karena izin, sakit, keperluan keluarga', 1, 0, '1000'),
(22, '2', 'Setiap tidak masuk tanpa keterangan atau alfa', 10, 0, '1000'),
(23, '2', 'Setiap tidak masuk dengan membuat keterangan palsu', 10, 0, '1000'),
(24, '2', 'Setiap membolos', 10, 0, '1000'),
(25, '2', 'Setiap tidak ikut upacara kecuali sakit ', 1, 0, '1000'),
(26, '3', 'Setiap tidak memakai seragam, tidak rapih / tidak dimasukan', 2, 0, '1000'),
(27, '3', 'Setiap tidak memakai kaos kaki, dasi', 2, 0, '1000'),
(28, '3', 'Setiap tidak memakai ikat pinggang', 2, 0, '1000'),
(29, '3', 'Setiap memakai jaket dalam kelas kecuali sakit dengan keterangan dokter', 3, 0, '1000'),
(30, '3', 'Setiap memakai celana panjang terbelah atau diinjak bagian bawah tidak dijahit', 5, 0, '1000'),
(31, '3', 'Setiap kuku panjang, rambut panjang', 2, 0, '1000'),
(32, '3', 'Setiap tidak mengerjakan tugas yang diberikan guru (PR, latihan dll)', 5, 0, '1000'),
(33, '3', 'Setiap memakai celana model pensil bagi laki-laki', 2, 0, '1000'),
(34, '3', 'Setiap memakai rok diatas mata kaki bagi perempuan', 2, 0, '1000'),
(35, '4', 'Setiap mengendarai kendaraan bermotor dengan sengaja menarik gas terlalu kencang', 10, 0, '1000'),
(36, '4', 'Setiap tidak melakukan piket kelas', 10, 0, '1000'),
(37, '4', 'Setiap corat-coret atau mengotori terhadap barang milik sekolah atau orang lain', 10, 0, '1000'),
(38, '4', 'Setiap membuat kegaduhan dikelas saat KBM berlangsung', 15, 0, '1000'),
(39, '4', 'Setiap berpindah-pindah duduk saat KBM berlangsung', 15, 0, '1000'),
(40, '4', 'Setiap membuat kegaduhan dilingkungan kelas / sekolah, berteriak-teriak, dibunyikan alat music sehingga menggangu kelas saat KBM berlangsung', 15, 0, '1000'),
(41, '4', 'Setiap bermusuhan (dendam dan ancaman) dengan teman didalam atau diluar sekolah', 20, 0, '1000'),
(42, '4', 'Setiap merusak barang milik sekolah, orang lain, guru', 25, 0, '1000'),
(43, '4', 'Setiap membuang sampah sembarangan dilingkungan sekolah', 10, 0, '1000'),
(44, '4', 'Setiap meloncat pagar sekolah', 25, 0, '1000'),
(45, '4', 'Setiap tidak membawa, mengerjakan, mengumpulkan tugas tepat waktu', 10, 0, '1000'),
(46, '4', 'Setiap kali tidak membawa buku point', 5, 0, '1000'),
(47, '4', 'Setiap tidak memberikan surat panggilan ke orang tua', 5, 0, '1000'),
(48, '4', 'Setiap mencuri barang milik sekolah', 100, 0, '1000'),
(49, '4', 'Setiap kedapatan membawa HP, berbunyi sehingga menggangu KBM yang sedang berlangsung', 5, 0, '1000'),
(50, '5', 'Setiap kedapatan membawa rokok dalam lingkungan wawasan wilyata mandala', 25, 0, '1000'),
(51, '5', 'Setiap kedapatan merokok dalam lingkungan kawasan wilyata mandala (Sekolah)', 25, 0, '1000'),
(52, '6', 'Setiap kedapatan memegang, membawa nerkoba, minuman keras', 75, 0, '1000'),
(53, '6', 'Setiap mabuk disekolah karena narkoba, minuman keras', 75, 0, '1000'),
(54, '6', 'Setiap mengedarkan, menggunakan narkoba', 100, 0, '1000'),
(55, '7', 'Setiap membawa gambar, buku, majalah, stensil, kaset, disket, VCD, foto porno, video porno di HP', 50, 0, '1000'),
(56, '7', 'Setiap menjual belikan gambar, buku majalah, stensil, kaset, disket, VCD, DVD, foto porno', 50, 0, '1000'),
(57, '7', 'Setiap melihat gambar, buku, majalah, stensil, kaset, VCD, DVD, foto porno, video porno di HP', 50, 0, '1000'),
(58, '7', 'Setiap membuat gambar berbentuk porno', 50, 0, '1000'),
(59, '8', 'Setiap berpacaran dilingkungan wawasan wiyata mandala', 10, 0, '1000'),
(60, '8', 'Setiap melakukan tindakan asusila baik terhadap pacar atau teman dilingkungan wawasan wiyata mandala', 75, 0, '1000'),
(61, '9', 'Setiap membawa senjata api, senjata tajam', 50, 0, '1000'),
(62, '9', 'Setiap menjual belikan senjata api, senjata tajam', 50, 0, '1000'),
(63, '9', 'Setiap menggunakan senjata api, senjata tajam', 100, 0, '1000'),
(64, '10', 'Berkelahi, tawuran dengan sesama siswa SMK Muhammadiyah Kotaagung, tidak berdampak', 50, 0, '1000'),
(65, '10', 'Berkelahi, tawuran dengan sesama siswa SMK Muhammadiyah Kotaagung, berdampak', 75, 0, '1000'),
(66, '10', 'Menjadi propokator perkelahian', 75, 0, '1000'),
(67, '10', 'Berkelahi, tawuran dengan sekolah lain dan terlibat langsung ', 100, 0, '1000'),
(68, '11', 'Setiap mengancam dan menidentimidasi Kepala Sekolah / Guru / Pegawai', 100, 0, '1000'),
(69, '11', 'Menganiaya, mengeroyok terhadap Kepala Sekolah/ Guru / Pegawai', 100, 0, '1000'),
(70, '1', 'terlambat jam pertama', 6, 0, '1000'),
(74, '1', 'terlambat masuk jam pertama', 2, 0, '1000'),
(75, '1', 'terlambat masuk jam pertama', 2, 0, '1000'),
(76, '1', 'terlambat masuk jam pertama', 2, 0, '1000'),
(77, '1', 'terlambat jam pertama', 2, 0, '1000'),
(84, '3', 'tidak pakai gesper', 20, 0, '1000'),
(85, '3', 'tidak pakai kerudung', 10, 0, '1000'),
(86, '3', 'fungsi ini untuk apa bang, mending dihapus aja klo tidak ada sangkut pautan sma admin.', 100, 0, '1000'),
(87, '1', '', 0, 0, '1000'),
(88, '2', 'pelecehan', 50, 0, '1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_chace_absen`
--

CREATE TABLE `tbl_chace_absen` (
  `id` int(11) NOT NULL,
  `kode_kelas` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `status_absen` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_chace_absen`
--

INSERT INTO `tbl_chace_absen` (`id`, `kode_kelas`, `nis`, `status_absen`) VALUES
(95, 'K102373G', '7032', 0),
(80, 'S74457R', '7015', 0),
(84, 'J799267X', '7006', 0),
(56, 'T797136G', '7044', 0),
(55, 'T797136G', '7551', 0),
(53, 'T797136G', '7005', 0),
(54, 'T797136G', '7553', 0),
(96, 'K102373G', '7033', 0),
(60, 'K102373G', '7034', 0),
(61, 'K102373G', '7035', 0),
(62, 'K102373G', 'Pilih Siswa', 0),
(63, 'J353181H', '7001', 0),
(64, 'J353181H', '70012', 0),
(65, 'J353181H', '7000', 0),
(97, 'L185156E', '0001', 0),
(81, 'S74457R', '7016', 0),
(79, 'S74457R', '7014', 0),
(78, 'S74457R', '7011', 0),
(77, 'S74457R', '7013', 0),
(85, 'J799267X', '7058', 0),
(86, 'J799267X', '7017', 0),
(90, 'K102373G', '0783', 0),
(91, 'S74457R', '7003', 0),
(92, 'K102373G', '7097', 0),
(98, 'L185156E', '0002', 0),
(99, 'L185156E', '0003', 0),
(100, 'L185156E', '0004', 0),
(101, 'L185156E', '0005', 0),
(102, 'L185156E', '0006', 0),
(103, 'L185156E', '0007', 0),
(104, 'L185156E', '0008', 0),
(105, 'L185156E', '0009', 0),
(106, 'L185156E', '0010', 0),
(107, 'L185156E', '0011', 0),
(108, 'L185156E', '0012', 0),
(109, 'L185156E', '0013', 0),
(110, 'L185156E', '0014', 0),
(111, 'L185156E', '0015', 0),
(112, 'L185156E', '0016', 0),
(113, 'K102373G', '7031', 0),
(115, 'E87152P', '7022', 0),
(129, 'E87152P', '7023', 0),
(119, 'E87152P', '7021', 0),
(123, 'E87152P', '87635', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_chace_beritahu`
--

CREATE TABLE `tbl_chace_beritahu` (
  `id` int(11) NOT NULL,
  `kode_kelas` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `status_absen` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_chace_nilai`
--

CREATE TABLE `tbl_chace_nilai` (
  `id_chace` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_matpel` varchar(100) NOT NULL,
  `kode_kelas` varchar(100) NOT NULL,
  `status_nilai` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_chace_nilai`
--

INSERT INTO `tbl_chace_nilai` (`id_chace`, `nis`, `kode_matpel`, `kode_kelas`, `status_nilai`) VALUES
(48, '7097', 'B884776T', 'K102373G', 0),
(5, '70012', 'C258373F', 'J353181H', 0),
(4, '7001', 'C258373F', 'J353181H', 0),
(8, '7000', 'F333611L', 'J353181H', 0),
(32, '7011', 'H625204D', 'S74457R', 0),
(22, '7014', 'G688945Q', 'S74457R', 0),
(23, '7015', 'G688945Q', 'S74457R', 0),
(24, '7016', 'G688945Q', 'S74457R', 0),
(25, '7032', 'B884776T', 'K102373G', 0),
(26, '7031', 'B884776T', 'K102373G', 0),
(50, '7022', 'I302363B', 'E87152P', 0),
(28, '7034', 'B884776T', 'K102373G', 0),
(29, 'Pilih Siswa', 'B884776T', 'K102373G', 0),
(31, '7013', 'H625204D', 'S74457R', 0),
(41, '7058', 'F447994J', 'J799267X', 0),
(40, '7006', 'F447994J', 'J799267X', 0),
(42, '7017', 'F447994J', 'J799267X', 0),
(47, '7003', 'G688945Q', 'S74457R', 0),
(65, '7023', 'X524279Y', 'E87152P', 0),
(55, '87635', 'I302363B', 'E87152P', 0),
(57, '7021', 'I302363B', 'E87152P', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL,
  `nope` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`nip`, `nama`, `jabatan`, `password`, `alamat`, `nope`) VALUES
('1000', 'FUJI LESTARI,S.Pd', 'guru', '0000', 'Jl puri kencana', '085357662574'),
('181009753004122754', 'FITRI DARYANI,S.Pd', 'guru', '1214', 'Jl. Anggrek', '082154328976'),
('182007822002151352', 'GERY FERDHO HIPSON,S.Pd', 'guru', '8080', 'Jl.Ahmad Yani', '05378302096'),
('195007825006031256', 'MAYA SHANTIE,S.Pd', 'guru', '5757', 'Jl. Sebesi', '082176809076'),
('196009431006052354', 'ELFIDA,S,PD', 'guru', '1818', 'JL.Pulau Gedong', '085275302039'),
('196009542006091254', 'DIYAN FIRMANSYAH,S.Pd', 'guru', '9890', 'Jl. Tanggamus', '085279302090'),
('197009242006072163', 'ROAINI,S.Pd', 'guru', '1919', 'Jl. Kelud Raya', '082267549830'),
('2100', 'Hj.SRI MARGIYANI ,S.Pd', 'kepala', '5555', 'Jl. Pagar Alam No 21', '082282679065'),
('admin', 'Guru Bimbingan Konseling', 'admin', '123', 'Jl. Bendungan Kusa Kec.Kotaagung Kab. Tanggamus', '089654543231');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `kategori`) VALUES
(1, 'TERLAMBAT'),
(2, 'KEHADIRAN'),
(3, 'KERAPIHAN BERPAKAIAN'),
(4, 'KETERTIBAN'),
(5, 'MEROKOK'),
(6, 'NARKOBA DAN MINUMAN KERAS'),
(7, 'BACAAN PORNO'),
(8, 'PRILAKU SEKSUAL'),
(9, 'SENJATA API DAN SENJATA TAJAM'),
(10, 'BERKELAHI / TAWURAN'),
(11, 'INTIMIDASI / ANCAMAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kode_kelas` varchar(100) NOT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kode_kelas`, `nama_kelas`, `nip`) VALUES
('B328126N', 'Kelas 6A', '196009431006052354'),
('E87152P', 'Kelas 6B', '1000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas_anggota`
--

CREATE TABLE `tbl_kelas_anggota` (
  `id` int(11) NOT NULL,
  `kode_kelas` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas_anggota`
--

INSERT INTO `tbl_kelas_anggota` (`id`, `kode_kelas`, `nis`) VALUES
(2, 'J353181H', '7001'),
(3, 'J353181H', '70012'),
(15, 'T797136G', '7005'),
(6, 'J353181H', '7000'),
(22, 'K102373G', '7032'),
(21, 'K102373G', '7031'),
(17, 'S74457R', '7013'),
(16, 'S74457R', '7011'),
(12, 'T797136G', '7553'),
(13, 'T797136G', '7551'),
(14, 'T797136G', '7044'),
(18, 'S74457R', '7014'),
(19, 'S74457R', '7015'),
(20, 'S74457R', '7016'),
(23, 'K102373G', '7033'),
(24, 'K102373G', '7034'),
(35, 'L185156E', '0001'),
(26, 'K102373G', 'Pilih Siswa'),
(34, 'K102373G', '7097'),
(29, 'J799267X', '7006'),
(30, 'J799267X', '7058'),
(31, 'J799267X', '7017'),
(33, 'S74457R', '7003'),
(36, 'L185156E', '0002'),
(37, 'L185156E', '0003'),
(38, 'L185156E', '0004'),
(39, 'L185156E', '0005'),
(40, 'L185156E', '0006'),
(41, 'L185156E', '0007'),
(42, 'L185156E', '0008'),
(43, 'L185156E', '0009'),
(44, 'L185156E', '0010'),
(45, 'L185156E', '0011'),
(46, 'L185156E', '0012'),
(47, 'L185156E', '0013'),
(48, 'L185156E', '0014'),
(49, 'L185156E', '0015'),
(50, 'L185156E', '0016'),
(51, 'E87152P', '7021'),
(52, 'E87152P', '7022'),
(53, 'E87152P', '7023'),
(54, 'E87152P', '87635');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_matapelajaran`
--

CREATE TABLE `tbl_matapelajaran` (
  `kode_matpel` varchar(100) NOT NULL,
  `nama_matpel` varchar(100) DEFAULT NULL,
  `kode_kelas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_matapelajaran`
--

INSERT INTO `tbl_matapelajaran` (`kode_matpel`, `nama_matpel`, `kode_kelas`) VALUES
('I302363B', 'Matematika', 'E87152P'),
('X524279Y', 'IPA', 'E87152P'),
('Y65130U', 'Bahasa Indonesia', 'E87152P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `kode_nilai` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_matpel` varchar(100) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kode_kelas` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status_sms` int(11) NOT NULL DEFAULT '0',
  `salah` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`kode_nilai`, `nis`, `kode_matpel`, `nilai`, `tanggal`, `kode_kelas`, `keterangan`, `status_sms`, `salah`) VALUES
(1, '7000', 'C258373F', 80, '2019-10-19 22:25:24', 'J353181H', 'harian', 1, ''),
(2, '7001', 'C258373F', 100, '2019-10-19 22:25:24', 'J353181H', 'harian', 1, ''),
(3, '70012', 'C258373F', 0, '2019-10-25 12:51:22', 'J353181H', 'harian', 1, ''),
(4, '7000', 'C258373F', 80, '2019-10-19 22:25:24', 'J353181H', 'tugas', 1, ''),
(5, '7000', 'F333611L', 80, '2019-10-19 22:25:24', 'J353181H', 'tugas', 1, ''),
(6, '7003', 'G688945Q', 90, '2019-10-19 22:25:24', 'S74457R', 'harian', 1, ''),
(7, '7004', 'G688945Q', 80, '2019-10-24 22:27:09', 'S74457R', 'harian', 1, ''),
(8, '7003', 'H625204D', 90, '2019-10-24 22:19:18', 'S74457R', 'harian', 1, ''),
(9, '7004', 'H625204D', 0, '2019-10-19 22:25:24', 'S74457R', 'Pilih Jenis', 1, ''),
(10, '7003', 'G688945Q', 90, '2019-10-19 22:25:25', 'S74457R', 'harian', 1, ''),
(11, '7004', 'G688945Q', 89, '2019-10-19 22:25:25', 'S74457R', 'semester', 1, ''),
(12, '7003', 'G688945Q', 89, '2019-10-19 22:25:25', 'S74457R', 'harian', 1, ''),
(13, '7004', 'G688945Q', 50, '2019-10-19 22:25:25', 'S74457R', 'harian', 1, ''),
(14, '7003', 'H625204D', 50, '2019-10-19 22:25:25', 'S74457R', 'tugas', 1, ''),
(15, '7003', 'T922729Q', 67, '2019-10-24 22:10:00', 'S74457R', 'harian', 1, ''),
(16, '7004', 'H625204D', 85, '2019-10-24 22:10:00', 'S74457R', 'harian', 1, ''),
(17, '0783', 'G688945Q', 70, '2019-10-21 16:30:00', 'S74457R', 'tugas', 1, ''),
(18, '7011', 'G688945Q', 85, '2019-10-24 22:16:00', 'S74457R', 'harian', 1, ''),
(19, '7013', 'G688945Q', 65, '2019-10-21 16:32:00', 'S74457R', 'harian', 1, ''),
(20, '0783', 'H625204D', 85, '2019-10-21 16:37:02', 'S74457R', 'harian', 1, ''),
(21, '0783', 'T922729Q', 89, '2019-10-24 22:05:00', 'S74457R', 'harian', 1, ''),
(22, '0783', 'H625204D', 90, '2019-10-21 16:50:01', 'S74457R', 'tugas', 1, ''),
(23, '9000', 'G688945Q', 60, '2019-10-22 10:08:01', 'S74457R', 'harian', 1, ''),
(24, '9000', 'H625204D', 80, '2019-10-22 10:10:02', 'S74457R', 'harian', 1, ''),
(25, '9000', 'T922729Q', 85, '2019-10-24 22:03:10', 'S74457R', 'tugas', 1, ''),
(26, '0783', 'B884776T', 76, '2019-10-25 02:46:00', 'K102373G', 'harian', 1, ''),
(27, '0783', 'B884776T', 65, '2019-10-25 12:53:01', 'K102373G', 'harian', 1, ''),
(28, '9000', 'G688945Q', 32, '2019-10-31 11:31:50', 'S74457R', 'tugas', 1, ''),
(29, '7003', 'G688945Q', 54, '2019-10-31 11:31:50', 'S74457R', 'tugas', 1, ''),
(30, '0783', 'G688945Q', 54, '2019-10-26 15:53:06', 'S74457R', 'harian', 0, ''),
(31, '7033', 'B884776T', 89, '2019-10-31 11:59:01', 'K102373G', 'tugas', 1, ''),
(32, '7023', 'I302363B', 76, '2019-11-21 08:02:01', 'E87152P', 'harian', 1, ''),
(33, '7023', 'I302363B', 73, '2019-11-21 08:25:01', 'E87152P', 'harian', 1, ''),
(34, '87635', 'I302363B', 50, '2019-11-23 07:08:01', 'E87152P', 'tugas', 1, ''),
(35, '7023', 'I302363B', 60, '2019-11-24 05:49:00', 'E87152P', 'harian', 1, ''),
(36, '7021', 'I302363B', 80, '2019-11-28 00:27:15', 'E87152P', 'harian', 1, 'soal 1 dan 2'),
(37, '7023', 'I302363B', 70, '2019-11-28 00:28:01', 'E87152P', 'harian', 1, 'soal 1,2 dan 3'),
(38, '7023', 'I302363B', 90, '2019-11-29 01:18:02', 'E87152P', 'harian', 1, '1'),
(39, '7023', 'I302363B', 60, '2019-11-29 01:44:01', 'E87152P', 'tugas', 1, '1,3,4'),
(40, '7023', 'I302363B', 67, '2019-11-29 01:44:01', 'E87152P', 'mid', 1, '1'),
(41, '7023', 'Y65130U', 59, '2019-11-29 01:57:01', 'E87152P', 'harian', 1, ',No 5,8'),
(42, '7023', 'Y65130U', 70, '2019-11-29 02:01:02', 'E87152P', 'tugas', 1, '1,2'),
(43, '7023', 'X524279Y', 70, '2019-11-29 02:07:01', 'E87152P', 'mid', 1, '1,2'),
(44, '7023', 'Y65130U', 89, '2019-11-29 02:21:02', 'E87152P', 'tugas', 1, '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggaran`
--

CREATE TABLE `tbl_pelanggaran` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `isi` text,
  `poin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelanggaran`
--

INSERT INTO `tbl_pelanggaran` (`id`, `kategori`, `isi`, `poin`) VALUES
(28, '1', 'Setiap terlambat jam pertama setelah bel berbunyi', 2),
(29, '1', 'Setiap terlambat masuk kelas setelah bel istirahat berbunyi, pergantian jam', 2),
(30, '1', 'Setiap keluar ketika KBM berlangsung dan baru kembali 10-15 menit', 4),
(31, '1', 'Setiap izin keluar ketika KBM berkangsung dan tidak kembali lagi', 5),
(32, '2', 'Setiap yang tidak masuk karena izin, sakit, keperluan keluarga', 1),
(33, '2', 'Setiap tidak masuk tanpa keterangan atau alfa', 10),
(34, '2', 'Setiap tidak masuk dengan membuat keterangan palsu', 10),
(35, '2', 'Setiap membolos', 10),
(36, '2', 'Setiap tidak ikut upacara kecuali sakit ', 1),
(37, '3', 'Setiap tidak memakai seragam, tidak rapih / tidak dimasukan', 2),
(38, '3', 'Setiap tidak memakai kaos kaki, dasi', 2),
(39, '3', 'Setiap tidak memakai ikat pinggang', 2),
(40, '3', 'Setiap memakai jaket dalam kelas kecuali sakit dengan keterangan dokter', 3),
(41, '3', 'Setiap memakai celana panjang terbelah atau diinjak bagian bawah tidak dijahit', 5),
(42, '3', 'Setiap kuku panjang, rambut panjang (bagi laki-laki)', 2),
(43, '3', 'Setiap tidak mengerjakan tugas yang diberikan guru (PR, latihan dll)', 5),
(44, '3', 'Setiap memakai celana model pensil bagi laki-laki', 2),
(45, '3', 'Setiap memakai rok diatas mata kaki bagi perempuan', 2),
(46, '4', 'Setiap mengendarai kendaraan bermotor dengan sengaja menarik gas terlalu kencang', 10),
(47, '4', 'Setiap tidak melakukan piket kelas', 10),
(48, '4', 'Setiap corat-coret atau mengotori terhadap barang milik sekolah atau orang lain', 10),
(49, '4', 'Setiap membuat kegaduhan dikelas saat KBM berlangsung', 15),
(50, '4', 'Setiap berpindah-pindah duduk saat KBM berlangsung', 15),
(51, '4', 'Setiap membuat kegaduhan dilingkungan kelas / sekolah, berteriak-teriak, dibunyikan alat music sehingga menggangu kelas saat KBM berlangsung', 15),
(52, '4', 'Setiap bermusuhan (dendam dan ancaman) dengan teman didalam atau diluar sekolah', 20),
(53, '4', 'Setiap merusak barang milik sekolah, orang lain, guru', 25),
(54, '4', 'Setiap membuang sampah sembarangan dilingkungan sekolah', 10),
(55, '4', 'Setiap meloncat pagar sekolah', 25),
(56, '4', 'Setiap tidak membawa, mengerjakan, mengumpulkan tugas tepat waktu', 10),
(57, '4', 'Setiap kali tidak membawa buku point', 5),
(58, '4', 'Setiap tidak memberikan surat panggilan ke orang tua', 5),
(59, '4', 'Setiap mencuri barang milik sekolah Setiap kedapatan membawa HP, berbunyi ', 100),
(60, '4', 'Setiap kedapatan membawa HP, berbunyi sehingga menggangu KBM yang sedang berlangsung', 5),
(61, '5', 'Setiap kedapatan membawa rokok dalam lingkungan wawasan wilyata mandala', 25),
(62, '5', 'Setiap kedapatan merokok dalam lingkungan kawasan wilyata mandala (Sekolah)', 25),
(63, '6', 'Setiap kedapatan memegang, membawa nerkoba, minuman keras', 75),
(64, '6', 'Setiap mabuk disekolah karena narkoba, minuman keras', 75),
(65, '6', 'Setiap mengedarkan, menggunakan narkoba', 100),
(66, '7', 'Setiap membawa gambar, buku, majalah, stensil, kaset, disket, VCD, foto porno, video porno di HP', 50),
(67, '7', 'Setiap menjual belikan gambar, buku majalah, stensil, kaset, disket, VCD, DVD, foto porno', 50),
(68, '7', 'Setiap melihat gambar, buku, majalah, stensil, kaset, VCD, DVD, foto porno, video porno di HP', 50),
(69, '7', 'Setiap membuat gambar berbentuk porno', 50),
(70, '8', 'Setiap berpacaran dilingkungan wawasan wiyata mandala', 10),
(71, '8', 'Setiap melakukan tindakan asusila baik terhadap pacar atau teman dilingkungan wawasan wiyata mandala', 75),
(72, '9', 'Setiap membawa senjata api, senjata tajam', 50),
(73, '9', 'Setiap menjual belikan senjata api, senjata tajam', 50),
(74, '9', 'Setiap menggunakan senjata api, senjata tajam', 100),
(75, '10', 'Berkelahi, tawuran denghan sesama siswa SMK Muhammadiyah Kotaagung, tidak berdampak', 50),
(76, '10', 'Berkelahi, tawuran dengan sesama siswa SMK Muhammadiyah Kotaagung, berdampak', 75),
(77, '10', 'Menjadi propokator perkelahian', 75),
(78, '10', 'Berkelahi, tawuran dengan sekolah lain dan terlibat langsung ', 100),
(79, '11', 'Setiap mengancam dan menidentimidasi Kepala Sekolah / Guru / Pegawai', 100),
(80, '11', 'Menganiaya, mengeroyok terhadap Kepala Sekolah/ Guru / Pegawai', 100),
(81, '3', 'terlambat masuk jam pertama', 66),
(82, '5', 'MEROKOK DI KELAS', 20),
(84, '11', 'Mencuri', 75),
(85, '11', 'builying', 50),
(86, '8', 'pelecehan', 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemberitahuan`
--

CREATE TABLE `tbl_pemberitahuan` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `status_sms` int(11) NOT NULL DEFAULT '0',
  `tunggakan` varchar(100) DEFAULT '-',
  `pesan` varchar(100) NOT NULL DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pemberitahuan`
--

INSERT INTO `tbl_pemberitahuan` (`id`, `nis`, `tanggal`, `status_sms`, `tunggakan`, `pesan`) VALUES
(8, '7031', '2019-12-12', 1, '', '-'),
(7, '7033', '2019-11-30', 1, '', '-'),
(6, '9000', '2019-12-12', 1, '', '-'),
(9, '7014', '2019-10-31', 1, '', '-'),
(10, '7031', '2019-12-15', 1, '', '-'),
(11, '7023', '2020-01-25', 1, '', '-'),
(12, '87635', '2019-12-12', 1, '', '-'),
(13, '7021', '2019-09-13', 1, '2 bulan', '-'),
(14, '7023', '2019-12-12', 1, 'januari', '-'),
(15, '87635', '2019-09-24', 1, '2 bulan', '-'),
(16, '7023', '2020-01-25', 1, 'Desember', '-'),
(17, '7023', '2019-09-24', 1, '2 bulan', '-'),
(18, '87635', '2019-12-01', 1, '-', 'Hai, Kamu belum membayar spp, silahkan lakukan pemayaran'),
(19, '7022', '2019-12-02', 1, '-', 'Hai, Kamu belum membayar spp, silahkan lakukan pemayaran'),
(20, '7023', '2019-12-02', 1, '-', 'test'),
(21, 'Pilih Siswa', '2019-12-02', 0, '-', 'hai'),
(22, '7023', '2019-12-02', 1, '-', 'haii'),
(23, '7023', '2019-12-12', 1, 'januari', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `alamat_siswa` text,
  `nope_ortu` varchar(100) DEFAULT NULL,
  `nama_ortu` varchar(100) DEFAULT NULL,
  `alamat_ortu` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat_siswa`, `nope_ortu`, `nama_ortu`, `alamat_ortu`) VALUES
('7007', 'MUHAMMAD HAFIZ HAIRULLOH', 'Bandarlampung', '2008-04-20', 'Laki-laki', 'Islam', 'Jl. Sadewo Bawah', '0821657843', 'Zainal', ' Jl. Sadewo Bawah'),
('7008', 'Muhammad Kevin Juliano', 'Bandarlampung', '2008-05-01', 'Laki-laki', 'Islam', 'Jl.Sadewo Atas', '085278456969', 'Sukarni', ' Jl.Sadewo Atas'),
('7009', 'ALYA KIRANA', 'Bandarlampung', '2008-01-30', 'Perempuan', 'Islam', 'Jl.agung II no.90', '0852906789', 'Supriyono', ' Jl.Agung II no.90'),
('7010', 'Muhammad Raka Al Baihaqi', 'Bandarlampung', '2008-05-20', 'Laki-laki', 'Islam', 'Jl.Bawah Terowongan', '082284539847', 'Heru Saputro', ' Jl.Bawah Terowongan'),
('7011', 'AHMAD ALIF RAIHAN', 'Bandarlampung', '2008-02-20', 'Laki-laki', 'Islam', 'Jl.Pulau damar', '082176907698', 'Amirudin', ' Jl.Pulau damar'),
('7013', 'Al Fawwaz Naiki Chandito', 'Bandarlampung', '2008-08-30', 'Laki-laki', 'Islam', 'Jl.Pulau Semangka', '082189768765', 'Wagiyono', ' Jl.Pulau Semangka'),
('7014', 'ALICIA YUANNINDITA', 'Bandarlampung', '2008-02-02', 'Perempuan', 'Islam', 'Jl.Aster No.144', '082265789087', 'Joko', 'Jl.Aster No.144 '),
('7015', 'Anna Zahra Althafunnisa', 'Bandarlampung', '2008-04-10', 'Perempuan', 'Islam', 'Jl.pulau antasari gang kelinci No.90', '082289756123', 'elen', ' Jl.pulau antasari gang kelinci No.90'),
('7016', 'ANNISA JUTIA RAMADHANI', 'Bandarlampung', '2008-05-21', 'Perempuan', 'Islam', 'Jl. Kelud 1 No.80', '082276437164', 'Pajri', ' Jl. Kelud 1 No.80'),
('7017', 'DANU ALTANTRIAN TORA', 'Bandarlampung', '2008-05-20', 'Laki-laki', 'Islam', 'Jl.Pisang Atas', '085170908765', 'Damori', ' Jl.Pisang Atas'),
('7018', 'Dinka Kayla Juniesti', 'Bandarlampung', '2007-02-16', 'Perempuan', 'Islam', 'Jl. Bunga Angrek No.56', '085287615243', 'Putri', ' Jl. Bunga Angrek No.56'),
('7019', 'Farel Rakha Ramadhan', 'Bandarlampung', '2008-11-11', 'Laki-laki', 'Islam', 'Gang Kangguru No.20', '082165789076', 'Finka', ' Gang Kangguru No.20'),
('7020', 'Indah Hati Kurniasari', 'Bandarlampung', '2008-05-22', 'Perempuan', 'Islam', 'Jl.Agung Raya No.120', '085167549876', 'Dermawan', 'Jl.Agung Raya No.125 '),
('7021', 'Kaysan Hanif Rabbani Fikri', 'Bandarlampung', '2008-12-01', 'Laki-laki', 'Islam', 'Jl.agung V No.20', '082276539809', 'Zupri', ' Jl.Agung V no.20'),
('7022', 'Keisya Cantika Putri ', 'Bandarlampung', '2008-07-25', 'Perempuan', 'Islam', 'Jl.Kelud V no.80', '085278302090', 'Hayati', 'Jl.Kelud V no.80 '),
('7023', 'Keysha Kirania Putri', 'Bandarlampung', '2008-09-20', 'Perempuan', 'Islam', 'Jl.Galungung Raya N0.20', '082279394054', 'Andika', 'Jl.Galungung Raya N0.20 '),
('7024', 'M. Haekal Qadafi', 'Bandarlampung', '2008-09-08', 'Laki-laki', 'Islam', 'Jl.Kimaja ', '082109089080', 'Qadafi', 'Jl.Kimaja '),
('7025', 'M.Bian Rauuf Rabbani', 'Bandarlampung', '2008-07-21', 'Laki-laki', 'Islam', 'Jl.Pasar Gintung', '082156413170', 'Rabbani', 'Jl.Pasar Gintung '),
('7026', 'Muh Raya Marcho', 'Bandarlampung', '2008-01-25', 'Laki-laki', 'Islam', 'Jl. Kenangan 3', '082256784321', 'Haikal Putra', 'Jl. Kenangan 3 '),
('7027', 'Muhammad Afif Afriyanto', 'Bandarlampung', '2008-04-11', 'Laki-laki', 'Islam', 'Jl. Feteran No.67', '082256423298', 'Afiriyanto', ' Jl. Feteran No.67'),
('7028', 'Muhammad Arka Dirga ', 'Bandarlampung', '2008-05-24', 'Laki-laki', 'Islam', 'Jl. Mau Tau Aja No.90', '082254615980', 'Jamilatu', ' Jl. Mau Tau Aja No.90'),
('7029', 'MUHAMMAD BACHTIAR RAMADAN', 'Bandarlampung', '2008-04-23', 'Laki-laki', 'Islam', 'Jl.Tikung temen', '082145769864', 'Kartono', 'Jl.Tikung temen '),
('7030', 'MUHAMMAD FAYYADH FADILAH', 'Bandarlampung', '2008-06-21', 'Laki-laki', 'Islam', 'Jl. kebun jeruk', '082143569087', 'Lilis', 'Jl. kebun jeruk '),
('7031', 'AGITHA KEYSA HAFIZHA', 'Bandarlampung', '2008-03-01', 'Perempuan', 'Islam', 'Jl. Tengku Umar', '082289929054', 'Umarnudin', 'Jl. Tengku Umar '),
('7032', 'AINIYA AQILA AZMI', 'Bandarlampung', '2008-04-22', 'Perempuan', 'Islam', 'Jl.P.Mnor', '081369058939', 'Muklis', ' Jl.P.Mnor'),
('7033', 'Akila Alka Ramadhan', 'Bandarlampung', '2008-03-11', 'Laki-laki', 'Islam', 'Jl.Pulau Nangka', '082178769900', 'Lukman', 'Jl.Pulau Nangka '),
('7034', 'Aldisya Mozar', 'Bandarlampung', '2008-03-05', 'Perempuan', 'Islam', 'Jl.Pulau Kelengkeng', '082276529051', 'Imam', 'Jl.Pulau Kelengkeng '),
('7035', 'ANNISA MUTIARA SLANIK', 'Bandarlampung', '2008-04-21', 'Perempuan', 'Islam', 'Jl.Kambing no.20', '085298765432', 'Dedi', ' Jl.Kambing no.20'),
('7036', 'AZARIN ELFRIDA SHAKILA', 'Bandarlampung', '2008-02-20', 'Perempuan', 'Islam', 'Jl.Semangka no.90', '085267540987', 'Azzam', ' Jl.Semangka no.90'),
('7037', 'Balqisia Mahesvari ivan ', 'Bandarlampung', '2008-04-22', 'Perempuan', 'Islam', 'Jl.Pepaya no.80', '085267878909', 'Yudha', ' Jl.Pepaya no.80'),
('7038', 'Chandreshta Adiba Kurniawan', 'Bandarlampung', '2008-05-22', 'Perempuan', 'Islam', 'Jl.Teluk Betung Atas', '082198765456', 'Hermawan', ' Jl.Teluk Betung Atas'),
('7039', 'Charista Salma Viranty Nur', 'Bandarlampung', '2008-08-07', 'Perempuan', 'Islam', 'Jl. Agung II no.54', '085198769860', 'Vranty', 'Jl. Agung II no.54 '),
('7040', 'Fauziyah Zahra Elvina', 'Bandarlampung', '2008-03-30', 'Perempuan', 'Islam', 'Jl. Gunung Rajabasa', '082153098764', 'Rahmat', 'Jl. Gunung Rajabasa '),
('7041', 'A. Latif Siregar', 'Bandarlampung', '2008-07-19', 'Laki-laki', 'Islam', 'Jl. Merbabu Raya no.20', '082409899076', 'Saimin', ' Jl. Merbabu Raya no.20'),
('7042', 'ADELIA PUTRI SANTOSO', 'Bandarlampung', '2008-04-23', 'Perempuan', 'Islam', 'Jl.Tunggu Aja', '082178654320', 'Tuti', 'Jl.Tunggu Aja '),
('7043', 'Bunga Cantika Asmara', 'Bandarlampung', '2008-02-25', 'Perempuan', 'Islam', 'Jl.Kebahagian', '082187907656', 'Rahmadhan', ' Jl.Kebahagian'),
('7044', 'Alieffattan Ibnu Ramzi', 'Bandarlampung', '2008-05-24', 'Laki-laki', 'Islam', 'Jl.Galunggng IV no.133', '081279550811', 'Heri oktavian', ' Jl.Galunggng IV no.133'),
('7045', 'Caesar Athaillah Permana', 'Bandarlampung', '2008-04-25', 'Laki-laki', 'Islam', 'Jl.Kebon bambu', '082178659098', 'hamzi', 'Jl.Kebon bambu '),
('7046', 'FATHIR RIZQI SINATRYA PAGAR A', 'Bandarlampung', '2008-05-21', 'Laki-laki', 'Islam', 'Jl.Kesempurnaan', '082190876543', 'Sinatrya', ' Jl.Kesempurnaan'),
('7047', 'Florencia Della Rosa', 'Bandarlampung', '2008-04-21', 'Perempuan', 'Islam', 'Jl. satya Marga', '082187654389', 'Della', 'Jl. Satya Marga'),
('7048', 'Glessya Gendis Aurell', 'Bandarlampung', '2008-05-30', 'Perempuan', 'Islam', 'Jl.Pulau Bacan', '082176549087', 'Satya', 'Jl. Pulau Bacan '),
('7049', 'Kania Azzura Tsabita', 'Bandarlampung', '2008-05-28', 'Perempuan', 'Islam', 'Jl.Pulau Betina', '082176548065', 'Nurman', 'Jl. Pulau Betina'),
('7050', 'karina Octa Vinny Hidayat', 'Bandarlampung', '2008-03-29', 'Perempuan', 'Islam', 'Jl.Pisang Miring', '082164113345', 'Marga', ' Jl.Pisang Miring'),
('7051', 'Kayla Assyfa Listhon', 'Bandarlampung', '2008-05-23', 'Perempuan', 'Islam', 'Jl. Pulau Sebsi', '82143657864', 'Thoir', ' Jl. Pulau Sebsi'),
('7052', 'Keisha Nabilah Sakhi Sukarana', 'Bandarlampung', '2008-03-24', 'Perempuan', 'Islam', 'Jl. Ratu Dibalau', '82267981216', 'Putra', ' Jl. Ratu Dibalau'),
('7053', 'KHALILA ZEINA RHAMADHANI HUTARI', 'Bandarlampung', '2008-08-12', 'Perempuan', 'Islam', 'Jl. Pulau Pisang', '082156784901', 'Andika', ' Jl. Pulau Pisang'),
('7054', 'Khalista Sheila Lathifah', 'Bandarlampung', '2008-02-26', 'Perempuan', 'Islam', 'Jl. Pulau Morotai', '82289057830', 'Alam', ' Jl. Pulau Morotai'),
('7055', 'M. Rafi islami Indrawan', 'Bandarlampung', '2008-01-28', 'Laki-laki', 'Islam', 'Jl. Lada IV', '082276890332', 'Andrian', ' Jl. Lada IV'),
('7056', 'M. Velicx Hasanudin', 'Bandarlampung', '2008-04-06', 'Laki-laki', 'Islam', 'Jl. Pulau Nangka', '081378755907', 'Wijaya', ' Jl. Pulau Nangka'),
('7057', 'M.Hafidz Alfais', 'Bandarlampung', '2002-06-03', 'Laki-laki', 'Islam', 'Jl. Pulau Bangka', '081356987423', 'Dharma', ' Jl. Pulau Bangka'),
('7058', 'M.RAFFI DION PANGESTU', 'Bandarlampung', '2008-03-30', 'Laki-laki', 'Islam', 'Perumahan Korpri', '81287903442', 'Satya', ' Perumahan Korpri'),
('7059', 'MAULANA RAUL AKHTAR', 'Bandarlampung', '2008-03-03', 'Laki-laki', 'Islam', 'Perumnas Way Kandis', '081369099867', 'Jaya', ' Perumnas Way Kandis'),
('7060', 'Muhamad Mario', 'Bandarlampung', '2008-04-07', 'Laki-laki', 'Islam', 'Jl. Lada V', '081227798733', 'Prasetyo', ' Jl. Lada V'),
('7061', 'Muhammad Izzat Badurrahman', 'Bandarlampung', '2008-01-29', 'Laki-laki', 'Islam', 'Jl. Sultan Agung', '087896548723', 'Jono', ' Jl. Sultan Agung'),
('7062', 'AFIF NAMORA TANJUNG', 'Bandarlampung', '2008-06-18', 'Laki-laki', 'Islam', 'Jl. Bougenville', '087845568390', 'Rizal', ' Jl. Bougenville'),
('7063', 'Afqah Nur Khaerani', 'Bandarlampung', '0000-00-00', 'Perempuan', 'Islam', 'Jl. Edelweis', '081279903476', 'Tarjo', ' Jl. Edelweis'),
('7064', 'Alwan Milzan Karami', 'Bandarlampung', '2008-05-23', 'Laki-laki', 'Islam', 'Jl. Sabah Balau', '82267879040', 'Doni', ' Jl. Sabah Balau'),
('7065', 'Annisa Ayu Malika', 'Bandarlampung', '2008-02-04', 'Perempuan', 'Islam', 'Perumahan Taman Perasanti II', '8228984386', 'Tuhir', ' Perumahan Taman Perasanti II'),
('7066', 'Aqesyha Vional', 'Bandarlampung', '2008-03-04', 'Perempuan', 'Islam', 'Jl. Kenanga', '081289986743', 'Rahmat', ' Jl. Kenanga'),
('7067', 'ASYIA MUTIARA BRILIAN', 'Bandarlampung', '2008-08-08', 'Perempuan', 'Islam', 'Perumahan Indah Sejahtara', '081289987587', 'Sutono', ' Perumahan Indah Sejahtara'),
('7068', 'Attar fadli Mawla', 'Bandarlampung', '2008-07-27', 'Laki-laki', 'Islam', 'Perumahan Bahtera Indah', '081287789054', 'Arisandi', ' Perumahan Bahtera Indah'),
('7069', 'Attar Ryandi Akram', 'Bandarlampung', '2008-08-18', 'Laki-laki', 'Islam', 'Jl. Angsa Dua', '081278899843', 'Triyono', ' Jl. Angsa Dua'),
('707', 'Fadilah AsnaKhairu Nisa', 'BandarLampung', '2014-08-12', 'Perempuan', 'Islam', 'Agung Raya', '085279360676', 'Hamdi', ' Agung Raya'),
('7070', 'David Prasetyo', 'Bandarlampung', '2008-09-09', 'Laki-laki', 'Islam', 'Jl. Cempaka 8', '081289875674', 'Joko', ' Jl. Cempaka 8'),
('7071', 'Elfarina Alya Azzahra', 'Bandarlampung', '2008-10-01', 'Perempuan', 'Islam', 'Jl. Angkasa Raya', '81289944764', 'Ronald', ' Jl. Angkasa Raya'),
('7072', 'Fairuz Ramadhani Rahman', 'Bandarlampung', '2008-10-10', 'Laki-laki', 'Islam', 'Jl. Purnawirawan', '87877983454', 'Pusaka', ' Jl. Purnawirawan'),
('7073', 'HAQQI ANWARUS SADAT', 'Bandarlampung', '2008-11-05', 'Laki-laki', 'Islam', 'Jl. Rajabasa Raya', '081209898789', 'Andre', ' Jl. Rajabasa Raya'),
('7074', 'KEISHA FANDEMA', 'Bandarlampung', '2008-12-03', 'Perempuan', 'Islam', 'Jl. Cendana 3', '081289874789', 'Asep', ' Jl. Cendana 3'),
('7075', 'Keysa Salsabila', 'Bandarlampung', '2008-11-17', 'Perempuan', 'Islam', 'Jl. Wijaya 4', '087898567876', 'Tika', ' Jl. Wijaya 4'),
('7076', 'Lukel Kaysa Hafif', 'Bandarlampung', '2008-12-05', 'Laki-laki', 'Islam', 'jl. Jaya Abadi', '081289872346', 'Abdi', ' jl. Jaya Abadi'),
('7077', 'M. Kanza Al Balaqh', 'Bandarlampung', '2008-06-08', 'Laki-laki', 'Islam', 'Jl. Zainal Abidin', '082198765478', 'Fairli', ' Jl. Zainal Abidin'),
('7078', 'M.Iqbal Adha ', 'Bandarlampung', '2008-08-17', 'Laki-laki', 'Islam', 'Jl. Sadewo Bawah no.75', '082276543290', 'Erna', ' Jl. Sadewo Bawah no.75'),
('7079', 'MEHRUNNISA NOOR KHAIRA', 'Bandarlampung', '2008-09-17', 'Perempuan', 'Islam', 'Perumahan Prasanty', '082245768990', 'Metha', 'Perumahan Prasanty '),
('708', 'MFauzi Rahmadani', 'BandarLampung', '2014-09-11', 'Laki-laki', 'Islam', 'jl agung ', '082267896521', 'sukarno', ' jl. agung 2'),
('7080', 'Milano', 'Bandarlampung', '2008-07-18', 'Laki-laki', 'Islam', 'Jl. Gatot Subroto', '082298765478', 'Ikhsan', 'Jl. Gatot Subroto '),
('7081', 'Muhammad Afgan', 'Bandarlampung', '2008-03-17', 'Laki-laki', 'Islam', 'Jl. Way Halim Permai', '082165764134', 'Gerry', 'Jl. Way Halim Permai '),
('7082', 'ABDI TEGAR KUNIAWAN', 'Bandarlampung', '2008-05-19', 'Laki-laki', 'Islam', 'Jl. Raden Intan', '082131908070', 'Mutia', 'ABDI TEGAR KUNIAWAN\r\n '),
('7084', 'Alief Priyadi', 'Bandarlampung', '2008-03-12', 'Laki-laki', 'Islam', 'Perumahan Vila citra Blok C', '085270809065', 'Zainudin', 'Perumahan Vila citra Blok C'),
('7086', 'ANDHIKA WAHYU KUSUMA P', 'Bandarlampung', '2008-06-17', 'Laki-laki', 'Islam', 'Jl. Aster no.70', '082198765023', 'Edo', 'Jl. Aster no.70 '),
('7087', 'Ardhafa Zakaria Lathif', 'Bandarlampung', '2008-07-12', 'Laki-laki', 'Islam', 'Jl. Pulau Tangkil ', '082198674156', 'Defa', 'Jl. Pulau Tangkil  '),
('7088', 'Athalla  Dheandra Aulia', 'Bandarlampung', '2008-03-20', 'Laki-laki', 'Islam', 'Perumahan Kemiling', '085142156721', 'Destya', 'Perumahan Kemiling '),
('7089', 'ALVIN RAMADHAN', 'Bandarlampung', '2008-10-02', 'Jenis Kelamin', 'Islam', 'Jl.Berbi', '0821786743', 'wardi', ' Jl.Berbi'),
('7090', 'Aurel Fidela Lucretia', 'Bandarlampung', '2008-04-11', 'Perempuan', 'Islam', 'Jl. Segita', '082187654390', 'Ardiman', 'Jl. Segita '),
('7091', 'AZARIN ELVINA ALESHA', 'Bandarlampung', '2008-05-24', 'Perempuan', 'Islam', 'Jl. Kopi no.20', '082123334561', 'Dewa', 'Jl. Kopi no. 20 '),
('7092', 'Bilal Pratama', 'Bandarlampung', '2008-05-30', 'Laki-laki', 'Islam', 'Jl. Cengkeh V', '0852607054', 'Bahari', 'Jl. Cengkeh V '),
('7093', 'CHESYA AZZAH ZHAFIRAH', 'Bandarlampung', '2008-06-13', 'Jenis Kelamin', 'Islam', 'Jl. Jati Raya no.22', '082189907655', 'Paksi', 'Jl. Jati Raya no.22 '),
('7094', 'CINTA ANDINI PUTRI BAHARI', 'Bandarlampung', '2008-07-01', 'Perempuan', 'Islam', 'Jl. Beringin Raya', '082189909899', 'Andri', 'Jl. Beringin Raya '),
('7095', 'Fahri Fatah', 'Bandarlampung', '2008-07-25', 'Laki-laki', 'Islam', 'Jl. Merapi I', '082190976543', 'Rasyid', 'Jl. Merapi I '),
('7096', 'Iis Nur Komaria Pratiwi', 'Bandarlampung', '2008-08-12', 'Perempuan', 'Islam', 'Jl. Satu Nusa', '082111345167', 'Pratiwi', 'Jl. Satu Nusa '),
('7097', 'Irsyad Fadhil Rasyid', 'Bandarlampung', '2008-02-17', 'Laki-laki', 'Islam', 'Jl. Budi Utomo', '082198765821', 'Elza', 'Jl. Budi Utomo '),
('7098', 'Joya Nara Biizzati Haida', 'Bandarlampung', '2008-06-19', 'Perempuan', 'Islam', 'Jl. Pulau Singkep', '082187627236', 'Jonathan', 'Jl. Pulau Singkep '),
('7099', 'Kannat Anannha', 'Bandarlampung', '2008-05-12', 'Laki-laki', 'Islam', 'Jl. Simpang 3', '082261812901', 'Fernando', 'Jl. Simpang 3 '),
('7222', 'FADILLA RHEDITA PUTRI', 'Bandarlampung', '2008-07-02', 'Perempuan', 'Islam', 'Jl. Aster no.90', '0821878767', 'Defa', ' Jl. Aster no.90'),
('7232', 'Diandra Kania Putri', 'Bandarlampung', '2008-03-22', 'Perempuan', 'Islam', 'Jl.Permata Biru', '0821789067', 'Fikri', ' Jl,Permata Biru'),
('7551', 'Ahmad Irfan Ardyansah', 'Bandarlampung', '2007-02-16', 'Laki-laki', 'Islam', 'Jati Mulyo', '08127201059', 'Abdul wahap', ' Jati Mulyo'),
('7553', 'Agung Arief Hidayat', 'Bandarlampung', '2007-07-11', 'Laki-laki', 'Islam', 'Jl. Perum Kopri', '0822787890', 'Ir.Agus Purwoko', ' Jl,Perum Kopri'),
('7566', 'Cassie Gisella', 'Bandarlampung', '2008-05-20', 'Perempuan', 'Islam', 'Jl.Kayu Manis', '0822763020', 'Hamdi', ' Jl.Kayu Manis'),
('7666', 'Azizah Agni Khairuikhsan', 'Bandarlampung', '2008-03-23', 'Laki-laki', 'Islam', 'Jl.Kopi Raya', '0821899091', 'Nasrudin', ' Jl.Kopi Raya'),
('7890', 'Decha Nasyifa Kennedi', 'Bandarlampung', '2008-09-01', 'Perempuan', 'Islam', 'Jl.Bambangan', '0821754920', 'Fauzi', ' Jl.Bambangan'),
('87635', 'Muhammad Rizky Andika', 'BandarLampung', '2014-07-25', 'Laki-laki', 'Islam', 'Jl Agung Raya', '082265728291', 'Miss Saniati', ' Jl. Agung Raya'),
('9000', 'Fadilah Asna', 'Bandarlampung', '2007-07-29', 'Perempuan', 'Islam', 'Jl. Agung Raya', '082175057342', 'Hamdi', ' Jl. Agung Raya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa_melanggar`
--

CREATE TABLE `tbl_siswa_melanggar` (
  `id` int(11) NOT NULL,
  `nis` varchar(100) DEFAULT NULL,
  `kode_pelanggaran` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa_melanggar`
--

INSERT INTO `tbl_siswa_melanggar` (`id`, `nis`, `kode_pelanggaran`, `tanggal`, `kelas`, `jurusan`, `status`) VALUES
(48, '7007', 0, '2019-07-25', 'X', 'TKR', 1),
(51, '7019', 41, '2019-11-20', 'XI', 'TKJ', 1),
(53, '7008', 28, '2019-12-16', 'XII', 'TKJ', 0),
(56, '7026', 38, '2019-08-08', 'XII', 'TKJ', 0),
(60, '7009', 29, '2019-09-25', 'XII', 'TKJ', 0),
(61, '7018', 77, '2019-12-11', 'XI', 'TKJ', 0),
(62, '7080', 59, '2019-11-26', 'XII', 'TGB', 1),
(65, '7021', 29, '2019-02-14', 'XII', 'TKJ', 1),
(67, '7038', 29, '2019-03-19', 'XII', 'TKJ', 1),
(68, '7008', 29, '2019-04-17', 'XI, TAV', '', 1),
(69, '7070', 84, '2019-04-17', 'X TKJ1', '', 0),
(70, 'Pilih Siswa', 41, '2019-04-03', 'X Multimedia 2', '', 1),
(71, '7018', 36, '2019-04-03', 'X Multimedia 2', '', 1),
(73, '7008', 59, '2019-04-26', 'X Multimedia 2', '', 1),
(74, '7009', 45, '2019-12-17', 'X Multimedia 2', '', 1),
(75, '7009', 35, '2019-12-09', 'X Multimedia 2', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sms`
--

CREATE TABLE `tbl_sms` (
  `kode_sms` varchar(100) NOT NULL,
  `jenis` varchar(100) DEFAULT 'keluar',
  `isi` text,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nip` varchar(100) DEFAULT NULL,
  `nis` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_absen`
--
ALTER TABLE `tbl_absen`
  ADD PRIMARY KEY (`kode_absen`);

--
-- Indeks untuk tabel `tbl_absen_chace`
--
ALTER TABLE `tbl_absen_chace`
  ADD PRIMARY KEY (`id_chace`);

--
-- Indeks untuk tabel `tbl_ajukan`
--
ALTER TABLE `tbl_ajukan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_chace_absen`
--
ALTER TABLE `tbl_chace_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_chace_beritahu`
--
ALTER TABLE `tbl_chace_beritahu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_chace_nilai`
--
ALTER TABLE `tbl_chace_nilai`
  ADD PRIMARY KEY (`id_chace`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kode_kelas`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `tbl_kelas_anggota`
--
ALTER TABLE `tbl_kelas_anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indeks untuk tabel `tbl_matapelajaran`
--
ALTER TABLE `tbl_matapelajaran`
  ADD PRIMARY KEY (`kode_matpel`),
  ADD KEY `kode_kelas` (`kode_kelas`);

--
-- Indeks untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`kode_nilai`);

--
-- Indeks untuk tabel `tbl_pelanggaran`
--
ALTER TABLE `tbl_pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pemberitahuan`
--
ALTER TABLE `tbl_pemberitahuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tbl_siswa_melanggar`
--
ALTER TABLE `tbl_siswa_melanggar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sms`
--
ALTER TABLE `tbl_sms`
  ADD PRIMARY KEY (`kode_sms`),
  ADD KEY `nip` (`nip`),
  ADD KEY `nis` (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_absen`
--
ALTER TABLE `tbl_absen`
  MODIFY `kode_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `tbl_absen_chace`
--
ALTER TABLE `tbl_absen_chace`
  MODIFY `id_chace` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_ajukan`
--
ALTER TABLE `tbl_ajukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `tbl_chace_absen`
--
ALTER TABLE `tbl_chace_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT untuk tabel `tbl_chace_beritahu`
--
ALTER TABLE `tbl_chace_beritahu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `tbl_chace_nilai`
--
ALTER TABLE `tbl_chace_nilai`
  MODIFY `id_chace` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas_anggota`
--
ALTER TABLE `tbl_kelas_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `kode_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggaran`
--
ALTER TABLE `tbl_pelanggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `tbl_pemberitahuan`
--
ALTER TABLE `tbl_pemberitahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa_melanggar`
--
ALTER TABLE `tbl_siswa_melanggar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD CONSTRAINT `tbl_kelas_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tbl_guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_matapelajaran`
--
ALTER TABLE `tbl_matapelajaran`
  ADD CONSTRAINT `tbl_matapelajaran_ibfk_2` FOREIGN KEY (`kode_kelas`) REFERENCES `tbl_kelas` (`kode_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_sms`
--
ALTER TABLE `tbl_sms`
  ADD CONSTRAINT `tbl_sms_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tbl_guru` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_sms_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `tbl_siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
