-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2020 pada 07.10
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin-klinik', 'admin-klinik123', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `isi`, `tanggal`) VALUES
(22, 'virus-4835301_960_720.jpg', 'Mengenal Apa Itu Virus Corona dan Gejalanya !', '<p>Gejala COVID-19 yang paling umum adalah demam, kelelahan, dan batuk kering. Beberapa pasien mungkin mengalami sakit dan nyeri, hidung tersumbat, pilek, sakit tenggorokan atau diare. Gejala-gejala ini bersifat ringan dan terjadi secara bertahap.Namun, beberapa orang yang terinfeksi tetapi tidak menunjukkan gejala apa pun dan tak merasa tidak enak badan. Kebanyakan orang (sekitar 80%) pulih dari penyakit tanpa perlu perawatan khusus. Sekitar 1 dari setiap 6 orang yang mendapatkan COVID-19 sakit parah dan mengalami kesulitan bernapas.</p><p>Orang yang lebih tua, dan mereka yang memiliki masalah medis seperti tekanan darah tinggi, masalah jantung atau diabetes, lebih mungkin terkena penyakit serius. Orang dengan demam, batuk dan kesulitan bernapas harus mendapat perhatian medis.Menurut WHO, virus corona COVID-19 menyebar orang ke orang melalui tetesan kecil dari hidung atau mulut yang menyebar ketika seseorang batuk atau menghembuskan nafas. Tetesan ini kemudian jatuh ke benda yang disentuh oleh orang lain.Orang tersebut kemudian menyentuh mata, hidung, atau mulut. Berdasarkan studi yang ada saat ini belum ditemukan penyebaranCOVID-19 melalui udara bebas.</p><p>Sumber : cnbcindonesia.com.</p>', '2020-04-07'),
(24, '287191295.jpg', 'Kenali Gejala Orang Yang Terinfeksi Virus Covid-19', '<p>Gejala yang terjadi di minggu pertama biasanya ringan. Berikut ini adalah gejala COVID-19 yang biasanya muncul di minggu pertama:</p><p>1.Demam â‰¥380 C</p><p>2.Kelelahan atau lemas</p><p>3.Batuk tidak berdahak</p><p>4.Pegal-pegal</p><p>5.Tidak nafsu makan</p><p>6.Sesak napas bisa saja muncul di akhir minggu pertama, tetapi umumnya sesak napas mulai dirasakan mengganggu di minggu kedua.</p><p>Karena sama-sama disebabkan oleh virus yang menyerang saluran pernapasan, gejala awal COVID-19 juga bisa mirip dengan flu biasa, yaitu pilek, hidung tersumbat, sakit kepala, dan sakit tenggorokan.</p><p>Beberapa gejala awal lainnya yang mungkin dirasakan oleh penderita COVID-19 meliputi rasa tidak nyaman di perut, mual, dan diare, namun gejala ini tidak khas dan jarang terjadi.</p><p>Sumber : alodokter.com</p>', '2020-04-07'),
(25, '5e5733fd739de-wanita-pakai-masker_665_374.jpg', '5 Cara Sederhana Mencegah Virus Corona !', '<p>Menerapkan tindakan pencegahan dengan semaksimal mungkin adalah salah satu hal yang wajib dilakukan. Berikut merupakan 5 cara sederhana yang dapat Anda lakukan di rumah. Artikel ini disadur dari Merdeka.com.</p><p>1. Cuci Tangan</p><p>Tindakan pertama yang dapat dilakukan untuk menangkal virus corona adalah dengan rajin mencuci tangan. Sebab, tangan adalah salah satu anggota tubuh yang menjadi sumber penyakit.Cuci tangan dengan durasi minimal 20 detik untuk membunuh virus corona menggunakan sabun dan air bersih yang mengalir. Setelah itu, keringkan tangan menggunakan kain yang bersih atau tisu.Tindakan pencegahan yang satu ini dianggap lebih efektif untuk membunuh kuman, bakteri, termasuk virus corona. Cuci tangan merupakan langkah yang disarankan oleh banyak pihak, termasuk Organisasi Kesehatan Dunia.</p><p>2. Hindari Sentuh Wajah</p><p>Telah diketahui bahwa tangan dapat menjadi sumber penyakit sebab sering terjadi kontak dengan benda maupun orang lain. Sementara itu, virus corona disinyalir dapat masuk tubuh manusia melalui segitiga wajah yakni mata, hidung, dan mulut.Maka dari itu, hindari untuk menyentuh wajah menggunakan tangan. Apabila terpaksa harus menyentuh wajah, maka pastikan untuk mencuci tangan terlebih dahulu dengan sabun.</p><p>3. Etika Bersin dan Batuk</p><p>Terapkan etika bersin dan batuk dengan benar menggunakan siku tangan bagian dalam atau tisu bersih. Sebab, cairan yang diproduksi pada saat batuk dan bersin tersebut dapat menjadi media penularan virus corona.Apabila Anda menggunakan tisu, maka segera buang ke tempat sampah dan cuci tangan menggunakan sabun hingga bersih dan kering kembali.</p><p>4. Memakai Masker</p><p>Virus corona tidak menyebar melalui udara. Namun, penggunaan masker dapat meminimalisir penularan virus corona. Sebab, virus corona dapat menyebar melalui droplets dan dapat masuk ke dalam tubuh melalui selaput lender seperti mata, mulut, dan hidung.Masker juga dapat digunakan ketika seseorang dalam kondisi yang kurang sehat. Hindari untuk menggunakan satu masker secara berulang-ulang. Sebab, masker dapat mengandung berbagai jenis kuman, bakteri, dan virus setelah dipakai.</p><p>5. Hindari Interaksi Langsung</p><p>Cara sederhana guna menangkal virus corona yang kelima adalah hindari interaksi secara langsung seperti berpelukan, berjabat tangan, dan lain sebagainya.Dengan menghindari kontak kulit dengan orang lain, maka Anda dapat mengurangi penyebaran virus corona.</p><p>Sumber : liputan6.com</p>', '2020-04-07'),
(26, 'olahraga22.jpg', '5 Olahraga Yang Dapat Dilakukan Dirumah !', '<p>Mengingat adanya imbauan melakukan social distancing serta untuk berdiam di rumah, berikut macam-macam olahraga apa yang bisa dilakukan di rumah masing-masing selama menjalani masa karantina mandiri di tengah pandemi virus corona:</p><p>1.Yoga</p><p>Untuk menghindari risiko cedera karena tak ada pelatih yang mengawasi, kita tak perlu melakukan gerakan yang rumit. Cukup lakukan beberapa gerakan yoga simpel yang sudah dipelajari sendiri.Melakukan yoga sederhana juga salah satu solusi untuk tetap sehat. Anda bisa mencoba beberapa gerakan sederhana di rumah seperti, tree pose, cat-cow, dan mountain pose.Peneliti dari Texas State University, Stacy Hunter, juga mengatakan kita setidaknya bisa melakukan pranayama atau teknik pernapasan yoga simpel. Olahraga ini dapat meregangkan otot dan membakar kalori untuk mengurangi berat tubuh.</p><p>2.Aerobik atau Zumba</p><p>Olahraga seperti zumba atau aerobik memang lebih menyenangkan kalau dilakukan beramai-ramai. Namun, bukan berarti dua olahraga ini tak bisa dilakukan di rumah, apalagi di saat melakukan karantina mandiri.Agar tetap menyenangkan dan semangat, putar lagu dan panduan aerobik atau zumba di televisi atau ponsel Anda untuk memberikan suasana yang mirip dengan di tempat latihan. Lakukan kurang lebih selama 30 menit tiap sore hari untuk mendapatkan hasil olahraga yang maksimal.</p><p>3.Skipping</p><p>Olahraga yang satu ini bisa jadi solusi bagi Anda yang ingin sesuatu yang mudah dan simpel. Skipping atau lompat tali bisa dilakukan di dalam rumah dan tetap bisa membuat Anda berkeringat dan meregangkan otot.Lakukan olahraga ini setelah melakukan peregangan. Jika kuat, Anda bisa melakukannya 15 sampai 20 menit per hari.</p><p>4.Olahraga Kardio</p><p>Olahraga kardio efektif untuk menurunkan berat badan, menjaga sistem kekebalan tubuh, dan melindungi jantung dari ragam gangguan. Olahraga ini bisa dilakukan di rumah tanpa peralatan.Beberapa gerakan yang bisa dicoba seperti, high knees yaitu gerakan yang dilakukan dengan menggerakan otot utama pada bagian paha dan betis pada kecepatan tertentu. Lalu, ada burpee, yaitu olah gerak keseluruhan tubuh.Burpee terdiri dari gerak jongkok (squat), tendang kedua kaki ke belakang (kick feet back), push-up, kembali melakukan squat (ke posisi jongkok) dan terakhir berdiri sambil berloncat.Kalau lima gerakan ini dilakukan dengan benar, seluruh tubuh akan bergerak dan esensi olahraga benar-benar dilakukan.</p><p>5.Menari</p><p>Kalau Anda bosan atau kurang sreg dngan melakukan beberapa olahraga di atas, Anda bisa mencoba menari. Cukup putar musik favorit sebagai pengiring gerakan-gerakan Anda sendiri. Menari bisa jadi solusi lain untuk tetap bergerak dan hidup sehat saat berada di rumah.</p><p>Sumber : liputan6.com</p>', '2020-04-07'),
(27, 'shutterstock_127542449.jpg', 'Makanan Sehat Dikala Pandemi Virus Covid-19', '<p>1.Sayur Bayam<p></p>Makanan sehat yang bisa mencegah penularan virus corona yang pertama ada sayur bayam. Sayuran yang identik dengan serial kartun Popeye ini mengandung sejumlah vitamin yang bagus bagi tubuh. Selain itu, sayur bayam juga mengandung antioksidan dan beta karoten yang cukup tinggi. Kedua kandungan itu mampu membantu tubuh dalam melawan infeksi pada sistem kekebalan tubuh dan melawan virus jahat.</p><p>2.Sayur Brokoli<p></p>Kemudian ada brokoli sebagai makanan sehat yang bisa mencegah penularan virus corona. Hal ini karena sayur brokoli mengandung vitamin A, C, dan E yang cukup tinggi. Tak hanya itu, brokoli juga mengandung mineral dan antioksidan yang tak kalah tingginya. Tidak mengherankan, sayur brokoli dipercaya mampu melawan sumber penyakit.</p><p>3.Bawang Putih<p></p>Makanan sehat yang bisa mencegah virus corona selanjutnya adalah bawang putih. Si kecil berbau ini rupanya mampu membantu mencegah sistem kekebalan tubuh. Selain itu, bawang putih juga bagus untuk menurunkan tekanan darah dan memperlambat pengerasan pembuluh darah.</p><p>4.Jahe<p></p>Siapa sangka, rempah-rempah seperti jahe merupakan makanan sehat yang bisa mencegah penularan virus corona. Telah lama dipercaya bila jahe memiliki kandungan yang bisa membantu mengurangi peradangan dalam tubuh.Seorang peneliti dari Universitas Airlangga (Unair) Surabaya, Chairul Anwar Nidom, bahkan mengatakan jika jahe menjadi salah satu makanan yang ampuh menangkal virus corona. Sebab, kandungan curcumin dalam jahe dipercaya mampu menangkal virus corona.</p><p>5.Ikan Berlemak<p></p>Terakhir ada ikan berlemak yang bisa mencegah virus corona masuk ke dalam tubuh. Sudah menjadi rahasia umum, ikan berlemak lebih bermanfaat dibanding lemak pada hewan lainnya. Siapa sangka, nutrisi pada ikan berlemak sangat baik bagi tubuh dalam melawan penyakit.</p><p>Sumber : Merdeka.com</p>', '2020-04-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `gambar`, `nama`, `spesialis`, `alamat`, `jenis_kelamin`) VALUES
(1, '2.png', 'Peter Jamerson', 'Dentist', 'Denpasar, Bali, Indonesia', 'Laki-Laki'),
(2, '3.png', 'Michael Miller', 'Dentist', 'Denpasar, Bali, Indonesia', 'Laki-Laki'),
(3, '4.png', 'Rhodney Jhonson', 'ENT', 'Denpasar, Bali, Indonesia', 'Laki-Laki'),
(5, '5.png', 'Jason Clark', 'Orthopaedic', 'Denpasar, Bali, Indonesia', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
