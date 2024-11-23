<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // Collect form data
    $name = $_POST['name']; 
    $title = $_POST['title']; 
    $link = $_POST['link'];
    // $email = $_POST['email']; 
    // $phone = $_POST['phone']; 
    // $highest_degree = $_POST['highest-degree']; 
    // $institution = $_POST['institution']; 
    // $year = $_POST['year-of-graduation'];
    // $certifications = $_POST['certifications']; 
    // $about = $_POST['about']; 
    // $skills = $_POST['skills']; 
    // $experience = $_POST['exp']; 
    // $profesion = $_POST['profesion'];

    // Initialize file upload variable
    $img = '';

    // Handle file upload
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
        $targetDirectory = "uploads22/";
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
                // echo "The file " . $img . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        if (isset($_FILES["fileToUpload"]["error"])) {
            switch ($_FILES["fileToUpload"]["error"]) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    echo "The uploaded file exceeds the maximum allowed size.";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    echo "The uploaded file was only partially uploaded.";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    echo "No file was uploaded.";
                    break;
                default:
                    echo "Unknown upload error.";
                    break;
            }
        }
    }

    // Prepare the SQL statement
    $sql = "INSERT INTO `projects` (`name`, `title`, `img`, `link`) 
            VALUES ('$name', '$title', '$img', '$link')";

    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>