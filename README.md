# UAS-PWEB-240631100032
Nama            : Kamalia Dwi Febriyanti
NIM             : 240631100032
Judul Aplikasi : SISTEM PENDATAAN MAHASISWA

Deskripsi Singkat
Sistem ini memfasilitasi admin atau staf akademik melalui fitur-fitur utama berupa :
1. Autentikasi Aman     : Hak akses dashboard dilindungi oleh sistem login berkas.
2. Dashboard Statistik  : Menampilkan total rekapitulasi data mahasiswa yang tersimpan secara real-time.
3. Manajemen Data       : Melakukan penambahan data baru, penayangan tabel sistematis dengan penomoran otomatis, pembaruan informasi (edit data), hingga penghapusan berkas dengan validasi konfirmasi pop-up.

Struktur Database
Aplikasi ini menggunakan database MySQL bernama `db_mahasiswaa` dengan tabel utama bernama `mahasiswa`. Berikut adalah skema struktur kolomnya:

| Nama Kolom     | Tipe Data    | Atribut / Keterangan                 |
| `id`           | INT          | Primary Key, Auto Increment (Unik)   |
| `nim`          | VARCHAR(20)  | Nomor Induk Mahasiswa                |
| `nama`         | VARCHAR(100) | Nama Lengkap Mahasiswa               |
| `program_studi`| VARCHAR(100) | Program Studi / Jurusan              |
| `semester`     | INT(2)       | Semester Aktif                       |
| `alamat`       | TEXT         | Alamat Domisili                      |

Cara Menjalankan Aplikasi
Langkah A: Persiapan Environment
1. Pastikan aplikasi local server seperti XAMPP sudah terinstal di komputer.
2. Pindahkan atau simpan folder proyek UAS_WEB ke dalam direktori root server: C:/xampp/htdocs/UAS_WEB/.
Langkah B: Import Database
1. Aktifkan modul Apache dan MySQL pada XAMPP Control Panel.
2. Buka browser dan akses alamat http://localhost/phpmyadmin/.
3. Buat database baru bernama db_mahasiswa.
4. Pilih database tersebut, masuk ke menu Import, pilih file SQL database Anda, lalu klik Go / Import.
Langkah C: Menjalankan Web di Browser
1. Buka tab baru pada browser.
2. Ketik URL berikut untuk mengakses halaman login:
http://localhost/UAS_WEB/login.php
3. Masukkan kredensial login admin untuk mengeksplorasi fitur pengelolaan data.
