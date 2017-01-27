-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2017 at 12:49 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hive_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_content_2`
--

CREATE TABLE IF NOT EXISTS `home_content_2` (
  `id_content` varchar(5) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id_content`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_content_2`
--

INSERT INTO `home_content_2` (`id_content`, `title`, `content`, `url_image`, `status`) VALUES
('1', 'KEBEBASAN WAKTU', '<strong>Online </strong><em>trading dapat </em>dilakukan kapan saja dan di mana saja. Trader dapat melakukan tr', 'icon1.png', '1'),
('2', 'MURAH & MUDAH', 'Online trading mudah dilakukan, pelakunya hanya memerlukan gadget. Tidak perlu lokasi yang strategis maupun biaya promosi. Hal ini juga membuat biaya operasional online tr', 'icon2.png', '1'),
('3', 'LEBIH AMAN', 'Online trading dianggap lebih aman karena dilakukan sendiri dan setiap account memiliki tiga tingkat keamanan, yaitu u', 'icon3.png', '1'),
('4', 'KEUNTUNGAN 100%', 'Dalam trading, keuntungan 100% menjadi milik trader, bukan broker, perusahaan sekuritas, atau lainnya. Bahkan, saat pasar sedang bagus-bagusnya, keuntungan', 'icon4.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `name`, `email`, `message`, `status`) VALUES
(1, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(2, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(3, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(4, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(5, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(6, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(7, 'asd', 'hendylukas68@gmail.com', 'tes', '1'),
(8, 'asd', 'hendylukas68@gmail.com', 'haha', '1'),
(9, 'asd', 'hendylukas68@gmail.com', 'asd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `page_about`
--

CREATE TABLE IF NOT EXISTS `page_about` (
  `id_content` varchar(5) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `caption1` mediumtext NOT NULL,
  `content1` longtext NOT NULL,
  `title2` varchar(255) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `content2` longtext NOT NULL,
  `url_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id_content`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_about`
--

INSERT INTO `page_about` (`id_content`, `title1`, `caption1`, `content1`, `title2`, `title3`, `content2`, `url_image`) VALUES
('1', 'TRADING MENURUT EDWIN', 'Percayakah Anda bila saya mengakatan bahwa dalam satu hari Anda dapat melakukan hingga belasan kegiatan trading? Ya, trading adalah sesuatu yang tidak dapat terlepas dari kehidupan kita.', '\r\n\r\nSetiap harinya setiap orang pasti melakukan trading. Trading pun tidak selamanya terjadi dalam skala yang besar. Membeli makanan, membayar parkir, atau bahkan pada saat Anda menerima gaji sebenarnya sudah merupakan kegiatan trading.\r\n\r\nSecara singkat, trading berarti konsep ekonomi dasar yang melibatkan jual beli barang atau jasa, dengan kompensasi yang dibayarkan oleh pembeli kepada penjual, atau pertukaran dari barang maupun jasa dari kedua pihak. Trading sendiri lebih sering digunakan oleh kebanyakan dari kita untuk\r\n\r\nmemperoleh keuntungan, sehingga secara umum  trading dapat terbagi menjadi 2 jenis, yaitu ruang dan waktu. Mudahnya, trading ruang adalah kegiatan dagang yang terjadi ketika Anda membeli handphone di Hongkong dan menjualnya kembali di Indonesia. Sementara itu trading waktu terjadi ketika Anda membeli beras pada saat musim panen dan menjualnya pada saat musim tanam (non-panen).\r\n\r\nDari sisi historis, trading sebenarnya sudah ada dari zaman dahulu kala. ‘Barter’ mungkin adalah istilah yang lebih familiar di telinga Anda.\r\n', 'about', 'EDWIN', 'Edwin Prasetyo telah bergelut dalam dunia trading sejak masih belia. Mengikuti jejak orang tua nya di trading konvensional, Edwin kini juga menyeriusi karirnya di trading online. Keseriusannya   terhadap trading online diawali dengan penelusuran konseptual yang  tepat  dan diaplikasikan dalam praktik tradingnya. Bagi Edwin,memulai trading bukan hanya karena modal dana, namun juga pemahaman kita atas praktik industri yang digeluti, serta passion kita untuk terus mengeksplorasi industri tersebut. Untuk itu, Edwin pergi untuk belajar ke ahli-ahli  trading  dari  berbagai penjuru dunia. Tidak sia-sia, perjuangan Edwin akhirnya membuahkan hasil.', '');

