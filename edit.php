<?php
include "config/koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    
</head>

</html>

</body>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Edit Data Mahasiswa</h1>
</header>

<div class="container">

<form action="proses_edit.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <p>NIM</p>
    <input type="text" name="nim" value="<?php echo $row['nim']; ?>" required>

    <p>Nama</p>
    <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>

    <p>Program Studi</p>
    <input type="text" name="program_studi" value="<?php echo $row['program_studi']; ?>" required>

    <p>Semester</p>
    <input type="number" name="semester" value="<?php echo $row['semester']; ?>" required>

    <p>Alamat</p>
    <textarea name="alamat" required><?php echo $row['alamat']; ?></textarea>

    <br><br>

    <button type="submit">Update</button>

</form>

</div>

</body>
</html>
