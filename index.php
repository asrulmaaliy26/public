<?php 

include 'base.php';

require 'data.php';

// $articlesPaginasi = $controller->getArticlesPaginasi(3); // Misalnya, mengambil halaman 1
// $articlesPaginasi4 = $controller->getArticlesPaginasi(4);

$articlesMA = $controller->getArticleByOneTypes('pendidikan', '3');

// Mengambil hanya 3 artikel pertama
$articlesPaginasi = array_slice($articlesMA, 0, 3);
$articlesPaginasi4 = array_slice($articlesMA, 0, 4);

$media_url = 'assets/images/' 

?>


<div class="hot-post">
    <div class="post post-thumb">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="detail.php?id=38">
                        <img src="assets/images/Header.jpg" class="d-block w-100 carousel-image" alt="Post Title 1" style="height: 500px;	object-fit: cover;	object-position: center;">
                    </a>
                    <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.5); padding: 10px;	border-radius: 5px;">
                        <div class="post-category">
                            <a href="detail.php?id=38" class="badge badge-primary">BERANDA</a>
                        </div>
                        <h3 class="post-title title-lg">
                            <a href="detail.php?id=38" class="text-light">MASA TA'ARUF SISWA MADRASAH</a>
                        </h3>
                        <ul class="post-meta">
                            <li><a href="berita.php" class="text-light">officialmaalhidayah</a></li>
                            <li class="text-light">12 Aug 2024</li>
                        </ul>
                    </div>
                </div>

                <div class="carousel-item">
                    <a href="detail.php?id=40">
                        <img src="https://admin.maalhidayahkauman.sch.id/uploads/articleimage/tuan-rumah-sosialisasi-kma-450-tahun-2024_20240827_163748.jpg?page=index.php" class="d-block w-100 carousel-image" alt="Post Title 2" style="height: 500px;	object-fit: cover;	object-position: center;">
                    </a>
                    <div class="carousel-caption d-none d-md-block" style="background: rgba(0, 0, 0, 0.5); padding: 10px;	border-radius: 5px;">
                        <div class="post-category">
                            <a href="detail.php?id=40" class="badge badge-primary">TRENDING</a>
                        </div>
                        <h3 class="post-title title-lg">
                            <a href="detail.php?id=40" class="text-light">TUAN RUMAH SOSIALISASI KMA 450 TAHUN 2024</a>
                        </h3>
                        <ul class="post-meta">
                            <li><a href="berita.php" class="text-light">officialmaalhidayah</a></li>
                            <li class="text-light">13 Aug 2024</li>
                        </ul>
                    </div>
                </div>
                <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <button class="header-main text-light py-3" style="width: 100%; font-size: 2em; font-weight: 700;">
        <a href="https://ppdb.almannan.id/" class="text-light">- - -> PPDB <- - -</a>
    </button>
</div>
<!-- end hot-post -->

<!-- sec 1 -->
<section>
    <div class="container-fluid">
    <div class="container pb-5 animate__animated animate__fadeInUpBig animate__delay-2s" id="jumb">
        <div class="row text-center">
        <div style="width: 30%" class="container">
            <div class="col-sm-12">
            <img class="animate__animated animate__fadeInUpBig animate__delay-4s" style="width: 70%;" src="assets/images/logoma.png" alt="">
            </div>
        </div>
        <h2 class="animate__animated animate__fadeInUpBig animate__delay-4s mt-5" style="color: black;">Always The Best<br><br></h2>
        <h5 class="animate__animated animate__fadeInUpBig animate__delay-4s" style="color: black;">Hafal Al - Qur'an dan Berprestasi di sekolah</h5>
        </div>
    </div>
    </div>
</section>
<!-- akhir sec 1 -->


<div class="py-5 header-main">
    <div class="container">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="stat-card p-4">
            <div class="stat-icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            
            <div class="stat-number">28</div>
            <div class="stat-description">Pendidik & Tenaga Kependidikan</div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stat-card p-4">
            <div class="stat-icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <div class="stat-number">131</div>
            <div class="stat-description">Peserta Didik Putra</div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stat-card p-4">
            <div class="stat-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="stat-number">270</div>
            <div class="stat-description">Peserta Didik Putri</div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stat-card p-4">
            <div class="stat-icon">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="stat-number">400</div>
            <div class="stat-description">Total Peserta Didik</div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- sec 2 -->
<div class="container-fluid my-5 i2 text-dark">
    <div class="container">
    <div class="row">
        <div class="col-sm-6 pt-3">
        <iframe style="padding: 20px;" width="100%" height="315" src="https://www.youtube.com/embed/1iDEgAOfr6k?si=OzusF-J7RLyTXTwm" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-sm-6 mt-5">
        <h3 class="text-center font-weight-bold">Video Profil</h3>
        <H4 class="font-weight-bolder"> Yayasan Al Mannan</H4>
        <h5 class="font">
            Kami dengan bangga mengundang putra-putri Anda untuk bergabung bersama kami dalam lingkungan pendidikan yang Islami dan berprestasi. Di PP Al Mannan, kami tidak hanya fokus pada pembelajaran akademis, tetapi juga pada pembentukan karakter Islami dan pengembangan kemampuan hafalan Al-Qur'an.
        </h5>
        </div>
    </div>
    </div>
</div>
<!-- akhir sec 2 -->
<!-- info -->
<div class="container-fluid">
    <div class="container my-5 py-5 bg-light">
        <div class="row">
            <h4 class="text-center mb-5">SOROTAN</h4>

            <?php if (isset($error_message)): ?>
                <p><?php echo htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'); ?></p>
            <?php else: ?>
                <?php if (!empty($articlesPaginasi)): ?>
                    <?php foreach ($articlesPaginasi as $post): ?>
                        <div class="col-md-4 my-2 d-flex justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <p class="text-bg-success text-center"><?php echo htmlspecialchars($post['article_title'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <img class="post-img" style="height: 350px; object-fit: cover; width: 100%;" src="<?php echo htmlspecialchars($post['article_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="Card image cap">
                                <a href="detail.php?id=<?php echo htmlspecialchars($post['article_id'], ENT_QUOTES, 'UTF-8'); ?>" class="text-decoration-none text-dark">
                                    <div class="card-body text-center">
                                        <button style="background-color: #88D66C; border:none; width: 200px;" type="button" class="btn btn-custom justify-content-center mt-4 mb-4">Lihat Postingan</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No articles found.</p>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- akhir info -->



<!-- featured-posts -->
<div class="container mt-5">
    <div class="featured-posts">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Kegiatan</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (isset($error_message)): ?>
                <p><?php echo htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'); ?></p>
            <?php else: ?>
                <?php if (!empty($articlesPaginasi4)): ?>
                    <?php foreach ($articlesPaginasi4 as $post): ?>
            <div class="col-md-3 col-sm-6">
                <div class="post post-thumb">
                    <a href="detail.php?id=<?= $post['article_id'] ?>" class="text-decoration-none text-dark post-img">
                        <img src="<?= $post['article_image'] ?>" alt="Post Image 1">
                    </a>
                    <div class="post-body">
                        <h3 class="post-title">
                            <a href="detail.php?id=<?= $post['article_id'] ?>" class="text-decoration-none text-dark">
                                <?= $post['article_title'] ?>
                            </a>
                        </h3>
                        <ul class="post-meta">
                            <li>
                                <a style="color: #000;" href="berita.php">kegiatan</a>
                            </li>
                            <li style="color: #000;">
                                2024-08-16
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <?php endforeach; ?>
                <?php else: ?>
                    <p>No articles found.</p>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- end featured-posts -->

<?php include 'footer.php'; ?>