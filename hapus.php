<?php
include "config/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$id'");

if($query){
    header("Location: daftar.php");
}else{
    echo "Data gagal dihapus.";
}
?>
