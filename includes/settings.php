<?php
# page uri constructors
isset($_GET['page']) ? $page = RemoveXSS($_GET['page']) : $page = "";
isset($_GET['id'])   ? $id   = RemoveXSS($_GET['id'])   : $id   = "";
isset($_GET['num'])  ? $num  = RemoveXSS($_GET['num'])  : $num  = "";
isset($_GET['ext'])  ? $ext  = RemoveXSS($_GET['ext'])  : $ext  = "";
isset($_GET['aux'])  ? $aux  = RemoveXSS($_GET['aux'])  : $aux  = "";

# this sets title and active tab state for nav bar
$active_home = $active_resume = $active_portfolio = $active_contact = $active_login = "";
$title = "Ismael | " . ($page == "" ? "Home" : ucfirst($page));
$year  = date('Y');

switch ($page) {
	case "resume":
		$active_resume = "active";
		break;
	case "portfolio":
		$active_portfolio = "active";
		break;
	case "contact":
		$active_contact = "active";
		break;
	case "login":
		$active_login = "active";
		break;
	default:
		$active_home = "active";
}
?>
