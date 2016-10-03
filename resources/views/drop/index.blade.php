<?php

	include_once "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dropdown AJAX</title>
</head>
<style type="text/css">
	.country, .city{
		margin:20px;
		text-align:center; 
	}
</style>
<body>
<div class="country">
<label>Country</label>
	<select name="country">
		<option value="">Select Country</option>
		<?php
			$query="SELECT * FROM country";
			$results=mysqli_query($con,$query);
			foreach ($results as $country) {

		?>
		<option value="<?php echo $country[cid];?>"><?php echo $country[country];?></option>
		<?php
			}

		?>	

	</select>
</div>

<div class="city">
<label>City</label>
	<select name="city">
		<option value="">Select City</option>
	</select>
</div>

</body>
</html>