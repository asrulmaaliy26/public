<?php

class HomepageController
{
    public $uri = 'https://admin.maalhidayahkauman.sch.id/api';

    // Method untuk menampilkan semua artikel
    public function index()
    {
        return $this->fetchArticles();
    }

    // Method untuk mendapatkan artikel dengan pagination
    public function getArticlesPaginasi($total)
    {
        $response = $this->fetchData("/articles/{$total}/paginasi");
        // Memeriksa apakah data berisi atribut 'data' yang merupakan array artikel
        if (isset($response['data']) && is_array($response['data'])) {
            return $response['data'];
        }
        throw new \Exception('Invalid data format received from API for paginated articles.');
    }

    // Method untuk mendapatkan artikel berdasarkan slug
    public function getOneArticle($slug)
    {
        return $this->fetchArticleBySlug($slug);
    }

    // Method untuk mendapatkan kategori
    public function getCategory()
    {
        return $this->fetchData('/categories');
    }

    // Method untuk mendapatkan jenis
    public function getJenis()
    {
        return $this->fetchData('/jenises');
    }

    // Method untuk mendapatkan pendidikan
    public function getPendidikan()
    {
        return $this->fetchData('/pendidikans');
    }

    // Method untuk mendapatkan tingkat
    public function getTingkat()
    {
        return $this->fetchData('/tingkats');
    }

    // Method untuk mendapatkan artikel berdasarkan satu tipe
    public function getArticleByOneTypes($type, $typeSlug)
    {
        return $this->fetchData("/articles/{$type}/{$typeSlug}");
    }

    // Method untuk mendapatkan artikel berdasarkan dua tipe
    public function getArticleByTwoTypes($type1, $type1Slug, $type2, $type2Slug)
    {
        return $this->fetchData("/articles/{$type1}/{$type1Slug}/{$type2}/{$type2Slug}");
    }

    // Method untuk mendapatkan artikel berdasarkan tiga tipe
    public function getArticleByThreeTypes($type1, $type1Slug, $type2, $type2Slug, $type3, $type3Slug)
    {
        return $this->fetchData("/articles/{$type1}/{$type1Slug}/{$type2}/{$type2Slug}/{$type3}/{$type3Slug}");
    }

    // Method untuk mendapatkan artikel berdasarkan empat tipe
    public function getArticleByFourTypes($type1, $type1Slug, $type2, $type2Slug, $type3, $type3Slug, $type4, $type4Slug)
    {
        return $this->fetchData("/articles/{$type1}/{$type1Slug}/{$type2}/{$type2Slug}/{$type3}/{$type3Slug}/{$type4}/{$type4Slug}");
    }

    // Fungsi untuk mengambil data dari API
    // Fungsi untuk mengambil data dari API
    private function fetchData($endpoint)
    {
        $url = $this->uri . $endpoint;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); // batas waktu 10 detik
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); // timeout koneksi 5 detik

        $response = curl_exec($ch);

        // Cek error koneksi
        if (curl_errno($ch)) {
            curl_close($ch);
            throw new \Exception("Tidak dapat mengakses API: " . curl_error($ch));
        }

        // Cek HTTP status code
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpCode !== 200) {
            throw new \Exception("API mengembalikan kode HTTP: {$httpCode}");
        }

        // Decode JSON
        $data = json_decode($response, true);

        // Cek apakah hasilnya valid dan tidak kosong
        if (!is_array($data) || empty($data)) {
            throw new \Exception("Data dari API kosong atau tidak valid.");
        }

        return $data;
    }


    // Fungsi untuk mengambil artikel
    private function fetchArticles()
    {
        return $this->fetchData('/articles');
    }

    // Fungsi untuk mengambil artikel berdasarkan slug
    private function fetchArticleBySlug($slug)
    {
        return $this->fetchData("/article/{$slug}");
    }

    function sendContactData($contactData)
    {
        $url = 'https://admin.maalhidayahkauman.sch.id/api/contact';
        // $url = 'http://127.0.0.1:8000/api/contact';

        $options = [
            'http' => [
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode($contactData),
            ],
        ];


        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) {
            die('Error occurred');
        }

        return json_decode($result);
    }
}

function truncateText($text, $maxLength)
{
    return strlen($text) > $maxLength ? substr($text, 0, $maxLength) . '...' : $text;
}

// Contoh penggunaan
try {
    $controller = new HomepageController(); // Misalnya, mengambil halaman 1
} catch (\Exception $e) {
    $error_message = 'Error: ' . $e->getMessage();
}
