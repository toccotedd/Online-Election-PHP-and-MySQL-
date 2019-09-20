<?php
   include "./connect.php";
   ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Big Business 2.0
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120624
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Online Election</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.1.js"></script>
<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
		$('#slider').slidertron({
			viewerSelector: '.viewer',
			indicatorSelector: '.indicator span',
			reelSelector: '.reel',
			slidesSelector: '.slide',
			speed: 'slow',
			advanceDelay: 4000
		});
	});
</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Adigrat University Student Union Online Election System</a></h1>
		</div>
	</div>
	<div id="menu">
		<ul>
				<li class="first"><a href="index.php">Home</a></li>
			<li><a href="about.php">About us</a></li>
			<li><a href="help.php">Help</a></li>

			<li><a href="#">Contact</a></li>
			<li><a href="#">External Link</a></li>
			<li><a href="register.php">Register</a></li>
			<li class="last"><a href="login.php">Login</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="slider">
		<div class="viewer">
			<div class="reel">
				<div class="slide">
					<img src="images/slide01.jpg" alt="" /> 
				</div>
			</div>
		</div>
	</div>
	<div id="page">
		<div id="content">
			<div class="box" id="welcome">
				<h3>Welcome to Adigrat University Student Union Online Election System</h3>
				<p>
					Students union is the most important and crucial things to request the proper academic question of students to the respective author and improve student facility problems of them like academic case, food, dormitory problem and to maximize one country wisdom and peaceful infrastructure development.
					To minimize listed above problem we would like to design online web based student’s union election for Adigrat University
				</p>
			</div>
			<div class="box" id="content-box1">
				<h2>Post Announcced</h2>
				<ul class="section-list">
					<?php
                        $sql="select * from post";
                        $result=mysql_query($sql);
                        if($result){
                        	while($row=mysql_fetch_assoc($result)){
                        	echo'<li class="first">';
                        	echo '<img class="pic alignleft" src="images/pic01.jpg" width="70" height="70" alt="" />';
                            echo'<span>'.$row['body'].'</span>';
                            echo "</br>";
                            echo'<span>'.$row['date'].'</span>';
                            echo "</br>";
                            echo'<p> Post By'.$row['username'].'</p>';
                            echo '</li>';
                             
                        }
                        }
                        
                                                       ?>
					
				</ul>
			</div>
			
			<br class="clearfix" />
		</div>
		<br class="clearfix" />
	</div>
	
</div>
<div id="footer">
	&copy; Untitled. All rights reserved. Design by  Adigrat University Students.
</div>
</body>
</html>