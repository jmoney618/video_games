<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
require 'connect.php';

?>
	<title>eProducts - Product List</title>
	<link rel="stylesheet" type="text/css" href="products.css" />
	<link rel="shortcut icon" href="eProducts.ico">
	
	<style>
	
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
    <h1 style="text-align:left">Purchase Summary</h1>
    <br>
	<h3>Confirm your purchase</h3><br>
	
	<h4>Customer Information</h4>
	
<?php
	// declare variables and assign values from form on customer.php page
	$name = $_POST['firstname']." ".$_POST['lastname'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zipcode'];
	
	$_SESSION['name'] = $name;
	echo "<p>$name<br>
		  $street<br>
		  $city".","." $state "." $zip</p><br><br><br>";
?>

	<h4>Purchases</h4>

<?php
	// create control variable to be used in for loop
	$max = count($_SESSION['cart'] );
	
	// use second for loop to display items on page
	for($j = 0; $j < $max + 1; $j++){
		
		// declare 'item' variable that will be used in SQL query statement
		@$item = $_SESSION['cart'][$j];
		$query = "SELECT name, price, image FROM products WHERE productID = $item ";
		
		if( $result = mysqli_query($connect, $query) ){

			while( $cart_items = mysqli_fetch_array($result) ) {

				echo ("<div class='product'>".
					'<img src="data:image/png;base64,'.base64_encode($cart_items['image']).'" width="130px" height="180px"><br>'.
					"<b>{$cart_items['name']}</b><br>
					&dollar;{$cart_items['price']}<br><br><br>
					</div>"
				);
				
				@$total += $cart_items['price'];
			}
		}
	}
	$_SESSION['total'] = $total;
	echo "Your total purchase is &dollar;".number_format($total, 2);
?>
	<br><br><br>
	<p id="purchase" align="center"><a href="confirmation.php">Click to Purchase</a></p>
</section>


<footer>
&copy;opyright Products.com
</footer>

</body>
</html>