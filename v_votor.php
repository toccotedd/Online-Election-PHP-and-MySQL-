<?php
session_start();
   include "./connect.php";    	

if(isset($_SESSION['votor'])){
      
       }else{
	    header("location:n.php");
	        }
if(isset($_POST['submit'])){ 
            $error=""; 	   
			$cid=$_POST['type'];
			
			
			if($cid ){
			   $sql="update votor set votfor='".$cid."' where vid='".$_SESSION['votor']."' ";
			   $result=mysql_query($sql);
			   if($result){
			     $error="sth wrong";
			              }else{
						  echo(mysql_error());
						       }
                $sql1="select * from candidate where cid='".$cid."'";
                $re=mysql_query($sql1);
                if($re){
                	$row=mysql_fetch_array($re);
                $res=$row[7];
                $res=$res+1;
                $sql2="update candidate set result='".$res."' where cid='".$cid."'";
                $result1=mysql_query($sql2);
                if($result1){
                	$error="successfully voted";
                }
            }else{
            	$error="sth worng";
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
<li class="first"><a href="#">Home</a></li>
			<li><a href="#">About us</a></li>
			<li><a href="#">Help</a></li>

			<li><a href="#">Contact</a></li>
			<li><a href="#">External Link</a></li>
			<li><a href="votor.php">Voter</a></li>
			<li class="last"><a href="login.php">Login</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	
	<div id="page">
		<div id="content">
			<div class="box">
				<div id="contact_form">
                
                	    <form method="post" name="contact" action="#">
                        <i><center><font color="red"size="2px"><?php if(isset($_POST['submit'])) echo "".$error.""; ?></font></center></i>
                        
                        <label for="text">Candidate:</label> 
                        <select name="type" style="width:350px;height:34px;margin-top:5px;background: #d1d1d1;">

                               <?php
                                                             $sql1="select * from candidate";
                                                             $result2=mysql_query($sql1);
                                                             if(mysql_num_rows($result2)>0){
                                                                while($row=mysql_fetch_array($result2)){
                                                                  echo "<option>".$row[0]."<option>";
                                                                }
                                                             }
                                                      
                                                           ?>
                               

                        </select>
                                                <div class="cleaner_h10"></div>

                                            </br>
                        
                        <input type="submit" class="submit_btn_login" name="submit" id="submit" value="Choose" />
                    
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