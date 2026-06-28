<?php
include "config/koneksi.php";
include "function.php";

$nim = bersihkan($_POST['nim']);
$nama = bersihkan($_POST['nama']);
$program_studi = bersihkan($_POST['program_studi']);
$semester = bersihkan($_POST['semester']);
$alamat = bersihkan($_POST['alamat']);

$program_studi = bersihkan($_POST['program_studi']);

$query = mysqli_query($conn, "INSERT INTO mahasiswa(nim,nama,program_studi,semester,alamat)
VALUES('$nim','$nama','$program_studi','$semester','$alamat')");
if($query){
    header("Location: daftar.php");
} else {
    echo "Data gagal disimpan. Alasan: " . mysqli_error($conn);
}
?>
