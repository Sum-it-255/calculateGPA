<?php
require "connection.php";
include 'nav.php';

// Check if form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the POST data
    $institution = $_POST["institution"];
    $username = $_POST["username"];
    $student_id = $_POST["student_id"];
    $class = $_POST["class"];
    $section = $_POST["section"];
    $roll_number = $_POST["roll_number"];
    $examTerm = $_POST["examTerm"];
    $examYear = $_POST["examYear"];
    $overallGPA = $_POST["overallGPA"];

    // Check for duplicate entry
    $sqlCheck = "SELECT * FROM students WHERE institution = '$institution' AND username = '$username' AND student_id = '$student_id' 
                AND class = '$class' AND section = '$section' AND roll_number = '$roll_number' AND examTerm = '$examTerm' 
                AND examYear = '$examYear' AND overallGPA = '$overallGPA'";

    $checkResult = mysqli_query($conn, $sqlCheck);

    // If a record already exists, do not insert
    if (mysqli_num_rows($checkResult) > 0) {
        echo '<div class="message-container">';
        echo "<h2 class='error'>Duplicate record found. The record was not inserted.</h2>";
        echo '</div>';
    } else {
        // SQL Insert Query
        $sql = "INSERT INTO students(institution, username, student_id, class, section, roll_number, examTerm, examYear, overallGPA)
                VALUES ('$institution', '$username', '$student_id', '$class', '$section', '$roll_number', '$examTerm', '$examYear', '$overallGPA')";

        // Execute the query
        if (mysqli_query($conn, $sql)) {
            // Redirect to prevent re-insertion on refresh
            header("Location: " . $_SERVER['PHP_SELF'] . "?status=success");
            exit; // Stop further execution
        } else {
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
}

// Fetch and display all student records
$sqlSelect = "SELECT * FROM students";
$records = mysqli_query($conn, $sqlSelect);

echo '<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <style>
    .message-container {
            text-align: center;
            margin: 40px 0;
        }
        .success { 
            color: green;
            font-size: 24px;
            font-weight: bold;
        }
        .error { 
            color: red;
            font-size: 24px;
            font-weight: bold;
        }
        .result-table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
        }
        .result-table th, .result-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .result-table th {
            background-color: #3498db;
            color: white;
        }

    </style>
</head>
<body>
';

if (mysqli_num_rows($records) > 0) {
    echo "<table class='result-table'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Institution</th>";
    echo "<th>Username</th>";
    echo "<th>Student ID</th>";
    echo "<th>Class</th>";
    echo "<th>Section</th>";
    echo "<th>Roll Number</th>";
    echo "<th>Exam Term</th>";
    echo "<th>Exam Year</th>";
    echo "<th>Overall GPA</th>";
    echo "<th>Edit</th>";
    echo "<th>Delete</th>";
    echo "</tr>";

    foreach ($records as $record) {
        echo "<tr>";
        echo "<td>" . $record['id'] . "</td>";
        echo "<td>" . $record['institution'] . "</td>";
        echo "<td>" . $record['username'] . "</td>";
        echo "<td>" . $record['student_id'] . "</td>";
        echo "<td>" . $record['class'] . "</td>";
        echo "<td>" . $record['section'] . "</td>";
        echo "<td>" . $record['roll_number'] . "</td>";
        echo "<td>" . $record['examTerm'] . "</td>";
        echo "<td>" . $record['examYear'] . "</td>";
        echo "<td>" . $record['overallGPA'] . "</td>";
        echo "<td><a href='edit_student.php?id=" . $record['id'] . "'>Edit</a></td>";
        echo "<td><a href='delete_student.php?id=" . $record['id'] . "' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo '<div class="message-container">
    <p class="error">No student records found.</p>
  </div>';
}

if (isset($_GET['status'])) {
    echo '<div class="message-container">
            <p class="success">Record inserted successfully!</p>
          </div>';
}

echo "</body></html>";

// Close the database connection
mysqli_close($conn);
?>