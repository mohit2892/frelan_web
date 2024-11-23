<?php
include "db_connect.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM qualification_sign WHERE sno = $id";
$res = mysqli_query($conn, $sql);

if (!$res) {
  die("Query failed: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($res);

if ($row) {
  $name = htmlspecialchars($row['Full_name']);
  $email = htmlspecialchars($row['email']);
  $about = htmlspecialchars($row['About me']);
  $skills = htmlspecialchars($row['Skills']);
  $phone = htmlspecialchars($row['phone']);
  $experience = htmlspecialchars($row['Experience']);
  $profesion = htmlspecialchars($row['profesion']);
  $Master_Degree = htmlspecialchars($row['Highest Degree']);
  $Batchler_degre = htmlspecialchars($row['Year of Graduation']);
  $college = htmlspecialchars($row['Institution']);
} else {
  die('Profile not found');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
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
          margin-bottom: 0px;
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

      .profile-actions {
          text-align: center;
          margin-top: 20px;
      }

      .action-button {
          display: inline-block;
          margin: 0 10px;
          padding: 10px 20px;
          font-size: 1em;
          text-decoration: none;
          border-radius: 5px;
          color: #fff;
          background-color: #4a90e2;
          border: none;
          transition: background-color 0.3s ease;
      }

      .action-button:hover {
          background-color: #357ABD;
      }
  </style>
</head>
<body>
  <div class="profile-container">
    <header class="profile-header">
      <img src="http://localhost/app/frilainser/uploads/<?php echo htmlspecialchars($row['img']); ?>" class="profile-pic">
      <h1><?php echo $name; ?></h1>
      <p style="font-style: oblique; font-size:20px;"><?php echo $profesion; ?></p>
    </header>

    <div class="profile-body">
      <section class="about">
        <h2>About Me</h2>
        <p><?php echo nl2br($about); ?></p>
      </section>

      <section class="education">
        <h2>Education</h2>
        <div class="education-item">
          <h3><?php echo $Master_Degree; ?></h3>
          <p class="institution"><?php echo $college; ?></p>
          <p class="details">
            With a focus on Educational Systems Engineering, my background centers on developing and optimizing educational frameworks and technologies. By leveraging systematic approaches, I enhance learning efficiency and effectiveness. This involves designing and implementing solutions that integrate technical innovation to create impactful educational systems. My expertise enables me to address complex challenges in education through engineering principles, ensuring that solutions are both technically sound and aligned with best practices in educational design.
          </p>
        </div>
        <div class="education-item">
          <h3><?php echo $Batchler_degre; ?></h3>
        </div>
      </section>

      <section class="skills">
        <h2>Skills</h2>
        <ul>
          <?php
          $skillsArray = explode(',', $skills);
          foreach ($skillsArray as $skill) {
            echo '<li>' . htmlspecialchars(trim($skill)) . '</li>';
          }
          ?>
        </ul>
      </section>

      <section class="languages">
        <h2>Languages</h2>
        <ul>
          <?php
          $experienceArray = explode(';', $experience);
          foreach ($experienceArray as $exp) {
            echo '<li>' . htmlspecialchars($exp) . '</li>';
          }
          ?>
        </ul>
      </section>

      <section class="profile-contact">
        <h2>Contact Me</h2>
        <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
        <p>Phone: <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
      </section>

      <section class="profile-actions">
        <h2>Actions</h2>
        <a href="edit_profile.php?id=<?php echo $id; ?>" class="action-button">Edit</a>
        <a href="delet.php?id=<?php echo $id; ?>" class="action-button" onclick="return confirm('Are you sure you want to delete this profile?');">Delete</a>
      </section>
    </div>
  </div>
</body>
</html>
