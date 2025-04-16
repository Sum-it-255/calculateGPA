<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcademicSys: Exam Information Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">
            <h1><a href="home.html">AcademicSys</a></h1>
        </div>
        <div class="link">
            <button id="menu">Menu</button>
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="cal.php">CALCULATE</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="privacy.php">PRIVACY</a></li>
      </ul>
    </div>
    </nav>
   
    <div class="content">
    </div>
    <script>
  
    const menu = document.querySelector("#menu");
    const link = document.querySelector(".link ul");
    menu.onclick = function() {
    const isActive = link.style.display === "flex";
    
    if (!isActive) {
        link.style.display = "flex";
        menu.innerHTML = "✕";
        menu.setAttribute("data-active", "true");
    } else {
        link.style.display = "none";
        menu.innerHTML = "Menu";
        menu.removeAttribute("data-active");
    }
}
        </script>
</body>
</html>