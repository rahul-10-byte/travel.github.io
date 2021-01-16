
<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con, 'tourist');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$country = $_POST['country'];
$message = $_POST['message'];
$query = " insert into details (user, email, mobile, message) values('$user','$email','$mobile', '$country', '$message') ";

mysqli_query($con, $query );

header('location: index.php');

?>