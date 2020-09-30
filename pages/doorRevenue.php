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

	<div class="container blue-grey-text text-lighten-1">
		<div class="doorRevenue">
			<div class="row">
			<div class="col s12 center-align"><h4>Door Revenue</h4></div>
				<!-- Left side container block -->
				<div class="col s4 p-t-10 p-b-10">
					<div class="card brown lighten-5">
						<div class="card-content blue-grey-text text-lighten-1">
							<!-- <span class="card-title"><h4>Till 1</h4></span> -->
							<form>
								<fieldset>
								<legend><b>Till 1</b></legend>
									<div class="doorRevenueForm">
										<label>PDQ<label>
										<input type="number" class="form-control prc" min=0 step="0.01"/>
									</div>
									<div class="doorRevenueForm">
										<label>£50<label>
										<input type="number" class="form-control prc" min=0 step="0.01"/>
									</div>
									<div class="doorRevenueForm">
										<label>£20<label>
										<input type="number" class="form-control prc" min=0 step="0.01"/>
									</div>
									<div class="doorRevenueForm">
										<label>£10<label>
										<input type="number" class="form-control prc" min=0 step="0.01"/>
									</div>
									<div class="doorRevenueForm">
										<label>£5<label>
										<input type="number" class="form-control prc" min=0 step="0.01"/>
									</div>
									<div class="doorRevenueForm">
										<label>£1<label>
										<input type="number" class="form-control prc" min=0 step="0.01"/>
									</div>
									<div class="doorRevenueForm">
										<label>Total<label>
										<output id="tillResult"></output>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>

				<!-- Centre side container block -->
				<div class="col s4 p-t-10 p-b-10">
					<div class="card brown lighten-5">
						<div class="card brown lighten-5">
							<div class="card-content blue-grey-text text-lighten-1">
								<span class="card-title"><h4>Till 2</h4></span>

							</div>
						</div>
					</div>	
				</div>
				<!-- Right side container block -->
				<div class="col s4 p-t-10 p-b-10">
					<div class="card brown lighten-5">
						<div class="card brown lighten-5">
							<div class="card-content blue-grey-text text-lighten-1">
								<span class="card-title"><h4>Till 3</h4></span>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



<!-- 
	<script src="../js/doorRevenue.js"></script> -->
 	<?php include('../templates/footer.php') ?>
	
</html>