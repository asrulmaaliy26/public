<?php 
include 'base.php'; 
include 'data.php';
?>

<section style="position: relative; text-align: center;">
    <img width="100%" style="height: 500px;object-fit: cover;filter: brightness(50%);" src="assets/images/Header.jpg" alt="">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 4em; color: white; font-weight: bold;">
      PRESTASI
    </div>
</section>

<!-- section -->
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="row pt-4">
                <?php 
                $posts_asia = filterByJenisAndTingkat($data, 1, 5); // Misal tingkat Asia = 1
                if (!empty($posts_asia)) { ?>
                    <h4>TINGKAT ASIA<br><br></h4>
                    <?php foreach ($posts_asia as $post) { ?>
                        <a href="detail.php?id=<?php echo $post['id']; ?>" class="text-decoration-none text-dark">
                            <p><?php echo $post['title']; ?></p>
                        </a>
                    <?php } 
                } else { ?>
                    <p><br>.</p>
                <?php } ?>
            </div>
            <div class="row pt-4">
                <?php 
                $posts_nasional = filterByJenisAndTingkat($data, 1, 4); // Misal tingkat Nasional = 2
                if (!empty($posts_nasional)) { ?>
                    <h4>TINGKAT NASIONAL<br><br></h4>
                    <?php foreach ($posts_nasional as $post) { ?>
                        <a href="detail.php?id=<?php echo $post['id']; ?>" class="text-decoration-none text-dark">
                            <p><?php echo $post['title']; ?></p>
                        </a>
                    <?php } 
                } else { ?>
                    <p><br></p>
                <?php } ?>
            </div>
            <div class="row pt-4">
                <?php 
                $posts_provinsi = filterByJenisAndTingkat($data, 1, 3); // Misal tingkat Provinsi = 3
                if (!empty($posts_provinsi)) { ?>
                    <h4>TINGKAT PROVINSI<br><br></h4>
                    <?php foreach ($posts_provinsi as $post) { ?>
                        <a href="detail.php?id=<?php echo $post['id']; ?>" class="text-decoration-none text-dark">
                            <p><?php echo $post['title']; ?></p>
                        </a>
                    <?php } 
                } else { ?>
                    <p><br></p>
                <?php } ?>
            </div>
            <div class="row pt-4">
                <?php 
                $posts_kabupaten = filterByJenisAndTingkat($data, 1, 2); // Misal tingkat Kabupaten = 4
                if (!empty($posts_kabupaten)) { ?>
                    <h4>TINGKAT KABUPATEN<br><br></h4>
                    <?php foreach ($posts_kabupaten as $post) { ?>
                        <a href="detail.php?id=<?php echo $post['id']; ?>" class="text-decoration-none text-dark">
                            <p><?php echo $post['title']; ?></p>
                        </a>
                    <?php } 
                } else { ?>
                    <p><br></p>
                <?php } ?>
            </div>
            <div class="row pt-4">
                <?php 
                $posts_kecamatan = filterByJenisAndTingkat($data, 1, 1); // Misal tingkat kecamatan = 4
                if (!empty($posts_kecamatan)) { ?>
                    <h4>TINGKAT KECAMATAN<br><br></h4>
                    <?php foreach ($posts_kecamatan as $post) { ?>
                        <a href="detail.php?id=<?php echo $post['id']; ?>" class="text-decoration-none text-dark">
                            <p><?php echo $post['title']; ?></p>
                        </a>
                    <?php } 
                } else { ?>
                    <p><br></p>
                <?php } ?>
            </div>
        </div>

        <div class="col-sm-4 pr">
            <div class="row pt-4">
                <h2>Prestasi Terbaru</h2>
            </div>
            <div class="row pb-5">
                <?php 
                $recent_posts = filterByJenis($data, 1); 
                if (!empty($recent_posts)) {
                    foreach ($recent_posts as $post) { ?>
                        <a href="detail.php?id=<?php echo $post['id']; ?>" class="text-decoration-none text-dark">
                            <div class="card mt-5 pt-2 bg-light" style="width: 18rem;">
                                <img class="card-img-top" src="assets/images/<?php echo $post['image']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $post['title']; ?></h5>
                                    <p class="card-text"><?php echo mb_strimwidth($post['content'], 0, 50, "..."); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php }
                } else { ?>
                    <p><br></p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- akhir section -->

<?php include 'footer.php'; ?>
