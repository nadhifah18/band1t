<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Selamat, registrasi berhasil!')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
		}
	} else {
		echo "<script>alert('Password Tidak Sesuai')</script>";
	}
}

?>
<?php include 'header.php'; ?>
<section id="home-section" class="ftco-section">
<div class="col-md-9 ftco-animate mb-5 text-center">
				<h2 class="mb-0 bread">Daftar</h2>
			</div>
	<div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col-md-5">
				<img width="100%" src="foto/regis.jpg">
			</div>
			<div class="col-md-7">
				<form method="post">
					<div class="form-group">
						<input type="text" name="username" class="form-control" required placeholder="enter your name" value="<?php echo $username; ?>" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" required placeholder="enter your email" value="<?php echo $email; ?>" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" required placeholder="enter your password" value="<?php echo $_POST['password']; ?>" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="cpassword" required placeholder="confirm your password" value="<?php echo $_POST['cpassword']; ?>" required>
					</div>
					<br>
					<button class="btn btn-primary btn-block" name="submit">Register Now</button>
					<p class="login-register-text">Anda sudah punya akun? <a href="index.php">Login </a></p>
					<p>Login sebagai admin? <a href="loginadmin.php">Login</a></p>
				</form>
			</div>
		</div>
	</div>
</section>