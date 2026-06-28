<?php

function bersihkan($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function tampilPesan($pesan){
    echo "<script>alert('$pesan');</script>";
}

function jumlahMahasiswa($conn){
    $query = mysqli_query($conn, "SELECT * FROM mahasiswa");
    return mysqli_num_rows($query);
}

?>
