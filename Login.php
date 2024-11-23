<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- css styling -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- box icon -->
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="form-box login">
			<form action="loginphp.php" <?php session_start(); ?> method="post">
				<h1>Login</h1>
				<div class="input-box">
					<input type="text" name="loginuser" placeholder="Username" required>
					<i class="bx bxs-user"></i>
				</div>
				<div class="input-box">
					<input type="password" name="passuser" placeholder="Password" required>
					<i class="bx bxs-lock-alt"></i>
				</div>
				<button type="submit" class="btn">Login</button>
				<a href="recover.php" name="recover">Recover password</a>
				<p>or login with special plateforms</p>
				<div class="social-icons">
					<a href="#"><i class="bx bxl-google"></i></a>
					<a href="#"><i class="bx bxl-facebook"></i></a>
					<a href="#"><i class="bx bxl-github"></i></a>
					<a href="#"><i class="bx bxl-whatsapp"></i></a>
				</div>
			</form>
		</div>
			<!-- Register -->
			<div class="form-box register">
				<form action="registaion.php" method="post">
					<h1>Registration</h1>
					<div class="input-box">
						<input type="text" name="user" placeholder="Username" required>
						<i class="bx bxs-user"></i>
					</div>
					<div class="input-box">
						<input type="email"  name="email" placeholder="Email" required>
						<i class="bx bxs-envelope"></i>
					</div>
					<div class="input-box">
						<input type="password" name="Passw" placeholder="Password"  required>
						<i class="bx bxs-lock-alt"></i>
					</div>
					<button type="submit" class="btn">Registration</button>
					<p>Or register with special plateforms</p>
					<div class="social-icons">
						<a href="#"><i class="bx bxl-google"></i></a>
						<a href="#"><i class="bx bxl-facebook"></i></a>
						<a href="#"><i class="bx bxl-github"></i></a>
						<a href="#"><i class="bx bxl-whatsapp"></i></a>
					</div>
				</form>
			</div>
			<!-- tooggle-box-->
			<div class="toggle-box">
				<div class="toggle-panel toggle-left">
					<h1>Hello, Welcome!</h1>
					<p>Don't have a account</p>
					<button class="btn register-btn">Register</button>
				</div>
				<div class="toggle-panel toggle-right">
					<h1>Welcome Back!</h1>
					<p>Already have an account</p>
					<button class="btn login-btn">Login</button>
				</div>
			</div>
	</div>
<script src="login.js"></script>
</body>
</html>