<?php 
include 'base.php';
include 'data.php';

// Mengambil ID dari URL
$post_id = isset($_GET['id']) ? intval($_GET['id']) : null;

// Memeriksa apakah post_id ada
if (!$post_id) {
    echo "<p>ID tidak ditemukan.</p>";
    include 'footer.php';
    exit();
}

try {
    // Mengambil artikel berdasarkan ID
    $post = $controller->getOneArticle($post_id);
    $articlesPaginasi = $controller->getArticlesPaginasi(2);
} catch (\Exception $e) {
    $error_message = 'Error: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
    echo "<p>{$error_message}</p>";
    include 'footer.php';
    exit();
}

if (!$post) {
    echo "<p>Post tidak ditemukan.</p>";
    include 'footer.php';
    exit();
}
?>

<section style="position: relative; text-align: center;">
    <img width="100%" style="height: 500px;object-fit: cover;filter: brightness(50%);" src="<?php echo htmlspecialchars($post['article_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
</section>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <section>
        <div class="container pt-5 pb-5 j1" style="max-width: 800px; margin: auto">
          <h4 class="text-center pt-5"><?php echo htmlspecialchars($post['article_title'], ENT_QUOTES, 'UTF-8'); ?></h4>
          <p class="text-center text-muted mb-5"><em><?php echo date('F j, Y', strtotime($post['created_at'] ?? 'now')); ?></em></p>
          <img class="mb-5" style="width: 80%; border-radius: 10px; display: block; margin: auto" src="<?php echo htmlspecialchars($post['article_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($post['article_title'], ENT_QUOTES, 'UTF-8'); ?>" />
          <p><?php echo $post['article_content']; ?></p>
          
          <p class="text-center text-muted mt-5">
            <em><?php echo date('F j, Y', strtotime($post['created_at'] ?? 'now')); ?> | By: <?php echo !empty($post['article_author']) ? htmlspecialchars($post['article_author'], ENT_QUOTES, 'UTF-8') : '-'; ?></em>
          </p>
        </div>
      </section>
    </div>

    <div class="col-sm-3 pr">
      <div class="row pt-4">
        <h2>Berita Terbaru</h2>
      </div>
      <div class="row pt-4">
        <?php if (!empty($articlesPaginasi)): ?>
          <?php foreach ($articlesPaginasi as $article): ?>
          <div class="card pt-3 mb-5 bg-light" style="width: 18rem">
            <a href="detail.php?id=<?php echo htmlspecialchars($article['article_id'], ENT_QUOTES, 'UTF-8'); ?>" class="text-decoration-none text-dark">
              <img class="card-img-top" src="<?php echo htmlspecialchars($article['article_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($article['article_title'], ENT_QUOTES, 'UTF-8'); ?>" />
            </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($article['article_title'], ENT_QUOTES, 'UTF-8'); ?></h5>
              <p class="card-text">
              <?php 
                  // Deteksi apakah konten memiliki gambar menggunakan regex
                  if (preg_match('/<img[^>]*>/i', $post['article_content'])) {
                      echo "Lihat gambar selengkapnya";
                  } else {
                      echo truncateContent($post['article_content'], 50);
                  }
              ?>
              </p>
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
