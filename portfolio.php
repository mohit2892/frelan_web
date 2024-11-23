
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        /* General Styles */
        

        /* Home Section */
        #home {
            padding: 20px;
            background: #fff; /* Set background to white */
            font-style: italic;
        }

        #home h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #444;
        }

        .intro p {
            font-size: 1.125rem;
            line-height: 1.6;
            margin-bottom: 20px;
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
    
       
    </style>
</head>
<body>
<?php include "header.php"?>

<section id="home">
    <div class="container">
        <h1>Portfolio</h1>
        <p>Welcome to the Portfolio section of <a href="http://ITjobs.000.pe">ITjobs</a>, where users can showcase their projects and highlight their skills to potential clients. Here, you can upload your completed work to build your professional profile and attract new opportunities. Follow the steps below to create and manage your portfolio:</p>

        <h2>1. Create a New Project</h2>
        <p>To get started, click on the <strong>"Add New Project"</strong> button. You’ll be prompted to fill out the following details:</p>
        <ul>
            <li><strong>Project Title:</strong> Choose a descriptive and engaging title for your project.</li>
            <li><strong>Project Description:</strong> Provide a brief overview of the project, including its objectives, your role, and any challenges you overcame.</li>
            <li><strong>Technologies/Skills Used:</strong> List the key technologies, tools, or skills applied in the project.</li>
            <li><strong>Project Category:</strong> Select relevant categories or tags to help users find your project (e.g., Web Development, Graphic Design, App Development).</li>
            <li><strong>Upload Media:</strong> Add images, videos, or screenshots that illustrate the project’s outcome. You can also provide links to live demos or repositories if applicable.</li>
            <li><strong>Project URL:</strong> If your project is available online, include a link for viewers to explore it further.</li>
        </ul>

        <h2>2. Manage Your Portfolio</h2>
        <p>Once you’ve uploaded your projects, you can manage and update them through your portfolio dashboard:</p>
        <ul>
            <li><strong>Edit Projects:</strong> Make changes to project details or update media as needed.</li>
            <li><strong>Delete Projects:</strong> Remove any projects that you no longer wish to display.</li>
            <li><strong>Reorder Projects:</strong> Arrange your projects to highlight your most impressive or relevant work at the top of your portfolio.</li>
        </ul>

        <h2>3. View Your Portfolio</h2>
        <p>Access your portfolio anytime from your user profile. Here, you’ll find a curated display of all your uploaded projects, organized and presented to showcase your expertise and creativity.</p>

        <h2>4. Showcase Your Work</h2>
        <ul>
            <li><strong>Highlight Achievements:</strong> Use your portfolio to demonstrate your accomplishments and the impact of your work.</li>
            <li><strong>Gather Feedback:</strong> Enable comments or reviews on your projects to receive feedback from clients and peers.</li>
            <li><strong>Connect with Clients:</strong> Let potential clients see your best work and get in touch for new opportunities.</li>
        </ul>

        <h2>5. Explore Other Portfolios</h2>
        <p>Browse portfolios from other users to gain inspiration, network with fellow freelancers, and discover potential collaborators.</p>
        <br>
        <p style="text-align: center;"><strong>Note:</strong> If you encounter any issues or need assistance with your portfolio, please contact our support team at <a href="contect.php">support@ITjobs.000.pe</a>.</p>
        
        
    </div>
    <section class="hero1" style="background-color: #fff;">
        <div class="hero1-content">
            <a href="projects.php" class="cta-button">View-more</a>
        </div>
    </section>
</section>







    <?php include "footer.php"?>


    <!-- <footer>
        <p>&copy; 2024 [Your Website Name]. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer> -->

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
</body>
</html>