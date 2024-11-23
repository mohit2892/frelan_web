<?php
include "db_connect.php";
session_start();

// Get user ID from session
$user_id = $_SESSION['sno'] ?? 0;
$email = $_SESSION['email'] ?? 0;

// Get the profile ID from the URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch existing profile data
$sql = "SELECT * FROM qualification_sign WHERE sno = $id"; 
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);

// Check if the profile exists
if (!$row) {
    die('Profile not found.');
}

// Check if the user is the owner of the profile
$is_owner = ($row['user_id'] == $user_id && $row['email'] == $email);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle only if the user is the owner
    if ($is_owner) {
        if (isset($_POST['update'])) {
            // Sanitize input
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $about = mysqli_real_escape_string($conn, $_POST['about']);
            $skills = mysqli_real_escape_string($conn, $_POST['skills']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $experience = mysqli_real_escape_string($conn, $_POST['experience']);
            $profesion = mysqli_real_escape_string($conn, $_POST['profesion']);
            $Master_Degree = mysqli_real_escape_string($conn, $_POST['Master_Degree']);
            $Batchler_degre = mysqli_real_escape_string($conn, $_POST['Batchler_degre']);
            $college = mysqli_real_escape_string($conn, $_POST['college']);

            // Update query
            $sql = "UPDATE qualification_sign SET 
                Full_name = '$name',
                email = '$email',
                `About me` = '$about',
                Skills = '$skills',
                phone = '$phone',
                Experience = '$experience',
                profesion = '$profesion',
                `Highest Degree` = '$Master_Degree',
                `Year of Graduation` = '$Batchler_degre',
                Institution = '$college'
                WHERE sno = $id AND user_id = $user_id"; 

            if (mysqli_query($conn, $sql)) {
                $message = "Profile updated successfully.";
                $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM qualification_sign WHERE sno = $id"));
            } else {
                $message = "Error updating profile: " . mysqli_error($conn);
            }
        } elseif (isset($_POST['delete'])) {
            // Handle delete action
            $delete_sql = "DELETE FROM qualification_sign WHERE sno = $id AND user_id = $user_id";
            if (mysqli_query($conn, $delete_sql)) {
                header("Location: profiles.php"); // Redirect after deletion
                exit();
            } else {
                $message = "Error deleting profile: " . mysqli_error($conn);
            }
        }
    } else {
        $message = "You do not have permission to edit or delete this profile.";
    }
}
?>

<!-- HTML Part (same as before) -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $is_owner ? 'Edit Profile' : 'View Profile'; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            margin-top: 50px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .container h1 {
            margin-bottom: 30px;
            font-size: 2rem;
            color: #343a40;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $is_owner ? 'Edit Profile' : 'Profile'; ?></h1>
        <?php if (isset($message)): ?>
            <div class="alert alert-info"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>
        
        <?php if ($is_owner): ?>
            <form method="post">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($row['Full_name']); ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>">
                </div>
                <div class="form-group">
                    <label for="about">About Me:</label>
                    <textarea class="form-control" id="about" name="about"><?php echo htmlspecialchars($row['About me']); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="skills">Skills (comma separated):</label>
                    <input type="text" class="form-control" id="skills" name="skills" value="<?php echo htmlspecialchars($row['Skills']); ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>">
                </div>
                <div class="form-group">
                    <label for="experience">Languages (semicolon separated):</label>
                    <input type="text" class="form-control" id="experience" name="experience" value="<?php echo htmlspecialchars($row['Experience']); ?>">
                </div>
                <div class="form-group">
                    <label for="profesion">Profession:</label>
                    <input type="text" class="form-control" id="profesion" name="profesion" value="<?php echo htmlspecialchars($row['profesion']); ?>">
                </div>
                <div class="form-group">
                    <label for="Master_Degree">Highest Degree:</label>
                    <input type="text" class="form-control" id="Master_Degree" name="Master_Degree" value="<?php echo htmlspecialchars($row['Highest Degree']); ?>">
                </div>
                <div class="form-group">
                    <label for="Batchler_degre">Year of Graduation:</label>
                    <input type="text" class="form-control" id="Batchler_degre" name="Batchler_degre" value="<?php echo htmlspecialchars($row['Year of Graduation']); ?>">
                </div>
                <div class="form-group">
                    <label for="college">Institution:</label>
                    <input type="text" class="form-control" id="college" name="college" value="<?php echo htmlspecialchars($row['Institution']); ?>">
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update Profile</button>
                <button type="submit" name="delete" class="btn btn-danger">Delete Profile</button>
            </form>
        <?php else: ?>
            <div class="alert alert-warning">You do not have permission to edit or delete this profile.</div>
            <p><strong>Full Name:</strong> <?php echo htmlspecialchars($row['Full_name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?></p>
            <p><strong>About Me:</strong> <?php echo htmlspecialchars($row['About me']); ?></p>
            <p><strong>Skills:</strong> <?php echo htmlspecialchars($row['Skills']); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($row['phone']); ?></p>
            <p><strong>Experience:</strong> <?php echo htmlspecialchars($row['Experience']); ?></p>
            <p><strong>Profession:</strong> <?php echo htmlspecialchars($row['profesion']); ?></p>
            <p><strong>Highest Degree:</strong> <?php echo htmlspecialchars($row['Highest Degree']); ?></p>
            <p><strong>Year of Graduation:</strong> <?php echo htmlspecialchars($row['Year of Graduation']); ?></p>
            <p><strong>Institution:</strong> <?php echo htmlspecialchars($row['Institution']); ?></p>
        <?php endif; ?>
        <a href="index.php" class="d-block mt-3 text-primary">Back to Home</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
