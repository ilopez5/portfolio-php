<?php
include "vendor/autoload.php";		# load packages
include 'includes/config.php';		# global Variables
include 'includes/functions.php';	# PHP Functions
include 'includes/settings.php';	# determine page params
if ($page == "callback" || $page == "livetexts") {
	include 'includes/body.php';
	exit();
}
include 'includes/header.php';  # Define head block
include 'includes/navbar.php';  # Define nav bar
include 'includes/body.php';        # Select page body
include 'includes/footer.php';  # Close with footer
?>