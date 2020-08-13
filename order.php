
<!DOCTYPE html>
<html>
<head>
	<title>Online Cafe</title>
	<link rel="stylesheet" type="text/css" href="Css/order.css">
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

		<div class="login">
			
			<h1>ORDER</h1><br>
		<form action="submit3.php" method="post">
				<p>Select Category</p>

				<select name="Ord_category">
				<option value="Cake">Cake</option>
				<option value="Parathas">Parathas</option>
  				<option value="Drinks">Drinks</option>
  				<option value="Fries">Fries</option>
  				<option value="Hot Beverages">Hot Beverages</option>
			</select><br><br>

			<p>Select Item</p>
				<div class="multiselect">
				<div class="selectbox" onclick="showcheckboxes()">
					<select name="item_no">
						<option>Select here</option>
					</select>
					<div class="overselect"></div>
				</div>
				<div id="checkboxes">
					<label for="one"><input type="checkbox" id="one">One</label>
					<label for="two"><input type="checkbox" id="Two">Two</label>
					<label for="three"><input type="checkbox" id="third">Three</label>
				</div>

			</div>

			<br><br>
				<p>Select Quantity</p>
				<input type="number" name="Ord_quantity" min="01" max="10"><br><br>
			</select>
	<input type="hidden" name="lastid" value="<?php $lastid;?>" >
			<p>Payement Method :</p><br>
			
				<p class="payement">Cash<input type="radio" name="Payement" ></p> 
				<p class="payement">Credit Card<input type="radio" name="Payement" ></p> 
			
			<br><br><br>
			<input type="submit" name="Pay_method" value="Order Now">
			</form>
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



		var expanded=false
		function showcheckboxes(){

			var checkboxes = document.getElementById("checkboxes")
			if(!expanded){
				checkboxes.style.display="block"
				expanded = true
			}

			else
			{
				checkboxes.style.display = "none"
				expanded = false
			}

		}

	</script>

</body>
</html>
