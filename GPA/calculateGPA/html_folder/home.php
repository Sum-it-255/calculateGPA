<?php include 'nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - AcademicSys</title>
    <style>
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('https://images.unsplash.com/photo-1581726707445-75cbe4efc586') center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 2rem;
        }
        
        .features {
            padding: 4rem 2rem;
            background: #f8f9fa;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            margin: 2rem 0;
        }

        .feature-grid {
            display: grid;
            gap: 2rem;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 1rem;
            transition: background 0.3s ease;
        }

        .cta-button:hover {
            background: #2980b9;
        }

        .screenshot {
            width: 100%;
            max-width: 600px;
            border-radius: 10px;
            margin: 2rem 0;
        }

        h2 {
            font-size: 3rem;
            margin-bottom: 2rem;
            color: #2c3e50;
        }

        p {
            font-size: 1.8rem;
            line-height: 1.6;
            color: #34495e;
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="hero-content">
            <h1 style="font-size: 4rem;">Academic Grade Management Made Simple</h1>
            <p style="font-size: 2rem; margin-top: 1rem;">Calculate, Save, and Track Academic Performance</p>
            <a href="cal.php" class="cta-button">Calculate Your GPA Now</a>
        </div>
    </div>

    <section class="features">
        <div class="feature-grid">
            <div class="feature-card">
                <h2>📊 GPA Calculation</h2>
                <p>Easily calculate your GPA with our intuitive interface:</p>
                <ul style="font-size: 1.6rem; list-style: none; padding: 1rem 0;">
                    <li>▶️ Add multiple subjects with credit hours</li>
                    <li>▶️ Automatic grade point conversion</li>
                    <li>▶️ Real-time GPA calculation</li>
                    <li>▶️ Detailed breakdown of results</li>
                </ul>
                <img src="cal.png" alt="Calculation Interface" class="screenshot">
            </div>

            <div class="feature-card">
                <h2>💾 Save & Retrieve</h2>
                <p>Secure storage for your academic records:</p>
                <ul style="font-size: 1.6rem; list-style: none; padding: 1rem 0;">
                    <li>🔒 Encrypted data storage</li>
                    <li>📅 Date-stamped entries</li>
                    <li>🔍 Easy historical tracking</li>
                    <li>📤 Export to PDF capability</li>
                </ul>
                <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31" alt="Data Storage" class="screenshot">
            </div>
        </div>

        <div class="feature-card" style="text-align: center; margin-top: 3rem;">
            <h2>How It Works</h2>
            <div style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: 2rem;">
                <div style="flex: 1; min-width: 250px;">
                    <h3>1. Input Data</h3>
                    <p>Enter your subject details and marks</p>
                </div>
                <div style="flex: 1; min-width: 250px;">
                    <h3>2. Calculate</h3>
                    <p>Automatic GPA calculation</p>
                </div>
                <div style="flex: 1; min-width: 250px;">
                    <h3>3. Save</h3>
                    <p>Store your results securely</p>
                </div>
                <div style="flex: 1; min-width: 250px;">
                    <h3>4. Track</h3>
                    <p>Monitor academic progress</p>
                </div>
            </div>
            <a href="cal.php" class="cta-button" style="margin-top: 2rem;">Get Started Now</a>
        </div>

        <div class="feature-card">
            <h2>Latest Updates</h2>
            <div style="display: grid; gap: 2rem; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                <div>
                    <h3>New Features</h3>
                    <p>▶️ Multi-semester tracking<br>
                       ▶️ Enhanced data visualization<br>
                       ▶️ Mobile-friendly interface</p>
                </div>
                <div>
                    <h3>Recent Saves</h3>
                    <?php
                   
                    $recent_entries = [
                        ["date" => "2024-03-15", "gpa" => "3.75"],
                        ["date" => "2024-03-14", "gpa" => "3.82"],
                        ["date" => "2024-03-13", "gpa" => "3.68"]
                    ];
                    
                    foreach($recent_entries as $entry) {
                        echo "<p>📅 {$entry['date']} - GPA: {$entry['gpa']}</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>