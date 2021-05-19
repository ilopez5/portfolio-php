<?php
 	session_start();
	ob_start();

	# environment variable
	$dotenv = Dotenv\Dotenv::createImmutable(__DIR__,'../.credentials/secrets.env');
	$dotenv->load();

    # global variables
	$main = $_SERVER["SERVER_NAME"];
	$site_name = "Ismael J Lopez";

	# session/env tracking
	$is_localhost = ($main == "ismaeljlopez.localhost");

	# social media links
	$mailto   = "mailto:email@".$main."?Subject=General%20Inquiry";
	$linkedin = "https://www.linkedin.com/in/ismael-j-lopez-2aa10a197/";
	$twitter  = "https://twitter.com/underfullhbox";
	$github   = "https://github.com/ilopez5";
?>