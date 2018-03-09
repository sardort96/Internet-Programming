<?php 
	$conn = mysqli_connect("localhost", "root", "", "posts");

	if(mysqli_connect_errno()){
		echo "Failed to connect to the database: " . mysqli_connect_error();

	}
	
 ?>

 <?php 
 $output = '';
 if(isset($_GET['q']) && $_GET['q'] !== ' '){
 	$searchq = $_GET['q'];

 	$q = mysqli_query($conn, "SELECT * FROM universities WHERE name LIKE '%searchq%'") or die(mysqli_error());
 	$c = mysqli_num_rows($q);

 	if($c == 0){
 		$output = "No such desired results are found";
 	}
 	else{
 		while($row = mysqli_fetch_array($q)){
 			$id = $row['id']; 
 			$name = $row['name'];
 			$link = $row['website'];

 			$output .= '<a href="' . $link . '">
 								<h3>' . $id . '</h3>
 								<p>' . $name . '</p>
 								</a>';
 		}
 	}
 }else{
 	header("location: ./");
 }
 print("$output");
 mysqli_close($conn);

 ?>