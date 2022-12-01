<?php
include 'header.php';
$ambildata = $conn->query("SELECT * FROM admin WHERE idadmin='$_GET[id]'");
$data = $ambildata->fetch_assoc();
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data</h4>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" value="<?= $data['nama'] ?>" class="form-control" name="nama" id="nama" required>
                                    </div>
                                </div>
                                <div class="col-md-12" id="email">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" value="<?= $data['email'] ?>" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-12" id="password">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" name="password">
                                        <span class="text-danger">Kosongkan jika tidan ingin mengganti password</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" name="simpan" value="simpan" class="btn btn-success float-right pull-right float-end">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    if ($_POST['password'] != "") {
        $password = md5($_POST['password']);
    } else {
        $password = $data['password'];
    }
    $conn->query("UPDATE admin SET nama='$nama',email='$email',password='$password' WHERE idadmin='$_GET[id]'") or die(mysqli_error($conn));
    echo "<script>alert('Data Berhasil Di Simpan');</script>";
    echo "<script>location='admindaftar.php';</script>";
}
?>
<?php include 'footer.php'; ?>