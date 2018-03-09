<?php 

require_once('links.php');
$option=array("uri" => "http://localhost");
$server = new SoapServer(null, $option);

$server->setClass('Links');
$server->handle(); 	 

 ?>