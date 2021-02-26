<?php
	
	$server = 'imysql-class.infra.cs.odu.edu';
	$sqlUsername = 'jrich202020';
	$sqlPassword = $_ENV["MYPW"];
	$databaseName = 'jrich202020db';

	$con = new mysqli($server, $sqlUsername, $sqlPassword);

	//check connection
	if($conn-> connection_error){
			die("Connection failed: " .$conn->connect_error);
	}
  echo "Connection passed!";
?>
