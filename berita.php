<?php 
include 'base.php'; 
include 'data.php';

// Menentukan jumlah post per halaman
$posts_per_page = 5;

// Mendapatkan halaman saat ini dari query string, default ke halaman 1 jika tidak ada
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Menghitung offset untuk query
$offset = ($current_page - 1) * $posts_per_page;

// Mendapatkan semua post dan menyortirnya secara ascending berdasarkan ID
$all_posts = sortByIdDesc($data);

// Mendapatkan jumlah total post
$total_posts = count($all_posts);

// Memotong array berdasarkan halaman yang aktif
$posts_on_current_page = array_slice($all_posts, $offset, $posts_per_page);

// Menghitung jumlah halaman yang diperlukan
$total_pages = ceil($total_posts / $posts_per_page);
?>

<section style="position: relative; text-align: center;">
    <img width="100%" style="height: 500px; object-fit: cover; filter: brightness(50%);" src="assets/images/Header.jpg" alt="">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 4em; color: white; font-weight: bold;">
        BERITA
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <section class="mx-5">
                <div class="container pb-5 j1" style="max-width: 800px; margin: auto;">
                    <?php 
                    if ($posts_on_current_page) {
                        foreach ($posts_on_current_page as $post) { 
                    ?>
                    <a href="detail.php?id=<?php echo $post['id']; ?>" class="text-decoration-none text-dark">
                        <h4 class="text-center pt-5 "><?php echo $post['title']; ?></h4>
                        <div class="row border-bottom border-dark">
                            <div class="col-md-6 mb-4">
                                <p class="mt-4">
                                    <?php echo truncateContent($post['content'], 50); ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <img style="width: 100%; max-height: 200px; object-fit: cover; border-radius: 10px;" src="assets/images/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" />
                                <p class="text-center text-muted mt-5"><em>End: 2024 | By: Admin</em></p>
                            </div>
                        </div>
                    </a>
                    <?php 
                        } 
                    } else { 
                    ?>
                    <p>No recent posts available.</p>
                    <?php 
                    } 
                    ?>
                </div>

                <!-- Pagination Controls -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <?php if ($current_page > 1): ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?php if ($i == $current_page) echo 'active'; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>

                        <?php if ($current_page < $total_pages): ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo $current_page + 1; ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </section>
        </div>

        <div class="col-sm-3 pr">
            <div class="row pt-4">
                <h2>Berita Terbaru</h2>
            </div>
            <div class="row pt-4">
                <?php 
                $penting_posts = filterByCategoryKegiatan($data);
                $counter = 0; // Inisialisasi counter

                if ($penting_posts) {
                    foreach ($penting_posts as $post) { 
                        if ($counter >= 3) break; // Batasi hingga 3 item
                ?>
                <div class="card pt-3 mb-4 bg-light" style="width: 18rem">
                    <a href="detail.php?id=<?php echo $post['id']; ?>" class="text-decoration-none text-dark">
                        <img style="width: 100%; max-height: 200px; object-fit: cover; border-radius: 10px;" class="card-img-top" src="assets/images/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['title']; ?></h5>
                        <p class="card-text"><?php echo truncateContent($post['content'], 20); ?></p>
                    </div>
                </div>
                <?php 
                        $counter++; // Tambahkan counter setiap kali loop berjalan
                    } 
                } else { 
                ?>
                <p>Tidak ada pengumuman penting</p>
                <?php 
                } 
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
