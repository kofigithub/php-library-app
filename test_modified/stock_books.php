<?php

// Include config file
require_once "config.php";
	
	if(isset($_POST['submit'])){	
	
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// Check connection
//if($con === false){
   // die("ERROR: Could not connect. " . mysqli_connect_error());
//}

// Prepare an insert statement
$sql = "INSERT INTO books (title,authors,year,ISBN,genre) VALUES (?,?,?,?,?)";
	
			
if($stmt = mysqli_prepare($con, $sql)){
    // Bind variables to the prepared statement as parameters
    
    mysqli_stmt_bind_param($stmt,'sssss',$title,$authors,$year,$isbn,$genre);
	
    $title =$_REQUEST['title'];
	$authors =$_REQUEST['authors'];
	$year =$_REQUEST['year'];
	$isbn =$_REQUEST['isbn'];
	$genre =$_REQUEST['genre'];
	
	
	
    mysqli_stmt_execute($stmt);
    
    echo "Record inserted successfully.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($con);
}
 
    // Close statement
mysqli_stmt_close($stmt);
 
    
	// Close connection
	 mysqli_close($con);
	
	
	
	}
	
	?>
	
