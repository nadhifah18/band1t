<?php
include 'config.php';
error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
	header("Location: berhasil_login.php");
}
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	if (!empty($_POST["remember"])) {
		setcookie('email', $_POST["email"], time() + (3600 * 365 * 24 * 60 * 60), '/');
		setcookie("password", $_POST["password"], time() + (3600 * 365 * 24 * 60 * 60), '/');
	}
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
		echo "<script>location='index.php';</script>";
	}
}
if (!empty($_COOKIE["email"])) {
	$email = $_COOKIE["email"];
} else {
	$email = "";
}
if (!empty($_COOKIE["password"])) {
	$password = $_COOKIE["password"];
} else {
	$password = "";
}
?>

<?php include 'header.php'; ?>
<section id="home-section" class="ftco-section">

	<div class="container mt-4">
		<div class="row justify-content-center">
		<div class="col-md-9 ftco-animate mb-5 text-center">
				<h2 class="mb-0 bread">Login</h2>
			</div>
			<div class="col-md-5">
				<img width="100%" src="foto/daftar.png">
			</div>
			<div class="col-md-7">
				<form action=" " method="POST">
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" value="<?= $email ?>">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" value="<?= $password ?>">
					</div>
					<div class="form-group form-check form-switch">
						<input class="form-check-input" type="checkbox" id="rememberMe" name="remember" value="remember">
						<label class="form-check-label">Ingat Saya</label>
					</div>
					<button type="submit" class="btn btn-primary btn-block" name="submit">Masuk</button>
					<br>
					<p>don't have an account? <a href="daftar.php">register now</a></p>
					<p>Login sebagai admin? <a href="loginadmin.php">Login</a></p>
				</form>
			</div>
		</div>
</section>
