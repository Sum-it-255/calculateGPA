<?php 
 $servername="localhost"; 
 $username="root"; 
 $password=""; 
  
 $conn=mysqli_connect($servername,$username,$password);   
 
 if(!$conn){ 
 die("Connection failed:".mysqli_connect_error()); 
 }  
 
 $sql="CREATE DATABASE StudentList"; 
  
 if(!mysqli_query($conn,$sql)){ 
 echo"ERROR: COULD NOT EXECUTE $sql".mysqli_error($conn);  } 
 if(!$conn){ 
 die("Connection failed:".mysqli_connect_error()); 
 }  

mysqli_close($conn);
?> 
