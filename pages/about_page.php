<?php
	if(isset($_GET["sub"])) {
		$subpage = htmlspecialchars($_GET["sub"]);
	}
	else {
		$subpage = 'home';
	}
	
	if ($subpage == '') {
		$subpage = 'home';
	}
	
	if ($subpage == 'home') {
		include("pages/about_home.html");
	}
	elseif ($subpage == 'team') {
		include("pages/about_team.html");
	}
	elseif ($subpage == 'mentors') {
		include("pages/about_mentors.html");
	}
	elseif ($subpage == 'first') {
		include("pages/about_first.html");
	}
	elseif ($subpage == 'robots') {
		include("pages/about_robots.html");
	}
	else {
		include("pages/404.html");
	}

?>
