<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- css styling -->
	<link rel="stylesheet" type="text/css">
	<!-- box icon -->
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap);

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #25D7AD;
}

.container {
    position: relative;
    width: 400px;
    max-width: 90%;
    height: auto;
    padding: 20px;
    background: #fff;
    border-radius: 30px;
    box-shadow: 0 0 40px rgba(0, 0, 0, .4);
    margin: 20px;
    overflow: hidden;
}

.form-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: left;
    padding: 20px;
}

h1 {
    margin: 10px 0;
}

.input-box {
    margin: 10px 0;
}

.input-box input {
    width: calc(100% - 40px);
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.input-box i {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    color: #888;
}

.input-box button {
    border-radius: 20px;
    background: #25D7AD;
    transition: all 0.4s ease;
    border: 1px solid black;
    width: 100%;
    height: 40px;
    color: white;
}

.input-box button:hover {
    background-color: black;
    color: white;
    cursor: pointer;
}

@media (max-width: 650px) {
    .container {
        width: 90%;
        padding: 20px;
    }
    
    .input-box input {
        width: 100%;
    }

    .input-box button {
        width: 100%;
    }
}

	</style>
</head>
<body>
	<div class="container" <?php session_start(); ?> method="post">
		<div class="form-box">
			<form action="recoverphp.php" method="post">
				<h1 id="hh1">Username</h1>
				<div class="input-box">
					<input type="text" name="Re-username" placeholder="Username" required>
					<i class="bx"></i>
				</div>
				<h1>Change Password</h1>
				<div class="input-box">
					<input type="password" name="newpass" placeholder="New Password" required>
					<i class="bx"></i>
					<br></br>
					<button type="submit">Forget Password </button>
				</div>
							
			</form>
		</div>