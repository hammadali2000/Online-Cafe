<?php

$x=$_POST['Ord_category'];
$z=$_POST['Ord_quantity'];
$v=$_POST['Pay_method'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="proj";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully \n";
if(isset($_POST['Pay_method'])){
$sql = "Insert into `res_order` (`Ord_category`,`Ord_quantity`,`Pay_method`) VALUES ('$x','$z','$v')";



}
if ($conn->query($sql) === TRUE) {
	$last_id = $conn->insert_id;
    echo "order registered";
	
	header("Location: submit.php?lastid=".$last_id."");


}
 else {
    echo "Error:" .$sql. "<br>" . $conn->error;
}

$conn->close();
?>
