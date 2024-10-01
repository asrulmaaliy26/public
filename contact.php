<?php
include 'base.php';
include 'data.php';

// Mengambil data dari form (jika menggunakan form submit)

?>

</style>

<section style="position: relative; text-align: center;">
    <img width="100%" style="height: 500px; object-fit: cover; filter: brightness(50%);" src="assets/images/Header.jpg" alt="">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 4em; color: white; font-weight: bold;">
        CONTACT
    </div>
</section>





<div class="container-fluid">
    <div class="container mt-5">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $contactData = [
                'contact_id' => 1, // Ganti dengan ID yang sesuai
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'subject' => $_POST['subject'],
                'message' => $_POST['message'],
                'created_at' => date('Y-m-d\TH:i:s.000  000Z'), // Format waktu yang sesuai
                'updated_at' => date('Y-m-d\TH:i:s.000000Z'), // Format waktu yang sesuai
            ];

            $response = $controller->sendContactData($contactData);
            if ($response) {
                echo '<div class="alert alert-success" role="alert">Pesan berhasil dikirim!</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Terjadi kesalahan, silakan coba lagi.</div>';
            }
        }
        ?>
    </div>
    <div style="width: 80%; background: white; padding: 1%; border-radius: 2%; box-shadow: 15px 15px 15px rgba(0, 0, 0, 0.06), -15px -15px 15px rgba(0, 0, 0, 0.06);" class="container help1 mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 pt-3 my-3">
                <img style="width: 90%" src="assets/images/bantuan.png" alt="Help Image" />
            </div>
            <div class="col-lg-6 text-left py-3 my-3">
                <h3 style="color: #14756D;">Visit Our Social Media</h3>
                <div class="row py-2">
                    <div class="col-4">
                        <a style="color: #14756D;" href="https://www.instagram.com/maalhidayah_">
                            <i class="fab fa-instagram ikon fa-3x"></i>
                        </a>
                    </div>
                    <div class="col-8 d-flex align-items-center">
                        <a style="color: #14756D;" href="https://www.instagram.com/maalhidayah_">@maalhidayah_</a>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-4">
                        <a style="color: #14756D;" href="https://www.youtube.com/@MA_Al-Hidayah_Tulungagung/featured">
                            <i class="fab fa-youtube ikon fa-3x"></i>
                        </a>
                    </div>
                    <div class="col-8 d-flex align-items-center">
                        <a style="color: #14756D;" href="https://www.youtube.com/@MA_Al-Hidayah_Tulungagung/featured">MA_Al-Hidayah_Tulungagung</a>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-4">
                        <a style="color: #14756D;" href="https://www.facebook.com/Alhidayah.20">
                            <i class="fab fa-facebook ikon fa-3x"></i>
                        </a>
                    </div>
                    <div class="col-8 d-flex align-items-center">
                        <a style="color: #14756D;" href="https://www.facebook.com/Alhidayah.20">MA Al Hidayah Kauman</a>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-4">
                        <a style="color: #14756D;" href="https://wa.me/+6282234639615">
                            <i class="fab fa-whatsapp ikon fa-3x"></i>
                        </a>
                    </div>
                    <div class="col-8 d-flex align-items-center">
                        <a style="color: #14756D;" href="https://wa.me/+6282234639615">maalhidayahofficial</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container my-5">
        <div class="shadow p-4 rounded" style="background-color: white;">
            <h2 class="text-center mb-4" style="color: #14756D;">Hubungi Kami</h2>
            <form method="POST" action="" class="mt-4">
                <div class="form-group m-2">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" class="form-control mt-2" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="form-group m-2">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control mt-2" placeholder="Masukkan email anda untuk balasan" required>
                </div>
                <div class="form-group m-2">
                    <label for="subject">Subjek:</label>
                    <input type="text" id="subject" name="subject" class="form-control mt-2" placeholder="Masukkan subjek yang ingin di bahas . contoh : layanan ma, kepengurusan dll   " required>
                </div>
                <div class="form-group m-2">
                    <label for="message">Pesan:</label>
                    <textarea id="message" name="message" class="form-control mt-2" placeholder="Masukkan pesan anda" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2 btn-block">Submit</button>
            </form>
        </div>

    </div>


</div>

<iframe style="margin-bottom: -10px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15801.777997849458!2d111.8664144!3d-8.0560593!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78e300c4156a41%3A0xeb19fa0c03d695d3!2sMA%20AL%20HIDAYAH!5e0!3m2!1sid!2sid!4v1723621722673!5m2!1sid!2sid" width="100%" height="400" style="border: 0" allowfullscreen="" loading="lazy"></iframe>

<?php include 'footer.php' ?>