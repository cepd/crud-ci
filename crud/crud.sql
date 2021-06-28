

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;