<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="Css/register.css">
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
			<h1>Register</h1>
		<form action="submit2.php" method="post">
				<p>First Name</p>
				<input type="text" placeholder="Enter First Name" name="fname">
				<p>Last Name</p>
				<input type="text" placeholder="Enter last Name" name="lname">
				<p>Username</p>
				<input type="text" placeholder="Enter  Username" name="name_of_user">
				<p>Email</p>
				<input type="text" placeholder="Enter  Email" name="email_id">
				<p>Password</p>
				<input type="Password" placeholder="Enter Password" name="password">
				<input type="submit" value="Register Now" name="registered">
			</form>
		</div>
	</header>

</body>
</html>
