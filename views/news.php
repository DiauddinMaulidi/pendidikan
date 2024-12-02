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
<!-- news -->
<section>
    <div class="content-card container p-5 d-flex flex-wrap justify-content-center">
        <div class="card mb-3" style="max-width: 700px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../public/img/Flipped-Classroom.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text">GAME BASED LEARNING SEBAGAI SALAH SATU SOLUSI DAN INOVASI PEMBELAJARAN BAGI GENERASI DIGITAL NATIVE</p>
                        <p class="card-text"><a href="https://ejournal.widyayuwana.ac.id/index.php/jpak/article/view/433">selengkapnya</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 700px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../public/img/Pendidikan_Pascasarjana.jpeg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text">Inovasi Pendidikan Pascasarjana untuk Generasi Digital</p>
                        <p class="card-text"><a href="https://news.detik.com/kolom/d-7253635/inovasi-pendidikan-pascasarjana-untuk-generasi-digital">selengkapnya</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 700px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../public/img/tranformasi_digital.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text">Transformasi Digital dan Inovasi Pendidikan di Era Merdeka Belajar</p>
                        <p class="card-text"><a href="https://kumparan.com/end4n9/transformasi-digital-dan-inovasi-pendidikan-di-era-merdeka-belajar-1zJHIxAZEzr" class="">selengkapnya</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 700px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../public/img/3D_Holo_learning.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text">Inovasi 3D Holo-learning UM Tingkatkan Pembelajaran Genetika di Era Digital</p>
                        <p class="card-text"><a href="https://um.ac.id/berita/inovasi-3d-holo-learning-um-tingkatkan-pembelajaran-genetika-di-era-digital/" class="">selengkapnya</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- akhir news -->

<?php include "./layouts/footer.php"; ?>