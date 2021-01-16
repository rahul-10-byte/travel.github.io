<?php


$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$country = $_POST['country'];
$message = $_POST['message'];


//connection Code
$conn = new mysqli('localhost','root','','tourist');
if($conn->connect_error){
	die('connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into details(user,email,mobile,country,message) values(?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss",$user, $email, $mobile, $country, $message);
	$stmt->execute();
	echo " Saved Successfully...!!";
	$stmt->close();
	$conn->close();
header('location: index.php');

}


?>