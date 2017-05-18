<?php
    // Retrieve database connection variables
//    include_once '../../../external_includes/wpgv.php'; REMOVE COMMENT FROM THIS LINE BEFORE UPLOADING TO LIVE SERVER

    // Open connection to database
	$connect = mysqli_connect($servername, $user, $pwd, $db) or die("Sorry, not able to connect to database");

