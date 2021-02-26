<?php

    $name=$_POST["name"];
    $likes=$_POST["likes"];
    $comments=$_POST["notes"];
    $ratings=$_POST["ratings"];

    //echo name
    echo "Hello <b>$name</b>!<br>";

    //echo likes
    if($likes == 1){
	 echo "You liked our page!<br>";
    } else {
	echo "You did not like our page?<br>";
    }

    //echo comments
    echo "Your comments are: <b>$comments</b><br>";

    //echo comments
    echo "Your rating of our site is: <b>$ratings</b><br>";    

    // connection string
    	$server = 'mysql-class.infra.cs.odu.edu';
	$sqlUsername = "jrich202020";
	$sqlPassword = $_ENV["MYPW"]; //from environment var source
	$databaseName = 'jrich202020db';
    	$table = 'USERS';

    
	$conn = new mysqli($server, $sqlUsername, $sqlPassword, $databaseName);

	//check connection
	if($conn-> connection_error){
			die("Connection failed: " .$conn->connect_error);
	}
        echo "Connection passed!";

    	//insert data into user table
    	$sql = "INSERT INTO $table VALUE(CURRENT_TIME(),'$name','$likes', '$comments', '$ratings');";

    	//execute sql
    	if($conn->query($sql) == TRUE){
        	echo "New record create in table users";
    	} else {
        	echo "Error: " . $sql . "<br>" . $conn->error;
    	}
   	$result->free();

   	 //call the user table 
   	 $sql = "SELECT * FROM $table ORDER BY Name desc";
   	 echo "Query: ".$sql."<br>";
   	 $result = $conn->query($sql)
   	     or die("ERROR: Query is No Bueno!");
   	 
   	 echo "<tr>";
   	 // fetch attribute names
   	  while ($fieldMetadata = $result->fetch_field()){
   	     echo "<th>".$fieldMetadata->name."</th>"; 
   	 }
   	  echo "</tr>";

   	 // fetch rows in the table
   	 while($row = $result->fetch_assoc()){
   	     echo "<tr>\n";
   	     foreach ($row as $cell){
   	         echo "<td> $cell </td>";
   	     }
   	      echo "</tr>\n"; 
   	 }
   	 $conn->close();

?>
