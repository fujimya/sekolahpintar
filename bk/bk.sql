/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.16 : Database - db_pelanggar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_pelanggar` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_pelanggar`;

/*Table structure for table `tbl_ajukan` */

DROP TABLE IF EXISTS `tbl_ajukan`;

CREATE TABLE `tbl_ajukan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) DEFAULT NULL,
  `isi` text,
  `poin` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `nip` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_ajukan` */

insert  into `tbl_ajukan`(`id`,`kategori`,`isi`,`poin`,`status`,`nip`) values (5,'1','Datang telat',5,0,'1000');

/*Table structure for table `tbl_guru` */

DROP TABLE IF EXISTS `tbl_guru`;

CREATE TABLE `tbl_guru` (
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL,
  `nope` varchar(30) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_guru` */

insert  into `tbl_guru`(`nip`,`nama`,`jabatan`,`password`,`alamat`,`nope`) values ('1000','FUJI LESTARI,S.Pd','guru','0000','Jl test alamat','089654543231'),('2000','GERY FERDHO HIPSON,S.Pd','guru','1111','Jl. Aster II','082178906752'),('231296','ELFIDA,S.Pd','guru','9090','Jl.Permata biru','082252768090'),('3000','MAYA SHANTIE,S.Pd','guru','8080','Jl. Agung 6','0823657865'),('4000','DIYAN FIRMANSYAH,S.Pd','guru','7070','Jl.Kelud Raya','082276537890'),('5000','FITRI DARYANI,S.Pd','guru','6060','Jl. Pulau Sebesi','082178302076'),('6000','Wahyu','admin','2323','',''),('admin','admin','admin','123','',''),('guru','GURU','guru','123','','');

/*Table structure for table `tbl_kategori` */

DROP TABLE IF EXISTS `tbl_kategori`;

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kategori` */

insert  into `tbl_kategori`(`id`,`kategori`) values (1,'TERLAMBAT'),(2,'KEHADIRAN'),(3,'KERAPIHAN BERPAKAIAN'),(4,'KETERTIBAN'),(5,'MEROKOK'),(6,'NARKOBA DAN MINUMAN KERAS'),(7,'BACAAN PORNO'),(8,'PRILAKU SEKSUAL'),(9,'SENJATA API DAN SENJATA TAJAM'),(10,'BERKELAHI / TAWURAN'),(11,'INTIMIDASI / ANCAMAN');

/*Table structure for table `tbl_pelanggaran` */

DROP TABLE IF EXISTS `tbl_pelanggaran`;

CREATE TABLE `tbl_pelanggaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) DEFAULT NULL,
  `isi` text,
  `poin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pelanggaran` */

insert  into `tbl_pelanggaran`(`id`,`kategori`,`isi`,`poin`) values (3,'3','Gondrong Sekali',2);

/*Table structure for table `tbl_siswa` */

DROP TABLE IF EXISTS `tbl_siswa`;

CREATE TABLE `tbl_siswa` (
  `nis` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `alamat_siswa` text,
  `nope_ortu` varchar(100) DEFAULT NULL,
  `nama_ortu` varchar(100) DEFAULT NULL,
  `alamat_ortu` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_siswa` */

insert  into `tbl_siswa`(`nis`,`nama_siswa`,`tempat_lahir`,`tanggal_lahir`,`jenis_kelamin`,`agama`,`alamat_siswa`,`nope_ortu`,`nama_ortu`,`alamat_ortu`) values ('0783','Adam Kamiliyas Kerr','Bandarlampung','2008-06-12','Jenis Kelamin','Islam','Perumahan Vila citra Blok DD','085145261789','Sadam','Perumahan Vila citra Blok D '),('0785','Alifah Dzatil Izzah Putri','Bandarlampung','2008-02-12','Perempuan','Islam','Jl. Pulau Buton No.51','085165784321','Arin','Jl. Pulau Buton No.51 '),('7000','Alvaj Levy Latiffaziz','Bandarlampung','2008-11-11','Laki-laki','Islam','Kampung Sawah Lama','082178345290','Purwono',' Kampung Sawah Lama'),('7001','FATIH NAJWAN AZURRA','Bandarlampung','2008-07-25','Perempuan','Islam','Jl.Pramuka raya','082165676489','Azrin',' Jl.Pramuka raya'),('70012','Ahmad Rifqi Fadhilah','Bandarlampung','2008-05-22','Laki-laki','Islam','Jl.Tengku Umar gang karya','082183651409','Tomizan',' Jl.Tengku Umar gang karya'),('7002','Keyla Azizah Azzahrah','Bandarlampung','2008-03-28','Perempuan','Islam','Jl.sawah Lama','082284568076','Joni',' Jl.Sawah lama'),('7003','KEYSHA PUTRI  PRASETIA','Bandarlampung','2008-06-20','Perempuan','Islam','Jl.Mahesa II','0822453424','Kamroni',' Jl. Mahesa II'),('7004','LOVIYA IVANA SAMANTHA ROHI','Bandarlampung','2008-07-19','Perempuan','Islam','Jl.Paneharan IV','0821569087','Topan',' Jl.Paneharan IV'),('7005','ALIEFQI ZAHRAN HAKKAM ADILA','Bandarlampung','2008-08-20','Laki-laki','Islam','Jl.gunung agung','0878345678','Sayiful Bahri',' Jl.Gunung Agung'),('7006','MUHAMMAD FIKRI ABDURRAHMAN','Bandarlampung','2008-05-24','Laki-laki','Islam','Jl.Perum Sukabumi','0821234576','Fadhila',' Jl.Perum Sukabumi'),('7007','MUHAMMAD HAFIZ HAIRULLOH','Bandarlampung','2008-04-20','Laki-laki','Islam','Jl. Sadewo Bawah','0821657843','Zainal',' Jl. Sadewo Bawah'),('7008','Muhammad Kevin Juliano','Bandarlampung','2008-05-01','Laki-laki','Islam','Jl.Sadewo Atas','085278456969','Sukarni',' Jl.Sadewo Atas'),('7009','ALYA KIRANA','Bandarlampung','2008-01-30','Perempuan','Islam','Jl.agung II no.90','0852906789','Supriyono',' Jl.Agung II no.90'),('7010','Muhammad Raka Al Baihaqi','Bandarlampung','2008-05-20','Laki-laki','Islam','Jl.Bawah Terowongan','082284539847','Heru Saputro',' Jl.Bawah Terowongan'),('7011','AHMAD ALIF RAIHAN','Bandarlampung','2008-02-20','Laki-laki','Islam','Jl.Pulau damar','082176907698','Amirudin',' Jl.Pulau damar'),('7012','Ahmad Rifqi Fadhilah','Bandarlampung','2008-07-20','Laki-laki','Islam','Jl.Pulau Bacan','082284638765','Samsudin',' Jl.Pulau Bacan'),('7013','Al Fawwaz Naiki Chandito','Bandarlampung','2008-08-30','Laki-laki','Islam','Jl.Pulau Semangka','082189768765','Wagiyono',' Jl.Pulau Semangka'),('7014','ALICIA YUANNINDITA','Bandarlampung','2008-02-02','Perempuan','Islam','Jl.Aster No.144','082265789087','Joko','Jl.Aster No.144 '),('7015','Anna Zahra Althafunnisa','Bandarlampung','2008-04-10','Perempuan','Islam','Jl.pulau antasari gang kelinci No.90','082289756123','elen',' Jl.pulau antasari gang kelinci No.90'),('7016','ANNISA JUTIA RAMADHANI','Bandarlampung','2008-05-21','Perempuan','Islam','Jl. Kelud 1 No.80','082276437164','Pajri',' Jl. Kelud 1 No.80'),('7017','DANU ALTANTRIAN TORA','Bandarlampung','2008-05-20','Laki-laki','Islam','Jl.Pisang Atas','085170908765','Damori',' Jl.Pisang Atas'),('7018','Dinka Kayla Juniesti','Bandarlampung','2007-02-16','Perempuan','Islam','Jl. Bunga Angrek No.56','085287615243','Putri',' Jl. Bunga Angrek No.56'),('7019','Farel Rakha Ramadhan','Bandarlampung','2008-11-11','Laki-laki','Islam','Gang Kangguru No.20','082165789076','Finka',' Gang Kangguru No.20'),('7020','Indah Hati Kurniasari','Bandarlampung','2008-05-22','Perempuan','Islam','Jl.Agung Raya No.120','085167549876','Dermawan','Jl.Agung Raya No.125 '),('7021','Kaysan Hanif Rabbani Fikri','Bandarlampung','2008-12-01','Laki-laki','Islam','Jl.agung V No.20','082276539809','Zupri',' Jl.Agung V no.20'),('7022','Keisya Cantika Putri ','Bandarlampung','2008-07-25','Perempuan','Islam','Jl.Kelud V no.80','085278302090','Hayati','Jl.Kelud V no.80 '),('7023','Keysha Kirania Putri','Bandarlampung','2008-09-20','Perempuan','Islam','Jl.Galungung Raya N0.20','082298760807','Andika','Jl.Galungung Raya N0.20 '),('7024','M. Haekal Qadafi','Bandarlampung','2008-09-08','Laki-laki','Islam','Jl.Kimaja ','082109089080','Qadafi','Jl.Kimaja '),('7025','M.Bian Rauuf Rabbani','Bandarlampung','2008-07-21','Laki-laki','Islam','Jl.Pasar Gintung','082156413170','Rabbani','Jl.Pasar Gintung '),('7026','Muh Raya Marcho','Bandarlampung','2008-01-25','Laki-laki','Islam','Jl. Kenangan 3','082256784321','Haikal Putra','Jl. Kenangan 3 '),('7027','Muhammad Afif Afriyanto','Bandarlampung','2008-04-11','Laki-laki','Islam','Jl. Feteran No.67','082256423298','Afiriyanto',' Jl. Feteran No.67'),('7028','Muhammad Arka Dirga ','Bandarlampung','2008-05-24','Laki-laki','Islam','Jl. Mau Tau Aja No.90','082254615980','Jamilatu',' Jl. Mau Tau Aja No.90'),('7029','MUHAMMAD BACHTIAR RAMADAN','Bandarlampung','2008-04-23','Laki-laki','Islam','Jl.Tikung temen','082145769864','Kartono','Jl.Tikung temen '),('7030','MUHAMMAD FAYYADH FADILAH','Bandarlampung','2008-06-21','Laki-laki','Islam','Jl. kebun jeruk','082143569087','Lilis','Jl. kebun jeruk '),('7031','AGITHA KEYSA HAFIZHA','Bandarlampung','2008-03-01','Perempuan','Islam','Jl. Tengku Umar','082178760998','Umarnudin','Jl. Tengku Umar '),('7032','AINIYA AQILA AZMI','Bandarlampung','2008-04-22','Perempuan','Islam','Jl.P.Mnor','082287367278','Muklis',' Jl.P.Mnor'),('7033','Akila Alka Ramadhan','Bandarlampung','2008-03-11','Laki-laki','Islam','Jl.Pulau Nangka','082187659087','Lukman','Jl.Pulau Nangka '),('7034','Aldisya Mozar','Bandarlampung','2008-03-05','Perempuan','Islam','Jl.Pulau Kelengkeng','082276529051','Imam','Jl.Pulau Kelengkeng '),('7035','ANNISA MUTIARA SLANIK','Bandarlampung','2008-04-21','Perempuan','Islam','Jl.Kambing no.20','085298765432','Dedi',' Jl.Kambing no.20'),('7036','AZARIN ELFRIDA SHAKILA','Bandarlampung','2008-02-20','Perempuan','Islam','Jl.Semangka no.90','085267540987','Azzam',' Jl.Semangka no.90'),('7037','Balqisia Mahesvari ivan ','Bandarlampung','2008-04-22','Perempuan','Islam','Jl.Pepaya no.80','085267878909','Yudha',' Jl.Pepaya no.80'),('7038','Chandreshta Adiba Kurniawan','Bandarlampung','2008-05-22','Perempuan','Islam','Jl.Teluk Betung Atas','082198765456','Hermawan',' Jl.Teluk Betung Atas'),('7039','Charista Salma Viranty Nur','Bandarlampung','2008-08-07','Perempuan','Islam','Jl. Agung II no.54','085198769860','Vranty','Jl. Agung II no.54 '),('7040','Fauziyah Zahra Elvina','Bandarlampung','2008-03-30','Perempuan','Islam','Jl. Gunung Rajabasa','082153098764','Rahmat','Jl. Gunung Rajabasa '),('7041','A. Latif Siregar','Bandarlampung','2008-07-19','Laki-laki','Islam','Jl. Merbabu Raya no.20','082409899076','Saimin',' Jl. Merbabu Raya no.20'),('7042','ADELIA PUTRI SANTOSO','Bandarlampung','2008-04-23','Perempuan','Islam','Jl.Tunggu Aja','082178654320','Tuti','Jl.Tunggu Aja '),('7043','Bunga Cantika Asmara','Bandarlampung','2008-02-25','Perempuan','Islam','Jl.Kebahagian','082187907656','Rahmadhan',' Jl.Kebahagian'),('7044','Alieffattan Ibnu Ramzi','Bandarlampung','2008-05-24','Laki-laki','Islam','Jl.Galunggng IV no.133','081279550811','Heri oktavian',' Jl.Galunggng IV no.133'),('7045','Caesar Athaillah Permana','Bandarlampung','2008-04-25','Laki-laki','Islam','Jl.Kebon bambu','082178659098','hamzi','Jl.Kebon bambu '),('7046','FATHIR RIZQI SINATRYA PAGAR A','Bandarlampung','2008-05-21','Laki-laki','Islam','Jl.Kesempurnaan','082190876543','Sinatrya',' Jl.Kesempurnaan'),('7047','Florencia Della Rosa','Bandarlampung','2008-04-21','Perempuan','Islam','Jl. satya Marga','082187654389','Della','Jl. Satya Marga'),('7048','Glessya Gendis Aurell','Bandarlampung','2008-05-30','Perempuan','Islam','Jl.Pulau Bacan','082176549087','Satya','Jl. Pulau Bacan '),('7049','Kania Azzura Tsabita','Bandarlampung','2008-05-28','Perempuan','Islam','Jl.Pulau Betina','082176548065','Nurman','Jl. Pulau Betina'),('7050','karina Octa Vinny Hidayat','Bandarlampung','2008-03-29','Perempuan','Islam','Jl.Pisang Miring','082164113345','Marga',' Jl.Pisang Miring'),('7051','Kayla Assyfa Listhon','Bandarlampung','2008-05-23','Perempuan','Islam','Jl. Pulau Sebsi','82143657864','Thoir',' Jl. Pulau Sebsi'),('7052','Keisha Nabilah Sakhi Sukarana','Bandarlampung','2008-03-24','Perempuan','Islam','Jl. Ratu Dibalau','82267981216','Putra',' Jl. Ratu Dibalau'),('7053','KHALILA ZEINA RHAMADHANI HUTARI','Bandarlampung','2008-08-12','Perempuan','Islam','Jl. Pulau Pisang','082156784901','Andika',' Jl. Pulau Pisang'),('7054','Khalista Sheila Lathifah','Bandarlampung','2008-02-26','Perempuan','Islam','Jl. Pulau Morotai','82289057830','Alam',' Jl. Pulau Morotai'),('7055','M. Rafi islami Indrawan','Bandarlampung','2008-01-28','Laki-laki','Islam','Jl. Lada IV','082276890332','Andrian',' Jl. Lada IV'),('7056','M. Velicx Hasanudin','Bandarlampung','2008-04-06','Laki-laki','Islam','Jl. Pulau Nangka','081378755907','Wijaya',' Jl. Pulau Nangka'),('7057','M.Hafidz Alfais','Bandarlampung','2002-06-03','Laki-laki','Islam','Jl. Pulau Bangka','081356987423','Dharma',' Jl. Pulau Bangka'),('7058','M.RAFFI DION PANGESTU','Bandarlampung','2008-03-30','Laki-laki','Islam','Perumahan Korpri','81287903442','Satya',' Perumahan Korpri'),('7059','MAULANA RAUL AKHTAR','Bandarlampung','2008-03-03','Laki-laki','Islam','Perumnas Way Kandis','081369099867','Jaya',' Perumnas Way Kandis'),('7060','Muhamad Mario','Bandarlampung','2008-04-07','Laki-laki','Islam','Jl. Lada V','081227798733','Prasetyo',' Jl. Lada V'),('7061','Muhammad Izzat Badurrahman','Bandarlampung','2008-01-29','Laki-laki','Islam','Jl. Sultan Agung','087896548723','Jono',' Jl. Sultan Agung'),('7062','AFIF NAMORA TANJUNG','Bandarlampung','2008-06-18','Laki-laki','Islam','Jl. Bougenville','087845568390','Rizal',' Jl. Bougenville'),('7063','Afqah Nur Khaerani','Bandarlampung','0000-00-00','Perempuan','Islam','Jl. Edelweis','081279903476','Tarjo',' Jl. Edelweis'),('7064','Alwan Milzan Karami','Bandarlampung','2008-05-23','Laki-laki','Islam','Jl. Sabah Balau','82267879040','Doni',' Jl. Sabah Balau'),('7065','Annisa Ayu Malika','Bandarlampung','2008-02-04','Perempuan','Islam','Perumahan Taman Perasanti II','8228984386','Tuhir',' Perumahan Taman Perasanti II'),('7066','Aqesyha Vional','Bandarlampung','2008-03-04','Perempuan','Islam','Jl. Kenanga','081289986743','Rahmat',' Jl. Kenanga'),('7067','ASYIA MUTIARA BRILIAN','Bandarlampung','2008-08-08','Perempuan','Islam','Perumahan Indah Sejahtara','081289987587','Sutono',' Perumahan Indah Sejahtara'),('7068','Attar fadli Mawla','Bandarlampung','2008-07-27','Laki-laki','Islam','Perumahan Bahtera Indah','081287789054','Arisandi',' Perumahan Bahtera Indah'),('7069','Attar Ryandi Akram','Bandarlampung','2008-08-18','Laki-laki','Islam','Jl. Angsa Dua','081278899843','Triyono',' Jl. Angsa Dua'),('7070','David Prasetyo','Bandarlampung','2008-09-09','Laki-laki','Islam','Jl. Cempaka 8','081289875674','Joko',' Jl. Cempaka 8'),('7071','Elfarina Alya Azzahra','Bandarlampung','2008-10-01','Perempuan','Islam','Jl. Angkasa Raya','81289944764','Ronald',' Jl. Angkasa Raya'),('7072','Fairuz Ramadhani Rahman','Bandarlampung','2008-10-10','Laki-laki','Islam','Jl. Purnawirawan','87877983454','Pusaka',' Jl. Purnawirawan'),('7073','HAQQI ANWARUS SADAT','Bandarlampung','2008-11-05','Laki-laki','Islam','Jl. Rajabasa Raya','081209898789','Andre',' Jl. Rajabasa Raya'),('7074','KEISHA FANDEMA','Bandarlampung','2008-12-03','Perempuan','Islam','Jl. Cendana 3','081289874789','Asep',' Jl. Cendana 3'),('7075','Keysa Salsabila','Bandarlampung','2008-11-17','Perempuan','Islam','Jl. Wijaya 4','087898567876','Tika',' Jl. Wijaya 4'),('7076','Lukel Kaysa Hafif','Bandarlampung','2008-12-05','Laki-laki','Islam','jl. Jaya Abadi','081289872346','Abdi',' jl. Jaya Abadi'),('7077','M. Kanza Al Balaqh','Bandarlampung','2008-06-08','Laki-laki','Islam','Jl. Zainal Abidin','082198765478','Fairli',' Jl. Zainal Abidin'),('7078','M.Iqbal Adha ','Bandarlampung','2008-08-17','Laki-laki','Islam','Jl. Sadewo Bawah no.75','082276543290','Erna',' Jl. Sadewo Bawah no.75'),('7079','MEHRUNNISA NOOR KHAIRA','Bandarlampung','2008-09-17','Perempuan','Islam','Perumahan Prasanty','082245768990','Metha','Perumahan Prasanty '),('7080','Milano','Bandarlampung','2008-07-18','Laki-laki','Islam','Jl. Gatot Subroto','082298765478','Ikhsan','Jl. Gatot Subroto '),('7081','Muhammad Afgan','Bandarlampung','2008-03-17','Laki-laki','Islam','Jl. Way Halim Permai','082165764134','Gerry','Jl. Way Halim Permai '),('7082','ABDI TEGAR KUNIAWAN','Bandarlampung','2008-05-19','Laki-laki','Islam','Jl. Raden Intan','082131908070','Mutia','ABDI TEGAR KUNIAWAN\r\n '),('7084','Alief Priyadi','Bandarlampung','2008-03-12','Laki-laki','Islam','Perumahan Vila citra Blok C','085270809065','Zainudin','Perumahan Vila citra Blok C'),('7086','ANDHIKA WAHYU KUSUMA P','Bandarlampung','2008-06-17','Laki-laki','Islam','Jl. Aster no.70','082198765023','Edo','Jl. Aster no.70 '),('7087','Ardhafa Zakaria Lathif','Bandarlampung','2008-07-12','Laki-laki','Islam','Jl. Pulau Tangkil ','082198674156','Defa','Jl. Pulau Tangkil  '),('7088','Athalla  Dheandra Aulia','Bandarlampung','2008-03-20','Laki-laki','Islam','Perumahan Kemiling','085142156721','Destya','Perumahan Kemiling '),('7089','ALVIN RAMADHAN','Bandarlampung','2008-10-02','Jenis Kelamin','Islam','Jl.Berbi','0821786743','wardi',' Jl.Berbi'),('7090','Aurel Fidela Lucretia','Bandarlampung','2008-04-11','Perempuan','Islam','Jl. Segita','082187654390','Ardiman','Jl. Segita '),('7091','AZARIN ELVINA ALESHA','Bandarlampung','2008-05-24','Perempuan','Islam','Jl. Kopi no.20','082123334561','Dewa','Jl. Kopi no. 20 '),('7092','Bilal Pratama','Bandarlampung','2008-05-30','Laki-laki','Islam','Jl. Cengkeh V','0852607054','Bahari','Jl. Cengkeh V '),('7093','CHESYA AZZAH ZHAFIRAH','Bandarlampung','2008-06-13','Jenis Kelamin','Islam','Jl. Jati Raya no.22','082189907655','Paksi','Jl. Jati Raya no.22 '),('7094','CINTA ANDINI PUTRI BAHARI','Bandarlampung','2008-07-01','Perempuan','Islam','Jl. Beringin Raya','082189909899','Andri','Jl. Beringin Raya '),('7095','Fahri Fatah','Bandarlampung','2008-07-25','Laki-laki','Islam','Jl. Merapi I','082190976543','Rasyid','Jl. Merapi I '),('7096','Iis Nur Komaria Pratiwi','Bandarlampung','2008-08-12','Perempuan','Islam','Jl. Satu Nusa','082111345167','Pratiwi','Jl. Satu Nusa '),('7097','Irsyad Fadhil Rasyid','Bandarlampung','2008-02-17','Laki-laki','Islam','Jl. Budi Utomo','082198765821','Elza','Jl. Budi Utomo '),('7098','Joya Nara Biizzati Haida','Bandarlampung','2008-06-19','Perempuan','Islam','Jl. Pulau Singkep','082187627236','Jonathan','Jl. Pulau Singkep '),('7099','Kannat Anannha','Bandarlampung','2008-05-12','Laki-laki','Islam','Jl. Simpang 3','082261812901','Fernando','Jl. Simpang 3 '),('7222','FADILLA RHEDITA PUTRI','Bandarlampung','2008-07-02','Perempuan','Islam','Jl. Aster no.90','0821878767','Defa',' Jl. Aster no.90'),('7232','Diandra Kania Putri','Bandarlampung','2008-03-22','Perempuan','Islam','Jl.Permata Biru','0821789067','Fikri',' Jl,Permata Biru'),('7551','Ahmad Irfan Ardyansah','Bandarlampung','2007-02-16','Laki-laki','Islam','Jati Mulyo','08127201059','Abdul wahap',' Jati Mulyo'),('7553','Agung Arief Hidayat','Bandarlampung','2007-07-11','Laki-laki','Islam','Jl. Perum Kopri','0822787890','Ir.Agus Purwoko',' Jl,Perum Kopri'),('7566','Cassie Gisella','Bandarlampung','2008-05-20','Perempuan','Islam','Jl.Kayu Manis','0822763020','Hamdi',' Jl.Kayu Manis'),('7666','Azizah Agni Khairuikhsan','Bandarlampung','2008-03-23','Laki-laki','Islam','Jl.Kopi Raya','0821899091','Nasrudin',' Jl.Kopi Raya'),('7890','Decha Nasyifa Kennedi','Bandarlampung','2008-09-01','Perempuan','Islam','Jl.Bambangan','0821754920','Fauzi',' Jl.Bambangan');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
