<?php
   session_start();
   include "./connect.php";
 
   $code=$_GET['value'];
   if( $code){
      
	                  $sql="update t_ec set selected='yes' where id='".$code."'";
					  $result=mysql_query($sql);
	                  header("location:a_select.php");
                       }
     
?>