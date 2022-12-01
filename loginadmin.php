<!DOCTYPE html>
<html lang="en" class="h-100">
<?php include 'config.php'; ?>
<?php
session_start();
if (!empty($_COOKIE["emailadmin"])) {
    $email = $_COOKIE["emailadmin"];
} else {
    $email = "";
}
if (!empty($_COOKIE["passwordadmin"])) {
    $password = $_COOKIE["passwordadmin"];
} else {
    $password = "";
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Kencana Energy</title>
    <link rel="icon" type="image/x-icon" href="foto/logo.png">
    <link href="admin/assets/css/style.css" rel="stylesheet">
    <style>
        body {
            background-image: url("foto/admin.jpg");
            height: 1000px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">LOGIN ADMIN</h4>
                                    <form method="post" style="width:100%;">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="Email" name="email" value="<?= $email ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Password" name="password" value="<?= $password ?>" required>
                                        </div>
                                        <div class="form-group form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe" name="rememberadmin" value="remember">
                                            <label class="form-check-label">Ingat Saya</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="login" value="login" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/admin/vendor/global/global.min.js"></script>
    <script src="./assets/admin/js/quixnav-init.js"></script>
    <script src="./assets/admin/js/custom.min.js"></script>
</body>
<?php
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    if (!empty($_POST["rememberadmin"])) {
        setcookie('emailadmin', $_POST["email"], time() + (3600 * 365 * 24 * 60 * 60), '/');
        setcookie("passwordadmin", $_POST["password"], time() + (3600 * 365 * 24 * 60 * 60), '/');
    }
    $ambil = $conn->query("SELECT * FROM admin WHERE email='$email' AND password='$password'");
    $akunyangcocok = $ambil->num_rows;
    if ($akunyangcocok >= 1) {
        $akun = $ambil->fetch_assoc();
        $_SESSION["admin"] = $akun;
        echo "<script> alert('Login Berhasil');</script>";
        echo "<script> location ='admin/home.php';</script>";
    } else {
        echo "<script> alert('Login Gagal, Email atau Password anda salah');</script>";
        echo "<script> location ='loginadmin.php';</script>";
    }
}
?>