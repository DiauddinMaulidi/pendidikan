<?php
// inisialisasi session
session_start();

// mengecek apakah user sudah login atau tidak
if (!isset($_SESSION['login'])) {
    header('location:views/login.php');
    exit();
};

$current_page = basename($_SERVER['PHP_SELF']);

include "./layouts/header.php";

?>
<div class="content">
    <div class="tittle-inovasi text-center italic">
        <h1>Inovasi Pembelajaran</h1>
        <p class="fst-italic">Temukan cara baru untuk belajar, bermain, dan berkembang di era teknologi</p>
    </div>
    <div class="isiInovasi d-flex flex-wrap gap-5 justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="../public/img/gamifikasi.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Gamifikasi dalam Pembelajaran</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../public/img/vr.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Virtual Reality (VR) dan Augmented Reality (AR)</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../public/img/ai.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Pembelajaran Adaptif dengan Kecerdasan Buatan (AI)</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../public/img/Flipped-Classroom.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Flipped Classroom</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../public/img/mikroelearning.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5>Microlearning untuk Efisiensi Waktu</h5>
            </div>
        </div>
    </div>
</div>

<?php include "./layouts/footer.php"; ?>