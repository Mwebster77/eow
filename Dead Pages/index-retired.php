<?php
//connect to database
$conn = mysqli_connect('localhost','matthew','liquid328','blokzero');

// check the connection

if(!$conn)
{
	echo 'Connection error'.mysqli_connect_error();
}

// write database quesry for all tills
$sql = 'SELECT pdq, twentyPound, tenPound FROM tills';

// make database query and get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows of the database as an array as they are unformatted
$tills = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection
mysqli_close($conn); 

//* print_r($tills); // outputs the mysql query 
?>


<!doctype html>
<html>

	<?php include('templates/header.php') ?>
	<?php include('templates/navbar.php') ?>
	<?php include('pages/testing.php') ?>
	
	
	
	
 	<?php include('templates/footer.php') ?>
	
</html>