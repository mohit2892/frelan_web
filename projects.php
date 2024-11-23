
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Showcase</title>
    <link rel="icon" href="images/p2.avif" type="image/x-icon">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f4f4f4;
        }

        .hero1 {
            background: linear-gradient(135deg, #ff6f61, #d83a56);
            color: #fff;
            text-align: center;
            padding: 100px 20px;
            position: relative;
            overflow: hidden;
        }

        .hero1::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            width: 200%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(-50%) rotate(-30deg);
            z-index: 0;
        }

        .hero1-content {
            position: relative;
            z-index: 1;
        }

        .hero1 h1 {
            font-size: 3rem; /* Responsive font size */
            margin-bottom: 20px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .hero1 img {
            max-width: 80px; /* Smaller image for mobile */
            border-radius: 50%;
            border: 4px solid #fff;
        }

        .hero1 p {
            font-size: 1.2rem; /* Slightly smaller font size for mobile */
            color: #d83a56;
            margin-bottom: 20px;
            max-width: 90%;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.5;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 24px; /* Adjusted padding for smaller screens */
            background: #ff5722;
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            margin-top: 20px;
            transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .cta-button:hover {
            background: #e64a19;
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        #portfolio {
            padding: 60px 20px;
            background: #fff;
            text-align: center;
        }

        #portfolio h2 {
            font-size: 2.5rem; /* Responsive font size */
            margin-bottom: 40px;
            color: #333;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .portfolio-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .portfolio-item {
            flex: 1 1 calc(50% - 20px); /* Adjusted for mobile */
            box-sizing: border-box;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            background: #f9f9f9;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            border: 2px solid #ddd;
            overflow: hidden;
        }

        .portfolio-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
            opacity: 0.9;
        }

        .portfolio-item .info {
            padding: 15px;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            text-align: center;
            transition: opacity 0.3s ease;
            opacity: 0;
        }

        .portfolio-item:hover .info {
            opacity: 1;
        }

        .portfolio-item h3 {
            margin: 0;
            font-size: 1.4rem; /* Adjusted font size */
            font-weight: 600;
        }

        .portfolio-item .creator {
            font-size: 1rem; /* Adjusted font size */
            color: #ddd;
            margin-top: 10px;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .hero1 h1 {
                font-size: 2.5rem; /* Smaller font size for mobile */
            }

            .hero1 img {
                max-width: 60px; /* Smaller image */
            }

            .hero1 p {
                font-size: 1rem; /* Smaller font size for mobile */
            }

            .cta-button {
                padding: 10px 20px; /* Adjusted padding */
            }

            #portfolio h2 {
                font-size: 2rem; /* Smaller heading size */
            }

            .portfolio-item {
                flex: 1 1 calc(100% - 20px); /* Full width items */
            }

            .portfolio-item .info {
                padding: 10px;
            }

            .portfolio-item h3 {
                font-size: 1.2rem; /* Smaller font size */
            }

            .portfolio-item .creator {
                font-size: 0.9rem; /* Smaller font size */
            }
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
   
<?php 
include "db_connect.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$result = mysqli_query($conn, "SELECT * FROM projects");

if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}
?>

    <section class="hero1">
        <div class="hero1-content">
            <h1><img src="images/p2.avif" alt="Portfolio Showcase">Welcome to Our Projects</h1>
            <p>Showcase your projects, highlight your skills, and attract new opportunities. Create, manage, and display your portfolio with ease.</p>
            <a href="#portfolio" class="cta-button">Explore Portfolio</a>
        </div>
    </section>
    
    <section id="portfolio">
        <h2 style="font-style: italic;" >Featured Projects</h2>
        <div class="portfolio-grid">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="' . htmlspecialchars($row['link']) . '" class="portfolio-item">';
                echo '<img src="http://localhost/app/frilainser/uploads22/' . htmlspecialchars($row['img']) . '" alt="' . htmlspecialchars($row['title']) . '">';
                echo '<div class="info">';
                echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
                echo '<p class="creator">Created by: ' . htmlspecialchars($row['name']) . '</p>';
                echo '</div>';
                echo '</a>';
            }
            ?>
        </div><br>
        <a href="add_projects.php" class="cta-button">Add projects</a>
    </section>
    
    <footer>
        <?php include "footer.php" ?>
    </footer>
</body>
</html>
