# Lab7Web_PHP

## Tujuan Praktikum

Praktikum ini bertujuan untuk mempelajari dasar pemrograman
server-side menggunakan PHP. Materi yang dipelajari meliputi
variabel, operator, percabangan, perulangan, function, form GET,
form POST, validasi input, dan pengolahan data sederhana.

## Perangkat yang Digunakan

- Laptop/PC
- Visual Studio Code
- XAMPP
- Web Browser
- PHP

## Cara Menjalankan Server Lokal

1. Install dan buka aplikasi XAMPP.
2. Jalankan Apache pada XAMPP Control Panel.
3. Simpan folder proyek Lab7Web_PHP di folder htdocs.
4. Buka browser.
5. Akses alamat berikut:

   http://localhost/Lab7Web_PHP/

## Struktur File

Lab7Web_PHP/
│
├── index.php
├── latihan2.php
├── latihan3.php
├── latihan4.php
├── latihan5.php
├── latihan6.php
├── latihan7.php
│
├── mini_project/
│   ├── index.php
│   └── proses.php
│
├── screenshots/
│
└── README.md

## Ringkasan Hasil

Seluruh latihan berhasil dijalankan menggunakan server lokal XAMPP.
PHP dapat digunakan untuk melakukan pemrosesan data di sisi server,
menghitung data, menampilkan array, menggunakan function, serta
menerima data melalui metode GET dan POST.

Pada mini project, sistem dapat memvalidasi data mahasiswa seperti
nama, NIM, program studi, semester, dan email sebelum menampilkan
hasil data yang dikirimkan.

## Pengujian Validasi

### Input Valid

1. Nama: Lingga Chezya Poetra
   NIM: 312510169
   Program Studi: Teknik Informatika
   Semester: 3
   Email: lingga@email.com

   Hasil: Data berhasil ditampilkan.

2. Nama: Andi Saputra
   NIM: 312510170
   Program Studi: Teknik Informatika
   Semester: 5
   Email: andi@gmail.com

   Hasil: Data berhasil diproses.

### Input Tidak Valid

1. Nama dan Program Studi dikosongkan.

   Hasil: Sistem menampilkan pesan bahwa kolom wajib diisi.

2. Email diisi dengan format yang salah dan semester diisi 20.

   Hasil: Sistem menampilkan pesan format email tidak valid dan
   semester harus berada pada rentang 1 sampai 14.