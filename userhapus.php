<?php
include_once('../config.php');
$conn->query("DELETE FROM users WHERE iduser='$_GET[id]'");
echo "<script>alert('Data Berhasil Di Simpan');</script>";
echo "<script>location='userdaftar.php';</script>";
