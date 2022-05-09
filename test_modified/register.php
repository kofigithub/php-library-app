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
$sql = "INSERT INTO users (username,email,hashed_password) VALUES (?,?,?)";
	
			
if($stmt = mysqli_prepare($con, $sql)){
    // Bind variables to the prepared statement as parameters
    
    mysqli_stmt_bind_param($stmt,'sss',$username,$email,$hashed_password);
	
    $username =$_REQUEST['username'];
	$email =$_REQUEST['email'];
	$password1 =$_REQUEST['password1'];
	$hashed_password = password_hash($password1, PASSWORD_DEFAULT);
	
	
	
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
	
