-- buat database fakultas
CREATE DATABASE seal_fakultas;

-- buat table jurusan
CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

-- buat table mahasiswa
CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum ('Laki-Laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan (id)
);

-- masukin data jurusan
insert into jurusan (kode,nama) values ('GEO','Geografi');
insert into jurusan (kode,nama) values ('SASING','Sastra Inggris');

-- masukin data mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (1,'32419017', 'Irma', 'perempuan', 'Semarang', '2000-10-22', 'Jl. Ahmad Dahlan');
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (1,'32419018', 'Ayip', 'laki-laki', 'Yogyakarta', '2000-10-28', 'Jl. Ahmad Yani');

-- update data mahasiswa
update mahasiswa set alamat = "Jl. Taman Ciruas 22" where id = 1;

-- delete data mahasiswa
delete from mahasiswa where id=2;