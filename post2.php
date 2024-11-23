<?php
include "db_connect.php";
$sql = "SELECT * FROM post";
$res = mysqli_query($conn, $sql);

if (!$res) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(images/hero-01.webp);
            background-size: cover;
            background-position: center;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .post {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            position: relative;
        }
        .post:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .post-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .post-title {
            font-size: 2em;
            margin: 15px 20px;
            color: #007bff;
        }
        .post-content {
            padding: 0 20px 20px;
        }
        .post-content h4 {
            margin: 10px 0;
            color: #555;
        }
        .post-footer {
            padding: 10px 20px;
            background: #f8f9fa;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #e9ecef;
        }
        .post-date {
            color: #888;
        }
        .view-details-btn {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .view-details-btn:hover {
            background: #0056b3;
        }
        .add-post-button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s;
        }
        .add-post-button:hover {
            background-color: #0056b3;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.8);
        }
        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?><br>
    
    <div class="container">
        <?php while ($row = mysqli_fetch_assoc($res)) {
            $name = htmlspecialchars($row['name']);
            $requirement = htmlspecialchars($row['titel']);
            $description = htmlspecialchars($row['content']);
            $datetime = htmlspecialchars($row['date']);
            $phone = htmlspecialchars($row['phone']);
            $budget = htmlspecialchars($row['budget']);
            // $imagePath = "path/to/your/image/" . htmlspecialchars($row['image']); // Update with the correct path
        ?>
            <div class="post">
                <!-- <img src="<?php echo $imagePath; ?>" alt="Post Image" class="post-image"> -->
                <h1 class="post-title"><?php echo $requirement; ?></h1>
                <div class="post-content">
                    <h4><?php echo $description; ?></h4>
                </div>
                <p style="margin-left: 20px;">Posted by: <?php echo $name; ?></p>
                <p style="margin-left: 20px;">Budget: <?php echo $budget; ?></p>
                <p style="margin-left: 400px; margin-bottom: 20px;">Contact me: <?php echo $phone; ?></p>
                <div class="post-footer">
                    <span class="post-date"><?php echo $datetime; ?></span>
                    <button class="view-details-btn" onclick="openModal('<?php echo addslashes($description); ?>', '<?php echo addslashes($requirement); ?>')">View Details</button>
                </div>
            </div>
        <?php } ?>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="post.php" class="add-post-button">Add Post</a>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modal-title"></h2>
            <p id="modal-description"></p>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <script>
        function openModal(description, title) {
            document.getElementById("modal-description").innerText = description;
            document.getElementById("modal-title").innerText = title;
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
</body>
</html>
