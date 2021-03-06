
<!DOCTYPE html>
<html>
<head>
	<title>Online Cafe</title>
	<link rel="stylesheet" type="text/css" href="Css/cake.css">
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
				<table bgcolor="transparent" border="1px">
					<tr>
					<th>CATEGORIES</th>
					</tr>

					<tr>
						<td><a href="cake.php" class="btn btn-full">CAKES</a></td>
					</tr>

					<tr>
						<td><a href="parathas.php" class="btn btn-full">PARATHAS</a></td>
					</tr>

					<tr>
						<td><a href="drinks.php" class="btn btn-full">DRINKS</a></td>
					</tr>

					<tr>
						<td><a href="fries.php" class="btn btn-full">FRIES</a></td>
					</tr>

					<tr>
						<td><a href="pizza.php" class="btn btn-full">PIZZA</a></td>
					</tr>
					

					<tr>
						<td><a href="beverages.php" class="btn btn-full">HOT BEVERAGES</a></td>
					</tr>

					
				</table>

					
			</div>

			<div class="second-content">
				<table class="t2">
					<tr>
				<td><img src="images/plain.jpg" class="img" style="margin:0px 50px"><br><p class="font">Plain Fries</p><br><p class="p1">RS 140</p> </td>
				<td><img src="images/cheese.jpg" class="img" style="margin:0px 50px"><br><p class="font">Cheese Fries</p><br> <p class="p2">RS 180</p>  </td> 
				<td><img src="images/masala.jpg" class="img" style="margin:0px 50px"><br><p class="font">Masala Fries</p>  <br> <p class="p3">RS 100</p>  </td> <br>
				</tr>
				</table>
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
