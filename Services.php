
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        

/* General Service Card Styling */
/* General Service Card Styling */
.service {
    /* flex: 1; */
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    background: #ecf0f1;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    position: relative;
}

/* Hover Effect for Service Card */
.service:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
}

/* Responsive Design for Service Cards */



    </style>
</head>
<body>
<?php include "header.php"?>
<section id="services">
        <div class="container">
            <h2>Services:</h2>
            <p style="margin-left: 30px; margin-top: 15px; margin-bottom: 25px;">
                Welcome to my services page! As a dedicated freelancer with over 2 years of experience in 
                    website development, I offer a range of 
                    specialized services designed to help you achieve your digital goals. Here’s how I can assist you:  
            </p>
            <h4>1. Custom Website Development:</h4>
                <p style="margin-left: 30px; margin-top: 15px; margin-bottom: 25px;">
                    Your website is often the first impression potential clients have of your business. I create custom websites that are not only visually appealing but also functional and user-friendly. My services include:
                    Responsive Design: Ensuring your website looks great on all devices.
                    Content Management Systems (CMS): Building on platforms like WordPress, Joomla, or Drupal.
                    E-Commerce Solutions: Setting up online stores with platforms such as WooCommerce or Shopify.
                    Performance Optimization: Enhancing load times and overall user experience.</p>

            <h4>2. Search Engine Optimization (SEO):</h4>
                 <p style="margin-left: 30px; margin-top: 15px; margin-bottom: 25px;">
                    Improve your website’s visibility and attract more organic traffic with my SEO services. I offer:

                    On-Page SEO: Optimizing content, meta tags, and site structure.
                    Off-Page SEO: Building quality backlinks and improving domain authority.
                    Keyword Research: Identifying the best keywords to target for your niche.
                    SEO Audits: Analyzing your site to find and fix SEO issues.
                </p>
            <h4>3. Website Maintenance and Support:</h4>
                <p style="margin-left: 30px; margin-top: 15px; margin-bottom: 25px;">
                        Keep your website running smoothly with ongoing support and maintenance. Services include:

                        Regular Updates: Ensuring your website's software and plugins are up-to-date.
                        Bug Fixes: Resolving technical issues promptly.
                        Performance Monitoring: Tracking and improving website performance.
                </p>

            <!-- <h3>App services</h3>
            <p style="margin-left: 30px; margin-top: 15px; margin-bottom: 25px;">
                App services typically encompass a range of functionalities and components designed to support and enhance the operation of applications. These services can vary depending on the platform and the type of app, but they often include:
                </p>
            
            <h5>1. Backend Services: <p style="margin-left: 30px; margin-top: 15px; margin-bottom: 25px;">These handle server-side operations such as data storage, processing, and management. Examples include databases, authentication services, and cloud storage.</p></h5>
            <h5>2. Hosting and Infrastructure:</h5>
            <p style="margin-left: 30px; margin-top: 15px; margin-bottom: 25px;">
            Virtual machines, containers, or serverless compute options to host your application. <br>
            Load balancing and auto-scaling to handle varying </p> -->

            <h3>Why Choose Me?</h3>
                <p style="margin-left: 30px; margin-top: 15px; margin-bottom: 25px;">
                    perience: Over 2 years of hands-on experience in website development and design.
                    Client-Centric Approach: I prioritize understanding your needs and delivering solutions tailored to your vision.
                    Commitment to Quality: Proven track record of delivering high-quality work on time and within budget.
                    Ready to elevate your digital presence? Let’s work together to bring your project to life. <a href="contect.php">Contact me</a> Contact me today to discuss how I can help you achieve your goals!
                </p>

            <div class="services-grid" style="margin-left: 40px;">
                <div class="service">
                    <img src="images/yell.webp" alt="Web Development">
                    <h3>Web Development</h3>
                    <p>Building responsive and engaging websites tailored to your needs.</p>
                </div>
                <div class="service">
                    <img src="images/d1.jpg" alt="Design">
                    <h3>website Design</h3>
                    <p>Creating visually appealing designs that communicate your brand's message.</p>
                </div>
                <div class="service">
                    <img src="images/php.jpg" alt="SEO">
                    <h3>SEO Optimization</h3>
                    <p>Improving your website's visibility and ranking on search engines.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include "footer.php"?>
</body>
</html>