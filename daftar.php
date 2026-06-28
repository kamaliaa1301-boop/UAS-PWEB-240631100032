<?php
include "config/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "sidebar.php"; ?>

<div class="content">

    <h2>Daftar Mahasiswa</h2>

    <table border="1" cellpadding="8" cellspacing="0" width="100%">
        <tr style="background-color: #2b6cb0; color: white;">
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Semester</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM mahasiswa");

        while($row = mysqli_fetch_assoc($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nim']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['program_studi']; ?></td>
            <td><?php echo $row['semester']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

</div> </body>
</html>
