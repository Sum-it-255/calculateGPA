<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - AcademicSys</title>
    <style>
        .about-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('about.jpg') center/cover;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        
        .content-section {
            padding: 4rem 2rem;
            font-size: 1.8rem;
            line-height: 1.6;
            background: rgba(255,255,255,0.95);
        }
        
        .team-member {
            text-align: center;
            margin: 2rem 0;
        }
        
        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="about-hero">
        <h1 style="font-size: 4rem;">About AcademicSys</h1>
    </div>

    <div class="content-section">
        <h2 style="font-size: 3rem;">Our Mission</h2>
        <p>Transforming academic management through innovative technology solutions.</p>
        
        <h2 style="font-size: 3rem; margin-top: 3rem;">Our Team</h2>
        <div class="team-member">
            <img src="photo.webp" alt="Team Member">
            <h3 style="font-size: 2.4rem;">Sumit Shrestha</h3>
            <p>Lead Developer</p>
        </div>
    </div>
</body>
</html>