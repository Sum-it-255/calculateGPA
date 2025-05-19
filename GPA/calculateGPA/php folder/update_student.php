<?php 
require "connection.php"; 
include 'nav.php';
$institution = $_GET["institution"]; 
$username    = $_GET["username"]; 
$student_id  = $_GET["student_id"]; 
$class       = $_GET["class"]; 
$section     = $_GET["section"]; 
$roll_number = $_GET["roll_number"]; 
$examTerm    = $_GET["examTerm"]; 
$examYear    = $_GET["examYear"]; 
$overallGPA  = $_GET["overallGPA"]; 
$id          = $_GET["id"]; 

$sql = "UPDATE students SET  
    institution = '$institution',  
    username = '$username',  
    student_id = '$student_id',  
    class = '$class',  
    section = '$section',  
    roll_number = '$roll_number',  
    examTerm = '$examTerm',  
    examYear = '$examYear',  
    overallGPA = '$overallGPA'  
WHERE id = $id"; 

echo '<!DOCTYPE html>
<html>
<head>
  <title>Update Student Record</title>
  <style>
    body {
      text-align: center;
      font-family: Arial, sans-serif;
    }
    .message {
      font-size: 20px;
      margin-top: 20px;
    }
    button.return {
      background-color: #3498db;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 20px;
    }
  </style>
</head>
<body>';

if (mysqli_query($conn, $sql)) { 
    echo "<p class='message'>Record updated successfully.</p>"; 
} else { 
    echo "<p class='message error'>Error updating record: " . mysqli_error($conn) . "</p>"; 
} 

echo "<button class='return' onclick=\"window.location.href='insert.php';\">Return</button>";

echo '</body>
</html>';

mysqli_close($conn); 
?>
