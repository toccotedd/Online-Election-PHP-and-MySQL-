<?php
   session_start();
   include "./connect.php";  
  if(isset($_SESSION['username'])){
      $sql="select * from t_ec where username='".$_SESSION['username']."' and selected='yes'";
	  $res=mysql_query($sql);
	  if(mysql_num_rows($res) > 0){
	      }else{
		    header("location:login.php");
		       }
       }else{
	    header("location:login.php");
	        }	

    if(isset($_POST['submit'])){ 
       $error=""; 	   
			$date=$_POST['date'];
			$body=$_POST['body'];
			$user=$_SESSION['username'];
			
			if($date && $body && $user ){
			   $sql="insert into post values(NULL,'".$user."','".$body."','".$date."')";
			   $result=mysql_query($sql);
			   if($result){
			     $error="Post Announcemented Successfully"; 
			              }else{
						  echo(mysql_error());
						       }
			   }else{
			    $error="please fill all fields..."; 
			       }
				}
   
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
<title>Big Business 2.0 by TEMPLATED</title>
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

			<li><a href="contact.php">Contact</a></li>
		
			<li><a href="register.php">Register</a></li>
					<li class="last"><a href="logout.php">Logout</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	
	<div id="page">
		<div id="content">
			<div class="box">
				<div id="contact_form">
                
                	    <form class="former_form1">
			
			<table class="table">
			<tr>
             <th>Student Id</th>
			<th>Student Id</th>
			<th>Student Name</th>
			<th> Address </th>
			<th>Age</th>
			<th>Exprince</th>
			</tr>
			    <?php
				  		            $sql1="select * from t_ec";
				   $result1=mysql_query($sql1);
				   if( $result1){
				     	$i=1;
				        while($row=mysql_fetch_assoc($result1)){
				        	
				        	echo "<tr>";
				        	echo "<td>".$i."</td>";
						echo "<td>".$row['id']."</td>";
						$code=$row['id'];
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['address']."</td>";
					echo "<td>".$row['age']."</td>";
					echo "<td>".$row['ex']."</td>";
						
					    echo "</tr>";
					    $i++;
				        }
						
				       }else{
					   $error="Error occured 404";
					        }
		 
				
				?>
		    </table>

			</form>
                </div>
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