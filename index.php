<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include "config/koneksi.php";
include "function.php";
?>
include "config/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Pendataan Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Sistem Pendataan Mahasiswa</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="tambah.php">Tambah Data</a>
    <a href="daftar.php">Daftar Data</a>
</nav>

<div class="container">
    <h2>Selamat Datang</h2>

    <p>
        Sistem ini digunakan untuk mengelola data mahasiswa
        seperti NIM, Nama, Prodi, Semester, dan Alamat.
    </p>

    <p>
        Silakan pilih menu di atas untuk mulai mengelola data mahasiswa.
    </p>
</div>

</body>
</html>
