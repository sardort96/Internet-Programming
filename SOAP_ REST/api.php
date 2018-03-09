<?php 
include "libraries/config.php";
include "libraries/database.php";

$db = new datab();
$query = "SELECT * FROM links";
$link = $db->select($query);

while ($row = $link->fetch_array()) :
function get_link_info($id){
	$link_info = array();
	switch($id){
		case echo "<?php $row['id']; ?>" :
			$link_info = array("name" => "<?php $row['id']; ?>", "webname" => "<?php $row['href']; ?>");
			break;

	}

	return $link_info;
 }
if(isset($_GET['action'])){
	switch($_GET['action']){
		case "get_link_info":
		$value = get_link_info();
		break;
	}
}

 ?>
