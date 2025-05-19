<?php  
require "connection.php";
include 'nav.php'; 
$id = $_GET['id']; 
$sql = "SELECT * FROM students WHERE id = $id"; 
$result = mysqli_query($conn, $sql); 
if (mysqli_num_rows($result) > 0) { 
    $record = mysqli_fetch_assoc($result); 
} else { 
    echo "Record not found."; 
    exit(); 
} 
mysqli_close($conn); 
?>
<!DOCTYPE HTML> 
<html> 
<head> 
  <title>Edit Student Details</title>
  <style> 
   
    form { 
      border: 2px solid #3498db; 
      width: 600px; 
      max-width: 90%;
      padding: 20px; 
      margin: 30px auto; 
      background-color: #f0f8ff; 
      border-radius: 10px; 
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    } 
   
    label { 
      display: block;
      font-weight: bold; 
      color: #333;
      margin-top: 10px; 
    } 
   
    input[type="text"],
    input[type="number"],
    input[type="email"],
    input[type="tel"] {
      width: calc(100% - 22px);
      padding: 10px; 
      margin-top: 5px; 
      border: 1px solid #ccc; 
      border-radius: 5px;
      font-size: 14px;
    }
   
    input[type="submit"] {
      background-color: #3498db; 
      color: #fff; 
      border: none; 
      padding: 10px 20px; 
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 20px;
    }
    input[type="submit"]:hover {
      background-color: #2980b9;
    }
   
    div.button-container { 
      text-align: center; 
    } 
  </style> 
</head> 
<body> 

  <h1 style="text-align:center;">Edit Student Details</h1> 
  <form action="update_student.php" method="get"> 
    <label for="id">ID:</label> 
    <input type="number" id="id" name="id" value="<?php echo $record['id']; ?>" readonly> 

    <label for="institution">Institution:</label> 
    <input type="text" id="institution" name="institution" value="<?php echo $record['institution']; ?>" required> 

    <label for="username">Username:</label> 
    <input type="text" id="username" name="username" value="<?php echo $record['username']; ?>" required> 

    <label for="student_id">Student ID:</label> 
    <input type="text" id="student_id" name="student_id" value="<?php echo $record['student_id']; ?>" required> 

    <label for="class">Class:</label> 
    <input type="text" id="class" name="class" value="<?php echo $record['class']; ?>" required> 

    <label for="section">Section:</label> 
    <input type="text" id="section" name="section" value="<?php echo $record['section']; ?>" required> 

    <label for="roll_number">Roll Number:</label> 
    <input type="text" id="roll_number" name="roll_number" value="<?php echo $record['roll_number']; ?>" required> 

    <label for="examTerm">Exam Term:</label> 
    <input type="text" id="examTerm" name="examTerm" value="<?php echo $record['examTerm']; ?>" required> 

    <label for="examYear">Exam Year:</label> 
    <input type="text" id="examYear" name="examYear" value="<?php echo $record['examYear']; ?>" required> 

    <label for="overallGPA">Overall GPA:</label> 
    <input type="text" id="overallGPA" name="overallGPA" value="<?php echo $record['overallGPA']; ?>" required> 

    <div class="button-container"> 
      <input type="submit" value="Update"> 
    </div> 
  </form> 
 
</body> 
</html>
