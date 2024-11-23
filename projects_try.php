<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #fff; /* Set background color to white */
        }

        
        .hero1 {
           
           
            text-align: center;
            padding: 60px 20px; /* Reduced padding for a cleaner look */
        }

        

        .hero1 h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        .hero1 p {
            font-size: 1.125rem;
            margin-bottom: 20px;
            color: #555;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 24px;
            background: #007bff; /* Changed button background to blue */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 20px;
            transition: background 0.3s ease;
        }

        .cta-button:hover {
            background: #0056b3; /* Darker blue on hover */
        }
            /* Portfolio Section */
            #portfolio {
            padding: 40px 20px;
            background: #fff; /* Set background to white */
        }

        #portfolio h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #444;
        }

        .portfolio-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            /* margin-bottom: 20px; */
        }

        .portfolio-item {
            flex: 1 1 calc(33.333% - 40px);
            box-sizing: border-box;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            background: #fff; /* Set background to white */
            box-shadow: 0 4px 8px rgba(1, 1, 1, 0.1); /* Add subtle shadow */
            margin-bottom: 25px;
        }

        .portfolio-item img {
            width: 100%;
            height: auto;
            display: block;
        }

        .portfolio-item h3 {
            padding: 15px;
            text-align: center;
            background: #e63946; /* Light gray background for title */
            color: #333;
            margin: 0;
            font-size: 1.25rem;
            transition: background 0.3s ease;
        }

        .portfolio-item:hover {
            transform: scale(1.02); /* Slight zoom effect */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .portfolio-item {
                flex: 1 1 calc(50% - 40px);
            }
        }

        @media (max-width: 768px) {
            .portfolio-item {
                flex: 1 1 calc(100% - 40px);
            }
        }
        * Footer */
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
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

        /* Footer */
    </style>
</head>
<body>
    <section class="hero1" style="background-color: #fff;">
        <div class="hero1-content">
            <h1>Welcome to Our Projects</h1>
            <p>Showcase your projects, highlight your skills, and attract new opportunities. Create, manage, and display your portfolio with ease.</p>
            <a href="#portfolio" class="cta-button">Explore Portfolio</a>
        </div>
    </section>
    
    <section id="portfolio">
        <div class="container">
            <h2>Featured Projects</h2>
            <div class="portfolio-grid">
                <a href="http://ITechAgra.com" class="portfolio-item">
                    <img src="images/kk2.jpg" alt="ITechAgra"><br>
                    <!-- <h2 style="margin-left: 10px;">created by Mohitshakya</h2> -->
                     
                    <h3>ITechAgra</h3>
                </a><br><br>
                <a href="https://ace0317a.github.io/client_travel/" class="portfolio-item">
                    <img src="images/kk3.jpg" alt="Client Travel"><br>
                    <h3>Client Travel</h3>
                </a><br><br>
                <a href="http://dj.000.pe/?i=1" class="portfolio-item">
                    <img src="images/kk4.jpg" alt="Sabcacode"><br>
                    <h3>Sabcacode</h3>
                </a><br><br>
                <a href="http://upraity.000.pe/?i=1" class="portfolio-item">
                    <img src="images/kp2.jpg" alt="Shopping Web"><br>
                    <h3>Shopping Web</h3>
                </a><br><br>
                <a href="https://dj.000.pe/talksta/" class="portfolio-item">
                    <img src="images/kp3.jpg" alt="Talksta"><br>
                    <h3>Talksta</h3>
                </a><br><br>
                <a href="https://mohitshakya.000.pe/chats/" class="portfolio-item">
                    <img src="images/mp.jpg" alt="Chet Web"><br>
                    <h3>Chet Web</h3>
                </a><br><br>
            </div>
        </div>
    </section><br>
    <footer>
    <?php include "footer.php"?>
    </footer>
</body>
</html>