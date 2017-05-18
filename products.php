<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
flush();
ob_flush();

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
    <h1 style="text-align:left">Products</h1>
    <br>

<?php
	
	// retrieve data and store it in variable $products
	if( $result = mysqli_query($connect, $query) ){
	
		while( $products = mysqli_fetch_array($result) ) {

			echo ("<div class='product'>".
				'<img src="data:image/png;base64,'.base64_encode($products['image']).'" width="184px" height="254px"><br>'.
				"<b>{$products['name']}</b>
				<br><div>{$products['description']}</div><br>
				&dollar;".number_format($products['price'], 2)."<br>
				<p align='center'><a href='shoppingcart.php?productID={$products['productID']} '>Add to Cart</a></p><br><br>
				</div>"
			);
		}
	}

?>
</section>


<footer>
&copy;opyright Products.com
</footer>

</body>
</html>
