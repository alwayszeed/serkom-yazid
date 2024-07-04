<?php
require_once 'config.php';

// jika tombol daftar ditekan, ambil data dari form dan simpan ke database
if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $jenis_beasiswa = $_POST['jenis_beasiswa'];
    $berkas = $_FILES['berkas']['name'];
    $status_ajuan = "belum di verifikasi";

    //folder tujuan upload file
    $target_dir = "uploads/";

    // nama file yang diupload beserta path-nya
    $target_file = $target_dir . basename($_FILES["berkas"]["name"]);

    // ekstensi file yang diupload
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //  simpan file ke folder tujuan upload
    move_uploaded_file($_FILES["berkas"]["tmp_name"], $target_file);

    //  query untuk memasukkan data ke database
    $query = "INSERT INTO pendaftar (nama, email, hp, semester, ipk, jenis_beasiswa, berkas, status_ajuan) 
              VALUES ('$nama', '$email', '$hp', $semester, $ipk, '$jenis_beasiswa', '$berkas', '$status_ajuan')";

    //jalankan query dan simpan hasilnya
    $result = mysqli_query($conn, $query);

    // cek apakah query berhasil dijalankan atau tidak
    if ($result) {
        echo "<script>alert('Pendaftaran berhasil!');</script>";
    } else {
        echo "<script>alert('Pendaftaran gagal!');</script>";
    }
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Pendaftaran Beasiswa</title>
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="index.php">PBBO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link {{($active === " home ") ? 'active' : ''}} " href="index.php">Home</a>
                    <a class="nav-link {{($active === " daftar ") ? 'active' : ''}} " href="form.php">Daftar</a>
                    <a class="nav-link {{($active === " pendaftar ") ? 'active' : ''}} " href="hasil.php">Pendaftar</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <div class="row">
        <div class="col-md-5">
            <img src="img/success.png" alt="" class="img-fluid">
        </div>
        <div class="col-md mt-5">
            <h3 class="mt-5">Data Anda Berhasil Disimpan </h3>
            <p class="text-justify">
                Untuk melihat data, dan status pengecekan beasiswa anda, klik tombol <a href="hasil.php"><b>Hasil</b></a>
            </p>

        </div>
    </div>
</body>

</html>