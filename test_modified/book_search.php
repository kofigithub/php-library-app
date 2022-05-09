<head>
  <title>Stock Books</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  #books {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
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
	<p><input type="text" name="search-data" size="10" placeholder="Enter title or ISBN"></p>
	</div>
	<p><input type="submit" name="submit" value="Search"></p>
	</form>
	
        
		
    </div>
	
  <table id ="books" class="center" >
				<tr>
               <th>Authors</th>
               <th>Genres</th>
               <th>Year</th>
               </tr>
			   </table>
			   
<?php

// Include config file
require_once "config.php";

		
		$mysqli = new mysqli("localhost","kofi","drowssap","testdb");

        // Check connection
       if ($mysqli -> connect_errno) {
       echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
       exit();
         }
		  
     $sql = "SELECT * FROM books ORDER BY id DESC ";
     $query = mysqli_query($con, $sql);

while($row=mysqli_fetch_array($query)){
			//data goes here
			?>
			
				<table id ="books" class="center" >
				<tr><td><font face="arial" color="grey"><?php echo $row['authors']; ?></font></td><td><font face="arial" color="grey"><?php echo $row['genre']; ?></font></td><td><font face="arial" color="grey"><?php echo $row['year']; ?></font></td><tr></table>
			<?php
		
		}
	
	if ( isset( $_POST['submit'] ) ) {
		$search_value = $_POST['search-data'];
		
		if ( trim( $_POST['search-data'] != '' ) ) {
		
		
		$mysqli = new mysqli("localhost","kofi","drowssap","testdb");

        // Check connection
       if ($mysqli -> connect_errno) {
       echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
       exit();
         }
		 
     $sql = "SELECT * FROM books where title like '%$search_value%' or ISBN like '%$search_value%' ORDER BY id DESC ";
     $query = mysqli_query($con, $sql);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  echo "ERROR: Could not prepare query: $sql. " . mysqli_error($con);
  }
  ?>
  <table id ="books" class="center" >
				<tr>
			   <th>Title</th>
               <th>Authors</th>
               <th>Genres</th>
               <th>Year</th>
               </tr>
			   </table>
			   
<?php
while($row=mysqli_fetch_array($query)){
			//data goes here
			?>
			
				<table id ="books" class="center" >
				<tr><td><font face="arial" color="grey"><?php echo $row['title']; ?></font></td><td><font face="arial" color="grey"><?php echo $row['authors']; ?></font></td><td><font face="arial" color="grey"><?php echo $row['genre']; ?></font></td><td><font face="arial" color="grey"><?php echo $row['year']; ?></font></td><tr></table>
			<?php
		
		}
         
		
        

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
 

