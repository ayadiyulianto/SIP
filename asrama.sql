-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 04:07 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asrama`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata_penghuni`
--

CREATE TABLE `tb_biodata_penghuni` (
  `npm` varchar(9) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(10) NOT NULL,
  `alamat_asal` varchar(255) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hoby` text NOT NULL,
  `organisasi` text NOT NULL,
  `riwayat_penyakit` varchar(100) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat_ortu` varchar(255) NOT NULL,
  `no_hp_ortu` varchar(13) NOT NULL,
  `pekerjaan_ortu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_biodata_penghuni`
--

INSERT INTO `tb_biodata_penghuni` (`npm`, `nama_lengkap`, `nama_panggilan`, `alamat_asal`, `tempat_lahir`, `tgl_lahir`, `agama`, `no_ktp`, `program_studi`, `fakultas`, `no_hp`, `email`, `hoby`, `organisasi`, `riwayat_penyakit`, `nama_ayah`, `nama_ibu`, `alamat_ortu`, `no_hp_ortu`, `pekerjaan_ortu`) VALUES
('A1A014029', 'Endah Saputri', 'Endah', 'Kab. Labuhan Batu Sumatera Utara', 'Sei Bunga, ', '1996-01-01', 'Islam', '2147483647', 'Bahasa dan sastra Indonesia', 'FKIP', '085277462816', 'marlinasitorus46@yah', 'Berenang dan Bulu tangkis', '-', '-', 'Mangadar Sitorus', 'Nurmi Pasaribu', 'Sei Bunga', '-', 'Petani'),
('A1A014060', 'Nopita Linda Sari ', 'Nivita', 'Desa jalan jati,kec,pendopo.kab,empat lawang,sumsel', 'Pendopo,', '0000-00-00', '', '2147483647', 'Bahasa & sastra indonesia', 'Fkip', '085381675133', 'Novitalindasari@yaho', 'Membaca', '', '', 'Isman', 'Masito', 'Empat lawang', '082182597406', 'Petani'),
('A1B015012', 'Ananda Fauzita', 'Nanda', 'Dusun baru, karang tinggi. Kab. Bengkulu Tengah', 'Dusun Baru II, ', '0000-00-00', '', '2147483647', 'Bahasa Inggris', 'FKIP', '089632975444', 'birudongker33@yahoo.', 'Traveling, menyanyi dan membaca', 'Engslish club, rsisma', 'tifes, magh dan malaria', 'Suherman Fauzi', 'ratna Juita', 'Bengkulu tengah', '082281678844', 'Buruuh Tani'),
('A1B016016', 'Tari Okatavia', 'Tari ', 'Desa Talang Ratu 31 Oktober 1997', 'Talang Ratu ', '0000-00-00', '', '2147483647', 'Bahasa Inggris ', 'Fkip', '085367322569', '', '', '', '', 'Sahirudin', 'Siti Hadijah', 'Desa Talang ratu, Kec, Rimbo Pengadang, Kab, Lebong , Provinsi Bengkulu', '085384056106,', 'Petani'),
('A1b037030', 'Delia Septi Evani', 'Delia', 'Curup, Kab, Rejang Lebong ', 'Curup,', '0000-00-00', '', '2147483647', 'fisika', 'Mipa', '089687199823', '', '', '', '', 'Johan Effendi  ( Alm ) ', 'Evi Dahlus ', 'curup Kab Rl', '082177908004', 'Penjual Kele'),
('A1B049017', 'Lia Mayang Sari', 'Lian', 'Jln.Ayek putih, Kel.Muara enim', 'Prabumulih, ', '0000-00-00', '', '2147483647', 'Ekonomi Pembangunan', 'Ekonomi', '081367366759', '', '', '', '', 'Nasron', 'Purwati', 'Jln, ayek putih, Kel muara enim', '081377744238', 'Buruh Harian'),
('A1C013007', 'Reni Oktavia', 'Reni', 'Jl.bangka RT 5 No. 63 kel.Lubuk Linggau', 'Lubuk Linggau, ', '0000-00-00', '', '0', 'Matematika', 'FKIP', '081996194468', '', 'membaca,nonton', 'English Club,Rohis ', 'Sakit Kepala', 'Tasmir', 'Nurma Elyani', 'Bintuhan Kec. Kaur selatan desa gedung sako', '81919283034', 'Buruh Tani'),
('A1D015030', 'Amini', 'Amini', 'kepahiang', 'Curup, ', '0000-00-00', '', '0', 'Biologi', 'FKIP', '081930545199', 'aminijuli@gmail.com', 'Membaca', 'OSIS', 'Magh', 'Akil Lefron', 'Kasmaneli', 'Kepahiang', '085357035090', 'Buruh Tani'),
('A1E015026', 'Indah sri wahyuni', 'Indah', 'Padang laweh, malalo,batipuh selatab,sumbar', 'tanjung barulak, ', '0000-00-00', '', '2147483647', 'Pendidikan fisika', 'Fkip', '082372124529', '', '', '', '', '', '', '', '', ''),
('A1F015009', 'Riza Gustina', 'Tina', 'Desa Karang Tinggi', 'Karang Tinggi, ', '0000-00-00', '', '2147483647', 'Kimia', 'FKIP', '085788577378', 'rizagustina05@gmail.', 'Olahraga', 'Pencak Silat', '', 'Zainu Amri', 'Juniati', 'Desa Karang Tinggi', '082178535329', 'Buruh harian'),
('A1F015014', 'Putri kartini', 'Putri', 'Kepahiang, Bengkulu', 'Kepahiang, ', '0000-00-00', '', '0', 'Kimia', 'MIPA', '082282188618', '', 'Membaca', 'HIMAMIA dan FOSI', '', 'Darin', 'Nuraina', 'Kepahiang', '085279020876', 'Buruh tani'),
('A1F016007', 'Musiana', 'Mushi', 'Desa pelabuhan leak Kab, lebong ', 'Jabar, ', '0000-00-00', '', '2147483647', 'Pendidikan kimia', 'FKIP', '081539298334', '', '', '', '', 'Indra Wirawan', 'Nunung Rohaini', 'desa pelabuhan talang leak', '08228164375', 'Petani'),
('A1I014059', 'Dian Aristya', 'Dian', 'Kec.Tugumulyo', 'Tugumulyo, ', '0000-00-00', '', '2147483647', 'PAUD', 'FKIP', '085609970932', '', 'Membaca', '', '', 'Kadiyo', 'Siti Nurbaiti', 'F.Trikoyo Kec.Tugumulyo. Kab Musi Rawas', '085268571669', 'PNS'),
('A1I014061', 'Elin Warni', 'Elin', 'Sumsel', 'Muara Danau, ', '0000-00-00', '', '0', 'PAUD', 'FKIP', '082380541340', 'elinmarni@yahoo.com', 'Olahraga, Dengar musik', '', '', 'Naziri', 'Yulia', 'Lintang kanan', '085709502800', 'Petani'),
('A1I015022', 'Joensi Puspita', 'Juensi', 'Semidang alas , Rt01, Kel, jokoh,Kec, Dempo Tengah, No 18 Kota pagaralam', 'Semidang alas, ', '0000-00-00', '', '2147483647', 'Pg paud', 'Fkip', '081272077409', '', '', '', '', 'Sisman', 'Nirmala dewi', 'Semidang alas, rt 01, rw 02, Kel. Jodoh, Kec dempo tengah No 18, pagaralam', '085318489558/', 'Buruh Harian Lepas'),
('A1I015056', 'Elia Nindy kristiani', 'Elia', 'palak bengkerung,kec air nipis, kab,bengkulu selatan', 'Palak bengkerung', '0000-00-00', '', '0', 'Paud', 'Fkip', '081977034494', '', '', '', '', 'Rincius marbun', 'Israni', 'Palak Bengkerung', '085379243436', 'ibu rumah tangga'),
('A1I016012', 'Legis Sari', 'Legis', 'Kota padang, Kab. Rejang lebong ', 'Kota padang , ', '0000-00-00', '', '2147483647', 'Pg paud', 'FKIP', '083173186195', '', '', '', '', 'M.Gopar', 'Wasnaya', 'Kota padang, Kab rejang lebong ', '082378314807', 'Petani'),
('A1I016039', 'Mona Indriyani', 'Mona', 'Haimahera, Ujung Gading, Kec Lembah Melintang. Kab Pasaman Barat', 'Ujung Gading ', '0000-00-00', '', '2147483647', 'Fisika', 'Mipa', '085766035411', 'mawaddah_97@yahoo.co', 'Membaca', '', '', 'Habibullah', 'Lidawati', 'Jln.Mahera Ujung Gading Kab.Pasaman Barat', '082386264601', 'Petani'),
('A1J016008', 'Hervela liana', 'Vela', 'Desa lubuk tua, kec. Muara kelingi, kab musi rawas', 'lubuk tua, ', '0000-00-00', '', '2147483647', 'Pendidikan luar sekolah', 'FKIP', '085269413335', '', '', '', '', 'Lubis Iskandar ', 'setia', 'Desa lubuk tua, kec muarakelingi, kab musi rawas ', '085269413321', 'Petani'),
('A1L013056', 'Christin M.J Manalu', 'Merlin', 'Jln. T.Amir Hamzah GG Manggis Binjai Utara', 'Medan,\' ', '0000-00-00', '', '2147483647', 'Bimbingan dan Konseling', 'FKIP', '081362266998', 'amjm.lucky@gmail.com', '', 'PKS', '', 'Pdt.K.Manalu', 'S.Situmorang', 'Jln.T.Amir Hamzah GG Manggis Kec. Binjai Utara', '081362196567', 'Pendeta'),
('A1L014029', 'Retno Dwi Djayanti', 'Retni', 'Desa Bogor Baru, Kepahiang, Bengkulu', 'Kampung Bogor, ', '0000-00-00', '', '2147483647', 'BK', 'FISIP', '085758272878', 'Rhetnodwidjayanti@ya', '', 'PIK-R', '', 'Rasno', 'Jumiati', 'Desa Bogor Baru, Kepahiang Kota Bengkulu', '082374515455', 'Buruh Bangunan'),
('A1L016006', 'Pera Viransi ', 'Per', 'Jl.A.K gani gunung agung arga makmur , bengkulu utara', 'Gunung agung', '0000-00-00', '', '2147483647', 'Bimbingan dan konsling', 'Pgsd', '085384145535', '', '', '', '', 'Bakrani', 'Jumijuliarti', 'Jl.A.K gani gunung agung arga makmur, bengkulu utara', '082376491810/', 'Wiraswasta'),
('B1A015018', 'Jafni Parma', 'Erma', 'Baingmalalo,kec, batipuh selatan, Pro, sumbar', 'Baing malalo, ', '0000-00-00', '', '0', 'Ilmu hukum', 'Hukum', '085375067200', '', '', '', '', 'Jefri tanjung', 'Murniati', 'Baing malalo,Pro, Sumbar', '082388114211', 'Petani'),
('B1A015067', 'Megawati', 'Mega', 'Bangun Jaya,Desa Marang .Kec. Pesisir Selatan. Lampung', 'Bogor, ', '0000-00-00', '', '0', 'Hukum', 'Hukum', '082282745415', '', 'baca buku, online dan menggambar', 'Pramuka', '', 'Swen Peri', 'Alm.Rita Mulyati', 'Bangun Jaya,Desa Marang Kec.Pesisir Selatan, Lampung', '85279416599', 'Buruh Bangunan'),
('B1A015089', 'Endang maya sari', 'Endang', 'Jl.raya kepahyang kec,luas,kab.kaur', 'Kepahyang,', '0000-00-00', '', '2147483647', 'Ilmu hukum', 'Hukum', '082306216297', 'endang maya sari872@', '', '', '', 'Bakri', 'Yuli Suryani', 'Jl.raya kepahyang kec,luas,kab.kaur', '081271029452', 'Tani'),
('B1a016008', 'Alisa okta anggraini', 'Alisa', 'Padang', 'U.gading,', '0000-00-00', '', '2147483647', 'Ilmu hukum', 'Hukum', '085664503599', '', '', '', '', 'Ali Amsyah', 'Idrawati', 'Padang', '085374441767', 'Petani'),
('C0C015051', 'Juniar Lailatul Khasanah', 'Niar', 'rt 22 rw 05 Ds.Sekuro,mlonggo,jepara,jawa tengah', 'Jepara,', '0000-00-00', '', '0', 'D3 Akutansi', 'Ekonomi', '085229728624', 'Niar27laila@gmail.co', 'Baca', 'PMR', '', 'Akhirus Salam', 'Suniarti', 'rt 22 rw 05 ds,sekuro,mlonggo,jepara', '087861946596', 'Swasta'),
('C1A014009', 'Dewi Rahayu', 'Dewi', 'Sawah mudik, Kab. Pasama Barat. Sumatera Barat', 'Sawah Mudik, ', '0000-00-00', '', '2147483647', 'Ekonomi Pembangunan', 'ekonomi', '085766189646', '', 'Nari dan Baca buku', '', '', 'Yusri elpin', 'Alm.Nurhabibah', 'sawah mudik, pasaman barat sumatera barat', '081267854931', 'Petani'),
('C1b050047', 'Julia Lestari', 'Lian', 'Tanah rekah, Kec.Muko-muko', 'Tanah Rekah ', '0000-00-00', '', '2147483647', 'Manajemen', 'ekonomi', '085789292189', '', 'Mengahafal al-quran', 'Tamyiz', '', 'Damris', 'musreda elna', 'Tanah rekah Kab. Muko-muko', '082378757677', 'Tani'),
('C1C014004', 'Ripi Martalia', 'Ripi', 'Desa Tanjung enim Kab.Bengkulu Utara', 'Muara Payang, ', '0000-00-00', '', '2147483647', 'Akuntansi', 'Ekonomi', '081930546650', '', 'Membaca', 'OSIS dan Drum Band', 'Magh', 'Marzuki', 'Hermili wati', 'Desa Tanjung Anom Kec.Giri Mulya Kab.Bengkulu utara', '085208113131', 'Buruh Tani'),
('D0G015025', 'Losti', 'losti', 'Tungkal 11,Kec,Pino kaya Bengkulu selatan', 'tungkal II, ', '0000-00-00', '', '2147483647', 'd3 sektetaris', 'Fisip', '085839049086', '', 'membaca', 'osis', '', 'Asbahdi', 'sanaria', 'tungkal 2, Kec pino nraya', '085208564104', 'Petani'),
('D1b015008', 'Lilis Yuliana', 'Lilis', 'Kec muarakelingi, Kab, musi rawas', 'Banjar negara,', '0000-00-00', '', '0', 'Ilmu Perpustakaan', 'Fisip', '085840624912', '', '', '', '', 'Suherman', 'ratih', 'Kec, muara kelingi, kab musi rawas', '082375619954', 'Petani'),
('D1C010035', 'Chris Monika', 'Monik', 'Talan kelapa gg,jaka utama pagar alamselatan', 'pagar alam ', '0000-00-00', 'Islam', '0', 'Jurnalistik', 'Fisip', '082180106228', '-', '-', '-', '-', 'Jhon Sariono', 'Yusnaini', 'talang kelapa gg jaka utama pagar alam selatan ', '082180106228', ''),
('D1C014001', 'Heni', 'Heni', 'Pagar tengah pendopo,empat lawang', 'Tanjung baru,', '0000-00-00', '', '2147483647', 'Jurnalistik', 'Fisip', '081919291305', 'henydico1400@gmail.c', '', '', '', 'Holil Absor', 'Masnoni', 'Dusun sawah rt 03 rw 11 kel pagar tengah,pendopo,empat lawang', '085382184723', 'Petani'),
('D1D012047', 'Citra Dewi', 'Citra', 'Kompleks PT.SMS Tj.Laut, Palembang', 'mainan, ', '0000-00-00', '', '2147483647', 'Administarsi Negara', 'FISIP', '085378105365', 'dewcit@yahoo.co.id', 'membaca', 'Tari,Palasostil', 'Maag, Malaria', 'M.Yamin', 'erwani', 'Kompleks PT.SMS Tj.Laut, Palembang', '', 'Swasta'),
('D1D015062', 'Eka Lestari', 'Tari', 'Desa talang beringin, kec semidang alas maras, kab. Seluma', 'Bandung, ', '0000-00-00', '', '2147483647', 'administrasi negara', 'Fisip', '085377664858', '', '', '', '', 'Agustia budi', 'Erma suryani', 'Ds.talang beringin, Kec semidang alas maras', '081367172685', 'Petani'),
('D1E014090', 'Nur Fatimah', 'Nur', 'Desa T.bangun sari kab.musi rawas prov. Sumattera selatan', 'T.bangun Sari, ', '0000-00-00', '', '0', 'Ilmu komunikasi', 'FISIP', '087898156395', '', '', 'Rohis dan Pramuka', '', 'Sukimin', 'sariyah', 'Musi rawas Prov. Sumatera selatan', '085269675260', 'Petani'),
('D1F014033', 'Zukna', 'Zukna', 'Empat lawang, Provinsi sumtra selatan', 'Tj.Raya, ', '0000-00-00', '', '0', 'Sosiologi', 'Fisip', '085758871766', '', '', '', '', 'Husni', 'Zurna', 'Ds.Tj raya', '085217530734', 'Petani'),
('D1F014037', 'Wuni Nilam', 'Nila,', 'Desa Air meles kab. Rejang lebong', 'Curup, ', '0000-00-00', '', '2147483647', 'Sosiologi', 'FISIP', '08973357847', '', 'Olahraga', 'PIK-Remaja, Teater dan FAREL', '', 'Anvar Efendi', 'Sunarni', 'Kab.rejang lebong', '085380116503', 'Buruh Tani'),
('D1f015057', 'Laila Khotmi', 'Laila', 'Air Bangis, Pasaman barat, Sumbar', 'air bangis ', '0000-00-00', '', '2147483647', 'Sosiologi', 'Fisip', '082387347379', 'lailakhotmi 123 @ ga', 'Memasak', 'Pramuka', '', 'Yarwin', 'Rohima', 'Air bangis, pasaman barat, sumatera barat', '085268295141', 'Islam'),
('E1B014010', 'Resky Prima sakti', 'Resky', 'desa sindang panjang, Kec.tanjung sakti Lahat. Sumsel', 'Benuang, ', '0000-00-00', '', '2147483647', 'Kehutanan', 'Pertanian', '087813184038', '', '', '', '', 'Idaham', 'rasoinah', 'Sumsel', '087714870200', 'Petani'),
('E1C014017', 'Pimpi Sardianti', 'Pimpi', 'Desa Sindang Panjang Kec.Tanjung sakti', 'Sindang Panjang,', '0000-00-00', '', '2147483647', 'Peternakan', 'Pertanian', '085927018549', '', 'Membaca dan Bermain', 'OSIS dan PRAMUKA', '', 'Mulian', 'Holna', 'Desa Sindang Panjang', '085957750802', 'Petani'),
('E1C015022', 'Wahyuni', 'Yuni', 'Sumatera Utara', 'Sopo Sorik, ', '0000-00-00', '', '0', 'Peternakan', 'Pertanian', '085270198062', 'wahyunilubis123@yaho', 'Membaca', 'Osis', 'malaria', 'Ibrahim nasution', 'Sumi', 'Sopo Sorik,  Sumatera Utara', '082370398887', 'Petani'),
('E1D012046', 'Bestari Ramdani', 'tari', 'Psr. Simpang Empat, Kec.Pasaman Kab.Pasaman Barat Prov SUMBAR', 'Padang, ', '0000-00-00', '', '0', 'Agribisnis', 'Pertanian', '081994183824', '', 'membaca', '', '', 'M.Zen', 'Murniati', 'Psr. Simpang Empat, Kec.Pasaman Kab.Pasaman Barat Prov SUMBAR', '0753 65188/08', 'Wiraswasta'),
('E1d014026', 'Marta Cristina', 'Marta', 'Brastagi/sumutra utara', 'Berastagih, ', '0000-00-00', '', '2147483647', 'Agribisnis', 'Pertanian', '081269612294', '', '', '', '', 'Simon Sihotang', 'Riana Br simbolon', 'Berastagi, Sumut', '', 'Petani'),
('E1D014035', 'Finna Karunia', 'Finna', 'tanjung sakti, Lampung', 'Tanjung Sakti, ', '0000-00-00', '', '0', 'Agribisnis', 'Pertanian', '082281432128', 'Fikafenytasari@yahoo', '', 'OSIS', '', 'Sukri Akhkaf', 'khoirani', 'tanjung sakti', '085279243855', 'Honorer'),
('E1G010028', 'Ade Tri Utami ', 'ade', 'Kab,Kepahiang, Provinsi bengkulu', 'Benuang Baling, ', '0000-00-00', '', '0', 'Teknologi Industri pertanian', 'Pertanian', '085658343249', '', '', '', '', 'Buyung Hamzaini', 'Julia', 'Desa Benuang Baling, Kec, Seberang musi, Kab, Kepahiang', '085268074478', 'Buruh Tani'),
('E1G016008', 'Shelviana Putri', 'Shelvi', 'Kel. Bukit gemuruh, Kab, Way kanan, lampung', 'Way kanan,', '0000-00-00', '', '2147483647', 'Industri pertanian', 'Pertanian', '085841036396', '', '', '', '', 'Suharto', 'Lenfa Iliyati', 'Kel, bukit gemuruh, kec. Way tuba, lampug', '085378142209', 'Guru'),
('E1J015039', 'Siska Hardianti', 'Siska', 'kel,Mubai, Kec.Lebong selatan kab.lebong', 'Mubai, ', '0000-00-00', '', '0', 'Agroteknologi', 'Pertanian', '081539874667', '', 'Olahraga,memasak,membaca', 'panduan suara', '', 'Kamron', 'Hartati', 'kel, Mubai kec, Lebong selatan kab. Lebong', '085267225198', 'Petani'),
('E1J015047', 'Khusnul Khotimah', 'Husnul', 'Desamarga sakti, unit 1 padang jaya, bengkulu utara', 'Marga sakti, ', '0000-00-00', '', '0', 'Agroteknologi', 'Pertanian', '082282578552', '', '', '', '', 'Yunus', 'Rodiyah', 'Desa marga sakti kec, padang jaya , Kab. Bengkulu utara', '085211031468', 'Petani'),
('F1A014001', 'Ria Mustika', 'Ria', 'Karang Pinang, Kec.Sindang beliti kab.Rejang lebong', 'Karang pinang, ', '0000-00-00', '', '0', 'Matematika', 'MIPA', '085789624593', 'riamustika557@yahoo.', '', '', '', 'Sinar', 'Sataria Inda', 'Karang pinang, Kec.Sindang belitii. Kab. Rejang lebong', '082306723689', 'Petani'),
('F1A014052', 'Juni Arlikasari BR Haloho', 'Juni', 'Permhn Legok Indah, tanggerang', 'Tanggerang, ', '0000-00-00', '', '0', 'Matematika', 'MIPA', '081386343577', '', 'Membaca', '', '', 'Jon Eri Listo', 'Delima Turnip', 'Tanggerang', '081386343577', 'Guru'),
('F1A014066', 'Fajrina hanifah', 'Fajrina', 'Jl.Prof M Yamin Dwi Tunggal Curup', 'Curup, ', '0000-00-00', '', '2147483647', 'Matematika', 'MIPA', '087885002299', '', 'baca buku, online dan menggambar', '', '', 'Irfan', 'Endang Sri wahyuni', 'Curup', '085769379045', 'Honorer'),
('F1B015013', 'Yesi Afrina', 'yesi', 'desa talang empat n0 154 kec, karang tinggi Kab, bengkulu selatan', 'Gunung agung, ', '0000-00-00', '', '2147483647', 'Kimia', 'Mipa', '081539233850', 'yesiafrina04@gmail.c', 'Menulis', 'Risma', '', 'Sudirman', 'watini', 'Desa talang empat n0 154kec,karang tinngi kab.bengkulu selatan', '081366273764', 'Buruh harian'),
('F1B015016', 'Tria Amalia Citra', 'Citra', 'Pagar alam, Sumatera Selatan', 'Pagar alam, ', '0000-00-00', '', '2147483647', 'Kimia', 'MIPA', '082280294136', '', 'Menonton TV', 'OSIS dan PMR', '', 'Rudianto', 'Mastiri', 'Pagar alam, sematera selatan', '085368680869 ', 'Buruh Tani'),
('F1B015023', 'Nopa Rengga', 'Nopa', 'lahat, Sumatera Selatan', 'pulau panas, ', '0000-00-00', '', '2147483647', 'Kimia', 'MIPA', '081990064678', 'Noparengga@yahoo.com', '', '', '', 'Makroni', 'Sri murni', 'Sumatera Selatan', '087813148332', 'buruh Tani'),
('F1C015037', 'Nike septiana', 'Nike', 'Jl.pramuka kel,air bang kec,curup tengah,kab.rejang lebong.', 'Tembilahan ', '0000-00-00', '', '2147483647', 'Fisika', 'Mipa', '085383079267', 'nikeseptiana76@yahoo', 'Menggambar', '', '', 'Sudarusman', 'Murdati', 'Jl.lintas provinsi kel,pangkalan tujuh,kec.tempuling kab,indragiri,prov Riau', '085271156080', 'Pedagang keliling'),
('F1D013020', 'Arie Yaningsih', 'Arie', 'Desa Suka Jaya, Kec Sumber Harta', 'Suka Jaya, \'', '0000-00-00', '', '2147483647', 'Biologi', 'MIPA', '081279599430', '', 'Nonton TV,Membaca, Dengarin Musik', 'PMR dan Rohis', '', 'Sapari', 'Suwarsinah', 'Desa Suka Jaya Kec Sumber Harta', '081280967622', 'Petani'),
('F1D013032', 'Suriyanti', 'Suri', '', 'Curup, ', '0000-00-00', '', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
('G1A002042', 'sani putriana', 'Sani', 'Gunung Ayu', 'Gunung Ayu', '2018-06-11', 'Islam', '0987', 'Informatika', 'Teknik', '085809803288', 'saniputrianaone1@gmail.com', '-', '-', '', 'Herman', 'Sidariah', 'GUNUNG AYU', '082176707599', 'Tani'),
('G1A003042', 'sani putriana', 'Sani', 'Gunung Ayu', 'Gunung Ayu', '2018-06-12', 'Islam', '08', 'Informatika', 'Teknik', '085809803288', 'saniputrianaone1@gmail.com', 'Memanah', '-', '', 'Herman', 'Sidariah', 'GUNUNG AYU', '082176707599', '-'),
('G1A004042', 'sani putriana', 'Sani', 'Gunung Ayu', 'Gunung Ayu', '2018-06-12', 'Islam', '08', 'Informatika', 'Teknik', '085809803288', 'saniputrianaone1@gmail.com', 'Memanah', '-', '', 'Herman', 'Sidariah', 'GUNUNG AYU', '082176707599', '-'),
('G1A005042', 'sani putriana', 'Sani', 'Gunung Ayu', 'Gunung Ayu', '2018-06-12', 'Islam', '08', 'Informatika', 'Teknik', '085809803288', 'saniputrianaone1@gmail.com', 'Memanah', '-', '', 'Herman', 'Sidariah', 'GUNUNG AYU', '082176707599', '-'),
('G1A006042', 'sani putriana', 'Sani', 'Gunung Ayu', 'Gunung Ayu', '2018-06-12', 'Islam', '08', 'Informatika', 'Teknik', '085809803288', 'saniputrianaone1@gmail.com', 'Memanah', '-', '', 'Herman', 'Sidariah', 'GUNUNG AYU', '082176707599', '-'),
('G1A010042', 'sani putriana', 'Sani', 'Gunung Ayu', 'Gunung Ayu', '2018-06-13', 'Islam', '0987', 'Informatika', 'Teknik', '085809803288', 'saniputrianaone1@gmail.com', '-', '-', '', 'Herman', 'Sidariah', 'GUNUNG AYU', '082176707599', 'Tani'),
('G1A011042', 'sani putriana', 'Sani', 'Gunung Ayu', 'Gunung Ayu', '2018-06-13', 'Islam', '0987', 'Informatika', 'Teknik', '085809803288', 'saniputrianaone1@gmail.com', '-', '-', '', 'Herman', 'Sidariah', 'GUNUNG AYU', '082176707599', 'Tani'),
('G1A012009', 'Aprilia dwi Gumay', 'April', 'Jl.Isau-isau Gg Tengah no.24 Lahat SUMSEL', 'Bekasi, 3 April 1994', '0000-00-00', '', '0', 'Teknik Informatika', 'Teknik', '085664962494', 'avril_dwie@ymail.com', '', '', '', 'Syamsul Gunawan', 'Tumiasih', 'Jl.Isau-isau Gg Tengah no.24 Lahat SUMSEL', '085381690994', 'Tani'),
('G1A013042', 'sani putriana', 'Sani', 'Gunung Ayu', 'Gunung Ayu', '2018-06-13', 'Islam', '0987', 'Informatika', 'Teknik', '085809803288', 'saniputrianaone1@gmail.com', '-', '-', '', 'Herman', 'Sidariah', 'GUNUNG AYU', '082176707599', 'Tani'),
('G1A015040', 'Daenerys Targaryen', 'Dany', 'Dragonstone the House of Targaryen', '', '2018-10-08', 'Islam', '-', 'Informatika', 'Teknik', '-', 'daenerys@gmail.com', 'Travelling', 'Seven Kingdoms', '-', 'Aegon', 'Rhaella', 'Dragonstone', '-', 'PNS'),
('G1A015042', 'sani putriana', 'Sani', 'Gunung Ayu', 'Gunung Ayu', '1996-07-05', 'Islam', '1701024507960001', 'Informatika', 'Teknik', '085809803288', 'saniputrianaone1@gmail.com', 'Memanah', 'Syi\'ar UKM Kerohanian UNIB', '-', 'Herman', 'Sidariah', 'Gunung Ayu', '082176707599', 'Tani'),
('G1A018042', 'sani putriana', 'Sani', 'Gunung Ayu', 'Gunung Ayu', '1996-07-05', 'Islam', '-', 'Informatika', 'Teknik', '085809803288', 'saniputrianaone1@gmail.com', '-', 'Mostanner', '', 'Herman', 'Sidariah', 'GUNUNG AYU', '082176707599', 'Tani'),
('G1A019042', 'sani putriana', 'Sani', 'Gunung Ayu', 'Gunung Ayu', '2018-06-13', 'Islam', '0987', 'Informatika', 'Teknik', '085809803288', 'saniputrianaone1@gmail.com', '-', '-', '', 'Herman', 'Sidariah', 'GUNUNG AYU', '082176707599', 'Tani'),
('G1B015015', 'Nina Siti Munawaroh', 'Nina', 'Marga Mulya, Kamp.Tj. Sari Kec Lunang Kab.pes-sep provinsi. Sumbar', 'T j. Sari ', '0000-00-00', '', '0', 'Tekni Sipil', 'Teknik', '82385327476', '', '', 'osis', '', 'Edi sugeng prayitno', 'Amalyah', 'Marga Mulya. Kamp. Tj sari kec,lunang, kab. Pes-sel prov.sumbar', '8228399851', 'rumah tangga'),
('G1B015037', 'Nelvi Andesi', 'Nelvi', 'Sungai Gemuruh, Kec.Pancung soal, Kab.Pesisir Selatan', 'Sungai Gemuruh', '0000-00-00', '', '2147483647', 'Teknik Sipil', 'Teknik', '085272226342', 'Nelviandesi@gmail.co', 'Jalan-jalan dan baca novel', '', '', 'Zakir', 'Alm.Nurani', 'Sungai Gemuruh, Kec.Pancung Soal, Kab.Pesisir Selatan', '081261238144', 'Petani'),
('G1D014005', 'Reska Putri Ayu', '', 'Sumatera Selatan', '', '0000-00-00', '', '0', '', '', '', '', '', '', '', '', '', '', '', ''),
('G1D015042', 'Bella Puspitasary', 'bella', 'Bukit Tinggi', 'Bengkulu', '1997-05-01', 'Islam', '-', 'Elektro', 'Teknik', '085809803288', 'bellapuspitasary12@gmail.com', 'membaca', 'Mostanner', '', 'Suryadi', '-', 'Padang', '082176707599', 'Tani'),
('G1D018042', 'mnnm', 'hjjh', 'kkj', 'mmn', '2018-06-20', 'Islam', '0987', 'Informatika', 'Teknik', '085809803288', '-', '-', '-', '', '-', 'Sidariah', 'bnbn', '082176707599', 'Tani'),
('H1A015015', 'Berliana malau', 'Berliana', 'Pasar Kepahyang', 'Kepahyang ', '0000-00-00', '', '0', 'Pendidikan dokter', 'Kedokteran', '08994818904', '', '', '', '', 'Marunggal Malau', 'Risma sinaga', 'Pasar kepahyang', '085383616748', 'Wiraswasta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id` int(3) NOT NULL,
  `jenis` enum('fasilitas','slider') NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_gambar`
--

INSERT INTO `tb_gambar` (`id`, `jenis`, `gambar`, `keterangan`) VALUES
(1, 'fasilitas', 'rb.jpg', 'Ruang Bersama'),
(2, 'fasilitas', 'ruang tamu.jpg', 'Ruang Tamu'),
(4, 'fasilitas', 'parkiran.jpg', 'Parkiran'),
(5, 'fasilitas', 'aula.jpg', 'Aula'),
(6, 'fasilitas', 'kamar ya.jpg', 'Kamar'),
(7, 'fasilitas', 'kamar mandi.jpg', 'Kamar Mandi'),
(8, 'slider', 'yy.jpg', 'Gedung Asrama Putri Orchid UNIB'),
(9, 'slider', 'san.jpg', 'Asrama Tampak Depan'),
(10, 'slider', 'kamar.jpg', 'Kamar Asrama'),
(11, 'fasilitas', 'mushola.jpg', 'Musholla');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id_kamar` int(3) NOT NULL,
  `id_lantai` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id_kamar`, `id_lantai`) VALUES
(201, 2),
(202, 2),
(203, 2),
(204, 2),
(205, 2),
(206, 2),
(207, 2),
(208, 2),
(209, 2),
(210, 2),
(211, 2),
(212, 2),
(213, 2),
(214, 2),
(215, 2),
(216, 2),
(217, 2),
(218, 2),
(219, 2),
(220, 2),
(221, 2),
(222, 2),
(223, 2),
(224, 2),
(225, 2),
(226, 2),
(301, 3),
(302, 3),
(303, 3),
(304, 3),
(305, 3),
(306, 3),
(307, 3),
(308, 3),
(309, 3),
(310, 3),
(311, 3),
(312, 3),
(313, 3),
(314, 3),
(315, 3),
(316, 3),
(317, 3),
(318, 3),
(319, 3),
(320, 3),
(321, 3),
(322, 3),
(323, 3),
(324, 3),
(325, 3),
(326, 3),
(401, 4),
(402, 4),
(403, 4),
(404, 4),
(405, 4),
(406, 4),
(407, 4),
(408, 4),
(409, 4),
(410, 4),
(411, 4),
(412, 4),
(413, 4),
(414, 4),
(415, 4),
(416, 4),
(417, 4),
(418, 4),
(419, 4),
(420, 4),
(421, 4),
(422, 4),
(423, 4),
(424, 4),
(425, 4),
(426, 4),
(501, 5),
(502, 5),
(503, 5),
(504, 5),
(505, 5),
(506, 5),
(507, 5),
(508, 5),
(509, 5),
(510, 5),
(511, 5),
(512, 5),
(513, 5),
(514, 5),
(515, 5),
(516, 5),
(517, 5),
(518, 5),
(519, 5),
(520, 5),
(521, 5),
(522, 5),
(523, 5),
(524, 5),
(525, 5),
(526, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lantai`
--

CREATE TABLE `tb_lantai` (
  `id_lantai` int(1) NOT NULL DEFAULT '0',
  `harga` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lantai`
--

INSERT INTO `tb_lantai` (`id_lantai`, `harga`) VALUES
(2, 1200000),
(3, 1150000),
(4, 1000000),
(5, 900000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_penghuni` int(5) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `lampiran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_penghuni`, `jumlah_bayar`, `tgl_bayar`, `lampiran`) VALUES
(70, 278, 500000, '2018-08-06 00:08:00', 'bukti_bayar.PNG'),
(71, 278, 200000, '2018-10-09 13:10:31', 'bukti_bayar1.PNG'),
(72, 278, 500000, '2018-10-09 13:10:11', 'bukti_bayar2.PNG'),
(73, 281, 500000, '2018-10-10 19:10:55', 'bukti_bayar3.PNG'),
(74, 281, 500000, '2018-10-10 19:10:18', 'bukti_bayar4.PNG'),
(76, 272, 500000, '2018-10-11 09:10:10', 'bukti_bayar6.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` enum('admin','mahasiswa','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`username`, `password`, `level`) VALUES
('A1A014029', '123', 'mahasiswa'),
('A1A014060', '123', 'mahasiswa'),
('A1B015012', '', 'mahasiswa'),
('A1B016016', '', 'mahasiswa'),
('A1b037030', '', 'mahasiswa'),
('A1B049017', '', 'mahasiswa'),
('A1C013007', '', 'mahasiswa'),
('A1D015030', '', 'mahasiswa'),
('A1E015026', '', 'mahasiswa'),
('A1F015009', '', 'mahasiswa'),
('A1F015014', '', 'mahasiswa'),
('A1F016007', '', 'mahasiswa'),
('A1I014059', '', 'mahasiswa'),
('A1I014061', '', 'mahasiswa'),
('A1I015022', '', 'mahasiswa'),
('A1I015056', '', 'mahasiswa'),
('A1I016012', '', 'mahasiswa'),
('A1I016039', '', 'mahasiswa'),
('A1J016008', '', 'mahasiswa'),
('A1L013056', '', 'mahasiswa'),
('A1L014029', '', 'mahasiswa'),
('A1L016006', '', 'mahasiswa'),
('admin', 'admin', 'admin'),
('admin2', 'admin2', 'admin'),
('B1A015018', '', 'mahasiswa'),
('B1A015067', '', 'mahasiswa'),
('B1A015089', '', 'mahasiswa'),
('B1a016008', '', 'mahasiswa'),
('C0C015051', '', 'mahasiswa'),
('C1A014009', '', 'mahasiswa'),
('C1b050047', '', 'mahasiswa'),
('C1C014004', '', 'mahasiswa'),
('D0G015025', '', 'mahasiswa'),
('D1b015008', '', 'mahasiswa'),
('D1C010035', '', 'mahasiswa'),
('D1C014001', '', 'mahasiswa'),
('D1D012047', '', 'mahasiswa'),
('D1D015062', '', 'mahasiswa'),
('D1E014090', '', 'mahasiswa'),
('D1F014033', '', 'mahasiswa'),
('D1F014037', '', 'mahasiswa'),
('D1f015057', '', 'mahasiswa'),
('E1B014010', '', 'mahasiswa'),
('E1C014017', '', 'mahasiswa'),
('E1C015022', '', 'mahasiswa'),
('E1D012046', '', 'mahasiswa'),
('E1d014026', '', 'mahasiswa'),
('E1D014035', '', 'mahasiswa'),
('E1G010028', '', 'mahasiswa'),
('E1G016008', '', 'mahasiswa'),
('E1J015039', '', 'mahasiswa'),
('E1J015047', '', 'mahasiswa'),
('F1A014001', '', 'mahasiswa'),
('F1A014052', '', 'mahasiswa'),
('F1A014066', '', 'mahasiswa'),
('F1B015013', '', 'mahasiswa'),
('F1B015016', '', 'mahasiswa'),
('F1B015023', '', 'mahasiswa'),
('F1C015037', '', 'mahasiswa'),
('F1D013020', '', 'mahasiswa'),
('F1D013032', '', 'mahasiswa'),
('G1A002042', '123', 'mahasiswa'),
('G1A003042', '123', 'mahasiswa'),
('G1A004042', '123', 'mahasiswa'),
('G1A005042', '123', 'mahasiswa'),
('G1A006042', '123', 'mahasiswa'),
('G1A010042', '123', 'mahasiswa'),
('G1A011042', '123', 'mahasiswa'),
('G1A012009', '', 'mahasiswa'),
('G1A013042', '123', 'mahasiswa'),
('G1A015040', 'qwertyuiop', 'mahasiswa'),
('G1A015042', '123', 'mahasiswa'),
('G1A018042', '123', 'mahasiswa'),
('G1A019042', '123', 'mahasiswa'),
('G1B015015', '', 'mahasiswa'),
('G1B015037', '', 'mahasiswa'),
('G1D014005', '', 'mahasiswa'),
('G1D015042', '123', 'mahasiswa'),
('G1D018042', '', 'mahasiswa'),
('H1A015015', '', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penghuni_kamar`
--

CREATE TABLE `tb_penghuni_kamar` (
  `id_penghuni` int(5) NOT NULL,
  `id_kamar` int(3) NOT NULL,
  `npm` varchar(9) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `keterangan` enum('preaktif','aktif','nonaktif') NOT NULL,
  `semester` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penghuni_kamar`
--

INSERT INTO `tb_penghuni_kamar` (`id_penghuni`, `id_kamar`, `npm`, `tgl_masuk`, `keterangan`, `semester`) VALUES
(272, 201, 'A1A014029', '2018-06-26', 'aktif', 'Ganjil 2018/2019'),
(273, 301, 'A1A014060', '2018-06-26', 'preaktif', 'Ganjil 2018/2019'),
(274, 401, 'A1B015012', '2018-06-26', 'preaktif', 'Ganjil 2018/2019'),
(275, 204, 'A1B016016', '2018-06-26', 'preaktif', 'Ganjil 2018/2019'),
(276, 501, 'A1b037030', '2018-06-26', 'preaktif', 'Ganjil 2018/2019'),
(278, 202, 'G1A015042', '2018-08-06', 'aktif', 'Ganjil 2018/2019'),
(279, 202, 'A1D015030', '0000-00-00', 'preaktif', 'Ganjil 2018/2019'),
(281, 201, 'G1A015040', '2018-10-10', 'aktif', 'Ganjil 2018/2019');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `id` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`id`, `nama`, `jabatan`, `tahun`) VALUES
(1, 'Dr. Ridwan Nurazi, SE., M.Cs.', 'Rektor Universitas Bengkulu', 2018),
(2, 'Elhusna, S.T., M.T.', 'Ketua Pengelola Asrama Orchid UNIB', 2018),
(3, 'Ir.Gunawan, M.Si.', 'Wakil Ketua Asrama Putri Orchid', 2018),
(4, 'Suganda, S.E, MM.', 'Sekretaris', 2018),
(5, 'Susi Rahayu, S.Pt.', 'Bendahara', 2018),
(6, 'Riskan Efendi, S.IP', 'Koordinator Adm & Umum', 2018),
(7, 'Arifin Ma\'arif, S.Kom.', 'Kabag Pemeliharaan Sarana & Prasarana Asrama Putri Orchid ', 2018),
(8, 'Kenluis, A.Md.', 'Koordinator Pembinaan Mahasiswi Asrama', 2018),
(9, 'Meilin Nadia dan Ririn Agusmaini, S.Ikom', 'Staf Administrasi & Umum', 2018),
(10, 'Ibu RW dan Ibu RT', 'Pembina Mahasiswi Asrama Putri Orchid Universitas Bengkulu', 2018),
(11, 'Asnani Ali', 'Bapak Penjaga Asrama Putri Orchid', 2018),
(12, 'Joni Erdi', 'Koordinator Keamanan', 2018),
(13, 'Kusnandar', 'Petugas Keamanan', 2018),
(14, 'Sairul Anam ', 'Petugas Keamanan', 2018),
(15, 'Suryadi Irawan', 'Petugas Kebersihan Taman', 2018),
(16, 'Lenti Nada', 'Petugas Kebersihan Lantai 2', 2018),
(17, 'Yurmani', 'Petugas Kebersihan Lantai 3', 2018),
(18, 'Kemadia', 'Petugas Kebersihan Lantai 4', 2018),
(19, 'Endang', 'Petugas Kebersihan Lantai 5', 2018),
(20, 'Elyas Taufik', 'Petugas Listrik', 2018),
(21, 'Sumyarso', 'Petugas Air', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `tb_umum`
--

CREATE TABLE `tb_umum` (
  `id` int(1) NOT NULL,
  `nama_asrama` varchar(100) NOT NULL,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `map_latitude` varchar(20) NOT NULL,
  `map_langitude` varchar(20) NOT NULL,
  `semester_aktif` varchar(16) NOT NULL,
  `masa_pendaftaran` enum('0','1') NOT NULL,
  `info_pembayaran` text NOT NULL,
  `penghuni_per_kamar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_umum`
--

INSERT INTO `tb_umum` (`id`, `nama_asrama`, `sejarah`, `visi`, `misi`, `alamat`, `telepon`, `logo`, `map_latitude`, `map_langitude`, `semester_aktif`, `masa_pendaftaran`, `info_pembayaran`, `penghuni_per_kamar`) VALUES
(1, 'ASRAMA PUTRI ORCHID UNIVERSITAS BENGKULU', '<p style=\"text-align: justify;\">Asrama Putri Orchid Universitas Bengkulu adalah asrama mahasiswa khusus putri, yang merupakan salah satu fasilitas pendukung kegiatan mengajar di lingkungan Universitas Bengkulu yang diharapkan dapat digunakan sebagai hunian sementara mahasiswa dengan fasilitas dan kegiatan yang memadai, sehingga dapat mendukung proses belajar mahasiswa dan diharapkan penghuni asrama dapat memiliki prestasi yang baik. Asrama Putri Orchid Universitas Bengkulu berdiri sejak tahun 2010, Asrama Putri Orchid Beralamat di Jalan Pondok Bulat Gang 3.RT/RW.10/2 UNIB Belakang.</p>', '<p>Asrama sebagai hunian sementara mahasiswa yang representative sebagai sarana pendukung belajar mahasiswa UNIB.</p>', '<ol>\r\n<li>Sebagai hunian sementara yang ideal untuk menuntut ilmu dengan suasana kondusif.</li>\r\n<li>Sebagai sarana interaktif dan sosialisasi antara mahasiswa dalam lingkungan formal maupun non formal sehingga suasana kampus UNIB menjadi lebih dinamis.</li>\r\n<li>Sebagai hunian sementara dengan biaya sewa dan hidup yang terjangkau.</li>\r\n</ol>', 'Jalan Pondok Bulat Gang 3.RT/RW.10/2 UNIB Belakang.', '082281264609', 'unib.png', '-3.7554111', '102.2778136', 'Ganjil 2018/2019', '1', '<p>Silahkan melakukan pembayaran ke ...</p>\r\n<p>Pembayaran dapat dilakukan....</p>\r\n<p>Konfirmasi pembayaran dengan mengunggah bukti .....</p>\r\n<p>Konfirmasi pembayaran pertama dilakukan paling lambat 5 jam setelah memesan kamar</p>', 4);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_pembayaran`
-- (See below for the actual view)
--
CREATE TABLE `vw_pembayaran` (
`id_penghuni` int(5)
,`nama_lengkap` varchar(50)
,`npm` varchar(9)
,`id_kamar` int(3)
,`semester` varchar(16)
,`keterangan` enum('preaktif','aktif','nonaktif')
,`jumlah` decimal(32,0)
,`sisa` decimal(33,0)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_pembayaran`
--
DROP TABLE IF EXISTS `vw_pembayaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_pembayaran`  AS  select `tb_penghuni_kamar`.`id_penghuni` AS `id_penghuni`,`tb_biodata_penghuni`.`nama_lengkap` AS `nama_lengkap`,`tb_biodata_penghuni`.`npm` AS `npm`,`tb_penghuni_kamar`.`id_kamar` AS `id_kamar`,`tb_penghuni_kamar`.`semester` AS `semester`,`tb_penghuni_kamar`.`keterangan` AS `keterangan`,coalesce(sum(`tb_pembayaran`.`jumlah_bayar`),0) AS `jumlah`,(`tb_lantai`.`harga` - coalesce(sum(`tb_pembayaran`.`jumlah_bayar`),0)) AS `sisa` from ((((`tb_penghuni_kamar` left join `tb_pembayaran` on((`tb_pembayaran`.`id_penghuni` = `tb_penghuni_kamar`.`id_penghuni`))) join `tb_biodata_penghuni` on((`tb_biodata_penghuni`.`npm` = `tb_penghuni_kamar`.`npm`))) join `tb_kamar` on((`tb_kamar`.`id_kamar` = `tb_penghuni_kamar`.`id_kamar`))) join `tb_lantai` on((`tb_lantai`.`id_lantai` = `tb_kamar`.`id_lantai`))) group by `tb_penghuni_kamar`.`id_penghuni` order by `tb_penghuni_kamar`.`semester` desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_biodata_penghuni`
--
ALTER TABLE `tb_biodata_penghuni`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `nomor_kamar` (`id_kamar`),
  ADD KEY `lantai` (`id_lantai`);

--
-- Indexes for table `tb_lantai`
--
ALTER TABLE `tb_lantai`
  ADD PRIMARY KEY (`id_lantai`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_penghuni` (`id_penghuni`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_penghuni_kamar`
--
ALTER TABLE `tb_penghuni_kamar`
  ADD PRIMARY KEY (`id_penghuni`),
  ADD KEY `npm` (`npm`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_umum`
--
ALTER TABLE `tb_umum`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `tb_penghuni_kamar`
--
ALTER TABLE `tb_penghuni_kamar`
  MODIFY `id_penghuni` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;
--
-- AUTO_INCREMENT for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_umum`
--
ALTER TABLE `tb_umum`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD CONSTRAINT `tb_kamar_ibfk_1` FOREIGN KEY (`id_lantai`) REFERENCES `tb_lantai` (`id_lantai`);

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_3` FOREIGN KEY (`id_penghuni`) REFERENCES `tb_penghuni_kamar` (`id_penghuni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penghuni_kamar`
--
ALTER TABLE `tb_penghuni_kamar`
  ADD CONSTRAINT `tb_penghuni_kamar_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `tb_biodata_penghuni` (`npm`),
  ADD CONSTRAINT `tb_penghuni_kamar_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `tb_kamar` (`id_kamar`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
