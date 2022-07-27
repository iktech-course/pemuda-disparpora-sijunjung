-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2022 pada 12.32
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
-- Struktur dari tabel `beranda`
--

CREATE TABLE `beranda` (
  `id_beranda` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beranda`
--

INSERT INTO `beranda` (`id_beranda`, `foto`) VALUES
(3, 'CAK BENEN SISAWAH.JPG'),
(4, 'Paskibraka sijunjung.jpg'),
(5, 'IMG-20201008-WA0018.jpg'),
(6, 'sijunjungexpo.jpeg');

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
('QORINA ZAER', 'non aktif', 23);

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
(1, 1, 1, 21, 173),
(2, 1, 2, 21, 402),
(3, 1, 3, 21, 105),
(4, 1, 4, 21, 236),
(5, 1, 5, 21, 87),
(6, 1, 6, 21, 136),
(7, 1, 7, 21, 299),
(8, 1, 8, 21, 90),
(9, 1, 9, 21, 68),
(10, 2, 10, 21, 525),
(11, 2, 11, 21, 137),
(12, 2, 12, 21, 64),
(13, 2, 13, 21, 364),
(14, 2, 14, 21, 201),
(15, 2, 15, 21, 143),
(16, 2, 16, 21, 178),
(17, 2, 17, 21, 272),
(18, 2, 18, 21, 481),
(19, 3, 19, 21, 108),
(20, 3, 20, 21, 173),
(21, 3, 21, 21, 186),
(22, 3, 22, 21, 144),
(23, 3, 23, 21, 100),
(24, 4, 24, 21, 268),
(25, 4, 25, 21, 628),
(26, 4, 26, 21, 258),
(27, 4, 27, 21, 176),
(28, 4, 28, 21, 129),
(29, 4, 29, 21, 437),
(30, 4, 30, 21, 101),
(31, 4, 31, 21, 112),
(32, 4, 32, 21, 57),
(33, 4, 33, 21, 60),
(34, 4, 34, 21, 108),
(35, 5, 35, 21, 311),
(36, 5, 36, 21, 155),
(37, 5, 37, 21, 134),
(38, 5, 38, 21, 122),
(39, 5, 39, 21, 47),
(40, 5, 40, 21, 39),
(41, 6, 41, 21, 648),
(42, 6, 42, 21, 221),
(43, 6, 43, 21, 153),
(44, 6, 44, 21, 634),
(45, 6, 45, 21, 384),
(46, 6, 46, 21, 109),
(47, 7, 47, 21, 121),
(48, 7, 48, 21, 214),
(49, 7, 49, 21, 216),
(50, 7, 50, 21, 155),
(51, 7, 51, 21, 284),
(52, 7, 52, 21, 94),
(53, 7, 53, 21, 111),
(54, 7, 54, 21, 91),
(55, 7, 55, 21, 133),
(56, 7, 56, 21, 58),
(57, 7, 57, 21, 125),
(58, 8, 58, 21, 102),
(59, 8, 59, 21, 48),
(60, 8, 60, 21, 291),
(61, 8, 61, 21, 55),
(62, 1, 1, 22, 0),
(63, 1, 2, 22, 11),
(64, 1, 3, 22, 5),
(65, 1, 4, 22, 0),
(66, 1, 5, 22, 0),
(67, 1, 6, 22, 1),
(68, 1, 7, 22, 2),
(69, 1, 8, 22, 0),
(70, 1, 9, 22, 0),
(71, 2, 10, 22, 58),
(72, 2, 11, 22, 4),
(73, 1, 1, 23, 1),
(74, 1, 1, 24, 70),
(75, 1, 1, 25, 28),
(76, 1, 1, 26, 0),
(77, 1, 1, 27, 0),
(78, 1, 1, 28, 357),
(79, 1, 1, 29, 0),
(80, 1, 1, 30, 0),
(81, 1, 1, 31, 128);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemuda_pendidikan`
--

CREATE TABLE `tb_pemuda_pendidikan` (
  `id` int(11) NOT NULL,
  `id_nagari` int(3) NOT NULL,
  `id_pendidikan` int(3) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemuda_pendidikan`
--

INSERT INTO `tb_pemuda_pendidikan` (`id`, `id_nagari`, `id_pendidikan`, `jumlah`) VALUES
(1, 43, 12, 1029),
(4, 1, 11, 65),
(5, 2, 11, 183),
(6, 3, 11, 37),
(7, 4, 11, 96),
(8, 5, 11, 40),
(9, 6, 11, 60),
(10, 7, 11, 116),
(11, 8, 11, 37),
(12, 9, 11, 23),
(13, 9, 11, 273),
(14, 11, 11, 70),
(15, 12, 11, 49),
(16, 13, 11, 182),
(17, 14, 11, 89),
(18, 15, 11, 89),
(19, 16, 11, 67),
(20, 17, 11, 158),
(21, 18, 11, 255),
(22, 19, 11, 78),
(23, 20, 11, 86),
(24, 21, 11, 90),
(25, 22, 11, 69),
(26, 23, 11, 45),
(27, 24, 11, 129),
(28, 25, 11, 330),
(29, 26, 11, 115),
(30, 27, 11, 77),
(31, 28, 11, 97),
(32, 29, 11, 274),
(33, 30, 11, 57),
(34, 31, 11, 33),
(35, 32, 11, 20),
(36, 33, 11, 37),
(37, 34, 11, 57),
(38, 35, 11, 229),
(39, 36, 11, 93),
(40, 37, 11, 90),
(41, 38, 11, 46),
(42, 39, 11, 29),
(43, 40, 11, 24),
(44, 41, 11, 282),
(45, 42, 11, 115),
(46, 43, 11, 68),
(47, 44, 11, 361),
(48, 45, 11, 186),
(49, 46, 11, 64),
(50, 47, 11, 70),
(51, 48, 11, 77),
(52, 49, 11, 99),
(53, 50, 11, 74),
(54, 51, 11, 154),
(55, 52, 11, 46),
(56, 53, 11, 55),
(57, 54, 11, 60),
(58, 55, 11, 75),
(59, 56, 11, 37),
(60, 57, 11, 46),
(61, 58, 11, 49),
(62, 59, 11, 27),
(63, 60, 11, 175),
(64, 61, 11, 28),
(65, 1, 12, 257),
(66, 2, 12, 679),
(67, 3, 12, 99),
(68, 4, 12, 309),
(69, 5, 12, 215),
(70, 6, 12, 167),
(71, 7, 12, 446),
(72, 8, 12, 129),
(73, 9, 12, 97),
(74, 10, 12, 857),
(75, 11, 12, 187),
(76, 12, 12, 143),
(77, 13, 12, 515),
(78, 14, 12, 337),
(79, 15, 12, 193),
(80, 16, 12, 238),
(81, 17, 12, 297),
(82, 18, 12, 831),
(83, 19, 12, 362),
(84, 20, 12, 324),
(85, 21, 12, 316),
(86, 22, 12, 246),
(87, 23, 12, 175),
(88, 24, 12, 554),
(89, 25, 12, 1),
(90, 26, 12, 516),
(91, 27, 12, 257),
(92, 28, 12, 239),
(93, 29, 12, 923),
(94, 30, 12, 199),
(95, 31, 12, 176),
(96, 32, 12, 121),
(97, 33, 12, 162),
(98, 34, 12, 210),
(99, 35, 12, 730),
(100, 36, 12, 305),
(101, 37, 12, 259),
(102, 38, 12, 140),
(103, 39, 12, 109),
(104, 40, 12, 111),
(105, 41, 12, 932),
(106, 42, 12, 303),
(108, 44, 12, 186),
(109, 45, 12, 568),
(110, 46, 12, 164),
(111, 47, 12, 147),
(112, 48, 12, 301),
(113, 49, 12, 241),
(114, 50, 12, 225),
(115, 51, 12, 253),
(116, 52, 12, 162),
(117, 53, 12, 192),
(118, 54, 12, 148),
(119, 55, 12, 122),
(120, 56, 12, 84),
(121, 57, 12, 180),
(122, 58, 12, 180),
(123, 59, 12, 118),
(124, 60, 12, 660),
(125, 61, 12, 117),
(126, 1, 13, 218),
(127, 2, 13, 425),
(128, 3, 13, 75),
(129, 4, 13, 153),
(130, 5, 13, 110),
(131, 7, 13, 272),
(132, 8, 13, 96),
(133, 9, 13, 67),
(134, 10, 13, 547),
(135, 11, 13, 113),
(136, 12, 13, 92),
(137, 13, 13, 370),
(138, 14, 13, 192),
(139, 15, 13, 121),
(140, 16, 13, 193),
(141, 17, 13, 215),
(142, 18, 13, 485),
(143, 1, 14, 119),
(144, 1, 15, 83),
(146, 1, 16, 0),
(147, 1, 17, 5),
(148, 1, 18, 10),
(149, 1, 19, 0),
(150, 1, 20, 0);

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
(2, 2, 992, 966, 1958),
(3, 3, 183, 177, 360),
(4, 4, 507, 488, 995),
(5, 5, 294, 285, 579),
(6, 6, 243, 250, 493),
(7, 7, 650, 670, 1320),
(8, 8, 210, 208, 418),
(9, 9, 148, 149, 297),
(10, 10, 1723, 1573, 3296),
(11, 11, 307, 297, 604),
(12, 12, 187, 193, 380),
(13, 13, 987, 854, 1841),
(14, 14, 458, 458, 916),
(15, 15, 292, 284, 576),
(16, 16, 384, 381, 765),
(17, 17, 484, 462, 946),
(18, 18, 1331, 1267, 2598),
(19, 19, 529, 516, 1045),
(20, 20, 456, 391, 847),
(21, 21, 482, 421, 903),
(22, 22, 422, 372, 794),
(23, 23, 265, 240, 505),
(24, 24, 776, 778, 1554),
(25, 25, 1728, 1651, 3379),
(26, 26, 843, 797, 1640),
(27, 27, 400, 397, 797),
(28, 28, 338, 342, 680),
(29, 29, 1443, 1407, 2850),
(30, 30, 262, 270, 532),
(31, 31, 256, 311, 567),
(32, 32, 210, 216, 426),
(33, 33, 228, 225, 453),
(34, 34, 297, 269, 566),
(35, 35, 1059, 979, 2038),
(36, 36, 465, 417, 882),
(37, 37, 365, 389, 754),
(38, 38, 248, 238, 486),
(39, 39, 143, 143, 286),
(40, 40, 144, 118, 262),
(41, 41, 1475, 1470, 2945),
(42, 42, 525, 503, 1028),
(43, 43, 338, 285, 623),
(44, 44, 1626, 1531, 3157),
(45, 45, 876, 814, 1690),
(46, 46, 265, 230, 495),
(47, 47, 257, 248, 505),
(48, 48, 499, 432, 931),
(49, 49, 420, 399, 819),
(50, 50, 440, 384, 824),
(51, 51, 500, 534, 1034),
(52, 52, 274, 249, 523),
(53, 53, 328, 287, 615),
(54, 54, 202, 214, 416),
(55, 55, 263, 229, 492),
(56, 56, 139, 157, 296),
(57, 57, 307, 256, 563),
(58, 58, 254, 245, 499),
(59, 59, 199, 177, 376),
(60, 60, 1066, 939, 2005),
(61, 61, 257, 234, 491);

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
(2, 'nm', 'm,l,', ''),
(3, 'MENINGKATKAN KUALITAS PELAYANAN KEPADA PUBLIK DENGAN EFEKTIF,EFISIEN,RESPONSIF DAN SANTUN (SMART AND SMILE)', '1. MEMBERIKAN PELAYANAN PUBLIK YANG BERKUALITAS DAN EFEKTIF\r\n2. MENGEmBANGKAN PELAYANAN PUBLIK YANG RESPINSIF DAN SANTUN,IKHLAS,KERJA KERASDAN CERDAS (SMART)\r\n3. MENYELENGGARAKAN PELAYANAN INFORMASI TERKAIT DIBIDANG PEMUDA DAN OLAHRAGA.', 'struktur disparpora.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id_beranda`);

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
-- AUTO_INCREMENT untuk tabel `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id_beranda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jenis_pekerjaan`
--
ALTER TABLE `jenis_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `organisasi_pemuda`
--
ALTER TABLE `organisasi_pemuda`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1151;

--
-- AUTO_INCREMENT untuk tabel `tb_pemuda_umum`
--
ALTER TABLE `tb_pemuda_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `tb_visi`
--
ALTER TABLE `tb_visi`
  MODIFY `id_visi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
