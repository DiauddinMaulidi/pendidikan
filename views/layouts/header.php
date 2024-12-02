<?php

$base_url = '/web5b/tugas/tugas';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" href="./public/img/download.jpeg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/public/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg p-3">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand" href="<?= $base_url; ?>/index.php">
                    <img src="<?php echo $base_url; ?>/public/img/pendidikan.jpg" alt="pp">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light button <?= $current_page == 'index.php' ? 'kelas-active' : '' ?>" aria-current="page" href="<?php echo $base_url; ?>/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light button <?= $current_page == 'inovasi.php' ? 'kelas-active' : '' ?>" href="<?php echo $base_url; ?>/views/inovasi.php">Inovasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light button <?= $current_page == 'news.php' ? 'kelas-active' : '' ?>" href="<?php echo $base_url; ?>/views/news.php">News</a>
                    </li>
                    <li class="nav-item logout">
                        <a class="nav-link text-light" href="<?php echo $base_url; ?>/views/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>