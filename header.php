<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" href="images/p2.avif" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header {
            position: relative;
            background: linear-gradient(to right, rgba(2, 45, 37, 0.8), rgba(0, 129, 167, 0.8));
            color: white;
            padding: 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .menu-toggle {
            display: none;
            background: #022d25;
            color: white;
            border: none;
            padding: 10px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            background: transparent;
            width: 100%;
        }

        nav ul li {
            margin: 0;
        }

        nav ul li a {
            display: block;
            padding: 15px 20px;
            color: white;
            text-decoration: none;
            text-align: center;
            transition: background 0.3s, color 0.3s;
        }

        nav ul li a:hover {
            background: #005f6b;
            color: #e0f7fa;
            border-radius: 5px;
        }

        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-height: 400px;
            background: url('images/hero-background.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 40px 20px;
            position: relative;
            z-index: 1;
        }

        .hero-content {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }

        .hero img {
            max-width: 150px; /* Adjust for smaller screens */
            height: auto;
            border-radius: 50%;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background: #0081a7;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .cta-button:hover {
            background: #005f6b;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            nav ul {
                display: none; /* Hide menu by default */
                flex-direction: column;
                width: 100%;
            }

            nav ul.show {
                display: flex;
            }

            .menu-toggle {
                display: block;
            }

            nav ul li a {
                padding: 10px;
                border-bottom: 1px solid #005f6b;
            }

            .hero {
                min-height: 200px;
                padding: 10px;
            }

            .hero img {
                max-width: 100px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 1.5rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <button class="menu-toggle" onclick="toggleMenu()">☰</button>
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="post2.php">Posts</a></li>
                <li><a href="Services.php">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="contect.php">Contact</a></li>
                <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        My Account
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="profile_login.php">Profile</a>
        <a class="dropdown-item" href="logout.php">Logout</a>
    </div>
</li>

            </ul>
        </nav>
        <div class="hero">
            <div class="hero-content">
                <img src="images/p2.avif" alt="Portfolio Showcase">
                <h1 style="font-style: italic;">Hire the best freelancers for any IT job, online.</h1>
                <p style="font-style: italic;">Your Go-To Freelancer for website development</p>
                <p style="font-style: italic;">Transforming ideas into reality with creative solutions and technical expertise.</p>
                <br>
                <a href="contect.php" class="cta-button">Contact</a>
            </div>
        </div>
    </header>
    <script>
        function toggleMenu() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('show');
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

</body>
</html>
