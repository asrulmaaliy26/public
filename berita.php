<?php 
include 'base.php'; 
require 'data.php';

// Menentukan jumlah post per halaman
$posts_per_page = 5;

// Mendapatkan halaman saat ini dari query string, default ke halaman 1 jika tidak ada
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Menghitung offset untuk query
$offset = ($current_page - 1) * $posts_per_page;

// Mendapatkan semua post dan menyortirnya secara ascending berdasarkan ID
$articlesMA = $controller->getArticleByOneTypes('pendidikan', '3');

// Mendapatkan jumlah total post
$total_posts = count($articlesMA);

// Memotong array berdasarkan halaman yang aktif
$posts_on_current_page = array_slice($articlesMA, $offset, $posts_per_page);

// Menghitung jumlah halaman yang diperlukan
$total_pages = ceil($total_posts / $posts_per_page);

// Mendapatkan artikel terbaru (hanya 3 artikel)
$articlesMApaginasi = array_slice($articlesMA, 0, 3);

// Fungsi untuk memotong teks
function truncateContent($text, $maxLength) {
    return strlen($text) > $maxLength ? substr($text, 0, $maxLength) . '...' : $text;
}
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
                <?php if (isset($error_message)): ?>
                    <p><?php echo htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php else: ?>
                    <?php endif; ?>
                <?php if (isset($posts_on_current_page['error'])): ?>
                    <p><?php echo htmlspecialchars($posts_on_current_page['error'], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php elseif (!empty($posts_on_current_page)): ?>
                    <?php foreach ($posts_on_current_page as $post): ?>
                    <a href="detail.php?id=<?php echo $post['article_id']; ?>" class="text-decoration-none text-dark">
                        <h4 class="text-center pt-5 "><?php echo htmlspecialchars($post['article_title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                        <div class="row border-bottom border-dark">
                            <div class="col-md-6">
                                <img style="width: 100%; max-height: 200px; object-fit: cover; border-radius: 10px;" src="<?php echo htmlspecialchars($post['article_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($post['article_title'], ENT_QUOTES, 'UTF-8'); ?>" />
                                <!-- <p class="text-center text-muted mt-5"><em><?php echo date('F j, Y', strtotime($post['created_at'] ?? 'now')); ?></em></p> -->
                            </div>
                            <div class="col-md-6 mb-4">
                                <p class="mt-4">
                                    <?php echo truncateContent($post['article_content'], 50); ?>
                                </p>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
                <?php else: ?>
                    <p>No articles found.</p>
                <?php endif; ?>
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
            <?php if (isset($error_message)): ?>
                    <p><?php echo htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php else: ?>
                    <?php endif; ?>
                <?php if (isset($articlesMApaginasi['error'])): ?>
                    <p><?php echo htmlspecialchars($articlesMApaginasi['error'], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php elseif (!empty($articlesMApaginasi)): ?>
                    <?php foreach ($articlesMApaginasi as $post): ?>
                <div class="card pt-3 mb-4 bg-light" style="width: 18rem">
                    <a href="detail.php?id=<?php echo $post['article_id']; ?>" class="text-decoration-none text-dark">
                        <img style="width: 100%; max-height: 200px; object-fit: cover; border-radius: 10px;" class="card-img-top" src="<?php echo htmlspecialchars($post['article_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($post['article_title'], ENT_QUOTES, 'UTF-8'); ?>" />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($post['article_title'], ENT_QUOTES, 'UTF-8'); ?></h5>
                        <p class="card-text"><?php echo truncateContent($post['article_content'], 20); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                    <p>No articles found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
