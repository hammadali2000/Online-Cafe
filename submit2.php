<?php

$x=$_POST['fname'];
$y=$_POST['lname'];
$z=$_POST['name_of_user'];
$v=$_POST['email_id'];
$p=$_POST['password'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="proj";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$passHash = password_hash($p, PASSWORD_DEFAULT);

$sql = "Insert into `register` (`fname`,`lname`,`name_of_user`,`email_id`,`password`) VALUES ('$x','$y','$z','$v','$passHash')";

if ($conn->query($sql) === TRUE) {
	header('location: login.php');
    echo "Registered successfull";
	
}
 else {
    echo "Error:" .$sql. "<br>" . $conn->error;
}

$conn->close();
?>