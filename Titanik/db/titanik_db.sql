-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 06:16 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `titanik_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL,
  `artikel_judul` varchar(255) DEFAULT NULL,
  `artikel_isi` text DEFAULT NULL,
  `artikel_foto` varchar(500) DEFAULT NULL,
  `artikel_tgl` datetime DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_judul`, `artikel_isi`, `artikel_foto`, `artikel_tgl`, `admin_id`) VALUES
(1, 'Adat Kebudayaan Petani Desa Kendal Sewu di Masa Pandemi: Sedekah Bumi', 'Salah satu sisi dari kebudayaan Jawa adalah dunia tani (pertanian). Dari dunia kebudayaan tani Jawa terdapat nilai-nilai yang berkaitan dengan ekologi. Nilai-nilai ekologi itu dimunculkan di dalam tatacara dan adat yang telah diwariskan oleh leluhur. Dipandang dari segi positif nilai-nilai ekologi Jawa yang berada di kalangan budaya tani Jawa banyak yang menjadikan suatu lelucon. Akan tetapi, kalau dilihat dari spirit yang ditularkan, adat dan tatacara yang membungkus nilai-nilai ekologi Jawa itu perlu dipertimbangkan untuk pada saat ini. Secara ekologis sawah yang subur, luas, dan indah beserta seluruh sistem budaya yang melingkupinya di tanah Jawa mulai berkurang dan tidak menarik hati (jika dipandang). Berkurang luasnya lahan persawahan ini karena adanya konversi untuk penggunaan nonpertanian yang meningkat tajam di Pulau Jawa.\r\n\r\nHal itu tak luput dari pandangan ilmuwan untuk mengolah lebih dalam lagi. Salah satunya ilmuwan dari penduduk pribumi sendiri. Ada beberapa budaya yang diterapkan pada setiap daerah yang memang lebih mengutamakan tentang kebudayaan adat daerah. Contohnya, sedekah bumi dimana suatu daerah tersebut memberikan bentuk syukur terhadap atas hasil panen yang berlimpah.\r\n\r\nMasyarakat di Jawa khususnya Desa Kendal Sewu, sejak dulu kala memang masyarakat yang banyak menarik perhatian para ilmuwan untuk dikaji secara mendalam. Dari mulai religi, tatanan perekonomian masyarakatnya, hingga struktur sosial lainnya. Tak terkecuali tentu saja kajian tentang kehidupan berbudaya petani jawa yang menjadi basis komunitas masyarakat jawa pada perkembangan.\r\n\r\nBerbicara tentang petani di pedesaan Jawa maka sama saja berbicara mengenai adat yang sudah menetap di wilayah tersebut. Adat yang sudah menjadi bawaan khas daerah tidak bisa di ubah. Oleh karena itu, adat yang sudah menjadi bawaan dari nenek moyang pedesaan Jawa yaitu salah satunya Adat Budaya Sedekah Bumi.\r\n\r\nSedekah Bumi adalah acara tradisi turun-temurun yang sudah dilaksanakan oleh warga masyarakat di Pedesaan Jawa, terutama di Desa Kendal Sewu . Sedekah Bumi merupakan bentuk rasa syukur terhadap Tuhan Yang Maha Esa atas semua karunianya yang diberikan kepada warga. Salah satu Sesepuh Desa, Mbah Lapin, mengatakan bahwa sedekah bumi adalah simbol penghormatan dan penghargaan masyarakat kepada alam sebagai karunia yang besar. “Tanah yang kita pijak setiap hari, kita buang kotoran di situ, kita tanam dan segala sesuatu yang kita lakukan maka kita perlu merawatnya dengan cara memberikan sedekah terhadap bumi kita ini”, paparnya.\r\n\r\nDalam prosesi Upacara Sedekah Bumi ini ada beberapa tahap untuk dilakukan yang menjadi syarat acara tersebut, yaitu :  (a) tahap persiapan dan (b) tahap pelaksanaan upacara Sedekah Bumi. Pada taha persiapa, warga diharapkan untuk membentuk susunan kepanitiaan dan pencarina dana. warga desa akan melaksanakan tanam padi (tanem); Adapun Ubarampe upacara Sedekah Bumi yaitu: (1) nasi tumpeng / gunungan (sekarang nasi tumpeng sudah digantikan dengan nasi biasa, tidak berbentuk gunungan), (2) nasi kuning (sudah diganti dengan nasi putih dikarenakan masyarakat Jawa mencari kepraktisannya), (3) bubur merah putih, dan (4) sesaji yaitu kembang telon yang terdiri dari bunga minimal tiga rupa (mawar, kenanga, kantil/melati). Prosesi akhir upacara Sedekah Bumi adalah pemimpin upacara Sedekah Bumi bersama pemimpin do’a dan memberi sesaji berupa bunga (kembang telon), bubur merah putih diletakkan di sekitar sawah/didekat pohon asam biasanya terletak di sekitar sawah.\r\n\r\nPelaksanaan Sedekah Bumi biasanya diadakan pada bulan Dzulqo’dah mengikuti kalender Jawa atau Hijriyah. Acara Sedekah Bumi biasanya diadakan hanya setahun sekali sehingga disebut Tradisi Tahunan. Pelaksanaan Acara Sedekah Bumi ini diikuti oleh seluruh masyarakat seperti perangakat desa, para Ketua Rukun Tetangga(RT), Ketua Rukun Warga (RW), tokoh masyarakat, tokoh agama dan perempuan dan masyarakat desa. Untuk menjalankan kegiatan tersebut dibutuhkan waktu yang cukup lama agar bisa berjalan dengan lancer. Para perangkat Desa juga melakukan musyawarah yang harus dihadiri oleh beberapa masyarakat.untuk mencapai tujuan. Namun, adanya pandemi Covid-19 di tahun 2020-2021 adat tersebut tidak ada lagi.\r\n\r\nMasa pandemi ini pemerintah memperketat kebijakan agar tidak beraktifitas di luar rumah serta juga menerapkan protokol kesehatan yang ketat seperti memakai masker, menjaga jarak minimal 1 meter, mencuci tangan,dan mencegah terjadinya kerumunan. Tentu dengan adanya virus corona semua kegiatan yang ada di masyarakat terkena efeknya dari ibadah, pendidikan, transportasi hingga ekonomi. Salah satunya berdampak pada kebudayaan adat petani.\r\n\r\nHal inilah yang menyebabkan menurunnya budaya adat para petani tidak ingin menjalankan kegiatan sedekah bumi. Namun, masyarakat tetap nekad untuk mengadakan kegiatan adat tersebut dengan mandiri atau tanpa berkerumun. Biasanya kegiatan ini dilakukan oleh banyak orang dan juga bertempatan di setiap Balai Desa yang mengadakan. Namun , adanya Pandemi Covid-19 ini meski hanya dihadiri sedikit orang, makna dan nilai-nilai warisan leluhur tidak berkurang sama sekali. Sedekah bumi menjadi adat budaya yang sangat berharga yang sangat perlu untuk diwariskan kepada generasi mendatang. Untuk meramaikan acara Sedekah bumi, di balai desa biasanya diadakan ritual dan pertunjukan wayang kulit tetapi di kala pandemic ini hanya dilakukan kegiatan Ritual doa bersama. Namun demikian pelaksanaan kali ini tetap berjalan dengan hidmat dan sakral.\r\n\r\nDisamping itu juga banyak masyarakat yang ikut serta khususnya bagi pemuda pemudi sebagai generasi penerus. Peran orangtua juga sangat penting untuk memberikan pelajaran mengenai kebudayaan yang ada di daerah Jawa terhadap anak-anaknya. Masyarakat sangat mempercayai bahwa setelah mengadakan acara Adat Sedekah Bumi tersebut mebuat kehidupan mereka mengalami perubahan menuju kebaikan. Tanaman warga jarang sekali tumbuh dengan baik. Namun, atas usulan dari para leluhur Orang Jawa, Mulailah dilaksanakan upacara Sedekah Bumi.\r\n\r\nNilai-nilai yang terkandung dalam upacara Sedekah Bumi yang dapat diambil terdiri atas tiga nilai, yaitu: (a) nilai pendidikan ketuhanan, (b) nilai pendidikan sosial atau kemasyarakatan, (c) nilai pendidikan moral. Pengaruh upacara Sedekah Bumi terhadap masyarakat terdapat dua sifat, yaitu (a) sifat positif dan (b) sifat negatif.', 'foto_artikel_1623853006.jpg', '2021-06-06 14:12:59', 1),
(2, 'Pertanian Ramah Lingkungan, Pertanian Berkelanjutan dan Prospek Pertanian Masa Depan', 'Ruang lingkup usaha pertanian itu sangat luas, namun sesungguhnya saling berinteraksi  dalam suatu ekosistem. Pertanian ramah lingkungan adalah sebuah konsep pengembangan pertanian yang mengedepankan kearifan sumberdaya lokal.  Artinya menggunakan sumberdaya lahan secara arif dan bijaksana dengan melibatkan kondisi agroekologi secara holistik yang dikelolah secara komprehensif oleh semua pihak.  Komponen inovasi utama adalah pada pengelolaaan sumberdaya lahan pertanian: tanah dan air.\r\nLangkah operasional ramah lingkungan yaitu meminimalis input, kerja supplement bila diperlukan.  Missal mematuhi penggunaan pemupukan berimbang dan rasional.  Artinya berdasarkan hara yang dibutuhkan tanaman.  demikian dengan pengendalian hama, jangan sampai mengganggu lingkungan organisme yang lain sehingga populasi menurun bahkan mati.  Padahal organisme tersebut bermanfaat sebagai musuh alami hama dan penyakit yang hendak kita brangus.  Praktik usahatani demikian, manakala dilaksanakan secara serius dan terus menerus, akan menghasilkan sebuah konsep pertanian berkelanjutan.  Kondisi demikian menjadikan suplai bahan baku lancar untuk menggerakkan roda pembangunan yang berkesinambungan.\r\nPertanian berkelanjutan tidak akan terealisasi, manakala dikembangkan secara sendiri-sendiri.  Jelas praktek pertanian seperti ini akan menghamburkan banyak sumberdaya alam. \r\nMisal setelah panen padi, akan diperoleh hasil samping berupa jerami dan sekam ketika diproses menjadi beras.  Petani umumnya mengambil jalan pintas dengan membakarnya, agar dapat dengan segera bisa melakukan penanaman kembali.  Padahal pada 5 ton jerami hasil panen padi seluas satu hektar, mengandung 56 kg Nitrogen, 7 kg Phospor, 5,5 kg Sulphur, 14,5 kg Calsium, 8 kg Magnesium dan 91 kg Kalium serta 80 kg Silikat.  Apabila sumberdaya tersebut dikembalikan ke lahan petani dapat melakukan penghematan biaya produksi pembelian pupuk.  \r\nParahnya lagi jika jerami dibakar di lahan, jelas ini akan mematikan mikroba dalam tanah yang sangat berperan membantu penyediaan unsur hara di lingkungan perakaran tanaman.  Kemudian sekam padi, melalui proses pembakaran menjadi biochart, yang selanjutnya ditambahkan pada proses pembuatan pupuk kompos jerami, menjadi biochart-kompos.  Aplikasi biochart kompos, memiliki kemampuan menyerap cemaran lingkungan tumbuh tanaman akibat penggunaan pestisida dan pupuk anorganik diluar batas kendali. Keseluruhan siklus tersebut dinamakan siklus usahatani tiada yang terbuang  atau zerro waste\r\nDemikian halnya pada usahatani peternakan, misal memelihara ternak sapi.  Bila dikerjakan sendiri,  seekor sapi dalam sehari akan menghasilkan sekitar 6 kg limbah padat dan sekitar 10 liter urin.  Dalam beberapa hari bila limbah dibiarkan bertumpuk akan menjadi masalah pencemaran lingkungan dan penanganannya akan membutuhkan biaya tinggi. Oleh sebab itu, Kebanyakan Peternak membuang kotorannya yang dianggapnya limbah begitu saja ke selokan.  Merujuk hasil Validasi Rekomendasi Pemupukan NPK dan Pupuk Organik Padi Sawah yang dilakukan Hartatik dan Setyorini (2007), dari Balai Besar Litbang Sumberdaya Lahan Pertanian, bahwa pemberian pupuk kandang sapi 2 ton/ha dapat mensubtitusi pupuk Urea: 25 kg/ha, SP-36: 25 kg/ha dan 20 kg KCl/ha. \r\nNampak jelas bahwa praktik usahatani yang sendiri-sendiri tanpa disadari, akan mengeksploitasi sumberdaya lahan sebagai bentuk pemborosan. Oleh sebab itu sangat dianjurkan mulai sekarang untuk melakukan prkatek usahatani secara terpadu dan terintegrasi antara tanaman dan ternak.  Misal menanam padi selain diperoleh produksi beras, terdapat pula hasil ikutan berupa jerami, dedak dan sekam.  Jerami, sebagian bisa dikomposkan dan sebagian bisa digunakan untuk pakan ternak.  \r\nDemikian halnya usahatani ternak, selain diperoleh daging, diperoleh pula hasil sampingan kotoran padat dan urin yang dapat dikembalikan ke lahan.  Jerami dan kotoran hewan, sebagai sumberdaya yang bisa menggantikan sebagian unsur hara tanah yang diangkut keluar dalam bentuk panen.  Pengembalian material tersebut ke tanah akan menekan input pembelian pupuk N, P dan K, yang banyak dikeluhkan petani yang bermodal kecil, sulit untuk menebus pupuk.  Selain itu pemberian bahan organik ke lahan pertanian secara berkesinambungan akan berdampak pada pemeliharaan kesuburan dan kesehatan tanah.  Kondisi demikian akan menjamin kontinuitas kualitas dan kuantitas produksi pertanian.', 'foto_artikel_1623853000.jpg', '2021-06-06 14:13:27', 1),
(3, 'Dubes RI di Australia Sambut Rencana Visa Pertanian untuk Negara ASEAN', 'Melbourne - Visa khusus bagi pekerja di bidang pertanian bagi warga dari sepuluh negara anggota ASEAN, termasuk Indonesia untuk bekerja bakal diterapkan oleh Australia. Kendati demikian, kelompok lobi pertanian mengatakan mereka baru akan percaya kalau rencana ini jadi kenyataan.\r\n\r\nPerwakilan Indonesia di Australia mengatakan \"menyambut baik\" rencana ini dan mereka berharap untuk mendapatkan rinciannya.\r\n\r\nAdanya visa tersebut muncul bersamaan dengan perjanjian perdagangan bebas (FTA) antara Inggris dan Australia yang tidak lagi mengharuskan pemegang visa liburan sambil bekerja (WHV) dari Inggris harus bekerja di ladang pertanian selama 88 hari.\r\n\r\nPerdana Menteri Australia Scott Morrison dan PM Inggris Boris Johnson mengatakan visa yang berlaku timbal balik akan dibuat bagi pekerja ladang pertanian kedua negara.\r\n\r\nABC dalam laporan hari Senin mengatakan visa baru untuk ASEAN tersebut merupakan hasil dari perundingan antara Partai National dengan PM Morrison, sebagai persyaratan yang diajukan oleh Partai National untuk menyetujui FTA antara Inggris-Australia.\r\n\r\nWakil Ketua Partai National, David Littleproud mengonfirmasi jika visa baru untuk pekerja pertanian ini akan diberikan kepada warga anggota ASEAN, yaitu Indonesia, Myanmar, Vietnam, Singapura, Filipina, Malaysia, Thailand, Laos, Brunei dan Kamboja. \r\n\r\nDalam reaksinya, Presiden Federasi Petani Nasional Australia, Fiona Simson mengatakan pemerintah sudah lama menjanjikan adanya visa khusus pekerja pertanian namun sampai sekarang belum terwujud.\r\n\r\n\"Kita sudah mendengar janji ini selama bertahun-tahun. Waktunya membuatnya menjadi kenyataan,\" katanya kepada ABC.\r\n\r\nMenurut David para anggota negara ASEAN masih harus menyatakan diri apakah mereka akan bersedia mengizinkan warganya mengikuti program tersebut.\r\n\r\nHingga saat ini masih belum jelas berapa pekerja yang akan direkrut lewat visa tersebut.\r\n\r\nPekerja musiman dari Inggris yang dikenal dengan istilah \'backpackers\' selama ini mengisi sekitar 25 persen keseluruhan pekerja di ladang pertanian di Australia setiap tahunnya dan mereka yang berasal dari Inggris berjumlah sekitar 10 ribu orang.\r\n\r\nDavid mengatakan visa ini harus bisa merekrut lebih dari 10 ribu pekerja setiap tahunnya.\r\n\r\n\"Visa itu akan berlaku selama tiga tahun, dan mereka akan bekerja selama enam sampai sembilan bulan,\" katanya.\r\n\r\n\"Mereka kemudian kembali ke negara asal selama tiga bulan, setiap tahunnya selama tiga tahun tersebut.\"\r\n\r\n\"Ini langkah besar, setelah ada visa pertanian resmi dan kami mencapai persetujuan dengan 10 negara ASEAN, kami kemudian bisa menambahkan dengan negara-negara lain di masa depan.\"\r\n\r\nDavid mengatakan visa ini akan memiliki kondisi yang berbeda dari program pekerja Pasifik dan skema pekerja pemetik buah musiman.', 'foto_artikel_1623852928.jpg', '2021-06-16 16:14:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `barang_id` int(11) NOT NULL,
  `penjual_id` int(11) DEFAULT NULL,
  `barang_nama` varchar(255) DEFAULT NULL,
  `barang_qty` int(255) DEFAULT NULL,
  `barang_desk` text DEFAULT NULL,
  `barang_harga` varchar(255) DEFAULT NULL,
  `barang_berat` varchar(255) DEFAULT NULL,
  `barang_satuan` varchar(255) DEFAULT NULL,
  `barang_foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_id`, `penjual_id`, `barang_nama`, `barang_qty`, `barang_desk`, `barang_harga`, `barang_berat`, `barang_satuan`, `barang_foto`) VALUES
