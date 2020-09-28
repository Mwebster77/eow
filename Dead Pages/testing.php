<!doctype html>
<html>

<?php include('../templates/header.php') ?>
<?php

// Error validiation

$pdq = $twentyPound = $tenPound = '';	// sets the form fields as empty when the user lands on the page, also holds correct information if errors occur
$errors = array('pdq'=>'','twentyPound'=>'','tenPound'=>''); //creates an array to store string values for error messages

	if(isset($_POST['submit']))
		{
	
		// Server side form validation
		if(empty($_POST['pdq']))
		{
			 $errors['pdq'] = 'A value is required <br />';
		} else {
			HTMLSPECIALCHARS($_POST['pdq']);
			$pdq = $_POST['pdq'];
			if(!filter_var($pdq, FILTER_VALIDATE_FLOAT))
			{
				$errors['pdq'] = 'value must be correct format'; // puts error message into form field
			}
		}
		
		
		if(empty($_POST['twentyPound']))
		{
			$errors['twentyPound'] = 'A value is required <br />'; // puts the error into the form field
		} else {
			HTMLSPECIALCHARS($_POST['twentyPound']);
			$twentyPound = $_POST['twentyPound'];
			if(!filter_var($twentyPound, FILTER_VALIDATE_FLOAT))
			{
				$errors['twentyPound'] = 'value must be correct format';
			}
		}
		
		
		if(empty($_POST['tenPound']))
		{
			$errors['tenPound'] = 'A value is required <br />';
		} else {
			HTMLSPECIALCHARS($_POST['tenPound']);
			$tenPound = $_POST['tenPound'];
			if(!filter_var($tenPound, FILTER_VALIDATE_FLOAT))
			{
				$errors['tenPound'] = 'value must be correct format';
			}
		}
	}

?>

<!doctype html>
<html>
<section>
	<div class="container"> <!-- height="40%"> -->
		<ul id="nav-mobile" class="right hide-on-small">
		  <li><a href="#" class="btn brand z-depth-0">add a pizza</a></li>
		</ul>
	</div>
</section>
	
<section class="container grey-text">
	<h4 center="center">Add Till</h4>	
	
	<form class="white" action"add.php" method="POST">
		<p><label><h5>PDQ</h5></label><input type="text" name="pdq" value="<?php echo HTMLSPECIALCHARS($pdq) ?>">
			<div class="red-text"><?php echo $errors['pdq']; ?></div>
		
		<p><label><h5>£20</h5></label><input type="text" name="twentyPound" value="<?php echo HTMLSPECIALCHARS($twentyPound) ?>">
			<div class="red-text"><?php echo $errors['twentyPound']; ?></div>
		
		<p><label><h5>£10</h5></label><input type="text" name="tenPound" value="<?php echo HTMLSPECIALCHARS($tenPound) ?>">
		<div class="red-text"><?php echo $errors['tenPound']; ?></div>
		<div class="center">
			<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
		</div>
	</form>
</section>

<?php include('../templates/footer.php') ?>
</html>