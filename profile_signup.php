<?php
include "db_connect.php";
$successMessage = ''; // Variable to hold success message

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // Collect form data
    $name = $_POST['full-name']; 
    $address = $_POST['address']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $highest_degree = $_POST['highest-degree']; 
    $institution = $_POST['institution']; 
    $year = $_POST['year-of-graduation'];
    $certifications = $_POST['certifications']; 
    $about = $_POST['about']; 
    $skills = $_POST['skills']; 
    $experience = $_POST['languages']; 
    $profesion = $_POST['profesion'];
    $password = $_POST['password']; // Storing plain text password

    // Check if email already exists
    $checkEmailSql = "SELECT * FROM `qualification_sign` WHERE email='$email'";
    $result = mysqli_query($conn, $checkEmailSql);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Email already exists. Please use a different email.');</script>";
    } else {
        // Initialize file upload variable
        $img = '';

        // Handle file upload
        if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
            $targetDirectory = "uploads/";
            $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Check if file already exists
            if (file_exists($targetFile)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if (!in_array($fileType, ["txt", "pdf", "png", "jpg", "jpeg"])) {
                echo "Sorry, only TXT, PDF, PNG, JPG, JPEG files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                    $img = basename($_FILES["fileToUpload"]["name"]);
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }

        // Prepare the SQL statement
        $sql = "INSERT INTO `qualification_sign` (`Full_name`, `email`, `phone`, `Highest Degree`, 
                `Institution`, `Year of Graduation`, `Certifications (comma-separated)`, `About me`, 
                `Skills`, `Experience`, `address`, `img`, `profesion`, `pass`) 
                VALUES ('$name', '$email', '$phone', '$highest_degree', '$institution', '$year', 
                '$certifications', '$about', '$skills', '$experience', '$address', '$img', '$profesion', '$password')";

        $res = mysqli_query($conn, $sql);

        if ($res) {
            $successMessage = "Data and image uploaded successfully."; // Set success message
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Close the connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualification Signup Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(135deg, #a1c4fd 0%, #c2e9fb 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
        }
        .signup-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 800px;
            padding: 40px;
            box-sizing: border-box;
        }
        .hero-section {
            text-align: center;
            margin-bottom: 20px;
        }
        .hero-section h1 {
            font-family: 'Montserrat', sans-serif;
            color: #333;
            font-size: 2.5rem;
        }
        .hero-section p {
            color: #666;
            font-size: 1.2rem;
        }
        fieldset {
            border: none;
            margin-bottom: 20px;
            padding: 0;
        }
        legend {
            font-size: 1.6rem;
            color: #007bff;
            border-bottom: 3px solid #007bff;
            padding-bottom: 8px;
            margin-bottom: 15px;
            font-weight: 600;
        }
        label {
            display: block;
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 8px;
            font-weight: 500;
        }
        input, select, textarea {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ced4da;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        input:focus, select:focus, textarea:focus {
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
        }
        .skills-container {
            position: relative;
        }
        #skills-input {
            width: calc(100% - 24px);
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ced4da;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .skills-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }
        .skill-tag {
            background-color: #007bff;
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: background-color 0.3s;
        }
        .skill-tag button {
            background: transparent;
            border: none;
            color: #ffffff;
            font-size: 1rem;
            cursor: pointer;
        }
        .skill-tag:hover {
            background-color: #0056b3;
        }
        button {
            width: 100%;
            padding: 12px;
            font-size: 1.1rem;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        .link {
            text-align: center;
            margin: 15px 0;
            font-size: 1rem;
        }
        .link a {
            color: #007bff;
            text-decoration: none;
            font-weight: 600;
        }
        .link a:hover {
            text-decoration: underline;
        }
        .file-upload-container {
            margin-bottom: 15px;
        }
        .file-upload-container label {
            font-size: 1.1rem;
            color: #555;
        }
        .file-upload-container input {
            border: none;
            padding: 0;
        }
        </style>
</head>
<body>
    <div class="signup-container">
        <h1>Qualification Signup</h1>
        <form action="" method="post" enctype="multipart/form-data" class="signup-form">
            <fieldset>
                <legend>Personal Information</legend>
                <label for="full-name">Full Name*:</label>
                <input type="text" id="full-name" name="full-name" required>

                <label for="address">Address*:</label>
                <input type="text" name="address" id="address" placeholder="Enter your address, with country" required>

                <label for="email">Email*:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number*:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="password">Create Password*:</label>
                <input type="password" id="password" name="password" required>
            </fieldset>

            <fieldset>
                <legend>Master Qualifications</legend>
                <label for="highest-degree">Highest Degree:</label>
                <input type="text" id="highest-degree" name="highest-degree" placeholder="Enter a Master with years" list="suggestions" >

                <datalist id="suggestions">       
                    <option value="Master of Technology (M.Tech)">
                    <option value="Master of Computer Application (MCA)">
                    <option value="Master of Science (MSc)">
                    <option value="Master of Education (M.Ed.)">
                    <option value="Master of Commerce (M.Com)">
                </datalist>

                <label for="year-of-graduation">Bachelor Degree:</label>
                <input type="text" id="year-of-graduation" name="year-of-graduation" placeholder="Enter a Bachelor with years" list="suggestions1">

                <datalist id="suggestions1">
                    <option value="Bachelor of Technology (B.Tech)">
                    <option value="Bachelor of Computer Application (BCA)">
                    <option value="Bachelor of Science (BSc)">
                    <option value="Bachelor of Arts (BA)">
                    <option value="Bachelor of Commerce (B.Com)">
                    <option value="Diploma">
                </datalist>

                <label for="institution">Institution*:</label>
                <input type="text" id="institution" name="institution" required>

                <label for="certifications">Certifications (comma-separated):</label>
                <input type="text" id="certifications" name="certifications">
            </fieldset>

            <fieldset>
                <legend>About me*</legend>
                <textarea name="about" id="about" rows="4" required></textarea>
            </fieldset>

            <fieldset>
                <legend>Skills*</legend>
                <div class="skills-container">
                    <input type="text" id="skills-input" placeholder="Press Enter to add a skill" name="skills">
                    <div id="skills-tags" class="skills-tags"></div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Profession*</legend>
                <input type="text" id="profesion" name="profesion" placeholder="Enter your profession" required>
            </fieldset>

            <fieldset>
                <legend>Languages*</legend>
                <input type="text" id="languages" name="languages" placeholder="Select languages you're comfortable with" required>
            </fieldset>
            
            <fieldset>
                <legend>Upload File</legend>
                <div class="file-upload-container">
                    <label>Select image:</label>
                    <input type="file" name="fileToUpload" required>
                </div>
            </fieldset>

            <button type="submit">Submit</button>
        </form>
    </div>

    <script>


        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = "<?php echo addslashes($successMessage); ?>"; // Fetch the success message
            if (successMessage) {
                alert(successMessage); // Show alert if there's a success message
            }
        });
    


        document.addEventListener('DOMContentLoaded', function() {
            const skillsInput = document.getElementById('skills-input');
            const skillsTags = document.getElementById('skills-tags');

            skillsInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    addSkill(skillsInput.value);
                    skillsInput.value = '';
                }
            });

            function addSkill(skill) {
                if (skill.trim() !== '') {
                    const tag = document.createElement('div');
                    tag.classList.add('skill-tag');
                    tag.innerHTML = `${skill} <button type="button">&times;</button>`;
                    tag.querySelector('button').addEventListener('click', function() {
                        skillsTags.removeChild(tag);
                    });
                    skillsTags.appendChild(tag);
                }
            }

            const successMessage = "<?php echo addslashes($successMessage); ?>"; // Fetch the success message
            if (successMessage) {
                alert(successMessage); // Show alert if there's a success message
            }
        });
    </script>


</body>
</html>
