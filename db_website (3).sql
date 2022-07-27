-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2022 pada 05.29
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_website`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pekerjaan`
--

CREATE TABLE `jenis_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `pekerjaan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_pekerjaan`
--

INSERT INTO `jenis_pekerjaan` (`id_pekerjaan`, `pekerjaan`) VALUES
(21, 'belum/tidak bekerja'),
(22, 'aparatur pejabat negara'),
(23, 'tenaga pengajar'),
(24, 'wiraswasta'),
(25, 'pertanian/peternakan'),
(26, 'nelayan'),
(27, 'agama dan kepercayaan'),
(28, 'pelajar/mahasiswa'),
(29, 'tenaga kesehatan'),
(30, 'pensiunan'),
(31, 'lainnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `organisasi_pemuda`
--

CREATE TABLE `organisasi_pemuda` (
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_organisasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `organisasi_pemuda`
--

INSERT INTO `organisasi_pemuda` (`nama`, `keterangan`, `id_organisasi`) VALUES
('Qorina Zaer', 'addfgg', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutan`
--

CREATE TABLE `sambutan` (
  `id_sambutan` int(11) NOT NULL,
  `foto` varchar(35) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `images` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`images`, `deskripsi`, `id_berita`, `judul`) VALUES
('karang taruna3.jpg', 'Pada Jumat (28 Januari 2022) lalu, Benny Dwifa Yuswir selaku Bupati Kabupaten Sijunjung melakukan launching rangkaian kegiatan peringatan hari jadi Kabupaten Sijunjung ke-73. Acara launching ditandai dengan pelepasan balon oleh Bupati dan Wakil Bupati Kabupaten Sijunjung. Sejumlah rangkaian kegiatan yang dilaunching adalah Festival Lansek Manih, pujasera, dan bazar UMKM.', 3, 'HAHAH'),
('', 'huhu', 6, 'Berita Tiga'),
('CAK BENEN SISAWAH.JPG', 'sda', 8, 'sdssd'),
('IMG-20201008-WA0018.jpg', 'pemuda adalah orang', 10, 'Pemilihan Pemuda Pelopor'),
('Atlit voli PBVSI Kab Sijunjung.jpg', 'voliii', 11, 'atlit'),
('brosurPP.jpg', 'wqeerwtw', 12, 'DKJAJDA'),
('IMG-20201008-WA0018.jpg', 'wwer', 13, 'wrrt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_event`
--

CREATE TABLE `tb_event` (
  `id` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `pekerjaan` varchar(35) NOT NULL,
  `jenis_kelamin` enum('perempuan','laki-laki') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_event`
--

INSERT INTO `tb_event` (`id`, `nama`, `alamat`, `no_hp`, `ttl`, `pekerjaan`, `jenis_kelamin`) VALUES
(2, 'QORINA ZAER', 'jorong tanjung harapan nagari suka-suka', '082251633695', 'siunjung', 'kan gali', 'perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `images` varchar(35) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `Deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `images`, `judul`, `Deskripsi`) VALUES
(4, 'duta yanlik.jpg', '0', ''),
(5, 'IMG-20201008-WA0018.jpg', 'HAHAH', ''),
(7, 'CAK BENEN SISAWAH.JPG', '', ''),
(8, 'CAK BENEN SISAWAH.JPG', '', ''),
(9, 'duta yanlik.jpg', 'Upacara 17 Agustus di â€œRanah Lansek Manihâ€ dal', ''),
(10, 'brosurPP.jpg', 'brousr', ''),
(11, 'hosting gratis.png', 'hosting', ''),
(12, 'LOGO PEMUDA.png', 'logo Kemenpora', ''),
(13, 'IMG-20201008-WA0002.jpg', 'Yagnfgg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenjang_pendidikan`
--

CREATE TABLE `tb_jenjang_pendidikan` (
  `id` int(3) NOT NULL,
  `pendidikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenjang_pendidikan`
--

INSERT INTO `tb_jenjang_pendidikan` (`id`, `pendidikan`) VALUES
(11, 'tidak/belum sekolah'),
(12, 'belum tamat SD/sederajat'),
(13, 'tamat SD/sederajat'),
(14, 'SLTP/sederajat'),
(15, 'SLTA/sederajat'),
(16, 'diploma I/II'),
(17, 'diploma III'),
(18, 'diploma IV/Strata I'),
(19, 'strata II'),
(20, 'Strata III');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id` int(2) NOT NULL,
  `nama_kecamatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id`, `nama_kecamatan`) VALUES
(1, 'Tanjung Gadang'),
(2, 'Sijunjung'),
(3, 'IV Nagari'),
(4, 'Kamang Baru'),
(5, 'Lubuk Tarok'),
(6, 'Koto VII'),
(7, 'Sumpur Kudus'),
(8, 'Kupitan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan_pemuda`
--

CREATE TABLE `tb_kegiatan_pemuda` (
  `id_kegiatan` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `prestasi` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kegiatan_pemuda`
--

INSERT INTO `tb_kegiatan_pemuda` (`id_kegiatan`, `nama`, `prestasi`, `alamat`) VALUES
(3, 'qweq', 'jalan santai', 'Sanggar Puti Junjung, Jln Belakang SMAN 1 Sijunjun'),
(4, 'hakqoiio', 'JAPw', 'ewq'),
(5, 'Alex Rachmat', '', 'kandang baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(35) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `user_name`, `username`, `password`) VALUES
(1, '', 'admin', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nagari`
--

CREATE TABLE `tb_nagari` (
  `id` int(3) NOT NULL,
  `id_kecamatan` int(4) NOT NULL,
  `nama_nagari` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nagari`
--

INSERT INTO `tb_nagari` (`id`, `id_kecamatan`, `nama_nagari`) VALUES
(1, 1, 'TIMBULUN'),
(2, 1, 'TANJUNG GADANG'),
(3, 1, 'TARATAK BARU'),
(4, 1, 'PULASAN'),
(5, 1, 'LANGKI'),
(6, 1, 'SIBAKUR'),
(7, 1, 'TANJUNG LOLO'),
(8, 1, 'TARATAK BARU UTARA'),
(9, 1, 'SINYAMU'),
(10, 2, 'MUARO'),
(11, 2, 'KANDANG BARU'),
(12, 2, 'SILOKEK'),
(13, 2, 'PEMATANG PANJANG'),
(14, 2, 'SOLOK AMBAH'),
(15, 2, 'PARU'),
(16, 2, 'DURIAN GADANG'),
(17, 2, 'AIE ANGEK'),
(18, 2, 'SIJUNJUNG'),
(19, 3, 'PALANGKI'),
(20, 3, 'KOTO BARU'),
(21, 3, 'MUARO BODI'),
(22, 3, 'MUNDAM SATI'),
(23, 3, 'KOTO TUO'),
(24, 4, 'SUNGAI LANSEK'),
(25, 4, 'MUARO TAKUANG'),
(26, 4, 'AIA AMO'),
(27, 4, 'SUNGAI BATUANG\r\n'),
(28, 4, 'KAMANG'),
(29, 4, 'SUNGAI BATUANG'),
(30, 4, 'KUNANGAN PARIK RANTANG'),
(31, 4, 'TANJUNG KALING'),
(32, 4, 'PADANG TAROK'),
(33, 4, 'SIAUR'),
(34, 4, 'LUBUK TARANTANG'),
(35, 4, 'MALORO'),
(36, 5, 'LUBUK TAROK'),
(37, 5, 'LALAN'),
(38, 5, 'BULUAH KASOK'),
(39, 5, 'KAMPUNG DALAM'),
(40, 5, 'SILONGO'),
(41, 5, 'LATANG'),
(42, 6, 'LIMO KOTO'),
(43, 6, 'PALALUAR'),
(44, 6, 'GUGUK'),
(45, 6, 'PADANG LAWEH'),
(46, 6, 'TANJUNG'),
(47, 6, 'BUKIT BUAL'),
(48, 7, 'SILANTAI'),
(49, 7, 'SISAWAH'),
(50, 7, 'UNGGAN'),
(51, 7, 'TANJUNG BONAI AUR'),
(52, 7, 'SUMPUR KUDUS'),
(53, 7, 'TAMPARUNGO'),
(54, 7, 'KUMANIS'),
(55, 7, 'MANGANTI'),
(56, 7, 'SUMPUR KUDUS SELATAN'),
(57, 7, 'TANJUNG LABUH'),
(58, 7, 'TANJUNG BONAI AUR SELATAN'),
(59, 8, 'BATU MANJULUR'),
(60, 8, 'PAMUATAN'),
(61, 8, 'PADANG SIBUSUK'),
(62, 8, 'KAMPUNG BARU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paski`
--

CREATE TABLE `tb_paski` (
  `id_paski` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jenis_kelamin` enum('perempuan','laki-laki') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_paski`
--

INSERT INTO `tb_paski` (`id_paski`, `nama`, `ttl`, `alamat`, `asal_sekolah`, `tinggi_badan`, `berat_badan`, `no_hp`, `jenis_kelamin`) VALUES
(2, '2rtrty', 'eeqr', 'jorong tanjung harapan nagari suka-suka', 'smk', 124, 20, '082251633695', 'perempuan'),
(4, '', '', '', '', 0, 0, '', ''),
(5, '', '', '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelopor`
--

CREATE TABLE `tb_pelopor` (
  `images` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `suku_bangsa` varchar(15) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `id_pelopor` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemuda`
--

CREATE TABLE `tb_pemuda` (
  `id_prestasi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `cabang_lomba` varchar(50) NOT NULL,
  `prestasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemuda`
--

INSERT INTO `tb_pemuda` (`id_prestasi`, `nama`, `alamat`, `cabang_lomba`, `prestasi`) VALUES
(11, 'Fadli Randa', 'jorong koran nagari Pematang Panjang', 'Lomba Pidato', 'Juara 2 lomba pidato tingkat provinsi'),
(12, 'Dwi Warman Faris', 'jorong koran nagari Pematang Panjang', 'Lomba Pidato', 'Juara 2 lomba pidato tingkat provinsi'),
(13, 'Umar', 'qeq', 'Lomba Pidato', ''),
(14, 'Yudi Paulan', 'Pale Nagari pematang Panjang', 'Volly Ball', 'Pemain Terbaik'),
(15, 'Yuda Alva Fernanda', 'Jorong Koran Nagari Pematang Panjang', 'Duta Pariwisata Indonesia', 'Duta Duta Pariwisata Indonesia Kabupaten Sijunjung'),
(16, 'Randi Kurniadi', 'Jorong Ranah Tanjung Bungo Nagari Kandang Baru', 'MTQ Tingkat Kecamatan', ''),
(17, 'Rohimu Yardo', 'Jorong Samiak Nagari Kandang Baru', 'MTQ', ''),
(18, 'Riko Rivaldo', 'Kampung Berlian Nagari Sijunjung ', 'Lomba Selawat Dulang Tingkat Kabupaten Sijunjung', 'Juara 1 Festival Selawat Dulang Tingkat Kabupaten '),
(19, 'Yola Aksandra', 'Kampung Berlian Nagari Sijunjung ', 'Pemilihan Pemuda Pelopor', 'Pemuda Pelopor Nasional'),
(20, 'Rahman Habibillah', 'Nagari Muaro', 'Tilawah Qur\'an', 'Juara 1 Tilawah Qur\'an Cabang Remaja'),
(21, 'Azizah Hafizah', 'Nagari Muaro', 'Tilawah Qur\'an Cabang Remaja', 'Juara 1 Tilawah Qur\'an Cabang Remaja'),
(22, 'Jang Karno', 'Nagari Muaro', 'Tilawah Qur\'an', 'Juara 1 Tilawah Qur\'an Cabang Dewasa'),
(23, 'Men Yulista', 'Nagari Muaro', 'Tilawatil Qur\'an', 'Juara 2 Tilawah Qur\'an Cabang Dewasa'),
(24, 'Bagas Prasankra', 'Nagari Muaro', 'Tartil Qur\'an Tingkat Kecamatan', 'Juara 1 Tartil Qur\'an Cabang Menengah'),
(25, 'Fatimah Zahra', 'Nagari Muaro', 'Syarhil Qur\'an Tingkat Kecamatan', 'Juara 1 Syarhil Qur\'an Putri'),
(26, 'Putri Yurda Ningsih', 'Nagari Muaro', 'Syarhil Qur\'an Tingkat Kecamatan', 'Juara 1 Syarhil Qur\'an Putri'),
(27, 'Rozaq Albuqari', 'Nagari Muaro', 'Lomba Khutbah Jumat Tingkat Kecamatan', 'Juara 3 Lomba Khutbah Jumat tingkat Kecamatan'),
(28, 'Irfan Kurniawan', 'Kandang Baru', 'Programming', 'Juara 1 Hackathon'),
(29, 'QORINA ZAER', 'KANDANG BARU', 'Programming', 'Juara 1'),
(30, 'QORINA ZAER', 'KANDANG BARU', 'Programming', 'Juara 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemuda_pekerjaan`
--

CREATE TABLE `tb_pemuda_pekerjaan` (
  `id` int(6) NOT NULL,
  `id_kecamatan` int(2) NOT NULL,
  `id_nagari` int(3) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemuda_pekerjaan`
--

INSERT INTO `tb_pemuda_pekerjaan` (`id`, `id_kecamatan`, `id_nagari`, `id_pekerjaan`, `Jumlah`) VALUES
(1, 1, 1, 1, 173),
(2, 1, 2, 1, 402),
(3, 1, 3, 1, 105),
(4, 1, 4, 1, 236),
(5, 1, 5, 1, 87),
(6, 1, 6, 1, 136),
(7, 1, 7, 1, 299),
(8, 1, 8, 1, 90),
(9, 1, 9, 1, 68),
(10, 2, 10, 1, 525),
(11, 2, 11, 1, 137),
(12, 2, 12, 1, 64),
(13, 2, 13, 1, 364),
(14, 2, 14, 1, 201),
(15, 2, 15, 1, 143),
(16, 2, 16, 1, 178),
(17, 2, 17, 1, 272),
(18, 2, 18, 1, 481),
(19, 3, 19, 1, 108),
(20, 3, 20, 1, 173),
(21, 3, 21, 1, 186),
(22, 3, 22, 1, 144),
(23, 3, 23, 1, 100),
(24, 4, 24, 1, 268),
(25, 4, 25, 1, 628),
(26, 4, 26, 1, 258),
(27, 4, 27, 1, 176),
(28, 4, 28, 1, 129),
(29, 4, 29, 1, 437),
(30, 4, 30, 1, 101),
(31, 4, 31, 1, 112),
(32, 4, 32, 1, 57),
(33, 4, 33, 1, 60),
(34, 4, 34, 1, 108),
(35, 5, 35, 1, 311),
(36, 5, 36, 1, 155),
(37, 5, 37, 1, 134),
(38, 5, 38, 1, 122),
(39, 5, 39, 1, 47),
(40, 5, 40, 1, 39),
(41, 6, 41, 1, 648),
(42, 6, 42, 1, 221),
(43, 6, 43, 1, 153),
(44, 6, 44, 1, 634),
(45, 6, 45, 1, 384),
(46, 6, 46, 1, 109),
(47, 7, 47, 1, 121),
(48, 7, 48, 1, 214),
(49, 7, 49, 1, 216),
(50, 7, 50, 1, 155),
(51, 7, 51, 1, 284),
(52, 7, 52, 1, 94),
(53, 7, 53, 1, 111),
(54, 7, 54, 1, 91),
(55, 7, 55, 1, 133),
(56, 7, 56, 1, 58),
(57, 7, 57, 1, 125),
(58, 8, 58, 1, 102),
(59, 8, 59, 1, 48),
(60, 8, 60, 1, 291),
(61, 8, 61, 1, 55),
(62, 1, 1, 2, 0),
(63, 1, 2, 2, 11),
(64, 1, 3, 2, 5),
(65, 1, 4, 2, 0),
(66, 1, 5, 2, 0),
(67, 1, 6, 2, 1),
(68, 1, 7, 2, 2),
(69, 1, 8, 2, 0),
(70, 1, 9, 2, 0),
(71, 2, 10, 2, 58),
(72, 2, 11, 2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemuda_pendidikan`
--

CREATE TABLE `tb_pemuda_pendidikan` (
  `id` int(11) NOT NULL,
  `id_nagari` int(3) NOT NULL,
  `id_pendidikan` int(3) NOT NULL,
  `jumlah` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemuda_pendidikan`
--

INSERT INTO `tb_pemuda_pendidikan` (`id`, `id_nagari`, `id_pendidikan`, `jumlah`) VALUES
(4, 1, 1, 65),
(5, 2, 1, 183),
(6, 3, 1, 37),
(7, 4, 1, 96),
(8, 5, 1, 40),
(9, 6, 1, 60),
(10, 7, 1, 116),
(11, 8, 1, 37),
(12, 9, 1, 23),
(13, 9, 1, 273),
(14, 11, 1, 70),
(15, 12, 1, 49),
(16, 13, 1, 182),
(17, 14, 1, 89),
(18, 15, 1, 89),
(19, 16, 1, 67),
(20, 17, 1, 158),
(21, 18, 1, 255),
(22, 19, 1, 78),
(23, 20, 1, 86),
(24, 21, 1, 90),
(25, 22, 1, 69),
(26, 23, 1, 45),
(27, 24, 1, 129),
(28, 25, 1, 330),
(29, 26, 1, 115),
(30, 27, 1, 77),
(31, 28, 1, 97),
(32, 29, 1, 274),
(33, 30, 1, 57),
(34, 31, 1, 33),
(35, 32, 1, 20),
(36, 33, 1, 37),
(37, 34, 1, 57),
(38, 35, 1, 229),
(39, 36, 1, 93),
(40, 37, 1, 90),
(41, 38, 1, 46),
(42, 39, 1, 29),
(43, 40, 1, 24),
(44, 41, 1, 282),
(45, 42, 1, 115),
(46, 43, 1, 68),
(47, 44, 1, 361),
(48, 45, 1, 186),
(49, 46, 1, 64),
(50, 47, 1, 70),
(51, 48, 1, 77),
(52, 49, 1, 99),
(53, 50, 1, 74),
(54, 51, 1, 154),
(55, 52, 1, 46),
(56, 53, 1, 55),
(57, 54, 1, 60),
(58, 55, 1, 75),
(59, 56, 1, 37),
(60, 57, 1, 46),
(61, 58, 1, 49),
(62, 59, 1, 27),
(63, 60, 1, 175),
(64, 61, 1, 28),
(65, 1, 2, 257),
(66, 2, 2, 679),
(67, 3, 2, 99),
(68, 4, 2, 309),
(69, 5, 1, 215),
(70, 6, 2, 167),
(71, 7, 2, 446),
(72, 8, 2, 129),
(73, 9, 2, 97),
(74, 10, 2, 857),
(75, 11, 2, 187),
(76, 12, 2, 143),
(77, 13, 2, 515),
(78, 14, 2, 337),
(79, 15, 2, 193),
(80, 16, 2, 238),
(81, 17, 2, 297),
(82, 18, 2, 831),
(83, 19, 2, 362),
(84, 20, 2, 324),
(85, 21, 2, 316),
(86, 22, 2, 246),
(87, 23, 2, 175),
(88, 24, 2, 554),
(89, 25, 2, 1),
(90, 26, 2, 516),
(91, 27, 2, 257),
(92, 28, 2, 239),
(93, 29, 2, 923),
(94, 30, 2, 199),
(95, 31, 2, 176),
(96, 32, 2, 121),
(97, 33, 2, 162),
(98, 34, 2, 210),
(99, 35, 2, 730),
(100, 36, 2, 305),
(101, 37, 2, 259),
(102, 38, 2, 140),
(103, 39, 2, 109),
(104, 40, 2, 111),
(105, 41, 2, 932),
(106, 42, 2, 303),
(107, 43, 2, 186),
(108, 44, 2, 1),
(109, 45, 2, 568),
(110, 46, 2, 164),
(111, 47, 2, 147),
(112, 48, 2, 301),
(113, 49, 2, 241),
(114, 50, 2, 225),
(115, 51, 2, 253),
(116, 52, 2, 162),
(117, 53, 2, 192),
(118, 54, 2, 148),
(119, 55, 2, 122),
(120, 56, 2, 84),
(121, 57, 2, 180),
(122, 58, 2, 180),
(123, 59, 2, 118),
(124, 60, 2, 660),
(125, 61, 2, 117),
(126, 1, 3, 218),
(127, 2, 3, 425),
(128, 3, 3, 75),
(129, 4, 3, 153),
(130, 5, 3, 110),
(131, 7, 3, 272),
(132, 8, 3, 96),
(133, 9, 3, 67),
(134, 10, 3, 547),
(135, 11, 3, 113),
(136, 12, 3, 92),
(137, 13, 3, 370),
(138, 14, 3, 192),
(139, 15, 3, 121),
(140, 16, 3, 193),
(141, 17, 3, 215),
(142, 18, 3, 485);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemuda_umum`
--

CREATE TABLE `tb_pemuda_umum` (
  `id` int(11) NOT NULL,
  `id_nagari` int(3) NOT NULL,
  `laki_laki` int(5) NOT NULL,
  `Perempuan` int(5) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemuda_umum`
--

INSERT INTO `tb_pemuda_umum` (`id`, `id_nagari`, `laki_laki`, `Perempuan`, `jumlah`) VALUES
(1, 1, 416, 341, 757),
(2, 1, 992, 966, 1958),
(3, 1, 183, 177, 360),
(4, 1, 507, 488, 995),
(5, 1, 294, 285, 579),
(6, 1, 243, 250, 493),
(7, 1, 650, 670, 1320),
(8, 1, 210, 208, 418),
(9, 1, 148, 149, 297),
(10, 2, 1723, 1573, 3296),
(11, 2, 307, 297, 604),
(12, 2, 187, 193, 380),
(13, 2, 987, 854, 1841),
(14, 2, 458, 458, 916),
(15, 2, 292, 284, 576),
(16, 2, 384, 381, 765),
(17, 2, 484, 462, 946),
(18, 2, 1331, 1267, 2598),
(19, 3, 529, 516, 1045),
(20, 3, 456, 391, 847),
(21, 3, 482, 421, 903),
(22, 3, 422, 372, 794),
(23, 3, 265, 240, 505),
(24, 4, 776, 778, 1554),
(25, 4, 1728, 1651, 3379),
(26, 4, 843, 797, 1640),
(27, 4, 400, 397, 797),
(28, 4, 338, 342, 680),
(29, 4, 1443, 1407, 2850),
(30, 4, 262, 270, 532),
(31, 4, 256, 311, 567),
(32, 4, 210, 216, 426),
(33, 4, 228, 225, 453),
(34, 4, 297, 269, 566),
(35, 5, 1059, 979, 2038),
(36, 5, 465, 417, 882),
(37, 5, 365, 389, 754),
(38, 5, 248, 238, 486),
(39, 5, 143, 143, 286),
(40, 5, 144, 118, 262),
(41, 6, 1475, 1470, 2945),
(42, 6, 525, 503, 1028),
(43, 6, 338, 285, 623),
(44, 6, 1626, 1531, 3157),
(45, 6, 876, 814, 1690),
(46, 6, 265, 230, 495),
(47, 7, 257, 248, 505),
(48, 7, 499, 432, 931),
(49, 7, 420, 399, 819),
(50, 7, 440, 384, 824),
(51, 7, 500, 534, 1034),
(52, 7, 274, 249, 523),
(53, 7, 328, 287, 615),
(54, 7, 202, 214, 416),
(55, 7, 263, 229, 492),
(56, 7, 139, 157, 296),
(57, 7, 307, 256, 563),
(58, 8, 254, 245, 499),
(59, 8, 199, 177, 376),
(60, 8, 1066, 939, 2005),
(61, 8, 257, 234, 491);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_taruna`
--

CREATE TABLE `tb_taruna` (
  `images` varchar(50) NOT NULL,
  `narasi` varchar(500) NOT NULL,
  `judul` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_taruna`
--

INSERT INTO `tb_taruna` (`images`, `narasi`, `judul`) VALUES
('', '', ''),
('Atlit voli PBVSI Kab Sijunjung.jpg', 'qwerty', 'asagf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visi`
--

CREATE TABLE `tb_visi` (
  `id_visi` int(11) NOT NULL,
  `visi` varchar(500) NOT NULL,
  `misi` varchar(500) NOT NULL,
  `images` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_visi`
--

INSERT INTO `tb_visi` (`id_visi`, `visi`, `misi`, `images`) VALUES
(1, '', 'm,l,', 'CAK BENEN SISAWAH.JPG'),
(2, 'nm,k,', 'm,l,', 'uda.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_pekerjaan`
--
ALTER TABLE `jenis_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `organisasi_pemuda`
--
ALTER TABLE `organisasi_pemuda`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indeks untuk tabel `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tb_jenjang_pendidikan`
--
ALTER TABLE `tb_jenjang_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kegiatan_pemuda`
--
ALTER TABLE `tb_kegiatan_pemuda`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_nagari`
--
ALTER TABLE `tb_nagari`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_paski`
--
ALTER TABLE `tb_paski`
  ADD PRIMARY KEY (`id_paski`);

--
-- Indeks untuk tabel `tb_pelopor`
--
ALTER TABLE `tb_pelopor`
  ADD PRIMARY KEY (`id_pelopor`);

--
-- Indeks untuk tabel `tb_pemuda`
--
ALTER TABLE `tb_pemuda`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `tb_pemuda_pekerjaan`
--
ALTER TABLE `tb_pemuda_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemuda_pendidikan`
--
ALTER TABLE `tb_pemuda_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemuda_umum`
--
ALTER TABLE `tb_pemuda_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_taruna`
--
ALTER TABLE `tb_taruna`
  ADD PRIMARY KEY (`images`);

--
-- Indeks untuk tabel `tb_visi`
--
ALTER TABLE `tb_visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_pekerjaan`
--
ALTER TABLE `jenis_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `organisasi_pemuda`
--
ALTER TABLE `organisasi_pemuda`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_jenjang_pendidikan`
--
ALTER TABLE `tb_jenjang_pendidikan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan_pemuda`
--
ALTER TABLE `tb_kegiatan_pemuda`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_nagari`
--
ALTER TABLE `tb_nagari`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `tb_paski`
--
ALTER TABLE `tb_paski`
  MODIFY `id_paski` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pemuda`
--
ALTER TABLE `tb_pemuda`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_pemuda_pekerjaan`
--
ALTER TABLE `tb_pemuda_pekerjaan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=713;

--
-- AUTO_INCREMENT untuk tabel `tb_pemuda_pendidikan`
--
ALTER TABLE `tb_pemuda_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT untuk tabel `tb_pemuda_umum`
--
ALTER TABLE `tb_pemuda_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `tb_visi`
--
ALTER TABLE `tb_visi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
