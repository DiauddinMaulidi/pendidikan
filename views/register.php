<?php
require '../config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confPassword = $_POST['confPassword'];


    if ($password === $confPassword) {
        $password_enkrip = password_hash($password, PASSWORD_DEFAULT);

        $query = mysqli_query($koneksi, "INSERT INTO login(nama, email, password) VALUES ('$name', '$email', '$password_enkrip')");

        if ($query) {
            echo "<script>alert('Anda berhasil mendaftar');
                    location.href='./login.php';</script>";
        } else {
            echo "<script>alert('Anda gagal mendaftar')</script>";
        }
    } else {
        echo "<script>alert('Anda gagal mendaftar')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style.css">
</head>

<body class="body">
    <div class="container">
        <div class="login-container bg-yellow-700">
            <h2>Register</h2>
            <form method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="nama" class="form-control" id="name" placeholder="your name" required>
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="your email" required>
                </div>
                <div class="form-group mt-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                        required>
                </div>
                <div class="form-group mt-2">
                    <label for="confPassword">Confirm Password</label>
                    <input type="password" name="confPassword" class="form-control" id="confPassword"
                        placeholder="Confirm your password" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-2">Create Account</button>
            </form>
            <div class="login-footer">
                <small>Have an accout yet? <a href="./login.php">Log In</a></small>
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>