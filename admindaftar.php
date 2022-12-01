<?php
include 'header.php'; ?>
<div class="content-body">
    <div class="container-fluid">
        <div class="data">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Akun Admin</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped text-dark" id="tabel" width="100%" cellspacing="0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th width="50">No.</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th width="50">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $result = $conn->query("SELECT * FROM admin where idadmin!='$idadmin'") or die(mysqli_error($conn));
                                    while ($data = $result->fetch_array()) {
                                    ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $data['nama']; ?></td>
                                            <td><?= $data['email']; ?></td>
                                            <td>
                                                <a href="adminedit.php?id=<?= $data['idadmin'] ?>" class="btn btn-sm btn-primary m-1"><i class="fa fa-edit"></i> Edit</a>
                                                <a href="adminhapus.php?id=<?= $data['idadmin'] ?>" class="btn btn-sm btn-danger m-1" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                        $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>