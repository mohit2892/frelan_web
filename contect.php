
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "header.php"?>

        <div class="container">
            <h2>Contact Me:</h2>
            <form id="contact-form" method="post" action="">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="name">phone number:</label>
                <input type="number" id="num" name="num" min="0" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>

        <?php include "footer.php"?>
    
        <script >

// document.getElementById('contact-form').addEventListener('submit', function(event) {
//     event.preventDefault();
//     alert('Thank you for your message! I will get back to you soon.');
// });


    </script>
    <?php
    include "db_connect.php";
    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $name = $_POST['name'];
        $phone = $_POST['num'];
        $email = $_POST['email'];
        $mess = $_POST['message'];

        $sql = "INSERT INTO `contects` (`name`, `phone_num`, `mess`, `email`) VALUES ('$name', '$phone', '$mess', '$email')";
        $res = mysqli_query($conn, $sql);

        if($res){
            echo "The data is inserted sucsessfully";

        }
        else{
            echo "The data is not inserted";
        }


    }

    ?>
</body>
</html>