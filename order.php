<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}else{
	echo "No connection";
}
	
mysqli_select_db($con,'orderform');

$name = $_POST['name'];
$email = $_POST['email'];
$tele = $_POST['tele'];
$placedorder = $_POST['placedorder'];

$query = "insert into placeorder (name, email, tele, placedorder) 
		  values ('$name', '$email' , '$tele' , '$placedorder' )";

mysqli_query($con,$query);

header('location:profile.php');
 
?>