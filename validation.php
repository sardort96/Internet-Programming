<?php 

if (isset($_POST)) {

$email=($_POST['email']);
$name=$_POST['name'];
$message=$_POST['message'];
}

$con=mysqli_connect('localhost', 'root', '', 'message');

if (mysqli_connect_errno()) {
	echo "Connection failed :". mysqli_connect_error($con);
}
$query1="INSERT INTO contact ( email, name, message) VALUES ('$email', '$name', '$message')";

$result = mysqli_query($con, $query1);
/*var_dump($result);*/



if($result){
	header("Location: http://localhost/first#contact");
}else{
	echo "NOT SENT";
}


?>
