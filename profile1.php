<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: login-signup.php");
}
include 'db.php'; // Include database connection
include "db_connect.php";
?>

<?php
include "db_connect.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT * FROM qualification_sign WHERE sno = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);

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
  $imgPath = "http://localhost/app/frilainser/uploads/" . htmlspecialchars($row['img']);
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
      /* CSS styles here */
      body { font-family: Arial, sans-serif; background-color: #f5f5f5; margin: 0; padding: 0; }
      .profile-container { max-width: 900px; margin: 50px auto; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; }
      .profile-header { text-align: center; padding: 20px; background-color: #4a90e2; color: #fff; }
      .profile-pic { width: 120px; height: 120px; border-radius: 50%; border: 5px solid #fff; margin-bottom: 0; }
      .name { margin: 0; font-size: 2em; }
      .job-title { margin: 5px 0; font-size: 1.2em; font-weight: lighter; }
      .profile-body { padding: 20px; }
      h2 { border-bottom: 2px solid #4a90e2; padding-bottom: 5px; font-size: 1.5em; color: #333; }
      .bio { margin: 15px 0; line-height: 1.6; color: #666; }
      .contact a { color: #4a90e2; text-decoration: none; }
      .contact a:hover { text-decoration: underline; }
      .action-button { padding: 10px 20px; font-size: 1em; border-radius: 5px; color: #fff; background-color: #4a90e2; text-decoration: none; }
      .action-button:hover { background-color: #357ABD; }
      /* Add more styles as necessary */
  </style>
</head>
<body>
  <div class="profile-container">
    <header class="profile-header">
      <img src="<?php echo $imgPath; ?>" class="profile-pic" alt="Profile Picture">
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
          <p class="details">Focus on Educational Systems Engineering...</p>
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
            echo '<li>' . htmlspecialchars(trim($exp)) . '</li>';
          }
          ?>
        </ul>
      </section>

      <section class="profile-contact">
        <h2>Contact Me</h2>
        <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
        <p>Phone: <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
      </section>

      <!-- <section class="profile-actions">
        <h2>Actions</h2>
        <a href="edit_profile.php?id=<?php echo $id; ?>" class="action-button">Edit</a>
      </section> -->
    </div>
  </div>
</body>
</html>
