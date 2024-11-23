<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Profile</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
     <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.profile-container {
    max-width: 900px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.profile-header {
    text-align: center;
    padding: 20px;
    background-color: #4a90e2;
    color: #fff;
}

.profile-pic {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    border: 5px solid #fff;
    margin-bottom: 10px;
}

.name {
    margin: 0;
    font-size: 2em;
}

.job-title {
    margin: 5px 0;
    font-size: 1.2em;
    font-weight: lighter;
}

.profile-body {
    padding: 20px;
}

h2 {
    border-bottom: 2px solid #4a90e2;
    padding-bottom: 5px;
    font-size: 1.5em;
    color: #333;
}

.about, .education, .projects, .skills, .certifications, .languages, .awards, .contact {
    margin-bottom: 20px;
}

.bio {
    margin: 15px 0;
    line-height: 1.6;
    color: #666;
}

.education-item, .project-item {
    margin-bottom: 15px;
}

.education-item h3, .project-item h3 {
    margin: 0;
    font-size: 1.2em;
}

.institution, .details {
    font-style: italic;
    color: #666;
}

.details {
    color: #333;
}

.skills ul, .certifications ul, .languages ul, .awards ul {
    list-style-type: none;
    padding: 0;
}

.skills li, .certifications li, .languages li, .awards li {
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 5px;
}

.skills li:hover, .certifications li:hover, .languages li:hover, .awards li:hover {
    background: #e9e9e9;
}

.skills li:before, .certifications li:before, .languages li:before, .awards li:before {
    content: "✔ ";
    color: #4a90e2;
}

.contact ul {
    list-style-type: none;
    padding: 0;
}

.contact a {
    color: #4a90e2;
    text-decoration: none;
}

.contact a:hover {
    text-decoration: underline;
}

     </style>

</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <img src="profile-pic.jpg" alt="Profile Picture" class="profile-pic">
            <h1 class="name">Jane Smith</h1>
            <p class="job-title">Educational Consultant</p>
        </div>
        <div class="profile-body">
            <section class="about">
                <h2>About Me</h2>
                <p class="bio">
                    Hi, I'm Jane Smith, an experienced educational consultant with a strong background in curriculum development
                    and academic advising. I am dedicated to helping students achieve their academic goals and excel in their
                    studies through personalized guidance and support.
                </p>
            </section>
            
            <section class="education">
                <h2>Education</h2>
                <div class="education-item">
                    <h3>Master of Education (M.Ed.)</h3>
                    <p class="institution">University of Education, 2015 - 2017</p>
                    <p class="details">Specialization in Educational Leadership and Administration.</p>
                </div>
                <div class="education-item">
                    <h3>Bachelor of Arts in Education</h3>
                    <p class="institution">College of Learning, 2011 - 2015</p>
                    <p class="details">Concentration in Elementary Education with a minor in Child Psychology.</p>
                </div>
            </section>

            <section class="projects">
                <h2>Projects</h2>
                <div class="project-item">
                    <h3>Interactive Learning Platform</h3>
                    <p class="details">Developed an online platform for interactive learning modules for elementary students. Enhanced engagement through gamified learning experiences.</p>
                </div>
                <div class="project-item">
                    <h3>Educational Curriculum Redesign</h3>
                    <p class="details">Led a team in redesigning the K-12 curriculum to incorporate modern educational standards and technology integration.</p>
                </div>
            </section>

            <section class="skills">
                <h2>Skills</h2>
                <ul>
                    <li>Curriculum Development</li>
                    <li>Academic Advising</li>
                    <li>Educational Research</li>
                    <li>Student Assessment</li>
                    <li>Public Speaking</li>
                </ul>
            </section>

            <section class="certifications">
                <h2>Certifications</h2>
                <ul>
                    <li>Certified Educational Planner (CEP)</li>
                    <li>Professional Educator Certificate</li>
                    <li>Advanced Certification in Child Development</li>
                </ul>
            </section>

            <section class="languages">
                <h2>Languages</h2>
                <ul>
                    <li>English (Fluent)</li>
                    <li>Spanish (Intermediate)</li>
                    <li>French (Basic)</li>
                </ul>
            </section>

            <section class="awards">
                <h2>Awards</h2>
                <ul>
                    <li>Outstanding Educator Award, 2019</li>
                    <li>Excellence in Curriculum Innovation, 2018</li>
                    <li>Top Academic Advisor, 2017</li>
                </ul>
            </section>

            <section class="contact">
                <h2>Contact Information</h2>
                <ul>
                    <li>Email: <a href="mailto:jane.smith@example.com">jane.smith@example.com</a></li>
                    <li>Phone: (123) 456-7890</li>
                    <li>LinkedIn: <a href="https://linkedin.com/in/janesmith" target="_blank">linkedin.com/in/janesmith</a></li>
                    <li>Website: <a href="https://janesmith.com" target="_blank">janesmith.com</a></li>
                    <li>Twitter: <a href="https://twitter.com/janesmith" target="_blank">twitter.com/janesmith</a></li>
                    <li>Facebook: <a href="https://facebook.com/janesmith" target="_blank">facebook.com/janesmith</a></li>
                </ul>
            </section>
        </div>
    </div>
</body>
</html>
