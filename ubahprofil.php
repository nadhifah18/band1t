<?php
include 'header.php';
$idadmin = $_SESSION['admin']['idadmin'];
$ambildata = $conn->query("SELECT * FROM admin WHERE idadmin='$idadmin'");
$data = $ambildata->fetch_assoc();
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ubah Profil</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="tanggal" class="mb-2">Nama</label>
                                        <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="tanggal" class="mb-2">Email</label>
                                        <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="tanggal" class="mb-2">Password</label>
                                        <input type="text" class="form-control" name="password" value="">
                                        <span class="text-danger">Kosongkan jika tidan ingin mengganti password</span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-success float-right pull-right" name="simpan">Simpan</button>
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
    $conn->query("UPDATE admin SET nama='$nama',email='$_POST[email]',password='$password' WHERE idadmin='$idadmin'") or die(mysqli_error($conn));
    echo "<script>alert('Data Berhasil Di Ubah');</script>";
    echo "<script>location='ubahprofil.php';</script>";
}
?>

<?php include 'footer.php'; ?>