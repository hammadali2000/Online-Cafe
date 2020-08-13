<!doctype html>
<html>
	<head>
		<title>Check Login and create session</title>

	<link rel="stylesheet" type="text/css" href="Css/login.css">
	<meta name="viewreport" content="width=device-width">
	<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	div{


	top:0;
	bottom:0;
	left: 0;
	right:0;
	margin-bottom:2000px;
}
</style>
</head>
	<body>
	<header>
	
		<div align="center" >

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="proj";
$lastid = $_GET['lastid'];

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

		$result = mysqli_query($conn, "SELECT  *  FROM res_order where ord_id1=".$lastid."");	
		
		$row = mysqli_fetch_assoc($result);
			echo "Your Order";
			echo"<br/>";
			echo "Order Quantity = "."$row[Ord_quantity]"; 
			echo"<br/>";
			echo "Order Category = "."$row[Ord_category]"; 
			echo"<br/>";
			echo "Payment Method = "."$row[Pay_method]";
			echo"<br/>";
			
$conn->close();
?>
<?php
$conn = new mysqli($servername,$username,$password,$dbname);

	
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
		
			$result = mysqli_query($conn, "SELECT email_id, password, name_of_user FROM register ");
		$row = mysqli_fetch_assoc($result);
		echo "User Name= "."$row[name_of_user]";
?>
	
	</div>
	</header>
	</body>
</html>
