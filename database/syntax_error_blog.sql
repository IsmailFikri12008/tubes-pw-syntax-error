-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2023 pada 10.59
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syntax_error_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `animes`
--

CREATE TABLE `animes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `episode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rilis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tayang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lisensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demografis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_rekomendasi` tinyint(1) NOT NULL DEFAULT 0,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `animes`
--

INSERT INTO `animes` (`id`, `user_id`, `category_id`, `genre_id`, `judul`, `slug`, `tipe`, `episode`, `status`, `rilis`, `primer`, `tayang`, `produser`, `lisensi`, `studio`, `sumber`, `demografis`, `durasi`, `rating`, `image`, `excerpt`, `sinopsis`, `is_rekomendasi`, `published_at`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 1, 'Spy x Family', 'spy-x-family', 'Tv', '12 Episode', 'Complete', '09 April 2022', 'Spring 2022', 'Sabtu at 23:00 (JST)', 'TV Tokyo, Shogakukan-Shueisha Productions, TOHO animation, Shueisha', 'None found, add some', 'Wit Studio, CloverWorks', 'Manga', 'Shounen', '24 Menit Per Episode', '8.70', 'anime-images/vc7QqMT9jCw4Nruw45oRsfYfRDryKeZRj3bKw1QK.jpg', 'Politisi korup, nasionalis yang hiruk pikuk, dan kekuatan penghasut perang lainnya terus-menerus membahayakan lapisan tipis perdamaian antara negara tetangga Ostania dan Westalis. Terlepas dari plot m...', '<div>Politisi korup, nasionalis yang hiruk pikuk, dan kekuatan penghasut perang lainnya terus-menerus membahayakan lapisan tipis perdamaian antara negara tetangga Ostania dan Westalis. Terlepas dari plot mereka, mata-mata terkenal dan ahli penyamaran \"Twilight\" memenuhi misi berbahaya satu demi satu dengan harapan tidak ada anak yang harus mengalami kengerian perang.<br><br>Di kota Berlint yang ramai di Ostania, Twilight memakai nama samaran \"Loid Forger\", seorang psikiater ternama. Namun, niat sebenarnya adalah untuk mengumpulkan informasi tentang politisi terkemuka Donovan Desmond, yang jarang muncul di depan umum di sekolah putranya: Akademi Eden yang bergengsi. Meminta bantuan pegawai balai kota yang belum menikah Yor Briar untuk bertindak sebagai istrinya dan mengadopsi Anya yatim piatu berusia enam tahun yang penasaran sebagai putrinya, Loid menjalankan rencana induknya. Dia akan mendaftarkan Anya di Akademi Eden, di mana Loid berharap dia akan unggul dan memberinya kesempatan untuk bertemu Donovan tanpa menimbulkan kecurigaan.<br><br>Sayangnya bagi Loid, pria dengan bakatnya pun kesulitan memerankan sosok ayah dan suami yang penyayang. Dan seperti halnya Loid yang menyembunyikan identitas aslinya, Yor—yang merupakan pembunuh bawah tanah yang dikenal sebagai \"Thorn Princess\" dan Anya seorang esper yang bisa membaca pikiran orang—juga tidak punya rencana untuk mengungkapkan rahasia mereka sendiri. Meskipun keluarga sempurna gambar ini dibangun di atas penipuan, para Pemalsu secara bertahap memahami bahwa cinta yang mereka bagi satu sama lain mengalahkan segalanya.</div>', 1, NULL, '2023-01-03 01:29:55', '2023-01-03 01:29:55'),
(3, 1, 4, 4, 'Shingeki no Kyojin: The Final Season Part 2', 'shingeki-no-kyojin-the-final-season-part-2', 'Tv', '12 Episode', 'Complete', '10 Januari 2022', 'Winter 2022', 'Senin at 00:05 (JST)', 'Production I.G, Dentsu, Mainichi Broadcasting System, Pony Canyon, Kodansha, Pony Canyon Enterprise', 'None found, add some', 'MAPPA', 'Manga', 'Shounen', '23 Menit Per Episode', '8.78', 'anime-images/3EnJ3sdVVU4wJYCzkqb6AaLl4XQc1brsqPimbQ8M.jpg', 'Melawan mantan sekutu dan musuhnya, Eren Yeager menjalankan rencana bencana. Di bawah bimbingan Titan Binatang, Zeke, Eren mengambil tindakan ekstrem untuk mengakhiri konflik kuno antara Marley dan El...', '<div>Melawan mantan sekutu dan musuhnya, Eren Yeager menjalankan rencana bencana. Di bawah bimbingan Titan Binatang, Zeke, Eren mengambil tindakan ekstrem untuk mengakhiri konflik kuno antara Marley dan Eldia—tetapi niat sebenarnya tetap menjadi misteri. Menggali jauh ke dalam masa lalu keluarganya, Eren berjuang untuk mengendalikan takdirnya sendiri.<br><br>Sementara itu, negara Marley dan Eldia yang telah lama berseteru memanfaatkan tentara dan Titan dalam perlombaan brutal untuk melenyapkan yang lain. Reiner Braun menggunakan kekuatannya sendiri dalam upaya putus asa untuk menahan kekuatan militer Eren sendiri, dan sesama Tetua anak-anak Falco Grice dan Gabi Braun—berjuang untuk bertahan hidup dalam kekacauan yang sedang berlangsung.<br><br>Di tempat lain, teman masa kecil Eren Mikasa Ackerman dan Armin Arlert tetap dipenjara bersama mantan rekan Survey Corps Eren, semuanya terganggu oleh transformasi mengerikan Eren. Di bawah kepercayaan buta bahwa Eren diam-diam masih menyimpan niat baik, Mikasa dan yang lainnya terlibat dalam upaya untuk menyelamatkan jiwa teman mereka.</div>', 1, NULL, '2023-01-03 01:33:44', '2023-01-03 01:33:44'),
(4, 1, 4, 7, 'Sono Bisque Doll wa Koi wo Suru', 'sono-bisque-doll-wa-koi-wo-suru', 'Tv', '12 Episode', 'Complete', '09 Januari 2022', 'Winter 2022', 'Minggu at 00:00 (JST)', 'Aniplex, Square Enix, Movic, Studio Mausu, Tokyo MX, BS11', 'None found, add some', 'CloverWorks', 'Manga', 'Seinen', '23 Menit Per Episode', '8.28', 'anime-images/eUh1M4NT52K4B8rWynbIfqwbyUuG9E1l3Y8ve5CH.jpg', 'Siswa sekolah menengah Wakana Gojou menghabiskan hari-harinya menyempurnakan seni membuat boneka hina, berharap pada akhirnya mencapai tingkat keahlian kakeknya. Sementara teman-teman remajanya menyib...', '<div>Siswa sekolah menengah Wakana Gojou menghabiskan hari-harinya menyempurnakan seni membuat boneka hina, berharap pada akhirnya mencapai tingkat keahlian kakeknya. Sementara teman-teman remajanya menyibukkan diri dengan budaya pop, Gojou menemukan kebahagiaan dalam menjahit pakaian untuk bonekanya. Meskipun demikian, dia berusaha keras untuk merahasiakan hobi uniknya, karena dia percaya bahwa dia akan diejek jika hal itu terungkap.<br><br>Masukkan Marin Kitagawa, seorang gadis yang luar biasa cantik yang kepercayaan diri dan ketenangannya sangat kontras dengan kelembutan Gojou. Akan bertentangan dengan akal sehat jika Gojou yang tidak punya teman bergaul dengan orang-orang seperti Kitagawa, yang selalu dikelilingi oleh teman-temannya. Namun, hal yang tak terbayangkan terjadi ketika Kitagawa menemukan kehebatan Gojou dengan mesin jahit dan dengan ceria mengakui kepadanya tentang hobinya sendiri: cosplay. Karena keterampilan menjahitnya sangat menyedihkan, dia memutuskan untuk meminta bantuannya.<br><br>Saat Gojou dan Kitagawa bekerja sama dalam satu demi satu pakaian cosplay, mereka tidak bisa tidak menjadi dekat&nbsp; meskipun hidup mereka terpisah jauh.</div>', 0, NULL, '2023-01-03 01:37:36', '2023-01-03 01:37:36'),
(5, 1, 1, 5, 'Chainsaw Man', 'chainsaw-man', 'Tv', '12 Episode', 'On-Going', '12 Oktober 2022', 'Fall 2022', 'Rabu at 00:00 (JST)', 'None found, add some', 'None found, add some', 'MAPPA', 'Manga', 'Shounen', '24 Menit Per Episode', '8.27', 'anime-images/swFne9BUBYiWNFrFWBwsxcVk4gPQWU8leEIzw4Hv.jpg', 'Denji dirampok dari kehidupan remajanya yang normal, tidak memiliki apa-apa selain hutang ayahnya yang sangat besar. Teman satu-satunya adalah hewan peliharaannya, Pochita, iblis gergaji mesin, yang d...', '<div>Denji dirampok dari kehidupan remajanya yang normal, tidak memiliki apa-apa selain hutang ayahnya yang sangat besar. Teman satu-satunya adalah hewan peliharaannya, Pochita, iblis gergaji mesin, yang dengannya dia membunuh iblis demi uang yang pasti berakhir di saku yakuza. Yang bisa dilakukan Denji hanyalah memimpikan kehidupan yang baik dan sederhana: hidup dengan makanan enak dan pacar cantik di sisinya. Tapi tindakan pengkhianatan rakus oleh yakuza menyebabkan kematian Denji yang brutal dan terlalu cepat, menghancurkan semua harapan dia untuk mencapai kebahagiaan.<br><br>Hebatnya, kontrak lama memungkinkan Pochita untuk bergabung dengan almarhum Denji dan memberikan kekuatan iblis padanya, mengubahnya menjadi hibrida yang mampu mengubah bagian tubuhnya menjadi gergaji mesin. Karena kemampuan baru Denji menimbulkan risiko yang signifikan bagi masyarakat, pemburu setan elit Biro Keamanan Publik, Makima, membawanya masuk, membiarkannya hidup selama dia mematuhi perintahnya. Dipandu oleh janji kehidupan konten bersama seorang wanita yang menarik, Denji mencurahkan segalanya dan bertarung dengan sekuat tenaga untuk mewujudkan mimpinya yang naif.</div>', 1, NULL, '2023-01-03 01:41:23', '2023-01-03 01:41:23'),
(6, 1, 3, 4, 'Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e 2nd Season', 'youkoso-jitsuryoku-shijou-shugi-no-kyoushitsu-e-2nd-season', 'Tv', '13 Episode', 'Complete', '04 Juli 2022', 'Summer 2022', 'Senin at 21:00 (JST)', 'Studio Hibari, Movic, AT-X, Sammy, Crunchyroll, Kadokawa Media House, Kadokawa, Bandai Namco Music Live', 'None found, add some', 'Lerche', 'Light Novel', '-', '23 Menit Per Episode', '8.15', 'anime-images/qCPoLACPWS0yaOV85YV7bZc7FV6du1LRdUTrtCMo.jpg', 'Kehidupan kembali di kapal pesiar setelah Ujian Khusus Pulau sama sekali bukan pelayaran yang mulus. Hampir segera setelah mereka kembali, siswa tahun pertama dari Tokyo Metropolitan Advanced Nurturin...', '<div>Kehidupan kembali di kapal pesiar setelah Ujian Khusus Pulau sama sekali bukan pelayaran yang mulus. Hampir segera setelah mereka kembali, siswa tahun pertama dari Tokyo Metropolitan Advanced Nurturing High School kembali menghadapi ujian khusus, dengan mempertaruhkan poin kelas dan individu.<br><br>Selain aturan yang rumit, lebih banyak masalah muncul dalam bentuk Kakeru Ryuuen dan Kei Karuizawa. Marah dengan hasil tes sebelumnya, Ryuuen sangat ingin mengalahkan setiap kelas dalam tantangan baru menggunakan segala cara yang diperlukan. Sementara itu, Karuizawa, pilar penting Kelas D, hampir runtuh di bawah tekanan masa lalunya.<br><br>Panggung sekarang diatur untuk Kiyotaka Ayanokouji untuk sekali lagi&nbsp; menggunakan sepenuhnya perencanaan, pandangan ke depan, dan manipulasinya yang kejam mengarahkan Kelas D menuju kemenangan saat pasukan musuh yang sangat dekat mencoba menjatuhkannya.</div>', 1, NULL, '2023-01-03 01:45:06', '2023-01-03 01:45:06'),
(7, 2, 3, 1, 'Hataraku Maou-sama!! Season 2', 'hataraku-maou-sama-season-2', 'Tv', '12 Episode', 'Complete', '14 Juli 2022', 'Summer 2022', 'Kamis at 23:30 (JST)', 'Sotsu, Movic, KlockWorx, Tokyo MX, Hakuhodo DY Music & Pictures, Infinite, BS11, Kadokawa, Bandai Namco Music Live, Happinet Phantom Studios', 'None found, add some', 'Studio 3Hz', 'Light Novel', '-', '23 Menit Per Episode', '6.67', 'anime-images/GYfpkXo5hE0vN6FjOTFivO4O8WvROQ6ajH6gPogS.jpg', 'Demon Lord Satan dari Ente Isla yang pernah ditakuti, yang harus melarikan diri ke Bumi setelah dikalahkan oleh pahlawan Emilia Justinia, kini menjalani kehidupan yang damai di Tokyo di bawah nama sam...', '<div>Demon Lord Satan dari Ente Isla yang pernah ditakuti, yang harus melarikan diri ke Bumi setelah dikalahkan oleh pahlawan Emilia Justinia, kini menjalani kehidupan yang damai di Tokyo di bawah nama samaran Sadao Maou. Setelah menjadi karyawan teladan di restoran cepat saji setempat, Sadao harus menafkahi mantan jendralnya Alciel dan Lucifer yang bergabung dengannya di Jepang, serta menghindari konfrontasi dengan Emi Yusa nama samaran Emilia dan para malaikat yang memantau tindakannya.<br><br>Di tengah perdebatan sengit antara Sadao dan Emi, sebuah portal dimensional tiba-tiba muncul, membawa sebuah apel misterius yang menampung seorang balita bernama Alas Ramus. Yang membuat semua orang bingung, dia mencantumkan Emi dan Sadao, menandai mereka sebagai orang tuanya! Setelah Emi dengan enggan setuju untuk membantu Sadao menjaga Alas Ramus, kehidupan normal mereka terancam oleh kemunculan Malaikat Jibril, yang datang membawa kabar buruk. Dia mengklaim bahwa dia harus membawa pedang suci Alas Ramus dan Emi bersamanya agar dunia tidak hancur.<br><br>Tidak dapat menerima ramalan suram Gabriel, pahlawan dan mantan Raja Iblis harus mengesampingkan perbedaan mereka dan bersatu untuk melindungi apa yang mereka sayangi.</div>', 0, NULL, '2023-01-03 01:51:08', '2023-01-03 01:51:08'),
(8, 2, 1, 1, 'Mob Psycho 100 III', 'mob-psycho-100-iii', 'Tv', '12 Episode', 'On-Going', '06 Oktober 2022', 'Fall 2022', 'Kamis at 00:00 (JST)', 'Shogakukan-Shueisha Productions, Warner Bros. Japan, KlockWorx, BS Fuji, Hakuhodo DY Music & Pictures, Shogakukan', 'None found, add some', 'Bones', 'Web Manga', '-', '23 Menit Per Episode', '8.73', 'anime-images/CU4jVtx8f9mQ3vuJz2s088lJzzM4X4BeHyi7bVEZ.jpg', 'Setelah menggagalkan plot yang mengancam dunia, Shigeo \"Mob\" Kageyama kembali untuk menangani aspek kehidupan duniawinya yang lebih melelahkan dimulai dengan mengisi formulir karier sekolahnya yang me...', '<div>Setelah menggagalkan plot yang mengancam dunia, Shigeo \"Mob\" Kageyama kembali untuk menangani aspek kehidupan duniawinya yang lebih melelahkan dimulai dengan mengisi formulir karier sekolahnya yang menegangkan. Sementara itu, dia terus membantu mentornya Arataka Reigen dan rekrutan baru kantor tersebut, Katsuya Serizawa, dalam menyelesaikan kasus paranormal klien mereka. Sambil melanjutkan tugasnya, Mob juga berupaya untuk mendapatkan lebih banyak kemandirian dalam kehidupan esper dan manusianya, serta berusaha untuk berintegrasi lebih baik dengan orang-orang di sekitarnya.<br><br>Namun, tantangan supranatural dan biasa baru menguji kestabilan emosi Mob dan memaksanya untuk menghadapi kenyataan di sekitarnya. Saat dia berusaha untuk terus maju di jalan menuju kedewasaan, Mob harus menyelesaikan krisis emosionalnya dan menilai kembali kenaifan yang telah dia pertahankan begitu lama.</div>', 0, NULL, '2023-01-03 01:53:27', '2023-01-03 01:53:27'),
(9, 2, 3, 7, 'Yofukashi no Uta', 'yofukashi-no-uta', 'Tv', '13 Episode', 'On-Going', '08 Juli 2022', 'Summer 2022', 'Jum\'at at 00:55 (JST)', 'Aniplex, Dentsu, Shogakukan-Shueisha Productions, Animax, Fuji TV, Ultra Super Pictures, Shogakukan, Fuji Creative, Tohan Corporation', 'Sentai Filmworks', 'LIDENFILMS', 'Manga', 'Shounen', '22 Menit Per Episode', '8.05', 'anime-images/Y4FnLQh1ugM4EvxQeM0sYXBeGAGlHO2fzhaN00eF.jpg', 'Kou Yamori adalah siswa sekolah menengah biasa yang berjuang untuk memahami konsep cinta yang rumit. Karena dia melihat sedikit akal untuk menyerah pada norma, dia segera berhenti sekolah. Diganggu de...', '<div>Kou Yamori adalah siswa sekolah menengah biasa yang berjuang untuk memahami konsep cinta yang rumit. Karena dia melihat sedikit akal untuk menyerah pada norma, dia segera berhenti sekolah. Diganggu dengan insomnia karena kemalasannya, Kou mulai berkeliaran di jalanan yang sepi di malam hari.<br><br>Suatu malam, Kou bertemu dengan seorang gadis aneh bernama Nazuna Nanakusa yang percaya bahwa orang tetap terjaga di malam hari karena mereka tidak puas dengan bagaimana mereka menghabiskan hari mereka dan tidak dapat beristirahat sampai mereka melepaskan hambatan mereka. Nazuna menawarkan untuk membantu Kou dengan masalah tidurnya dan mengundangnya ke tempatnya, di mana dia meyakinkannya untuk berbagi futon dengannya. Merasa tidak nyaman, Kou hanya berpura-pura tertidur saat itulah Nazuna tiba-tiba menggigit lehernya, mengungkapkan dirinya sebagai vampir!<br><br>Sementara Kou mengira gigitan itu akan mengubahnya menjadi vampir, spesifikasi transformasinya tidak sesederhana itu. Untuk berubah, dia harus digigit oleh seseorang yang sangat dia cintai. Siap untuk melepaskan kehidupan fana yang suram, Kou memutuskan tujuan baru: dia akan jatuh cinta dengan Nazuna dan menjadi vampir sendiri.</div>', 0, NULL, '2023-01-03 01:56:26', '2023-01-03 01:56:26'),
(10, 2, 4, 2, 'Arifureta Shokugyou de Sekai Saikyou 2nd Season', 'arifureta-shokugyou-de-sekai-saikyou-2nd-season', 'Tv', '12 Episode', 'Complete', '13 Januari 2022', 'Winter 2022', 'Kamis at 23:30 (JST)', 'None found, add some', 'None found, add some', 'asread., studio MOTHER', 'Light Novel', '-', '23 Menit Per Episode', '7.20', 'anime-images/hjq82xhv2bFhBphfmmuF1dMJmDwULo7v7BCCswyn.jpg', 'Setelah menyelamatkan mantan teman sekelasnya dari bahaya labirin—tempat mistis yang memberikan sihir ilahi kepada siapa pun yang menang atas cobaannya Nagumo Hajime muncul sebagai pemenang, sementara...', '<div>Setelah menyelamatkan mantan teman sekelasnya dari bahaya labirin—tempat mistis yang memberikan sihir ilahi kepada siapa pun yang menang atas cobaannya Nagumo Hajime muncul sebagai pemenang, sementara pahlawan baru dunia fantasi Tortus harus menghadapi kegagalan besar pertama mereka. Bersama teman seperjalanannya dan anggota tim baru Kaori Shirasaki, Nagumo melanjutkan perjalanannya untuk menaklukkan semua labirin dan akhirnya kembali ke dunia asalnya.<br><br>Sementara itu, para pahlawan dari Bumi mencoba belajar dari kesalahan mereka dan bersiap menghadapi invasi tentara iblis. Saat konfrontasi terakhir semakin dekat, musuh baru dan lama mulai menjalankan rencana jahat mereka. Sekali lagi, Nagumo harus membuktikan bahwa dia bisa menang melawan lawan yang paling tangguh, sambil melindungi yang paling dekat dengan hatinya.</div>', 0, NULL, '2023-01-03 01:59:21', '2023-01-03 01:59:21'),
(11, 2, 2, 3, 'Kaguya-sama wa Kokurasetai: Ultra Romantic', 'kaguya-sama-wa-kokurasetai-ultra-romantic', 'Tv', '13 Episode', 'Complete', '09 April 2022', 'Spring 2022', 'Sabtu at 00:00 (JST)', 'Aniplex, Mainichi Broadcasting System, Magic Capsule, Shueisha, JR East Marketing & Communications', 'Aniplex of America', 'A-1 Pictures', 'Manga', 'Seinen', '23 Menit Per Episode', '9.08', 'anime-images/BEBGZ8eHnqRd0rbZhuhgiqbWclxEjb1Gu4eIg7S0.jpg', 'anggauta elit dewan siswa Akademi Shuchiin melanjutkan kejenakaan mereka sehari-hari. Presiden dewan Miyuki Shirogane bentrok setiap hari melawan wakil presiden Kaguya Shinomiya, masing-masing berjuan...', '<div>anggauta elit dewan siswa Akademi Shuchiin melanjutkan kejenakaan mereka sehari-hari. Presiden dewan Miyuki Shirogane bentrok setiap hari melawan wakil presiden Kaguya Shinomiya, masing-masing berjuang mati-matian untuk mengelabui yang lain agar mengakui cinta romantis mereka. Kaguya berjuang dalam batas-batas ketat keluarganya yang kaya dan tegang, memberontak terhadap sikapnya yang dingin saat dia bersikap ramah pada Shirogane dan teman-temannya yang lain.<br><br>Sementara itu, bendahara dewan Yuu Ishigami menderita di bawah beban cintanya yang putus asa pada Tsubame Koyasu, seorang kakak kelas populer yang membantu menanamkan kepercayaan baru padanya. Miko Iino, anggota OSIS terbaru, semakin dekat dengan Ishigami pelanggar aturan sambil berjuang untuk mengatasi kode moral otoriternya sendiri.<br><br>Saat cinta semakin berkembang di Akademi Shuchiin, petugas OSIS menyeret teman luar mereka ke dalam konflik komedi yang semakin meningkat.</div>', 1, NULL, '2023-01-03 02:01:54', '2023-01-03 02:01:54'),
(12, 3, 1, 10, 'Blue Lock', 'blue-lock', 'Tv', '24 Episode', 'On-Going', '09 Oktober 2022', 'Fall 2022', 'Minggu at 01:30 (JST)', 'TV Asahi, Kodansha, Toy\'s Factory, Crunchyroll, Bandai Spirits, Bit grooove promotion, Bandai Namco Filmworks, Bandai Namco Music Live', 'None found, add some', '8bit', 'Manga', 'Shounen', '24 Menit Per Episode', '8.27', 'anime-images/IP8tDEh1oH2jgeO19Rl02PjzmMmCYJYRNma85Nw2.jpg', 'Yoichi Isagi hanya beberapa saat lagi dari mencetak gol yang akan mengirim tim sepak bola sekolah menengahnya ke tingkat nasional, tetapi keputusan sepersekian detik untuk mengoper bola ke rekan setim...', '<div>Yoichi Isagi hanya beberapa saat lagi dari mencetak gol yang akan mengirim tim sepak bola sekolah menengahnya ke tingkat nasional, tetapi keputusan sepersekian detik untuk mengoper bola ke rekan setimnya membuatnya kehilangan kenyataan itu. Pahit, bingung, dan kecewa, Isagi bertanya-tanya apakah hasilnya akan berbeda seandainya dia tidak lolos. Saat striker muda itu pulang, undangan dari Japan Football Union menantinya. Melalui proses pengambilan keputusan yang sewenang-wenang dan bias, Isagi adalah satu dari tiga ratus striker U-18 yang dipilih untuk proyek kontroversial bernama Blue Lock.<br><br>Tujuan utama proyek ini adalah mengubah salah satu pemain terpilih menjadi striker bintang tim nasional Jepang. Untuk menemukan peserta terbaik, setiap berlian harus bersaing dengan yang lain melalui serangkaian kompetisi solo dan tim untuk naik ke puncak. Mengesampingkan keberatan etisnya terhadap proyek tersebut, Isagi merasa terdorong untuk berjuang menuju puncak, bahkan jika itu berarti menghancurkan impian 299 striker muda yang bercita-cita tinggi.</div>', 1, NULL, '2023-01-03 02:09:16', '2023-01-03 02:09:16'),
(13, 3, 1, 3, 'Bocchi the Rock!', 'bocchi-the-rock', 'Tv', '12 Episode', 'Complete', '09 Oktober 2022', 'Fall 2022', 'Minggu at 00:00 (JST)', 'Aniplex, Houbunsha', 'None found, add some', 'CloverWorks', '4-koma manga', '-', '23 Menit Per Episode', '9.00', 'anime-images/xfz7HUlcxbr3TaSXl0H3SG0f0sbtgcMkKlk4cLLA.jpg', 'Kerinduan untuk berteman dan tampil live dengan sebuah band, Hitori \"Bocchi\" Gotou yang kesepian dan cemas secara sosial mencurahkan waktunya untuk bermain gitar. Pada hari yang menentukan, Bocchi ber...', '<div>Kerinduan untuk berteman dan tampil live dengan sebuah band, Hitori \"Bocchi\" Gotou yang kesepian dan cemas secara sosial mencurahkan waktunya untuk bermain gitar. Pada hari yang menentukan, Bocchi bertemu dengan drummer lama Nijika Ijichi, yang mengundangnya untuk bergabung dengan Kessoku Band saat gitaris mereka, Ikuyo Kita, melarikan diri sebelum pertunjukan pertama mereka. Segera setelah itu, Bocchi bertemu dengan rekan band terakhirnya bassis keren Ryou Yamada.<br><br>Meskipun penampilan pertama mereka bersama di bawah standar, gadis-gadis itu merasa diberdayakan oleh kecintaan mereka yang sama terhadap musik, dan kita segera bergabung kembali dengan Kita. Menemukan kebahagiaan dalam tampil, Bocchi dan rekan bandnya berusaha keras untuk berkembang sebagai musisi sambil memanfaatkan hari-hari sekolah menengah mereka yang singkat.</div>', 1, NULL, '2023-01-03 02:12:19', '2023-01-03 02:12:19'),
(14, 3, 2, 7, 'Kawaii dake ja Nai Shikimori-san', 'kawaii-dake-ja-nai-shikimori-san', 'Tv', '12 Episode', 'Complete', '10 April 2022', 'Spring 2022', 'Minggu at 02:00 (JST)', 'Kodansha, NBCUniversal Entertainment Japan, Crunchyroll, ABC Animation, Kadokawa Media House, Kadokawa', 'None found, add some', 'Doga Kobo', 'Web manga', '-', '23 Menit Per Episode', '6.93', 'anime-images/p5GPJSqXLdNy63BtlXim03cVfqS2larsmS3UHAzo.jpg', 'Yuu Izumi menjalani kehidupan SMA yang penuh dengan kecelakaan demi kecelakaan. Tidak peduli betapa mustahilnya situasinya, kejadian malang menimpanya di setiap kesempatan. Memiliki nasib buruk sepert...', '<div>Yuu Izumi menjalani kehidupan SMA yang penuh dengan kecelakaan demi kecelakaan. Tidak peduli betapa mustahilnya situasinya, kejadian malang menimpanya di setiap kesempatan. Memiliki nasib buruk seperti itu, Izumi memasuki tahun keduanya dengan satu keinginan di benaknya untuk menghabiskan lebih banyak waktu dengan pacarnya yang penuh kasih sayang, Micchon Shikimori.<br><br>Imut, atletis, dan peduli, Shikimori sangat populer di sekolah mereka. Tapi sejak mereka mulai berkencan setahun yang lalu, Izumi telah menyaksikan sisi yang mengejutkan dari pacarnya yang menggemaskan: ketika dibutuhkan, dia menjadi sangat keren! Kemalangannya dengan mudah dihindari ketika dia ada di sana untuk melindunginya dengan ekspresi yang menakjubkan di wajahnya. Menawan dalam segala hal, dia tidak pernah berhenti membuat jantungnya berdetak kencang. Sayangnya, Izumi pasti akan melihat hari-hari sialnya berakhir berkat Shikimori yang imut namun keren.</div>', 0, NULL, '2023-01-03 02:15:17', '2023-01-03 02:15:17'),
(15, 3, 2, 9, 'Hyouka', 'hyouka', 'Tv', '22 Episode', 'Complete', '23 April 2012', 'Spring 2012', 'Senin at 00:00 (JST)', 'Lantis, Kadokawa Shoten, KlockWorx, chara-ani.com, Animation Do', 'Funimation', 'Kyoto Animation', 'Novel', '-', '25 Menit Per Episode', '8.08', 'anime-images/XlPmtrmQ0ag2GmjtBJ5twfvu1jjBN0ZM9a5yw963.jpg', 'Mahasiswa baru sekolah menengah Houtarou Oreki hanya memiliki satu tujuan: menjalani kehidupan abu-abu sambil menghemat energi sebanyak yang dia bisa. Sayangnya, hari-hari damainya berakhir ketika kak...', '<div>Mahasiswa baru sekolah menengah Houtarou Oreki hanya memiliki satu tujuan: menjalani kehidupan abu-abu sambil menghemat energi sebanyak yang dia bisa. Sayangnya, hari-hari damainya berakhir ketika kakak perempuannya, Tomoe, memaksanya untuk menyelamatkan Klub Klasik tanpa anggota dari pembubaran.<br><br>Untungnya, kesulitan Oreki tampaknya sudah berakhir ketika dia pergi ke ruang klub dan menemukan bahwa sesama tahun pertamanya, Eru Chitanda, telah menjadi anggota. Namun, meskipun kewajibannya terpenuhi, Oreki mendapati dirinya terjerat oleh kepribadian Chitanda yang penasaran dan ceria, segera bergabung dengan klub atas kemauannya sendiri.<br><br>Hyouka mengikuti empat anggota Klub Klasik termasuk teman Oreki, Satoshi Fukube dan Mayaka Ibara saat mereka, didorong oleh rasa ingin tahu Chitanda yang tak pernah terpuaskan, memecahkan misteri sepele namun menarik yang merembes ke kehidupan sehari-hari mereka.</div>', 0, NULL, '2023-01-03 02:19:50', '2023-01-03 02:19:50'),
(16, 3, 1, 6, 'Mieruko-chan', 'mieruko-chan', 'Tv', '12 Episode', 'Complete', '03 Oktober 2021', 'Fall 2021', 'Minggu at 22:00 (JST)', 'AT-X, Magic Capsule, Tokyo MX, Docomo Anime Store, Kadokawa Media House, BS NTV, Kadokawa', 'Funimation', 'Passione', 'Manga', '-', '23 Menit Per Episode', '7.44', 'anime-images/DFuaBfWOIzbR805NiQzLuyqg92JqLQi3EFTQlboF.jpg', 'Mata Miko Yotsuya berair saat dia terpaku pada satu titik di ponselnya dia mengabaikan monster mengerikan dan mengerikan lainnya yang ada di wajahnya, mengucapkan kata-kata yang mengganggu: \"Bisakah k...', '<div>Mata Miko Yotsuya berair saat dia terpaku pada satu titik di ponselnya dia mengabaikan monster mengerikan dan mengerikan lainnya yang ada di wajahnya, mengucapkan kata-kata yang mengganggu: \"Bisakah kamu melihatku?\" Sebelumnya, Miko menikmati masa SMA-nya yang sederhana, dengan pertunjukan horor larut malam hanya sebagai bentuk hiburan. Tapi sejak suatu hari yang menentukan, dia adalah satu-satunya orang yang menyadari monster tak terlihat berjalan bebas di antara manusia.<br><br>Dengan berani, Miko membuat keputusan berani: dia tidak akan pernah, dalam kondisi apapun, mengakui kehadiran hantu yang mengerikan itu. Namun, meskipun dia berpura-pura tidak ada, dia masih bisa melihat bagaimana mereka mengganggu orang-orang di sekitarnya, terutama sahabatnya, Hana Yurikawa yang energik dan cantik. Untuk melindungi mereka dari gangguan monster, Miko melakukan yang terbaik untuk melanjutkan kehidupan sekolahnya dan menghindari setiap krisis yang menyusahkan bahkan saat mereka membuatnya takut hingga menangis.</div>', 0, NULL, '2023-01-03 02:23:07', '2023-01-03 02:23:07'),
(17, 4, 4, 8, 'Another', 'another', 'Tv', '12 Episode', 'Complete', '10 Januari 2022', 'Winter 2012', '-', 'Lantis, Kadokawa Shoten, Toho, KlockWorx, Bandai Namco Live Creative, NTT Docomo', 'Sentai Filmworks', 'P.A. Works', 'Novel', '-', '24 Menit Per Episode', '7.48', 'anime-images/W58DrxFnsOqLVTyoOSCYCyIqypPW0MeEXYgSliIu.jpg', 'Di kelas 3-3 SMP Yomiyama Utara, siswa pindahan Kouichi Sakakibara kembali setelah mengambil cuti sakit untuk bulan pertama sekolah. Di antara teman-teman sekelasnya yang baru, dia secara misterius te...', '<div>Di kelas 3-3 SMP Yomiyama Utara, siswa pindahan Kouichi Sakakibara kembali setelah mengambil cuti sakit untuk bulan pertama sekolah. Di antara teman-teman sekelasnya yang baru, dia secara misterius tertarik pada Mei Misaki seorang gadis pendiam dengan penutup mata yang dia temui di rumah sakit selama ketidakhadirannya. Tapi tidak ada teman sekelasnya yang mengakui keberadaannya; mereka memperingatkan dia untuk tidak memperkenalkan dirinya dengan hal-hal yang tidak ada. Melawan kata-kata peringatan mereka, Kouichi berteman dengan Mei segera mengetahui kebenaran yang menyeramkan di balik ketakutan teman-temannya.<br><br>Desas-desus tak menyenangkan berputar di sekitar mantan siswa kelas 3-3. Namun, tidak ada yang akan membagikan detail lengkap dari acara suram tersebut dengan Kouichi. Terlibat dalam kutukan yang mengganggu kelasnya, Kouichi berusaha menemukan hubungannya dengan teman barunya. Serangkaian tragedi muncul di sekitar mereka, sekarang terserah pada Kouichi, Mei, dan teman sekelas mereka untuk mengungkap misteri yang menakutkan itu tetapi melakukan itu harus dibayar mahal.</div>', 0, NULL, '2023-01-03 02:28:03', '2023-01-03 02:28:03'),
(18, 4, 1, 2, 'Boku no Hero Academia 6th Season', 'boku-no-hero-academia-6th-season', 'Tv', '25 Episode', 'On-Going', '01 Oktober 2022', 'Fall 2022', 'Sabtu at 17:30 (JST)', 'Dentsu, Yomiuri Telecasting, Movic, Sony Music Entertainment, TOHO animation, Shueisha', 'None found, add some', 'Bones', 'Manga', 'Shounen', '23 Menit Per Episode', '8.28', 'anime-images/gPOfZahuGPvuyGQIdndrgSE8Z8HtmZ8xs3dYnVjD.jpg', 'Dengan Tomura Shigaraki di pucuk pimpinannya, mantan Tentara Pembebasan sekarang dikenal sebagai Front Pembebasan Paranormal. Kelompok kriminal terorganisir ini menimbulkan ancaman besar bagi Asosiasi...', '<div>Dengan Tomura Shigaraki di pucuk pimpinannya, mantan Tentara Pembebasan sekarang dikenal sebagai Front Pembebasan Paranormal. Kelompok kriminal terorganisir ini menimbulkan ancaman besar bagi Asosiasi Pahlawan, tidak hanya karena ukuran dan kekuatannya yang besar, tetapi juga kebiasaan Jin \"Twice\" Bubaigawara dan Gigantomachia yang sangat kuat.<br><br>Saat intel baru dari pahlawan rahasia Keigo \"Hawks\" Takami mengonfirmasi bahwa Shigaraki tidak terlihat, Asosiasi Pahlawan memutuskan untuk menyerang markas musuh dengan serangan mendadak menggunakan seluruh asetnya dan para siswa UA menemukan diri mereka di medan perang sekali lagi. Saat pertarungan berkecamuk, penjahat yang tidak curiga harus berkumpul kembali dan mundur, tetapi para pahlawan pemberani bertekad untuk membasmi mereka semua.</div>', 1, NULL, '2023-01-03 02:30:23', '2023-01-03 02:30:23'),
(19, 4, 3, 5, 'Re:Zero kara Hajimeru Isekai Seikatsu 2nd Season', 're-zero-kara-hajimeru-isekai-seikatsu-2nd-season', 'Tv', '13 Episode', 'Complete', '08 Juli 2020', 'Summer 2020', 'Rabu at 22:30 (JST)', 'AT-X, Memory-Tech, Hakuhodo DY Music & Pictures, Kadokawa Media House, Kadokawa', 'None found, add some', 'White Fox', 'Light Novel', '-', '27 Menit Per Episode', '8.35', 'anime-images/tf1OEQfqsXBC4c9qtUKhYjJLWwMGEr7ThevYA6Uq.jpg', 'Reuni yang seharusnya menandai datangnya masa damai dengan cepat hancur ketika Subaru Natsuki dan Emilia kembali ke desa Irlam. Menyaksikan kehancuran yang ditinggalkan oleh malapetaka yang dikenal se...', '<div>Reuni yang seharusnya menandai datangnya masa damai dengan cepat hancur ketika Subaru Natsuki dan Emilia kembali ke desa Irlam. Menyaksikan kehancuran yang ditinggalkan oleh malapetaka yang dikenal sebagai Sin Archbishops, Subaru tenggelam dalam keputusasaan karena kemampuannya untuk mengulang terbukti sia-sia.<br><br>Saat kelompok itu menuju Tempat Suci untuk mencari jawaban, Subaru bertemu secara tak terduga dengan Penyihir Keserakahan Echidna. Ditundukkan pada ritme liarnya, dia dipaksa untuk terjun ke spiral masa lalu dan masa depan. Pada saat yang sama, beberapa ancaman misterius mengarahkan pandangan mereka ke Tempat Suci, mengumumkan nasib mengerikan bagi orang-orang malang yang terperangkap di dalamnya.<br><br>Kontrak abadi, dosa masa lalu, dan cinta tak berbalas akan berbenturan dan tenggelam ke dalam sungai darah di season kedua Re:Zero kara Hajimeru Isekai Seikatsu. Didorong ke ambang keputusasaan, berapa lama tekad Subaru untuk menyelamatkan orang yang dicintainya bertahan?</div>', 1, NULL, '2023-01-03 02:34:10', '2023-01-03 02:34:10'),
(20, 4, 2, 4, 'Tate no Yuusha no Nariagari Season 2', 'tate-no-yuusha-no-nariagari-season-2', 'Tv', '13 Episode', 'Complete', '06 April 2022', 'Spring 2022', 'Rabu at 22:00 (JST)', 'Frontier Works, AT-X, Nippon Columbia, Glovision, Good Smile Company, Sammy, Crunchyroll, Kadokawa Media House, NTT Plala, Kadokawa', 'None found, add some', 'Kinema Citrus, DR Movie', 'Light Novel', '-', '23 Menit Per Episode', '6.56', 'anime-images/T8AiFdmMQo528H81RG9DZKFYaBxJYdskTLRsdGjG.jpg', 'Dengan gelombang lain yang terjadi dalam seminggu, Naofumi Iwatani dan rombongannya tidak punya waktu untuk disia-siakan. Namun, ketika familiar kelelawar menyerbu Desa Lurolona dan hitungan mundur Ge...', '<div>Dengan gelombang lain yang terjadi dalam seminggu, Naofumi Iwatani dan rombongannya tidak punya waktu untuk disia-siakan. Namun, ketika familiar kelelawar menyerbu Desa Lurolona dan hitungan mundur Gelombang terhenti, Empat Pahlawan Kardinal berkumpul kembali dengan ratu, Mirelia Q Melromarc, untuk pengarahan singkat. Ratu menganggap bahwa kejadian aneh terkait dengan Roh Kura-kura makhluk mengancam yang terbangun dari tidurnya, kembali menimbulkan kekacauan sekali lagi. Sebuah rencana untuk mengistirahatkan Roh Kura-kura telah dibuat—tetapi dari keempat pria itu, hanya Pahlawan Perisai terkutuk yang setuju untuk membantu.</div>', 0, NULL, '2023-01-03 02:36:22', '2023-01-03 02:36:22'),
(21, 4, 1, 7, 'Tonikaku Kawaii', 'tonikaku-kawaii', 'Tv', '12 Episode', 'Complete', '03 Oktober 2020', 'Fall 2020', 'Sabtu at 01:05 (JST)', 'Shogakukan-Shueisha Productions, Warner Bros. Japan, KlockWorx, Shogakukan, Crunchyroll SC Anime Fund', 'Crunchyroll', 'Seven Arcs', 'Manga', 'Shounen', '23 Menit Per Episode', '7.90', 'anime-images/LR7nAtQ784l5aTw0hivfIyQiDyQ0LN1VrFzWZulu.jpg', 'Nasa Yuzaki bertekad untuk meninggalkan namanya di buku sejarah. Menempati peringkat pertama dalam ujian pura-pura nasional dan mengincar sekolah menengah terkemuka, dia yakin bahwa seluruh hidupnya t...', '<div>Nasa Yuzaki bertekad untuk meninggalkan namanya di buku sejarah. Menempati peringkat pertama dalam ujian pura-pura nasional dan mengincar sekolah menengah terkemuka, dia yakin bahwa seluruh hidupnya telah dipetakan. Namun, takdir adalah nyonya yang berubah-ubah. Dalam perjalanan pulang pada suatu malam bersalju, mata NASA tertuju pada kecantikan tiada tara di seberang jalan. Terpesona, NASA mencoba mendekatinya hanya untuk dibutakan oleh truk yang melaju.<br><br>Syukurlah, nyawanya terselamatkan karena tindakan cepat gadis itu. Berdarah di samping ambulans, dia melihat gadis itu berjalan pergi di bawah sinar bulan mengingatkan pada Putri Kaguya yang berangkat ke bulan. Menolak untuk membiarkan pertemuan kebetulan ini berakhir, dia memaksa tubuhnya yang lumpuh untuk mengejarnya dan mengajaknya kencan. Terkejut dengan kebodohan dan tekadnya yang murni, gadis itu menerima pengakuannya dengan satu syarat: mereka hanya bisa bersama jika dia menikahinya!</div>', 0, NULL, '2023-01-03 02:38:51', '2023-01-03 02:38:51'),
(22, 1, 4, 3, '5-toubun no Hanayome', '5-toubun-no-hanayome', 'Tv', '12 Episode', 'Complete', '11 Januari 2019', 'Winter 2019', 'Jum\'at at 01:28 (JST)', 'Pony Canyon, Kodansha, ZERO-A, GYAO!', 'Funimation', 'Tezuka Productions', 'Manga', 'Shounen', '24 Menit Per Episode', '7.67', 'anime-images/19zTpa9NBTWdpprEohlrIu605Nlqf09ULSTgXw43.jpg', 'Fuutarou Uesugi adalah siswa sekolah menengah ace, tetapi menjalani kehidupan yang sulit. Kepribadiannya yang angkuh dan sifat penyendiri membuatnya tidak punya teman, dan ayahnya dililit hutang, mema...', '<div>Fuutarou Uesugi adalah siswa sekolah menengah ace, tetapi menjalani kehidupan yang sulit. Kepribadiannya yang angkuh dan sifat penyendiri membuatnya tidak punya teman, dan ayahnya dililit hutang, memaksa keluarganya untuk bertahan hidup.<br><br>Suatu hari saat istirahat makan siang, Uesugi berdebat dengan seorang siswi pindahan yang telah mengklaim \"tempat duduknya\", membuat keduanya tidak menyukai satu sama lain. Pada hari yang sama, dia diberi kesempatan emas untuk melunasi hutang keluarganya: pertunjukan les privat untuk putri keluarga kaya, dengan upah lima kali lipat dari harga pasar. Dia menerima lamaran itu, tetapi ngeri mengetahui bahwa kliennya, Itsuki Nakano, adalah gadis yang dia hadapi sebelumnya!<br><br>Setelah gagal mencoba untuk kembali ke sisi baik Itsuki, Uesugi menemukan bahwa masalahnya tidak berakhir di sana: Itsuki sebenarnya adalah kembar lima, jadi selain dia, dia juga harus mengajari saudara perempuannya Miku, Yotsuba, Nino, dan Ichika yang, terlepas dari ancaman gagal yang sangat nyata, tidak ingin berurusan dengan tutor. Namun, mata pencaharian keluarganya dipertaruhkan sehingga Uesugi terus maju, bersikeras dalam tekadnya untuk menghilangkan kebencian para suster untuk belajar dan berhasil memimpin mereka untuk lulus.</div>', 0, NULL, '2023-01-03 02:55:47', '2023-01-03 02:55:47'),
(23, 2, 4, 7, '5-toubun no Hanayome ∬', '5-toubun-no-hanayome-2', 'Tv', '12 Episode', 'Complete', '08 Januari 2021', 'Winter 2021', 'Jum\'at at 01:28 (JST)', 'Pony Canyon, Kodansha, DAX Production, BS11, Nichion, GYAO!, Good Smile Film, MAGNET', 'None found, add some', 'Bibury Animation Studios', 'Manga', 'Shounen', '24 Menit Per Episode', '8.10', 'anime-images/JK1ccTvHsTL3rTHwAHr6ppc8NcYpRevYvyKBEprR.jpg', 'Melalui bimbingan rajin tutor mereka Fuutarou Uesugi, prestasi akademik kembar lima Nakano menunjukkan tanda-tanda peningkatan, bahkan jika jalan mereka menuju kelulusan masih sulit. Namun, karena mer...', '<div>Melalui bimbingan rajin tutor mereka Fuutarou Uesugi, prestasi akademik kembar lima Nakano menunjukkan tanda-tanda peningkatan, bahkan jika jalan mereka menuju kelulusan masih sulit. Namun, karena mereka terus menyebabkan berbagai situasi yang menunda les sebenarnya, Fuutarou menjadi semakin terlibat dengan kehidupan pribadi mereka, semakin memperumit hubungan mereka satu sama lain.<br><br>Pada catatan lain, Fuutarou perlahan mulai menyadari adanya kemungkinan hubungan antara dia dan masa lalu yang dia yakini telah dibagi dengan salah satu dari lima gadis. Dengan perasaan setiap orang yang mulai berkembang dan tumpang tindih, akankah mereka dapat mempertahankan ikatan mereka secara ketat dengan seorang guru dan murid-muridnya atau akankah itu menjadi dewasa menjadi sesuatu yang lain sama sekali?</div>', 1, NULL, '2023-01-03 02:58:57', '2023-01-03 02:58:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Anime Fall', 'anime-fall', '2022-12-30 23:31:46', '2022-12-30 23:31:46'),
(2, 'Anime Spring', 'anime-spring', '2022-12-30 23:31:46', '2022-12-30 23:31:46'),
(3, 'Anime Summer', 'anime-summer', '2022-12-30 23:31:46', '2022-12-30 23:31:46'),
(4, 'Anime Winter', 'anime-winter', '2022-12-30 23:31:46', '2022-12-30 23:31:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `genres`
--

INSERT INTO `genres` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Action', 'action', '2022-12-30 23:31:46', '2022-12-30 23:31:46'),
(2, 'Adventure', 'adventure', '2022-12-30 23:31:46', '2022-12-30 23:31:46'),
(3, 'Comedy', 'comedy', '2022-12-30 23:31:46', '2022-12-30 23:31:46'),
(4, 'Drama', 'drama', '2022-12-30 23:31:46', '2022-12-30 23:31:46'),
(5, 'Fantasy', 'fantasy', '2022-12-30 23:31:46', '2022-12-30 23:31:46'),
(6, 'Horror', 'horror', '2022-12-30 23:31:46', '2022-12-30 23:31:46'),
(7, 'Romance', 'romance', '2022-12-30 23:31:46', '2022-12-30 23:31:46'),
(8, 'Thriller', 'thriller', '2022-12-30 23:31:46', '2022-12-30 23:31:46'),
(9, 'Slice of Life', 'slice-of-life', '2022-12-30 23:31:46', '2022-12-30 23:31:46'),
(10, 'Sport', 'sport', '2022-12-30 23:31:46', '2022-12-30 23:31:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `anime_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_24_063355_create_categories_table', 1),
(6, '2022_11_20_143633_add_is_admin_to_users_table', 1),
(7, '2022_12_23_034618_create_animes_table', 1),
(8, '2022_12_27_034002_create_genres_table', 1),
(9, '2022_12_27_092620_likes', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Ismail Fikri', 'ismail fikri', '203040008@mail.unpas.ac.id', NULL, '$2y$10$6VUKjhP7.DmoCiMveM0z7utsQUvywoT5UYuzAUpJNb64nwX.MG33m', NULL, '2022-12-30 23:31:46', '2022-12-30 23:31:46', 1),
(2, 'Fikri Ridwan', 'fikri ridwan', '203040001@mail.unpas.ac.id', NULL, '$2y$10$Xpa7RbLA9YfBKEb5902IqOeKX6CgB7z4dYEFxUhKbf5Qah/AUzu8S', NULL, '2022-12-30 23:31:46', '2022-12-30 23:31:46', 1),
(3, 'Nur Ihsan', 'nur ihsan', '203040025@mail.unpas.ac.id', NULL, '$2y$10$PwcqclQqL.G0e0Rr2U6mgODEBQpIlmwI4xIhGBjNiXFHO/PDrp28.', NULL, '2022-12-30 23:31:46', '2022-12-30 23:31:46', 1),
(4, 'Salsabila', 'salsabila', '203040028@mail.unpas.ac.id', NULL, '$2y$10$J3LtuL6lWTA/8u9BoMey5Ox/9dsRFFhQTPyXeb8gdNJ2dIdjKn75i', NULL, '2022-12-30 23:31:46', '2022-12-30 23:31:46', 1),
(5, 'Ilham', 'ilham', 'ilham@gmail.com', NULL, '$2y$10$N76Hvm25bWG9.SzEgjGIvuajhx0HoLpfHckEkC9xos1fJ0E4j8i6e', NULL, '2023-01-03 02:40:00', '2023-01-03 02:40:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `animes_slug_unique` (`slug`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `animes`
--
ALTER TABLE `animes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
