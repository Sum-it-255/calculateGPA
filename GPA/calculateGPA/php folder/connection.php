<?php 
 $servername="localhost"; 
 $username="root"; 
 $password=""; 
 $database="StudentList"; 
 $conn=mysqli_connect($servername,$username,$password,$database);   
 
 if(!$conn){ 
 die("Connection failed:".mysqli_connect_error()); 
 $conn=mysqli_connect($servername,$username,$password,$database);   

 }  