-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2024 pada 09.06
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` char(2) NOT NULL,
  `nama` tinytext NOT NULL,
  `ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama`, `ongkir`) VALUES
('11', 'Aceh', 20000),
('12', 'Sumatera Utara', 19500),
('13', 'Sumatera Barat', 19500),
('14', 'Riau', 20000),
('15', 'Jambi', 18000),
('16', 'Sumatera Selatan', 19500),
('17', 'Bengkulu', 18000),
('18', 'Lampung', 19000),
('19', 'Kepulauan Bangka Belitung', 20000),
('21', 'Kepulauan Riau', 20000),
('31', 'DKI Jakarta', 18000),
('32', 'Jawa Barat', 15000),
('33', 'Jawa Tengah', 12000),
('34', 'DI Yogyakarta', 12000),
('35', 'Jawa Timur', 10000),
('36', 'Banten', 15000),
('51', 'Bali', 20000),
('52', 'Nusa Tenggara Barat', 25000),
('53', 'Nusa Tenggara Timur', 25000),
('61', 'Kalimantan Barat', 20000),
('62', 'Kalimantan Tengah', 22000),
('63', 'Kalimantan Selatan', 22000),
('64', 'Kalimantan Timur', 23000),
('65', 'Kalimantan Utara', 23000),
('71', 'Sulawesi Utara', 25000),
('72', 'Sulawesi Tengah', 25000),
('73', 'Sulawesi Selatan', 25000),
('74', 'Sulawesi Tenggara', 25000),
('75', 'Gorontalo', 22000),
('76', 'Sulawesi Barat', 25000),
('81', 'Maluku', 25000),
('82', 'Maluku Utara', 25000),
('91', 'Papua Barat', 30000),
('92', 'Papua', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'Kelompok 5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `telepon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `email`, `password`, `nama_pelanggan`, `telepon`) VALUES
(1, 'kelompok5@gmail.com', '12345678', 'kelompok5', '088212345678'),
(6, 'hilmiadha@gmail.com', '12345678', 'Muhammad Zulhilmi Adha', '088232847289'),
(7, 'frendy@gmail.com', '1234567', 'rendy haryanto', '099878755332'),
(8, 'hendra@gmail.com', '12345678', 'Hendra aja', '0876543218');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`id_pembelian`, `id_pelanggan`, `id_prov`, `tanggal_pembelian`, `total_pembelian`, `tarif`, `alamat`, `status`) VALUES
(20, 1, 33, '2024-01-03', 21011000, 12000, 'Jl jalan', 'Pending'),
(21, 7, 34, '2024-01-03', 5012000, 12000, 'jgfg', 'Pending'),
(22, 8, 34, '2024-01-03', 10411999, 12000, 'jalan', 'Pending');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian_produk`
--

CREATE TABLE `tb_pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_pembelian_produk`
--

INSERT INTO `tb_pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`) VALUES
(28, 20, 11, 1),
(29, 20, 12, 1),
(30, 20, 13, 1),
(31, 21, 11, 1),
(32, 22, 11, 1),
(33, 22, 12, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(40) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat_produk` int(11) NOT NULL,
  `foto_produk` varchar(40) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`) VALUES
(11, 'Canon Eos M100', 4999999, 302, 'canoneosm100.png', 'Kamera Canon EOS M100 adalah sebuah perangkat kamera yang efektif dan mendukung aktivitas fotografi dengan kualitas gambar yang memukau. Kamera Canon EOS M100 ini menawarkan resolusi 24,2 MP dengan sensor CMOS dengan menampilkan hasil foto dengan kualitas warna dinamis dan sudut pandang yang luas.'),
(12, 'Fujifilm XT30', 5400000, 383, 'FujifilmXT30.png', 'Kamera Fujifilm XT30 adalah produk yang dibuat dengan menghadirkan sensor 26MP dan dilengkapi oleh prosesor, serta banyak fitur set X-T3 kelas atas.'),
(13, 'SONY A6400', 10599000, 403, 'SONYA6400.png', 'Sony A6400 merupakan kamera mirrorless produksi Sony dan dirilis pada tahun 2019. Kamera ini pas bagi kamu yang gemar videografi karena dilengkapi dengan ketajaman video 4K.'),
(15, 'Canon Eos M100', 3000000, 343, 'canoneosm100.png', 'sglrknsgknslkrngnks');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `tb_pembelian_produk`
--
ALTER TABLE `tb_pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian_produk`
--
ALTER TABLE `tb_pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