-- --------------------------------------------------------

--
-- Table structure for table `page_home`
--

CREATE TABLE IF NOT EXISTS `page_home` (
  `id_change` varchar(5) NOT NULL,
  `url_image_hero` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title2` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `url_image_bg2` varchar(255) NOT NULL,
  `title3` varchar(255) NOT NULL,
  `title4` varchar(255) NOT NULL,
  `title5` varchar(255) NOT NULL,
  `title6` varchar(255) NOT NULL,
  `content6` longtext NOT NULL,
  `url_image_bg3` varchar(255) NOT NULL,
  `url_image_bg_hero_blog` varchar(255) NOT NULL,
  PRIMARY KEY (`id_change`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_home`
--

INSERT INTO `page_home` (`id_change`, `url_image_hero`, `title`, `title2`, `content`, `url_image_bg2`, `title3`, `title4`, `title5`, `title6`, `content6`, `url_image_bg3`, `url_image_bg_hero_blog`) VALUES
('1', '', 'KELEBIHAN', 'TRADING ONLINE', '<strong>Di era modern ini</strong>, seluruh kegiatan kita lakukan secara online. Begitu juga dengan trading. Online trading menjadi sangat menarik di era serba digital ini karena berhasil menggabungkan konsep trading ruang dan waktu secara bersamaan. Internet membuat online trading memiliki lingkup internasional sehingga memungkinkan adanya penjual &amp; pembeli setiap waktu. Sayangnya tidak adanya batas online trading ini justru mendatangkan tantangan baru bagi kita, pelakunya. Namun, orang tetap dapat bertahan di dunia online trading jika didukung dengan skill, pengalaman, serta analisa yang ', 'gbrvidblog-p-800x451.jpeg', 'KEUNGGULAN ONLINE TRADING', 'Ingin Bertrading Bersama Edwin?', 'PARTNERS', 'STAY UPDATED', 'Sign up for our newsletter to get the latest news,\r\n        <br>announcements, special offers and event information', 'Images2-p-1600x902.jpeg', 'Images2-p-1600x902.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
  `id_content` varchar(5) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `since` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id_content`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id_content`, `url_image`, `since`, `status`) VALUES
('1', 'bgcontact-37-p-800x451.jpeg', 'Sejak 2011', '1'),
('2', 'bgcontact-37-p-800x451.jpeg', 'Sejak 2011', '1'),
('3', 'bgcontact-37-p-800x451.jpeg', 'Sejak 2011', '1'),
('4', 'Button-32.png', 'Sejak 2011', '1'),
('5', 'bgcontact-37-p-800x451.jpeg', 'Sejak 2011', '1');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `caption` varchar(255) NOT NULL,
  `post` longtext NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `date`, `caption`, `post`, `url_image`, `status`) VALUES
