-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2024 pada 08.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simkarya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `episi`
--

CREATE TABLE `episi` (
  `id_episi` int(11) NOT NULL,
  `penyedia_eksternal` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `cabang` varchar(20) NOT NULL,
  `wilayah` varchar(20) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `no_npwp` varchar(20) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `no_bpjs_kesehatan` varchar(20) NOT NULL,
  `no_bpjs_ketenagakerjaan` varchar(20) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia_ditahun2023` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat_tinggal` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota_kab` varchar(20) NOT NULL,
  `alamat_ktp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `keahlian` varchar(20) NOT NULL,
  `brevet` varchar(20) NOT NULL,
  `operasional_nonoperasional` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `status_kawin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kontrak_awal` date NOT NULL,
  `kontrak_akhir` date NOT NULL,
  `devisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `episi`
--

INSERT INTO `episi` (`id_episi`, `penyedia_eksternal`, `nip`, `cabang`, `wilayah`, `nama_pegawai`, `no_ktp`, `no_kk`, `no_npwp`, `no_rekening`, `no_bpjs_kesehatan`, `no_bpjs_ketenagakerjaan`, `bank`, `tempat_lahir`, `tgl_lahir`, `usia_ditahun2023`, `jenis_kelamin`, `alamat_tinggal`, `provinsi`, `kota_kab`, `alamat_ktp`, `email`, `keahlian`, `brevet`, `operasional_nonoperasional`, `pendidikan`, `jurusan`, `status_kawin`, `agama`, `kontrak_awal`, `kontrak_akhir`, `devisi`) VALUES
(1, 'EPISI', 'JP-2204019', 'DUMAI', 'UTARA', 'MUHAMMAD ISROQ', '412536', '535235', '1223535', '23523523', '5235235', '2535255', 'MANDIRI', 'DUMAI', '1999-11-10', '24', 'LAKI-LAKI', 'BULUH KASAP', 'RIAU', 'DUMAI', 'JL. SUDIRMAN DUMAI TIMUR', 'ISROQ123@gmail.com', 'ASS INSPEKTOR', 'ASS INSPEKTOR', '1', 'SMA', 'IPA', 'K', 'ISLAM', '2022-11-03', '2024-12-08', 'PENGUJIAN (PAK FUFUFAFA)\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(125) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'muhammad isroq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisesa`
--

CREATE TABLE `wisesa` (
  `id_wisesa` int(11) NOT NULL,
  `npp` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `posisi_pekerjaan` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gaji_pokok` varchar(255) NOT NULL,
  `tunjangan` varchar(255) DEFAULT NULL,
  `bank` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `no_kontrak` varchar(255) NOT NULL,
  `kontrak_awal` date NOT NULL,
  `kontrak_akhir` date NOT NULL,
  `jumlah_bulan` varchar(20) NOT NULL,
  `devisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisesa`
--

INSERT INTO `wisesa` (`id_wisesa`, `npp`, `nama`, `posisi_pekerjaan`, `lokasi`, `tgl_lahir`, `gaji_pokok`, `tunjangan`, `bank`, `no_rek`, `total`, `pendidikan`, `jurusan`, `no_kontrak`, `kontrak_awal`, `kontrak_akhir`, `jumlah_bulan`, `devisi`) VALUES
(4, 22040, 'muhammad isroqq', 'INSPECTOR', 'DUMAI', '2000-10-25', ' 3,723,279', '400,000', 'MANDIRI', '1234567890123456', ' 4,223,279', 'SMA', 'IPA', 'DMI/ISR7/O/2510/PTS', '2024-11-07', '2024-12-06', '12', 'PENGUJIAN(PAK GIBRAN)'),
(5, 55543, 'toni', 'PENGAMAN GEDUNG', 'Duri', '2000-06-14', '3,500,000', '500,000', 'BCA', '153252352', '4,000,000', 'sma', 'ipa', '082414143', '2023-11-08', '2024-12-04', '12', 'pasasfasfddd');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `episi`
--
ALTER TABLE `episi`
  ADD PRIMARY KEY (`id_episi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisesa`
--
ALTER TABLE `wisesa`
  ADD PRIMARY KEY (`id_wisesa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `episi`
--
ALTER TABLE `episi`
  MODIFY `id_episi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wisesa`
--
ALTER TABLE `wisesa`
  MODIFY `id_wisesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
