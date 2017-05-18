<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>eProducts - Product List</title>
	<link rel="stylesheet" type="text/css" href="products.css" />
	<link rel="shortcut icon" href="eProducts.ico">
	
	<style>
		fieldset {
			width: 400px;
			padding: 10px;
		}
		fieldset p {
			padding: 5px;
		}
		legend {
			font-size: 20px;
		}
		label {
			display: inline-block;
			float: left;
			width: 100px;
			text-align: left;
		}
		input {
			width: 200px;
		}
		#city {
			width: 130px;
			margin-left: 100px;
			margin-top: 10px;
		}
		select {
			position: relative;
			vertical-align: bottom;
			margin-left: 245px;
			bottom: 19px;
		}
		#submit {
			width: 80px;
			float: right;
			margin-right: 80px;
		}
		#zip {
			clear: both;
			position: relative;
			width: 70px;
			margin-left: 105px;
			bottom: 50px;
		}
	</style>
</head>

<body>


<header>
<h1>Electronic Products</h1>

<nav>
    <ul>
        <li><a href="products.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="shoppingcart.php">View Cart</a></li>
        <ul>
</nav>
</header>



<section>
    <h1 style="text-align:left">Customer information</h1>
    <br>
	<form action="summary.php" method="post">
		<fieldset>
			<legend>Please input your information</legend><br>
			<p><label for="First Name">First name:</label><input type="text" name="firstname" required></p>
			<p><label for="Last Name">Last name:</label><input type="text" name="lastname" required></p>
			<p><label for="Address">Address:</label>
			<input type="text" name="street" placeholder="street" required><br>
			<input type="text" name="city" id="city" placeholder="city" required><br>
			<select name="state" required>
				<option value="State">State</option>
				<option value="Alabama">AL</option>
				<option value="Alaska">AK</option>
				<option value="Arizona">AZ</option>
				<option value="Arkansas">AR</option>
				<option value="California">CA</option>
				<option value="Colorado">CO</option>
				<option value="Connecticut">CT</option>
				<option value="Delaware">DE</option>
				<option value="Florida">FL</option>
				<option value="Georgia">GA</option>
				<option value="Hawaii">HI</option>
				<option value="Idaho">ID</option>
				<option value="Illinois">IL</option>
				<option value="Indiana">IN</option>
				<option value="Iowa">IA</option>
				<option value="Kansas">KS</option>
				<option value="Kentucky">KY</option>
				<option value="Louisiana">LA</option>
				<option value="Maine">ME</option>
				<option value="Maryland">MD</option>
				<option value="Massachusetts">MA</option>
				<option value="Michigan">MI</option>
				<option value="Minnesota">MN</option>
				<option value="Mississippi">MS</option>
				<option value="Missouri">MO</option>
				<option value="Montana">MT</option>
				<option value="Nebraska">NE</option>
				<option value="Nevada">NV</option>
				<option value="New Hampshire">NH</option>
				<option value="New Jersey">NJ</option>
				<option value="New Mexico">NM</option>
				<option value="New York">NY</option>
				<option value="North Carolina">NC</option>
				<option value="NorthDakota">ND</option>
				<option value="Ohio">OH</option>
				<option value="Oklahoma">OK</option>
				<option value="Oregon">OR</option>
				<option value="Pennsylvania">PA</option>
				<option value="Rhode Island">RI</option>
				<option value="South Carolina">SC</option>
				<option value="South Dakota">SD</option>
				<option value="Tennessee">TN</option>
				<option value="Texas">TX</option>
				<option value="Utah">UT</option>
				<option value="Vermont">VT</option>
				<option value="Virginia">VA</option>
				<option value="Washington">WA</option>
				<option value="West_Virginia">WV</option>
				<option value="Wisconsin">WI</option>
				<option value="Wyoming">WY</option>
			</select></p><br><br>
			<input type="text" name="zipcode" placeholder="ZIP" id="zip" required>
			<input type="submit" value="Continue" id="submit">
		</fieldset>
	</form>
	

</section>


<footer>
&copy;opyright Products.com
</footer>

</body>
</html>