<?php

// Memasukkan data yang sudah didefinisikan di script sebelumnya
require 'data.php';

// Contoh penggunaan method:
$sorted_posts = sortByIdDesc($data);
$filtered_by_kegiatan = filterByCategoryKegiatan($data);
$filtered_by_jenis = filterByJenis($data, 2); // Misalnya filter jenis dengan id 2 (Akademik)
$filtered_by_tingkat = filterByTingkat($data, 1); // Misalnya filter tingkat dengan id 1 (Kecamatan)
$filtered_by_jenis_and_tingkat = filterByJenisAndTingkat($data, 2, 1); // Misalnya filter jenis 2 dan tingkat 1

$media_url = 'assets/images/'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .post {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .post img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Post List with IDs</h1>
    <?php 
    
    $limited_sorted_posts = array_slice($sorted_posts, 0, 3); // Membatasi hingga 3 data
    foreach ($limited_sorted_posts as $post): ?>
        <div class="post">
            <h2><?= $post['title'] ?> (ID: <?= $post ['id'] ?>)</h2>
            <p><?= $post['content'] ?></p>
            <img src="<?= $media_url . $post['image'] ?>" alt="<?= $post['title'] ?>">
        </div>
    <?php endforeach; ?>

    <h1>Sorted Posts</h1>
    <?php foreach ($sorted_posts as $post): ?>
        <div class="post">
            <h2><?= $post['title'] ?> (ID: <?= $post ['id'] ?>)</h2>
            <p><?= $post['content'] ?></p>
            <img src="<?= $media_url . $post['image'] ?>" alt="<?= $post['title'] ?>">
        </div>
    <?php endforeach; ?>

    <h1>Filtered by Kegiatan</h1>
    <?php if (!empty($filtered_by_kegiatan)): ?>
        <?php foreach ($filtered_by_kegiatan as $post): ?>
            <div class="post">
                <h2><?= $post['title'] ?> (ID: <?= $post ['id'] ?>)</h2>
                <p><?= $post['content'] ?></p>
                <img src="<?= $media_url . $post['image'] ?>" alt="<?= $post['title'] ?>">
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No posts found in Kegiatan category.</p>
    <?php endif; ?>

    <h1>Filtered by Jenis (Akademik)</h1>
    <?php if (!empty($filtered_by_jenis)): ?>
        <?php foreach ($filtered_by_jenis as $post): ?>
            <div class="post">
                <h2><?= $post['title'] ?></h2>
                <p><?= $post['content'] ?></p>
                <img src="<?= $media_url . $post['image'] ?>" alt="<?= $post['title'] ?>">
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No posts found for this Jenis.</p>
    <?php endif; ?>

    <h1>Filtered by Tingkat (Kecamatan)</h1>
    <?php if (!empty($filtered_by_tingkat)): ?>
        <?php foreach ($filtered_by_tingkat as $post): ?>
            <div class="post">
                <h2><?= $post['title'] ?></h2>
                <p><?= $post['content'] ?></p>
                <img src="<?= $media_url . $post['image'] ?>" alt="<?= $post['title'] ?>">
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No posts found for this Tingkat.</p>
    <?php endif; ?>

    <h1>Filtered by Jenis and Tingkat</h1>
    <?php if (!empty($filtered_by_jenis_and_tingkat)): ?>
        <?php foreach ($filtered_by_jenis_and_tingkat as $post): ?>
            <div class="post">
                <h2><?= $post['title'] ?></h2>
                <p><?= $post['content'] ?></p>
                <img src="<?= $media_url . $post['image'] ?>" alt="<?= $post['title'] ?>">
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No posts found for this Jenis and Tingkat.</p>
    <?php endif; ?>
</body>
</html>
