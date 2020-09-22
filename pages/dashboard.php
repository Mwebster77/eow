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



	<?php include('../templates/header.php') ?>
	<?php include('../templates/navbar.php') ?>
	<!-- <?php // include('pages/testing.php') ?>
	 -->

	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-firestore.js"></script>
	<script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-analytics.js"></script>


	<script src="../js/firebaseConnection.js"></script>


	<div class="container">
		<div class="row">
			<div class="col s4">
				<div class="card brown lighten-5">
					<div class="card-content blue-grey-text text-lighten-1">
							<span class="card-title"><h4>Audit Result</h4></span>
							<div class="auditUL">								
								<script src="../js/auditDashboard.js"></script>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	
 	<?php include('../templates/footer.php') ?>
	
</html>