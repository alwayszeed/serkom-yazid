<!DOCTYPE html>
<html>

<head>
    <title>PBBO (Pendaftaran Beasiswa Berbasis Online)</title>
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js">
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

    <!-- carousel -->
    <section>
        <div class="container mt-5">

            <div class="row">
                <div class="col-md-5">
                    <img src="img/main_logo.png" alt="" class="img-fluid">
                </div>
                <div class="col-md mt-5">
                    <h3 class="mt-5">PBBO (Pendaftaran Beasiswa Berbasis Online) </h3>
                    <p class="text-justify">
                        Ini adalah yang berfungsi untuk melakukan pendataan dan pendaftaran beasiswa secara online yang dapat dilakukan dimanapun, kapanpun, dan fleksibel yang dapat mendukung dan memberi kesempatan pada mahasiswa universitas XYZ untuk mendapatkan hak pendidikan secara merata. <br> Ayo bergabung dan daftarkan diri anda.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- end carousel -->

    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright PBBO
        </div>
        <!-- Copyright -->
    </footer>