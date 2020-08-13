
<!DOCTYPE html>
<html>
<head>
	<title>Online Cafe</title>
	
	<link rel="stylesheet" type="text/css" href="Css/index.css">
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
				<a href="#" class="mobile"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
			</div>
		</nav>
			<div class="main-content-header">
			<h1>WELCOME TO <span class="color">ONLINE CAFE</span>. <br>
					HOUSE OF TASTE LOVER</h1>

					<a href="order.php" class="btn btn-full">Click to order</a>
					<a href="#" class="btn btn-nav">Show me more</a>
			</div>
	</header>

	<script type="text/javascript">
		
		function slideshow(){

			var x=document.getElementById('check-class')
			if(x.style.display === "none")
			{
				x.style.display="block"
			}

			else
			{
				x.style.display="none"	
			}
		}
	</script>

</body>
</html>
