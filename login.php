<?php
   session_start();
   include "./connect.php";
  if(isset($_POST['submit_login'])){ 
		  $error="";
         $username=$_POST['username'];
		 $password=$_POST['password'];
		 $type=$_POST['type'];
           if($username && $password ){
		    $sql="select * from admin where username='".$username."' and password='".$password."'";
			$result=mysql_query($sql);
			if(mysql_num_rows($result) > 0){
			   $row=mysql_fetch_assoc($result);
			   $error="logged in success";
			   $_SESSION['username']=$row['username'];
			      header("location:admin.php");
			}else{           if($type=='Election_Committee'){
				            $sql2="select * from t_ec where username='".$username."' and password='".$password."'";
							 $result2=mysql_query($sql2);
							 if(mysql_num_rows($result2) >0){
							       $row2=mysql_fetch_assoc($result2);
								    $_SESSION['username']=$row2['username'];
									header("location:ec.php");
								 }else{
								      $error="There is Not such Account...";
								      }
			}else{
                  $sql2="select * from votor where username='".$username."' and password='".$password."'";
							 $result2=mysql_query($sql2);
							 if(mysql_num_rows($result2) >0){
							       $row2=mysql_fetch_assoc($result2);
								    $_SESSION['username']=$row2['username'];
									header("location:votor.php");
								 }else{
								      $error="There is Not such Account...";
								      }

			}
							 
									
													       }
		   }else{
		   $error="pls fill all fields";
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
<title>online Election</title>
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
			<li class="last"><a href="login.php">Login</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	
	<div id="page">
		<div id="content">
			<div class="box">
				<div id="contact_form">
                
                	<form method="post" name="contact" action="login.php">
                    
                        
                        <label for="author">User Name:</label> <input type="text" id="author" name="username" class="required input_field" />
                        <div class="cleaner_h10"></div>
                        
                        <label for="email">Password:</label> <input type="password" id="email" name="password" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>
                        
										<div class="cleaner_h10"></div>
										<label for="login">User Type:</label>
										<select name="type" style="width:350px;height:34px;margin-top:5px;background: #d1d1d1;">
										<option value="Admin">Admin</option>
										<option value="Election_Committee">Election Committee</option>
                                         <option value="votor">Votor</option>
										</select>
                                 	 <div class="cleaner_h10"></div>
                                            </br>
                        
                        <input type="submit" class="submit_btn_login" name="submit_login" id="submit" value="Login" />
                    
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