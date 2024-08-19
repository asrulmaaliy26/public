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
        3 => ['name' => 'Provinsi', 'description' => 'Tingkat lanjutan pendidikan'],
        4 => ['name' => 'Nasional', 'description' => 'Tingkat lanjutan pendidikan'],
        5 => ['name' => 'Asia', 'description' => 'Tingkat lanjutan pendidikan'],
        6 => ['name' => 'Pondok', 'description' => 'Tingkat lanjutan pendidikan']
    ],

    'jenis' => [
        1 => ['name' => 'Prestasi', 'description' => 'Kegiatan sosial dan komunitas'],
        2 => ['name' => 'Akademik', 'description' => 'Kegiatan akademik dan pendidikan'],
        3 => ['name' => 'Fasilitas', 'description' => 'Kegiatan olahraga dan kebugaran']
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
            'jenis_id' => 1 // Foreign key to jenis
        ],

        3 => [
            'title' => 'JUARA 2 MATEMATIKA',
            'content' => 'Event olahraga yang diadakan bulan ini.',
            'image' => 'Prestasi Juara2 Matematika MA.jpg',
            'category_id' => 2, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],

        4 => [
            'title' => 'SILATURAHMI WALI SANTRI PUTRI',
            'content' => 'Event olahraga yang diadakan bulan ini.',
            'image' => 'silaturahmi.png',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        5 => [
            'title' => "KHOTMIL QUR'AN BIL HIFDHI",
            'content' => "Alhamdulillah, selamat dan sukses untuk Muhammad Zidni Ilman Nafi'a bin Ahmad Hasyim. Semoga selalu Istiqomah, bermanfaat dan barokah ilmunya.",
            'image' => 'khotmilquranbilhifdhi.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 4, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        6 => [
            'title' => "TUAN RUMAH SOSIALISASI KMA 450 TAHUN 2024",
            'content' => "Sosialisasi KMA 450 Tahun 2024 bersama MA Al Hikmah Melathen dan MA Al Fattahiyah pada hari Senin, 12 Agustus 2024.",
            'image' => 'tuanrumakama2024.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 4, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        7 => [
            'title' => "UPACARA PENURUNAN BENDERA BERSEJARAH",
            'content' => "Hari ini, untuk pertama kalinya MA Al Hidayah menyelenggarakan upacara penurunan bendera dalam rangka Peringatan HUT RI ke-79.
            Panas terik tak menyurutkan semangatmu, BRAVO! Terimakasih untuk semua pihak yang sudah mendukung dan bekerja sama",
            'image' => 'upacarapenurunanbendera.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 4, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ]
    ]
];
// Method untuk memfilter berdasarkan jenis
function filterByJenis($data, $jenis_id) {
    $filtered_posts = [];
    foreach ($data['post'] as $post_id => $post) {
        if ($post['jenis_id'] === $jenis_id) {
            $filtered_posts[] = array_merge(['id' => $post_id], $post);
        }
    }
    return $filtered_posts;
}

function filterByCategory($data, $category_id) {
    $filtered_posts = [];
    foreach ($data['post'] as $post_id => $post) {
        if ($post['category_id'] === $category_id) {
            $filtered_posts[] = array_merge(['id' => $post_id], $post);
        }
    }
    return $filtered_posts;
}

function sortByIdDesc($data) {
    $posts = $data['post'];
    krsort($posts);
    
    $sorted_posts = [];
    foreach ($posts as $id => $post) {
        $sorted_posts[] = array_merge(['id' => $id], $post);
    }
    return $sorted_posts;
}

// Method untuk memfilter berdasarkan category dengan nama 'Kegiatan'
function filterByCategoryKegiatan($data) {
    return filterByCategory($data, 1); // 'Kegiatan' memiliki category_id 1
}

// Method untuk memfilter berdasarkan category dan jenis
function filterByJenisAndCategory($data, $jenis_id, $category_id) {
    $filtered_posts = [];
    foreach ($data['post'] as $post_id => $post) {
        if ($post['jenis_id'] === $jenis_id && $post['category_id'] === $category_id) {
            $filtered_posts[] = array_merge(['id' => $post_id], $post);
        }
    }
    return $filtered_posts;
}

// Method untuk memfilter berdasarkan tingkat dan jenis
function filterByJenisAndTingkat($data, $jenis_id, $tingkat_id) {
    $filtered_posts = [];
    foreach ($data['post'] as $post_id => $post) {
        if ($post['jenis_id'] === $jenis_id && $post['tingkat_id'] === $tingkat_id) {
            $filtered_posts[] = array_merge(['id' => $post_id], $post);
        }
    }
    return $filtered_posts;
}

// Method untuk memfilter post berdasarkan tingkat
function filterByTingkat($data, $tingkat_id) {
    $filtered_posts = [];
    foreach ($data['post'] as $post_id => $post) {
        if ($post['tingkat_id'] === $tingkat_id) {
            $filtered_posts[] = array_merge(['id' => $post_id], $post);
        }
    }
    return $filtered_posts;
}

// Method untuk mendapatkan post terbaru
function getRecentPosts($data, $limit = 5) {
    $sorted_posts = sortByIdDesc($data);
    return array_slice($sorted_posts, 0, $limit);
}

// Method untuk mendapatkan post berdasarkan nama tingkat
function filterByTingkatName($data, $tingkat_name) {
    $tingkat_id = array_search($tingkat_name, array_column($data['tingkat'], 'name'));
    return filterByTingkat($data, $tingkat_id);
}

?>
