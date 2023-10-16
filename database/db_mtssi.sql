-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 10:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mtssi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `isi_berita` text NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `id_kategori`, `kategori`, `isi_berita`, `penulis`, `tanggal`, `gambar`) VALUES
(3, 'Pesilat MTs. SI 3 Ikuti Ujian Kenaikan Tingkat Sabuk', 1, 'Prestasi', 'Cicurug (SI3 News), Liburan akhir semester dimanfaatkan oleh Perguruan Pencak Silat Pajajaran Cimande untuk menyelenggarakan Ujian Kenaikan Tingkat Sabuk (UKTS) pada tanggal 28 - 29 Desember 2019 di MAN 4 Cigombong - Bogor, tak ingin ketinggalan momen satu tahun sekali itu pesilat dari MTs. Syarikat Islam 3 ikut serta pada kegiatan tersebut.<br><br>\r\n\r\n\r\nPesilat SI 3 yang ikut serta UKTS adalah Siti Syahdira (Kelas 7),  Sarah Salsabila (Kelas 7), Dini Maryani (Kelas 7), Imelda Maharani (Kelas 7), Silmi Kaffah Insani (Kelas 8), Rifal Pauzan (Kelas 8), Fajar Darusman (Kelas 8), Nurusyamchi Harbiya (Kelas 8), Rachmi Hermawati (Kelas 8) dan Riyanto Agustian (Kelas 9).<br><br>\r\n\r\nKegiatan tersebut diikuti oleh 684 pesilat dari tiga Provinsi yaitu Jawa Barat, DKI Jakarta dan Banten serta dihadiri juga oleh dewan pelatih cabang, asisten pelatih, dewan pelatih pusat dan anggota majlis pendekar.<br><br>\r\n\r\nKegiatan dibuka resmi oleh Bapak TB. Ludi Haryadi, S.Pd selaku Ketua Majlis Pendekar, dalam sambutannya beliau menyampaikan tentang korelasi silat dan sholat dalam kehidupan sehari-hari, pentingnya berbakti kepada orangtua dan saling menghormati sesama baik yang lebih tua dari kita maupun sebaliknya.<br><br>\r\n\r\nPeserta sangat antusias mengikuti acara tersebut sebagai momen silaturahmi terutama sekali membangun kebersamaan antar pelajar.<br><br>\r\n\r\nSelamat kepada pesilat SI 3 semoga ananda semua lulus uji dan semangat dalam meraih prestasi.<br><br>\r\n', 'admin WEB', '2023-05-27', ''),
(4, 'Sejarah Syarikat Islam Indonesia', 1, 'Prestasi', 'WFERBWGBENYMTYMNTHsfgndfng', 'pak imron', '2023-05-29', 'percabangan_c++.png'),
(5, 'DPK SEPMI MTs. Syarikat Islam 3 Selenggarakan Basic Leadership Training', 2, 'Kegiatan Sekolah', 'Cicurug ( SI3 News ), dalam program kerja DPK SEPMI periode 2020/2021 termuat didalamnya kegiatan Basic Leadership Training / Latihan Dasar Kepemimpinan, kegiatan tersebut diselenggarakan pada tanggal 17 - 19 Januari 2020 dengan pelaksanaan di tiga tempat yaitu di gedung MTs. Syarikat Islam 3, Sekretariat PAC SI Indoenesia Kec.Cicurug dan MI Cibuntu.<br><br>\r\n\r\nAcara dibuka oleh PAC SI Indonesia Kecamatan Cicurug Bapak Tjetje Sudrajat mewakili Ketua PAC SI Indonesia,\"sebuah organisasi harus memiliki tujuan yang jelas, tujuan SEPMI adalah membentuk pribadi muslim yang berilmu dan beriman sempurna berdasarkan alquran dan sunnah rosul yang nyata, tujuan akan tercapai bersamaan dengan kepemimpinan yang kuat dan dapat dipercaya,\" ujar Tjetje Sudrajat dalam sambutannya diiringi nyanyian lagu yang mengudang tawa peserta.  <br><br>\r\n\r\nMateri BALTRA / LDK memuat keorganisasian, penataan administrasi, penyelenggaraan musyawarah/rapat, dan Tauhid. Pemateri dari DPC SEPMI Kabupaten Sukabumi, DPAC SEPMI Kecamatan Cicurug dan Dewan Guru MTs. Syarikat Islam 3. Agenda kegiatan meliputi  penyampaian materi diruangan, wide game, kerohanian (sholat wajib, sholat sunat, tadarus ), permainan edukasi, kebersihan lingkungan dan olahraga. <br><br>\r\n\r\nPada saat penutupan BALTRA/LDK pengurus DPK SEPMI MTs. SI 3 periode 2020/2021 yang menjadi peserta BALTRA/LDK dilantik oleh Kepala MTs. Syarikat Islam 3 mewakili DPAC SEPMI Kecamatan Cicurug.', 'admin WEB', '2023-05-30', 'IMG_20200118_174214.jpg'),
(6, 'Contoh RPP sesuai Edaran Kemendikbud Nomor 14 Tahun 2019', 3, 'informasi', '<center>RENCANA PELAKSANAAN PEMBELAJARAN</center>\r\n<center> (Sesuai edaran Mendikbud No 14 Tahun 2019) </center>\r\n\r\n\r\nSatuan Pendidikan      : ................................................. <br>\r\nKelas / Semester        :  6 /2<br>\r\nTema  6                       :  Menuju Masyarakat Sejahtera<br>\r\nSub Tema 1                :  Masyarakat Peduli Lingkungan<br>\r\nMuatan Terpadu         :  PPKN, IPS, Bahasa Indonesia<br>\r\nPembelajaran ke         :  1<br>\r\nAlokasi waktu              :  1 hari<br>\r\n\r\n\r\n\r\nA.     TUJUAN<br>\r\n1.     Setelah siswa mengamati gambar kegiatan warga masyarakat dikampung “Damai”, siswa dapat menjelaskan pelaksanaan kewajiban sebagai warga negara dalam kehidupan sehari-hari dengan tepat.<br>\r\n2.     Setelah siswa berdiskusi tentang kewajiban sebagai warga negara, siswa dapat menceritakan pengalaman melaksanakan kewajiban sebagai warga negara dalam kehidupan sehari-hari dengan tepat.<br>\r\n3.     Setelah siswa membaca bacaan berjudul “Makna Proklamasi bagi Bangsa Indonesia”, siswa dapat menjelaskan makna proklamasi kemerdekaan dalam upaya membangun masyarakat Indonesia yang sejahtera dengan tepat.<br>\r\n4.     Setelah siswa berlatih menjawab pertanyaan, siswa dapat menyampaikan perkiraan informasi dari teks nonfiksi berdasarkan kata-kata kunci yang terdapat pada judul dengan tepat<br><br><br>\r\n\r\n\r\nB.      KEGIATAN  PEMBELAJARAN<br><br>\r\n\r\n Kegiatan Pendahuluan<br>\r\n1.     Kelas dimulai dengan dibuka dengan salam, menanyakan kabar dan mengecek kehadiran siswa<br>\r\n2.     Kelas dilanjutkan dengan do’a dipimpin oleh salah seorang siswa. Siswa yang diminta membaca do’a adalah siswa siswa yang hari ini datang paling awal. (Menghargai kedisiplikan siswa/PPK).<br>\r\n3.     Menyanyikan Nasional. Guru memberikan penguatan tentang pentingnya menanamkan semangat Nasionalisme.<br>\r\n4.     Pembiasaan membaca/menulis 15-20  menit dimulai dengan guru. Sebelum membacakan buku guru menjelaskan tujuan kegiatan literasi dan memberikan stimulus, ide, dan gagasan kepada siswa melalui gambar yang berisi tentang kepedulian terhadap lingkungan. Kemudian, guru mengajukan pertanyaan kepada siswa<br><br>\r\n\r\nKegiatan Inti<br>\r\nAyo Mengamati<br>\r\n·         Siswa mengamati berbagai gambar pada buku Siswa<br>\r\n·         Siswa secara bergantian menceritakan kegiatan yang dilakukan pada buku<br>\r\n·         Siswa mampu menjelaskan pelaksanaan kewajiban sebagai warga negara dalam kehidupan sehari-hari.<br>\r\nAyo Berdiskusi<br>\r\n·         Guru meminta siswa membentuk kelompok yang terdiri atas 5 anak.<br>\r\n·         Setiap siswa kemudian menulis pertanyaan dan menukarkannya dengan teman di sebelah, menjawabnya, dan  mendiskusikan jawabannya. ( Mandiri, Critical Thinking and Problem Formulation)<br>\r\nAyo Berlatih<br>\r\n·         Setelah siswa membaca teks Makna Proklamasi bagi Bangsa Indonesia, guru dan siswa membahasnya sebentar<br>\r\n·         Siswa mengumpulkan hasilnya kepada guru untuk dinilai atau dievaluasi.\r\n·         Guru mengapresiasi dan mengonfirmasi jawaban siswa. (Critical Thinking and Problem Formulation)<br>\r\nAyo Renungkan<br>\r\n·         Siswa melakukan refleksi dengan menjawab pertanyaan yang terdapat dalam buku siswa. (Mandiri)<br>\r\n·         Siswa diminta untuk mengemukakan pendapatnya berdasarkan pemahaman yang sudah didapatkannya selama kegiatan pembelajaran berlangsung dalam bentuk tulisan (Creativity and Innovation)<br>\r\n\r\nKerja Sama dengan Orang Tua     <br>\r\n·         Siswa bersama kedua orang tua berdiskusi kepedulian keluarganya sebagai warga masyarakat di lingkungan tempat tinggal.<br>\r\n·         Siswa juga menanyakan upaya-upaya apa saja yang harus dilakukan oleh keluarga untuk memaknai kemerdekaan yang diraih pahlawan.<br>\r\n\r\nKegiatan Penutup<br>\r\n·         Siswa diminta menyampaikan hasilnya kepada guru dan teman di sekolah. (Mandiri)\r\n·         Menyanyikan salah satu lagu daerah untuk menumbuhkan Nasionalisme, Persatuan, dan Toleransi Salam dan doa penutup dipimpin oleh salah satu siswa (Religius)<br><br>\r\n\r\nC.    PENILAIAN<br>\r\nPenilaian Sikap : Observasi selama kegiatan berlangsung<br>\r\nPenilaian Pengetahuan<br>\r\na. Menjawab pertanyaan lisan tentang tata cara memperkenalkan diri yang benar.<br>\r\nPenilaian Keterampilan<br>\r\nMengetahui<br>                                                                                                                                  ………………….,         2020<br>\r\nKepala Sekolah                                                                                                   Guru Kelas\r\n\r\n\r\n\r\n_______________                                                                                             __________________\r\nNIP                                                                                                                         NIP', 'admin WEB', '2023-05-30', 'SEPMI_3.jpg'),
(7, 'Serunya Musyawarah Anggota DPK SEPMI MTs. SI 3', 2, 'Kegiatan Sekolah', 'Cicurug (SI3 News), Rabu tanggal 18 Desember 2019 Dewan Pimpinan Komisariat Serikat Pelajar Muslimin Indonesia ( DPK-SEPMI ) MTs. Syarikat Islam 3 menyelenggarakan Musyawarah Anggota yang dilaksanakan setiap satu tahun sekali sesuai amanat Anggaran Dasar/Anggaran Rumah Tangga SEPMI.\r\n\r\nMusyawarah Anggota dihadiri oleh siswa-siswi MTs. Syarikat Islam 3 bertindak sebagai peserta musyawarah dan dibuka resmi oleh Kepala MTs. Syarikat Islam 3, musyawarah dipimpin oleh perwakilan dari DPAC SEPMI Kecamatan Cicurug diantaranya alumni MTs.Syarikat Islam 3 yaitu Sahru Muhaemin, Rahayu Anggraeni dan Ratina. Musyawarah Anggota dilaksanakan adalah untuk mempertanggungjawabkan kinerja pengurus dalam bentuk LPJ, menyusun program kerja dan rencana anggaran untuk dilaksanakan pengurus periode berikutnya serta memilih pengurus baru masa jihad 2019/2020.<br><br>\r\n\r\nMusyawarah semakin hidup pada sesi pandangan umum / tanggapan terhadap laporan pertanggungjawaban pengurus karena peserta banyak mengajukan pertanyaan dan kritikan namun pengurus pun gembira setelah pimpinan sidang mengetuk palu tanda diterimanya LPJ oleh musyawirin dan dinyatakan domisioner.<br><br>\r\n\r\nSelain menghasilkan program kerja dan anggaran musyawarah juga menetapkan calon ketua DPK SEPMI periode 2019/2020 diantaranya Nurussyamchi Harbiya ( kelas 8 ), Nahnu Hasbuna( kelas 8 ) dan Salwa Nadya Azzahra ( kelas 7 ) yang akan dipilih oleh seluruh siswa-siswi MTs.Syarikat Islam 3 pada hari Jum\'at tanggal 20 Desember 2019.<br>', 'admin WEB', '2023-05-31', 'IMG_20191218_0930381.jpg'),
(9, 'kelulusan', 2, 'Kegiatan Sekolah', 'contoh isi berita mts SI', 'admin WEB', '2023-06-01', 'IMG_20191218_09303811.jpg'),
(12, 'DPK SEPMI MTs. Syarikat Islam 3 Selenggarakan Basic Leadership Training', 2, '', 'sdvadfbdfbdfrgnrns', 'admin WEB', '2023-06-08', 'Upcara-SMAN-12-Kab-Tangerang-2020-1920x900px-1.jpg'),
(14, 'Tahun 2021, Ujian Nasional Diganti Asesmen Kompetensi dan Survei Karakter', 3, '', 'Jakarta, Kemendikbud --- Menteri Pendidikan dan Kebudayaan (Mendikbud) Nadiem Makarim mengatakan, tahun 2020 akan menjadi tahun terakhir pelaksanaan ujian nasional (UN). UN pada tahun 2021 akan diganti dengan Asesmen Kompetensi Minimum dan Survei Karakter. Asesmen tersebut tidak dilakukan berdasarkan mata pelajaran atau penguasaan materi kurikulum seperti yang selama ini diterapkan dalam ujian nasional, melainkan melakukan pemetaan terhadap dua kompetensi minimum siswa, yakni dalam hal literasi dan numerasi. <br><br>\r\n\r\n\"Literasi di sini bukan hanya kemampuan membaca, tetapi kemampuan menganalisis suatu bacaan, dan memahami konsep di balik tulisan tersebut. Sedangkan kompetensi numerasi berarti kemampuan menganalisis menggunakan angka. Dua hal ini yang akan menyederhanakan asesmen kompetensi minimum yang akan dimulai tahun 2021. Jadi bukan berdasarkan mata pelajaran dan penguasaan materi. Ini kompetensi minimum atau kompetensi dasar yang dibutuhkan murid-murid untuk bisa belajar,\" tutur Mendikbud dalam Rapat Koordinasi Mendikbud dengan Kepala Dinas Pendidikan se-Indonesia di Jakarta, Rabu (11/12/2019).<br><br>\r\n\r\nSementara terkait survei karakter, lanjut Mendikbud, dilakukan untuk mengetahui data secara nasional mengenai penerapan asas-asas Pancasila oleh siswa Indonesia. Menurutnya, selama ini secara nasional data pendidikan yang dimiliki berupa data kognitif. \"Kita tidak mengetahui apakah asas-asas Pancasila benar-benar dirasakan oleh siswa di Indonesia. Kita akan mengadakan survei, misalnya bagaimana implementasi gotong royong, apakah kebahagiaan anak di sekolah sudah mapan. apakah masih ada bullying? Survei ini akan menjadi suatu panduan buat sekolah dan buat kami di Kemendikbud,\" kata Mendikbud.<br><br>\r\n\r\nSurvei karakter tersebut akan dijadikan tolok ukur untuk bisa memberikan umpan balik atau feedback ke sekolah-sekolah agar dapat menciptakan lingkungan sekolah yang membuat siswa lebih bahagia dan lebih kuat dalam memahami dan menerapkan asas pancasila.<br><br>\r\n\r\nWaktu pelaksanaan Asesmen Kompetensi Minimum dan Survei Karakter akan dilakukan di tengah jenjang pendidikan, bukan di akhir jenjang seperti pada pelaksanaan ujian nasional. Mendikbud mengutarakan setidaknya ada dua alasan mengapa pelaksanaannya dilakukan di tengah jenjang.<br>\r\n\"Pertama, kalau dilakukan di tengah jenjang akan bisa memberikan waktu untuk sekolah dan guru dalam melakukan perbaikan sebelum anak lulus di jenjang itu. Kedua, karena dilaksanakan di tengah jenjang, jadi tidak bisa digunakan sebagai alat seleksi siswa, sehingga tidak menimbulkan stres pada anak-anak dan orang tua akibat ujian yang sifatnya formatif,\" ujarnya.<br><br>\r\n\r\nPelaksanaan Asesmen Kompetensi Minimum dan Survei Karakter akan diselenggarakan Kemendikbud bekerja sama dengan organisasi pendidikan baik di dalam negeri maupun di luar negeri seperti OECD (Organisation for Economic Co-operation and Development). Langkah tersebut diambil agar asesmen memiliki kualitas yang baik dan setara dengan kualitas internasional dengan tetap mengutamakan kearifan lokal. \"Kita bergotong royong untuk menciptakan kompetensi lebih baik bagi anak-anak kita,\" tutur Mendikbud.<br><br>\r\n\r\nPerubahan kebijakan ujian nasional yang akan diganti dengan asesmen tersebut dilakukan berdasarkan hasil survei dan diskusi dengan berbagai pemangku kepentingan di bidang pendidikan, antara lain guru, siswa, dan orang tua. Menurut Mendikbud, selama ini materi ujian nasional terlalu padat sehingga fokus siswa cenderung menghafal materi dan bukan pada kompetensi belajar. Hal ini menimbulkan beban stres pada siswa, guru, maupun orang tua, karena ujian nasional justru menjadi indikator keberhasilan belajar siswa sebagai individu.<br><br>\r\n\r\n\"Padahal tujuan UN adalah untuk melakukan asesmen terhadap sistem pendidikan secara nasional. Jadi UN selama ini hanya menilai satu aspek, yaitu kognitif saja, bahkan tidak semua aspek kognitif dites. UN lebih ke penguasaan materi, belum menyentuh karakter siswa lebih holistik,\" ujar Mendikbud. Ia menambahkan, secara nasional, pendidikan memang membutuhkan tolok ukur. Tapi apa yang diukur dan siapa yang diukur itulah yang akan diubah melalui pelaksanaan Asesmen Kompetensi Minimum dan Survei Karakter. (Desliana Maulipaksi)<br><br>\r\n\r\nSumber :Penulis : pengelola web kemdikbud\r\nhttps://www.kemdikbud.go.id/main/blog/2019/12/tahun-2021-ujian-nasional-diganti-asesmen-kompetensi-dan-survei-karakter', 'admin web', '2023-09-24', 'nadhiem_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `judul`, `deskripsi`, `status`, `gambar`) VALUES
(2, 'upacara bendera', 'upacara hari senin', 'aktif', '20210328140817_IMG_24001.jpg'),
(3, 'Sejarah Syarikat Islam Indonesia', 'upacara hari senin', 'aktif', 'IMG_3862.JPG'),
(4, 'Sejarah Syarikat Islam Indonesia', 'upacara hari senin', 'aktif', 'IMG_57431.JPG'),
(5, 'LDK SEPMI', 'asvasvadfv', 'aktif', 'IMG_20220618_105259.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_berita`
--

CREATE TABLE `tb_kategori_berita` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kategori_berita`
--

INSERT INTO `tb_kategori_berita` (`id_kategori`, `kategori`, `keterangan`) VALUES
(1, 'Prestasi', 'Info seputar Prestasi MTS Syarikat Islam 3 Cicurug'),
(2, 'Kegiatan Sekolah', 'kegiatan sekolah meliputi segala hal aktifitas sekolah seperti kegiatan ekstrakulikuler atau kegiatan osis'),
(3, 'Informasi', 'mengenai informasi yang membahas segala hal yang berkaitan dengan kegiatan belajar mengajar'),
(4, 'Bahasa Indonesia', ''),
(5, 'Buku Digital', ''),
(6, 'Chat Me', ''),
(7, 'Download', ''),
(8, 'Galeri', ''),
(9, 'Guru', ''),
(10, 'IPA', ''),
(11, 'IPS', ''),
(12, 'Kegiatan Siswa', ''),
(13, 'Khazanah Islam', ''),
(14, 'Matematika', ''),
(15, 'MPSII', ''),
(16, 'Opini', ''),
(17, 'Panduan', ''),
(18, 'Perangkat MTs', ''),
(19, 'PPKn', ''),
(20, 'Regulasi', ''),
(21, 'Siswa', ''),
(22, 'Video', ''),
(24, 'Link', 'berisikan link-link apa saja');

-- --------------------------------------------------------

--
-- Table structure for table `tb_link`
--

CREATE TABLE `tb_link` (
  `id_link` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_link` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_link`
--

INSERT INTO `tb_link` (`id_link`, `id_kategori`, `judul_link`, `deskripsi`, `link`) VALUES
(1, 22, 'sejarah Syarikat Islam', 'Perkumpulan Syarikat Islam Indonesia adalah perkumpulan yang sah secara de fakto dan yuridis warisan dari pada Syarikat Dagang Islam / Syarikat Islam , singkatnya perkumpulan Syarikat Islam Indonesia kelanjutan dari Syarikat Dagang Islam yang didirikan pa', 'https://www.youtube.com/watch?v=zR_mUI7grUQ'),
(2, 24, 'ayo madrasah', 'website ayo madrasah', 'https://www.ayomadrasah.id/'),
(3, 24, 'Abdi Madrasah', 'Tautan Abdi madrasah', 'https://www.abdimadrasah.com/'),
(4, 22, 'Mars Syarikat Islam Indonesia', 'Mars Syarikat islam Indonesia', 'https://www.youtube.com/watch?v=a1EhZZu6jLs');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin_web', 'admin123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_kategori_berita`
--
ALTER TABLE `tb_kategori_berita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_link`
--
ALTER TABLE `tb_link`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kategori_berita`
--
ALTER TABLE `tb_kategori_berita`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_link`
--
ALTER TABLE `tb_link`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
