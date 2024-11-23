
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Form</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
            padding-top: 50px;
            margin: 0;
            color: #333;
            padding-bottom: 50px;
        }

        .container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px;
            text-align: center;
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            margin-bottom: 20px;
            font-size: 30px;
            color: #333;
            font-weight: 700;
            letter-spacing: 1px;
        }

        label {
            display: block;
            margin-bottom: 12px;
            font-weight: 500;
            color: #555;
            text-align: left;
        }

        input[type="text"],
        input[type="file"] {
            width: calc(100% - 22px);
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="file"]:focus {
            border-color: #2575fc;
            outline: none;
            box-shadow: 0 0 8px rgba(37, 117, 252, 0.4);
        }

        button {
            background-color: #2575fc;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #1d3b6f;
            transform: translateY(-2px);
        }

        .message {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            text-align: center;
        }

        .message h2 {
            font-size: 24px;
            color: #2575fc;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            margin-top: 20px;
            transition: transform 0.3s ease;
        }

        img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload Your Information</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="link">Link:</label>
            <input type="text" id="link" name="link" required>
            
            <label>Select image:</label>
            <input type="file" name="fileToUpload" required>

            <button type="submit">Submit</button>
        </form>

        <!-- --PHP-CODE-- -->

        <?php
include "db_connect.php";

include "connection.php";
?>



    </div>
</body>
</html>
