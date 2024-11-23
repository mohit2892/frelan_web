<?php
include "db_connect.php";

// Set the number of posts per page
$posts_per_page = 5;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($current_page - 1) * $posts_per_page;

// Fetch total posts count
$total_posts_sql = "SELECT COUNT(*) as total FROM post";
$total_posts_res = mysqli_query($conn, $total_posts_sql);
$total_posts_row = mysqli_fetch_assoc($total_posts_res);
$total_posts = $total_posts_row['total'];

// Fetch posts for the current page
$sql = "SELECT * FROM post LIMIT $start, $posts_per_page";
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
    <title>Post Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Basic Styles */
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .post {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }
        .post:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .post-title {
            font-size: 1.5em;
            color: #007bff;
        }
        .view-details-btn {
            background: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .view-details-btn:hover {
            background: #0056b3;
        }
        .pagination {
            text-align: center;
            margin-top: 20px;
        }
        .pagination a {
            background: #007bff;
            color: #fff;
            padding: 8px 12px;
            border-radius: 5px;
            margin: 0 5px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .pagination a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Posts</h1>
        <div class="grid">
            <?php while ($row = mysqli_fetch_assoc($res)) {
                $name = htmlspecialchars($row['name']);
                $title = htmlspecialchars($row['titel']);
                $content = htmlspecialchars($row['content']);
                $datetime = htmlspecialchars($row['date']);
            ?>
                <div class="post">
                    <h2 class="post-title"><?php echo $title; ?></h2>
                    <p><?php echo $content; ?></p>
                    <p><strong>Posted by:</strong> <?php echo $name; ?></p>
                    <p><strong>Date:</strong> <?php echo $datetime; ?></p>
                    <button class="view-details-btn">View Details</button>
                </div>
            <?php } ?>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?php
            $total_pages = ceil($total_posts / $posts_per_page);
            for ($i = 1; $i <= $total_pages; $i++) {
                echo '<a href="?page=' . $i . '">' . $i . '</a>';
            }
            ?>
        </div>
    </div>
</body>
</html>
