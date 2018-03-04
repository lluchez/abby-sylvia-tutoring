<?php

	// Set if we are in Production environment
	define('IS_PROD', strpos($_SERVER['SERVER_NAME'], '192.168.') !== 0);
	
	// Define configuration array
	$config = Array();

	$config["email"] = "Abbysylvia.tutoring@gmail.com";
	$config["phones"] = Array(
		"Abby" => "Phone Number",
		"Sylvia" => "Phone Number"
	);
