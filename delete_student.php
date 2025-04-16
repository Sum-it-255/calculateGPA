<?php
require "connection.php";


$id = $_GET["id"];


$sql = "DELETE FROM students WHERE id='$id'";


if (mysqli_query($conn, $sql)) {
    $message = "RECORD DELETED SUCCESSFULLY";
    $msgClass = "success";
} else {
    $message = "NO RECORD FOUND TO DELETE";
    $msgClass = "error";
}

include 'nav.php';

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Record Deletion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding: 0;
        }
        .message {
            font-size: 24px;
            margin: 20px 0;
            text-align: center;
        }
        .success {
            color: green;
            font-weight: bold;
        }
        .error {
            color: red;
            font-weight: bold;
        }
        button {
            background-color: #3498db;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class='message'>
        <p class='$msgClass'>$message</p>
    </div>
    <button onclick=\"window.location.href='insert.php';\">Return to Previous Page</button>
</body>
</html>";

mysqli_close($conn);
?>
