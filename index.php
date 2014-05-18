<!DOCTYPE html>
<html>
	<head>
		<?php
            $pagename = "";
            if($_REQUEST["page"]) {
                $pagename = $_GET["page"];
            }

            $pagename = htmlspecialchars($pagename);

            if ($pagename == '') {
                $pagename = "Home";
            }	
		?>
		<title><?php echo "$pagename - Team 2471"; ?></title>
        <link href="default.css" rel="stylesheet" type="text/css">
        
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/popup-script.js"></script>
	</head>
	<body>
		<!--Header-->
		<div id="header">
			<table id="logo" cellspacing="0" cellpadding="0">
				<tr>
					<td id="headerleft"></td>
					<td id="headermiddle"><img src="images/MeanMachinelogo90px.png" alt="Mean Machine Logo" />
						<h1><a href="index.php">FIRST Team 2471 Mean Machine</a></h1>
						<br/>
						<p><b>Robotics from Camas, Washougal, and Hockinson High Schools in Washington State</b></p>
					</td>
					<td id="headerright"></td>
				</tr>
			</table>
		</div>
		<!--End Header-->
		
		<!--Menu-->
		<div id="menu">
			<ul id="nav">
				<li><a href="index.php?page=Home">Home</a></li>
				<li><a href="index.php?page=About%20Us">About Us</a></li>
				<li><a href="index.php?page=Resources">Resources</a></li>
				<li><a href="index.php?page=Media%20Gallery">Media Gallery</a></li>
				<li><a id="right" href="index.php?page=Sponsor">Sponsor</a></li>
			</ul>
		</div>
		<!--End Menu-->        
        
		
		<!--Content-->
		<div id="page-wrapper">
			<div id="sidebar-wrapper">
				<div id="sidebar">
					<a class="twitter-timeline" href="https://twitter.com/MeanMachine2471" data-widget-id="350758890092232704">Tweets by @MeanMachine2471</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!--				</div>-->

<!--                <div id="left">-->
<!--                    <div id="sidebar2">Sidebar Text here!</div>-->
                </div>

            </div>
			<div id="content-wrapper">
                <div id="content">
                    <?php
                        if($pagename == "Home") {
                            include("pages/home_page.html");
                        } elseif($pagename == "About Us") {
                            include("pages/about_page.html");
                        } elseif($pagename == "Resources") {
                            include("pages/resource_page.php");
                        } elseif($pagename == "Media Gallery") {
                            include("pages/media_page.html");
                        } elseif($pagename == "Sponsor") {
                            include("pages/sponsor_page.html");
                        }
                    ?>
                </div>
			</div>
		</div>
		<!--End content-->
<!--        <div id="footer">-->
<!---->
<!--        </div>-->
	</body>
</html>