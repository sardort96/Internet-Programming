<?php
	include "../libraries/config.php";
	include "../libraries/database.php";

	$db = new datab();

	//deleting the major
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "DELETE FROM categories WHERE id = '$id'";
		$run = $db->delete($query);
	}


?>