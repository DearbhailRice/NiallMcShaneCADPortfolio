<?php
	
	$host="drice21.lampt.eeecs.qub.ac.uk";
	$user ="drice21";
	$pw="5MRzkPX7PJD3lsGS";
	$db="drice21";

	$conn= new mysqli ($host,$user, $pw, $db);
	
	if($conn->connect_error){
		
		echo" database connection failed";
	}
?>

 