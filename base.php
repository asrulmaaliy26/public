<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>MA Al - Hidayah</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/logoma.png">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/carousnap/carousnap@v1.3/carousnap/carousnap.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="page-home">
    <header class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-md">
                        <a href="../" class="navbar-brand">
                            <img src="assets/images/logoma.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbarMain" class="collapse navbar-collapse">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link <?= $currentPage == 'index.php' ? 'active' : '' ?>">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?= in_array($currentPage, ['visimisi.php', 'strukturorganisasi.php', 'prestasima.php']) ? 'active' : '' ?>" id="dropdown01" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang Kami</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                        <li><a class="dropdown-item <?= $currentPage == 'visimisi.php' ? 'active' : '' ?>" href="visimisi.php">Visi Misi</a></li>
                                        <li><a class="dropdown-item <?= $currentPage == 'strukturorganisasi.php' ? 'active' : '' ?>" href="strukturorganisasi.php">Struktur Organisasi</a></li>
                                        <li><a class="dropdown-item <?= $currentPage == 'prestasima.php' ? 'active' : '' ?>" href="prestasima.php">Prestasi</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="berita.php" class="nav-link <?= $currentPage == 'berita.php' ? 'active' : '' ?>">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a href="fasilitas.php" class="nav-link <?= $currentPage == 'fasilitas.php' ? 'active' : '' ?>">Fasilitas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link <?= $currentPage == 'contact.php' ? 'active' : '' ?>">Contact</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="https://wa.me/085784777797" class="nav-link">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.instagram.com/maalhidayah_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.linkedin.com/in/asrul-maaliy-185712256/">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- end header-main -->

    <main class="main">
        <!-- Main content here -->
