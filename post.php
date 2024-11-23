
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


        header nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 5rem 0 2rem;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        #post-job {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        #post-job h2 {
            margin-top: 0;
        }

        #post-job .form-group {
            margin-bottom: 1rem;
        }

        #post-job label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        #post-job input, #post-job textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #post-job textarea {
            resize: vertical;
        }

        #post-job button {
            padding: 0.75rem 1.5rem;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        #post-job button:hover {
            background-color: #0056b3;
        }

        #response-message {
            margin-top: 1rem;
            font-size: 1rem;
            color: #333;
        }
        input[type="text"] {
            width: 200px;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
</style>
</head>
<body style="background-image: url('images/kp1.jpg');">
    <?php include "header.php"?>
    
<div class="container" >
    
            <section id="post-job">
                <h2>Submit work Details</h2>
                <form id="post-job-form" method="post">
                <div class="form-group">
                        <label for="contact-name">Name:</label>
                        <input type="text" id="contactname" name="contact-name" required>
                    </div>
                    <div class="form-group">
                        <label for="job-title"> Requirement </label>
                        <input type="text" id="autocomplete" name="autocomplete" list="suggestions">

                        <datalist id="suggestions">
                            <option value="Front end development ">
                            <option value="Back end development">
                            <option value="Web development">
                            <option value="Web designing">
                            <option value="Domain hosting">

                        </datalist>
                    
                    </div>
                    <div class="form-group">
                        <label for="job-description">Description:</label>
                        <textarea id="job-description" name="job-description" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="min-budget">Your Budget:</label>
                        <input type="number" id="min-budget" name="min-budget"  min="1000" step="100" required>
                    </div>
                    <!-- <div class="form-group">
                        <label for="max-budget">Max Budget:</label>
                        <input type="number" id="max-budget" name="max-budget" min="1000" step="100" required>
                    </div> -->
                    <div class="form-group">
                        <label for="contact-email">Contact number:</label>
                        <input type="number" id="contact-num" name="contact-num" required>
                    </div>
                   
                   
                    <button type="submit">Submit</button>
                </form>
                <div id="response-message"></div>
            </section>
        </div>
       
        <?php include "footer.php"?>
        
        <?php 
        
        include "db_connect.php";
        if($_SERVER["REQUEST_METHOD"]=='POST'){
            $name = $_POST['contact-name'];
            $title = $_POST['autocomplete'];
            $mess = $_POST['job-description'];
            $budget = $_POST['min-budget'];
            $phone = $_POST['contact-num'];
            // $email = $_POST['email'];
            

            $sql = "INSERT INTO `post` (`titel`, `content`, `name`, `phone`, `budget`) VALUES ('$title', '$mess','$name', '$phone','$budget')";
            $res = mysqli_query($conn, $sql);

            if($res){
                echo "The post is inserted sucsessfully";

            }
            else{
                echo "The post is not inserted";
            }


        }

    ?>

        
</body>
</html>