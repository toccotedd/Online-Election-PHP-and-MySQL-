<?php
   session_start();
   include "./connect.php";
 
   $code=$_GET['value'];
   if( $code){
      
	                  $sql="delete from t_ec where id='".$code."'";
					  $result=mysql_query($sql);
	                  header("location:a_select.php");

                       }
     
?>
