<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}else{
	echo "No connection";
}
	
mysqli_select_db($con,'contactformdata');

$name = $_POST['name'];
$email = $_POST['email'];
$tele = $_POST['tele'];
$message = $_POST['message'];

$query = "insert into contactforminfo (name, email, tele, message) 
		  values ('$name', '$email' , '$tele' , '$message' )";

mysqli_query($con,$query);

header('location:contact.php');
 
?>