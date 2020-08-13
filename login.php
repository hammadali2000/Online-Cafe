
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	
	<link rel="stylesheet" type="text/css" href="Css/login.css">
	<meta name="viewreport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<header>
		<nav>
			<div class="row clearfix">
				<a href="index.php"><img src="images/logo.jpg" class="logo"></a>

				<ul class="main-nav animated slideInDown" id="check-class">
					<li>
						<a href="#">CAKE DELIVERY</a> &nbsp &nbsp &nbsp &nbsp &nbsp
						<a href="#">HOW TO ORDER</a> &nbsp &nbsp &nbsp &nbsp &nbsp
						<a href="menu.php">MENU</a> &nbsp &nbsp &nbsp &nbsp &nbsp
						<a href="login.php">LOGIN</a>
					</li>
				</ul>
				
			</div>
		</nav>

		<div class="login">
			<img src="images/login.png" class="log">
			<h1>Login Here</h1>
		<form action="dashboard.php" method="post">
				<p>Username</p>
				<input type="text" placeholder="Enter Username" name="username">
				<p>Password</p>
				<input type="Password" placeholder="Enter Password" name="password">
				<input type="submit" value="login" name="">
				<a href="register.php">Forgotten Password?</a><br>
				<a href="register.php">Don't have an account?</a>
			</form>
		</div>
	</header>

</body>
</html>