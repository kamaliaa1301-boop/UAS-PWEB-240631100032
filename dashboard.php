<?php
session_start();

include "config/koneksi.php";

$query = mysqli_query($conn,"SELECT * FROM mahasiswa");
$total = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html>

<head>

<title>Dashboard</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<?php include "sidebar.php"; ?>

<div class="content">

<h1>Dashboard</h1>

<div class="card">

<h2>Total Mahasiswa</h2>

<h1><?php echo $total; ?></h1>

</div>

<div class="welcome">

<h2>SELAMAT DATANG 👋</h2>

<p>
Selamat datang di Sistem Pendataan Mahasiswa.
Silakan pilih menu di sebelah kiri untuk mengelola data mahasiswa.
</p>

</div>

<div class="card">

<h3>Informasi Sistem</h3>

<ul>

<li>Tambah Data Mahasiswa</li>

<li>Edit Data Mahasiswa</li>

<li>Hapus Data Mahasiswa</li>

<li>Lihat Data Mahasiswa</li>

</ul>

</div>

</div>

</body>

</html>
