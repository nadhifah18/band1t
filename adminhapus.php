<?php
include_once('../config.php');
$conn->query("DELETE FROM admin WHERE idadmin='$_GET[id]'");
echo "<script>alert('Data Berhasil Di Simpan');</script>";
echo "<script>location='admindaftar.php';</script>";
