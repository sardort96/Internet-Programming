<?php 
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username&&$password){
	$connect = mysql_connect("localhost", "root", "") or die("Could not connect to the database!");
	mysql_select_db("login1") or die("Could not find the desired database!");

	$query = mysql_query("SELECT * FROM users WHERE username = '$username'");

	$numrows = mysql_num_rows($query);

	if($numrows!==0){
		while ($row = mysql_fetch_assoc($query)) {
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		}
		if($username==$dbusername&&$password==$dbpassword){
			#echo "You are logged in!";
			header("Location: admin/index.php");
			@$_SESSION['username'] = $username;
		}
		else{
			echo "Your password is incorrect!";
			#header("Location: index.php");
		}
	}
	else{
		die("Such user does not exist!");
	}

}
else{
	die("Please enter a username and a password!");
}

 ?>