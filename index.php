<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: login-signup.php");
}
include 'db.php'; // Include database connection
include "db_connect.php";
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: linear-gradient(135deg, #f5f7fa, #c3cfe2); /* Subtle gradient background */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .hero-section {
      background: url('images/hero-background.jpg') no-repeat center center/cover;
      color: white;
      text-align: center;
      padding: 100px 20px;
      position: relative;
      z-index: 1;
      overflow: hidden;
    }
    .hero-section::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 80%;
      background: rgba(0, 0, 0, 0.4);
      z-index: -1;
    }
    .hero-title {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    .hero-subtitle {
      font-size: 1.8rem;
      font-weight: 300;
      margin-bottom: 40px;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }
    .profile-wrapper {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin-top: -50px; /* Overlap hero section */
    }
    .profile-container {
      background: #fff;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s, box-shadow 0.3s;
      text-align: center;
    }
    .profile-container:hover {
      transform: scale(1.05);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
    }
    .profile-image {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      margin-bottom: 15px;
      border: 4px solid #007BFF;
      transition: border-color 0.3s;
    }
    .profile-image:hover {
      border-color: #0056b3;
    }
    .view-profile-btn {
      display: block;
      text-align: center;
      margin-top: 10px;
      background-color: #007BFF;
      color: #fff;
      border: none;
      padding: 12px 20px;
      cursor: pointer;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s, box-shadow 0.3s;
    }
    .view-profile-btn:hover {
      background-color: #5a9ee7;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }
    .cta-button {
      display: inline-block;
      padding: 12px 24px;
      background: linear-gradient(135deg, #007BFF, #0056b3);
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-size: 1.1rem;
      font-weight: bold;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      border: 2px solid transparent;
    }
    .cta-button:hover {
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
      transform: scale(1.05);
      border-color: #003d7a;
    }
    .cta-button:active {
      background: linear-gradient(135deg, #003d7a, #0056b3);
      transform: scale(1);
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }
    .button-container {
      display: flex;
      justify-content: center;
      margin-top: 40px;
    }
  </style>
  <title>Profiles</title>
</head>
<body>
  <?php include "header.php"; ?>

  <div class="hero-section">
    <h1 class="hero-title">Discover Outstanding Profiles</h1>
    <p class="hero-subtitle">Browse through a selection of top professionals and find the best fit for your needs.</p>
  </div>

  <div class="container">
    <div class="profile-wrapper">
      <?php
      $sql = "SELECT * FROM qualification_sign";
      $res = mysqli_query($conn, $sql);

      if (!$res) {
        die("Query failed: " . mysqli_error($conn));
      }

      while ($row = mysqli_fetch_assoc($res)) {
        $id = $row['sno'];
        $name = htmlspecialchars($row['Full_name']);
        $email = htmlspecialchars($row['email']);
        $profession = htmlspecialchars($row['profesion']);
        $highest_degree = htmlspecialchars($row['Highest Degree']);
      ?>
        <div class="profile-container">
          <img src="http://localhost/app/frilainser/uploads/<?php echo htmlspecialchars($row['img']); ?>" 
              alt="Profile Image" 
              class="profile-image">
          <h4><?php echo $name; ?></h4>
          <div class="post-content">
            <h5 class="post-title" style="font-style: italic;"><?php echo $profession; ?></h5>
            <h5 class="post-title" style="font-style: italic;"><?php echo $highest_degree; ?></h5>
          </div>
          <a href="profile1.php?id=<?php echo $id; ?>" class="view-profile-btn">View Profile</a>
        </div>
      <?php
      }
      ?>
    </div>

    <div class="button-container">
      <a href="profile_signup.php" class="cta-button">Create Your Profile</a>
    </div>
  </div>

  <?php include "footer.php"; ?>

  <!-- Optional JavaScript -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
</body>
</html>
