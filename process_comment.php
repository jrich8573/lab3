<?php

    $userName=$_POST["username"];
    echo "Hello <b>$userName<b>!<br>";


    // connection string
    $server = 'imysql-class.infra.cs.odu.edu';
	$sqlUsername = 'jrich202020';
	$sqlPassword = $_ENV["MYPW"];
	$databaseName = 'jrich202020db';
    $table = 'users';

	$con = new mysqli($server, $sqlUsername, $sqlPassword);

	//check connection
	if($conn-> connection_error){
			die("Connection failed: " .$conn->connect_error);
	}
      echo "Connection passed!";

    //insert data into user table
    $sql = "INSERT INTO $table(CURRENT_TIME(),Name,Likes,Comments,Rating)  VALUES ('$name','$likes', '$comments', '$rating')";

    //execute sql
    $query_result = $conn->query($sq)
        or die ("SQL Error: Data Insert is No Bueno!");

    //call the user table 
    $sql = "SELECT * FROM $table";
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
    $result->free();
    $conn->close();

?>
