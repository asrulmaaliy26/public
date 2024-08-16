<?php

$data = [
    'category' => [
        1 => ['name' => 'Kegiatan', 'description' => 'Informasi terbaru'],
        2 => ['name' => 'Event', 'description' => 'Panduan dan cara belajar'],
    ],

    'pendidikan' => [
        1 => ['name' => 'SD', 'description' => 'Sekolah Dasar'],
        2 => ['name' => 'SMP', 'description' => 'Sekolah Menengah Pertama'],
        3 => ['name' => 'SMA', 'description' => 'Sekolah Menengah Atas'],
        4 => ['name' => 'SEMUA', 'description' => 'Sekolah Menengah Atas']
    ],

    'tingkat' => [
        1 => ['name' => 'Kecamatan', 'description' => 'Tingkat dasar pendidikan'],
        2 => ['name' => 'Kabupaten', 'description' => 'Tingkat menengah pendidikan'],
        3 => ['name' => 'Provinsi', 'description' => 'Tingkat lanjutan pendidikan']
    ],

    'jenis' => [
        1 => ['name' => 'Prestasi', 'description' => 'Kegiatan sosial dan komunitas'],
        2 => ['name' => 'Akademik', 'description' => 'Kegiatan akademik dan pendidikan'],
        3 => ['name' => 'Olahraga', 'description' => 'Kegiatan olahraga dan kebugaran']
    ],

    'post' => [
        1 => [
            'title' => "MASA TA'ARUF SISWA MADRASAH",
            'content' => 'Informasi mengenai kegiatan belajar mengajar di sekolah.',
            'image' => 'Header.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        2 => [
            'title' => 'JUARA 2 EKONOMI MA',
            'content' => 'Detail tentang workshop pendidikan yang akan diadakan.',
            'image' => 'Prestasi Juara2 Ekonomi MA.jpg',
            'category_id' => 2, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        3 => [
            'title' => 'JUARA 2 MATEMATIKA',
            'content' => 'Event olahraga yang diadakan bulan ini.',
            'image' => 'Prestasi Juara2 Matematika MA.jpg',
            'category_id' => 2, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        4 => [
            'title' => 'SILATURAHMI WALI SANTRI PUTRI',
            'content' => 'Event olahraga yang diadakan bulan ini.',
            'image' => 'silaturahmi.png',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ]
    ]
];

// Method untuk mengurutkan post berdasarkan id terakhir
function sortByIdDesc($data) {
    $posts = $data['post'];
    krsort($posts); // Mengurutkan berdasarkan key (id) dari yang terbesar ke terkecil
    return $posts;
}

// Method untuk memfilter berdasarkan category dengan nama 'Kegiatan'
function filterByCategoryKegiatan($data) {
    $kegiatan_category_id = null;
    foreach ($data['category'] as $id => $category) {
        if ($category['name'] === 'Kegiatan') {
            $kegiatan_category_id = $id;
            break;
        }
    }
    $filtered_posts = [];
    if ($kegiatan_category_id !== null) {
        foreach ($data['post'] as $post_id => $post) {
            if ($post['category_id'] === $kegiatan_category_id) {
                $filtered_posts[$post_id] = $post;
            }
        }
    }
    return $filtered_posts;
}

// Method untuk memfilter berdasarkan jenis
function filterByJenis($data, $jenis_id) {
    $filtered_posts = [];
    foreach ($data['post'] as $post_id => $post) {
        if ($post['jenis_id'] === $jenis_id) {
            $filtered_posts[$post_id] = $post;
        }
    }
    return $filtered_posts;
}

// Method untuk memfilter berdasarkan tingkat
function filterByTingkat($data, $tingkat_id) {
    $filtered_posts = [];
    foreach ($data['post'] as $post_id => $post) {
        if ($post['tingkat_id'] === $tingkat_id) {
            $filtered_posts[$post_id] = $post;
        }
    }
    return $filtered_posts;
}

// Method untuk memfilter berdasarkan jenis dan tingkat
function filterByJenisAndTingkat($data, $jenis_id, $tingkat_id) {
    $filtered_posts = [];
    foreach ($data['post'] as $post_id => $post) {
        if ($post['jenis_id'] === $jenis_id && $post['tingkat_id'] === $tingkat_id) {
            $filtered_posts[$post_id] = $post;
        }
    }
    return $filtered_posts;
}

// // Contoh penggunaan method:
// $sorted_posts = sortByIdDesc($data);
// $filtered_by_kegiatan = filterByCategoryKegiatan($data);
// $filtered_by_jenis = filterByJenis($data, 2); // Misalnya filter jenis dengan id 2 (Akademik)
// $filtered_by_tingkat = filterByTingkat($data, 1); // Misalnya filter tingkat dengan id 1 (Kecamatan)
// $filtered_by_jenis_and_tingkat = filterByJenisAndTingkat($data, 2, 1); // Misalnya filter jenis 2 dan tingkat 1

// // Output hasil filter
// print_r($sorted_posts);
// print_r($filtered_by_kegiatan);
// print_r($filtered_by_jenis);
// print_r($filtered_by_tingkat);
// print_r($filtered_by_jenis_and_tingkat);

?>
