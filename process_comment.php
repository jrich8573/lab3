<?php

    $name=$_POST["name"];
    $likes=$_POST["likes"];
    $comments=$_Post["comments:"];
    $ratings=$_POST["ratings"];
    echo "Hello <b>$name</b>!<br>";
    

    // connection string
    $server = 'mysql-class.infra.cs.odu.edu';
	$sqlUsername = "jrich202020";
	$sqlPassword = $_ENV["MYPW"];
	$databaseName = 'jrich202020db';
    	//$table = 'users';

    
	$con = new mysqli($server, $sqlUsername, $sqlPassword);

	//check connection
	if($conn-> connection_error){
			die("Connection failed: " .$conn->connect_error);
	}
      //echo "Connection passed!";

    //insert data into user table
    $sql = "INSERT INTO USERS(Timestamp,Name,Likes,Comments,Rating) VALUES (CURRENT_TIME(),'$name','$likes', '$comments', '$rating')";

    //execute sql
    if($conn->query($sql) == TRUE){
        echo "New record create in table users";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();;

   // //call the user table 
   // $sql = "SELECT * FROM USERS ORDER BY Name desc";
   // echo "Query: ".$sql."<br>";
   // $result = $conn->query($sql)
   //     or die("ERROR: Query is No Bueno!");
   // 
   // echo "<tr>";
   // // fetch attribute names
   //  while ($fieldMetadata = $result->fetch_field()){
   //     echo "<th>".$fieldMetadata->name."</th>"; 
   // }
   //  echo "</tr>";

   // // fetch rows in the table
   // while($row = $result->fetch_assoc()){
   //     echo "<tr>\n";
   //     foreach ($row as $cell){
   //         echo "<td> $cell </td>";
   //     }
   //      echo "</tr>\n"; 
   // }
   // //$result->free();
   // $conn->close();

?>
