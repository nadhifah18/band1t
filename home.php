<?php
include 'header.php';
$admin = $conn->query("SELECT * FROM admin");
$jumlahadmin = $admin->num_rows;

$user = $conn->query("SELECT * FROM users");
$jumlahuser = $user->num_rows;
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row justify-content-center mb-3">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="stat-widget-two card-body">
                                    <div class="stat-content">
                                        <div class="stat-text">Jumlah Admin</div>
                                        <div class="stat-digit"><?= $jumlahadmin ?></div>
                                    </div>
                                    <div class="card-footer align-items-center justify-content-between">
                                        <center>
                                            <a class="small text-white stretched-link" href="admindaftar.php"><button type="button" class="btn btn-lg btn-primary">Lihat Data</button></a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="stat-widget-two card-body">
                                    <div class="stat-content">
                                        <div class="stat-text">Jumlah User</div>
                                        <div class="stat-digit"> <?= $jumlahuser ?></div>
                                    </div>
                                    <div class="card-footer align-items-center justify-content-between">
                                        <center>
                                            <a class="small text-white stretched-link" href="userdaftar.php"><button type="button" class="btn btn-lg btn-primary">Lihat Data</button></a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'footer.php'; ?>