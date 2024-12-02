<?php
// inisialisasi session
session_start();

// mengecek apakah user sudah login atau tidak
if (!isset($_SESSION['login'])) {
    header('location:views/login.php');
    exit();
};

$current_page = basename($_SERVER['PHP_SELF']);

include "./views/layouts/header.php";

?>

<div class="content">
    <div class="content-satu">
        <div class="tittle">
            <h1>Inovasi Pembelajaran</h1>
            <h1>untuk Generasi Digital</h1>
        </div>
        <div class="deskripsi-title w-25">
            <p class="text-justify">Website ini dirancang untuk memberikan informasi kepada siswa, guru, dan masyarakat dalam memahami serta memanfaatkan inovasi dalam pembelajaran berbasis teknologi</p>
        </div>
    </div>
    <div class="content-dua">
        <marquee>Selamat Datang Di Situs Pembelajaran Digital Modern</marquee>
        <div class="gambar">
            <p>
                <b>Mengapa Inovasi Pembelajaran Penting?</b><br><br>
                Di era digital, teknologi telah menjadi bagian tak terpisahkan dari kehidupan sehari-hari, termasuk pendidikan. Dengan metode seperti gamifikasi, pembelajaran berbasis VR/AR, dan AI, generasi muda dapat belajar dengan cara yang lebih interaktif, fleksibel, dan efektif. Kami hadir untuk mendukung perjalanan Anda menuju masa depan pendidikan yang lebih baik.
            </p>
        </div>
    </div>
</div>

<!-- galeri -->
<section class="px-4">
    <div class="tittle-motivasi">
        <h2 class="text-center mb-5">Motivasi</h2>
    </div>
    <div class="content-galeri d-flex gap-5 justify-content-center flex-wrap">
        <div class="card mb-3 border-0" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./public/img/drucker.jpg" class="img-fluid rounded-circle" alt="belajar tentang AI">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Steven Johnson</h5>
                        <p class="card-text">"Jika kamu melihat sejarah, inovasi tidak datang hanya dari memberi orang insentif; itu datang dari menciptakan lingkungan di mana ide-ide mereka dapat terhubung"</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 border-0" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./public/img/denis.jpg" class="img-fluid rounded-circle" alt="belajar tentang AI">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Denis Waitley</h5>
                        <p class="card-text">Kamu memiliki semua alasan di dunia untuk mencapai impian termegahmu. Imajinasi ditambah inovasi sama dengan realisasi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 border-0" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./public/img/Simon.jpg" class="img-fluid rounded-circle" alt="belajar tentang AI">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Simon Sinek</h5>
                        <p class="card-text">"Apa gunanya sebuah ide jika itu tetap sebuah ide? Mencoba. Percobaan. Gagal. Coba lagi. Mengubah dunia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- akhir galeri -->

<!-- contact awal -->
<section class="kontak container" id="kontak">
    <div class="judul mb-5">
        <h2 class="text-center">Kontak Anda</h2>
    </div>
    <div class="isi">
        <div class="mapp">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31560.75643411604!2d116.0561380108398!3d-8.586907300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf7e3eff3f5b%3A0x34f884b732836131!2sUniversitas%20Mataram!5e0!3m2!1sid!2sid!4v1732498885479!5m2!1sid!2sid" allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="map"></iframe>
        </div>
        <div class="row col-md-6 ms-3 p-2">
            <form>
                <div class="mb-1">
                    <label for="nama" class="form-label">Nama: </label>
                    <input type="text" class="form-control" id="nama" />
                </div>
                <div class="mb-1">
                    <label for="email" class="form-label">Email: </label>
                    <input type="email" class="form-control" id="email" />
                </div>
                <div class="mb-3">
                    <label for="noHP" class="form-label">No HP</label>
                    <input type="number" class="form-control" id="noHp" />
                </div>
                <button type="submit" class="btn btn-primary buttonTombol">Kirim</button>
            </form>
        </div>
    </div>
</section>
<!-- contact akhir -->

<?php include "./views/layouts/footer.php" ?>