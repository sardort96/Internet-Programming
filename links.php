<?php
	include "libraries/config.php";
	include "libraries/database.php";

	

	class Links{
		$db = new datab();
		$query = "SELECT * FROM links";
		$link = $db->select($query);
		public function getLinkName(){
			$linkName = array();
			while ($row = $link->fetch_array()) :
			$linkName = array_push($row['name']);
			endwhile;
			return $linkName;
		}
	}
	

?>