<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>eProducts - Product List</title>
	<link rel="stylesheet" type="text/css" href="products.css" />
<link rel="shortcut icon" href="eProducts.ico">
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
    <h1 style="text-align:left">Confirmation</h1>
    <br><br>
	
	<p>Thank you for your purchase</p>
<?php
	echo ($_SESSION['name'])."<br>";
	echo "<p>Your total purchase today is \$".number_format($_SESSION['total'], 2)." and your confirmation number is: <br>";
	
	// create generic confirmation number
	$confirm = array();
	for($i = 0; $i < 3; $i++){
		$confirm[$i] = rand(100, 999);
	}
	
	// display confirmation number
	echo $confirm[0];
	echo "-";
	echo $confirm[1];
	echo "-";
	echo $confirm[2];
?>
</section>


<footer>
&copy;opyright Products.com
</footer>

</body>
</html>