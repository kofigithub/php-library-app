<head>
  <title>Reports</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  #books {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 30%;
}

.center {
  margin-left: auto;
  margin-right: auto;
}

#books td, #books th {
  border: 1px solid #ddd;
  padding: 8px;
}

#books tr:nth-child(even){background-color: #f2f2f2;}

#books tr:hover {background-color: #ddd;}

#books th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
</head>
    <div class="input-group">
        				   
						   
	<form id="search-entries" method="post">
	<div class="input-group">
	<p><input type="text" name="search-data" size="10" placeholder="Enter author,genre or year"></p>
	</div>
	<p><input type="submit" name="submit" value="Search"></p>
	</form>
	
        
		
    </div>
	
  
			   
<?php

	
	if ( isset( $_POST['submit'] ) ) {
		$search_value = $_POST['search-data'];
		
		if ( trim( $_POST['search-data'] != '' ) ) {
		
		$conn = mysqli_connect("localhost","kofi","drowssap","testdb");
		
		$mysqli = new mysqli("localhost","kofi","drowssap","testdb");

        // Check connection
       if ($mysqli -> connect_errno) {
       echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
       exit();
         }
		 
     $query = "SELECT count(*) FROM books where authors like '%$search_value%' or genre like '%$search_value%' or year like '%$search_value%' ";
     $result = mysqli_query($conn, $query);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  echo "ERROR: Could not prepare query: $sql. " . mysqli_error($con);
  }
  ?>
  <table id ="books" class="center" >
				<tr>
			   <th>Total No.</th>
               </tr>
			   </table>
			   
<?php
$row=mysqli_fetch_array($result)
		
			?>
			
				<table id ="books" class="center" >
				<tr><td><font face="arial" color="grey"><?php echo $row[0]; ?></font></td><tr></table>
			<?php
		
		
         
		
        

}
?>
 
	</div>
	<center><div id="load_data_message"></div></center>		
	<?php					
   
	
	
 }
 else
 {
	 ?>
  <h3><!--No Data Found--></h3>
  <?php
 
 }
 ?>
 

