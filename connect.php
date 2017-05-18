<?php
    // Retrieve database connection variables
    include_once '../../../external_includes/wpgv.php';

    // Open connection to database
	$connect = mysqli_connect($servername, $user, $pwd, $db) or die("Sorry, not able to connect to database");

