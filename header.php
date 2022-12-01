<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../loginadmin.php");
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Kencana Energy</title>
    <link rel="icon" type="image/x-icon" href="foto/logo.png">
    <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="../assets/ckeditor/ckeditor.js"></script>
    <style>
        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: #d4d9df;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 20px 0;
            padding-left: 20px;
        }

        ul.timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #22c0e8;
            left: 20px;
            width: 20px;
            height: 20px;
            z-index: 400;
        }
    </style>
    <?php
    include_once('../config.php');
    $idadmin = $_SESSION['admin']['idadmin'];
    $ambilprofil = $conn->query("SELECT * FROM admin WHERE idadmin='$idadmin'");
    $profil = $ambilprofil->fetch_assoc();
    ?>
</head>

<body>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="home.php" class="brand-logo">Menu</a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="ubahprofil.php" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profil</span>
                                    </a>
                                    <a href="logout.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="home.php" aria-expanded="false"><i class="icon icon-home"></i><span class="nav-text">Home</span></a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Akun Admin</span></a>
                        <ul aria-expanded="false">
                            <li><a href="admintambah.php">Tambah Admin</a></li>
                            <li><a href="admindaftar.php">Daftar Admin</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-layout-25"></i><span class="nav-text">Akun User</span></a>
                        <ul aria-expanded="false">
                            <li><a href="usertambah.php">Tambah User</a></li>
                            <li><a href="userdaftar.php">Daftar User</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>