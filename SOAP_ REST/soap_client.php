<?php 

$option = array("location" => 
					"http://localhost/Internet_Programming/SOAP_REST/soap_service.php", "uri" => "http://localhost");

try{
	$client = new SoapClient(null, $options);
	$links = $client->getLinkName();
	echo $links;
}
catch(SoapFault $ex){
	var_dump($ex);
}

 ?>