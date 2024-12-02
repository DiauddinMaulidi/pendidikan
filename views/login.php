<?php

require '../config.php';

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_query($koneksi, "SELECT * FROM login WHERE email='$email' ");
    $pass = mysqli_query($koneksi, "SELECT * FROM login WHERE password='$password' ");

    if (mysqli_num_rows($email) > 0) {
        $data = mysqli_fetch_assoc($email);

        if (password_verify($password, $data['password'])) {
            $_SESSION['login'] = $data;

            echo "<script>alert('Anda berhasil login');
                    location.href='../index.php';</script>";
        } else {
            echo "<script>alert('Password salah');
                location.href='./login.php';</script>";
        }
    } else {
        echo "<script>alert('Email tidak ditemukan');
            location.href='./login.php';</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/style.css">
</head>

<body class="body">
    <div class="container">
        <div class="login-container bg-yellow-700">
            <h2>Login</h2>
            <form method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email" required>
                </div>
                <div class="form-group mt-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                        required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-2">Login</button>
            </form>
            <div class="login-footer">
                <small>Don&apos;t have an accout yet? <a href="./register.php">Sign Up</a></small>
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>