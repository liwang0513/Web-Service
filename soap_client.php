<?php
	
$option = array("location" =>
				"http://localhost/Web-Service/soap_service.php",
				"uri" => "http://localhost");
				
try{
	
	$client = new SoapClient(null, $option);
	
	$students = $client->getStudentName();
	
	echo $students;
	
} catch (SoapFault $ex) {
	
	var_dump($ex);
	
}

?>