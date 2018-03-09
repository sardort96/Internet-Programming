<?php 
session_start();

include 'dbhandler.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];


$sql = "INSERT INTO users (email, pwd) 
VALUES ('$email', '$pwd')";
$result = $connection->query($sql);

/*if($result){
echo'<div class="alert alert-success" role="alert">Successfully signed up!</div>';
}*/

header("Location: index.php");

?>