(1, 'Lorem Ipsum', '2017-01-03', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id luctus diam, consectetur finibus mi. Curabitur commodo leo neque, at feugiat nisi dictum a. Fusce egestas, ante vitae gravida vehicula, odio leo pretium est, eu cursus nibh tortor nec augue. Donec lectus felis, dapibus ac ipsum quis, ultrices varius nunc. Ut quis dapibus arcu. Etiam dictum ullamcorper cursus. Nunc non pulvinar purus. Praesent a lacus neque. Quisque congue est ut euismod viverra.\n\nProin et fringilla magna. Donec elit massa, bibendum quis molestie eget, interdum ut ex. Proin mattis in neque a convallis. Aliquam convallis, justo quis elementum imperdiet, odio leo euismod dolor, eu interdum urna tortor eu arcu. Aenean facilisis, mi in varius tristique, nisi metus eleifend sem, quis egestas turpis magna vitae metus. Nam sodales, augue at suscipit bibendum, dui orci laoreet nunc, eget bibendum metus ex viverra sem. Maecenas pretium faucibus diam. Pellentesque fringilla mattis ', '', '0'),
(2, 'Dari mana saya bisa mendapatkannya?', '2017-01-05', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'Ada banyak variasi tulisan Lorem Ipsum yang tersedia, tapi kebanyakan sudah mengalami perubahan bentuk, entah karena unsur humor atau kalimat yang diacak hingga nampak sangat tidak masuk akal. Jika anda ingin menggunakan tulisan Lorem Ipsum, anda harus yakin tidak ada bagian yang memalukan yang tersembunyi di tengah naskah tersebut. Semua generator Lorem Ipsum di internet cenderung untuk mengulang bagian-bagian tertentu. Karena itu inilah generator pertama yang sebenarnya di internet. Ia menggunakan kamus perbendaharaan yang terdiri dari 200 kata Latin, yang digabung dengan banyak contoh struktur kalimat untuk menghasilkan Lorem Ipsun yang nampak masuk akal. Karena itu Lorem Ipsun yang dihasilkan akan selalu bebas dari pengulangan, unsur humor yang sengaja dimasukkan, kata yang tidak sesuai dengan karakteristiknya dan lain sebagainya.', '', '1'),
(3, 'Dari mana asalnya?', '2017-01-09', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'Tidak seperti anggapan banyak orang, Lorem Ipsum bukanlah teks-teks yang diacak. Ia berakar dari sebuah naskah sastra latin klasik dari era 45 sebelum masehi, hingga bisa dipastikan usianya telah mencapai lebih dari 2000 tahun. Richard McClintock, seorang professor Bahasa Latin dari Hampden-Sidney College di Virginia, mencoba mencari makna salah satu kata latin yang dianggap paling tidak jelas, yakni consectetur, yang diambil dari salah satu bagian Lorem Ipsum. Setelah ia mencari maknanya di di literatur klasik, ia mendapatkan sebuah sumber yang tidak bisa diragukan. Lorem Ipsum berasal dari bagian 1.10.32 dan 1.10.33 dari naskah "de Finibus Bonorum et Malorum" (Sisi Ekstrim dari Kebaikan dan Kejahatan) karya Cicero, yang ditulis pada tahun 45 sebelum masehi. BUku ini adalah risalah dari teori etika yang sangat terkenal pada masa Renaissance. Baris pertama dari Lorem Ipsum, "Lorem ipsum dolor sit amet..", berasal dari sebuah baris di bagian 1.10.32.', 'Images8.jpg', '1'),
(4, 'Mengapa kita menggunakannya?', '2017-02-10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do ', 'Sudah merupakan fakta bahwa seorang pembaca akan terpengaruh oleh isi tulisan dari sebuah halaman saat ia melihat tata letaknya. Maksud penggunaan Lorem Ipsum adalah karena ia kurang lebih memiliki penyebaran huruf yang normal, ketimbang menggunakan kalimat seperti "Bagian isi disini, bagian isi disini", sehingga ia seolah menjadi naskah Inggris yang bisa dibaca. Banyak paket Desktop Publishing dan editor situs web yang kini menggunakan Lorem Ipsum sebagai contoh teks. Karenanya pencarian terhadap kalimat "Lorem Ipsum" akan berujung pada banyak situs web yang masih dalam tahap pengembangan. Berbagai versi juga telah berubah dari tahun ke tahun, kadang karena tidak sengaja, kadang karena disengaja (misalnya karena dimasukkan unsur humor atau semacamnya)', '', '1'),
(5, 'Apakah Lorem Ipsum itu?', '2017-03-22', 'Lorem Lorem ipsum', 'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.', '', '1'),
(6, 'test', '2017-01-27', '', '', '', '1'),
(7, 'hahaha', '2017-01-27', 'halio ', 'p>', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `email` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`email`, `status`) VALUES
('hendylukas68@gmail.com', '1'),
('hendylukas68a@gmail.com', '1'),
('hendylukas6a8@gmail.com', '1'),
('tes@gmail.com', '1'),
('test@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `name`, `telp`, `status`) VALUES
('admin', 'edwinprasetyo@gmail.com', 'admin', 'Administrator', '(+6281) 7778899', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
