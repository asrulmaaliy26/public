<?php

$data = [
    'category' => [
        1 => ['name' => 'Kegiatan'],
        2 => ['name' => 'Event'],
    ],

    'pendidikan' => [
        1 => ['name' => 'SD'],
        2 => ['name' => 'SMP'],
        3 => ['name' => 'SMA'],
        4 => ['name' => 'SEMUA' ]
    ],

    'tingkat' => [
        1 => ['name' => 'Kecamatan' ],
        2 => ['name' => 'Kabupaten' ],
        3 => ['name' => 'Provinsi'],
        4 => ['name' => 'Nasional'],
        5 => ['name' => 'Asia'],
        6 => ['name' => 'Pondok']
    ],

    'jenis' => [
        1 => ['name' => 'Prestasi'],
        2 => ['name' => 'Akademik'],
        3 => ['name' => 'Fasilitas']
    ],

    'post' => [
        41 => [
            'title' => "UPACARA PENURUNAN BENDERA BERSEJARAH",
            'content' => "Hari ini, untuk pertama kalinya MA Al Hidayah menyelenggarakan upacara penurunan bendera dalam rangka Peringatan HUT RI ke-79. Panas terik tak menyurutkan semangatmu, BRAVO! Terimakasih untuk semua pihak yang sudah mendukung dan bekerja sama",
            'image' => 'upacarapenurunanbendera.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 4, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        40 => [
            'title' => "TUAN RUMAH SOSIALISASI KMA 450 TAHUN 2024",
            'content' => "Sosialisasi KMA 450 Tahun 2024 bersama MA Al Hikmah Melathen dan MA Al Fattahiyah pada hari Senin, 12 Agustus 2024.",
            'image' => 'tuanrumakama2024.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 4, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        39 => [
            'title' => "KHOTMIL QUR'AN BIL HIFDHI",
            'content' => "Alhamdulillah, selamat dan sukses untuk Muhammad Zidni Ilman Nafi'a bin Ahmad Hasyim. Semoga selalu Istiqomah, bermanfaat dan barokah ilmunya.",
            'image' => 'khotmilquranbilhifdhi.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 4, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        38 => [
            'title' => "MASA TA'ARUF SISWA MADRASAH",
            'content' => 'Informasi mengenai kegiatan belajar mengajar di sekolah.',
            'image' => 'Header.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        37 => [
            'title' => 'SILATURAHMI WALI SANTRI PUTRI',
            'content' => 'Event olahraga yang diadakan bulan ini.',
            'image' => 'silaturahmi.png',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        36 => [
            'title' => 'JUARA 2 MATEMATIKA',
            'content' => 'Event olahraga yang diadakan bulan ini.',
            'image' => 'Prestasi Juara2 Matematika MA.jpg',
            'category_id' => 2, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 3, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],

        35 => [
            'title' => 'JUARA 2 EKONOMI MA',
            'content' => 'Detail tentang workshop pendidikan yang akan diadakan.',
            'image' => 'Prestasi Juara2 Ekonomi MA.jpg',
            'category_id' => 2, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 3, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],

        34 => [
            'title' => 'LOLOS KE - KOMPETISI YOUNG RESEARCHESRS (MYRES) 120 NASIONAL TAHUN 2024',
            'content' => 'Selamat dan Sukses untuk Dzawil (Siswa kelas XII IPS 2), Balqis (XI IPA), dan Cindy (XI IPA) atas lolosnya proposal penelitian 120 besar Nasional dari 7000+ proposal yang dikirimkan. Dengan pembimbing Bapak Aldo Krisdianto, S.Pd. dalam lomba MYRES 2024. Semoga Allah mempermudah dan memberi kelancaran pada kita dalam meningkatkan prestasi, aamiin.',
            'image' => 'lolosyoungreserach.jpg',
            'category_id' => 2, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 4, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],

        33 => [
            'title' => 'Penyuluhan Kesehatan oleh Puskesmas Kauman',
            'content' => 'Penyuluhan Kesehatan oleh Puskesmas Kauman',
            'image' => 'tuanrumakama2024.jpg',
            'category_id' => 2, // Foreign key to category
            'pendidikan_id' => 3, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        32 => [
            'title' => 'Selamat menempuh Penilaian Akhir Tahun',
            'content' => 'Selamat menempuh Penilaian Akhir Tahun. Tahun Pelajaran 2023/2024. Semoga diberikan kelancaran dan kemudahan serta mendapat hasil yang baik serta memuaskan.',
            'image' => 'penilaianakhirtahun20222023.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        31 => [
            'title' => 'HAFLAH TASYAKURAN PURNA SISWA KELAS XII',
            'content' => 'Purna bukan berarti usai. Perjalanan mencari ilmu masih harus terus berlanjut. Semoga tetap Istiqomah dan semangat mencari Ilmu. Serta ingat jasa Gurumu',
            'image' => 'pemilihanketuaosis2024.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        30 => [
            'title' => 'Pemilihan Ketua dan Wakil Ketua OSIS MA Al Hidayah Periode 2024/2025',
            'content' => 'Pemilihan Ketua dan Wakil Ketua OSIS MA Al Hidayah Periode 2024/2025',
            'image' => 'tuanrumakama2024.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        29 => [
            'title' => 'KHOTMIL QURAN BIL HIFDHI',
            'content' => "Alhamdulillah, selamat dan sukses untuk Imro'atul Khasanah. Semoga selalu Istiqomah, bermanfaat dan barokah ilmunya.",
            'image' => 'khotmilquranimroatul.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        28 => [
            'title' => 'RAPAT PLENO KELULUSAN PESERTA DIDIK KELAS XII',
            'content' => 'Rapat Pleno Kelulusan Peserta Didik Kelas XII, Angkatan I MA Al Hidayah Kauman Tahun Pelajaran 2023/2024. MA Al Hidayah Kauman menggelar rapat pleno kelulusan peserta didik kelas XII tahun Pelajaran 2023/2024 pada Kamis (02/05/2024). Rapat dilaksankan di Ruang Kelas Gedung Timur MA Al Hidayah yang dihadiri oleh jajaran struktural, para wali kelas dan seluruh dewan guru kelas XII. Rapat ini diawali dengan pengarahan dari Kepala MA Al Hidayah Kauman, Moh. Taufiq Hidayatulloh, S. Pd. Selanjutnya, ketentuan kelulusan disampaikan oleh Wakamad Bidang Kurikulum. Setelah melalui rapat pleno memutuskan secara bersama jumlah peserta didik yang dinyatakan lulus. Kelulusan peserta didik akan diumumkan pada tanggal 6 Mei 2024 mendatang. Semoga hasil terbaik didapatkan pada kegiatan ini. Kegiatan ini menjadi saksi keberhasilan dan perjuangan tak kenal lelah dari setiap peserta didik dan guru MA Al Hidayah Kauman, mendorong semangat untuk terus berkembang dan meraih prestasi di masa depan.',
            'image' => 'rapatpleno20232024.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        27 => [
            'title' => 'KHOTMIL QURAN BIL HIFDHI',
            'content' => 'Alhamdulillah, selamat dan sukses untuk Ikvi Mafina Ibadati. Semoga selalu Istiqomah, bermanfaat dan barokah ilmunya.',
            'image' => 'khotmilquranikvi.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        26 => [
            'title' => 'KHOTMIL QURAN BIL HIFDHI',
            'content' => 'Alhamdulillah, selamat dan sukses untuk Syifau Zzoelfa. Semoga selalu Istiqomah, bermanfaat dan barokah ilmunya.',
            'image' => 'khotmilquransyfau.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        25 => [
            'title' => 'KHOTMIL QURAN BIL HIFDHI',
            'content' => 'Alhamdulillah, selamat dan sukses untuk Sartika Dita Wahyu Sejati. Semoga selalu Istiqomah, bermanfaat dan barokah ilmunya.',
            'image' => 'khotimilquransartika.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        24 => [
            'title' => 'IDUL FITRI',
            'content' => 'Segenap Keluarga Besar Madrasah Aliyah Al Hidayah mengucapkan, "Selamat Hari Raya Idul Fitri 1445 H" Semoga amal ibadah kita di bulan Ramadhan diterima oleh Allah SWT dan kita diberi kesempatan untuk berjumpa kembali dengan Ramadhan pada tahun mendatang aamiin aamin aamin yaa robbal alamiin',
            'image' => 'idulfitri2024.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        23 => [
            'title' => 'UJIAN PRAKTIK KELAS XII',
            'content' => 'Ujian Praktik hari pertama putri kelas XII adalah senam lantai dan lari. Semoga diberi kelancaran dan kemudahan untuk ujian selanjutnya.',
            'image' => 'ppdb.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        22 => [
            'title' => 'PPDB',
            'content' => 'Highlight Seleksi PPDB MA AL HIDAYAH',
            'image' => 'ppdb.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        21 => [
            'title' => 'PERPULANGAN SANTRI FORAML',
            'content' => 'Perpulangan Santri Formal PPTQ AL-MANNAN Tulungagung Selamat Berlibur. Pastikan Dirumah Birrul Walidain ya... Jangan lupa mengaji dan juga pulang ke pondok sesui jadwal yang telah ditetapkan👌',
            'image' => 'perpulangan3.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        20 => [
            'title' => 'PENILAIAN AKHIR SEMESTER',
            'content' => 'Semoga diberi kelancaran dan kemudahan dalam mengerjakan serta mendapatkan hasil yang baik.',
            'image' => 'penilaianakhirsemester20232024.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        19 => [
            'title' => 'JUARA 1 BULU TANGKIS TUNGGAL PUTRI',
            'content' => 'Selamat kepada Bu Tika atas prestasi yang diperoleh. Semoga kedepan makin sukses dan makin semangat meraih prestasi serta makin menginspirasi.',
            'image' => 'juara1bulutangkisguru.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],

        18 => [
            'title' => 'HARAPAN 3 SINGER',
            'content' => 'Semoga kedepannya semakin sukses dan semakin semangat meraih prestasi. Terimakasih juga kami sampaikan kepada segenap pihak yang telah mendukung dengan semaksimal mungkin.',
            'image' => 'harapana3singer.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],

        17 => [
            'title' => 'HARAPAN 1 SINGER',
            'content' => 'Semoga kedepannya semakin sukses dan semakin semangat meraih prestasi. Terimakasih juga kami sampaikan kepada segenap pihak yang telah mendukung dengan semaksimal mungkin.',
            'image' => 'harapan1singer.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        16 => [
            'title' => 'HARAPAN 3 KALIGRAFI',
            'content' => 'Semoga kedepannya semakin sukses dan semakin semangat meraih prestasi. Terimakasih juga kami sampaikan kepada segenap pihak yang telah mendukung dengan semaksimal mungkin.',
            'image' => 'harapan3kaligrafi.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],

        15 => [
            'title' => 'JUARA 1 MUSABAQOH FAHMIL QURAN',
            'content' => 'Semoga kedepannya semakin sukses dan semakin semangat meraih prestasi. Terimakasih juga kami sampaikan kepada segenap pihak yang telah mendukung dengan semaksimal mungkin.',
            'image' => 'juara1mussabaqohfahmilquran.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],

        14 => [
            'title' => 'JUARA 2 CATUR',
            'content' => 'Semoga kedepannya semakin sukses dan semakin semangat meraih prestasi. Terimakasih juga kami sampaikan kepada segenap pihak yang telah mendukung dengan semaksimal mungkin.',
            'image' => 'juara2catur.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],

        13 => [
            'title' => 'HARAPAN 2 CIPTA & BACA PUISI KANDUNGAN AL QURAN',
            'content' => 'Semoga kedepannya semakin sukses dan semakin semangat meraih prestasi. Terimakasih juga kami sampaikan kepada segenap pihak yang telah mendukung dengan semaksimal mungkin.',
            'image' => 'harapan2ciptabacapuisi.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],

        12 => [
            'title' => 'JUARA TAHFIDZUL QURAN 10 JUZ',
            'content' => 'Semoga kedepannya semakin sukses dan semakin semangat meraih prestasi. Terimakasih juga kami sampaikan kepada segenap pihak yang telah mendukung dengan semaksimal mungkin.',
            'image' => 'juara1tahfidhulquran10juz.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],

        11 => [
            'title' => 'STUDY BANDING',
            'content' => 'Study Banding Keluarga Besar Yayasan Al-Mannan Ke Ponpes Assalafiyyah Mlangi Serta Ziaroh Maqbaroh KH. Nur Iman (Mlangi, Nogotirto, Kec. Gamping Kab. Sleman DIY)',
            'image' => 'studybundingmlangi2024awal1.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        10 => [
            'title' => 'ZIARAH MAKAM',
            'content' => 'Ziarah Maqbaroh KH. Nur Iman Mlangi, Nogotirto Kec. Gamping Kab. Sleman DIY',
            'image' => 'tuanrumakama2024.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        9 => [
            'title' => 'JUARA 4 MA/SMA BIOLOGI TERINTEGRASI',
            'content' => 'Selamat dan Sukses atas prestasi yang diraih',
            'image' => 'juara4masmabiologiterintegritas.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 2, // Foreign key to tingkat
            'jenis_id' => 1 // Foreign key to jenis
        ],

        8 => [
            'title' => 'STUDHY BANDING',
            'content' => 'Study banding Keluarga Besar Yayasan Al Mannan di Ponpes Assalafiyyah Mlangi Selasa, 11 Juli 2023',
            'image' => 'studybundingmlangi2024awal.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        7 => [
            'title' => 'BAZAR',
            'content' => 'Karena dalam membangun usaha tidaklah semudah membalik telapak tangan, maka perlu diajarkan sejak di bangku sekolahan.',
            'image' => 'tuanrumakama2024.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],
        
        6 => [
            'title' => 'PENILAIAN AKHIR TAHUN TA 2022/2023',
            'content' => 'Semoga diberi kemudahan dan kelancaran dalam mengerjakan serta mendapat hasil yang memuaskan.',
            'image' => 'penilaianakhirtahun20222023.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        5 => [
            'title' => 'APEL HARI NASIONAL 2023',
            'content' => 'Apel Peringatan Hari Pendidikan Nasional 2023 dilanjutkan dengan Halal Bi Halal SMPT dan MA Al Hidayah pada Selasa, 2 Mei 2023',
            'image' => 'apelperingatanpendidikannasional20232.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        4 => [
            'title' => 'PPDB',
            'content' => 'PPDB',
            'image' => 'ppdb2023.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        3 => [
            'title' => 'LOWONGAN TENAGA PENDIDIK',
            'content' => '"RALAT TANGGAL PENDAFTARAN" Tanggal pendaftaran yang benar adalah 13-25 Maret 2023 Segera kirim lamaranmu dan bergabung bersama kami',
            'image' => 'lowongankerjaan1.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        2 => [
            'title' => 'NATSANA',
            'content' => 'MATSAMA "Moderasi Beragama di Madrasah Mewujudkan Santri yang Tangguh dalam Mengemban Al Quran."',
            'image' => 'matsama12023.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],

        1 => [
            'title' => 'TURUT BERDUKA',
            'content' => 'Turut berbelasungkawa atas wafatnya asatidzah "MARLYNDA AGASTIN, S.Pd." Semoga Husnul Khotimah dan Seluruh Amal Ibadah Diterima serta Pengabdian dan Perjuangan Beliau.Al Fatihah...',
            'image' => 'dukacitaguru.jpg',
            'category_id' => 1, // Foreign key to category
            'pendidikan_id' => 1, // Foreign key to pendidikan
            'tingkat_id' => 1, // Foreign key to tingkat
            'jenis_id' => 2 // Foreign key to jenis
        ],
    ]
];

function getPostById($data, $post_id) {
    if (isset($data['post'][$post_id])) {
        return array_merge(['id' => $post_id], $data['post'][$post_id]);
    }
    return null; // Return null jika post tidak ditemukan
}
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

// Method untuk menyortir post berdasarkan ID dari terkecil ke terbesar
function sortByIdAsc($data) {
    $posts = $data['post'];
    ksort($posts);
    
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
function getRecentPostsLimits($data, $limit = 5) {
    $sorted_posts = sortByIdDesc($data);
    return array_slice($sorted_posts, 0, $limit);
}

// Method untuk mendapatkan post berdasarkan nama tingkat
function filterByTingkatName($data, $tingkat_name) {
    $tingkat_id = array_search($tingkat_name, array_column($data['tingkat'], 'name'));
    return filterByTingkat($data, $tingkat_id);
}







function truncateContent($content, $max_words = 20) {
    $words = explode(' ', $content);
    if (count($words) > $max_words) {
        $words = array_slice($words, 0, $max_words);
        $content = implode(' ', $words) . '...'; // Menambahkan '...' di akhir jika konten dipotong
    }
    return $content;
}

?>
