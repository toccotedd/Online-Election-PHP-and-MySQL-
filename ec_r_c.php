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
			$cid=$_POST['cid'];
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$sex=$_POST['sex'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			$age=$_POST['age'];

			$result_1=0;

			if($cid && $fname && $lname && $phone  && $address && $age && $sex){
			   $sql="insert into candidate values('".$cid."','".$fname."','".$lname."','".$sex."','".$phone."','".$address."','".$age."','".$result_1."')";
			   $result=mysql_query($sql);
			   if($result){
			     $error="candidate Registered Successfully"; 
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
				<li class="first"><a href="ec_r_c.php">R.Candidates</a></li>
					<li><a href="ec_r_v.php">R.Votors</a></li>
					<li><a href="ec_re.php">Generate Report</a></li>
					<li><a href="ec_view.php">View Result</a></li>
					<li><a href="ec_post.php">P.Announcement </a></li>

					<li class="last"><a href="logout.php">Logout</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	
	<div id="page">
		<div id="content">
			<div class="box">
				<div id="contact_form">
                
                	    <form method="post" name="contact" action="#">
                        <i><center><font color="red"size="2px"><?php if(isset($_POST['submit'])) echo "".$error.""; ?></font></center></i>
                         <label for="author">Candidate Id:</label> <input type="text" id="author" name="cid" class="required input_field" />
                        <div class="cleaner_h10"></div>
                        <label for="author">First Name:</label> <input type="text" id="author" name="fname" class="required input_field" />
                        <div class="cleaner_h10"></div>
                        
                        <label for="author">Last Name:</label> <input type="text" id="author" name="lname" class="required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="login">Gender:</label>
										<select name="sex" style="width:350px;height:34px;margin-top:5px;background: #d1d1d1;">
										<option value="Female">Female</option>
										<option value="Male">Male</option>

										</select>
                        
                        <label for="email">Telephone:</label> <input type="text" id="email" name="phone" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="email">Age:</label> <input type="number" id="email" name="age" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="email">Address:</label> <input type="text" id="email" name="address" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                                 	 <div class="cleaner_h10"></div>
                                            </br>
                        
                        <input type="submit" class="submit_btn_login" name="submit" id="submit" value="Register Candidate" />
                    
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