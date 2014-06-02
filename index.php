<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="images/favicon.png">
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
		<!-- <script type="text/javascript" src="scripts/sticky-kit.js"></script> -->
        <script type="text/javascript" src="scripts/popup-script.js"></script>
		<!-- <script type="text/javascript">
			$(document).ready(function() {
				$("#sidebar").stick_in_parent({parent : '#page-wrapper'});
			});
		</script> -->
		
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
			<ul>
			   <li class='<?php if($pagename == "Home") echo "active";?>' ><a href='index.php?page=Home'><span>Home</span></a></li>
			   <li class='<?php if($pagename == "About Us") echo "active";?>' ><a href='index.php?page=About%20Us'><span>About Us</span></a></li>
			   <li class='<?php if($pagename == "Resources") echo "active";?>' ><a href='index.php?page=Resources'><span>Resources</span></a></li>
			   <li class='<?php if($pagename == "Media Gallery") echo "active";?>' ><a href='index.php?page=Media%20Gallery'><span>Media Gallery</span></a></li>
			   <li class='last, <?php if($pagename == "Sponsor") echo "active";?>'><a href='index.php?page=Sponsor'><span>Sponsor</span></a></li>
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
		<div id="footer">
			<table class="body">
				<tr>
					<td id="footerleft"></td>
					<td id="footermiddle">
					<p class="copyright">
						&copy;&nbsp;&nbsp;2014 <a href="http://www.team2471.org">www.team2471.org</a> All Rights Reserved &nbsp;&nbsp;
					</p>
					<p style="float:left">
						Want to Join? Email us at <a target="_blank" href="mailto:contactus@teammeanmachine.org">contactus@teammeanmachine.org</a>
					</p></td>
					<td id="footerright"></td>
				</tr>
			</table>
		</div>
	</body>
</html>