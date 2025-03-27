<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form method="POST">
        Name: <input type="text" name="name" required><br><br>
        Message: <textarea name="message" required></textarea><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $message = htmlspecialchars($_POST['message']);
        
        echo "<h3>Submitted Data:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Message: " . nl2br($message);
    }
    ?>
</body>
</html>
