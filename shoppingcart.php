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
    <h1 style="text-align:left">Shopping Cart</h1>
    <br>
	
<?php
	/* declare $product and add product ID to it.  
	This will be used to append the product to 
	the $_SESSION['cart'] array */
	@$product = $_GET['productID'];
	
	// Check is Session array 'cart' has been created. If not, create it.
	if( !isset( $_SESSION['cart'] ) ){
		$_SESSION['cart'] = array();
		
	}
	
	// create control variable to be used in for loop
	$max = count($_SESSION['cart'] );
	
	// use for loop to add products to 'cart' array
	for($i = $max; $i < $max + 1; $i++){
		$_SESSION['cart'][$i] = $product;
	
		// use second for loop to display items on page
		for($j = 0; $j < $max + 1; $j++){
			
			// declare 'item' variable that will be used in SQL query statement
			$item = $_SESSION['cart'][$j];
			$query = "SELECT name, price, image FROM products WHERE productID = $item ";
			
			if( $result = mysqli_query($connect, $query) ){

				while( $cart_items = mysqli_fetch_array($result) ) {

					echo ("<div class='product'>".
						'<img src="data:image/png;base64,'.base64_encode($cart_items['image']).'" width="130px" height="180px"><br>'.
						"<b>{$cart_items['name']}</b><br>
						&dollar;".number_format($cart_items['price'], 2)."<br>
						</div>"
					);
				}
			}
		}
	}
	
	echo "<p><a href='customer.php' id='checkout'>Check Out</a></p>
		  <p><a href='products.php' id='continue_shopping'>Continue Shopping</a></p>";
	
	/* session_unset();
	session_destroy(); */
	
?>
</section>


<footer>
&copy;opyright Products.com
</footer>

</body>
</html>