(1, 1, 'Kol', 99, 'Kol Putih / Engkol / Kubis Segar', '55000', '1', 'Kilogram', 'foto_barang_1623853285.jpg'),
(2, 1, 'Terong Ungu', 93, 'Terong Ungu 1kg', '15000', '1', 'Kilogram', 'foto_barang_1623853279.jpg'),
(3, 1, 'Singkong', 90, 'singkong mentah 1kg', '14450', '1', 'Kilogram', 'foto_barang_1623853190.jpg'),
(4, 2, 'Buah Kurma', 280, 'Kurma asli Import dari Arab Saudi.\r\nHALAAALLLL!!!', '89500', '1', 'Kilogram', 'foto_barang_1623855190.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `pembeli_id` int(11) DEFAULT NULL,
  `penjual_id` int(11) DEFAULT NULL,
  `barang_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `alamat_pengiriman` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `pembeli_id`, `penjual_id`, `barang_id`, `qty`, `tanggal`, `alamat_pengiriman`, `status`) VALUES
(3, 2, 1, 3, 10, '2021-06-09 12:46:03', 'cimahi', 2),
(4, 2, 1, 3, 10, '2021-06-09 12:46:37', 'mahi 2', 1),
(6, 2, 1, 2, 7, '2021-06-10 15:13:17', 'cimahi', 1),
(26, 2, 1, 2, 3, '2021-06-16 17:50:42', 'Bandung', 0),
(27, 2, 1, 2, 3, '2021-06-16 17:51:49', 'Bandung', 0),
(28, 2, 1, 2, 1, '2021-06-16 17:59:31', 'bandung', 0),
(29, 2, 2, 4, 3, '2021-06-17 04:28:10', NULL, 0),
(30, 2, 1, 3, 5, '2021-06-17 05:55:54', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`admin_id`, `full_name`, `email`, `no_hp`, `username`, `password`) VALUES
(1, 'Administrator 1', 'mail@mail.com', '081221827573', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_pembeli`
--

CREATE TABLE `user_pembeli` (
  `pembeli_id` int(11) NOT NULL,
  `nama_depan` varchar(255) DEFAULT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_pembeli`
--

INSERT INTO `user_pembeli` (`pembeli_id`, `nama_depan`, `nama_belakang`, `no_hp`, `email`, `alamat`, `foto`, `username`, `password`, `admin_id`) VALUES
(2, 'Yabeh', 'Sakti', '082123234456', 'sakti@email.com', 'Bandung, Bojongsoang', NULL, 'yabeh', 'yabeh', 1),
(3, 'Aditya', 'Gumgum', '08512345678', 'gumy@email.com', 'Bandung, Majalaya', NULL, 'gumyboy', 'bebas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_penjual`
--

CREATE TABLE `user_penjual` (
  `penjual_id` int(11) NOT NULL,
  `nama_depan` varchar(255) DEFAULT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_penjual`
--

INSERT INTO `user_penjual` (`penjual_id`, `nama_depan`, `nama_belakang`, `email`, `no_hp`, `alamat`, `nama_toko`, `username`, `password`, `admin_id`) VALUES
(1, 'Mamang', 'Adri', 'penjual@email.com', '085860802025', 'Bandung, Arcamanik', 'Adri Abadi', 'adripenjualabadi', '12345678', 1),
(2, 'Ibnu', 'Mamang Zakky', 'ibnu@email.com', '082117105490', 'Bandung, Antapani', 'Zakky Farm', 'zakzak', 'zikizaka', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`),
  ADD KEY `artikel_ibfk_1` (`admin_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD KEY `barang_ibfk_1` (`penjual_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `transaksi_ibfk_1` (`penjual_id`),
  ADD KEY `transaksi_ibfk_2` (`pembeli_id`),
  ADD KEY `transaksi_ibfk_3` (`barang_id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user_pembeli`
--
ALTER TABLE `user_pembeli`
  ADD PRIMARY KEY (`pembeli_id`),
  ADD KEY `user_pembeli_ibfk_1` (`admin_id`);

--
-- Indexes for table `user_penjual`
--
ALTER TABLE `user_penjual`
  ADD PRIMARY KEY (`penjual_id`),
  ADD KEY `user_penjual_ibfk_1` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_pembeli`
--
ALTER TABLE `user_pembeli`
  MODIFY `pembeli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_penjual`
--
ALTER TABLE `user_penjual`
  MODIFY `penjual_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `user_admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`penjual_id`) REFERENCES `user_penjual` (`penjual_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`penjual_id`) REFERENCES `user_penjual` (`penjual_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`pembeli_id`) REFERENCES `user_pembeli` (`pembeli_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`barang_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_pembeli`
--
ALTER TABLE `user_pembeli`
  ADD CONSTRAINT `user_pembeli_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `user_admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_penjual`
--
ALTER TABLE `user_penjual`
  ADD CONSTRAINT `user_penjual_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `user_admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
