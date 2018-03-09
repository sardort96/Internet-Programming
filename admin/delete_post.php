<?php
	include "../libraries/config.php";
	include "../libraries/database.php";

	$db = new datab();

	//deleting the post
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = "DELETE FROM psychology WHERE id = '$id'";
		$run = $db->delete($query);
	}

	
	
?>