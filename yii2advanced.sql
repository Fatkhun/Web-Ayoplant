-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 05:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2advanced`
--

-- --------------------------------------------------------

--
-- Table structure for table `encyclopedia`
--

CREATE TABLE `encyclopedia` (
  `id_pedia` int(11) NOT NULL,
  `name_pedia` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `article` text NOT NULL,
  `ph_pedia` float NOT NULL,
  `temp_pedia` float NOT NULL,
  `gbr_ency` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `encyclopedia`
--

INSERT INTO `encyclopedia` (`id_pedia`, `name_pedia`, `category`, `article`, `ph_pedia`, `temp_pedia`, `gbr_ency`) VALUES
(4, 'Anggrek Bulan', 'Anggrek', '<p>Anggrek Bulan (Phalaenopsis amabilis) atau puspa pesona adalah salah satu bunga nasional Indonesia. Pertama kali ditemukan oleh seorang ahli botani Belanda, Dr. C.L. Blume. Tanaman anggrek ini tersebar luas mulai dari Malaysia, Indonesia, Filipina, Papua, hingga ke Australia. Cara hidupnya secara epifit dengan menempel pada batang atau cabang pohon di hutan-hutan dan tumbuh subur hingga 600 meter di atas permukaan laut. Anggrek bulan termasuk dalam tanaman anggrek monopodial yang menyukai sedikit cahaya matahari sebagai penunjang hidupnya. Daunnya berwarna hijau dengan bentuk memanjang. Akar-akarnya berwarna putih dan berbentuk bulat memanjang serta terasa berdaging. Bunganya memiliki sedikit keharuman dan waktu mekar yang lama serta dapat tumbuh hingga diameter 10 cm lebih.</p>\r\n\r\n<p>Berikut ini beberapa tips tentang cara merawat anggrek bulan yang tepat.</p>\r\n\r\n<p>1. Sinar Matahari Sinar penuh tidak terlalu dibutuhkan untuk anggrek bulan. Terlalu banyak sinar matahari justru akan menghambat pertumbuhan anggrek bulan Anda. Untuk mengetahui apakah anggrek bulan Anda mendapatkan sinar matahari yang cukup, dapat dilihat dari warna daunnya. Jika daunnya berwarna hijau cerah, berarti tanaman Anda sudah mendapatkan sinar matahari yang cukup. Jika warnanya hijau pucat agak kekuningan, berarti tanaman Anda kurang mendapat sinar matahari. Sebaliknya jika tanaman Anda mendapat sinar matahari terlalu banyak, daunnya akan berwarna kecoklatan karena terbakar.</p>\r\n\r\n<p>2. Suhu Udara Di siang hari, anggrek bulan membutuhkan temperature ideal 30 derajat celcius, sedangkan malamnya membutuhkan 23 derajat celcius. Di daerah tropis, suhu tersebut adalah suhu normal rata &ndash; rata. Jadi, mestinya hal ini tidak akan merepotkan Anda.</p>\r\n\r\n<p>3. Sirkulasi udara Sirkulasi udara yang sangat dibutuhkan adalah ketika hembusan angin yang cukup baik untuk pertumbuhannya. Semakin baik sirkulasi udaranya semakin bagus pula pertumbuhannya pada tanaman anggrek bulan. Untuk itu, pastikan Anda tidak terlalu sering meletakkannya di ruangan tertutup.</p>\r\n\r\n<p>4. Kelembaban Udara Tingkat kelembaban udara yang ideal untuk bunga anggrek bulan adalah 70%. Jika udaranya terlalu lembab, bunga anggrek bulan akan ditumbuhi jamur dan cenderung cepat layu.</p>\r\n\r\n<p>5. Penyiraman Bunga anggrek bulan perlu disiram 2 kali sehari. Waktu terbaik untuk penyiraman adalah pukul 07.00 &ndash; 09.00 pagi dan pukul 16.00 &ndash; 18.00 sore. Jika cuaca sedang sangat panas, maka penyiraman perlu dilakukan hingga 3 kali sehari. Penyiraman yang terbaik adalah dengan menyemprotkan air ke dekat bagian akar bunga. Gunakan air yang bersih dan hindari penggunaan obat &ndash; obatan kimiawi sebagai campuran airnya.</p>\r\n\r\n<p>6. Insektisida Insektisida perlu dilakukan sesekali pada bunga anggrek untuk mecegah hama dan berbagai penyakit tanaman. Usahakan memilih insektisida alami.</p>\r\n', 7, 30, ''),
(5, 'Anggrek Hitam', 'Anggrek', '<p>Anggrek hitam (Coelogyne pandurata) adalah spesies anggrek yang tumbuh di Semenanjung Malaya, Kalimantan, dan Sumatera. Anggrek hitam adalah maskot flora provinsi Kalimantan Timur. Saat ini, habitat asli anggrek hitam mengalami penurunan jumlah yang cukup besar karena semakin menyusutnya luas hutan di Kalimantan namun masih bisa ditemukan di cagar alam Kersik Luway dalam jumlah yang sedikit. Diperkirakan jumlah yang lebih banyak berada di tangan para kolektor anggrek. Dinamakan anggrek hitam karena anggrek ini memiliki lidah (labellum) berwarna hitam dengan sedikit garis-garis berwarna hijau dan berbulu. Sepal dan petal berwarna hijau muda. Bunganya cukup harum semerbak dan biasa mekar pada bulan Maret hingga Juni. Anggrek hitam termasuk dalam anggrek golongan simpodial dengan bentuk bulb membengkak pada bagian bawah dan daun terjulur di atasnya. Setiap bulb hanya memiliki dua lembar daun saja. Daunnya sendiri sekilas mirip seperti daun pada tunas kelapa muda.</p>\r\n\r\n<p>Langkah Menjaga Anggrek Hitam :</p>\r\n\r\n<p>1. Meletakkan Bunga Anggrek dengan Paparan Cahaya Matahari Satu diantara langkah menjaga anggrek hitam yaitu dengan meletakkan bunga anggrek terserang pancaran cahaya matahari yang cukup. Cahaya matahari begitu bertindak utama dalam sistem fotosintesis pada tanaman. Tetapi dalam soal ini yang butuh Anda cermati yaitu upayakan janganlah sangat terkena cahaya matahari dengan cara segera. Lantaran bila terserang cahaya matahari dengan cara segera bisa mengakibatkan bunga alami cepat layu.</p>\r\n\r\n<p>2. Memberi Pencahayaan Lampu Ruang Untuk poin yang satu ini lebih ditujukan untuk seorang yang menanam bunga anggrek hitam didalam ruang. Seperti pada kajian diatas kalau bunga memerlukan sinar supaya tetaplah hidup, biasanya tumbuhan bila kekurangan sinar malah jadi layu. Berikut yang butuh di perhatikan bila menanam bunga anggrek hitam didalam ruang. Oleh karenanya baiknya saat menanam bunga didalam ruang, alangkah sebaiknya untuk memberi penerangan berbentuk lampu sebagai ubah cahaya matahari supaya tak kekurangan sinar. Sesekali bawalah anggrek keluar supaya dapat memperoleh cahaya matahari, anggrek tumbuh baik apabila memperoleh cahaya matahari tetapi tidaklah terlalu panas. Baiknya letakkan anggrek di pojok yang cukup terserang cahaya matahari tetapi tak segera.</p>\r\n\r\n<p>3. Memberinya Pupuk Sebagai satu diantara type tanaman, bunga anggrek hitam juga membutuhkan pupuk supaya tetaplah hidup. Anda bisa memakai pupuk spesial untuk bunga anggrek atau dapat juga memakai pupuk yang lebih dikhususkan untuk tanaman tropis.</p>\r\n\r\n<p>4. Melindungi Anggrek supaya Tetaplah Lembab Sebagai satu diantara tanaman tropis, bunga anggrek bukan sekedar membutuhkan sinar yang cukup namun juga membutuhkan kelembaban yang cukup. Upayakan supaya bunga anggrek hitam terbangun kelembabannya.</p>\r\n\r\n<p>5. Menyiram Bunga Anggrek Untuk menyiram bunga anggrek muda, baiknya dikerjakan sekitaran 2 x dalam sehari yakni saat pagi hari serta sore hari. Sedang untuk anggrek dewasa baiknya dikerjakan penyiraman sejumlah satu kali dalam satu hari saat pagi hari. Penyiraman sendiri bisa dikerjakan dengan memakai air umum atau memakai air sisa cucian beras. Biasanya air cucian beras begitu baik untuk tumbuhan termasuk juga untuk anggrek hitam.</p>\r\n\r\n<p>6. Memerhatikan Media Tanam Media tanam anggrek hitam juga butuh di perhatikan contoh saja seperti sabut kelapa, pakis, atau sebuk gergaji. Untuk media tanam yang terbagus, jadi Anda dapat memakai media serbuk gergaji. Media tanam serbuk gergaji mempunyai karakter yang nyaris sama juga dengan media asli dari anggrek hitam. Untuk membuatnya sebagai media tanam, baiknya serbuk gergaji di rendam terlebih dulu sepanjang 24 jam. Ini bermanfaat untuk menyingkirkan getah yang sangat mungkin melekat. Janganlah lupa juga untuk memberi fungisida untuk menghindari jamur.</p>\r\n', 7, 30, ''),
(6, 'Anggrek Tebu', 'Anggrek', '<p>Anggrek merupakan tanaman hias yang paling digemari oleh para wanita khususnya, selain dari pada indahnya untuk dijadikan hiasan, langkanya bunga ini juga menjadi daya tarik para pecinta tanaman hias. Bunga Anggrek yang hidup di udara tropis ini bermacam-macam jenisnya salah satunya adalah bunga anggrek tebu yang langka. Bunga anggrek tebu atau Grammatophyllum Speciosum merupakan bunga anggrek terbesar dan terberat diantara jenis anggrek lainnya. Bentuknya seperti pohon tebu inilah alasan disebut dengan anggrek tebu. Selain jenisnya yang langka, warna dan bentuknya juga menjadi daya tarik dari anggrek tebu ini.</p>\r\n\r\n<p>Bagi anda yang telah memilikinya dan ingin mengetahui cara yang tepat dalam merawatnya, berikut cara merawat bunga anggrek tebu :</p>\r\n\r\n<p>1. Karena anggrek merupakan tanaman epifit yang hidup di hutan tropis dan menopang pada pohon yang besar. Yang biasanya tidak terkena matahari langsung karena tertutup oleh ranting pohon yang besar. Tetapi, tetap membutuhkan matahari. Jadi anda dapat memberikan sedikit panas matahari dari jam 7 sampai dengan 9 pagi. Ingat, tidak terhampar langsung dengan matahari.</p>\r\n\r\n<p>2. Diperhatikan media tanam dari bunga ini, jangan terlalu basah karena akan mengakibatkan layunya bunga anggrek. Perhatikan juga suhu dari bunga anggrek yang mencapai 15-35o C. Media tanam yang baik untuk anggrek ini berupa media yang tidak cepat lapuk dan berongga agar dapat mengalirkan udara dan dapat menyimpan zat hara.</p>\r\n\r\n<p>3. Lakukan penyiraman rutin pada daun bunga anggrek yang dilakukan pagi dan sore dengan menggunakan spray.</p>\r\n\r\n<p>4. Pemupukan adalah hal terpenting dalam merawat tanaman hias, gunakan pupuk cair (pupuk daun). Gunakanlah pot plastic yang transparan, agar anda dapat terus mengawasi kelembapan pada akar bunga anggrek. Karena jika akar dari bunga anggrek terlalu lembab dapat berakibat tidak tumbuhnya anggrek.</p>\r\n', 7, 30, ''),
(7, 'Jambu Biji', 'Jambu', '<p>Jambu batu (Psidium guajava) atau sering juga disebut jambu biji, jambu siki dan jambu klutuk adalah tanaman tropis yang berasal dari Brasil, disebarkan ke Indonesia melalui Thailand. Jambu batu memiliki buah yang berwarna hijau dengan daging buah berwarna putih atau merah dan berasa asam-manis. Buah jambu batu dikenal mengandung banyak vitamin C. Iklim Yang Cocok untuk budidaya jambu biji :</p>\r\n\r\n<p>1. Dalam budidaya tanaman jambu biji / jambu air angin berperan dlm penyerbukan, namun angin yg kencang dapat menyebabkan kerontokan pada bunga.</p>\r\n\r\n<p>2. Tanaman jambu biji merupakan tanaman daerah tropis &amp; dapat tumbuh di daerah sub-tropis dengan intensitas curah hujan yg diperlukan berkisar antara 1000-2000 mm/tahun &amp; merata sepanjang tahun.</p>\r\n\r\n<p>3. Tanaman jambu biji dapat tumbuh berkembang serta berbuah dengan optimal pada suhu sekitar 23-28 derajat C di siang hari. Kekurangan sinar matahari dapat menyebabkan penurunan hasil atau kurang sempurna (kerdil), yg ideal musim berbunga &amp; berbuah pada waktu musim kemarau yaitu sekitar bulan Juli-September sedang musim buahnya terjadi bulan Nopember-Februari bersamaan musim penghujan.</p>\r\n\r\n<p>4. Kelembaban udara sekeliling cenderung rendah karena kebanyakan tumbuh di dataran rendah &amp; sedang. Apabila udara mempunyai kelembaban yg rendah, berarti udara kering karena miskin uap air. Kondisi demikian cocok utk pertumbuhan tanaman jambu biji.</p>\r\n', 7, 31, ''),
(8, 'Jambu Bol', 'Jambu', '<p><span style=\"font-size:12px\">Jambu bol atau dikenal juga dengan nama jambu dersana merupakan tanaman buah yang bersifat tahunan dan aslinya berasal dari kawasan Indo-Cina, Malaysia, Filipina dan Indonesia. Beberapa literatur lain menjelaskan bahwa jambu bol merupakan buah yang berasal dari Malaysia. Di Indonesia, penyebaran jambu bol terkonsentrasi di daerah Pulau Jawa. Beberapa nama daerah jambu bol yang populer adalah jambu ripu (Aceh), dharsana (Madura), jambu bol (Sunda, batak, lampung), myambu bol (Bali), jambu bo (Minangkabau), jambu boa (Jambi) dan maufa (Nias).</span></p>\r\n\r\n<p><span style=\"font-size:12px\">Syarat pertumbuhan dari tanaman buah jambu bol Jamaika adalah sebagai berikut :</span></p>\r\n\r\n<p><span style=\"font-size:12px\">1). Perhatikan iklim dimana anda akan menanam jambu bol Jamaika secara komersil sebagai bisnis UKM bagi petani buah besar. Tanaman buah jambu bol Jamaika dapat tumbuh dengan sehat apabila ditanam pada daerah yang mempunyai curah hujan sekitar 500 &ndash; 3000 mm / tahun.</span></p>\r\n\r\n<p><span style=\"font-size:12px\">2). Dalam masa &ndash; masa pertumbuhannya, tanaman buah jambu bol Jamaika membutuhkan intensitas cahaya matahari sebesar 40 &ndash; 80%.</span></p>\r\n\r\n<p><span style=\"font-size:12px\">3). Perhatikan temperatur yang ideal untuk pertumbuhan tanaman jambu bol Jamaika adalah kisaran 18 &ndash; 28 derajat celcius.</span></p>\r\n\r\n<p><span style=\"font-size:12px\">4). Jaga kelembaban udara antara 50 &ndash; 80%.</span></p>\r\n\r\n<p><span style=\"font-size:12px\">5). Perhatikan media tanam dari lahan yang akan anda garap, tanah yang cocok adalah tanah yang subur, gembur, dan banyak mengandung bahan &ndash; bahan organik. Kondisi tanah inseptisol sangat baik, sedangkan tanah yang kurang terlalu subur seperti ultisol dan oksisol atau bersifat podsolik merah kuning masih baik untuk budidaya buah jambu bol Jamaika setelah diberi pupuk dan kapur. Tanah dengan tingkat keasaman (pH) antara 5,5 &ndash; 7,5 adalah sangat cocok untuk pertumbuhannya.</span></p>\r\n\r\n<p><span style=\"font-size:12px\">6). Jaga ketinggian tempat. Tanaman jambu bol Jamaika haruslah mempunyai daya adaptasi yang besar di lingkungan tropis dari dataran rendah sampai tinggi yang mencapai ketinggian sekitar 1200 m dpl.</span></p>\r\n', 7, 30, ''),
(41, 'Anggur Merah', 'Anggur', '<p>ANgguh adalah dnsjndjksnd</p>\r\n', 7, 30.2, 'buah.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m171223_211004_init', 1514063420),
('m171223_211031_profile', 1514063446);

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `id_plant` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `ph` float DEFAULT NULL,
  `temp` float DEFAULT NULL,
  `gbr_plant` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`id_plant`, `name`, `type`, `ph`, `temp`, `gbr_plant`) VALUES
(5, 'Mawar', 'Mawar merah', 7, 30, ''),
(6, 'Anggrek', 'Anggrek Putih', 8, 30, ''),
(7, 'Jambu', 'Jambu Biji', 7.5, 30.5, ''),
(8, 'Anggrek', 'Anggrek Merah', 7.5, 29, ''),
(9, 'Jambu', 'Jambu Air', 7.7, 31, 'alam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `place_of_birth` text NOT NULL,
  `birthdate` text NOT NULL,
  `gender` text NOT NULL,
  `pic` text NOT NULL,
  `bio` text NOT NULL,
  `job_desc` text NOT NULL,
  `fb` text NOT NULL,
  `ig` text NOT NULL,
  `ln` text NOT NULL,
  `url` text NOT NULL,
  `public_email` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `first_name`, `last_name`, `place_of_birth`, `birthdate`, `gender`, `pic`, `bio`, `job_desc`, `fb`, `ig`, `ln`, `url`, `public_email`, `created_at`, `updated_at`) VALUES
(1, 4, '', '', '', '', '', '', '', '', '#', '#', '#', '#', '', '2017-12-24 15:02:24', '2017-12-24 15:02:24'),
(2, 5, '', '', '', '', '', '', '', '', '#', '#', '#', '#', '', '2017-12-24 16:37:59', '2017-12-24 16:37:59'),
(3, 6, '', '', '', '', '', '', '', '', '#', '#', '#', '#', '', '2017-12-24 17:03:34', '2017-12-24 17:03:34'),
(4, 7, '', '', '', '', '', '', '', '', '#', '#', '#', '#', '', '2017-12-24 17:21:21', '2017-12-24 17:21:21'),
(5, 9, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 10, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 11, '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `id_sensor` int(11) NOT NULL,
  `kode_sensor` int(50) NOT NULL,
  `ph_sensor` float DEFAULT NULL,
  `temp_sensor` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`id_sensor`, `kode_sensor`, `ph_sensor`, `temp_sensor`) VALUES
(321318, 14, 7, 30),
(321319, 15, 8, 30),
(321320, 16, 7.5, 30.5),
(321321, 17, 7.5, 29),
(321322, 18, 7.7, 31);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(7, 'najaa', '9LfWPu0HlqwPTYII1oAMTVWxuPdFlLGH', '$2y$13$Ho2oNHPf2r5oXOLtmoq1ju/IJCjx69Ip.VyXrVT8ED9alfyJevuy2', NULL, 'najaa@gmail.com', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'arsyad', 'L0VlVhj4DzROxQ4w2syPNwF1t_AHU51I', '$2y$13$OuffhsRmMlRnsrsfeWQSTO9tal/va/5Qa6l/yR.DB9MG5F.sjEj0S', NULL, 'arsyad@gmail.com', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'doy', 'KoKeHQs9SPsMPQ6T90PPkfpCkOCnAkKy', '$2y$13$FN7VAkzVbtzKjGMKfJMkiuC14SuNC/2TchJDvbxuVqgIOJbhvNG6i', NULL, 'doy@gmail.com', 10, '2017-12-24 15:34:51', '2017-12-24 15:34:51'),
(11, 'adam', 'abljx7vJ1l2rcR8NMwLgAOisd67Vumgx', '$2y$13$ZwW1Gtqxe54Qw7x/HB0ytujG7GH2R7701sSxJ2u8qhlPgIPjpuQga', NULL, 'adam@gmail.com', 10, '2017-12-24 15:35:57', '2017-12-24 15:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id_user` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `hp` varchar(25) NOT NULL,
  `auth_key` varchar(25) DEFAULT NULL,
  `country` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `gbr_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id_user`, `full_name`, `password`, `email`, `hp`, `auth_key`, `country`, `created_at`, `updated_at`, `gbr_profile`) VALUES
(8, 'Fatkhun', 'mawar', 'mawar@gmail.com', '085732326777', 'c0RbiRZQVDtggDn74x-aSWcsW', 'Indonesia', '2017-12-23 19:09:44', '0000-00-00 00:00:00', 'mfn.jpg'),
(9, 'fatkhun', 'fatkhun', 'fatkhun@gmail.com', '', 'ETP5-6gCaXZ05BbWg-GNauFyp', '', '2017-12-17 03:23:29', '2017-12-17 03:23:29', ''),
(10, 'Najaa', 'mfn123', 'mfn@gmail.com', '', 'UKTKvFs5In-JNYMOHiu_Rnoko', '', '2017-12-20 07:11:40', '2017-12-20 07:11:40', ''),
(11, 'Doy', 'mfn', 'd@gmail.com', '', 'GvTHWPup71jptiEu0FQ9IHOTf', '', '2017-12-20 07:26:38', '2017-12-20 07:26:38', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `encyclopedia`
--
ALTER TABLE `encyclopedia`
  ADD PRIMARY KEY (`id_pedia`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`id_plant`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id_sensor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `encyclopedia`
--
ALTER TABLE `encyclopedia`
  MODIFY `id_pedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `id_plant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id_sensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321323;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
