<?php
switch ($page) {
	case 'contact':
		include 'pages/contact.php';
		break;
	case 'portfolio':
		include 'pages/portfolio.php';
		break;
	case 'resume':
		include 'pages/resume.php';
		break;
	default:
		include 'pages/home.php';
}
?>
