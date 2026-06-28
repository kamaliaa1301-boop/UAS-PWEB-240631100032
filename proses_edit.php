<?php
include "config/koneksi.php";

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$program_studi = $_POST['program_studi'];
$semester = $_POST['semester'];
$alamat = $_POST['alamat'];

$query = mysqli_query($conn,
"UPDATE mahasiswa SET
nim='$nim',
nama='$nama',
program_studi='$program_studi',
semester='$semester',
alamat='$alamat'
WHERE id='$id'");

if($query){
    header("Location: daftar.php");
}else{
    echo "Data gagal diupdate.";
}
?>
