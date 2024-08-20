<?php 
include 'base.php';
include 'data.php';

// Mengambil ID dari URL
$post_id = isset($_GET['id']) ? intval($_GET['id']) : null;

// Mendapatkan post berdasarkan ID
$post = $post_id ? getPostById($data, $post_id) : null;

if (!$post) {
    echo "<p>Post tidak ditemukan.</p>";
    include 'footer.php';
    exit();
}
?>

<section style="position: relative; text-align: center;">
    <img width="100%" style="height: 500px;object-fit: cover;filter: brightness(50%);" src="assets/images/<?php echo $post['image']; ?>" alt="">
</section>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <section>
        <div class="container pt-5 pb-5 j1" style="max-width: 800px; margin: auto">
          <h4 class="text-center pt-5"><?php echo $post['title']; ?></h4>
          <p class="text-center text-muted mb-5"><em><?php echo date('F j, Y'); ?></em></p>
          <img class="mb-5" style="width: 80%; border-radius: 10px; display: block; margin: auto" src="assets/images/<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>" />
          <p><?php echo $post['content']; ?></p>
          
          <?php if (!empty($post['link'])): ?>
          <p class="text-left mt-5">
            <a href="<?php echo $post['link']; ?>" class="text-muted" style="text-decoration: none;">
              <iframe style="padding: 20px;" width="80%" height="315" src="<?php echo $post['link']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </a>
          </p>
          <?php endif; ?>
          
          <p class="text-center text-muted mt-5">
            <em><?php echo date('F j, Y'); ?> | By: <?php echo !empty($post['author']) ? $post['author'] : '-'; ?></em>
          </p>
        </div>
      </section>
    </div>

    <div class="col-sm-3 pr">
      <div class="row pt-4">
        <h2>Berita Terbaru</h2>
      </div>
      <div class="row pt-4">
        <?php 
        $recent_posts = getRecentPosts($data);
        if (!empty($recent_posts)): 
          foreach ($recent_posts as $recent_post): ?>
          <div class="card pt-3 mb-5 bg-light" style="width: 18rem">
            <a href="detail.php?id=<?php echo $recent_post['id']; ?>" class="text-decoration-none text-dark">
              <img class="card-img-top" src="assets/images/<?php echo $recent_post['image']; ?>" alt="<?php echo $recent_post['title']; ?>" />
            </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo $recent_post['title']; ?></h5>
              <p class="card-text">
                <?php echo substr($recent_post['content'], 0, 50) . '...'; ?>
              </p>
            </div>
          </div>
        <?php 
          endforeach;
        else: ?>
        <p>No recent posts available.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
  
<?php include 'footer.php'; ?>
