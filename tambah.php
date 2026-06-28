<?php
include "config/koneksi.php";

if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $program_studi = $_POST['program_studi'];
    $semester = $_POST['semester'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO mahasiswa (nim, nama, program_studi, semester, alamat) VALUES ('$nim', '$nama', '$program_studi', '$semester', '$alamat')";
    $insert = mysqli_query($conn, $query);

    if ($insert) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='daftar.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* PENGATURAN UTAMA AGAR KONTEN BERGESER KE KANAN */
        .content {
            margin-left: 260px; /* <--- JIKA KURANG KANAN, NAIKKAN ANGKA INI (misal: 280px atau 300px) */
            padding: 30px;
            box-sizing: border-box;
        }

        /* CSS Form */
        .form-container {
            max-width: 600px;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            margin-top: 20px;
            border: 1px solid #e2e8f0;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: #2d3748;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e0;
            border-radius: 5px;
            box-sizing: border-box;
            font-family: inherit;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            border-color: #2b6cb0;
            outline: none;
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
        }
        .btn-simpan {
            background-color: #2b6cb0;
            color: white;
            padding: 11px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 14px;
            transition: background 0.2s;
        }
        .btn-simpan:hover {
            background-color: #1a4975;
        }
    </style>
</head>
<body>

<?php include "sidebar.php"; ?>

<div class="content">

    <h2>Tambah Data Mahasiswa</h2>

    <div class="form-container">
        <form action="" method="POST">
            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" required placeholder="Masukkan NIM">
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" required placeholder="Masukkan Nama Lengkap">
            </div>

            <div class="form-group">
                <label>Program Studi</label>
                <input type="text" name="program_studi" required placeholder="Contoh: Pendidikan Informatika">
            </div>

            <div class="form-group">
                <label>Semester</label>
                <input type="number" name="semester" required placeholder="Contoh: 4">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" rows="3" required placeholder="Masukkan Alamat"></textarea>
            </div>

            <button type="submit" name="simpan" class="btn-simpan">Simpan Data</button>
        </form>
    </div>

</div>

</body>
</html>
