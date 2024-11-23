
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* About Section */
        #about {
            background: #f9f9f9;
            padding: 40px 0;
        }

        .about-content {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .profile-img {
            border-radius: 50%;
            width: 170px;
            height: 170px;
            object-fit: cover;
            margin-bottom: 20px;
            margin-right: 20px;
            margin-top: 10px;
            
        }

        .about-text {
            max-width: 700px;
        }

        .about-text p {
            margin-bottom: 15px;
            margin-top: 20px;
            line-height: 1.6;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background: #e63946;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
        }

    </style>
</head>
<body>
<?php include "header.php"?>

<section id="about">
    <div class="container">
        <h2>About Me</h2>
        <div class="about-content">
            <img src="images/p2.avif" alt="Profile Picture" class="profile-img">
            <div class="about-text">
                <!-- <p>Hello! I'm kartik, a passionate and results-driven freelancer specializing in website development . With over 2 years of experience, I help clients transform their ideas into stunning and functional digital solutions.</p> -->
                <p>Welcome to <a href="http://ITjobs.000.pe">ITjobs</a>, your go-to platform for bridging the gap between emerging IT talent and businesses in need of expert web development services. Our mission is to empower IT students and professionals by providing a dynamic space where they can discover valuable job opportunities and collaborate on impactful projects.</p>
                <p>For IT students, we offer a curated selection of job listings and internships that are tailored to your skillset and career aspirations. Our platform helps you gain hands-on experience, build your portfolio, and connect with potential employers who are looking for fresh, innovative talent. Whether you're looking for a part-time job, a freelance gig, or a long-term career opportunity, [Your Website Name] is here to support your professional growth.</p>
                <p>On the other side, businesses and entrepreneurs can post their web-related projects, from website design and development to complex software solutions. Our platform connects you with a pool of skilled developers who are eager to take on new challenges and help bring your ideas to life. By working with our talented freelancers, you can ensure high-quality results and efficient project execution, all while fostering a collaborative relationship that drives mutual success.</p>
                <p>At <a href="http://ITjobs.000.pe">ITjobs</a>, we are committed to creating a thriving ecosystem where IT students can launch their careers and businesses can find the right talent to achieve their goals. Join us today and become part of a vibrant community dedicated to innovation, growth, and excellence in the tech industry.</p>
                <!-- <p>My journey began with a deep fascination for bachelor of computer application, and it has evolved into a fulfilling career where I combine creativity with technical skills. I have a proven track record of delivering high-quality work on time and within budget, thanks to my dedication and commitment to excellence.</p> -->
                <!-- <p>Whether you need a custom website, website design, or effective All types of websites, I offer tailored solutions that meet your specific needs. My approach is collaborative, ensuring that your vision is brought to life with precision and creativity.</p> -->
                <!-- <p>Let's work together to achieve your goals and make your project a success!</p> -->
                <a href="index.php" class="cta-button">Go back</a>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"?>


</body>
</html>