<?php

$data = [
    'category' => [
        1 => ['name' => 'Berita', 'description' => 'Informasi terbaru'],
        2 => ['name' => 'Tutorial', 'description' => 'Panduan dan cara belajar'],
        3 => ['name' => 'Event', 'description' => 'Kegiatan dan acara']
    ],
    'pendidikan' => [
        1 => ['name' => 'SD', 'description' => 'Sekolah Dasar'],
        2 => ['name' => 'SMP', 'description' => 'Sekolah Menengah Pertama'],
        3 => ['name' => 'SMA', 'description' => 'Sekolah Menengah Atas']
    ],
    'tingkat' => [
        1 => ['name' => 'Dasar', 'description' => 'Tingkat dasar pendidikan'],
        2 => ['name' => 'Menengah', 'description' => 'Tingkat menengah pendidikan'],
        3 => ['name' => 'Lanjutan', 'description' => 'Tingkat lanjutan pendidikan']
    ],
    'jenis' => [
        1 => ['name' => 'Sosial', 'description' => 'Kegiatan sosial dan komunitas'],
        2 => ['name' => 'Akademik', 'description' => 'Kegiatan akademik dan pendidikan'],
        3 => ['name' => 'Olahraga', 'description' => 'Kegiatan olahraga dan kebugaran']
    ],
    'post' => [
        1 => [
            'title' => 'Kegiatan Belajar Mengajar',
            'content' => 'Informasi mengenai kegiatan belajar mengajar di sekolah.',
            'image' => 'Header.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],
        2 => [
            'title' => 'Workshop Pendidikan',
            'content' => 'Detail tentang workshop pendidikan yang akan diadakan.',
            'image' => 'Header.jpg',
            'category_id' => 2, // Foreign key to category
            'pendidikan_id' => 2, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],
        3 => [
            'title' => 'Turnamen Olahraga',
            'content' => 'Event olahraga yang diadakan bulan ini.',
            'image' => 'Header.jpg',
            'category_id' => 3, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 3, // Foreign key to tingkat
            'jenis_id' => 3 // Foreign key to jenis
        ]
    ]
];
?>
