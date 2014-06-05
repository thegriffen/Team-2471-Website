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
	elseif ($subpage == 'About Team') {
		include("pages/about_team.html");
	}
	elseif ($subpage == 'About Mentors') {
		include("pages/about_mentors.html");
	}
	elseif ($subpage == 'About First') {
		include("pages/about_first.html");
	}
	elseif ($subpage == 'About Robots') {
		include("pages/about_robots.html");
	}
	else {
		include("pages/404.html");
	}

?>
