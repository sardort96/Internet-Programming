<?php
	include "../libraries/config.php";
	include "../libraries/database.php";

	$db = new datab();

	//deleting the region
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "DELETE FROM regions WHERE id = '$id'";
		$run = $db->delete($query);
	}


?>